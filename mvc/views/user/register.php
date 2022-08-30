 <!--begin::Form-->
                            <form class="form w-100" novalidate="novalidate" method="post"  action="">
                                <!--begin::Heading-->
                                <div class="text-center mb-11">
                                    <!--begin::Title-->
                                    <h1 class="text-dark fw-bolder mb-3">Sign Up</h1>
                                    <!--end::Title-->
                                    <!--begin::Subtitle-->
                                    <div class="text-gray-500 fw-semibold fs-6">Your Social Campaigns</div>
                                    <!--end::Subtitle=-->
                                </div>
                                <!--begin::Heading-->
                                
                                <div class="fv-row mb-8">
                                    <!--begin::Name-->
                                    <input type="text" placeholder="Enter Your Full Name" name="name" autocomplete="off" class="form-control bg-transparent" />
                                    <!--end::Name-->

                                      <?php
                                if(form_error('name'))
                                    echo '<div class="fv-plugins-message-container invalid-feedback"><div data-field="text_input" data-validator="notEmpty">'. form_error('name'). "</div></div>";
                                    else 
                                echo ""; ?>
                                     
                                </div>

                                <!--begin::Input group=-->
                                <div class="fv-row mb-8">
                                    <!--begin::Gender-->
                                    <select class="form-select" data-control="select2" name="sex" data-placeholder="Select Sex">
                                        <option></option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                        <option value="other">Other</option>
                                        
                                    </select>
                                    <!--end::Gender-->
                                     <?php
                                if(form_error('sex'))
                                    echo '<div class="fv-plugins-message-container invalid-feedback"><div data-field="text_input" data-validator="notEmpty">'. form_error('sex'). "</div></div>";
                                    else 
                                echo ""; ?>
                                </div>
                                <!--end::Input Group-->
                                 <!--begin::Input group=-->
                                <div class="fv-row mb-8">
                                    <!--begin::Phone-->
                                    <input type="text" placeholder="Enter Your Phone Number" name="phone" autocomplete="off" class="form-control bg-transparent" />
                                    <!--end::Phone-->
                                      <?php
                                if(form_error('phone'))
                                    echo '<div class="fv-plugins-message-container invalid-feedback"><div data-field="text_input" data-validator="notEmpty">'. form_error('phone'). "</div></div>";
                                    else 
                                echo ""; ?>
                                </div>
                                <!--begin::Input group=-->
                                <div class="fv-row mb-8">
                                    <!--begin::Email-->
                                    <input type="text" placeholder="Enter Your Email" name="email" autocomplete="off" class="form-control bg-transparent" />
                                    <!--end::Email-->
                                      <?php
                                if(form_error('email'))
                                    echo '<div class="fv-plugins-message-container invalid-feedback"><div data-field="text_input" data-validator="notEmpty">'. form_error('email'). "</div></div>";
                                    else 
                                echo ""; ?>
                                </div>
                                <!--begin::Input group-->
                                <div class="fv-row mb-8" data-kt-password-meter="true">
                                    <!--begin::Wrapper-->
                                    <div class="mb-1">
                                        <!--begin::Input wrapper-->
                                        <div class="position-relative mb-3">
                                            <input class="form-control bg-transparent" type="password" placeholder="Password" name="password" autocomplete="off" />
                                            <span class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2" data-kt-password-meter-control="visibility">
                                                <i class="fa fa-eye-slash fs-2"></i>
                                                <i class="fa fa-eye fs-2 d-none"></i>
                                            </span>
                                        </div>
                                          <?php
                                if(form_error('password'))
                                    echo '<div class="fv-plugins-message-container invalid-feedback"><div data-field="text_input" data-validator="notEmpty">'. form_error('password'). "</div></div>";
                                    else 
                                echo ""; ?>
                                        <!--end::Input wrapper-->
                                        <!--begin::Meter-->
                                        <div class="d-flex align-items-center mb-3" data-kt-password-meter-control="highlight">
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2"></div>
                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                        </div>
                                        <!--end::Meter-->
                                    </div>
                                    <!--end::Wrapper-->
                                    <!--begin::Hint-->
                                    <div class="text-muted">Use 8 or more characters with a mix of letters, numbers & symbols.</div>
                                    <!--end::Hint-->

                                </div>
                                <!--end::Input group=-->
                                 
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
                                    <button type="submit" value="register" id="kt_sign_up_submit" class="btn btn-primary">
                                        <!--begin::Indicator label-->
                                        <span class="indicator-label">Sign up</span>
                                        <!--end::Indicator label-->
                                        <!--begin::Indicator progress-->
                                        <span class="indicator-progress">Please wait... 
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                        <!--end::Indicator progress-->
                                    </button>
                                </div>
                                <!--end::Submit button-->
                                <!--begin::Sign up-->
                                <div class="text-gray-500 text-center fw-semibold fs-6">Already have an Account? 
                                <a href="<?php echo base_url('signin/index') ?>" class="link-primary fw-semibold">Sign in</a></div>
                                <!--end::Sign up-->
                            </form>
                            <!--end::Form-->