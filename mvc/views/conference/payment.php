<div class="row">
	<div class="col-lg-6">
		<div class="card bgi-no-repeat card-xl-stretch mb-5 mb-xl-8 bg-light-success" >
			<!--begin::Body-->
			<div class="card-body">
				<a href="#" class="card-title fw-bold text-muted text-hover-primary fs-4 mx-2">Bank Account Details for Registration Fee</a>
				<p class="text-dark-75 fw-semibold fs-5 mx-2 mt-2">Account Title:<span class="fw-bold text-primary "> THE UNIVERSITY OF LAHORE-IET –</span></p>
				<p class="text-dark-75 fw-semibold fs-5 mx-2">Bank Account No :<span class="fw-bold text-primary"> 0020001432730158</span></p>
				<p class="text-dark-75 fw-semibold fs-5 mx-2">IBAN No: <span class="fw-bold text-primary">  PK69 ABPA0020001432730158</span></p>
				<p class="text-dark-75 fw-semibold fs-5 mx-2">Bank Name: <span class="fw-bold text-primary">   ALLIED BANK ISLAMIC</span></p>
				<p class="text-dark-75 fw-semibold fs-5 mx-2">ABL Swift Code:  <span class="fw-bold text-primary">   ABPAPKKA979</span></p>
				
			</div>
			<!--end::Body-->
		</div>
	</div>
	<div class="col-lg-6">
		<div class="card bgi-no-repeat card-xl-stretch mb-5 mb-xl-8 bg-light-info" >
			<!--begin::Body-->
			<div class="card-body">
				<a href="#" class="card-title fw-bold text-muted text-hover-primary fs-4 mx-2">Your Details</a>
				<p class="text-dark-75 fw-semibold fs-5 mx-2 mt-2">Name:<span class="fw-bold text-primary "> <?=$registrations->first_name?> <?=$registrations->last_name?></span></p>
				<p class="text-dark-75 fw-semibold fs-5 mx-2">Email :<span class="fw-bold text-primary"> <?=$registrations->email_address?></span></p>
				<p class="text-dark-75 fw-semibold fs-5 mx-2">Phone: <span class="fw-bold text-primary">  <?=$registrations->phone_number?></span></p>
				<p class="text-dark-75 fw-semibold fs-5 mx-2">Abstract: <span class="fw-bold text-primary">   <?=$registrations->abstract_title?></span></p>
				<p class="text-dark-75 fw-semibold fs-5 mx-2">Amount:  <span class="fw-bold text-primary">   <?=$registrations->amount?> <?=$registrations->amount_type?></span></p>
				
			</div>
			<!--end::Body-->
		</div>
	</div>
</div>
<form method="post" enctype="multipart/form-data">
	<div class="fv-row mb-8">
	<!--begin::Phone-->
	<div class="fs-6 fw-bold mb-1">Attach Your Payment Receipt Here</div>
	<input type="file" placeholder="Add Payment Receipt" name="file" autocomplete="off" class="form-control bg-transparent" />
	<input type="hidden" name="title" value="ttt">

<!--end::Phone-->
</div>
<?php
    if(form_error('file'))
        echo '<div class="fv-plugins-message-container invalid-feedback"><div data-field="text_input" data-validator="notEmpty">'. form_error('file'). "</div></div>";
        else 
    echo ""; ?>
<div class="fv-row mb-8">
	<div class="d-grid mb-10">
    <button type="submit"  class="btn btn-primary">
        <!--begin::Indicator label-->
        <span class="indicator-label">Upload Receipt</span>
        <!--end::Indicator label-->
        <!--begin::Indicator progress-->
        <span class="indicator-progress">Please wait... 
        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        <!--end::Indicator progress-->
    </button>
	</div>
</div>
</form>