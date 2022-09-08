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
				<p class="text-dark-75 fw-semibold fs-5 mx-2 mt-2">Name:<span class="fw-bold text-primary "> <?=$workshops->first_name?> <?=$workshops->last_name?></span></p>
				<p class="text-dark-75 fw-semibold fs-5 mx-2">Email :<span class="fw-bold text-primary"> <?=$workshops->email_address?></span></p>
				<p class="text-dark-75 fw-semibold fs-5 mx-2">Phone: <span class="fw-bold text-primary">  <?=$workshops->phone_number?></span></p>
				<p class="text-dark-75 fw-semibold fs-5 mx-2">Abstract: <span class="fw-bold text-primary">   <?=$workshops->abstract_title?></span></p>
				<p class="text-dark-75 fw-semibold fs-5 mx-2">Amount:  <span class="fw-bold text-primary">   <?=$workshops->amount?> <?=$workshops->amount_type?></span></p>
				
			</div>
			<!--end::Body-->
		</div>
	</div>
</div>







<!--begin::Form-->
<form id="kt_docs_formvalidation_image_input_workshop" enctype="multipart/form-data"  class="form" action="#" autocomplete="off">
    <!--begin::Input group-->
    <div class="fv-row mb-7">
        <!--begin::Label-->
        <label class="d-block fw-semibold fs-6 mb-5">Upload Payment Receipt</label>
        <!--end::Label-->

        <!--begin::Image input-->
        <div class="image-input image-input-outline image-input-empty" data-kt-image-input="true" style="background-image: url('<?php echo base_url('assets/frontend/media/svg/avatars/blank.svg')?>">
            <!--begin::Preview existing avatar-->
            <div class="image-input-wrapper w-125px h-125px"></div>
            <!--end::Preview existing avatar-->

            <!--begin::Label-->
            <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                <i class="fa fa-pencil"></i>

                <!--begin::Inputs-->
                <input type="file" name="file" id="file"  />
                <input type="hidden" name="avatar_remove" />
                <!--end::Inputs-->
            </label>
            <!--end::Label-->

            <!--begin::Cancel-->
            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                <i class="fa fa-x"></i>
            </span>
            <!--end::Cancel-->

            <!--begin::Remove-->
            <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                <i class="bi bi-x fs-2"></i>
            </span>
            <!--end::Remove-->
        </div>
        <!--end::Image input-->

        <!--begin::Hint-->
        <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
        <!--end::Hint-->
    </div>
    <!--end::Input group-->

    <!--begin::Actions-->
    <button id="kt_docs_formvalidation_image_input_submit_workshop" type="submit" class="btn btn-primary">
        <span class="indicator-label">
            Upload
        </span>
        <span class="indicator-progress">
            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
        </span>
    </button>
    <!--end::Actions-->
</form>
<!--end::Form-->









<!-- <form method="post" enctype="multipart/form-data" id="kt_docs_formvalidation_image_input">
	<div class="fv-row mb-8">
	
	<div class="fs-6 fw-bold mb-1">Attach Your Payment Receipt Here</div>
	<input type="file" placeholder="Add Payment Receipt" name="file" autocomplete="off" id="file" class="form-control bg-transparent" />
</div>

<div class="fv-row mb-8">
	<div class="d-grid mb-10">
    <button type="submit"  class="btn btn-primary" id="kt_docs_formvalidation_image_input_submit">
       
        <span class="indicator-label">Upload Receipt</span>
        
        <span class="indicator-progress">Please wait... 
        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
        
    </button>
	</div>
</div>
</form> -->