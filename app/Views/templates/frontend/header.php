<!doctype html>
<html lang="en">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content=" Edomi - Online Education & Learning Courses HTML CSS Responsive Template" name="description">
		<meta content="Spruko Technologies Private Limited" name="author">
		<meta name="keywords" content="html , html dir ,  website template, bootstrap 5  template,  bootstrap template, admin panel template , admin panel , html5 , academy training course css template, classes online training website templates, courses training html5 template design, education training rwd simple template, educational learning management jquery html, elearning bootstrap education template, professional training center bootstrap html, institute coaching mobile responsive template, marketplace html template premium, learning management system jquery html, clean online course teaching directory template, online learning course management system, online course website template css html, premium lms training web template, training course responsive website"/>

		<!-- Favicon -->
		<link rel="icon" href="<?= base_url(); ?>/assets/images/brand/favicon.ico" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>/assets/images/brand/favicon.ico" />

		<!-- Title -->
		<title> SLDL </title>

		<!-- Bootstrap css -->
		<link href="<?= base_url(); ?>/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet" />

		<!-- Style css -->
		<link href="<?= base_url(); ?>/assets/css/style_ff.css" rel="stylesheet" />

		<!-- Font-awesome  css -->
		<link href="<?= base_url(); ?>/assets/css/icons.css" rel="stylesheet"/>

		<!--Select2 css -->
		<link href="<?= base_url(); ?>/assets/plugins/select2/select2.css" rel="stylesheet" />

		<!-- Cookie css -->
		<link href="<?= base_url(); ?>/assets/plugins/cookie/cookie.css" rel="stylesheet">

		<!-- Owl Theme css-->
		<link href="<?= base_url(); ?>/assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" />

		<!-- Color Skin css -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>/assets/color-skins/color_ff.css" />

	</head>

	<body>

		<!--Loader-->
		<div id="global-loader">
			<img src="<?= base_url(); ?>/assets/images/loader_f.svg" class="loader-img" alt="img">
		</div><!--/Loader-->

		<!--Topbar-->
		<div class="header-main">
			<div class="top-bar top-bar-light">
				<div class="container">
					<div class="row">
						<div class="col-xl-8 col-lg-8 col-sm-4 col-12">
							<div class="top-bar-start d-flex">
								<div class="clearfix">
									<ul class="socials">
										<li>
											<a class="social-icon text-dark" href="javascript:void(0)"><i class="fe fe-facebook"></i></a>
										</li>
										<li>
											<a class="social-icon text-dark" href="javascript:void(0)"><i class="fe fe-twitter"></i></a>
										</li>
										<li>
											<a class="social-icon text-dark" href="javascript:void(0)"><i class="fe fe-linkedin"></i></a>
										</li>
										<li>
											<a class="social-icon text-dark" href="javascript:void(0)"><i class="fe fe-instagram"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-sm-8 col-12">
							<div class="top-bar-end">
								<ul class="custom">

                                    <?php if(!session()->get('logged_in')) : ?>

                                    <li>
										<a href="<?=base_url('/register')?>" class="text-dark"><i class="fa fa-user-o me-1"></i> <span>ลงทะเบียน</span></a>
									</li>
									<li>
										<a href="<?=base_url('/login')?>" class="text-dark"><i class="fe fe-log-in me-1"></i> <span>เข้าสู่ระบบ</span></a>
									</li>

                                    <?php endif ?>

                                    <?php if(session()->get('logged_in')) : ?>

                                    <li class="dropdown">
										<a href="javascript:void(0)" class="text-dark" data-bs-toggle="dropdown"><i class="fe fe-home me-1"></i><span> My Dashboard<i class="fe fe-chevron-down  ms-1"></i></span></a>
										<div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
											<a href="<?= base_url('/user/profile'); ?>" class="dropdown-item" >
												<i class="dropdown-icon icon icon-user"></i> โปรไฟล์ของฉัน
											</a>
											<a class="dropdown-item" href="<?= base_url('/user/messages'); ?>">
												<i class="dropdown-icon icon icon-speech"></i> ข้อความ
											</a>
											<a class="dropdown-item" href="<?= base_url('/user/notification'); ?>">
												<i class="dropdown-icon icon icon-bell"></i> แจ้งเตือน
											</a>
											<a href="<?= base_url('/user/acountSetting'); ?>" class="dropdown-item" >
												<i class="dropdown-icon  icon icon-settings"></i> ตั้งค่าบัญชี
											</a>
											<a class="dropdown-item" href="<?= base_url('/logout'); ?>">
												<i class="dropdown-icon icon icon-power"></i> ออกจากระบบ
											</a>
										</div>
									</li>

                                    <?php endif ?>
									
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div><!--/Topbar-->

			<!--Section-->
			<div class="cover-image bg-background-1" data-bs-image-src="<?= base_url(); ?>/assets/images/banners/banner1.jpg">

				<!--Topbar-->
				<div class="header-main">
					<!-- Mobile Header -->
					<div class="sticky">
						<div class="horizontal-header clearfix ">
							<div class="container">
								<a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
								<span class="smllogo"><img src="<?= base_url(); ?>/assets/images/brand/logo.png" width="120" alt="img"/></span>
								<span class="smllogo-white"><img src="<?= base_url(); ?>/assets/images/brand/logo.png" width="120" alt="img"/></span>
								<a href="tel:245-6325-3256" class="callusbtn"><i class="icon icon-phone" aria-hidden="true"></i></a>
							</div>
						</div>
					</div>
					<!-- /Mobile Header -->

					<!--Horizontal-main -->
					<div class="horizontal-main header-style1 bg-dark-transparent clearfix p-0 pt-0 border-bottom border-white-transparent">
						<div class="horizontal-mainwrapper container clearfix">
							<div class="desktoplogo">
								<a href="<?= base_url(); ?>">
									<img src="<?= base_url(); ?>/assets/images/brand/logo-white.png" alt="img">
									<img src="<?= base_url(); ?>/assets/images/brand/logo.png" class="header-brand-img header-white" alt="logo">
								</a>
							</div>
							<div class="desktoplogo-1">
								<a href="<?= base_url(); ?>"><img src="<?= base_url(); ?>/assets/images/brand/logo.png" alt="img"></a>
							</div>
							<nav class="horizontalMenu clearfix d-md-flex">
                                <ul class="horizontalMenu-list">
                                <li aria-haspopup="true"><a href="<?= base_url(); ?>">หน้าหลัก </a></li>
                                    <li aria-haspopup="true"><a href="#">หลักสูตร </a></li>
                                    <li aria-haspopup="true"><a href="#">ความเป็นมา</a></li>
                                    <li aria-haspopup="true"><a href="#"> โครงการ</a></li>
                                    <li aria-haspopup="true"><a href="#"> เว็บไซต์กองทุนฯ</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div><!--/Horizontal-main -->