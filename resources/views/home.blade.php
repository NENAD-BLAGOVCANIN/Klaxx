@extends('layouts.app')

@section('title', 'Welcome')

@section('content')




    <!-- featured -->
    <div class="section bg-light">
        <div class="container z-index-1">

            <div class="row g-2 g-xl-4">

                <!-- featured 1 -->
                <div class="col-12 col-md-5 mb-2">

                    <a href="#"
                        class="shadow-primary-xs d-block overlay-dark-hover overlay-opacity-3 bg-light bg-cover lazy"
                        data-background-image="/images/unsplash/products/curology-wK0h-mlvfuc-unsplash.jpg">

                        <h3 class="fs-4 position-absolute bottom-0 w-100 p-4 fw-bold text-dark z-index-2 text-align-start">
                            New Arrivals
                            <span class="d-block smaller">SHOP NOW</span>
                        </h3>

                        <!-- transparent png 7x10 px -->
                        <img class="w-100"
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAcAAAAKCAQAAADSxYyGAAAAD0lEQVR42mNkQAGMg4MLAAPPAAux65iEAAAAAElFTkSuQmCC"
                            alt="...">
                    </a>

                </div>


                <div class="col-12 col-md-7">

                    <div class="row g-2 g-xl-4">

                        <!-- featured 2 -->
                        <div class="col-12 mb-4 m-0-xs">

                            <a href="#"
                                class="shadow-primary-xs d-block overlay-dark-hover overlay-opacity-3 bg-light bg-cover lazy"
                                data-background-image="/images/unsplash/products/nikolai-chernichenko-oyr64kMIz98-unsplash-min.jpg">

                                <h3
                                    class="fs-4 position-absolute bottom-0 w-100 p-4 fw-bold text-dark z-index-2 text-align-start">
                                    Home Fresh
                                    <span class="d-block smaller">SHOP NOW</span>
                                </h3>

                                <!-- transparent png 21x10 px -->
                                <img class="w-100"
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABUAAAAKCAQAAADxnt1TAAAAEUlEQVR42mNkIBowjiodaKUACusAC4zze1kAAAAASUVORK5CYII="
                                    alt="...">
                            </a>

                        </div>

                        <!-- featured 3 -->
                        <div class="col-6 my-2">

                            <a href="#"
                                class="shadow-primary-xs d-block overlay-dark-hover overlay-opacity-3 bg-light bg-cover lazy"
                                data-background-image="/images/unsplash/products/aidan-hancock-EwKkZu18HPo-unsplash-min.jpg">

                                <h3
                                    class="fs-4 position-absolute bottom-0 w-100 p-4 fw-bold text-dark z-index-2 text-align-start">
                                    New Phones
                                    <span class="d-block smaller">SHOP NOW</span>
                                </h3>

                                <!-- transparent gif 1x1 px -->
                                <img class="w-100"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    alt="...">
                            </a>

                        </div>

                        <!-- featured 4 -->
                        <div class="col-6 my-2">

                            <a href="#"
                                class="shadow-primary-xs d-block overlay-dark-hover overlay-opacity-3 bg-light bg-cover lazy"
                                data-background-image="/images/unsplash/products/barrett-ward-BsxlZgY4jMM-unsplash-min.jpg">

                                <h3
                                    class="fs-4 position-absolute bottom-0 w-100 p-4 fw-bold text-dark z-index-2 text-align-end">
                                    New Cameras
                                    <span class="d-block smaller">SHOP NOW</span>
                                </h3>

                                <!-- transparent gif 1x1 px -->
                                <img class="w-100"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    alt="...">
                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- svg shape -->
        <svg class="absolute-full z-index-0" width="100%" viewBox="0 0 1440 68">
            <path fill="rgba(0,0,0,0.02)"
                d="m1622.3 1937.7c0 0-410.7 169.1-913.4 75.5-502.7-93.6-977.7 56.3-977.7 56.3v440h1891.1v-571.8"
                transform="translate(0-1977)"></path>
        </svg>

    </div>
    <!-- /featured -->




    <!-- INFO BOX -->
    <div class="bg-light mt-1">
        <div class="container py-3">

            <div class="row g-4">

                <div class="col-12 col-sm-6 col-lg-3 d-flex py-2 py-sm-3 py-lg-4">

                    <img width="60" height="60" class="lazy" data-src="/svg/ecommerce/money_bag.svg"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                    <div class="ps-3">
                        <h3 class="fs-5 mb-1">Money Back</h3>
                        <p class="m-0">Love it! Use it! Reuse it!</p>
                    </div>

                </div>

                <div class="col-12 col-sm-6 col-lg-3 d-flex py-2 py-sm-3 py-lg-4">

                    <img width="60" height="60" class="lazy"
                        data-src="/svg/ecommerce/free-delivery-truck.svg"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                    <div class="ps-3">
                        <h3 class="fs-5 mb-1">Free Shipping</h3>
                        <p class="m-0">Shipping is on us</p>
                    </div>

                </div>

                <div class="col-12 col-sm-6 col-lg-3 d-flex py-2 py-sm-3 py-lg-4">

                    <img width="60" height="60" class="lazy"
                        data-src="/svg/ecommerce/24-hours-phone-service.svg"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                    <div class="ps-3">
                        <h3 class="fs-5 mb-1">Free Support</h3>
                        <p class="m-0">24/24 available</p>
                    </div>

                </div>

                <div class="col-12 col-sm-6 col-lg-3 d-flex py-2 py-sm-3 py-lg-4">

                    <!-- link example -->
                    <a href="#" class="text-dark text-decoration-none d-flex">

                        <img width="60" height="60" class="lazy" data-src="/svg/ecommerce/handshake.svg"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                        <div class="ps-3">
                            <h3 class="fs-5 mb-1">Best Deal</h3>
                            <p class="m-0">Quality guaranteed</p>
                        </div>

                    </a>

                </div>

            </div>

        </div>
    </div>
    <!-- /INFO BOX -->




    <!-- OFFER BLOCK -->
    <div class="section">
        <div class="container">

            <h2 class="h3 mb-5 text-center-xs fw-bold">
                30% OFF this week
            </h2>

            <!-- product list -->
            <div class="row g-2 g-xl-4">

                <!-- item -->
                <div class="col-6 col-lg-3">

                    <div
                        class="bg-white shadow-md shadow-3d-hover transition-all-ease-250 transition-hover-top rounded show-hover-container p-2 h-100">

                        <!-- hover buttons : top -->
                        <div class="position-absolute top-0 end-0 text-align-end z-index-3 m-3 show-hover-item d-none d-sm-inline-block"
                            style="width:60px">

                            <!-- add to favourite : not logged in -->
                            <!--
                      <a href="#" class="js-ajax-modal btn bg-white shadow-lg btn-sm rounded-circle mb-2"
                          data-href="_ajax/modal_signin.html"
                          data-ajax-modal-size="modal-md"
                          data-ajax-modal-centered="false"
                          data-ajax-modal-backdrop="static">
                          <i class="fi fi-heart-slim"></i>
                      </a>
                      -->

                            <!-- add to favourite : logged in -->
                            <a href="#" class="btn-toggle btn bg-white shadow-lg btn-sm rounded-circle mb-2"
                                data-bs-toggle="tooltip" data-bs-original-title="add to favourite"
                                data-bs-placement="left"
                                data-toggle-ajax-url-on="/php/demo.ajax_request.php?product_id=1&amp;action=add_to_favourite"
                                data-toast-success-message="Added to your favourite!"
                                data-toast-success-position="bottom-center">
                                <i class="fi fi-heart-slim"></i>
                            </a>

                            <a href="#" class="btn bg-white shadow-lg btn-sm rounded-circle mb-2" title=""
                                data-bs-toggle="tooltip" data-bs-placement="left"
                                data-bs-original-title="add to compare">
                                <i class="fi fi-graph"></i>
                            </a>

                            <a href="#" class="btn btn-danger shadow-lg btn-sm rounded-circle mb-2" title=""
                                data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="add to cart">
                                <i class="fi fi-cart-1"></i>
                            </a>
                        </div>
                        <!-- /hover buttons : top -->


                        <a href="shop-page-product-2.html" class="d-block text-gray-800">

                            <!--
                        
                        3 ways to set the image

                      -->

                            <!-- 1. without .bg-suprime - use image as it is -->
                            <!--
                      <figure class="text-center rounded-top overflow-hidden">
                        <img class="img-fluid" src="image.jpg" alt="...">
                      </figure>
                      -->


                            <!-- 2. squared, as background -->
                            <!--
                      <figure class="text-center rounded-top overflow-hidden bg-cover" style="background-image:url('image.jpg')">
                        <img class="w-100" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                      </figure>
                      -->

                            <!-- 3. with .bg-suprime (remove white bg and add a gray bg) -->
                            <figure class="text-center bg-gradient-radial-light rounded-top overflow-hidden">
                                <img class="img-fluid bg-suprime opacity-9"
                                    src="/images/unsplash/products/thumb_330/barrett-ward-pI1pPuGKuTQ-unsplash-min.jpg"
                                    alt="...">
                            </figure>

                            <span class="d-block fs-6 p-2">

                                <!-- rating -->
                                <span class="d-block smaller text-muted">
                                    <i class="rating-4 smaller text-warning"></i> (4.7)
                                </span>

                                <!-- title -->
                                <span class="d-block fw-medium">Lorem ipsum dolor sit amet</span>

                                <!-- price -->
                                <span class="d-block fw-medium">
                                    <del class="text-muted">$112.00</del>
                                    <span class="text-dark">$99.00</span>
                                </span>

                            </span>

                        </a>

                    </div>

                </div>
                <!-- /item -->


                <!-- item -->
                <div class="col-6 col-lg-3">

                    <div
                        class="bg-white shadow-md shadow-3d-hover transition-all-ease-250 transition-hover-top rounded show-hover-container p-2 h-100">

                        <!-- hover buttons : top -->
                        <div class="position-absolute top-0 end-0 text-align-end z-index-3 m-3 show-hover-item d-none d-sm-inline-block"
                            style="width:60px">

                            <!-- add to favourite : not logged in -->
                            <!--
                      <a href="#" class="js-ajax-modal btn bg-white shadow-lg btn-sm rounded-circle mb-2"
                          data-href="_ajax/modal_signin.html"
                          data-ajax-modal-size="modal-md"
                          data-ajax-modal-centered="false"
                          data-ajax-modal-backdrop="static">
                          <i class="fi fi-heart-slim"></i>
                      </a>
                      -->

                            <!-- add to favourite : logged in -->
                            <a href="#" class="btn-toggle btn bg-white shadow-lg btn-sm rounded-circle mb-2"
                                data-bs-toggle="tooltip" data-bs-original-title="add to favourite"
                                data-bs-placement="left"
                                data-toggle-ajax-url-on="/php/demo.ajax_request.php?product_id=1&amp;action=add_to_favourite"
                                data-toast-success-message="Added to your favourite!"
                                data-toast-success-position="bottom-center">
                                <i class="fi fi-heart-slim"></i>
                            </a>

                            <a href="#" class="btn bg-white shadow-lg btn-sm rounded-circle mb-2" title=""
                                data-bs-toggle="tooltip" data-bs-placement="left"
                                data-bs-original-title="add to compare">
                                <i class="fi fi-graph"></i>
                            </a>

                            <a href="#" class="btn btn-danger shadow-lg btn-sm rounded-circle mb-2" title=""
                                data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="add to cart">
                                <i class="fi fi-cart-1"></i>
                            </a>
                        </div>
                        <!-- /hover buttons : top -->


                        <a href="shop-page-product-2.html" class="d-block text-gray-800">

                            <!--
                        
                        3 ways to set the image

                      -->

                            <!-- 1. without .bg-suprime - use image as it is -->
                            <!--
                      <figure class="text-center rounded-top overflow-hidden">
                        <img class="img-fluid" src="image.jpg" alt="...">
                      </figure>
                      -->


                            <!-- 2. squared, as background -->
                            <!--
                      <figure class="text-center rounded-top overflow-hidden bg-cover" style="background-image:url('image.jpg')">
                        <img class="w-100" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                      </figure>
                      -->

                            <!-- 3. with .bg-suprime (remove white bg and add a gray bg) -->
                            <figure class="text-center bg-gradient-radial-light rounded-top overflow-hidden">
                                <img class="img-fluid bg-suprime opacity-9"
                                    src="/images/unsplash/products/thumb_330/barrett-ward-EImqPfdl9y8-unsplash-min.jpg"
                                    alt="...">
                            </figure>

                            <span class="d-block fs-6 p-2">

                                <!-- rating -->
                                <span class="d-block smaller text-muted">
                                    <i class="rating-4 smaller text-warning"></i> (4.7)
                                </span>

                                <!-- title -->
                                <span class="d-block fw-medium">Lorem ipsum dolor sit amet</span>

                                <!-- price -->
                                <span class="d-block fw-medium">
                                    <del class="text-muted">$112.00</del>
                                    <span class="text-dark">$99.00</span>
                                </span>

                            </span>

                        </a>

                    </div>

                </div>
                <!-- /item -->


                <!-- item -->
                <div class="col-6 col-lg-3">

                    <div
                        class="bg-white shadow-md shadow-3d-hover transition-all-ease-250 transition-hover-top rounded show-hover-container p-2 h-100">

                        <!-- hover buttons : top -->
                        <div class="position-absolute top-0 end-0 text-align-end z-index-3 m-3 show-hover-item d-none d-sm-inline-block"
                            style="width:60px">

                            <!-- add to favourite : not logged in -->
                            <!--
                      <a href="#" class="js-ajax-modal btn bg-white shadow-lg btn-sm rounded-circle mb-2"
                          data-href="_ajax/modal_signin.html"
                          data-ajax-modal-size="modal-md"
                          data-ajax-modal-centered="false"
                          data-ajax-modal-backdrop="static">
                          <i class="fi fi-heart-slim"></i>
                      </a>
                      -->

                            <!-- add to favourite : logged in -->
                            <a href="#" class="btn-toggle btn bg-white shadow-lg btn-sm rounded-circle mb-2"
                                data-bs-toggle="tooltip" data-bs-original-title="add to favourite"
                                data-bs-placement="left"
                                data-toggle-ajax-url-on="/php/demo.ajax_request.php?product_id=1&amp;action=add_to_favourite"
                                data-toast-success-message="Added to your favourite!"
                                data-toast-success-position="bottom-center">
                                <i class="fi fi-heart-slim"></i>
                            </a>

                            <a href="#" class="btn bg-white shadow-lg btn-sm rounded-circle mb-2" title=""
                                data-bs-toggle="tooltip" data-bs-placement="left"
                                data-bs-original-title="add to compare">
                                <i class="fi fi-graph"></i>
                            </a>

                            <a href="#" class="btn btn-danger shadow-lg btn-sm rounded-circle mb-2" title=""
                                data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="add to cart">
                                <i class="fi fi-cart-1"></i>
                            </a>
                        </div>
                        <!-- /hover buttons : top -->


                        <a href="shop-page-product-2.html" class="d-block text-gray-800">

                            <!--
                        
                        3 ways to set the image

                      -->

                            <!-- 1. without .bg-suprime - use image as it is -->
                            <!--
                      <figure class="text-center rounded-top overflow-hidden">
                        <img class="img-fluid" src="image.jpg" alt="...">
                      </figure>
                      -->


                            <!-- 2. squared, as background -->
                            <!--
                      <figure class="text-center rounded-top overflow-hidden bg-cover" style="background-image:url('image.jpg')">
                        <img class="w-100" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                      </figure>
                      -->

                            <!-- 3. with .bg-suprime (remove white bg and add a gray bg) -->
                            <figure class="text-center bg-gradient-radial-light rounded-top overflow-hidden">
                                <img class="img-fluid bg-suprime opacity-9"
                                    src="/images/unsplash/products/thumb_330/barrett-ward-BsxlZgY4jMM-unsplash-min.jpg"
                                    alt="...">
                            </figure>

                            <span class="d-block fs-6 p-2">

                                <!-- rating -->
                                <span class="d-block smaller text-muted">
                                    <i class="rating-4 smaller text-warning"></i> (4.7)
                                </span>

                                <!-- title -->
                                <span class="d-block fw-medium">Lorem ipsum dolor sit amet</span>

                                <!-- price -->
                                <span class="d-block fw-medium">
                                    <del class="text-muted">$112.00</del>
                                    <span class="text-dark">$99.00</span>
                                </span>

                            </span>

                        </a>

                    </div>

                </div>
                <!-- /item -->


                <!-- item -->
                <div class="col-6 col-lg-3">

                    <div
                        class="bg-white shadow-md shadow-3d-hover transition-all-ease-250 transition-hover-top rounded show-hover-container p-2 h-100">

                        <!-- hover buttons : top -->
                        <div class="position-absolute top-0 end-0 text-align-end z-index-3 m-3 show-hover-item d-none d-sm-inline-block"
                            style="width:60px">

                            <!-- add to favourite : not logged in -->
                            <!--
                      <a href="#" class="js-ajax-modal btn bg-white shadow-lg btn-sm rounded-circle mb-2"
                          data-href="_ajax/modal_signin.html"
                          data-ajax-modal-size="modal-md"
                          data-ajax-modal-centered="false"
                          data-ajax-modal-backdrop="static">
                          <i class="fi fi-heart-slim"></i>
                      </a>
                      -->

                            <!-- add to favourite : logged in -->
                            <a href="#" class="btn-toggle btn bg-white shadow-lg btn-sm rounded-circle mb-2"
                                data-bs-toggle="tooltip" data-bs-original-title="add to favourite"
                                data-bs-placement="left"
                                data-toggle-ajax-url-on="/php/demo.ajax_request.php?product_id=1&amp;action=add_to_favourite"
                                data-toast-success-message="Added to your favourite!"
                                data-toast-success-position="bottom-center">
                                <i class="fi fi-heart-slim"></i>
                            </a>

                            <a href="#" class="btn bg-white shadow-lg btn-sm rounded-circle mb-2" title=""
                                data-bs-toggle="tooltip" data-bs-placement="left"
                                data-bs-original-title="add to compare">
                                <i class="fi fi-graph"></i>
                            </a>

                            <a href="#" class="btn btn-danger shadow-lg btn-sm rounded-circle mb-2" title=""
                                data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="add to cart">
                                <i class="fi fi-cart-1"></i>
                            </a>
                        </div>
                        <!-- /hover buttons : top -->


                        <a href="shop-page-product-2.html" class="d-block text-gray-800">

                            <!--
                        
                        3 ways to set the image

                      -->

                            <!-- 1. without .bg-suprime - use image as it is -->
                            <!--
                      <figure class="text-center rounded-top overflow-hidden">
                        <img class="img-fluid" src="image.jpg" alt="...">
                      </figure>
                      -->


                            <!-- 2. squared, as background -->
                            <!--
                      <figure class="text-center rounded-top overflow-hidden bg-cover" style="background-image:url('image.jpg')">
                        <img class="w-100" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                      </figure>
                      -->

                            <!-- 3. with .bg-suprime (remove white bg and add a gray bg) -->
                            <figure class="text-center bg-gradient-radial-light rounded-top overflow-hidden">
                                <img class="img-fluid bg-suprime opacity-9"
                                    src="/images/unsplash/products/thumb_330/aidan-hancock-LIFe9y3-HKE-unsplash-min.jpg"
                                    alt="...">
                            </figure>

                            <span class="d-block fs-6 p-2">

                                <!-- rating -->
                                <span class="d-block smaller text-muted">
                                    <i class="rating-4 smaller text-warning"></i> (4.7)
                                </span>

                                <!-- title -->
                                <span class="d-block fw-medium">Lorem ipsum dolor sit amet</span>

                                <!-- price -->
                                <span class="d-block fw-medium">
                                    <del class="text-muted">$112.00</del>
                                    <span class="text-dark">$99.00</span>
                                </span>

                            </span>

                        </a>

                    </div>

                </div>
                <!-- /item -->















                <!-- item -->
                <div class="col-6 col-lg-3">

                    <div
                        class="bg-white shadow-md shadow-3d-hover transition-all-ease-250 transition-hover-top rounded show-hover-container p-2 h-100">

                        <!-- hover buttons : top -->
                        <div class="position-absolute top-0 end-0 text-align-end z-index-3 m-3 show-hover-item d-none d-sm-inline-block"
                            style="width:60px">

                            <!-- add to favourite : not logged in -->
                            <!--
                      <a href="#" class="js-ajax-modal btn bg-white shadow-lg btn-sm rounded-circle mb-2"
                          data-href="_ajax/modal_signin.html"
                          data-ajax-modal-size="modal-md"
                          data-ajax-modal-centered="false"
                          data-ajax-modal-backdrop="static">
                          <i class="fi fi-heart-slim"></i>
                      </a>
                      -->

                            <!-- add to favourite : logged in -->
                            <a href="#" class="btn-toggle btn bg-white shadow-lg btn-sm rounded-circle mb-2"
                                data-bs-toggle="tooltip" data-bs-original-title="add to favourite"
                                data-bs-placement="left"
                                data-toggle-ajax-url-on="/php/demo.ajax_request.php?product_id=1&amp;action=add_to_favourite"
                                data-toast-success-message="Added to your favourite!"
                                data-toast-success-position="bottom-center">
                                <i class="fi fi-heart-slim"></i>
                            </a>

                            <a href="#" class="btn bg-white shadow-lg btn-sm rounded-circle mb-2" title=""
                                data-bs-toggle="tooltip" data-bs-placement="left"
                                data-bs-original-title="add to compare">
                                <i class="fi fi-graph"></i>
                            </a>

                            <a href="#" class="btn btn-danger shadow-lg btn-sm rounded-circle mb-2" title=""
                                data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="add to cart">
                                <i class="fi fi-cart-1"></i>
                            </a>
                        </div>
                        <!-- /hover buttons : top -->


                        <a href="shop-page-product-2.html" class="d-block text-gray-800">

                            <!--
                        
                        3 ways to set the image

                      -->

                            <!-- 1. without .bg-suprime - use image as it is -->
                            <!--
                      <figure class="text-center rounded-top overflow-hidden">
                        <img class="img-fluid" src="image.jpg" alt="...">
                      </figure>
                      -->


                            <!-- 2. squared, as background -->
                            <!--
                      <figure class="text-center rounded-top overflow-hidden bg-cover" style="background-image:url('image.jpg')">
                        <img class="w-100" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                      </figure>
                      -->

                            <!-- 3. with .bg-suprime (remove white bg and add a gray bg) -->
                            <figure class="text-center bg-gradient-radial-light rounded-top overflow-hidden">
                                <img class="img-fluid bg-suprime opacity-9"
                                    src="/images/unsplash/products/thumb_330/aidan-hancock-EwKkZu18HPo-unsplash-min.jpg"
                                    alt="...">
                            </figure>

                            <span class="d-block fs-6 p-2">

                                <!-- rating -->
                                <span class="d-block smaller text-muted">
                                    <i class="rating-4 smaller text-warning"></i> (4.7)
                                </span>

                                <!-- title -->
                                <span class="d-block fw-medium">Lorem ipsum dolor sit amet</span>

                                <!-- price -->
                                <span class="d-block fw-medium">
                                    <del class="text-muted">$112.00</del>
                                    <span class="text-dark">$99.00</span>
                                </span>

                            </span>

                        </a>

                    </div>

                </div>
                <!-- /item -->


                <!-- item -->
                <div class="col-6 col-lg-3">

                    <div
                        class="bg-white shadow-md shadow-3d-hover transition-all-ease-250 transition-hover-top rounded show-hover-container p-2 h-100">

                        <!-- hover buttons : top -->
                        <div class="position-absolute top-0 end-0 text-align-end z-index-3 m-3 show-hover-item d-none d-sm-inline-block"
                            style="width:60px">

                            <!-- add to favourite : not logged in -->
                            <!--
                      <a href="#" class="js-ajax-modal btn bg-white shadow-lg btn-sm rounded-circle mb-2"
                          data-href="_ajax/modal_signin.html"
                          data-ajax-modal-size="modal-md"
                          data-ajax-modal-centered="false"
                          data-ajax-modal-backdrop="static">
                          <i class="fi fi-heart-slim"></i>
                      </a>
                      -->

                            <!-- add to favourite : logged in -->
                            <a href="#" class="btn-toggle btn bg-white shadow-lg btn-sm rounded-circle mb-2"
                                data-bs-toggle="tooltip" data-bs-original-title="add to favourite"
                                data-bs-placement="left"
                                data-toggle-ajax-url-on="/php/demo.ajax_request.php?product_id=1&amp;action=add_to_favourite"
                                data-toast-success-message="Added to your favourite!"
                                data-toast-success-position="bottom-center">
                                <i class="fi fi-heart-slim"></i>
                            </a>

                            <a href="#" class="btn bg-white shadow-lg btn-sm rounded-circle mb-2" title=""
                                data-bs-toggle="tooltip" data-bs-placement="left"
                                data-bs-original-title="add to compare">
                                <i class="fi fi-graph"></i>
                            </a>

                            <a href="#" class="btn btn-danger shadow-lg btn-sm rounded-circle mb-2" title=""
                                data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="add to cart">
                                <i class="fi fi-cart-1"></i>
                            </a>
                        </div>
                        <!-- /hover buttons : top -->


                        <a href="shop-page-product-2.html" class="d-block text-gray-800">

                            <!--
                        
                        3 ways to set the image

                      -->

                            <!-- 1. without .bg-suprime - use image as it is -->
                            <!--
                      <figure class="text-center rounded-top overflow-hidden">
                        <img class="img-fluid" src="image.jpg" alt="...">
                      </figure>
                      -->


                            <!-- 2. squared, as background -->
                            <!--
                      <figure class="text-center rounded-top overflow-hidden bg-cover" style="background-image:url('image.jpg')">
                        <img class="w-100" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                      </figure>
                      -->

                            <!-- 3. with .bg-suprime (remove white bg and add a gray bg) -->
                            <figure class="text-center bg-gradient-radial-light rounded-top overflow-hidden">
                                <img class="img-fluid bg-suprime opacity-9"
                                    src="/images/unsplash/products/thumb_330/aidan-hancock-UtzrcidfCsk-unsplash-min.jpg"
                                    alt="...">
                            </figure>

                            <span class="d-block fs-6 p-2">

                                <!-- rating -->
                                <span class="d-block smaller text-muted">
                                    <i class="rating-4 smaller text-warning"></i> (4.7)
                                </span>

                                <!-- title -->
                                <span class="d-block fw-medium">Lorem ipsum dolor sit amet</span>

                                <!-- price -->
                                <span class="d-block fw-medium">
                                    <del class="text-muted">$112.00</del>
                                    <span class="text-dark">$99.00</span>
                                </span>

                            </span>

                        </a>

                    </div>

                </div>
                <!-- /item -->


                <!-- item -->
                <div class="col-6 col-lg-3">

                    <div
                        class="bg-white shadow-md shadow-3d-hover transition-all-ease-250 transition-hover-top rounded show-hover-container p-2 h-100">

                        <!-- hover buttons : top -->
                        <div class="position-absolute top-0 end-0 text-align-end z-index-3 m-3 show-hover-item d-none d-sm-inline-block"
                            style="width:60px">

                            <!-- add to favourite : not logged in -->
                            <!--
                      <a href="#" class="js-ajax-modal btn bg-white shadow-lg btn-sm rounded-circle mb-2"
                          data-href="_ajax/modal_signin.html"
                          data-ajax-modal-size="modal-md"
                          data-ajax-modal-centered="false"
                          data-ajax-modal-backdrop="static">
                          <i class="fi fi-heart-slim"></i>
                      </a>
                      -->

                            <!-- add to favourite : logged in -->
                            <a href="#" class="btn-toggle btn bg-white shadow-lg btn-sm rounded-circle mb-2"
                                data-bs-toggle="tooltip" data-bs-original-title="add to favourite"
                                data-bs-placement="left"
                                data-toggle-ajax-url-on="/php/demo.ajax_request.php?product_id=1&amp;action=add_to_favourite"
                                data-toast-success-message="Added to your favourite!"
                                data-toast-success-position="bottom-center">
                                <i class="fi fi-heart-slim"></i>
                            </a>

                            <a href="#" class="btn bg-white shadow-lg btn-sm rounded-circle mb-2" title=""
                                data-bs-toggle="tooltip" data-bs-placement="left"
                                data-bs-original-title="add to compare">
                                <i class="fi fi-graph"></i>
                            </a>

                            <a href="#" class="btn btn-danger shadow-lg btn-sm rounded-circle mb-2" title=""
                                data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="add to cart">
                                <i class="fi fi-cart-1"></i>
                            </a>
                        </div>
                        <!-- /hover buttons : top -->


                        <a href="shop-page-product-2.html" class="d-block text-gray-800">

                            <!--
                        
                        3 ways to set the image

                      -->

                            <!-- 1. without .bg-suprime - use image as it is -->
                            <!--
                      <figure class="text-center rounded-top overflow-hidden">
                        <img class="img-fluid" src="image.jpg" alt="...">
                      </figure>
                      -->


                            <!-- 2. squared, as background -->
                            <!--
                      <figure class="text-center rounded-top overflow-hidden bg-cover" style="background-image:url('image.jpg')">
                        <img class="w-100" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                      </figure>
                      -->

                            <!-- 3. with .bg-suprime (remove white bg and add a gray bg) -->
                            <figure class="text-center bg-gradient-radial-light rounded-top overflow-hidden">
                                <img class="img-fluid bg-suprime opacity-9"
                                    src="/images/unsplash/products/thumb_330/harpal-singh-KuvEVL7lXYQ-unsplash.jpg"
                                    alt="...">
                            </figure>

                            <span class="d-block fs-6 p-2">

                                <!-- rating -->
                                <span class="d-block smaller text-muted">
                                    <i class="rating-4 smaller text-warning"></i> (4.7)
                                </span>

                                <!-- title -->
                                <span class="d-block fw-medium">Lorem ipsum dolor sit amet</span>

                                <!-- price -->
                                <span class="d-block fw-medium">
                                    <del class="text-muted">$112.00</del>
                                    <span class="text-dark">$99.00</span>
                                </span>

                            </span>

                        </a>

                    </div>

                </div>
                <!-- /item -->


                <!-- item -->
                <div class="col-6 col-lg-3">

                    <div
                        class="bg-white shadow-md shadow-3d-hover transition-all-ease-250 transition-hover-top rounded show-hover-container p-2 h-100">

                        <!-- hover buttons : top -->
                        <div class="position-absolute top-0 end-0 text-align-end z-index-3 m-3 show-hover-item d-none d-sm-inline-block"
                            style="width:60px">

                            <!-- add to favourite : not logged in -->
                            <!--
                      <a href="#" class="js-ajax-modal btn bg-white shadow-lg btn-sm rounded-circle mb-2"
                          data-href="_ajax/modal_signin.html"
                          data-ajax-modal-size="modal-md"
                          data-ajax-modal-centered="false"
                          data-ajax-modal-backdrop="static">
                          <i class="fi fi-heart-slim"></i>
                      </a>
                      -->

                            <!-- add to favourite : logged in -->
                            <a href="#" class="btn-toggle btn bg-white shadow-lg btn-sm rounded-circle mb-2"
                                data-bs-toggle="tooltip" data-bs-original-title="add to favourite"
                                data-bs-placement="left"
                                data-toggle-ajax-url-on="/php/demo.ajax_request.php?product_id=1&amp;action=add_to_favourite"
                                data-toast-success-message="Added to your favourite!"
                                data-toast-success-position="bottom-center">
                                <i class="fi fi-heart-slim"></i>
                            </a>

                            <a href="#" class="btn bg-white shadow-lg btn-sm rounded-circle mb-2" title=""
                                data-bs-toggle="tooltip" data-bs-placement="left"
                                data-bs-original-title="add to compare">
                                <i class="fi fi-graph"></i>
                            </a>

                            <a href="#" class="btn btn-danger shadow-lg btn-sm rounded-circle mb-2" title=""
                                data-bs-toggle="tooltip" data-bs-placement="left" data-bs-original-title="add to cart">
                                <i class="fi fi-cart-1"></i>
                            </a>
                        </div>
                        <!-- /hover buttons : top -->


                        <a href="shop-page-product-2.html" class="d-block text-gray-800">

                            <!--
                        
                        3 ways to set the image

                      -->

                            <!-- 1. without .bg-suprime - use image as it is -->
                            <!--
                      <figure class="text-center rounded-top overflow-hidden">
                        <img class="img-fluid" src="image.jpg" alt="...">
                      </figure>
                      -->


                            <!-- 2. squared, as background -->
                            <!--
                      <figure class="text-center rounded-top overflow-hidden bg-cover" style="background-image:url('image.jpg')">
                        <img class="w-100" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                      </figure>
                      -->

                            <!-- 3. with .bg-suprime (remove white bg and add a gray bg) -->
                            <figure class="text-center bg-gradient-radial-light rounded-top overflow-hidden">
                                <img class="img-fluid bg-suprime opacity-9"
                                    src="/images/unsplash/products/thumb_330/harpal-singh-SBLT7JohtCo-unsplash.jpg"
                                    alt="...">
                            </figure>

                            <span class="d-block fs-6 p-2">

                                <!-- rating -->
                                <span class="d-block smaller text-muted">
                                    <i class="rating-4 smaller text-warning"></i> (4.7)
                                </span>

                                <!-- title -->
                                <span class="d-block fw-medium">Lorem ipsum dolor sit amet</span>

                                <!-- price -->
                                <span class="d-block fw-medium">
                                    <del class="text-muted">$112.00</del>
                                    <span class="text-dark">$99.00</span>
                                </span>

                            </span>

                        </a>

                    </div>

                </div>
                <!-- /item -->

            </div>
            <!-- /product list -->

        </div>
    </div>
    <!-- /OFFER BLOCK -->





    <!-- SUBSCRIBE -->
    <div class="bg-light py-5 py-lg-4">
        <div class="container">

            <div class="row g-4 align-items-center">

                <div class="col-10 mx-auto col-lg-8 text-center-md text-center-xs">
                    <h3 class="m-0">Our best deals in <strong>your inbox!</strong></h3>
                    <p class="m-0">Never miss a good deal, get 'em all by subscribing to our newsletter!</p>
                </div>

                <div class="col-10 mx-auto col-lg-4">

                    <form novalidate="" method="post" action="#subscribe_url"
                        class="bs-validate py-3 mt-1 input-group-over input-group-pill">

                        <input required="" class="form-control form-control-lg fw-light text-center-md text-center-xs"
                            name="subscriber_email" type="email" value="" placeholder="email address..."
                            aria-label="email address...">

                        <button aria-label="subscribe" type="submit" class="btn bg-transparent shadow-none">
                            <i class="fi fi-send fs-4"></i>
                        </button>

                    </form>

                </div>

            </div>

        </div>
    </div>
    <!-- /SUBSCRIBE -->




    <!-- BRANDS -->
    <div class="section">
        <div class="container">

            <div class="mb-7 text-center px-3">
                <h2 class="h1 text-center-xs fw-normal">
                    Explore our <strong>top brands</strong>
                </h2>

                <p class="lead max-w-600 mx-auto">
                    Search your favourites by brand, everything one click away
                </p>
            </div>

            <!-- BRANDS : GRID : LAZYLOAD -->
            <div class="bg-white shadow-3d rounded overflow-hidden rounded">
                <div class="bg-white overflow-hidden"><!-- negative classes - hide bordered edges -->

                    <div class="row row-grid mt-n1 mb--n1">

                        <div class="col-6 col-md-5th d-flex align-items-center text-center">
                            <a href="#" class="w-100">
                                <img style="max-height:60px;max-width:180px;" class="mx-3 my-5 lazy"
                                    data-src="/svg/brands/adidas.svg"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    alt="...">
                            </a>
                        </div>

                        <div class="col-6 col-md-5th d-flex align-items-center text-center">
                            <a href="#" class="w-100">
                                <img style="max-height:60px;max-width:180px;" class="mx-3 my-5 lazy"
                                    data-src="/svg/brands/xing.svg"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    alt="...">
                            </a>
                        </div>

                        <div class="col-6 col-md-5th d-flex align-items-center text-center">
                            <a href="#" class="w-100">
                                <img style="max-height:60px;max-width:180px;" class="mx-3 my-5 lazy"
                                    data-src="/svg/brands/chanel.svg"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    alt="...">
                            </a>
                        </div>

                        <div class="col-6 col-md-5th d-flex align-items-center text-center">
                            <a href="#" class="w-100">
                                <img style="max-height:60px;max-width:180px;" class="mx-3 my-5 lazy"
                                    data-src="/svg/brands/jordan.svg"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    alt="...">
                            </a>
                        </div>

                        <div class="col-6 col-md-5th d-flex align-items-center text-center">
                            <a href="#" class="w-100">
                                <img style="max-height:60px;max-width:180px;" class="mx-3 my-5 lazy"
                                    data-src="/svg/brands/levis.svg"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    alt="...">
                            </a>
                        </div>

                        <div class="col-6 col-md-5th d-flex align-items-center text-center">
                            <a href="#" class="w-100">
                                <img style="max-height:60px;max-width:180px;" class="mx-3 my-5 lazy"
                                    data-src="/svg/brands/lacoste.svg"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    alt="...">
                            </a>
                        </div>

                        <div class="col-6 col-md-5th d-flex align-items-center text-center">
                            <a href="#" class="w-100">
                                <img style="max-height:60px;max-width:180px;" class="mx-3 my-5 lazy"
                                    data-src="/svg/brands/hm.svg"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    alt="...">
                            </a>
                        </div>

                        <div class="col-6 col-md-5th d-flex align-items-center text-center">
                            <a href="#" class="w-100">
                                <img style="max-height:60px;max-width:180px;" class="mx-3 my-5 lazy"
                                    data-src="/svg/brands/american-apparel.svg"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    alt="...">
                            </a>
                        </div>

                        <div class="col-6 col-md-5th d-flex align-items-center text-center">
                            <a href="#" class="w-100">
                                <img style="max-height:60px;max-width:180px;" class="mx-3 my-5 lazy"
                                    data-src="/svg/brands/nike-4.svg"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    alt="...">
                            </a>
                        </div>

                        <div class="col-6 col-md-5th d-flex align-items-center text-center">
                            <a href="#" class="w-100">
                                <img style="max-height:60px;max-width:180px;" class="mx-3 my-5 lazy"
                                    data-src="/svg/brands/bike.svg"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    alt="...">
                            </a>
                        </div>

                    </div>

                </div>
            </div>
            <!-- BRANDS : GRID : LAZYLOAD -->


            <div class="text-center pt-5">

                <!-- view all button -->
                <a href="#" class="btn btn-sm btn-dark">
                    all brands
                    <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                        class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                        </path>
                    </svg>
                </a>

            </div>

        </div>
    </div>
    <!-- /BRANDS -->





    <!-- INFO BOX -->
    <div class="bg-light">
        <div class="container py-3">

            <div class="row g-4">

                <div class="col-12 col-sm-6 col-lg-3 d-flex py-2 py-sm-3 py-lg-4">

                    <img width="60" height="60" class="lazy" data-src="/svg/ecommerce/money_bag.svg"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                    <div class="ps-3">
                        <h3 class="fs-5 mb-1">Money Back</h3>
                        <p class="m-0">Love it! Use it! Reuse it!</p>
                    </div>

                </div>

                <div class="col-12 col-sm-6 col-lg-3 d-flex py-2 py-sm-3 py-lg-4">

                    <img width="60" height="60" class="lazy"
                        data-src="/svg/ecommerce/free-delivery-truck.svg"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                    <div class="ps-3">
                        <h3 class="fs-5 mb-1">Free Shipping</h3>
                        <p class="m-0">Shipping is on us</p>
                    </div>

                </div>

                <div class="col-12 col-sm-6 col-lg-3 d-flex py-2 py-sm-3 py-lg-4">

                    <img width="60" height="60" class="lazy"
                        data-src="/svg/ecommerce/24-hours-phone-service.svg"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                    <div class="ps-3">
                        <h3 class="fs-5 mb-1">Free Support</h3>
                        <p class="m-0">24/24 available</p>
                    </div>

                </div>

                <div class="col-12 col-sm-6 col-lg-3 d-flex py-2 py-sm-3 py-lg-4">

                    <!-- link example -->
                    <a href="#" class="text-dark text-decoration-none d-flex">

                        <img width="60" height="60" class="lazy"
                            data-src="/svg/ecommerce/handshake.svg"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            alt="...">
                        <div class="ps-3">
                            <h3 class="fs-5 mb-1">Best Deal</h3>
                            <p class="m-0">Quality guaranteed</p>
                        </div>

                    </a>

                </div>

            </div>

        </div>
    </div>
    <!-- /INFO BOX -->





@endsection
