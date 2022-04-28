
				<!--Section-->
				<section>
					<div class="sptb-2 bannerimg">
						<div class="header-text mb-0">
							<div class="container">
								<div class="text-center text-white py-7">
									<h1 class="">เข้าสู่ระบบ</h1>
									<ol class="breadcrumb text-center">
										<li class="breadcrumb-item"><a href="javascript:void(0)">หน้า</a></li>
										<li class="breadcrumb-item active text-white" aria-current="page">เข้าสู่ระบบ</li>
									</ol>
								</div>
							</div>
						</div>
					</div>
				</section><!--/Section-->
			</div>
		</div>

		<!-- Shape Start -->
        <div class="relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmsns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="#f5f4f9"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->

		<!--Register-section-->
		<section class="sptb">
			<div class="container customerpage">
				<div class="row">
					<div class="col-lg-5 col-xl-5 col-md-6 d-block mx-auto">
						<div class="card">
							<div class="card-body p-6">
								<div class="mb-6">
									<h5 class="fs-25 font-weight-semibold">Login</h5>
									<p class="fs-16">ใส่ชื่อผู้ใช้งาน และรหัสผ่าน</p>

									<?php if(session()->getFlashdata('msg')) : ?>
										<div class="alert alert-danger"><?= session()->getFlashdata('msg'); ?></div>
									<?php endif ?>
									<?php if(session()->getFlashdata('fail')) : ?>
										<div class="alert alert-danger"><?= session()->getFlashdata('fail'); ?></div>
									<?php endif ?>
									<?php if(session()->getFlashdata('registed')) : ?>
										<div class="alert alert-success"><?= session()->getFlashdata('registed'); ?></div>
									<?php endif ?>

								</div>
								<div class="single-page customerpage">
									<div class="wrapper wrapper2 box-shadow-0">
										<form action="/login/auth" method="post" id="login" class="" tabindex="500">
											<?= csrf_field(); ?>
											<div class="email">
												<label>อีเมล</label>
												<input type="email" name="email" value="<?= set_value('email'); ?>">
											</div>
											<div class="passwd">
												<label>รหัสผ่าน</label>
												<input type="password" name="password">
											</div>
											<div class="submit">
												<button type="submit" class="btn btn-primary btn-block fs-16">เข้าสู่ระบบ</button>
											</div>
											<div class="d-flex mb-0">
												<p class="mb-0"><a href="<?= base_url('/forgot'); ?>" >ลืมรหัสผ่าน</a></p>
												<p class="text-dark mb-0 ms-auto">หากยังไม่มีมีบัญชี<a href="<?= base_url('/register'); ?>" class="text-primary ms-1">สมัครสมาชิก</a></p>
											</div>
										</form>
									</div>
								</div>
							</div>
							<div class="card-body p-6 border-top">
								<div class="d-flex">
									<div>
										<h5 class="modal-title fs-20 font-weight-semibold">Login with Social</h5>
										<p class="fs-16">If you are going to use a passage of Lorem Ipsum</p>
										<div class="">
											<div class="btn-group mb-3 mb-lg-0">
												<a href="https://www.facebook.com/" class="social-button">
													<span class="fe fe-facebook"></span> Facebook
												</a>
											</div>
											<div class="btn-group mb-3 mb-lg-0">
												<a href="https://www.google.com/gmail/" class="social-button">
													<span class="fe fe-linkedin"></span> Linkedin
												</a>
											</div>
											<div class="btn-group mb-3 mb-lg-0">
												<a href="https://twitter.com/" class="social-button">
													<span class="fe fe-twitter"></span> Twitter
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section><!--/Register-section-->
