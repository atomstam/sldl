
				<!--Section-->
				<section>
					<div class="sptb-2 bannerimg">
						<div class="header-text mb-0">
							<div class="container">
								<div class="text-center text-white py-7">
									<h1 class="">หลักสูตรที่ฉันสร้าง</h1>
									<ol class="breadcrumb text-center">
										<li class="breadcrumb-item"><a href="javascript:void(0)">หน้า</a></li>
										<li class="breadcrumb-item active text-white" aria-current="page">หลักสูตรที่ฉันสร้าง</li>
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
					
					<!--Coursed Lists-->
					<div class="col-xl-9 col-lg-8 col-md-12">
						<!--Coursed lists-->
						<div class=" mb-lg-0">
							<div class="">
								<div class="item2-gl">
									<div class="mb-0">
										<div class="">
											<div class="p-5 bg-white item2-gl-nav d-flex">
												<div class="d-block">
													<h5 class="mb-0 mt-0">Showing 1 to 10 of 30 entries</h5>
													<label class="me-2 mt-3 mb-sm-1">Sort By:</label>
													<select name="item" class="form-control select2 w-70">
														<option value="1">Latest</option>
														<option value="2">Oldest</option>
														<option value="3">Fees:Low-to-High</option>
														<option value="5">Fees:Hight-to-Low</option>
													</select>
												</div>
												<ul class="nav item2-gl-menu ms-auto">
													<li class="border-end"><a href="#tab-11" class="active show" data-bs-toggle="tab" title="List style"><i class="fa fa-list"></i></a></li>
													<li><a href="#tab-12" data-bs-toggle="tab" class=" " title="Grid"><i class="fa fa-th"></i></a></li>
												</ul>
											</div>
										</div>
									</div>
									<div class="tab-content item-list2">
										<div class="tab-pane active" id="tab-11">

											<?php foreach ($courses as $course) : ?>

											<div class="card overflow-hidden">
												<div class="d-md-flex">
													<div class="item-card9-img">
														<div class="item-card9-imgs">
															<a href="page-details.html"></a>
															<img src="../../assets/images/media/Categories/2.jpg" alt="img" class="cover-image">
														</div>
														<div class="item-overly-trans">
														<a href="page-details.html" class="bg-primary">Popular</a>
														</div>
													</div>
													<div class="card border-0 mb-0">
														<div class="card-body p-0">
															<div class="item-card9 ps-5 pt-5">
																<a href="page-details.html" class="text-default-dark"><h3 class=""><?= $course['c_name']; ?></h3></a>
																<p class="mb-0 mt-1 lead"><?= $course['c_shortdetail']; ?></p>
																 <div class="mt-2 mb-2">
																	<ul class="icon-card-1">
																		<li class="me-3"><span class="fs-14"><i class="fa fa-briefcase me-1"></i> Business</span></li>
																		<li class="me-3"><span class="fs-14"><i class="fa fa-user me-1"></i> Stephanie</span></li>
																		<li class="me-3"><span class="fs-14"><i class="fa fa-clock-o me-1"></i><?= $course['c_hour']; ?> ชั่วโมง</span></li>
																		<li class="me-3"><span class="fs-14"><i class="fa fa-users me-1"></i>45,000 ลงทะเบียน</span></li>
																	</ul>
																</div>
																<div>
																	<div class="rating-stars d-flex">
																		<h4 class="font-weight-semibold me-2">4.2</h4>
																		<div class="star-ratings start-ratings-main clearfix me-3">
																			<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
																				<div class="br-wrapper br-theme-fontawesome-stars">
																					<select class="example-fontawesome" name="rating" autocomplete="off" style="display: none;">
																						<option value="1">1</option>
																						<option value="2">2</option>
																						<option value="3">3</option>
																						<option value="4" selected="">4</option>
																						<option value="5">5</option>
																					</select>
																				</div>
																			</div>
																		</div>(4,24,525)
																	</div>
																</div>
															</div>
															<div class="border-top ps-5 mt-2">
																<h4 class="font-weight-semibold fs-20 text-dark mt-4 mb-4"><i class="fe fe-tag mt-0 fs-18 me-2"></i>$263.99</h4>
																<div class="item-card9-icons2">
																	<a href="javascript:void(0)" class="item-card9-icons1" data-bs-toggle="tooltip" data-bs-original-title="Like"> <i class="fe fe-heart"></i></a>
																	<a href="javascript:void(0)" class="item-card9-icons1" data-bs-toggle="tooltip" data-bs-original-title="Share"> <i class="fe fe-share-2"></i></a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>

											<?php endforeach ?>
											
										</div>
										<div class="tab-pane" id="tab-12">
											<div class="row">
												<div class="col-lg-6 col-md-12 col-xl-6">
													<div class="card overflow-hidden">
														<div class="item-card9-img">
															<div class="item-card9-imgs">
																<a href="page-details.html"></a>
																<img src="../../assets/images/media/Categories/2.jpg" alt="img" class="cover-image">
															</div>
															<div class="item-card9-icons">
																<a href="javascript:void(0)" class="item-card9-icons1 bg-primary"> <i class="fa fa fa-heart-o"></i></a>
																<a href="javascript:void(0)" class="item-card9-icons1 bg-secondary"> <i class="fa fa fa-share-alt"></i></a>
															</div>
															<div class="item-overly-trans">
																<a href="page-details.html" class="bg-primary">Popular</a>
															</div>
														</div>
														<div class="card-body pb-0">
															<div class="item-card9">
																<span class="item-card-badge"><i class="fa fa-briefcase me-1"></i> Business</span>
																<a href="page-details.html" class="text-default-dark mt-2"><h3 class="mt-2 mb-2">Business Management</h3></a>
																<p class="mb-0">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium </p>
															</div>
															<div class="mt-2">
																<div class="rating-stars d-flex">
																	<h4 class="font-weight-semibold me-2">4.2</h4>
																	<div class="star-ratings start-ratings-main clearfix me-3">
																		<div class="stars stars-example-fontawesome stars-example-fontawesome-sm">
																			<select class="example-fontawesome" name="rating" autocomplete="off">
																				<option value="1">1</option>
																				<option value="2">2</option>
																				<option value="3">3</option>
																				<option value="4" selected>4</option>
																				<option value="5">5</option>
																			</select>
																		</div>
																	</div>(4,24,525)
																</div>
															</div>
														</div>
														<div class="border-top ps-5  mt-2">
															<h4 class="font-weight-semibold fs-20 text-dark mt-4 mb-4"><i class="fe fe-tag mt-0 fs-18 me-2"></i>$263.99</h4>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="center-block text-center">
									<ul class="pagination mb-5 mb-lg-0">
										<li class="page-item page-prev disabled">
											<a class="page-link" href="javascript:void(0)" tabindex="-1">Prev</a>
										</li>
										<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
										<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
										<li class="page-item page-next">
											<a class="page-link" href="javascript:void(0)">Next</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!--/Coursed lists-->
					</div>
					<!--/Coursed Lists-->

				</div>
			</div>
		</section><!--/User Dashboard-->