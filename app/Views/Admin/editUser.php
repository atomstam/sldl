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
                        <h3 class="card-title">แก้ไขข้อมูลผู้ใช้ [Update User]</h3>
                    </div>
                    <div class="card-body mb-0">
                        <?php if(isset($validation)): ?>
                            <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
                        <?php endif ?>

                        <form class="form-horizontal" method="post" action="<?= base_url('/admin/updateUser'); ?>" name="submit-form-updateUser" id="submit-form-updateUser">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="id" value="<?= $user_obj['ID']; ?>" />
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Role</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control select2" name="role" id="role">
                                            <option value="" selected>เลือก</option>
                                            <option value="Admin" <?php if($user_obj['role']=='Admin') : echo 'selected'; endif ?>>Admin</option>
                                            <option value="Obec" <?php if($user_obj['role']=='Obec') : echo 'selected'; endif ?>>Obec</option>
                                            <option value="Area" <?php if($user_obj['role']=='Area') : echo 'selected'; endif ?>>Area</option>
                                            <option value="Teacher" <?php if($user_obj['role']=='Teacher') : echo 'selected'; endif ?>>Teacher</option>
                                            <option value="Student" <?php if($user_obj['role']=='Student') : echo 'selected'; endif ?>>Student</option>
                                            <option value="Population" <?php if($user_obj['role']=='Population') : echo 'selected'; endif ?>>Population</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">คำนำหน้า</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control select2" name="prefix" id="prefix">
                                            <option value="" selected>เลือก</option>
                                            <option value="นาย" <?php if($user_obj['prefix']=='นาย') : echo 'selected'; endif ?>>นาย</option>
                                            <option value="นาง" <?php if($user_obj['prefix']=='นาง') : echo 'selected'; endif ?>>นาง</option>
                                            <option value="นางสาว" <?php if($user_obj['prefix']=='นางสาว') : echo 'selected'; endif ?>>นางสาว</option>
                                            <option value="เด็กชาย" <?php if($user_obj['prefix']=='เด็กชาย') : echo 'selected'; endif ?>>เด็กชาย</option>
                                            <option value="เด็กหญิง" <?php if($user_obj['prefix']=='เด็กหญิง') : echo 'selected'; endif ?>>เด็กหญิง</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label" for="firstName">ชื่อ</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="firstName" class="form-control" id="firstName" value="<?= $user_obj['firstName']; ?>" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label" for="lastName">นามสกุล</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="lastName" class="form-control" id="lastName" value="<?= $user_obj['lastName']; ?>" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label" for="email">อีเมล</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="email" name="email" class="form-control" id="email" value="<?= $user_obj['email']; ?>" placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label" for="phone">โทรศัพท์</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="phone" class="form-control" id="phone" value="<?= $user_obj['phone']; ?>" placeholder="" data-inputmask-mask="9999999999">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label" for="idCard">เลขบัตรประชาชน</label>
                                    </div>
                                    <div class="col-md-9">
                                        <input type="text" name="idCard" class="form-control" id="idCard" value="<?= $user_obj['idCard']; ?>" placeholder="" data-inputmask-mask="9999999999999">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-md-3">
                                        <label class="form-label">Status</label>
                                    </div>
                                    <div class="col-md-9">
                                        <select class="form-control select2" name="status" id="status">
                                            <option value="1" <?php if($user_obj['status']=='1') : echo 'selected'; endif ?>>เปิดใช้งาน</option>
                                            <option value="0" <?php if($user_obj['status']=='0') : echo 'selected'; endif ?>>ปิดใช้งาน</option>
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
			
