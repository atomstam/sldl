<div class="col-xl-3 col-lg-12 col-md-12">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Dashboard, <?= session()->get('firstName'); ?></h3>
        </div>
        <div class="card-body text-center item-user border-bottom-0">
            <div class="profile-pic">
                <div class="profile-pic-img">
                    <span class="bg-success dots" data-bs-toggle="tooltip" data-bs-placement="top" title="online"></span>
                    <img src="<?= base_url(); ?>/assets/images/users/user-profile.png" class="brround" alt="user">
                </div>
                <a href="userprofile.html" class="text-dark">
                    <h4 class="mt-3 mb-0 font-weight-semibold"><?= session()->get('prefix').session()->get('firstName').' '.session()->get('lastName'); ?></h4>
                </a>
                <p class="mb-0 mt-1 text-muted">Logged in : <?= session()->get('role'); ?></p>
                <div class="wideget-user-info my-dash-1">
                    <div class="wideget-user-icons mt-2">
                        <a href="javascript:void(0)" class="mt-0"><i class="fa fa-facebook"></i></a>
                        <a href="javascript:void(0)" class=""><i class="fa fa-twitter"></i></a>
                        <a href="javascript:void(0)" class=""><i class="fa fa-google"></i></a>
                        <a href="javascript:void(0)" class=""><i class="fa fa-dribbble"></i></a>
                        <a href="javascript:void(0)" class=""><i class="fa fa-share"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <aside class="app-sidebar doc-sidebar my-dash">
            <div class="app-sidebar__user clearfix">
                <ul class="side-menu">
                    <li>
                        <a class="side-menu__item" href="<?= base_url('teacher'); ?>"><i class="side-menu__icon fe fe-edit"></i><span class="side-menu__label">โปรไฟล์ของฉัน</span></a>
                    </li>
                    <li>
                        <a class="side-menu__item" href="<?= base_url('teacher/myCourseRegisted'); ?>"><i class="side-menu__icon fe fe-layers"></i><span class="side-menu__label">หลักสูตรที่ลงทะเบียน</span></a>
                    </li>
                    <li>
                        <a class="side-menu__item" href="#"><i class="side-menu__icon fe fe-heart"></i><span class="side-menu__label">ติดดาว</span></a>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item slide-show" href="javascript:void(0)"><i class="side-menu__icon fe fe-folder"></i><span class="side-menu__label">จัดการหลักสูตรของฉัน</span><i class="angle fa fa-angle-right"></i></a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="<?= base_url('teacher/manageMyCourses'); ?>"><i class="fa fa-angle-right me-2"></i> จัดการหลักสูตร</a></li>
                            <li class="sub-slide">
                                <a class="side-menu__item border-top-0 slide-item sub-slide-show" href="javascript:void(0)"><span class="side-menu__label"><i class="fa fa-angle-right me-2"></i> Managed </span> <i class="sub-angle fa fa-angle-right"></i></a>
                                <ul class="child-sub-menu ">
                                    <li><a class="slide-item" href="javascript:void(0)"><i class="fa fa-angle-right me-2"></i> Managed Courses 01</a></li>
                                    <li><a class="slide-item" href="javascript:void(0)"><i class="fa fa-angle-right me-2"></i> Managed Courses 02</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="side-menu__item" href="payments.html"><i class="side-menu__icon fe fe-credit-card"></i><span class="side-menu__label">Payments</span></a>
                    </li>
                    <li>
                        <a class="side-menu__item" href="orders.html"><i class="side-menu__icon fe fe-shopping-bag"></i><span class="side-menu__label">My Orders</span></a>
                    </li>
                    <li>
                        <a class="side-menu__item" href="settings.html"><i class="side-menu__icon fe fe-settings"></i><span class="side-menu__label">Settings </span></a>
                    </li>
                    <li>
                        <a class="side-menu__item" href="login.html"><i class="side-menu__icon fe fe-power"></i><span class="side-menu__label">Logout</span></a>
                    </li>
                </ul>
            </div>
        </aside>
    </div>
    <div class="card my-select">
        <div class="card-header">
            <h3 class="card-title">Search Classes</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <input type="text" class="form-control" id="text" placeholder="What are you looking for?">
            </div>
            <div class="form-group">
                <select name="country" id="select-countries" class="form-control form-select select2-show-search">
                    <option value="1" selected="">All Categories</option>
                    <option value="2">Web Security</option>
                    <option value="3">Offline</option>
                    <option value="4">Business</option>
                    <option value="5">Online</option>
                    <option value="6">Data Science</option>
                    <option value="7">Driving</option>
                    <option value="8">Education</option>
                    <option value="9">Electronics</option>
                    <option value="10">Pets &amp; Offline</option>
                    <option value="11">Computer</option>
                    <option value="12">Mobile</option>
                    <option value="13">Events</option>
                    <option value="14">Python</option>
                    <option value="15">Security Hacking</option>
                </select>
            </div>
            <div class="">
                <a href="javascript:void(0)" class="btn  btn-primary">Search</a>
            </div>
        </div>
    </div>
    <div class="card mb-xl-0">
        <div class="card-header">
            <h3 class="card-title">Safety Tips For Buyers</h3>
        </div>
        <div class="card-body">
            <ul class="list-unstyled widget-spec  mb-0">
                <li class="">
                    <i class="fa fa-plus-circle text-success" aria-hidden="true"></i> Meet Seller at public Place
                </li>
                <li class="">
                    <i class="fa fa-plus-circle text-success" aria-hidden="true"></i> Check item before you buy
                </li>
                <li class="">
                    <i class="fa fa-plus-circle text-success" aria-hidden="true"></i> Pay only after collecting item
                </li>
                <li class="ms-5 mb-0 mt-3">
                    <a href="javascript:void(0)" class="text-primary"> View more..</a>
                </li>
            </ul>
        </div>
    </div>
</div>