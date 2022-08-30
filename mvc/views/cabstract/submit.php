<div class="row">
    <div class="col-lg-12">
    <!--begin::Form-->
        <form method="post" enctype="multipart/form-data">
        <!--begin::Heading-->
        <div class="text-center mb-11">
        <!--begin::Title-->
        <h1 class="text-dark fw-bolder mb-3">Submit Your Abstract</h1>
        <!--end::Title-->
        <!--begin::Subtitle-->
        <div class="text-gray-500 fw-semibold fs-6"><?php echo $conference->conference;?></div>
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
        <div class="row mb-8">
        <div class="col-lg-6">
        <input type="text" placeholder="Name" name="fullName" autocomplete="off" class="form-control bg-transparent" />

        <?php
            if(form_error('fullName'))
                echo '<div class="fv-plugins-message-container invalid-feedback"><div data-field="text_input" data-validator="notEmpty">'. form_error('fullName'). "</div></div>";
                else 
            echo ""; ?>
        </div>
        <div class="col-lg-6">
        <input type="email" placeholder="Email" name="emailaddress" autocomplete="off" class="form-control bg-transparent" />

        <?php
            if(form_error('emailaddress'))
                echo '<div class="fv-plugins-message-container invalid-feedback"><div data-field="text_input" data-validator="notEmpty">'. form_error('emailaddress'). "</div></div>";
                else 
            echo ""; ?>
        </div>
        </div>
        <div class="row mb-8">
        <div class="col-lg-6">
        <input type="text" placeholder="Title of Abstract" name="title" autocomplete="off" class="form-control bg-transparent" />
        <?php
            if(form_error('title'))
                echo '<div class="fv-plugins-message-container invalid-feedback"><div data-field="text_input" data-validator="notEmpty">'. form_error('title'). "</div></div>";
                else 
            echo ""; ?>
        </div>
        <div class="col-lg-6">
        <select class="form-select" data-control="select2" name="categoryID" data-placeholder="Select Category">
        <option></option>
         <?php foreach ($categorys as $c) { ?>
                                        <option value="<?php echo $c->categoryID;?>"> <?php echo $c->category;?></option>   
                                      <?php }?>
        </select>
        <?php
            if(form_error('categoryID'))
                echo '<div class="fv-plugins-message-container invalid-feedback"><div data-field="text_input" data-validator="notEmpty">'. form_error('categoryID'). "</div></div>";
                else 
            echo ""; ?>
        </div>
        </div>
        <!--begin::Input group=-->

        <div class="fv-row mb-8">
        <!--begin::Phone-->
        <textarea type="text" placeholder="Abstract" name="message" autocomplete="off" class="form-control bg-transparent" rows="4" cols="50"></textarea>
        <!--end::Phone-->
        <?php
            if(form_error('message'))
                echo '<div class="fv-plugins-message-container invalid-feedback"><div data-field="text_input" data-validator="notEmpty">'. form_error('message'). "</div></div>";
                else 
            echo ""; ?>
        </div>

        <div class="fv-row mb-8">
            <!--begin::Phone-->
            <div class="fs-6 fw-bold mb-1">Attach Abstract File</div>
            <input type="file" placeholder="Add Payment Receipt" name="file" autocomplete="off" class="form-control bg-transparent" />
            <input type="hidden" name="title" value="ttt">
<!--end::Phone-->
        </div>
        <!--begin::Submit button-->
        <div class="d-grid mb-10">
        <button type="submit"  class="btn btn-primary">
        <!--begin::Indicator label-->
        <span class="indicator-label">Submit</span>
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

