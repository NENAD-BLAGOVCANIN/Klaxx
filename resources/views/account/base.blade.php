@extends('layouts.app')

@section('title', 'Account')

@section('content')


    <!-- PAGE TITLE -->
    <div class="container py-5">

        <h1 class="h2 fw-bold">My account</h1>

        <!--
         <ul class="list-inline small text-muted m-0">
         <li class="list-inline-item">
         <a href="account-orders.html" class="d-flex align-items-center link-muted">
         <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
         <path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"></path>
         </svg>
         <span class="text-muted px-1">back to orders</span>
         </a>
         </li>
         </ul>
        -->

    </div>
    <!-- /PAGE TITLE -->




    <!-- -->
    <div class="container pb-6">

        <div class="row g-4">

            <!-- sidebar -->
            <div class="col-12 col-lg-3">

                @include('components.account.sidebar')

            </div>

            <!-- content -->
            <div class="col-12 col-lg-9">

                <!-- Feedback -->
                <div class="card mb-4">
                    <div class="card-body p-4">

                        @yield('accountContent')

                    </div>
                </div>


                <!-- Activity -->
                <div class="card mb-4">
                    <div class="card-body p-4">

                        <div class="mb-4">
                            <h2 class="h4 mb-0">My activity</h2>
                            <small class="fw-bold">Thank you because you are our customer!</small>
                        </div>

                        <div class="row">

                            <div class="col-12 mb-4 border-top border-light d-lg-none"><!-- mobile separator --></div>

                            <div class="col-lg-4">

                                <div class="d-flex align-items-center">

                                    <span class="flex-none">
                                        <svg class="text-gray-600" width="58px" height="58px" viewBox="0 0 16 16"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z">
                                            </path>
                                            <path fill-rule="evenodd"
                                                d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zm4.354 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z">
                                            </path>
                                        </svg>
                                    </span>

                                    <div class="w-100 ps-3">
                                        <strong class="d-block">2 orders</strong>
                                        <a href="account-orders.html" class="text-decoration-none small">view orders</a>
                                    </div>

                                </div>

                            </div>

                            <div class="col-12 my-4 border-top border-light d-lg-none"><!-- mobile separator --></div>

                            <div class="col-lg-4">

                                <div class="d-flex align-items-center">

                                    <span class="flex-none">
                                        <svg class="text-gray-600" width="58px" height="58px" viewBox="0 0 16 16"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                                            </path>
                                        </svg>
                                    </span>

                                    <div class="w-100 ps-3">
                                        <strong class="d-block">1 favourites</strong>
                                        <a href="account-favourites.html" class="text-decoration-none small">view
                                            favourites</a>
                                    </div>

                                </div>

                            </div>

                            <div class="col-12 my-4 border-top border-light d-lg-none"><!-- mobile separator --></div>

                            <div class="col-lg-4">

                                <div class="d-flex align-items-center">

                                    <span class="flex-none">
                                        <svg class="text-gray-600" width="58px" height="58px" viewBox="0 0 16 16"
                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                            <path
                                                d="M3 2h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2z">
                                            </path>
                                            <path
                                                d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2zM1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z">
                                            </path>
                                        </svg>
                                    </span>

                                    <div class="w-100 ps-3">
                                        <strong class="d-block">1 reviews</strong>
                                        <a href="account-reviews.html" class="text-decoration-none small">view reviews</a>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div>


                <!-- Widgets -->
                <div class="row mb-4">

                    <div class="col-md-4">

                        <a href="/account/reward-list/"
                            class="link-normal d-flex align-items-center bg-gray-200 px-3 py-4 rounded">
                            <span class="text-muted">
                                <svg width="50" height="50" viewBox="0 0 16 16"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                    <path fill-rule="evenodd"
                                        d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z">
                                    </path>
                                </svg>
                            </span>
                            <div class="ps-3">
                                <h5 class="mb-0">Reward points</h5>
                                <p class="mb-0 small text-muted">Your reward points</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-md-4">

                        <a href="account-reward.html"
                            class="link-normal d-flex align-items-center bg-gray-200 px-3 py-4 rounded">
                            <span class="text-muted">
                                <svg width="50" height="50" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                    <circle cx="12" cy="10" r="3"></circle>
                                </svg>
                            </span>
                            <div class="ps-3">
                                <h5 class="mb-0">Addreses</h5>
                                <p class="mb-0 small text-muted">Delivery, billing</p>
                            </div>
                        </a>

                    </div>

                    <div class="col-md-4">

                        <a href="/account/settings/"
                            class="link-normal d-flex align-items-center bg-gray-200 px-3 py-4 rounded">
                            <span class="text-muted">
                                <svg width="50" height="50" viewBox="0 0 16 16"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z">
                                    </path>
                                </svg>
                            </span>
                            <div class="ps-3">
                                <h5 class="mb-0">Settings</h5>
                                <p class="mb-0 small text-muted">Password, email</p>
                            </div>
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>
    <!-- / -->




@endsection
