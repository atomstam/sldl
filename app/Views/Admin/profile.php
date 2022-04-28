<!--App-Content-->
<div class="app-content  my-3 my-md-5">
    <div class="side-app">

        <!--Page-Header-->
        <div class="page-header">
            <h4 class="page-title">Welcome back, <?= session()->get('firstName'); ?></h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="<?= base_url('/admin/listUsers'); ?>">ผู้ใช้ทั้งหมด</a></li>
                <li class="breadcrumb-item active" aria-current="page">เพิ่มผู้ใช้</li>
            </ol>
        </div>
        <!--/Page-Header-->

        <div class="row">
            <div class="col-xl-12">
                <div class="card m-b-20">
                    <div class="card-header">
                        <h3 class="card-title">แก้ไขข้อมูลส่วนตัว [Edit Profile]</h3>
                    </div>
                    <div class="card-body mb-0">

                        <?php if(isset($validation)): ?>
                            <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                        <?php endif ?>

                        <?php if(session()->getFlashdata('msg')) : ?>
                            <div class="alert alert-success"><?= session()->getFlashdata('msg'); ?></div>
                        <?php endif ?>

                        <form class="form-horizontal" method="post" action="<?= base_url('/admin/updateProfile'); ?>" name="submit-form-updateProfile" id="submit-form-updateProfile">
                            <?= csrf_field(); ?>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Role</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control select2" name="role" id="role" disabled>
                                            <option value="" selected>เลือก</option>
                                            <option value="Admin" <?php if($profile['role']=='Admin') : echo 'selected'; endif ?>>Admin</option>
                                            <option value="Obec" <?php if($profile['role']=='Obec') : echo 'selected'; endif ?>>Obec</option>
                                            <option value="Area" <?php if($profile['role']=='Area') : echo 'selected'; endif ?>>Area</option>
                                            <option value="Teacher" <?php if($profile['role']=='Teacher') : echo 'selected'; endif ?>>Teacher</option>
                                            <option value="Student" <?php if($profile['role']=='Student') : echo 'selected'; endif ?>>Student</option>
                                            <option value="Population" <?php if($profile['role']=='Population') : echo 'selected'; endif ?>>Population</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">คำนำหน้า <i>*</i></label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control select2" name="prefix" id="prefix">
                                            <option value="" selected>เลือก</option>
                                            <option value="นาย" <?php if($profile['prefix']=='นาย') : echo 'selected'; endif ?>>นาย</option>
                                            <option value="นาง" <?php if($profile['prefix']=='นาง') : echo 'selected'; endif ?>>นาง</option>
                                            <option value="นางสาว" <?php if($profile['prefix']=='นางสาว') : echo 'selected'; endif ?>>นางสาว</option>
                                            <option value="เด็กชาย" <?php if($profile['prefix']=='เด็กชาย') : echo 'selected'; endif ?>>เด็กชาย</option>
                                            <option value="เด็กหญิง" <?php if($profile['prefix']=='เด็กหญิง') : echo 'selected'; endif ?>>เด็กหญิง</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label" for="firstName">ชื่อ <i>*</i></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="firstName" class="form-control" id="firstName" value="<?= $profile['firstName']; ?>" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label" for="lastName">นามสกุล <i>*</i></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="lastName" class="form-control" id="lastName" value="<?= $profile['lastName']; ?>" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label" for="email">อีเมล</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="email" name="email" class="form-control" id="email" value="<?= $profile['email']; ?>" placeholder="" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label" for="phone">โทรศัพท์ <i>*</i></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="phone" class="form-control" id="phone" value="<?= $profile['phone']; ?>" placeholder="" data-inputmask-mask="9999999999">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label" for="idCard">เลขบัตรประชาชน <i>*</i></label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="idCard" class="form-control" id="idCard" value="<?= $profile['idCard']; ?>" placeholder="" data-inputmask-mask="9999999999999">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Status</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control select2" name="status" id="status" disabled>
                                            <option value="1" <?php if($profile['status']=='1') : echo 'selected'; endif ?>>เปิดใช้งาน</option>
                                            <option value="0" <?php if($profile['status']=='0') : echo 'selected'; endif ?>>ปิดใช้งาน</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group mb-0 row justify-content-end">
                                <div class="col-md-9 float-end">
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">บันทึก</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>
			
