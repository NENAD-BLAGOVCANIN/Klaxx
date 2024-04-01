@extends('layouts.guest')

@section('title', 'Login')

@section('content')


    <div class="row g-0 bg-white min-vh-100 align-items-center">
        <div class="col-lg-6 text-center text-lg-start overflow-hidden z-index-2">
            <div class="px-3 py-6">

                <!-- back button -->
                <a href="/" class="link-muted position-absolute top-0 start-0 p-2 d-inline-grid gap-auto-2">
                    <svg class="rtl-flip" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z">
                        </path>
                    </svg>
                    <span>back to homepage</span>
                </a>

                <div class="row">
                    <div class="col-sm-8 col-md-6 col-lg-9 col-xl-12 mx-auto max-w-450">

                        <h1 class="fw-bold mb-5">Sign in</h1>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-floating mb-3">
                                <input required type="text" class="form-control" id="name" placeholder="Full Name"
                                    name="name">
                                <label for="name">Full Name</label>
                            </div>

                            <x-input-error :messages="$errors->get('name')" class="mt-2" />


                            <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Email address" required autofocus autocomplete="username">
                                <label for="account_email">Email address</label>
                            </div>

                            <x-input-error :messages="$errors->get('email')" class="mt-2" />

                            <div class="form-floating mb-3">
                                <input required type="password" class="form-control" id="password" placeholder="Password"
                                    autocomplete="new-password" name="password">
                                <label for="password">Password</label>
                            </div>

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />


                            <div class="form-floating mb-3">
                                <input required type="password" class="form-control" id="password_confirmation"
                                    placeholder="Password" autocomplete="new-password" name="password_confirmation">
                                <label for="password_confirmation">Password</label>
                            </div>

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />

                            <div class="d-grid mb-3">
                                <button type="submit" class="btn btn-primary">
                                    <span>Sign up</span>
                                    <svg class="rtl-flip" height="18px" viewBox="0 0 16 16"
                                        xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                        </path>
                                    </svg>
                                </button>
                            </div>
                        </form>

                        <!-- create account -->
                        <div class="text-center mt-4">
                            <a href="/login" class="link-muted">
                                Already have an account?
                            </a>
                        </div>

                    </div>
                </div>

                <div class="row mt-7">
                    <div class="col-sm-8 col-md-6 col-lg-9 col-xl-5 mx-auto">

                        <div
                            class="d-flex align-items-center justify-content-between w-100 max-w-250 mx-auto mb-3 small text-muted">
                            <hr class="w-100">
                            <span class="flex-none px-4">OR</span>
                            <hr class="w-100">
                        </div>

                        <div class="w-100 d-inline-grid gap-auto-3">
                            <a href="/auth/google" class="btn bg-white border w-100 mx-0 text-gray-700">
                                <svg height="18px" viewBox="0 0 320 512" xmlns="http://www.w3.org/2000/svg"
                                    fill="currentColor">
                                    <path
                                        d="m279.14 288 14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42v-78.89s-36.68-6.26-71.75-6.26c-73.22 0-121.08 44.38-121.08 124.72v70.62h-81.39v92.66h81.39v224h100.17v-224z">
                                    </path>
                                </svg>
                            </a>
                            <a href="/auth/google" class="btn bg-white border w-100 mx-0 text-gray-700">
                                <svg fill="currentColor" style="height: 18px" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 488 512">
                                    <path
                                        d="M488 261.8C488 403.3 391.1 504 248 504 110.8 504 0 393.2 0 256S110.8 8 248 8c66.8 0 123 24.5 166.3 64.9l-67.5 64.9C258.5 52.6 94.3 116.6 94.3 256c0 86.5 69.1 156.6 153.7 156.6 98.2 0 135-70.4 140.8-106.9H248v-85.3h236.1c2.3 12.7 3.9 24.9 3.9 41.4z" />
                                </svg>
                            </a>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <div class="d-none d-lg-block min-vh-100 col-lg-6 bg-cover py-8 overlay-dark overlay-opacity-25"
            style="background-image:url(/images/unsplash/team/product-school-XZkk5xT8Xrk-unsplash.jpg)">
            <svg class="d-none d-lg-block position-absolute h-100 top-0 text-white ms-n5" style="width:6rem"
                fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none">
                <polygon points="50,0 100,0 50,100 0,100"></polygon>
            </svg>
        </div>
    </div>

@endsection
