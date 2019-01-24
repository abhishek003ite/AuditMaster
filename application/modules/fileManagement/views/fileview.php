<link href="<?= base_url() ?>assets/filemanager/styles/default/default.css" rel="stylesheet" type="text/css" media="screen" />
		
<!-- Makes the file tree(s) expand/collapsae dynamically -->
<script src="<?= base_url() ?>assets/filemanager/js/php_file_tree.js" type="text/javascript"></script>
<style>
    li:before{
       display: inline-block;
       height: 100px!important;
       width: 100px!imortant;
    }
</style>
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
									File Manager
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
						<!--Begin::Section-->
						<div class="row">
						    <div class="col-xl-12">
						        <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
					
            		            </div>
            		        </div>
            		        <div class="col-lg-6">
								<!--begin::Portlet-->
								<div class="m-portlet">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<h3 class="m-portlet__head-text">
													File Management
												</h3>
											</div>
										</div>
									</div>
									<div class="m-portlet__body">
										<?php
		
                                    		// This links the user to http://example.com/?file=filename.ext
                                    		echo php_file_tree($_SERVER['DOCUMENT_ROOT']."/fileManager", "http://auditsystem.exygo.com/?file=[link]/");
                                    		
                                    	?>
									</div>
								</div>
								<!--end::Portlet-->
							</div>
            		    </div>
            		</div>
				</div>
			</div>
			<!-- end:: Body -->