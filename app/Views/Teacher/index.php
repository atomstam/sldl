
				<!--Section-->
				<section>
					<div class="sptb-2 bannerimg">
						<div class="header-text mb-0">
							<div class="container">
								<div class="text-center text-white py-7">
									<h1 class="">Dashboard คุณครู</h1>
									<ol class="breadcrumb text-center">
										<li class="breadcrumb-item"><a href="javascript:void(0)">หน้า</a></li>
										<li class="breadcrumb-item active text-white" aria-current="page">Dashboard</li>
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

        <!--User Dashboard-->
		<section class="sptb my-dash-1">
			<div class="container">
				<div class="row">

					<?= view('templates/frontend/sidebar'); ?>
					
					<div class="col-xl-9 col-lg-12 col-md-12">
						<div class="card mb-0">
							<form action="<?= base_url('teacher/updateProfile'); ?>" method="post" name="submit-form-updateProfile" id="submit-form-updateProfile">
								<div class="card-header">
									<h3 class="card-title">โปรไฟล์ของฉัน</h3>
								</div>
								<div class="card-body">
									<div class="row">
									<?php if(session()->getFlashdata('msg')) : ?>
										<div class="alert alert-success"><?= session()->getFlashdata('msg'); ?></div>
									<?php endif ?>	

									<?php if(isset($validation)): ?>
		                                <div class="alert alert-danger"><?= $validation->listErrors(); ?></div>
		                            <?php endif ?>
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label class="form-label">คำนำหน้า <i>*</i></label>
												<select class="form-control select2" name="prefix" id="prefix">
													<option value="" selected>เลือก</option>
													<option value="นาย" <?php if($user['prefix']=='นาย') : echo 'selected'; endif ?>>นาย</option>
													<option value="นาง" <?php if($user['prefix']=='นาง') : echo 'selected'; endif ?>>นาง</option>
													<option value="นางสาว" <?php if($user['prefix']=='นางสาว') : echo 'selected'; endif ?>>นางสาว</option>
													<option value="เด็กชาย" <?php if($user['prefix']=='เด็กชาย') : echo 'selected'; endif ?>>เด็กชาย</option>
													<option value="เด็กหญิง" <?php if($user['prefix']=='เด็กหญิง') : echo 'selected'; endif ?>>เด็กหญิง</option>
												</select>
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label class="form-label">ชื่อ <i>*</i></label>
												<input type="text" class="form-control" name="firstName" id="firstName" value="<?= $user['firstName']; ?>">
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label class="form-label">นามสกุล <i>*</i></label>
												<input type="text" class="form-control" name="lastName" id="lastName" value="<?= $user['lastName']; ?>">
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label class="form-label">เลขบัตรประชาชน <i>*</i></label>
												<input type="text" class="form-control" name="idCard" id="idCard" value="<?= $user['idCard']; ?>" data-inputmask-mask="9999999999999">
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label class="form-label">โทรศัพท์ <i>*</i></label>
												<input type="text" class="form-control" name="phone" id="phone" value="<?= $user['phone']; ?>" data-inputmask-mask="9999999999">
											</div>
										</div>
										<div class="col-sm-6 col-md-4">
											<div class="form-group">
												<label class="form-label">อีเมล <i>*</i></label>
												<input type="email" class="form-control" name="email" id="email" value="<?= $user['email']; ?>">
											</div>
										</div>
										<div class="col-sm-6 col-md-6">
											<div class="form-group">
												<label class="form-label">โรงเรียน</label>
												<input type="text" class="form-control" >
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="form-label">สังกัด</label>
												<select class="form-control select2-show-search border-bottom-0 w-100 select2-show-search" data-placeholder="Select">
													<optgroup label="Categories">
														<option>--Select--</option>
														<option value="1">Germany</option>
														<option value="2">Real Estate</option>
														<option value="3">Canada</option>
														<option value="4" selected>Usa</option>
														<option value="5">Afghanistan</option>
														<option value="6">Albania</option>
														<option value="7">China</option>
														<option value="8">Denmark</option>
														<option value="9">Finland</option>
														<option value="10">India</option>
														<option value="11">Kiribati</option>
														<option value="12">Kuwait</option>
														<option value="13">Mexico</option>
														<option value="14">Pakistan</option>
													</optgroup>
												</select>
											</div>
										</div>
										<div class="col-sm-6 col-md-6">
											<div class="form-group">
												<label class="form-label">Facebook</label>
												<input type="text" class="form-control" placeholder="" value="">
											</div>
										</div>
										<div class="col-sm-6 col-md-6">
											<div class="form-group">
												<label class="form-label">Google</label>
												<input type="text" class="form-control" placeholder="" value="">
											</div>
										</div>
										<div class="col-sm-6 col-md-6">
											<div class="form-group">
												<label class="form-label">Twitter</label>
												<input type="text" class="form-control" placeholder="" value="">
											</div>
										</div>
										<div class="col-sm-6 col-md-6">
											<div class="form-group">
												<label class="form-label">Line ID</label>
												<input type="text" class="form-control" placeholder="" value="">
											</div>
										</div>
										<div class="col-md-12">
											<div class="input-group file-browser">
												<input type="text" class="form-control bg-transparent border-end-0 browse-file valid" placeholder="Upload ภาพโปรไฟล์" readonly="" aria-invalid="false">
												<label class="input-group-btn">
												<span class="btn btn-primary br-ts-0 br-bs-0">เลือกรูป <input type="file" style="display: none;" multiple="">
												</span>
											</label>
											</div>
										</div>
									</div>
								</div>
								<div class="card-footer">
									<button type="submit" class="btn btn-primary">อัพเดทโปรไฟล์</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section><!--/User Dashboard-->