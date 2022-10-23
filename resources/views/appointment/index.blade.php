@extends('layouts.master')
@section('content')
    <div id="kt_content_container" class="container-xxl mt-6">

        <body id="kt_body" class="header-tablet-and-mobile-fixed aside-enabled" data-kt-scrolltop="on" style="">
            <!--begin::Main-->
            <!--begin::Root-->
            <div class="d-flex flex-column flex-root">
                <!--begin::Page-->
                <div class="page d-flex flex-row flex-column-fluid">
                    <!--begin::Aside-->

                    <!--end::Aside-->
                    <!--begin::Wrapper-->
                    <div class=" d-flex flex-column flex-row-fluid" id="kt_wrapper">
                        <!--begin::Header-->
                        <div id="kt_header" style="" class="header align-items-stretch">
                            <!--begin::Brand-->
                            <div class="header-brand">
                                <!--begin::Logo-->
                                <a href="../../demo8/dist/index.html">
                                    <img alt="Logo" src="assets/media/logos/logo-1-dark.svg"
                                        class="h-25px h-lg-25px">
                                </a>
                                <!--end::Logo-->
                                <!--begin::Aside minimize-->
                                <div id="kt_aside_toggle"
                                    class="btn btn-icon w-auto px-0 btn-active-color-primary aside-minimize"
                                    data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body"
                                    data-kt-toggle-name="aside-minimize">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr092.svg-->
                                    <span class="svg-icon svg-icon-1 me-n1 minimize-default">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="8.5" y="11" width="12"
                                                height="2" rx="1" fill="black"></rect>
                                            <path
                                                d="M10.3687 11.6927L12.1244 10.2297C12.5946 9.83785 12.6268 9.12683 12.194 8.69401C11.8043 8.3043 11.1784 8.28591 10.7664 8.65206L7.84084 11.2526C7.39332 11.6504 7.39332 12.3496 7.84084 12.7474L10.7664 15.3479C11.1784 15.7141 11.8043 15.6957 12.194 15.306C12.6268 14.8732 12.5946 14.1621 12.1244 13.7703L10.3687 12.3073C10.1768 12.1474 10.1768 11.8526 10.3687 11.6927Z"
                                                fill="black"></path>
                                            <path opacity="0.5"
                                                d="M16 5V6C16 6.55228 15.5523 7 15 7C14.4477 7 14 6.55228 14 6C14 5.44772 13.5523 5 13 5H6C5.44771 5 5 5.44772 5 6V18C5 18.5523 5.44771 19 6 19H13C13.5523 19 14 18.5523 14 18C14 17.4477 14.4477 17 15 17C15.5523 17 16 17.4477 16 18V19C16 20.1046 15.1046 21 14 21H5C3.89543 21 3 20.1046 3 19V5C3 3.89543 3.89543 3 5 3H14C15.1046 3 16 3.89543 16 5Z"
                                                fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
                                    <span class="svg-icon svg-icon-1 minimize-active">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" width="12" height="2" rx="1"
                                                transform="matrix(-1 0 0 1 15.5 11)" fill="black"></rect>
                                            <path
                                                d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z"
                                                fill="black"></path>
                                            <path
                                                d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z"
                                                fill="#C4C4C4"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </div>
                                <!--end::Aside minimize-->
                                <!--begin::Aside toggle-->
                                <div class="d-flex align-items-center d-lg-none ms-n3 me-1" title="Show aside menu">
                                    <div class="btn btn-icon btn-active-color-primary w-30px h-30px"
                                        id="kt_aside_mobile_toggle">
                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z"
                                                    fill="black"></path>
                                                <path opacity="0.3"
                                                    d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z"
                                                    fill="black"></path>
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
                                <div
                                    class="container-fluid py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
                                    <!--begin::Page title-->
                                    <div class="page-title d-flex flex-column me-5">
                                        <!--begin::Title-->
                                        <h1 class="d-flex flex-column text-dark fw-bolder fs-3 mb-0">Calendar</h1>
                                        <!--end::Title-->
                                        <!--begin::Breadcrumb-->
                                        <ul class="breadcrumb breadcrumb-separatorless fw-bold fs-7 pt-1">
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-muted">
                                                <a href="../../demo8/dist/index.html"
                                                    class="text-muted text-hover-primary">Home</a>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item">
                                                <span class="bullet bg-gray-200 w-5px h-2px"></span>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-dark">Calendar</li>
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
                                            <span
                                                class="fs-7 fw-bolder text-gray-700 pe-4 text-nowrap d-none d-xxl-block">Sort
                                                By:</span>
                                            <!--end::Label-->
                                            <!--begin::Select-->
                                            <select
                                                class="form-select form-select-sm form-select-solid w-100px w-xxl-125px select2-hidden-accessible"
                                                data-control="select2" data-placeholder="Latest"
                                                data-hide-search="true" data-select2-id="select2-data-7-ynxw"
                                                tabindex="-1" aria-hidden="true">
                                                <option value=""></option>
                                                <option value="1" selected="selected"
                                                    data-select2-id="select2-data-9-hw9s">Latest</option>
                                                <option value="2">In Progress</option>
                                                <option value="3">Done</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                                dir="ltr" data-select2-id="select2-data-8-4vmv"
                                                style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single form-select form-select-sm form-select-solid w-100px w-xxl-125px"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-ra19-container"
                                                        aria-controls="select2-ra19-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-ra19-container" role="textbox"
                                                            aria-readonly="true" title="Latest">Latest</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                                <div id="kt_toolbar_slider"
                                                    class="noUi-target noUi-target-primary w-75px w-xxl-150px noUi-sm noUi-ltr noUi-horizontal noUi-txt-dir-ltr">
                                                    <div class="noUi-base">
                                                        <div class="noUi-connects">
                                                            <div class="noUi-connect"
                                                                style="transform: translate(0%, 0px) scale(0.444444, 1);">
                                                            </div>
                                                        </div>
                                                        <div class="noUi-origin"
                                                            style="transform: translate(-555.556%, 0px); z-index: 4;">
                                                            <div class="noUi-handle noUi-handle-lower" data-handle="0"
                                                                tabindex="0" role="slider"
                                                                aria-orientation="horizontal" aria-valuemin="1.0"
                                                                aria-valuemax="10.0" aria-valuenow="5.0"
                                                                aria-valuetext="5.0">
                                                                <div class="noUi-touch-area"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <span id="kt_toolbar_slider_value"
                                                    class="d-flex flex-center bg-light-primary rounded-circle w-35px h-35px ms-4 fs-7 fw-bolder text-primary"
                                                    data-bs-toggle="tooltip" data-bs-placement="top" title=""
                                                    data-bs-original-title="Set impact level"
                                                    aria-label="Set impact level">5.0</span>
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
                                            <span class="fs-7 text-gray-700 fw-bolder pe-3 d-none d-xxl-block">Quick
                                                Tools:</span>
                                            <!--end::Label-->
                                            <!--begin::Actions-->
                                            <div class="d-flex">
                                                <!--begin::Action-->
                                                <a href="#"
                                                    class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary"
                                                    data-bs-toggle="modal" data-bs-target="#kt_modal_invite_friends">
                                                    <!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
                                                    <span class="svg-icon svg-icon-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <path opacity="0.3"
                                                                d="M22 12C22 17.5 17.5 22 12 22C6.5 22 2 17.5 2 12C2 6.5 6.5 2 12 2C17.5 2 22 6.5 22 12ZM12 7C10.3 7 9 8.3 9 10C9 11.7 10.3 13 12 13C13.7 13 15 11.7 15 10C15 8.3 13.7 7 12 7Z"
                                                                fill="black"></path>
                                                            <path
                                                                d="M12 22C14.6 22 17 21 18.7 19.4C17.9 16.9 15.2 15 12 15C8.8 15 6.09999 16.9 5.29999 19.4C6.99999 21 9.4 22 12 22Z"
                                                                fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </a>
                                                <!--end::Action-->
                                                <!--begin::Notifications-->
                                                <div class="d-flex align-items-center">
                                                    <!--begin::Menu- wrapper-->
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary"
                                                        data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                                        data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen022.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M11.2929 2.70711C11.6834 2.31658 12.3166 2.31658 12.7071 2.70711L15.2929 5.29289C15.6834 5.68342 15.6834 6.31658 15.2929 6.70711L12.7071 9.29289C12.3166 9.68342 11.6834 9.68342 11.2929 9.29289L8.70711 6.70711C8.31658 6.31658 8.31658 5.68342 8.70711 5.29289L11.2929 2.70711Z"
                                                                    fill="black"></path>
                                                                <path
                                                                    d="M11.2929 14.7071C11.6834 14.3166 12.3166 14.3166 12.7071 14.7071L15.2929 17.2929C15.6834 17.6834 15.6834 18.3166 15.2929 18.7071L12.7071 21.2929C12.3166 21.6834 11.6834 21.6834 11.2929 21.2929L8.70711 18.7071C8.31658 18.3166 8.31658 17.6834 8.70711 17.2929L11.2929 14.7071Z"
                                                                    fill="black"></path>
                                                                <path opacity="0.3"
                                                                    d="M5.29289 8.70711C5.68342 8.31658 6.31658 8.31658 6.70711 8.70711L9.29289 11.2929C9.68342 11.6834 9.68342 12.3166 9.29289 12.7071L6.70711 15.2929C6.31658 15.6834 5.68342 15.6834 5.29289 15.2929L2.70711 12.7071C2.31658 12.3166 2.31658 11.6834 2.70711 11.2929L5.29289 8.70711Z"
                                                                    fill="black"></path>
                                                                <path opacity="0.3"
                                                                    d="M17.2929 8.70711C17.6834 8.31658 18.3166 8.31658 18.7071 8.70711L21.2929 11.2929C21.6834 11.6834 21.6834 12.3166 21.2929 12.7071L18.7071 15.2929C18.3166 15.6834 17.6834 15.6834 17.2929 15.2929L14.7071 12.7071C14.3166 12.3166 14.3166 11.6834 14.7071 11.2929L17.2929 8.70711Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column w-350px w-lg-375px"
                                                        data-kt-menu="true">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex flex-column bgi-no-repeat rounded-top"
                                                            style="background-image:url('assets/media/misc/pattern-1.jpg')">
                                                            <!--begin::Title-->
                                                            <h3 class="text-white fw-bold px-9 mt-10 mb-6">Notifications
                                                                <span class="fs-8 opacity-75 ps-3">24 reports</span>
                                                            </h3>
                                                            <!--end::Title-->
                                                            <!--begin::Tabs-->
                                                            <ul
                                                                class="nav nav-line-tabs nav-line-tabs-2x nav-stretch fw-bold px-9">
                                                                <li class="nav-item">
                                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                                                        data-bs-toggle="tab"
                                                                        href="#kt_topbar_notifications_1">Alerts</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4 active"
                                                                        data-bs-toggle="tab"
                                                                        href="#kt_topbar_notifications_2">Updates</a>
                                                                </li>
                                                                <li class="nav-item">
                                                                    <a class="nav-link text-white opacity-75 opacity-state-100 pb-4"
                                                                        data-bs-toggle="tab"
                                                                        href="#kt_topbar_notifications_3">Logs</a>
                                                                </li>
                                                            </ul>
                                                            <!--end::Tabs-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin::Tab content-->
                                                        <div class="tab-content">
                                                            <!--begin::Tab panel-->
                                                            <div class="tab-pane fade" id="kt_topbar_notifications_1"
                                                                role="tabpanel">
                                                                <!--begin::Items-->
                                                                <div class="scroll-y mh-325px my-5 px-8">
                                                                    <!--begin::Item-->
                                                                    <div class="d-flex flex-stack py-4">
                                                                        <!--begin::Section-->
                                                                        <div class="d-flex align-items-center">
                                                                            <!--begin::Symbol-->
                                                                            <div class="symbol symbol-35px me-4">
                                                                                <span
                                                                                    class="symbol-label bg-light-primary">
                                                                                    <!--begin::Svg Icon | path: icons/duotune/technology/teh008.svg-->
                                                                                    <span
                                                                                        class="svg-icon svg-icon-2 svg-icon-primary">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24"
                                                                                            height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none">
                                                                                            <path opacity="0.3"
                                                                                                d="M11 6.5C11 9 9 11 6.5 11C4 11 2 9 2 6.5C2 4 4 2 6.5 2C9 2 11 4 11 6.5ZM17.5 2C15 2 13 4 13 6.5C13 9 15 11 17.5 11C20 11 22 9 22 6.5C22 4 20 2 17.5 2ZM6.5 13C4 13 2 15 2 17.5C2 20 4 22 6.5 22C9 22 11 20 11 17.5C11 15 9 13 6.5 13ZM17.5 13C15 13 13 15 13 17.5C13 20 15 22 17.5 22C20 22 22 20 22 17.5C22 15 20 13 17.5 13Z"
                                                                                                fill="black"></path>
                                                                                            <path
                                                                                                d="M17.5 16C17.5 16 17.4 16 17.5 16L16.7 15.3C16.1 14.7 15.7 13.9 15.6 13.1C15.5 12.4 15.5 11.6 15.6 10.8C15.7 9.99999 16.1 9.19998 16.7 8.59998L17.4 7.90002H17.5C18.3 7.90002 19 7.20002 19 6.40002C19 5.60002 18.3 4.90002 17.5 4.90002C16.7 4.90002 16 5.60002 16 6.40002V6.5L15.3 7.20001C14.7 7.80001 13.9 8.19999 13.1 8.29999C12.4 8.39999 11.6 8.39999 10.8 8.29999C9.99999 8.19999 9.20001 7.80001 8.60001 7.20001L7.89999 6.5V6.40002C7.89999 5.60002 7.19999 4.90002 6.39999 4.90002C5.59999 4.90002 4.89999 5.60002 4.89999 6.40002C4.89999 7.20002 5.59999 7.90002 6.39999 7.90002H6.5L7.20001 8.59998C7.80001 9.19998 8.19999 9.99999 8.29999 10.8C8.39999 11.5 8.39999 12.3 8.29999 13.1C8.19999 13.9 7.80001 14.7 7.20001 15.3L6.5 16H6.39999C5.59999 16 4.89999 16.7 4.89999 17.5C4.89999 18.3 5.59999 19 6.39999 19C7.19999 19 7.89999 18.3 7.89999 17.5V17.4L8.60001 16.7C9.20001 16.1 9.99999 15.7 10.8 15.6C11.5 15.5 12.3 15.5 13.1 15.6C13.9 15.7 14.7 16.1 15.3 16.7L16 17.4V17.5C16 18.3 16.7 19 17.5 19C18.3 19 19 18.3 19 17.5C19 16.7 18.3 16 17.5 16Z"
                                                                                                fill="black"></path>
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </div>
                                                                            <!--end::Symbol-->
                                                                            <!--begin::Title-->
                                                                            <div class="mb-0 me-2">
                                                                                <a href="#"
                                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project
                                                                                    Alice</a>
                                                                                <div class="text-gray-400 fs-7">Phase 1
                                                                                    development</div>
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
                                                                                <span
                                                                                    class="symbol-label bg-light-danger">
                                                                                    <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                                                                    <span
                                                                                        class="svg-icon svg-icon-2 svg-icon-danger">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24"
                                                                                            height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none">
                                                                                            <rect opacity="0.3"
                                                                                                x="2"
                                                                                                y="2"
                                                                                                width="20"
                                                                                                height="20"
                                                                                                rx="10"
                                                                                                fill="black"></rect>
                                                                                            <rect x="11"
                                                                                                y="14"
                                                                                                width="7"
                                                                                                height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(-90 11 14)"
                                                                                                fill="black"></rect>
                                                                                            <rect x="11"
                                                                                                y="17"
                                                                                                width="2"
                                                                                                height="2"
                                                                                                rx="1"
                                                                                                transform="rotate(-90 11 17)"
                                                                                                fill="black"></rect>
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </div>
                                                                            <!--end::Symbol-->
                                                                            <!--begin::Title-->
                                                                            <div class="mb-0 me-2">
                                                                                <a href="#"
                                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bolder">HR
                                                                                    Confidential</a>
                                                                                <div class="text-gray-400 fs-7">
                                                                                    Confidential staff documents</div>
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
                                                                                <span
                                                                                    class="symbol-label bg-light-warning">
                                                                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                                                                    <span
                                                                                        class="svg-icon svg-icon-2 svg-icon-warning">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24"
                                                                                            height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none">
                                                                                            <path opacity="0.3"
                                                                                                d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                                                                fill="black"></path>
                                                                                            <path
                                                                                                d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                                                                fill="black"></path>
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </div>
                                                                            <!--end::Symbol-->
                                                                            <!--begin::Title-->
                                                                            <div class="mb-0 me-2">
                                                                                <a href="#"
                                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bolder">Company
                                                                                    HR</a>
                                                                                <div class="text-gray-400 fs-7">Corporeate
                                                                                    staff profiles</div>
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
                                                                                <span
                                                                                    class="symbol-label bg-light-success">
                                                                                    <!--begin::Svg Icon | path: icons/duotune/files/fil023.svg-->
                                                                                    <span
                                                                                        class="svg-icon svg-icon-2 svg-icon-success">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24"
                                                                                            height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none">
                                                                                            <path opacity="0.3"
                                                                                                d="M5 15C3.3 15 2 13.7 2 12C2 10.3 3.3 9 5 9H5.10001C5.00001 8.7 5 8.3 5 8C5 5.2 7.2 3 10 3C11.9 3 13.5 4 14.3 5.5C14.8 5.2 15.4 5 16 5C17.7 5 19 6.3 19 8C19 8.4 18.9 8.7 18.8 9C18.9 9 18.9 9 19 9C20.7 9 22 10.3 22 12C22 13.7 20.7 15 19 15H5ZM5 12.6H13L9.7 9.29999C9.3 8.89999 8.7 8.89999 8.3 9.29999L5 12.6Z"
                                                                                                fill="black"></path>
                                                                                            <path
                                                                                                d="M17 17.4V12C17 11.4 16.6 11 16 11C15.4 11 15 11.4 15 12V17.4H17Z"
                                                                                                fill="black"></path>
                                                                                            <path opacity="0.3"
                                                                                                d="M12 17.4H20L16.7 20.7C16.3 21.1 15.7 21.1 15.3 20.7L12 17.4Z"
                                                                                                fill="black"></path>
                                                                                            <path
                                                                                                d="M8 12.6V18C8 18.6 8.4 19 9 19C9.6 19 10 18.6 10 18V12.6H8Z"
                                                                                                fill="black"></path>
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </div>
                                                                            <!--end::Symbol-->
                                                                            <!--begin::Title-->
                                                                            <div class="mb-0 me-2">
                                                                                <a href="#"
                                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project
                                                                                    Redux</a>
                                                                                <div class="text-gray-400 fs-7">New
                                                                                    frontend admin theme</div>
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
                                                                                <span
                                                                                    class="symbol-label bg-light-primary">
                                                                                    <!--begin::Svg Icon | path: icons/duotune/maps/map001.svg-->
                                                                                    <span
                                                                                        class="svg-icon svg-icon-2 svg-icon-primary">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24"
                                                                                            height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none">
                                                                                            <path opacity="0.3"
                                                                                                d="M6 22H4V3C4 2.4 4.4 2 5 2C5.6 2 6 2.4 6 3V22Z"
                                                                                                fill="black"></path>
                                                                                            <path
                                                                                                d="M18 14H4V4H18C18.8 4 19.2 4.9 18.7 5.5L16 9L18.8 12.5C19.3 13.1 18.8 14 18 14Z"
                                                                                                fill="black"></path>
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </div>
                                                                            <!--end::Symbol-->
                                                                            <!--begin::Title-->
                                                                            <div class="mb-0 me-2">
                                                                                <a href="#"
                                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bolder">Project
                                                                                    Breafing</a>
                                                                                <div class="text-gray-400 fs-7">Product
                                                                                    launch status update</div>
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
                                                                                    <span
                                                                                        class="svg-icon svg-icon-2 svg-icon-info">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24"
                                                                                            height="24"
                                                                                            viewBox="0 0 24 24"
                                                                                            fill="none">
                                                                                            <path opacity="0.3"
                                                                                                d="M22 5V19C22 19.6 21.6 20 21 20H19.5L11.9 12.4C11.5 12 10.9 12 10.5 12.4L3 20C2.5 20 2 19.5 2 19V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5ZM7.5 7C6.7 7 6 7.7 6 8.5C6 9.3 6.7 10 7.5 10C8.3 10 9 9.3 9 8.5C9 7.7 8.3 7 7.5 7Z"
                                                                                                fill="black"></path>
                                                                                            <path
                                                                                                d="M19.1 10C18.7 9.60001 18.1 9.60001 17.7 10L10.7 17H2V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V12.9L19.1 10Z"
                                                                                                fill="black"></path>
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </div>
                                                                            <!--end::Symbol-->
                                                                            <!--begin::Title-->
                                                                            <div class="mb-0 me-2">
                                                                                <a href="#"
                                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bolder">Banner
                                                                                    Assets</a>
                                                                                <div class="text-gray-400 fs-7">Collection
                                                                                    of banner images</div>
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
                                                                                <span
                                                                                    class="symbol-label bg-light-warning">
                                                                                    <!--begin::Svg Icon | path: icons/duotune/art/art002.svg-->
                                                                                    <span
                                                                                        class="svg-icon svg-icon-2 svg-icon-warning">
                                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                                            width="24"
                                                                                            height="25"
                                                                                            viewBox="0 0 24 25"
                                                                                            fill="none">
                                                                                            <path opacity="0.3"
                                                                                                d="M8.9 21L7.19999 22.6999C6.79999 23.0999 6.2 23.0999 5.8 22.6999L4.1 21H8.9ZM4 16.0999L2.3 17.8C1.9 18.2 1.9 18.7999 2.3 19.1999L4 20.9V16.0999ZM19.3 9.1999L15.8 5.6999C15.4 5.2999 14.8 5.2999 14.4 5.6999L9 11.0999V21L19.3 10.6999C19.7 10.2999 19.7 9.5999 19.3 9.1999Z"
                                                                                                fill="black"></path>
                                                                                            <path
                                                                                                d="M21 15V20C21 20.6 20.6 21 20 21H11.8L18.8 14H20C20.6 14 21 14.4 21 15ZM10 21V4C10 3.4 9.6 3 9 3H4C3.4 3 3 3.4 3 4V21C3 21.6 3.4 22 4 22H9C9.6 22 10 21.6 10 21ZM7.5 18.5C7.5 19.1 7.1 19.5 6.5 19.5C5.9 19.5 5.5 19.1 5.5 18.5C5.5 17.9 5.9 17.5 6.5 17.5C7.1 17.5 7.5 17.9 7.5 18.5Z"
                                                                                                fill="black"></path>
                                                                                        </svg>
                                                                                    </span>
                                                                                    <!--end::Svg Icon-->
                                                                                </span>
                                                                            </div>
                                                                            <!--end::Symbol-->
                                                                            <!--begin::Title-->
                                                                            <div class="mb-0 me-2">
                                                                                <a href="#"
                                                                                    class="fs-6 text-gray-800 text-hover-primary fw-bolder">Icon
                                                                                    Assets</a>
                                                                                <div class="text-gray-400 fs-7">Collection
                                                                                    of SVG icons</div>
                                                                            </div>
                                                                            <!--end::Title-->
                                                                        </div>
                                                                        <!--end::Section-->
                                                                        <!--begin::Label-->
                                                                        <span class="badge badge-light fs-8">20
                                                                            March</span>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Item-->
                                                                </div>
                                                                <!--end::Items-->
                                                                <!--begin::View more-->
                                                                <div class="py-3 text-center border-top">
                                                                    <a href="../../demo8/dist/pages/profile/activity.html"
                                                                        class="btn btn-color-gray-600 btn-active-color-primary">View
                                                                        All
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                        <span class="svg-icon svg-icon-5">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <rect opacity="0.5" x="18"
                                                                                    y="13" width="13"
                                                                                    height="2" rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black"></rect>
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
                                                                </div>
                                                                <!--end::View more-->
                                                            </div>
                                                            <!--end::Tab panel-->
                                                            <!--begin::Tab panel-->
                                                            <div class="tab-pane fade show active"
                                                                id="kt_topbar_notifications_2" role="tabpanel">
                                                                <!--begin::Wrapper-->
                                                                <div class="d-flex flex-column px-9">
                                                                    <!--begin::Section-->
                                                                    <div class="pt-10 pb-0">
                                                                        <!--begin::Title-->
                                                                        <h3 class="text-dark text-center fw-bolder">Get
                                                                            Pro Access</h3>
                                                                        <!--end::Title-->
                                                                        <!--begin::Text-->
                                                                        <div
                                                                            class="text-center text-gray-600 fw-bold pt-1">
                                                                            Outlines keep you honest. They stoping you from
                                                                            amazing poorly about drive</div>
                                                                        <!--end::Text-->
                                                                        <!--begin::Action-->
                                                                        <div class="text-center mt-5 mb-9">
                                                                            <a href="#"
                                                                                class="btn btn-sm btn-primary px-6"
                                                                                data-bs-toggle="modal"
                                                                                data-bs-target="#kt_modal_upgrade_plan">Upgrade</a>
                                                                        </div>
                                                                        <!--end::Action-->
                                                                    </div>
                                                                    <!--end::Section-->
                                                                    <!--begin::Illustration-->
                                                                    <div class="text-center px-4">
                                                                        <img class="mw-100 mh-200px" alt="image"
                                                                            src="assets/media/illustrations/sketchy-1/1.png">
                                                                    </div>
                                                                    <!--end::Illustration-->
                                                                </div>
                                                                <!--end::Wrapper-->
                                                            </div>
                                                            <!--end::Tab panel-->
                                                            <!--begin::Tab panel-->
                                                            <div class="tab-pane fade" id="kt_topbar_notifications_3"
                                                                role="tabpanel">
                                                                <!--begin::Items-->
                                                                <div class="scroll-y mh-325px my-5 px-8">
                                                                    <!--begin::Item-->
                                                                    <div class="d-flex flex-stack py-4">
                                                                        <!--begin::Section-->
                                                                        <div class="d-flex align-items-center me-2">
                                                                            <!--begin::Code-->
                                                                            <span
                                                                                class="w-70px badge badge-light-success me-4">200
                                                                                OK</span>
                                                                            <!--end::Code-->
                                                                            <!--begin::Title-->
                                                                            <a href="#"
                                                                                class="text-gray-800 text-hover-primary fw-bold">New
                                                                                order</a>
                                                                            <!--end::Title-->
                                                                        </div>
                                                                        <!--end::Section-->
                                                                        <!--begin::Label-->
                                                                        <span class="badge badge-light fs-8">Just
                                                                            now</span>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Item-->
                                                                    <!--begin::Item-->
                                                                    <div class="d-flex flex-stack py-4">
                                                                        <!--begin::Section-->
                                                                        <div class="d-flex align-items-center me-2">
                                                                            <!--begin::Code-->
                                                                            <span
                                                                                class="w-70px badge badge-light-danger me-4">500
                                                                                ERR</span>
                                                                            <!--end::Code-->
                                                                            <!--begin::Title-->
                                                                            <a href="#"
                                                                                class="text-gray-800 text-hover-primary fw-bold">New
                                                                                customer</a>
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
                                                                            <span
                                                                                class="w-70px badge badge-light-success me-4">200
                                                                                OK</span>
                                                                            <!--end::Code-->
                                                                            <!--begin::Title-->
                                                                            <a href="#"
                                                                                class="text-gray-800 text-hover-primary fw-bold">Payment
                                                                                process</a>
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
                                                                            <span
                                                                                class="w-70px badge badge-light-warning me-4">300
                                                                                WRN</span>
                                                                            <!--end::Code-->
                                                                            <!--begin::Title-->
                                                                            <a href="#"
                                                                                class="text-gray-800 text-hover-primary fw-bold">Search
                                                                                query</a>
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
                                                                            <span
                                                                                class="w-70px badge badge-light-success me-4">200
                                                                                OK</span>
                                                                            <!--end::Code-->
                                                                            <!--begin::Title-->
                                                                            <a href="#"
                                                                                class="text-gray-800 text-hover-primary fw-bold">API
                                                                                connection</a>
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
                                                                            <span
                                                                                class="w-70px badge badge-light-success me-4">200
                                                                                OK</span>
                                                                            <!--end::Code-->
                                                                            <!--begin::Title-->
                                                                            <a href="#"
                                                                                class="text-gray-800 text-hover-primary fw-bold">Database
                                                                                restore</a>
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
                                                                            <span
                                                                                class="w-70px badge badge-light-warning me-4">300
                                                                                WRN</span>
                                                                            <!--end::Code-->
                                                                            <!--begin::Title-->
                                                                            <a href="#"
                                                                                class="text-gray-800 text-hover-primary fw-bold">System
                                                                                update</a>
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
                                                                            <span
                                                                                class="w-70px badge badge-light-warning me-4">300
                                                                                WRN</span>
                                                                            <!--end::Code-->
                                                                            <!--begin::Title-->
                                                                            <a href="#"
                                                                                class="text-gray-800 text-hover-primary fw-bold">Server
                                                                                OS update</a>
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
                                                                            <span
                                                                                class="w-70px badge badge-light-warning me-4">300
                                                                                WRN</span>
                                                                            <!--end::Code-->
                                                                            <!--begin::Title-->
                                                                            <a href="#"
                                                                                class="text-gray-800 text-hover-primary fw-bold">API
                                                                                rollback</a>
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
                                                                            <span
                                                                                class="w-70px badge badge-light-danger me-4">500
                                                                                ERR</span>
                                                                            <!--end::Code-->
                                                                            <!--begin::Title-->
                                                                            <a href="#"
                                                                                class="text-gray-800 text-hover-primary fw-bold">Refund
                                                                                process</a>
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
                                                                            <span
                                                                                class="w-70px badge badge-light-danger me-4">500
                                                                                ERR</span>
                                                                            <!--end::Code-->
                                                                            <!--begin::Title-->
                                                                            <a href="#"
                                                                                class="text-gray-800 text-hover-primary fw-bold">Withdrawal
                                                                                process</a>
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
                                                                            <span
                                                                                class="w-70px badge badge-light-danger me-4">500
                                                                                ERR</span>
                                                                            <!--end::Code-->
                                                                            <!--begin::Title-->
                                                                            <a href="#"
                                                                                class="text-gray-800 text-hover-primary fw-bold">Mail
                                                                                tasks</a>
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
                                                                    <a href="../../demo8/dist/pages/profile/activity.html"
                                                                        class="btn btn-color-gray-600 btn-active-color-primary">View
                                                                        All
                                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                        <span class="svg-icon svg-icon-5">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <rect opacity="0.5" x="18"
                                                                                    y="13" width="13"
                                                                                    height="2" rx="1"
                                                                                    transform="rotate(-180 18 13)"
                                                                                    fill="black"></rect>
                                                                                <path
                                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </a>
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
                                                    <a href="#"
                                                        class="btn btn-sm btn-icon btn-icon-muted btn-active-icon-primary"
                                                        data-kt-menu-trigger="click" data-kt-menu-attach="parent"
                                                        data-kt-menu-placement="bottom-end" data-kt-menu-flip="bottom">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen008.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M3 2H10C10.6 2 11 2.4 11 3V10C11 10.6 10.6 11 10 11H3C2.4 11 2 10.6 2 10V3C2 2.4 2.4 2 3 2Z"
                                                                    fill="black"></path>
                                                                <path opacity="0.3"
                                                                    d="M14 2H21C21.6 2 22 2.4 22 3V10C22 10.6 21.6 11 21 11H14C13.4 11 13 10.6 13 10V3C13 2.4 13.4 2 14 2Z"
                                                                    fill="black"></path>
                                                                <path opacity="0.3"
                                                                    d="M3 13H10C10.6 13 11 13.4 11 14V21C11 21.6 10.6 22 10 22H3C2.4 22 2 21.6 2 21V14C2 13.4 2.4 13 3 13Z"
                                                                    fill="black"></path>
                                                                <path opacity="0.3"
                                                                    d="M14 13H21C21.6 13 22 13.4 22 14V21C22 21.6 21.6 22 21 22H14C13.4 22 13 21.6 13 21V14C13 13.4 13.4 13 14 13Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--begin::Menu-->
                                                    <div class="menu menu-sub menu-sub-dropdown menu-column w-250px w-lg-325px"
                                                        data-kt-menu="true">
                                                        <!--begin::Heading-->
                                                        <div class="d-flex flex-column flex-center bgi-no-repeat rounded-top px-9 py-10"
                                                            style="background-image:url('assets/media/misc/pattern-1.jpg')">
                                                            <!--begin::Title-->
                                                            <h3 class="text-white fw-bold mb-3">Quick Links</h3>
                                                            <!--end::Title-->
                                                            <!--begin::Status-->
                                                            <span class="badge bg-primary py-2 px-3">25 pending
                                                                tasks</span>
                                                            <!--end::Status-->
                                                        </div>
                                                        <!--end::Heading-->
                                                        <!--begin:Nav-->
                                                        <div class="row g-0">
                                                            <!--begin:Item-->
                                                            <div class="col-6">
                                                                <a href="../../demo8/dist/pages/projects/budget.html"
                                                                    class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end border-bottom">
                                                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin009.svg-->
                                                                    <span
                                                                        class="svg-icon svg-icon-3x svg-icon-primary mb-2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <path opacity="0.3"
                                                                                d="M15.8 11.4H6C5.4 11.4 5 11 5 10.4C5 9.80002 5.4 9.40002 6 9.40002H15.8C16.4 9.40002 16.8 9.80002 16.8 10.4C16.8 11 16.3 11.4 15.8 11.4ZM15.7 13.7999C15.7 13.1999 15.3 12.7999 14.7 12.7999H6C5.4 12.7999 5 13.1999 5 13.7999C5 14.3999 5.4 14.7999 6 14.7999H14.8C15.3 14.7999 15.7 14.2999 15.7 13.7999Z"
                                                                                fill="black"></path>
                                                                            <path
                                                                                d="M18.8 15.5C18.9 15.7 19 15.9 19.1 16.1C19.2 16.7 18.7 17.2 18.4 17.6C17.9 18.1 17.3 18.4999 16.6 18.7999C15.9 19.0999 15 19.2999 14.1 19.2999C13.4 19.2999 12.7 19.2 12.1 19.1C11.5 19 11 18.7 10.5 18.5C10 18.2 9.60001 17.7999 9.20001 17.2999C8.80001 16.8999 8.49999 16.3999 8.29999 15.7999C8.09999 15.1999 7.80001 14.7 7.70001 14.1C7.60001 13.5 7.5 12.8 7.5 12.2C7.5 11.1 7.7 10.1 8 9.19995C8.3 8.29995 8.79999 7.60002 9.39999 6.90002C9.99999 6.30002 10.7 5.8 11.5 5.5C12.3 5.2 13.2 5 14.1 5C15.2 5 16.2 5.19995 17.1 5.69995C17.8 6.09995 18.7 6.6 18.8 7.5C18.8 7.9 18.6 8.29998 18.3 8.59998C18.2 8.69998 18.1 8.69993 18 8.79993C17.7 8.89993 17.4 8.79995 17.2 8.69995C16.7 8.49995 16.5 7.99995 16 7.69995C15.5 7.39995 14.9 7.19995 14.2 7.19995C13.1 7.19995 12.1 7.6 11.5 8.5C10.9 9.4 10.5 10.6 10.5 12.2C10.5 13.3 10.7 14.2 11 14.9C11.3 15.6 11.7 16.1 12.3 16.5C12.9 16.9 13.5 17 14.2 17C15 17 15.7 16.8 16.2 16.4C16.8 16 17.2 15.2 17.9 15.1C18 15 18.5 15.2 18.8 15.5Z"
                                                                                fill="black"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                    <span
                                                                        class="fs-5 fw-bold text-gray-800 mb-0">Accounting</span>
                                                                    <span class="fs-7 text-gray-400">eCommerce</span>
                                                                </a>
                                                            </div>
                                                            <!--end:Item-->
                                                            <!--begin:Item-->
                                                            <div class="col-6">
                                                                <a href="../../demo8/dist/pages/projects/settings.html"
                                                                    class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-bottom">
                                                                    <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                                                    <span
                                                                        class="svg-icon svg-icon-3x svg-icon-primary mb-2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <path
                                                                                d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                                                fill="black"></path>
                                                                            <path opacity="0.3"
                                                                                d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                                                fill="black"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                    <span
                                                                        class="fs-5 fw-bold text-gray-800 mb-0">Administration</span>
                                                                    <span class="fs-7 text-gray-400">Console</span>
                                                                </a>
                                                            </div>
                                                            <!--end:Item-->
                                                            <!--begin:Item-->
                                                            <div class="col-6">
                                                                <a href="../../demo8/dist/pages/projects/list.html"
                                                                    class="d-flex flex-column flex-center h-100 p-6 bg-hover-light border-end">
                                                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
                                                                    <span
                                                                        class="svg-icon svg-icon-3x svg-icon-primary mb-2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <path
                                                                                d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z"
                                                                                fill="black"></path>
                                                                            <path opacity="0.3"
                                                                                d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z"
                                                                                fill="black"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                    <span
                                                                        class="fs-5 fw-bold text-gray-800 mb-0">Projects</span>
                                                                    <span class="fs-7 text-gray-400">Pending Tasks</span>
                                                                </a>
                                                            </div>
                                                            <!--end:Item-->
                                                            <!--begin:Item-->
                                                            <div class="col-6">
                                                                <a href="../../demo8/dist/pages/projects/users.html"
                                                                    class="d-flex flex-column flex-center h-100 p-6 bg-hover-light">
                                                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin006.svg-->
                                                                    <span
                                                                        class="svg-icon svg-icon-3x svg-icon-primary mb-2">
                                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                                            width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none">
                                                                            <path opacity="0.3"
                                                                                d="M20 15H4C2.9 15 2 14.1 2 13V7C2 6.4 2.4 6 3 6H21C21.6 6 22 6.4 22 7V13C22 14.1 21.1 15 20 15ZM13 12H11C10.5 12 10 12.4 10 13V16C10 16.5 10.4 17 11 17H13C13.6 17 14 16.6 14 16V13C14 12.4 13.6 12 13 12Z"
                                                                                fill="black"></path>
                                                                            <path
                                                                                d="M14 6V5H10V6H8V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6H14ZM20 15H14V16C14 16.6 13.5 17 13 17H11C10.5 17 10 16.6 10 16V15H4C3.6 15 3.3 14.9 3 14.7V18C3 19.1 3.9 20 5 20H19C20.1 20 21 19.1 21 18V14.7C20.7 14.9 20.4 15 20 15Z"
                                                                                fill="black"></path>
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                    <span
                                                                        class="fs-5 fw-bold text-gray-800 mb-0">Customers</span>
                                                                    <span class="fs-7 text-gray-400">Latest cases</span>
                                                                </a>
                                                            </div>
                                                            <!--end:Item-->
                                                        </div>
                                                        <!--end:Nav-->
                                                        <!--begin::View more-->
                                                        <div class="py-2 text-center border-top">
                                                            <a href="../../demo8/dist/pages/profile/activity.html"
                                                                class="btn btn-color-gray-600 btn-active-color-primary">View
                                                                All
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                                <span class="svg-icon svg-icon-5">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <rect opacity="0.5" x="18"
                                                                            y="13" width="13"
                                                                            height="2" rx="1"
                                                                            transform="rotate(-180 18 13)"
                                                                            fill="black"></rect>
                                                                        <path
                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                            fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </a>
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
                        <!--begin::Content-->
                        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                            <!--begin::Post-->
                            <div class="post d-flex flex-column-fluid" id="kt_post">
                                <!--begin::Container-->
                                <div id="kt_content_container" class="container-xxl">
                                    <!--begin::Card-->
                                    <div class="card">
                                        <!--begin::Card header-->
                                        <div class="card-header">
                                            <h2 class="card-title fw-bolder">Calendar</h2>
                                            <div class="card-toolbar">
                                                <button class="btn btn-flex btn-primary" data-kt-calendar="add">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr075.svg-->
                                                    <span class="svg-icon svg-icon-2">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="11.364" y="20.364"
                                                                width="16" height="2" rx="1"
                                                                transform="rotate(-90 11.364 20.364)" fill="black">
                                                            </rect>
                                                            <rect x="4.36396" y="11.364" width="16"
                                                                height="2" rx="1" fill="black"></rect>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->Add Event
                                                </button>
                                            </div>
                                        </div>
                                        <!--end::Card header-->
                                        <!--begin::Card body-->
                                        <div class="card-body">
                                            <!--begin::Calendar-->
                                            <div id="kt_calendar_app"
                                                class="fc fc-media-screen fc-direction-ltr fc-theme-standard">
                                                <div class="fc-header-toolbar fc-toolbar fc-toolbar-ltr">
                                                    <div class="fc-toolbar-chunk">
                                                        <div class="fc-button-group"><button
                                                                class="fc-prev-button fc-button fc-button-primary"
                                                                type="button" aria-label="prev"><span
                                                                    class="fc-icon fc-icon-chevron-left"></span></button><button
                                                                class="fc-next-button fc-button fc-button-primary"
                                                                type="button" aria-label="next"><span
                                                                    class="fc-icon fc-icon-chevron-right"></span></button>
                                                        </div><button class="fc-today-button fc-button fc-button-primary"
                                                            type="button" disabled="">today</button>
                                                    </div>
                                                    <div class="fc-toolbar-chunk">
                                                        <h2 class="fc-toolbar-title">October 2022</h2>
                                                    </div>
                                                    <div class="fc-toolbar-chunk">
                                                        <div class="fc-button-group"><button
                                                                class="fc-dayGridMonth-button fc-button fc-button-primary fc-button-active"
                                                                type="button">month</button><button
                                                                class="fc-timeGridWeek-button fc-button fc-button-primary"
                                                                type="button">week</button><button
                                                                class="fc-timeGridDay-button fc-button fc-button-primary"
                                                                type="button">day</button></div>
                                                    </div>
                                                </div>
                                                <div class="fc-view-harness fc-view-harness-active"
                                                    style="height: 841.481px;">
                                                    <div class="fc-daygrid fc-dayGridMonth-view fc-view">
                                                        <table class="fc-scrollgrid  fc-scrollgrid-liquid">
                                                            <thead>
                                                                <tr
                                                                    class="fc-scrollgrid-section fc-scrollgrid-section-header ">
                                                                    <td>
                                                                        <div class="fc-scroller-harness">
                                                                            <div class="fc-scroller"
                                                                                style="overflow: hidden;">
                                                                                <table class="fc-col-header "
                                                                                    style="width: 1133px;">
                                                                                    <colgroup></colgroup>
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <th
                                                                                                class="fc-col-header-cell fc-day fc-day-sun">
                                                                                                <div
                                                                                                    class="fc-scrollgrid-sync-inner">
                                                                                                    <a
                                                                                                        class="fc-col-header-cell-cushion ">Sun</a>
                                                                                                </div>
                                                                                            </th>
                                                                                            <th
                                                                                                class="fc-col-header-cell fc-day fc-day-mon">
                                                                                                <div
                                                                                                    class="fc-scrollgrid-sync-inner">
                                                                                                    <a
                                                                                                        class="fc-col-header-cell-cushion ">Mon</a>
                                                                                                </div>
                                                                                            </th>
                                                                                            <th
                                                                                                class="fc-col-header-cell fc-day fc-day-tue">
                                                                                                <div
                                                                                                    class="fc-scrollgrid-sync-inner">
                                                                                                    <a
                                                                                                        class="fc-col-header-cell-cushion ">Tue</a>
                                                                                                </div>
                                                                                            </th>
                                                                                            <th
                                                                                                class="fc-col-header-cell fc-day fc-day-wed">
                                                                                                <div
                                                                                                    class="fc-scrollgrid-sync-inner">
                                                                                                    <a
                                                                                                        class="fc-col-header-cell-cushion ">Wed</a>
                                                                                                </div>
                                                                                            </th>
                                                                                            <th
                                                                                                class="fc-col-header-cell fc-day fc-day-thu">
                                                                                                <div
                                                                                                    class="fc-scrollgrid-sync-inner">
                                                                                                    <a
                                                                                                        class="fc-col-header-cell-cushion ">Thu</a>
                                                                                                </div>
                                                                                            </th>
                                                                                            <th
                                                                                                class="fc-col-header-cell fc-day fc-day-fri">
                                                                                                <div
                                                                                                    class="fc-scrollgrid-sync-inner">
                                                                                                    <a
                                                                                                        class="fc-col-header-cell-cushion ">Fri</a>
                                                                                                </div>
                                                                                            </th>
                                                                                            <th
                                                                                                class="fc-col-header-cell fc-day fc-day-sat">
                                                                                                <div
                                                                                                    class="fc-scrollgrid-sync-inner">
                                                                                                    <a
                                                                                                        class="fc-col-header-cell-cushion ">Sat</a>
                                                                                                </div>
                                                                                            </th>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr
                                                                    class="fc-scrollgrid-section fc-scrollgrid-section-body  fc-scrollgrid-section-liquid">
                                                                    <td>
                                                                        <div
                                                                            class="fc-scroller-harness fc-scroller-harness-liquid">
                                                                            <div class="fc-scroller fc-scroller-liquid-absolute"
                                                                                style="overflow: hidden auto;">
                                                                                <div class="fc-daygrid-body fc-daygrid-body-balanced "
                                                                                    style="width: 1133px;">
                                                                                    <table
                                                                                        class="fc-scrollgrid-sync-table"
                                                                                        style="width: 1133px; height: 793px;">
                                                                                        <colgroup></colgroup>
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past fc-day-other"
                                                                                                    data-date="2022-09-25">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-09-25&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">25</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past fc-day-other"
                                                                                                    data-date="2022-09-26">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-09-26&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">26</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past fc-day-other"
                                                                                                    data-date="2022-09-27">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-09-27&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">27</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past fc-day-other"
                                                                                                    data-date="2022-09-28">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-09-28&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">28</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past fc-day-other"
                                                                                                    data-date="2022-09-29">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-09-29&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">29</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past fc-day-other"
                                                                                                    data-date="2022-09-30">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-09-30&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">30</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past"
                                                                                                    data-date="2022-10-01">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-01&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">1</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past"
                                                                                                    data-date="2022-10-02">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-02&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">2</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-event-harness"
                                                                                                                style="margin-top: 0px;">
                                                                                                                <a
                                                                                                                    class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past fc-event-primary">
                                                                                                                    <div
                                                                                                                        class="fc-event-main">
                                                                                                                        <div
                                                                                                                            class="fc-event-main-frame">
                                                                                                                            <div
                                                                                                                                class="fc-event-title-container">
                                                                                                                                <div
                                                                                                                                    class="fc-event-title fc-sticky">
                                                                                                                                    Company
                                                                                                                                    Trip
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-resizer fc-event-resizer-end">
                                                                                                                    </div>
                                                                                                                </a></div>
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past"
                                                                                                    data-date="2022-10-03">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-03&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">3</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past"
                                                                                                    data-date="2022-10-04">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-04&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">4</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past"
                                                                                                    data-date="2022-10-05">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-05&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">5</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past"
                                                                                                    data-date="2022-10-06">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-06&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">6</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past"
                                                                                                    data-date="2022-10-07">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-07&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">7</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past"
                                                                                                    data-date="2022-10-08">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-08&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">8</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past"
                                                                                                    data-date="2022-10-09">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-09&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">9</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-event-harness"
                                                                                                                style="margin-top: 0px;">
                                                                                                                <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past fc-event-danger"
                                                                                                                    data-bs-original-title=""
                                                                                                                    title=""
                                                                                                                    aria-describedby="popover727045">
                                                                                                                    <div
                                                                                                                        class="fc-daygrid-event-dot">
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-time">
                                                                                                                        4p
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-title">
                                                                                                                        Repeating
                                                                                                                        Event
                                                                                                                    </div>
                                                                                                                </a></div>
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past"
                                                                                                    data-date="2022-10-10">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-10&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">10</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past"
                                                                                                    data-date="2022-10-11">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-11&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">11</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past"
                                                                                                    data-date="2022-10-12">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-12&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">12</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-event-harness"
                                                                                                                style="margin-top: 0px;">
                                                                                                                <a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past"
                                                                                                                    data-bs-original-title=""
                                                                                                                    title=""
                                                                                                                    aria-describedby="popover848581">
                                                                                                                    <div
                                                                                                                        class="fc-event-main">
                                                                                                                        <div
                                                                                                                            class="fc-event-main-frame">
                                                                                                                            <div
                                                                                                                                class="fc-event-title-container">
                                                                                                                                <div
                                                                                                                                    class="fc-event-title fc-sticky">
                                                                                                                                    Dinner
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-resizer fc-event-resizer-end">
                                                                                                                    </div>
                                                                                                                </a></div>
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past"
                                                                                                    data-date="2022-10-13">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-13&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">13</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past"
                                                                                                    data-date="2022-10-14">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-14&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">14</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-event-harness"
                                                                                                                style="margin-top: 0px;">
                                                                                                                <a
                                                                                                                    class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past fc-event-success">
                                                                                                                    <div
                                                                                                                        class="fc-daygrid-event-dot">
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-time">
                                                                                                                        1:30p
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-title">
                                                                                                                        Reporting
                                                                                                                    </div>
                                                                                                                </a></div>
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past"
                                                                                                    data-date="2022-10-15">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-15&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">15</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past"
                                                                                                    data-date="2022-10-16">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-16&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">16</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-event-harness"
                                                                                                                style="margin-top: 0px;">
                                                                                                                <a
                                                                                                                    class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-past">
                                                                                                                    <div
                                                                                                                        class="fc-daygrid-event-dot">
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-time">
                                                                                                                        4p
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-title">
                                                                                                                        Repeating
                                                                                                                        Event
                                                                                                                    </div>
                                                                                                                </a></div>
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-mon fc-day-past"
                                                                                                    data-date="2022-10-17">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-17&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">17</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-tue fc-day-past"
                                                                                                    data-date="2022-10-18">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-18&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">18</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-wed fc-day-past"
                                                                                                    data-date="2022-10-19">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-19&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">19</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-thu fc-day-past"
                                                                                                    data-date="2022-10-20">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-20&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">20</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-fri fc-day-past"
                                                                                                    data-date="2022-10-21">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-21&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">21</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-sat fc-day-past"
                                                                                                    data-date="2022-10-22">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-22&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">22</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-event-harness"
                                                                                                                style="margin-top: 0px;">
                                                                                                                <a
                                                                                                                    class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-start fc-event-primary">
                                                                                                                    <div
                                                                                                                        class="fc-event-main">
                                                                                                                        <div
                                                                                                                            class="fc-event-main-frame">
                                                                                                                            <div
                                                                                                                                class="fc-event-title-container">
                                                                                                                                <div
                                                                                                                                    class="fc-event-title fc-sticky">
                                                                                                                                    Conference
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                </a></div>
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-sun fc-day-past"
                                                                                                    data-date="2022-10-23">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-23&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">23</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-event-harness"
                                                                                                                style="margin-top: 0px;">
                                                                                                                <a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-end fc-event-primary"
                                                                                                                    data-bs-original-title=""
                                                                                                                    title=""
                                                                                                                    aria-describedby="popover324341">
                                                                                                                    <div
                                                                                                                        class="fc-event-main">
                                                                                                                        <div
                                                                                                                            class="fc-event-main-frame">
                                                                                                                            <div
                                                                                                                                class="fc-event-title-container">
                                                                                                                                <div
                                                                                                                                    class="fc-event-title fc-sticky">
                                                                                                                                    Conference
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-resizer fc-event-resizer-end">
                                                                                                                    </div>
                                                                                                                </a></div>
                                                                                                            <div class="fc-daygrid-event-harness"
                                                                                                                style="margin-top: 0px;">
                                                                                                                <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end"
                                                                                                                    data-bs-original-title=""
                                                                                                                    title=""
                                                                                                                    aria-describedby="popover836208">
                                                                                                                    <div
                                                                                                                        class="fc-daygrid-event-dot">
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-time">
                                                                                                                        10:30a
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-title">
                                                                                                                        Meeting
                                                                                                                    </div>
                                                                                                                </a></div>
                                                                                                            <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                                                style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                                                <a
                                                                                                                    class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-info">
                                                                                                                    <div
                                                                                                                        class="fc-daygrid-event-dot">
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-time">
                                                                                                                        12p
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-title">
                                                                                                                        Lunch
                                                                                                                    </div>
                                                                                                                </a></div>
                                                                                                            <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                                                style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                                                <a
                                                                                                                    class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-warning">
                                                                                                                    <div
                                                                                                                        class="fc-daygrid-event-dot">
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-time">
                                                                                                                        2:30p
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-title">
                                                                                                                        Meeting
                                                                                                                    </div>
                                                                                                                </a></div>
                                                                                                            <div class="fc-daygrid-event-harness fc-daygrid-event-harness-abs"
                                                                                                                style="visibility: hidden; top: 0px; left: 0px; right: 0px;">
                                                                                                                <a
                                                                                                                    class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-info">
                                                                                                                    <div
                                                                                                                        class="fc-daygrid-event-dot">
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-time">
                                                                                                                        5:30p
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-title">
                                                                                                                        Happy
                                                                                                                        Hour
                                                                                                                    </div>
                                                                                                                </a></div>
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                                <a
                                                                                                                    class="fc-daygrid-more-link fc-more-link">+3
                                                                                                                    more</a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-mon fc-day-today "
                                                                                                    data-date="2022-10-24">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-24&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">24</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-event-harness"
                                                                                                                style="margin-top: 0px;">
                                                                                                                <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today fc-event-primary"
                                                                                                                    data-bs-original-title=""
                                                                                                                    title=""
                                                                                                                    aria-describedby="popover487058">
                                                                                                                    <div
                                                                                                                        class="fc-daygrid-event-dot">
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-time">
                                                                                                                        12p
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-title">
                                                                                                                        Birthday
                                                                                                                        Party
                                                                                                                    </div>
                                                                                                                </a></div>
                                                                                                            <div class="fc-daygrid-event-harness"
                                                                                                                style="margin-top: 0px;">
                                                                                                                <a class="fc-daygrid-event fc-daygrid-dot-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-today fc-event-solid-danger fc-event-light"
                                                                                                                    data-bs-original-title=""
                                                                                                                    title=""
                                                                                                                    aria-describedby="popover928732">
                                                                                                                    <div
                                                                                                                        class="fc-daygrid-event-dot">
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-time">
                                                                                                                        6p
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-title">
                                                                                                                        Dinner
                                                                                                                    </div>
                                                                                                                </a></div>
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-tue fc-day-future"
                                                                                                    data-date="2022-10-25">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-25&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">25</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-wed fc-day-future"
                                                                                                    data-date="2022-10-26">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-26&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">26</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-thu fc-day-future"
                                                                                                    data-date="2022-10-27">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-27&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">27</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-fri fc-day-future"
                                                                                                    data-date="2022-10-28">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-28&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">28</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-event-harness"
                                                                                                                style="margin-top: 0px;">
                                                                                                                <a class="fc-daygrid-event fc-daygrid-block-event fc-h-event fc-event fc-event-draggable fc-event-resizable fc-event-start fc-event-end fc-event-future fc-event-solid-info fc-event-light"
                                                                                                                    data-bs-original-title=""
                                                                                                                    title=""
                                                                                                                    aria-describedby="popover73791">
                                                                                                                    <div
                                                                                                                        class="fc-event-main">
                                                                                                                        <div
                                                                                                                            class="fc-event-main-frame">
                                                                                                                            <div
                                                                                                                                class="fc-event-title-container">
                                                                                                                                <div
                                                                                                                                    class="fc-event-title fc-sticky">
                                                                                                                                    Site
                                                                                                                                    visit
                                                                                                                                </div>
                                                                                                                            </div>
                                                                                                                        </div>
                                                                                                                    </div>
                                                                                                                    <div
                                                                                                                        class="fc-event-resizer fc-event-resizer-end">
                                                                                                                    </div>
                                                                                                                </a></div>
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future"
                                                                                                    data-date="2022-10-29">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-29&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">29</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-sun fc-day-future"
                                                                                                    data-date="2022-10-30">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-30&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">30</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-mon fc-day-future"
                                                                                                    data-date="2022-10-31">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-10-31&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">31</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-tue fc-day-future fc-day-other"
                                                                                                    data-date="2022-11-01">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-11-01&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">1</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-wed fc-day-future fc-day-other"
                                                                                                    data-date="2022-11-02">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-11-02&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">2</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-thu fc-day-future fc-day-other"
                                                                                                    data-date="2022-11-03">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-11-03&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">3</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-fri fc-day-future fc-day-other"
                                                                                                    data-date="2022-11-04">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-11-04&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">4</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                                <td class="fc-daygrid-day fc-day fc-day-sat fc-day-future fc-day-other"
                                                                                                    data-date="2022-11-05">
                                                                                                    <div
                                                                                                        class="fc-daygrid-day-frame fc-scrollgrid-sync-inner">
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-top">
                                                                                                            <a class="fc-daygrid-day-number"
                                                                                                                data-navlink="{&quot;date&quot;:&quot;2022-11-05&quot;,&quot;type&quot;:&quot;day&quot;}"
                                                                                                                tabindex="0">5</a>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-events">
                                                                                                            <div class="fc-daygrid-day-bottom"
                                                                                                                style="margin-top: 0px;">
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="fc-daygrid-day-bg">
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Calendar-->
                                        </div>
                                        <!--end::Card body-->
                                    </div>
                                    <!--end::Card-->
                                    <!--begin::Modals-->
                                    <!--begin::Modal - New Product-->
                                    <div class="modal fade" id="kt_modal_add_event" tabindex="-1"
                                        style="display: none;" aria-hidden="true">
                                        <!--begin::Modal dialog-->
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                            <!--begin::Modal content-->
                                            <div class="modal-content">
                                                <!--begin::Form-->
                                                <form class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                                    action="#" id="kt_modal_add_event_form">
                                                    <!--begin::Modal header-->
                                                    <div class="modal-header">
                                                        <!--begin::Modal title-->
                                                        <h2 class="fw-bolder" data-kt-calendar="title">Add a New Event
                                                        </h2>
                                                        <!--end::Modal title-->
                                                        <!--begin::Close-->
                                                        <div class="btn btn-icon btn-sm btn-active-icon-primary"
                                                            id="kt_modal_add_event_close">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                            <span class="svg-icon svg-icon-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none">
                                                                    <rect opacity="0.5" x="6" y="17.3137"
                                                                        width="16" height="2" rx="1"
                                                                        transform="rotate(-45 6 17.3137)"
                                                                        fill="black"></rect>
                                                                    <rect x="7.41422" y="6" width="16"
                                                                        height="2" rx="1"
                                                                        transform="rotate(45 7.41422 6)" fill="black">
                                                                    </rect>
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </div>
                                                        <!--end::Close-->
                                                    </div>
                                                    <!--end::Modal header-->
                                                    <!--begin::Modal body-->
                                                    <div class="modal-body py-10 px-lg-17">
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-9 fv-plugins-icon-container">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-bold required mb-2">Event Name</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text"
                                                                class="form-control form-control-solid" placeholder=""
                                                                name="calendar_event_name" value="">
                                                            <!--end::Input-->
                                                            <div class="fv-plugins-message-container invalid-feedback">
                                                            </div>
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-9">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-bold mb-2">Event Description</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text"
                                                                class="form-control form-control-solid" placeholder=""
                                                                name="calendar_event_description">
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-9">
                                                            <!--begin::Label-->
                                                            <label class="fs-6 fw-bold mb-2">Event Location</label>
                                                            <!--end::Label-->
                                                            <!--begin::Input-->
                                                            <input type="text"
                                                                class="form-control form-control-solid" placeholder=""
                                                                name="calendar_event_location">
                                                            <!--end::Input-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="fv-row mb-9">
                                                            <!--begin::Checkbox-->
                                                            <label class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox"
                                                                    value="" id="kt_calendar_datepicker_allday">
                                                                <span class="form-check-label fw-bold"
                                                                    for="kt_calendar_datepicker_allday">All Day</span>
                                                            </label>
                                                            <!--end::Checkbox-->
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="row row-cols-lg-2 g-10">
                                                            <div class="col">
                                                                <div class="fv-row mb-9 fv-plugins-icon-container">
                                                                    <!--begin::Label-->
                                                                    <label class="fs-6 fw-bold mb-2 required">Event Start
                                                                        Date</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input
                                                                        class="form-control form-control-solid flatpickr-input"
                                                                        name="calendar_event_start_date"
                                                                        placeholder="Pick a start date"
                                                                        id="kt_calendar_datepicker_start_date"
                                                                        type="text" readonly="readonly"
                                                                        value="">
                                                                    <!--end::Input-->
                                                                    <div
                                                                        class="fv-plugins-message-container invalid-feedback">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col d-none" data-kt-calendar="datepicker">
                                                                <div class="fv-row mb-9">
                                                                    <!--begin::Label-->
                                                                    <label class="fs-6 fw-bold mb-2">Event Start
                                                                        Time</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input
                                                                        class="form-control form-control-solid flatpickr-input"
                                                                        name="calendar_event_start_time"
                                                                        placeholder="Pick a start time"
                                                                        id="kt_calendar_datepicker_start_time"
                                                                        type="text" readonly="readonly">
                                                                    <!--end::Input-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Input group-->
                                                        <!--begin::Input group-->
                                                        <div class="row row-cols-lg-2 g-10">
                                                            <div class="col">
                                                                <div class="fv-row mb-9 fv-plugins-icon-container">
                                                                    <!--begin::Label-->
                                                                    <label class="fs-6 fw-bold mb-2 required">Event End
                                                                        Date</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input
                                                                        class="form-control form-control-solid flatpickr-input"
                                                                        name="calendar_event_end_date"
                                                                        placeholder="Pick a end date"
                                                                        id="kt_calendar_datepicker_end_date"
                                                                        type="text" readonly="readonly"
                                                                        value="">
                                                                    <!--end::Input-->
                                                                    <div
                                                                        class="fv-plugins-message-container invalid-feedback">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col d-none" data-kt-calendar="datepicker">
                                                                <div class="fv-row mb-9">
                                                                    <!--begin::Label-->
                                                                    <label class="fs-6 fw-bold mb-2">Event End
                                                                        Time</label>
                                                                    <!--end::Label-->
                                                                    <!--begin::Input-->
                                                                    <input
                                                                        class="form-control form-control-solid flatpickr-input"
                                                                        name="calendar_event_end_time"
                                                                        placeholder="Pick a end time"
                                                                        id="kt_calendar_datepicker_end_time"
                                                                        type="text" readonly="readonly">
                                                                    <!--end::Input-->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Input group-->
                                                    </div>
                                                    <!--end::Modal body-->
                                                    <!--begin::Modal footer-->
                                                    <div class="modal-footer flex-center">
                                                        <!--begin::Button-->
                                                        <button type="reset" id="kt_modal_add_event_cancel"
                                                            class="btn btn-light me-3">Cancel</button>
                                                        <!--end::Button-->
                                                        <!--begin::Button-->
                                                        <button type="button" id="kt_modal_add_event_submit"
                                                            class="btn btn-primary">
                                                            <span class="indicator-label">Submit</span>
                                                            <span class="indicator-progress">Please wait...
                                                                <span
                                                                    class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                        </button>
                                                        <!--end::Button-->
                                                    </div>
                                                    <!--end::Modal footer-->
                                                    <div></div>
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Modal - New Product-->
                                    <!--begin::Modal - New Product-->
                                    <div class="modal fade" id="kt_modal_view_event" tabindex="-1"
                                        style="display: none;" aria-hidden="true">
                                        <!--begin::Modal dialog-->
                                        <div class="modal-dialog modal-dialog-centered mw-650px">
                                            <!--begin::Modal content-->
                                            <div class="modal-content">
                                                <!--begin::Modal header-->
                                                <div class="modal-header border-0 justify-content-end">
                                                    <!--begin::Edit-->
                                                    <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-primary me-2"
                                                        data-bs-toggle="tooltip" data-bs-dismiss="click"
                                                        title="" id="kt_modal_view_event_edit"
                                                        data-bs-original-title="Edit Event">
                                                        <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3"
                                                                    d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                                    fill="black"></path>
                                                                <path
                                                                    d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Edit-->
                                                    <!--begin::Edit-->
                                                    <div class="btn btn-icon btn-sm btn-color-gray-400 btn-active-icon-danger me-2"
                                                        data-bs-toggle="tooltip" data-bs-dismiss="click"
                                                        title="" id="kt_modal_view_event_delete"
                                                        data-bs-original-title="Delete Event">
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                                        <span class="svg-icon svg-icon-2">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path
                                                                    d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                    fill="black"></path>
                                                                <path opacity="0.5"
                                                                    d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                    fill="black"></path>
                                                                <path opacity="0.5"
                                                                    d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Edit-->
                                                    <!--begin::Close-->
                                                    <div class="btn btn-icon btn-sm btn-color-gray-500 btn-active-icon-primary"
                                                        data-bs-toggle="tooltip" title=""
                                                        data-bs-dismiss="modal" data-bs-original-title="Hide Event">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="6" y="17.3137"
                                                                    width="16" height="2" rx="1"
                                                                    transform="rotate(-45 6 17.3137)" fill="black">
                                                                </rect>
                                                                <rect x="7.41422" y="6" width="16"
                                                                    height="2" rx="1"
                                                                    transform="rotate(45 7.41422 6)" fill="black">
                                                                </rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Close-->
                                                </div>
                                                <!--end::Modal header-->
                                                <!--begin::Modal body-->
                                                <div class="modal-body pt-0 pb-20 px-lg-17">
                                                    <!--begin::Row-->
                                                    <div class="d-flex">
                                                        <!--begin::Icon-->
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3"
                                                                    d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                                    fill="black"></path>
                                                                <path
                                                                    d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                                    fill="black"></path>
                                                                <path
                                                                    d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <!--end::Icon-->
                                                        <div class="mb-9">
                                                            <!--begin::Event name-->
                                                            <div class="d-flex align-items-center mb-2">
                                                                <span class="fs-3 fw-bolder me-3"
                                                                    data-kt-calendar="event_name">Dinner</span>
                                                                <span class="badge badge-light-success"
                                                                    data-kt-calendar="all_day">All Day</span>
                                                            </div>
                                                            <!--end::Event name-->
                                                            <!--begin::Event description-->
                                                            <div class="fs-6" data-kt-calendar="event_description">
                                                                Lorem ipsum dolor sit amet, conse ctetur</div>
                                                            <!--end::Event description-->
                                                        </div>
                                                    </div>
                                                    <!--end::Row-->
                                                    <!--begin::Row-->
                                                    <div class="d-flex align-items-center mb-2">
                                                        <!--begin::Icon-->
                                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-success me-5">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <circle fill="#000000" cx="12" cy="12"
                                                                    r="8"></circle>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <!--end::Icon-->
                                                        <!--begin::Event start date/time-->
                                                        <div class="fs-6">
                                                            <span class="fw-bolder">Starts</span>
                                                            <span data-kt-calendar="event_start_date">12th Oct,
                                                                2022</span>
                                                        </div>
                                                        <!--end::Event start date/time-->
                                                    </div>
                                                    <!--end::Row-->
                                                    <!--begin::Row-->
                                                    <div class="d-flex align-items-center mb-9">
                                                        <!--begin::Icon-->
                                                        <!--begin::Svg Icon | path: icons/duotune/abstract/abs050.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-danger me-5">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24px"
                                                                height="24px" viewBox="0 0 24 24" version="1.1">
                                                                <circle fill="#000000" cx="12" cy="12"
                                                                    r="8"></circle>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <!--end::Icon-->
                                                        <!--begin::Event end date/time-->
                                                        <div class="fs-6">
                                                            <span class="fw-bolder">Ends</span>
                                                            <span data-kt-calendar="event_end_date">13th Oct, 2022</span>
                                                        </div>
                                                        <!--end::Event end date/time-->
                                                    </div>
                                                    <!--end::Row-->
                                                    <!--begin::Row-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Icon-->
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen018.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-muted me-5">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <path opacity="0.3"
                                                                    d="M18.0624 15.3453L13.1624 20.7453C12.5624 21.4453 11.5624 21.4453 10.9624 20.7453L6.06242 15.3453C4.56242 13.6453 3.76242 11.4453 4.06242 8.94534C4.56242 5.34534 7.46242 2.44534 11.0624 2.04534C15.8624 1.54534 19.9624 5.24534 19.9624 9.94534C20.0624 12.0453 19.2624 13.9453 18.0624 15.3453Z"
                                                                    fill="black"></path>
                                                                <path
                                                                    d="M12.0624 13.0453C13.7193 13.0453 15.0624 11.7022 15.0624 10.0453C15.0624 8.38849 13.7193 7.04535 12.0624 7.04535C10.4056 7.04535 9.06241 8.38849 9.06241 10.0453C9.06241 11.7022 10.4056 13.0453 12.0624 13.0453Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                        <!--end::Icon-->
                                                        <!--begin::Event location-->
                                                        <div class="fs-6" data-kt-calendar="event_location">Squire's
                                                            Loft</div>
                                                        <!--end::Event location-->
                                                    </div>
                                                    <!--end::Row-->
                                                </div>
                                                <!--end::Modal body-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Modal - New Product-->
                                    <!--end::Modals-->
                                </div>
                                <!--end::Container-->
                            </div>
                            <!--end::Post-->
                        </div>
                        <!--end::Content-->
                        <!--begin::Footer-->
                        <div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
                            <!--begin::Container-->
                            <div
                                class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                                <!--begin::Copyright-->
                                <div class="text-dark order-2 order-md-1">
                                    <span class="text-muted fw-bold me-1">2021©</span>
                                    <a href="https://keenthemes.com" target="_blank"
                                        class="text-gray-800 text-hover-primary">Keenthemes</a>
                                </div>
                                <!--end::Copyright-->
                                <!--begin::Menu-->
                                <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                                    <li class="menu-item">
                                        <a href="https://keenthemes.com" target="_blank"
                                            class="menu-link px-2">About</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="https://keenthemes.com/support" target="_blank"
                                            class="menu-link px-2">Support</a>
                                    </li>
                                    <li class="menu-item">
                                        <a href="https://1.envato.market/EA4JP" target="_blank"
                                            class="menu-link px-2">Purchase</a>
                                    </li>
                                </ul>
                                <!--end::Menu-->
                            </div>
                            <!--end::Container-->
                        </div>
                        <!--end::Footer-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Page-->
            </div>
            <!--end::Root-->
            <!--begin::Drawers-->
            <!--begin::Activities drawer-->
            <div id="kt_activities" class="bg-body drawer drawer-end" data-kt-drawer="true"
                data-kt-drawer-name="activities" data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
                data-kt-drawer-width="{default:'300px', 'lg': '900px'}" data-kt-drawer-direction="end"
                data-kt-drawer-toggle="#kt_activities_toggle" data-kt-drawer-close="#kt_activities_close"
                style="width: 900px !important;">
                <div class="card shadow-none rounded-0">
                    <!--begin::Header-->
                    <div class="card-header" id="kt_activities_header">
                        <h3 class="card-title fw-bolder text-dark">Activity Logs</h3>
                        <div class="card-toolbar">
                            <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"
                                id="kt_activities_close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                            height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                            fill="black"></rect>
                                        <rect x="7.41422" y="6" width="16" height="2"
                                            rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body position-relative" id="kt_activities_body">
                        <!--begin::Content-->
                        <div id="kt_activities_scroll" class="position-relative scroll-y me-n5 pe-5"
                            data-kt-scroll="true" data-kt-scroll-height="auto"
                            data-kt-scroll-wrappers="#kt_activities_body"
                            data-kt-scroll-dependencies="#kt_activities_header, #kt_activities_footer"
                            data-kt-scroll-offset="5px" style="height: 270px;">
                            <!--begin::Timeline items-->
                            <div class="timeline">
                                <!--begin::Timeline item-->
                                <div class="timeline-item">
                                    <!--begin::Timeline line-->
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px me-4">
                                        <div class="symbol-label bg-light">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-bold mb-2">There are 2 new tasks for you in “AirPlus
                                                Mobile APp” project:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Added at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                                    data-bs-boundary="window" data-bs-placement="top" title=""
                                                    data-bs-original-title="Nina Nilson">
                                                    <img src="assets/media/avatars/150-11.jpg" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <!--begin::Record-->
                                            <div
                                                class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-5">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Meeting
                                                    with customer</a>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <div class="min-w-175px pe-2">
                                                    <span class="badge badge-light text-muted">Application Design</span>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Users-->
                                                <div
                                                    class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px pe-2">
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-25px">
                                                        <img src="assets/media/avatars/150-3.jpg" alt="img">
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-25px">
                                                        <img src="assets/media/avatars/150-11.jpg" alt="img">
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-25px">
                                                        <div
                                                            class="symbol-label fs-8 fw-bold bg-primary text-inverse-primary">
                                                            A</div>
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
                                                <a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
                                                <!--end::Action-->
                                            </div>
                                            <!--end::Record-->
                                            <!--begin::Record-->
                                            <div
                                                class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-750px px-7 py-3 mb-0">
                                                <!--begin::Title-->
                                                <a href="#"
                                                    class="fs-5 text-dark text-hover-primary fw-bold w-375px min-w-200px">Project
                                                    Delivery Preparation</a>
                                                <!--end::Title-->
                                                <!--begin::Label-->
                                                <div class="min-w-175px">
                                                    <span class="badge badge-light text-muted">CRM System
                                                        Development</span>
                                                </div>
                                                <!--end::Label-->
                                                <!--begin::Users-->
                                                <div
                                                    class="symbol-group symbol-hover flex-nowrap flex-grow-1 min-w-100px">
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-25px">
                                                        <img src="assets/media/avatars/150-5.jpg" alt="img">
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::User-->
                                                    <div class="symbol symbol-circle symbol-25px">
                                                        <div
                                                            class="symbol-label fs-8 fw-bold bg-success text-inverse-primary">
                                                            B</div>
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
                                                <a href="#"
                                                    class="btn btn-sm btn-light btn-active-light-primary">View</a>
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
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com009.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M5.78001 21.115L3.28001 21.949C3.10897 22.0059 2.92548 22.0141 2.75004 21.9727C2.57461 21.9312 2.41416 21.8418 2.28669 21.7144C2.15923 21.5869 2.06975 21.4264 2.0283 21.251C1.98685 21.0755 1.99507 20.892 2.05201 20.7209L2.886 18.2209L7.22801 13.879L10.128 16.774L5.78001 21.115Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M21.7 8.08899L15.911 2.30005C15.8161 2.2049 15.7033 2.12939 15.5792 2.07788C15.455 2.02637 15.3219 1.99988 15.1875 1.99988C15.0531 1.99988 14.92 2.02637 14.7958 2.07788C14.6717 2.12939 14.5589 2.2049 14.464 2.30005L13.74 3.02295C13.548 3.21498 13.4402 3.4754 13.4402 3.74695C13.4402 4.01849 13.548 4.27892 13.74 4.47095L14.464 5.19397L11.303 8.35498C10.1615 7.80702 8.87825 7.62639 7.62985 7.83789C6.38145 8.04939 5.2293 8.64265 4.332 9.53601C4.14026 9.72817 4.03256 9.98855 4.03256 10.26C4.03256 10.5315 4.14026 10.7918 4.332 10.984L13.016 19.667C13.208 19.859 13.4684 19.9668 13.74 19.9668C14.0115 19.9668 14.272 19.859 14.464 19.667C15.3575 18.77 15.9509 17.618 16.1624 16.3698C16.374 15.1215 16.1932 13.8383 15.645 12.697L18.806 9.53601L19.529 10.26C19.721 10.452 19.9814 10.5598 20.253 10.5598C20.5245 10.5598 20.785 10.452 20.977 10.26L21.7 9.53601C21.7952 9.44108 21.8706 9.32825 21.9221 9.2041C21.9737 9.07995 22.0002 8.94691 22.0002 8.8125C22.0002 8.67809 21.9737 8.54505 21.9221 8.4209C21.8706 8.29675 21.7952 8.18392 21.7 8.08899Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n2">
                                        <!--begin::Timeline heading-->
                                        <div class="overflow-auto pe-3">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-bold mb-2">Invitation for crafting engaging designs that
                                                speak human workshop</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Sent at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                                    data-bs-boundary="window" data-bs-placement="top" title=""
                                                    data-bs-original-title="Alan Nilson">
                                                    <img src="assets/media/avatars/150-2.jpg" alt="img">
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
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <!--begin::Svg Icon | path: icons/duotune/coding/cod008.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M11.2166 8.50002L10.5166 7.80007C10.1166 7.40007 10.1166 6.80005 10.5166 6.40005L13.4166 3.50002C15.5166 1.40002 18.9166 1.50005 20.8166 3.90005C22.5166 5.90005 22.2166 8.90007 20.3166 10.8001L17.5166 13.6C17.1166 14 16.5166 14 16.1166 13.6L15.4166 12.9C15.0166 12.5 15.0166 11.9 15.4166 11.5L18.3166 8.6C19.2166 7.7 19.1166 6.30002 18.0166 5.50002C17.2166 4.90002 16.0166 5.10007 15.3166 5.80007L12.4166 8.69997C12.2166 8.89997 11.6166 8.90002 11.2166 8.50002ZM11.2166 15.6L8.51659 18.3001C7.81659 19.0001 6.71658 19.2 5.81658 18.6C4.81658 17.9 4.71659 16.4 5.51659 15.5L8.31658 12.7C8.71658 12.3 8.71658 11.7001 8.31658 11.3001L7.6166 10.6C7.2166 10.2 6.6166 10.2 6.2166 10.6L3.6166 13.2C1.7166 15.1 1.4166 18.1 3.1166 20.1C5.0166 22.4 8.51659 22.5 10.5166 20.5L13.3166 17.7C13.7166 17.3 13.7166 16.7001 13.3166 16.3001L12.6166 15.6C12.3166 15.2 11.6166 15.2 11.2166 15.6Z"
                                                        fill="black"></path>
                                                    <path opacity="0.3"
                                                        d="M5.0166 9L2.81659 8.40002C2.31659 8.30002 2.0166 7.79995 2.1166 7.19995L2.31659 5.90002C2.41659 5.20002 3.21659 4.89995 3.81659 5.19995L6.0166 6.40002C6.4166 6.60002 6.6166 7.09998 6.5166 7.59998L6.31659 8.30005C6.11659 8.80005 5.5166 9.1 5.0166 9ZM8.41659 5.69995H8.6166C9.1166 5.69995 9.5166 5.30005 9.5166 4.80005L9.6166 3.09998C9.6166 2.49998 9.2166 2 8.5166 2H7.81659C7.21659 2 6.71659 2.59995 6.91659 3.19995L7.31659 4.90002C7.41659 5.40002 7.91659 5.69995 8.41659 5.69995ZM14.6166 18.2L15.1166 21.3C15.2166 21.8 15.7166 22.2 16.2166 22L17.6166 21.6C18.1166 21.4 18.4166 20.8 18.1166 20.3L16.7166 17.5C16.5166 17.1 16.1166 16.9 15.7166 17L15.2166 17.1C14.8166 17.3 14.5166 17.7 14.6166 18.2ZM18.4166 16.3L19.8166 17.2C20.2166 17.5 20.8166 17.3 21.0166 16.8L21.3166 15.9C21.5166 15.4 21.1166 14.8 20.5166 14.8H18.8166C18.0166 14.8 17.7166 15.9 18.4166 16.3Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="mb-5 pe-3">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="fs-5 fw-bold text-gray-800 text-hover-primary mb-2">3 New Incoming
                                                Project Files:</a>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Sent at 10:30 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                                    data-bs-boundary="window" data-bs-placement="top" title=""
                                                    data-bs-original-title="Jan Hummer">
                                                    <img src="assets/media/avatars/150-6.jpg" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <div
                                                class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                    <!--begin::Icon-->
                                                    <img alt="" class="w-30px me-3"
                                                        src="assets/media/svg/files/pdf.svg">
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-bold">
                                                        <!--begin::Desc-->
                                                        <a href="#"
                                                            class="fs-6 text-hover-primary fw-bolder">Finance KPI App
                                                            Guidelines</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-400">1.9mb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--begin::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center pe-10 pe-lg-20">
                                                    <!--begin::Icon-->
                                                    <img alt="" class="w-30px me-3"
                                                        src="assets/media/svg/files/doc.svg">
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-bold">
                                                        <!--begin::Desc-->
                                                        <a href="#"
                                                            class="fs-6 text-hover-primary fw-bolder">Client UAT Testing
                                                            Results</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-400">18kb</div>
                                                        <!--end::Number-->
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-aligns-center">
                                                    <!--begin::Icon-->
                                                    <img alt="" class="w-30px me-3"
                                                        src="assets/media/svg/files/css.svg">
                                                    <!--end::Icon-->
                                                    <!--begin::Info-->
                                                    <div class="ms-1 fw-bold">
                                                        <!--begin::Desc-->
                                                        <a href="#"
                                                            class="fs-6 text-hover-primary fw-bolder">Finance Reports</a>
                                                        <!--end::Desc-->
                                                        <!--begin::Number-->
                                                        <div class="text-gray-400">20mb</div>
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
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <!--begin::Svg Icon | path: icons/duotune/abstract/abs027.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M21.25 18.525L13.05 21.825C12.35 22.125 11.65 22.125 10.95 21.825L2.75 18.525C1.75 18.125 1.75 16.725 2.75 16.325L4.04999 15.825L10.25 18.325C10.85 18.525 11.45 18.625 12.05 18.625C12.65 18.625 13.25 18.525 13.85 18.325L20.05 15.825L21.35 16.325C22.35 16.725 22.35 18.125 21.25 18.525ZM13.05 16.425L21.25 13.125C22.25 12.725 22.25 11.325 21.25 10.925L13.05 7.62502C12.35 7.32502 11.65 7.32502 10.95 7.62502L2.75 10.925C1.75 11.325 1.75 12.725 2.75 13.125L10.95 16.425C11.65 16.725 12.45 16.725 13.05 16.425Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M11.05 11.025L2.84998 7.725C1.84998 7.325 1.84998 5.925 2.84998 5.525L11.05 2.225C11.75 1.925 12.45 1.925 13.15 2.225L21.35 5.525C22.35 5.925 22.35 7.325 21.35 7.725L13.05 11.025C12.45 11.325 11.65 11.325 11.05 11.025Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-bold mb-2">Task
                                                <a href="#" class="text-primary fw-bolder me-1">#45890</a>merged
                                                with
                                                <a href="#" class="text-primary fw-bolder me-1">#45890</a>in “Ads
                                                Pro Admin Dashboard project:
                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Initiated at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                                    data-bs-boundary="window" data-bs-placement="top" title=""
                                                    data-bs-original-title="Nina Nilson">
                                                    <img src="assets/media/avatars/150-11.jpg" alt="img">
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
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-bold mb-2">3 new application design concepts added:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Created at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                                    data-bs-boundary="window" data-bs-placement="top" title=""
                                                    data-bs-original-title="Marcus Dotson">
                                                    <img src="assets/media/avatars/150-3.jpg" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <div
                                                class="d-flex align-items-center border border-dashed border-gray-300 rounded min-w-700px p-7">
                                                <!--begin::Item-->
                                                <div class="overlay me-10">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-200px"
                                                            src="assets/media/demos/demo1.png">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#"
                                                            class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="overlay me-10">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-200px"
                                                            src="assets/media/demos/demo2.png">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#"
                                                            class="btn btn-sm btn-primary btn-shadow">Explore</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Item-->
                                                <!--begin::Item-->
                                                <div class="overlay">
                                                    <!--begin::Image-->
                                                    <div class="overlay-wrapper">
                                                        <img alt="img" class="rounded w-200px"
                                                            src="assets/media/demos/demo3.png">
                                                    </div>
                                                    <!--end::Image-->
                                                    <!--begin::Link-->
                                                    <div class="overlay-layer bg-dark bg-opacity-10 rounded">
                                                        <a href="#"
                                                            class="btn btn-sm btn-primary btn-shadow">Explore</a>
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
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                        fill="black"></path>
                                                    <path opacity="0.3"
                                                        d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-bold mb-2">New case
                                                <a href="#" class="text-primary fw-bolder me-1">#67890</a>is
                                                assigned to you in Multi-platform Database Design project
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
                                                    <a href="#" class="text-primary fw-bolder me-1">Alice Tan</a>
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
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <!--begin::Svg Icon | path: icons/duotune/art/art005.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path opacity="0.3"
                                                        d="M21.4 8.35303L19.241 10.511L13.485 4.755L15.643 2.59595C16.0248 2.21423 16.5426 1.99988 17.0825 1.99988C17.6224 1.99988 18.1402 2.21423 18.522 2.59595L21.4 5.474C21.7817 5.85581 21.9962 6.37355 21.9962 6.91345C21.9962 7.45335 21.7817 7.97122 21.4 8.35303ZM3.68699 21.932L9.88699 19.865L4.13099 14.109L2.06399 20.309C1.98815 20.5354 1.97703 20.7787 2.03189 21.0111C2.08674 21.2436 2.2054 21.4561 2.37449 21.6248C2.54359 21.7934 2.75641 21.9115 2.989 21.9658C3.22158 22.0201 3.4647 22.0084 3.69099 21.932H3.68699Z"
                                                        fill="black"></path>
                                                    <path
                                                        d="M5.574 21.3L3.692 21.928C3.46591 22.0032 3.22334 22.0141 2.99144 21.9594C2.75954 21.9046 2.54744 21.7864 2.3789 21.6179C2.21036 21.4495 2.09202 21.2375 2.03711 21.0056C1.9822 20.7737 1.99289 20.5312 2.06799 20.3051L2.696 18.422L5.574 21.3ZM4.13499 14.105L9.891 19.861L19.245 10.507L13.489 4.75098L4.13499 14.105Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mb-10 mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-bold mb-2">You have received a new order:</div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Placed at 5:05 AM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <div class="symbol symbol-circle symbol-25px" data-bs-toggle="tooltip"
                                                    data-bs-boundary="window" data-bs-placement="top" title=""
                                                    data-bs-original-title="Robert Rich">
                                                    <img src="assets/media/avatars/150-14.jpg" alt="img">
                                                </div>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                        <!--begin::Timeline details-->
                                        <div class="overflow-auto pb-5">
                                            <!--begin::Notice-->
                                            <div
                                                class="notice d-flex bg-light-primary rounded border-primary border border-dashed min-w-lg-600px flex-shrink-0 p-6">
                                                <!--begin::Icon-->
                                                <!--begin::Svg Icon | path: icons/duotune/coding/cod004.svg-->
                                                <span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none">
                                                        <path opacity="0.3"
                                                            d="M19.0687 17.9688H11.0687C10.4687 17.9688 10.0687 18.3687 10.0687 18.9688V19.9688C10.0687 20.5687 10.4687 20.9688 11.0687 20.9688H19.0687C19.6687 20.9688 20.0687 20.5687 20.0687 19.9688V18.9688C20.0687 18.3687 19.6687 17.9688 19.0687 17.9688Z"
                                                            fill="black"></path>
                                                        <path
                                                            d="M4.06875 17.9688C3.86875 17.9688 3.66874 17.8688 3.46874 17.7688C2.96874 17.4688 2.86875 16.8688 3.16875 16.3688L6.76874 10.9688L3.16875 5.56876C2.86875 5.06876 2.96874 4.46873 3.46874 4.16873C3.96874 3.86873 4.56875 3.96878 4.86875 4.46878L8.86875 10.4688C9.06875 10.7688 9.06875 11.2688 8.86875 11.5688L4.86875 17.5688C4.66875 17.7688 4.36875 17.9688 4.06875 17.9688Z"
                                                            fill="black"></path>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                                <!--end::Icon-->
                                                <!--begin::Wrapper-->
                                                <div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
                                                    <!--begin::Content-->
                                                    <div class="mb-3 mb-md-0 fw-bold">
                                                        <h4 class="text-gray-900 fw-bolder">Database Backup Process
                                                            Completed!</h4>
                                                        <div class="fs-6 text-gray-700 pe-7">Login into Metronic Admin
                                                            Dashboard to make sure the data integrity is OK</div>
                                                    </div>
                                                    <!--end::Content-->
                                                    <!--begin::Action-->
                                                    <a href="#"
                                                        class="btn btn-primary px-6 align-self-center text-nowrap">Proceed</a>
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
                                    <div class="timeline-line w-40px"></div>
                                    <!--end::Timeline line-->
                                    <!--begin::Timeline icon-->
                                    <div class="timeline-icon symbol symbol-circle symbol-40px">
                                        <div class="symbol-label bg-light">
                                            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
                                            <span class="svg-icon svg-icon-2 svg-icon-gray-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none">
                                                    <path
                                                        d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z"
                                                        fill="black"></path>
                                                    <path opacity="0.3"
                                                        d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z"
                                                        fill="black"></path>
                                                    <path opacity="0.3"
                                                        d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z"
                                                        fill="black"></path>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                    </div>
                                    <!--end::Timeline icon-->
                                    <!--begin::Timeline content-->
                                    <div class="timeline-content mt-n1">
                                        <!--begin::Timeline heading-->
                                        <div class="pe-3 mb-5">
                                            <!--begin::Title-->
                                            <div class="fs-5 fw-bold mb-2">New order
                                                <a href="#" class="text-primary fw-bolder me-1">#67890</a>is
                                                placed for Workshow Planning &amp; Budget Estimation
                                            </div>
                                            <!--end::Title-->
                                            <!--begin::Description-->
                                            <div class="d-flex align-items-center mt-1 fs-6">
                                                <!--begin::Info-->
                                                <div class="text-muted me-2 fs-7">Placed at 4:23 PM by</div>
                                                <!--end::Info-->
                                                <!--begin::User-->
                                                <a href="#" class="text-primary fw-bolder me-1">Jimmy Bold</a>
                                                <!--end::User-->
                                            </div>
                                            <!--end::Description-->
                                        </div>
                                        <!--end::Timeline heading-->
                                    </div>
                                    <!--end::Timeline content-->
                                </div>
                                <!--end::Timeline item-->
                            </div>
                            <!--end::Timeline items-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Body-->
                    <!--begin::Footer-->
                    <div class="card-footer py-5 text-center" id="kt_activities_footer">
                        <a href="../../demo8/dist/pages/profile/activity.html" class="btn btn-bg-body text-primary">View
                            All Activities
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                            <span class="svg-icon svg-icon-3 svg-icon-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="18" y="13" width="13"
                                        height="2" rx="1" transform="rotate(-180 18 13)" fill="black">
                                    </rect>
                                    <path
                                        d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                        fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </a>
                    </div>
                    <!--end::Footer-->
                </div>
            </div>
            <!--end::Activities drawer-->
            <!--begin::Chat drawer-->
            <div id="kt_drawer_chat" class="bg-body drawer drawer-end" data-kt-drawer="true"
                data-kt-drawer-name="chat" data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
                data-kt-drawer-width="{default:'300px', 'md': '500px'}" data-kt-drawer-direction="end"
                data-kt-drawer-toggle="#kt_drawer_chat_toggle" data-kt-drawer-close="#kt_drawer_chat_close"
                style="width: 500px !important;">
                <!--begin::Messenger-->
                <div class="card w-100 rounded-0" id="kt_drawer_chat_messenger">
                    <!--begin::Card header-->
                    <div class="card-header pe-5" id="kt_drawer_chat_messenger_header">
                        <!--begin::Title-->
                        <div class="card-title">
                            <!--begin::User-->
                            <div class="d-flex justify-content-center flex-column me-3">
                                <a href="#"
                                    class="fs-4 fw-bolder text-gray-900 text-hover-primary me-1 mb-2 lh-1">Brian Cox</a>
                                <!--begin::Info-->
                                <div class="mb-0 lh-1">
                                    <span class="badge badge-success badge-circle w-10px h-10px me-1"></span>
                                    <span class="fs-7 fw-bold text-muted">Active</span>
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::User-->
                        </div>
                        <!--end::Title-->
                        <!--begin::Card toolbar-->
                        <div class="card-toolbar">
                            <!--begin::Menu-->
                            <div class="me-2">
                                <button class="btn btn-sm btn-icon btn-active-light-primary"
                                    data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                                    <i class="bi bi-three-dots fs-3"></i>
                                </button>
                                <!--begin::Menu 3-->
                                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-bold w-200px py-3"
                                    data-kt-menu="true">
                                    <!--begin::Heading-->
                                    <div class="menu-item px-3">
                                        <div class="menu-content text-muted pb-2 px-3 fs-7 text-uppercase">Contacts</div>
                                    </div>
                                    <!--end::Heading-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_users_search">Add Contact</a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link flex-stack px-3" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_invite_friends">Invite Contacts
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title=""
                                                data-bs-original-title="Specify a contact email to send an invitation"
                                                aria-label="Specify a contact email to send an invitation"></i></a>
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                        data-kt-menu-placement="right-start">
                                        <a href="#" class="menu-link px-3">
                                            <span class="menu-title">Groups</span>
                                            <span class="menu-arrow"></span>
                                        </a>
                                        <!--begin::Menu sub-->
                                        <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                                    title="" data-bs-original-title="Coming soon">Create Group</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                                    title="" data-bs-original-title="Coming soon">Invite
                                                    Members</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                                    title="" data-bs-original-title="Coming soon">Settings</a>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu sub-->
                                    </div>
                                    <!--end::Menu item-->
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3 my-1">
                                        <a href="#" class="menu-link px-3" data-bs-toggle="tooltip"
                                            title="" data-bs-original-title="Coming soon">Settings</a>
                                    </div>
                                    <!--end::Menu item-->
                                </div>
                                <!--end::Menu 3-->
                            </div>
                            <!--end::Menu-->
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-light-primary" id="kt_drawer_chat_close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                            height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                            fill="black"></rect>
                                        <rect x="7.41422" y="6" width="16" height="2"
                                            rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Card toolbar-->
                    </div>
                    <!--end::Card header-->
                    <!--begin::Card body-->
                    <div class="card-body" id="kt_drawer_chat_messenger_body">
                        <!--begin::Messages-->
                        <div class="scroll-y me-n5 pe-5" data-kt-element="messages" data-kt-scroll="true"
                            data-kt-scroll-activate="true" data-kt-scroll-height="auto"
                            data-kt-scroll-dependencies="#kt_drawer_chat_messenger_header, #kt_drawer_chat_messenger_footer"
                            data-kt-scroll-wrappers="#kt_drawer_chat_messenger_body" data-kt-scroll-offset="0px"
                            style="height: 216px;">
                            <!--begin::Message(in)-->
                            <div class="d-flex justify-content-start mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-15.jpg">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-3">
                                            <a href="#"
                                                class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                            <span class="text-muted fs-7 mb-1">2 mins</span>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                        data-kt-element="message-text">How likely are you to recommend our company to your
                                        friends and family ?</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(in)-->
                            <!--begin::Message(out)-->
                            <div class="d-flex justify-content-end mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-end">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Details-->
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">5 mins</span>
                                            <a href="#"
                                                class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-26.jpg">
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                        data-kt-element="message-text">Hey there, we’re just writing to let you know that
                                        you’ve been subscribed to a repository on GitHub.</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(out)-->
                            <!--begin::Message(in)-->
                            <div class="d-flex justify-content-start mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-15.jpg">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-3">
                                            <a href="#"
                                                class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                            <span class="text-muted fs-7 mb-1">1 Hour</span>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                        data-kt-element="message-text">Ok, Understood!</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(in)-->
                            <!--begin::Message(out)-->
                            <div class="d-flex justify-content-end mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-end">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Details-->
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">2 Hours</span>
                                            <a href="#"
                                                class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-26.jpg">
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                        data-kt-element="message-text">You’ll receive notifications for all issues, pull
                                        requests!</div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(out)-->
                            <!--begin::Message(in)-->
                            <div class="d-flex justify-content-start mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-15.jpg">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-3">
                                            <a href="#"
                                                class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                            <span class="text-muted fs-7 mb-1">3 Hours</span>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                        data-kt-element="message-text">You can unwatch this repository immediately by
                                        clicking here:
                                        <a href="https://keenthemes.com">Keenthemes.com</a>
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(in)-->
                            <!--begin::Message(out)-->
                            <div class="d-flex justify-content-end mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-end">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Details-->
                                        <div class="me-3">
                                            <span class="text-muted fs-7 mb-1">4 Hours</span>
                                            <a href="#"
                                                class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-26.jpg">
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                        data-kt-element="message-text">Most purchased Business courses during this sale!
                                    </div>
                                    <!--end::Text-->
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Message(out)-->
                            <!--begin::Message(in)-->
                            <div class="d-flex justify-content-start mb-10">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-column align-items-start">
                                    <!--begin::User-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-15.jpg">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-3">
                                            <a href="#"
                                                class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                            <span class="text-muted fs-7 mb-1">5 Hours</span>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                        data-kt-element="message-text">Company BBQ to celebrate the last quater
                                        achievements and goals. Food and drinks provided</div>
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
                                            <a href="#"
                                                class="fs-5 fw-bolder text-gray-900 text-hover-primary ms-1">You</a>
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-26.jpg">
                                        </div>
                                        <!--end::Avatar-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-primary text-dark fw-bold mw-lg-400px text-end"
                                        data-kt-element="message-text"></div>
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
                                        <!--begin::Avatar-->
                                        <div class="symbol symbol-35px symbol-circle">
                                            <img alt="Pic" src="assets/media/avatars/150-15.jpg">
                                        </div>
                                        <!--end::Avatar-->
                                        <!--begin::Details-->
                                        <div class="ms-3">
                                            <a href="#"
                                                class="fs-5 fw-bolder text-gray-900 text-hover-primary me-1">Brian Cox</a>
                                            <span class="text-muted fs-7 mb-1">Just now</span>
                                        </div>
                                        <!--end::Details-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::Text-->
                                    <div class="p-5 rounded bg-light-info text-dark fw-bold mw-lg-400px text-start"
                                        data-kt-element="message-text">Right before vacation season we have the next Big
                                        Deal for you.</div>
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
                        <textarea class="form-control form-control-flush mb-3" rows="1" data-kt-element="input"
                            placeholder="Type a message"></textarea>
                        <!--end::Input-->
                        <!--begin:Toolbar-->
                        <div class="d-flex flex-stack">
                            <!--begin::Actions-->
                            <div class="d-flex align-items-center me-2">
                                <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                                    data-bs-toggle="tooltip" title="" data-bs-original-title="Coming soon">
                                    <i class="bi bi-paperclip fs-3"></i>
                                </button>
                                <button class="btn btn-sm btn-icon btn-active-light-primary me-1" type="button"
                                    data-bs-toggle="tooltip" title="" data-bs-original-title="Coming soon">
                                    <i class="bi bi-upload fs-3"></i>
                                </button>
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
            <!--begin::Exolore drawer toggle-->
            <button id="kt_explore_toggle"
                class="explore-toggle btn btn-sm bg-body btn-color-gray-700 btn-active-primary shadow-sm position-fixed px-5 fw-bolder zindex-2 top-50 mt-10 end-0 transform-90 fs-6 rounded-top-0"
                title="" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-trigger="hover"
                data-bs-original-title="Explore Metronic">
                <span id="kt_explore_toggle_label">Explore</span>
            </button>
            <!--end::Exolore drawer toggle-->
            <!--begin::Exolore drawer-->
            <div id="kt_explore" class="bg-body drawer drawer-end" data-kt-drawer="true"
                data-kt-drawer-name="explore" data-kt-drawer-activate="true" data-kt-drawer-overlay="true"
                data-kt-drawer-width="{default:'350px', 'lg': '475px'}" data-kt-drawer-direction="end"
                data-kt-drawer-toggle="#kt_explore_toggle" data-kt-drawer-close="#kt_explore_close"
                style="width: 475px !important;">
                <!--begin::Card-->
                <div class="card shadow-none rounded-0 w-100">
                    <!--begin::Header-->
                    <div class="card-header" id="kt_explore_header">
                        <h3 class="card-title fw-bolder text-gray-700">Explore Metronic</h3>
                        <div class="card-toolbar">
                            <button type="button" class="btn btn-sm btn-icon btn-active-light-primary me-n5"
                                id="kt_explore_close">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                            height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                            fill="black"></rect>
                                        <rect x="7.41422" y="6" width="16" height="2"
                                            rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </button>
                        </div>
                    </div>
                    <!--end::Header-->
                    <!--begin::Body-->
                    <div class="card-body" id="kt_explore_body">
                        <!--begin::Content-->
                        <div id="kt_explore_scroll" class="scroll-y me-n5 pe-5" data-kt-scroll="true"
                            data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_explore_body"
                            data-kt-scroll-dependencies="#kt_explore_header" data-kt-scroll-offset="5px"
                            style="height: 347px;">
                            <!--begin::Wrapper-->
                            <div class="mb-0">
                                <!--begin::Header-->
                                <div class="mb-7">
                                    <div class="d-flex flex-stack">
                                        <h3 class="mb-0">Metronic Licenses</h3>
                                        <a href="https://themeforest.net/licenses/standard" class="fw-bold"
                                            target="_blank">License FAQs</a>
                                    </div>
                                </div>
                                <!--end::Header-->
                                <!--begin::License-->
                                <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                                    <div class="d-flex flex-stack">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex align-items-center mb-1">
                                                <div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Regular License
                                                </div>
                                                <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
                                                    data-bs-toggle="popover" data-bs-custom-class="popover-dark"
                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                    data-bs-content="Use, by you or one client in a single end product which end users are not charged for."
                                                    data-bs-original-title="" title=""></i>
                                            </div>
                                            <div class="fs-7 text-muted">For single end product used by you or one client
                                            </div>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="text-muted fs-7 fw-bold me-n1">$</span>
                                            <span class="text-dark fs-1 fw-bolder">39</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end::License-->
                                <!--begin::License-->
                                <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                                    <div class="d-flex flex-stack">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex align-items-center mb-1">
                                                <div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Extended License
                                                </div>
                                                <i class="text-gray-400 fas fa-exclamation-circle ms-1 fs-7"
                                                    data-bs-toggle="popover" data-bs-custom-class="popover-dark"
                                                    data-bs-trigger="hover" data-bs-placement="top"
                                                    data-bs-content="Use, by you or one client, in a single end product which end users can be charged for."
                                                    data-bs-original-title="" title=""></i>
                                            </div>
                                            <div class="fs-7 text-muted">For single end product with paying users.</div>
                                        </div>
                                        <div class="text-nowrap">
                                            <span class="text-muted fs-7 fw-bold me-n1">$</span>
                                            <span class="text-dark fs-1 fw-bolder">939</span>
                                        </div>
                                    </div>
                                </div>
                                <!--end::License-->
                                <!--begin::License-->
                                <div class="rounded border border-dashed border-gray-300 py-4 px-6 mb-5">
                                    <div class="d-flex flex-stack">
                                        <div class="d-flex flex-column">
                                            <div class="d-flex align-items-center mb-1">
                                                <div class="fs-6 fw-bold text-gray-800 fw-bold mb-0 me-1">Custom License
                                                </div>
                                            </div>
                                            <div class="fs-7 text-muted">Reach us for custom license offers.</div>
                                        </div>
                                        <div class="text-nowrap">
                                            <a href="https://keenthemes.com/contact/" class="btn btn-sm btn-success"
                                                target="_blank">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                                <!--end::License-->
                                <!--begin::Purchase-->
                                <a href="https://1.envato.market/EA4JP" class="btn btn-primary mb-15 w-100">Buy Now</a>
                                <!--end::Purchase-->
                                <!--begin::Demos-->
                                <div class="mb-0">
                                    <h3 class="fw-bolder text-center mb-6">Metronic Demos</h3>
                                    <!--begin::Row-->
                                    <div class="row g-5">
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Demo-->
                                            <div class="overlay overflow-hidden position-relative rounded">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/demos/demo1.png" alt="demo"
                                                        class="w-100">
                                                </div>
                                                <div class="overlay-layer bg-dark bg-opacity-10">
                                                    <a href="https://preview.keenthemes.com/metronic8/demo1"
                                                        class="btn btn-sm btn-success shadow">Demo 1</a>
                                                </div>
                                            </div>
                                            <!--end::Demo-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Demo-->
                                            <div class="overlay overflow-hidden position-relative rounded">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/demos/demo2.png" alt="demo"
                                                        class="w-100">
                                                </div>
                                                <div class="overlay-layer bg-dark bg-opacity-10">
                                                    <a href="https://preview.keenthemes.com/metronic8/demo2"
                                                        class="btn btn-sm btn-success shadow">Demo 2</a>
                                                </div>
                                            </div>
                                            <!--end::Demo-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Demo-->
                                            <div class="overlay overflow-hidden position-relative rounded">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/demos/demo3.png" alt="demo"
                                                        class="w-100">
                                                </div>
                                                <div class="overlay-layer bg-dark bg-opacity-10">
                                                    <a href="https://preview.keenthemes.com/metronic8/demo3"
                                                        class="btn btn-sm btn-success shadow">Demo 3</a>
                                                </div>
                                            </div>
                                            <!--end::Demo-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Demo-->
                                            <div class="overlay overflow-hidden position-relative rounded">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/demos/demo4.png" alt="demo"
                                                        class="w-100">
                                                </div>
                                                <div class="overlay-layer bg-dark bg-opacity-10">
                                                    <a href="https://preview.keenthemes.com/metronic8/demo4"
                                                        class="btn btn-sm btn-success shadow">Demo 4</a>
                                                </div>
                                            </div>
                                            <!--end::Demo-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Demo-->
                                            <div class="overlay overflow-hidden position-relative rounded">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/demos/demo5.png" alt="demo"
                                                        class="w-100">
                                                </div>
                                                <div class="overlay-layer bg-dark bg-opacity-10">
                                                    <a href="https://preview.keenthemes.com/metronic8/demo5"
                                                        class="btn btn-sm btn-success shadow">Demo 5</a>
                                                </div>
                                            </div>
                                            <!--end::Demo-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Demo-->
                                            <div class="overlay overflow-hidden position-relative rounded">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/demos/demo6.png" alt="demo"
                                                        class="w-100">
                                                </div>
                                                <div class="overlay-layer bg-dark bg-opacity-10">
                                                    <a href="https://preview.keenthemes.com/metronic8/demo6"
                                                        class="btn btn-sm btn-success shadow">Demo 6</a>
                                                </div>
                                            </div>
                                            <!--end::Demo-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Demo-->
                                            <div class="overlay overflow-hidden position-relative rounded">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/demos/demo7.png" alt="demo"
                                                        class="w-100">
                                                </div>
                                                <div class="overlay-layer bg-dark bg-opacity-10">
                                                    <a href="https://preview.keenthemes.com/metronic8/demo7"
                                                        class="btn btn-sm btn-success shadow">Demo 7</a>
                                                </div>
                                            </div>
                                            <!--end::Demo-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Demo-->
                                            <div
                                                class="overlay overflow-hidden position-relative border border-4 border-success rounded">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/demos/demo8.png" alt="demo"
                                                        class="w-100">
                                                </div>
                                                <div class="overlay-layer bg-dark bg-opacity-10">
                                                    <a href="https://preview.keenthemes.com/metronic8/demo8"
                                                        class="btn btn-sm btn-success shadow">Demo 8</a>
                                                </div>
                                            </div>
                                            <!--end::Demo-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Demo-->
                                            <div class="overlay overflow-hidden position-relative rounded">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/demos/demo9.png" alt="demo"
                                                        class="w-100">
                                                </div>
                                                <div class="overlay-layer bg-dark bg-opacity-10">
                                                    <a href="https://preview.keenthemes.com/metronic8/demo9"
                                                        class="btn btn-sm btn-success shadow">Demo 9</a>
                                                </div>
                                            </div>
                                            <!--end::Demo-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Demo-->
                                            <div class="overlay overflow-hidden position-relative rounded">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/demos/demo10.png" alt="demo"
                                                        class="w-100 opacity-75">
                                                </div>
                                                <div class="overlay-layer bg-dark bg-opacity-10">
                                                    <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming
                                                        soon</div>
                                                </div>
                                            </div>
                                            <!--end::Demo-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Demo-->
                                            <div class="overlay overflow-hidden position-relative rounded">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/demos/demo11.png" alt="demo"
                                                        class="w-100 opacity-75">
                                                </div>
                                                <div class="overlay-layer bg-dark bg-opacity-10">
                                                    <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming
                                                        soon</div>
                                                </div>
                                            </div>
                                            <!--end::Demo-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Demo-->
                                            <div class="overlay overflow-hidden position-relative rounded">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/demos/demo12.png" alt="demo"
                                                        class="w-100 opacity-75">
                                                </div>
                                                <div class="overlay-layer bg-dark bg-opacity-10">
                                                    <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming
                                                        soon</div>
                                                </div>
                                            </div>
                                            <!--end::Demo-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Demo-->
                                            <div class="overlay overflow-hidden position-relative rounded">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/demos/demo13.png" alt="demo"
                                                        class="w-100">
                                                </div>
                                                <div class="overlay-layer bg-dark bg-opacity-10">
                                                    <a href="https://preview.keenthemes.com/metronic8/demo13"
                                                        class="btn btn-sm btn-success shadow">Demo 13</a>
                                                </div>
                                            </div>
                                            <!--end::Demo-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Demo-->
                                            <div class="overlay overflow-hidden position-relative rounded">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/demos/demo14.png" alt="demo"
                                                        class="w-100 opacity-75">
                                                </div>
                                                <div class="overlay-layer bg-dark bg-opacity-10">
                                                    <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming
                                                        soon</div>
                                                </div>
                                            </div>
                                            <!--end::Demo-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Demo-->
                                            <div class="overlay overflow-hidden position-relative rounded">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/demos/demo15.png" alt="demo"
                                                        class="w-100 opacity-75">
                                                </div>
                                                <div class="overlay-layer bg-dark bg-opacity-10">
                                                    <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming
                                                        soon</div>
                                                </div>
                                            </div>
                                            <!--end::Demo-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Demo-->
                                            <div class="overlay overflow-hidden position-relative rounded">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/demos/demo16.png" alt="demo"
                                                        class="w-100 opacity-75">
                                                </div>
                                                <div class="overlay-layer bg-dark bg-opacity-10">
                                                    <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming
                                                        soon</div>
                                                </div>
                                            </div>
                                            <!--end::Demo-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Demo-->
                                            <div class="overlay overflow-hidden position-relative rounded">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/demos/demo17.png" alt="demo"
                                                        class="w-100 opacity-75">
                                                </div>
                                                <div class="overlay-layer bg-dark bg-opacity-10">
                                                    <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming
                                                        soon</div>
                                                </div>
                                            </div>
                                            <!--end::Demo-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Demo-->
                                            <div class="overlay overflow-hidden position-relative rounded">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/demos/demo18.png" alt="demo"
                                                        class="w-100 opacity-75">
                                                </div>
                                                <div class="overlay-layer bg-dark bg-opacity-10">
                                                    <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming
                                                        soon</div>
                                                </div>
                                            </div>
                                            <!--end::Demo-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-6">
                                            <!--begin::Demo-->
                                            <div class="overlay overflow-hidden position-relative rounded">
                                                <div class="overlay-wrapper">
                                                    <img src="assets/media/demos/demo19.png" alt="demo"
                                                        class="w-100 opacity-75">
                                                </div>
                                                <div class="overlay-layer bg-dark bg-opacity-10">
                                                    <div class="badge badge-white px-6 py-4 fw-bold fs-base shadow">Coming
                                                        soon</div>
                                                </div>
                                            </div>
                                            <!--end::Demo-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Demos-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <!--end::Body-->
                </div>
                <!--end::Card-->
            </div>
            <!--end::Exolore drawer-->
            <!--end::Drawers-->
            <!--begin::Modals-->
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
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                            height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                            fill="black"></rect>
                                        <rect x="7.41422" y="6" width="16" height="2"
                                            rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
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
                                <div class="text-muted fw-bold fs-5">If you need more info, please check out
                                    <a href="#" class="link-primary fw-bolder">FAQ Page</a>.
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Google Contacts Invite-->
                            <div class="btn btn-light-primary fw-bolder w-100 mb-8">
                                <img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg"
                                    class="h-20px me-3">Invite Gmail Contacts
                            </div>
                            <!--end::Google Contacts Invite-->
                            <!--begin::Separator-->
                            <div class="separator d-flex flex-center mb-8">
                                <span class="text-uppercase bg-body fs-7 fw-bold text-muted px-3">or</span>
                            </div>
                            <!--end::Separator-->
                            <!--begin::Textarea-->
                            <textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
                            <!--end::Textarea-->
                            <!--begin::Users-->
                            <div class="mb-10">
                                <!--begin::Heading-->
                                <div class="fs-6 fw-bold mb-2">Your Invitations</div>
                                <!--end::Heading-->
                                <!--begin::List-->
                                <div class="mh-300px scroll-y me-n7 pe-7">
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-1.jpg">
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
                                                    Smith</a>
                                                <div class="fw-bold text-muted">e.smith@kpmg.com.au</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select
                                                class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                data-control="select2" data-hide-search="true"
                                                data-select2-id="select2-data-10-k75c" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected"
                                                    data-select2-id="select2-data-12-ov07">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                                dir="ltr" data-select2-id="select2-data-11-arys"
                                                style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-1c1d-container"
                                                        aria-controls="select2-1c1d-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-1c1d-container" role="textbox"
                                                            aria-readonly="true" title="Owner">Owner</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-bold">M</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Melody
                                                    Macy</a>
                                                <div class="fw-bold text-muted">melody@altbox.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select
                                                class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                data-control="select2" data-hide-search="true"
                                                data-select2-id="select2-data-13-3ekn" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="1" selected="selected"
                                                    data-select2-id="select2-data-15-9sd6">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                                dir="ltr" data-select2-id="select2-data-14-86qf"
                                                style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-jqj9-container"
                                                        aria-controls="select2-jqj9-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-jqj9-container" role="textbox"
                                                            aria-readonly="true" title="Guest">Guest</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-26.jpg">
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Max
                                                    Smith</a>
                                                <div class="fw-bold text-muted">max@kt.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select
                                                class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                data-control="select2" data-hide-search="true"
                                                data-select2-id="select2-data-16-i72s" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected"
                                                    data-select2-id="select2-data-18-78k7">Can Edit</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                                dir="ltr" data-select2-id="select2-data-17-cix6"
                                                style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-3kcl-container"
                                                        aria-controls="select2-3kcl-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-3kcl-container" role="textbox"
                                                            aria-readonly="true" title="Can Edit">Can Edit</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-4.jpg">
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Sean
                                                    Bean</a>
                                                <div class="fw-bold text-muted">sean@dellito.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select
                                                class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                data-control="select2" data-hide-search="true"
                                                data-select2-id="select2-data-19-avam" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected"
                                                    data-select2-id="select2-data-21-gpje">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                                dir="ltr" data-select2-id="select2-data-20-55qu"
                                                style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-77de-container"
                                                        aria-controls="select2-77de-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-77de-container" role="textbox"
                                                            aria-readonly="true" title="Owner">Owner</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-15.jpg">
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Brian
                                                    Cox</a>
                                                <div class="fw-bold text-muted">brian@exchange.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select
                                                class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                data-control="select2" data-hide-search="true"
                                                data-select2-id="select2-data-22-8mj6" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected"
                                                    data-select2-id="select2-data-24-ocnr">Can Edit</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                                dir="ltr" data-select2-id="select2-data-23-tqul"
                                                style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-av2t-container"
                                                        aria-controls="select2-av2t-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-av2t-container" role="textbox"
                                                            aria-readonly="true" title="Can Edit">Can Edit</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-warning text-warning fw-bold">M</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Mikaela
                                                    Collins</a>
                                                <div class="fw-bold text-muted">mikaela@pexcom.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select
                                                class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                data-control="select2" data-hide-search="true"
                                                data-select2-id="select2-data-25-183i" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected"
                                                    data-select2-id="select2-data-27-n2x9">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                                dir="ltr" data-select2-id="select2-data-26-v5ns"
                                                style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-9cez-container"
                                                        aria-controls="select2-9cez-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-9cez-container" role="textbox"
                                                            aria-readonly="true" title="Owner">Owner</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-8.jpg">
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Francis
                                                    Mitcham</a>
                                                <div class="fw-bold text-muted">f.mitcham@kpmg.com.au</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select
                                                class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                data-control="select2" data-hide-search="true"
                                                data-select2-id="select2-data-28-0ryd" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected"
                                                    data-select2-id="select2-data-30-rizs">Can Edit</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                                dir="ltr" data-select2-id="select2-data-29-77ta"
                                                style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-4vns-container"
                                                        aria-controls="select2-4vns-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-4vns-container" role="textbox"
                                                            aria-readonly="true" title="Can Edit">Can Edit</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-bold">O</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Olivia
                                                    Wild</a>
                                                <div class="fw-bold text-muted">olivia@corpmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select
                                                class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                data-control="select2" data-hide-search="true"
                                                data-select2-id="select2-data-31-2waq" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected"
                                                    data-select2-id="select2-data-33-g7ym">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                                dir="ltr" data-select2-id="select2-data-32-pcyx"
                                                style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-dwrf-container"
                                                        aria-controls="select2-dwrf-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-dwrf-container" role="textbox"
                                                            aria-readonly="true" title="Owner">Owner</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-primary text-primary fw-bold">N</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Neil
                                                    Owen</a>
                                                <div class="fw-bold text-muted">owen.neil@gmail.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select
                                                class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                data-control="select2" data-hide-search="true"
                                                data-select2-id="select2-data-34-ugvf" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="1" selected="selected"
                                                    data-select2-id="select2-data-36-t9fp">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                                dir="ltr" data-select2-id="select2-data-35-gubm"
                                                style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-rnt3-container"
                                                        aria-controls="select2-rnt3-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-rnt3-container" role="textbox"
                                                            aria-readonly="true" title="Guest">Guest</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-6.jpg">
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan
                                                    Wilson</a>
                                                <div class="fw-bold text-muted">dam@consilting.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select
                                                class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                data-control="select2" data-hide-search="true"
                                                data-select2-id="select2-data-37-f3zz" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected"
                                                    data-select2-id="select2-data-39-3nin">Can Edit</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                                dir="ltr" data-select2-id="select2-data-38-2guf"
                                                style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-t6b0-container"
                                                        aria-controls="select2-t6b0-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-t6b0-container" role="textbox"
                                                            aria-readonly="true" title="Can Edit">Can Edit</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-danger text-danger fw-bold">E</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Emma
                                                    Bold</a>
                                                <div class="fw-bold text-muted">emma@intenso.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select
                                                class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                data-control="select2" data-hide-search="true"
                                                data-select2-id="select2-data-40-3td3" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected"
                                                    data-select2-id="select2-data-42-ach1">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                                dir="ltr" data-select2-id="select2-data-41-j782"
                                                style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-wid8-container"
                                                        aria-controls="select2-wid8-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-wid8-container" role="textbox"
                                                            aria-readonly="true" title="Owner">Owner</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-7.jpg">
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ana
                                                    Crown</a>
                                                <div class="fw-bold text-muted">ana.cf@limtel.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select
                                                class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                data-control="select2" data-hide-search="true"
                                                data-select2-id="select2-data-43-s88l" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="1" selected="selected"
                                                    data-select2-id="select2-data-45-tmun">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                                dir="ltr" data-select2-id="select2-data-44-dvhv"
                                                style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-p2sn-container"
                                                        aria-controls="select2-p2sn-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-p2sn-container" role="textbox"
                                                            aria-readonly="true" title="Guest">Guest</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-info text-info fw-bold">A</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Robert
                                                    Doe</a>
                                                <div class="fw-bold text-muted">robert@benko.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select
                                                class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                data-control="select2" data-hide-search="true"
                                                data-select2-id="select2-data-46-9p6j" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected"
                                                    data-select2-id="select2-data-48-jx2q">Can Edit</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                                dir="ltr" data-select2-id="select2-data-47-cg7p"
                                                style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-sei9-container"
                                                        aria-controls="select2-sei9-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-sei9-container" role="textbox"
                                                            aria-readonly="true" title="Can Edit">Can Edit</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-17.jpg">
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">John
                                                    Miller</a>
                                                <div class="fw-bold text-muted">miller@mapple.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select
                                                class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                data-control="select2" data-hide-search="true"
                                                data-select2-id="select2-data-49-7bsx" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected"
                                                    data-select2-id="select2-data-51-duno">Can Edit</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                                dir="ltr" data-select2-id="select2-data-50-0jse"
                                                style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-qufy-container"
                                                        aria-controls="select2-qufy-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-qufy-container" role="textbox"
                                                            aria-readonly="true" title="Can Edit">Can Edit</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <span class="symbol-label bg-light-success text-success fw-bold">L</span>
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Lucy
                                                    Kunic</a>
                                                <div class="fw-bold text-muted">lucy.m@fentech.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select
                                                class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                data-control="select2" data-hide-search="true"
                                                data-select2-id="select2-data-52-gz0z" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="1">Guest</option>
                                                <option value="2" selected="selected"
                                                    data-select2-id="select2-data-54-jjpf">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                                dir="ltr" data-select2-id="select2-data-53-jjcr"
                                                style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-sob7-container"
                                                        aria-controls="select2-sob7-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-sob7-container" role="textbox"
                                                            aria-readonly="true" title="Owner">Owner</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div
                                        class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-10.jpg">
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Ethan
                                                    Wilder</a>
                                                <div class="fw-bold text-muted">ethan@loop.com.au</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select
                                                class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                data-control="select2" data-hide-search="true"
                                                data-select2-id="select2-data-55-3gwa" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="1" selected="selected"
                                                    data-select2-id="select2-data-57-zrj7">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3">Can Edit</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                                dir="ltr" data-select2-id="select2-data-56-0bln"
                                                style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-qrjm-container"
                                                        aria-controls="select2-qrjm-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-qrjm-container" role="textbox"
                                                            aria-readonly="true" title="Guest">Guest</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <!--end::Access menu-->
                                    </div>
                                    <!--end::User-->
                                    <!--begin::User-->
                                    <div class="d-flex flex-stack py-4">
                                        <!--begin::Details-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Avatar-->
                                            <div class="symbol symbol-35px symbol-circle">
                                                <img alt="Pic" src="assets/media/avatars/150-6.jpg">
                                            </div>
                                            <!--end::Avatar-->
                                            <!--begin::Details-->
                                            <div class="ms-5">
                                                <a href="#"
                                                    class="fs-5 fw-bolder text-gray-900 text-hover-primary mb-2">Dan
                                                    Wilson</a>
                                                <div class="fw-bold text-muted">dam@consilting.com</div>
                                            </div>
                                            <!--end::Details-->
                                        </div>
                                        <!--end::Details-->
                                        <!--begin::Access menu-->
                                        <div class="ms-2 w-100px">
                                            <select
                                                class="form-select form-select-solid form-select-sm select2-hidden-accessible"
                                                data-control="select2" data-hide-search="true"
                                                data-select2-id="select2-data-58-y5tl" tabindex="-1"
                                                aria-hidden="true">
                                                <option value="1">Guest</option>
                                                <option value="2">Owner</option>
                                                <option value="3" selected="selected"
                                                    data-select2-id="select2-data-60-n5ep">Can Edit</option>
                                            </select><span class="select2 select2-container select2-container--bootstrap5"
                                                dir="ltr" data-select2-id="select2-data-59-n70a"
                                                style="width: 100%;"><span class="selection"><span
                                                        class="select2-selection select2-selection--single form-select form-select-solid form-select-sm"
                                                        role="combobox" aria-haspopup="true" aria-expanded="false"
                                                        tabindex="0" aria-disabled="false"
                                                        aria-labelledby="select2-ri33-container"
                                                        aria-controls="select2-ri33-container"><span
                                                            class="select2-selection__rendered"
                                                            id="select2-ri33-container" role="textbox"
                                                            aria-readonly="true" title="Can Edit">Can Edit</span><span
                                                            class="select2-selection__arrow" role="presentation"><b
                                                                role="presentation"></b></span></span></span><span
                                                    class="dropdown-wrapper" aria-hidden="true"></span></span>
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
                                <div class="me-5 fw-bold">
                                    <label class="fs-6">Adding Users by Team Members</label>
                                    <div class="fs-7 text-muted">If you need more info, please check budget planning</div>
                                </div>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <label class="form-check form-switch form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="1"
                                        checked="checked">
                                    <span class="form-check-label fw-bold text-muted">Allowed</span>
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
            <!--end::Modal - Invite Friend-->
            <!--begin::Modal - Create App-->
            <div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
                <!--begin::Modal dialog-->
                <div class="modal-dialog modal-dialog-centered mw-900px">
                    <!--begin::Modal content-->
                    <div class="modal-content">
                        <!--begin::Modal header-->
                        <div class="modal-header">
                            <!--begin::Modal title-->
                            <h2>Create App</h2>
                            <!--end::Modal title-->
                            <!--begin::Close-->
                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                            height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                            fill="black"></rect>
                                        <rect x="7.41422" y="6" width="16" height="2"
                                            rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body py-lg-10 px-lg-10">
                            <!--begin::Stepper-->
                            <div class="stepper stepper-pills stepper-column d-flex flex-column flex-xl-row flex-row-fluid"
                                id="kt_modal_create_app_stepper" data-kt-stepper="true">
                                <!--begin::Aside-->
                                <div
                                    class="d-flex justify-content-center justify-content-xl-start flex-row-auto w-100 w-xl-300px">
                                    <!--begin::Nav-->
                                    <div class="stepper-nav ps-lg-10">
                                        <!--begin::Step 1-->
                                        <div class="stepper-item current" data-kt-stepper-element="nav">
                                            <!--begin::Line-->
                                            <div class="stepper-line w-40px"></div>
                                            <!--end::Line-->
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number">1</span>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">Details</h3>
                                                <div class="stepper-desc">Name your App</div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Step 1-->
                                        <!--begin::Step 2-->
                                        <div class="stepper-item" data-kt-stepper-element="nav">
                                            <!--begin::Line-->
                                            <div class="stepper-line w-40px"></div>
                                            <!--end::Line-->
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number">2</span>
                                            </div>
                                            <!--begin::Icon-->
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">Frameworks</h3>
                                                <div class="stepper-desc">Define your app framework</div>
                                            </div>
                                            <!--begin::Label-->
                                        </div>
                                        <!--end::Step 2-->
                                        <!--begin::Step 3-->
                                        <div class="stepper-item" data-kt-stepper-element="nav">
                                            <!--begin::Line-->
                                            <div class="stepper-line w-40px"></div>
                                            <!--end::Line-->
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number">3</span>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">Database</h3>
                                                <div class="stepper-desc">Select the app database type</div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Step 3-->
                                        <!--begin::Step 4-->
                                        <div class="stepper-item" data-kt-stepper-element="nav">
                                            <!--begin::Line-->
                                            <div class="stepper-line w-40px"></div>
                                            <!--end::Line-->
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number">4</span>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">Billing</h3>
                                                <div class="stepper-desc">Provide payment details</div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Step 4-->
                                        <!--begin::Step 5-->
                                        <div class="stepper-item" data-kt-stepper-element="nav">
                                            <!--begin::Line-->
                                            <div class="stepper-line w-40px"></div>
                                            <!--end::Line-->
                                            <!--begin::Icon-->
                                            <div class="stepper-icon w-40px h-40px">
                                                <i class="stepper-check fas fa-check"></i>
                                                <span class="stepper-number">5</span>
                                            </div>
                                            <!--end::Icon-->
                                            <!--begin::Label-->
                                            <div class="stepper-label">
                                                <h3 class="stepper-title">Completed</h3>
                                                <div class="stepper-desc">Review and Submit</div>
                                            </div>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Step 5-->
                                    </div>
                                    <!--end::Nav-->
                                </div>
                                <!--begin::Aside-->
                                <!--begin::Content-->
                                <div class="flex-row-fluid py-lg-5 px-lg-15">
                                    <!--begin::Form-->
                                    <form class="form fv-plugins-bootstrap5 fv-plugins-framework"
                                        novalidate="novalidate" id="kt_modal_create_app_form">
                                        <!--begin::Step 1-->
                                        <div class="current" data-kt-stepper-element="content">
                                            <div class="w-100">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-bold mb-2">
                                                        <span class="required">App Name</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Specify your unique app name"
                                                            aria-label="Specify your unique app name"></i>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text"
                                                        class="form-control form-control-lg form-control-solid"
                                                        name="name" placeholder="" value="">
                                                    <!--end::Input-->
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                                        <span class="required">Category</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Select your app category"
                                                            aria-label="Select your app category"></i>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin:Options-->
                                                    <div class="fv-row fv-plugins-icon-container">
                                                        <!--begin:Option-->
                                                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                            <!--begin:Label-->
                                                            <span class="d-flex align-items-center me-2">
                                                                <!--begin:Icon-->
                                                                <span class="symbol symbol-50px me-6">
                                                                    <span class="symbol-label bg-light-primary">
                                                                        <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                                                        <span
                                                                            class="svg-icon svg-icon-1 svg-icon-primary">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.3"
                                                                                    d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z"
                                                                                    fill="black"></path>
                                                                                <path
                                                                                    d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </span>
                                                                <!--end:Icon-->
                                                                <!--begin:Info-->
                                                                <span class="d-flex flex-column">
                                                                    <span class="fw-bolder fs-6">Quick Online
                                                                        Courses</span>
                                                                    <span class="fs-7 text-muted">Creating a clear text
                                                                        structure is just one SEO</span>
                                                                </span>
                                                                <!--end:Info-->
                                                            </span>
                                                            <!--end:Label-->
                                                            <!--begin:Input-->
                                                            <span class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="radio"
                                                                    name="category" value="1">
                                                            </span>
                                                            <!--end:Input-->
                                                        </label>
                                                        <!--end::Option-->
                                                        <!--begin:Option-->
                                                        <label class="d-flex flex-stack mb-5 cursor-pointer">
                                                            <!--begin:Label-->
                                                            <span class="d-flex align-items-center me-2">
                                                                <!--begin:Icon-->
                                                                <span class="symbol symbol-50px me-6">
                                                                    <span class="symbol-label bg-light-danger">
                                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen024.svg-->
                                                                        <span class="svg-icon svg-icon-1 svg-icon-danger">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24px" height="24px"
                                                                                viewBox="0 0 24 24">
                                                                                <g stroke="none" stroke-width="1"
                                                                                    fill="none" fill-rule="evenodd">
                                                                                    <rect x="5" y="5"
                                                                                        width="5" height="5"
                                                                                        rx="1" fill="#000000">
                                                                                    </rect>
                                                                                    <rect x="14" y="5"
                                                                                        width="5" height="5"
                                                                                        rx="1" fill="#000000"
                                                                                        opacity="0.3"></rect>
                                                                                    <rect x="5" y="14"
                                                                                        width="5" height="5"
                                                                                        rx="1" fill="#000000"
                                                                                        opacity="0.3"></rect>
                                                                                    <rect x="14" y="14"
                                                                                        width="5" height="5"
                                                                                        rx="1" fill="#000000"
                                                                                        opacity="0.3"></rect>
                                                                                </g>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </span>
                                                                <!--end:Icon-->
                                                                <!--begin:Info-->
                                                                <span class="d-flex flex-column">
                                                                    <span class="fw-bolder fs-6">Face to Face
                                                                        Discussions</span>
                                                                    <span class="fs-7 text-muted">Creating a clear text
                                                                        structure is just one aspect</span>
                                                                </span>
                                                                <!--end:Info-->
                                                            </span>
                                                            <!--end:Label-->
                                                            <!--begin:Input-->
                                                            <span class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="radio"
                                                                    name="category" value="2">
                                                            </span>
                                                            <!--end:Input-->
                                                        </label>
                                                        <!--end::Option-->
                                                        <!--begin:Option-->
                                                        <label class="d-flex flex-stack cursor-pointer">
                                                            <!--begin:Label-->
                                                            <span class="d-flex align-items-center me-2">
                                                                <!--begin:Icon-->
                                                                <span class="symbol symbol-50px me-6">
                                                                    <span class="symbol-label bg-light-success">
                                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen013.svg-->
                                                                        <span
                                                                            class="svg-icon svg-icon-1 svg-icon-success">
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                width="24" height="24"
                                                                                viewBox="0 0 24 24" fill="none">
                                                                                <path opacity="0.3"
                                                                                    d="M20.9 12.9C20.3 12.9 19.9 12.5 19.9 11.9C19.9 11.3 20.3 10.9 20.9 10.9H21.8C21.3 6.2 17.6 2.4 12.9 2V2.9C12.9 3.5 12.5 3.9 11.9 3.9C11.3 3.9 10.9 3.5 10.9 2.9V2C6.19999 2.5 2.4 6.2 2 10.9H2.89999C3.49999 10.9 3.89999 11.3 3.89999 11.9C3.89999 12.5 3.49999 12.9 2.89999 12.9H2C2.5 17.6 6.19999 21.4 10.9 21.8V20.9C10.9 20.3 11.3 19.9 11.9 19.9C12.5 19.9 12.9 20.3 12.9 20.9V21.8C17.6 21.3 21.4 17.6 21.8 12.9H20.9Z"
                                                                                    fill="black"></path>
                                                                                <path
                                                                                    d="M16.9 10.9H13.6C13.4 10.6 13.2 10.4 12.9 10.2V5.90002C12.9 5.30002 12.5 4.90002 11.9 4.90002C11.3 4.90002 10.9 5.30002 10.9 5.90002V10.2C10.6 10.4 10.4 10.6 10.2 10.9H9.89999C9.29999 10.9 8.89999 11.3 8.89999 11.9C8.89999 12.5 9.29999 12.9 9.89999 12.9H10.2C10.4 13.2 10.6 13.4 10.9 13.6V13.9C10.9 14.5 11.3 14.9 11.9 14.9C12.5 14.9 12.9 14.5 12.9 13.9V13.6C13.2 13.4 13.4 13.2 13.6 12.9H16.9C17.5 12.9 17.9 12.5 17.9 11.9C17.9 11.3 17.5 10.9 16.9 10.9Z"
                                                                                    fill="black"></path>
                                                                            </svg>
                                                                        </span>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </span>
                                                                <!--end:Icon-->
                                                                <!--begin:Info-->
                                                                <span class="d-flex flex-column">
                                                                    <span class="fw-bolder fs-6">Full Intro
                                                                        Training</span>
                                                                    <span class="fs-7 text-muted">Creating a clear text
                                                                        structure copywriting</span>
                                                                </span>
                                                                <!--end:Info-->
                                                            </span>
                                                            <!--end:Label-->
                                                            <!--begin:Input-->
                                                            <span class="form-check form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="radio"
                                                                    name="category" value="3">
                                                            </span>
                                                            <!--end:Input-->
                                                        </label>
                                                        <!--end::Option-->
                                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                                    </div>
                                                    <!--end:Options-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                        </div>
                                        <!--end::Step 1-->
                                        <!--begin::Step 2-->
                                        <div data-kt-stepper-element="content">
                                            <div class="w-100">
                                                <!--begin::Input group-->
                                                <div class="fv-row fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                                        <span class="required">Select Framework</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Specify your apps framework"
                                                            aria-label="Specify your apps framework"></i>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack cursor-pointer mb-5">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin:Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-warning">
                                                                    <i class="fab fa-html5 text-warning fs-2x"></i>
                                                                </span>
                                                            </span>
                                                            <!--end:Icon-->
                                                            <!--begin:Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bolder fs-6">HTML5</span>
                                                                <span class="fs-7 text-muted">Base Web Projec</span>
                                                            </span>
                                                            <!--end:Info-->
                                                        </span>
                                                        <!--end:Label-->
                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio"
                                                                checked="checked" name="framework" value="1">
                                                        </span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack cursor-pointer mb-5">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin:Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-success">
                                                                    <i class="fab fa-react text-success fs-2x"></i>
                                                                </span>
                                                            </span>
                                                            <!--end:Icon-->
                                                            <!--begin:Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bolder fs-6">ReactJS</span>
                                                                <span class="fs-7 text-muted">Robust and flexible app
                                                                    framework</span>
                                                            </span>
                                                            <!--end:Info-->
                                                        </span>
                                                        <!--end:Label-->
                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio"
                                                                name="framework" value="2">
                                                        </span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack cursor-pointer mb-5">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin:Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-danger">
                                                                    <i class="fab fa-angular text-danger fs-2x"></i>
                                                                </span>
                                                            </span>
                                                            <!--end:Icon-->
                                                            <!--begin:Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bolder fs-6">Angular</span>
                                                                <span class="fs-7 text-muted">Powerful data
                                                                    mangement</span>
                                                            </span>
                                                            <!--end:Info-->
                                                        </span>
                                                        <!--end:Label-->
                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio"
                                                                name="framework" value="3">
                                                        </span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack cursor-pointer">
                                                        <!--begin:Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin:Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-primary">
                                                                    <i class="fab fa-vuejs text-primary fs-2x"></i>
                                                                </span>
                                                            </span>
                                                            <!--end:Icon-->
                                                            <!--begin:Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bolder fs-6">Vue</span>
                                                                <span class="fs-7 text-muted">Lightweight and responsive
                                                                    framework</span>
                                                            </span>
                                                            <!--end:Info-->
                                                        </span>
                                                        <!--end:Label-->
                                                        <!--begin:Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio"
                                                                name="framework" value="4">
                                                        </span>
                                                        <!--end:Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                        </div>
                                        <!--end::Step 2-->
                                        <!--begin::Step 3-->
                                        <div data-kt-stepper-element="content">
                                            <div class="w-100">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10 fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="required fs-5 fw-bold mb-2">Database Name</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text"
                                                        class="form-control form-control-lg form-control-solid"
                                                        name="dbname" placeholder="" value="master_db">
                                                    <!--end::Input-->
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-5 fw-bold mb-4">
                                                        <span class="required">Select Database Engine</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Select your app database engine"
                                                            aria-label="Select your app database engine"></i>
                                                    </label>
                                                    <!--end::Label-->
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack cursor-pointer mb-5">
                                                        <!--begin::Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin::Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-success">
                                                                    <i class="fas fa-database text-success fs-2x"></i>
                                                                </span>
                                                            </span>
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bolder fs-6">MySQL</span>
                                                                <span class="fs-7 text-muted">Basic MySQL database</span>
                                                            </span>
                                                            <!--end::Info-->
                                                        </span>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio"
                                                                name="dbengine" checked="checked" value="1">
                                                        </span>
                                                        <!--end::Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack cursor-pointer mb-5">
                                                        <!--begin::Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin::Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-danger">
                                                                    <i class="fab fa-google text-danger fs-2x"></i>
                                                                </span>
                                                            </span>
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bolder fs-6">Firebase</span>
                                                                <span class="fs-7 text-muted">Google based app data
                                                                    management</span>
                                                            </span>
                                                            <!--end::Info-->
                                                        </span>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio"
                                                                name="dbengine" value="2">
                                                        </span>
                                                        <!--end::Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <!--begin:Option-->
                                                    <label class="d-flex flex-stack cursor-pointer">
                                                        <!--begin::Label-->
                                                        <span class="d-flex align-items-center me-2">
                                                            <!--begin::Icon-->
                                                            <span class="symbol symbol-50px me-6">
                                                                <span class="symbol-label bg-light-warning">
                                                                    <i class="fab fa-amazon text-warning fs-2x"></i>
                                                                </span>
                                                            </span>
                                                            <!--end::Icon-->
                                                            <!--begin::Info-->
                                                            <span class="d-flex flex-column">
                                                                <span class="fw-bolder fs-6">DynamoDB</span>
                                                                <span class="fs-7 text-muted">Amazon Fast NoSQL
                                                                    Database</span>
                                                            </span>
                                                            <!--end::Info-->
                                                        </span>
                                                        <!--end::Label-->
                                                        <!--begin::Input-->
                                                        <span class="form-check form-check-custom form-check-solid">
                                                            <input class="form-check-input" type="radio"
                                                                name="dbengine" value="3">
                                                        </span>
                                                        <!--end::Input-->
                                                    </label>
                                                    <!--end::Option-->
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                        </div>
                                        <!--end::Step 3-->
                                        <!--begin::Step 4-->
                                        <div data-kt-stepper-element="content">
                                            <div class="w-100">
                                                <!--begin::Input group-->
                                                <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                        <span class="required">Name On Card</span>
                                                        <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                            data-bs-toggle="tooltip" title=""
                                                            data-bs-original-title="Specify a card holder's name"
                                                            aria-label="Specify a card holder's name"></i>
                                                    </label>
                                                    <!--end::Label-->
                                                    <input type="text" class="form-control form-control-solid"
                                                        placeholder="" name="card_name" value="Max Doe">
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="d-flex flex-column mb-7 fv-row fv-plugins-icon-container">
                                                    <!--begin::Label-->
                                                    <label class="required fs-6 fw-bold form-label mb-2">Card
                                                        Number</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input wrapper-->
                                                    <div class="position-relative">
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control form-control-solid"
                                                            placeholder="Enter card number" name="card_number"
                                                            value="4111 1111 1111 1111">
                                                        <!--end::Input-->
                                                        <!--begin::Card logos-->
                                                        <div
                                                            class="position-absolute translate-middle-y top-50 end-0 me-5">
                                                            <img src="assets/media/svg/card-logos/visa.svg"
                                                                alt="" class="h-25px">
                                                            <img src="assets/media/svg/card-logos/mastercard.svg"
                                                                alt="" class="h-25px">
                                                            <img src="assets/media/svg/card-logos/american-express.svg"
                                                                alt="" class="h-25px">
                                                        </div>
                                                        <!--end::Card logos-->
                                                    </div>
                                                    <!--end::Input wrapper-->
                                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="row mb-10">
                                                    <!--begin::Col-->
                                                    <div class="col-md-8 fv-row">
                                                        <!--begin::Label-->
                                                        <label class="required fs-6 fw-bold form-label mb-2">Expiration
                                                            Date</label>
                                                        <!--end::Label-->
                                                        <!--begin::Row-->
                                                        <div class="row fv-row fv-plugins-icon-container">
                                                            <!--begin::Col-->
                                                            <div class="col-6">
                                                                <select name="card_expiry_month"
                                                                    class="form-select form-select-solid select2-hidden-accessible"
                                                                    data-control="select2" data-hide-search="true"
                                                                    data-placeholder="Month"
                                                                    data-select2-id="select2-data-61-z23r"
                                                                    tabindex="-1" aria-hidden="true">
                                                                    <option data-select2-id="select2-data-63-6ov4">
                                                                    </option>
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
                                                                </select><span
                                                                    class="select2 select2-container select2-container--bootstrap5"
                                                                    dir="ltr"
                                                                    data-select2-id="select2-data-62-d1ze"
                                                                    style="width: 100%;"><span class="selection"><span
                                                                            class="select2-selection select2-selection--single form-select form-select-solid"
                                                                            role="combobox" aria-haspopup="true"
                                                                            aria-expanded="false" tabindex="0"
                                                                            aria-disabled="false"
                                                                            aria-labelledby="select2-card_expiry_month-14-container"
                                                                            aria-controls="select2-card_expiry_month-14-container"><span
                                                                                class="select2-selection__rendered"
                                                                                id="select2-card_expiry_month-14-container"
                                                                                role="textbox" aria-readonly="true"
                                                                                title="Month"><span
                                                                                    class="select2-selection__placeholder">Month</span></span><span
                                                                                class="select2-selection__arrow"
                                                                                role="presentation"><b
                                                                                    role="presentation"></b></span></span></span><span
                                                                        class="dropdown-wrapper"
                                                                        aria-hidden="true"></span></span>
                                                                <div
                                                                    class="fv-plugins-message-container invalid-feedback">
                                                                </div>
                                                            </div>
                                                            <!--end::Col-->
                                                            <!--begin::Col-->
                                                            <div class="col-6">
                                                                <select name="card_expiry_year"
                                                                    class="form-select form-select-solid select2-hidden-accessible"
                                                                    data-control="select2" data-hide-search="true"
                                                                    data-placeholder="Year"
                                                                    data-select2-id="select2-data-64-n2is"
                                                                    tabindex="-1" aria-hidden="true">
                                                                    <option data-select2-id="select2-data-66-qdl4">
                                                                    </option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2024">2024</option>
                                                                    <option value="2025">2025</option>
                                                                    <option value="2026">2026</option>
                                                                    <option value="2027">2027</option>
                                                                    <option value="2028">2028</option>
                                                                    <option value="2029">2029</option>
                                                                    <option value="2030">2030</option>
                                                                    <option value="2031">2031</option>
                                                                </select><span
                                                                    class="select2 select2-container select2-container--bootstrap5"
                                                                    dir="ltr"
                                                                    data-select2-id="select2-data-65-t9sv"
                                                                    style="width: 100%;"><span class="selection"><span
                                                                            class="select2-selection select2-selection--single form-select form-select-solid"
                                                                            role="combobox" aria-haspopup="true"
                                                                            aria-expanded="false" tabindex="0"
                                                                            aria-disabled="false"
                                                                            aria-labelledby="select2-card_expiry_year-ki-container"
                                                                            aria-controls="select2-card_expiry_year-ki-container"><span
                                                                                class="select2-selection__rendered"
                                                                                id="select2-card_expiry_year-ki-container"
                                                                                role="textbox" aria-readonly="true"
                                                                                title="Year"><span
                                                                                    class="select2-selection__placeholder">Year</span></span><span
                                                                                class="select2-selection__arrow"
                                                                                role="presentation"><b
                                                                                    role="presentation"></b></span></span></span><span
                                                                        class="dropdown-wrapper"
                                                                        aria-hidden="true"></span></span>
                                                                <div
                                                                    class="fv-plugins-message-container invalid-feedback">
                                                                </div>
                                                            </div>
                                                            <!--end::Col-->
                                                        </div>
                                                        <!--end::Row-->
                                                    </div>
                                                    <!--end::Col-->
                                                    <!--begin::Col-->
                                                    <div class="col-md-4 fv-row fv-plugins-icon-container">
                                                        <!--begin::Label-->
                                                        <label
                                                            class="d-flex align-items-center fs-6 fw-bold form-label mb-2">
                                                            <span class="required">CVV</span>
                                                            <i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                data-bs-toggle="tooltip" title=""
                                                                data-bs-original-title="Enter a card CVV code"
                                                                aria-label="Enter a card CVV code"></i>
                                                        </label>
                                                        <!--end::Label-->
                                                        <!--begin::Input wrapper-->
                                                        <div class="position-relative">
                                                            <!--begin::Input-->
                                                            <input type="text"
                                                                class="form-control form-control-solid" minlength="3"
                                                                maxlength="4" placeholder="CVV" name="card_cvv">
                                                            <!--end::Input-->
                                                            <!--begin::CVV icon-->
                                                            <div
                                                                class="position-absolute translate-middle-y top-50 end-0 me-3">
                                                                <!--begin::Svg Icon | path: icons/duotune/finance/fin002.svg-->
                                                                <span class="svg-icon svg-icon-2hx">
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        width="24" height="24"
                                                                        viewBox="0 0 24 24" fill="none">
                                                                        <path d="M22 7H2V11H22V7Z" fill="black">
                                                                        </path>
                                                                        <path opacity="0.3"
                                                                            d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19ZM14 14C14 13.4 13.6 13 13 13H5C4.4 13 4 13.4 4 14C4 14.6 4.4 15 5 15H13C13.6 15 14 14.6 14 14ZM16 15.5C16 16.3 16.7 17 17.5 17H18.5C19.3 17 20 16.3 20 15.5C20 14.7 19.3 14 18.5 14H17.5C16.7 14 16 14.7 16 15.5Z"
                                                                            fill="black"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </div>
                                                            <!--end::CVV icon-->
                                                        </div>
                                                        <!--end::Input wrapper-->
                                                        <div class="fv-plugins-message-container invalid-feedback"></div>
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="d-flex flex-stack">
                                                    <!--begin::Label-->
                                                    <div class="me-5">
                                                        <label class="fs-6 fw-bold form-label">Save Card for further
                                                            billing?</label>
                                                        <div class="fs-7 fw-bold text-muted">If you need more info, please
                                                            check budget planning</div>
                                                    </div>
                                                    <!--end::Label-->
                                                    <!--begin::Switch-->
                                                    <label
                                                        class="form-check form-switch form-check-custom form-check-solid">
                                                        <input class="form-check-input" type="checkbox" value="1"
                                                            checked="checked">
                                                        <span class="form-check-label fw-bold text-muted">Save Card</span>
                                                    </label>
                                                    <!--end::Switch-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                        </div>
                                        <!--end::Step 4-->
                                        <!--begin::Step 5-->
                                        <div data-kt-stepper-element="content">
                                            <div class="w-100 text-center">
                                                <!--begin::Heading-->
                                                <h1 class="fw-bolder text-dark mb-3">Release!</h1>
                                                <!--end::Heading-->
                                                <!--begin::Description-->
                                                <div class="text-muted fw-bold fs-3">Submit your app to kickstart your
                                                    project.</div>
                                                <!--end::Description-->
                                                <!--begin::Illustration-->
                                                <div class="text-center px-4 py-15">
                                                    <img src="assets/media/illustrations/sketchy-1/9.png" alt=""
                                                        class="w-100 mh-300px">
                                                </div>
                                                <!--end::Illustration-->
                                            </div>
                                        </div>
                                        <!--end::Step 5-->
                                        <!--begin::Actions-->
                                        <div class="d-flex flex-stack pt-10">
                                            <!--begin::Wrapper-->
                                            <div class="me-2">
                                                <button type="button" class="btn btn-lg btn-light-primary me-3"
                                                    data-kt-stepper-action="previous">
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr063.svg-->
                                                    <span class="svg-icon svg-icon-3 me-1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="6" y="11"
                                                                width="13" height="2" rx="1"
                                                                fill="black"></rect>
                                                            <path
                                                                d="M8.56569 11.4343L12.75 7.25C13.1642 6.83579 13.1642 6.16421 12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75L5.70711 11.2929C5.31658 11.6834 5.31658 12.3166 5.70711 12.7071L11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25C13.1642 17.8358 13.1642 17.1642 12.75 16.75L8.56569 12.5657C8.25327 12.2533 8.25327 11.7467 8.56569 11.4343Z"
                                                                fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->Back
                                                </button>
                                            </div>
                                            <!--end::Wrapper-->
                                            <!--begin::Wrapper-->
                                            <div>
                                                <button type="button" class="btn btn-lg btn-primary"
                                                    data-kt-stepper-action="submit">
                                                    <span class="indicator-label">Submit
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-3 ms-2 me-0">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.5" x="18" y="13"
                                                                    width="13" height="2" rx="1"
                                                                    transform="rotate(-180 18 13)" fill="black">
                                                                </rect>
                                                                <path
                                                                    d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="indicator-progress">Please wait...
                                                        <span
                                                            class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                                <button type="button" class="btn btn-lg btn-primary"
                                                    data-kt-stepper-action="next">Continue
                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                    <span class="svg-icon svg-icon-3 ms-1 me-0">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                            height="24" viewBox="0 0 24 24" fill="none">
                                                            <rect opacity="0.5" x="18" y="13"
                                                                width="13" height="2" rx="1"
                                                                transform="rotate(-180 18 13)" fill="black"></rect>
                                                            <path
                                                                d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                fill="black"></path>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                </button>
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Actions-->
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </form>
                                    <!--end::Form-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Stepper-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Create App-->
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
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                                <span class="svg-icon svg-icon-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none">
                                        <rect opacity="0.5" x="6" y="17.3137" width="16"
                                            height="2" rx="1" transform="rotate(-45 6 17.3137)"
                                            fill="black"></rect>
                                        <rect x="7.41422" y="6" width="16" height="2"
                                            rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                            </div>
                            <!--end::Close-->
                        </div>
                        <!--end::Modal header-->
                        <!--begin::Modal body-->
                        <div class="modal-body pt-0 pb-15 px-5 px-xl-20">
                            <!--begin::Heading-->
                            <div class="mb-13 text-center">
                                <h1 class="mb-3">Upgrade a Plan</h1>
                                <div class="text-muted fw-bold fs-5">If you need more info, please check
                                    <a href="#" class="link-primary fw-bolder">Pricing Guidelines</a>.
                                </div>
                            </div>
                            <!--end::Heading-->
                            <!--begin::Plans-->
                            <div class="d-flex flex-column">
                                <!--begin::Nav group-->
                                <div class="nav-group nav-group-outline mx-auto" data-kt-buttons="true">
                                    <a href="#"
                                        class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3 me-2 active"
                                        data-kt-plan="month">Monthly</a>
                                    <a href="#"
                                        class="btn btn-color-gray-400 btn-active btn-active-secondary px-6 py-3"
                                        data-kt-plan="annual">Annual</a>
                                </div>
                                <!--end::Nav group-->
                                <!--begin::Row-->
                                <div class="row mt-10">
                                    <!--begin::Col-->
                                    <div class="col-lg-6 mb-10 mb-lg-0">
                                        <!--begin::Tabs-->
                                        <div class="nav flex-column">
                                            <!--begin::Tab link-->
                                            <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 active mb-6"
                                                data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_startup">
                                                <!--end::Description-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Radio-->
                                                    <div
                                                        class="form-check form-check-custom form-check-solid form-check-success me-6">
                                                        <input class="form-check-input" type="radio" name="plan"
                                                            checked="checked" value="startup">
                                                    </div>
                                                    <!--end::Radio-->
                                                    <!--begin::Info-->
                                                    <div class="flex-grow-1">
                                                        <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
                                                            Startup</h2>
                                                        <div class="fw-bold opacity-50">Best for startups</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Description-->
                                                <!--begin::Price-->
                                                <div class="ms-5">
                                                    <span class="mb-2">$</span>
                                                    <span class="fs-3x fw-bolder" data-kt-plan-price-month="39"
                                                        data-kt-plan-price-annual="399">39</span>
                                                    <span class="fs-7 opacity-50">/
                                                        <span data-kt-element="period">Mon</span></span>
                                                </div>
                                                <!--end::Price-->
                                            </div>
                                            <!--end::Tab link-->
                                            <!--begin::Tab link-->
                                            <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                                data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_advanced">
                                                <!--end::Description-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Radio-->
                                                    <div
                                                        class="form-check form-check-custom form-check-solid form-check-success me-6">
                                                        <input class="form-check-input" type="radio" name="plan"
                                                            value="advanced">
                                                    </div>
                                                    <!--end::Radio-->
                                                    <!--begin::Info-->
                                                    <div class="flex-grow-1">
                                                        <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
                                                            Advanced</h2>
                                                        <div class="fw-bold opacity-50">Best for 100+ team size</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Description-->
                                                <!--begin::Price-->
                                                <div class="ms-5">
                                                    <span class="mb-2">$</span>
                                                    <span class="fs-3x fw-bolder" data-kt-plan-price-month="339"
                                                        data-kt-plan-price-annual="3399">339</span>
                                                    <span class="fs-7 opacity-50">/
                                                        <span data-kt-element="period">Mon</span></span>
                                                </div>
                                                <!--end::Price-->
                                            </div>
                                            <!--end::Tab link-->
                                            <!--begin::Tab link-->
                                            <div class="nav-link btn btn-outline btn-outline-dashed btn-color-dark btn-active btn-active-primary d-flex flex-stack text-start p-6 mb-6"
                                                data-bs-toggle="tab" data-bs-target="#kt_upgrade_plan_enterprise">
                                                <!--end::Description-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Radio-->
                                                    <div
                                                        class="form-check form-check-custom form-check-solid form-check-success me-6">
                                                        <input class="form-check-input" type="radio" name="plan"
                                                            value="enterprise">
                                                    </div>
                                                    <!--end::Radio-->
                                                    <!--begin::Info-->
                                                    <div class="flex-grow-1">
                                                        <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
                                                            Enterprise
                                                            <span class="badge badge-light-success ms-2 fs-7">Most
                                                                popular</span>
                                                        </h2>
                                                        <div class="fw-bold opacity-50">Best value for 1000+ team</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Description-->
                                                <!--begin::Price-->
                                                <div class="ms-5">
                                                    <span class="mb-2">$</span>
                                                    <span class="fs-3x fw-bolder" data-kt-plan-price-month="999"
                                                        data-kt-plan-price-annual="9999">999</span>
                                                    <span class="fs-7 opacity-50">/
                                                        <span data-kt-element="period">Mon</span></span>
                                                </div>
                                                <!--end::Price-->
                                            </div>
                                            <!--end::Tab link-->
                                            <!--begin::Tab link-->
                                            <div
                                                class="nav-link btn btn-outline btn-outline-dashed btn-color-dark d-flex flex-stack text-start p-6">
                                                <!--end::Description-->
                                                <div class="d-flex align-items-center me-2">
                                                    <!--begin::Radio-->
                                                    <div
                                                        class="form-check form-check-custom form-check-solid form-check-success me-6">
                                                        <input class="form-check-input" type="radio" name="plan"
                                                            value="custom">
                                                    </div>
                                                    <!--end::Radio-->
                                                    <!--begin::Info-->
                                                    <div class="flex-grow-1">
                                                        <h2 class="d-flex align-items-center fs-2 fw-bolder flex-wrap">
                                                            Custom</h2>
                                                        <div class="fw-bold opacity-50">Requet a custom license</div>
                                                    </div>
                                                    <!--end::Info-->
                                                </div>
                                                <!--end::Description-->
                                                <!--begin::Price-->
                                                <div class="ms-5">
                                                    <a href="#" class="btn btn-sm btn-primary">Contact Us</a>
                                                </div>
                                                <!--end::Price-->
                                            </div>
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
                                                    <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                                                    <div class="text-muted fw-bold">Optimal for 10+ team size and new
                                                        startup</div>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Body-->
                                                <div class="pt-1">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10
                                                            Active Users</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="10"
                                                                    fill="black"></rect>
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30
                                                            Project Integrations</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="10"
                                                                    fill="black"></rect>
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics
                                                            Module</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="10"
                                                                    fill="black"></rect>
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-bold fs-5 text-muted flex-grow-1">Finance
                                                            Module</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="10"
                                                                    fill="black"></rect>
                                                                <rect x="7" y="15.3137" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-45 7 15.3137)" fill="black">
                                                                </rect>
                                                                <rect x="8.41422" y="7" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(45 8.41422 7)" fill="black">
                                                                </rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-bold fs-5 text-muted flex-grow-1">Accounting
                                                            Module</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="10"
                                                                    fill="black"></rect>
                                                                <rect x="7" y="15.3137" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-45 7 15.3137)" fill="black">
                                                                </rect>
                                                                <rect x="8.41422" y="7" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(45 8.41422 7)" fill="black">
                                                                </rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-bold fs-5 text-muted flex-grow-1">Network
                                                            Platform</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="10"
                                                                    fill="black"></rect>
                                                                <rect x="7" y="15.3137" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-45 7 15.3137)" fill="black">
                                                                </rect>
                                                                <rect x="8.41422" y="7" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(45 8.41422 7)" fill="black">
                                                                </rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center">
                                                        <span class="fw-bold fs-5 text-muted flex-grow-1">Unlimited Cloud
                                                            Space</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="10"
                                                                    fill="black"></rect>
                                                                <rect x="7" y="15.3137" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-45 7 15.3137)" fill="black">
                                                                </rect>
                                                                <rect x="8.41422" y="7" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(45 8.41422 7)" fill="black">
                                                                </rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Tab Pane-->
                                            <!--begin::Tab Pane-->
                                            <div class="tab-pane fade" id="kt_upgrade_plan_advanced">
                                                <!--begin::Heading-->
                                                <div class="pb-5">
                                                    <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                                                    <div class="text-muted fw-bold">Optimal for 100+ team size and grown
                                                        company</div>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Body-->
                                                <div class="pt-1">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10
                                                            Active Users</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="10"
                                                                    fill="black"></rect>
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30
                                                            Project Integrations</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="10"
                                                                    fill="black"></rect>
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics
                                                            Module</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="10"
                                                                    fill="black"></rect>
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance
                                                            Module</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="10"
                                                                    fill="black"></rect>
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting
                                                            Module</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="10"
                                                                    fill="black"></rect>
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-bold fs-5 text-muted flex-grow-1">Network
                                                            Platform</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="10"
                                                                    fill="black"></rect>
                                                                <rect x="7" y="15.3137" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-45 7 15.3137)" fill="black">
                                                                </rect>
                                                                <rect x="8.41422" y="7" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(45 8.41422 7)" fill="black">
                                                                </rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center">
                                                        <span class="fw-bold fs-5 text-muted flex-grow-1">Unlimited Cloud
                                                            Space</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen040.svg-->
                                                        <span class="svg-icon svg-icon-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="10"
                                                                    fill="black"></rect>
                                                                <rect x="7" y="15.3137" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(-45 7 15.3137)" fill="black">
                                                                </rect>
                                                                <rect x="8.41422" y="7" width="12"
                                                                    height="2" rx="1"
                                                                    transform="rotate(45 8.41422 7)" fill="black">
                                                                </rect>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Tab Pane-->
                                            <!--begin::Tab Pane-->
                                            <div class="tab-pane fade" id="kt_upgrade_plan_enterprise">
                                                <!--begin::Heading-->
                                                <div class="pb-5">
                                                    <h2 class="fw-bolder text-dark">What’s in Startup Plan?</h2>
                                                    <div class="text-muted fw-bold">Optimal for 1000+ team and enterpise
                                                    </div>
                                                </div>
                                                <!--end::Heading-->
                                                <!--begin::Body-->
                                                <div class="pt-1">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 10
                                                            Active Users</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="10"
                                                                    fill="black"></rect>
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Up to 30
                                                            Project Integrations</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="10"
                                                                    fill="black"></rect>
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Analytics
                                                            Module</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="10"
                                                                    fill="black"></rect>
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Finance
                                                            Module</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="10"
                                                                    fill="black"></rect>
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Accounting
                                                            Module</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="10"
                                                                    fill="black"></rect>
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-7">
                                                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Network
                                                            Platform</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="10"
                                                                    fill="black"></rect>
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </div>
                                                    <!--end::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center">
                                                        <span class="fw-bold fs-5 text-gray-700 flex-grow-1">Unlimited
                                                            Cloud Space</span>
                                                        <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-success">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none">
                                                                <rect opacity="0.3" x="2" y="2"
                                                                    width="20" height="20" rx="10"
                                                                    fill="black"></rect>
                                                                <path
                                                                    d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                                    fill="black"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
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
                                <button type="reset" class="btn btn-light me-3"
                                    data-bs-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Upgrade Plan</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Modal body-->
                    </div>
                    <!--end::Modal content-->
                </div>
                <!--end::Modal dialog-->
            </div>
            <!--end::Modal - Upgrade plan-->
            <!--end::Modals-->
            <!--begin::Scrolltop-->
            <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                <span class="svg-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none">
                        <rect opacity="0.5" x="13" y="6" width="13" height="2"
                            rx="1" transform="rotate(90 13 6)" fill="black"></rect>
                        <path
                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                            fill="black"></path>
                    </svg>
                </span>
                <!--end::Svg Icon-->
            </div>
            <!--end::Scrolltop-->
            <!--end::Main-->
            <script>
                var hostUrl = "assets/";
            </script>
            <!--begin::Javascript-->
            <!--begin::Global Javascript Bundle(used by all pages)-->
            <script src="assets/plugins/global/plugins.bundle.js"></script>
            <script src="assets/js/scripts.bundle.js"></script>
            <!--end::Global Javascript Bundle-->
            <!--begin::Page Vendors Javascript(used by this page)-->
            <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
            <!--end::Page Vendors Javascript-->
            <!--begin::Page Custom Javascript(used by this page)-->
            <script src="assets/js/custom/apps/calendar/calendar.js"></script>
            <script src="assets/js/custom/widgets.js"></script>
            <script src="assets/js/custom/apps/chat/chat.js"></script>
            <script src="assets/js/custom/modals/create-app.js"></script>
            <script src="assets/js/custom/modals/upgrade-plan.js"></script>
            <!--end::Page Custom Javascript-->
            <!--end::Javascript-->

            <!--end::Body-->
            <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
                xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
                style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
                <defs id="SvgjsDefs1002"></defs>
                <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
                <path id="SvgjsPath1004" d="M0 0 "></path>
            </svg>
            <div class="flatpickr-calendar animate" tabindex="-1">
                <div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 17 17">
                            <g></g>
                            <path
                                d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z">
                            </path>
                        </svg></span>
                    <div class="flatpickr-month">
                        <div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months"
                                aria-label="Month" tabindex="-1">
                                <option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">January
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">February
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">March
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">April
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">May
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">June
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">July
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">August
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">September
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">October
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">November
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">December
                                </option>
                            </select>
                            <div class="numInputWrapper"><input class="numInput cur-year" type="number"
                                    tabindex="-1" aria-label="Year"><span class="arrowUp"></span><span
                                    class="arrowDown"></span></div>
                        </div>
                    </div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                            <g></g>
                            <path
                                d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z">
                            </path>
                        </svg></span>
                </div>
                <div class="flatpickr-innerContainer">
                    <div class="flatpickr-rContainer">
                        <div class="flatpickr-weekdays">
                            <div class="flatpickr-weekdaycontainer">
                                <span class="flatpickr-weekday">
                                    Sun</span><span class="flatpickr-weekday">Mon</span><span
                                    class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span
                                    class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span
                                    class="flatpickr-weekday">Sat
                                </span>
                            </div>
                        </div>
                        <div class="flatpickr-days" tabindex="-1">
                            <div class="dayContainer"><span class="flatpickr-day prevMonthDay"
                                    aria-label="September 25, 2022" tabindex="-1">25</span><span
                                    class="flatpickr-day prevMonthDay" aria-label="September 26, 2022"
                                    tabindex="-1">26</span><span class="flatpickr-day prevMonthDay"
                                    aria-label="September 27, 2022" tabindex="-1">27</span><span
                                    class="flatpickr-day prevMonthDay" aria-label="September 28, 2022"
                                    tabindex="-1">28</span><span class="flatpickr-day prevMonthDay"
                                    aria-label="September 29, 2022" tabindex="-1">29</span><span
                                    class="flatpickr-day prevMonthDay" aria-label="September 30, 2022"
                                    tabindex="-1">30</span><span class="flatpickr-day " aria-label="October 1, 2022"
                                    tabindex="-1">1</span><span class="flatpickr-day " aria-label="October 2, 2022"
                                    tabindex="-1">2</span><span class="flatpickr-day " aria-label="October 3, 2022"
                                    tabindex="-1">3</span><span class="flatpickr-day " aria-label="October 4, 2022"
                                    tabindex="-1">4</span><span class="flatpickr-day " aria-label="October 5, 2022"
                                    tabindex="-1">5</span><span class="flatpickr-day " aria-label="October 6, 2022"
                                    tabindex="-1">6</span><span class="flatpickr-day " aria-label="October 7, 2022"
                                    tabindex="-1">7</span><span class="flatpickr-day " aria-label="October 8, 2022"
                                    tabindex="-1">8</span><span class="flatpickr-day " aria-label="October 9, 2022"
                                    tabindex="-1">9</span><span class="flatpickr-day " aria-label="October 10, 2022"
                                    tabindex="-1">10</span><span class="flatpickr-day " aria-label="October 11, 2022"
                                    tabindex="-1">11</span><span class="flatpickr-day " aria-label="October 12, 2022"
                                    tabindex="-1">12</span><span class="flatpickr-day " aria-label="October 13, 2022"
                                    tabindex="-1">13</span><span class="flatpickr-day " aria-label="October 14, 2022"
                                    tabindex="-1">14</span><span class="flatpickr-day " aria-label="October 15, 2022"
                                    tabindex="-1">15</span><span class="flatpickr-day selected"
                                    aria-label="October 16, 2022" tabindex="-1">16</span><span class="flatpickr-day "
                                    aria-label="October 17, 2022" tabindex="-1">17</span><span class="flatpickr-day "
                                    aria-label="October 18, 2022" tabindex="-1">18</span><span class="flatpickr-day "
                                    aria-label="October 19, 2022" tabindex="-1">19</span><span class="flatpickr-day "
                                    aria-label="October 20, 2022" tabindex="-1">20</span><span class="flatpickr-day "
                                    aria-label="October 21, 2022" tabindex="-1">21</span><span class="flatpickr-day "
                                    aria-label="October 22, 2022" tabindex="-1">22</span><span
                                    class="flatpickr-day today" aria-label="October 23, 2022" aria-current="date"
                                    tabindex="-1">23</span><span class="flatpickr-day " aria-label="October 24, 2022"
                                    tabindex="-1">24</span><span class="flatpickr-day " aria-label="October 25, 2022"
                                    tabindex="-1">25</span><span class="flatpickr-day " aria-label="October 26, 2022"
                                    tabindex="-1">26</span><span class="flatpickr-day " aria-label="October 27, 2022"
                                    tabindex="-1">27</span><span class="flatpickr-day " aria-label="October 28, 2022"
                                    tabindex="-1">28</span><span class="flatpickr-day " aria-label="October 29, 2022"
                                    tabindex="-1">29</span><span class="flatpickr-day " aria-label="October 30, 2022"
                                    tabindex="-1">30</span><span class="flatpickr-day " aria-label="October 31, 2022"
                                    tabindex="-1">31</span><span class="flatpickr-day nextMonthDay"
                                    aria-label="November 1, 2022" tabindex="-1">1</span><span
                                    class="flatpickr-day nextMonthDay" aria-label="November 2, 2022"
                                    tabindex="-1">2</span><span class="flatpickr-day nextMonthDay"
                                    aria-label="November 3, 2022" tabindex="-1">3</span><span
                                    class="flatpickr-day nextMonthDay" aria-label="November 4, 2022"
                                    tabindex="-1">4</span><span class="flatpickr-day nextMonthDay"
                                    aria-label="November 5, 2022" tabindex="-1">5</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flatpickr-calendar animate" tabindex="-1">
                <div class="flatpickr-months"><span class="flatpickr-prev-month"><svg version="1.1"
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            viewBox="0 0 17 17">
                            <g></g>
                            <path
                                d="M5.207 8.471l7.146 7.147-0.707 0.707-7.853-7.854 7.854-7.853 0.707 0.707-7.147 7.146z">
                            </path>
                        </svg></span>
                    <div class="flatpickr-month">
                        <div class="flatpickr-current-month"><select class="flatpickr-monthDropdown-months"
                                aria-label="Month" tabindex="-1">
                                <option class="flatpickr-monthDropdown-month" value="0" tabindex="-1">January
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="1" tabindex="-1">February
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="2" tabindex="-1">March
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="3" tabindex="-1">April
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="4" tabindex="-1">May
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="5" tabindex="-1">June
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="6" tabindex="-1">July
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="7" tabindex="-1">August
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="8" tabindex="-1">September
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="9" tabindex="-1">October
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="10" tabindex="-1">November
                                </option>
                                <option class="flatpickr-monthDropdown-month" value="11" tabindex="-1">December
                                </option>
                            </select>
                            <div class="numInputWrapper"><input class="numInput cur-year" type="number"
                                    tabindex="-1" aria-label="Year"><span class="arrowUp"></span><span
                                    class="arrowDown"></span></div>
                        </div>
                    </div><span class="flatpickr-next-month"><svg version="1.1" xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 17 17">
                            <g></g>
                            <path
                                d="M13.207 8.472l-7.854 7.854-0.707-0.707 7.146-7.146-7.146-7.148 0.707-0.707 7.854 7.854z">
                            </path>
                        </svg></span>
                </div>
                <div class="flatpickr-innerContainer">
                    <div class="flatpickr-rContainer">
                        <div class="flatpickr-weekdays">
                            <div class="flatpickr-weekdaycontainer">
                                <span class="flatpickr-weekday">
                                    Sun</span><span class="flatpickr-weekday">Mon</span><span
                                    class="flatpickr-weekday">Tue</span><span class="flatpickr-weekday">Wed</span><span
                                    class="flatpickr-weekday">Thu</span><span class="flatpickr-weekday">Fri</span><span
                                    class="flatpickr-weekday">Sat
                                </span>
                            </div>
                        </div>
                        <div class="flatpickr-days" tabindex="-1">
                            <div class="dayContainer"><span class="flatpickr-day prevMonthDay"
                                    aria-label="September 25, 2022" tabindex="-1">25</span><span
                                    class="flatpickr-day prevMonthDay" aria-label="September 26, 2022"
                                    tabindex="-1">26</span><span class="flatpickr-day prevMonthDay"
                                    aria-label="September 27, 2022" tabindex="-1">27</span><span
                                    class="flatpickr-day prevMonthDay" aria-label="September 28, 2022"
                                    tabindex="-1">28</span><span class="flatpickr-day prevMonthDay"
                                    aria-label="September 29, 2022" tabindex="-1">29</span><span
                                    class="flatpickr-day prevMonthDay" aria-label="September 30, 2022"
                                    tabindex="-1">30</span><span class="flatpickr-day " aria-label="October 1, 2022"
                                    tabindex="-1">1</span><span class="flatpickr-day " aria-label="October 2, 2022"
                                    tabindex="-1">2</span><span class="flatpickr-day " aria-label="October 3, 2022"
                                    tabindex="-1">3</span><span class="flatpickr-day " aria-label="October 4, 2022"
                                    tabindex="-1">4</span><span class="flatpickr-day " aria-label="October 5, 2022"
                                    tabindex="-1">5</span><span class="flatpickr-day " aria-label="October 6, 2022"
                                    tabindex="-1">6</span><span class="flatpickr-day " aria-label="October 7, 2022"
                                    tabindex="-1">7</span><span class="flatpickr-day " aria-label="October 8, 2022"
                                    tabindex="-1">8</span><span class="flatpickr-day " aria-label="October 9, 2022"
                                    tabindex="-1">9</span><span class="flatpickr-day " aria-label="October 10, 2022"
                                    tabindex="-1">10</span><span class="flatpickr-day " aria-label="October 11, 2022"
                                    tabindex="-1">11</span><span class="flatpickr-day " aria-label="October 12, 2022"
                                    tabindex="-1">12</span><span class="flatpickr-day " aria-label="October 13, 2022"
                                    tabindex="-1">13</span><span class="flatpickr-day " aria-label="October 14, 2022"
                                    tabindex="-1">14</span><span class="flatpickr-day " aria-label="October 15, 2022"
                                    tabindex="-1">15</span><span class="flatpickr-day " aria-label="October 16, 2022"
                                    tabindex="-1">16</span><span class="flatpickr-day selected"
                                    aria-label="October 17, 2022" tabindex="-1">17</span><span class="flatpickr-day "
                                    aria-label="October 18, 2022" tabindex="-1">18</span><span class="flatpickr-day "
                                    aria-label="October 19, 2022" tabindex="-1">19</span><span class="flatpickr-day "
                                    aria-label="October 20, 2022" tabindex="-1">20</span><span class="flatpickr-day "
                                    aria-label="October 21, 2022" tabindex="-1">21</span><span class="flatpickr-day "
                                    aria-label="October 22, 2022" tabindex="-1">22</span><span
                                    class="flatpickr-day today" aria-label="October 23, 2022" aria-current="date"
                                    tabindex="-1">23</span><span class="flatpickr-day " aria-label="October 24, 2022"
                                    tabindex="-1">24</span><span class="flatpickr-day " aria-label="October 25, 2022"
                                    tabindex="-1">25</span><span class="flatpickr-day " aria-label="October 26, 2022"
                                    tabindex="-1">26</span><span class="flatpickr-day " aria-label="October 27, 2022"
                                    tabindex="-1">27</span><span class="flatpickr-day " aria-label="October 28, 2022"
                                    tabindex="-1">28</span><span class="flatpickr-day " aria-label="October 29, 2022"
                                    tabindex="-1">29</span><span class="flatpickr-day " aria-label="October 30, 2022"
                                    tabindex="-1">30</span><span class="flatpickr-day " aria-label="October 31, 2022"
                                    tabindex="-1">31</span><span class="flatpickr-day nextMonthDay"
                                    aria-label="November 1, 2022" tabindex="-1">1</span><span
                                    class="flatpickr-day nextMonthDay" aria-label="November 2, 2022"
                                    tabindex="-1">2</span><span class="flatpickr-day nextMonthDay"
                                    aria-label="November 3, 2022" tabindex="-1">3</span><span
                                    class="flatpickr-day nextMonthDay" aria-label="November 4, 2022"
                                    tabindex="-1">4</span><span class="flatpickr-day nextMonthDay"
                                    aria-label="November 5, 2022" tabindex="-1">5</span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flatpickr-calendar hasTime noCalendar animate" tabindex="-1">
                <div class="flatpickr-time" tabindex="-1">
                    <div class="numInputWrapper"><input class="numInput flatpickr-hour" type="number"
                            aria-label="Hour" tabindex="-1" step="1" min="1" max="12"
                            maxlength="2"><span class="arrowUp"></span><span class="arrowDown"></span></div><span
                        class="flatpickr-time-separator">:</span>
                    <div class="numInputWrapper"><input class="numInput flatpickr-minute" type="number"
                            aria-label="Minute" tabindex="-1" step="5" min="0" max="59"
                            maxlength="2"><span class="arrowUp"></span><span class="arrowDown"></span></div><span
                        class="flatpickr-am-pm" title="Click to toggle" tabindex="-1">PM</span>
                </div>
            </div>
            <div class="flatpickr-calendar hasTime noCalendar animate" tabindex="-1">
                <div class="flatpickr-time" tabindex="-1">
                    <div class="numInputWrapper"><input class="numInput flatpickr-hour" type="number"
                            aria-label="Hour" tabindex="-1" step="1" min="1" max="12"
                            maxlength="2"><span class="arrowUp"></span><span class="arrowDown"></span></div><span
                        class="flatpickr-time-separator">:</span>
                    <div class="numInputWrapper"><input class="numInput flatpickr-minute" type="number"
                            aria-label="Minute" tabindex="-1" step="5" min="0" max="59"
                            maxlength="2"><span class="arrowUp"></span><span class="arrowDown"></span></div><span
                        class="flatpickr-am-pm" title="Click to toggle" tabindex="-1">PM</span>
                </div>
            </div>
            <div class="popover fade show bs-popover-top" role="tooltip" id="popover836208"
                data-popper-placement="top"
                style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate(293px, 414px);">
                <div class="popover-arrow" style="position: absolute; left: 0px; transform: translate(105px, 0px);">
                </div><span class="popover-dismiss btn btn-icon"><i class="bi bi-x fs-2"></i></span>
                <h3 class="popover-header">Event Summary</h3>
                <div class="popover-body">
                    <div class="fw-bolder mb-2">Meeting</div>
                    <div class="fs-7"><span class="fw-bold">Start:</span> 23rd Oct, 2022 - 10:30 am</div>
                    <div class="fs-7 mb-4"><span class="fw-bold">End:</span> 23rd Oct, 2022 - 12:30 pm</div>
                    <div id="kt_calendar_event_view_button" class="btn btn-sm btn-light-primary">View More</div>
                </div>
            </div>
        </body>
    @endsection
