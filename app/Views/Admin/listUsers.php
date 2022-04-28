<!--App-Content-->
<div class="app-content  my-3 my-md-5">
    <div class="side-app">

        <!--Page-Header-->
        <div class="page-header">
            <h4 class="page-title">Welcome back, <?= session()->get('firstName'); ?></h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url('/admin'); ?>">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">ผู้ใช้งาน</li>
            </ol>
        </div>
        <!--/Page-Header-->

        <div class="row"> 
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Users ในระบบ</h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <a href="<?= base_url('/admin/createUser'); ?>" class="btn btn-primary">เพิ่ม User</a>
                        </div>
                        <br>
                        <?php if(session()->getFlashdata('msg')) : ?>
                            <div class="alert alert-success"><?= session()->getFlashdata('msg'); ?></div>
                        <?php endif ?>
                        <div class="table-responsive mb-0 ">
                            <table class="table-listUsers table table-striped table-bordered table-hover text-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ชื่อ-นามสกุล</th>
                                        <th>role</th>
                                        <th>status</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if($users) : ?>
                                        <?php foreach ($users as $key => $user_item) : ?>
                                            <tr>
                                            <td><?= $key+1; ?></td>
                                            <td><?= $user_item['prefix'].$user_item['firstName'].' '.$user_item['lastName']; ?></td>
                                            <td>
                                                <a href="javascript:void(0)" class="btn btn-success btn-sm"><?= $user_item['role']; ?></a>
                                            </td>
                                            <td class="font-weight-semibold fs-16"><?php if($user_item['status'] == '1') : echo 'Active' ; else : echo 'Waiting...'; endif ?></td>
                                            <td>
                                                <a href="<?= base_url('/admin/editUser/'.$user_item['ID']); ?>" class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fe fe-edit-2 fs-16"></i></a>
                                                <a href="<?= base_url('/admin/deleteUser/'.$user_item['ID']); ?>" class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fe fe-trash fs-16"></i></a>
                                            </td>
                                        </tr>
                                        <?php endforeach ?>
                                    <?php endif ?>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
			
