<!--App-Content-->
<div class="app-content  my-3 my-md-5">
    <div class="side-app">

        <!--Page-Header-->
        <div class="page-header">
            <h4 class="page-title">Welcome back, <?= session()->get('firstName'); ?></h4>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">หน้าหลัก</li>
            </ol>
        </div>
        <!--/Page-Header-->

        <div class="row row-cards">
            <div class="col-sm-12 col-lg-6 col-xl-3">
                <div class="card ">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8 text-start">
                                <h5 class="mb-3">Total Students</h5>
                                <h2 class="mb-2 font-weight-bold text-primary">1,55,459</h2>
                                <p class="mb-0"><span class="text-green"><i class="fa fa-arrow-up text-green me-1"> </i>23%</span> in Last Year</p>
                            </div>
                            <div class="text-end counter-2 my-auto col-4">
                                <div class="counter-icon1 bg-primary">
                                    <i class="icon icon-people text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8 text-start">
                                <h5 class="mb-3">New Courses</h5>
                                <h2 class="mb-2 font-weight-bold text-warning">103</h2>
                                <p class="mb-0"><span class="text-red"><i class="fa fa-arrow-down text-red me-1"></i> 0.67%</span> in Last Year</p>
                            </div>
                            <div class="text-end counter-2 my-auto col-4">
                                <div class="counter-icon1 bg-warning">
                                    <i class="icon icon-book-open text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8 text-start">
                                <h5 class="mb-3">Total graduates</h5>
                                <h2 class="mb-2 font-weight-bold text-secondary">35,256</h2>
                                <p class="mb-0"><span class="text-success"><i class="fa fa-arrow-up text-success me-1"> </i>23%</span> in Last Year</p>
                            </div>
                            <div class="text-end counter-2 my-auto col-4">
                                <div class="counter-icon1 bg-secondary">
                                    <i class="icon icon-graduation text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-lg-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-8 text-start">
                                <h5 class="mb-3">New Students</h5>
                                <h2 class="mb-2 font-weight-bold text-info">55,250</h2>
                                <p class="mb-0"><span class="text-danger"><i class="fa fa-arrow-down text-danger me-1"> </i>5.25%</span> in Last Year</p>
                            </div>
                            <div class="text-end counter-2 my-auto col-4">
                                <div class="counter-icon1 bg-info">
                                    <i class="icon icon-user-follow text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-deck">
            <div class="col-xl-8 col-lg-12 col-md-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h3 class="card-title">Courses Overview</h3>
                    </div>
                    <div class="card-body">
                        <div class="sales-chart text-center">
                            <span class=" me-5"><span class="dot-label mycanvs1 bg-primary"></span>This Month</span>
                            <span class=""><span class="dot-label mycanvs2 bg-secondary"></span>Last Month</span>
                        </div>
                        <div class="chart-wrapper pt-5">
                            <canvas id="sales-summary"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Students Progress</h3>
                    </div>
                    <div class="card-body p-0" id="stud-scroll">
                        <div class="table-responsive">
                            <table class="table mb-0  card-table table-vcenter text-nowrap" >
                                <tr class="border-bottom">
                                    <td class="w-40 stud">
                                        <div class="d-flex">
                                            <img src="<?=base_url()?>/assets/images/users/female/8.jpg" alt="" class="me-3">
                                            <div class="">
                                                <a href="javascript:void(0)" class="text-dark font-weight-bold fs-16">Jacobin</a>
                                                <p class="text-muted mb-1">Web-Design</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="w-60">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success w-45"></div>
                                        </div>
                                    </td>
                                    <td class="w-10 text-end"><span class="badge badge-success">45%</span></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td class="w-40 stud">
                                        <div class="d-flex">
                                            <img src="<?=base_url()?>/assets/images/users/female/10.jpg" alt="" class="me-3">
                                            <div class="">
                                                <a href="javascript:void(0)" class="text-dark font-weight-bold fs-16">Julia Hardacre</a>
                                                <p class="text-muted mb-1">WebDevelopment</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="w-60">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-75"></div>
                                        </div>
                                    </td>
                                    <td class="w-10 text-end"><span class="badge badge-primary">75%</span></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td class="w-40 stud">
                                        <div class="d-flex">
                                            <img src="<?=base_url()?>/assets/images/users/male/8.jpg" alt="" class="me-3">
                                            <div class="">
                                                <a href="javascript:void(0)" class="text-dark font-weight-bold fs-16">John Joya</a>
                                                <p class="text-muted mb-1">3D Animation</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="w-60">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info w-60"></div>
                                        </div>
                                    </td>
                                    <td class="w-10 text-end"><span class="badge badge-info">60%</span></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td class="w-40 stud">
                                        <div class="d-flex">
                                            <img src="<?=base_url()?>/assets/images/users/female/12.jpg" alt="" class="me-3">
                                            <div class="">
                                                <a href="javascript:void(0)" class="text-dark font-weight-bold fs-16">Lilly Potter</a>
                                                <p class="text-muted mb-1">App Developer</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="w-60">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-warning w-85"></div>
                                        </div>
                                    </td>
                                    <td class="w-10 text-end"><span class="badge badge-warning">85%</span></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td class="w-40 stud">
                                        <div class="d-flex">
                                            <img src="<?=base_url()?>/assets/images/users/female/2.jpg" alt="" class="me-3">
                                            <div class="">
                                                <a href="javascript:void(0)" class="text-dark font-weight-bold fs-16">Pedro Cox</a>
                                                <p class="text-muted mb-1">Beautician</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="w-60">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-primary w-75"></div>
                                        </div>
                                    </td>
                                    <td class="w-10 text-end"><span class="badge badge-primary">75%</span></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td class="w-40 stud">
                                        <div class="d-flex">
                                            <img src="<?=base_url()?>/assets/images/users/male/2.jpg" alt="" class="me-3">
                                            <div class="">
                                                <a href="javascript:void(0)" class="text-dark font-weight-bold fs-16">Irene Hunter</a>
                                                <p class="text-muted mb-1">Photography </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="w-60">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-25"></div>
                                        </div>
                                    </td>
                                    <td class="w-10 text-end"><span class="badge badge-secondary">25%</span></td>
                                </tr>
                                <tr class="border-bottom">
                                    <td class="w-40 stud">
                                        <div class="d-flex">
                                            <img src="<?=base_url()?>/assets/images/users/male/5.jpg" alt="" class="me-3">
                                            <div class="">
                                                <a href="javascript:void(0)" class="text-dark font-weight-bold fs-16">Vera Guzman</a>
                                                <p class="text-muted mb-1">Business </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="w-60">
                                        <div class="progress progress-sm">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-info w-50"></div>
                                        </div>
                                    </td>
                                    <td class="w-10 text-end"><span class="badge badge-info">50%</span></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-4">
                <div class="card">
                    <div class="card-header bg-transparent">
                        <h3 class="card-title">Social Followers</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12 col-lg-12 col-xl-12">
                                <div class="card twitter-icon">
                                    <div class="card-body p-4">
                                        <div class="d-flex">
                                            <div class="task-1">
                                                <i class="fa fa-twitter"></i>
                                            </div>
                                            <div class="my-auto">
                                                <small class="social1-title mb-2 h6">Twitter</small>
                                                <h4 class="text-xxl mb-0 social-content">+21,754 followers</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-12 col-xl-12">
                                <div class="card Google-icon">
                                    <div class="card-body p-4">
                                        <div class="d-flex">
                                            <div class="task-1">
                                                <i class="fa fa-google"></i>
                                            </div>
                                            <div class="my-auto">
                                                <small class="social1-title mb-2 h6">Google</small>
                                                <h4 class="text-xxl mb-0 social-content">+3,256 followers</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-12 col-xl-12">
                                <div class="card facebook-icon">
                                    <div class="card-body p-4">
                                        <div class="d-flex">
                                            <div class="task-1">
                                                <i class="fa fa-facebook"></i>
                                            </div>
                                            <div class="my-auto">
                                                <small class="social1-title mb-2 h6">Facebook</small>
                                                <h4 class="text-xxl mb-0 social-content">+86,258 followers</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-12 col-xl-12">
                                <div class="card pinterest-icon">
                                    <div class="card-body p-4">
                                        <div class="d-flex">
                                            <div class="task-1">
                                                <i class="fa fa-pinterest"></i>
                                            </div>
                                            <div class="my-auto">
                                                <small class="social1-title mb-2 h6">Pinterest</small>
                                                <h4 class="text-xxl mb-0 social-content">+52,258 followers</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-lg-12 col-xl-12">
                                <div class="card mb-0 linkedin-icon">
                                    <div class="card-body p-4">
                                        <div class="d-flex">
                                            <div class="task-1">
                                                <i class="fa fa-linkedin"></i>
                                            </div>
                                            <div class="my-auto">
                                                <small class="social1-title mb-2 h6">Linked In</small>
                                                <h4 class="text-xxl mb-0 social-content">+32,258 followers</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-4">
                <div class="card premium bg-primary text-white">
                    <div class="card-body text-center">
                        <div class="">
                            <img src="<?=base_url()?>/assets/images/media/premium.png" alt="img" class="upgrade-img">
                        </div>
                        <h2 class="font-weight-bold text-white">GO Premium</h2>
                        <h5 class="mt-1 mb-3 font-weight-semibold ">Upgrade to premium for best results.</h5>
                        <p class="mb-0">quis nostrum exercitationem ullam quis nostrum corporis suscipit laboriosam.quis nostrum exercitationem ullam quis nostrum corporis suscipit laboriosam.quis nostrum exercitationem ullam quis nostrum corporis suscipit laboriosam.</p>
                        <div class="card-footer border-top-0">
                            <a class="mt-5 btn btn-lg btn-block btn-white" href="">Upgrade To Premium</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-4">
                <div class="card overflow-hidden">
                    <div class="card-header">
                        <h3 class="card-title">Activity</h3>
                    </div>
                    <div class="card-body">
                        <div class="latest-timeline">
                            <div class="latest-timeline-1 pb-3">
                                <ul class="d-flex">
                                    <li class="">
                                        <div class="activity1 bg-primary">
                                            <i class="fe fe-shopping-bag"></i>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="d-flex"><span class="time-data font-weight-bold text-default-dark">New Order Received</span></div>
                                        <div class="d-flex">
                                            <p class="text-muted fs-12 float-end"> 10 mins ago</p>
                                        </div>
                                    </li>
                                    <div class="ms-auto  mt-3">
                                        <a class="fs-15" href="javascript:void(0)"><i class="fe fe-chevrons-right ms-3 leading-tight "></i></a>
                                    </div>
                                </ul>
                            </div>
                            <div class="latest-timeline-1 pb-3">
                                <ul class="d-flex">
                                    <li class="">
                                        <div class="activity1 bg-secondary">
                                            <i class="fe fe-book-open"></i>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="d-flex"><span class="time-data font-weight-bold text-default-dark">New Artical Published</span></div>
                                        <div class="d-flex">
                                            <p class="text-muted fs-12 float-end">25 mins ago</p>
                                        </div>
                                    </li>
                                    <div class="ms-auto  mt-3">
                                        <a class="fs-15" href="javascript:void(0)"> <i class="fe fe-chevrons-right ms-3 leading-tight "></i></a>
                                    </div>
                                </ul>
                            </div>
                            <div class="latest-timeline-1 pb-3">
                                <ul class="d-flex">
                                    <li class="">
                                        <div class="activity1 bg-yellow">
                                            <i class="fe fe-upload"></i>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="d-flex"><span class="time-data font-weight-bold text-default-dark">Recently Uploaded Courses</span></div>
                                        <div class="d-flex">
                                            <p class="text-muted fs-12 float-end"> 6 days ago</p>
                                        </div>
                                    </li>
                                    <div class="ms-auto  mt-3">
                                        <a class="fs-15" href="javascript:void(0)"> <i class="fe fe-chevrons-right ms-3 leading-tight "></i></a>
                                    </div>
                                </ul>
                            </div>
                            <div class="latest-timeline-1 pb-3">
                                <ul class="d-flex">
                                    <li class="">
                                        <div class="activity1 bg-info">
                                            <i class="fe fe-trending-down"></i>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="d-flex"><span class="time-data font-weight-bold text-default-dark">Refund Canceled</span></div>
                                        <div class="d-flex">
                                            <p class="text-muted fs-12 float-end"> 1 hour ago</p>
                                        </div>
                                    </li>
                                    <div class="ms-auto  mt-3">
                                        <a class="fs-15" href="javascript:void(0)"> <i class="fe fe-chevrons-right ms-3 leading-tight "></i></a>
                                    </div>
                                </ul>
                            </div>
                            <div class="latest-timeline-1 pb-3">
                                <ul class="d-flex">
                                    <li class="">
                                        <div class="activity1 bg-success">
                                            <i class="fe fe-message-circle"></i>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="d-flex"><span class="time-data font-weight-bold text-default-dark">New Comment Received</span></div>
                                        <div class="d-flex">
                                            <p class="text-muted fs-12 float-end"> 1 hour ago</p>
                                        </div>
                                    </li>
                                    <div class="ms-auto  mt-3">
                                        <a class="fs-15" href="javascript:void(0)"> <i class="fe fe-chevrons-right ms-3 leading-tight "></i></a>
                                    </div>
                                </ul>
                            </div>
                            <div class="latest-timeline-1 pb-3">
                                <ul class="d-flex">
                                    <li class="">
                                        <div class="activity1 bg-orange">
                                            <i class="fe fe-trending-up"></i>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="d-flex"><span class="time-data font-weight-bold text-default-dark">Payments are refund</span></div>
                                        <div class="d-flex">
                                            <p class="text-muted fs-12 float-end"> 3 days ago</p>
                                        </div>
                                    </li>
                                    <div class="ms-auto  mt-3">
                                        <a class="fs-15" href="javascript:void(0)"> <i class="fe fe-chevrons-right ms-3 leading-tight "></i></a>
                                    </div>
                                </ul>
                            </div>
                            <div class="latest-timeline-1 pb-3">
                                <ul class="d-flex">
                                    <li class="">
                                        <div class="activity1 bg-pink">
                                            <i class="fe fe-thumbs-up"></i>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="d-flex"><span class="time-data font-weight-bold text-default-dark">Order was Successful</span></div>
                                        <div class="d-flex">
                                            <p class="text-muted fs-12 float-end"> 5 days ago</p>
                                        </div>
                                    </li>
                                    <div class="ms-auto  mt-3">
                                        <a class="fs-15" href="javascript:void(0)"> <i class="fe fe-chevrons-right ms-3 leading-tight "></i></a>
                                    </div>
                                </ul>
                            </div>
                            <div class="latest-timeline-1 pb-3">
                                <ul class="d-flex">
                                    <li class="">
                                        <div class="activity1 bg-yellow">
                                            <i class="fe fe-upload"></i>
                                        </div>
                                    </li>
                                    <li class="">
                                        <div class="d-flex"><span class="time-data font-weight-bold text-default-dark">Recently Uploaded Courses</span></div>
                                        <div class="d-flex">
                                            <p class="text-muted fs-12 float-end"> 6 days ago</p>
                                        </div>
                                    </li>
                                    <div class="ms-auto  mt-3">
                                        <a class="fs-15" href="javascript:void(0)"> <i class="fe fe-chevrons-right ms-3 leading-tight "></i></a>
                                    </div>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-sm-12 col-lg12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Latest Courses</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-3  col-md-6">
                                <a href="javascript:void(0)" class="item-card overflow-hidden">
                                    <div class="item-card-desc">
                                        <div class="card text-center overflow-hidden">
                                            <div class="card-img">
                                                <img src="<?=base_url()?>/assets/images/media/21.jpg" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card-text item-card-text-footer">
                                                <h4 class="font-weight-semibold">Software Development</h4>
                                                <span class="text-white-80"><strong class="fs-18 font-weight-bold text-white">1856</strong> Over  Courses</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3  col-md-6">
                                <a href="javascript:void(0)" class="item-card overflow-hidden">
                                    <div class="item-card-desc">
                                        <div class="card text-center overflow-hidden">
                                            <div class="card-img">
                                                <img src="<?=base_url()?>/assets/images/media/17.jpg" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card-text item-card-text-footer">
                                                <h4 class="font-weight-semibold">Web Designing</h4>
                                                <span class="text-white-80"><strong class="fs-18 font-weight-bold text-white">1256</strong> Over  Courses</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3  col-md-6">
                                <a href="javascript:void(0)" class="item-card overflow-hidden">
                                    <div class="item-card-desc">
                                        <div class="card overflow-hidden mb-xl-0">
                                            <div class="card-img">
                                                <img src="<?=base_url()?>/assets/images/media/22.jpg" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card-text item-card-text-footer">
                                                <h3 class="font-weight-semibold fs-30">Networking</h3>
                                                <span class="text-white-80"><strong class="fs-18 font-weight-bold text-white">968</strong> Over  Courses</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-xl-3  col-md-6">
                                <a href="javascript:void(0)" class="item-card overflow-hidden">
                                    <div class="item-card-desc">
                                        <div class="card overflow-hidden mb-0">
                                            <div class="card-img">
                                                <img src="<?=base_url()?>/assets/images/media/25.jpg" alt="img" class="cover-image">
                                            </div>
                                            <div class="item-card-text item-card-text-footer">
                                                <h3 class="font-weight-semibold fs-30">Business Classes</h3>
                                                <span class="text-white-80"><strong class="fs-18 font-weight-bold text-white">789</strong> Over  Courses</span>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Course Overview</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mb-0 ">
                            <table class="data-table-example table table-striped table-bordered table-hover text-nowrap mb-0">
                                <thead>
                                    <tr>
                                        <th>Course Name</th>
                                        <th>Facualty</th>
                                        <th>Course Duration</th>
                                        <th>Amount</th>
                                        <th>Course Type</th>
                                        <th>status</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>IT Courses</td>
                                        <td>Adam Berry</td>
                                        <td>3 Months</td>
                                        <td class="font-weight-semibold fs-16">$893</td>
                                        <td>Online</td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-success btn-sm">Completed</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fe fe-edit-2 fs-16"></i></a>
                                            <a class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fe fe-trash fs-16"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Data Courses</td>
                                        <td>Irene Hunter</td>
                                        <td>6 Months</td>
                                        <td class="font-weight-semibold fs-16">$254</td>
                                        <td>Offline</td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-danger btn-sm">Expired</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fe fe-edit-2 fs-16"></i></a>
                                            <a class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fe fe-trash fs-16"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Business Courses</td>
                                        <td>John Payne</td>
                                        <td>2 Months</td>
                                        <td class="font-weight-semibold fs-16">$352</td>
                                        <td>Offline</td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-primary btn-sm">Progress</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fe fe-edit-2 fs-16"></i></a>
                                            <a class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fe fe-trash fs-16"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Digital-Marketing Courses</td>
                                        <td>Julia Hardacre</td>
                                        <td>4 Months</td>
                                        <td class="font-weight-semibold fs-16">$643</td>
                                        <td>Online</td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-info btn-sm">Closed</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fe fe-edit-2 fs-16"></i></a>
                                            <a class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fe fe-trash fs-16"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Photography Courses</td>
                                        <td>Rutherford</td>
                                        <td>2 Months</td>
                                        <td class="font-weight-semibold fs-16">$392</td>
                                        <td>Offline</td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-danger btn-sm">Expired</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fe fe-edit-2 fs-16"></i></a>
                                            <a class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fe fe-trash fs-16"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Beautician Courses</td>
                                        <td>Lambert</td>
                                        <td>6 Months</td>
                                        <td class="font-weight-semibold fs-16">$295</td>
                                        <td>Offline</td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-success btn-sm">Completed</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fe fe-edit-2 fs-16"></i></a>
                                            <a class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fe fe-trash fs-16"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Cloud Computing</td>
                                        <td>Tanner Mallari</td>
                                        <td>3 Months</td>
                                        <td class="font-weight-semibold fs-16">$993</td>
                                        <td>Online</td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-info btn-sm">Closed</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fe fe-edit-2 fs-16"></i></a>
                                            <a class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fe fe-trash fs-16"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>web Development Courses</td>
                                        <td>Rutherford</td>
                                        <td>2 Months</td>
                                        <td class="font-weight-semibold fs-16">$392</td>
                                        <td>Offline</td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-primary btn-sm">Progress</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fe fe-edit-2 fs-16"></i></a>
                                            <a class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fe fe-trash fs-16"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>web Designing Courses</td>
                                        <td>John Joya</td>
                                        <td>2 Months</td>
                                        <td class="font-weight-semibold fs-16">$492</td>
                                        <td>Online</td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-success btn-sm">Completed</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fe fe-edit-2 fs-16"></i></a>
                                            <a class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fe fe-trash fs-16"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>App Development Courses</td>
                                        <td>Lilly Potter</td>
                                        <td>4 Months</td>
                                        <td class="font-weight-semibold fs-16">$692</td>
                                        <td>Online</td>
                                        <td>
                                            <a href="javascript:void(0)" class="btn btn-primary btn-sm">Progress</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Edit"><i class="fe fe-edit-2 fs-16"></i></a>
                                            <a class="btn btn-outline-light btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-original-title="Delete"><i class="fe fe-trash fs-16"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
			
