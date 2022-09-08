<div class="row">
    <div class="col-lg-12">
         <!--begin::Form-->
<form class="form w-100" novalidate="novalidate" method="post" id="kt_workshop_form">
<!--begin::Heading-->
<div class="text-center mb-11">
<!--begin::Title-->
<h1 class="text-dark fw-bolder mb-3">Workshop Form</h1>
<!--end::Title-->
<!--begin::Subtitle-->
<div class="text-gray-500 fw-semibold fs-6">International Conference on Advances in Allied Health Sciences</div>
<!--end::Subtitle=-->
</div>
<!--begin::Heading-->
<!--begin::Login options-->
<div class="row g-3 mb-9">
<!--begin::Col-->

<!--end::Col-->
<!--begin::Col-->

<!--end::Col-->
</div>
<!--end::Login options-->
<!--begin::Separator-->
<!-- <div class="separator separator-content my-14">
<span class="w-125px text-gray-500 fw-semibold fs-7">Or with email</span>
</div> -->
<!--end::Separator-->
<!--begin::Input group=-->
<div class="row mb-8 fv-row">
<!--begin::Name-->
<div class="col-lg-8 fv-row">
<select id="workshoptype_tt" class="form-control form-select"   name="workshoptypeID" data-placeholder="Select Type of Workshop" >
<option>Please Select workshop type</option>
<?php 
foreach ($workshoptype as $r) {?>
<option data-amount="<?php echo $r->amount;?>"  data-amount_type="<?php echo $r->amount_type;?>" value="<?php echo $r->workshoptypeID;?>"><?php echo $r->workshoptype;?></option>
<?php }?>
</select>
<?php
// if(form_error('regtypeID'))
// echo '<div class="fv-plugins-message-container invalid-feedback"><div data-field="text_input" data-validator="notEmpty">'. form_error('regtypeID'). "</div></div>";
// else 
// echo ""; ?>
</div>

<!--end::Name-->
<div class="col-lg-2">
<!--begin::Phone-->
<input type="text" readonly id="amount_type" placeholder="PKR" name="amount_type" autocomplete="off" class="form-control bg-transparent" />
<!--end::Phone-->
</div>    <!--end::Name-->
<div class="col-lg-2">
<!--begin::Phone-->
<input type="text" id="amount" readonly placeholder="Amount" name="amount" autocomplete="off" class="form-control bg-transparent" />
<!--end::Phone-->
</div>
</div>
<!--begin::Input group=-->

<!--begin::Input group=-->
<div class="row mb-8">
<div class="col-lg-6 fv-row">
<input type="text" placeholder="Title of Abstract" name="abstract_title" id="abstract_title" autocomplete="off" class="form-control bg-transparent" />
</div>
<div class="col-lg-6 fv-row">
<input type="text" placeholder="Title (Prof./Assoc. Prof./Dr./Mr./Ms.)" name="title_name" autocomplete="off" class="form-control bg-transparent" />
<?php
// if(form_error('title_name'))
// echo '<div class="fv-plugins-message-container invalid-feedback"><div data-field="text_input" data-validator="notEmpty">'. form_error('title_name'). "</div></div>";
// else 
// echo ""; ?>
</div>
</div>
<div class="row mb-8">
<div class="fv-row col-lg-3">
<input type="text" placeholder="First Name" name="first_name" autocomplete="off" class="form-control bg-transparent" />
<?php
// if(form_error('first_name'))
// echo '<div class="fv-plugins-message-container invalid-feedback"><div data-field="text_input" data-validator="notEmpty">'. form_error('first_name'). "</div></div>";
// else 
// echo ""; ?>
</div>
<div class="col-lg-3 fv-row">
<input type="text" placeholder="Last Name" name="last_name" autocomplete="off" class="form-control bg-transparent" />
<?php
// if(form_error('last_name'))
// echo '<div class="fv-plugins-message-container invalid-feedback"><div data-field="text_input" data-validator="notEmpty">'. form_error('last_name'). "</div></div>";
// else 
// echo ""; ?>
</div>
<div class="col-lg-6 fv-row">
<input type="text" placeholder="Email" name="email_address" autocomplete="off" class="form-control bg-transparent" />
<?php
if(form_error('email_address'))
echo '<div class="fv-plugins-message-container invalid-feedback"><div data-field="text_input" data-validator="notEmpty">'. form_error('email_address'). "</div></div>";
else 
echo ""; ?>
</div>
</div>
<div class="row mb-8">
<div class="col-lg-6 fv-row">
<input type="text" placeholder="Phone" name="phone_number" autocomplete="off" class="form-control bg-transparent" />
<?php
// if(form_error('phone_number'))
// echo '<div class="fv-plugins-message-container invalid-feedback"><div data-field="text_input" data-validator="notEmpty">'. form_error('phone_number'). "</div></div>";
// else 
// echo ""; ?>
</div>
<div class="col-lg-6 fv-row">

<?php
$country[''] = 'Nationality';
foreach ($allcountry as $allcountryKey => $allcountryit) {
$country[$allcountryKey] = $allcountryit;
}
?>
<?php
echo form_dropdown("nationality", $country, set_value("nationality"), "id='nationality' class='form-select' data-control='select2' data-placeholder='Nationality' ");
?>



<?php
// if(form_error('nationality'))
// echo '<div class="fv-plugins-message-container invalid-feedback"><div data-field="text_input" data-validator="notEmpty">'. form_error('nationality'). "</div></div>";
// else 
// echo ""; ?>
</div>
</div>
<div class="row mb-8">
<!--begin::Name-->
<div class="col-lg-6 fv-row">
<select class="form-select" data-control="select2" name="categoryID" data-placeholder="Select Category">
<option></option>
<?php foreach ($categorys as $c) { ?>
<option value="<?php echo $c->categoryID;?>"> <?php echo $c->category;?></option>   
<?php }?>
</select>

</div>
<!--end::Name-->
<div class=" col-lg-6 fv-row">
<!--begin::Phone-->
<input type="text" placeholder="Institute/Organization" name="organization" autocomplete="off" class="form-control bg-transparent" />
<!--end::Phone-->
</div>
</div>
<!--begin::Input group=-->
<div class="fv-row mb-8">
<!--begin::Phone-->
<input type="text" placeholder="Mailing Address" name="mailing_address" id="mailing_address" autocomplete="off" class="form-control bg-transparent" />
<!--end::Phone-->
</div>
<div class="fv-row mb-8">
<!--begin::Phone-->
<textarea type="text" placeholder="Message" name="message" autocomplete="off" class="form-control bg-transparent"></textarea>
<!--end::Phone-->
</div>
<!--begin::Accept-->
<div class="fv-row mb-8">
<label class="form-check form-check-inline">
<input class="form-check-input" type="checkbox" name="toc" value="1" />
<span class="form-check-label fw-semibold text-gray-700 fs-base ms-1">I Accept the 
<a href="#" class="ms-1 link-primary">Terms</a></span>
</label>
</div>
<!--end::Accept-->

<!--begin::Submit button-->
<div class="d-grid mb-10">
<button type="submit" id="kt_workshop_submit" value="register" class="btn btn-primary">
<!--begin::Indicator label-->
<span class="indicator-label">Apply For Workshop</span>
<!--end::Indicator label-->
<!--begin::Indicator progress-->
<span class="indicator-progress">Please wait... 
<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
<!--end::Indicator progress-->
</button>
</div>
<!--end::Submit button-->
<!--begin::Sign up-->
<!-- <div class="text-gray-500 text-center fw-semibold fs-6">Already have an Account? 
<a href="<?php echo base_url('signin/signin') ?>" class="link-primary fw-semibold">Sign in</a></div> -->
<!--end::Sign up-->
</form>
<!--end::Form-->
    </div>
</div>
<script type="text/javascript">
$('#workshoptype_tt').change(function(){

var amount          =  $(this).find(':selected').data('amount');
var amount_type     =  $(this).find(':selected').data('amount_type');
$("#amount").val(amount);
$("#amount_type").val(amount_type);
});

</script>