		<!-- begin::Body -->
			<div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
				<!-- BEGIN: Left Aside -->
				<button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
					<i class="la la-close"></i>
				</button>
				<div id="m_aside_left" class="m-grid__item	m-aside-left  m-aside-left--skin-dark ">
					<?= $this->load->view('common/sidebar') ?>
				</div>
				<!-- END: Left Aside -->
				<div class="m-grid__item m-grid__item--fluid m-wrapper">
					<!-- BEGIN: Subheader -->
					<div class="m-subheader ">
						<div class="d-flex align-items-center">
							<div class="mr-auto">
								<h3 class="m-subheader__title m-subheader__title--separator">
									Add Invoice
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
												Invoices
											</span>
										</a>
									</li>
									<li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">
												Create Invoice
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
					    <form action="<?= site_url() ?>/invoice/addInvoiceFunc" method="post">
						<div class="row">
							<div class="col-md-6">
								<!--begin::Portlet-->
								<div class="m-portlet m-portlet--tab">
									<div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
												<h3 class="m-portlet__head-text">
													Create Invoice
												</h3>
											</div>
										</div>
									</div>
									<!--begin::Form-->
										<div class="m-portlet__body">
											<div class="form-group m-form__group">
												<label for="invoiceNumber">
													Invoice Number
												</label><br/>
												<div class="input-group">
                        							<div class="input-group-prepend">
                        								<span class="input-group-text">Audit / </span>
                        								<span class="input-group-text"><?= date('Y') ?> / </span>
                        							</div>
                        							<input type="text" class="form-control m-input" id="invoiceNumber" name="invoiceNumber" placeholder="Invoice Number" value="<?php if($totalInvoice){ echo $totalInvoice + 1; }else{ echo '1'; } ?>">
                        						</div>
											</div>
											<br/>
											<div class="form-group m-form__group">
											    <label for="invoiceDate">
											        Invoice Date
											    </label>
											    <input type="text" class="form-control m-input" placeholder="Select Invoice Date" id="m_datetimepicker_1" name="invoiceDate" />
											</div>
											<br/>
											<div class="form-group m-form__group">
											    <label for="invoiceTo">
											        Invoice To
											    </label>
											    <input type="text" class="form-control m-input" placeholder="Invoice For" name="invoiceTo" id="invoiceTo"/>
											</div>
											<br/>
											<div class="form-group m-form__group">
											    <label for="address">
											        C/o Address
											    </label>
											    <textarea class="form-control m-input" cols="30" rows="5"  style="overflow:auto;resize:none" placeholder="Address" name="address" id="address"></textarea>
											</div>
											<br/>
											<div class="form-group m-form__group">
    											<label for="item">
    												Item
    											</label>
    											<input type="text" class="form-control m-input" id="item" name="item" />
    										</div>
    										<br/>
										</div>
									<!--end::Form-->
								</div>
								<!--end::Portlet-->
						</div>
    						<div class="col-md-6">
    							<!--begin::Portlet-->
    							<div class="m-portlet m-portlet--tab">
    							    <div class="m-portlet__head">
										<div class="m-portlet__head-caption">
											<div class="m-portlet__head-title">
												<span class="m-portlet__head-icon m--hide">
													<i class="la la-gear"></i>
												</span>
												<h3 class="m-portlet__head-text">
													Create Invoice
												</h3>
											</div>
										</div>
									</div>
    								<!--begin::Form-->
    									<div class="m-portlet__body">
    									    <div class="form-group m-form__group">
    										    <label for="description">
    										        Description
    										    </label>
    										    <textarea class="form-control m-input" cols="30" rows="5"  style="overflow:auto;resize:none" placeholder="description" name="description" id="description"></textarea>
    										</div>
    										<br/>
    										<div class="form-group m-form__group">
    										    <label for="amount">
    										        Amount
    										    </label>
    										    <input type="text" class="form-control m-input" placeholder="Amount" id="amount" name="amount"/>
    										</div>
    										<br/>
    										<div class="form-group m-form__group">
    										    <label for="invoiceGST">
    										        Invoice GST
    										    </label>
    										    <input type="text" class="form-control m-input" placeholder="Invoice GST" id="invoiceGST" name="invoiceGST"/>
    										</div>
    										<br/>
    										<div class="form-group m-form__group">
    										    <label for="otherExpASIC">
    										        Other Exp ASIC Search
    										    </label>
    										    <input type="text" class="form-control m-input" placeholder="Other Exp ASIC Search" id="otherExpASIC" name="otherExpASICSearch"/>
    										</div>
    										<div class="form-group m-form__group">
    										    <label for="otherExpTitle">
    										        Other Exp Title Search
    										    </label>
    										    <input type="text" class="form-control m-input" placeholder="Other Exp Title Search" id="otherExpTitle" name="otherExpTitleSearch"/>
    										</div>
    										<br/>
    										<div class="form-group m-form__group">
    										    <label for="otherExpOther">
    										        Other Exp Other Specify
    										    </label>
    										    <input type="text" class="form-control m-input" placeholder="Other Exp Other Specify" id="otherExpOther" name="otherExpOtherSpecify"/>
    										</div>
    										<br/>
    										<div class="form-group m-form__group">
    										    <label for="invoiceTotal">
    										        Invoice Total
    										    </label>
    										    <input type="text" class="form-control m-input" placeholder="Invoice Total" id="invoiceTotal" name="invoiceTotal"/>
    										</div>
    									</div>
    									<div class="m-portlet__foot m-portlet__foot--fit form-group m-form__group">
    										<div class="m-form__actions">
    											<button type="submit" class="btn btn-primary">
    												Submit
    											</button>
    											<button type="reset" class="btn btn-secondary">
    												Cancel
    											</button>
    										</div>
    									</div>
    								<!--end::Form-->
    							</div>
    							<!--end::Portlet-->
    			</div>
		                </div>
		                </form>
	</div>
</div>
</div>
<!-- end:: Body -->
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
 <script src="<?= base_url() ?>/assets/demo/default/custom/components/forms/widgets/bootstrap-datetimepicker.js" type="text/javascript"></script>
<script>
    $(document).ready(function(){
        $('#amount').on('blur', function(){
            var IAG = $(this).val();
            var IT = $('#invoiceTotal').val();
            var IGST = parseFloat(IAG) * 0.1;
            var total = parseFloat(IT) + parseFloat(IAG) + parseFloat(IGST);
            $('#invoiceTotal').val(total);
            $('#invoiceGST').val(IGST);
        });
        $('#otherASIC').on('blur', function(){
            var IAG = $(this).val();
            var IT = $('#invoiceTotal').val();
            var total = parseFloat(IT) + parseFloat(IAG);
            $('#invoiceTotal').val(total);
        });
        $('#otherExpTitle').on('blur', function(){
            var IAG = $(this).val();
            var IT = $('#invoiceTotal').val();
            var total = parseFloat(IT) + parseFloat(IAG);
            $('#invoiceTotal').val(total);
        });
        $('#otherExpOther').on('blur', function(){
            var IAG = $(this).val();
            var IT = $('#invoiceTotal').val();
            var total = parseFloat(IT) + parseFloat(IAG);
            $('#invoiceTotal').val(total);
        });
    });
</script>
