<!-- END: Header -->		
		<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
					<?php echo $this->load->view('common/sidebar') ?>
				</div>
				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title ">
									Quick Menus
								</h3>
							</div>
							<div>
								<span class="m-subheader__daterange" id="m_dashboard_daterangepicker">
									<span class="m-subheader__daterange-label">
										<span class="m-subheader__daterange-title"></span>
										<span class="m-subheader__daterange-date m--font-brand"></span>
									</span>
									<a href="#" class="btn btn-sm btn-brand m-btn m-btn--icon m-btn--icon-only m-btn--custom m-btn--pill">
										<i class="la la-angle-down"></i>
									</a>
								</span>
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
					    <!--begin:: Widgets/Stats-->
						<div class="m-portlet ">
							<div class="m-portlet__body  m-portlet__body--no-padding">
								<div class="row m-row--no-padding m-row--col-separator-xl">
									<div class="col-md-12 col-lg-6 col-xl-4">
										<!--begin::Total Profit-->
										<div class="m-widget24">
										    <a href="<?= site_url() ?>/auditMaster/viewAudit">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													Audit Master
												</h4>
												<br>
												<span class="m-widget24__desc">
													All Audit
												</span>
												<div class="m--space-10"></div>
												<div class="progress m-progress--sm">
													<div class="progress-bar m--bg-brand" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											</a>
										</div>
										<!--end::Total Profit-->
									</div>
									<div class="col-md-12 col-lg-6 col-xl-4">
										<!--begin::New Feedbacks-->
										<div class="m-widget24">
										    <a href="<?= site_url() ?>/accountant/viewAccountant">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													Accountants
												</h4>
												<br>
												<span class="m-widget24__desc">
													All Accountants
												</span>
												<div class="m--space-10"></div>
												<div class="progress m-progress--sm">
													<div class="progress-bar m--bg-info" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											</a>
										</div>
										<!--end::New Feedbacks-->
									</div>
									<div class="col-md-12 col-lg-6 col-xl-4">
										<!--begin::New Orders-->
										<div class="m-widget24">
										    <a href="<?= site_url() ?>/users/viewUser">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													Users
												</h4>
												<br>
												<span class="m-widget24__desc">
													All Users
												</span>
												<div class="m--space-10"></div>
												<div class="progress m-progress--sm">
													<div class="progress-bar m--bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											</a>
										</div>
										<!--end::New Orders-->
									</div>
								</div>
							</div>
						</div>
						<!--end:: Widgets/Stats--> 
						<!--begin:: Widgets/Stats-->
						<div class="m-portlet ">
							<div class="m-portlet__body  m-portlet__body--no-padding">
								<div class="row m-row--no-padding m-row--col-separator-xl">
									<div class="col-md-12 col-lg-6 col-xl-4">
										<!--begin::Total Profit-->
										<div class="m-widget24">
										    <a href="#">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													Invoices
												</h4>
												<br>
												<span class="m-widget24__desc">
													All Invoices
												</span>
												<div class="m--space-10"></div>
												<div class="progress m-progress--sm">
													<div class="progress-bar m--bg-brand" role="progressbar" style="width: 78%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											</a>
										</div>
										<!--end::Total Profit-->
									</div>
									<div class="col-md-12 col-lg-6 col-xl-4">
										<!--begin::New Feedbacks-->
										<div class="m-widget24">
										    <a href="<?= site_url() ?>/status/viewStatus">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													Status
												</h4>
												<br>
												<span class="m-widget24__desc">
													All Status
												</span>
												<div class="m--space-10"></div>
												<div class="progress m-progress--sm">
													<div class="progress-bar m--bg-info" role="progressbar" style="width: 84%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											</a>
										</div>
										<!--end::New Feedbacks-->
									</div>
									<div class="col-md-12 col-lg-6 col-xl-4">
										<!--begin::New Orders-->
										<div class="m-widget24">
										    <a href="<?= site_url() ?>/workStatus/viewWorkStatus">
											<div class="m-widget24__item">
												<h4 class="m-widget24__title">
													Work Status
												</h4>
												<br>
												<span class="m-widget24__desc">
													All Work Status
												</span>
												<div class="m--space-10"></div>
												<div class="progress m-progress--sm">
													<div class="progress-bar m--bg-danger" role="progressbar" style="width: 69%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											</a>
										</div>
										<!--end::New Orders-->
									</div>
								</div>
							</div>
						</div>
						<!--end:: Widgets/Stats--> 
					</div>
				</div>
			</div>
			<!-- end:: Body -->