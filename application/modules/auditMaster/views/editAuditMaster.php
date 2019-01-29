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
									Edit Audit Master
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
												Edit Audit Master
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
											Edit Audit Master
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
									</div>
								</div>
								<!--end: Search Form -->
		<!--begin: Datatable -->
		<form action="<?= site_url() ?>/auditMaster/editAuditMasterFunc/<?= $auditMaster[0]['id'] ?>" method="post">
								<table CELLPADDING="2" CELLSPACING="2" style="table-layout: fixed; width: 100%;" class="display table table-hover table-responsive" id="html_table" width="300%">
								    
									<thead>
										<tr>
											<th title="Field #1">
												S. No.
											</th>
											<th width="30%" title="Field #2">
												Status
											</th>
											<th width="30%" title="Field #3">
												Work Status
											</th>
											<th title="Field #4">
												Engagement Date
											</th>
											<th width="50%" title="Field #5">
												Name Of SMSF
											</th>
											<th title="Field #6">
												ABN
											</th>
											<th title="Field #8">
											    ATTN
											</th>
											<th title="Field #9">
												Name Of Trustee 1
											</th>
											<th title="Field #9">
												Name Of Trustee 2
											</th>
											<th title="Field #9">
												Name Of Trustee 3
											</th>
											<th title="Field #9">
												Name Of Trustee 4
											</th>
											<th title="Field #9">
												Name Of Trustee 5
											</th>
											<th title="Field #9">
												Name Of Trustee 6
											</th>
											<th title="Field #9">
												Name Of TR Co
											</th>
											<th title="Field #9">
												ACN
											</th>
											<th title="Field #9">
												For the Year Ended
											</th>
											<th title="Field #9">
												Accountant Name
											</th>
											<th title="Field #9">
												Accountant Address
											</th>
											<th title="Field #9">
												Invoice Amount Gross
											</th>
											<th title="Field #9">
												Invoice GST
											</th>
											<th title="Field #9">
												Other Exp ASIC Search
											</th>
											<th title="Field #9">
												Other Exp Title Search
											</th>
											<th title="Field #9">
												Other Exp Other Specify
											</th>
											<th title="Field #9">
												Invoice Total
											</th>
											<th title="Field #9">
												Previous Auditor Name
											</th>
											<th title="Field #9">
												Previous Auditor Company
											</th>
											<th title="Field #9">
												Previous Auditor Email
											</th>
											<th title="Field #9">
												Auditor Notes
											</th>
											<th title="Field #9">
												Action
											</th>
										</tr>
									</thead>
									<tbody>
									    <?php $i = 1;?>
									        <tr>
									            <td><?= $i ?></td>
									            <td style="width: 200px">
									                <select class="form-control m-input" required id="status" name="status">
												    <option value="">Select Status</option>
												    <?php foreach($status as $st){ ?>
												        <option <?php if($st['id'] == $auditMaster[0]['statusId']){ ?>selected<?php } ?> value="<?= $st['id'] ?>"><?= $st['status'] ?></option>
												    <?php } ?>
												</select>
									            </td>
									            <td width="30%">
									                <select class="form-control m-input" required id="workStatus" name="workStatus">
												    <option value="">Select Work Status</option>
												    <?php foreach($workStatus as $wst){ ?>
												        <option <?php if($wst['id'] == $auditMaster[0]['workStatusId']){ ?>selected<?php } ?> value="<?= $wst['id'] ?>"><?= $wst['workStatus'] ?></option>
												    <?php } ?>
												</select>
									            </td>
									            <td width="30%">
									                <input type="date" id="engagementDate" value="<?= date('Y-m-d', strtotime($auditMaster[0]['engagementDate'])) ?>" required name="engagementDate" class="form-control m-input"/>
									            </td>
									            <td width="50%"><input type="text" placeholder="Name Of SMSF" value="<?= $auditMaster[0]['nameOfSMSF'] ?>" id="nameOfSMSF" required name="nameOfSMSF" class="form-control m-input" /></td>
									            <td width="10%"><input class="form-control m-input" id="ABN" value="<?= $auditMaster[0]['ABN'] ?>" required name="ABN" type="text" maxlength="11"/></td>
									            <td width="10%"><input class="form-control m-input" value="<?= $auditMaster[0]['ATTN'] ?>" required id="attn" name="attn" type="text"/></td>
									            <td width="10%"><input type="text" class="form-control m-input" value="<?= $auditMaster[0]['nameOfTrustee1'] ?>" required id="nameOfTrustee1" name="nameOfTrustee1"/></td>
									            <td><input type="text" class="form-control m-input" id="nameOfTrustee2" value="<?= $auditMaster[0]['nameOfTrustee2'] ?>" name="nameOfTrustee2"/></td>
									            <td><input type="text" class="form-control m-input" id="nameOfTrustee3" value="<?= $auditMaster[0]['nameOfTrustee3'] ?>" name="nameOfTrustee3"/></td>
									            <td><input type="text" class="form-control m-input" id="nameOfTrustee4" value="<?= $auditMaster[0]['nameOfTrustee4'] ?>" name="nameOfTrustee4"/></td>
									            <td><input type="text" class="form-control m-input" id="nameOfTrustee5" value="<?= $auditMaster[0]['nameOfTrustee5'] ?>" name="nameOfTrustee5"/></td>
									            <td><input type="text" class="form-control m-input" id="nameOfTrustee6" value="<?= $auditMaster[0]['nameOfTrustee6'] ?>" name="nameOfTrustee6"/></td>
									            <td><input type="text" class="form-control m-input" required id="nameOfTRCo" value="<?= $auditMaster[0]['nameOfTrCo'] ?>" name="nameOfTRCo"/></td>
									            <td><input type="text" class="form-control m-input" required id="ACN" value="<?= $auditMaster[0]['ACN'] ?>" name="ACN" maxlength="9"/></td>
									            <td><input type="text" class="form-control m-input" autocomplete="off" value="<?= $auditMaster[0]['forTheYearEnded'] ?>" id="forTheYearEnded" name="forTheYearEnded" placeholder="For The Year ended." maxlength="4"></td>
									            <td>
									                <select class="form-control m-input" id="nameOfAccountant" name="nameOfAccountant">
    											    <option value="">Select Accountant</option>
    											    <?php foreach($accountants as $acc){ ?>
    											        <option <?php if($acc['id'] == $auditMaster[0]['accountantId']){ ?>selected<?php } ?> value="<?= $acc['id'] ?>"><?= $acc['accountantName'] ?></option>
    											    <?php } ?>
    											</select>
									            </td>
									            <td>
									                <select class="form-control m-input" id="addressAccountant" name="addressAccountant">
    												<option value="">Select Address</option>
    												<?php foreach($accountants as $acc){ ?>
    											        <option <?php if($acc['address'] == $auditMaster[0]['accountantAddress']){ ?>selected<?php } ?> value="<?= $acc['address'] ?>"><?= $acc['address'] ?></option>
    											    <?php } ?>
    											</select>
									            </td>
									            <td><input type="text" value="<?= $auditMaster[0]['invoiceAmountGross'] ?>" class="form-control m-input" autocomplete="off" id="invoiceAmountGross" name="invoiceAmountGross"></td>
									            <td><input type="text" value="<?= $auditMaster[0]['invoiceGST'] ?>" class="form-control m-input" disabled autocomplete="off" id="invoiceGST" name="invoiceGST"></td>
									            <td><input type="text" value="<?= $auditMaster[0]['otherExpASICSearch'] ?>" class="form-control m-input" autocomplete="off" id="otherASICSearch" name="otherASICSearch"></td>
									            <td><input type="text" value="<?= $auditMaster[0]['otherExpTitleSearch'] ?>" class="form-control m-input" autocomplete="off" id="otherExpTitleSearch" name="otherExpTitleSearch"></td>
									            <td><input type="text" value="<?= $auditMaster[0]['otherExpOtherSpecify'] ?>" class="form-control m-input" autocomplete="off" id="otherExpOtherSpecify" name="otherExpOtherSpecify"></td>
									            <td><input type="text" value="<?= $auditMaster[0]['invoiceTotal'] ?>" disabled class="form-control m-input" autocomplete="off" value="0" id="invoiceTotal" name="invoiceTotal"></td>
									            <td><input type="text" value="<?= $auditMaster[0]['previousAuditorName'] ?>" class="form-control m-input" autocomplete="off" id="previousAuditorName" name="previousAuditorName"></td>
									            <td><input type="text" value="<?= $auditMaster[0]['previousAuditorCompany'] ?>" class="form-control m-input" autocomplete="off" id="previousAuditorCompany" name="peviousAuditorCompany"></td>
									            <td><input type="email" value="<?= $auditMaster[0]['previousAuditorEmail'] ?>" class="form-control m-input" autocomplete="off" id="previousAuditorEmail" name="previousAuditorEmail"></td>
									            <td>
									                <textarea class="form-control m-input" value="<?= $auditMaster[0]['auditorNotes'] ?>" autocomplete="off" id="auditorNote" name="auditorNote"><?= $auditMaster[0]['auditorNotes'] ?></textarea>
									            </td>
									            <td>
									                <button type="submit" class="btn btn-primary">
    												Submit
    											</button>
    											<button type="reset" class="btn btn-secondary">
    												Cancel
    											</button>
									            </td>
									        </tr>
									</tbody>
								</table>
								</form>
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
	</body>
	<!-- end::Body -->
</html>
