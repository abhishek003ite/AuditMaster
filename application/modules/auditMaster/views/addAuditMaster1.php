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
									Add Audit Master
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
												Audit Master
											</span>
										</a>
									</li>
									<li class="m-nav__separator">
										-
									</li>
									<li class="m-nav__item">
										<a href="" class="m-nav__link">
											<span class="m-nav__link-text">
												Create Audit Master
											</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<!-- END: Subheader -->
					<div class="m-content">
					    <form action="<?= site_url() ?>/auditMaster/addAuditMasterFunc" method="post">
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
													Create Audit Master
												</h3>
											</div>
										</div>
									</div>
									<!--begin::Form-->
										<div class="m-portlet__body">
											<div class="form-group m-form__group">
												<label for="status">
													Status
												</label>
												<select class="form-control m-input" required id="status" name="status">
												    <option value="">Select Status</option>
												    <?php foreach($status as $st){ ?>
												        <option value="<?= $st['id'] ?>"><?= $st['status'] ?></option>
												    <?php } ?>
												</select>
											</div>
											<div class="form-group m-form__group">
												<label for="workStatus">
													Work Status
												</label>
												<select class="form-control m-input" required id="workStatus" name="workStatus">
												    <option value="">Select Work Status</option>
												    <?php foreach($workStatus as $wst){ ?>
												        <option value="<?= $wst['id'] ?>"><?= $wst['workStatus'] ?></option>
												    <?php } ?>
												</select>
											</div>
											<div class="form-group m-form__group">
												<label for="engagementDate">
													Engagement Date
												</label>
												<input type="date" id="engagementDate" required name="engagementDate" class="form-control m-input"/>
											</div>
											<div class="form-group m-form__group">
												<label for="nameOfSMSF">
													Name Of SMSF
												</label>
												<input type="text" id="nameOfSMSF" required name="nameOfSMSF" class="form-control m-input" />
											</div>
											<div class="form-group m-form__group">
												<label for="ABN">
													ABN
												</label>
												<input class="form-control m-input" id="ABN" required name="ABN" type="text" maxlength="11"/>
											</div>
											<div class="form-group m-form__group">
												<label for="attn">
													Attn
												</label>
												<input class="form-control m-input" required id="attn" name="attn" type="text"/>
											</div>
											<div class="form-group m-form__group">
											    <label for="nameOfTrustee1">
											        Name Of Trustee / Dire1
											    </label>
											    <input type="text" class="form-control m-input" required id="nameOfTrustee1" name="nameOfTrustee1"/>
											</div>
											<div class="form-group m-form__group">
											    <label for="nameOfTrustee2">
											        Name Of Trustee / Dire2
											    </label>
											    <input type="text" class="form-control m-input" id="nameOfTrustee2" name="nameOfTrustee2"/>
											</div>
											<div class="form-group m-form__group">
											    <label for="nameOfTrustee3">
											        Name Of Trustee / Dire3
											    </label>
											    <input type="text" class="form-control m-input" id="nameOfTrustee3" name="nameOfTrustee3"/>
											</div>
											<div class="form-group m-form__group">
											    <label for="nameOfTrustee4">
											        Name Of Trustee / Dire4
											    </label>
											    <input type="text" class="form-control m-input" id="nameOfTrustee4" name="nameOfTrustee4"/>
											</div>
											<div class="form-group m-form__group">
											    <label for="nameOfTrustee5">
											        Name Of Trustee / Dire5
											    </label>
											    <input type="text" class="form-control m-input" id="nameOfTrustee5" name="nameOfTrustee5"/>
											</div>
											<div class="form-group m-form__group">
											    <label for="nameOfTrustee6">
											        Name Of Trustee / Dire6
											    </label>
											    <input type="text" class="form-control m-input" id="nameOfTrustee6" name="nameOfTrustee6"/>
											</div>
											<div class="form-group m-form__group">
											    <label for="nameOfTRCo">
											        Name Of TR Co
											    </label>
											    <input type="text" class="form-control m-input" required id="nameOfTRCo" name="nameOfTRCo"/>
											</div>
											<div class="form-group m-form__group">
											    <label for="ACN">
											        ACN
											    </label>
											    <input type="text" class="form-control m-input" required id="ACN" name="ACN"/>
											</div>
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
													Create Audit Master
												</h3>
											</div>
										</div>
									</div>
    								<!--begin::Form-->
    									<div class="m-portlet__body">
    										<div class="form-group m-form__group">
    											<label for="forTheYearEnded">
    												For The Year Ended
    											</label>
    											<input type="text" class="form-control m-input" autocomplete="off" id="forTheYearEnded" name="forTheYearEnded" placeholder="For The Year ended." maxlength="4">
    										</div>
    										<div class="form-group m-form__group">
    											<label for="nameOfAccountant">
    												Name Of Accountant
    											</label>
    											<select class="form-control m-input" id="nameOfAccountant" name="nameOfAccountant">
    											    <option value="">Select Accountant</option>
    											    <?php foreach($accountants as $acc){ ?>
    											        <option value="<?= $acc['id'] ?>"><?= $acc['accountantName'] ?></option>
    											    <?php } ?>
    											</select>
    										</div>
    										<div class="form-group m-form__group">
    											<label for="addressAccountant">
    												Address Of Accountant
    											</label>
    											<select class="form-control m-input" id="addressAccountant" name="addressAccountant">
    												<option value="">Select Address</option>
    												<?php foreach($accountants as $acc){ ?>
    											        <option value="<?= $acc['address'] ?>"><?= $acc['address'] ?></option>
    											    <?php } ?>
    											</select>
    										</div>
    										<div class="form-group m-form__group">
    											<label for="auditReportDate">
    												Audit Report Date
    											</label>
    											<input type="date" class="form-control m-input" autocomplete="off" id="auditReportDate" name="auditReportDate">
    										</div>
    										<div class="form-group m-form__group">
    											<label for="invoiceAmountGross">
    												Invoice Amount Gross
    											</label>
    											<input type="text" class="form-control m-input" autocomplete="off" id="invoiceAmountGross" name="invoiceAmountGross">
    										</div>
    										<div class="form-group m-form__group">
    											<label for="invoiceGST">
    												Invoice GST
    											</label>
    											<input type="text" class="form-control m-input" disabled autocomplete="off" id="invoiceGST" name="invoiceGST">
    										</div>
    										<div class="form-group m-form__group">
    											<label for="otherASICSearch">
    												Other ASIC Search
    											</label>
    											<input type="text" class="form-control m-input" autocomplete="off" id="otherASICSearch" name="otherASICSearch">
    										</div>
    										<div class="form-group m-form__group">
    											<label for="otherExpTitleSearch">
    												Other Exp Title Search
    											</label>
    											<input type="text" class="form-control m-input" autocomplete="off" id="otherExpTitleSearch" name="otherExpTitleSearch">
    										</div>
    										<div class="form-group m-form__group">
    											<label for="otherExpOtherSpecify">
    												Other Exp Other Specify
    											</label>
    											<input type="text" class="form-control m-input" autocomplete="off" id="otherExpOtherSpecify" name="otherExpOtherSpecify">
    										</div>
    										<div class="form-group m-form__group">
    											<label for="invoiceTotal">
    												Invoice Total
    											</label>
    											<input type="text" disabled class="form-control m-input" autocomplete="off" value="0" id="invoiceTotal" name="invoiceTotal">
    										</div>
    										<div class="form-group m-form__group">
    											<label for="previousAuditorName">
    												Previous Auditor Name
    											</label>
    											<input type="text" class="form-control m-input" autocomplete="off" id="previousAuditorName" name="previousAuditorName">
    										</div>
    										<div class="form-group m-form__group">
    											<label for="previousAuditorCompany">
    												Previous Auditor Company
    											</label>
    											<input type="text" class="form-control m-input" autocomplete="off" id="previousAuditorCompany" name="peviousAuditorCompany">
    										</div>
    										<div class="form-group m-form__group">
    											<label for="previousAuditorEmail">
    												Previous Auditor Email
    											</label>
    											<input type="email" class="form-control m-input" autocomplete="off" id="previousAuditorEmail" name="previousAuditorEmail">
    										</div>
    										<div class="form-group m-form__group">
    											<label for="auditorNote">
    												Auditor Note
    											</label>
    											<textarea class="form-control m-input" autocomplete="off" id="auditorNote" name="auditorNote"></textarea>
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
<script>
    $(document).ready(function(){
        $('#invoiceAmountGross').on('blur', function(){
            var IAG = $(this).val();
            var IT = $('#invoiceTotal').val();
            var IGST = parseFloat(IAG) * 0.1;
            var total = parseFloat(IT) + parseFloat(IAG) + parseFloat(IGST);
            $('#invoiceTotal').val(total);
            $('#invoiceGST').val(IGST);
        });
        $('#otherASICSearch').on('blur', function(){
            var IAG = $(this).val();
            var IT = $('#invoiceTotal').val();
            var total = parseFloat(IT) + parseFloat(IAG);
            $('#invoiceTotal').val(total);
        });
        $('#otherExpTitleSearch').on('blur', function(){
            var IAG = $(this).val();
            var IT = $('#invoiceTotal').val();
            var total = parseFloat(IT) + parseFloat(IAG);
            $('#invoiceTotal').val(total);
        });
        $('#otherExpOtherSpecify').on('blur', function(){
            var IAG = $(this).val();
            var IT = $('#invoiceTotal').val();
            var total = parseFloat(IT) + parseFloat(IAG);
            $('#invoiceTotal').val(total);
        });
    });
</script>
