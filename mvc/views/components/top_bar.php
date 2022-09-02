<!--begin::Body-->
<body id="kt_app_body" data-kt-app-layout="dark-sidebar" data-kt-app-header-fixed="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-header="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" class="app-default">
<!--begin::Theme mode setup on page load-->
<script>var defaultThemeMode = "light"; var themeMode; if ( document.documentElement ) { if ( document.documentElement.hasAttribute("data-theme-mode")) { themeMode = document.documentElement.getAttribute("data-theme-mode"); } else { if ( localStorage.getItem("data-theme") !== null ) { themeMode = localStorage.getItem("data-theme"); } else { themeMode = defaultThemeMode; } } if (themeMode === "system") { themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light"; } document.documentElement.setAttribute("data-theme", themeMode); }</script>
<!--end::Theme mode setup on page load-->

<!--begin::App-->
	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
	<!--begin::Page-->
	<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
		<!--begin::Header-->
		<div id="kt_app_header" class="app-header">
		<!--begin::Header container-->
		<div class="app-container container-fluid d-flex align-items-stretch justify-content-between" id="kt_app_header_container">
		<!--begin::sidebar mobile toggle-->
		<div class="d-flex align-items-center d-lg-none ms-n2 me-2" title="Show sidebar menu">
		<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_sidebar_mobile_toggle">
		<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
		<span class="svg-icon svg-icon-1">
		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
		<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
		</svg>
		</span>
		<!--end::Svg Icon-->
		</div>
		</div>
		<!--end::sidebar mobile toggle-->
		<!--begin::Mobile logo-->
		<div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0">
		<a href="index.html" class="d-lg-none">
		<img alt="Logo" src="<?php echo base_url('assets/frontend/media/logos/whiteic.png')?>" class="h-30px" />
		</a>
		</div>
		<!--end::Mobile logo-->
		<!--begin::Header wrapper-->
		<div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
		<!--begin::Menu wrapper-->
		<div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true" data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'prepend'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
		<!--begin::Menu-->
		<div class="menu menu-rounded menu-column menu-lg-row my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0" id="kt_app_header_menu" data-kt-menu="true">
		<!--begin:Menu item-->

		<!--end:Menu item-->

		</div>
		<!--end::Menu-->
		</div>
		<!--end::Menu wrapper-->
		<!--begin::Navbar-->
		<div class="app-navbar flex-shrink-0">

		<!--begin::User menu-->
		<div class="app-navbar-item ms-1 ms-lg-3" id="kt_header_user_menu_toggle">
		<!--begin::Menu wrapper-->
		<div class="cursor-pointer symbol symbol-35px symbol-md-40px" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
		<img src="https://icaahs.com/wp-content/uploads/2022/08/cropped-android-chrome-512x512-1-180x180.png" alt="user" />
		</div>
		<!--begin::User account menu-->
		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
		<!--begin::Menu item-->
		<div class="menu-item px-3">
		<div class="menu-content d-flex align-items-center px-3">
		<!--begin::Avatar-->
		<div class="symbol symbol-50px me-5">
		<img alt="Logo" src="https://icaahs.com/wp-content/uploads/2022/08/cropped-android-chrome-512x512-1-180x180.png" />
		</div>
		<!--end::Avatar-->
		<!--begin::Username-->
		<div class="d-flex flex-column">
		<div class="fw-bold d-flex align-items-center fs-5"><?=  $_SESSION['name']?> 
		<span class="svg-icon svg-icon-1 svg-icon-primary">
		<svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" viewBox="0 0 24 24">
		<path d="M10.0813 3.7242C10.8849 2.16438 13.1151 2.16438 13.9187 3.7242V3.7242C14.4016 4.66147 15.4909 5.1127 16.4951 4.79139V4.79139C18.1663 4.25668 19.7433 5.83365 19.2086 7.50485V7.50485C18.8873 8.50905 19.3385 9.59842 20.2758 10.0813V10.0813C21.8356 10.8849 21.8356 13.1151 20.2758 13.9187V13.9187C19.3385 14.4016 18.8873 15.491 19.2086 16.4951V16.4951C19.7433 18.1663 18.1663 19.7433 16.4951 19.2086V19.2086C15.491 18.8873 14.4016 19.3385 13.9187 20.2758V20.2758C13.1151 21.8356 10.8849 21.8356 10.0813 20.2758V20.2758C9.59842 19.3385 8.50905 18.8873 7.50485 19.2086V19.2086C5.83365 19.7433 4.25668 18.1663 4.79139 16.4951V16.4951C5.1127 15.491 4.66147 14.4016 3.7242 13.9187V13.9187C2.16438 13.1151 2.16438 10.8849 3.7242 10.0813V10.0813C4.66147 9.59842 5.1127 8.50905 4.79139 7.50485V7.50485C4.25668 5.83365 5.83365 4.25668 7.50485 4.79139V4.79139C8.50905 5.1127 9.59842 4.66147 10.0813 3.7242V3.7242Z" fill="currentColor"></path>
		<path d="M14.8563 9.1903C15.0606 8.94984 15.3771 8.9385 15.6175 9.14289C15.858 9.34728 15.8229 9.66433 15.6185 9.9048L11.863 14.6558C11.6554 14.9001 11.2876 14.9258 11.048 14.7128L8.47656 12.4271C8.24068 12.2174 8.21944 11.8563 8.42911 11.6204C8.63877 11.3845 8.99996 11.3633 9.23583 11.5729L11.3706 13.4705L14.8563 9.1903Z" fill="white"></path>
		</svg>
		</span></div>
		<a href="#" class="fw-semibold text-muted text-hover-primary fs-7"><?=  $_SESSION['email']?></a>
		</div>
		<!--end::Username-->
		</div>
		</div>
		<!--end::Menu item-->
		<!--begin::Menu separator-->
		<div class="separator my-2"></div>
		<!--end::Menu separator-->
		<!--begin::Menu item-->
		<div class="menu-item px-5">
		<a href="<?php echo base_url('user/profile') ?>" class="menu-link px-5">My Profile</a>
		</div>
		<!--end::Menu item-->

		<!--begin::Menu item-->
		<div class="menu-item px-5 my-1">
		<a href="account/settings.html" class="menu-link px-5">Account Settings</a>
		</div>
		<!--end::Menu item-->
		<!--begin::Menu item-->
		<div class="menu-item px-5">
		<a href="javascript;" data-bs-toggle="modal" data-bs-target="#kt_modal_1" class="menu-link px-5">Sign Out</a>
		</div>
		<!--end::Menu item-->
		</div>
		<!--end::User account menu-->
		<!--end::Menu wrapper-->
		</div>
		<!--end::User menu-->
		<!--begin::Header menu toggle-->
		<div class="app-navbar-item d-lg-none ms-2 me-n3" title="Show header menu">
		<div class="btn btn-icon btn-active-color-primary w-35px h-35px" id="kt_app_header_menu_toggle">
		<!--begin::Svg Icon | path: icons/duotune/text/txt001.svg-->
		<span class="svg-icon svg-icon-1">
		<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
		<path d="M13 11H3C2.4 11 2 10.6 2 10V9C2 8.4 2.4 8 3 8H13C13.6 8 14 8.4 14 9V10C14 10.6 13.6 11 13 11ZM22 5V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4V5C2 5.6 2.4 6 3 6H21C21.6 6 22 5.6 22 5Z" fill="currentColor" />
		<path opacity="0.3" d="M21 16H3C2.4 16 2 15.6 2 15V14C2 13.4 2.4 13 3 13H21C21.6 13 22 13.4 22 14V15C22 15.6 21.6 16 21 16ZM14 20V19C14 18.4 13.6 18 13 18H3C2.4 18 2 18.4 2 19V20C2 20.6 2.4 21 3 21H13C13.6 21 14 20.6 14 20Z" fill="currentColor" />
		</svg>
		</span>
		<!--end::Svg Icon-->
		</div>
		</div>
		<!--end::Header menu toggle-->
		</div>
		<!--end::Navbar-->
		</div>
		<!--end::Header wrapper-->
		</div>
		<!--end::Header container-->
		</div>
	<!--end::Header-->