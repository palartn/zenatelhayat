<!DOCTYPE html>
<html lang="ar" dir="rtl">
	<!--begin::Head-->
	<head>
			<base href="">
		<title>Metronic - the world's #1 selling Bootstrap Admin Theme Ecosystem for HTML, Vue, React, Angular &amp; Laravel by Keenthemes</title>
		<meta name="description" content="The most advanced Bootstrap Admin Theme on Themeforest trusted by 94,000 beginners and professionals. Multi-demo, Dark Mode, RTL support and complete React, Angular, Vue &amp; Laravel versions. Grab your copy now and get life-time updates for free." />
		<meta name="keywords" content="Metronic, bootstrap, bootstrap 5, Angular, VueJs, React, Laravel, admin themes, web design, figma, web development, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dak mode, bootstrap button, bootstrap datepicker, bootstrap timepicker, fullcalendar, datatables, flaticon" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="{{asset('css/css.css')}}" />
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.rtl.css')}}" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="{{ asset('assets/plugins/global/plugins.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{ asset('assets/css/style.bundle.rtl.css') }}" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		@yield('styles')
	</head>
	<!--begin::Body-->
<body style="font-family:NotoKufiArabic" id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled">
	<!--begin::Main-->
	<!--begin::Root-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="page d-flex flex-row flex-column-fluid">
			<!--begin::Aside-->
			
			<!--end::Aside-->
			<!--begin::Wrapper-->
			<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
				<!--begin::Header-->
				<div id="kt_header" style="" class="header align-items-stretch">
					<!--begin::Brand-->
					<div class="header-brand">
						<!--begin::Logo-->
						<a href="../../demo8/dist/index.html">
							<img alt="Logo" src="assets/media/logos/logo-1-dark.svg" class="h-25px h-lg-25px" />
						</a>
						<!--end::Logo-->
						<!--begin::Aside minimize-->
						<div id="kt_aside_toggle" class="btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr092.svg-->
							<span class="svg-icon svg-icon-1 me-n1 minimize-default">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.3" x="8.5" y="11" width="12" height="2" rx="1" fill="black" />
									<path d="M10.3687 11.6927L12.1244 10.2297C12.5946 9.83785 12.6268 9.12683 12.194 8.69401C11.8043 8.3043 11.1784 8.28591 10.7664 8.65206L7.84084 11.2526C7.39332 11.6504 7.39332 12.3496 7.84084 12.7474L10.7664 15.3479C11.1784 15.7141 11.8043 15.6957 12.194 15.306C12.6268 14.8732 12.5946 14.1621 12.1244 13.7703L10.3687 12.3073C10.1768 12.1474 10.1768 11.8526 10.3687 11.6927Z" fill="black" />
									<path opacity="0.5" d="M16 5V6C16 6.55228 15.5523 7 15 7C14.4477 7 14 6.55228 14 6C14 5.44772 13.5523 5 13 5H6C5.44771 5 5 5.44772 5 6V18C5 18.5523 5.44771 19 6 19H13C13.5523 19 14 18.5523 14 18C14 17.4477 14.4477 17 15 17C15.5523 17 16 17.4477 16 18V19C16 20.1046 15.1046 21 14 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3H14C15.1046 3 16 3.89543 16 5Z" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
							<span class="svg-icon svg-icon-1 minimize-active">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)" fill="black" />
									<path d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z" fill="black" />
									<path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="#C4C4C4" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</div>
						<!--end::Aside minimize-->
						<!--begin::Aside toggle-->
						<div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
							<div class="btn btn-icon btn-active-color-primary w-30px h-30px" id="kt_aside_mobile_toggle">
								<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
								<span class="svg-icon svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="black" />
										<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</div>
						</div>
						<!--end::Aside toggle-->
					</div>
					<!--end::Brand-->
					<div class="toolbar">
						<!--begin::Toolbar-->
						<div class="container-fluid py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column me-5">
								<!--begin::Title-->
								<h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">Dashboard</h1>
								<!--end::Title-->
								<!--begin::Breadcrumb-->
								<ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
									<!--begin::Item-->
									<li class="breadcrumb-item text-muted">
										<a href="../../demo8/dist/index.html" class="text-muted text-hover-primary">Home</a>
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="breadcrumb-item">
										<span class="bullet bg-gray-200 w-5px h-2px"></span>
									</li>
									<!--end::Item-->
									<!--begin::Item-->
									<li class="breadcrumb-item text-dark">Default</li>
									<!--end::Item-->
								</ul>
								<!--end::Breadcrumb-->
							</div>
							<!--end::Page title-->
							<!--begin::Action group-->
							<div class="d-flex align-items-center overflow-auto pt-3 pt-lg-0">
								<!--begin::Action wrapper-->
								<div class="d-flex align-items-center">
									<!--begin::Label-->
									<span class="fs-7 fw-bolder text-gray-700 pe-4 text-nowrap d-none d-xxl-block">Sort By:</span>
									<!--end::Label-->
									<!--begin::Select-->
									<select class="form-select form-select-sm form-select-solid w-100px w-xxl-125px" data-control="select2" data-placeholder="Latest" data-hide-search="true">
										<option value=""></option>
										<option value="1" selected="selected">Latest</option>
										<option value="2">In Progress</option>
										<option value="3">Done</option>
									</select>
									<!--end::Select-->
								</div>
								<!--end::Action wrapper-->
								<!--begin::Action wrapper-->
								<div class="d-flex align-items-center">
									<!--begin::Separartor-->
									<div class="bullet bg-secondary h-35px w-1px mx-5"></div>
									<!--end::Separartor-->
									<!--begin::Label-->
									<span class="fs-7 text-gray-700 fw-bolder d-none d-sm-block">Impact
									<span class="d-none d-xxl-inline">Level</span>:</span>
									<!--end::Label-->
									<!--begin::NoUiSlider-->
									<div class="d-flex align-items-center ps-4" id="kt_toolbar">
										<div id="kt_toolbar_slider" class="noUi-target noUi-target-primary w-75px w-xxl-150px noUi-sm"></div>
										<span id="kt_toolbar_slider_value" class="d-flex flex-center bg-light-primary rounded-circle w-35px h-35px ms-4 fs-7 fw-bolder text-primary" data-bs-toggle="tooltip" data-bs-placement="top" title="Set impact level"></span>
									</div>
									<!--end::NoUiSlider-->
									<!--begin::Separartor-->
									<div class="bullet bg-secondary h-35px w-1px mx-5"></div>
									<!--end::Separartor-->
								</div>
								<!--end::Action wrapper-->
								<!--begin::Action wrapper-->
								<div class="d-flex align-items-center">
									<!--begin::Label-->
									<span class="fs-7 text-gray-700 fw-bolder pe-3 d-none d-xxl-block">Quick Tools:</span>
									<!--end::Label-->
									<!--begin::Actions-->
									<div class="d-flex">
										<!--begin::Action-->
										<a href="#" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
											<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
													<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</a>
										<!--end::Action-->
										<!--begin::Notifications-->
										<div class="d-flex align-items-center">
											<!--begin::Menu- wrapper-->
											<a href="#" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
												<!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="black" />
														<path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="black" />
														<path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="black" />
														<path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</a>
											<!--begin::Menu-->
											<div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px" data-kt-menu="true">
												<!--begin::Heading-->
												<div class="d-flex flex-column bgi-no-repeat rounded-top" style="background-image:url('assets/media/misc/pattern-1.jpg')">
													<!--begin::Title-->
													<h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
													<span class="fs-8 opacity-75 ps-3">24 reports</span></h3>
													<!--end::Title-->
													<!--begin::Tabs-->
													<ul class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
														<li class="nav-item">
															<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_1">Alerts</a>
														</li>
														<li class="nav-item">
															<a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active" data-bs-toggle="tab" href="#kt_topbar_notifications_2">Updates</a>
														</li>
														<li class="nav-item">
															<a class="nav-link text-white opacity-75 opacity-state-100 pb-4" data-bs-toggle="tab" href="#kt_topbar_notifications_3">Logs</a>
														</li>
													</ul>
													<!--end::Tabs-->
												</div>
												<!--end::Heading-->
												<!--begin::Tab content-->
												<div class="tab-content">
													<!--begin::Tab panel-->
													<div class="tab-pane fade" id="kt_topbar_notifications_1" role="tabpanel">
														<!--begin::Items-->
														<div class="scroll-y mh-325px my-5 px-8">
															<!--begin::Item-->
															<div class="d-flex flex-stack py-4">
																<!--begin::Section-->
																<div class="d-flex align-items-center">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-35px me-4">
																		<span class="symbol-label bg-light-primary">
																			<!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z" fill="black" />
																					<path d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="mb-0 me-2">
																		<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project Alice</a>
																		<div class="text-gray-400 fs-7">Phase 1 development</div>
																	</div>
																	<!--end::Title-->
																</div>
																<!--end::Section-->
																<!--begin::Label-->
																<span class="badge badge-light fs-8">1 hr</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex flex-stack py-4">
																<!--begin::Section-->
																<div class="d-flex align-items-center">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-35px me-4">
																		<span class="symbol-label bg-light-danger">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-danger">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black" />
																					<rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black" />
																					<rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="mb-0 me-2">
																		<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">HR Confidential</a>
																		<div class="text-gray-400 fs-7">Confidential staff documents</div>
																	</div>
																	<!--end::Title-->
																</div>
																<!--end::Section-->
																<!--begin::Label-->
																<span class="badge badge-light fs-8">2 hrs</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex flex-stack py-4">
																<!--begin::Section-->
																<div class="d-flex align-items-center">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-35px me-4">
																		<span class="symbol-label bg-light-warning">
																			<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-warning">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
																					<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="mb-0 me-2">
																		<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Company HR</a>
																		<div class="text-gray-400 fs-7">Corporeate staff profiles</div>
																	</div>
																	<!--end::Title-->
																</div>
																<!--end::Section-->
																<!--begin::Label-->
																<span class="badge badge-light fs-8">5 hrs</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex flex-stack py-4">
																<!--begin::Section-->
																<div class="d-flex align-items-center">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-35px me-4">
																		<span class="symbol-label bg-light-success">
																			<!--begin::Svg Icon | path: icons/duotune/files/fil023.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-success">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M5 15C3.3 15 2 13.7 2 12C2 10.3 3.3 9 5 9H5.10001C5.00001 8.7 5 8.3 5 8C5 5.2 7.2 3 10 3C11.9 3 13.5 4 14.3 5.5C14.8 5.2 15.4 5 16 5C17.7 5 19 6.3 19 8C19 8.4 18.9 8.7 18.8 9C18.9 9 18.9 9 19 9C20.7 9 22 10.3 22 12C22 13.7 20.7 15 19 15H5ZM5 12.6H13L9.7 9.29999C9.3 8.89999 8.7 8.89999 8.3 9.29999L5 12.6Z" fill="black" />
																					<path d="M17 17.4V12C17 11.4 16.6 11 16 11C15.4 11 15 11.4 15 12V17.4H17Z" fill="black" />
																					<path opacity="0.3" d="M12 17.4H20L16.7 20.7C16.3 21.1 15.7 21.1 15.3 20.7L12 17.4Z" fill="black" />
																					<path d="M8 12.6V18C8 18.6 8.4 19 9 19C9.6 19 10 18.6 10 18V12.6H8Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="mb-0 me-2">
																		<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project Redux</a>
																		<div class="text-gray-400 fs-7">New frontend admin theme</div>
																	</div>
																	<!--end::Title-->
																</div>
																<!--end::Section-->
																<!--begin::Label-->
																<span class="badge badge-light fs-8">2 days</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex flex-stack py-4">
																<!--begin::Section-->
																<div class="d-flex align-items-center">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-35px me-4">
																		<span class="symbol-label bg-light-primary">
																			<!--begin::Svg Icon | path: icons/duotune/maps/map001.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-primary">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M6 22H4V3C4 2.4 4.4 2 5 2C5.6 2 6 2.4 6 3V22Z" fill="black" />
																					<path d="M18 14H4V4H18C18.8 4 19.2 4.9 18.7 5.5L16 9L18.8 12.5C19.3 13.1 18.8 14 18 14Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="mb-0 me-2">
																		<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project Breafing</a>
																		<div class="text-gray-400 fs-7">Product launch status update</div>
																	</div>
																	<!--end::Title-->
																</div>
																<!--end::Section-->
																<!--begin::Label-->
																<span class="badge badge-light fs-8">21 Jan</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex flex-stack py-4">
																<!--begin::Section-->
																<div class="d-flex align-items-center">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-35px me-4">
																		<span class="symbol-label bg-light-info">
																			<!--begin::Svg Icon | path: icons/duotune/general/gen006.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-info">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																					<path opacity="0.3" d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z" fill="black" />
																					<path d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="mb-0 me-2">
																		<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Banner Assets</a>
																		<div class="text-gray-400 fs-7">Collection of banner images</div>
																	</div>
																	<!--end::Title-->
																</div>
																<!--end::Section-->
																<!--begin::Label-->
																<span class="badge badge-light fs-8">21 Jan</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex flex-stack py-4">
																<!--begin::Section-->
																<div class="d-flex align-items-center">
																	<!--begin::Symbol-->
																	<div class="symbol symbol-35px me-4">
																		<span class="symbol-label bg-light-warning">
																			<!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
																			<span class="svg-icon svg-icon-2 svg-icon-warning">
																				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
																					<path opacity="0.3" d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z" fill="black" />
																					<path d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z" fill="black" />
																				</svg>
																			</span>
																			<!--end::Svg Icon-->
																		</span>
																	</div>
																	<!--end::Symbol-->
																	<!--begin::Title-->
																	<div class="mb-0 me-2">
																		<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bolder">Icon Assets</a>
																		<div class="text-gray-400 fs-7">Collection of SVG icons</div>
																	</div>
																	<!--end::Title-->
																</div>
																<!--end::Section-->
																<!--begin::Label-->
																<span class="badge badge-light fs-8">20 March</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Items-->
														<!--begin::View more-->
														<div class="py-3 text-center border-top">
															<a href="../../demo8/dist/pages/profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
															<span class="svg-icon svg-icon-5">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																	<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon--></a>
														</div>
														<!--end::View more-->
													</div>
													<!--end::Tab panel-->
													<!--begin::Tab panel-->
													<div class="tab-pane fade show active" id="kt_topbar_notifications_2" role="tabpanel">
														<!--begin::Wrapper-->
														<div class="d-flex flex-column px-9">
															<!--begin::Section-->
															<div class="pt-10 pb-0">
																<!--begin::Title-->
																<h3 class="text-dark text-center fw-bolder">Get Pro Access</h3>
																<!--end::Title-->
																<!--begin::Text-->
																<div class="text-center text-gray-600 fw-bold pt-1">Outlines keep you honest. They stoping you from amazing poorly about drive</div>
																<!--end::Text-->
																<!--begin::Action-->
																<div class="text-center mt-5 mb-9">
																	<a href="#" class="btn btn-sm btn-primary px-6" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
																</div>
																<!--end::Action-->
															</div>
															<!--end::Section-->
															<!--begin::Illustration-->
															<div class="text-center px-4">
																<img class="mw-100 mh-200px" alt="image" src="assets/media/illustrations/sketchy-1/1.png" />
															</div>
															<!--end::Illustration-->
														</div>
														<!--end::Wrapper-->
													</div>
													<!--end::Tab panel-->
													<!--begin::Tab panel-->
													<div class="tab-pane fade" id="kt_topbar_notifications_3" role="tabpanel">
														<!--begin::Items-->
														<div class="scroll-y mh-325px my-5 px-8">
															<!--begin::Item-->
															<div class="d-flex flex-stack py-4">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-2">
																	<!--begin::Code-->
																	<span class="w-70px badge badge-light-success me-4">200 OK</span>
																	<!--end::Code-->
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 text-hover-primary fw-bold">New order</a>
																	<!--end::Title-->
																</div>
																<!--end::Section-->
																<!--begin::Label-->
																<span class="badge badge-light fs-8">Just now</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex flex-stack py-4">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-2">
																	<!--begin::Code-->
																	<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
																	<!--end::Code-->
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 text-hover-primary fw-bold">New customer</a>
																	<!--end::Title-->
																</div>
																<!--end::Section-->
																<!--begin::Label-->
																<span class="badge badge-light fs-8">2 hrs</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex flex-stack py-4">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-2">
																	<!--begin::Code-->
																	<span class="w-70px badge badge-light-success me-4">200 OK</span>
																	<!--end::Code-->
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 text-hover-primary fw-bold">Payment process</a>
																	<!--end::Title-->
																</div>
																<!--end::Section-->
																<!--begin::Label-->
																<span class="badge badge-light fs-8">5 hrs</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex flex-stack py-4">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-2">
																	<!--begin::Code-->
																	<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
																	<!--end::Code-->
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 text-hover-primary fw-bold">Search query</a>
																	<!--end::Title-->
																</div>
																<!--end::Section-->
																<!--begin::Label-->
																<span class="badge badge-light fs-8">2 days</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex flex-stack py-4">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-2">
																	<!--begin::Code-->
																	<span class="w-70px badge badge-light-success me-4">200 OK</span>
																	<!--end::Code-->
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 text-hover-primary fw-bold">API connection</a>
																	<!--end::Title-->
																</div>
																<!--end::Section-->
																<!--begin::Label-->
																<span class="badge badge-light fs-8">1 week</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex flex-stack py-4">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-2">
																	<!--begin::Code-->
																	<span class="w-70px badge badge-light-success me-4">200 OK</span>
																	<!--end::Code-->
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 text-hover-primary fw-bold">Database restore</a>
																	<!--end::Title-->
																</div>
																<!--end::Section-->
																<!--begin::Label-->
																<span class="badge badge-light fs-8">Mar 5</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex flex-stack py-4">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-2">
																	<!--begin::Code-->
																	<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
																	<!--end::Code-->
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 text-hover-primary fw-bold">System update</a>
																	<!--end::Title-->
																</div>
																<!--end::Section-->
																<!--begin::Label-->
																<span class="badge badge-light fs-8">May 15</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex flex-stack py-4">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-2">
																	<!--begin::Code-->
																	<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
																	<!--end::Code-->
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 text-hover-primary fw-bold">Server OS update</a>
																	<!--end::Title-->
																</div>
																<!--end::Section-->
																<!--begin::Label-->
																<span class="badge badge-light fs-8">Apr 3</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex flex-stack py-4">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-2">
																	<!--begin::Code-->
																	<span class="w-70px badge badge-light-warning me-4">300 WRN</span>
																	<!--end::Code-->
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 text-hover-primary fw-bold">API rollback</a>
																	<!--end::Title-->
																</div>
																<!--end::Section-->
																<!--begin::Label-->
																<span class="badge badge-light fs-8">Jun 30</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex flex-stack py-4">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-2">
																	<!--begin::Code-->
																	<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
																	<!--end::Code-->
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 text-hover-primary fw-bold">Refund process</a>
																	<!--end::Title-->
																</div>
																<!--end::Section-->
																<!--begin::Label-->
																<span class="badge badge-light fs-8">Jul 10</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex flex-stack py-4">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-2">
																	<!--begin::Code-->
																	<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
																	<!--end::Code-->
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 text-hover-primary fw-bold">Withdrawal process</a>
																	<!--end::Title-->
																</div>
																<!--end::Section-->
																<!--begin::Label-->
																<span class="badge badge-light fs-8">Sep 10</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
															<!--begin::Item-->
															<div class="d-flex flex-stack py-4">
																<!--begin::Section-->
																<div class="d-flex align-items-center me-2">
																	<!--begin::Code-->
																	<span class="w-70px badge badge-light-danger me-4">500 ERR</span>
																	<!--end::Code-->
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 text-hover-primary fw-bold">Mail tasks</a>
																	<!--end::Title-->
																</div>
																<!--end::Section-->
																<!--begin::Label-->
																<span class="badge badge-light fs-8">Dec 10</span>
																<!--end::Label-->
															</div>
															<!--end::Item-->
														</div>
														<!--end::Items-->
														<!--begin::View more-->
														<div class="py-3 text-center border-top">
															<a href="../../demo8/dist/pages/profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
															<span class="svg-icon svg-icon-5">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
																	<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon--></a>
														</div>
														<!--end::View more-->
													</div>
													<!--end::Tab panel-->
												</div>
												<!--end::Tab content-->
											</div>
											<!--end::Menu-->
											<!--end::Menu wrapper-->
										</div>
										<!--end::Notifications-->
										<!--begin::Quick links-->
										<div class="d-flex align-items-center">
											<!--begin::Menu wrapper-->
											<a href="#" class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary" data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
												<!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->
												<span class="svg-icon svg-icon-1">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z" fill="black" />
														<path opacity="0.3" d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z" fill="black" />
														<path opacity="0.3" d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z" fill="black" />
														<path opacity="0.3" d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</a>
											<!--begin::Menu-->
											<div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px" data-kt-menu="true">
												<!--begin::Heading-->
												<div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10" style="background-image:url('assets/media/misc/pattern-1.jpg')">
													<!--begin::Title-->
													<h3 class="text-white fw-bold mb-3">Quick Links</h3>
													<!--end::Title-->
													<!--begin::Status-->
													<span class="badge bg-primary py-2 px-3">25 pending tasks</span>
													<!--end::Status-->
												</div>
												<!--end::Heading-->
												<!--begin:Nav-->
												<div class="row g-0">
													<!--begin:Item-->
													<div class="col-6">
														<a href="../../demo8/dist/pages/projects/budget.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
															<!--begin::Svg Icon | path: icons/duotune/finance/fin009.svg-->
															<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M15.8 11.4H6C5.4 11.4 5 11 5 10.4C5 9.80002 5.4 9.40002 6 9.40002H15.8C16.4 9.40002 16.8 9.80002 16.8 10.4C16.8 11 16.3 11.4 15.8 11.4ZM15.7 13.7999C15.7 13.1999 15.3 12.7999 14.7 12.7999H6C5.4 12.7999 5 13.1999 5 13.7999C5 14.3999 5.4 14.7999 6 14.7999H14.8C15.3 14.7999 15.7 14.2999 15.7 13.7999Z" fill="black" />
																	<path d="M18.8 15.5C18.9 15.7 19 15.9 19.1 16.1C19.2 16.7 18.7 17.2 18.4 17.6C17.9 18.1 17.3 18.4999 16.6 18.7999C15.9 19.0999 15 19.2999 14.1 19.2999C13.4 19.2999 12.7 19.2 12.1 19.1C11.5 19 11 18.7 10.5 18.5C10 18.2 9.60001 17.7999 9.20001 17.2999C8.80001 16.8999 8.49999 16.3999 8.29999 15.7999C8.09999 15.1999 7.80001 14.7 7.70001 14.1C7.60001 13.5 7.5 12.8 7.5 12.2C7.5 11.1 7.7 10.1 8 9.19995C8.3 8.29995 8.79999 7.60002 9.39999 6.90002C9.99999 6.30002 10.7 5.8 11.5 5.5C12.3 5.2 13.2 5 14.1 5C15.2 5 16.2 5.19995 17.1 5.69995C17.8 6.09995 18.7 6.6 18.8 7.5C18.8 7.9 18.6 8.29998 18.3 8.59998C18.2 8.69998 18.1 8.69993 18 8.79993C17.7 8.89993 17.4 8.79995 17.2 8.69995C16.7 8.49995 16.5 7.99995 16 7.69995C15.5 7.39995 14.9 7.19995 14.2 7.19995C13.1 7.19995 12.1 7.6 11.5 8.5C10.9 9.4 10.5 10.6 10.5 12.2C10.5 13.3 10.7 14.2 11 14.9C11.3 15.6 11.7 16.1 12.3 16.5C12.9 16.9 13.5 17 14.2 17C15 17 15.7 16.8 16.2 16.4C16.8 16 17.2 15.2 17.9 15.1C18 15 18.5 15.2 18.8 15.5Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<span class="fs-5 fw-bold text-gray-800 mb-0">Accounting</span>
															<span class="fs-7 text-gray-400">eCommerce</span>
														</a>
													</div>
													<!--end:Item-->
													<!--begin:Item-->
													<div class="col-6">
														<a href="../../demo8/dist/pages/projects/settings.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
															<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
															<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="black" />
																	<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<span class="fs-5 fw-bold text-gray-800 mb-0">Administration</span>
															<span class="fs-7 text-gray-400">Console</span>
														</a>
													</div>
													<!--end:Item-->
													<!--begin:Item-->
													<div class="col-6">
														<a href="../../demo8/dist/pages/projects/list.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
															<!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
															<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z" fill="black" />
																	<path opacity="0.3" d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<span class="fs-5 fw-bold text-gray-800 mb-0">Projects</span>
															<span class="fs-7 text-gray-400">Pending Tasks</span>
														</a>
													</div>
													<!--end:Item-->
													<!--begin:Item-->
													<div class="col-6">
														<a href="../../demo8/dist/pages/projects/users.html" class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
															<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
															<span class="svg-icon svg-icon-3x svg-icon-primary mb-2">
																<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
																	<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
																	<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
																</svg>
															</span>
															<!--end::Svg Icon-->
															<span class="fs-5 fw-bold text-gray-800 mb-0">Customers</span>
															<span class="fs-7 text-gray-400">Latest cases</span>
														</a>
													</div>
													<!--end:Item-->
												</div>
												<!--end:Nav-->
												<!--begin::View more-->
												<div class="py-2 text-center border-top">
													<a href="../../demo8/dist/pages/profile/activity.html" class="btn btn-color-gray-600 btn-active-color-primary">View All
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
													<span class="svg-icon svg-icon-5">
														<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
															<rect opacity="0.5" x="18" y="13" width="13" height="2" rx="1" transform="rotate(-180 18 13)" fill="black" />
															<path d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z" fill="black" />
														</svg>
													</span>
													<!--end::Svg Icon--></a>
												</div>
												<!--end::View more-->
											</div>
											<!--end::Menu-->
											<!--end::Menu wrapper-->
										</div>
										<!--end::Quick links-->
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Action wrapper-->
							</div>
							<!--end::Action group-->
						</div>
						<!--end::Toolbar-->
					</div>
				</div>
				<!--end::Header-->
	<div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
		<!--begin::Aside Toolbarl-->
		<div class="aside-toolbar flex-column-auto" id="kt_aside_toolbar">
			<!--begin::User-->
			<div class="aside-user d-flex align-items-sm-center justify-content-center py-5">
				<!--begin::Symbol-->
				<div class="symbol symbol-50px">
					<img src="assets/media/avatars/150-26.jpg" alt="" />
				</div>
				<!--end::Symbol-->
				<!--begin::Wrapper-->
				<div class="aside-user-info flex-row-fluid flex-wrap ms-5">
					<!--begin::Section-->
					<div class="d-flex">
						<!--begin::Info-->
						<div class="flex-grow-1 me-2">
							<!--begin::Username-->
							<a href="#" class="text-white text-hover-primary fs-6 fw-bold">Paul Melone</a>
							<!--end::Username-->
							<!--begin::Description-->
							<span class="text-gray-600 fw-bold d-block fs-8 mb-1">Python Dev</span>
							<!--end::Description-->
							<!--begin::Label-->
							<div class="d-flex align-items-center text-success fs-9">
							<span class="bullet bullet-dot bg-success me-1"></span>online</div>
							<!--end::Label-->
						</div>
						<!--end::Info-->
						<!--begin::User menu-->
						<div class="me-n2">
							<!--begin::Action-->
							<a href="#" class="btn btn-icon btn-sm btn-active-color-primary mt-n2" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-overflow="true">
								<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
								<span class="svg-icon svg-icon-muted svg-icon-1">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black" />
										<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</a>
							<!--begin::Menu-->
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-primary fw-bold py-4 fs-6 w-275px" data-kt-menu="true">
								<!--begin::Menu item-->
								<div class="menu-item px-3">
									<div class="menu-content d-flex align-items-center px-3">
										<!--begin::Avatar-->
										<div class="symbol symbol-50px me-5">
											<img alt="Logo" src="assets/media/avatars/150-26.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Username-->
										<div class="d-flex flex-column">
											<div class="fw-bolder d-flex align-items-center fs-5">Max Smith
											<span class="badge badge-light-success fw-bolder fs-8 px-2 py-1 ms-2">Pro</span></div>
											<a href="#" class="fw-bold text-muted text-hover-primary fs-7">max@kt.com</a>
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
									<a href="../../demo8/dist/account/overview.html" class="menu-link px-5">My Profile</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="../../demo8/dist/pages/projects/list.html" class="menu-link px-5">
										<span class="menu-text">My Projects</span>
										<span class="menu-badge">
											<span class="badge badge-light-danger badge-circle fw-bolder fs-7">3</span>
										</span>
									</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
									<a href="#" class="menu-link px-5">
										<span class="menu-title">My Subscription</span>
										<span class="menu-arrow"></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="../../demo8/dist/account/referrals.html" class="menu-link px-5">Referrals</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="../../demo8/dist/account/billing.html" class="menu-link px-5">Billing</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="../../demo8/dist/account/statements.html" class="menu-link px-5">Payments</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="../../demo8/dist/account/statements.html" class="menu-link d-flex flex-stack px-5">Statements
											<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="View your statements"></i></a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu separator-->
										<div class="separator my-2"></div>
										<!--end::Menu separator-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<div class="menu-content px-3">
												<label class="form-check form-switch form-check-custom form-check-solid">
													<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
													<span class="form-check-label text-muted fs-7">Notifications</span>
												</label>
											</div>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<a href="../../demo8/dist/account/statements.html" class="menu-link px-5">My Statements</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu separator-->
								<div class="separator my-2"></div>
								<!--end::Menu separator-->
								<!--begin::Menu item-->
								<div class="menu-item px-5" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
									<a href="#" class="menu-link px-5">
										<span class="menu-title position-relative">Language
										<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English
										<img class="w-15px h-15px rounded-1 ms-2" src="assets/media/flags/united-states.svg" alt="" /></span></span>
									</a>
									<!--begin::Menu sub-->
									<div class="menu-sub menu-sub-dropdown w-175px py-4">
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="../../demo8/dist/account/settings.html" class="menu-link d-flex px-5 active">
											<span class="symbol symbol-20px me-4">
												<img class="rounded-1" src="assets/media/flags/united-states.svg" alt="" />
											</span>English</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="../../demo8/dist/account/settings.html" class="menu-link d-flex px-5">
											<span class="symbol symbol-20px me-4">
												<img class="rounded-1" src="assets/media/flags/spain.svg" alt="" />
											</span>Spanish</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="../../demo8/dist/account/settings.html" class="menu-link d-flex px-5">
											<span class="symbol symbol-20px me-4">
												<img class="rounded-1" src="assets/media/flags/germany.svg" alt="" />
											</span>German</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="../../demo8/dist/account/settings.html" class="menu-link d-flex px-5">
											<span class="symbol symbol-20px me-4">
												<img class="rounded-1" src="assets/media/flags/japan.svg" alt="" />
											</span>Japanese</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3">
											<a href="../../demo8/dist/account/settings.html" class="menu-link d-flex px-5">
											<span class="symbol symbol-20px me-4">
												<img class="rounded-1" src="assets/media/flags/france.svg" alt="" />
											</span>French</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu sub-->
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5 my-1">
									<a href="../../demo8/dist/account/settings.html" class="menu-link px-5">Account Settings</a>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<form method="POST" action="{{ route('logout') }}">
										@csrf
			<div class="menu-link px-5">
										<x-dropdown-link :href="route('logout')"
												onclick="event.preventDefault();
															this.closest('form').submit();">
											{{ __('Log Out') }}
										</x-dropdown-link>
									</div>
									</form>
								</div>
								<!--end::Menu item-->
								<!--begin::Menu separator-->
								<div class="separator my-2"></div>
								<!--end::Menu separator-->
								<!--begin::Menu item-->
								<div class="menu-item px-5">
									<div class="menu-content px-5">
										<label class="form-check form-switch form-check-custom form-check-solid pulse pulse-success" for="kt_user_menu_dark_mode_toggle">
											<input class="form-check-input w-30px h-20px" type="checkbox" value="1" name="mode" id="kt_user_menu_dark_mode_toggle" data-kt-url="../../demo8/dist/index.html" />
											<span class="pulse-ring ms-n1"></span>
											<span class="form-check-label text-gray-600 fs-7">Dark Mode</span>
										</label>
									</div>
								</div>
								<!--end::Menu item-->
							</div>
							<!--end::Menu-->
							<!--end::Action-->
						</div>
						<!--end::User menu-->
					</div>
					<!--end::Section-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::User-->
			<!--begin::Aside search-->
			<div class="aside-search py-5">
				<!--begin::Search-->
				<div id="kt_header_search" class="d-flex align-items-center" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start" data-kt-menu-flip="bottom">
					<!--begin::Form-->
					<form data-kt-search-element="form" class="w-100 position-relative" autocomplete="off">
						<!--begin::Hidden input(Added to disable form autocomplete)-->
						<input type="hidden" />
						<!--end::Hidden input-->
						<!--begin::Icon-->
						<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
						<span class="svg-icon svg-icon-2 search-icon position-absolute top-50 translate-middle-y ms-4">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black" />
								<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black" />
							</svg>
						</span>
						<!--end::Svg Icon-->
						<!--end::Icon-->
						<!--begin::Input-->
						<input type="text" class="form-control ps-13 fs-7 h-40px" name="search" value="" placeholder="Quick Search" data-kt-search-element="input" />
						<!--end::Input-->
						<!--begin::Spinner-->
						<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
							<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
						</span>
						<!--end::Spinner-->
						<!--begin::Reset-->
						<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
							<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
							<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
								<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
									<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black" />
									<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black" />
								</svg>
							</span>
							<!--end::Svg Icon-->
						</span>
						<!--end::Reset-->
					</form>
					<!--end::Form-->
					<!--begin::Menu-->
					<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown w-300px w-md-350px py-7 px-7 overflow-hidden">
						<!--begin::Wrapper-->
						<div data-kt-search-element="wrapper">
							<!--begin::Recently viewed-->
							<div data-kt-search-element="results" class="d-none">
								<!--begin::Items-->
								<div class="scroll-y mh-200px mh-lg-350px">
									<!--begin::Category title-->
									<h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
									<!--end::Category title-->
									<!--begin::Item-->
									<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-4">
											<img src="assets/media/avatars/150-1.jpg" alt="" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column justify-content-start fw-bold">
											<span class="fs-6 fw-bold">Karina Clark</span>
											<span class="fs-7 fw-bold text-muted">Marketing Manager</span>
										</div>
										<!--end::Title-->
									</a>
									<!--end::Item-->
									<!--begin::Item-->
									<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-4">
											<img src="assets/media/avatars/150-3.jpg" alt="" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column justify-content-start fw-bold">
											<span class="fs-6 fw-bold">Olivia Bold</span>
											<span class="fs-7 fw-bold text-muted">Software Engineer</span>
										</div>
										<!--end::Title-->
									</a>
									<!--end::Item-->
									<!--begin::Item-->
									<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-4">
											<img src="assets/media/avatars/150-8.jpg" alt="" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column justify-content-start fw-bold">
											<span class="fs-6 fw-bold">Ana Clark</span>
											<span class="fs-7 fw-bold text-muted">UI/UX Designer</span>
										</div>
										<!--end::Title-->
									</a>
									<!--end::Item-->
									<!--begin::Item-->
									<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-4">
											<img src="assets/media/avatars/150-11.jpg" alt="" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column justify-content-start fw-bold">
											<span class="fs-6 fw-bold">Nick Pitola</span>
											<span class="fs-7 fw-bold text-muted">Art Director</span>
										</div>
										<!--end::Title-->
									</a>
									<!--end::Item-->
									<!--begin::Item-->
									<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-4">
											<img src="assets/media/avatars/150-12.jpg" alt="" />
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column justify-content-start fw-bold">
											<span class="fs-6 fw-bold">Edward Kulnic</span>
											<span class="fs-7 fw-bold text-muted">System Administrator</span>
										</div>
										<!--end::Title-->
									</a>
									<!--end::Item-->
									<!--begin::Category title-->
									<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
									<!--end::Category title-->
									<!--begin::Item-->
									<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-4">
											<span class="symbol-label bg-light">
												<img class="w-20px h-20px" src="assets/media/svg/brand-logos/volicity-9.svg" alt="" />
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column justify-content-start fw-bold">
											<span class="fs-6 fw-bold">Company Rbranding</span>
											<span class="fs-7 fw-bold text-muted">UI Design</span>
										</div>
										<!--end::Title-->
									</a>
									<!--end::Item-->
									<!--begin::Item-->
									<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-4">
											<span class="symbol-label bg-light">
												<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tvit.svg" alt="" />
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column justify-content-start fw-bold">
											<span class="fs-6 fw-bold">Company Re-branding</span>
											<span class="fs-7 fw-bold text-muted">Web Development</span>
										</div>
										<!--end::Title-->
									</a>
									<!--end::Item-->
									<!--begin::Item-->
									<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-4">
											<span class="symbol-label bg-light">
												<img class="w-20px h-20px" src="assets/media/svg/misc/infography.svg" alt="" />
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column justify-content-start fw-bold">
											<span class="fs-6 fw-bold">Business Analytics App</span>
											<span class="fs-7 fw-bold text-muted">Administration</span>
										</div>
										<!--end::Title-->
									</a>
									<!--end::Item-->
									<!--begin::Item-->
									<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-4">
											<span class="symbol-label bg-light">
												<img class="w-20px h-20px" src="assets/media/svg/brand-logos/leaf.svg" alt="" />
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column justify-content-start fw-bold">
											<span class="fs-6 fw-bold">EcoLeaf App Launch</span>
											<span class="fs-7 fw-bold text-muted">Marketing</span>
										</div>
										<!--end::Title-->
									</a>
									<!--end::Item-->
									<!--begin::Item-->
									<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-4">
											<span class="symbol-label bg-light">
												<img class="w-20px h-20px" src="assets/media/svg/brand-logos/tower.svg" alt="" />
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column justify-content-start fw-bold">
											<span class="fs-6 fw-bold">Tower Group Website</span>
											<span class="fs-7 fw-bold text-muted">Google Adwords</span>
										</div>
										<!--end::Title-->
									</a>
									<!--end::Item-->
									<!--begin::Category title-->
									<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
									<!--end::Category title-->
									<!--begin::Item-->
									<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-4">
											<span class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM15 17C15 16.4 14.6 16 14 16H8C7.4 16 7 16.4 7 17C7 17.6 7.4 18 8 18H14C14.6 18 15 17.6 15 17ZM17 12C17 11.4 16.6 11 16 11H8C7.4 11 7 11.4 7 12C7 12.6 7.4 13 8 13H16C16.6 13 17 12.6 17 12ZM17 7C17 6.4 16.6 6 16 6H8C7.4 6 7 6.4 7 7C7 7.6 7.4 8 8 8H16C16.6 8 17 7.6 17 7Z" fill="black" />
														<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column">
											<span class="fs-6 fw-bold">Si-Fi Project by AU Themes</span>
											<span class="fs-7 fw-bold text-muted">#45670</span>
										</div>
										<!--end::Title-->
									</a>
									<!--end::Item-->
									<!--begin::Item-->
									<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-4">
											<span class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<rect x="8" y="9" width="3" height="10" rx="1.5" fill="black" />
														<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="black" />
														<rect x="18" y="11" width="3" height="8" rx="1.5" fill="black" />
														<rect x="3" y="13" width="3" height="6" rx="1.5" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column">
											<span class="fs-6 fw-bold">Shopix Mobile App Planning</span>
											<span class="fs-7 fw-bold text-muted">#45690</span>
										</div>
										<!--end::Title-->
									</a>
									<!--end::Item-->
									<!--begin::Item-->
									<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-4">
											<span class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
														<rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
														<rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column">
											<span class="fs-6 fw-bold">Finance Monitoring SAAS Discussion</span>
											<span class="fs-7 fw-bold text-muted">#21090</span>
										</div>
										<!--end::Title-->
									</a>
									<!--end::Item-->
									<!--begin::Item-->
									<a href="#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-4">
											<span class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
														<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column">
											<span class="fs-6 fw-bold">Dashboard Analitics Launch</span>
											<span class="fs-7 fw-bold text-muted">#34560</span>
										</div>
										<!--end::Title-->
									</a>
									<!--end::Item-->
								</div>
								<!--end::Items-->
							</div>
							<!--end::Recently viewed-->
							<!--begin::Recently viewed-->
							<div data-kt-search-element="main">
								<!--begin::Heading-->
								<div class="d-flex flex-stack fw-bold mb-5">
									<!--begin::Label-->
									<span class="text-muted fs-6 me-2">Recently Searched</span>
									<!--end::Label-->
									<!--begin::Toolbar-->
									<div class="d-flex" data-kt-search-element="toolbar">
										<!--begin::Preferences toggle-->
										<div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle=" title="Show search preferences">
											<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
											<span class="svg-icon svg-icon-1">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="black" />
													<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Preferences toggle-->
										<!--begin::Advanced search toggle-->
										<div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="Show more search options">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
											<span class="svg-icon svg-icon-2">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="black" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Advanced search toggle-->
									</div>
									<!--end::Toolbar-->
								</div>
								<!--end::Heading-->
								<!--begin::Items-->
								<div class="scroll-y mh-200px mh-lg-325px">
									<!--begin::Item-->
									<div class="d-flex align-items-center mb-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-4">
											<span class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/electronics/elc004.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M2 16C2 16.6 2.4 17 3 17H21C21.6 17 22 16.6 22 16V15H2V16Z" fill="black" />
														<path opacity="0.3" d="M21 3H3C2.4 3 2 3.4 2 4V15H22V4C22 3.4 21.6 3 21 3Z" fill="black" />
														<path opacity="0.3" d="M15 17H9V20H15V17Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column">
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">BoomApp by Keenthemes</a>
											<span class="fs-7 text-muted fw-bold">#45789</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex align-items-center mb-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-4">
											<span class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/graphs/gra001.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z" fill="black" />
														<path d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column">
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"Kept API Project Meeting</a>
											<span class="fs-7 text-muted fw-bold">#84050</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex align-items-center mb-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-4">
											<span class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z" fill="black" />
														<path opacity="0.3" d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column">
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"KPI Monitoring App Launch</a>
											<span class="fs-7 text-muted fw-bold">#84250</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex align-items-center mb-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-4">
											<span class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M20 8L12.5 5L5 14V19H20V8Z" fill="black" />
														<path d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column">
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Project Reference FAQ</a>
											<span class="fs-7 text-muted fw-bold">#67945</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex align-items-center mb-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-4">
											<span class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="black" />
														<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column">
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"FitPro App Development</a>
											<span class="fs-7 text-muted fw-bold">#84250</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex align-items-center mb-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-4">
											<span class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="black" />
														<path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column">
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">Shopix Mobile App</a>
											<span class="fs-7 text-muted fw-bold">#45690</span>
										</div>
										<!--end::Title-->
									</div>
									<!--end::Item-->
									<!--begin::Item-->
									<div class="d-flex align-items-center mb-5">
										<!--begin::Symbol-->
										<div class="symbol symbol-40px me-4">
											<span class="symbol-label bg-light">
												<!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
												<span class="svg-icon svg-icon-2 svg-icon-primary">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
														<path opacity="0.3" d="M20 8L12.5 5L5 14V19H20V8Z" fill="black" />
														<path d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z" fill="black" />
													</svg>
												</span>
												<!--end::Svg Icon-->
											</span>
										</div>
										<!--end::Symbol-->
										<!--begin::Title-->
										<div class="d-flex flex-column">
											<a href="#" class="fs-6 text-gray-800 text-hover-primary fw-bold">"Landing UI Design" Launch</a>
											<span class="fs-7 text-muted fw-bold">#24005</span>
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
									<!--begin::Svg Icon | path: icons/duotune/files/fil024.svg-->
									<span class="svg-icon svg-icon-4x opacity-50">
										<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
											<path opacity="0.3" d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" fill="black" />
											<path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="black" />
											<rect x="13.6993" y="13.6656" width="4.42828" height="1.73089" rx="0.865447" transform="rotate(45 13.6993 13.6656)" fill="black" />
											<path d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z" fill="black" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--end::Icon-->
								<!--begin::Message-->
								<div class="pb-15 fw-bold">
									<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
									<div class="text-muted fs-7">Please try again with a different query</div>
								</div>
								<!--end::Message-->
							</div>
							<!--end::Empty-->
						</div>
						<!--end::Wrapper-->
						<!--begin::Preferences-->
						<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
							<!--begin::Heading-->
							<h3 class="fw-bold text-dark mb-7">Advanced Search</h3>
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
										<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
									</label>
									<!--end::Option-->
									<!--begin::Option-->
									<label>
										<input type="radio" class="btn-check" name="type" value="users" />
										<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
									</label>
									<!--end::Option-->
									<!--begin::Option-->
									<label>
										<input type="radio" class="btn-check" name="type" value="orders" />
										<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
									</label>
									<!--end::Option-->
									<!--begin::Option-->
									<label>
										<input type="radio" class="btn-check" name="type" value="projects" />
										<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
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
										<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
									</label>
									<!--end::Option-->
									<!--begin::Option-->
									<label>
										<input type="radio" class="btn-check" name="attachment" value="any" />
										<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
									</label>
									<!--end::Option-->
								</div>
								<!--end::Radio group-->
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="mb-5">
								<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
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
									<select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
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
								<button type="reset" class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
								<a href="../../demo8/dist/pages/search/horizontal.html" class="btn btn-sm fw-bolder btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Preferences-->
						<!--begin::Preferences-->
						<form data-kt-search-element="preferences" class="pt-1 d-none">
							<!--begin::Heading-->
							<h3 class="fw-bold text-dark mb-7">Search Preferences</h3>
							<!--end::Heading-->
							<!--begin::Input group-->
							<div class="pb-4 border-bottom">
								<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
									<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Projects</span>
									<input class="form-check-input" type="checkbox" value="1" checked="checked" />
								</label>
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="py-4 border-bottom">
								<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
									<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Targets</span>
									<input class="form-check-input" type="checkbox" value="1" checked="checked" />
								</label>
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="py-4 border-bottom">
								<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
									<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Affiliate Programs</span>
									<input class="form-check-input" type="checkbox" value="1" />
								</label>
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="py-4 border-bottom">
								<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
									<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Referrals</span>
									<input class="form-check-input" type="checkbox" value="1" checked="checked" />
								</label>
							</div>
							<!--end::Input group-->
							<!--begin::Input group-->
							<div class="py-4 border-bottom">
								<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
									<span class="form-check-label text-gray-700 fs-6 fw-bold ms-0 me-2">Users</span>
									<input class="form-check-input" type="checkbox" value="1" />
								</label>
							</div>
							<!--end::Input group-->
							<!--begin::Actions-->
							<div class="d-flex justify-content-end pt-7">
								<button type="reset" class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
								<button type="submit" class="btn btn-sm fw-bolder btn-primary">Save Changes</button>
							</div>
							<!--end::Actions-->
						</form>
						<!--end::Preferences-->
					</div>
					<!--end::Menu-->
				</div>
				<!--end::Search-->
			</div>
			<!--end::Aside search-->
			<!--end::Aside user-->
		</div>
		<!--end::Aside Toolbarl-->
		<!--begin::Aside menu-->
		<div class="aside-menu flex-column-fluid">
			<!--begin::Aside Menu-->
			<div class="hover-scroll-overlay-y px-2 my-5 my-lg-5" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="{default: '#kt_aside_toolbar, #kt_aside_footer', lg: '#kt_header, #kt_aside_toolbar, #kt_aside_footer'}" data-kt-scroll-wrappers="#kt_aside_menu" data-kt-scroll-offset="5px">
				<!--begin::Menu-->
				<div class="menu menu-column menu-title-gray-800 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500" id="#kt_aside_menu" data-kt-menu="true">
					<div class="menu-item">
						<div class="menu-content pb-2">
							<span class="menu-section text-muted text-uppercase fs-8 ls-1">Dashboard</span>
						</div>
					</div>
					<div class="menu-item">
						
						<a class="menu-link active" href='{{ route('users.index') }}'>
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
										<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
										<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
										<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							
							<span class="menu-title" >المستخدمين</span>
						</a>
					
					</div>
					<div class="menu-item">
						<a class="menu-link" href="../../demo8/dist/landing.html">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/communication/com001.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" fill="black" />
										<path d="M19 10.4C19 10.3 19 10.2 19 10C19 8.9 18.1 8 17 8H16.9C15.6 6.2 14.6 4.29995 13.9 2.19995C13.3 2.09995 12.6 2 12 2C11.9 2 11.8 2 11.7 2C12.4 4.6 13.5 7.10005 15.1 9.30005C15 9.50005 15 9.7 15 10C15 11.1 15.9 12 17 12C17.1 12 17.3 12 17.4 11.9C18.6 13 19.9 14 21.4 14.8C21.4 14.8 21.5 14.8 21.5 14.9C21.7 14.2 21.8 13.5 21.9 12.7C20.9 12.1 19.9 11.3 19 10.4Z" fill="black" />
										<path d="M12 15C11 13.1 10.2 11.2 9.60001 9.19995C9.90001 8.89995 10 8.4 10 8C10 7.1 9.40001 6.39998 8.70001 6.09998C8.40001 4.99998 8.20001 3.90005 8.00001 2.80005C7.30001 3.10005 6.70001 3.40002 6.20001 3.90002C6.40001 4.80002 6.50001 5.6 6.80001 6.5C6.40001 6.9 6.10001 7.4 6.10001 8C6.10001 9 6.80001 9.8 7.80001 10C8.30001 11.6 9.00001 13.2 9.70001 14.7C7.10001 13.2 4.70001 11.5 2.40001 9.5C2.20001 10.3 2.10001 11.1 2.10001 11.9C4.60001 13.9 7.30001 15.7 10.1 17.2C10.2 18.2 11 19 12 19C12.6 20 13.2 20.9 13.9 21.8C14.6 21.7 15.3 21.5 15.9 21.2C15.4 20.5 14.9 19.8 14.4 19.1C15.5 19.5 16.5 19.9 17.6 20.2C18.3 19.8 18.9 19.2 19.4 18.6C17.6 18.1 15.7 17.5 14 16.7C13.9 15.8 13.1 15 12 15Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-title">Landing Page</span>
						</a>
					</div>
					<div class="menu-item">
						<div class="menu-content pt-8 pb-2">
							<span class="menu-section text-muted text-uppercase fs-8 ls-1">Crafted</span>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z" fill="black" />
										<path d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z" fill="black" />
										<path opacity="0.3" d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z" fill="black" />
										<path opacity="0.3" d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-title">Pages</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Profile</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/profile/overview.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Overview</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/profile/projects.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Projects</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/profile/campaigns.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Campaigns</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/profile/documents.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Documents</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/profile/connections.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Connections</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/profile/activity.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Activity</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Projects</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/projects/list.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">My Projects</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/projects/project.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">View Project</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/projects/targets.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Targets</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/projects/budget.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Budget</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/projects/users.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Users</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/projects/files.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Files</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/projects/activity.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Activity</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/projects/settings.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Settings</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Wizards</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/wizards/horizontal.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Horizontal</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/wizards/vertical.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Vertical</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Search</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/search/horizontal.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Horizontal</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/search/vertical.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Vertical</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Blog</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/blog/home.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Blog Home</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/blog/post.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Blog Post</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Company</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/company/about.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">About Us</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/company/pricing.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Pricing</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/company/contact.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Contact Us</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/company/team.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Our Team</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/company/licenses.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Licenses</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/company/sitemap.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sitemap</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Careers</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/careers/list.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Careers List</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/careers/apply.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Careers Apply</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">FAQ</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/faq/classic.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Classic</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/pages/faq/extended.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Extended</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z" fill="black" />
										<path d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-title">Account</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/account/overview.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Overview</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/account/settings.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Settings</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/account/security.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Security</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/account/billing.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Billing</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/account/statements.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Statements</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/account/referrals.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Referrals</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/account/api-keys.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">API Keys</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/technology/teh004.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M21 10.7192H3C2.4 10.7192 2 11.1192 2 11.7192C2 12.3192 2.4 12.7192 3 12.7192H6V14.7192C6 18.0192 8.7 20.7192 12 20.7192C15.3 20.7192 18 18.0192 18 14.7192V12.7192H21C21.6 12.7192 22 12.3192 22 11.7192C22 11.1192 21.6 10.7192 21 10.7192Z" fill="black" />
										<path d="M11.6 21.9192C11.4 21.9192 11.2 21.8192 11 21.7192C10.6 21.4192 10.5 20.7191 10.8 20.3191C11.7 19.1191 12.3 17.8191 12.7 16.3191C12.8 15.8191 13.4 15.4192 13.9 15.6192C14.4 15.7192 14.8 16.3191 14.6 16.8191C14.2 18.5191 13.4 20.1192 12.4 21.5192C12.2 21.7192 11.9 21.9192 11.6 21.9192ZM8.7 19.7192C10.2 18.1192 11 15.9192 11 13.7192V8.71917C11 8.11917 11.4 7.71917 12 7.71917C12.6 7.71917 13 8.11917 13 8.71917V13.0192C13 13.6192 13.4 14.0192 14 14.0192C14.6 14.0192 15 13.6192 15 13.0192V8.71917C15 7.01917 13.7 5.71917 12 5.71917C10.3 5.71917 9 7.01917 9 8.71917V13.7192C9 15.4192 8.4 17.1191 7.2 18.3191C6.8 18.7191 6.9 19.3192 7.3 19.7192C7.5 19.9192 7.7 20.0192 8 20.0192C8.3 20.0192 8.5 19.9192 8.7 19.7192ZM6 16.7192C6.5 16.7192 7 16.2192 7 15.7192V8.71917C7 8.11917 7.1 7.51918 7.3 6.91918C7.5 6.41918 7.2 5.8192 6.7 5.6192C6.2 5.4192 5.59999 5.71917 5.39999 6.21917C5.09999 7.01917 5 7.81917 5 8.71917V15.7192V15.8191C5 16.3191 5.5 16.7192 6 16.7192ZM9 4.71917C9.5 4.31917 10.1 4.11918 10.7 3.91918C11.2 3.81918 11.5 3.21917 11.4 2.71917C11.3 2.21917 10.7 1.91916 10.2 2.01916C9.4 2.21916 8.59999 2.6192 7.89999 3.1192C7.49999 3.4192 7.4 4.11916 7.7 4.51916C7.9 4.81916 8.2 4.91918 8.5 4.91918C8.6 4.91918 8.8 4.81917 9 4.71917ZM18.2 18.9192C18.7 17.2192 19 15.5192 19 13.7192V8.71917C19 5.71917 17.1 3.1192 14.3 2.1192C13.8 1.9192 13.2 2.21917 13 2.71917C12.8 3.21917 13.1 3.81916 13.6 4.01916C15.6 4.71916 17 6.61917 17 8.71917V13.7192C17 15.3192 16.8 16.8191 16.3 18.3191C16.1 18.8191 16.4 19.4192 16.9 19.6192C17 19.6192 17.1 19.6192 17.2 19.6192C17.7 19.6192 18 19.3192 18.2 18.9192Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-title">Authentication</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Basic Flow</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/authentication/flows/basic/sign-in.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sign-in</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/authentication/flows/basic/sign-up.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sign-up</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/authentication/flows/basic/two-steps.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Two-steps</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/authentication/flows/basic/password-reset.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Password Reset</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/authentication/flows/basic/new-password.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">New Password</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Aside Flow</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/authentication/flows/aside/sign-in.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sign-in</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/authentication/flows/aside/sign-up.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sign-up</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/authentication/flows/aside/two-steps.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Two-steps</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/authentication/flows/aside/password-reset.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Password Reset</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/authentication/flows/aside/new-password.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">New Password</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Dark Flow</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/authentication/flows/dark/sign-in.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sign-in</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/authentication/flows/dark/sign-up.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Sign-up</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/authentication/flows/dark/two-steps.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Two-steps</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/authentication/flows/dark/password-reset.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Password Reset</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/authentication/flows/dark/new-password.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">New Password</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/authentication/extended/multi-steps-sign-up.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Multi-steps Sign-up</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/authentication/extended/free-trial-sign-up.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Free Trial Sign-up</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/authentication/extended/coming-soon.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Coming Soon</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/authentication/general/welcome.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Welcome Message</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/authentication/general/verify-email.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Verify Email</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/authentication/general/password-confirmation.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Password Confirmation</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/authentication/general/deactivation.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Account Deactivation</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/authentication/general/error-404.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Error 404</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/authentication/general/error-500.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Error 500</span>
								</a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Email Templates</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/authentication/email/verify-email.html" target="blank">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Verify Email</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/authentication/email/invitation.html" target="blank">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Account Invitation</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/authentication/email/password-reset.html" target="blank">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Password Reset</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/authentication/email/password-change.html" target="blank">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Password Changed</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/art/art009.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M21 18.3V4H20H5C4.4 4 4 4.4 4 5V20C10.9 20 16.7 15.6 19 9.5V18.3C18.4 18.6 18 19.3 18 20C18 21.1 18.9 22 20 22C21.1 22 22 21.1 22 20C22 19.3 21.6 18.6 21 18.3Z" fill="black" />
										<path d="M22 4C22 2.9 21.1 2 20 2C18.9 2 18 2.9 18 4C18 4.7 18.4 5.29995 18.9 5.69995C18.1 12.6 12.6 18.2 5.70001 18.9C5.30001 18.4 4.7 18 4 18C2.9 18 2 18.9 2 20C2 21.1 2.9 22 4 22C4.8 22 5.39999 21.6 5.79999 20.9C13.8 20.1 20.1 13.7 20.9 5.80005C21.6 5.40005 22 4.8 22 4Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-title">Modals</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">General</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/modals/general/invite-friends.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Invite Friends</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/modals/general/view-users.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">View Users</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/modals/general/upgrade-plan.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Upgrade Plan</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/modals/general/share-earn.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Share &amp; Earn</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Forms</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/modals/forms/new-target.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">New Target</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/modals/forms/new-card.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">New Card</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/modals/forms/new-address.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">New Address</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/modals/forms/create-api-key.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Create API Key</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Wizards</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/modals/wizards/two-factor-authentication.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Two Factor Auth</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/modals/wizards/create-app.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Create App</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/modals/wizards/create-account.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Create Account</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/modals/wizards/create-project.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Create Project</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/modals/wizards/offer-a-deal.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Offer a Deal</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Search</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/modals/search/users.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Users</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/modals/search/select-location.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Select Location</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<rect x="2" y="2" width="9" height="9" rx="2" fill="black" />
										<rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black" />
										<rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black" />
										<rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-title">Widgets</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion menu-active-bg">
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/widgets/lists.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Lists</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/widgets/statistics.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Statistics</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/widgets/charts.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Charts</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/widgets/mixed.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Mixed</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/widgets/tables.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Tables</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/widgets/feeds.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Feeds</span>
								</a>
							</div>
						</div>
					</div>
					<div class="menu-item">
						<div class="menu-content pt-8 pb-2">
							<span class="menu-section text-muted text-uppercase fs-8 ls-1">Apps</span>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z" fill="black" />
										<path d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-title">Customers</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/apps/customers/getting-started.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Getting Started</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/apps/customers/list.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Customer Listing</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/apps/customers/view.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Customer Details</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="black" />
										<path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="black" />
										<path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-title">Subscriptions</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/apps/subscriptions/getting-started.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Getting Started</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/apps/subscriptions/list.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Subscription List</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/apps/subscriptions/add.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Add Subscription</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/apps/subscriptions/view.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">View Subscription</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M22 7H2V11H22V7Z" fill="black" />
										<path opacity="0.3" d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-title">Invoice Manager</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">View Invoices</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion menu-active-bg">
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/apps/invoices/view/invoice-1.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Invoice 1</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/apps/invoices/view/invoice-2.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Invoice 2</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/apps/invoices/create.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Create Invoice</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
						<span class="menu-link">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/general/gen051.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="black" />
										<path d="M14.854 11.321C14.7568 11.2282 14.6388 11.1818 14.4998 11.1818H14.3333V10.2272C14.3333 9.61741 14.1041 9.09378 13.6458 8.65628C13.1875 8.21876 12.639 8 12 8C11.361 8 10.8124 8.21876 10.3541 8.65626C9.89574 9.09378 9.66663 9.61739 9.66663 10.2272V11.1818H9.49999C9.36115 11.1818 9.24306 11.2282 9.14583 11.321C9.0486 11.4138 9 11.5265 9 11.6591V14.5227C9 14.6553 9.04862 14.768 9.14583 14.8609C9.24306 14.9536 9.36115 15 9.49999 15H14.5C14.6389 15 14.7569 14.9536 14.8542 14.8609C14.9513 14.768 15 14.6553 15 14.5227V11.6591C15.0001 11.5265 14.9513 11.4138 14.854 11.321ZM13.3333 11.1818H10.6666V10.2272C10.6666 9.87594 10.7969 9.57597 11.0573 9.32743C11.3177 9.07886 11.6319 8.9546 12 8.9546C12.3681 8.9546 12.6823 9.07884 12.9427 9.32743C13.2031 9.57595 13.3333 9.87594 13.3333 10.2272V11.1818Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-title">User Management</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Users</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/apps/user-management/users/list.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Users List</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/apps/user-management/users/view.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">View User</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Roles</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/apps/user-management/roles/list.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Roles List</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/apps/user-management/roles/view.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">View Role</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/apps/user-management/permissions.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Permissions</span>
								</a>
							</div>
						</div>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
						<span class="menu-link">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z" fill="black" />
										<path opacity="0.3" d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-title">Support Center</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/apps/support-center/overview.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Overview</span>
								</a>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Tickets</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/apps/support-center/tickets/list.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Tickets List</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/apps/support-center/tickets/view.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">View Ticket</span>
										</a>
									</div>
								</div>
							</div>
							<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
								<span class="menu-link">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Tutorials</span>
									<span class="menu-arrow"></span>
								</span>
								<div class="menu-sub menu-sub-accordion">
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/apps/support-center/tutorials/list.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Tutorials List</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="../../demo8/dist/apps/support-center/tutorials/post.html">
											<span class="menu-bullet">
												<span class="bullet bullet-dot"></span>
											</span>
											<span class="menu-title">Tutorial Post</span>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/apps/support-center/faq.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">FAQ</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/apps/support-center/licenses.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Licenses</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/apps/support-center/contact.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Contact Us</span>
								</a>
							</div>
						</div>
					</div>
					<div class="menu-item">
						<a class="menu-link" href="../../demo8/dist/apps/calendar.html">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z" fill="black" />
										<path d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z" fill="black" />
										<path d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-title">Calendar</span>
						</a>
					</div>
					<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
						<span class="menu-link">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="black" />
										<rect x="6" y="12" width="7" height="2" rx="1" fill="black" />
										<rect x="6" y="7" width="12" height="2" rx="1" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-title">Chat</span>
							<span class="menu-arrow"></span>
						</span>
						<div class="menu-sub menu-sub-accordion">
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/apps/chat/private.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Private Chat</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/apps/chat/group.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Group Chat</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="../../demo8/dist/apps/chat/drawer.html">
									<span class="menu-bullet">
										<span class="bullet bullet-dot"></span>
									</span>
									<span class="menu-title">Drawer Chat</span>
								</a>
							</div>
						</div>
					</div>
					<div class="menu-item">
						<div class="menu-content pt-8 pb-0">
							<span class="menu-section text-muted text-uppercase fs-8 ls-1">Layout</span>
						</div>
					</div>
					<div class="menu-item">
						<a class="menu-link" href="https://preview.keenthemes.com/metronic8/demo8/layout-builder.html" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z" fill="black" />
										<path opacity="0.3" d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-title">Layout Builder</span>
						</a>
					</div>
					<div class="menu-item">
						<div class="menu-content">
							<div class="separator mx-1 my-4"></div>
						</div>
					</div>
					<div class="menu-item">
						<a class="menu-link" href="../../demo8/dist/documentation/getting-started/changelog.html">
							<span class="menu-icon">
								<!--begin::Svg Icon | path: icons/duotune/coding/cod003.svg-->
								<span class="svg-icon svg-icon-2">
									<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
										<path d="M16.95 18.9688C16.75 18.9688 16.55 18.8688 16.35 18.7688C15.85 18.4688 15.75 17.8688 16.05 17.3688L19.65 11.9688L16.05 6.56876C15.75 6.06876 15.85 5.46873 16.35 5.16873C16.85 4.86873 17.45 4.96878 17.75 5.46878L21.75 11.4688C21.95 11.7688 21.95 12.2688 21.75 12.5688L17.75 18.5688C17.55 18.7688 17.25 18.9688 16.95 18.9688ZM7.55001 18.7688C8.05001 18.4688 8.15 17.8688 7.85 17.3688L4.25001 11.9688L7.85 6.56876C8.15 6.06876 8.05001 5.46873 7.55001 5.16873C7.05001 4.86873 6.45 4.96878 6.15 5.46878L2.15 11.4688C1.95 11.7688 1.95 12.2688 2.15 12.5688L6.15 18.5688C6.35 18.8688 6.65 18.9688 6.95 18.9688C7.15 18.9688 7.35001 18.8688 7.55001 18.7688Z" fill="black" />
										<path opacity="0.3" d="M10.45 18.9687C10.35 18.9687 10.25 18.9687 10.25 18.9687C9.75 18.8687 9.35 18.2688 9.55 17.7688L12.55 5.76878C12.65 5.26878 13.25 4.8687 13.75 5.0687C14.25 5.1687 14.65 5.76878 14.45 6.26878L11.45 18.2688C11.35 18.6688 10.85 18.9687 10.45 18.9687Z" fill="black" />
									</svg>
								</span>
								<!--end::Svg Icon-->
							</span>
							<span class="menu-title">Changelog v8.0.24</span>
						</a>
					</div>
				</div>
				<!--end::Menu-->
			</div>
			<!--end::Aside Menu-->
		</div>
		<!--end::Aside menu-->
		
	</div>


@yield('content')
		
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--begin::Footer-->
<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
	<!--begin::Container-->
	<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
		<!--begin::Copyright-->
		<div class="text-dark order-2 order-md-1">
			<span class="text-muted fw-bold me-1">2021©</span>
			<a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
		</div>
		<!--end::Copyright-->
		<!--begin::Menu-->
		<ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
			<li class="menu-item">
				<a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
			</li>
			<li class="menu-item">
				<a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
			</li>
			<li class="menu-item">
				<a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link px-2">Purchase</a>
			</li>
		</ul>
		<!--end::Menu-->
	</div>
	<!--end::Container-->
</div>
<!--end::Footer-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
		<script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
		<!--end::Global Javascript Bundle-->
		<script  src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
		<!--begin::Page Vendors Javascript(used by this page)-->
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
		<script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
		<script src="{{ asset('assets/js/custom/modals/create-app.js') }}"></script>
		<script src="{{ asset('') }}"></script>
		@yield('scripts')
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>