<?php echo doctype("html5"); ?>
<html class="white-bg-login" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title>ICAAHS</title>
    <link rel="shortcut icon" href="https://icaahs.smarttechnologyhouse.net/wp-content/uploads/2022/08/cropped-android-chrome-512x512-1-180x180.png" />
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Global Stylesheets Bundle(used by all pages)-->
    <link href="<?php echo base_url('assets/frontend/plugins/global/plugins.bundle.css') ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets/frontend/css/style.bundle.css') ?>" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
    var jsbaseurl   =   '<?php echo base_url('/');?>';     
    </script>
    <!--end::Global Stylesheets Bundle-->
</head>

<!--end::Head-->
    <!--begin::Body-->
    <!--begin::Body-->
    <body id="kt_body" class="app-blank app-blank bgi-size-cover bgi-position-center bgi-no-repeat" >
        
        <!--End::Google Tag Manager (noscript) -->
        <!--begin::Root-->
        <div class="d-flex flex-column flex-root" id="kt_app_root">
            <!--begin::Page bg image-->
            <style>body { background-image: url('<?php echo base_url('assets/frontend/media/auth/bg4.jpg')?>'); } [data-theme="dark"] body { background-image: url('../../../assets/media/auth/bg4-dark.jpg'); }</style>
            <!--end::Page bg image-->
            <!--begin::Authentication - Sign-up -->
            <div class="d-flex flex-column flex-column-fluid flex-lg-row">
                <!--begin::Aside-->
                <div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
                    <!--begin::Aside-->
                    <div class="d-flex flex-center flex-lg-start flex-column">
                        <!--begin::Logo-->
                        <a href="#" class="mb-7">
                            <img alt="Logo" src="<?php echo base_url('assets/frontend/media/logos/whiteic.png')?>" class="h-85px" />
                        </a>
                        <!--end::Logo-->
                        <!--begin::Title-->
                        <h2 class="text-white fw-normal m-0">International Conference on Advances in Allied Health Sciences
                        </h2>
                        <!--end::Title-->
                    </div>
                    <!--begin::Aside-->
                </div>
                <!--begin::Aside-->
                <!--begin::Body-->
                <div class="d-flex flex-center w-lg-50 p-10">
                    <!--begin::Card-->
                    <div class="card rounded-3 w-md-550px">
                        <!--begin::Card body-->
                        <div class="card-body p-10 p-lg-20">
                            <?php $this->load->view($subview); ?>
                        </div>
                        <!--end::Card body-->
                    </div>
                    <!--end::Card-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Authentication - Sign-up-->
        </div>
        <!--end::Root-->
        <!--begin::Javascript-->
        <script>var hostUrl = "<?php echo base_url('assets/frontend/index.html')?>";</script>
        <!--begin::Global Javascript Bundle(used by all pages)-->
        <script src="<?php echo base_url('assets/frontend/plugins/global/plugins.bundle.js')?>"></script>
        <script src="<?php echo base_url('assets/frontend/js/scripts.bundle.js')?>"></script>
        <!--end::Global Javascript Bundle-->
        <!--begin::Custom Javascript(used by this page)-->
        <script src="<?php echo base_url('assets/frontend/js/custom/authentication/sign-up/general.js')?>"></script>
        <!--end::Custom Javascript-->
        <script src="<?php echo base_url('assets/frontend/js/custom/authentication/sign-in/general.js')?>"></script>
        <script src="<?php echo base_url('assets/frontend/js/custom/authentication/registraion/general.js')?>"></script>
        <script src="<?php echo base_url('assets/frontend/js/custom/authentication/reset-password/reset-password.js')?>"></script>

        <!--end::Javascript-->
    </body>
    <!--end::Body-->
</html>