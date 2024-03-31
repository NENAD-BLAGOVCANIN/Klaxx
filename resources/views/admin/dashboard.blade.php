@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')

    <aside id="aside-main" class="aside-start aside-hide-xs bg-white shadow-sm d-flex flex-column px-2 h-auto">


        <!-- sideba : logo -->
        <div class="py-2 px-3 mb-3 mt-1">
            <a href="index.html">
                <img src="/images/logo/logo_dark.svg" width="110" height="60" alt="...">
            </a>
        </div>

        <div class="aside-wrapper scrollable-vertical scrollable-styled-light align-self-baseline h-100 w-100">

            <nav class="nav-deep nav-deep-sm nav-deep-light">
                <ul class="nav flex-column">

                    <li class="nav-item active">
                        <a class="nav-link" href="index.html">
                            <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-house-fill" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z">
                                </path>
                            </svg>
                            <span>Dashboard</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M3 0h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3z">
                                </path>
                                <path d="M13 3V2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1z"></path>
                            </svg>
                            <span>Pages</span>
                            <span class="group-icon float-end">
                                <i class="fi fi-arrow-end"></i>
                                <i class="fi fi-arrow-down"></i>
                            </span>
                        </a>

                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="group-icon float-end">
                                        <i class="fi fi-arrow-end"></i>
                                        <i class="fi fi-arrow-down"></i>
                                    </span>
                                    Ecommerce
                                </a>
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class="nav-link" href="page-ecommerce-product-list.html">Product
                                            list</a></li>
                                    <li class="nav-item"><a class="nav-link"
                                            href="page-ecommerce-product-reviews.html">Product reviews</a></li>
                                    <li class="nav-item"><a class="nav-link" href="page-ecommerce-order-list.html">Order
                                            list</a></li>
                                    <li class="nav-item"><a class="nav-link" href="page-ecommerce-order-detail.html">Order
                                            detail</a></li>
                                    <li class="nav-item"><a class="nav-link" href="page-ecommerce-invoice.html">Invoice</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="group-icon float-end">
                                        <i class="fi fi-arrow-end"></i>
                                        <i class="fi fi-arrow-down"></i>
                                    </span>
                                    Users
                                </a>
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class="nav-link" href="page-user-customer-list.html">Customer
                                            list</a></li>
                                    <li class="nav-item"><a class="nav-link" href="page-user-customer-add.html">Customer
                                            add</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="group-icon float-end">
                                        <i class="fi fi-arrow-end"></i>
                                        <i class="fi fi-arrow-down"></i>
                                    </span>
                                    Account
                                </a>
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class="nav-link" href="page-account-profile.html">Profile</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="page-account-settings.html">Settings</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="group-icon float-end">
                                        <i class="fi fi-arrow-end"></i>
                                        <i class="fi fi-arrow-down"></i>
                                    </span>
                                    Generic
                                </a>
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class="nav-link" href="page-generic-pricing.html">Pricing</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="page-generic-faq.html">FAQ</a></li>
                                    <li class="nav-item"><a class="nav-link" href="page-generic-contact.html">Contact</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="page-generic-forum.html">Forum</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="group-icon float-end">
                                        <i class="fi fi-arrow-end"></i>
                                        <i class="fi fi-arrow-down"></i>
                                    </span>
                                    Utility
                                </a>
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class="nav-link"
                                            href="page-util-maintenance.html">Maintenance</a></li>
                                    <li class="nav-item"><a class="nav-link" href="page-util-404.html">404 Error</a></li>
                                    <li class="nav-item"><a class="nav-link" href="page-util-500.html">500 Error</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M5.443 1.991a60.17 60.17 0 0 0-2.725.802.454.454 0 0 0-.315.366C1.87 7.056 3.1 9.9 4.567 11.773c.736.94 1.533 1.636 2.197 2.093.333.228.626.394.857.5.116.053.21.089.282.11A.73.73 0 0 0 8 14.5c.007-.001.038-.005.097-.023.072-.022.166-.058.282-.111.23-.106.525-.272.857-.5a10.197 10.197 0 0 0 2.197-2.093C12.9 9.9 14.13 7.056 13.597 3.159a.454.454 0 0 0-.315-.366c-.626-.2-1.682-.526-2.725-.802C9.491 1.71 8.51 1.5 8 1.5c-.51 0-1.49.21-2.557.491zm-.256-.966C6.23.749 7.337.5 8 .5c.662 0 1.77.249 2.813.525a61.09 61.09 0 0 1 2.772.815c.528.168.926.623 1.003 1.184.573 4.197-.756 7.307-2.367 9.365a11.191 11.191 0 0 1-2.418 2.3 6.942 6.942 0 0 1-1.007.586c-.27.124-.558.225-.796.225s-.526-.101-.796-.225a6.908 6.908 0 0 1-1.007-.586 11.192 11.192 0 0 1-2.417-2.3C2.167 10.331.839 7.221 1.412 3.024A1.454 1.454 0 0 1 2.415 1.84a61.11 61.11 0 0 1 2.772-.815z">
                                </path>
                                <path
                                    d="M9.5 6.5a1.5 1.5 0 0 1-1 1.415l.385 1.99a.5.5 0 0 1-.491.595h-.788a.5.5 0 0 1-.49-.595l.384-1.99a1.5 1.5 0 1 1 2-1.415z">
                                </path>
                            </svg>
                            <span>Authentication</span>
                            <span class="group-icon float-end">
                                <i class="fi fi-arrow-end"></i>
                                <i class="fi fi-arrow-down"></i>
                            </span>
                        </a>

                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Sign in</span>
                                    <span class="group-icon float-end">
                                        <i class="fi fi-arrow-end"></i>
                                        <i class="fi fi-arrow-down"></i>
                                    </span>
                                </a>
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class="nav-link" href="auth-signin-basic.html">Basic</a></li>
                                    <li class="nav-item"><a class="nav-link" href="auth-signin-cover.html">Cover</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Sign up</span>
                                    <span class="group-icon float-end">
                                        <i class="fi fi-arrow-end"></i>
                                        <i class="fi fi-arrow-down"></i>
                                    </span>
                                </a>
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class="nav-link" href="auth-signup-basic.html">Basic</a></li>
                                    <li class="nav-item"><a class="nav-link" href="auth-signup-cover.html">Cover</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>Reset password</span>
                                    <span class="group-icon float-end">
                                        <i class="fi fi-arrow-end"></i>
                                        <i class="fi fi-arrow-down"></i>
                                    </span>
                                </a>
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class="nav-link" href="auth-passreset-basic.html">Basic</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="auth-passreset-cover.html">Cover</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span>2-step verification</span>
                                    <span class="group-icon float-end">
                                        <i class="fi fi-arrow-end"></i>
                                        <i class="fi fi-arrow-down"></i>
                                    </span>
                                </a>
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class="nav-link" href="auth-2step-basic.html">Basic</a></li>
                                    <li class="nav-item"><a class="nav-link" href="auth-2step-cover.html">Cover</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-app-indicator" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z">
                                </path>
                                <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                            </svg>
                            <span>Apps</span>
                            <span class="group-icon float-end">
                                <i class="fi fi-arrow-end"></i>
                                <i class="fi fi-arrow-down"></i>
                            </span>
                        </a>

                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    <span class="group-icon float-end">
                                        <i class="fi fi-arrow-end"></i>
                                        <i class="fi fi-arrow-down"></i>
                                    </span>
                                    Projects / Tasks
                                </a>
                                <ul class="nav flex-column">
                                    <li class="nav-item"><a class="nav-link" href="app-projects-list.html">Project
                                            list</a></li>
                                    <li class="nav-item"><a class="nav-link" href="app-projects-task-list.html">Task
                                            list</a></li>
                                    <li class="nav-item"><a class="nav-link" href="app-projects-task-detail.html">Task
                                            detail</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="app-file-manager.html">File manager</a></li>
                            <li class="nav-item"><a class="nav-link" href="app-chat.html">Chat</a></li>
                            <li class="nav-item"><a class="nav-link" href="app-kanban.html">Kanban</a></li>
                        </ul>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M2 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zM0 2a2 2 0 0 1 3.937-.5h8.126A2 2 0 1 1 14.5 3.937v8.126a2 2 0 1 1-2.437 2.437H3.937A2 2 0 1 1 1.5 12.063V3.937A2 2 0 0 1 0 2zm2.5 1.937v8.126c.703.18 1.256.734 1.437 1.437h8.126a2.004 2.004 0 0 1 1.437-1.437V3.937A2.004 2.004 0 0 1 12.063 2.5H3.937A2.004 2.004 0 0 1 2.5 3.937zM14 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zM2 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm12 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z">
                                </path>
                            </svg>
                            <span>Layouts</span>
                            <span class="group-icon float-end">
                                <i class="fi fi-arrow-end"></i>
                                <i class="fi fi-arrow-down"></i>
                            </span>
                        </a>

                        <ul class="nav flex-column">
                            <li class="nav-item"><a class="nav-link" href="layout-dark-header.html">Dark Header</a></li>
                            <li class="nav-item"><a class="nav-link" href="layout-dark-sidebar.html">Dark Sidebar</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="layout-dark-both.html">Dark Both</a></li>
                            <li class="nav-item mt-2"><a class="nav-link" href="layout-sticky-header.html">Sticky
                                    Header</a></li>
                            <li class="nav-item"><a class="nav-link" href="layout-sticky-sidebar.html">Sticky Sidebar</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="layout-sticky-both.html">Sticky Both</a></li>
                        </ul>
                    </li>


                    <li class="nav-title mt-5">
                        <h6 class="mb-0 smaller text-muted text-uppercase">DEV AREA</h6>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../html_frontend/documentation/index.html" target="_blank"
                            rel="noopener">
                            <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-file-earmark-medical" viewBox="0 0 16 16">
                                <path
                                    d="M7.5 5.5a.5.5 0 0 0-1 0v.634l-.549-.317a.5.5 0 1 0-.5.866L6 7l-.549.317a.5.5 0 1 0 .5.866l.549-.317V8.5a.5.5 0 1 0 1 0v-.634l.549.317a.5.5 0 1 0 .5-.866L8 7l.549-.317a.5.5 0 1 0-.5-.866l-.549.317V5.5zm-2 4.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5zm0 2a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1h-5z">
                                </path>
                                <path
                                    d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z">
                                </path>
                            </svg>
                            <span>Documentation</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../html_frontend/documentation/components-alerts.html">
                            <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-collection" viewBox="0 0 16 16">
                                <path
                                    d="M2.5 3.5a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-11zm2-2a.5.5 0 0 1 0-1h7a.5.5 0 0 1 0 1h-7zM0 13a1.5 1.5 0 0 0 1.5 1.5h13A1.5 1.5 0 0 0 16 13V6a1.5 1.5 0 0 0-1.5-1.5h-13A1.5 1.5 0 0 0 0 6v7zm1.5.5A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13z">
                                </path>
                            </svg>
                            <span>Components</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../html_frontend/documentation/icons-bootstrap.html">
                            <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-droplet-half" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M7.21.8C7.69.295 8 0 8 0c.109.363.234.708.371 1.038.812 1.946 2.073 3.35 3.197 4.6C12.878 7.096 14 8.345 14 10a6 6 0 0 1-12 0C2 6.668 5.58 2.517 7.21.8zm.413 1.021A31.25 31.25 0 0 0 5.794 3.99c-.726.95-1.436 2.008-1.96 3.07C3.304 8.133 3 9.138 3 10c0 0 2.5 1.5 5 .5s5-.5 5-.5c0-1.201-.796-2.157-2.181-3.7l-.03-.032C9.75 5.11 8.5 3.72 7.623 1.82z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M4.553 7.776c.82-1.641 1.717-2.753 2.093-3.13l.708.708c-.29.29-1.128 1.311-1.907 2.87l-.894-.448z">
                                </path>
                            </svg>
                            <span>Icons</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../html_frontend/documentation/forms-overview.html">
                            <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-check-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                <path
                                    d="M10.97 4.97a.235.235 0 0 0-.02.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-1.071-1.05z">
                                </path>
                            </svg>
                            <span>Forms</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../html_frontend/documentation/plugins-sow-overview.html">
                            <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-app" viewBox="0 0 16 16">
                                <path
                                    d="M11 2a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3V5a3 3 0 0 1 3-3h6zM5 1a4 4 0 0 0-4 4v6a4 4 0 0 0 4 4h6a4 4 0 0 0 4-4V5a4 4 0 0 0-4-4H5z">
                                </path>
                            </svg>
                            <span>SOW plugins</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../html_frontend/documentation/plugins-vendor-chartjs.html">
                            <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-app-indicator" viewBox="0 0 16 16">
                                <path
                                    d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z">
                                </path>
                                <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                            </svg>
                            <span>Vendor plugins</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="../html_frontend/documentation/changelog.html">
                            <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                class="bi bi-journal-code" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                    d="M8.646 5.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 8 8.646 6.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 8l1.647-1.646a.5.5 0 0 0 0-.708z">
                                </path>
                                <path
                                    d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z">
                                </path>
                                <path
                                    d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z">
                                </path>
                            </svg>
                            <span>Changelog</span>
                        </a>
                    </li>

                </ul>
            </nav>

        </div>
          /sidebar : navigation -->


        <!-- sidebar : footer -->
        <div class="d-flex align-self-baseline w-100 py-3 px-3 border-top border-light small">

            <p class="d-inline-grid gap-auto-3 mb-0">
                <svg class="text-gray-600" width="22px" height="22px" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 512.052 512.052" fill="currentColor">
                    <path
                        d="M208.026,16.026c-114.7,0-208,78.9-208,176c0,39.8,15.7,77.9,44.5,108.9l-39.8,39.8c-4.6,4.6-6,11.5-3.5,17.4c2.5,6,8.3,9.9,14.8,9.9h192c114.7,0,208-78.9,208-176S322.726,16.026,208.026,16.026z">
                    </path>
                    <path opacity="0.5"
                        d="M467.526,428.926c28.8-30.9,44.5-69.1,44.5-108.9c0-49.8-24.6-94.9-64-126.9c-0.9,114.1-108.2,206.9-240,206.9h-89.2c34.5,56.9,104.6,96,185.2,96h192c6.5,0,12.3-3.9,14.8-9.9c2.5-6,1.1-12.9-3.5-17.4L467.526,428.926z">
                    </path>
                    <path fill="#ffffff"
                        d="M304.026,144.026h-192c-8.8,0-16,7.2-16,16s7.2,16,16,16h192c8.8,0,16-7.2,16-16S312.826,144.026,304.026,144.026z">
                    </path>
                    <path fill="#ffffff"
                        d="M240.026,208.026h-128c-8.8,0-16,7.2-16,16s7.2,16,16,16h128c8.8,0,16-7.2,16-16S248.826,208.026,240.026,208.026z">
                    </path>
                </svg>
                <a href="#" class="link-normal text-dashed">Need help?</a>
            </p>

        </div>
        <!-- /sidebar : footer -->


    </aside>
    <!-- /sidebar -->


    <!-- main -->
    <main id="middle" class="flex-fill mx-auto">


        <!-- PAGE TITLE -->
        @include('admin.components.header')


        <!-- Primary -->
        <div class="section rounded mb-3">

            <div class="d-flex align-items-center justify-content-between border-bottom pb-4 my-2">

                <div class="w-100">
                    <h2 class="h5 mb-0">Monthly orders</h2>
                    <small class="small text-muted">Monthly revenue of 2022</small>
                </div>

                <!-- save image -->
                <a href="#" data-chartjs-id="visitsvsorders" data-file-name="visitsvsorders"
                    class="chartjs-save btn btn-sm btn-light text-primary-hover rounded-circle float-end m-0"
                    data-bs-toggle="tooltip" title="Save Chart" aria-label="Save Chart">
                    <i class="fi fi-arrow-download m-0"></i>
                </a>

            </div>

            <div class="row g-4">

                <div class="col-12 col-lg-7 col-xl-9 order-1 order-xl-2">

                    <div class="position-relative h-100" style="min-height:250px; max-height:500px">
                        <canvas id="visitsvsorders" class="chartjs" data-chartjs-dots="false"
                            data-chartjs-legend="false" data-chartjs-grid="true" data-chartjs-tooltip="true"
                            data-chartjs-title="" data-chartjs-xaxes-label="" data-chartjs-yaxes-label=""
                            data-chartjs-line-width="5" data-chartjs-type="line"
                            data-chartjs-labels='["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]'
                            data-chartjs-datasets='[{
                        "label": "Orders",
                        "data": [14, 16, 16, 14, 13, 12, 14, 14, 13, 14, 12, 10],
                        "fill": true,
                        "backgroundColor": "rgba(163, 167, 255, 0.4)"
                      }]'></canvas>

                    </div>

                </div>

                <div class="col-12 col-lg-5 col-xl-3 order-2 order-xl-1">

                    <!-- reveal on hover container -->
                    <div class="position-relative animate-reveal-up-item">

                        <!-- card rating -->
                        <div
                            class="position-relative reveal-item bg-white shadow-lg-hover rounded-xl p-5 p-md-3 py-xl-5 p-4-xs z-index-2">

                            <h6 class="text-muted text-center">MONTHLY REVENUE</h6>

                            <div class="text-center mt-5">

                                <!-- chart -->
                                <div class="h--120 easypie d-inline-block position-relative z-index-1"
                                    data-bar-color="#574fec" data-track-color="#eaeaea" data-scale-color="#cccccc"
                                    data-scale-length="0" data-line-width="10" data-line-cap="round" data-size="120"
                                    data-percent="61">

                                    <div class="absolute-full d-middle pt-0 pb-2">
                                        <div class="flex-none text-center">
                                            <span class="d-block">61%</span>
                                            <small class="d-block text-muted">Conversion</small>
                                        </div>
                                    </div>
                                </div>
                                <!-- /chart -->


                                <p class="text-muted mt-4 mb-2">Sales this month</p>
                                <p class="lead fw-medium mb-0 text-primary">
                                    $<span data-toggle="count" data-count-to="2144.55"
                                        data-count-duration="2500">0</span>
                                </p>

                                <!-- 2 cols -->
                                <div class="d-flex mt-4 fs--15">
                                    <div class="flex-fill"><!-- col 1 -->
                                        <p class="text-gray-500 m-0">last month</p>
                                        <p class="text-gray-600 m-0 fw-medium">$12978.51</p>
                                    </div>

                                    <div class="flex-fill"><!-- col 2 -->
                                        <p class="text-gray-500 m-0">last 3 months</p>
                                        <p class="text-gray-600 m-0 fw-medium">$4122.11</p>
                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- /card rating -->

                        <!-- link under -->
                        <div class="fs--16 position-absolute left-0 right-0 bottom-0 z-index-1 pt-3 px-2">

                            <div class="clearfix bg-light p-1 row-pill">
                                <a href="#!"
                                    class="btn btn-pill btn-sm btn-success py-1 mb-0 float-start transition-hover-end"
                                    title="Detailed Revenue" aria-label="Detailed Revenue">View</a>
                                <span class="d-block pt-1 pl-2 pr-2 text-muted text-truncate">
                                    more
                                </span>
                            </div>

                        </div>

                    </div>
                    <!-- /reveal on hover container -->

                </div>

            </div>

        </div>
        <!-- /Primary -->


        <!-- widgets -->
        <div class="row g-3 mb-3">

            <div class="col-12 col-md-6 col-xl-3">

                <!-- small graph widget -->
                <div class="bg-white shadow-md text-dark p-5 rounded text-center">

                    <!-- icon -->
                    <span
                        class="d-inline-flex align-items-center justify-content-center bg-light text-gray-900 rounded-circle"
                        style="width: 100px;height:100px">
                        <svg width="54px" height="54px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                <path fill="currentColor" opacity="0.3" fill-rule="nonzero"
                                    d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z">
                                </path>
                                <path fill="currentColor" fill-rule="nonzero"
                                    d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z">
                                </path>
                            </g>
                        </svg>
                    </span>

                    <h3 class="fs-5 mt-4">New Customers</h3>
                    <p>Last 30 days</p>

                    <!-- chart -->
                    <div class="position-relative" style="height:100px">
                        <canvas class="chartjs" data-chartjs-dots="false" data-chartjs-legend="false"
                            data-chartjs-grid="false" data-chartjs-tooltip="true" data-chartjs-line-width="3"
                            data-chartjs-type="line"
                            data-chartjs-labels='["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]'
                            data-chartjs-datasets='[{                                                           
                            "label": "Customers",
                            "data": [11, 11, 17, 11, 15, 12, 13, 12, 11, 12, 7, 8],
                            "fill": false,
                            "backgroundColor": "rgba(255, 99, 132, 1)"
                        }]'></canvas>
                    </div>

                </div>
                <!-- /small graph widget -->

            </div>

            <div class="col-12 col-xl-6">

                <div class="portlet">

                    <div class="portlet-header">

                        <!-- dropdown options -->
                        <div class="float-end dropdown">
                            <button type="button" class="dropdown-toggle btn btn-sm btn-light px-2 py-1 mt-n1"
                                id="dropdownGraph1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                aria-label="options">
                                <span>
                                    <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                        <path
                                            d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                        </path>
                                    </svg>
                                </span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-clean" aria-labelledby="dropdownGraph1">
                                <div class="dropdown-header smaller px-4 text-muted fw-medium">Export options</div>
                                <a href="#" class="dropdown-item">Export CSV</a>
                                <a href="#" class="dropdown-item">Export XLS</a>
                                <a href="#" class="dropdown-item">Export PDF</a>
                                <a href="#" class="dropdown-item">Print</a>
                            </div>
                        </div>
                        <!-- /dropdown options -->

                        <div class="text-muted text-truncate fw-medium">
                            Monthly Conversions
                        </div>

                    </div>

                    <div class="position-relative h-100" style="min-height:250px">
                        <canvas class="chartjs" data-chartjs-dots="false" data-chartjs-legend="false"
                            data-chartjs-grid="true" data-chartjs-tooltip="true" data-chartjs-line-width="3"
                            data-chartjs-type="line"
                            data-chartjs-labels='["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]'
                            data-chartjs-datasets='[{                                                           
                        "label": "Orders",
                        "data": [11, 11, 17, 11, 15, 12, 13, 16, 11, 18, 20, 21],
                        "fill": true,
                        "backgroundColor": "rgba(201, 203, 207, 0.3)",
                        "borderColor": "rgba(255, 99, 132, 1)",
                        "borderWidth": 1
                      }]'></canvas>
                    </div>

                </div>

            </div>

            <div class="col-12 col-md-6 col-xl-3">

                <!-- small graph widget -->
                <div class="bg-white shadow-md text-dark p-5 rounded text-center">

                    <!-- icon -->
                    <span
                        class="d-inline-flex align-items-center justify-content-center bg-light text-gray-900 rounded-circle"
                        style="width: 100px;height:100px">
                        <svg width="54px" height="54px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"></rect>
                                <path fill="currentColor" opacity="0.3" fill-rule="nonzero"
                                    d="M12,4.56204994 L7.76822128,9.6401844 C7.4146572,10.0644613 6.7840925,10.1217854 6.3598156,9.76822128 C5.9355387,9.4146572 5.87821464,8.7840925 6.23177872,8.3598156 L11.2317787,2.3598156 C11.6315738,1.88006147 12.3684262,1.88006147 12.7682213,2.3598156 L17.7682213,8.3598156 C18.1217854,8.7840925 18.0644613,9.4146572 17.6401844,9.76822128 C17.2159075,10.1217854 16.5853428,10.0644613 16.2317787,9.6401844 L12,4.56204994 Z">
                                </path>
                                <path fill="currentColor"
                                    d="M3.28077641,9 L20.7192236,9 C21.2715083,9 21.7192236,9.44771525 21.7192236,10 C21.7192236,10.0817618 21.7091962,10.163215 21.6893661,10.2425356 L19.5680983,18.7276069 C19.234223,20.0631079 18.0342737,21 16.6576708,21 L7.34232922,21 C5.96572629,21 4.76577697,20.0631079 4.43190172,18.7276069 L2.31063391,10.2425356 C2.17668518,9.70674072 2.50244587,9.16380623 3.03824078,9.0298575 C3.11756139,9.01002735 3.1990146,9 3.28077641,9 Z M12,12 C11.4477153,12 11,12.4477153 11,13 L11,17 C11,17.5522847 11.4477153,18 12,18 C12.5522847,18 13,17.5522847 13,17 L13,13 C13,12.4477153 12.5522847,12 12,12 Z M6.96472382,12.1362967 C6.43125772,12.2792385 6.11467523,12.8275755 6.25761704,13.3610416 L7.29289322,17.2247449 C7.43583503,17.758211 7.98417199,18.0747935 8.51763809,17.9318517 C9.05110419,17.7889098 9.36768668,17.2405729 9.22474487,16.7071068 L8.18946869,12.8434035 C8.04652688,12.3099374 7.49818992,11.9933549 6.96472382,12.1362967 Z M17.0352762,12.1362967 C16.5018101,11.9933549 15.9534731,12.3099374 15.8105313,12.8434035 L14.7752551,16.7071068 C14.6323133,17.2405729 14.9488958,17.7889098 15.4823619,17.9318517 C16.015828,18.0747935 16.564165,17.758211 16.7071068,17.2247449 L17.742383,13.3610416 C17.8853248,12.8275755 17.5687423,12.2792385 17.0352762,12.1362967 Z">
                                </path>
                            </g>
                        </svg>
                    </span>

                    <h3 class="fs-5 mt-4">Monthly Orders</h3>
                    <p>Last 30 days</p>

                    <!-- chart -->
                    <div class="position-relative" style="height:100px">
                        <canvas class="chartjs" data-chartjs-dots="false" data-chartjs-legend="false"
                            data-chartjs-grid="false" data-chartjs-tooltip="true" data-chartjs-line-width="3"
                            data-chartjs-type="line"
                            data-chartjs-labels='["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]'
                            data-chartjs-datasets='[{                                                           
                          "label": "Orders",
                          "data": [11, 11, 17, 11, 15, 12, 13, 16, 11, 18, 20, 21],
                          "fill": false,
                          "backgroundColor": "rgba(153, 102, 255, 1)"
                      }]'></canvas>
                    </div>

                </div>
                <!-- /small graph widget -->

            </div>

        </div>
        <!-- /widgets -->


        <!-- widgets -->
        <div class="row g-3">

            <!-- tasks -->
            <div class="col-12 col-xl-4">

                <div class="portlet">

                    <div class="portlet-header">

                        <ul class="nav nav-sm nav-invert rounded-pill float-end " id="tabUserList">
                            <li class="nav-item">
                                <a class="nav-link py-1 px-2 active" id="usertab-1" data-bs-toggle="tab"
                                    href="#usertab_1">
                                    Today
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link py-1 px-2" id="usertab-2" data-bs-toggle="tab" href="#usertab_2">
                                    Month
                                </a>
                            </li>
                        </ul>

                        <span class="d-block text-muted text-truncate fw-medium">
                            Tasks
                        </span>

                    </div>

                    <div id="tabUserListContent" class="portlet-body max-h-500 tab-content">

                        <!-- tab 1 -->
                        <div class="h-100 tab-pane show active" id="usertab_1">

                            <!--
                            PLEASE PAY ATTENTION TO FORM ID : REQUIRED ,
                            MUST BE UNIQUE AND SPECIFIED TO EACH BUTTON/LINK IN "selected items" AS ATTRIBUTE
                              
                              data-js-form-advanced-form-id="#FORM_TASK_LIST_TODAY"
                          -->
                            <form novalidate="" id="FORM_TASK_LIST_TODAY" method="post"
                                action="../html_frontend/php/demo.ajax_request.php"
                                class="bs-validate h-100 d-flex align-items-stretch justify-content-lg-between align-items-start flex-column">

                                <!--
      
                              IMPORTANT
                              The "action" hidden input is updated by "selected items" action
                                data-js-form-advanced-hidden-action-id="..."
                                data-js-form-advanced-hidden-action-value="..."
      
                              PHP example of data backed processing:
      
                                if($_POST['action'] === 'delete') {
      
                                  foreach($_POST['item_id'] as $item_id) {
                                    // ... delete $item_id from database
                                  }
      
                                }
      
                            -->
                                <input type="hidden" id="action_today" name="action"
                                    value=""><!-- value populated by js -->

                                <!-- task list -->
                                <div id="task_list_today"
                                    class="max-h-500 scrollable-vertical scrollable-styled-dark align-self-baseline h-100 w-100"
                                    style="max-height:500px">


                                    <!-- item -->
                                    <div class="border-bottom">
                                        <div class="d-flex align-items-center p-3 border-start border-danger border-3">

                                            <div class="form-check flex-fill">
                                                <input class="form-check-input" id="task-1" type="checkbox"
                                                    name="item_id[]" value="1">
                                                <label class="form-check-label" for="task-1">
                                                    Retest Smarty and make a list of all bugs
                                                </label>
                                            </div>

                                            <div class="flex-none ms-2 small text-muted text-end">
                                                30 min. ago
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /item -->


                                    <!-- item -->
                                    <div class="border-bottom">
                                        <div class="d-flex align-items-center p-3 border-start border-warning border-3">

                                            <div class="form-check flex-fill">
                                                <input class="form-check-input" id="task-2" type="checkbox"
                                                    name="item_id[]" value="2">
                                                <label class="form-check-label" for="task-2">
                                                    Check the documentation
                                                </label>
                                            </div>

                                            <div class="flex-none ms-2 small text-muted text-end">
                                                2 days ago
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /item -->


                                    <!-- item -->
                                    <div class="border-bottom">
                                        <div class="d-flex align-items-center p-3 border-start border-info border-3">

                                            <div class="form-check flex-fill">
                                                <input class="form-check-input" id="task-3" type="checkbox"
                                                    name="item_id[]" value="3">
                                                <label class="form-check-label" for="task-3">
                                                    Server gzip compression is failing
                                                </label>
                                            </div>

                                            <div class="flex-none ms-2 small text-muted text-end">
                                                2 days ago
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /item -->


                                    <!-- item -->
                                    <div class="border-bottom">
                                        <div class="d-flex align-items-center p-3 border-start border-success border-3">

                                            <div class="form-check flex-fill">
                                                <input class="form-check-input" id="task-4" type="checkbox"
                                                    name="item_id[]" value="4">
                                                <label class="form-check-label" for="task-4">
                                                    New niche layout is required
                                                </label>
                                            </div>

                                            <div class="flex-none ms-2 small text-muted text-end">
                                                4 days ago
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /item -->


                                    <!-- item -->
                                    <div class="border-bottom">
                                        <div class="d-flex align-items-center p-3 border-start border-primary border-3">

                                            <div class="form-check flex-fill">
                                                <input class="form-check-input" id="task-5" type="checkbox"
                                                    name="item_id[]" value="5">
                                                <label class="form-check-label" for="task-5">
                                                    Fix server headers
                                                </label>
                                            </div>

                                            <div class="flex-none ms-2 small text-muted text-end">
                                                6 days ago
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /item -->


                                    <!-- item -->
                                    <div class="border-bottom">
                                        <div class="d-flex align-items-center p-3 border-start border-dark border-3">

                                            <div class="form-check flex-fill">
                                                <input class="form-check-input" id="task-6" type="checkbox"
                                                    name="item_id[]" value="6">
                                                <label class="form-check-label" for="task-6">
                                                    Check customer new data
                                                </label>
                                            </div>

                                            <div class="flex-none ms-2 small text-muted text-end">
                                                6 weeks ago
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /item -->


                                    <!-- item -->
                                    <div class="border-bottom">
                                        <div class="d-flex align-items-center p-3 border-start border-light border-3">

                                            <div class="form-check flex-fill">
                                                <input class="form-check-input" id="task-7" type="checkbox"
                                                    name="item_id[]" value="7">
                                                <label class="form-check-label" for="task-7">
                                                    Check server production logs
                                                </label>
                                            </div>

                                            <div class="flex-none ms-2 small text-muted text-end">
                                                1 month ago
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /item -->


                                </div>
                                <!-- /task list -->


                                <div class="mt-3">

                                    <!-- SELECTED ITEMS -->
                                    <div class="d-flex align-self-baseline w-100">
                                        <!-- using .dropdown, autowidth not working -->

                                        <a href="#" class="btn btn-sm border-0 shadow-none link-muted"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"
                                            aria-haspopup="true">
                                            <span class="group-icon">
                                                <!-- dots --><svg width="18px" height="18px"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                    <path
                                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                    </path>
                                                </svg>
                                                <!-- close --><svg width="18px" height="18px"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <line x1="18" y1="6" x2="6" y2="18">
                                                    </line>
                                                    <line x1="6" y1="6" x2="18" y2="18">
                                                    </line>
                                                </svg>
                                            </span>
                                            <span>Selected Items</span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-clean max-w-250">

                                            <!--
                                    buttons attributes : documentation/components-tables.html
                                  -->
                                            <div class="scrollable-vertical max-vh-50">

                                                <a href="#"
                                                    class="dropdown-item text-truncate js-form-advanced-bulk"
                                                    data-js-form-advanced-bulk-hidden-action-id="#action_today"
                                                    data-js-form-advanced-bulk-hidden-action-value="mark_solved"
                                                    data-js-form-advanced-bulk-container-items="#task_list_today"
                                                    data-js-form-advanced-bulk-required-selected="true"
                                                    data-js-form-advanced-bulk-required-txt-error="No Items Selected!"
                                                    data-js-form-advanced-bulk-required-txt-position="top-center"
                                                    data-js-form-advanced-bulk-required-custom-modal=""
                                                    data-js-form-advanced-bulk-required-custom-modal-content-ajax=""
                                                    data-js-form-advanced-bulk-required-modal-type="success"
                                                    data-js-form-advanced-bulk-required-modal-size="modal-md"
                                                    data-js-form-advanced-bulk-required-modal-txt-title="Please Confirm"
                                                    data-js-form-advanced-bulk-required-modal-txt-subtitle="Selected Items: "
                                                    data-js-form-advanced-bulk-required-modal-txt-body-txt="Set unsolved  selected items?"
                                                    data-js-form-advanced-bulk-required-modal-txt-body-info=""
                                                    data-js-form-advanced-bulk-required-modal-btn-text-yes="Confirm"
                                                    data-js-form-advanced-bulk-required-modal-btn-text-no="Cancel"
                                                    data-js-form-advanced-bulk-submit-without-confirmation="false"
                                                    data-js-form-advanced-form-id="#FORM_TASK_LIST_TODAY">
                                                    <i class="fi fi-check"></i>
                                                    Set : Solved
                                                </a>
                                                <a href="#"
                                                    class="dropdown-item text-truncate js-form-advanced-bulk"
                                                    data-js-form-advanced-bulk-hidden-action-id="#action_today"
                                                    data-js-form-advanced-bulk-hidden-action-value="mark_unsolved"
                                                    data-js-form-advanced-bulk-container-items="#task_list_today"
                                                    data-js-form-advanced-bulk-required-selected="true"
                                                    data-js-form-advanced-bulk-required-txt-error="No Items Selected!"
                                                    data-js-form-advanced-bulk-required-txt-position="top-center"
                                                    data-js-form-advanced-bulk-required-custom-modal=""
                                                    data-js-form-advanced-bulk-required-custom-modal-content-ajax=""
                                                    data-js-form-advanced-bulk-required-modal-type="warning"
                                                    data-js-form-advanced-bulk-required-modal-size="modal-md"
                                                    data-js-form-advanced-bulk-required-modal-txt-title="Please Confirm"
                                                    data-js-form-advanced-bulk-required-modal-txt-subtitle="Selected Items: "
                                                    data-js-form-advanced-bulk-required-modal-txt-body-txt="Set unsolved  selected items?"
                                                    data-js-form-advanced-bulk-required-modal-txt-body-info=""
                                                    data-js-form-advanced-bulk-required-modal-btn-text-yes="Confirm"
                                                    data-js-form-advanced-bulk-required-modal-btn-text-no="Cancel"
                                                    data-js-form-advanced-bulk-submit-without-confirmation="false"
                                                    data-js-form-advanced-form-id="#FORM_TASK_LIST_TODAY">
                                                    <i class="fi fi-close"></i>
                                                    Set : Unsolved
                                                </a>

                                                <a href="#"
                                                    class="dropdown-item text-truncate js-form-advanced-bulk"
                                                    data-js-form-advanced-bulk-hidden-action-id="#action_today"
                                                    data-js-form-advanced-bulk-hidden-action-value="delete"
                                                    data-js-form-advanced-bulk-container-items="#task_list_today"
                                                    data-js-form-advanced-bulk-required-selected="true"
                                                    data-js-form-advanced-bulk-required-txt-error="No Items Selected!"
                                                    data-js-form-advanced-bulk-required-txt-position="top-center"
                                                    data-js-form-advanced-bulk-required-custom-modal=""
                                                    data-js-form-advanced-bulk-required-custom-modal-content-ajax=""
                                                    data-js-form-advanced-bulk-required-modal-type="danger"
                                                    data-js-form-advanced-bulk-required-modal-size="modal-md"
                                                    data-js-form-advanced-bulk-required-modal-txt-title="Please Confirm"
                                                    data-js-form-advanced-bulk-required-modal-txt-subtitle="Selected Items: "
                                                    data-js-form-advanced-bulk-required-modal-txt-body-txt="Are you sure? Delete  selected items?"
                                                    data-js-form-advanced-bulk-required-modal-txt-body-info="Please note: this is a permanent action!"
                                                    data-js-form-advanced-bulk-required-modal-btn-text-yes="Yes, Delete"
                                                    data-js-form-advanced-bulk-required-modal-btn-text-no="Cancel"
                                                    data-js-form-advanced-bulk-submit-without-confirmation="false"
                                                    data-js-form-advanced-form-id="#FORM_TASK_LIST_TODAY">
                                                    <i class="fi fi-thrash text-danger"></i>
                                                    Set : Deleted
                                                </a>

                                            </div>

                                        </div>

                                    </div>
                                    <!-- /SELECTED ITEMS -->

                                </div>

                            </form>

                        </div>

                        <!-- tab 2 -->
                        <div class="h-100 tab-pane" id="usertab_2">

                            <!--
                            PLEASE PAY ATTENTION TO FORM ID : REQUIRED ,
                            MUST BE UNIQUE AND SPECIFIED TO EACH BUTTON/LINK IN "selected items" AS ATTRIBUTE
                            
                              data-js-form-advanced-form-id="#FORM_TASK_LIST_MONTH"
                          -->
                            <form novalidate="" id="FORM_TASK_LIST_MONTH" method="post"
                                action="../html_frontend/php/demo.ajax_request.php"
                                class="bs-validate h-100 d-flex align-items-stretch justify-content-lg-between align-items-start flex-column">

                                <!--
      
                              IMPORTANT
                              The "action" hidden input is updated by "selected items" action
                                data-js-form-advanced-hidden-action-id="..."
                                data-js-form-advanced-hidden-action-value="..."
      
                              PHP example of data backed processing:
      
                                if($_POST['action'] === 'delete') {
      
                                  foreach($_POST['item_id'] as $item_id) {
                                    // ... delete $item_id from database
                                  }
      
                                }
      
                            -->
                                <input type="hidden" id="action_month" name="action"
                                    value=""><!-- value populated by js -->

                                <!-- task list -->
                                <div id="task_list_month"
                                    class="max-h-500 scrollable-vertical scrollable-styled-dark align-self-baseline h-100 max-h-500 w-100">


                                    <!-- item -->
                                    <div class="border-bottom">
                                        <div class="d-flex align-items-center p-3 border-start border-primary border-3">

                                            <div class="form-check flex-fill">
                                                <input class="form-check-input" id="task-20" type="checkbox"
                                                    name="item_id[]" value="20">
                                                <label class="form-check-label" for="task-20">
                                                    Fix server headers
                                                </label>
                                            </div>

                                            <div class="flex-none ms-2 small text-muted text-end">
                                                6 days ago
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /item -->


                                    <!-- item -->
                                    <div class="border-bottom">
                                        <div class="d-flex align-items-center p-3 border-start border-dark border-3">

                                            <div class="form-check flex-fill">
                                                <input class="form-check-input" id="task-21" type="checkbox"
                                                    name="item_id[]" value="21">
                                                <label class="form-check-label" for="task-21">
                                                    Check customer new data
                                                </label>
                                            </div>

                                            <div class="flex-none ms-2 small text-muted text-end">
                                                6 weeks ago
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /item -->


                                    <!-- item -->
                                    <div class="border-bottom">
                                        <div class="d-flex align-items-center p-3 border-start border-danger border-3">

                                            <div class="form-check flex-fill">
                                                <input class="form-check-input" id="task-22" type="checkbox"
                                                    name="item_id[]" value="22">
                                                <label class="form-check-label" for="task-22">
                                                    Retest Smarty and make a list of all bugs
                                                </label>
                                            </div>

                                            <div class="flex-none ms-2 small text-muted text-end">
                                                30 min. ago
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /item -->


                                    <!-- item -->
                                    <div class="border-bottom">
                                        <div class="d-flex align-items-center p-3 border-start border-warning border-3">

                                            <div class="form-check flex-fill">
                                                <input class="form-check-input" id="task-23" type="checkbox"
                                                    name="item_id[]" value="23">
                                                <label class="form-check-label" for="task-23">
                                                    Check the documentation
                                                </label>
                                            </div>

                                            <div class="flex-none ms-2 small text-muted text-end">
                                                2 days ago
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /item -->


                                    <!-- item -->
                                    <div class="border-bottom">
                                        <div class="d-flex align-items-center p-3 border-start border-info border-3">

                                            <div class="form-check flex-fill">
                                                <input class="form-check-input" id="task-24" type="checkbox"
                                                    name="item_id[]" value="24">
                                                <label class="form-check-label" for="task-24">
                                                    Server gzip compression is failing
                                                </label>
                                            </div>

                                            <div class="flex-none ms-2 small text-muted text-end">
                                                2 days ago
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /item -->


                                    <!-- item -->
                                    <div class="border-bottom">
                                        <div class="d-flex align-items-center p-3 border-start border-success border-3">

                                            <div class="form-check flex-fill">
                                                <input class="form-check-input" id="task-25" type="checkbox"
                                                    name="item_id[]" value="25">
                                                <label class="form-check-label" for="task-25">
                                                    New niche layout is required
                                                </label>
                                            </div>

                                            <div class="flex-none ms-2 small text-muted text-end">
                                                4 days ago
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /item -->


                                    <!-- item -->
                                    <div class="border-bottom">
                                        <div class="d-flex align-items-center p-3 border-start border-light border-3">

                                            <div class="form-check flex-fill">
                                                <input class="form-check-input" id="task-26" type="checkbox"
                                                    name="item_id[]" value="26">
                                                <label class="form-check-label" for="task-26">
                                                    Check server production logs
                                                </label>
                                            </div>

                                            <div class="flex-none ms-2 small text-muted text-end">
                                                1 month ago
                                            </div>

                                        </div>
                                    </div>
                                    <!-- /item -->

                                </div>
                                <!-- /task list -->


                                <div class="mt-3">

                                    <!-- SELECTED ITEMS -->
                                    <div class="d-flex align-self-baseline w-100">
                                        <!-- using .dropdown, autowidth not working -->

                                        <a href="#" class="btn btn-sm text-muted border-0 fs-6 shadow-none"
                                            data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false"
                                            aria-haspopup="true">
                                            <span class="group-icon">
                                                <!-- dots --><svg width="18px" height="18px"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                    class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                                    <path
                                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                    </path>
                                                </svg>
                                                <!-- close --><svg width="18px" height="18px"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                    stroke-linejoin="round">
                                                    <line x1="18" y1="6" x2="6" y2="18">
                                                    </line>
                                                    <line x1="6" y1="6" x2="18" y2="18">
                                                    </line>
                                                </svg>
                                            </span>
                                            <span>Selected Items</span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-clean max-w-250">

                                            <!--
                                    buttons attributes : documentation/components-tables.html
                                  -->
                                            <div class="scrollable-vertical max-vh-50">

                                                <a href="#"
                                                    class="dropdown-item text-truncate js-form-advanced-bulk"
                                                    data-js-form-advanced-bulk-hidden-action-id="#action_month"
                                                    data-js-form-advanced-bulk-hidden-action-value="mark_solved"
                                                    data-js-form-advanced-bulk-container-items="#task_list_month"
                                                    data-js-form-advanced-bulk-required-selected="true"
                                                    data-js-form-advanced-bulk-required-txt-error="No Items Selected!"
                                                    data-js-form-advanced-bulk-required-txt-position="top-center"
                                                    data-js-form-advanced-bulk-required-custom-modal=""
                                                    data-js-form-advanced-bulk-required-custom-modal-content-ajax=""
                                                    data-js-form-advanced-bulk-required-modal-type="success"
                                                    data-js-form-advanced-bulk-required-modal-size="modal-md"
                                                    data-js-form-advanced-bulk-required-modal-txt-title="Please Confirm"
                                                    data-js-form-advanced-bulk-required-modal-txt-subtitle="Selected Items: "
                                                    data-js-form-advanced-bulk-required-modal-txt-body-txt="Set unsolved  selected items?"
                                                    data-js-form-advanced-bulk-required-modal-txt-body-info=""
                                                    data-js-form-advanced-bulk-required-modal-btn-text-yes="Confirm"
                                                    data-js-form-advanced-bulk-required-modal-btn-text-no="Cancel"
                                                    data-js-form-advanced-bulk-submit-without-confirmation="false"
                                                    data-js-form-advanced-form-id="#FORM_TASK_LIST_MONTH">
                                                    <i class="fi fi-check"></i>
                                                    Set : Solved
                                                </a>
                                                <a href="#"
                                                    class="dropdown-item text-truncate js-form-advanced-bulk"
                                                    data-js-form-advanced-bulk-hidden-action-id="#action_month"
                                                    data-js-form-advanced-bulk-hidden-action-value="mark_unsolved"
                                                    data-js-form-advanced-bulk-container-items="#task_list_month"
                                                    data-js-form-advanced-bulk-required-selected="true"
                                                    data-js-form-advanced-bulk-required-txt-error="No Items Selected!"
                                                    data-js-form-advanced-bulk-required-txt-position="top-center"
                                                    data-js-form-advanced-bulk-required-custom-modal=""
                                                    data-js-form-advanced-bulk-required-custom-modal-content-ajax=""
                                                    data-js-form-advanced-bulk-required-modal-type="warning"
                                                    data-js-form-advanced-bulk-required-modal-size="modal-md"
                                                    data-js-form-advanced-bulk-required-modal-txt-title="Please Confirm"
                                                    data-js-form-advanced-bulk-required-modal-txt-subtitle="Selected Items: "
                                                    data-js-form-advanced-bulk-required-modal-txt-body-txt="Set unsolved  selected items?"
                                                    data-js-form-advanced-bulk-required-modal-txt-body-info=""
                                                    data-js-form-advanced-bulk-required-modal-btn-text-yes="Confirm"
                                                    data-js-form-advanced-bulk-required-modal-btn-text-no="Cancel"
                                                    data-js-form-advanced-bulk-submit-without-confirmation="false"
                                                    data-js-form-advanced-form-id="#FORM_TASK_LIST_MONTH">
                                                    <i class="fi fi-close"></i>
                                                    Set : Unsolved
                                                </a>

                                                <a href="#"
                                                    class="dropdown-item text-truncate js-form-advanced-bulk"
                                                    data-js-form-advanced-bulk-hidden-action-id="#action_month"
                                                    data-js-form-advanced-bulk-hidden-action-value="delete"
                                                    data-js-form-advanced-bulk-container-items="#task_list_month"
                                                    data-js-form-advanced-bulk-required-selected="true"
                                                    data-js-form-advanced-bulk-required-txt-error="No Items Selected!"
                                                    data-js-form-advanced-bulk-required-txt-position="top-center"
                                                    data-js-form-advanced-bulk-required-custom-modal=""
                                                    data-js-form-advanced-bulk-required-custom-modal-content-ajax=""
                                                    data-js-form-advanced-bulk-required-modal-type="danger"
                                                    data-js-form-advanced-bulk-required-modal-size="modal-md"
                                                    data-js-form-advanced-bulk-required-modal-txt-title="Please Confirm"
                                                    data-js-form-advanced-bulk-required-modal-txt-subtitle="Selected Items: "
                                                    data-js-form-advanced-bulk-required-modal-txt-body-txt="Are you sure? Delete  selected items?"
                                                    data-js-form-advanced-bulk-required-modal-txt-body-info="Please note: this is a permanent action!"
                                                    data-js-form-advanced-bulk-required-modal-btn-text-yes="Yes, Delete"
                                                    data-js-form-advanced-bulk-required-modal-btn-text-no="Cancel"
                                                    data-js-form-advanced-bulk-submit-without-confirmation="false"
                                                    data-js-form-advanced-form-id="#FORM_TASK_LIST_MONTH">
                                                    <i class="fi fi-thrash text-danger"></i>
                                                    Set : Delete
                                                </a>

                                            </div>

                                        </div>

                                    </div>
                                    <!-- /SELECTED ITEMS -->

                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>
            <!-- /tasks -->


            <!-- tickets -->
            <div class="col-12 col-xl-4">

                <div class="portlet">

                    <div class="portlet-header">

                        <div class="float-end dropdown">

                            <!-- reload ajax content -->
                            <a href="#" id="summaryTicketListReloadBtn" aria-label="Reload Content"
                                class="btn btn-sm btn-light px-2 py-1 fs-6 mt-n1">
                                <span class="group-icon">
                                    <i class="fi fi-circle-spin"></i>
                                    <i class="fi fi-circle-spin fi-spin"></i>
                                </span>
                            </a>

                            <!-- dropdown -->
                            <button type="button" class="dropdown-toggle btn btn-sm btn-light px-2 py-1 mt-n1"
                                id="dropdownRecent" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                aria-label="options">
                                <span>
                                    <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                        <path
                                            d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                        </path>
                                    </svg>
                                </span>
                            </button>

                            <!--
                            
                            Note: .dropdown-menu-click-update
                              is the key class to set the link active on click
                          
                          -->
                            <div class="prefix-link-icon prefix-icon-dot dropdown-menu dropdown-menu-invert dropdown-menu-click-update end-0 mt-2"
                                aria-labelledby="dropdownRecent">

                                <div class="dropdown-header smaller px-4 text-muted fw-medium">
                                    Filter Tickets
                                </div>

                                <!--
      
                              Note: these are working ajax links!
                              html_frontend/documentation/plugins-sow-ajax-navigation.html
                              .js-ajax class required
      
                              Both plugins are working together:
                                SOW : Ajax Navigation
                                SOW : Ajax Content
      
                            -->
                                <a class="js-ajax dropdown-item" href="#"
                                    data-href="_ajax/widget_tickets_recent.html"
                                    data-ajax-target-container="#summaryTicketList" data-ajax-update-url="false"
                                    data-ajax-show-loading-icon="true" data-ajax-autoscroll-to-content="false">
                                    Recent
                                </a>

                                <a class="js-ajax dropdown-item" href="#"
                                    data-href="_ajax/widget_tickets_open.html"
                                    data-ajax-target-container="#summaryTicketList" data-ajax-update-url="false"
                                    data-ajax-show-loading-icon="true" data-ajax-autoscroll-to-content="false">
                                    Open
                                </a>

                                <a class="js-ajax dropdown-item" href="#"
                                    data-href="_ajax/widget_tickets_closed.html"
                                    data-ajax-target-container="#summaryTicketList" data-ajax-update-url="false"
                                    data-ajax-show-loading-icon="true" data-ajax-autoscroll-to-content="false">
                                    Cosed
                                </a>

                            </div>
                            <!-- /dropdown -->

                        </div>

                        <span class="d-block text-muted text-truncate fw-medium">
                            Support Tickets
                        </span>

                    </div>


                    <!-- content loaded via ajax (on page load)! -->
                    <div id="summaryTicketList" data-ajax-url="_ajax/widget_tickets_recent.html"
                        data-ajax-btn-reload="#summaryTicketListReloadBtn"
                        class="js-ajax portlet-body scrollable-vertical scrollable-styled-dark" style="max-height:500px">

                        <!-- ajax content pushed here -->
                        <div class="text-center p-5"><!-- loader indicator -->
                            <i class="fi fi-circle-spin fi-spin fs-1 text-gray-300"></i>
                        </div>

                    </div>

                    <div class="d-flex align-self-baseline w-100 py-2">
                        <a href="#" class="btn btn-sm link-muted border-0 shadow-none">
                            <i class="fi fi-arrow-end"></i>
                            <span>View All</span>
                        </a>
                    </div>

                </div>

            </div>
            <!-- /tickets -->


            <!-- logs -->
            <div class="col-12 col-xl-4">

                <div class="portlet">

                    <div class="portlet-header">

                        <div class="float-end dropdown">

                            <!-- reload ajax content -->
                            <a href="#" id="summaryNotificationListReloadBtn" aria-label="Reload Content"
                                class="btn btn-sm btn-light px-2 py-1 fs-6 mt-n1">
                                <span class="group-icon">
                                    <i class="fi fi-circle-spin"></i>
                                    <i class="fi fi-circle-spin fi-spin"></i>
                                </span>
                            </a>

                            <!-- dropdown -->
                            <button type="button" class="dropdown-toggle btn btn-sm btn-light px-2 py-1 mt-n1"
                                id="dropdownLog" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="js-trigger-text">Recent</span>
                                <i class="fi fi-arrow-down"></i>
                            </button>

                            <!--
                            
                            Note: .dropdown-menu-click-update
                              is the key class to set the link active on click
                          
                          -->
                            <div class="prefix-link-icon prefix-icon-dot dropdown-menu dropdown-menu-click-update dropdown-menu-invert end-0 mt-2"
                                aria-labelledby="dropdownLog">

                                <div class="dropdown-header smaller px-4 text-muted fw-medium">
                                    Filter Tickets
                                </div>

                                <!--
      
                              Note: these are working ajax links!
                              html_frontend/documentation/plugins-sow-ajax-navigation.html
                              .js-ajax class required
      
                              Both plugins are working together:
                                SOW : Ajax Navigation
                                SOW : Ajax Content
      
                              data-href used here, instead of href to hide
                              the link from "open in new tab" actions
      
                            -->
                                <a class="js-ajax dropdown-item" href="#"
                                    data-href="_ajax/widget_notification_recent.html"
                                    data-ajax-target-container="#summaryNotificationList" data-ajax-update-url="false"
                                    data-ajax-show-loading-icon="true" data-ajax-autoscroll-to-content="false">
                                    <span class="js-trigger-text">Recent</span>
                                </a>

                                <a class="js-ajax dropdown-item" href="#"
                                    data-href="_ajax/widget_notification_errors.html"
                                    data-ajax-target-container="#summaryNotificationList" data-ajax-update-url="false"
                                    data-ajax-show-loading-icon="true" data-ajax-autoscroll-to-content="false">
                                    <span class="js-trigger-text">Errors</span>
                                </a>

                                <a class="js-ajax dropdown-item" href="#"
                                    data-href="_ajax/widget_notification_warnings.html"
                                    data-ajax-target-container="#summaryNotificationList" data-ajax-update-url="false"
                                    data-ajax-show-loading-icon="true" data-ajax-autoscroll-to-content="false">
                                    <span class="js-trigger-text">Warnings</span>
                                </a>

                            </div>
                            <!-- /dropdown -->

                        </div>

                        <span class="d-block text-muted text-truncate fw-medium">
                            Notifications
                        </span>

                    </div>


                    <!-- content loaded via ajax (on page load)! -->
                    <div id="summaryNotificationList" data-ajax-url="_ajax/widget_notification_recent.html"
                        data-ajax-btn-reload="#summaryNotificationListReloadBtn"
                        class="js-ajax portlet-body scrollable-vertical scrollable-styled-dark"
                        style="max-height:500px">

                        <!-- ajax content pushed here -->
                        <div class="text-center p-5"><!-- loader indicator -->
                            <i class="fi fi-circle-spin fi-spin fs-1 text-gray-300"></i>
                        </div>

                    </div>


                    <div class="d-flex align-self-baseline w-100 py-2">
                        <a href="#" class="btn btn-sm link-muted border-0 shadow-none">
                            <i class="fi fi-arrow-end"></i>
                            <span>View All</span>
                        </a>
                    </div>

                </div>

            </div>
            <!-- /logs -->


            <!-- alert : upgrade -->
            <div class="col-12">
                <div class="d-flex align-items-center bg-white shadow-xs rounded small p-3">

                    <a href="#" title="Upgrade" aria-label="Upgrade"
                        class="btn  btn-sm btn-warning py-1 mb-0 me-3 float-start transition-hover-end">
                        Upgrade
                    </a>
                    <span class="d-block pt-1 px-2 text-muted text-truncate">
                        using 89% of total storage
                    </span>

                </div>
            </div>
            <!-- /alert : upgrade -->


            <!-- imports -->
            <div class="col-12 col-xl-8">

                <div class="portlet">

                    <div class="portlet-header">

                        <div class="float-end dropdown">

                            <a href="#" class="btn btn-sm btn-light px-2 py-1 mt-n1">
                                <small>View All</small>
                            </a>

                        </div>

                        <span class="d-block text-muted text-truncate fw-medium">
                            Shop Imports
                        </span>

                    </div>


                    <!-- content loaded via ajax! -->
                    <div class="portlet-body max-h-500 scrollable-vertical scrollable-styled-dark">

                        <!-- item -->
                        <div class="d-flex align-items-center p-3 border-bottom border-light">

                            <div class="flex-none">
                                <img width="40" height="40" class="img-fluid lazy"
                                    data-src="/svg/icons/files/csv.svg"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    alt="...">
                            </div>

                            <div class="flex-fill text-truncate px-3">
                                <span class="text-muted">384 items imported, 766 updated, 12 ignored</span>
                                <span class="small d-block text-muted">29 June, 2020 / 18:44</span>
                            </div>

                            <div class="flex-none ms-2 small text-muted text-align-end dropdown">

                                <!-- dropdown -->
                                <a id="dropdownImport_1" href="#"
                                    class="dropdown-toggle btn btn-sm btn-light px-2 py-1 mt-n1"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    aria-label="options">
                                    <span>
                                        <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg"
                                            fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                                            <path
                                                d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                            </path>
                                        </svg>
                                    </span>
                                </a>
                                <div aria-labelledby="dropdownImport_1"
                                    class="prefix-link-icon prefix-icon-dot dropdown-menu mt-2">
                                    <a href="#" class="dropdown-item">View Log</a>
                                    <a href="#" class="dropdown-item">Download</a>
                                </div>
                                <!-- /dropdown -->

                            </div>


                        </div>
                        <!-- /item -->



                        <!-- item -->
                        <div class="d-flex align-items-center p-3 border-bottom border-light">

                            <div class="flex-none">
                                <img width="40" height="40" class="img-fluid lazy"
                                    data-src="/svg/icons/files/csv.svg"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    alt="...">
                            </div>

                            <div class="flex-fill text-truncate px-3">
                                <span class="text-muted">12 items imported, 67 updated, 1 ignored</span>
                                <span class="small d-block text-muted">15 February, 2020 / 16:51</span>
                            </div>

                            <div class="flex-none ms-2 small text-muted text-align-end">
                                <a href="#">view log</a>
                            </div>

                        </div>
                        <!-- /item -->



                        <!-- item -->
                        <div class="d-flex align-items-center p-3 border-bottom border-light">

                            <div class="flex-none">
                                <img width="40" height="40" class="img-fluid lazy"
                                    data-src="/svg/icons/files/jpg.svg"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    alt="...">
                            </div>

                            <div class="flex-fill text-truncate px-3">
                                <span class="text-muted">384 images imported to 281 products</span>
                                <span class="small d-block text-muted">1 February, 2020 / 13:43</span>
                            </div>

                            <div class="flex-none ms-2 small text-muted text-align-end">
                                <a href="#">view log</a>
                            </div>

                        </div>
                        <!-- /item -->

                    </div>

                    <div class="d-flex align-self-baseline w-100 py-2">
                        <a href="#" class="btn btn-sm link-muted border-0 shadow-none">
                            <i class="fi fi-arrow-end"></i>
                            <span>View All</span>
                        </a>
                    </div>

                </div>

            </div>
            <!-- /imports -->


            <!-- orders -->
            <div class="col-12 col-xl-4">

                <div class="portlet">

                    <div class="portlet-header">

                        <!-- dropdown options -->
                        <div class="float-end dropdown">
                            <button type="button" class="dropdown-toggle btn btn-sm btn-light px-2 py-1 mt-n1"
                                id="dropdownOrders" data-bs-toggle="dropdown" aria-haspopup="true"
                                aria-expanded="false">
                                <span class="js-trigger-text small">Export</span>
                                <i class="fi fi-arrow-down"></i>
                            </button>
                            <div class="prefix-link-icon prefix-icon-dot dropdown-menu dropdown-menu-invert mt-2"
                                aria-labelledby="dropdownOrders">
                                <div class="dropdown-header smaller px-4 text-muted fw-medium">Export options</div>
                                <a href="#" class="dropdown-item">Export CSV</a>
                                <a href="#" class="dropdown-item">Export XLS</a>
                                <a href="#" class="dropdown-item">Export PDF</a>
                                <a href="#" class="dropdown-item">Print</a>
                            </div>
                        </div>
                        <!-- /dropdown options -->

                        <span class="d-block text-muted text-truncate fw-medium">
                            Orders
                        </span>

                    </div>

                    <!-- items -->
                    <div class="portlet-body scrollable-vertical scrollable-styled-dark" style="max-height:300px">

                        <!-- item -->
                        <a href="#"
                            class="clearfix d-block dropdown-item fw-medium p-3 rounded overflow-hidden border-bottom border-light">

                            <!-- badge -->
                            <span class="float-end fw-bold text-muted small">$2155.00</span>

                            <!-- icon -->
                            <div class="float-start avatar avatar-sm rounded-circle bg-gray-200 fs-5">
                                <i class="fi fi-cart-1"></i>
                            </div>

                            <p class="m-0 text-truncate fw-normal">2 items</p>
                            <small class="text-muted d-block smaller">3 hours ago</small>

                        </a>
                        <!-- /item -->


                        <!-- item -->
                        <a href="#"
                            class="clearfix d-block dropdown-item fw-medium p-3 rounded overflow-hidden border-bottom border-light">

                            <!-- badge -->
                            <span class="float-end fw-bold text-muted small">$280.00</span>

                            <!-- icon -->
                            <div class="float-start avatar avatar-sm rounded-circle bg-gray-200 fs-5">
                                <i class="fi fi-cart-1"></i>
                            </div>

                            <p class="m-0 text-truncate fw-normal">3 items</p>
                            <small class="text-muted d-block smaller">8 hours ago</small>

                        </a>
                        <!-- /item -->


                        <!-- item -->
                        <a href="#"
                            class="clearfix d-block dropdown-item fw-medium p-3 rounded overflow-hidden border-bottom border-light">

                            <!-- badge -->
                            <span class="float-end fw-bold text-muted small">$999.98</span>

                            <!-- icon -->
                            <div class="float-start avatar avatar-sm rounded-circle bg-gray-200 fs-5">
                                <i class="fi fi-cart-1"></i>
                            </div>

                            <p class="m-0 text-truncate fw-normal">4 items</p>
                            <small class="text-muted d-block smaller">12 hours ago</small>

                        </a>
                        <!-- /item -->


                        <!-- item -->
                        <a href="#"
                            class="clearfix d-block dropdown-item fw-medium p-3 rounded overflow-hidden border-bottom border-light">

                            <!-- badge -->
                            <span class="float-end fw-bold text-muted small">$596.36</span>

                            <!-- icon -->
                            <div class="float-start avatar avatar-sm rounded-circle bg-gray-200 fs-5">
                                <i class="fi fi-cart-1"></i>
                            </div>

                            <p class="m-0 text-truncate fw-normal">1 items</p>
                            <small class="text-muted d-block smaller">24 hours ago</small>

                        </a>
                        <!-- /item -->


                        <!-- item -->
                        <a href="#"
                            class="clearfix d-block dropdown-item fw-medium p-3 rounded overflow-hidden border-bottom border-light">

                            <!-- badge -->
                            <span class="float-end fw-bold text-muted small">$280.00</span>

                            <!-- icon -->
                            <div class="float-start avatar avatar-sm rounded-circle bg-gray-200 fs-5">
                                <i class="fi fi-cart-1"></i>
                            </div>

                            <p class="m-0 text-truncate fw-normal">3 items</p>
                            <small class="text-muted d-block smaller">8 hours ago</small>

                        </a>
                        <!-- /item -->


                        <!-- item -->
                        <a href="#"
                            class="clearfix d-block dropdown-item fw-medium p-3 rounded overflow-hidden border-bottom border-light">

                            <!-- badge -->
                            <span class="float-end fw-bold text-muted small">$999.98</span>

                            <!-- icon -->
                            <div class="float-start avatar avatar-sm rounded-circle bg-gray-200 fs-5">
                                <i class="fi fi-cart-1"></i>
                            </div>

                            <p class="m-0 text-truncate fw-normal">4 items</p>
                            <small class="text-muted d-block smaller">12 hours ago</small>

                        </a>
                        <!-- /item -->

                    </div>
                    <!-- /items -->

                    <div class="d-flex align-self-baseline w-100 py-2">
                        <a href="#" class="btn btn-sm link-muted border-0 shadow-none">
                            <i class="fi fi-arrow-end"></i>
                            <span>View All</span>
                        </a>
                    </div>

                </div>

            </div>
            <!-- /orders -->

        </div>
        <!-- /widgets -->


    </main>
    <!-- /main -->

    @endsection
