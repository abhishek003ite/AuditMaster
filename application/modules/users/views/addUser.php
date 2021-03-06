
		<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
					<!-- BEGIN: Aside Menu -->
	                    <?php echo $this->load->view('common/sidebar') ?>
					<!-- END: Aside Menu -->
				</div>
				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Add User
								</h3>
								<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
									<li class="m-nav__item m-nav__item--home">
										<a href="#" class="m-nav__link m-nav__link--icon">
											<i class="m-nav__link-icon la la-home"></i>
										</a>
									</li>
									<li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">
												Users
											</span>
										</a>
									</li>
									<li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">
												Add User
											</span>
										</a>
									</li>
								</ul>
							</div>
							<div>
								<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" m-dropdown-toggle="hover" aria-expanded="true">
									<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
										<i class="la la-plus m--hide"></i>
										<i class="la la-ellipsis-h"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
						<div class="row">
							<div class="col-md-12">
								<!--begin::Portlet-->
								<div class="m-portlet m-portlet--tab">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
												<h3 class="m-portlet__head-text">
													Add User
												</h3>
											</div>
										</div>
									</div>
									<?php $msg = $this->session->flashdata('msg');if(!empty($msg)){ ?>
									<div class="col-md-4"></div>
    							    <div class="m-alert m-alert--outline alert alert-danger alert-dismissible animated fadeIn col-md-12" role="alert">			
    							        <button type="button" class="close" data-dismiss="alert" aria-label="Close"></button>			
    							        <span style="text-align: center;"><?php echo $msg; ?></span>		
    							    </div>
    							    <div class="col-md-4"></div>
    							    <?php } ?>
									<!--begin::Form-->
									<form class="m-form m-form--fit m-form--label-align-right" action="<?= site_url() ?>users/addUserFunc" method="post" enctype="multipart/form-data">
										<div class="m-portlet__body">
											<div class="form-group m-form__group m--margin-top-10">
												<div class="alert m-alert m-alert--default" role="alert">
													Create Users / Sub Admin With Roles
												</div>
											</div>
											<div class="form-group m-form__group">
												<label for="name">
													Name
												</label>
												<input type="text" class="form-control m-input" name="name" id="name" aria-describedby="emailHelp" placeholder="Enter full name">
												<span class="m-form__help">
													Enter Your fullname here.
												</span>
											</div>
											<div class="form-group m-form__group">
												<label for="exampleInputEmail1">
													Email address
												</label>
												<input type="email" class="form-control m-input" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
												<span class="m-form__help">
													This email will be your username for login.
												</span>
											</div>
											<div class="form-group m-form__group">
												<label for="exampleInputPassword1">
													Password
												</label>
												<input type="password" class="form-control m-input" name="password" id="exampleInputPassword1" placeholder="Password">
											</div>
											<div class="form-group m-form__group">
											    <label for="profilePic">
											        User Profile Picture
											    </label>
											    <input type="file" class="form-control m-input" name="profilePic" id="profilePic"/>
											</div>
											
											<div class="form-group m-form__group">
											    <label for="mobile">
											        Mobile Number
											    </label>
											    <input type="text" class="form-control m-input" name="mobile" id="mobile"/>
											</div>
											<div class="form-group m-form__group">
											    <label for="roles">
											        Roles
											    </label>
											    <select class="form-control m-input" name="roleId" id="roles">
											        <option value="">Select Roles</option>
											        <?php foreach($roles as $role){ ?>
											            <option value="<?= $role['roleId'] ?>"><?= $role['role'] ?></option>
											        <?php } ?>
											    </select>
											</div>
										</div>
										<div class="m-portlet__foot m-portlet__foot--fit">
											<div class="m-form__actions">
												<button type="submit" class="btn btn-primary">
													Submit
												</button>
												<button type="reset" class="btn btn-secondary">
													Cancel
												</button>
											</div>
										</div>
									</form>
									<!--end::Form-->
								</div>
								<!--end::Portlet-->
		
						</div>
		</div>
	</div>
</div>
</div>
<!-- end:: Body -->