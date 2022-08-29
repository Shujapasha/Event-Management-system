<div class="row">
														<div class="col-lg-12">
															 <!--begin::Form-->
                            <form class="form w-100" novalidate="novalidate" id="kt_registration_form" action="#">
                                <!--begin::Heading-->
                                <div class="text-center mb-11">
                                    <!--begin::Title-->
                                    <h1 class="text-dark fw-bolder mb-3">Registration Form</h1>
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
                                <div class="row mb-8">
                                    <!--begin::Name-->
                                   <div class="col-lg-8">
                                        <select class="form-select" data-control="select2" name="registration_type" data-placeholder="Select Type of Registration">
                                        <option></option>
                                        <option value="1">Professional International</option>
                                        <option value="2">Professional National</option>
                                        <option value="3">Student International</option>
                                        <option value="4">Student National</option>
                                        <option value="5">UOL Student</option>
                                        <option value="6">UOL Professional</option>
                                    </select>
                                   </div>

                                    <!--end::Name-->
                                     <div class="col-lg-4">
                                    <!--begin::Phone-->
                                    <input type="text" placeholder="Amount" name="amount" autocomplete="off" class="form-control bg-transparent" />
                                    <!--end::Phone-->
                                </div>
                                </div>
                                 <!--begin::Input group=-->
                               
                               <!--begin::Input group=-->
                               <div class="row mb-8">
                                   <div class="col-lg-6">
                                       <input type="text" placeholder="Title of Abstract" name="abstract" autocomplete="off" class="form-control bg-transparent" />
                                   </div>
                                   <div class="col-lg-6">
                                       <input type="text" placeholder="Title (Prof./Assoc. Prof./Dr./Mr./Ms.)" name="amount" autocomplete="off" class="form-control bg-transparent" />
                                   </div>
                               </div>
                                <div class="row mb-8">
                                   <div class="col-lg-6">
                                       <input type="text" placeholder="Name" name="abstract" autocomplete="off" class="form-control bg-transparent" />
                                   </div>
                                   <div class="col-lg-6">
                                       <input type="text" placeholder="Email" name="amount" autocomplete="off" class="form-control bg-transparent" />
                                   </div>
                               </div>
                               <div class="row mb-8">
                                   <div class="col-lg-6">
                                       <input type="text" placeholder="Phone" name="abstract" autocomplete="off" class="form-control bg-transparent" />
                                   </div>
                                   <div class="col-lg-6">
                                       <input type="text" placeholder="Nationality" name="amount" autocomplete="off" class="form-control bg-transparent" />
                                   </div>
                               </div>
                                <div class="row mb-8">
                                    <!--begin::Name-->
                                   <div class="col-lg-6">
                                        <select class="form-select" data-control="select2" name="category" data-placeholder="Select Category">
                                        <option></option>
                                        <option value="1">Biomedical Engineering</option>
                                        <option value="2">Diet & Nutrition Sciences</option>
                                        <option value="3">Food Science & Technology</option>
                                        <option value="4">Health Professional Technologies</option>
                                        <option value="5">Medical Lab Technology/Molecular Pathology</option>
                                        <option value="6">Nursing & Midwifery</option>
                                        <option value="7">Optometry & Vision Sciences</option>
                                        <option value="8">Physical Therapy</option>
                                        <option value="9">Public Health</option>
                                        <option value="10">Radiological Sciences & Medical Imaging Technology</option>
                                        <option value="11">Rehabilitation Sciences</option>
                                        <option value="12">Sports Sciences and Physical Education</option>
                                    </select>

                                    </div>
                                    <!--end::Name-->
                                    <div class="col-lg-6">
                                    <!--begin::Phone-->
                                    <input type="text" placeholder="Institute/Organization" name="institute" autocomplete="off" class="form-control bg-transparent" />
                                    <!--end::Phone-->
                                </div>
                                </div>
                                 <!--begin::Input group=-->
                                <div class="fv-row mb-8">
                                    <!--begin::Phone-->
                                    <input type="text" placeholder="Mailing Address" name="institute" autocomplete="off" class="form-control bg-transparent" />
                                    <!--end::Phone-->
                                </div>
                                <div class="fv-row mb-8">
                                    <!--begin::Phone-->
                                    <textarea type="text" placeholder="Message" name="institute" autocomplete="off" class="form-control bg-transparent"></textarea>
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
                                    <button type="submit" id="kt_registration_submit" class="btn btn-primary">
                                        <!--begin::Indicator label-->
                                        <span class="indicator-label">Register</span>
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