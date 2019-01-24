<link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
		<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
					<!-- BEGIN: Aside Menu -->
                    <?= $this->load->view('common/sidebar') ?>
					<!-- END: Aside Menu -->
				</div>
				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									View Users
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
												Dashboard
											</span>
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
												View Users
											</span>
										</a>
									</li>
								</ul>
							</div>
							
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
						
						<div class="m-portlet m-portlet--mobile">
							<div class="m-portlet__head">
								<div class="m-portlet__head-caption">
									<div class="m-portlet__head-title">
										<h3 class="m-portlet__head-text">
											View Users
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
							<div class="m-portlet__body">
								<!--begin: Search Form -->
								<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
									<div class="row align-items-center">
										<div class="col-xl-8 order-2 order-xl-1">
											<div class="form-group m-form__group row align-items-center">
												<div class="col-md-4">
													<div class="m-form__group m-form__group--inline">
														<div class="m-form__label">
															<label>
																Roles:
															</label>
														</div>
														<div class="m-form__control">
															<select class="form-control m-bootstrap-select" id="m_form_status">
																<option value="">
																	All
																</option>
																<option value="1">
																	System Administrator
																</option>
																<option value="2">
																	Manager
																</option>
																<option value="3">
																	Employee
																</option>
															</select>
														</div>
													</div>
													<div class="d-md-none m--margin-bottom-10"></div>
												</div>
												<div class="col-md-4">
													<div class="m-form__group m-form__group--inline">
														<div class="m-form__label">
															<label class="m-label m-label--single">
																Status:
															</label>
														</div>
														<div class="m-form__control">
															<select class="form-control m-bootstrap-select" id="m_form_type">
																<option value="">
																	All
																</option>
																<option value="1">
																	Active
																</option>
																<option value="2">
																	Inactive
																</option>
															</select>
														</div>
													</div>
													<div class="d-md-none m--margin-bottom-10"></div>
												</div>
												<div class="col-md-4">
													<div class="m-input-icon m-input-icon--left">
														<input type="text" class="form-control m-input" placeholder="Search..." id="generalSearch">
														<span class="m-input-icon__icon m-input-icon__icon--left">
															<span>
																<i class="la la-search"></i>
															</span>
														</span>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<!--end: Search Form -->
		<!--begin: Datatable -->
								<table  class="table table-hover table-responsive" id="html_table" width="100%">
									<thead>
										<tr>
											<th title="Field #1" style="width: 40%;">
												S. No.
											</th>
											<th title="Field #2" style="width: 80%;">
												Title
											</th>
											<th title="Field #9" style="width: 80%;">
												Action
											</th>
										</tr>
									</thead>
									<tbody>
									    <?php $i = 1; foreach($status as $user){ ?>
									        <tr>
									            <td><?= $i ?></td>
									            <td><?= $user['workStatus'] ?></td>
									            <td><a href="<?= site_url() ?>workStatus/editWorkStatus/<?= $user['id'] ?>"><i class="fa fa-pencil"></i></a> | <a  onclick="deleteConff('<?= site_url('workStatus/deleteWorkStatus/'.$user['id']."/same") ?>')"><i class="fa fa-trash" style="color: red;"></i></a></td>
									        </tr>
									    <?php } ?>
									</tbody>
								</table>
								<!--end: Datatable -->
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="conf"></div>
			<!-- end:: Body -->
		</div>
		<!-- end:: Page -->
    		        	    
	    <!-- begin::Scroll Top -->
		<div id="m_scroll_top" class="m-scroll-top">
			<i class="la la-arrow-up"></i>
		</div>
		<!-- end::Scroll Top -->		    <!-- begin::Quick Nav -->
		
		<!-- begin::Quick Nav -->	
    	<!--begin::Base Scripts -->
		<script src="<?= base_url() ?>/assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
		<script src="<?= base_url() ?>/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
		<!--end::Base Scripts -->   
        <!--begin::Page Resources -->
		<script src="<?= base_url() ?>/assets/demo/default/custom/components/datatables/base/html-table.js" type="text/javascript"></script>
		<!--https://code.jquery.com/jquery-3.3.1.js-->
		<!--<script src="https://code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>-->
		<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" type="text/javascript"></script>
  <!--      https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js-->
		<!--end::Page Resources -->
		<script>
		    $(document).ready(function() {
                $('#html_table').DataTable();
            } );
            function deleteConff(link){
        //alert(link);
        var a = "<div class='modal fade' id='deleteConf' role='dialog' tabindex='-1' aria-labelledby='mySmallModalLabel'> " +
            "<div class='modal-dialog modal-md' role='document'> " +
            "<div class='modal-content'> " +
            "<div class='modal-header' style='display: block!important;'> " +
            "<button type='button' class='close' data-dismiss='modal' aria-label='Close'> " +
            "<span aria-hidden='true'>×</span> " +
            "</button> " +
            "<h4 style='text-align: left;font-weight: bold;' class='modal-title' id='mySmallModalLabel'> " +
            "Are You Sure? " +
            "</h4> " +
            "</div> " +
            "<div class='modal-body'> " +
            "<button type='button' class='btn btn-info' data-dismiss='modal' aria-label='Close'>Cancel</button> " +
            "<a href='"+link+"'><span class='btn btn-danger'>Delete</span></a>" +
            "</div> " +
            "</div> " +
            "</div> " +
            "</div>";
        $(".conf").html(a);
        $("#deleteConf").modal('toggle');
    }
		</script>
	</body>
	<!-- end::Body -->
</html>
