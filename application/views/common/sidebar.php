<!-- BEGIN: Aside Menu -->
	                    <div 
		id="m_ver_menu" 
		class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " 
		m-menu-vertical="1"
		 m-menu-scrollable="0" m-menu-dropdown-timeout="500"  
		>
						<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
							<li class="<?php if($this->uri->uri_string() == 'dashboard') { echo 'm-menu__item  m-menu__item--active'; }else{ echo 'm-menu__item'; } ?>" aria-haspopup="true" >
								<a  href="<?= site_url() ?>/dashboard" class="m-menu__link ">
									<i class="m-menu__link-icon flaticon-line-graph"></i>
									<span class="m-menu__link-title">
										<span class="m-menu__link-wrap">
											<span class="m-menu__link-text">
												Dashboard
											</span>
											<span class="m-menu__link-badge">
												<span class="m-badge m-badge--danger">
													2
												</span>
											</span>
										</span>
									</span>
								</a>
							</li>
							<li class="<?php if($this->uri->uri_string() == 'users/addUser' || $this->uri->uri_string() == 'users/viewUser' || $this->uri->uri_string() == 'users/editUser/'){ echo 'm-menu__item m-menu__item--submenu m-menu__item--open'; }else{ echo 'm-menu__item m-menu__item--submenu'; } ?>" aria-haspopup="true"  m-menu-submenu-toggle="hover">
								<a  href="javascript:;" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-layers"></i>
									<span class="m-menu__link-text">
										Users
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu ">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
											<span class="m-menu__link">
												<span class="m-menu__link-text">
													Users
												</span>
											</span>
										</li>
										<li class="<?php if($this->uri->uri_string() == 'users/addUser'){ echo 'm-menu__item m-menu__item--active'; }else{ echo 'm-menu__item'; } ?>" aria-haspopup="true" >
											<a  href="<?= site_url() ?>/users/addUser" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Add User
												</span>
											</a>
										</li>
										<li class="<?php if($this->uri->uri_string() == 'users/viewUser' || $this->uri->uri_string() == 'users/editUser'){ echo 'm-menu__item m-menu__item--active'; }else{ echo 'm-menu__item'; } ?>" aria-haspopup="true" >
											<a  href="<?= site_url() ?>/users/viewUser" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													View Users
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="<?php if($this->uri->uri_string() == 'accountant/addAccountant' || $this->uri->uri_string() == 'accountant/viewAccountant' || $this->uri->uri_string() == 'accountant/editAccountant'){ echo 'm-menu__item m-menu__item--submenu m-menu__item--open'; }else{ echo 'm-menu__item m-menu__item--submenu'; } ?>" aria-haspopup="true"  m-menu-submenu-toggle="hover">
								<a  href="javascript:;" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-multimedia-1"></i>
									<span class="m-menu__link-text">
										Accountants
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu ">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
											<span class="m-menu__link">
												<span class="m-menu__link-text">
													Add Accountant
												</span>
											</span>
										</li>
										<li class="<?php if($this->uri->uri_string() == 'accountant/addAccountant'){ ?>m-menu__item m-menu__item--active<?php }else{ ?>m-menu__item<?php } ?>" aria-haspopup="true" >
											<a  href="<?= site_url() ?>/accountant/addAccountant" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Add Accountant
												</span>
											</a>
										</li>
										<li class="<?php if($this->uri->uri_string() == 'accountant/viewAccountant'){ ?>m-menu__item m-menu__item--active<?php }else{ ?>m-menu__item<?php } ?>" aria-haspopup="true" >
											<a  href="<?= site_url() ?>/accountant/viewAccountant" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													View Accountants
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="<?php if($this->uri->uri_string() == 'invoice/addInvoice' || $this->uri->uri_string() == 'invoice/viewInvoice' || $this->uri->uri_string() == 'invoice/editInvoice'){ ?>m-menu__item  m-menu__item--submenu m-menu__item--open<?php }else{ ?>m-menu__item m-menu__item--submenu<?php } ?>" aria-haspopup="true"  m-menu-submenu-toggle="hover">
								<a  href="javascript:;" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-interface-7"></i>
									<span class="m-menu__link-text">
										Invoices
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu ">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="<?php if($this->uri->uri_string() == 'invoice/addInvoice'){ ?>m-menu__item m-menu__item--active<?php }else{ ?>m-menu__item<?php } ?>" aria-haspopup="true" >
											<a  href="<?= site_url() ?>/invoice/addInvoice" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Add Invoice
												</span>
											</a>
										</li>
										<li class="<?php if($this->uri->uri_string() == 'invoice/viewInvoice'){ ?>m-menu__item m-menu__item--active<?php }else{ ?>m-menu__item<?php } ?>" aria-haspopup="true" >
											<a  href="<?= site_url() ?>/invoice/viewInvoice" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													View Invoices
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="<?php if($this->uri->uri_string() == 'auditMaster/addAudit' || $this->uri->uri_string() == 'auditMaster/addAuditFormView' || $this->uri->uri_string() == 'auditMaster/viewAudit'){ ?>m-menu__item  m-menu__item--submenu m-menu__item--open<?php }else{ ?>m-menu__item m-menu__item--submenu<?php } ?>" aria-haspopup="true"  m-menu-submenu-toggle="hover">
								<a  href="javascript:;" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-tabs"></i>
									<span class="m-menu__link-text">
										Audit Master
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu ">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="<?php if($this->uri->uri_string() == 'auditMaster/addAudit'){ ?>m-menu__item m-menu__item--active<?php }else{ ?>m-menu__item<?php } ?>" aria-haspopup="true" >
											<a  href="<?= site_url() ?>/auditMaster/addAudit" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Add Audit Master
												</span>
											</a>
										</li>
										<li class="<?php if($this->uri->uri_string() == 'auditMaster/addAuditFormView'){ ?>m-menu__item m-menu__item--active<?php }else{ ?>m-menu__item<?php } ?>" aria-haspopup="true" >
											<a  href="<?= site_url() ?>/auditMaster/addAuditFormView" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Add Audit Form View
												</span>
											</a>
										</li>
										<li class="<?php if($this->uri->uri_string() == 'auditMaster/viewAudit'){ ?>m-menu__item m-menu__item--active<?php }else{ ?>m-menu__item<?php } ?>" aria-haspopup="true" >
											<a  href="<?= site_url() ?>/auditMaster/viewAudit" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													View Audit Masters
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="<?php if($this->uri->uri_string() == 'status/addStatus' || $this->uri->uri_string() == 'status/viewStatus'){ ?>m-menu__item  m-menu__item--submenu m-menu__item--open<?php }else{ ?>m-menu__item m-menu__item--submenu<?php } ?>" aria-haspopup="true"  m-menu-submenu-toggle="hover">
								<a  href="javascript:;" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-interface-1"></i>
									<span class="m-menu__link-text">
										Status
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu ">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="<?php if($this->uri->uri_string() == 'status/addStatus'){ ?>m-menu__item m-menu__item--active<?php }else{ ?>m-menu__item<?php } ?>" aria-haspopup="true" >
											<a  href="<?= site_url() ?>/status/addStatus" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Add Status
												</span>
											</a>
										</li>
										<li class="<?php if($this->uri->uri_string() == 'status/viewStatus'){ ?>m-menu__item m-menu__item--active<?php }else{ ?>m-menu__item<?php } ?>" aria-haspopup="true" >
											<a  href="<?= site_url() ?>/status/viewStatus" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													View Status
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="<?php if($this->uri->uri_string() == 'workStatus/addWorkStatus' || $this->uri->uri_string() == 'workStatus/viewWorkStatus'){ ?>m-menu__item  m-menu__item--submenu m-menu__item--open<?php }else{ ?>m-menu__item m-menu__item--submenu<?php } ?>" aria-haspopup="true"  m-menu-submenu-toggle="hover">
								<a  href="javascript:;" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-interface-6"></i>
									<span class="m-menu__link-text">
										Work Status
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu ">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="<?php if($this->uri->uri_string() == 'workStatus/addWorkStatus'){ ?>m-menu__item m-menu__item--active<?php }else{ ?>m-menu__item<?php } ?>" aria-haspopup="true" >
											<a  href="<?= site_url() ?>/workStatus/addWorkStatus" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Add Work Status
												</span>
											</a>
										</li>
										<li class="<?php if($this->uri->uri_string() == 'workStatus/viewWorkStatus'){ ?>m-menu__item m-menu__item--active<?php }else{ ?>m-menu__item<?php } ?>" aria-haspopup="true" >
											<a  href="<?= site_url() ?>/workStatus/viewWorkStatus" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													View Work Status
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="<?php if($this->uri->uri_string() == 'fileManagement/addFiles' || $this->uri->uri_string() == 'fileManagement'){ ?>m-menu__item  m-menu__item--submenu m-menu__item--open<?php }else{ ?>m-menu__item m-menu__item--submenu<?php } ?>" aria-haspopup="true"  m-menu-submenu-toggle="hover">
								<a  href="javascript:;" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-interface-6"></i>
									<span class="m-menu__link-text">
										File Management
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu ">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="<?php if($this->uri->uri_string() == 'fileManagement/addFiles'){ ?>m-menu__item m-menu__item--active<?php }else{ ?>m-menu__item<?php } ?>" aria-haspopup="true" >
											<a  href="<?= site_url() ?>/fileManagement/addFiles" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													Add Files
												</span>
											</a>
										</li>
										<li class="<?php if($this->uri->uri_string() == 'fileManagement'){ ?>m-menu__item m-menu__item--active<?php }else{ ?>m-menu__item<?php } ?>" aria-haspopup="true" >
											<a  href="<?= site_url() ?>/fileManagement" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													View Files
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
							<li class="<?php if($this->uri->uri_string() == 'dashboard/profile'){ ?>m-menu__item m-menu__item--active<?php }else{ ?>m-menu__item<?php } ?>" aria-haspopup="true"  m-menu-submenu-toggle="hover">
								<a  href="javascript:;" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-profile"></i>
									<span class="m-menu__link-text">
										Profile
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
							</li>
							<li class="<?php if($this->uri->uri_string() == 'settings/generalSetting'){ ?>m-menu__item  m-menu__item--submenu m-menu__item--open<?php }else{ ?>m-menu__item m-menu__item--submenu<?php } ?>" aria-haspopup="true"  m-menu-submenu-toggle="hover">
								<a  href="javascript:;" class="m-menu__link m-menu__toggle">
									<i class="m-menu__link-icon flaticon-settings"></i>
									<span class="m-menu__link-text">
										Settings
									</span>
									<i class="m-menu__ver-arrow la la-angle-right"></i>
								</a>
								<div class="m-menu__submenu ">
									<span class="m-menu__arrow"></span>
									<ul class="m-menu__subnav">
										<li class="<?php if($this->uri->uri_string() == 'settings/generalSetting'){ ?>m-menu__item m-menu__item--active<?php }else{ ?>m-menu__item<?php } ?>" aria-haspopup="true" >
											<a  href="components/calendar/basic.html" class="m-menu__link ">
												<i class="m-menu__link-bullet m-menu__link-bullet--dot">
													<span></span>
												</i>
												<span class="m-menu__link-text">
													General Setting
												</span>
											</a>
										</li>
									</ul>
								</div>
							</li>
						</ul>
					</div>
					<!-- END: Aside Menu -->