<?php include "../layouts/after.php"; ?>
<div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container-xxl">
        <!--begin::Hero card-->
        <div class="card mb-12">
            <!--begin::Hero body-->
            <div class="card-body flex-column p-5">
                <!--begin::Hero content-->
                <div class="d-flex align-items-center h-lg-300px p-5 p-lg-15">
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-column align-items-start justift-content-center flex-equal me-5">
                        <!--begin::Title-->
                        <h1 class="fw-bolder fs-4 fs-lg-1 text-gray-800 mb-5 mb-lg-10">How Can We Help You?</h1>
                        <!--end::Title-->
                        <!--begin::Input group-->
                        <div class="position-relative w-100">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                            <span class="svg-icon svg-icon-2 svg-icon-primary position-absolute top-50 translate-middle ms-8">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                    <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <input type="text" class="form-control fs-4 py-4 ps-14 text-gray-700 placeholder-gray-400 mw-500px" name="search" value="" placeholder="Ask a question">
                        </div>
                        <!--end::Input group-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Wrapper-->
                    <div class="flex-equal d-flex justify-content-center align-items-end ms-5">
                        <!--begin::Illustration-->
                        <img src="assets/media/illustrations/sketchy-1/20.png" alt="" class="mw-100 mh-125px mh-lg-275px mb-lg-n12">
                        <!--end::Illustration-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Hero content-->
                <!--begin::Hero nav-->
                <div class="card-rounded bg-light d-flex flex-stack flex-wrap p-5">
                    <!--begin::Nav-->
                    <ul class="nav flex-wrap border-transparent fw-bolder">
                        <!--begin::Nav item-->
                        <li class="nav-item my-1">
                            <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="../../demo1/dist/apps/support-center/overview.html">Overview</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item my-1">
                            <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase active" href="../../demo1/dist/apps/support-center/tickets/list.html">tickets</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item my-1">
                            <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="../../demo1/dist/apps/support-center/tutorials/list.html">Tutorials</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item my-1">
                            <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="../../demo1/dist/apps/support-center/faq.html">FAQ</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item my-1">
                            <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="../../demo1/dist/apps/support-center/licenses.html">Licenses</a>
                        </li>
                        <!--end::Nav item-->
                        <!--begin::Nav item-->
                        <li class="nav-item my-1">
                            <a class="btn btn-color-gray-600 btn-active-white btn-active-color-primary fw-boldest fs-8 fs-lg-base nav-link px-3 px-lg-8 mx-1 text-uppercase" href="../../demo1/dist/apps/support-center/contact.html">Contact US</a>
                        </li>
                        <!--end::Nav item-->
                    </ul>
                    <!--end::Nav-->
                    <!--begin::Action-->
                    <a href="#" data-bs-toggle="modal" data-bs-target="#kt_modal_new_ticket" class="btn btn-primary fw-bolder fs-8 fs-lg-base">Create Ticket</a>
                    <!--end::Action-->
                </div>
                <!--end::Hero nav-->
            </div>
            <!--end::Hero body-->
        </div>
        <!--end::Hero card-->
        <!--begin::Card-->
        <div class="card">
            <!--begin::Card body-->
            <div class="card-body">
                <!--begin::Layout-->
                <div class="d-flex flex-column flex-xl-row p-7">
                    <!--begin::Content-->
                    <div class="flex-lg-row-fluid me-xl-15 mb-20 mb-xl-0">
                        <!--begin::Tickets-->
                        <div class="mb-0">
                            <!--begin::Search form-->
                            <form method="post" action="#" class="form mb-15">
                                <!--begin::Input wrapper-->
                                <div class="position-relative">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-primary position-absolute top-50 translate-middle ms-9">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="black"></rect>
                                            <path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <input type="text" class="form-control form-control-lg form-control-solid ps-14" name="search" value="" placeholder="Search">
                                </div>
                                <!--end::Input wrapper-->
                            </form>
                            <!--end::Search form-->
                            <!--begin::Heading-->
                            <h1 class="text-dark mb-10">Public Tickets</h1>
                            <!--end::Heading-->
                            <!--begin::Tickets List-->
                            <div class="mb-10">
                                <!--begin::Ticket-->
                                <div class="d-flex mb-10">
                                    <!--begin::Symbol-->
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil008.svg-->
                                    <span class="svg-icon svg-icon-2x me-5 ms-n1 mt-2 svg-icon-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM11.7 17.7L16.7 12.7C17.1 12.3 17.1 11.7 16.7 11.3C16.3 10.9 15.7 10.9 15.3 11.3L11 15.6L8.70001 13.3C8.30001 12.9 7.69999 12.9 7.29999 13.3C6.89999 13.7 6.89999 14.3 7.29999 14.7L10.3 17.7C10.5 17.9 10.8 18 11 18C11.2 18 11.5 17.9 11.7 17.7Z" fill="black"></path>
                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Content-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Title-->
                                            <a href="../../demo1/dist/apps/support-center/tickets/view.html" class="text-dark text-hover-primary fs-4 me-3 fw-bold">How to use Netronic with Django Framework?</a>
                                            <!--end::Title-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light my-1">React</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Text-->
                                        <span class="text-muted fw-bold fs-6">By KeenTHemes to save tons and more to time money projects are listed amazing
                                            <br>outstanding projects are listed</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Ticket-->
                                <!--begin::Ticket-->
                                <div class="d-flex mb-10">
                                    <!--begin::Symbol-->
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
                                    <span class="svg-icon svg-icon-2x me-5 ms-n1 mt-2 svg-icon-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13H13V10C13 9.4 12.6 9 12 9C11.4 9 11 9.4 11 10V13H8C7.4 13 7 13.4 7 14C7 14.6 7.4 15 8 15H11V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18V15H16C16.6 15 17 14.6 17 14C17 13.4 16.6 13 16 13Z" fill="black"></path>
                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Content-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Title-->
                                            <a href="../../demo1/dist/apps/support-center/tickets/view.html" class="text-dark text-hover-primary fs-4 me-3 fw-bold">Keen Admin npm issue</a>
                                            <!--end::Title-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light my-1">Angular</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Text-->
                                        <span class="text-muted fw-bold fs-6">By KeenTHemes to save tons and more to time money projects</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Ticket-->
                                <!--begin::Ticket-->
                                <div class="d-flex mb-10">
                                    <!--begin::Symbol-->
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil008.svg-->
                                    <span class="svg-icon svg-icon-2x me-5 ms-n1 mt-2 svg-icon-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM11.7 17.7L16.7 12.7C17.1 12.3 17.1 11.7 16.7 11.3C16.3 10.9 15.7 10.9 15.3 11.3L11 15.6L8.70001 13.3C8.30001 12.9 7.69999 12.9 7.29999 13.3C6.89999 13.7 6.89999 14.3 7.29999 14.7L10.3 17.7C10.5 17.9 10.8 18 11 18C11.2 18 11.5 17.9 11.7 17.7Z" fill="black"></path>
                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Content-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Title-->
                                            <a href="../../demo1/dist/apps/support-center/tickets/view.html" class="text-dark text-hover-primary fs-4 me-3 fw-bold">Metronic theme authentication to node.js / strapi backend</a>
                                            <!--end::Title-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light my-1">warning</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Text-->
                                        <span class="text-muted fw-bold fs-6">By KeenTHemes to save tons and more to time money projects</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Ticket-->
                                <!--begin::Ticket-->
                                <div class="d-flex mb-10">
                                    <!--begin::Symbol-->
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil008.svg-->
                                    <span class="svg-icon svg-icon-2x me-5 ms-n1 mt-2 svg-icon-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM11.7 17.7L16.7 12.7C17.1 12.3 17.1 11.7 16.7 11.3C16.3 10.9 15.7 10.9 15.3 11.3L11 15.6L8.70001 13.3C8.30001 12.9 7.69999 12.9 7.29999 13.3C6.89999 13.7 6.89999 14.3 7.29999 14.7L10.3 17.7C10.5 17.9 10.8 18 11 18C11.2 18 11.5 17.9 11.7 17.7Z" fill="black"></path>
                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Content-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Title-->
                                            <a href="../../demo1/dist/apps/support-center/tickets/view.html" class="text-dark text-hover-primary fs-4 me-3 fw-bold">How to use Metronic with Django Framework?</a>
                                            <!--end::Title-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light my-1">HTML</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Text-->
                                        <span class="text-muted fw-bold fs-6">By KeenTHemes to save tons and more to time money projects are listed amazing
                                            <br>outstanding projects are listed</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Ticket-->
                                <!--begin::Ticket-->
                                <div class="d-flex mb-10">
                                    <!--begin::Symbol-->
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
                                    <span class="svg-icon svg-icon-2x me-5 ms-n1 mt-2 svg-icon-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13H13V10C13 9.4 12.6 9 12 9C11.4 9 11 9.4 11 10V13H8C7.4 13 7 13.4 7 14C7 14.6 7.4 15 8 15H11V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18V15H16C16.6 15 17 14.6 17 14C17 13.4 16.6 13 16 13Z" fill="black"></path>
                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Content-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Title-->
                                            <a href="../../demo1/dist/apps/support-center/tickets/view.html" class="text-dark text-hover-primary fs-4 me-3 fw-bold">Reducing footprint of Start theme</a>
                                            <!--end::Title-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light my-1">Angular</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Text-->
                                        <span class="text-muted fw-bold fs-6">By KeenTHemes to save tons and more to time money projects</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Ticket-->
                                <!--begin::Ticket-->
                                <div class="d-flex mb-10">
                                    <!--begin::Symbol-->
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil008.svg-->
                                    <span class="svg-icon svg-icon-2x me-5 ms-n1 mt-2 svg-icon-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM11.7 17.7L16.7 12.7C17.1 12.3 17.1 11.7 16.7 11.3C16.3 10.9 15.7 10.9 15.3 11.3L11 15.6L8.70001 13.3C8.30001 12.9 7.69999 12.9 7.29999 13.3C6.89999 13.7 6.89999 14.3 7.29999 14.7L10.3 17.7C10.5 17.9 10.8 18 11 18C11.2 18 11.5 17.9 11.7 17.7Z" fill="black"></path>
                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Content-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Title-->
                                            <a href="../../demo1/dist/apps/support-center/tickets/view.html" class="text-dark text-hover-primary fs-4 me-3 fw-bold">Metronic theme node.js / strapi backend</a>
                                            <!--end::Title-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light my-1">React</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Text-->
                                        <span class="text-muted fw-bold fs-6">By KeenTHemes to save tons and more to time money projects are listed amazing
                                            <br>outstanding projects are listed</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Ticket-->
                                <!--begin::Ticket-->
                                <div class="d-flex mb-10">
                                    <!--begin::Symbol-->
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil005.svg-->
                                    <span class="svg-icon svg-icon-2x me-5 ms-n1 mt-2 svg-icon-warning">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 13H13V10C13 9.4 12.6 9 12 9C11.4 9 11 9.4 11 10V13H8C7.4 13 7 13.4 7 14C7 14.6 7.4 15 8 15H11V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18V15H16C16.6 15 17 14.6 17 14C17 13.4 16.6 13 16 13Z" fill="black"></path>
                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Content-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Title-->
                                            <a href="../../demo1/dist/apps/support-center/tickets/view.html" class="text-dark text-hover-primary fs-4 me-3 fw-bold">Keen Admin npm issue</a>
                                            <!--end::Title-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light my-1">View</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Text-->
                                        <span class="text-muted fw-bold fs-6">By KeenTHemes to save tons and more to time money projects</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Ticket-->
                                <!--begin::Ticket-->
                                <div class="d-flex">
                                    <!--begin::Symbol-->
                                    <!--begin::Svg Icon | path: icons/duotune/files/fil008.svg-->
                                    <span class="svg-icon svg-icon-2x me-5 ms-n1 mt-2 svg-icon-success">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM11.7 17.7L16.7 12.7C17.1 12.3 17.1 11.7 16.7 11.3C16.3 10.9 15.7 10.9 15.3 11.3L11 15.6L8.70001 13.3C8.30001 12.9 7.69999 12.9 7.29999 13.3C6.89999 13.7 6.89999 14.3 7.29999 14.7L10.3 17.7C10.5 17.9 10.8 18 11 18C11.2 18 11.5 17.9 11.7 17.7Z" fill="black"></path>
                                            <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--end::Symbol-->
                                    <!--begin::Section-->
                                    <div class="d-flex flex-column">
                                        <!--begin::Content-->
                                        <div class="d-flex align-items-center mb-2">
                                            <!--begin::Title-->
                                            <a href="../../demo1/dist/apps/support-center/tickets/view.html" class="text-dark text-hover-primary fs-4 me-3 fw-bold">How to use Metronic with Django Framework?</a>
                                            <!--end::Title-->
                                            <!--begin::Label-->
                                            <span class="badge badge-light my-1">PHP</span>
                                            <!--end::Label-->
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Text-->
                                        <span class="text-muted fw-bold fs-6">By KeenTHemes to save tons and more to time money projects are listed amazing
                                            <br>outstanding projects are listed</span>
                                        <!--end::Text-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Ticket-->
                            </div>
                            <!--end::Tickets List-->
                            <!--begin::Pagination-->
                            <ul class="pagination">
                                <li class="page-item previous disabled">
                                    <a href="#" class="page-link">
                                        <i class="previous"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">3</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">4</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">5</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">6</a>
                                </li>
                                <li class="page-item next">
                                    <a href="#" class="page-link">
                                        <i class="next"></i>
                                    </a>
                                </li>
                            </ul>
                            <!--end::Pagination-->
                        </div>
                        <!--end::Tickets-->
                    </div>
                    <!--end::Content-->
                    <!--begin::Sidebar-->
                    <div class="flex-column flex-lg-row-auto w-100 mw-lg-300px mw-xxl-350px">
                        <!--begin::More channels-->
                        <div class="card-rounded bg-primary bg-opacity-5 p-10 mb-15">
                            <!--begin::Title-->
                            <h2 class="text-dark fw-bolder mb-11">More Channels</h2>
                            <!--end::Title-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-10">
                                <!--begin::Icon-->
                                <i class="bi bi-file-earmark-text text-primary fs-1 me-5"></i>
                                <!--end::SymIconbol-->
                                <!--begin::Info-->
                                <div class="d-flex flex-column">
                                    <h5 class="text-gray-800 fw-bolder">Project Briefing</h5>
                                    <!--begin::Section-->
                                    <div class="fw-bold">
                                        <!--begin::Desc-->
                                        <span class="text-muted">Check out our</span>
                                        <!--end::Desc-->
                                        <!--begin::Link-->
                                        <a href="#" class="link-primary">Support Policy</a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-10">
                                <!--begin::Icon-->
                                <i class="bi bi-chat-square-text-fill text-primary fs-1 me-5"></i>
                                <!--end::SymIconbol-->
                                <!--begin::Info-->
                                <div class="d-flex flex-column">
                                    <h5 class="text-gray-800 fw-bolder">More to discuss?</h5>
                                    <!--begin::Section-->
                                    <div class="fw-bold">
                                        <!--begin::Desc-->
                                        <span class="text-muted">Email us to</span>
                                        <!--end::Desc-->
                                        <!--begin::Link-->
                                        <a href="#" class="link-primary">support@keenthemes.com</a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-10">
                                <!--begin::Icon-->
                                <i class="bi bi-twitter text-primary fs-1 me-5"></i>
                                <!--end::SymIconbol-->
                                <!--begin::Info-->
                                <div class="d-flex flex-column">
                                    <h5 class="text-gray-800 fw-bolder">Latest News</h5>
                                    <!--begin::Section-->
                                    <div class="fw-bold">
                                        <!--begin::Desc-->
                                        <span class="text-muted">Follow us at</span>
                                        <!--end::Desc-->
                                        <!--begin::Link-->
                                        <a href="#" class="link-primary">KeenThemes Twitter</a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center">
                                <!--begin::Icon-->
                                <i class="bi bi-github text-primary fs-1 me-5"></i>
                                <!--end::SymIconbol-->
                                <!--begin::Info-->
                                <div class="d-flex flex-column">
                                    <h5 class="text-gray-800 fw-bolder">Github Access</h5>
                                    <!--begin::Section-->
                                    <div class="fw-bold">
                                        <!--begin::Desc-->
                                        <span class="text-muted">Our github repo</span>
                                        <!--end::Desc-->
                                        <!--begin::Link-->
                                        <a href="#" class="link-primary">KeenThemes Github</a>
                                        <!--end::Link-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Info-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::More channels-->
                        <!--begin::Documentations-->
                        <div class="card-rounded bg-primary bg-opacity-5 p-10 mb-15">
                            <!--begin::Title-->
                            <h1 class="fw-bolder text-dark mb-9">Documentation</h1>
                            <!--end::Title-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-6">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                <span class="svg-icon svg-icon-2 ms-n1 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Subtitle-->
                                <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-5 m-0">Angular Admin</a>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-6">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                <span class="svg-icon svg-icon-2 ms-n1 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Subtitle-->
                                <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-5 m-0">React Admin</a>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-6">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                <span class="svg-icon svg-icon-2 ms-n1 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Subtitle-->
                                <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-5 m-0">Vue Dashboard</a>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-6">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                <span class="svg-icon svg-icon-2 ms-n1 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Subtitle-->
                                <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-5 m-0">Niche Theme</a>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-6">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                <span class="svg-icon svg-icon-2 ms-n1 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Subtitle-->
                                <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-5 m-0">Dashboard Admin</a>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-6">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                <span class="svg-icon svg-icon-2 ms-n1 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Subtitle-->
                                <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-5 m-0">Dorsey Front-end</a>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-6">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                <span class="svg-icon svg-icon-2 ms-n1 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Subtitle-->
                                <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-5 m-0">CRM Admin</a>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center mb-6">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                <span class="svg-icon svg-icon-2 ms-n1 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Subtitle-->
                                <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-5 m-0">Admin Dashbaord</a>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <div class="d-flex align-items-center">
                                <!--begin::Icon-->
                                <!--begin::Svg Icon | path: icons/duotune/arrows/arr071.svg-->
                                <span class="svg-icon svg-icon-2 ms-n1 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12.6343 12.5657L8.45001 16.75C8.0358 17.1642 8.0358 17.8358 8.45001 18.25C8.86423 18.6642 9.5358 18.6642 9.95001 18.25L15.4929 12.7071C15.8834 12.3166 15.8834 11.6834 15.4929 11.2929L9.95001 5.75C9.5358 5.33579 8.86423 5.33579 8.45001 5.75C8.0358 6.16421 8.0358 6.83579 8.45001 7.25L12.6343 11.4343C12.9467 11.7467 12.9467 12.2533 12.6343 12.5657Z" fill="black"></path>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--end::Icon-->
                                <!--begin::Subtitle-->
                                <a href="#" class="fw-bold text-gray-800 text-hover-primary fs-5 m-0">Intranet Admin</a>
                                <!--end::Subtitle-->
                            </div>
                            <!--end::Item-->
                        </div>
                        <!--end::Documentations-->
                    </div>
                    <!--end::Sidebar-->
                </div>
                <!--end::Layout-->
            </div>
            <!--end::Card body-->
        </div>
        <!--end::Card-->
        <!--begin::Modal - Support Center - Create Ticket-->
        <div class="modal fade" id="kt_modal_new_ticket" tabindex="-1" aria-hidden="true">
            <!--begin::Modal dialog-->
            <div class="modal-dialog modal-dialog-centered mw-750px">
                <!--begin::Modal content-->
                <div class="modal-content rounded">
                    <!--begin::Modal header-->
                    <div class="modal-header pb-0 border-0 justify-content-end">
                        <!--begin::Close-->
                        <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                            <!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
                            <span class="svg-icon svg-icon-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="black"></rect>
                                    <rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="black"></rect>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                        </div>
                        <!--end::Close-->
                    </div>
                    <!--begin::Modal header-->
                    <!--begin::Modal body-->
                    <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                        <!--begin:Form-->
                        <form id="kt_modal_new_ticket_form" class="form fv-plugins-bootstrap5 fv-plugins-framework" action="#">
                            <!--begin::Heading-->
                            <div class="mb-13 text-center">
                                <!--begin::Title-->
                                <h1 class="mb-3">Create Ticket</h1>
                                <!--end::Title-->
                                <!--begin::Description-->
                                <div class="text-gray-400 fw-bold fs-5">If you need more info, please check
                                    <a href="" class="fw-bolder link-primary">Support Guidelines</a>.
                                </div>
                                <!--end::Description-->
                            </div>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <!--begin::Label-->
                                <label class="d-flex align-items-center fs-6 fw-bold mb-2">
                                    <span class="required">Subject</span>
                                    <i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="" data-bs-original-title="Specify a subject for your issue" aria-label="Specify a subject for your issue"></i>
                                </label>
                                <!--end::Label-->
                                <input type="text" class="form-control form-control-solid" placeholder="Enter your ticket subject" name="subject">
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <label class="required fs-6 fw-bold mb-2">Product</label>
                                    <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select a product" name="product" data-select2-id="select2-data-10-n56o" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="select2-data-12-w8lq">Select a product...</option>
                                        <option value="1">HTML Theme</option>
                                        <option value="1">Angular App</option>
                                        <option value="1">Vue App</option>
                                        <option value="1">React Theme</option>
                                        <option value="1">Figma UI Kit</option>
                                        <option value="3">Laravel App</option>
                                        <option value="4">Blazor App</option>
                                        <option value="5">Django App</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-11-m4v5" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-product-ai-container" aria-controls="select2-product-ai-container"><span class="select2-selection__rendered" id="select2-product-ai-container" role="textbox" aria-readonly="true" title="Select a product"><span class="select2-selection__placeholder">Select a product</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row fv-plugins-icon-container">
                                    <label class="required fs-6 fw-bold mb-2">Assign</label>
                                    <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="user" data-select2-id="select2-data-13-iz6h" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="select2-data-15-t5rr">Select a user...</option>
                                        <option value="1">Karina Clark</option>
                                        <option value="2">Robert Doe</option>
                                        <option value="3">Niel Owen</option>
                                        <option value="4">Olivia Wild</option>
                                        <option value="5">Sean Bean</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-14-y1ag" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-user-96-container" aria-controls="select2-user-96-container"><span class="select2-selection__rendered" id="select2-user-96-container" role="textbox" aria-readonly="true" title="Select a Team Member"><span class="select2-selection__placeholder">Select a Team Member</span></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row g-9 mb-8">
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row">
                                    <label class="required fs-6 fw-bold mb-2">Status</label>
                                    <select class="form-select form-select-solid select2-hidden-accessible" data-control="select2" data-placeholder="Open" data-hide-search="true" data-select2-id="select2-data-16-9164" tabindex="-1" aria-hidden="true">
                                        <option value=""></option>
                                        <option value="1" selected="selected" data-select2-id="select2-data-18-sesv">Open</option>
                                        <option value="2">Pending</option>
                                        <option value="3">Resolved</option>
                                        <option value="3">Closed</option>
                                    </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-17-gfth" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-9vcy-container" aria-controls="select2-9vcy-container"><span class="select2-selection__rendered" id="select2-9vcy-container" role="textbox" aria-readonly="true" title="Open">Open</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-md-6 fv-row fv-plugins-icon-container">
                                    <label class="required fs-6 fw-bold mb-2">Due Date</label>
                                    <!--begin::Input-->
                                    <div class="position-relative d-flex align-items-center">
                                        <!--begin::Icon-->
                                        <div class="symbol symbol-20px me-4 position-absolute ms-4">
                                            <span class="symbol-label bg-secondary">
                                                <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
                                                <span class="svg-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                        <rect x="2" y="2" width="9" height="9" rx="2" fill="black"></rect>
                                                        <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="black"></rect>
                                                        <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="black"></rect>
                                                        <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="black"></rect>
                                                    </svg>
                                                </span>
                                                <!--end::Svg Icon-->
                                            </span>
                                        </div>
                                        <!--end::Icon-->
                                        <!--begin::Datepicker-->
                                        <input class="form-control form-control-solid ps-12 flatpickr-input" placeholder="Select a date" name="due_date" type="text" readonly="readonly">
                                        <!--end::Datepicker-->
                                    </div>
                                    <!--end::Input-->
                                    <div class="fv-plugins-message-container invalid-feedback"></div>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="d-flex flex-column mb-8 fv-row fv-plugins-icon-container">
                                <label class="fs-6 fw-bold mb-2">Description</label>
                                <textarea class="form-control form-control-solid" rows="4" name="description" placeholder="Type your ticket description"></textarea>
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="fv-row mb-8">
                                <label class="fs-6 fw-bold mb-2">Attachments</label>
                                <!--begin::Dropzone-->
                                <div class="dropzone dz-clickable" id="kt_modal_create_ticket_attachments">
                                    <!--begin::Message-->
                                    <div class="dz-message needsclick align-items-center">
                                        <!--begin::Icon-->
                                        <!--begin::Svg Icon | path: icons/duotune/files/fil010.svg-->
                                        <span class="svg-icon svg-icon-3hx svg-icon-primary">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                                <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM16 12.6L12.7 9.3C12.3 8.9 11.7 8.9 11.3 9.3L8 12.6H11V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18V12.6H16Z" fill="black"></path>
                                                <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"></path>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                        <!--end::Icon-->
                                        <!--begin::Info-->
                                        <div class="ms-4">
                                            <h3 class="fs-5 fw-bolder text-gray-900 mb-1">Drop files here or click to upload.</h3>
                                            <span class="fw-bold fs-7 text-gray-400">Upload up to 10 files</span>
                                        </div>
                                        <!--end::Info-->
                                    </div>
                                </div>
                                <!--end::Dropzone-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-15 fv-row fv-plugins-icon-container">
                                <!--begin::Wrapper-->
                                <div class="d-flex flex-stack">
                                    <!--begin::Label-->
                                    <div class="fw-bold me-5">
                                        <label class="fs-6">Notifications</label>
                                        <div class="fs-7 text-gray-400">Allow Notifications by Phone or Email</div>
                                    </div>
                                    <!--end::Label-->
                                    <!--begin::Checkboxes-->
                                    <div class="d-flex align-items-center">
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid me-10">
                                            <input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="email" checked="checked">
                                            <span class="form-check-label fw-bold">Email</span>
                                        </label>
                                        <!--end::Checkbox-->
                                        <!--begin::Checkbox-->
                                        <label class="form-check form-check-custom form-check-solid">
                                            <input class="form-check-input h-20px w-20px" type="checkbox" name="notifications[]" value="phone">
                                            <span class="form-check-label fw-bold">Phone</span>
                                        </label>
                                        <!--end::Checkbox-->
                                    </div>
                                    <!--end::Checkboxes-->
                                </div>
                                <!--end::Wrapper-->
                                <div class="fv-plugins-message-container invalid-feedback"></div>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="text-center">
                                <button type="reset" id="kt_modal_new_ticket_cancel" class="btn btn-light me-3">Cancel</button>
                                <button type="submit" id="kt_modal_new_ticket_submit" class="btn btn-primary">
                                    <span class="indicator-label">Submit</span>
                                    <span class="indicator-progress">Please wait...
                                        <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                            </div>
                            <!--end::Actions-->
                            <div></div>
                        </form>
                        <!--end:Form-->
                    </div>
                    <!--end::Modal body-->
                </div>
                <!--end::Modal content-->
            </div>
            <!--end::Modal dialog-->
        </div>
        <!--end::Modal - Support Center - Create Ticket-->
    </div>
    <!--end::Container-->
</div>
<?php include "../layouts/before.php"; ?>