@extends('layouts.app')
@section('title', 'Dashboard')
@section('page_name', 'Dashboard')
@section('page_content')
    <div class="d-flex flex-column flex-column-fluid">
        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Dashboard
                    </h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">
                            <a href="../../demo1/dist/index.html" class="text-muted text-hover-primary">Home</a>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted">Dashboard</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <!--begin::Content-->
        <div id="kt_app_content" class="app-content flex-column-fluid">
            <!--begin::Content container-->
            @hasrole('admin|issuer')
                <div id="kt_app_content_container" class="app-container container-fluid">
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                        <!--begin::Col-->
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                            <!--begin::Card widget 20-->
                            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10"
                                style="background-color: #F1416C;background-image:url('assets/media/patterns/vector-1.png')">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">69</span>
                                        <!--end::Amount-->
                                        <!--begin::Subtitle-->
                                        <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Projects</span>
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex align-items-end pt-0">
                                    <!--begin::Progress-->
                                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                                        <div
                                            class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                                            <span>43 Pending</span>
                                            <span>72%</span>
                                        </div>
                                        <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                                            <div class="bg-white rounded h-8px" role="progressbar" style="width: 72%;"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                    <!--end::Progress-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 20-->
                            <!--begin::Card widget 7-->
                            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Amount-->
                                        <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">357</span>
                                        <!--end::Amount-->
                                        <!--begin::Subtitle-->
                                        <span class="text-gray-400 pt-1 fw-semibold fs-6">Professionals</span>
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex flex-column justify-content-end pe-0">
                                    <!--begin::Title-->
                                    <span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s Heroes</span>
                                    <!--end::Title-->
                                    <!--begin::Users group-->
                                    <div class="symbol-group symbol-hover flex-nowrap">
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            title="Alan Warden">
                                            <span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            title="Michael Eberon">
                                            <img alt="Pic" src="assets/media/avatars/300-11.jpg" />
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            title="Susan Redwood">
                                            <span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            title="Melody Macy">
                                            <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            title="Perry Matthew">
                                            <span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
                                        </div>
                                        <div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip"
                                            title="Barry Walter">
                                            <img alt="Pic" src="assets/media/avatars/300-12.jpg" />
                                        </div>
                                        <a href="#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal"
                                            data-bs-target="#kt_modal_view_users">
                                            <span class="symbol-label bg-dark text-gray-300 fs-8 fw-bold">+42</span>
                                        </a>
                                    </div>
                                    <!--end::Users group-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 7-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
                            <!--begin::Card widget 17-->
                            <div class="card card-flush h-md-50 mb-5 mb-xl-10">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <div class="card-title d-flex flex-column">
                                        <!--begin::Info-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Currency-->
                                            <span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
                                            <!--end::Currency-->
                                            <!--begin::Amount-->
                                            <span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69,700</span>
                                            <!--end::Amount-->
                                            <!--begin::Badge-->
                                            <span class="badge badge-light-success fs-base">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="13" y="6" width="13"
                                                            height="2" rx="1" transform="rotate(90 13 6)"
                                                            fill="currentColor" />
                                                        <path
                                                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->2.2%
                                            </span>
                                            <!--end::Badge-->
                                        </div>
                                        <!--end::Info-->
                                        <!--begin::Subtitle-->
                                        <span class="text-gray-400 pt-1 fw-semibold fs-6">Projects Earnings in April</span>
                                        <!--end::Subtitle-->
                                    </div>
                                    <!--end::Title-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-2 pb-4 d-flex flex-wrap align-items-center">
                                    <!--begin::Chart-->
                                    <div class="d-flex flex-center me-5 pt-2">
                                        <div id="kt_card_widget_17_chart" style="min-width: 70px; min-height: 70px"
                                            data-kt-size="70" data-kt-line="11"></div>
                                    </div>
                                    <!--end::Chart-->
                                    <!--begin::Labels-->
                                    <div class="d-flex flex-column content-justify-center flex-row-fluid">
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 bg-success me-3"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Leaf CRM</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center my-3">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 bg-primary me-3"></div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Mivy App</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                        <!--begin::Label-->
                                        <div class="d-flex fw-semibold align-items-center">
                                            <!--begin::Bullet-->
                                            <div class="bullet w-8px h-3px rounded-2 me-3" style="background-color: #E4E6EF">
                                            </div>
                                            <!--end::Bullet-->
                                            <!--begin::Label-->
                                            <div class="text-gray-500 flex-grow-1 me-4">Others</div>
                                            <!--end::Label-->
                                            <!--begin::Stats-->
                                            <div class="fw-bolder text-gray-700 text-xxl-end">$45,257</div>
                                            <!--end::Stats-->
                                        </div>
                                        <!--end::Label-->
                                    </div>
                                    <!--end::Labels-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Card widget 17-->
                            <!--begin::List widget 26-->
                            <div class="card card-flush h-lg-50">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title text-gray-800 fw-bold">External Links</h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button
                                            class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                            data-kt-menu-overflow="true">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.3" x="2" y="2" width="20"
                                                        height="20" rx="4" fill="currentColor" />
                                                    <rect x="11" y="11" width="2.6" height="2.6"
                                                        rx="1.3" fill="currentColor" />
                                                    <rect x="15" y="11" width="2.6" height="2.6"
                                                        rx="1.3" fill="currentColor" />
                                                    <rect x="7" y="11" width="2.6" height="2.6"
                                                        rx="1.3" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Customer</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Contact</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-5">
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <a href="#" class="text-primary fw-semibold fs-6 me-2">Avg. Client Rating</a>
                                        <!--end::Section-->
                                        <!--begin::Action-->
                                        <button type="button"
                                            class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z"
                                                        fill="currentColor" />
                                                    <rect x="21.9497" y="3.46448" width="13" height="2"
                                                        rx="1" transform="rotate(135 21.9497 3.46448)"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <a href="#" class="text-primary fw-semibold fs-6 me-2">Instagram Followers</a>
                                        <!--end::Section-->
                                        <!--begin::Action-->
                                        <button type="button"
                                            class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z"
                                                        fill="currentColor" />
                                                    <rect x="21.9497" y="3.46448" width="13" height="2"
                                                        rx="1" transform="rotate(135 21.9497 3.46448)"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Separator-->
                                    <div class="separator separator-dashed my-3"></div>
                                    <!--end::Separator-->
                                    <!--begin::Item-->
                                    <div class="d-flex flex-stack">
                                        <!--begin::Section-->
                                        <a href="#" class="text-primary fw-semibold fs-6 me-2">Google Ads CPC</a>
                                        <!--end::Section-->
                                        <!--begin::Action-->
                                        <button type="button"
                                            class="btn btn-icon btn-sm h-auto btn-color-gray-400 btn-active-color-primary justify-content-end">
                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
                                            <span class="svg-icon svg-icon-2">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z"
                                                        fill="currentColor" />
                                                    <rect x="21.9497" y="3.46448" width="13" height="2"
                                                        rx="1" transform="rotate(135 21.9497 3.46448)"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Action-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::LIst widget 26-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xxl-6">
                            <!--begin::Engage widget 10-->
                            <div class="card card-flush h-md-100">
                                <!--begin::Body-->
                                <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0"
                                    style="background-position: 100% 50%; background-image:url('assets/media/stock/900x600/42.png')">
                                    <!--begin::Wrapper-->
                                    <div class="mb-10">
                                        <!--begin::Title-->
                                        <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                                            <span class="me-2">Try our all new Enviroment with
                                                <br />
                                                <span class="position-relative d-inline-block text-danger">
                                                    <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                        class="text-danger opacity-75-hover">Pro Plan</a>
                                                    <!--begin::Separator-->
                                                    <span
                                                        class="position-absolute opacity-15 bottom-0 start-0 border-4 border-danger border-bottom w-100"></span>
                                                    <!--end::Separator-->
                                                </span></span>for Free
                                        </div>
                                        <!--end::Title-->
                                        <!--begin::Action-->
                                        <div class="text-center">
                                            <a href='#' class="btn btn-sm btn-dark fw-bold" data-bs-toggle="modal"
                                                data-bs-target="#kt_modal_upgrade_plan">Upgrade Now</a>
                                        </div>
                                        <!--begin::Action-->
                                    </div>
                                    <!--begin::Wrapper-->
                                    <!--begin::Illustration-->
                                    <img class="mx-auto h-150px h-lg-200px theme-light-show"
                                        src="assets/media/illustrations/misc/upgrade.svg" alt="" />
                                    <img class="mx-auto h-150px h-lg-200px theme-dark-show"
                                        src="assets/media/illustrations/misc/upgrade-dark.svg" alt="" />
                                    <!--end::Illustration-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Engage widget 10-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row gx-5 gx-xl-10">
                        <!--begin::Col-->
                        <div class="col-xxl-6 mb-5 mb-xl-10">
                            <!--begin::Chart widget 8-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-dark">Performance Overview</span>
                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Users from all channels</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <ul class="nav" id="kt_chart_widget_8_tabs">
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1"
                                                    data-bs-toggle="tab" id="kt_chart_widget_8_week_toggle"
                                                    href="#kt_chart_widget_8_week_tab">Month</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link btn btn-sm btn-color-muted btn-active btn-active-light fw-bold px-4 me-1 active"
                                                    data-bs-toggle="tab" id="kt_chart_widget_8_month_toggle"
                                                    href="#kt_chart_widget_8_month_tab">Week</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Tab content-->
                                    <div class="tab-content">
                                        <!--begin::Tab pane-->
                                        <div class="tab-pane fade" id="kt_chart_widget_8_week_tab" role="tabpanel">
                                            <!--begin::Statistics-->
                                            <div class="mb-5">
                                                <!--begin::Statistics-->
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
                                                    <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">18,89</span>
                                                    <span class="badge badge-light-success fs-base">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="13" y="6"
                                                                    width="13" height="2" rx="1"
                                                                    transform="rotate(90 13 6)" fill="currentColor" />
                                                                <path
                                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->4,8%
                                                    </span>
                                                </div>
                                                <!--end::Statistics-->
                                                <!--begin::Description-->
                                                <span class="fs-6 fw-semibold text-gray-400">Avarage cost per
                                                    interaction</span>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Statistics-->
                                            <!--begin::Chart-->
                                            <div id="kt_chart_widget_8_week_chart" class="ms-n5 min-h-auto"
                                                style="height: 275px"></div>
                                            <!--end::Chart-->
                                            <!--begin::Items-->
                                            <div class="d-flex flex-wrap pt-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-&lt;gray-600 fs-6">Google Ads</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                </div>
                                                <!--ed::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">Courses</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                </div>
                                                <!--ed::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column pt-sm-3 pt-6">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">Radio</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                </div>
                                                <!--ed::Item-->
                                            </div>
                                            <!--ed::Items-->
                                        </div>
                                        <!--end::Tab pane-->
                                        <!--begin::Tab pane-->
                                        <div class="tab-pane fade active show" id="kt_chart_widget_8_month_tab"
                                            role="tabpanel">
                                            <!--begin::Statistics-->
                                            <div class="mb-5">
                                                <!--begin::Statistics-->
                                                <div class="d-flex align-items-center mb-2">
                                                    <span class="fs-1 fw-semibold text-gray-400 me-1 mt-n1">$</span>
                                                    <span class="fs-3x fw-bold text-gray-800 me-2 lh-1 ls-n2">8,55</span>
                                                    <span class="badge badge-light-success fs-base">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                        <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <rect opacity="0.5" x="13" y="6"
                                                                    width="13" height="2" rx="1"
                                                                    transform="rotate(90 13 6)" fill="currentColor" />
                                                                <path
                                                                    d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->2.2%
                                                    </span>
                                                </div>
                                                <!--end::Statistics-->
                                                <!--begin::Description-->
                                                <span class="fs-6 fw-semibold text-gray-400">Avarage cost per
                                                    interaction</span>
                                                <!--end::Description-->
                                            </div>
                                            <!--end::Statistics-->
                                            <!--begin::Chart-->
                                            <div id="kt_chart_widget_8_month_chart" class="ms-n5 min-h-auto"
                                                style="height: 275px"></div>
                                            <!--end::Chart-->
                                            <!--begin::Items-->
                                            <div class="d-flex flex-wrap pt-5">
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-primary me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">Social Campaigns</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-danger me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">Google Ads</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                </div>
                                                <!--ed::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column me-7 me-lg-16 pt-sm-3 pt-6">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">Email Newsletter</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-warning me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">Courses</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                </div>
                                                <!--ed::Item-->
                                                <!--begin::Item-->
                                                <div class="d-flex flex-column pt-sm-3 pt-6">
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center mb-3 mb-sm-6">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-info me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">TV Campaign</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                    <!--begin::Item-->
                                                    <div class="d-flex align-items-center">
                                                        <!--begin::Bullet-->
                                                        <span class="bullet bullet-dot bg-success me-2 h-10px w-10px"></span>
                                                        <!--end::Bullet-->
                                                        <!--begin::Label-->
                                                        <span class="fw-bold text-gray-600 fs-6">Radio</span>
                                                        <!--end::Label-->
                                                    </div>
                                                    <!--ed::Item-->
                                                </div>
                                                <!--ed::Item-->
                                            </div>
                                            <!--ed::Items-->
                                        </div>
                                        <!--end::Tab pane-->
                                    </div>
                                    <!--end::Tab content-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Chart widget 8-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-6 mb-5 mb-xl-10">
                            <!--begin::Tables widget 16-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Authors Achievements</span>
                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Avg. 69.34% Conv. Rate</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button
                                            class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                            data-kt-menu-overflow="true">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.3" x="2" y="2" width="20"
                                                        height="20" rx="4" fill="currentColor" />
                                                    <rect x="11" y="11" width="2.6" height="2.6"
                                                        rx="1.3" fill="currentColor" />
                                                    <rect x="15" y="11" width="2.6" height="2.6"
                                                        rx="1.3" fill="currentColor" />
                                                    <rect x="7" y="11" width="2.6" height="2.6"
                                                        rx="1.3" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Customer</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Contact</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate Reports</a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Nav-->
                                    <ul class="nav nav-pills nav-pills-custom mb-3">
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-3 me-lg-6">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2 active"
                                                id="kt_stats_widget_16_tab_link_1" data-bs-toggle="pill"
                                                href="#kt_stats_widget_16_tab_1">
                                                <!--begin::Icon-->
                                                <div class="nav-icon mb-3">
                                                    <i class="fonticon-drive fs-1 p-0"></i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">SaaS</span>
                                                <!--end::Title-->
                                                <!--begin::Bullet-->
                                                <span
                                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                <!--end::Bullet-->
                                            </a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-3 me-lg-6">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                                                id="kt_stats_widget_16_tab_link_2" data-bs-toggle="pill"
                                                href="#kt_stats_widget_16_tab_2">
                                                <!--begin::Icon-->
                                                <div class="nav-icon mb-3">
                                                    <i class="fonticon-bank fs-1 p-0"></i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Crypto</span>
                                                <!--end::Title-->
                                                <!--begin::Bullet-->
                                                <span
                                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                <!--end::Bullet-->
                                            </a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-3 me-lg-6">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                                                id="kt_stats_widget_16_tab_link_3" data-bs-toggle="pill"
                                                href="#kt_stats_widget_16_tab_3">
                                                <!--begin::Icon-->
                                                <div class="nav-icon mb-3">
                                                    <i class="fonticon-like-1 fs-1 p-0"></i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Social</span>
                                                <!--end::Title-->
                                                <!--begin::Bullet-->
                                                <span
                                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                <!--end::Bullet-->
                                            </a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-3 me-lg-6">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                                                id="kt_stats_widget_16_tab_link_4" data-bs-toggle="pill"
                                                href="#kt_stats_widget_16_tab_4">
                                                <!--begin::Icon-->
                                                <div class="nav-icon mb-3">
                                                    <i class="fonticon-remote-control fs-1 p-0"></i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Mobile</span>
                                                <!--end::Title-->
                                                <!--begin::Bullet-->
                                                <span
                                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                <!--end::Bullet-->
                                            </a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3 me-3 me-lg-6">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-outline btn-flex btn-color-muted btn-active-color-primary flex-column overflow-hidden w-80px h-85px pt-5 pb-2"
                                                id="kt_stats_widget_16_tab_link_5" data-bs-toggle="pill"
                                                href="#kt_stats_widget_16_tab_5">
                                                <!--begin::Icon-->
                                                <div class="nav-icon mb-3">
                                                    <i class="fonticon-telegram fs-1 p-0"></i>
                                                </div>
                                                <!--end::Icon-->
                                                <!--begin::Title-->
                                                <span class="nav-text text-gray-800 fw-bold fs-6 lh-1">Others</span>
                                                <!--end::Title-->
                                                <!--begin::Bullet-->
                                                <span
                                                    class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
                                                <!--end::Bullet-->
                                            </a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                    </ul>
                                    <!--end::Nav-->
                                    <!--begin::Tab Content-->
                                    <div class="tab-content">
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade show active" id="kt_stats_widget_16_tab_1">
                                            <!--begin::Table container-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                            <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                            <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                                            <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                            <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="assets/media/avatars/300-3.jpg"
                                                                            class="" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Guy
                                                                            Hawkins</a>
                                                                        <span
                                                                            class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">78.34%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_1_1"
                                                                    class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="assets/media/avatars/300-2.jpg"
                                                                            class="" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane
                                                                            Cooper</a>
                                                                        <span
                                                                            class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">63.83%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_1_2"
                                                                    class="h-50px mt-n8 pe-7" data-kt-chart-color="danger">
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="assets/media/avatars/300-9.jpg"
                                                                            class="" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob
                                                                            Jones</a>
                                                                        <span
                                                                            class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">92.56%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_1_3"
                                                                    class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="assets/media/avatars/300-7.jpg"
                                                                            class="" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Cody
                                                                            Fishers</a>
                                                                        <span
                                                                            class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">63.08%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_1_4"
                                                                    class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_stats_widget_16_tab_2">
                                            <!--begin::Table container-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                            <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                            <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                                            <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                            <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="assets/media/avatars/300-25.jpg"
                                                                            class="" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Brooklyn
                                                                            Simmons</a>
                                                                        <span
                                                                            class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">85.23%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_2_1"
                                                                    class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="assets/media/avatars/300-24.jpg"
                                                                            class="" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther
                                                                            Howard</a>
                                                                        <span
                                                                            class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">74.83%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_2_2"
                                                                    class="h-50px mt-n8 pe-7" data-kt-chart-color="danger">
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="assets/media/avatars/300-20.jpg"
                                                                            class="" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Annette
                                                                            Black</a>
                                                                        <span
                                                                            class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">90.06%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_2_3"
                                                                    class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="assets/media/avatars/300-17.jpg"
                                                                            class="" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin
                                                                            McKinney</a>
                                                                        <span
                                                                            class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">54.08%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_2_4"
                                                                    class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_stats_widget_16_tab_3">
                                            <!--begin::Table container-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                            <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                            <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                                            <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                            <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="assets/media/avatars/300-11.jpg"
                                                                            class="" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob
                                                                            Jones</a>
                                                                        <span
                                                                            class="text-gray-400 fw-semibold d-block fs-7">New
                                                                            York</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">52.34%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_3_1"
                                                                    class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="assets/media/avatars/300-23.jpg"
                                                                            class="" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ronald
                                                                            Richards</a>
                                                                        <span
                                                                            class="text-gray-400 fw-semibold d-block fs-7">Madrid</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">77.65%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_3_2"
                                                                    class="h-50px mt-n8 pe-7" data-kt-chart-color="danger">
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="assets/media/avatars/300-4.jpg"
                                                                            class="" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Leslie
                                                                            Alexander</a>
                                                                        <span
                                                                            class="text-gray-400 fw-semibold d-block fs-7">Pune</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">82.47%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_3_3"
                                                                    class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="assets/media/avatars/300-1.jpg"
                                                                            class="" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Courtney
                                                                            Henry</a>
                                                                        <span
                                                                            class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">67.84%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_3_4"
                                                                    class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_stats_widget_16_tab_4">
                                            <!--begin::Table container-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                            <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                            <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                                            <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                            <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="assets/media/avatars/300-12.jpg"
                                                                            class="" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Arlene
                                                                            McCoy</a>
                                                                        <span
                                                                            class="text-gray-400 fw-semibold d-block fs-7">London</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">53.44%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_4_1"
                                                                    class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="assets/media/avatars/300-21.jpg"
                                                                            class="" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Marvin
                                                                            McKinneyr</a>
                                                                        <span
                                                                            class="text-gray-400 fw-semibold d-block fs-7">Monaco</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">74.64%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_4_2"
                                                                    class="h-50px mt-n8 pe-7" data-kt-chart-color="danger">
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="assets/media/avatars/300-30.jpg"
                                                                            class="" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob
                                                                            Jones</a>
                                                                        <span
                                                                            class="text-gray-400 fw-semibold d-block fs-7">PManila</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">88.56%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_4_3"
                                                                    class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="assets/media/avatars/300-14.jpg"
                                                                            class="" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther
                                                                            Howard</a>
                                                                        <span
                                                                            class="text-gray-400 fw-semibold d-block fs-7">Iceland</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">63.16%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_4_4"
                                                                    class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_stats_widget_16_tab_5">
                                            <!--begin::Table container-->
                                            <div class="table-responsive">
                                                <!--begin::Table-->
                                                <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                            <th class="p-0 pb-3 min-w-150px text-start">AUTHOR</th>
                                                            <th class="p-0 pb-3 min-w-100px text-end pe-13">CONV.</th>
                                                            <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                            <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="assets/media/avatars/300-6.jpg"
                                                                            class="" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jane
                                                                            Cooper</a>
                                                                        <span
                                                                            class="text-gray-400 fw-semibold d-block fs-7">Haiti</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">68.54%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_5_1"
                                                                    class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="assets/media/avatars/300-10.jpg"
                                                                            class="" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Esther
                                                                            Howard</a>
                                                                        <span
                                                                            class="text-gray-400 fw-semibold d-block fs-7">Kiribati</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">55.83%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_5_2"
                                                                    class="h-50px mt-n8 pe-7" data-kt-chart-color="danger">
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="assets/media/avatars/300-9.jpg"
                                                                            class="" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Jacob
                                                                            Jones</a>
                                                                        <span
                                                                            class="text-gray-400 fw-semibold d-block fs-7">Poland</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">93.46%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_5_3"
                                                                    class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="symbol symbol-50px me-3">
                                                                        <img src="assets/media/avatars/300-3.jpg"
                                                                            class="" alt="" />
                                                                    </div>
                                                                    <div class="d-flex justify-content-start flex-column">
                                                                        <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                            class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Ralph
                                                                            Edwards</a>
                                                                        <span
                                                                            class="text-gray-400 fw-semibold d-block fs-7">Mexico</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-end pe-13">
                                                                <span class="text-gray-600 fw-bold fs-6">64.48%</span>
                                                            </td>
                                                            <td class="text-end pe-0">
                                                                <div id="kt_table_widget_16_chart_5_4"
                                                                    class="h-50px mt-n8 pe-7" data-kt-chart-color="success">
                                                                </div>
                                                            </td>
                                                            <td class="text-end">
                                                                <a href="#"
                                                                    class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--end::Table container-->
                                    </div>
                                    <!--end::Tab Content-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Tables widget 16-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                        <!--begin::Col-->
                        <div class="col-xxl-6">
                            <!--begin::Card widget 18-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Body-->
                                <div class="card-body py-9">
                                    <!--begin::Row-->
                                    <div class="row gx-9 h-100">
                                        <!--begin::Col-->
                                        <div class="col-sm-6 mb-10 mb-sm-0">
                                            <!--begin::Image-->
                                            <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-400px min-h-sm-100 h-100"
                                                style="background-size: 100% 100%;background-image:url('assets/media/stock/600x600/img-65.jpg')">
                                            </div>
                                            <!--end::Image-->
                                        </div>
                                        <!--end::Col-->
                                        <!--begin::Col-->
                                        <div class="col-sm-6">
                                            <!--begin::Wrapper-->
                                            <div class="d-flex flex-column h-100">
                                                <!--begin::Header-->
                                                <div class="mb-7">
                                                    <!--begin::Headin-->
                                                    <div class="d-flex flex-stack mb-6">
                                                        <!--begin::Title-->
                                                        <div class="flex-shrink-0 me-5">
                                                            <span
                                                                class="text-gray-400 fs-7 fw-bold me-2 d-block lh-1 pb-1">Featured</span>
                                                            <span class="text-gray-800 fs-1 fw-bold">9 Degree</span>
                                                        </div>
                                                        <!--end::Title-->
                                                        <span
                                                            class="badge badge-light-primary flex-shrink-0 align-self-center py-3 px-4 fs-7">In
                                                            Process</span>
                                                    </div>
                                                    <!--end::Heading-->
                                                    <!--begin::Items-->
                                                    <div class="d-flex align-items-center flex-wrap d-grid gap-2">
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center me-5 me-xl-13">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                                <img src="assets/media/avatars/300-3.jpg" class=""
                                                                    alt="" />
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <span
                                                                    class="fw-semibold text-gray-400 d-block fs-8">Manager</span>
                                                                <a href="../../demo1/dist/pages/user-profile/overview.html"
                                                                    class="fw-bold text-gray-800 text-hover-primary fs-7">Robert
                                                                    Fox</a>
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <div class="d-flex align-items-center">
                                                            <!--begin::Symbol-->
                                                            <div class="symbol symbol-30px symbol-circle me-3">
                                                                <span class="symbol-label bg-success">
                                                                    <!--begin::Svg Icon | path: icons/duotune/abstract/abs042.svg-->
                                                                    <span class="svg-icon svg-icon-5 svg-icon-white">
                                                                        <svg width="24" height="24"
                                                                            viewBox="0 0 24 24" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M18 21.6C16.6 20.4 9.1 20.3 6.3 21.2C5.7 21.4 5.1 21.2 4.7 20.8L2 18C4.2 15.8 10.8 15.1 15.8 15.8C16.2 18.3 17 20.5 18 21.6ZM18.8 2.8C18.4 2.4 17.8 2.20001 17.2 2.40001C14.4 3.30001 6.9 3.2 5.5 2C6.8 3.3 7.4 5.5 7.7 7.7C9 7.9 10.3 8 11.7 8C15.8 8 19.8 7.2 21.5 5.5L18.8 2.8Z"
                                                                                fill="currentColor" />
                                                                            <path opacity="0.3"
                                                                                d="M21.2 17.3C21.4 17.9 21.2 18.5 20.8 18.9L18 21.6C15.8 19.4 15.1 12.8 15.8 7.8C18.3 7.4 20.4 6.70001 21.5 5.60001C20.4 7.00001 20.2 14.5 21.2 17.3ZM8 11.7C8 9 7.7 4.2 5.5 2L2.8 4.8C2.4 5.2 2.2 5.80001 2.4 6.40001C2.7 7.40001 3.00001 9.2 3.10001 11.7C3.10001 15.5 2.40001 17.6 2.10001 18C3.20001 16.9 5.3 16.2 7.8 15.8C8 14.2 8 12.7 8 11.7Z"
                                                                                fill="currentColor" />
                                                                        </svg>
                                                                    </span>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Symbol-->
                                                            <!--begin::Info-->
                                                            <div class="m-0">
                                                                <span
                                                                    class="fw-semibold text-gray-400 d-block fs-8">Budget</span>
                                                                <span class="fw-bold text-gray-800 fs-7">$64.800</span>
                                                            </div>
                                                            <!--end::Info-->
                                                        </div>
                                                        <!--end::Item-->
                                                    </div>
                                                    <!--end::Items-->
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Body-->
                                                <div class="mb-6">
                                                    <!--begin::Text-->
                                                    <span class="fw-semibold text-gray-600 fs-6 mb-8 d-block">Flat cartoony
                                                        illustrations with vivid unblended colors and asymmetrical beautiful
                                                        purple hair lady</span>
                                                    <!--end::Text-->
                                                    <!--begin::Stats-->
                                                    <div class="d-flex">
                                                        <!--begin::Stat-->
                                                        <div
                                                            class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-6 mb-3">
                                                            <!--begin::Date-->
                                                            <span class="fs-6 text-gray-700 fw-bold">Feb 6, 2021</span>
                                                            <!--end::Date-->
                                                            <!--begin::Label-->
                                                            <div class="fw-semibold text-gray-400">Due Date</div>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Stat-->
                                                        <!--begin::Stat-->
                                                        <div
                                                            class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                                                            <!--begin::Number-->
                                                            <span class="fs-6 text-gray-700 fw-bold">$
                                                                <span class="ms-n1" data-kt-countup="true"
                                                                    data-kt-countup-value="284,900.00">0</span></span>
                                                            <!--end::Number-->
                                                            <!--begin::Label-->
                                                            <div class="fw-semibold text-gray-400">Budget</div>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Stat-->
                                                    </div>
                                                    <!--end::Stats-->
                                                </div>
                                                <!--end::Body-->
                                                <!--begin::Footer-->
                                                <div class="d-flex flex-stack mt-auto bd-highlight">
                                                    <!--begin::Users group-->
                                                    <div class="symbol-group symbol-hover flex-nowrap">
                                                        <div class="symbol symbol-35px symbol-circle"
                                                            data-bs-toggle="tooltip" title="Melody Macy">
                                                            <img alt="Pic" src="assets/media/avatars/300-2.jpg" />
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle"
                                                            data-bs-toggle="tooltip" title="Michael Eberon">
                                                            <img alt="Pic" src="assets/media/avatars/300-3.jpg" />
                                                        </div>
                                                        <div class="symbol symbol-35px symbol-circle"
                                                            data-bs-toggle="tooltip" title="Susan Redwood">
                                                            <span
                                                                class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Users group-->
                                                    <!--begin::Actions-->
                                                    <a href="../../demo1/dist/apps/projects/project.html"
                                                        class="text-primary opacity-75-hover fs-6 fw-semibold">View Project
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr095.svg-->
                                                        <span class="svg-icon svg-icon-4 svg-icon-gray-800 ms-1">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3"
                                                                    d="M4.7 17.3V7.7C4.7 6.59543 5.59543 5.7 6.7 5.7H9.8C10.2694 5.7 10.65 5.31944 10.65 4.85C10.65 4.38056 10.2694 4 9.8 4H5C3.89543 4 3 4.89543 3 6V19C3 20.1046 3.89543 21 5 21H18C19.1046 21 20 20.1046 20 19V14.2C20 13.7306 19.6194 13.35 19.15 13.35C18.6806 13.35 18.3 13.7306 18.3 14.2V17.3C18.3 18.4046 17.4046 19.3 16.3 19.3H6.7C5.59543 19.3 4.7 18.4046 4.7 17.3Z"
                                                                    fill="currentColor" />
                                                                <rect x="21.9497" y="3.46448" width="13"
                                                                    height="2" rx="1"
                                                                    transform="rotate(135 21.9497 3.46448)"
                                                                    fill="currentColor" />
                                                                <path
                                                                    d="M19.8284 4.97161L19.8284 9.93937C19.8284 10.5252 20.3033 11 20.8891 11C21.4749 11 21.9497 10.5252 21.9497 9.93937L21.9497 3.05029C21.9497 2.498 21.502 2.05028 20.9497 2.05028L14.0607 2.05027C13.4749 2.05027 13 2.52514 13 3.11094C13 3.69673 13.4749 4.17161 14.0607 4.17161L19.0284 4.17161C19.4702 4.17161 19.8284 4.52978 19.8284 4.97161Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                    <!--end::Actions-->
                                                </div>
                                                <!--end::Footer-->
                                            </div>
                                            <!--end::Wrapper-->
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    <!--end::Row-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Card widget 18-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-6">
                            <!--begin::Chart widget 36-->
                            <div class="card card-flush overflow-hidden h-lg-100">
                                <!--begin::Header-->
                                <div class="card-header pt-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-dark">Performance</span>
                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">1,046 Inbound Calls today</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                        <div data-kt-daterangepicker="true" data-kt-daterangepicker-opens="left"
                                            data-kt-daterangepicker-range="today"
                                            class="btn btn-sm btn-light d-flex align-items-center px-4">
                                            <!--begin::Display range-->
                                            <div class="text-gray-600 fw-bold">Loading date range...</div>
                                            <!--end::Display range-->
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen014.svg-->
                                            <span class="svg-icon svg-icon-1 ms-2 me-0">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path opacity="0.3"
                                                        d="M21 22H3C2.4 22 2 21.6 2 21V5C2 4.4 2.4 4 3 4H21C21.6 4 22 4.4 22 5V21C22 21.6 21.6 22 21 22Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M6 6C5.4 6 5 5.6 5 5V3C5 2.4 5.4 2 6 2C6.6 2 7 2.4 7 3V5C7 5.6 6.6 6 6 6ZM11 5V3C11 2.4 10.6 2 10 2C9.4 2 9 2.4 9 3V5C9 5.6 9.4 6 10 6C10.6 6 11 5.6 11 5ZM15 5V3C15 2.4 14.6 2 14 2C13.4 2 13 2.4 13 3V5C13 5.6 13.4 6 14 6C14.6 6 15 5.6 15 5ZM19 5V3C19 2.4 18.6 2 18 2C17.4 2 17 2.4 17 3V5C17 5.6 17.4 6 18 6C18.6 6 19 5.6 19 5Z"
                                                        fill="currentColor" />
                                                    <path
                                                        d="M8.8 13.1C9.2 13.1 9.5 13 9.7 12.8C9.9 12.6 10.1 12.3 10.1 11.9C10.1 11.6 10 11.3 9.8 11.1C9.6 10.9 9.3 10.8 9 10.8C8.8 10.8 8.59999 10.8 8.39999 10.9C8.19999 11 8.1 11.1 8 11.2C7.9 11.3 7.8 11.4 7.7 11.6C7.6 11.8 7.5 11.9 7.5 12.1C7.5 12.2 7.4 12.2 7.3 12.3C7.2 12.4 7.09999 12.4 6.89999 12.4C6.69999 12.4 6.6 12.3 6.5 12.2C6.4 12.1 6.3 11.9 6.3 11.7C6.3 11.5 6.4 11.3 6.5 11.1C6.6 10.9 6.8 10.7 7 10.5C7.2 10.3 7.49999 10.1 7.89999 10C8.29999 9.90003 8.60001 9.80003 9.10001 9.80003C9.50001 9.80003 9.80001 9.90003 10.1 10C10.4 10.1 10.7 10.3 10.9 10.4C11.1 10.5 11.3 10.8 11.4 11.1C11.5 11.4 11.6 11.6 11.6 11.9C11.6 12.3 11.5 12.6 11.3 12.9C11.1 13.2 10.9 13.5 10.6 13.7C10.9 13.9 11.2 14.1 11.4 14.3C11.6 14.5 11.8 14.7 11.9 15C12 15.3 12.1 15.5 12.1 15.8C12.1 16.2 12 16.5 11.9 16.8C11.8 17.1 11.5 17.4 11.3 17.7C11.1 18 10.7 18.2 10.3 18.3C9.9 18.4 9.5 18.5 9 18.5C8.5 18.5 8.1 18.4 7.7 18.2C7.3 18 7 17.8 6.8 17.6C6.6 17.4 6.4 17.1 6.3 16.8C6.2 16.5 6.10001 16.3 6.10001 16.1C6.10001 15.9 6.2 15.7 6.3 15.6C6.4 15.5 6.6 15.4 6.8 15.4C6.9 15.4 7.00001 15.4 7.10001 15.5C7.20001 15.6 7.3 15.6 7.3 15.7C7.5 16.2 7.7 16.6 8 16.9C8.3 17.2 8.6 17.3 9 17.3C9.2 17.3 9.5 17.2 9.7 17.1C9.9 17 10.1 16.8 10.3 16.6C10.5 16.4 10.5 16.1 10.5 15.8C10.5 15.3 10.4 15 10.1 14.7C9.80001 14.4 9.50001 14.3 9.10001 14.3C9.00001 14.3 8.9 14.3 8.7 14.3C8.5 14.3 8.39999 14.3 8.39999 14.3C8.19999 14.3 7.99999 14.2 7.89999 14.1C7.79999 14 7.7 13.8 7.7 13.7C7.7 13.5 7.79999 13.4 7.89999 13.2C7.99999 13 8.2 13 8.5 13H8.8V13.1ZM15.3 17.5V12.2C14.3 13 13.6 13.3 13.3 13.3C13.1 13.3 13 13.2 12.9 13.1C12.8 13 12.7 12.8 12.7 12.6C12.7 12.4 12.8 12.3 12.9 12.2C13 12.1 13.2 12 13.6 11.8C14.1 11.6 14.5 11.3 14.7 11.1C14.9 10.9 15.2 10.6 15.5 10.3C15.8 10 15.9 9.80003 15.9 9.70003C15.9 9.60003 16.1 9.60004 16.3 9.60004C16.5 9.60004 16.7 9.70003 16.8 9.80003C16.9 9.90003 17 10.2 17 10.5V17.2C17 18 16.7 18.4 16.2 18.4C16 18.4 15.8 18.3 15.6 18.2C15.4 18.1 15.3 17.8 15.3 17.5Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--end::Daterangepicker-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body d-flex align-items-end p-0">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_36" class="min-h-auto w-100 ps-4 pe-6"
                                        style="height: 300px"></div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Chart widget 36-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-4">
                            <!--begin::Chart Widget 35-->
                            <div class="card card-flush h-md-100">
                                <!--begin::Header-->
                                <div class="card-header pt-5 mb-6">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <!--begin::Statistics-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Currency-->
                                            <span class="fs-3 fw-semibold text-gray-400 align-self-start me-1">$</span>
                                            <!--end::Currency-->
                                            <!--begin::Value-->
                                            <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,274.94</span>
                                            <!--end::Value-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light-success fs-base">
                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <rect opacity="0.5" x="13" y="6"
                                                            width="13" height="2" rx="1"
                                                            transform="rotate(90 13 6)" fill="currentColor" />
                                                        <path
                                                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->9.2%
                                            </span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Statistics-->
                                        <!--begin::Description-->
                                        <span class="fs-6 fw-semibold text-gray-400">Avg. Agent Earnings</span>
                                        <!--end::Description-->
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button
                                            class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                            data-kt-menu-overflow="true">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-gray-300 me-n1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.3" x="2" y="2" width="20"
                                                        height="20" rx="4" fill="currentColor" />
                                                    <rect x="11" y="11" width="2.6" height="2.6"
                                                        rx="1.3" fill="currentColor" />
                                                    <rect x="15" y="11" width="2.6" height="2.6"
                                                        rx="1.3" fill="currentColor" />
                                                    <rect x="7" y="11" width="2.6" height="2.6"
                                                        rx="1.3" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Customer</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Contact</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                        Reports</a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body py-0 px-0">
                                    <!--begin::Nav-->
                                    <ul class="nav d-flex justify-content-between mb-3 mx-9">
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px active"
                                                data-bs-toggle="tab" id="kt_charts_widget_35_tab_1"
                                                href="#kt_charts_widget_35_tab_content_1">1d</a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                                                data-bs-toggle="tab" id="kt_charts_widget_35_tab_2"
                                                href="#kt_charts_widget_35_tab_content_2">5d</a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                                                data-bs-toggle="tab" id="kt_charts_widget_35_tab_3"
                                                href="#kt_charts_widget_35_tab_content_3">1m</a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                                                data-bs-toggle="tab" id="kt_charts_widget_35_tab_4"
                                                href="#kt_charts_widget_35_tab_content_4">6m</a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                        <!--begin::Item-->
                                        <li class="nav-item mb-3">
                                            <!--begin::Link-->
                                            <a class="nav-link btn btn-flex flex-center btn-active-danger btn-color-gray-600 btn-active-color-white rounded-2 w-45px h-35px"
                                                data-bs-toggle="tab" id="kt_charts_widget_35_tab_5"
                                                href="#kt_charts_widget_35_tab_content_5">1y</a>
                                            <!--end::Link-->
                                        </li>
                                        <!--end::Item-->
                                    </ul>
                                    <!--end::Nav-->
                                    <!--begin::Tab Content-->
                                    <div class="tab-content mt-n6">
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade active show" id="kt_charts_widget_35_tab_content_1">
                                            <!--begin::Chart-->
                                            <div id="kt_charts_widget_35_chart_1" data-kt-chart-color="primary"
                                                class="min-h-auto h-200px ps-3 pe-6"></div>
                                            <!--end::Chart-->
                                            <!--begin::Table container-->
                                            <div class="table-responsive mx-9 mt-n6">
                                                <!--begin::Table-->
                                                <table class="table align-middle gs-0 gy-4">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr>
                                                            <th class="min-w-100px"></th>
                                                            <th class="min-w-100px text-end pe-0"></th>
                                                            <th class="text-end min-w-50px"></th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30
                                                                    PM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-danger">-139.34</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:10
                                                                    PM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$3,207.03</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-success">+576.24</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:55
                                                                    PM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$3,274.94</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-success">+124.03</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_2">
                                            <!--begin::Chart-->
                                            <div id="kt_charts_widget_35_chart_2" data-kt-chart-color="primary"
                                                class="min-h-auto h-200px ps-3 pe-6"></div>
                                            <!--end::Chart-->
                                            <!--begin::Table container-->
                                            <div class="table-responsive mx-9 mt-n6">
                                                <!--begin::Table-->
                                                <table class="table align-middle gs-0 gy-4">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr>
                                                            <th class="min-w-100px"></th>
                                                            <th class="min-w-100px text-end pe-0"></th>
                                                            <th class="text-end min-w-50px"></th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">4:30
                                                                    PM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,345.45</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-success">+134.02</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">11:35
                                                                    AM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-primary">-124.03</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:30
                                                                    PM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-danger">+144.04</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_3">
                                            <!--begin::Chart-->
                                            <div id="kt_charts_widget_35_chart_3" data-kt-chart-color="primary"
                                                class="min-h-auto h-200px ps-3 pe-6"></div>
                                            <!--end::Chart-->
                                            <!--begin::Table container-->
                                            <div class="table-responsive mx-9 mt-n6">
                                                <!--begin::Table-->
                                                <table class="table align-middle gs-0 gy-4">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr>
                                                            <th class="min-w-100px"></th>
                                                            <th class="min-w-100px text-end pe-0"></th>
                                                            <th class="text-end min-w-50px"></th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:20
                                                                    AM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$3,756.26</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-primary">+185.03</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">12:30
                                                                    AM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-danger">+124.03</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">4:30
                                                                    PM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-success">-154.03</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_4">
                                            <!--begin::Chart-->
                                            <div id="kt_charts_widget_35_chart_4" data-kt-chart-color="primary"
                                                class="min-h-auto h-200px ps-3 pe-6"></div>
                                            <!--end::Chart-->
                                            <!--begin::Table container-->
                                            <div class="table-responsive mx-9 mt-n6">
                                                <!--begin::Table-->
                                                <table class="table align-middle gs-0 gy-4">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr>
                                                            <th class="min-w-100px"></th>
                                                            <th class="min-w-100px text-end pe-0"></th>
                                                            <th class="text-end min-w-50px"></th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30
                                                                    PM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,756.26</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-warning">+124.03</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">5:30
                                                                    AM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$1,756.26</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-info">+144.65</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">4:30
                                                                    PM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,085.25</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-primary">+154.06</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--end::Tap pane-->
                                        <!--begin::Tap pane-->
                                        <div class="tab-pane fade" id="kt_charts_widget_35_tab_content_5">
                                            <!--begin::Chart-->
                                            <div id="kt_charts_widget_35_chart_5" data-kt-chart-color="primary"
                                                class="min-h-auto h-200px ps-3 pe-6"></div>
                                            <!--end::Chart-->
                                            <!--begin::Table container-->
                                            <div class="table-responsive mx-9 mt-n6">
                                                <!--begin::Table-->
                                                <table class="table align-middle gs-0 gy-4">
                                                    <!--begin::Table head-->
                                                    <thead>
                                                        <tr>
                                                            <th class="min-w-100px"></th>
                                                            <th class="min-w-100px text-end pe-0"></th>
                                                            <th class="text-end min-w-50px"></th>
                                                        </tr>
                                                    </thead>
                                                    <!--end::Table head-->
                                                    <!--begin::Table body-->
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">2:30
                                                                    PM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$2,045.04</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-warning">+114.03</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">3:30
                                                                    AM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$756.26</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-primary">-124.03</span>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>
                                                                <a href="#" class="text-gray-600 fw-bold fs-6">10:30
                                                                    PM</a>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="text-gray-800 fw-bold fs-6 me-1">$1.756.26</span>
                                                            </td>
                                                            <td class="pe-0 text-end">
                                                                <span class="fw-bold fs-6 text-info">+165.86</span>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                    <!--end::Table body-->
                                                </table>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Table container-->
                                        </div>
                                        <!--end::Tap pane-->
                                    </div>
                                    <!--end::Tab Content-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Chart Widget 35-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-8">
                            <!--begin::Table widget 14-->
                            <div class="card card-flush h-md-100">
                                <!--begin::Header-->
                                <div class="card-header pt-7">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Projects Stats</span>
                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Updated 37 minutes ago</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/add-product.html"
                                            class="btn btn-sm btn-light">History</a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body pt-6">
                                    <!--begin::Table container-->
                                    <div class="table-responsive">
                                        <!--begin::Table-->
                                        <table class="table table-row-dashed align-middle gs-0 gy-3 my-0">
                                            <!--begin::Table head-->
                                            <thead>
                                                <tr class="fs-7 fw-bold text-gray-400 border-bottom-0">
                                                    <th class="p-0 pb-3 min-w-175px text-start">ITEM</th>
                                                    <th class="p-0 pb-3 min-w-100px text-end">BUDGET</th>
                                                    <th class="p-0 pb-3 min-w-100px text-end">PROGRESS</th>
                                                    <th class="p-0 pb-3 min-w-175px text-end pe-12">STATUS</th>
                                                    <th class="p-0 pb-3 w-125px text-end pe-7">CHART</th>
                                                    <th class="p-0 pb-3 w-50px text-end">VIEW</th>
                                                </tr>
                                            </thead>
                                            <!--end::Table head-->
                                            <!--begin::Table body-->
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="assets/media/stock/600x600/img-49.jpg"
                                                                    class="" alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Mivy
                                                                    App</a>
                                                                <span class="text-gray-400 fw-semibold d-block fs-7">Jane
                                                                    Cooper</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-600 fw-bold fs-6">$32,400</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-success fs-base">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.5" x="13" y="6"
                                                                        width="13" height="2" rx="1"
                                                                        transform="rotate(90 13 6)" fill="currentColor" />
                                                                    <path
                                                                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->9.2%
                                                        </span>
                                                        <!--end::Label-->
                                                    </td>
                                                    <td class="text-end pe-12">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In
                                                            Process</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_14_chart_1" class="h-50px mt-n8 pe-7"
                                                            data-kt-chart-color="success"></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.3"
                                                                        d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="assets/media/stock/600x600/img-40.jpg"
                                                                    class="" alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Avionica</a>
                                                                <span class="text-gray-400 fw-semibold d-block fs-7">Esther
                                                                    Howard</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-600 fw-bold fs-6">$256,910</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-danger fs-base">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.5" x="11" y="18"
                                                                        width="13" height="2" rx="1"
                                                                        transform="rotate(-90 11 18)" fill="currentColor" />
                                                                    <path
                                                                        d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->0.4%
                                                        </span>
                                                        <!--end::Label-->
                                                    </td>
                                                    <td class="text-end pe-12">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-warning">On Hold</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_14_chart_2" class="h-50px mt-n8 pe-7"
                                                            data-kt-chart-color="danger"></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.3"
                                                                        d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="assets/media/stock/600x600/img-39.jpg"
                                                                    class="" alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Charto
                                                                    CRM</a>
                                                                <span class="text-gray-400 fw-semibold d-block fs-7">Jenny
                                                                    Wilson</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-600 fw-bold fs-6">$8,220</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-success fs-base">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.5" x="13" y="6"
                                                                        width="13" height="2" rx="1"
                                                                        transform="rotate(90 13 6)" fill="currentColor" />
                                                                    <path
                                                                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->9.2%
                                                        </span>
                                                        <!--end::Label-->
                                                    </td>
                                                    <td class="text-end pe-12">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In
                                                            Process</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_14_chart_3" class="h-50px mt-n8 pe-7"
                                                            data-kt-chart-color="success"></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.3"
                                                                        d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="assets/media/stock/600x600/img-47.jpg"
                                                                    class="" alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">Tower
                                                                    Hill</a>
                                                                <span class="text-gray-400 fw-semibold d-block fs-7">Cody
                                                                    Fisher</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-600 fw-bold fs-6">$74,000</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-success fs-base">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.5" x="13" y="6"
                                                                        width="13" height="2" rx="1"
                                                                        transform="rotate(90 13 6)" fill="currentColor" />
                                                                    <path
                                                                        d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->9.2%
                                                        </span>
                                                        <!--end::Label-->
                                                    </td>
                                                    <td class="text-end pe-12">
                                                        <span
                                                            class="badge py-3 px-4 fs-7 badge-light-success">Complated</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_14_chart_4" class="h-50px mt-n8 pe-7"
                                                            data-kt-chart-color="success"></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.3"
                                                                        d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="symbol symbol-50px me-3">
                                                                <img src="assets/media/stock/600x600/img-48.jpg"
                                                                    class="" alt="" />
                                                            </div>
                                                            <div class="d-flex justify-content-start flex-column">
                                                                <a href="#"
                                                                    class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6">9
                                                                    Degree</a>
                                                                <span class="text-gray-400 fw-semibold d-block fs-7">Savannah
                                                                    Nguyen</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <span class="text-gray-600 fw-bold fs-6">$183,300</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <!--begin::Label-->
                                                        <span class="badge badge-light-danger fs-base">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <rect opacity="0.5" x="11" y="18"
                                                                        width="13" height="2" rx="1"
                                                                        transform="rotate(-90 11 18)" fill="currentColor" />
                                                                    <path
                                                                        d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->0.4%
                                                        </span>
                                                        <!--end::Label-->
                                                    </td>
                                                    <td class="text-end pe-12">
                                                        <span class="badge py-3 px-4 fs-7 badge-light-primary">In
                                                            Process</span>
                                                    </td>
                                                    <td class="text-end pe-0">
                                                        <div id="kt_table_widget_14_chart_5" class="h-50px mt-n8 pe-7"
                                                            data-kt-chart-color="danger"></div>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary w-30px h-30px">
                                                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
                                                            <span class="svg-icon svg-icon-5 svg-icon-gray-700">
                                                                <svg width="24" height="24" viewBox="0 0 24 24"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path
                                                                        d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z"
                                                                        fill="currentColor" />
                                                                    <path opacity="0.3"
                                                                        d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z"
                                                                        fill="currentColor" />
                                                                </svg>
                                                            </span>
                                                            <!--end::Svg Icon-->
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <!--end::Table body-->
                                        </table>
                                    </div>
                                    <!--end::Table-->
                                </div>
                                <!--end: Card Body-->
                            </div>
                            <!--end::Table widget 14-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                    <!--begin::Row-->
                    <div class="row gx-5 gx-xl-10">
                        <!--begin::Col-->
                        <div class="col-xl-4">
                            <!--begin::Chart widget 31-->
                            <div class="card card-flush h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header pt-7 mb-7">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-gray-800">Warephase stats</span>
                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">8k social visitors</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <a href="../../demo1/dist/apps/ecommerce/catalog/add-product.html"
                                            class="btn btn-sm btn-light">PDF Report</a>
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Body-->
                                <div class="card-body d-flex align-items-end pt-0">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_31_chart" class="w-100 h-300px"></div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Body-->
                            </div>
                            <!--end::Chart widget 31-->
                        </div>
                        <!--end::Col-->
                        <!--begin::Col-->
                        <div class="col-xl-8">
                            <!--begin::Chart widget 24-->
                            <div class="card card-flush overflow-hidden h-xl-100">
                                <!--begin::Header-->
                                <div class="card-header py-5">
                                    <!--begin::Title-->
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="card-label fw-bold text-dark">Human Resources</span>
                                        <span class="text-gray-400 mt-1 fw-semibold fs-6">Reports by states and ganders</span>
                                    </h3>
                                    <!--end::Title-->
                                    <!--begin::Toolbar-->
                                    <div class="card-toolbar">
                                        <!--begin::Menu-->
                                        <button
                                            class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end"
                                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end"
                                            data-kt-menu-overflow="true">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
                                            <span class="svg-icon svg-icon-1">
                                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect opacity="0.3" x="2" y="2" width="20"
                                                        height="20" rx="4" fill="currentColor" />
                                                    <rect x="11" y="11" width="2.6" height="2.6"
                                                        rx="1.3" fill="currentColor" />
                                                    <rect x="15" y="11" width="2.6" height="2.6"
                                                        rx="1.3" fill="currentColor" />
                                                    <rect x="7" y="11" width="2.6" height="2.6"
                                                        rx="1.3" fill="currentColor" />
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--begin::Menu 2-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px"
                                            data-kt-menu="true">
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mb-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Ticket</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Customer</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3" data-kt-menu-trigger="hover"
                                                data-kt-menu-placement="right-start">
                                                <!--begin::Menu item-->
                                                <a href="#" class="menu-link px-3">
                                                    <span class="menu-title">New Group</span>
                                                    <span class="menu-arrow"></span>
                                                </a>
                                                <!--end::Menu item-->
                                                <!--begin::Menu sub-->
                                                <div class="menu-sub menu-sub-dropdown w-175px py-4">
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Admin Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Staff Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                    <!--begin::Menu item-->
                                                    <div class="menu-item px-3">
                                                        <a href="#" class="menu-link px-3">Member Group</a>
                                                    </div>
                                                    <!--end::Menu item-->
                                                </div>
                                                <!--end::Menu sub-->
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <a href="#" class="menu-link px-3">New Contact</a>
                                            </div>
                                            <!--end::Menu item-->
                                            <!--begin::Menu separator-->
                                            <div class="separator mt-3 opacity-75"></div>
                                            <!--end::Menu separator-->
                                            <!--begin::Menu item-->
                                            <div class="menu-item px-3">
                                                <div class="menu-content px-3 py-3">
                                                    <a class="btn btn-primary btn-sm px-4" href="#">Generate
                                                        Reports</a>
                                                </div>
                                            </div>
                                            <!--end::Menu item-->
                                        </div>
                                        <!--end::Menu 2-->
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Chart-->
                                    <div id="kt_charts_widget_24" class="min-h-auto" style="height: 300px"></div>
                                    <!--end::Chart-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Chart widget 24-->
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
            @endhasrole
            @hasrole('investor')
                <div id="kt_app_content" class="app-content flex-column-fluid">
                    <div id="kt_app_content_container" class="app-container">

                        <div class="row">
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-10">
                                <div class="card-body mb-3">
                                    <div class="position-relative">
                                        <div class=" text-white mb-4"
                                            style="padding-top:35px;min-height:200px;background-image:url('https://wealthblock-asset.s3.amazonaws.com/image/9ae4b8395f06bf82fa965f2c93e7a7e7.png');padding:5px 20px">
                                            <div class="row text-white ">
                                                <div class="col-lg-12 pt-20">
                                                    <h3 class="text-white fs-2qx fw-bold  text-white"
                                                        id="issuer_account_label">Techware Labs </h3>
                                                </div>
                                                <div class="col-lg-12">
                                                    <strong id="offer_name_label " class="fs-1qx fw-bold"> Offer Name
                                                    </strong>
                                                </div>
                                                <div class="col-lg-12">
                                                    <strong id="short_description_label" class="fs-1qx fw-bold"> Offer
                                                        Description </strong>
                                                </div>

                                                <div class="col-lg-6  mt-3 " style="font-weight: bold">
                                                    <div class="fs-5 fw-semibold text-success">
                                                        <span id="currency_wrapper">
                                                            $
                                                        </span>
                                                        <span id="offer_size_label">
                                                            10000000
                                                        </span>
                                                        <i class="text-dark" id="offer_size_html"> Offer Size </i>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 text-right" style="text-align: right">
                                                    <button class="btn btn-sm btn-light-primary" data-bs-toggle="modal"
                                                        data-bs-target="#kt_modal_create_account">
                                                        Invest $ 10000000
                                                    </button>
                                                    <a href="#" class="btn btn-primary er fs-6 px-8 py-4"
                                                        data-bs-toggle="modal" data-bs-target="#kt_modal_top_up_wallet">Top
                                                        Up Wallet</a>

                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-1">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1">
                            </div>
                            <div class="col-lg-10">
                                <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8"
                                    role="tablist">
                                    <!--begin:::Tab item-->
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab"
                                            href="#kt_customer_view_overview_tab" aria-selected="true"
                                            role="tab">Overview</a>
                                    </li>
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab"
                                            href="#kt_customer_view_overview_events_and_logs_tab" aria-selected="false"
                                            role="tab" tabindex="-1"> Discussion </a>
                                    </li>
                                    <!--end:::Tab item-->
                                    <!--begin:::Tab item-->
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true"
                                            data-bs-toggle="tab" href="#kt_customer_view_overview_statements"
                                            data-kt-initialized="1" aria-selected="false" role="tab" tabindex="-1">
                                            Updates </a>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true"
                                            data-bs-toggle="tab" href="#kt_customer_view_overview_statements"
                                            data-kt-initialized="1" aria-selected="false" role="tab" tabindex="-1">
                                            Q&A </a>
                                    </li>

                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <!--begin:::Tab pane-->
                                    <div class="tab-pane fade active show" id="kt_customer_view_overview_tab"
                                        role="tabpanel">
                                        <!--begin::Card-->
                                        <div class="card pt-4 mb-6 mb-xl-9">
                                            <!--begin::Card header-->
                                            <div class="card-header border-0">
                                                <!--begin::Card title-->
                                                <div class="card-title">
                                                    <h2> Overview </h2>
                                                </div>
                                            </div>
                                            <div class="card-body pt-0 pb-5">
                                                <!--begin::Table-->
                                                <div id="kt_table_customers_payment_wrapper"
                                                    class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                    <p>
                                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rerum nobis
                                                        officia iure numquam minus quae, laborum ratione deserunt excepturi, nam
                                                        ducimus dicta placeat vero veritatis explicabo? Sunt autem architecto
                                                        magnam.
                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                                                        sapiente dolorum praesentium! Consequatur labore vitae at eum
                                                        repudiandae

                                                        ducimus culpa. Voluptatum labore, beatae unde adipisci officiis eos odit
                                                        amet ducimus.

                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                                                        sapiente dolorum praesentium! Consequatur labore vitae at eum
                                                        repudiandae

                                                        ducimus culpa. Voluptatum labore, beatae unde adipisci officiis eos odit
                                                        amet ducimus.

                                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis
                                                        sapiente dolorum praesentium! Consequatur labore vitae at eum
                                                        repudiandae

                                                        ducimus culpa. Voluptatum labore, beatae unde adipisci officiis eos odit
                                                        amet ducimus.
                                                    </p>
                                                </div>
                                                <!--end::Table-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>


                                    </div>
                                    <!--end:::Tab pane-->
                                    <!--begin:::Tab pane-->
                                    <div class="tab-pane fade" id="kt_customer_view_overview_events_and_logs_tab"
                                        role="tabpanel">
                                        <!--begin::Card-->
                                        <div class="card pt-4 mb-6 mb-xl-9">
                                            <!--begin::Card header-->
                                            <div class="card-header border-0">
                                                <!--begin::Card title-->
                                                <div class="card-title">
                                                    <h2>Logs</h2>
                                                </div>
                                                <!--end::Card title-->
                                                <!--begin::Card toolbar-->
                                                <div class="card-toolbar">
                                                    <!--begin::Button-->
                                                    <button type="button" class="btn btn-sm btn-light-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/files/fil021.svg-->
                                                        <span class="svg-icon svg-icon-3">
                                                            <svg width="24" height="24" viewBox="0 0 24 24"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3"
                                                                    d="M19 15C20.7 15 22 13.7 22 12C22 10.3 20.7 9 19 9C18.9 9 18.9 9 18.8 9C18.9 8.7 19 8.3 19 8C19 6.3 17.7 5 16 5C15.4 5 14.8 5.2 14.3 5.5C13.4 4 11.8 3 10 3C7.2 3 5 5.2 5 8C5 8.3 5 8.7 5.1 9H5C3.3 9 2 10.3 2 12C2 13.7 3.3 15 5 15H19Z"
                                                                    fill="currentColor"></path>
                                                                <path
                                                                    d="M13 17.4V12C13 11.4 12.6 11 12 11C11.4 11 11 11.4 11 12V17.4H13Z"
                                                                    fill="currentColor"></path>
                                                                <path opacity="0.3"
                                                                    d="M8 17.4H16L12.7 20.7C12.3 21.1 11.7 21.1 11.3 20.7L8 17.4Z"
                                                                    fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->Download Report
                                                    </button>
                                                    <!--end::Button-->
                                                </div>
                                                <!--end::Card toolbar-->
                                            </div>
                                            <!--end::Card header-->
                                            <!--begin::Card body-->
                                            <div class="card-body py-0">
                                                <!--begin::Table wrapper-->
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table
                                                        class="table align-middle table-row-dashed fw-semibold text-gray-600 fs-6 gy-5"
                                                        id="kt_table_customers_logs">
                                                        <!--begin::Table body-->
                                                        <tbody>
                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <!--begin::Badge=-->
                                                                <td class="min-w-70px">
                                                                    <div class="badge badge-light-success">200 OK</div>
                                                                </td>
                                                                <!--end::Badge=-->
                                                                <!--begin::Status=-->
                                                                <td>POST /v1/invoices/in_5317_1652/payment</td>
                                                                <!--end::Status=-->
                                                                <!--begin::Timestamp=-->
                                                                <td class="pe-0 text-end min-w-200px">10 Mar 2022, 10:10
                                                                    pm</td>
                                                                <!--end::Timestamp=-->
                                                            </tr>




                                                            <tr>
                                                                <!--begin::Badge=-->
                                                                <td class="min-w-70px">
                                                                    <div class="badge badge-light-success">200 OK</div>
                                                                </td>
                                                                <!--end::Badge=-->
                                                                <!--begin::Status=-->
                                                                <td>POST /v1/invoices/in_3701_3258/payment</td>
                                                                <!--end::Status=-->
                                                                <!--begin::Timestamp=-->
                                                                <td class="pe-0 text-end min-w-200px">10 Nov 2022, 6:05 pm
                                                                </td>
                                                                <!--end::Timestamp=-->
                                                            </tr>
                                                            <!--end::Table row-->
                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <!--begin::Badge=-->
                                                                <td class="min-w-70px">
                                                                    <div class="badge badge-light-danger">500 ERR</div>
                                                                </td>
                                                                <!--end::Badge=-->
                                                                <!--begin::Status=-->
                                                                <td>POST /v1/invoice/in_1291_7141/invalid</td>
                                                                <!--end::Status=-->
                                                                <!--begin::Timestamp=-->
                                                                <td class="pe-0 text-end min-w-200px">19 Aug 2022, 10:30
                                                                    am</td>
                                                                <!--end::Timestamp=-->
                                                            </tr>
                                                            <!--end::Table row-->
                                                            <!--begin::Table row-->
                                                            <tr>
                                                                <!--begin::Badge=-->
                                                                <td class="min-w-70px">
                                                                    <div class="badge badge-light-warning">404 WRN</div>
                                                                </td>
                                                                <!--end::Badge=-->
                                                                <!--begin::Status=-->
                                                                <td>POST /v1/customer/c_633f099c9c712/not_found</td>
                                                                <!--end::Status=-->
                                                                <!--begin::Timestamp=-->
                                                                <td class="pe-0 text-end min-w-200px">24 Jun 2022, 6:05 pm
                                                                </td>
                                                                <!--end::Timestamp=-->
                                                            </tr>
                                                            <!--end::Table row-->
                                                        </tbody>
                                                        <!--end::Table body-->
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                                <!--end::Table wrapper-->
                                            </div>
                                            <!--end::Card body-->
                                        </div>

                                    </div>
                                    <!--end:::Tab pane-->
                                    <!--begin:::Tab pane-->
                                    <div class="tab-pane fade" id="kt_customer_view_overview_statements" role="tabpanel">
                                        <!--begin::Earnings-->
                                        <div class="card mb-6 mb-xl-9">
                                            <!--begin::Header-->
                                            <div class="card-header border-0">
                                                <div class="card-title">
                                                    <h2>Earnings</h2>
                                                </div>
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Body-->
                                            <div class="card-body py-0">
                                                <div class="fs-5 fw-semibold text-gray-500 mb-4">Last 30 day earnings
                                                    calculated. Apart from arranging the order of topics.</div>
                                                <!--begin::Left Section-->
                                                <div class="d-flex flex-wrap flex-stack mb-5">
                                                    <!--begin::Row-->
                                                    <div class="d-flex flex-wrap">
                                                        <!--begin::Col-->
                                                        <div
                                                            class="border border-dashed border-gray-300 w-150px rounded my-3 p-4 me-6">
                                                            <span class="fs-1 fw-bold text-gray-800 lh-1">
                                                                <span data-kt-countup="true" data-kt-countup-value="6,840"
                                                                    data-kt-countup-prefix="$" class="counted"
                                                                    data-kt-initialized="1">$6,840</span>
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-success">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.5" x="13" y="6"
                                                                            width="13" height="2" rx="1"
                                                                            transform="rotate(90 13 6)" fill="currentColor">
                                                                        </rect>
                                                                        <path
                                                                            d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <span class="fs-6 fw-semibold text-muted d-block lh-1 pt-2">Net
                                                                Earnings</span>
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div
                                                            class="border border-dashed border-gray-300 w-125px rounded my-3 p-4 me-6">
                                                            <span class="fs-1 fw-bold text-gray-800 lh-1">
                                                                <span class="counted" data-kt-countup="true"
                                                                    data-kt-countup-value="16"
                                                                    data-kt-initialized="1">16</span>%
                                                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
                                                                <span class="svg-icon svg-icon-1 svg-icon-danger">
                                                                    <svg width="24" height="24" viewBox="0 0 24 24"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <rect opacity="0.5" x="11" y="18"
                                                                            width="13" height="2" rx="1"
                                                                            transform="rotate(-90 11 18)"
                                                                            fill="currentColor"></rect>
                                                                        <path
                                                                            d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z"
                                                                            fill="currentColor"></path>
                                                                    </svg>
                                                                </span>
                                                                <!--end::Svg Icon-->
                                                            </span>
                                                            <span
                                                                class="fs-6 fw-semibold text-muted d-block lh-1 pt-2">Change</span>
                                                        </div>
                                                        <!--end::Col-->
                                                        <!--begin::Col-->
                                                        <div
                                                            class="border border-dashed border-gray-300 w-150px rounded my-3 p-4 me-6">
                                                            <span class="fs-1 fw-bold text-gray-800 lh-1">
                                                                <span data-kt-countup="true" data-kt-countup-value="1,240"
                                                                    data-kt-countup-prefix="$" class="counted"
                                                                    data-kt-initialized="1">$1,240</span>
                                                                <span class="text-primary">--</span>
                                                            </span>
                                                            <span
                                                                class="fs-6 fw-semibold text-muted d-block lh-1 pt-2">Fees</span>
                                                        </div>
                                                        <!--end::Col-->
                                                    </div>
                                                    <!--end::Row-->
                                                    <a href="#"
                                                        class="btn btn-sm btn-light-primary flex-shrink-0">Withdraw
                                                        Earnings</a>
                                                </div>
                                                <!--end::Left Section-->
                                            </div>
                                            <!--end::Body-->
                                        </div>

                                    </div>
                                    <!--end:::Tab pane-->
                                </div>
                            </div>
                            <div class="col-lg-1">
                            </div>
                        </div>

                    </div>
                </div>
            @endhasrole
            <!--end::Content container-->

        </div>
        <!--end::Content-->
    </div>


    <div class="modal fade" id="kt_modal_top_up_wallet" tabindex="-1" aria-hidden="true">
        <!--begin::Modal dialog-->
        <div class="modal-dialog modal-fullscreen p-9">
            <!--begin::Modal content-->
            <div class="modal-content modal-rounded">
                <!--begin::Modal header-->
                <div class="modal-header py-7 d-flex justify-content-between">
                    <!--begin::Modal title-->
                    <h2>Top Up Wallet ss</h2>
                    <!--end::Modal title-->
                    <!--begin::Close-->
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-kt-modal-action-type="close">
                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                        <span class="svg-icon svg-icon-1">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect opacity="0.5" x="6" y="17.3137" width="16" height="2"
                                    rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
                                <rect x="7.41422" y="6" width="16" height="2" rx="1"
                                    transform="rotate(45 7.41422 6)" fill="currentColor" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->
                    </div>
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
                                <h3 class="stepper-title"> Select Account Type </h3>
                            </div>
                            <!--end::Step 1-->
                            <!--begin::Step 2-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Verify Identity</h3>
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Investment Limits  </h3>
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 4-->
                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Payment Method</h3>
                            </div>

                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <h3 class="stepper-title">Connect Bank</h3>
                            </div>

                            <div class="stepper-item" data-kt-stepper-element="nav">
                                <h3 class="stepper-title"> Sign Subscription Agreement and Token Grant </h3>
                            </div>
                            <!--end::Step 4-->
                        </div>
                        <!--end::Nav-->
                        <!--begin::Form-->
                        <form class="mx-auto w-100 mw-900px pt-15 pb-10" novalidate="novalidate"  id="kt_modal_top_up_wallet_stepper_form">
                            <!--begin::Step 1-->
                            <div class="current" data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-10 pb-lg-15">
                                        <!--begin::Title-->
                                        <h2 class="fw-bold d-flex align-items-center text-dark"> Select Account Type
                                            <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip"
                                                title="You will be charged the set amount from your selected payment option"></i>
                                        </h2>
                                        <!--end::Title-->
                                        <!--begin::Notice-->
                                        <div class="text-muted fw-semibold fs-6"> What type of account are you investing
                                            as? </div>
                                        <!--end::Notice-->
                                    </div>
                                    <!--end::Heading-->
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
                                                <input type="radio" class="btn-check" name="currency_type"
                                                    value="dollar" id="kt_radio_buttons_2_option_1"
                                                    checked="checked" />
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center h-100"
                                                    for="kt_radio_buttons_2_option_1">
                                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin010.svg-->
                                                    <span class="svg-icon svg-icon-3hx svg-icon-primary">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M12.5 22C11.9 22 11.5 21.6 11.5 21V3C11.5 2.4 11.9 2 12.5 2C13.1 2 13.5 2.4 13.5 3V21C13.5 21.6 13.1 22 12.5 22Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M17.8 14.7C17.8 15.5 17.6 16.3 17.2 16.9C16.8 17.6 16.2 18.1 15.3 18.4C14.5 18.8 13.5 19 12.4 19C11.1 19 10 18.7 9.10001 18.2C8.50001 17.8 8.00001 17.4 7.60001 16.7C7.20001 16.1 7 15.5 7 14.9C7 14.6 7.09999 14.3 7.29999 14C7.49999 13.8 7.80001 13.6 8.20001 13.6C8.50001 13.6 8.69999 13.7 8.89999 13.9C9.09999 14.1 9.29999 14.4 9.39999 14.7C9.59999 15.1 9.8 15.5 10 15.8C10.2 16.1 10.5 16.3 10.8 16.5C11.2 16.7 11.6 16.8 12.2 16.8C13 16.8 13.7 16.6 14.2 16.2C14.7 15.8 15 15.3 15 14.8C15 14.4 14.9 14 14.6 13.7C14.3 13.4 14 13.2 13.5 13.1C13.1 13 12.5 12.8 11.8 12.6C10.8 12.4 9.99999 12.1 9.39999 11.8C8.69999 11.5 8.19999 11.1 7.79999 10.6C7.39999 10.1 7.20001 9.39998 7.20001 8.59998C7.20001 7.89998 7.39999 7.19998 7.79999 6.59998C8.19999 5.99998 8.80001 5.60005 9.60001 5.30005C10.4 5.00005 11.3 4.80005 12.3 4.80005C13.1 4.80005 13.8 4.89998 14.5 5.09998C15.1 5.29998 15.6 5.60002 16 5.90002C16.4 6.20002 16.7 6.6 16.9 7C17.1 7.4 17.2 7.69998 17.2 8.09998C17.2 8.39998 17.1 8.7 16.9 9C16.7 9.3 16.4 9.40002 16 9.40002C15.7 9.40002 15.4 9.29995 15.3 9.19995C15.2 9.09995 15 8.80002 14.8 8.40002C14.6 7.90002 14.3 7.49995 13.9 7.19995C13.5 6.89995 13 6.80005 12.2 6.80005C11.5 6.80005 10.9 7.00005 10.5 7.30005C10.1 7.60005 9.79999 8.00002 9.79999 8.40002C9.79999 8.70002 9.9 8.89998 10 9.09998C10.1 9.29998 10.4 9.49998 10.6 9.59998C10.8 9.69998 11.1 9.90002 11.4 9.90002C11.7 10 12.1 10.1 12.7 10.3C13.5 10.5 14.2 10.7 14.8 10.9C15.4 11.1 15.9 11.4 16.4 11.7C16.8 12 17.2 12.4 17.4 12.9C17.6 13.4 17.8 14 17.8 14.7Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <span class="d-block fw-semibold text-start">
                                                        <span class="text-dark fw-bold d-block fs-3">Individual</span>
                                                        <span class="text-muted fw-semibold fs-6">
                                                            Individual investor managing a single account
                                                        </span>
                                                    </span>
                                                </label>
                                                <!--end::Option-->
                                            </div>
                                            <!--end::Col-->
                                            <!--begin::Col-->
                                            <div class="col">
                                                <!--begin::Option-->
                                                <input type="radio" class="btn-check" name="currency_type"
                                                    value="dollar" id="kt_radio_buttons_2_option_2" />
                                                <label
                                                    class="btn btn-outline btn-outline-dashed btn-active-light-primary p-7 d-flex align-items-center h-100"
                                                    for="kt_radio_buttons_2_option_2">
                                                    <!--begin::Svg Icon | path: icons/duotune/finance/fin009.svg-->
                                                    <span class="svg-icon svg-icon-3hx svg-icon-primary">
                                                        <svg width="24" height="24" viewBox="0 0 24 24"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path opacity="0.3"
                                                                d="M15.8 11.4H6C5.4 11.4 5 11 5 10.4C5 9.80002 5.4 9.40002 6 9.40002H15.8C16.4 9.40002 16.8 9.80002 16.8 10.4C16.8 11 16.3 11.4 15.8 11.4ZM15.7 13.7999C15.7 13.1999 15.3 12.7999 14.7 12.7999H6C5.4 12.7999 5 13.1999 5 13.7999C5 14.3999 5.4 14.7999 6 14.7999H14.8C15.3 14.7999 15.7 14.2999 15.7 13.7999Z"
                                                                fill="currentColor" />
                                                            <path
                                                                d="M18.8 15.5C18.9 15.7 19 15.9 19.1 16.1C19.2 16.7 18.7 17.2 18.4 17.6C17.9 18.1 17.3 18.4999 16.6 18.7999C15.9 19.0999 15 19.2999 14.1 19.2999C13.4 19.2999 12.7 19.2 12.1 19.1C11.5 19 11 18.7 10.5 18.5C10 18.2 9.60001 17.7999 9.20001 17.2999C8.80001 16.8999 8.49999 16.3999 8.29999 15.7999C8.09999 15.1999 7.80001 14.7 7.70001 14.1C7.60001 13.5 7.5 12.8 7.5 12.2C7.5 11.1 7.7 10.1 8 9.19995C8.3 8.29995 8.79999 7.60002 9.39999 6.90002C9.99999 6.30002 10.7 5.8 11.5 5.5C12.3 5.2 13.2 5 14.1 5C15.2 5 16.2 5.19995 17.1 5.69995C17.8 6.09995 18.7 6.6 18.8 7.5C18.8 7.9 18.6 8.29998 18.3 8.59998C18.2 8.69998 18.1 8.69993 18 8.79993C17.7 8.89993 17.4 8.79995 17.2 8.69995C16.7 8.49995 16.5 7.99995 16 7.69995C15.5 7.39995 14.9 7.19995 14.2 7.19995C13.1 7.19995 12.1 7.6 11.5 8.5C10.9 9.4 10.5 10.6 10.5 12.2C10.5 13.3 10.7 14.2 11 14.9C11.3 15.6 11.7 16.1 12.3 16.5C12.9 16.9 13.5 17 14.2 17C15 17 15.7 16.8 16.2 16.4C16.8 16 17.2 15.2 17.9 15.1C18 15 18.5 15.2 18.8 15.5Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <span class="d-block fw-semibold text-start">
                                                        <span class="text-dark fw-bold d-block fs-3">Entity</span>
                                                        <span class="text-muted fw-semibold fs-6"> Registered Investment
                                                            Advisors, Financial Advisors, Family Offices, Trusts, IRAs or
                                                            those investing on behalf of an entity
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
                                    <div class="pb-3 pb-lg-12">
                                        <h1 class="fw-bold text-dark">Verify Identity</h1>

                                        <!--end::Description-->
                                    </div>
                                    <div class="row" data-kt-modal-top-up-wallet-option="dollar">
                                        <div class="card-body">
                                            <div class="form-group row mb-10">
                                                <input type="hidden" name="type" value="investor">
                                                <div class="col-lg-12 mb-3">
                                                    <h3>
                                                        CONTACT INFORMATION
                                                    </h3>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-10">
                                                        <div class="row mb-10">
                                                            <div class="col-lg-4">
                                                                <label>First Name: <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="First Name*" required=""
                                                                    name="first_name" value="Elaine">
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label>Middle Name: <span
                                                                        class="text-danger"></span></label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Middle Name" name="middle_name"
                                                                    value="Chava Garrett">
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label>Last Name: <span
                                                                        class="text-danger">*</span></label>
                                                                <input type="text" class="form-control"
                                                                    placeholder="Last Name" name="last_name"
                                                                    value="Gay">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <label>Title:</label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="Title" name="title"
                                                                        value="Quidem nemo vel qui">

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label>Phone Number: <span class="text-danger">*</span>
                                                                </label>
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control"
                                                                        placeholder="(201) 555-0123" name="phone"
                                                                        value="+1 (659) 138-4513">

                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <label>Date of Birth <span class="text-danger">*</span>
                                                                </label>
                                                                <div class="input-group" id="">
                                                                    <input type="date" class="form-control"
                                                                        placeholder="Date of Birth*" required=""
                                                                        name="dob" value="1970-05-04">

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-2 pt-6">
                                                        <div class="image-input image-input-outline image-input-empty"
                                                            data-kt-image-input="true"
                                                            style="background-image: url('http://127.0.0.1:8000/assets/media/svg/avatars/blank.svg')">
                                                            <!--begin::Preview existing avatar-->
                                                            <div class="image-input-wrapper w-150px h-150px"
                                                                style="background-image: none;"></div>
                                                            <!--end::Preview existing avatar-->
                                                            <!--begin::Label-->
                                                            <label
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="change"
                                                                data-bs-toggle="tooltip" aria-label="Change avatar"
                                                                data-kt-initialized="1">
                                                                <i class="bi bi-pencil-fill fs-7"></i>
                                                                <!--begin::Inputs-->
                                                                <input type="file" name="profile_avatar"
                                                                    accept=".png, .jpg, .jpeg">
                                                                <input type="hidden" name="avatar_remove"
                                                                    value="1">
                                                                <!--end::Inputs-->
                                                            </label>
                                                            <!--end::Label-->
                                                            <!--begin::Cancel-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="cancel"
                                                                data-bs-toggle="tooltip" aria-label="Cancel avatar"
                                                                data-kt-initialized="1">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Cancel-->
                                                            <!--begin::Remove-->
                                                            <span
                                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow"
                                                                data-kt-image-input-action="remove"
                                                                data-bs-toggle="tooltip" aria-label="Remove avatar"
                                                                data-kt-initialized="1">
                                                                <i class="bi bi-x fs-2"></i>
                                                            </span>
                                                            <!--end::Remove-->
                                                        </div>
                                                    </div>
                                                </div>




                                            </div>
                                            <div class="form-group row mb-10">


                                            </div>

                                            <div class="form-group row mb-10">
                                                <div class="col-lg-12 mb-3">
                                                    <h3>
                                                        COMPANY INFORMATION
                                                    </h3>
                                                </div>

                                                <div class="col-lg-6 mb-10">
                                                    <label>Entity Name <span class="text-danger">*</span> </label>
                                                    <input type="text" class="form-control" name="entity_name"
                                                        placeholder="Entity Name" value="Isaiah Landry"
                                                        required="">
                                                </div>
                                                <div class="clear-fix"></div>
                                                <div class="col-lg-12 mb-3">
                                                    <h6>
                                                        Address
                                                    </h6>
                                                </div>





                                                <div class="col-lg-6">
                                                    <label>Address <span class="text-danger">*</span> </label>
                                                    <input type="text" class="form-control" name="address"
                                                        value="Ad dolorem anim exce" placeholder="Street Address*"
                                                        required="">
                                                </div>

                                                <div class="col-lg-6">
                                                    <label> Suit / Unit </label>
                                                    <input type="text" class="form-control" name="suit"
                                                        value="" placeholder="Suit / Unit">
                                                </div>
                                            </div>




                                            <div class="form-group row mb-10">
                                                <div class="col-lg-4">
                                                    <label>City <span class="text-danger">*</span> </label>
                                                    <input type="text" class="form-control" name="city"
                                                        value="Non repudiandae null" placeholder="City*"
                                                        required="">
                                                </div>

                                                <div class="col-lg-4">
                                                    <label>State / Region <span class="text-danger">*</span> </label>
                                                    <input type="text" class="form-control" name="state"
                                                        value="Sint id porro obcaec" placeholder="State / Region*"
                                                        required="">
                                                </div>

                                                <div class="col-lg-4">
                                                    <label>Zip / Postal Code <span class="text-danger">*</span> </label>
                                                    <input type="text" class="form-control" name="zip"
                                                        id="zip_code" value="76492" placeholder="Zip / Postal Code*"
                                                        required="">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-10">
                                                <div class="col-lg-6">
                                                    <label>State/Region of Legal Formation <span
                                                            class="text-danger">*</span>
                                                    </label>
                                                    <input type="text" class="form-control" name="legal_formation"
                                                        placeholder="State/Region of Legal Formation*"
                                                        value="Reiciendis dolor nem" required="">
                                                </div>

                                                <div class="col-lg-6">
                                                    <label>Date of Incorporation <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="date" class="form-control"
                                                        name="date_incorporation" placeholder="Date of Incorporation*"
                                                        value="2005-05-07" required="">
                                                </div>
                                            </div>




                                            <div class="row">


                                            </div>

                                            <div class="card-title mt-6 mb-3">
                                                <h2>Identity Verification</h2>
                                            </div>
                                            <div class="row">
                                                <div class="form-group mb-10 col-lg-4">
                                                    <label>
                                                        Primary Contact Social Security # <small>(US Investors Only)</small>
                                                        <span class="text-danger">*</span></label>
                                                    <input type="number" class="form-control"
                                                        placeholder="Primary Contact Social Security" required=""
                                                        name="primary_contact_social_security">
                                                </div>

                                                <div class="form-group mb-10 col-lg-4">
                                                    <label> Tax Entity Type <span class="text-danger">*</span></label>
                                                    <input type="number" class="form-control"
                                                        placeholder="Tax Entity Type" required=""
                                                        name="tax_entity_type">
                                                </div>
                                                <div class="form-group mb-10 col-lg-4">
                                                    <label> Tax Identification # <span class="text-danger">*</span>
                                                    </label>
                                                    <input type="number" class="form-control"
                                                        placeholder="Tax Identification" required=""
                                                        name="tax_identification">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-10">
                                                <div class="col-lg-3">
                                                    <label>Nationality <span class="text-danger">*</span></label>
                                                    <select class="form-select select2-hidden-accessible" required=""
                                                        data-control="select2" name="nationality"
                                                        data-placeholder="Select an option" data-live-search="true"
                                                        data-select2-id="select2-data-1-t67b" tabindex="-1"
                                                        aria-hidden="true" data-kt-initialized="1">
                                                        <option value="">Select</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AX">Åland Islands</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                        <option value="AS">American Samoa</option>
                                                        <option value="AD">Andorra</option>
                                                        <option value="AO">Angola</option>
                                                        <option value="AI">Anguilla</option>
                                                        <option value="AQ">Antarctica</option>
                                                        <option value="AG">Antigua and Barbuda</option>
                                                        <option value="AR">Argentina</option>
                                                        <option value="AM">Armenia</option>
                                                        <option value="AW">Aruba</option>
                                                        <option value="AU">Australia</option>
                                                        <option value="AT">Austria</option>
                                                        <option value="AZ">Azerbaijan</option>
                                                        <option value="BS">Bahamas</option>
                                                        <option value="BH">Bahrain</option>
                                                        <option value="BD">Bangladesh</option>
                                                        <option value="BB">Barbados</option>
                                                        <option value="BY">Belarus</option>
                                                        <option value="BE">Belgium</option>
                                                        <option value="BZ">Belize</option>
                                                        <option value="BJ">Benin</option>
                                                        <option value="BM">Bermuda</option>
                                                        <option value="BT">Bhutan</option>
                                                        <option value="BO">Bolivia, Plurinational State of</option>
                                                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                                        <option value="BA">Bosnia and Herzegovina</option>
                                                        <option value="BW">Botswana</option>
                                                        <option value="BV">Bouvet Island</option>
                                                        <option value="BR">Brazil</option>
                                                        <option value="IO">British Indian Ocean Territory</option>
                                                        <option value="BN">Brunei Darussalam</option>
                                                        <option value="BG">Bulgaria</option>
                                                        <option value="BF">Burkina Faso</option>
                                                        <option value="BI">Burundi</option>
                                                        <option value="KH">Cambodia</option>
                                                        <option value="CM">Cameroon</option>
                                                        <option value="CA">Canada</option>
                                                        <option value="CV">Cape Verde</option>
                                                        <option value="KY">Cayman Islands</option>
                                                        <option value="CF">Central African Republic</option>
                                                        <option value="TD">Chad</option>
                                                        <option value="CL">Chile</option>
                                                        <option value="CN">China</option>
                                                        <option value="CX">Christmas Island</option>
                                                        <option value="CC">Cocos (Keeling) Islands</option>
                                                        <option value="CO">Colombia</option>
                                                        <option value="KM">Comoros</option>
                                                        <option value="CG">Congo</option>
                                                        <option value="CD">Congo, the Democratic Republic of the
                                                        </option>
                                                        <option value="CK">Cook Islands</option>
                                                        <option value="CR">Costa Rica</option>
                                                        <option value="CI">Côte d'Ivoire</option>
                                                        <option value="HR">Croatia</option>
                                                        <option value="CU">Cuba</option>
                                                        <option value="CW">Curaçao</option>
                                                        <option value="CY">Cyprus</option>
                                                        <option value="CZ">Czech Republic</option>
                                                        <option value="DK">Denmark</option>
                                                        <option value="DJ">Djibouti</option>
                                                        <option value="DM">Dominica</option>
                                                        <option value="DO">Dominican Republic</option>
                                                        <option value="EC">Ecuador</option>
                                                        <option value="EG">Egypt</option>
                                                        <option value="SV">El Salvador</option>
                                                        <option value="GQ">Equatorial Guinea</option>
                                                        <option value="ER">Eritrea</option>
                                                        <option value="EE">Estonia</option>
                                                        <option value="ET">Ethiopia</option>
                                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                                        <option value="FO">Faroe Islands</option>
                                                        <option value="FJ">Fiji</option>
                                                        <option value="FI">Finland</option>
                                                        <option value="FR">France</option>
                                                        <option value="GF">French Guiana</option>
                                                        <option value="PF">French Polynesia</option>
                                                        <option value="TF">French Southern Territories</option>
                                                        <option value="GA">Gabon</option>
                                                        <option value="GM">Gambia</option>
                                                        <option value="GE">Georgia</option>
                                                        <option value="DE">Germany</option>
                                                        <option value="GH">Ghana</option>
                                                        <option value="GI">Gibraltar</option>
                                                        <option value="GR">Greece</option>
                                                        <option value="GL">Greenland</option>
                                                        <option value="GD">Grenada</option>
                                                        <option value="GP">Guadeloupe</option>
                                                        <option value="GU">Guam</option>
                                                        <option value="GT">Guatemala</option>
                                                        <option value="GG">Guernsey</option>
                                                        <option value="GN">Guinea</option>
                                                        <option value="GW">Guinea-Bissau</option>
                                                        <option value="GY">Guyana</option>
                                                        <option value="HT">Haiti</option>
                                                        <option value="HM">Heard Island and McDonald Islands
                                                        </option>
                                                        <option value="VA">Holy See (Vatican City State)</option>
                                                        <option value="HN">Honduras</option>
                                                        <option value="HK">Hong Kong</option>
                                                        <option value="HU">Hungary</option>
                                                        <option value="IS">Iceland</option>
                                                        <option value="IN">India</option>
                                                        <option value="ID">Indonesia</option>
                                                        <option value="IR">Iran, Islamic Republic of</option>
                                                        <option value="IQ">Iraq</option>
                                                        <option value="IE">Ireland</option>
                                                        <option value="IM">Isle of Man</option>
                                                        <option value="IL">Israel</option>
                                                        <option value="IT">Italy</option>
                                                        <option value="JM">Jamaica</option>
                                                        <option value="JP">Japan</option>
                                                        <option value="JE">Jersey</option>
                                                        <option value="JO">Jordan</option>
                                                        <option value="KZ">Kazakhstan</option>
                                                        <option value="KE">Kenya</option>
                                                        <option value="KI">Kiribati</option>
                                                        <option value="KP">Korea, Democratic People's Republic of
                                                        </option>
                                                        <option value="KR">Korea, Republic of</option>
                                                        <option value="KW">Kuwait</option>
                                                        <option value="KG">Kyrgyzstan</option>
                                                        <option value="LA">Lao People's Democratic Republic</option>
                                                        <option value="LV">Latvia</option>
                                                        <option value="LB">Lebanon</option>
                                                        <option value="LS">Lesotho</option>
                                                        <option value="LR">Liberia</option>
                                                        <option value="LY">Libya</option>
                                                        <option value="LI">Liechtenstein</option>
                                                        <option value="LT">Lithuania</option>
                                                        <option value="LU">Luxembourg</option>
                                                        <option value="MO">Macao</option>
                                                        <option value="MK">Macedonia, the former Yugoslav Republic
                                                            of
                                                        </option>
                                                        <option value="MG">Madagascar</option>
                                                        <option value="MW">Malawi</option>
                                                        <option value="MY">Malaysia</option>
                                                        <option value="MV">Maldives</option>
                                                        <option value="ML">Mali</option>
                                                        <option value="MT">Malta</option>
                                                        <option value="MH">Marshall Islands</option>
                                                        <option value="MQ">Martinique</option>
                                                        <option value="MR">Mauritania</option>
                                                        <option value="MU">Mauritius</option>
                                                        <option value="YT">Mayotte</option>
                                                        <option value="MX">Mexico</option>
                                                        <option value="FM">Micronesia, Federated States of</option>
                                                        <option value="MD">Moldova, Republic of</option>
                                                        <option value="MC">Monaco</option>
                                                        <option value="MN">Mongolia</option>
                                                        <option value="ME">Montenegro</option>
                                                        <option value="MS">Montserrat</option>
                                                        <option value="MA">Morocco</option>
                                                        <option value="MZ">Mozambique</option>
                                                        <option value="MM">Myanmar</option>
                                                        <option value="NA">Namibia</option>
                                                        <option value="NR">Nauru</option>
                                                        <option value="NP">Nepal</option>
                                                        <option value="NL">Netherlands</option>
                                                        <option value="NC">New Caledonia</option>
                                                        <option value="NZ">New Zealand</option>
                                                        <option value="NI">Nicaragua</option>
                                                        <option value="NE">Niger</option>
                                                        <option value="NG">Nigeria</option>
                                                        <option value="NU">Niue</option>
                                                        <option value="NF">Norfolk Island</option>
                                                        <option value="MP">Northern Mariana Islands</option>
                                                        <option value="NO">Norway</option>
                                                        <option value="OM">Oman</option>
                                                        <option value="PK">Pakistan</option>
                                                        <option value="PW">Palau</option>
                                                        <option value="PS">Palestinian Territory, Occupied</option>
                                                        <option value="PA">Panama</option>
                                                        <option value="PG">Papua New Guinea</option>
                                                        <option value="PY">Paraguay</option>
                                                        <option value="PE">Peru</option>
                                                        <option value="PH">Philippines</option>
                                                        <option value="PN">Pitcairn</option>
                                                        <option value="PL">Poland</option>
                                                        <option value="PT">Portugal</option>
                                                        <option value="PR">Puerto Rico</option>
                                                        <option value="QA">Qatar</option>
                                                        <option value="RE">Réunion</option>
                                                        <option value="RO">Romania</option>
                                                        <option value="RU">Russian Federation</option>
                                                        <option value="RW">Rwanda</option>
                                                        <option value="BL">Saint Barthélemy</option>
                                                        <option value="SH">Saint Helena, Ascension and Tristan da
                                                            Cunha
                                                        </option>
                                                        <option value="KN">Saint Kitts and Nevis</option>
                                                        <option value="LC">Saint Lucia</option>
                                                        <option value="MF">Saint Martin (French part)</option>
                                                        <option value="PM">Saint Pierre and Miquelon</option>
                                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                                        <option value="WS">Samoa</option>
                                                        <option value="SM">San Marino</option>
                                                        <option value="ST">Sao Tome and Principe</option>
                                                        <option value="SA">Saudi Arabia</option>
                                                        <option value="SN">Senegal</option>
                                                        <option value="RS">Serbia</option>
                                                        <option value="SC">Seychelles</option>
                                                        <option value="SL">Sierra Leone</option>
                                                        <option value="SG">Singapore</option>
                                                        <option value="SX">Sint Maarten (Dutch part)</option>
                                                        <option value="SK">Slovakia</option>
                                                        <option value="SI">Slovenia</option>
                                                        <option value="SB">Solomon Islands</option>
                                                        <option value="SO">Somalia</option>
                                                        <option value="ZA">South Africa</option>
                                                        <option value="GS">South Georgia and the South Sandwich
                                                            Islands
                                                        </option>
                                                        <option value="SS">South Sudan</option>
                                                        <option value="ES">Spain</option>
                                                        <option value="LK">Sri Lanka</option>
                                                        <option value="SD">Sudan</option>
                                                        <option value="SR">Suriname</option>
                                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                                        <option value="SZ">Swaziland</option>
                                                        <option value="SE">Sweden</option>
                                                        <option value="CH">Switzerland</option>
                                                        <option value="SY">Syrian Arab Republic</option>
                                                        <option value="TW">Taiwan, Province of China</option>
                                                        <option value="TJ">Tajikistan</option>
                                                        <option value="TZ">Tanzania, United Republic of</option>
                                                        <option value="TH">Thailand</option>
                                                        <option value="TL">Timor-Leste</option>
                                                        <option value="TG">Togo</option>
                                                        <option value="TK">Tokelau</option>
                                                        <option value="TO">Tonga</option>
                                                        <option value="TT">Trinidad and Tobago</option>
                                                        <option value="TN">Tunisia</option>
                                                        <option value="TR">Turkey</option>
                                                        <option value="TM">Turkmenistan</option>
                                                        <option value="TC">Turks and Caicos Islands</option>
                                                        <option value="TV">Tuvalu</option>
                                                        <option value="UG">Uganda</option>
                                                        <option value="UA">Ukraine</option>
                                                        <option value="AE">United Arab Emirates</option>
                                                        <option value="GB">United Kingdom</option>
                                                        <option value="US" selected="selected"
                                                            data-select2-id="select2-data-3-oyit">United States
                                                        </option>
                                                        <option value="UM">United States Minor Outlying Islands
                                                        </option>
                                                        <option value="UY">Uruguay</option>
                                                        <option value="UZ">Uzbekistan</option>
                                                        <option value="VU">Vanuatu</option>
                                                        <option value="VE">Venezuela, Bolivarian Republic of
                                                        </option>
                                                        <option value="VN">Viet Nam</option>
                                                        <option value="VG">Virgin Islands, British</option>
                                                        <option value="VI">Virgin Islands, U.S.</option>
                                                        <option value="WF">Wallis and Futuna</option>
                                                        <option value="EH">Western Sahara</option>
                                                        <option value="YE">Yemen</option>
                                                        <option value="ZM">Zambia</option>
                                                        <option value="ZW">Zimbabwe</option>
                                                    </select><span
                                                        class="select2 select2-container select2-container--bootstrap5"
                                                        dir="ltr" data-select2-id="select2-data-2-imr9"
                                                        style="width: 100%;"><span class="selection"><span
                                                                class="select2-selection select2-selection--single form-select"
                                                                role="combobox" aria-haspopup="true"
                                                                aria-expanded="false" tabindex="0"
                                                                aria-disabled="false"
                                                                aria-labelledby="select2-nationality-wp-container"
                                                                aria-controls="select2-nationality-wp-container"><span
                                                                    class="select2-selection__rendered"
                                                                    id="select2-nationality-wp-container" role="textbox"
                                                                    aria-readonly="true"
                                                                    title="United States
                                                        ">United
                                                                    States
                                                                </span><span class="select2-selection__arrow"
                                                                    role="presentation"><b
                                                                        role="presentation"></b></span></span></span><span
                                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                </div>
                                                <div class="col-lg-3">
                                                    <label>Country of Residence <span class="text-danger">*</span></label>
                                                    <input type="text" class="form-control"
                                                        name="country_residence">
                                                </div>
                                            </div>


                                            <div class="card-title mt-6">
                                                <h2>Trust Setting<i class="fas fa-exclamation-circle ms-2 fs-7"
                                                        data-bs-toggle="tooltip" aria-label="Specify a target priorty"
                                                        data-kt-initialized="1"></i></h2>
                                            </div>
                                            <div class="card-body">

                                                <div class="form-group row">
                                                    <div class="d-flex align-items-center">
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-10">
                                                            <input class="form-check-input h-15px w-15px"
                                                                type="checkbox" name="bypass_account_setup">

                                                            <span class="form-check-label fw-semibold">Bypass Account
                                                                Setup<i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                    data-bs-toggle="tooltip"
                                                                    aria-label="Specify a target priorty"
                                                                    data-kt-initialized="1"></i></span>
                                                        </label>
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-10">
                                                            <input class="form-check-input h-15px w-15px"
                                                                type="checkbox" name="bypass_kyc_checkup">
                                                            <span class="form-check-label fw-semibold">Bypass KYC
                                                                Checks</span>
                                                        </label>
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-10">
                                                            <input class="form-check-input h-15px w-15px"
                                                                type="checkbox" name="bypass_accreditation_checks">
                                                            <span class="form-check-label fw-semibold">Bypass
                                                                Accreditation
                                                                Checks</span>
                                                        </label>
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-10">
                                                            <input class="form-check-input h-15px w-15px"
                                                                type="checkbox" name="bypass_document_restrictions">
                                                            <span class="form-check-label fw-semibold">Bypass Document
                                                                Restrictions</span>
                                                        </label>

                                                    </div>
                                                </div>
                                                <div class="form-group row mt-6">
                                                    <div class="d-flex align-items-center">
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-10">
                                                            <input class="form-check-input h-15px w-15px"
                                                                type="checkbox" name="view_all_invite_offers">
                                                            <span class="form-check-label fw-semibold">View All Invite
                                                                Only
                                                                Offers</span>
                                                        </label>
                                                        <label
                                                            class="form-check form-check-custom form-check-solid me-10">
                                                            <input class="form-check-input h-15px w-15px"
                                                                type="checkbox" name="allow_manual_ach_bank_input">
                                                            <span class="form-check-label fw-semibold">Allow Manual ACH
                                                                Bank
                                                                Input<i class="fas fa-exclamation-circle ms-2 fs-7"
                                                                    data-bs-toggle="tooltip"
                                                                    aria-label="Specify a target priorty"
                                                                    data-kt-initialized="1"></i></span>
                                                        </label>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="card-body">
                                                <div class="form-group row mb-10">
                                                    <div class="col-lg-6">
                                                        <label class="fw-semibold">Bypass Restrictions on Specific
                                                            Documents</label>
                                                        <select class="form-select select2-hidden-accessible"
                                                            data-control="select2" data-placeholder="Select an Offer"
                                                            data-select2-id="select2-data-4-0sos" tabindex="-1"
                                                            aria-hidden="true" data-kt-initialized="1">
                                                            <option data-select2-id="select2-data-6-mdt7"></option>
                                                            <option value="1">Option 1</option>
                                                            <option value="2">Option 2</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--bootstrap5"
                                                            dir="ltr" data-select2-id="select2-data-5-24wx"
                                                            style="width: 100%;"><span class="selection"><span
                                                                    class="select2-selection select2-selection--single form-select"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="0"
                                                                    aria-disabled="false"
                                                                    aria-labelledby="select2-vi58-container"
                                                                    aria-controls="select2-vi58-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-vi58-container" role="textbox"
                                                                        aria-readonly="true"
                                                                        title="Select an Offer"><span
                                                                            class="select2-selection__placeholder">Select
                                                                            an Offer</span></span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label class="hidden"></label>
                                                        <select class="form-select select2-hidden-accessible"
                                                            data-control="select2" data-placeholder="Select a Document"
                                                            data-select2-id="select2-data-7-cpls" tabindex="-1"
                                                            aria-hidden="true" data-kt-initialized="1">
                                                            <option data-select2-id="select2-data-9-7c8r"></option>
                                                            <option value="1">Option 1</option>
                                                            <option value="2">Option 2</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--bootstrap5"
                                                            dir="ltr" data-select2-id="select2-data-8-vjaz"
                                                            style="width: 100%;"><span class="selection"><span
                                                                    class="select2-selection select2-selection--single form-select"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="0"
                                                                    aria-disabled="false"
                                                                    aria-labelledby="select2-o6sb-container"
                                                                    aria-controls="select2-o6sb-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-o6sb-container" role="textbox"
                                                                        aria-readonly="true"
                                                                        title="Select a Document"><span
                                                                            class="select2-selection__placeholder">Select
                                                                            a Document</span></span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-lg-6">
                                                        <label class="fw-semibold">Bypass E-Sign Document
                                                            Restrictions</label>
                                                        <select class="form-select select2-hidden-accessible"
                                                            data-control="select2"
                                                            data-placeholder="Select an E-Sign Template"
                                                            data-select2-id="select2-data-10-8h3y" tabindex="-1"
                                                            aria-hidden="true" data-kt-initialized="1">
                                                            <option data-select2-id="select2-data-12-381g"></option>
                                                            <option value="1">Option 1</option>
                                                            <option value="2">Option 2</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--bootstrap5"
                                                            dir="ltr" data-select2-id="select2-data-11-4jti"
                                                            style="width: 100%;"><span class="selection"><span
                                                                    class="select2-selection select2-selection--single form-select"
                                                                    role="combobox" aria-haspopup="true"
                                                                    aria-expanded="false" tabindex="0"
                                                                    aria-disabled="false"
                                                                    aria-labelledby="select2-9lq6-container"
                                                                    aria-controls="select2-9lq6-container"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-9lq6-container" role="textbox"
                                                                        aria-readonly="true"
                                                                        title="Select an E-Sign Template"><span
                                                                            class="select2-selection__placeholder">Select
                                                                            an E-Sign Template</span></span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 2-->
                            <!--begin::Step 3-->
                            <div data-kt-stepper-element="content">
                                <!--begin::Wrapper-->
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-3 pb-lg-12">
                                        <!--begin::Title-->
                                        <h1 class="fw-bold text-dark">Investment Limits</h1>
                                        <!--end::Title-->
                                        <!--begin::Description-->
                                        <div class="text-muted fw-semibold fs-6">
                                            Have you made any investments in
                                            <a href="#" class="link-primary"> equity crowdfunding (Reg CF) offerings  </a>
                                            on any platform in the past 12 months (including ChainRaise)?

                                        </div>

                                        <label class="mt-5 mb-10 d-flex flex-stack mb-5 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin:Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="currentColor"></path>
                                                                <path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bold fs-6">Yes</span>
                                                   
                                                </span>
                                                <!--end:Info-->
                                            </span>
                                            <!--end:Label-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input investment_limit" type="radio" name="category" value="yes" required>
                                            </span>
                                            <!--end:Input-->
                                        </label>
                                        <label class="mb-10 d-flex flex-stack mb-5 cursor-pointer">
                                            <!--begin:Label-->
                                            <span class="d-flex align-items-center me-2">
                                                <!--begin:Icon-->
                                                <span class="symbol symbol-50px me-6">
                                                    <span class="symbol-label bg-light-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/maps/map004.svg-->
                                                        <span class="svg-icon svg-icon-1 svg-icon-primary">
                                                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path opacity="0.3" d="M18.4 5.59998C21.9 9.09998 21.9 14.8 18.4 18.3C14.9 21.8 9.2 21.8 5.7 18.3L18.4 5.59998Z" fill="currentColor"></path>
                                                                <path d="M12 2C6.5 2 2 6.5 2 12C2 17.5 6.5 22 12 22C17.5 22 22 17.5 22 12C22 6.5 17.5 2 12 2ZM19.9 11H13V8.8999C14.9 8.6999 16.7 8.00005 18.1 6.80005C19.1 8.00005 19.7 9.4 19.9 11ZM11 19.8999C9.7 19.6999 8.39999 19.2 7.39999 18.5C8.49999 17.7 9.7 17.2001 11 17.1001V19.8999ZM5.89999 6.90002C7.39999 8.10002 9.2 8.8 11 9V11.1001H4.10001C4.30001 9.4001 4.89999 8.00002 5.89999 6.90002ZM7.39999 5.5C8.49999 4.7 9.7 4.19998 11 4.09998V7C9.7 6.8 8.39999 6.3 7.39999 5.5ZM13 17.1001C14.3 17.3001 15.6 17.8 16.6 18.5C15.5 19.3 14.3 19.7999 13 19.8999V17.1001ZM13 4.09998C14.3 4.29998 15.6 4.8 16.6 5.5C15.5 6.3 14.3 6.80002 13 6.90002V4.09998ZM4.10001 13H11V15.1001C9.1 15.3001 7.29999 16 5.89999 17.2C4.89999 16 4.30001 14.6 4.10001 13ZM18.1 17.1001C16.6 15.9001 14.8 15.2 13 15V12.8999H19.9C19.7 14.5999 19.1 16.0001 18.1 17.1001Z" fill="currentColor"></path>
                                                            </svg>
                                                        </span>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                </span>
                                                <!--end:Icon-->
                                                <!--begin:Info-->
                                                <span class="d-flex flex-column">
                                                    <span class="fw-bold fs-6">No</span> 
                                                </span>
                                                <!--end:Info-->
                                            </span>
                                            <!--end:Label-->
                                            <!--begin:Input-->
                                            <span class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input investment_limit" type="radio" name="category" value="no" required>
                                            </span>
                                            <!--end:Input-->
                                        </label>
                                        <div class="crowdfunding_wrapper row mb-4 d-none">
                                            <div class="col-lg-12">
                                                <label for=""> Total Amount Invested in Crowdfunding Offerings </label>
                                                <input type="text" class="form-control"name="" id="" placeholder="Total Amount Invested in Crowdfunding Offerings">
                                            </div>
                                        </div>

                                        <div class="annual_income_wrapper row mb-4 d-none">
                                            <div class="col-lg-12 text-center">
                                                <label for="">
                                                     Do you confirm that either your annual income or net worth are greater than US $60,000.00?
                                                </label>
                                                <br> <br>
                                                <input type="radio" name="net_worth" class="net_worth" value="yes"  > Yes, I confirm this is true
                                                &nbsp;&nbsp;&nbsp;  
                                                <input type="radio" name="net_worth" class="net_worth" value="no"  > No, decrease my investment amount 
                                            </div>
                                        </div>
                                        <div class="row mb-4 net_worth_form d-none">
                                            <div class="col-lg-10">
                                                <label for=""> Update Investment Amount </label>
                                                <input type="text" class="form-control"name="" id="" 
                                                value="300">
                                            </div>
                                            <div class="col-lg-2 pt-5">
                                               <button class="btn btn-sm btn-primary"> Update </button>
                                            </div>
                                            <div class="col-lg-12 pt-3 text-warning fw-bold">
                                                After updating, please review the above question again, and if now true, click "Yes, I confirm this is true".
                                            </div>
                                        </div>
                                        <div class="row mb-4 d-none  annual_income_note text-center">
                                            <div class="col-lg-12">
                                               <small>
                                                A person's annual income and net worth may be calculated jointly with that person's spouse; however, when such a joint calculation is used, the aggregate investment of the investor spouses may not exceed the limit that would apply to an individual investor at that income or net worth level.
                                               </small>
                                            </div>
                                        </div>
                                        <!--end::Description-->
                                    </div>
                                    
                                </div>
                                <!--end::Wrapper-->
                            </div>
                            <!--end::Step 3-->
                            <!--begin::Step 5-->
                           
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <!--begin::Heading-->
                                    <div class="pb-3 pb-lg-12">
                                        <!--begin::Title-->
                                        <h1 class="fw-bold text-dark">Connect Bank </h1>
                                        <div class="row mt-3">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-lg-2">
                                                        Image Offer
                                                    </div>
                                                    <div class="col-lg-8">
                                                        Techware Labs <br> Techware Labs <br>
                                                        (Reg CF) Combining cybersecurity and computer maintenance services into the web3 space
                                                        $1M
                                                        <br>
                                                        <strong class="text-success">$1M</strong>

                                                    </div>
                                                    <div class="col-lg-2">
                                                       <strong>
                                                        Transaction Summary
                                                       </strong>
                                                       <b>
                                                        $3,000.00
                                                       </b>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-8">
                                            <div class="col-lg-12 mb-5">
                                                <label class="form-check form-check-custom  me-10">
                                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="bypass_account_setup"> &nbsp;&nbsp;
                                                    <span class="mat-checkbox-label"><span style="display: none;">&nbsp;</span>By checking this box, I, the investor, acknowledge that I have reviewed the Issuer's <a _ngcontent-nlk-c373="" target="_blank" href="https://www.sec.gov/cgi-bin/browse-edgar?CIK=0001927195&amp;owner=exclude">Form C and Disclosure Materials</a>, as well as the <a _ngcontent-nlk-c373="" target="_blank" href="https://chainraise.io/wp-content/uploads/2022/09/NEW-Educational-Materials-ChainRaise-Portal-LLC-9_28_22.docx.pdf">educational materials</a> provided on the Portal, understood the risks that come with investing in issuing companies on the Portal, and acknowledge that my entire investment may be lost and I will be financially and psychologically fine if it is. I understand that the decision whether to consult a professional advisor regarding my investment is my decision and that the Portal does not offer any investment advice or suggestions.</span>
                                                </label> 
                                            </div>


                                            <div class="col-lg-12 mb-5">
                                                <label class="form-check form-check-custom  me-10">
                                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="bypass_account_setup"> &nbsp;&nbsp;
                                                    <span class="mat-checkbox-label"><span style="display: none;">&nbsp;</span>  By checking this box, I, the investor, acknowledge that I understand I can cancel my investment commitment up to 48 hours before the offer's closing deadline. If I have made a commitment within this 48-hour window, I cannot cancel my investment.</span>
                                                </label> 
                                            </div>

                                            <div class="col-lg-12 mb-5">
                                                <label class="form-check form-check-custom  me-10">
                                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="bypass_account_setup"> &nbsp;&nbsp;
                                                    <span class="mat-checkbox-label"><span style="display: none;">&nbsp;</span>  By checking this box, I, the investor, acknowledge that the securities are subject to transfer restrictions and that I have reviewed and understood these transfer restrictions as provided in the Portal's .</span>
                                                </label> 
                                            </div>


                                            <div class="col-lg-12 mb-5">
                                                <label class="form-check form-check-custom  me-10">
                                                    <input class="form-check-input h-20px w-20px" type="checkbox" name="bypass_account_setup"> &nbsp;&nbsp;
                                                    <span class="mat-checkbox-label"><span style="display: none;">&nbsp;</span> By checking this box, I, the investor, acknowledge that I have provided truthful and accurate representations of the documents and information requested by the Portal.</span>
                                                </label> 
                                            </div>
                                        </div>
                                       
                                    </div>
                                    
                                </div>
                            </div>
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <h1 class="fw-bold text-dark mb-10">  Connect Bank  </h1> 
                                    <div class="row row-cols-1 row-cols-md-2 g-5">
                                        <div class="col-lg-12">
                                            <label class="mt-5 mb-10 d-flex flex-stack mb-5 cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <i class="la la-bank fs-1"></i>  
                                                    </span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6">Bank Account</span> 
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:Label-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input connect_bank" type="radio" name="connect_bank" value="bank" required>
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                        </div>
                                        <div class="col-lg-12">
                                            <label class="mb-10 d-flex flex-stack mb-5 cursor-pointer">
                                                <!--begin:Label-->
                                                <span class="d-flex align-items-center me-2">
                                                    <!--begin:Icon-->
                                                    <span class="symbol symbol-50px me-6">
                                                        <i class="la la-globe fs-1"></i>  
                                                    </span>
                                                    <!--end:Icon-->
                                                    <!--begin:Info-->
                                                    <span class="d-flex flex-column">
                                                        <span class="fw-bold fs-6"> Wire Transfer </span> 
                                                    </span>
                                                    <!--end:Info-->
                                                </span>
                                                <!--end:Label-->
                                                <!--begin:Input-->
                                                <span class="form-check form-check-custom form-check-solid">
                                                    <input class="form-check-input connect_bank" type="radio" name="connect_bank" value="wire" required>
                                                </span>
                                                <!--end:Input-->
                                            </label>
                                        </div>
                                    </div>
                                    <div class="row d-none connect_bank_account" >
                                        <div class="col-lg-12 text-center">
                                            <h3>
                                                Connect Bank Account
                                            </h3>
                                            <br>
                                            <button class="btn btn-dark btn-sm"> LINK MY BANK ACCOUNT</button> 
                                            <br> <br>
                                            <small class="text-center">
                                                Please note that we will only accept funds from accounts that match your full name used during identity verification.
                                            </small>
                                        </div>
                                    </div>

                                    <div class="row d-none wire_transfer" >
                                        <div class="col-lg-12 text-left">
                                            <h3>
                                                Wire Instructions
                                            </h3>
                                            <p>
                                                To complete your investment, please wire funds within the next 5 business days to , details below.
                                            </p>
                                            <ul class="text-left">
                                                <li>
                                                    Account Name
                                                </li>
                                                <li>
                                                    Account Number
                                                </li>
                                                <li>
                                                    Routing Number
                                                </li>
                                                <li>
                                                    Bank Information
                                                </li>
                                            </ul>

                                            <p class="text-center">
                                                On the wire, please include the transaction code below
                                            </p>
                                                <div class="row">
                                                    
                                                    <div class="col-lg-12">
                                                        <input type="text" value="LBZIVCV8D6BN3T" class="form-control">
                                                    </div>
                                                     
                                                    
                                                     
                                                </div>
                                            <p class="text-center">
                                                Please note that we will only accept funds from accounts that match your full name used during identity verification.
                                            </p>
                                          
                                           
                                           
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div data-kt-stepper-element="content">
                                <div class="w-100">
                                    <h1 class="fw-bold text-dark mb-10">Sign Subscription Agreement and Token Grant </h1> 
                                    <div class="row row-cols-1 row-cols-md-2 g-5"> 
                                        <div class="col-lg-12 text-center">
                                             <button class="btn btn-sm btn-dark">
                                                Continue E-Signing Document
                                             </button>
                                        </div>
                                    </div>
                                    

                                    
                                </div>
                                
                            </div>

                          
                            <!--end::Step 5-->
                            <!--begin::Actions-->
                            <div class="d-flex flex-stack pt-10">
                                <!--begin::Wrapper-->
                                <div class="me-2">
                                    <button type="button" class="btn btn-lg btn-light-primary me-3" data-kt-stepper-action="previous"> 
                                            Back
                                    </button>
                                </div> 
                                <div>
                                    <button type="button" class="btn btn-lg btn-primary" data-kt-stepper-action="next">
                                        Continue
                                    </button>
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

@endsection
@section('page_js')
    <script>
        $('.investment_limit').click(function(){
            if($(this).val() == 'yes'){
                $('.crowdfunding_wrapper').removeClass('d-none');
                $('.annual_income_wrapper').addClass('d-none');
                $('.annual_income_note').addClass('d-none');
            }else{
                $('.crowdfunding_wrapper').addClass('d-none');
                $('.annual_income_wrapper').removeClass('d-none');
                $('.annual_income_note').removeClass('d-none');
            }
        });
        $('.net_worth').click(function(){
            if($(this).val() == 'no'){
                $('.net_worth_form').removeClass('d-none');
            }else{
                $('.net_worth_form').addClass('d-none');
            }
        });
        $('.connect_bank').click(function(){
           
            if($(this).val() == 'wire'){
                $('.wire_transfer').removeClass('d-none');
                $('.connect_bank_account').addClass('d-none');
            }else if($(this).val() == 'bank'){
                $('.wire_transfer').addClass('d-none');
                $('.connect_bank_account').removeClass('d-none');
            }
        });

        
        
    </script>
@endsection
