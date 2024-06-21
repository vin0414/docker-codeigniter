<!DOCTYPE html>
<html lang="en" >
    <!--begin::Head-->
    <head>
        <title>Metronic</title>
        <meta charset="utf-8"/>
        <meta name="description" content=""/>
        <meta name="keywords" content=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <link rel="shortcut icon" href=""/>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700"/>        <!--end::Fonts-->

        <!--begin::Vendor Stylesheets(used for this page only)-->
                <link href="assets/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css"/>
            <!--end::Vendor Stylesheets-->


        <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
                <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
                <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css"/>
            <!--end::Global Stylesheets Bundle-->
    </head>
    <!--end::Head-->

    <!--begin::Body-->
    <body  id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-header-stacked="true" data-kt-app-header-primary-enabled="true" data-kt-app-header-secondary-enabled="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true"  class="app-default" >
        <!--begin::Theme mode setup on page load-->
<script>
	var defaultThemeMode = "light";
	var themeMode;

	if ( document.documentElement ) {
		if ( document.documentElement.hasAttribute("data-bs-theme-mode")) {
			themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
		} else {
			if ( localStorage.getItem("data-bs-theme") !== null ) {
				themeMode = localStorage.getItem("data-bs-theme");
			} else {
				themeMode = defaultThemeMode;
			}			
		}

		if (themeMode === "system") {
			themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
		}

		document.documentElement.setAttribute("data-bs-theme", themeMode);
	}            
</script>
<!--end::Theme mode setup on page load-->

        
        
<!--begin::App-->
<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
    <!--begin::Page-->
    <div class="app-page  flex-column flex-column-fluid " id="kt_app_page">     
        
                    
<!--begin::Header-->
<div id="kt_app_header" class="app-header " 
     
     >

                        <!--begin::Header primary-->
            <div class="app-header-primary "
                                 
                >

                                    <!--begin::Header primary container-->
                    <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between " id="kt_app_header_primary_container">
                        <!--begin::Header primary wrapper-->
<div class="d-flex flex-stack flex-grow-1">
	<div class="d-flex">
		<!--begin::Logo-->
<div class="app-header-logo d-flex flex-center gap-2 me-lg-15">
    <!--begin::Sidebar toggle-->
	<button class="btn btn-icon btn-sm btn-custom d-flex d-lg-none ms-n2" id="kt_app_header_menu_toggle">
		<i class="ki-outline ki-abstract-14 fs-2"></i>	</button>
	<!--end::Sidebar toggle-->

    <!--begin::Logo image-->
    <a href="/metronic8/demo60/index.html">
        <img alt="Logo" src="/metronic8/demo60/assets/media/logos/demo60.svg" class="mh-25px"/>
    </a>
    <!--end::Logo image-->
</div>
<!--end::Logo-->		
<!--begin::Menu wrapper-->
<div class="d-flex align-items-stretch" id="kt_app_header_menu_wrapper">
	<!--begin::Menu holder-->
	<div 
		class="app-header-menu app-header-mobile-drawer align-items-stretch" 

		data-kt-drawer="true"
		data-kt-drawer-name="app-header-menu"
		data-kt-drawer-activate="{default: true, lg: false}"
		data-kt-drawer-overlay="true"
		data-kt-drawer-width="{default:'200px', '300px': '250px'}"
		data-kt-drawer-direction="start"
		data-kt-drawer-toggle="#kt_app_header_menu_toggle" 

		data-kt-swapper="true"
		data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
		data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_menu_wrapper'}"
	>   
		<!--begin::Menu-->
		<div 
			class="
				menu 
				menu-rounded 
				menu-column 
				menu-lg-row 
				menu-active-bg 
				menu-title-gray-700 
				menu-state-gray-900 
				menu-icon-gray-500
				menu-arrow-gray-500 
				menu-state-icon-primary
				menu-state-bullet-primary
				fw-semibold 
				fs-6 
				align-items-stretch 
				my-5 
				my-lg-0 
				px-2 
				px-lg-0
			" 
			id="#kt_app_header_menu" 
			data-kt-menu="true"
		>        
			<!--begin:Menu item--><div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"  class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-title" >Dashboards</span><span  class="menu-arrow d-lg-none" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px" ><!--begin:Dashboards menu-->
<div class="menu-state-bg menu-extended overflow-hidden overflow-lg-visible" data-kt-menu-dismiss="true">
    <!--begin:Row-->
    <div class="row">
        <!--begin:Col-->
        <div class="col-lg-8 mb-3 mb-lg-0  py-3 px-3 py-lg-6 px-lg-6">
            <!--begin:Row-->
            <div class="row">
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/" class="menu-link active">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-element-11 text-primary fs-1"></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Default</span>
                                    <span class="fs-7 fw-semibold text-muted">Reports & statistics</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/dashboards/ecommerce.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-basket text-danger fs-1"></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">eCommerce</span>
                                    <span class="fs-7 fw-semibold text-muted">Sales reports</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/dashboards/projects.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-abstract-44 text-info fs-1"></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Projects</span>
                                    <span class="fs-7 fw-semibold text-muted">Tasts, graphs & charts</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/dashboards/online-courses.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-color-swatch text-success fs-1"></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Online Courses</span>
                                    <span class="fs-7 fw-semibold text-muted">Student progress</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/dashboards/marketing.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-chart-simple text-gray-900 fs-1"></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Marketing</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/dashboards/bidding.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-switch text-warning fs-1"></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Bidding</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/dashboards/pos.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-abstract-42 text-danger fs-1"></i>                                </span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">POS System</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                        <!--begin:Col-->
                    <div class="col-lg-6 mb-3">
                        <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/dashboards/call-center.html" class="menu-link ">
                                <span class="menu-custom-icon d-flex flex-center flex-shrink-0 rounded w-40px h-40px me-3">
                                    <i class="ki-outline ki-call text-primary fs-1"></i></span>

                                <span class="d-flex flex-column">
                                    <span class="fs-6 fw-bold text-gray-800">Call Center</span>
                                    <span class="fs-7 fw-semibold text-muted">Campaings & conversions</span>
                                </span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Col-->
                                                                                                                                                                                                                                    </div>
            <!--end:Row-->

            <div class="separator separator-dashed mx-5 my-5"></div>

            <!--begin:Landing-->
            <div class="d-flex flex-stack flex-wrap flex-lg-nowrap gap-2 mx-5">
                <div class="d-flex flex-column me-5">
                    <div class="fs-6 fw-bold text-gray-800">
                        Landing Page Template
                    </div>
                    <div class="fs-7 fw-semibold text-muted">
                        Onpe page landing template with pricing & others    
                    </div>
                </div>

                <a href="/metronic8/demo60/landing.html" class="btn btn-sm btn-primary fw-bold">
                    Explore
                </a>
            </div>
            <!--end:Landing-->
        </div>
        <!--end:Col-->       

        <!--begin:Col-->
        <div class="menu-more bg-light col-lg-4 py-3 px-3 py-lg-6 px-lg-6 rounded-end">
            <!--begin:Heading-->
            <h4 class="fs-6 fs-lg-4 text-gray-800 fw-bold mt-3 mb-3 ms-4">More Dashboards</h4>
            <!--end:Heading-->

                                                                                                                                                                            
                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/dashboards/logistics.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Logistics                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                                            
                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/dashboards/website-analytics.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Website Analytics                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                                            
                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/dashboards/finance-performance.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Finance Performance                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                                            
                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/dashboards/store-analytics.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Store Analytics                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                                            
                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/dashboards/social.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Social                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                                            
                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/dashboards/delivery.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Delivery                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                                            
                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/dashboards/crypto.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Crypto                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                                            
                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/dashboards/school.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            School                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                                            
                <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/dashboards/podcast.html" class="menu-link py-2 ">
                        <span class="menu-title">
                            Podcast                        </span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                                    </div>
        <!--end:Col-->     
    </div>
    <!--end:Row-->
</div>
<!--end:Dashboards menu--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"  class="menu-item menu-lg-down-accordion me-0 me-lg-2" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-title" >Pages</span><span  class="menu-arrow d-lg-none" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0" ><!--begin:Pages menu-->
<div class="menu-active-bg px-4 px-lg-0">
    <!--begin:Tabs nav-->
    <div class="d-flex w-100 overflow-auto">
        <ul class="nav nav-stretch nav-line-tabs fw-bold fs-6 p-0 p-lg-10 flex-nowrap flex-grow-1">
                                                        <!--begin:Nav item-->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6 active text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_pages">
                        General                    </a>
                </li>
                <!--end:Nav item-->
                                            <!--begin:Nav item-->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_account">
                        Account                    </a>
                </li>
                <!--end:Nav item-->
                                            <!--begin:Nav item-->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_authentication">
                        Authentication                    </a>
                </li>
                <!--end:Nav item-->
                                            <!--begin:Nav item-->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_utilities">
                        Utilities                    </a>
                </li>
                <!--end:Nav item-->
                                            <!--begin:Nav item-->
                <li class="nav-item mx-lg-1">
                    <a class="nav-link py-3 py-lg-6  text-active-primary" href="#" data-bs-toggle="tab" data-bs-target="#kt_app_header_menu_pages_widgets">
                        Widgets                    </a>
                </li>
                <!--end:Nav item-->
                    </ul>
    </div>
    <!--end:Tabs nav-->

    <!--begin:Tab content-->
    <div class="tab-content py-4 py-lg-8 px-lg-7">
        <!--begin:Tab pane-->
        <div class="tab-pane active w-lg-1000px" id="kt_app_header_menu_pages_pages">
            <!--begin:Row-->
<div class="row">
    <!--begin:Col-->
    <div class="col-lg-8">
        <!--begin:Row-->
        <div class="row">
            <!--begin:Col-->
            <div class="col-lg-3 mb-6 mb-lg-0">
                <!--begin:Menu heading-->
                <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">User Profile</h4>
                <!--end:Menu heading-->

                                    <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="/metronic8/demo60/pages/user-profile/overview.html" class="menu-link ">
                            <span class="menu-title">Overview</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="/metronic8/demo60/pages/user-profile/projects.html" class="menu-link ">
                            <span class="menu-title">Projects</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="/metronic8/demo60/pages/user-profile/campaigns.html" class="menu-link ">
                            <span class="menu-title">Campaigns</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="/metronic8/demo60/pages/user-profile/documents.html" class="menu-link ">
                            <span class="menu-title">Documents</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="/metronic8/demo60/pages/user-profile/followers.html" class="menu-link ">
                            <span class="menu-title">Followers</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                    <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="/metronic8/demo60/pages/user-profile/activity.html" class="menu-link ">
                            <span class="menu-title">Activity</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                            </div>
            <!--end:Col-->

            <!--begin:Col-->
            <div class="col-lg-3 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-6">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/pages/about.html" class="menu-link ">
                                <span class="menu-title">About</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/pages/team.html" class="menu-link ">
                                <span class="menu-title">Our Team</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/pages/contact.html" class="menu-link ">
                                <span class="menu-title">Contact Us</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/pages/licenses.html" class="menu-link ">
                                <span class="menu-title">Licenses</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/pages/sitemap.html" class="menu-link ">
                                <span class="menu-title">Sitemap</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->

                <!--begin:Menu section-->
                <div class="mb-0">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Careers</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/pages/careers/list.html" class="menu-link ">
                                <span class="menu-title">Careers List</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/pages/careers/apply.html" class="menu-link ">
                                <span class="menu-title">Careers Apply</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->

            <!--begin:Col-->
            <div class="col-lg-3 mb-6 mb-lg-0"> 
                <!--begin:Menu section-->
                <div class="mb-6">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">FAQ</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/pages/faq/classic.html" class="menu-link ">
                                <span class="menu-title">FAQ Classic</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/pages/faq/extended.html" class="menu-link ">
                                <span class="menu-title">FAQ Extended</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->

                <!--begin:Menu section-->
                <div class="mb-6">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Blog</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/pages/blog/home.html" class="menu-link ">
                                <span class="menu-title">Blog Home</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/pages/blog/post.html" class="menu-link ">
                                <span class="menu-title">Blog Post</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->

                <!--begin:Menu section-->
                <div class="mb-0">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Pricing</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/pages/pricing.html" class="menu-link ">
                                <span class="menu-title">Column Pricing</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/pages/pricing/table.html" class="menu-link ">
                                <span class="menu-title">Table Pricing</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->

            <!--begin:Col-->
            <div class="col-lg-3 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-0">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Social</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/pages/social/feeds.html" class="menu-link ">
                                <span class="menu-title">Feeds</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/pages/social/activity.html" class="menu-link ">
                                <span class="menu-title">Activty</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/pages/social/followers.html" class="menu-link ">
                                <span class="menu-title">Followers</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/pages/social/settings.html" class="menu-link ">
                                <span class="menu-title">Settings</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->
        </div>
        <!--end:Row-->
    </div>
    <!--end:Col-->

    <!--begin:Col-->
    <div class="col-lg-4">
        <img src="/metronic8/demo60/assets/media/stock/600x600/img-82.jpg" class="rounded mw-100" alt=""/>
    </div>
    <!--end:Col-->
</div>
<!--end:Row-->            
        </div>
        <!--end:Tab pane-->

        <!--begin:Tab pane-->
        <div class="tab-pane  w-lg-600px" id="kt_app_header_menu_pages_account">
            <!--begin:Row-->
<div class="row">
    <!--begin:Col-->
    <div class="col-lg-5 mb-6 mb-lg-0">
        <!--begin:Row-->
        <div class="row">
            <!--begin:Col-->
            <div class="col-lg-6">
                                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="/metronic8/demo60/account/overview.html" class="menu-link ">
                            <span class="menu-title">Overview</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="/metronic8/demo60/account/settings.html" class="menu-link ">
                            <span class="menu-title">Settings</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="/metronic8/demo60/account/security.html" class="menu-link ">
                            <span class="menu-title">Security</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="/metronic8/demo60/account/activity.html" class="menu-link ">
                            <span class="menu-title">Activity</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="/metronic8/demo60/account/billing.html" class="menu-link ">
                            <span class="menu-title">Billing</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                                                                            </div>
            <!--end:Col-->

            <!--begin:Col-->
            <div class="col-lg-6">
                                                                                                                                                                            <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="/metronic8/demo60/account/statements.html" class="menu-link ">
                            <span class="menu-title">Statements</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="/metronic8/demo60/account/referrals.html" class="menu-link ">
                            <span class="menu-title">Referrals</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="/metronic8/demo60/account/api-keys.html" class="menu-link ">
                            <span class="menu-title">API Keys</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                                                        <!--begin:Menu item-->
                    <div class="menu-item p-0 m-0">
                        <!--begin:Menu link-->
                        <a href="/metronic8/demo60/account/logs.html" class="menu-link ">
                            <span class="menu-title">Logs</span>
                        </a>
                        <!--end:Menu link-->
                    </div>
                    <!--end:Menu item-->
                            </div>
            <!--end:Col-->
        </div>
        <!--end:Row-->
    </div>
    <!--end:Col-->

    <!--begin:Col-->
    <div class="col-lg-7">
        <img src="/metronic8/demo60/assets/media/stock/900x600/46.jpg" class="rounded mw-100" alt=""/>
    </div>
    <!--end:Col-->
</div>
<!--end:Row-->        </div>
        <!--end:Tab pane-->

        <!--begin:Tab pane-->
        <div class="tab-pane  w-lg-1000px" id="kt_app_header_menu_pages_authentication">
            <!--begin:Row-->
<div class="row">
    <!--begin:Col-->
    <div class="col-lg-3 mb-6 mb-lg-0">
        <!--begin:Menu section-->
        <div class="mb-6">
            <!--begin:Menu heading-->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Corporate Layout</h4>
            <!--end:Menu heading-->

                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/layouts/corporate/sign-in.html" class="menu-link ">
                        <span class="menu-title">Sign-In</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/layouts/corporate/sign-up.html" class="menu-link ">
                        <span class="menu-title">Sign-Up</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/layouts/corporate/two-factor.html" class="menu-link ">
                        <span class="menu-title">Two-Factor</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/layouts/corporate/reset-password.html" class="menu-link ">
                        <span class="menu-title">Reset Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/layouts/corporate/new-password.html" class="menu-link ">
                        <span class="menu-title">New Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                    </div>
        <!--end:Menu section-->

        <!--begin:Menu section-->
        <div class="mb-0">
            <!--begin:Menu heading-->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Overlay Layout</h4>
            <!--end:Menu heading-->

                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/layouts/overlay/sign-in.html" class="menu-link ">
                        <span class="menu-title">Sign-In</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/layouts/overlay/sign-up.html" class="menu-link ">
                        <span class="menu-title">Sign-Up</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/layouts/overlay/two-factor.html" class="menu-link ">
                        <span class="menu-title">Two-Factor</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/layouts/overlay/reset-password.html" class="menu-link ">
                        <span class="menu-title">Reset Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/layouts/overlay/new-password.html" class="menu-link ">
                        <span class="menu-title">New Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                    </div>
        <!--end:Menu section-->
    </div>
    <!--end:Col-->

    <!--begin:Col-->
    <div class="col-lg-3 mb-6 mb-lg-0">
        <!--begin:Menu section-->
        <div class="mb-6">
            <!--begin:Menu heading-->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Creative Layout</h4>
            <!--end:Menu heading-->

                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/layouts/creative/sign-in.html" class="menu-link ">
                        <span class="menu-title">Sign-in</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/layouts/creative/sign-up.html" class="menu-link ">
                        <span class="menu-title">Sign-up</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/layouts/creative/two-factor.html" class="menu-link ">
                        <span class="menu-title">Two-Factor</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/layouts/creative/reset-password.html" class="menu-link ">
                        <span class="menu-title">Reset Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/layouts/creative/new-password.html" class="menu-link ">
                        <span class="menu-title">New Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                    </div>
        <!--end:Menu section-->

        <!--begin:Menu section-->
        <div class="mb-6">
            <!--begin:Menu heading-->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Fancy Layout</h4>
            <!--end:Menu heading-->

                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/layouts/fancy/sign-in.html" class="menu-link ">
                        <span class="menu-title">Sign-In</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/layouts/fancy/sign-up.html" class="menu-link ">
                        <span class="menu-title">Sign-Up</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/layouts/fancy/two-factor.html" class="menu-link ">
                        <span class="menu-title">Two-Factor</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/layouts/fancy/reset-password.html" class="menu-link ">
                        <span class="menu-title">Reset Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/layouts/fancy/new-password.html" class="menu-link ">
                        <span class="menu-title">New Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                    </div>
        <!--end:Menu section-->                
    </div>
    <!--end:Col-->

    <!--begin:Col-->
    <div class="col-lg-3 mb-6 mb-lg-0">
        <!--begin:Menu section-->
        <div class="mb-0">
            <!--begin:Menu heading-->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General</h4>
            <!--end:Menu heading-->

                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/extended/multi-steps-sign-up.html" class="menu-link ">
                        <span class="menu-title">Multi-Steps Sign-Up</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/general/welcome.html" class="menu-link ">
                        <span class="menu-title">Welcome Message</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/general/verify-email.html" class="menu-link ">
                        <span class="menu-title">Verify Email</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/general/coming-soon.html" class="menu-link ">
                        <span class="menu-title">Coming Soon</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/general/password-confirmation.html" class="menu-link ">
                        <span class="menu-title">Password Confirmation</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/general/account-deactivated.html" class="menu-link ">
                        <span class="menu-title">Account Deactivation</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/general/error-404.html" class="menu-link ">
                        <span class="menu-title">Error 404</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/general/error-500.html" class="menu-link ">
                        <span class="menu-title">Error 500</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                    </div>
        <!--end:Menu section-->
    </div>
    <!--end:Col-->

    <!--begin:Col-->
    <div class="col-lg-3 mb-6 mb-lg-0">
        <!--begin:Menu section-->
        <div class="mb-0">
            <!--begin:Menu heading-->
            <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Email Templates</h4>
            <!--end:Menu heading-->

                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/email/welcome-message.html" class="menu-link ">
                        <span class="menu-title">Welcome Message</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/email/reset-password.html" class="menu-link ">
                        <span class="menu-title">Reset Password</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/email/subscription-confirmed.html" class="menu-link ">
                        <span class="menu-title">Subscription Confirmed</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/email/card-declined.html" class="menu-link ">
                        <span class="menu-title">Credit Card Declined</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/email/promo-1.html" class="menu-link ">
                        <span class="menu-title">Promo 1</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/email/promo-2.html" class="menu-link ">
                        <span class="menu-title">Promo 2</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                            <!--begin:Menu item-->
                <div class="menu-item p-0 m-0">
                    <!--begin:Menu link-->
                    <a href="/metronic8/demo60/authentication/email/promo-3.html" class="menu-link ">
                        <span class="menu-title">Promo 3</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                    </div>
        <!--end:Menu section-->
    </div>
    <!--end:Col-->
</div>
<!--end:Row-->        </div>
        <!--end:Tab pane-->

        <!--begin:Tab pane-->
        <div class="tab-pane  w-lg-1000px" id="kt_app_header_menu_pages_utilities">
            <!--begin:Row-->
<div class="row">
    <!--begin:Col-->
    <div class="col-lg-7">
        <!--begin:Row-->
        <div class="row">
            <!--begin:Col-->
            <div class="col-lg-4 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-0">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">General Modals</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/modals/general/invite-friends.html" class="menu-link ">
                                <span class="menu-title">Invite Friends</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/modals/general/view-users.html" class="menu-link ">
                                <span class="menu-title">View Users</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/modals/general/select-users.html" class="menu-link ">
                                <span class="menu-title">Select Users</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/modals/general/upgrade-plan.html" class="menu-link ">
                                <span class="menu-title">Upgrade Plan</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/modals/general/share-earn.html" class="menu-link ">
                                <span class="menu-title">Share & Earn</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/modals/forms/new-target.html" class="menu-link ">
                                <span class="menu-title">New Target</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/modals/forms/new-card.html" class="menu-link ">
                                <span class="menu-title">New Card</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/modals/forms/new-address.html" class="menu-link ">
                                <span class="menu-title">New Address</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/modals/forms/create-api-key.html" class="menu-link ">
                                <span class="menu-title">Create API Key</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/modals/forms/bidding.html" class="menu-link ">
                                <span class="menu-title">Bidding</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->

            <!--begin:Col-->
            <div class="col-lg-4 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-6">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Advanced Modals</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/modals/wizards/create-app.html" class="menu-link ">
                                <span class="menu-title">Create App</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/modals/wizards/create-campaign.html" class="menu-link ">
                                <span class="menu-title">Create Campaign</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/modals/wizards/create-account.html" class="menu-link ">
                                <span class="menu-title">Create Business Acc</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/modals/wizards/create-project.html" class="menu-link ">
                                <span class="menu-title">Create Project</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/modals/wizards/top-up-wallet.html" class="menu-link ">
                                <span class="menu-title">Top Up Wallet</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/modals/wizards/offer-a-deal.html" class="menu-link ">
                                <span class="menu-title">Offer a Deal</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/modals/wizards/two-factor-authentication.html" class="menu-link ">
                                <span class="menu-title">Two Factor Auth</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->

                <!--begin:Menu section-->
                <div class="mb-0">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Search</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/search/horizontal.html" class="menu-link ">
                                <span class="menu-title">Horizontal</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/search/vertical.html" class="menu-link ">
                                <span class="menu-title">Vertical</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/modals/search/users.html" class="menu-link ">
                                <span class="menu-title">Users</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/modals/search/select-location.html" class="menu-link ">
                                <span class="menu-title">Select Location</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->

            <!--begin:Col-->
            <div class="col-lg-4 mb-6 mb-lg-0">
                <!--begin:Menu section-->
                <div class="mb-0">
                    <!--begin:Menu heading-->
                    <h4 class="fs-6 fs-lg-4 fw-bold mb-3 ms-4">Wizards</h4>
                    <!--end:Menu heading-->

                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/wizards/horizontal.html" class="menu-link ">
                                <span class="menu-title">Horizontal</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/wizards/vertical.html" class="menu-link ">
                                <span class="menu-title">Vertical</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/wizards/two-factor-authentication.html" class="menu-link ">
                                <span class="menu-title">Two Factor Auth</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/wizards/create-app.html" class="menu-link ">
                                <span class="menu-title">Create App</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/wizards/create-campaign.html" class="menu-link ">
                                <span class="menu-title">Create Campaign</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/wizards/create-account.html" class="menu-link ">
                                <span class="menu-title">Create Account</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/wizards/create-project.html" class="menu-link ">
                                <span class="menu-title">Create Project</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/modals/wizards/top-up-wallet.html" class="menu-link ">
                                <span class="menu-title">Top Up Wallet</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                            <!--begin:Menu item-->
                        <div class="menu-item p-0 m-0">
                            <!--begin:Menu link-->
                            <a href="/metronic8/demo60/utilities/wizards/offer-a-deal.html" class="menu-link ">
                                <span class="menu-title">Offer a Deal</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                                    </div>
                <!--end:Menu section-->
            </div>
            <!--end:Col-->
        </div>
        <!--end:Row-->
    </div>
    <!--end:Col-->

    <!--begin:Col-->
    <div class="col-lg-5 pe-lg-5">
        <img src="/metronic8/demo60/assets/media/stock/600x600/img-84.jpg" class="rounded mw-100" alt=""/>
    </div>
    <!--end:Col-->
</div>
<!--end:Row-->        </div>
        <!--end:Tab pane-->

        <!--begin:Tab pane-->
        <div class="tab-pane  w-lg-500px" id="kt_app_header_menu_pages_widgets">
            <!--begin:Row-->
<div class="row">
    <!--begin:Col-->
    <div class="col-lg-4 mb-6 mb-lg-0">
                    <!--begin:Menu item-->
            <div class="menu-item p-0 m-0">
                <!--begin:Menu link-->
                <a href="/metronic8/demo60/widgets/lists.html" class="menu-link ">
                    <span class="menu-title">Lists</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
                    <!--begin:Menu item-->
            <div class="menu-item p-0 m-0">
                <!--begin:Menu link-->
                <a href="/metronic8/demo60/widgets/statistics.html" class="menu-link ">
                    <span class="menu-title">Statistics</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
                    <!--begin:Menu item-->
            <div class="menu-item p-0 m-0">
                <!--begin:Menu link-->
                <a href="/metronic8/demo60/widgets/charts.html" class="menu-link ">
                    <span class="menu-title">Charts</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
                    <!--begin:Menu item-->
            <div class="menu-item p-0 m-0">
                <!--begin:Menu link-->
                <a href="/metronic8/demo60/widgets/mixed.html" class="menu-link ">
                    <span class="menu-title">Mixed</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
                    <!--begin:Menu item-->
            <div class="menu-item p-0 m-0">
                <!--begin:Menu link-->
                <a href="/metronic8/demo60/widgets/tables.html" class="menu-link ">
                    <span class="menu-title">Tables</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
                    <!--begin:Menu item-->
            <div class="menu-item p-0 m-0">
                <!--begin:Menu link-->
                <a href="/metronic8/demo60/widgets/feeds.html" class="menu-link ">
                    <span class="menu-title">Feeds</span>
                </a>
                <!--end:Menu link-->
            </div>
            <!--end:Menu item-->
            </div>
    <!--end:Col-->

    <!--begin:Col-->
    <div class="col-lg-8">
        <img src="/metronic8/demo60/assets/media/stock/900x600/44.jpg" class="rounded mw-100" alt=""/>
    </div>
    <!--end:Col-->
</div>
<!--end:Row-->        </div>
        <!--end:Tab pane-->
    </div>
    <!--end:Tab content-->
</div>
<!--end:Pages menu--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"  class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-title" >Apps</span><span  class="menu-arrow d-lg-none" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-250px" ><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-rocket fs-2"></i></span><span  class="menu-title" >Projects</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/projects/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >My Projects</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/projects/project.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View Project</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/projects/targets.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Targets</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/projects/budget.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Budget</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/projects/users.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Users</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/projects/files.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Files</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/projects/activity.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Activity</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/projects/settings.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Settings</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-handcart fs-2"></i></span><span  class="menu-title" >eCommerce</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Catalog</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/ecommerce/catalog/products.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Products</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/ecommerce/catalog/categories.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Categories</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/ecommerce/catalog/add-product.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Add Product</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Edit Product</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/ecommerce/catalog/add-category.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Add Category</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/ecommerce/catalog/edit-category.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Edit Category</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion menu-sub-indention" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Sales</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/ecommerce/sales/listing.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Orders Listing</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/ecommerce/sales/details.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Order Details</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/ecommerce/sales/add-order.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Add Order</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/ecommerce/sales/edit-order.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Edit Order</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion menu-sub-indention" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customers</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/ecommerce/customers/listing.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customers Listing</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/ecommerce/customers/details.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customers Details</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion menu-sub-indention" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Reports</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/ecommerce/reports/view.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Products Viewed</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/ecommerce/reports/sales.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Sales</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/ecommerce/reports/returns.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Returns</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/ecommerce/reports/customer-orders.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customer Orders</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/ecommerce/reports/shipping.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Shipping</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/ecommerce/settings.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Settings</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-chart fs-2"></i></span><span  class="menu-title" >Support Center</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/support-center/overview.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Overview</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Tickets</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/support-center/tickets/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Ticket List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/support-center/tickets/view.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Ticket View</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Tutorials</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/support-center/tutorials/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Tutorials List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/support-center/tutorials/post.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Tutorials Post</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/support-center/faq.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >FAQ</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/support-center/licenses.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Licenses</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/support-center/contact.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Contact Us</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-shield-tick fs-2"></i></span><span  class="menu-title" >User Management</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Users</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/user-management/users/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Users List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/user-management/users/view.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View User</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Roles</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/user-management/roles/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Roles List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/user-management/roles/view.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View Roles</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/user-management/permissions.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Permissions</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-phone fs-2"></i></span><span  class="menu-title" >Contacts</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/contacts/getting-started.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Getting Started</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/contacts/add-contact.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Add Contact</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/contacts/edit-contact.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Edit Contact</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/contacts/view-contact.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View Contact</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-basket fs-2"></i></span><span  class="menu-title" >Subscriptions</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/subscriptions/getting-started.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Getting Started</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/subscriptions/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Subscription List</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/subscriptions/add.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Add Subscription</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/subscriptions/view.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View Subscription</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-briefcase fs-2"></i></span><span  class="menu-title" >Customers</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/customers/getting-started.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Getting Started</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/customers/list.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customer Listing</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/customers/view.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Customer Details</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-credit-cart fs-2"></i></span><span  class="menu-title" >Invoice Management</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Profile</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/invoices/view/invoice-1.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Invoice 1</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/invoices/view/invoice-2.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Invoice 2</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/invoices/view/invoice-3.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Invoice 3</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/invoices/create.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Create Invoice</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-file-added fs-2"></i></span><span  class="menu-title" >File Manager</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/file-manager/folders.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Folders</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/file-manager/files.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Files</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/file-manager/blank.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Blank Directory</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/file-manager/settings.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Settings</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-sms fs-2"></i></span><span  class="menu-title" >Inbox</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/inbox/listing.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Messages</span><span  class="menu-badge" ><span class="badge badge-light-success">3</span></span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/inbox/compose.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Compose</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/inbox/reply.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >View & Reply</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-placement="right-start"  class="menu-item menu-lg-down-accordion" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-message-text-2 fs-2"></i></span><span  class="menu-title" >Chat</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown menu-active-bg px-lg-2 py-lg-4 w-lg-225px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/chat/private.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Private Chat</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/chat/group.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Group Chat</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/chat/drawer.html"  ><span  class="menu-bullet" ><span class="bullet bullet-dot"></span></span><span  class="menu-title" >Drawer Chat</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/calendar.html"  ><span  class="menu-icon" ><i class="ki-outline ki-calendar-8 fs-2"></i></span><span  class="menu-title" >Calendar</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"  class="menu-item menu-lg-down-accordion menu-sub-lg-down-indention me-0 me-lg-2" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-title" >Help</span><span  class="menu-arrow d-lg-none" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank" title="Check out over 200 in-house components, plugins and ready for use solutions" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"  ><span  class="menu-icon" ><i class="ki-outline ki-rocket fs-2"></i></span><span  class="menu-title" >Components</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/html/metronic/docs" target="_blank" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"  ><span  class="menu-icon" ><i class="ki-outline ki-abstract-26 fs-2"></i></span><span  class="menu-title" >Documentation</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/layout-builder.html" title="Build your layout and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right"  ><span  class="menu-icon" ><i class="ki-outline ki-switch fs-2"></i></span><span  class="menu-title" >Layout Builder</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" target="_blank"  ><span  class="menu-icon" ><i class="ki-outline ki-code fs-2"></i></span><span  class="menu-title" >Changelog v8.2.5</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item-->		</div>
		<!--end::Menu-->
	</div>
	<!--end::Menu holder-->			
</div>
<!--end::Menu wrapper-->	</div>

	
<!--begin::Navbar-->
<div class="app-navbar flex-shrink-0 gap-2">
    <!--begin::Notifications-->
    <div class="app-navbar-item ms-1">
        <!--begin::Menu- wrapper-->
        <div class="btn btn-sm btn-icon btn-custom h-35px w-35px" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <i class="ki-outline ki-category fs-3"></i>        
        </div>
        
<!--end::Menu-->        <!--end::Menu wrapper-->
    </div>
    <!--end::Notifications-->    
    
    <!--begin::User menu-->
    <div class="app-navbar-item ms-1">
        <!--begin::Menu wrapper-->
        <div class="cursor-pointer symbol position-relative symbol-35px" 
            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" 
            data-kt-menu-attach="parent" 
            data-kt-menu-placement="bottom-end">
            <img src="" alt="user"/>

            <span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle mb-1 bottom-0 start-100 animation-blink"></span>
        </div>
        
<!--begin::User account menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <div class="menu-content d-flex align-items-center px-3">
            <!--begin::Avatar-->
            <div class="symbol symbol-50px me-5">
                <img alt="Logo" src=""/>
            </div>
            <!--end::Avatar-->

            <!--begin::Username-->
            <div class="d-flex flex-column">
                <div class="fw-bold d-flex align-items-center fs-5">
                    Ana Fox                    <span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span>
                </div>

                <a href="#" class="fw-semibold text-muted text-hover-primary fs-7">
                    ana@nio.com                </a>
            </div>
            <!--end::Username-->
        </div>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->

    <!--begin::Menu separator-->
    <div class="separator my-2"></div>
    <!--end::Menu separator-->

            <!--begin::Menu item-->
        <div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="left-start" data-kt-menu-offset="-15px, 0">
            <a href="#" class="menu-link px-5">
                <span class="menu-title position-relative">
                    Mode 

                    <span class="ms-5 position-absolute translate-middle-y top-50 end-0">
                        <i class="ki-outline ki-night-day theme-light-show fs-2"></i>                        <i class="ki-outline ki-moon theme-dark-show fs-2"></i>                    </span>
                </span>
            </a>

            <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-outline ki-night-day fs-2"></i>            </span>
            <span class="menu-title">
                Light
            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-outline ki-moon fs-2"></i>            </span>
            <span class="menu-title">
                Dark
            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3 my-0">
        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
            <span class="menu-icon" data-kt-element="icon">
                <i class="ki-outline ki-screen fs-2"></i>            </span>
            <span class="menu-title">
                System
            </span>
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->

        </div>
        <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5 my-1">
        <a href="" class="menu-link px-5">
            Account Settings
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-5">
        <a href="" class="menu-link px-5">
            Sign Out
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::User account menu-->
        <!--end::Menu wrapper-->
    </div>
    <!--end::User menu--> 

    <!--begin::Header menu toggle-->
    <div class="app-navbar-item d-lg-none" title="Show header menu">
        <button class="btn btn-sm btn-icon btn-custom h-35px w-35px" id="kt_header_secondary_mobile_toggle">
            <i class="ki-outline ki-element-4 fs-2"></i>        </button>
    </div>
    <!--end::Header menu toggle-->

    <!--begin::Header menu toggle-->
    <div class="app-navbar-item d-lg-none me-n3" title="Show header menu">
        <button class="btn btn-sm btn-icon btn-custom h-35px w-35px" id="kt_app_sidebar_mobile_toggle">
            <i class="ki-outline ki-setting-3 fs-2"></i>        </button>
    </div>
    <!--end::Header menu toggle-->
</div>
<!--end::Navbar--></div>
<!--end::Header primary wrapper-->                    </div>
                    <!--end::Header primary container-->
                                
            </div>
            <!--end::Header primary-->
        
                    <!--begin::Header secondary-->
            <div class="app-header-secondary  app-header-mobile-drawer "
                 data-kt-drawer="true" data-kt-drawer-name="app-header-secondary" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_header_secondary_mobile_toggle"                                  
                 data-kt-swapper="true" data-kt-swapper-mode="{default: 'append', lg: 'append'}" data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header'}" >

                                    <!--begin::Header secondary wrapper-->
<div class="d-flex flex-column flex-grow-1 overflow-hidden">
	

<div class="app-header-secondary-menu-main d-flex flex-grow-lg-1 align-items-end pt-3 pt-lg-2 px-3 px-lg-0 w-auto overflow-auto flex-nowrap">
	<div class="app-container  container-fluid ">
		<!--begin::Main menu-->
		<div 
			class="
				menu 
				menu-rounded 
				menu-nowrap
				flex-shrink-0
				menu-row 
				menu-active-bg 
				menu-title-gray-700 
				menu-state-gray-900 
				menu-icon-gray-500
				menu-arrow-gray-500 
				menu-state-icon-primary
				menu-state-bullet-primary
				fw-semibold 
				fs-base 
				align-items-stretch 
			" 
			id="#kt_app_header_secondary_menu" 
			data-kt-menu="true"
		>        
			<!--begin:Menu item--><div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"  class="menu-item here show " ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-title" >Account</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-dropdown px-lg-2 py-lg-4 w-150px w-lg-175px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link active"  href="/metronic8/demo60/index.html"  ><span  class="menu-icon" ><i class="ki-outline ki-chart-simple fs-3"></i></span><span  class="menu-title" >Dashboard</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/account/settings.html"  ><span  class="menu-icon" ><i class="ki-outline ki-share fs-3"></i></span><span  class="menu-title" >Settings</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/account/security.html"  ><span  class="menu-icon" ><i class="ki-outline ki-shield fs-3"></i></span><span  class="menu-title" >Security</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/account/activity.html"  ><span  class="menu-icon" ><i class="ki-outline ki-scan-barcode fs-3"></i></span><span  class="menu-title" >Activity</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/account/billing.html"  ><span  class="menu-icon" ><i class="ki-outline ki-dollar fs-3"></i></span><span  class="menu-title" >Billing</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/statements.html"  ><span  class="menu-icon" ><i class="ki-outline ki-two-credit-cart fs-3"></i></span><span  class="menu-title" >Statements</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu content--><div  class="menu-content" ><div class="menu-separator"></div></div><!--end:Menu content--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item " ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/projects/list.html"  ><span  class="menu-title" >Projects</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu content--><div  class="menu-content" ><div class="menu-separator"></div></div><!--end:Menu content--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item " ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/customers/list.html"  ><span  class="menu-title" >Customers</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu content--><div  class="menu-content" ><div class="menu-separator"></div></div><!--end:Menu content--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="#"   data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign"><span  class="menu-icon" ><i class="ki-outline ki-plus fs-3"></i></span><span  class="menu-title" >Add New</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item flex-grow-1" ></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu content--><div  class="menu-content" ><div class="menu-separator d-block d-lg-none"></div></div><!--end:Menu content--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/utilities/modals/wizards/create-app.html"  ><span  class="menu-icon" ><i class="ki-outline ki-plus fs-3"></i></span><span  class="menu-title" >Extensions</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu content--><div  class="menu-content" ><div class="menu-separator"></div></div><!--end:Menu content--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-end"  class="menu-item " ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-title" >Tools</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-dropdown px-lg-2 py-lg-4 w-150px w-lg-175px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/layout-builder.html"  ><span  class="menu-icon" ><i class="ki-outline ki-chart-simple fs-3"></i></span><span  class="menu-title" >Layout Builder</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog"  ><span  class="menu-icon" ><i class="ki-outline ki-code fs-3"></i></span><span  class="menu-title" >Changelog</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="https://preview.keenthemes.com/html/metronic/docs"  ><span  class="menu-icon" ><i class="ki-outline ki-abstract-26 fs-3"></i></span><span  class="menu-title" >Docs</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item-->		</div>
		<!--end::Menu-->
	</div>
</div>
	
<div class="app-header-secondary-menu-sub d-flex align-items-stretch flex-grow-1">
	<div class="app-container d-flex flex-column flex-lg-row align-items-stretch justify-content-lg-between  container-fluid ">
		<!--begin::Main menu-->
		<div 
			class="
				menu 
				menu-rounded 
				menu-column 
				menu-lg-row 
				menu-active-bg 
				menu-title-gray-700 
				menu-state-gray-900 
				menu-icon-gray-500
				menu-arrow-gray-500 
				menu-state-icon-primary 
				menu-state-bullet-primary 
				fw-semibold 
				fs-base 
				align-items-stretch 
				my-2 
				my-lg-0 
				px-2 
				px-lg-0		
			" 
			id="#kt_app_header_tertiary_menu" 
			data-kt-menu="true"
		>        
			<!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link active"  href="#"  ><span  class="menu-icon" ><i class="ki-outline ki-element-9 fs-4"></i></span><span  class="menu-title" >Views</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"  class="menu-item menu-lg-down-accordion me-0 me-lg-2" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-grid fs-4"></i></span><span  class="menu-title" >My Widgets</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/projects/targets.html"  ><span  class="menu-icon" ><i class="ki-outline ki-menu fs-3"></i></span><span  class="menu-title" >Task Manager</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/customers/details.html"  ><span  class="menu-icon" ><i class="ki-outline ki-basket-ok fs-3"></i></span><span  class="menu-title" >Sales Tracker</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/invoices/create.html"  ><span  class="menu-icon" ><i class="ki-outline ki-scan-barcode fs-3"></i></span><span  class="menu-title" >Expense Calculator</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/file-manager/files.html"  ><span  class="menu-icon" ><i class="ki-outline ki-picture fs-3"></i></span><span  class="menu-title" >Media Dashboard</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/projects/targets.html"  ><span  class="menu-icon" ><i class="ki-outline ki-rocket fs-3"></i></span><span  class="menu-title" >Project Planner</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="/metronic8/demo60/apps/calendar.html"  ><span  class="menu-icon" ><i class="ki-outline ki-calendar-8 fs-3"></i></span><span  class="menu-title" >Event Calendar</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"  class="menu-item menu-lg-down-accordion me-0 me-lg-2" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-eye-slash fs-4"></i></span><span  class="menu-title" >Hide Fields</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-150px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="#"  ><span  class="menu-title" >Product</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="#"  ><span  class="menu-title" >SKU</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="#"  ><span  class="menu-title" >Quantity</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="#"  ><span  class="menu-title" >Price</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="#"  ><span  class="menu-title" >Rating</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="#"  ><span  class="menu-title" >Status</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"  class="menu-item menu-lg-down-accordion me-0 me-lg-2" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-filter fs-4"></i></span><span  class="menu-title" >Filter</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-lg-300px" ><div data-kt-menu-dismiss="true">
    <!--begin::Header-->
    <div class="px-7 py-5">
        <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
    </div>
    <!--end::Header-->

    <!--begin::Menu separator-->
    <div class="separator border-gray-200"></div>
    <!--end::Menu separator-->

    <!--begin::Form-->
    <div class="px-7 py-5">
        <!--begin::Input group-->
        <div class="mb-6">
            <!--begin::Label-->
            <label class="form-label fw-semibold">Status:</label>
            <!--end::Label-->

            <!--begin::Input-->
            <div>
                <select class="form-select form-select-solid" multiple data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_app_header_tertiary_menu" data-allow-clear="true">
                    <option></option>
                    <option value="1">Approved</option>
                    <option value="2">Pending</option>
                    <option value="2">In Process</option>
                    <option value="2">Rejected</option>
                </select>
            </div>
            <!--end::Input-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="mb-6">
            <!--begin::Label-->
            <label class="form-label fw-semibold">Member Type:</label>
            <!--end::Label-->

            <!--begin::Options-->
            <div class="d-flex">
                <!--begin::Options-->    
                <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                    <input class="form-check-input" type="checkbox" value="1"/>
                    <span class="form-check-label">
                        Author
                    </span>
                </label>
                <!--end::Options-->    

                <!--begin::Options-->    
                <label class="form-check form-check-sm form-check-custom form-check-solid">
                    <input class="form-check-input" type="checkbox" value="2" checked="checked"/>
                    <span class="form-check-label">
                        Customer
                    </span>
                </label>
                <!--end::Options-->    
            </div>        
            <!--end::Options-->    
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="mb-0">
            <!--begin::Label-->
            <label class="form-label fw-semibold">Notifications:</label>
            <!--end::Label-->

            <!--begin::Switch-->
            <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                <input class="form-check-input" type="checkbox" value="" name="notifications" checked />
                <label class="form-check-label">
                    Enabled
                </label>
            </div>
            <!--end::Switch-->
        </div>
        <!--end::Input group-->
    </div>
    <!--end::Form-->

    <!--begin::Menu separator-->
    <div class="separator border-gray-200"></div>
    <!--end::Menu separator-->

    <!--begin::Actions-->
    <div class="px-7 py-5 d-flex justify-content-end gap-2">
        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-dismiss="true">Reset</button>

        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
    </div>
    <!--end::Actions-->
</div></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"  class="menu-item menu-lg-down-accordion me-0 me-lg-2" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-sort fs-4"></i></span><span  class="menu-title" >Sort</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown px-lg-2 py-lg-4 w-lg-200px" ><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="#"  ><span  class="menu-title" >Default (No Sorting)</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="#"  ><span  class="menu-title" >Name (A to Z)</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="#"  ><span  class="menu-title" >Name (Z to A)</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="#"  ><span  class="menu-title" >Date (Oldest to Newest)</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="#"  ><span  class="menu-title" >Date (Newest to Oldest)</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="#"  ><span  class="menu-title" >Price (Lowest to Highest)</span></a><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><a class="menu-link"  href="#"  ><span  class="menu-title" >Price (Highest to Lowest)</span></a><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item-->		</div>
		<!--end::Menu-->

		
<!--begin::Search-->
<div 
    id="kt_header_search" 
    class="header-search d-flex align-items-stretch" 
    
    data-kt-search-keypress="true"
    data-kt-search-min-length="2"
    data-kt-search-enter="enter"     
    data-kt-search-layout="menu"

    data-kt-menu-trigger="auto" 
    data-kt-menu-overflow="false" 
    data-kt-menu-permanent="true" 
    data-kt-menu-placement="bottom-end" 

       >

    <!--begin::Search toggle-->
    <div class="d-flex align-items-center" data-kt-search-element="toggle" id="kt_header_search_toggle">
        <div class="btn btn-icon btn-active-color-primary ms-1">
                            <i class="ki-outline ki-magnifier fs-3"></i>                    </div>
    </div>
    <!--end::Search toggle-->

    <!--begin::Menu-->
    <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown p-7 w-325px w-md-375px">  
        <!--begin::Wrapper-->
        <div data-kt-search-element="wrapper">
            <!--begin::Form-->
<form data-kt-search-element="form" class="w-100 position-relative mb-3" autocomplete="off">	
    <!--begin::Icon-->
    <i class="ki-outline ki-magnifier fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-0"></i>    <!--end::Icon-->

    <!--begin::Input-->
    <input type="text" class="search-input  form-control form-control-flush ps-10" name="search" value="" placeholder="Search..." data-kt-search-element="input"/>
    <!--end::Input-->

    <!--begin::Spinner-->
    <span class="search-spinner  position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-1" data-kt-search-element="spinner">
        <span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
    </span>
    <!--end::Spinner-->

    <!--begin::Reset-->
    <span class="search-reset  btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none" data-kt-search-element="clear">
        <i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>    </span>
    <!--end::Reset-->

    <!--begin::Toolbar-->
    <div class="position-absolute top-50 end-0 translate-middle-y" data-kt-search-element="toolbar">
        <!--begin::Preferences toggle-->
        <div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-1" data-bs-toggle="tooltip" title="Show search preferences">
            <i class="ki-outline ki-setting-2 fs-2"></i>        </div>
        <!--end::Preferences toggle-->

        <!--begin::Advanced search toggle-->
        <div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary" data-bs-toggle="tooltip" title="Show more search options">
            <i class="ki-outline ki-down fs-2"></i>        </div>
        <!--end::Advanced search toggle-->
    </div>
    <!--end::Toolbar-->
</form>
<!--end::Form-->

<!--begin::Separator-->
<div class="separator border-gray-200 mb-6"></div>
<!--end::Separator-->
            <!--begin::Recently viewed-->
<div data-kt-search-element="results" class="d-none">
    <!--begin::Items-->
    <div class="scroll-y mh-200px mh-lg-350px">
                    <!--begin::Category title-->
            <h3 class="fs-5 text-muted m-0  pb-5" data-kt-search-element="category-title">
                Users            </h3>
            <!--end::Category title-->

                            
                
                
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <img src="/metronic8/demo60/assets/media/avatars/300-6.jpg" alt=""/>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Karina Clark</span>
                            <span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                                            
                
                
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <img src="/metronic8/demo60/assets/media/avatars/300-2.jpg" alt=""/>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Olivia Bold</span>
                            <span class="fs-7 fw-semibold text-muted">Software Engineer</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                                            
                
                
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <img src="/metronic8/demo60/assets/media/avatars/300-9.jpg" alt=""/>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Ana Clark</span>
                            <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                                            
                
                
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <img src="/metronic8/demo60/assets/media/avatars/300-14.jpg" alt=""/>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Nick Pitola</span>
                            <span class="fs-7 fw-semibold text-muted">Art Director</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                                            
                
                
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <img src="/metronic8/demo60/assets/media/avatars/300-11.jpg" alt=""/>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Edward Kulnic</span>
                            <span class="fs-7 fw-semibold text-muted">System Administrator</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                                                <!--begin::Category title-->
            <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">
                Customers            </h3>
            <!--end::Category title-->

                            
                
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">                             
                                <img class="w-20px h-20px" src="/metronic8/demo60/assets/media/svg/brand-logos/volicity-9.svg" alt=""/>                          
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Company Rbranding</span>
                            <span class="fs-7 fw-semibold text-muted">UI Design</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                
                                            
                
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">                             
                                <img class="w-20px h-20px" src="/metronic8/demo60/assets/media/svg/brand-logos/tvit.svg" alt=""/>                          
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Company Re-branding</span>
                            <span class="fs-7 fw-semibold text-muted">Web Development</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                
                                            
                
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">                             
                                <img class="w-20px h-20px" src="/metronic8/demo60/assets/media/svg/misc/infography.svg" alt=""/>                          
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Business Analytics App</span>
                            <span class="fs-7 fw-semibold text-muted">Administration</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                
                                            
                
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">                             
                                <img class="w-20px h-20px" src="/metronic8/demo60/assets/media/svg/brand-logos/leaf.svg" alt=""/>                          
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                            <span class="fs-7 fw-semibold text-muted">Marketing</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                
                                            
                
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">                             
                                <img class="w-20px h-20px" src="/metronic8/demo60/assets/media/svg/brand-logos/tower.svg" alt=""/>                          
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column justify-content-start fw-semibold">
                            <span class="fs-6 fw-semibold">Tower Group Website</span>
                            <span class="fs-7 fw-semibold text-muted">Google Adwords</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                
                                                <!--begin::Category title-->
            <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">
                Projects            </h3>
            <!--end::Category title-->

                            
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">                             
                                <i class="ki-outline ki-notepad fs-2 text-primary"></i>                          
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
                            <span class="fs-7 fw-semibold text-muted">#45670</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                
                
                                            
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">                             
                                <i class="ki-outline ki-frame fs-2 text-primary"></i>                          
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
                            <span class="fs-7 fw-semibold text-muted">#45690</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                
                
                                            
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">                             
                                <i class="ki-outline ki-message-text-2 fs-2 text-primary"></i>                          
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
                            <span class="fs-7 fw-semibold text-muted">#21090</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                
                
                                            
                                    <!--begin::Item-->
                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-4">
                            <span class="symbol-label bg-light">                             
                                <i class="ki-outline ki-profile-circle fs-2 text-primary"></i>                          
                            </span>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Title-->
                        <div class="d-flex flex-column">
                            <span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
                            <span class="fs-7 fw-semibold text-muted">#34560</span>
                        </div>
                        <!--end::Title-->
                    </a>
                    <!--end::Item-->
                
                
                                        </div>
    <!--end::Items-->
</div>
<!--end::Recently viewed-->
            <!--begin::Recently viewed-->
<div class="mb-5" data-kt-search-element="main">
    <!--begin::Heading-->
    <div class="d-flex flex-stack fw-semibold mb-4">
        <!--begin::Label-->
        <span class="text-muted fs-6 me-2">Recently Searched:</span>
        <!--end::Label-->

            </div>
    <!--end::Heading-->

    <!--begin::Items-->
    <div class="scroll-y mh-200px mh-lg-325px">
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">                             
                        <i class="ki-outline ki-laptop fs-2 text-primary"></i>                          
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
                    <span class="fs-7 text-muted fw-semibold">#45789</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">                             
                        <i class="ki-outline ki-chart-simple fs-2 text-primary"></i>                          
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
                    <span class="fs-7 text-muted fw-semibold">#84050</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">                             
                        <i class="ki-outline ki-chart fs-2 text-primary"></i>                          
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
                    <span class="fs-7 text-muted fw-semibold">#84250</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">                             
                        <i class="ki-outline ki-chart-line-down fs-2 text-primary"></i>                          
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
                    <span class="fs-7 text-muted fw-semibold">#67945</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">                             
                        <i class="ki-outline ki-sms fs-2 text-primary"></i>                          
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
                    <span class="fs-7 text-muted fw-semibold">#84250</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">                             
                        <i class="ki-outline ki-bank fs-2 text-primary"></i>                          
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
                    <span class="fs-7 text-muted fw-semibold">#45690</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
                    <!--begin::Item-->
            <div class="d-flex align-items-center mb-5">
                <!--begin::Symbol-->
                <div class="symbol symbol-40px me-4">
                    <span class="symbol-label bg-light">                             
                        <i class="ki-outline ki-chart-line-down fs-2 text-primary"></i>                          
                    </span>
                </div>
                <!--end::Symbol-->

                <!--begin::Title-->
                <div class="d-flex flex-column">
                    <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
                    <span class="fs-7 text-muted fw-semibold">#24005</span>
                </div>
                <!--end::Title-->
            </div>
            <!--end::Item-->
            </div>
    <!--end::Items-->
</div>
<!--end::Recently viewed-->
            <!--begin::Empty-->
<div data-kt-search-element="empty" class="text-center d-none">
    <!--begin::Icon-->
    <div class="pt-10 pb-10">
        <i class="ki-outline ki-search-list fs-4x opacity-50"></i>    </div>
    <!--end::Icon-->

    <!--begin::Message-->
    <div class="pb-15 fw-semibold">
        <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
        <div class="text-muted fs-7">Please try again with a different query</div>
    </div>
    <!--end::Message-->
</div>
<!--end::Empty-->        </div>
        <!--end::Wrapper-->

        <!--begin::Preferences-->
<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
    <!--begin::Heading-->
    <h3 class="fw-semibold text-gray-900 mb-7">Advanced Search</h3>
    <!--end::Heading-->

    <!--begin::Input group-->
    <div class="mb-5">
        <input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-5">
        <!--begin::Radio group-->
        <div class="nav-group nav-group-fluid">
            <!--begin::Option-->
            <label>
                <input type="radio" class="btn-check" name="type" value="has" checked="checked" />
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                    All
                </span>
            </label>
            <!--end::Option-->

            <!--begin::Option-->
            <label>
                <input type="radio" class="btn-check" name="type" value="users" />
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                    Users
                </span>
            </label>
            <!--end::Option-->

            <!--begin::Option-->
            <label>
                <input type="radio" class="btn-check" name="type" value="orders" />
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                    Orders
                </span>
            </label>
            <!--end::Option-->

            <!--begin::Option-->
            <label>
                <input type="radio" class="btn-check" name="type" value="projects" />
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                    Projects
                </span>
            </label>
            <!--end::Option-->
        </div>
        <!--end::Radio group-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-5">
        <input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-5">
        <input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-5">
        <!--begin::Radio group-->
        <div class="nav-group nav-group-fluid">
            <!--begin::Option-->
            <label>
                <input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">
                    Has attachment
                </span>
            </label>
            <!--end::Option-->

            <!--begin::Option-->
            <label>
                <input type="radio" class="btn-check" name="attachment" value="any" />
                <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">
                    Any
                </span>
            </label>
            <!--end::Option-->
        </div>
        <!--end::Radio group-->
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="mb-5">
        <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
            <option value="next">Within the next</option>
            <option value="last">Within the last</option>
            <option value="between">Between</option>
            <option value="on">On</option>
        </select>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="row mb-8">
        <!--begin::Col-->
        <div class="col-6">
            <input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
        </div>
        <!--end::Col-->

        <!--begin::Col-->
        <div class="col-6">
            <select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
                <option value="days">Days</option>
                <option value="weeks">Weeks</option>
                <option value="months">Months</option>
                <option value="years">Years</option>
            </select>
        </div>
        <!--end::Col-->
    </div>
    <!--end::Input group-->

    <!--begin::Actions-->
    <div class="d-flex justify-content-end">
        <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>

        <a href="/metronic8/demo60/utilities/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
    </div>
    <!--end::Actions-->
</form>
<!--end::Preferences-->
        <!--begin::Preferences-->
<form data-kt-search-element="preferences" class="pt-1 d-none">
    <!--begin::Heading-->
    <h3 class="fw-semibold text-gray-900 mb-7">Search Preferences</h3>
    <!--end::Heading-->

    <!--begin::Input group-->
    <div class="pb-4 border-bottom">
        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Projects
            </span>

            <input class="form-check-input" type="checkbox" value="1" checked="checked"/>
        </label>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="py-4 border-bottom">
        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Targets
            </span>
            <input class="form-check-input" type="checkbox" value="1" checked="checked"/>
        </label>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="py-4 border-bottom">
        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Affiliate Programs
            </span>
            <input class="form-check-input" type="checkbox" value="1" />
        </label>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="py-4 border-bottom">
        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Referrals
            </span>
            <input class="form-check-input" type="checkbox" value="1" checked="checked"/>
        </label>
    </div>
    <!--end::Input group-->

    <!--begin::Input group-->
    <div class="py-4 border-bottom">
        <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
            <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">
                Users
            </span>
            <input class="form-check-input" type="checkbox" value="1" />
        </label>
    </div>
    <!--end::Input group-->

    <!--begin::Actions-->
    <div class="d-flex justify-content-end pt-7">
        <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
        <button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
    </div>
    <!--end::Actions-->
</form>
<!--end::Preferences-->    </div>
    <!--end::Menu-->
</div>
<!--end::Search-->	</div>	
</div></div>
<!--end::Header secondary wrapper-->                                
            </div>
            <!--end::Header secondary-->
        
            </div>
<!--end::Header-->        
        <!--begin::Wrapper-->
        <div class="app-wrapper  flex-column flex-row-fluid " id="kt_app_wrapper">
            
            
                  
            
            
                                                
<!--begin::Sidebar-->
<div id="kt_app_sidebar" class="app-sidebar " 
     data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="225px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle"      
     >

            <!--begin::Sidebar wrapper-->
<div
	id="kt_app_sidebar_wrapper"
	class="flex-grow-1 hover-scroll-y mt-9 mb-5 px-2 mx-3 ms-lg-7 me-lg-5"
	data-kt-scroll="true"
	data-kt-scroll-activate="true"
	data-kt-scroll-height="auto"     
	data-kt-scroll-dependencies="{default: false, lg: '#kt_app_header'}"
	data-kt-scroll-offset="5px"
>
	<!--begin::Filter-->
<div class="mb-4">
    <!--begin::Search-->
    <div class="d-flex align-items-center position-relative mb-6">
        <i class="ki-outline ki-magnifier fs-4 text-gray-500 position-absolute ms-3 fw-bold"></i>
        <input type="text" id="kt_filter_search" class="form-control form-control-sm form-control-solid w-100 ps-10 border border-300 bg-light-active" placeholder="Find a view"/>

        <i class="ki-solid ki-setting-4 fs-5 text-gray-500 position-absolute top-50 end-0 translate-middle-y fw-bold me-3"></i>    </div>
    <!--end::Search-->

    <!--begin::Items-->
    <div class="m-0">
        <!--begin::Item-->
        <a href="#" class="btn btn-sm d-flex flex-stack border border-300 bg-gray-100i btn-color-gray-700 btn-active-color-gray-900 px-3 mb-2">         
            <span class="d-flex align-item-center">
                <i class="ki-outline ki-abstract-41 fs-4 me-2 text-primary"></i>                All Features
            </span>
            <i class="ki-outline ki-check fs-4 text-gray-500 me-n2"></i>        </a>  
        <!--end::Item-->

        <!--begin::Item-->
        <a href="#" class="btn btn-sm px-3 border border-transparent btn-color-gray-700 btn-active-color-gray-900">               
            <i class="ki-outline ki-calendar fs-4 me-1 text-success"></i>            Feature Calendar           
        </a>  
        <!--end::Item-->
    </div>
    <!--end::Items-->    
</div>
<!--end::Filter-->
	
<!--begin::Main menu-->
<div 
	class="
		menu-sidebar 
		menu 
		menu-fit 
		menu-column 
		menu-rounded 
		menu-title-gray-700 
		menu-icon-gray-700
		menu-arrow-gray-700 
		fw-semibold 
		fs-6 
		align-items-stretch 
		flex-grow-1  
	" 
	id="#kt_app_sidebar_menu" 
	data-kt-menu="true"
	data-kt-menu-expand="true"
>        
	<!--begin:Menu item--><div  class="menu-item py-1" ><!--begin:Menu content--><div  class="menu-content" ><div class="separator separator-dashed"></div></div><!--end:Menu content--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion show" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-title" >Create new</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion menu-state-gray-900 menu-fit open" ><!--begin:Menu item--><div  class="menu-item menu-accordion menu-fit" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-element-11 fs-4 text-gray-700"></i></span><span  class="menu-title" >Grid</span><span  class="menu-badge" ><button class="btn btn-sm btn-icon btn-action"  data-bs-toggle="modal" data-bs-target="#kt_modal_new_target"<i class="ki-outline ki-plus fs-4"></i></button></span></span><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-subtitle fs-4 text-danger"></i></span><span  class="menu-title" >Form</span><span  class="menu-badge" ><button class="btn btn-sm btn-icon btn-action"  data-bs-toggle="modal" data-bs-target="#kt_modal_new_card"<i class="ki-outline ki-plus fs-4"></i></button></span></span><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-calendar fs-4 text-success"></i></span><span  class="menu-title" >Calendar</span><span  class="menu-badge" ><button class="btn btn-sm btn-icon btn-action"  data-bs-toggle="modal" data-bs-target="#kt_modal_bidding"<i class="ki-outline ki-plus fs-4"></i></button></span></span><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-picture fs-4 text-info"></i></span><span  class="menu-title" >Gallery</span><span  class="menu-badge" ><button class="btn btn-sm btn-icon btn-action"  data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends"<i class="ki-outline ki-plus fs-4"></i></button></span></span><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-element-2 fs-4 text-warning"></i></span><span  class="menu-title" >Kanban</span><span  class="menu-badge" ><button class="btn btn-sm btn-icon btn-action"  data-bs-toggle="modal" data-bs-target="#kt_modal_top_up_wallet"<i class="ki-outline ki-plus fs-4"></i></button></span></span><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-abstract-44 fs-4 text-danger"></i></span><span  class="menu-title" >Timeline</span><span  class="menu-badge" ><button class="btn btn-sm btn-icon btn-action"  data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign"<i class="ki-outline ki-plus fs-4"></i></button></span></span><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item py-1" ><!--begin:Menu content--><div  class="menu-content" ><div class="separator separator-dashed"></div></div><!--end:Menu content--></div><!--end:Menu item--><!--begin:Menu item--><div  data-kt-menu-trigger="click"  class="menu-item menu-accordion show" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-title" >Create an interface</span><span  class="menu-arrow" ></span></span><!--end:Menu link--><!--begin:Menu sub--><div  class="menu-sub menu-sub-accordion menu-state-gray-900 menu-fit open" ><!--begin:Menu item--><div  class="menu-item menu-accordion menu-fit" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-menu fs-4 text-gray-700"></i></span><span  class="menu-title" >Record review</span><span  class="menu-badge" ><button class="btn btn-sm btn-icon btn-action"  data-bs-toggle="modal" data-bs-target="#kt_modal_new_target"<i class="ki-outline ki-plus fs-4"></i></button></span></span><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item menu-accordion menu-fit" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-graph-2 fs-4 text-gray-700"></i></span><span  class="menu-title" >Record summary</span><span  class="menu-badge" ><button class="btn btn-sm btn-icon btn-action"  data-bs-toggle="modal" data-bs-target="#kt_modal_top_up_wallet"<i class="ki-outline ki-plus fs-4"></i></button></span></span><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item menu-accordion menu-fit" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-graph-3 fs-4 text-gray-700"></i></span><span  class="menu-title" >Dashboard</span><span  class="menu-badge" ><button class="btn btn-sm btn-icon btn-action"  data-bs-toggle="modal" data-bs-target="#kt_modal_bidding"<i class="ki-outline ki-plus fs-4"></i></button></span></span><!--end:Menu link--></div><!--end:Menu item--><!--begin:Menu item--><div  class="menu-item menu-accordion menu-fit" ><!--begin:Menu link--><span class="menu-link"  ><span  class="menu-icon" ><i class="ki-outline ki-some-files fs-4 text-gray-700"></i></span><span  class="menu-title" >Blank</span><span  class="menu-badge" ><button class="btn btn-sm btn-icon btn-action"  data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign"<i class="ki-outline ki-plus fs-4"></i></button></span></span><!--end:Menu link--></div><!--end:Menu item--></div><!--end:Menu sub--></div><!--end:Menu item--></div>
<!--end::Menu--></div>
<!--end::Sidebar wrapper-->    </div>
<!--end::Sidebar-->                
                            
            
            <!--begin::Main-->
            <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                <!--begin::Content wrapper-->
                <div class="d-flex flex-column flex-column-fluid">
                                        
                    
<!--begin::Content-->
<div id="kt_app_content" class="app-content  app-content-stretch " >
    
           
        <!--begin::Content container-->
        <div id="kt_app_content_container" class="app-container  container-fluid ">
            <!--begin::Products-->
<div class="card card-flush">
    <!--begin::Card header-->
    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
        <!--begin::Card title-->
        <div class="card-title">
            <!--begin::Search-->
            <div class="d-flex align-items-center position-relative my-1">
                <i class="ki-outline ki-magnifier fs-3 position-absolute ms-4"></i>                <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product" />
            </div>
            <!--end::Search-->
        </div>
        <!--end::Card title-->

        <!--begin::Card toolbar-->
        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
            <div class="w-100 mw-150px">
                <!--begin::Select2-->
                <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Status" data-kt-ecommerce-product-filter="status">
                    <option></option>
                    <option value="all">All</option>
                    <option value="published">Published</option>
                    <option value="scheduled">Scheduled</option>
                    <option value="inactive">Inactive</option>
                </select>
                <!--end::Select2-->
            </div>

            <!--begin::Add product-->
            <a href="/metronic8/demo60/apps/ecommerce/catalog/add-product.html" class="btn btn-primary">
                Add Product
            </a>
            <!--end::Add product-->
        </div>
        <!--end::Card toolbar-->
    </div>
    <!--end::Card header-->

    <!--begin::Card body-->
    <div class="card-body pt-0">
        
<!--begin::Table-->
<table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
    <thead>
        <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
            <th class="w-10px pe-2">
                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
                </div>
            </th>
            <th class="min-w-200px">Product</th>
            <th class="text-end min-w-100px">SKU</th>
            <th class="text-end min-w-70px">Qty</th>
            <th class="text-end min-w-100px">Price</th>
            <th class="text-end min-w-100px">Rating</th>
            <th class="text-end min-w-100px">Status</th>
            <th class="text-end min-w-70px">Actions</th>
        </tr>
    </thead>
    <tbody class="fw-semibold text-gray-600">
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/1.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 1</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02172008</span>
                </td>
                                <td class="text-end pe-0" data-order="41">
                                            <span class="fw-bold ms-3">41</span>
                                    </td>
                <td class="text-end pe-0">
                    113                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/2.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 2</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03920005</span>
                </td>
                                <td class="text-end pe-0" data-order="40">
                                            <span class="fw-bold ms-3">40</span>
                                    </td>
                <td class="text-end pe-0">
                    266                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/3.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 3</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04945006</span>
                </td>
                                <td class="text-end pe-0" data-order="33">
                                            <span class="fw-bold ms-3">33</span>
                                    </td>
                <td class="text-end pe-0">
                    103                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/4.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 4</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02316002</span>
                </td>
                                <td class="text-end pe-0" data-order="12">
                                            <span class="fw-bold ms-3">12</span>
                                    </td>
                <td class="text-end pe-0">
                    216                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/5.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 5</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02700007</span>
                </td>
                                <td class="text-end pe-0" data-order="27">
                                            <span class="fw-bold ms-3">27</span>
                                    </td>
                <td class="text-end pe-0">
                    118                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/6.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 6</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03811002</span>
                </td>
                                <td class="text-end pe-0" data-order="50">
                                            <span class="fw-bold ms-3">50</span>
                                    </td>
                <td class="text-end pe-0">
                    92                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/7.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 7</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03532005</span>
                </td>
                                <td class="text-end pe-0" data-order="45">
                                            <span class="fw-bold ms-3">45</span>
                                    </td>
                <td class="text-end pe-0">
                    180                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/8.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 8</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02152001</span>
                </td>
                                <td class="text-end pe-0" data-order="30">
                                            <span class="fw-bold ms-3">30</span>
                                    </td>
                <td class="text-end pe-0">
                    182                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/9.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 9</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03873009</span>
                </td>
                                <td class="text-end pe-0" data-order="14">
                                            <span class="fw-bold ms-3">14</span>
                                    </td>
                <td class="text-end pe-0">
                    232                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/10.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 10</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04262002</span>
                </td>
                                <td class="text-end pe-0" data-order="12">
                                            <span class="fw-bold ms-3">12</span>
                                    </td>
                <td class="text-end pe-0">
                    112                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/11.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 11</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04230004</span>
                </td>
                                <td class="text-end pe-0" data-order="27">
                                            <span class="fw-bold ms-3">27</span>
                                    </td>
                <td class="text-end pe-0">
                    272                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/12.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 12</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02257004</span>
                </td>
                                <td class="text-end pe-0" data-order="16">
                                            <span class="fw-bold ms-3">16</span>
                                    </td>
                <td class="text-end pe-0">
                    218                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/13.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 13</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03630001</span>
                </td>
                                <td class="text-end pe-0" data-order="34">
                                            <span class="fw-bold ms-3">34</span>
                                    </td>
                <td class="text-end pe-0">
                    64                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/14.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 14</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01979008</span>
                </td>
                                <td class="text-end pe-0" data-order="4">
                                            <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bold text-warning ms-3">4</span>
                                    </td>
                <td class="text-end pe-0">
                    240                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/15.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 15</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04700006</span>
                </td>
                                <td class="text-end pe-0" data-order="48">
                                            <span class="fw-bold ms-3">48</span>
                                    </td>
                <td class="text-end pe-0">
                    93                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/16.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 16</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01315008</span>
                </td>
                                <td class="text-end pe-0" data-order="33">
                                            <span class="fw-bold ms-3">33</span>
                                    </td>
                <td class="text-end pe-0">
                    144                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/17.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 17</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04140008</span>
                </td>
                                <td class="text-end pe-0" data-order="38">
                                            <span class="fw-bold ms-3">38</span>
                                    </td>
                <td class="text-end pe-0">
                    97                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/18.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 18</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01757002</span>
                </td>
                                <td class="text-end pe-0" data-order="48">
                                            <span class="fw-bold ms-3">48</span>
                                    </td>
                <td class="text-end pe-0">
                    207                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/19.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 19</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04322007</span>
                </td>
                                <td class="text-end pe-0" data-order="12">
                                            <span class="fw-bold ms-3">12</span>
                                    </td>
                <td class="text-end pe-0">
                    76                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/20.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 20</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01653002</span>
                </td>
                                <td class="text-end pe-0" data-order="11">
                                            <span class="fw-bold ms-3">11</span>
                                    </td>
                <td class="text-end pe-0">
                    75                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/21.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 21</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04436005</span>
                </td>
                                <td class="text-end pe-0" data-order="3">
                                            <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bold text-warning ms-3">3</span>
                                    </td>
                <td class="text-end pe-0">
                    13                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/22.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 22</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01982001</span>
                </td>
                                <td class="text-end pe-0" data-order="48">
                                            <span class="fw-bold ms-3">48</span>
                                    </td>
                <td class="text-end pe-0">
                    234                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/23.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 23</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04538001</span>
                </td>
                                <td class="text-end pe-0" data-order="44">
                                            <span class="fw-bold ms-3">44</span>
                                    </td>
                <td class="text-end pe-0">
                    99                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/24.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 24</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03232007</span>
                </td>
                                <td class="text-end pe-0" data-order="50">
                                            <span class="fw-bold ms-3">50</span>
                                    </td>
                <td class="text-end pe-0">
                    131                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/25.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 25</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01198009</span>
                </td>
                                <td class="text-end pe-0" data-order="27">
                                            <span class="fw-bold ms-3">27</span>
                                    </td>
                <td class="text-end pe-0">
                    238                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/26.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 26</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03389005</span>
                </td>
                                <td class="text-end pe-0" data-order="31">
                                            <span class="fw-bold ms-3">31</span>
                                    </td>
                <td class="text-end pe-0">
                    266                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/27.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 27</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02535007</span>
                </td>
                                <td class="text-end pe-0" data-order="49">
                                            <span class="fw-bold ms-3">49</span>
                                    </td>
                <td class="text-end pe-0">
                    219                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/28.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 28</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03497008</span>
                </td>
                                <td class="text-end pe-0" data-order="4">
                                            <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bold text-warning ms-3">4</span>
                                    </td>
                <td class="text-end pe-0">
                    128                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/29.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 29</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01650001</span>
                </td>
                                <td class="text-end pe-0" data-order="34">
                                            <span class="fw-bold ms-3">34</span>
                                    </td>
                <td class="text-end pe-0">
                    225                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/30.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 30</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03978006</span>
                </td>
                                <td class="text-end pe-0" data-order="23">
                                            <span class="fw-bold ms-3">23</span>
                                    </td>
                <td class="text-end pe-0">
                    174                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/31.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 31</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03531002</span>
                </td>
                                <td class="text-end pe-0" data-order="20">
                                            <span class="fw-bold ms-3">20</span>
                                    </td>
                <td class="text-end pe-0">
                    47                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/32.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 32</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02620009</span>
                </td>
                                <td class="text-end pe-0" data-order="25">
                                            <span class="fw-bold ms-3">25</span>
                                    </td>
                <td class="text-end pe-0">
                    166                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/33.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 33</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03235007</span>
                </td>
                                <td class="text-end pe-0" data-order="35">
                                            <span class="fw-bold ms-3">35</span>
                                    </td>
                <td class="text-end pe-0">
                    163                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/34.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 34</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02684005</span>
                </td>
                                <td class="text-end pe-0" data-order="31">
                                            <span class="fw-bold ms-3">31</span>
                                    </td>
                <td class="text-end pe-0">
                    114                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/35.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 35</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04204004</span>
                </td>
                                <td class="text-end pe-0" data-order="46">
                                            <span class="fw-bold ms-3">46</span>
                                    </td>
                <td class="text-end pe-0">
                    18                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/36.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 36</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01411002</span>
                </td>
                                <td class="text-end pe-0" data-order="19">
                                            <span class="fw-bold ms-3">19</span>
                                    </td>
                <td class="text-end pe-0">
                    266                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/37.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 37</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02165009</span>
                </td>
                                <td class="text-end pe-0" data-order="4">
                                            <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bold text-warning ms-3">4</span>
                                    </td>
                <td class="text-end pe-0">
                    42                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/38.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 38</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02288009</span>
                </td>
                                <td class="text-end pe-0" data-order="19">
                                            <span class="fw-bold ms-3">19</span>
                                    </td>
                <td class="text-end pe-0">
                    216                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/39.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 39</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04766009</span>
                </td>
                                <td class="text-end pe-0" data-order="14">
                                            <span class="fw-bold ms-3">14</span>
                                    </td>
                <td class="text-end pe-0">
                    140                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/40.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 40</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03791003</span>
                </td>
                                <td class="text-end pe-0" data-order="34">
                                            <span class="fw-bold ms-3">34</span>
                                    </td>
                <td class="text-end pe-0">
                    131                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/41.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 41</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03105003</span>
                </td>
                                <td class="text-end pe-0" data-order="25">
                                            <span class="fw-bold ms-3">25</span>
                                    </td>
                <td class="text-end pe-0">
                    233                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/42.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 42</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04164008</span>
                </td>
                                <td class="text-end pe-0" data-order="25">
                                            <span class="fw-bold ms-3">25</span>
                                    </td>
                <td class="text-end pe-0">
                    153                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/43.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 43</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">02668005</span>
                </td>
                                <td class="text-end pe-0" data-order="41">
                                            <span class="fw-bold ms-3">41</span>
                                    </td>
                <td class="text-end pe-0">
                    52                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/44.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 44</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03165004</span>
                </td>
                                <td class="text-end pe-0" data-order="45">
                                            <span class="fw-bold ms-3">45</span>
                                    </td>
                <td class="text-end pe-0">
                    52                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/45.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 45</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03663008</span>
                </td>
                                <td class="text-end pe-0" data-order="8">
                                            <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bold text-warning ms-3">8</span>
                                    </td>
                <td class="text-end pe-0">
                    81                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/46.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 46</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04207003</span>
                </td>
                                <td class="text-end pe-0" data-order="33">
                                            <span class="fw-bold ms-3">33</span>
                                    </td>
                <td class="text-end pe-0">
                    287                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/47.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 47</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">01455006</span>
                </td>
                                <td class="text-end pe-0" data-order="46">
                                            <span class="fw-bold ms-3">46</span>
                                    </td>
                <td class="text-end pe-0">
                    145                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Scheduled">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-primary">Scheduled</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/48.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 48</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">03319002</span>
                </td>
                                <td class="text-end pe-0" data-order="37">
                                            <span class="fw-bold ms-3">37</span>
                                    </td>
                <td class="text-end pe-0">
                    114                </td>
                                <td class="text-end pe-0" data-order="rating-5">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/49.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 49</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04925009</span>
                </td>
                                <td class="text-end pe-0" data-order="8">
                                            <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bold text-warning ms-3">8</span>
                                    </td>
                <td class="text-end pe-0">
                    133                </td>
                                <td class="text-end pe-0" data-order="rating-3">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Inactive">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-danger">Inactive</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
                    <tr>
                <td>
                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" />
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <!--begin::Thumbnail-->
                        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="symbol symbol-50px">
                            <span class="symbol-label" style="background-image:url(/metronic8/demo60/assets/media//stock/ecommerce/50.png);"></span>
                        </a>
                        <!--end::Thumbnail-->

                        <div class="ms-5">
                            <!--begin::Title-->
                            <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">Product 50</a>
                            <!--end::Title-->
                        </div>
                    </div>
                </td>
                <td class="text-end pe-0">
                    <span class="fw-bold">04397006</span>
                </td>
                                <td class="text-end pe-0" data-order="7">
                                            <span class="badge badge-light-warning">Low stock</span>
                        <span class="fw-bold text-warning ms-3">7</span>
                                    </td>
                <td class="text-end pe-0">
                    276                </td>
                                <td class="text-end pe-0" data-order="rating-4">
                    <div class="rating justify-content-end">
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label checked">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                                    <div class="rating-label ">
                                <i class="ki-outline ki-star fs-6"></i>                            </div>
                                            </div>
                </td>
                                <td class="text-end pe-0" data-order="Published">
                    <!--begin::Badges-->                    
                    <div class="badge badge-light-success">Published</div>
                    <!--end::Badges-->
                </td>
                <td class="text-end">
                    <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        Actions
                        <i class="ki-outline ki-down fs-5 ms-1"></i>                    </a>
                    <!--begin::Menu-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="/metronic8/demo60/apps/ecommerce/catalog/edit-product.html" class="menu-link px-3">
            Edit
        </a>
    </div>
    <!--end::Menu item-->
    
    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">
            Delete
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu-->
                </td>
            </tr>
            </tbody>
</table>
<!--end::Table-->    </div>
    <!--end::Card body-->
</div>
<!--end::Products-->        </div>
        <!--end::Content container-->
    </div>
<!--end::Content-->	

                                    </div>
                <!--end::Content wrapper-->

                                    
<!--begin::Footer-->
<div id="kt_app_footer" class="app-footer " >
            <!--begin::Footer container-->
        <div class="app-container  container-fluid d-flex flex-column flex-md-row flex-center flex-md-stack py-3 ">
            <!--begin::Copyright-->
<div class="text-gray-900 order-2 order-md-1">
    <span class="text-muted fw-semibold me-1">2024&copy;</span>
    <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
</div>
<!--end::Copyright-->

<!--begin::Menu-->
<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
    <li class="menu-item"><a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a></li>

    <li class="menu-item"><a href="https://devs.keenthemes.com" target="_blank" class="menu-link px-2">Support</a></li>

    <li class="menu-item"><a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a></li>
</ul>
<!--end::Menu-->        </div>
        <!--end::Footer container-->
    </div>
<!--end::Footer-->                            </div>
            <!--end:::Main-->

            
                    </div>
        <!--end::Wrapper-->

        
            </div>
    <!--end::Page-->
</div>
<!--end::App-->


    <!--begin::App layout builder-->
<div
	id="kt_app_layout_builder"
	class="bg-body"

	data-kt-drawer="true"
	data-kt-drawer-name="app-settings"
	data-kt-drawer-activate="true"
	data-kt-drawer-overlay="true"
	data-kt-drawer-width="{default:'300px', 'lg': '380px'}"
	data-kt-drawer-direction="end"
	data-kt-drawer-toggle="#kt_app_layout_builder_toggle"
	data-kt-drawer-close="#kt_app_layout_builder_close">

	<!--begin::Card-->
	<div class="card border-0 shadow-none rounded-0 w-100">
		<!--begin::Card header-->
<div 
    class="card-header bgi-position-y-bottom bgi-position-x-end bgi-size-cover bgi-no-repeat rounded-0 border-0 py-4" 
    id="kt_app_layout_builder_header"
    style="background-image:url('/metronic8/demo60/assets/media/misc/layout/customizer-header-bg.jpg')">

    <!--begin::Card title-->
    <h3 class="card-title fs-3 fw-bold text-white flex-column m-0">
        Metronic Builder

        <small class="text-white opacity-50 fs-7 fw-semibold pt-1">
            Get your product deeply customized
        </small>
    </h3>
    <!--end::Card title-->

    <!--begin::Card toolbar-->
    <div class="card-toolbar">
        <button 
			type="button" 
			class="btn btn-sm btn-icon btn-color-white p-0 w-20px h-20px rounded-1" 
			id="kt_app_layout_builder_close"
		>
            <i class="ki-outline ki-cross-square fs-2"></i>        </button>
    </div>
    <!--end::Card toolbar-->
</div>
<!--end::Card header-->
		<!--begin::Card body-->
		<div class="card-body position-relative" id="kt_app_layout_builder_body">
			<!--begin::Content-->
			<div id="kt_app_settings_content"
				class="position-relative scroll-y me-n5 pe-5"

				data-kt-scroll="true"
				data-kt-scroll-height="auto"
				data-kt-scroll-wrappers="#kt_app_layout_builder_body"
				data-kt-scroll-dependencies="#kt_app_layout_builder_header, #kt_app_layout_builder_footer"
				data-kt-scroll-offset="5px">

				<!--begin::Form-->
				<form class="form" method="POST" id="kt_app_layout_builder_form" action="/metronic8/demo60/index.php">
    				<input type="hidden" id="kt_app_layout_builder_action" name="layout-builder[action]"/>
					
<!--begin::Card body-->
<div class="card-body p-0">
						
<!--begin::Form group-->
<div class="form-group">
	<!--begin::Heading-->
	<div class="mb-6">
		<h4 class="fw-bold text-gray-900">Theme Mode</h4>
		<div class="fw-semibold text-muted fs-7 d-block lh-1">
			Enjoy Dark & Light modes.

			<a class="fw-semibold" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/dark-mode" target="_blank">See docs</a>
		</div>
	</div>
	<!--end::Heading-->  
	
	<!--begin::Options-->
	<div class="row " data-kt-buttons="true" data-kt-buttons-target=".form-check-image,.form-check-input">
					<!--begin::Col-->
			<div class="col-6">
				<!--begin::Option-->
				<label class="form-check-image form-check-success">
					<!--begin::Image--> 
					<div class="form-check-wrapper border-gray-200 border-2">
						<img src="/metronic8/demo60/assets/media/preview/demos/demo60/light-ltr.png" class="form-check-rounded mw-100" alt=""/>                      
					</div>
					<!--end::Image--> 

					<!--begin::Check--> 
					<div class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
						<input class="form-check-input" type="radio" value="light" name="theme_mode" id="kt_layout_builder_theme_mode_light"/>

						<!--begin::Label--> 
						<div class="form-check-label text-gray-700">
							Light						</div>
						<!--end::Label--> 
					</div>
					<!--end::Check--> 
				</label>   
				<!--end::Option-->             
			</div>
			<!--end::Col-->
					<!--begin::Col-->
			<div class="col-6">
				<!--begin::Option-->
				<label class="form-check-image form-check-success">
					<!--begin::Image--> 
					<div class="form-check-wrapper border-gray-200 border-2">
						<img src="/metronic8/demo60/assets/media/preview/demos/demo60/dark-ltr.png" class="form-check-rounded mw-100" alt=""/>                      
					</div>
					<!--end::Image--> 

					<!--begin::Check--> 
					<div class="form-check form-check-custom form-check-solid form-check-sm form-check-success">
						<input class="form-check-input" type="radio" value="dark" name="theme_mode" id="kt_layout_builder_theme_mode_dark"/>

						<!--begin::Label--> 
						<div class="form-check-label text-gray-700">
							Dark						</div>
						<!--end::Label--> 
					</div>
					<!--end::Check--> 
				</label>   
				<!--end::Option-->             
			</div>
			<!--end::Col-->
		  
	</div>
	<!--end::Options-->            
</div>
<!--end::Form group-->		
					<div class="separator separator-dashed my-5"></div>
				
						<!--begin::Form group-->
<div class="form-group d-flex flex-stack">           
	<!--begin::Heading-->     
	<div class="d-flex flex-column">
		<h4 class="fw-bold text-gray-900">RTL Mode</h4>
		<div class="fs-7 fw-semibold text-muted">
			Change Language Direction.

			<a class="fw-semibold" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/rtl" target="_blank">See docs</a>
		</div>	
	</div>
	<!--end::Heading-->

	<!--begin::Option-->
	<div class="d-flex justify-content-end">
		<!--begin::Check-->
		<div class="form-check form-check-custom form-check-solid form-check-success form-switch">
			<input type="hidden" value="false" name="layout-builder[layout][app][general][rtl]"/>
			
			<input 
				class="form-check-input w-45px h-30px" 
				type="checkbox" 
				value="true" 
				name="layout-builder[layout][app][general][rtl]" 
							/>
		</div>
		<!--end::Check-->
	</div>
	<!--end::Option-->
</div>
<!--end::Form group-->		
					<div class="separator separator-dashed my-5"></div>
				
			    		
<!--begin::Form group-->
<div class="form-group ">            
	<!--begin::Heading-->     
	<div class="d-flex flex-column mb-4">
		<h4 class="fw-bold text-gray-900">Width Mode</h4>
		<div class="fs-7 fw-semibold text-muted">Page width options</div>
	</div>
	<!--end::Heading-->

	<!--begin::Options-->
	<div class="d-flex gap-7">
								<!--begin::Check-->
			<div class="form-check form-check-custom form-check-success form-check-solid form-check-sm" >
				<input 
					class="form-check-input" type="radio" 
					checked 
					 
					value="default" 
					id="kt_layout_builder_page_width_default" 
					name="layout-builder[layout][app][general][page-width]"
				/>

				<!--begin::Label-->
				<label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_layout_builder_page_width_default">
					Default				</label>
				<!--end::Label-->
			</div>
			<!--end::Check-->
								<!--begin::Check-->
			<div class="form-check form-check-custom form-check-success form-check-solid form-check-sm" >
				<input 
					class="form-check-input" type="radio" 
					 
					 
					value="fluid" 
					id="kt_layout_builder_page_width_fluid" 
					name="layout-builder[layout][app][general][page-width]"
				/>

				<!--begin::Label-->
				<label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_layout_builder_page_width_fluid">
					Fluid				</label>
				<!--end::Label-->
			</div>
			<!--end::Check-->
								<!--begin::Check-->
			<div class="form-check form-check-custom form-check-success form-check-solid form-check-sm" >
				<input 
					class="form-check-input" type="radio" 
					 
					 
					value="fixed" 
					id="kt_layout_builder_page_width_fixed" 
					name="layout-builder[layout][app][general][page-width]"
				/>

				<!--begin::Label-->
				<label class="form-check-label text-gray-700 fw-bold text-nowrap" for="kt_layout_builder_page_width_fixed">
					Fixed				</label>
				<!--end::Label-->
			</div>
			<!--end::Check-->
			</div>
	<!--end::Options-->
</div>
<!--end::Form group-->		
					<div class="separator separator-dashed my-5"></div>
				
						
<!--begin::Form group-->
<div class="form-group ">            
	<!--begin::Heading-->     
	<div class="d-flex flex-column mb-4">
		<h4 class="fw-bold text-gray-900">KeenIcons Style</h4>

		<div>
			<span class="fs-7 fw-semibold text-muted">Select global UI icons style.</span>
			<a class="fw-semibold" href="https://preview.keenthemes.com/html/metronic/docs/icons/keenicons" target="_blank">Learn more</a>
		</div>
	</div>
	<!--end::Heading-->

	<!--begin::Options-->
	<div class="d-flex flex-stack gap-3 " data-kt-buttons="true" data-kt-buttons-target=".form-check-image,.form-check-input">
								
			<!--begin::Option-->
			<label class="form-check-image form-check-success w-100 parent-active parent-hover ">
				<!--begin::Image--> 
				<div class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
					<i class="ki-duotone ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"><span class="path1"></span><span class="path2"></span></i>	
					<span class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Duotone</span>			                 
				</div>
				<!--end::Image--> 

				<!--begin::Check--> 
				<div style="visibility: hidden; height: 0 !important; width: 0 !important; overflow:hidden;">
					<input 
						class="form-check-input" 
						type="radio" 
						value="duotone" 
						 
						name="layout-builder[layout][app][general][icons]"/>
				</div>
				<!--end::Check--> 
			</label>   
			<!--end::Option-->   
								
			<!--begin::Option-->
			<label class="form-check-image form-check-success w-100 parent-active parent-hover active">
				<!--begin::Image--> 
				<div class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
					<i class="ki-outline ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"></i>	
					<span class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Outline</span>			                 
				</div>
				<!--end::Image--> 

				<!--begin::Check--> 
				<div style="visibility: hidden; height: 0 !important; width: 0 !important; overflow:hidden">
					<input 
						class="form-check-input" 
						type="radio" 
						value="outline" 
						checked 
						name="layout-builder[layout][app][general][icons]"/>
				</div>
				<!--end::Check--> 
			</label>   
			<!--end::Option-->   
								
			<!--begin::Option-->
			<label class="form-check-image form-check-success w-100 parent-active parent-hover ">
				<!--begin::Image--> 
				<div class="form-check-wrapper d-flex flex-center border-gray-200 border-2 mb-0 py-3 px-4">
					<i class="ki-solid ki-picture fs-1 text-gray-500 parent-active-gray-700 parent-hover-gray-700"></i>	
					<span class="fs-7 fw-semibold ms-2 text-gray-500 parent-active-gray-700 parent-hover-gray-700">Solid</span>			                 
				</div>
				<!--end::Image--> 

				<!--begin::Check--> 
				<div style="visibility: hidden; height: 0 !important; width: 0 !important; overflow:hidden;">
					<input 
						class="form-check-input" 
						type="radio" 
						value="solid" 
						 
						name="layout-builder[layout][app][general][icons]"/>
				</div>
				<!--end::Check--> 
			</label>   
			<!--end::Option-->   
		  
	</div>
	<!--end::Options-->        
</div>
<!--end::Form group-->		
					<div class="separator separator-dashed my-5"></div>
				
						<!--begin::Form group-->
<div class="form-group d-flex flex-stack">           
    <!--begin::Heading-->     
    <div class="d-flex flex-column">
		<h4 class="fw-bold text-gray-900">Header</h4>	

		<div class="fs-7 fw-semibold text-muted">
            Enable secondary header
		</div>							
    </div>
    <!--end::Heading-->

    <!--begin::Option-->
    <div class="d-flex justify-content-end">
        <!--begin::Check-->
        <div class="form-check form-check-custom form-check-solid form-check-success form-switch">
            <input type="hidden" value="false" name="layout-builder[layout][app][header][secondary][display]"/>
            <input 
                class="form-check-input w-45px h-30px" 
                type="checkbox" 
                checked 
                value="true" 
                name="layout-builder[layout][app][header][secondary][display]"
            />
        </div>
        <!--end::Check-->
    </div>
    <!--end::Option-->
</div>
<!--end::Form group-->		
					<div class="separator separator-dashed my-5"></div>
				
						
<!--begin::Form group-->
<div class="form-group d-flex flex-stack">           
    <!--begin::Heading-->     
    <div class="d-flex flex-column">
		<h4 class="fw-bold text-gray-900">Sidebar</h4>	

		<div class="fs-7 fw-semibold text-muted">
            Enable sidebar

                            <a href="/metronic8/demo60/layout-builder.html" class="fw-semibold text-primary">
                    . More layout options
                </a>
            		</div>	        
    </div>
    <!--end::Heading-->

    <!--begin::Option-->
    <div class="d-flex justify-content-end">
        <!--begin::Check-->
        <div class="form-check form-check-custom form-check-solid form-check-success form-switch">
            <input type="hidden" value="false" name="layout-builder[layout][app][sidebar][display]"/>
            <input 
                class="form-check-input w-45px h-30px" 
                type="checkbox" 
                checked 
                value="true" 
                name="layout-builder[layout][app][sidebar][display]"
            />
        </div>
        <!--end::Check-->
    </div>
    <!--end::Option-->
</div>
<!--end::Form group-->		
				
	</div>
<!--end::Card body-->				</form>
				<!--end::Form-->
			</div>
			<!--end::Content-->
		</div>
		<!--end::Card body-->

		<!--begin::Card footer-->
<div class="card-footer border-0 d-flex gap-3 pb-9 pt-0" id="kt_app_layout_builder_footer">
    <button type="button" id="kt_app_layout_builder_preview" class="btn btn-primary flex-grow-1 fw-semibold">
        
<!--begin::Indicator label-->
<span class="indicator-label">
    Preview</span>
<!--end::Indicator label-->

<!--begin::Indicator progress-->
<span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--end::Indicator progress-->    </button>

    <button type="button" id="kt_app_layout_builder_reset"  class="btn btn-light flex-grow-1 fw-semibold">
        
<!--begin::Indicator label-->
<span class="indicator-label">
    Reset</span>
<!--end::Indicator label-->

<!--begin::Indicator progress-->
<span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--end::Indicator progress-->    </button>
</div>
<!--end::Card footer-->	</div>
	<!--end::Card-->
</div>
<!--end::App layout builder-->

<!--begin::App settings toggle-->
<button 
  	id="kt_app_layout_builder_toggle" 
    class="btn btn-dark app-layout-builder-toggle lh-1 py-4 " 
    title="Metronic Builder" 
    data-bs-custom-class="tooltip-inverse" 
    data-bs-toggle="tooltip" 
    data-bs-placement="left" 
    data-bs-dismiss="click" 
    data-bs-trigger="hover"
>
  	<i class="ki-outline ki-setting-4 fs-4 me-1"></i> Customize
</button>
<!--end::App settings toggle-->
<!--begin::Drawers-->
<!--begin::Activities drawer-->
<div 
	id="kt_activities" 
	class="bg-body" 

	data-kt-drawer="true" 
	data-kt-drawer-name="activities" 
	data-kt-drawer-activate="true" 
	data-kt-drawer-overlay="true" 
	data-kt-drawer-width="{default:'300px', 'lg': '900px'}" 
	data-kt-drawer-direction="end" 
	data-kt-drawer-toggle="#kt_activities_toggle" 
	data-kt-drawer-close="#kt_activities_close">

	<div class="card shadow-none border-0 rounded-0">
		<!--begin::Header-->
		<div class="card-header" id="kt_activities_header">
			<h3 class="card-title fw-bold text-gray-900">Activity Logs</h3>

			<div class="card-toolbar">
				<button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5" id="kt_activities_close">
					<i class="ki-outline ki-cross fs-1"></i>				</button>
			</div>
		</div>
		<!--end::Header-->

		<!--begin::Body-->
		<div class="card-body position-relative" id="kt_activities_body">
			<!--begin::Content-->
			<div id="kt_activities_scroll" 
				class="position-relative scroll-y me-n5 pe-5" 
				
				data-kt-scroll="true" 
				data-kt-scroll-height="auto" 
				data-kt-scroll-wrappers="#kt_activities_body" 
				data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer" 
				data-kt-scroll-offset="5px">

				<!--begin::Timeline items-->
				<div class="timeline timeline-border-dashed">				
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon">
        <i class="ki-outline ki-message-text-2 fs-2 text-gray-500"></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">There are 2 new tasks for you in “AirPlus Mobile App” project:</div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                    <img src="/metronic8/demo60/assets/media/avatars/300-14.jpg" alt="img"/>
                </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5">
            <!--begin::Record-->
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">  
                <!--begin::Title-->                                   
                <a href="/metronic8/demo60/apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Meeting with customer</a>                                  
                <!--end::Title-->

                <!--begin::Label-->
                <div class="min-w-175px pe-2">
                    <span class="badge badge-light text-muted">Application Design</span>
                </div>
                <!--end::Label-->
                
                <!--begin::Users-->
                <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px">
                        <img src="/metronic8/demo60/assets/media/avatars/300-2.jpg" alt="img"/>
                    </div>
                    <!--end::User-->

                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px">
                        <img src="/metronic8/demo60/assets/media/avatars/300-14.jpg" alt="img"/>
                    </div>  
                    <!--end::User-->                                  

                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px">
                        <div class="symbol-label fs-8 fw-semibold bg-primary text-inverse-primary">A</div>
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Users-->                                     

                <!--begin::Progress-->
                <div class="min-w-125px pe-2">
                    <span class="badge badge-light-primary">In Progress</span>
                </div>
                <!--end::Progress-->
                                    
                <!--begin::Action-->
                <a href="/metronic8/demo60/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>    
                <!--end::Action-->                                
            </div>
            <!--end::Record-->

            <!--begin::Record-->
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">  
                <!--begin::Title-->                                   
                <a href="/metronic8/demo60/apps/projects/project.html" class="fs-5 text-gray-900 text-hover-primary fw-semibold w-375px min-w-200px">Project Delivery Preparation</a>                                  
                <!--end::Title-->

                <!--begin::Label-->
                <div class="min-w-175px">
                    <span class="badge badge-light text-muted">CRM System Development</span>
                </div>
                <!--end::Label-->
                
                <!--begin::Users-->
                <div class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px">
                        <img src="/metronic8/demo60/assets/media/avatars/300-20.jpg" alt="img"/>
                    </div>
                    <!--end::User-->                               

                    <!--begin::User-->
                    <div class="symbol symbol-circle symbol-25px">
                        <div class="symbol-label fs-8 fw-semibold bg-success text-inverse-primary">B</div>
                    </div>
                    <!--end::User-->
                </div>
                <!--end::Users-->                                     

                <!--begin::Progress-->
                <div class="min-w-125px">
                    <span class="badge badge-light-success">Completed</span>
                </div>
                <!--end::Progress-->
                                    
                <!--begin::Action-->
                <a href="/metronic8/demo60/apps/projects/project.html" class="btn btn-sm btn-light btn-active-light-primary">View</a>    
                <!--end::Action-->                                
            </div>
            <!--end::Record-->
        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->    
</div>
<!--end::Timeline item-->
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon me-4">
        <i class="ki-outline ki-flag fs-2 text-gray-500"></i>    </div>
    <!--end::Timeline icon-->       

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n2">
        <!--begin::Timeline heading-->
        <div class="overflow-auto pe-3">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">Invitation for crafting engaging designs that speak human workshop</div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Alan Nilson">
                    <img src="/metronic8/demo60/assets/media/avatars/300-1.jpg" alt="img"/>
                </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content--> 
</div>
<!--end::Timeline item-->
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon">
        <i class="ki-outline ki-disconnect fs-2 text-gray-500"></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1">
        <!--begin::Timeline heading-->
        <div class="mb-5 pe-3">
            <!--begin::Title-->
            <a href="#" class="fs-5 fw-semibold text-gray-800 text-hover-primary mb-2">3 New Incoming Project Files:</a>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Jan Hummer">
                    <img src="/metronic8/demo60/assets/media/avatars/300-23.jpg" alt="img"/>
                </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5">
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                <!--begin::Item-->
                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">  
                    <!--begin::Icon-->                                  
                    <img alt="" class="w-30px me-3" src="/metronic8/demo60/assets/media/svg/files/pdf.svg"/>
                    <!--end::Icon--> 

                    <!--begin::Info--> 
                    <div class="ms-1 fw-semibold">
                        <!--begin::Desc--> 
                        <a href="/metronic8/demo60/apps/projects/project.html" class="fs-6 text-hover-primary fw-bold">Finance KPI App Guidelines</a>
                        <!--end::Desc--> 

                        <!--begin::Number--> 
                        <div class="text-gray-500">1.9mb</div>
                        <!--end::Number--> 
                    </div>
                    <!--begin::Info--> 
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">   
                    <!--begin::Icon-->                                  
                    <img alt="/metronic8/demo60/apps/projects/project.html" class="w-30px me-3" src="/metronic8/demo60/assets/media/svg/files/doc.svg"/>
                    <!--end::Icon--> 

                    <!--begin::Info--> 
                    <div class="ms-1 fw-semibold">
                        <!--begin::Desc--> 
                        <a href="#" class="fs-6 text-hover-primary fw-bold">Client UAT Testing Results</a>
                        <!--end::Desc--> 

                        <!--begin::Number--> 
                        <div class="text-gray-500">18kb</div>
                        <!--end::Number--> 
                    </div>
                    <!--end::Info--> 
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="d-flex flex-aligns-center">   
                    <!--begin::Icon-->                                  
                    <img alt="/metronic8/demo60/apps/projects/project.html" class="w-30px me-3" src="/metronic8/demo60/assets/media/svg/files/css.svg"/>
                    <!--end::Icon--> 

                    <!--begin::Info--> 
                    <div class="ms-1 fw-semibold">
                        <!--begin::Desc--> 
                        <a href="#" class="fs-6 text-hover-primary fw-bold">Finance Reports</a>
                        <!--end::Desc--> 

                        <!--begin::Number--> 
                        <div class="text-gray-500">20mb</div>
                        <!--end::Number--> 
                    </div>
                    <!--end::Icon--> 
                </div>
                <!--end::Item-->
            </div>
        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->    
</div>
<!--end::Timeline item-->
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon">
        <i class="ki-outline ki-abstract-26 fs-2 text-gray-500"></i>    </div>
    <!--end::Timeline icon-->

        <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">
                Task <a href="#" class="text-primary fw-bold me-1">#45890</a>  
                merged with <a href="#" class="text-primary fw-bold me-1">#45890</a>  in “Ads Pro Admin Dashboard project:
            </div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Nina Nilson">
                    <img src="/metronic8/demo60/assets/media/avatars/300-14.jpg" alt="img"/>
                </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content-->    
</div>
<!--end::Timeline item-->
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon">
        <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">3 new application design concepts added:</div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Marcus Dotson">
                    <img src="/metronic8/demo60/assets/media/avatars/300-2.jpg" alt="img"/>
                </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5">
            <div class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                <!--begin::Item-->
                <div class="overlay me-10">  
                    <!--begin::Image-->                                      
                    <div class="overlay-wrapper">
                        <img alt="img" class="rounded w-150px" src="/metronic8/demo60/assets/media/stock/600x400/img-29.jpg"/>  
                    </div>
                    <!--end::Image-->

                    <!--begin::Link-->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>                                         
                    </div>   
                    <!--end::Link-->                                     
                </div>
                <!--end::Item-->

                <!--begin::Item-->
                <div class="overlay me-10">   
                    <!--begin::Image-->                                     
                    <div class="overlay-wrapper">
                        <img alt="img" class="rounded w-150px" src="/metronic8/demo60/assets/media/stock/600x400/img-31.jpg"/> 
                    </div>
                    <!--end::Image-->

                    <!--begin::Link-->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>                                         
                    </div>        
                    <!--end::Link-->                                
                </div>
                <!--end::Item-->                        
                
                <!--begin::Item-->
                <div class="overlay">   
                    <!--begin::Image-->                                     
                    <div class="overlay-wrapper">
                        <img alt="img" class="rounded w-150px" src="/metronic8/demo60/assets/media/stock/600x400/img-40.jpg"/>
                    </div>
                    <!--end::Image-->

                    <!--begin::Link-->
                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                        <a href="#" class="btn btn-sm btn-primary btn-shadow">Explore</a>                                         
                    </div>   
                    <!--end::Link-->                                     
                </div>
                <!--end::Item-->
            </div>
        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->  
</div>
<!--end::Timeline item-->					
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon">
        <i class="ki-outline ki-sms fs-2 text-gray-500"></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">
                New case <a href="#" class="text-primary fw-bold me-1">#67890</a> 
                is assigned to you in Multi-platform Database Design project
            </div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="overflow-auto pb-5">
                <!--begin::Wrapper-->
                <div class="d-flex align-items-center mt-1 fs-6">
                    <!--begin::Info-->
                    <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                    <!--end::Info-->

                    <!--begin::User-->
                    <a href="#" class="text-primary fw-bold me-1">Alice Tan</a>
                    <!--end::User--> 
                </div>
                <!--end::Wrapper-->
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content-->           
</div>
<!--end::Timeline item-->
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon">
        <i class="ki-outline ki-pencil fs-2 text-gray-500"></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mb-10 mt-n1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">You have received a new order:</div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip" data-bs-boundary="window" data-bs-placement="top" title="Robert Rich">
                    <img src="/metronic8/demo60/assets/media/avatars/300-4.jpg" alt="img"/>
                </div>  
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->

        <!--begin::Timeline details-->
        <div class="overflow-auto pb-5">
            
<!--begin::Notice-->
<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
            <!--begin::Icon-->
        <i class="ki-outline ki-devices-2 fs-2tx text-primary me-4"></i>        <!--end::Icon-->
    
    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                    <!--begin::Content-->
            <div class="mb-3 mb-md-0 fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Database Backup Process Completed!</h4>
                
                                    <div class="fs-6 text-gray-700 pe-7">Login into Admin Dashboard to make sure the data integrity is OK</div>
                            </div>
            <!--end::Content-->
        
                    <!--begin::Action-->
            <a href="#" class="btn btn-primary px-6 align-self-center text-nowrap"  > 
                Proceed            </a>
            <!--end::Action-->
            </div>
    <!--end::Wrapper-->  
</div>
<!--end::Notice-->
                
        </div>
        <!--end::Timeline details-->
    </div>
    <!--end::Timeline content-->   
</div>
<!--end::Timeline item-->
					<!--begin::Timeline item-->
<div class="timeline-item">
    <!--begin::Timeline line-->
    <div class="timeline-line"></div>
    <!--end::Timeline line-->

    <!--begin::Timeline icon-->
    <div class="timeline-icon">
        <i class="ki-outline ki-basket fs-2 text-gray-500"></i>    </div>
    <!--end::Timeline icon-->

    <!--begin::Timeline content-->
    <div class="timeline-content mt-n1">
        <!--begin::Timeline heading-->
        <div class="pe-3 mb-5">
            <!--begin::Title-->
            <div class="fs-5 fw-semibold mb-2">
                New order <a href="#" class="text-primary fw-bold me-1">#67890</a> 
                is placed for Workshow Planning & Budget Estimation
            </div>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="d-flex align-items-center mt-1 fs-6">
                <!--begin::Info-->
                <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                <!--end::Info-->

                <!--begin::User-->
                <a href="#" class="text-primary fw-bold me-1">Jimmy Bold</a>
                <!--end::User--> 
            </div>
            <!--end::Description-->
        </div>
        <!--end::Timeline heading-->
    </div>
    <!--end::Timeline content--> 
</div>
<!--end::Timeline item--> 				</div>
				<!--end::Timeline items-->				 
			</div>
			<!--end::Content-->
		</div>
		<!--end::Body-->

		<!--begin::Footer-->
		<div class="card-footer py-5 text-center" id="kt_activities_footer">
			<a href="/metronic8/demo60/pages/user-profile/activity.html" class="btn btn-bg-body text-primary">
				View All Activities <i class="ki-outline ki-arrow-right fs-3 text-primary"></i>			</a>
		</div>
		<!--end::Footer-->
	</div>
</div>
<!--end::Activities drawer-->		

<!--begin::Chat drawer-->
<div 
    id="kt_drawer_chat"

    class="bg-body"
    data-kt-drawer="true" 
	data-kt-drawer-name="chat" 
	data-kt-drawer-activate="true" 
	data-kt-drawer-overlay="true" 
	data-kt-drawer-width="{default:'300px', 'md': '500px'}" 
	data-kt-drawer-direction="end" 
	data-kt-drawer-toggle="#kt_drawer_chat_toggle" 
	data-kt-drawer-close="#kt_drawer_chat_close">

    <!--begin::Messenger-->
    <div class="card w-100 border-0 rounded-0" id="kt_drawer_chat_messenger">
        <!--begin::Card header-->
        <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
            <!--begin::Title-->
            <div class="card-title">
                <!--begin::User-->
                <div class="d-flex justify-content-center flex-column me-3">
                    <a href="#" class="fs-4 fw-bold text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>

                    <!--begin::Info-->
                    <div class="mb-0 lh-1">
                        <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                        <span class="fs-7 fw-semibold text-muted">Active</span>
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::User-->
            </div>
            <!--end::Title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Menu-->
                <div class="me-0">
                    <button class="btn btn-sm btn-icon btn-active-color-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-outline ki-dots-square fs-2"></i>                    </button>
                    
<!--begin::Menu 3-->
<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-3" data-kt-menu="true">
    <!--begin::Heading-->
    <div class="menu-item px-3">
        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">
            Contacts
        </div>
    </div>
    <!--end::Heading-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link px-3"  data-bs-toggle="modal" data-bs-target="#kt_modal_users_search">
            Add Contact
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3">
        <a href="#" class="menu-link flex-stack px-3"  data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
            Invite Contacts

            <span class="ms-2" data-bs-toggle="tooltip" title="Specify a contact email to send an invitation">
                <i class="ki-outline ki-information fs-7"></i>            </span>
        </a>
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
        <a href="#" class="menu-link px-3">
            <span class="menu-title">Groups</span>
            <span class="menu-arrow"></span>
        </a>

        <!--begin::Menu sub-->
        <div class="menu-sub menu-sub-dropdown w-175px py-4">
            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                    Create Group
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                    Invite Members
                </a>
            </div>
            <!--end::Menu item-->

            <!--begin::Menu item-->            
            <div class="menu-item px-3">
                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
                    Settings
                </a>
            </div>
            <!--end::Menu item-->
        </div>
        <!--end::Menu sub-->
    </div>
    <!--end::Menu item-->

    <!--begin::Menu item-->
    <div class="menu-item px-3 my-1">
        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip" title="Coming soon">
            Settings
        </a>
    </div>
    <!--end::Menu item-->
</div>
<!--end::Menu 3-->
                </div>
                <!--end::Menu-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" id="kt_drawer_chat_close">
                    <i class="ki-outline ki-cross-square fs-2"></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body" id="kt_drawer_chat_messenger_body">
            <!--begin::Messages-->
            <div 
                class="scroll-y me-n5 pe-5"

                data-kt-element="messages"

                data-kt-scroll="true"     
                data-kt-scroll-activate="true"
                data-kt-scroll-height="auto"
                data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body"       
                data-kt-scroll-offset="0px">

                
    
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-3">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">2 mins</span>
                    </div>
                    <!--end::Details-->
                 
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                How likely are you to recommend our company to your friends and family ?            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    
    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                    <div class="me-3">
                        <span class="text-muted fs-7 mb-1">5 mins</span>
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>  
                    </div>
                    <!--end::Details-->

                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-1.jpg"/></div><!--end::Avatar-->                 
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->
    
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-3">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">1 Hour</span>
                    </div>
                    <!--end::Details-->
                 
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                Ok, Understood!            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    
    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                    <div class="me-3">
                        <span class="text-muted fs-7 mb-1">2 Hours</span>
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>  
                    </div>
                    <!--end::Details-->

                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-1.jpg"/></div><!--end::Avatar-->                 
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                You’ll receive notifications for all issues, pull requests!            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->
    
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-3">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">3 Hours</span>
                    </div>
                    <!--end::Details-->
                 
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                You can unwatch this repository immediately by clicking here: <a href="https://keenthemes.com">Keenthemes.com</a>            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    
    <!--begin::Message(out)-->
    <div class="d-flex justify-content-end mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                    <div class="me-3">
                        <span class="text-muted fs-7 mb-1">4 Hours</span>
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>  
                    </div>
                    <!--end::Details-->

                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-1.jpg"/></div><!--end::Avatar-->                 
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                Most purchased Business courses during this sale!            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(out)-->
    
    <!--begin::Message(in)-->
    <div class="d-flex justify-content-start mb-10 " >
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-3">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">5 Hours</span>
                    </div>
                    <!--end::Details-->
                 
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(in)-->
    
    <!--begin::Message(template for out)-->
    <div class="d-flex justify-content-end mb-10 d-none" data-kt-element="template-out">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-end">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Details-->
                    <div class="me-3">
                        <span class="text-muted fs-7 mb-1">Just now</span>
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary ms-1">You</a>  
                    </div>
                    <!--end::Details-->

                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-1.jpg"/></div><!--end::Avatar-->                 
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-primary text-gray-900 fw-semibold mw-lg-400px text-end" data-kt-element="message-text">
                            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(template for out)-->
    
    <!--begin::Message(template for in)-->
    <div class="d-flex justify-content-start mb-10 d-none" data-kt-element="template-in">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column align-items-start">
            <!--begin::User-->
            <div class="d-flex align-items-center mb-2">
                                    <!--begin::Avatar--><div class="symbol  symbol-35px symbol-circle "><img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-25.jpg"/></div><!--end::Avatar-->
                    <!--begin::Details-->
                    <div class="ms-3">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary me-1">Brian Cox</a>
                        <span class="text-muted fs-7 mb-1">Just now</span>
                    </div>
                    <!--end::Details-->
                 
            </div>
            <!--end::User-->

            <!--begin::Text-->
            <div class="p-5 rounded bg-light-info text-gray-900 fw-semibold mw-lg-400px text-start" data-kt-element="message-text">
                Right before vacation season we have the next Big Deal for you.            </div>
            <!--end::Text-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Message(template for in)-->
            </div>
            <!--end::Messages-->
        </div>
        <!--end::Card body-->

        <!--begin::Card footer-->
        <div class="card-footer pt-4" id="kt_drawer_chat_messenger_footer">
            <!--begin::Input-->
            <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input" placeholder="Type a message">
                
            </textarea>
            <!--end::Input-->

            <!--begin:Toolbar-->
            <div class="d-flex flex-stack">
                <!--begin::Actions-->
                <div class="d-flex align-items-center me-2">
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                        <i class="ki-outline ki-paper-clip fs-3"></i>                    </button>
                    <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button" data-bs-toggle="tooltip" title="Coming soon">
                        <i class="ki-outline ki-cloud-add fs-3"></i>                    </button>
                </div>
                <!--end::Actions-->

                <!--begin::Send-->
                <button class="btn btn-primary" type="button" data-kt-element="send">Send</button>
                <!--end::Send-->
            </div>
            <!--end::Toolbar-->
        </div>
        <!--end::Card footer-->
    </div>
    <!--end::Messenger-->
</div>
<!--end::Chat drawer--> 

<!--begin::Chat drawer-->
<div 
    id="kt_shopping_cart"

    class="bg-body"
    data-kt-drawer="true" 
	data-kt-drawer-name="cart" 
	data-kt-drawer-activate="true" 
	data-kt-drawer-overlay="true" 
	data-kt-drawer-width="{default:'300px', 'md': '500px'}" 
	data-kt-drawer-direction="end" 
	data-kt-drawer-toggle="#kt_drawer_shopping_cart_toggle" 
	data-kt-drawer-close="#kt_drawer_shopping_cart_close">

    <!--begin::Messenger-->
    <div class="card card-flush w-100 rounded-0">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Title-->
            <h3 class="card-title text-gray-900 fw-bold">Shopping Cart</h3>
            <!--end::Title-->

            <!--begin::Card toolbar-->
            <div class="card-toolbar">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_shopping_cart_close">
                    <i class="ki-outline ki-cross fs-2"></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->

        <!--begin::Card body-->
        <div class="card-body hover-scroll-overlay-y h-400px pt-5">
                            
                <!--begin::Item-->
                <div class="d-flex flex-stack">                 
                    <!--begin::Wrapper-->                                  
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->                                  
                        <div class="mb-3">
                            <a href="/metronic8/demo60/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Iblender</a>
                            
                            <span class="text-gray-500 fw-semibold d-block">The best kitchen gadget in 2022</span>
                        </div>                   
                        <!--end::Section-->                    
                             
                        <!--begin::Section-->      
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 350</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">5</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>                            </a>
                        </div>                          
                        <!--end::Wrapper--> 
                    </div>                   
                    <!--end::Wrapper-->                    

                    <!--begin::Pic--> 
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="/metronic8/demo60/assets/media/stock/600x400/img-1.jpg" alt=""/>   
                    </div>                                       
                    <!--end::Pic-->            
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->
                 
                            
                <!--begin::Item-->
                <div class="d-flex flex-stack">                 
                    <!--begin::Wrapper-->                                  
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->                                  
                        <div class="mb-3">
                            <a href="/metronic8/demo60/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">SmartCleaner</a>
                            
                            <span class="text-gray-500 fw-semibold d-block">Smart tool for cooking</span>
                        </div>                   
                        <!--end::Section-->                    
                             
                        <!--begin::Section-->      
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">4</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>                            </a>
                        </div>                          
                        <!--end::Wrapper--> 
                    </div>                   
                    <!--end::Wrapper-->                    

                    <!--begin::Pic--> 
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="/metronic8/demo60/assets/media/stock/600x400/img-3.jpg" alt=""/>   
                    </div>                                       
                    <!--end::Pic-->            
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->
                 
                            
                <!--begin::Item-->
                <div class="d-flex flex-stack">                 
                    <!--begin::Wrapper-->                                  
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->                                  
                        <div class="mb-3">
                            <a href="/metronic8/demo60/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">CameraMaxr</a>
                            
                            <span class="text-gray-500 fw-semibold d-block">Professional camera for edge</span>
                        </div>                   
                        <!--end::Section-->                    
                             
                        <!--begin::Section-->      
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 150</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">3</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>                            </a>
                        </div>                          
                        <!--end::Wrapper--> 
                    </div>                   
                    <!--end::Wrapper-->                    

                    <!--begin::Pic--> 
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="/metronic8/demo60/assets/media/stock/600x400/img-8.jpg" alt=""/>   
                    </div>                                       
                    <!--end::Pic-->            
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->
                 
                            
                <!--begin::Item-->
                <div class="d-flex flex-stack">                 
                    <!--begin::Wrapper-->                                  
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->                                  
                        <div class="mb-3">
                            <a href="/metronic8/demo60/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
                            
                            <span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>                   
                        <!--end::Section-->                    
                             
                        <!--begin::Section-->      
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 1450</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>                            </a>
                        </div>                          
                        <!--end::Wrapper--> 
                    </div>                   
                    <!--end::Wrapper-->                    

                    <!--begin::Pic--> 
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="/metronic8/demo60/assets/media/stock/600x400/img-26.jpg" alt=""/>   
                    </div>                                       
                    <!--end::Pic-->            
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->
                 
                            
                <!--begin::Item-->
                <div class="d-flex flex-stack">                 
                    <!--begin::Wrapper-->                                  
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->                                  
                        <div class="mb-3">
                            <a href="/metronic8/demo60/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">MotionWire</a>
                            
                            <span class="text-gray-500 fw-semibold d-block">Perfect animation tool</span>
                        </div>                   
                        <!--end::Section-->                    
                             
                        <!--begin::Section-->      
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 650</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">7</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>                            </a>
                        </div>                          
                        <!--end::Wrapper--> 
                    </div>                   
                    <!--end::Wrapper-->                    

                    <!--begin::Pic--> 
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="/metronic8/demo60/assets/media/stock/600x400/img-21.jpg" alt=""/>   
                    </div>                                       
                    <!--end::Pic-->            
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->
                 
                            
                <!--begin::Item-->
                <div class="d-flex flex-stack">                 
                    <!--begin::Wrapper-->                                  
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->                                  
                        <div class="mb-3">
                            <a href="/metronic8/demo60/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">Samsung</a>
                            
                            <span class="text-gray-500 fw-semibold d-block">Profile info,Timeline etc</span>
                        </div>                   
                        <!--end::Section-->                    
                             
                        <!--begin::Section-->      
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 720</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">6</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>                            </a>
                        </div>                          
                        <!--end::Wrapper--> 
                    </div>                   
                    <!--end::Wrapper-->                    

                    <!--begin::Pic--> 
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="/metronic8/demo60/assets/media/stock/600x400/img-34.jpg" alt=""/>   
                    </div>                                       
                    <!--end::Pic-->            
                </div>
                <!--end::Item-->

                                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-6"></div>
                    <!--end::Separator-->
                 
                            
                <!--begin::Item-->
                <div class="d-flex flex-stack">                 
                    <!--begin::Wrapper-->                                  
                    <div class="d-flex flex-column me-3">
                        <!--begin::Section-->                                  
                        <div class="mb-3">
                            <a href="/metronic8/demo60/apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fs-4 fw-bold">$D Printer</a>
                            
                            <span class="text-gray-500 fw-semibold d-block">Manfactoring unique objekts</span>
                        </div>                   
                        <!--end::Section-->                    
                             
                        <!--begin::Section-->      
                        <div class="d-flex align-items-center">
                            <span class="fw-bold text-gray-800 fs-5">$ 430</span>
                            <span class="text-muted mx-2">for</span>
                            <span class="fw-bold text-gray-800 fs-5 me-3">8</span>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon-success btn-icon w-25px h-25px me-2">
                                <i class="ki-outline ki-minus fs-4"></i>                            </a>

                            <a href="#" class="btn btn-sm btn-light-success btn-icon w-25px h-25px">
                                <i class="ki-outline ki-plus fs-4"></i>                            </a>
                        </div>                          
                        <!--end::Wrapper--> 
                    </div>                   
                    <!--end::Wrapper-->                    

                    <!--begin::Pic--> 
                    <div class="symbol symbol-70px symbol-2by3 flex-shrink-0">
                        <img src="/metronic8/demo60/assets/media/stock/600x400/img-27.jpg" alt=""/>   
                    </div>                                       
                    <!--end::Pic-->            
                </div>
                <!--end::Item-->

                 
              
        </div>
        <!--end::Card body--> 

        <!--begin::Card footer-->
        <div class="card-footer">
            <!--begin::Item-->      
            <div class="d-flex flex-stack">
                <span class="fw-bold text-gray-600">Total</span>
                <span class="text-gray-800 fw-bolder fs-5">$ 1840.00</span>                
            </div>                          
            <!--end::Item--> 

            <!--begin::Item-->      
            <div class="d-flex flex-stack">
                <span class="fw-bold text-gray-600">Sub total</span>
                <span class="text-primary fw-bolder fs-5">$ 246.35</span>                
            </div>                          
            <!--end::Item--> 

            <!--end::Action-->
            <div class="d-flex justify-content-end mt-9">
                <a href="#" class="btn btn-primary d-flex justify-content-end">Pleace Order</a>
            </div>
            <!--end::Action-->
        </div>
        <!--end::Card footer--> 
    </div>
    <!--end::Messenger-->
</div>
<!--end::Chat drawer--> 
<!--end::Drawers-->

		<!--begin::Engage modals-->
					<!--begin::Modal - Sitemap-->
<div class="modal fade bg-dark bg-opacity-75" id="kt_app_engage_prebuilts_modal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-fullscreen p-5 p-lg-10" id="kt_engage_prebuilts_modal_dialog">
        <!--begin::Modal content-->
        <div class="modal-content rounded-4">
            <!--begin::Modal header-->
            <div class="modal-header flex-stack border-0 px-10 pt-5 pb-0" id="kt_engage_prebuilts_header">
                <!--begin::View menu-->
<div id="kt_app_engage_prebuilts_view_menu" class="position-relative z-index-1">
	<!--begin::Toggle-->
	<button type="button" data-kt-element="selected" class="btn btn-flex px-0 rotate-" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, -1px">
		<!--begin::Title-->
		<span class="fs-6 fw-bold text-gray-600 me-2" data-kt-element="title">
			Image View
		</span>
		<!--end::Title-->

		<!--begin::Arrow-->
		<i class="ki-outline ki-down fs-4 text-gray-600 rotate-180-"></i>		<!--end::Arrow-->
	</button>
	<!--end::Toggle-->

	<!--begin::Menu-->
	<div class="menu menu-sub menu-sub-dropdown menu-column menu-active-bg menu-state-primary menu-gray-600 menu-rounded w-150px py-3 px-3" data-kt-menu="true">
		<!--begin::Menu item-->
		<div class="menu-item">
			<!--begin::Menu link-->
			<a href="#" class="menu-link px-4 py-2 active" data-kt-mode="image">
				Image View
			</a>
			<!--end::Menu link-->
		</div>
		<!--end::Menu item-->

		<!--begin::Menu item-->
		<div class="menu-item">
			<!--begin::Menu link-->
			<a href="#" class="menu-link px-4 py-2" data-kt-mode="text">
				Text View
			</a>
			<!--end::Menu link-->
		</div>
		<!--end::Menu item-->
	</div>
	<!--end::Menu-->
</div>
<!--end::View menu-->
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary me-n2 position-relative z-index-1" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross-square fs-1"></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-5 px-15 mt-n5" id="kt_app_engage_prebuilts_body">
                <div class="container-fluid">
                    
<style>
	.app-prebuilts-thumbnail {
		border: 1px solid var(--kt-body-bg);
		filter: drop-shadow(0px 0px 50px rgba(49, 52, 122, 0.12));
	}
</style>

<!--begin::Image view-->
<div class="d-block" id="kt_app_engage_prebuilts_view_image">
	<!--begin::Tabs wrapper-->
	<div class="d-flex flex-center" id="kt_app_engage_prebuilts_view_image_tabs">
		<!--begin::Tabs-->
		<ul class="nav nav-tabs border-0 mb-5">
							<!--begin::Tab item-->
				<li class="nav-item px-2">
					<!--begin::Tab link-->
					<a 
						class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold 
						" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_demos">
						
						Layouts					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item px-2">
					<!--begin::Tab link-->
					<a 
						class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold 
						active" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_dashboards">
						
						Dashboards					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item px-2">
					<!--begin::Tab link-->
					<a 
						class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold 
						" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_pages">
						
						Pages					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item px-2">
					<!--begin::Tab link-->
					<a 
						class="nav-link btn btn-active-light btn-color-gray-600 btn-active-color-gray-800 fs-5 fw-bold 
						" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_apps">
						
						Apps					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
					</ul>
		<!--end::Tabs-->
	</div>
	<!--end::Tabs wrapper-->

	<!--begin::Tab content-->
	<div class="tab-content">
								<div class="pt-5 tab-pane fade " id="kt_app_engage_prebuilts_tab_demos" role="tabpanel">
				<!--begin::Scroll wrapper-->
				<div 
					class="hover-scroll-y pe-12 me-n12" 
					data-kt-scroll="true" 
					data-kt-scroll-height="auto" 
					data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body" 
					data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs" 
					data-kt-scroll-offset="215px">

					<!--begin::Row-->
					<div class="row gy-10"> 
													
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo1/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Metronic Original	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo1.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo2/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		SaaS App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo2.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo39/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Billing SaaS	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo39.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo31/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Marketing Automation	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo31.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo9/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Sales Manager	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo9.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo38/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Email Marketing	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo38.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo30/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Sales Tracking App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo30.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo6/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Time Reporting	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo6.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo60/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		CRM Dashboard	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo60.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo8/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Analytics App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo8.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo62/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Project Scheduler	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo62.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo58/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Store Dashboard	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo58.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo56/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Budgeting App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo56.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo34/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Finance Analytics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo34.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo27/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Databox Dashboard	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo27.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo29/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Project Workspace	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo29.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo57/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Billing System	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo57.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo3/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		New Trend	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo3.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo36/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Digital Marketing	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo36.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo20/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		CRM Software	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo20.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo59/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Todo App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo59.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo55/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Backend Console	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo55.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo51/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Payroll App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo51.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo10/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Project Grid	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo10.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo61/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Property Portal	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo61.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo52/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Site Builder	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo52.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo63/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Discussion Board	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo63.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo40/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		HR App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo40.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo23/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Member Dashboard	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo23.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo64/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Voice Call App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo64.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo35/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Traffic Analytics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo35.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo33/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Social Campaings	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo33.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo19/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Reports Panel	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo19.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo25/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Guiding App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo25.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo50/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Micro-SaaS App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo50.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo32/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Delivery Management	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo32.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo37/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Cloud Suite	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo37.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo42/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Calendar Workspace	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo42.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo5/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Support Forum	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo5.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo16/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Podcast App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo16.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo4/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Jobs Site	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo4.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo53/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Healthcare Dashboard	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo53.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo7/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		HR Dashboard	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo7.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo21/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Monochrome App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo21.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo24/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Helpdesk App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo24.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo28/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		eCommerce App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo28.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo44/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Recruit Automation	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo44.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo11/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Finance Planner	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo11.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo26/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Planable App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo26.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo22/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Media Publisher	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo22.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo41/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Business Intelligence	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo41.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo18/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Goal Tracking	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo18.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo54/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Workspace App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo54.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo15/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Crypto Planner	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo15.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo14/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Project Workplace	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo14.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo13/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Classic Dashboard	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo13.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo12/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Data Analyzer	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo12.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo48/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Cloud ERP	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo48.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo17/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Events Scheduler	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo17.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo49/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		KPI Tracking	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo49.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo43/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Healthcare Dashboard	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo43.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo45/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		OKR Tracking	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo45.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo47/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Campaign Automation	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo47.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
		
<!--begin::Preview-->
<a 
	href="https://preview.keenthemes.com/metronic8/demo46/index.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Audit Board App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/demos/demo46.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
					
						  					
					</div>
					<!--end::Row-->
				</div>
				<!--end::Scroll wrapper-->
			</div>
								<div class="pt-5 tab-pane fade show active" id="kt_app_engage_prebuilts_tab_dashboards" role="tabpanel">
				<!--begin::Scroll wrapper-->
				<div 
					class="hover-scroll-y pe-12 me-n12" 
					data-kt-scroll="true" 
					data-kt-scroll-height="auto" 
					data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body" 
					data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs" 
					data-kt-scroll-offset="215px">

					<!--begin::Row-->
					<div class="row gy-10"> 
						  
							
		
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/dashboards/marketing.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Marketing	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/dashboards/marketing.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/dashboards/social.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Social	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/dashboards/social.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/dashboards/ecommerce.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Ecommerce	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/dashboards/ecommerce.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/dashboards/store-analytics.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Store-analytics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/dashboards/store-analytics.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/dashboards/logistics.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Logistics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/dashboards/logistics.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/dashboards/delivery.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Delivery	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/dashboards/delivery.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/dashboards/online-courses.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Online-courses	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/dashboards/online-courses.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/dashboards/school.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		School	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/dashboards/school.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/dashboards/crypto.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Crypto	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/dashboards/crypto.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/dashboards/finance-performance.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Finance-performance	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/dashboards/finance-performance.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/dashboards/website-analytics.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Website-analytics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/dashboards/website-analytics.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/dashboards/bidding.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Bidding	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/dashboards/bidding.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/dashboards/podcast.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Podcast	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/dashboards/podcast.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/dashboards/projects.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Projects	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/dashboards/projects.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/dashboards/call-center.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Call-center	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/dashboards/call-center.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-md-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/dashboards/pos.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		POS	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/dashboards/pos.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
						  					
					</div>
					<!--end::Row-->
				</div>
				<!--end::Scroll wrapper-->
			</div>
											<div class="pt-5 tab-pane fade " id="kt_app_engage_prebuilts_tab_apps" role="tabpanel">
				<!--begin::Scroll wrapper-->
				<div 
					class="hover-scroll-y pe-12 me-n12" 
					data-kt-scroll="true" 
					data-kt-scroll-height="auto" 
					data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body" 
					data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_image_tabs" 
					data-kt-scroll-offset="215px">

					<!--begin::Row-->
					<div class="row gy-10"> 
						  
								
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/apps/projects/list.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Projects	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/apps/projects.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/apps/ecommerce/catalog/products.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Ecommerce	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/apps/ecommerce.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/apps/customers/list.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Customers	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/apps/customers.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/apps/subscriptions/list.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Subscriptions	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/apps/subscriptions.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/apps/user-management/users/list.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Management	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/apps/user-management.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/apps/invoices/create.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Invoices	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/apps/invoices.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/apps/support-center/overview.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Support Center	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/apps/support-center.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/apps/chat/private.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Chat	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/apps/chat.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/apps/calendar.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Calendar	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/apps/calendar.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/apps/file-manager/folders.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		File Manager	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/apps/file-manager.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/apps/inbox/listing.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Inbox	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/apps/inbox.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
	
	<!--begin::Col-->
	<div class="col-lg-4">
		
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/apps/contacts/getting-started.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Contacts	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/apps/contacts.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->	</div>
	<!--end::Col-->
						  					
					</div>
					<!--end::Row-->
				</div>
				<!--end::Scroll wrapper-->
			</div>
		
		<div class="tab-pane fade" id="kt_app_engage_prebuilts_tab_pages">
			
<!--begin::Tabs wrapper-->
<div class="d-flex flex-center mb-5">
	<div class="border-bottom">
		<!--begin::Tabs-->
		<ul class="nav nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-6 fw-bold m-0 p-0 gap-4">
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a 
						class="nav-link text-muted text-active-primary pt-0 pb-4 
						active" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_pages_authentication">
						
						Authentication					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a 
						class="nav-link text-muted text-active-primary pt-0 pb-4 
						" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_pages_general">
						
						General					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a 
						class="nav-link text-muted text-active-primary pt-0 pb-4 
						" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_pages_account">
						
						Account					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a 
						class="nav-link text-muted text-active-primary pt-0 pb-4 
						" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_pages_modals">
						
						Modals					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a 
						class="nav-link text-muted text-active-primary pt-0 pb-4 
						" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_pages_wizards">
						
						Wizards					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a 
						class="nav-link text-muted text-active-primary pt-0 pb-4 
						" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_pages_search">
						
						Search					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a 
						class="nav-link text-muted text-active-primary pt-0 pb-4 
						" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_pages_widgets">
						
						Widgets					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
							<!--begin::Tab item-->
				<li class="nav-item p-0 m-0">
					<!--begin::Tab link-->
					<a 
						class="nav-link text-muted text-active-primary pt-0 pb-4 
						" 
						data-bs-toggle="tab" 
						href="#kt_app_engage_prebuilts_tab_pages_email-templates">
						
						Email Templates					</a>
					<!--end::Tab link-->
				</li>
				<!--end::Tab item-->
					</ul>
		<!--end::Tabs-->
	</div>
</div>
<!--end::Tabs wrapper-->

<!--begin::Scroll wrapper-->
<div 
	class="hover-scroll-y pe-12 me-n12" 
	data-kt-scroll="true" 
	data-kt-scroll-height="auto" 
	data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body, #kt_app_engage_prebuilts_view_image" 
	data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_text_heading" 
	data-kt-scroll-offset="250px">

	<!--begin::Tab content-->
	<div class="tab-content">
					<div class="tab-pane fade show active" id="kt_app_engage_prebuilts_tab_pages_authentication" role="tabpanel">

				
					<!--begin::Row-->
<div class="row g-10"> 
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/authentication/layouts/corporate/sign-in.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Corporate	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/auth-corporate.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/authentication/layouts/creative/sign-in.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Creative	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/auth-creative.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/authentication/layouts/fancy/sign-in.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Fancy	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/auth-fancy.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/authentication/layouts/overlay/sign-in.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Overlay	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/auth-overlay.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/authentication/extended/multi-steps-sign-up.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Multi-Step	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/auth-multistep.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/authentication/layouts/corporate/two-factor.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Two-Factor	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/auth-2factor.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/authentication/general/password-confirmation.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Password Changed	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/auth-passwordchanged.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/authentication/general/verify-email.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Verify Email	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/auth-verifyemail.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/authentication/general/welcome.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Welcome	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/auth-welcome.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/authentication/general/coming-soon.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Coming Soon	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/auth-comingsoon.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/authentication/general/account-deactivated.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Account Deactivated	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/auth-accountdeactivated.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/authentication/general/error-404.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		404 Page	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/auth-404.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/authentication/general/error-500.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		505 Page	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/auth-500.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
	</div>
<!--end::Row-->					
				
			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_general" role="tabpanel">

				
											<div class="mb-5">
							<!--begin::Collapse toggle-->
<a 
	class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible active" 
	data-bs-toggle="collapse" 
	href="#kt_app_engage_prebuilts_tab_pages_general_user-profile">
	
	<span class="fw-bolder fs-2">
		User Profile	</span>

	<i class="ki-outline ki-plus-square toggle-off text-primary fs-2 ms-4"></i> 
	<i class="ki-outline ki-minus-square toggle-on text-primary fs-2 ms-4"></i>                        
</a>
<!--end::Collapse toggle-->

<!--begin::Collapse content-->
<div class="show" id="kt_app_engage_prebuilts_tab_pages_general_user-profile">
	<!--begin::Row-->
	<div class="row g-10 pt-2 pb-5">
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/pages/user-profile/overview.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Profile Overview	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/profile-overview.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/pages/user-profile/projects.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Projects	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/profile-overview.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/pages/user-profile/campaigns.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Campaigns	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/profile-campaigns.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/pages/user-profile/documents.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Documents	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/profile-documents.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/pages/user-profile/followers.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Followers	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/profile-followers.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/pages/user-profile/activity.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		User Activity	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/profile-activity.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
			</div>
	<!--end::Row-->
</div>
<!--end::Collapse content-->						</div>
											<div class="mb-5">
							<!--begin::Collapse toggle-->
<a 
	class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed" 
	data-bs-toggle="collapse" 
	href="#kt_app_engage_prebuilts_tab_pages_general_corporate">
	
	<span class="fw-bolder fs-2">
		Corporate	</span>

	<i class="ki-outline ki-plus-square toggle-off text-primary fs-2 ms-4"></i> 
	<i class="ki-outline ki-minus-square toggle-on text-primary fs-2 ms-4"></i>                        
</a>
<!--end::Collapse toggle-->

<!--begin::Collapse content-->
<div class="collapse" id="kt_app_engage_prebuilts_tab_pages_general_corporate">
	<!--begin::Row-->
	<div class="row g-10 pt-2 pb-5">
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/pages/about.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		About Us	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/corporate-aboutus.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/pages/contact.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Contact Us	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/corporate-contactus.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/pages/licenses.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		License	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/corporate-license.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/pages/team.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Our Team	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/corporate-ourteam.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/pages/sitemap.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Sitemap	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/corporate-sitemap.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
			</div>
	<!--end::Row-->
</div>
<!--end::Collapse content-->						</div>
											<div class="mb-5">
							<!--begin::Collapse toggle-->
<a 
	class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed" 
	data-bs-toggle="collapse" 
	href="#kt_app_engage_prebuilts_tab_pages_general_social">
	
	<span class="fw-bolder fs-2">
		Social	</span>

	<i class="ki-outline ki-plus-square toggle-off text-primary fs-2 ms-4"></i> 
	<i class="ki-outline ki-minus-square toggle-on text-primary fs-2 ms-4"></i>                        
</a>
<!--end::Collapse toggle-->

<!--begin::Collapse content-->
<div class="collapse" id="kt_app_engage_prebuilts_tab_pages_general_social">
	<!--begin::Row-->
	<div class="row g-10 pt-2 pb-5">
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/pages/social/feeds.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Activity	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/social-activity.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/pages/social/activity.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Feeds	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/social-feeds.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/pages/social/followers.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Followers	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/social-followers.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/pages/social/settings.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Settings	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/social-settings.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
			</div>
	<!--end::Row-->
</div>
<!--end::Collapse content-->						</div>
											<div class="mb-5">
							<!--begin::Collapse toggle-->
<a 
	class="btn btn-flex btn-color-dark flex-stack p-0 mb-5 toggle collapsible collapsed" 
	data-bs-toggle="collapse" 
	href="#kt_app_engage_prebuilts_tab_pages_general_others">
	
	<span class="fw-bolder fs-2">
		Others	</span>

	<i class="ki-outline ki-plus-square toggle-off text-primary fs-2 ms-4"></i> 
	<i class="ki-outline ki-minus-square toggle-on text-primary fs-2 ms-4"></i>                        
</a>
<!--end::Collapse toggle-->

<!--begin::Collapse content-->
<div class="collapse" id="kt_app_engage_prebuilts_tab_pages_general_others">
	<!--begin::Row-->
	<div class="row g-10 pt-2 pb-5">
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/pages/faq/classic.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		FAQ Classic	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/faq-classic.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/pages/faq/extended.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		FAQ Extended	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/faq-extended.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/pages/blog/home.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Blog Home	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/blog-home.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
					
			<!--begin::Col-->
			<div class="col-lg-4">
				
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/pages/blog/post.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Blog Post	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/blog-post.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->			</div>
			<!--end::Col-->
			</div>
	<!--end::Row-->
</div>
<!--end::Collapse content-->						</div>
					
				
			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_account" role="tabpanel">

				
					<!--begin::Row-->
<div class="row g-10"> 
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/account/overview.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Overview	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/account-overview.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/account/settings.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Settings	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/account-settings.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/account/billing.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Billing	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/account-billing.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/account/security.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Security	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/account-security.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/account/referrals.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Referrals	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/account-referrals.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/account/logs.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Logs	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/account-logs.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/account/api-keys.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		API Keys	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/account-apikeys.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/account/statements.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Statements	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/account-statements.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/account/billing.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Billing	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/account-billing.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
	</div>
<!--end::Row-->					
				
			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_modals" role="tabpanel">

				
					<!--begin::Row-->
<div class="row g-10"> 
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/modals/general/view-users.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		View Friends	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/modal-viewfriends.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/modals/general/upgrade-plan.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Upgrade Plan	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/modal-upgradeplan.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/modals/wizards/top-up-wallet.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Topup Wallet	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/modal-topupwallet.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/modals/general/share-earn.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Share & Earn	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/modal-shareandearn.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/modals/general/select-users.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Select User	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/modal-selectuser.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/modals/forms/bidding.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Place Bid	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/modal-placeyourbid.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/modals/wizards/offer-a-deal.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Offer Deal	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/modal-offeradeal.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/modals/forms/new-target.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		New Target	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/modal-newtarget.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/modals/forms/new-card.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		New Card	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/modal-newcard.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/modals/forms/new-address.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		New Address	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/modal-newaddress.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/modals/general/invite-friends.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Invite Friend	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/modal-invitefriend.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/modals/wizards/create-project.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create Project	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/modal-createproject.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/modals/wizards/create-campaign.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create Campaign	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/modal-createcampaign.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/modals/wizards/create-account.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create Business Account	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/modal-createbusinessacc.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/modals/wizards/create-app.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create App	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/modal-createapp.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/modals/forms/create-api-key.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Create Api Key	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/modal-createapikey.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/modals/wizards/two-factor-authentication.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		2 Factor Auth	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/modal-2factorauth.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
	</div>
<!--end::Row-->					
				
			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_wizards" role="tabpanel">

				
					<!--begin::Row-->
<div class="row g-10"> 
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/wizards/horizontal.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		2 Factor Auth	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/wizard-2factorauth.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/wizards/horizontal.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Horizontal	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/wizard-horizontal.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/wizards/vertical.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Vertical	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/wizard-vertical.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
	</div>
<!--end::Row-->					
				
			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_search" role="tabpanel">

				
					<!--begin::Row-->
<div class="row g-10"> 
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/search/users.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Search Users	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/search-users.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/search/horizontal.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Search Horizontal	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/search-horizontal.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/search/vertical.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Search Vertical	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/search-vertical.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/utilities/search/select-location.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Search Location	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/search-location.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
	</div>
<!--end::Row-->					
				
			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_widgets" role="tabpanel">

				
					<!--begin::Row-->
<div class="row g-10"> 
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/widgets/charts.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Charts	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/widgets-charts.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/widgets/feeds.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Feeds	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/widgets-feeds.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/widgets/lists.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Lists	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/widgets-lists.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/widgets/mixed.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Mixed	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/widgets-mixed.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/widgets/statistics.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Statistics	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/widgets-stats.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/widgets/tables.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Tables	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/widgets-tables.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
	</div>
<!--end::Row-->					
				
			</div>
					<div class="tab-pane fade " id="kt_app_engage_prebuilts_tab_pages_email-templates" role="tabpanel">

				
					<!--begin::Row-->
<div class="row g-10"> 
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/authentication/email/welcome-message.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Welcome	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/email-welcome.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/authentication/email/subscription-confirmed.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Subscription Confirmed	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/email-subscriptionconfirmed.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/authentication/email/reset-password.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Reset Password	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/email-resetpassword.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/authentication/email/card-declined.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Card Declined	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/email-creditcarddeclined.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/authentication/email/promo-1.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Promotion 1	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/email-promo1.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/authentication/email/promo-2.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Promotion 2	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/email-promo2.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
			
		<!--begin::Col-->
		<div class="col-lg-4">
			
<!--begin::Preview-->
<a 
	href="/metronic8/demo60/authentication/email/promo-3.html" 
	data-kt-href="true" 
	class="preview-thumbnail bg-light border d-flex flex-column rounded-3 hover-elevate-up overflow-hidden" 
>
	<!--begin::Title-->
	<h3 class="ps-12 pt-9 mb-7 text-gray-900 fw-bold letter-spacing fs-4">
		Promotion 3	</h3>
	<!--end::Title-->

	<!--begin::Thumbnail-->
	<span class="app-prebuilts-thumbnail rounded ms-12 mb-n6 mb-lg-n15 me-n6 mh-350px overflow-hidden">
		<img src="/metronic8/demo60/assets/media/preview/demos/placeholder.jpg" data-src="/metronic8/demo60/assets/media/preview/prebuilts/pages/email-promo3.png" class="lozad w-100 rounded" alt=""/>
	</span>
	<!--end::Thumbnail-->
</a>
<!--end::Preview-->		</div>
		<!--end::Col-->	
	</div>
<!--end::Row-->					
				
			</div>
			</div>
	<!--end::Tab content-->	
</div>
<!--end::Scroll wrapper-->		</div>
	</div>
	<!--end::Tab content-->
</div>
<!--end::Image view-->                    
<!--begin::Text view-->
<div class="pt-2 d-none" id="kt_app_engage_prebuilts_view_text">
	<!--begin::Heading-->
	<h1 class="fs-2x text-gray-900 fw-bolder text-center mb-4" id="kt_app_engage_prebuilts_view_text_heading">
		Sitemap
	</h1>
	<!--end::Heading-->

	<!--begin::Wrapper-->
	<div 
		id="kt_app_engage_prebuilts_view_text_heading" 
		class="hover-scroll-y pe-12 me-n12" 
		data-kt-scroll="true" 
		data-kt-scroll-height="auto" 
		data-kt-scroll-wrappers="#kt_app_engage_prebuilts_modal, #kt_app_engage_prebuilts_modal_dialog, #kt_app_engage_prebuilts_body, #kt_app_engage_prebuilts_view_text" 
		data-kt-scroll-dependencies="#kt_app_engage_prebuilts_header, #kt_app_engage_prebuilts_view_text_heading" 
		data-kt-scroll-offset="190px" 
	>
								<!--begin::Section-->
			<div class="mb-10 mb-lg-17">
									
<!--begin::Title-->
<h3 class="text-gray-900 fw-bolder mb-7">
	Layouts
</h3>
<!--end::Title-->

<!--begin::Row-->
<div class="row">
			
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo1/index.html">
				Metronic Original			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo2/index.html">
				SaaS App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo39/index.html">
				Billing SaaS			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo31/index.html">
				Marketing Automation			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo9/index.html">
				Sales Manager			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo38/index.html">
				Email Marketing			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo30/index.html">
				Sales Tracking App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo6/index.html">
				Time Reporting			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo60/index.html">
				CRM Dashboard			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo8/index.html">
				Analytics App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo62/index.html">
				Project Scheduler			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo58/index.html">
				Store Dashboard			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo56/index.html">
				Budgeting App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo34/index.html">
				Finance Analytics			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo27/index.html">
				Databox Dashboard			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo29/index.html">
				Project Workspace			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
					
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo57/index.html">
				Billing System			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo3/index.html">
				New Trend			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo36/index.html">
				Digital Marketing			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo20/index.html">
				CRM Software			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo59/index.html">
				Todo App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo55/index.html">
				Backend Console			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo51/index.html">
				Payroll App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo10/index.html">
				Project Grid			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo61/index.html">
				Property Portal			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo52/index.html">
				Site Builder			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo63/index.html">
				Discussion Board			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo40/index.html">
				HR App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo23/index.html">
				Member Dashboard			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo64/index.html">
				Voice Call App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo35/index.html">
				Traffic Analytics			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo33/index.html">
				Social Campaings			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
					
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo19/index.html">
				Reports Panel			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo25/index.html">
				User Guiding App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo50/index.html">
				Micro-SaaS App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo32/index.html">
				Delivery Management			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo37/index.html">
				Cloud Suite			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo42/index.html">
				Calendar Workspace			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo5/index.html">
				Support Forum			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo16/index.html">
				Podcast App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo4/index.html">
				Jobs Site			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo53/index.html">
				Healthcare Dashboard			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo7/index.html">
				HR Dashboard			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo21/index.html">
				Monochrome App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo24/index.html">
				Helpdesk App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo28/index.html">
				eCommerce App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo44/index.html">
				Recruit Automation			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo11/index.html">
				Finance Planner			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
					
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo26/index.html">
				Planable App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo22/index.html">
				Media Publisher			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo41/index.html">
				Business Intelligence			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo18/index.html">
				Goal Tracking			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo54/index.html">
				Workspace App			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo15/index.html">
				Crypto Planner			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo14/index.html">
				Project Workplace			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo13/index.html">
				Classic Dashboard			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo12/index.html">
				Data Analyzer			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo48/index.html">
				Cloud ERP			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo17/index.html">
				Events Scheduler			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo49/index.html">
				KPI Tracking			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo43/index.html">
				Healthcare Dashboard			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo45/index.html">
				OKR Tracking			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo47/index.html">
				Campaign Automation			</a>

					
		
			
			<a class="fw-6 fw-semibold" href="https://preview.keenthemes.com/metronic8/demo46/index.html">
				Audit Board App			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
			</div>
<!--end::Row-->			
								
			</div>
			<!--end::Section-->

			 

								<!--begin::Section-->
			<div class="mb-10 mb-lg-17">
									
<!--begin::Title-->
<h3 class="text-gray-900 fw-bolder mb-7">
	Dashboards
</h3>
<!--end::Title-->

<!--begin::Row-->
<div class="row">
			
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/index.html">
				Dashboard			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/dashboards/marketing.html">
				Marketing Dashboard			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/dashboards/social.html">
				Social Dashboard			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/dashboards/ecommerce.html">
				eCommerce Dashboard			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/dashboards/store-analytics.html">
				Store Analytics			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
		
			
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/dashboards/logistics.html">
				Logistics			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/dashboards/delivery.html">
				Delivery			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/dashboards/online-courses.html">
				Online Courses			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/dashboards/school.html">
				Hello Tyler			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/dashboards/crypto.html">
				My Balance: 37,045$			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
		
			
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/dashboards/finance-performance.html">
				Finance Performance			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/dashboards/website-analytics.html">
				Website Analytics			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/dashboards/bidding.html">
				Bidding Dashboard			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/dashboards/podcast.html">
				Podcast Dashboard			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/dashboards/projects.html">
				Projects Dashboard			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
		
			
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/dashboards/call-center.html">
				Call Center			</a>

		
			
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/dashboards/pos.html">
				POS System			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
		
	</div>
<!--end::Row-->		
								
			</div>
			<!--end::Section-->

			 

								<!--begin::Section-->
			<div class="mb-10 mb-lg-17">
								
			</div>
			<!--end::Section-->

							
	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - Authentication		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/authentication/layouts/corporate/sign-in.html">
						Corporate					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/authentication/layouts/creative/sign-in.html">
						Creative					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/authentication/layouts/fancy/sign-in.html">
						Fancy					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/authentication/layouts/overlay/sign-in.html">
						Overlay					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/authentication/extended/multi-steps-sign-up.html">
						Multi-Step					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/authentication/layouts/corporate/two-factor.html">
						Two-Factor					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/authentication/general/password-confirmation.html">
						Password Changed					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/authentication/general/verify-email.html">
						Verify Email					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/authentication/general/welcome.html">
						Welcome					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/authentication/general/coming-soon.html">
						Coming Soon					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/authentication/general/account-deactivated.html">
						Account Deactivated					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/authentication/general/error-404.html">
						404 Page					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/authentication/general/error-500.html">
						505 Page					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->
	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - Account		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/account/overview.html">
						Overview					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/account/settings.html">
						Settings					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/account/billing.html">
						Billing					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/account/security.html">
						Security					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/account/referrals.html">
						Referrals					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/account/logs.html">
						Logs					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/account/api-keys.html">
						API Keys					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/account/statements.html">
						Statements					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/account/billing.html">
						Billing					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->
	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - Modals		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/modals/general/view-users.html">
						View Friends					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/modals/general/upgrade-plan.html">
						Upgrade Plan					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/modals/wizards/top-up-wallet.html">
						Topup Wallet					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/modals/general/share-earn.html">
						Share & Earn					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/modals/general/select-users.html">
						Select User					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/modals/forms/bidding.html">
						Place Bid					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/modals/wizards/offer-a-deal.html">
						Offer Deal					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/modals/forms/new-target.html">
						New Target					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/modals/forms/new-card.html">
						New Card					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/modals/forms/new-address.html">
						New Address					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/modals/general/invite-friends.html">
						Invite Friend					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/modals/wizards/create-project.html">
						Create Project					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/modals/wizards/create-campaign.html">
						Create Campaign					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/modals/wizards/create-account.html">
						Create Business Account					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/modals/wizards/create-app.html">
						Create App					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/modals/forms/create-api-key.html">
						Create Api Key					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/modals/wizards/two-factor-authentication.html">
						2 Factor Auth					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->
	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - Wizards		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/wizards/horizontal.html">
						2 Factor Auth					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/wizards/horizontal.html">
						Horizontal					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/wizards/vertical.html">
						Vertical					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->
	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - Search		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/search/users.html">
						Search Users					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/search/horizontal.html">
						Search Horizontal					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/search/vertical.html">
						Search Vertical					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/utilities/search/select-location.html">
						Search Location					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->
	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - Widgets		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/widgets/charts.html">
						Charts					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/widgets/feeds.html">
						Feeds					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/widgets/lists.html">
						Lists					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/widgets/mixed.html">
						Mixed					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/widgets/statistics.html">
						Statistics					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/widgets/tables.html">
						Tables					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->
	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - Email Templates		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/authentication/email/welcome-message.html">
						Welcome					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/authentication/email/subscription-confirmed.html">
						Subscription Confirmed					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/authentication/email/reset-password.html">
						Reset Password					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/authentication/email/card-declined.html">
						Card Declined					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/authentication/email/promo-1.html">
						Promotion 1					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/authentication/email/promo-2.html">
						Promotion 2					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/authentication/email/promo-3.html">
						Promotion 3					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->
	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - General - User Profile		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/pages/user-profile/overview.html">
						Profile Overview					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/pages/user-profile/projects.html">
						User Projects					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/pages/user-profile/campaigns.html">
						User Campaigns					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/pages/user-profile/documents.html">
						User Documents					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/pages/user-profile/followers.html">
						User Followers					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/pages/user-profile/activity.html">
						User Activity					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->
	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - General - Corporate		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/pages/about.html">
						About Us					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/pages/contact.html">
						Contact Us					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/pages/licenses.html">
						License					</a>

											
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/pages/team.html">
						Our Team					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/pages/sitemap.html">
						Sitemap					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->
	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - General - Social		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/pages/social/feeds.html">
						Activity					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/pages/social/activity.html">
						Feeds					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/pages/social/followers.html">
						Followers					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/pages/social/settings.html">
						Settings					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->
	<!--begin::Section-->
	<div class="mb-10 mb-lg-17">
		<!--begin::Title-->
		<h3 class="text-gray-900 fw-bolder mb-7">
			Pages - General - Others		</h3>
		<!--end::Title-->

		<!--begin::Row-->
		<div class="row">
										
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/pages/faq/classic.html">
						FAQ Classic					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/pages/faq/extended.html">
						FAQ Extended					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/pages/blog/home.html">
						Blog Home					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
											
									<!--begin::Col-->
					<div class="col-lg-3">
						<!--begin::List-->
						<div class="d-flex flex-column gap-3 gap-lg-5">
				
					<a class="fw-6 fw-semibold" href="/metronic8/demo60/pages/blog/post.html">
						Blog Post					</a>

																</div>
						<!--end::List-->
					</div>
					<!--end::Col-->
									</div>
		<!--end::Row-->
	</div>
	<!--end::Section-->
			
			 

								<!--begin::Section-->
			<div class="">
									
<!--begin::Title-->
<h3 class="text-gray-900 fw-bolder mb-7">
	Apps
</h3>
<!--end::Title-->

<!--begin::Row-->
<div class="row">
			
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/apps/projects/list.html">
				Projects			</a>

					
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/apps/ecommerce/catalog/products.html">
				Ecommerce			</a>

					
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/apps/customers/list.html">
				Customers			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
					
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/apps/subscriptions/list.html">
				Subscriptions			</a>

					
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/apps/user-management/users/list.html">
				User Management			</a>

					
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/apps/invoices/create.html">
				Invoices			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
					
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/apps/support-center/overview.html">
				Support Center			</a>

					
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/apps/chat/private.html">
				Chat			</a>

					
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/apps/calendar.html">
				Calendar			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
					
					<!--begin::Col-->
			<div class="col-lg-3">
				<!--begin::List-->
				<div class="d-flex flex-column gap-3 gap-lg-5">
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/apps/file-manager/folders.html">
				File Manager			</a>

					
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/apps/inbox/listing.html">
				Inbox			</a>

					
		
			<a class="fw-6 fw-semibold" href="/metronic8/demo60/apps/contacts/getting-started.html">
				Contacts			</a>

										</div>
				<!--end::List-->
			</div>
			<!--end::Col-->
			</div>
<!--end::Row-->	
								
			</div>
			<!--end::Section-->

			 

			</div>
	<!--end::Wrapper-->
</div>
<!--end::Text view--->                </div>
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Sitemap-->				<!--end::Engage modals-->
<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
	<i class="ki-outline ki-arrow-up"></i></div>
<!--end::Scrolltop-->

                    <!--begin::Modals-->
            <!--begin::Modal - Create Campaign-->
<div class="modal fade" id="kt_modal_create_campaign" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-fullscreen p-9">
        <!--begin::Modal content-->
        <div class="modal-content modal-rounded">
            <!--begin::Modal header-->
            <div class="modal-header py-7 d-flex justify-content-between">
                <!--begin::Modal title-->
                <h2>Create Campaign</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y m-5">
                <!--begin::Stepper-->
                <div class="stepper stepper-links d-flex flex-column" id="kt_modal_create_campaign_stepper">
                    <!--begin::Nav-->
                    <div class="stepper-nav justify-content-center py-2">
                        <!--begin::Step 1-->
                        <div class="stepper-item me-5 me-md-15 current" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">
                                Campaign Details
                            </h3>
                        </div>
                        <!--end::Step 1-->

                        <!--begin::Step 2-->
                        <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">
                                Creative Uploads
                            </h3>
                        </div>
                        <!--end::Step 2-->

                        <!--begin::Step 3-->
                        <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">
                                Audiences
                            </h3>
                        </div>
                        <!--end::Step 3-->

                        <!--begin::Step 4-->
                        <div class="stepper-item me-5 me-md-15" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">
                                Budget Estimates
                            </h3>
                        </div>
                        <!--end::Step 4-->

                        <!--begin::Step 5-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">
                                Completed
                            </h3>
                        </div>
                        <!--end::Step 5-->
                    </div>
                    <!--end::Nav-->

                    <!--begin::Form-->
                    <form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_create_campaign_stepper_form">
                        
<!--begin::Step 1-->
<div class="current" data-kt-stepper-element="content">
    <!--begin::Wrapper-->
    <div class="w-100">
        <!--begin::Heading-->
        <div class="pb-10 pb-lg-15">
            <!--begin::Title-->
            <h2 class="fw-bold d-flex align-items-center text-gray-900">
                Setup Campaign Details

                
<span class="ms-1"  data-bs-toggle="tooltip" title="Campaign name will be used as reference within your campaign reports" >
	<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>            </h2>
            <!--end::Title-->

            <!--begin::Notice-->
            <div class="text-muted fw-semibold fs-6">
                If you need more info, please check out
                <a href="#" class="link-primary fw-bold">Help Page</a>.
            </div>
            <!--end::Notice-->
        </div>
        <!--end::Heading-->

        <!--begin::Input group-->
        <div class="mb-10 fv-row">
            <!--begin::Label-->
            <label class="required form-label mb-3">Campaign Name</label>
            <!--end::Label-->

            <!--begin::Input-->
            <input type="text" class="form-control form-control-lg form-control-solid" name="campaign_name" placeholder="" value="" />
            <!--end::Input-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="d-block fw-semibold fs-6 mb-5">
                <span class="required">Company Logo</span>

                
<span class="ms-1"  data-bs-toggle="tooltip" title="E.g. Select a logo to represent the company that's running the campaign." >
	<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>            </label>
            <!--end::Label-->

            <!--begin::Image input placeholder-->
            <style>
                .image-input-placeholder {
                    background-image: url('/metronic8/demo60/assets/media/svg/files/blank-image.svg');
                }

                [data-bs-theme="dark"] .image-input-placeholder {
                    background-image: url('/metronic8/demo60/assets/media/svg/files/blank-image-dark.svg');
                }                
            </style>
            <!--end::Image input placeholder-->

            <!--begin::Image input-->
            <div class="image-input image-input-empty image-input-outline image-input-placeholder" data-kt-image-input="true">
                <!--begin::Preview existing avatar-->
                <div class="image-input-wrapper w-125px h-125px"></div>
                <!--end::Preview existing avatar-->

                <!--begin::Label-->
                <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                    <i class="ki-outline ki-pencil fs-7"></i>
                    <!--begin::Inputs-->
                    <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                    <input type="hidden" name="avatar_remove" />
                    <!--end::Inputs-->
                </label>
                <!--end::Label-->

                <!--begin::Cancel-->
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                    <i class="ki-outline ki-cross fs-2"></i>                </span>
                <!--end::Cancel-->

                <!--begin::Remove-->
                <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                    <i class="ki-outline ki-cross fs-2"></i>                </span>
                <!--end::Remove-->
            </div>
            <!--end::Image input-->

            <!--begin::Hint-->
            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
            <!--end::Hint-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="mb-10">
            <!--begin::Label-->
            <label class="required fw-semibold fs-6 mb-5">Campaign Goal</label>
            <!--end::Label-->

            <!--begin::Roles-->
                            <!--begin::Input row-->
                <div class="d-flex fv-row">
                    <!--begin::Radio-->
                    <div class="form-check form-check-custom form-check-solid">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" name="user_role" type="radio" value="0" id="kt_modal_update_role_option_0" checked='checked' />
                        <!--end::Input-->

                        <!--begin::Label-->
                        <label class="form-check-label" for="kt_modal_update_role_option_0">
                            <div class="fw-bold text-gray-800">Get more visitors</div>
                            <div class="text-gray-600">Increase impression traffic onto the platform</div>
                        </label>
                        <!--end::Label-->
                    </div>
                    <!--end::Radio-->
                </div>
                <!--end::Input row-->

                <div class='separator separator-dashed my-5'></div>                            <!--begin::Input row-->
                <div class="d-flex fv-row">
                    <!--begin::Radio-->
                    <div class="form-check form-check-custom form-check-solid">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_1"  />
                        <!--end::Input-->

                        <!--begin::Label-->
                        <label class="form-check-label" for="kt_modal_update_role_option_1">
                            <div class="fw-bold text-gray-800">Get more messages on chat</div>
                            <div class="text-gray-600">Increase community interaction and communication</div>
                        </label>
                        <!--end::Label-->
                    </div>
                    <!--end::Radio-->
                </div>
                <!--end::Input row-->

                <div class='separator separator-dashed my-5'></div>                            <!--begin::Input row-->
                <div class="d-flex fv-row">
                    <!--begin::Radio-->
                    <div class="form-check form-check-custom form-check-solid">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_2"  />
                        <!--end::Input-->

                        <!--begin::Label-->
                        <label class="form-check-label" for="kt_modal_update_role_option_2">
                            <div class="fw-bold text-gray-800">Get more calls</div>
                            <div class="text-gray-600">Boost telecommunication feedback to provide precise and accurate information</div>
                        </label>
                        <!--end::Label-->
                    </div>
                    <!--end::Radio-->
                </div>
                <!--end::Input row-->

                <div class='separator separator-dashed my-5'></div>                            <!--begin::Input row-->
                <div class="d-flex fv-row">
                    <!--begin::Radio-->
                    <div class="form-check form-check-custom form-check-solid">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_3"  />
                        <!--end::Input-->

                        <!--begin::Label-->
                        <label class="form-check-label" for="kt_modal_update_role_option_3">
                            <div class="fw-bold text-gray-800">Get more likes</div>
                            <div class="text-gray-600">Increase positive interactivity on social media platforms</div>
                        </label>
                        <!--end::Label-->
                    </div>
                    <!--end::Radio-->
                </div>
                <!--end::Input row-->

                <div class='separator separator-dashed my-5'></div>                            <!--begin::Input row-->
                <div class="d-flex fv-row">
                    <!--begin::Radio-->
                    <div class="form-check form-check-custom form-check-solid">
                        <!--begin::Input-->
                        <input class="form-check-input me-3" name="user_role" type="radio" value="4" id="kt_modal_update_role_option_4"  />
                        <!--end::Input-->

                        <!--begin::Label-->
                        <label class="form-check-label" for="kt_modal_update_role_option_4">
                            <div class="fw-bold text-gray-800">Lead generation</div>
                            <div class="text-gray-600">Collect contact information for potential customers</div>
                        </label>
                        <!--end::Label-->
                    </div>
                    <!--end::Radio-->
                </div>
                <!--end::Input row-->

                                        <!--end::Roles-->
        </div>
        <!--end::Input group-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Step 1-->
                        
<!--begin::Step 2-->
<div data-kt-stepper-element="content">
    <!--begin::Wrapper-->   
    <div class="w-100">
        <!--begin::Heading-->
        <div class="pb-10 pb-lg-12">
            <!--begin::Title-->
            <h1 class="fw-bold text-gray-900">Upload Files</h1>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="text-muted fw-semibold fs-4">
                If you need more info, please check
                <a href="#" class="link-primary">Campaign Guidelines</a>
            </div>
            <!--end::Description-->
        </div>
        <!--end::Heading-->

        <!--begin::Input group-->
        <div class="fv-row mb-10">            
            <!--begin::Dropzone-->
            <div class="dropzone" id="kt_modal_create_campaign_files_upload">
                <!--begin::Message-->
                <div class="dz-message needsclick">
                    <!--begin::Icon-->
                    <i class="ki-outline ki-file-up fs-3hx text-primary"></i>                    <!--end::Icon-->

                    <!--begin::Info-->
                    <div class="ms-4">
                        <h3 class="dfs-3 fw-bold text-gray-900 mb-1">Drop campaign files here or click to upload.</h3>
                        <span class="fw-semibold fs-4 text-muted">Upload up to 10 files</span>
                    </div>
                    <!--end::Info-->
                </div>
            </div>
            <!--end::Dropzone-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="mb-10">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold mb-2">Uploaded File</label>
            <!--End::Label-->

            <!--begin::Files-->
            <div class="mh-300px scroll-y me-n7 pe-7">
                                    <!--begin::File-->
                    <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                                <img src="/metronic8/demo60/assets/media/svg/files/pdf.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->

                            <!--begin::Details-->
                            <div class="ms-6">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Product Specifications</a>
                                <div class="fw-semibold text-muted">230kb</div>
                            </div>
                            <!--end::Details-->
                        </div>

                        <!--begin::Menu-->
                        <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                <option></option>
                                <option value="1">Remove</option>
                                <option value="2">Modify</option>
                                <option value="3">Select</option>
                            </select>
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::File-->
                                    <!--begin::File-->
                    <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                                <img src="/metronic8/demo60/assets/media/svg/files/tif.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->

                            <!--begin::Details-->
                            <div class="ms-6">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign Creative Poster</a>
                                <div class="fw-semibold text-muted">2.4mb</div>
                            </div>
                            <!--end::Details-->
                        </div>

                        <!--begin::Menu-->
                        <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                <option></option>
                                <option value="1">Remove</option>
                                <option value="2">Modify</option>
                                <option value="3">Select</option>
                            </select>
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::File-->
                                    <!--begin::File-->
                    <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                                <img src="/metronic8/demo60/assets/media/svg/files/folder-document.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->

                            <!--begin::Details-->
                            <div class="ms-6">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign Landing Page Source</a>
                                <div class="fw-semibold text-muted">1.12mb</div>
                            </div>
                            <!--end::Details-->
                        </div>

                        <!--begin::Menu-->
                        <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                <option></option>
                                <option value="1">Remove</option>
                                <option value="2">Modify</option>
                                <option value="3">Select</option>
                            </select>
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::File-->
                                    <!--begin::File-->
                    <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                                <img src="/metronic8/demo60/assets/media/svg/files/css.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->

                            <!--begin::Details-->
                            <div class="ms-6">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Landing Page Styling</a>
                                <div class="fw-semibold text-muted">85kb</div>
                            </div>
                            <!--end::Details-->
                        </div>

                        <!--begin::Menu-->
                        <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                <option></option>
                                <option value="1">Remove</option>
                                <option value="2">Modify</option>
                                <option value="3">Select</option>
                            </select>
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::File-->
                                    <!--begin::File-->
                    <div class="d-flex flex-stack py-4 border border-top-0 border-left-0 border-right-0 border-dashed">
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                                <img src="/metronic8/demo60/assets/media/svg/files/ai.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->

                            <!--begin::Details-->
                            <div class="ms-6">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Design Source Files</a>
                                <div class="fw-semibold text-muted">48mb</div>
                            </div>
                            <!--end::Details-->
                        </div>

                        <!--begin::Menu-->
                        <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                <option></option>
                                <option value="1">Remove</option>
                                <option value="2">Modify</option>
                                <option value="3">Select</option>
                            </select>
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::File-->
                                    <!--begin::File-->
                    <div class="d-flex flex-stack py-4 ">
                        <div class="d-flex align-items-center">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-35px">
                                <img src="/metronic8/demo60/assets/media/svg/files/doc.svg" alt="icon" />
                            </div>
                            <!--end::Avatar-->

                            <!--begin::Details-->
                            <div class="ms-6">
                                <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Campaign Plan Document</a>
                                <div class="fw-semibold text-muted">27kb</div>
                            </div>
                            <!--end::Details-->
                        </div>

                        <!--begin::Menu-->
                        <div class="min-w-100px">
                            <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true" data-placeholder="Edit">
                                <option></option>
                                <option value="1">Remove</option>
                                <option value="2">Modify</option>
                                <option value="3">Select</option>
                            </select>
                        </div>
                        <!--end::Menu-->
                    </div>
                    <!--end::File-->
                            </div>
            <!--end::Files-->
        </div>
        <!--end::Input group-->
    </div>
    <!--end::Wrapper-->   
</div>
<!--end::Step 2-->
                        <!--begin::Step 3-->
<div data-kt-stepper-element="content">
    <!--begin::Wrapper-->
    <div class="w-100">
        <!--begin::Heading-->
        <div class="pb-10 pb-lg-12">
            <!--begin::Title-->
            <h1 class="fw-bold text-gray-900">Configure Audiences</h1>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="text-muted fw-semibold fs-4">
                If you need more info, please check
                <a href="#" class="link-primary">Campaign Guidelines</a>
            </div>
            <!--end::Description-->
        </div>
        <!--end::Heading-->

        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold mb-2">
                Gender

                
<span class="ms-1"  data-bs-toggle="tooltip" title="Show your ads to either men or women, or select 'All' for both" >
	<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>            </label>
            <!--End::Label-->

            <!--begin::Row-->
            <div class="row g-9" data-kt-buttons="true" data-kt-buttons-target="[data-kt-button='true']">
                <!--begin::Col-->
                <div class="col">
                    <!--begin::Option-->
                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary active d-flex text-start p-6" data-kt-button="true">
                        <!--begin::Radio-->
                        <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                            <input class="form-check-input" type="radio" name="campaign_gender" value="1" checked="checked" />
                        </span>
                        <!--end::Radio-->

                        <!--begin::Info-->
                        <span class="ms-5">
                            <span class="fs-4 fw-bold text-gray-800 d-block">All</span>
                        </span>
                        <!--end::Info-->
                    </label>
                    <!--end::Option-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col">
                    <!--begin::Option-->
                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                        <!--begin::Radio-->
                        <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                            <input class="form-check-input" type="radio" name="campaign_gender" value="2" />
                        </span>
                        <!--end::Radio-->

                        <!--begin::Info-->
                        <span class="ms-5">
                            <span class="fs-4 fw-bold text-gray-800 d-block">Male</span>
                        </span>
                        <!--end::Info-->
                    </label>
                    <!--end::Option-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col">
                    <!--begin::Option-->
                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary d-flex text-start p-6" data-kt-button="true">
                        <!--begin::Radio-->
                        <span class="form-check form-check-custom form-check-solid form-check-sm align-items-start mt-1">
                            <input class="form-check-input" type="radio" name="campaign_gender" value="3" />
                        </span>
                        <!--end::Radio-->

                        <!--begin::Info-->
                        <span class="ms-5">
                            <span class="fs-4 fw-bold text-gray-800 d-block">Female</span>
                        </span>
                        <!--end::Info-->
                    </label>
                    <!--end::Option-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold mb-2">
                Age

                
<span class="ms-1"  data-bs-toggle="tooltip" title="Select the minimum and maximum age of the people who will find your ad relevant." >
	<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>            </label>
            <!--End::Label-->

            <!--begin::Slider-->
            <div class="d-flex flex-stack">
                <div id="kt_modal_create_campaign_age_min" class="fs-7 fw-semibold text-muted"></div>
                <div id="kt_modal_create_campaign_age_slider" class="noUi-sm w-100 ms-5 me-8"></div>
                <div id="kt_modal_create_campaign_age_max" class="fs-7 fw-semibold text-muted"></div>
            </div>
            <!--end::Slider-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold mb-2">
                Location

                
<span class="ms-1"  data-bs-toggle="tooltip" title="Enter one or more location points for more specific targeting." >
	<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>            </label>
            <!--End::Label-->

            <!--begin::Tagify-->
            <input class="form-control d-flex align-items-center" value="" id="kt_modal_create_campaign_location" data-kt-flags-path="/metronic8/demo60/assets/media/flags/"/>
            <!--end::Tagify-->
        </div>
        <!--end::Input group-->

    </div>
    <!--end::Wrapper-->
</div>
<!--end::Step 3-->
                        <!--begin::Step 4-->
<div data-kt-stepper-element="content">
    <!--begin::Wrapper-->
    <div class="w-100">
        <!--begin::Heading-->
        <div class="pb-10 pb-lg-12">
            <!--begin::Title-->
            <h1 class="fw-bold text-gray-900">Budget Estimates</h1>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="text-muted fw-semibold fs-4">
                If you need more info, please check
                <a href="#" class="link-primary">Campaign Guidelines</a>
            </div>
            <!--end::Description-->
        </div>
        <!--end::Heading-->

        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold mb-2">
                Campaign Duration

                
<span class="ms-1"  data-bs-toggle="tooltip" title="Choose how long you want your ad to run for" >
	<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>            </label>
            <!--end::Label-->

            <!--begin::Duration option-->
            <div class="d-flex gap-9 mb-7">
                <!--begin::Button-->
                <button type="button" class="btn btn-outline btn-outline-dashed btn-active-light-primary active" id="kt_modal_create_campaign_duration_all">
                    Continuous duration<br />
                    <span class="fs-7">Your ad will run continuously for a daily budget.</span>
                </button>
                <!--end::Button-->

                <!--begin::Button-->
                <button type="button" class="btn btn-outline btn-outline-dashed btn-active-light-primary btn-outline-default" id="kt_modal_create_campaign_duration_fixed">
                    Fixed duration<br />
                    <span class="fs-7">Your ad will run on the specified dates only.</span>
                </button>
                <!--end::Button-->
            </div>
            <!--end::Duration option-->

            <!--begin::Datepicker-->
            <input class="form-control form-control-solid d-none" placeholder="Pick date & time" id="kt_modal_create_campaign_datepicker" />
            <!--end::Datepicker-->
        </div>
        <!--end::Input group-->


        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold mb-2">
                Daily Budget

                
<span class="ms-1"  data-bs-toggle="tooltip" title="Choose the budget allocated for each day. Higher budget will generate better results" >
	<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>            </label>
            <!--end::Label-->

            <!--begin::Slider-->
            <div class="d-flex flex-column text-center">
                <div class="d-flex align-items-start justify-content-center mb-7">
                    <span class="fw-bold fs-4 mt-1 me-2">$</span>
                    <span class="fw-bold fs-3x" id="kt_modal_create_campaign_budget_label"></span>
                    <span class="fw-bold fs-3x">.00</span>
                </div>
                <div id="kt_modal_create_campaign_budget_slider" class="noUi-sm"></div>
            </div>
            <!--end::Slider-->

        </div>
        <!--end::Input group-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Step 4-->
                        <!--begin::Step 5-->
<div data-kt-stepper-element="content">
    <!--begin::Wrapper-->
    <div class="w-100">
        <!--begin::Heading-->
        <div class="pb-12 text-center">
            <!--begin::Title-->
            <h1 class="fw-bold text-gray-900">Campaign Created!</h1>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="fw-semibold text-muted fs-4">
                You will receive an email with with the summary of your newly created campaign!
            </div>
            <!--end::Description-->
        </div>
        <!--end::Heading-->

         <!--begin::Actions-->
         <div class="d-flex flex-center pb-20">
            <button id="kt_modal_create_campaign_create_new" type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">
                Create New Campaign
            </button>

            <a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip" title="Coming Soon">
                View Campaign
            </a>
        </div>
        <!--end::Actions-->

        <!--begin::Illustration-->
        <div class="text-center px-4">
            <img src="/metronic8/demo60/assets/media/illustrations/sketchy-1/9.png" alt="" class="mww-100 mh-350px"/>          
        </div>
        <!--end::Illustration-->
    </div>
</div>
<!--end::Step 5-->
                        <!--begin::Actions-->
                        <div class="d-flex flex-stack pt-10">
                            <!--begin::Wrapper-->
                            <div class="me-2">
                                <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous" data-kt-stepper-state="hide-on-last-step">
                                    <i class="ki-outline ki-arrow-left fs-3 me-1"></i>                                    Back
                                </button>
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Wrapper-->
                            <div>
                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                                    <span class="indicator-label">
                                        Submit
                                        <i class="ki-outline ki-arrow-right fs-3 ms-2 me-0"></i>                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>

                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                                    Continue
                                    <i class="ki-outline ki-arrow-right fs-3 ms-1 me-0"></i>                                </button>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--begin::Modal body-->
        </div>
    </div>
</div>
<!--end::Modal - Create Campaign--><!--begin::Modal - New Target-->
<div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="kt_modal_new_target_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Set First Target</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            If you need more info, please check <a href="#" class="fw-bold link-primary">Project Guidelines</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Target Title</span>

                            
<span class="ms-1"  data-bs-toggle="tooltip" title="Specify a target name for future usage and reference" >
	<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>                        </label>
                        <!--end::Label-->

                        <input type="text" class="form-control form-control-solid" placeholder="Enter Target Title" name="target_title"/>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="row g-9 mb-8">
                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Assign</label>

                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
                                <option value="">Select user...</option>
                                <option value="1">Karina Clark</option>
                                <option value="2">Robert Doe</option>
                                <option value="3">Niel Owen</option>
                                <option value="4">Olivia Wild</option>
                                <option value="5">Sean Bean</option>
                            </select>
                        </div>
                        <!--end::Col-->

                        <!--begin::Col-->
                        <div class="col-md-6 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Due Date</label>

                            <!--begin::Input-->
                            <div class="position-relative d-flex align-items-center">
                                <!--begin::Icon-->
                                <i class="ki-outline ki-calendar-8 fs-2 position-absolute mx-4"></i>                                <!--end::Icon-->

                                <!--begin::Datepicker-->
                                <input class="form-control form-control-solid ps-12" placeholder="Select a date" name="due_date"/>
                                <!--end::Datepicker-->
                            </div>
                            <!--end::Input-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8">
                        <label class="fs-6 fw-semibold mb-2">Target Details</label>

                        <textarea class="form-control form-control-solid" rows="3" name="target_details" placeholder="Type Target Details">
                        </textarea>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Tags</span>

                            
<span class="ms-1"  data-bs-toggle="tooltip" title="Specify a target priorty" >
	<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>                        </label>
                        <!--end::Label-->

                        <input class="form-control form-control-solid" value="Important, Urgent" name="tags"/>
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-stack mb-8">
                        <!--begin::Label-->
                        <div class="me-5">
                            <label class="fs-6 fw-semibold">Adding Users by Team Members</label>

                            <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
                        </div>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <label class="form-check form-switch form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                            <span class="form-check-label fw-semibold text-muted">
                                Allowed
                            </span>
                        </label>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="mb-15 fv-row">
                        <!--begin::Wrapper-->
                        <div class="d-flex flex-stack">
                            <!--begin::Label-->
                            <div class="fw-semibold me-5">
                                <label class="fs-6">Notifications</label>

                                <div class="fs-7 text-muted">Allow Notifications by Phone or Email</div>
                            </div>
                            <!--end::Label-->

                            <!--begin::Checkboxes-->
                            <div class="d-flex align-items-center">
                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid me-10">
                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="email" checked="checked"/>

                                    <span class="form-check-label fw-semibold">
                                        Email
                                    </span>
                                </label>
                                <!--end::Checkbox-->

                                <!--begin::Checkbox-->
                                <label class="form-check form-check-custom form-check-solid">
                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="communication[]" value="phone"/>

                                    <span class="form-check-label fw-semibold">
                                        Phone
                                    </span>
                                </label>
                                <!--end::Checkbox-->
                            </div>
                            <!--end::Checkboxes-->
                        </div>
                        <!--end::Wrapper-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">
                            Cancel
                        </button>

                        <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Target--><!--begin::Modal - New Card-->
<div class="modal fade" id="kt_modal_new_card" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header">
                <!--begin::Modal title-->
                <h2>Add New Card</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                <!--begin::Form-->
                <form id="kt_modal_new_card_form" class="form" action="#">
                    <!--begin::Input group-->
<div class="d-flex flex-column mb-7 fv-row">
    <!--begin::Label-->
    <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
        <span class="required">Name On Card</span>

        
<span class="ms-1"  data-bs-toggle="tooltip" title="Specify a card holder's name" >
	<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>    </label>
    <!--end::Label-->

    <input type="text" class="form-control form-control-solid" placeholder="" name="card_name" value="Max Doe"/>
</div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="d-flex flex-column mb-7 fv-row">
    <!--begin::Label-->
    <label class="required fs-6 fw-semibold form-label mb-2">Card Number</label>
    <!--end::Label-->
    
    <!--begin::Input wrapper-->
    <div class="position-relative">
        <!--begin::Input-->
        <input type="text" class="form-control form-control-solid" placeholder="Enter card number" name="card_number" value="4111 1111 1111 1111"/>
        <!--end::Input-->

        <!--begin::Card logos-->
        <div class="position-absolute translate-middle-y top-50 end-0 me-5">
            <img src="/metronic8/demo60/assets/media/svg/card-logos/visa.svg" alt="" class="h-25px"/>
            <img src="/metronic8/demo60/assets/media/svg/card-logos/mastercard.svg" alt="" class="h-25px"/>
            <img src="/metronic8/demo60/assets/media/svg/card-logos/american-express.svg" alt="" class="h-25px"/>
        </div>
        <!--end::Card logos-->
    </div>
    <!--end::Input wrapper-->
</div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="row mb-10">
    <!--begin::Col-->
    <div class="col-md-8 fv-row">
        <!--begin::Label-->
        <label class="required fs-6 fw-semibold form-label mb-2">Expiration Date</label>
        <!--end::Label-->

        <!--begin::Row-->
        <div class="row fv-row">
            <!--begin::Col-->
            <div class="col-6">
                <select name="card_expiry_month" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Month">
                    <option></option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                                            <option value="10">10</option>
                                            <option value="11">11</option>
                                            <option value="12">12</option>
                                    </select>
            </div>
            <!--end::Col-->

            <!--begin::Col-->
            <div class="col-6">
                <select name="card_expiry_year" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Year">
                    <option></option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            <option value="2027">2027</option>
                                            <option value="2028">2028</option>
                                            <option value="2029">2029</option>
                                            <option value="2030">2030</option>
                                            <option value="2031">2031</option>
                                            <option value="2032">2032</option>
                                            <option value="2033">2033</option>
                                            <option value="2034">2034</option>
                                    </select>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Row-->
    </div>
    <!--end::Col-->

    <!--begin::Col-->
    <div class="col-md-4 fv-row">
        <!--begin::Label-->
        <label class="d-flex align-items-center fs-6 fw-semibold form-label mb-2">
            <span class="required">CVV</span>

            
<span class="ms-1"  data-bs-toggle="tooltip" title="Enter a card CVV code" >
	<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>        </label>
        <!--end::Label-->

        <!--begin::Input wrapper-->
        <div class="position-relative">
            <!--begin::Input-->
            <input type="text" class="form-control form-control-solid" minlength="3" maxlength="4" placeholder="CVV" name="card_cvv"/>
            <!--end::Input-->

            <!--begin::CVV icon-->
            <div class="position-absolute translate-middle-y top-50 end-0 me-3">
                <i class="ki-outline ki-credit-cart fs-2hx"></i>            </div>
            <!--end::CVV icon-->
        </div>
        <!--end::Input wrapper-->
    </div>
    <!--end::Col-->
</div>
<!--end::Input group-->

<!--begin::Input group-->
<div class="d-flex flex-stack">
    <!--begin::Label-->
    <div class="me-5">
        <label class="fs-6 fw-semibold form-label">Save Card for further billing?</label>
        <div class="fs-7 fw-semibold text-muted">If you need more info, please check budget planning</div>
    </div>
    <!--end::Label-->

    <!--begin::Switch-->
    <label class="form-check form-switch form-check-custom form-check-solid">
        <input class="form-check-input" type="checkbox" value="1" checked="checked"/>
        <span class="form-check-label fw-semibold text-muted">
            Save Card
        </span>
    </label>
    <!--end::Switch-->
</div>
<!--end::Input group-->


                    <!--begin::Actions-->
                    <div class="text-center pt-15">
                        <button type="reset" id="kt_modal_new_card_cancel" class="btn btn-light me-3">
                            Discard
                        </button>

                        <button type="submit" id="kt_modal_new_card_submit" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end::Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Card--><!--begin::Modal - New Target-->
<div class="modal fade" id="kt_modal_bidding" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-kt-modal-action-type="close">
                    <i class="ki-outline ki-cross fs-1"></i>                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                <form id="kt_modal_bidding_form" class="form" action="#">
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Place your bids</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            If you need more info, please check <a href="#" class="fw-bold link-primary">Bidding Guidelines</a>.
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Bid Amount</span>

                            
<span class="ms-1"  data-bs-toggle="tooltip" title="Specify the bid amount to place in." >
	<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>                        </label>
                        <!--end::Label-->

                        <!--begin::Bid options-->
                        <div class="d-flex flex-stack gap-5 mb-3">
                            <button type="button" class="btn btn-light-primary w-100" data-kt-modal-bidding="option">10</button>
                            <button type="button" class="btn btn-light-primary w-100" data-kt-modal-bidding="option">50</button>
                            <button type="button" class="btn btn-light-primary w-100" data-kt-modal-bidding="option">100</button>
                        </div>
                        <!--begin::Bid options-->

                        <input type="text" class="form-control form-control-solid" placeholder="Enter Bid Amount" name="bid_amount" />
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Currency Type</span>

                            
<span class="ms-1"  data-bs-toggle="tooltip" title="Select the currency type." >
	<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>                        </label>
                        <!--end::Label-->

                        <!--begin::Select2-->
                        <select class="form-select form-select-solid" data-control="select2" data-hide-search="true" name="currency_type" data-placeholder="Select a Currency Type" name="currency_type">
                            <option value=""></option>
                            <option value="dollar" selected>Dollar</option>
                            <option value="crypto">Crypto</option>
                        </select>
                        <!--end::Select2-->
                    </div>
                    <!--end::Input group-->


                    <!--begin::Input group-->
                    <div class="fv-row mb-8">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span>Currency</span>
                        </label>
                        <!--end::Label-->

                        <!--begin::Dollar type-->
                        <div class="" data-kt-modal-bidding-type="dollar">
                            <!--begin::Select2-->
                            <select name="currency_dollar" aria-label="Select a Currency" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg">
                                                                    <option data-kt-bidding-modal-option-icon="flags/united-states.svg" value="USD" selected><b>USD</b>&nbsp;-&nbsp;USA dollar</option>
                                                                    <option data-kt-bidding-modal-option-icon="flags/united-kingdom.svg" value="GBP" ><b>GBP</b>&nbsp;-&nbsp;British pound</option>
                                                                    <option data-kt-bidding-modal-option-icon="flags/australia.svg" value="AUD" ><b>AUD</b>&nbsp;-&nbsp;Australian dollar</option>
                                                                    <option data-kt-bidding-modal-option-icon="flags/japan.svg" value="JPY" ><b>JPY</b>&nbsp;-&nbsp;Japanese yen</option>
                                                                    <option data-kt-bidding-modal-option-icon="flags/sweden.svg" value="SEK" ><b>SEK</b>&nbsp;-&nbsp;Swedish krona</option>
                                                                    <option data-kt-bidding-modal-option-icon="flags/canada.svg" value="CAD" ><b>CAD</b>&nbsp;-&nbsp;Canadian dollar</option>
                                                                    <option data-kt-bidding-modal-option-icon="flags/switzerland.svg" value="CHF" ><b>CHF</b>&nbsp;-&nbsp;Swiss franc</option>
                                                            </select>
                            <!--end::Select2-->
                        </div>
                        <!--end::Dollar type-->

                        <!--begin::Crypto type-->
                        <div class="d-none" data-kt-modal-bidding-type="crypto">
                            <!--begin::Select2-->
                            <select name="currency_crypto" aria-label="Select a Coin" data-placeholder="Select a currency.." class="form-select form-select-solid form-select-lg">
                                <option data-kt-bidding-modal-option-icon="svg/coins/bitcoin.svg" value="1" selected>Bitcoin</option>
                                <option data-kt-bidding-modal-option-icon="svg/coins/binance.svg" value="2">Binance</option>
                                <option data-kt-bidding-modal-option-icon="svg/coins/chainlink.svg" value="3">Chainlink</option>
                                <option data-kt-bidding-modal-option-icon="svg/coins/coin.svg" value="4">Coin</option>
                                <option data-kt-bidding-modal-option-icon="svg/coins/ethereum.svg" value="5">Ethereum</option>
                                <option data-kt-bidding-modal-option-icon="svg/coins/filecoin.svg" value="6">Filecoin</option>

                            </select>
                            <!--end::Select2-->
                        </div>
                        <!--end::Crypto type-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Notice-->
                    
<!--begin::Notice-->
<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed mb-9 p-6">
            <!--begin::Icon-->
        <i class="ki-outline ki-wallet fs-2tx text-primary me-4"></i>        <!--end::Icon-->
    
    <!--begin::Wrapper-->
    <div class="d-flex flex-stack flex-grow-1 ">
                    <!--begin::Content-->
            <div class=" fw-semibold">
                                    <h4 class="text-gray-900 fw-bold">Top up funds</h4>
                
                                    <div class="fs-6 text-gray-700 "> Not enough funds in your wallet? <a href="/metronic8/demo60/utilities/modals/wizards/top-up-wallet.html" class="text-bolder">Top up wallet</a>.</div>
                            </div>
            <!--end::Content-->
        
            </div>
    <!--end::Wrapper-->  
</div>
<!--end::Notice-->
                    <!--end::Notice-->

                    <!--begin::Actions-->
                    <div class="text-center">
                        <button type="reset" class="btn btn-light me-3" data-kt-modal-action-type="cancel">
                            Cancel
                        </button>

                        <button type="submit" class="btn btn-primary" data-kt-modal-action-type="submit">
                            <span class="indicator-label">
                                Submit
                            </span>
                            <span class="indicator-progress">
                                Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
                </form>
                <!--end:Form-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - New Target-->
<!--begin::Modal - Invite Friends-->
<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Heading-->
                <div class="text-center mb-13">
                    <!--begin::Title-->
                    <h1 class="mb-3">Invite a Friend</h1>
                    <!--end::Title-->

                    <!--begin::Description-->
                    <div class="text-muted fw-semibold fs-5">
                        If you need more info, please check out
                        <a href="#" class="link-primary fw-bold">FAQ Page</a>.
                    </div>
                    <!--end::Description-->
                </div>
                <!--end::Heading-->

                <!--begin::Google Contacts Invite-->
                <div class="btn btn-light-primary fw-bold w-100 mb-8">
                    <img alt="Logo" src="/metronic8/demo60/assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3"/>
                    Invite Gmail Contacts
                </div>
                <!--end::Google Contacts Invite-->

                <!--begin::Separator-->
                <div class="separator d-flex flex-center mb-8">
                    <span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
                </div>
                <!--end::Separator-->

                <!--begin::Textarea-->
                <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here">
                </textarea>
                <!--end::Textarea-->

                <!--begin::Users-->
                <div class="mb-10">
                    <!--begin::Heading-->
                    <div class="fs-6 fw-semibold mb-2">Your Invitations</div>
                    <!--end::Heading-->

                    <!--begin::List-->
                    <div class="mh-300px scroll-y me-n7 pe-7">
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-6.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>

                                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                M                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>

                                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-1.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>

                                        <div class="fw-semibold text-muted">max@kt.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-5.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>

                                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-25.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>

                                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                                C                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>

                                        <div class="fw-semibold text-muted">mik@pex.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-9.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>

                                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                O                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>

                                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                                N                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>

                                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-23.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                E                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>

                                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-12.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>

                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-info text-info fw-semibold">
                                                A                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>

                                        <div class="fw-semibold text-muted">robert@benko.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-13.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>

                                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <span class="symbol-label bg-light-success text-success fw-semibold">
                                                L                                            </span>
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>

                                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" selected>Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-21.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>

                                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" selected>Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" >Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                                                                <!--begin::User-->
                            <div class="d-flex flex-stack py-4 ">
                                <!--begin::Details-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Avatar-->
                                    <div class="symbol symbol-35px symbol-circle">
                                                                                    <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-12.jpg" />
                                                                            </div>
                                    <!--end::Avatar-->

                                    <!--begin::Details-->
                                    <div class="ms-5">
                                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>

                                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                                    </div>
                                    <!--end::Details-->
                                </div>
                                <!--end::Details-->

                                <!--begin::Access menu-->
                                <div class="ms-2 w-100px">
                                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
                                        <option value="1" >Guest</option>
                                        <option value="2" >Owner</option>
                                        <option value="3" selected>Can Edit</option>
                                    </select>
                                </div>
                                <!--end::Access menu-->
                            </div>
                            <!--end::User-->
                                            </div>
                    <!--end::List-->
                </div>
                <!--end::Users-->

                <!--begin::Notice-->
                <div class="d-flex flex-stack">
                    <!--begin::Label-->                        
                    <div class="me-5 fw-semibold">
                        <label class="fs-6">Adding Users by Team Members</label>
                        <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                    </div>
                    <!--end::Label-->     

                    <!--begin::Switch-->
                    <label class="form-check form-switch form-check-custom form-check-solid">
                        <input class="form-check-input" type="checkbox" value="1" checked="checked"/>
                        
                        <span class="form-check-label fw-semibold text-muted">
                            Allowed
                        </span>
                    </label>
                    <!--end::Switch-->
                </div>
                <!--end::Notice-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Invite Friend--><!--begin::Modal - Create Campaign-->
<div class="modal fade" id="kt_modal_top_up_wallet" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-fullscreen p-9">
        <!--begin::Modal content-->
        <div class="modal-content modal-rounded">
            <!--begin::Modal header-->
            <div class="modal-header py-7 d-flex justify-content-between">
                <!--begin::Modal title-->
                <h2>Top Up Wallet</h2>
                <!--end::Modal title-->

                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-kt-modal-action-type="close">
                    <i class="ki-outline ki-cross fs-1"></i>                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y m-5">
                <!--begin::Stepper-->
                <div class="stepper stepper-links d-flex flex-column gap-5" id="kt_modal_top_up_wallet_stepper">
                    <!--begin::Nav-->
                    <div class="stepper-nav justify-content-center py-2">
                        <!--begin::Step 1-->
                        <div class="stepper-item current" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">
                                Deposit Amount
                            </h3>
                        </div>
                        <!--end::Step 1-->

                        <!--begin::Step 2-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">
                                Currency
                            </h3>
                        </div>
                        <!--end::Step 2-->

                        <!--begin::Step 3-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">
                                Authentication
                            </h3>
                        </div>
                        <!--end::Step 3-->

                        <!--begin::Step 4-->
                        <div class="stepper-item" data-kt-stepper-element="nav">
                            <h3 class="stepper-title">
                                Completed
                            </h3>
                        </div>
                        <!--end::Step 4-->
                    </div>
                    <!--end::Nav-->

                    <!--begin::Form-->
                    <form class="mx-auto w-100 mw-600px pt-15 pb-10" novalidate="novalidate" id="kt_modal_top_up_wallet_stepper_form">
                        <!--begin::Step 1-->
<div class="current" data-kt-stepper-element="content">
    <!--begin::Wrapper-->
    <div class="w-100">
        <!--begin::Heading-->
        <div class="pb-10 pb-lg-15">
            <!--begin::Title-->
            <h2 class="fw-bold d-flex align-items-center text-gray-900">
                Set Amount to Top Up

                
<span class="ms-1"  data-bs-toggle="tooltip" title="You will be charged the set amount from your selected payment option" >
	<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>            </h2>
            <!--end::Title-->

            <!--begin::Notice-->
            <div class="text-muted fw-semibold fs-6">
                If you need more info, please check out
                <a href="#" class="link-primary fw-bold">Help Page</a>.
            </div>
            <!--end::Notice-->
        </div>
        <!--end::Heading-->

        <!--begin::Input group-->
        <div class="mb-10 fv-row">
            <!--begin::Label-->
            <label class="form-label mb-3">
                <span class="required">Top Up Amount</span>
            </label>
            <!--end::Label-->

            <!--begin::Input-->
            <input type="text" class="form-control form-control-lg form-control-solid" name="top_up_amount" placeholder="" value="" autocomplete="off"/>
            <!--end::Input-->
        </div>
        <!--end::Input group-->

        <!--begin::Input group-->
        <div class="mb-10">
            <!--begin::Label-->
            <label class="required fw-semibold fs-6 mb-5">Currency Type</label>
            <!--end::Label-->

            <!--begin::Row-->
            <div class="row row-cols-1 row-cols-md-2 g-5">
                <!--begin::Col-->
                <div class="col">
                    <!--begin::Option-->
                    <input type="radio" class="btn-check" name="currency_type" value="dollar" id="kt_radio_buttons_2_option_1" checked="checked"  />
                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center h-100" for="kt_radio_buttons_2_option_1">
                        <i class="ki-outline ki-dollar fs-3hx text-primary"></i>
                        <span class="d-block fw-semibold text-start">
                            <span class="text-gray-900 fw-bold d-block fs-3">Cash</span>
                            <span class="text-muted fw-semibold fs-6">
                                Top up wallet using cash from one of your saved payment options.
                            </span>
                        </span>
                    </label>
                    <!--end::Option-->
                </div>
                <!--end::Col-->

                <!--begin::Col-->
                <div class="col">
                    <!--begin::Option-->
                    <input type="radio" class="btn-check" name="currency_type" value="crypto" id="kt_radio_buttons_2_option_2" />
                    <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center h-100" for="kt_radio_buttons_2_option_2">
                        <i class="ki-outline ki-bitcoin fs-3hx text-primary"></i>
                        <span class="d-block fw-semibold text-start">
                            <span class="text-gray-900 fw-bold d-block fs-3">Crypto</span>
                            <span class="text-muted fw-semibold fs-6">
                                Top up wallet using a crypto currency.
                            </span>
                        </span>
                    </label>
                    <!--end::Option-->
                </div>
                <!--end::Col-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Input group-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Step 1-->
                        
<!--begin::Step 2-->
<div data-kt-stepper-element="content">
    <!--begin::Wrapper-->
    <div class="w-100">
        <!--begin::Heading-->
        <div class="pb-10 pb-lg-12">
            <!--begin::Title-->
            <h1 class="fw-bold text-gray-900">Currency</h1>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="text-muted fw-semibold fs-6">
                If you need more info, please check
                <a href="#" class="link-primary">Top Up Guidelines</a>
            </div>
            <!--end::Description-->
        </div>
        <!--end::Heading-->

        <!--begin::Dollar options-->
        <div class="" data-kt-modal-top-up-wallet-option="dollar">
            <!--begin::Input group-->
            <div class="fv-row mb-10">
                <!--begin::Label-->
                <label class="required fs-6 fw-semibold mb-2">Select a payment method</label>
                <!--End::Label-->

                <!--begin::Row-->
                <div class="row row-cols-1 row-cols-md-2 g-5">
                                            <!--begin::Col-->
                        <div class="col">
                            <!--begin::Option-->
                            <input type="radio" class="btn-check" name="payment_methods" value="dollar" id="kt_modal_top_up_wallet_payment_method_option_0" checked />
                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-start gap-5 h-100" for="kt_modal_top_up_wallet_payment_method_option_0">
                                <!--begin::Icon-->
                                <img src="/metronic8/demo60/assets/media/svg/card-logos/mastercard.svg" alt="" class="w-50px" />
                                <!--end::Icon-->

                                <!--begin::Card details-->
                                <div class="d-flex align-items-start flex-column gap-3">
                                    <div class="d-flex align-items-center">
                                        <!--begin::Card name-->
                                        <span>Personal</span>
                                        <!--end::Card name-->

                                                                                    <!--begin::Badge-->
                                            <div class="badge badge-primary ms-5">Primary</div>
                                            <!--end::Badge-->
                                                                            </div>

                                    <!--begin::Card number-->
                                    <div class="text-gray-900 fw-bold">**** 8742</div>
                                    <!--end::Card number-->

                                    <!--begin::Card expiry-->
                                    <div class="text-muted">
                                        exp 01/23                                    </div>
                                    <!--end::Card expiry-->
                                </div>
                                <!--end::Card details-->
                            </label>
                            <!--end::Option-->
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col">
                            <!--begin::Option-->
                            <input type="radio" class="btn-check" name="payment_methods" value="dollar" id="kt_modal_top_up_wallet_payment_method_option_1"  />
                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-start gap-5 h-100" for="kt_modal_top_up_wallet_payment_method_option_1">
                                <!--begin::Icon-->
                                <img src="/metronic8/demo60/assets/media/svg/card-logos/visa.svg" alt="" class="w-50px" />
                                <!--end::Icon-->

                                <!--begin::Card details-->
                                <div class="d-flex align-items-start flex-column gap-3">
                                    <div class="d-flex align-items-center">
                                        <!--begin::Card name-->
                                        <span>Family</span>
                                        <!--end::Card name-->

                                                                            </div>

                                    <!--begin::Card number-->
                                    <div class="text-gray-900 fw-bold">**** 1141</div>
                                    <!--end::Card number-->

                                    <!--begin::Card expiry-->
                                    <div class="text-muted">
                                        exp 05/24                                    </div>
                                    <!--end::Card expiry-->
                                </div>
                                <!--end::Card details-->
                            </label>
                            <!--end::Option-->
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col">
                            <!--begin::Option-->
                            <input type="radio" class="btn-check" name="payment_methods" value="dollar" id="kt_modal_top_up_wallet_payment_method_option_2"  />
                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-start gap-5 h-100" for="kt_modal_top_up_wallet_payment_method_option_2">
                                <!--begin::Icon-->
                                <img src="/metronic8/demo60/assets/media/svg/card-logos/mastercard.svg" alt="" class="w-50px" />
                                <!--end::Icon-->

                                <!--begin::Card details-->
                                <div class="d-flex align-items-start flex-column gap-3">
                                    <div class="d-flex align-items-center">
                                        <!--begin::Card name-->
                                        <span>Company</span>
                                        <!--end::Card name-->

                                                                            </div>

                                    <!--begin::Card number-->
                                    <div class="text-gray-900 fw-bold">**** 8839</div>
                                    <!--end::Card number-->

                                    <!--begin::Card expiry-->
                                    <div class="text-muted">
                                        exp 07/24                                    </div>
                                    <!--end::Card expiry-->
                                </div>
                                <!--end::Card details-->
                            </label>
                            <!--end::Option-->
                        </div>
                        <!--end::Col-->
                    
                    <!--begin::Col-->
                    <div class="col">
                        <!--begin::Add new card-->
                        <a href="/metronic8/demo60/utilities/modals/forms/new-card.html" class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100">
                            <!--begin::Icon-->
                            <i class="ki-outline ki-plus-circle fs-3hx text-primary"></i>                            <!--end::Icon-->

                            <!--begin::Label-->
                            <div class="fs-5 fw-bold">Add New Card</div>
                            <!--end::Label-->
                        </a>
                        <!--end::Add new card-->
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Input group-->
        </div>
        <!--end::Dollar options-->

        <!--begin::Crypto options-->
        <div class="d-none" data-kt-modal-top-up-wallet-option="crypto">
            <!--begin::Input group-->
            <div class="mb-10">
                <!--begin::Label-->
                <label class="required fs-6 fw-semibold mb-2">Select a coin</label>
                <!--End::Label-->

                <!--begin::Row-->
                <div class="row row-cols-2 row-cols-md-4 g-5">
                                            <!--begin::Col-->
                        <div class="col">
                            <!--begin::Option-->
                            <input type="radio" class="btn-check" name="select_coin" value="dollar" id="kt_modal_top_up_wallet_coin_option_0" checked />
                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100" for="kt_modal_top_up_wallet_coin_option_0">
                                <!--begin::Icon-->
                                <img src="/metronic8/demo60/assets/media/svg/coins/binance.svg" alt="" class="w-50px" />
                                <!--end::Icon-->

                                <!--begin::Label-->
                                <div class="fs-5 fw-bold">Binance</div>
                                <!--end::Label-->
                            </label>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col">
                            <!--begin::Option-->
                            <input type="radio" class="btn-check" name="select_coin" value="dollar" id="kt_modal_top_up_wallet_coin_option_1"  />
                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100" for="kt_modal_top_up_wallet_coin_option_1">
                                <!--begin::Icon-->
                                <img src="/metronic8/demo60/assets/media/svg/coins/bitcoin.svg" alt="" class="w-50px" />
                                <!--end::Icon-->

                                <!--begin::Label-->
                                <div class="fs-5 fw-bold">Bitcoin</div>
                                <!--end::Label-->
                            </label>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col">
                            <!--begin::Option-->
                            <input type="radio" class="btn-check" name="select_coin" value="dollar" id="kt_modal_top_up_wallet_coin_option_2"  />
                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100" for="kt_modal_top_up_wallet_coin_option_2">
                                <!--begin::Icon-->
                                <img src="/metronic8/demo60/assets/media/svg/coins/chainlink.svg" alt="" class="w-50px" />
                                <!--end::Icon-->

                                <!--begin::Label-->
                                <div class="fs-5 fw-bold">Chainlink</div>
                                <!--end::Label-->
                            </label>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col">
                            <!--begin::Option-->
                            <input type="radio" class="btn-check" name="select_coin" value="dollar" id="kt_modal_top_up_wallet_coin_option_3"  />
                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100" for="kt_modal_top_up_wallet_coin_option_3">
                                <!--begin::Icon-->
                                <img src="/metronic8/demo60/assets/media/svg/coins/coin.svg" alt="" class="w-50px" />
                                <!--end::Icon-->

                                <!--begin::Label-->
                                <div class="fs-5 fw-bold">Coin</div>
                                <!--end::Label-->
                            </label>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col">
                            <!--begin::Option-->
                            <input type="radio" class="btn-check" name="select_coin" value="dollar" id="kt_modal_top_up_wallet_coin_option_4"  />
                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100" for="kt_modal_top_up_wallet_coin_option_4">
                                <!--begin::Icon-->
                                <img src="/metronic8/demo60/assets/media/svg/coins/ethereum.svg" alt="" class="w-50px" />
                                <!--end::Icon-->

                                <!--begin::Label-->
                                <div class="fs-5 fw-bold">Ethereum</div>
                                <!--end::Label-->
                            </label>
                        </div>
                        <!--end::Col-->
                                            <!--begin::Col-->
                        <div class="col">
                            <!--begin::Option-->
                            <input type="radio" class="btn-check" name="select_coin" value="dollar" id="kt_modal_top_up_wallet_coin_option_5"  />
                            <label class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex flex-column flex-center gap-5 h-100" for="kt_modal_top_up_wallet_coin_option_5">
                                <!--begin::Icon-->
                                <img src="/metronic8/demo60/assets/media/svg/coins/filecoin.svg" alt="" class="w-50px" />
                                <!--end::Icon-->

                                <!--begin::Label-->
                                <div class="fs-5 fw-bold">Filecoin</div>
                                <!--end::Label-->
                            </label>
                        </div>
                        <!--end::Col-->
                                    </div>
                <!--end::Row-->
            </div>
            <!--end::Input group-->
        </div>
        <!--end::Crypto options-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Step 2-->
                        <!--begin::Step 3-->
<div data-kt-stepper-element="content">
    <!--begin::Wrapper-->
    <div class="w-100">
        <!--begin::Heading-->
        <div class="pb-10 pb-lg-12">
            <!--begin::Title-->
            <h1 class="fw-bold text-gray-900">Authentication</h1>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="text-muted fw-semibold fs-6">
                If you need more info, please check
                <a href="#" class="link-primary">Top Up Guidelines</a>
            </div>
            <!--end::Description-->
        </div>
        <!--end::Heading-->

        <!--begin::Secret key-->
        <div class="d-flex flex-column mb-10">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold mb-2">
                Secret Key

                
<span class="ms-1"  data-bs-toggle="tooltip" title="Please ensure that your secret key matches your saved image and keyword" >
	<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>            </label>
            <!--end::Label-->

            <div class="d-flex align-items-center gap-5">
                <!--begin::Image-->
                <div class="symbol symbol-100px symbol-circle">
                    <img src="/metronic8/demo60/assets/media/avatars/300-11.jpg" alt="Secret Image" />
                </div>
                <!--end::Image-->

                <!--begin::Keyword-->
                <div class="fw-bold fs-5">my_secret_key</div>
                <!--end::Keyword-->
            </div>
        </div>
        <!--end::Secret key-->

        <!--begin::Input group-->
        <div class="fv-row mb-10">
            <!--begin::Label-->
            <label class="fs-6 fw-semibold mb-2">
                Enter Password

                
<span class="ms-1"  data-bs-toggle="tooltip" title="Please enter your password to authenticate the wallet top up" >
	<i class="ki-outline ki-information-5 text-gray-500 fs-6"></i></span>            </label>
            <!--End::Label-->

            <!--begin::Input-->
            <input type="password" class="form-control form-control-lg form-control-solid" name="top_up_password" placeholder="" value="" autocomplete="off" />
            <!--end::Input-->
        </div>
        <!--end::Input group-->
    </div>
    <!--end::Wrapper-->
</div>
<!--end::Step 3-->
                        <!--begin::Step 5-->
<div data-kt-stepper-element="content">
    <!--begin::Wrapper-->
    <div class="w-100">
        <!--begin::Heading-->
        <div class="pb-12 text-center">
            <!--begin::Title-->
            <h1 class="fw-bold text-gray-900">Successful Top Up!</h1>
            <!--end::Title-->

            <!--begin::Description-->
            <div class="fw-semibold text-muted fs-4">
                You will receive an email with with the summary of your latest top up!
            </div>
            <!--end::Description-->
        </div>
        <!--end::Heading-->

         <!--begin::Actions-->
         <div class="d-flex flex-center pb-20">
            <button id="kt_modal_top_up_wallet_create_new" type="button" class="btn btn-lg btn-light me-3" data-kt-element="complete-start">
                Top Up Wallet
            </button>

            <a href="" class="btn btn-lg btn-primary" data-bs-toggle="tooltip" title="Coming Soon">
                View Wallet
            </a>
        </div>
        <!--end::Actions-->

        <!--begin::Illustration-->
        <div class="text-center px-4">
            <img src="/metronic8/demo60/assets/media/illustrations/sketchy-1/9.png" alt="" class="mww-100 mh-350px"/>          
        </div>
        <!--end::Illustration-->
    </div>
</div>
<!--end::Step 5-->
                        <!--begin::Actions-->
                        <div class="d-flex flex-stack pt-10">
                            <!--begin::Wrapper-->
                            <div class="me-2">
                                <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous">
                                    <i class="ki-outline ki-arrow-left fs-3 me-1"></i>                                    Back
                                </button>
                            </div>
                            <!--end::Wrapper-->

                            <!--begin::Wrapper-->
                            <div>
                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="submit">
                                    <span class="indicator-label">
                                        Submit
                                        <i class="ki-outline ki-arrow-right fs-3 ms-2 me-0"></i>                                    </span>
                                    <span class="indicator-progress">
                                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                    </span>
                                </button>

                                <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                                    Continue
                                    <i class="ki-outline ki-arrow-right fs-3 ms-1 me-0"></i>                                </button>
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Stepper-->
            </div>
            <!--begin::Modal body-->
        </div>
    </div>
</div>
<!--begin::Modal - Upgrade plan-->
<div class="modal fade" id="kt_modal_upgrade_plan" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-xl">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header justify-content-end border-0 pb-0">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>                </div>
                <!--end::Close-->
            </div>
            <!--end::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                <!--begin::Heading-->
                <div class="mb-13 text-center">
                    <h1 class="mb-3">Upgrade a Plan</h1>

                    <div class="text-muted fw-semibold fs-5">
                        If you need more info, please check <a href="#" class="link-primary fw-bold">Pricing Guidelines</a>.
                    </div>
                </div>
                <!--end::Heading-->

                <!--begin::Plans-->
                <div class="d-flex flex-column">
                    <!--begin::Nav group-->
                    <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                        <button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3 me-2 active" data-kt-plan="month">
                            Monthly
                        </button>
                        <button class="btn btn-color-gray-500 btn-active btn-active-secondary px-6 py-3" data-kt-plan="annual">
                            Annual
                        </button>
                    </div>
                    <!--end::Nav group-->

                    <!--begin::Row-->                             
                    <div class="row mt-10">
                        <!--begin::Col-->
                        <div class="col-lg-6 mb-10 mb-lg-0">
                            <!--begin::Tabs-->
                            <div class="nav flex-column">
                                                                    <!--begin::Tab link-->
                                                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                                                            
                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan" checked="checked" value="startup"/>
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Startup
                                                                                                        </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for startups                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                                                                            <span class="mb-2">$</span>

                                                <span class="fs-3x fw-bold" data-kt-plan-price-month="39" data-kt-plan-price-annual="399">
                                                    39                                                </span>
                                                
                                                <span class="fs-7 opacity-50">/ 
                                                    <span data-kt-element="period">Mon</span>
                                                </span>
                                                                                    </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                                                    <!--begin::Tab link-->
                                                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6  mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                                                                            
                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"  value="advanced"/>
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Advanced
                                                                                                        </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best for 100+ team size                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                                                                            <span class="mb-2">$</span>

                                                <span class="fs-3x fw-bold" data-kt-plan-price-month="339" data-kt-plan-price-annual="3399">
                                                    339                                                </span>
                                                
                                                <span class="fs-7 opacity-50">/ 
                                                    <span data-kt-element="period">Mon</span>
                                                </span>
                                                                                    </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                                                    <!--begin::Tab link-->
                                                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6  mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
                                                                            
                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"  value="enterprise"/>
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Enterprise
                                                                                                            <span class="badge badge-light-success ms-2 py-2 px-3 fs-7">Popular</span>
                                                                                                        </div>
                                                <div class="fw-semibold opacity-75">
                                                    Best value for 1000+ team                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                                                                            <span class="mb-2">$</span>

                                                <span class="fs-3x fw-bold" data-kt-plan-price-month="999" data-kt-plan-price-annual="9999">
                                                    999                                                </span>
                                                
                                                <span class="fs-7 opacity-50">/ 
                                                    <span data-kt-element="period">Mon</span>
                                                </span>
                                                                                    </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                                                    <!--begin::Tab link-->
                                                                        <label class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6" data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_custom">
                                                                            
                                        <!--end::Description-->
                                        <div class="d-flex align-items-center me-2">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid form-check-success flex-shrink-0 me-6">
                                                <input class="form-check-input" type="radio" name="plan"  value="custom"/>
                                            </div>
                                            <!--end::Radio-->

                                            <!--begin::Info-->
                                            <div class="flex-grow-1">
                                                <div class="d-flex align-items-center fs-2 fw-bold flex-wrap">
                                                    Custom
                                                                                                        </div>
                                                <div class="fw-semibold opacity-75">
                                                    Requet a custom license                                                </div>
                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Description-->

                                        <!--begin::Price-->
                                        <div class="ms-5">
                                                                                            <a href="#" class="btn btn-sm btn-success">Contact Us</a>
                                                                                    </div>
                                        <!--end::Price-->
                                    </label>
                                    <!--end::Tab link-->
                                                            </div>
                            <!--end::Tabs-->      
                        </div>
                        <!--end::Col-->   
                        
                        <!--begin::Col-->
                        <div class="col-lg-6">
                            <!--begin::Tab content-->
                            <div class="tab-content rounded h-100 bg-light p-10">
                                                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade show active" id="kt_upgrade_plan_startup">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 10+ team size and new startup                                                 
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">  
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 10 Active Users                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 30 Project Integrations                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Analytics Module                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Finance Module                                                        </span> 
                                                        <i class="ki-outline ki-cross-circle fs-1"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Accounting Module                                                        </span> 
                                                        <i class="ki-outline ki-cross-circle fs-1"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Network Platform                                                        </span> 
                                                        <i class="ki-outline ki-cross-circle fs-1"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center ">             
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Unlimited Cloud Space                                                        </span> 
                                                        <i class="ki-outline ki-cross-circle fs-1"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                    </div>
                                        <!--end::Body-->  
                                    </div> 
                                    <!--end::Tab Pane-->   
                                                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_advanced">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 100+ team size and grown company                                                 
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">  
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 10 Active Users                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 30 Project Integrations                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Analytics Module                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Finance Module                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Accounting Module                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Network Platform                                                        </span> 
                                                        <i class="ki-outline ki-cross-circle fs-1"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center ">             
                                                                                                            <span class="fw-semibold fs-5 text-muted flex-grow-1">
                                                            Unlimited Cloud Space                                                        </span> 
                                                        <i class="ki-outline ki-cross-circle fs-1"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                    </div>
                                        <!--end::Body-->  
                                    </div> 
                                    <!--end::Tab Pane-->   
                                                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_enterprise">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for 1000+ team and enterpise                                                 
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">  
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 10 Active Users                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Up to 30 Project Integrations                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Analytics Module                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Finance Module                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Accounting Module                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Network Platform                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center ">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Unlimited Cloud Space                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                    </div>
                                        <!--end::Body-->  
                                    </div> 
                                    <!--end::Tab Pane-->   
                                                                    <!--begin::Tab Pane-->
                                    <div class="tab-pane fade " id="kt_upgrade_plan_custom">
                                        <!--begin::Heading-->
                                        <div class="pb-5">
                                            <h2 class="fw-bold text-gray-900">What’s in Startup Plan?</h2>

                                            <div class="text-muted fw-semibold">
                                                Optimal for corporations                                                 
                                            </div>
                                        </div>
                                        <!--end::Heading-->

                                        <!--begin::Body-->
                                        <div class="pt-1">  
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Unlimited Users                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Unlimited Project Integrations                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Analytics Module                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Finance Module                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Accounting Module                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center mb-7">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Network Platform                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                            <!--begin::Item-->                                               
                                                <div class="d-flex align-items-center ">             
                                                                                                            <span class="fw-semibold fs-5 text-gray-700 flex-grow-1">
                                                            Unlimited Cloud Space                                                        </span> 
                                                        <i class="ki-outline ki-check-circle fs-1 text-success"></i>                                                                                                                                                              
                                                </div>
                                                <!--end::Item--> 
                                                                                    </div>
                                        <!--end::Body-->  
                                    </div> 
                                    <!--end::Tab Pane-->   
                                                            </div>  
                            <!--end::Tab content-->
                        </div> 
                        <!--end::Col-->   
                    </div> 
                    <!--end::Row-->
                </div>   
                <!--end::Plans-->                 

                <!--begin::Actions-->
                <div class="d-flex flex-center flex-row-fluid pt-12">
                    <button type="reset" class="btn btn-light me-3" data-bs-dismiss="modal">
                        Cancel
                    </button>

                    <button type="submit" class="btn btn-primary" id="kt_modal_upgrade_plan_btn">
                        
<!--begin::Indicator label-->
<span class="indicator-label">
    Upgrade Plan</span>
<!--end::Indicator label-->

<!--begin::Indicator progress-->
<span class="indicator-progress">
    Please wait...    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
</span>
<!--end::Indicator progress-->                         
                    </button>
                </div>
                <!--end::Actions-->      
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Upgrade plan--><!--begin::Modal - Users Search-->
<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                    <i class="ki-outline ki-cross fs-1"></i>                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                <!--begin::Content-->
                <div class="text-center mb-13">
                    <h1 class="mb-3">Search Users</h1>

                    <div class="text-muted fw-semibold fs-5">
                        Invite Collaborators To Your Project
                    </div>
                </div>
                <!--end::Content-->

                <!--begin::Search-->
                <div 
                    id="kt_modal_users_search_handler" 
                    
                    data-kt-search-keypress="true"
                    data-kt-search-min-length="2"
                    data-kt-search-enter="enter"     
                    data-kt-search-layout="inline">

                    <!--begin::Form-->
                    <form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">	
                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                        <input type="hidden"/>
                        <!--end::Hidden input-->

                        <!--begin::Icon-->
                        <i class="ki-outline ki-magnifier fs-2 fs-lg-1 text-gray-500 position-absolute top-50 ms-5 translate-middle-y"></i>                        <!--end::Icon-->

                        <!--begin::Input-->
                        <input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input"/>
                        <!--end::Input-->

                        <!--begin::Spinner-->
                        <span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                            <span class="spinner-border h-15px w-15px align-middle text-muted"></span>
                        </span>
                        <!--end::Spinner-->

                        <!--begin::Reset-->
                        <span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
                            <i class="ki-outline ki-cross fs-2 fs-lg-1 me-0"></i>                        </span>
                        <!--end::Reset-->
                    </form>
                    <!--end::Form-->

                    <!--begin::Wrapper-->
                    <div class="py-5">                            
                        <!--begin::Suggestions-->
<div data-kt-search-element="suggestions">
    <!--begin::Heading-->
    <h3 class="fw-semibold mb-5">Recently searched:</h3>
    <!--end::Heading-->

    <!--begin::Users-->
    <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-6.jpg" />
                                    </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="fw-semibold">
                    <span class="fs-6 text-gray-800 me-2">Emma Smith</span>
                    <span class="badge badge-light">Art Director</span>
                </div>
                <!--end::Info-->
            </a>
            <!--end::User-->
                                <!--begin::User-->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle me-5">
                                            <span class="symbol-label bg-light-danger text-danger fw-semibold">
                            M                        </span>
                                    </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="fw-semibold">
                    <span class="fs-6 text-gray-800 me-2">Melody Macy</span>
                    <span class="badge badge-light">Marketing Analytic</span>
                </div>
                <!--end::Info-->
            </a>
            <!--end::User-->
                                <!--begin::User-->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-1.jpg" />
                                    </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="fw-semibold">
                    <span class="fs-6 text-gray-800 me-2">Max Smith</span>
                    <span class="badge badge-light">Software Enginer</span>
                </div>
                <!--end::Info-->
            </a>
            <!--end::User-->
                                <!--begin::User-->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-5.jpg" />
                                    </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="fw-semibold">
                    <span class="fs-6 text-gray-800 me-2">Sean Bean</span>
                    <span class="badge badge-light">Web Developer</span>
                </div>
                <!--end::Info-->
            </a>
            <!--end::User-->
                                <!--begin::User-->
            <a href="#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
                <!--begin::Avatar-->
                <div class="symbol symbol-35px symbol-circle me-5">
                                            <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-25.jpg" />
                                    </div>
                <!--end::Avatar-->

                <!--begin::Info-->
                <div class="fw-semibold">
                    <span class="fs-6 text-gray-800 me-2">Brian Cox</span>
                    <span class="badge badge-light">UI/UX Designer</span>
                </div>
                <!--end::Info-->
            </a>
            <!--end::User-->
            </div>
    <!--end::Users-->
</div>
<!--end::Suggestions-->
                        
<!--begin::Results(add d-none to below element to hide the users list by default)-->
<div data-kt-search-element="results" class="d-none">
    <!--begin::Users-->
    <div class="mh-375px scroll-y me-n7 pe-7">
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-6.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>

                        <div class="fw-semibold text-muted">smith@kpmg.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                M                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>

                        <div class="fw-semibold text-muted">melody@altbox.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected>Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-1.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>

                        <div class="fw-semibold text-muted">max@kt.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" selected>Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-5.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>

                        <div class="fw-semibold text-muted">sean@dellito.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-25.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>

                        <div class="fw-semibold text-muted">brian@exchange.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" selected>Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-warning text-warning fw-semibold">
                                C                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>

                        <div class="fw-semibold text-muted">mik@pex.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-9.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>

                        <div class="fw-semibold text-muted">f.mit@kpmg.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" selected>Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                O                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>

                        <div class="fw-semibold text-muted">olivia@corpmail.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-primary text-primary fw-semibold">
                                N                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>

                        <div class="fw-semibold text-muted">owen.neil@gmail.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected>Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-23.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>

                        <div class="fw-semibold text-muted">dam@consilting.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" selected>Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                E                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>

                        <div class="fw-semibold text-muted">emma@intenso.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-12.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>

                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected>Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-info text-info fw-semibold">
                                A                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>

                        <div class="fw-semibold text-muted">robert@benko.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" selected>Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-13.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>

                        <div class="fw-semibold text-muted">miller@mapple.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" selected>Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <span class="symbol-label bg-light-success text-success fw-semibold">
                                L                            </span>
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>

                        <div class="fw-semibold text-muted">lucy.m@fentech.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" selected>Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-21.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>

                        <div class="fw-semibold text-muted">ethan@loop.com.au</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" selected>Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" >Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

                            <!--begin::Separator-->
                <div class="border-bottom border-gray-300 border-bottom-dashed"></div>
                <!--end::Separator-->
            
                                <!--begin::User-->
            <div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
                <!--begin::Details-->
                <div class="d-flex align-items-center">
                    <!--begin::Checkbox-->
                    <label class="form-check form-check-custom form-check-solid me-5">
                        <input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16"/>
                    </label>
                    <!--end::Checkbox-->

                    <!--begin::Avatar-->
                    <div class="symbol symbol-35px symbol-circle">
                                                    <img alt="Pic" src="/metronic8/demo60/assets/media/avatars/300-12.jpg" />
                                            </div>
                    <!--end::Avatar-->

                    <!--begin::Details-->
                    <div class="ms-5">
                        <a href="#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>

                        <div class="fw-semibold text-muted">ana.cf@limtel.com</div>
                    </div>
                    <!--end::Details-->
                </div>
                <!--end::Details-->

                <!--begin::Access menu-->
                <div class="ms-2 w-100px">
                    <select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
                        <option value="1" >Guest</option>
                        <option value="2" >Owner</option>
                        <option value="3" selected>Can Edit</option>
                    </select>
                </div>
                <!--end::Access menu-->
            </div>
            <!--end::User-->

            
            </div>
    <!--end::Users-->

    <!--begin::Actions-->
    <div class="d-flex flex-center mt-15">
        <button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">
            Cancel
        </button>

        <button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">
            Add Selected Users
        </button>
    </div>
    <!--end::Actions-->
</div>
<!--end::Results-->
                        <!--begin::Empty-->
<div data-kt-search-element="empty" class="text-center d-none">
    <!--begin::Message-->
    <div class="fw-semibold py-10">
        <div class="text-gray-600 fs-3 mb-2">No users found</div>

        <div class="text-muted fs-6">Try to search by username, full name or email...</div>
    </div>
    <!--end::Message-->

    <!--begin::Illustration-->
    <div class="text-center px-5">
        <img src="/metronic8/demo60/assets/media/illustrations/sketchy-1/1.png" alt="" class="w-100 h-200px h-sm-325px"/>        
    </div>
    <!--end::Illustration-->
</div>
<!--end::Empty-->                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Search-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
<!--end::Modal - Users Search-->            <!--end::Modals-->
        
        <!--begin::Javascript-->

                    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
                            <script src="assets/plugins/global/plugins.bundle.js"></script>
                            <script src="assets/js/scripts.bundle.js"></script>
                        <!--end::Global Javascript Bundle-->
        
                    <!--begin::Vendors Javascript(used for this page only)-->
                            <script src="assets/plugins/custom/datatables/datatables.bundle.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/map.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script>
                            <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script>
                        <!--end::Vendors Javascript-->
        
                    <!--begin::Custom Javascript(used for this page only)-->
                            <script src="assets/js/custom/apps/ecommerce/catalog/products.js"></script>
                            <script src="assets/js/custom/utilities/modals/create-campaign.js"></script>
                            <script src="assets/js/custom/utilities/modals/new-target.js"></script>
                            <script src="assets/js/custom/utilities/modals/new-card.js"></script>
                            <script src="assets/js/custom/utilities/modals/bidding.js"></script>
                            <script src="assets/js/custom/utilities/modals/top-up-wallet.js"></script>
                            <script src="assets/js/widgets.bundle.js"></script>
                            <script src="assets/js/custom/widgets.js"></script>
                            <script src="assets/js/custom/apps/chat/chat.js"></script>
                            <script src="assets/js/custom/utilities/modals/share-earn.js"></script>
                            <script src="assets/js/custom/utilities/modals/upgrade-plan.js"></script>
                            <script src="assets/js/custom/utilities/modals/users-search.js"></script>
                        <!--end::Custom Javascript-->
                <!--end::Javascript-->
    </body>
    <!--end::Body-->
</html>