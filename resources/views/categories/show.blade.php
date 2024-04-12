@extends('layouts.app')

@section('title', 'Category')

@section('content')


<div class="section">
    <div class="container">

        <div class="row">

            <div class="col-12 col-lg-9 order-2">

                <div class="shadow-xs bg-white mb-5 p-3 rounded clearfix">

                    <label class="form-switch form-switch-pill form-switch-danger mb-0">
                        <input type="checkbox" name="filter[hot_deals]" value="1">
                        <i data-on="ON" data-off="OFF"></i>
                        Hot Deals
                    </label>

                    <div class="float-end small position-relative mt-1">
                        Sort by: &nbsp; <a href="#" class="text-danger text-decoration-none" data-bs-toggle="dropdown" aria-expanded="false">
                            Best Match &nbsp; 
                            <i class="fi fi-arrow-down-slim smaller"></i>
                        </a>

                        <ul class="dropdown-menu border-0 mt-3 rounded fs-6">
                            <li class="dropdown-item active"><a href="#" class="text-muted small py-2 d-block">Best Match</a></li>
                            <li class="dropdown-item"><a href="#" class="text-muted py-2 d-block small">Latest Updated</a></li>
                            <li class="dropdown-item"><a href="#" class="text-muted py-2 d-block small">Price: Low to High</a></li>
                            <li class="dropdown-item"><a href="#" class="text-muted py-2 d-block small">Price: High to Low</a></li>
                        </ul>
                    </div>

                    <hr>

                    <h1 class="h5 mb-0">
                        40,381 total results
                    </h1>

                </div>


                <div class="mb-5">

                    <ul class="list-inline">
                        <li class="list-inline-item"><a href="#" class="text-danger text-decoration-none px-2">All</a></li>
                        <li class="list-inline-item"><a href="#" class="text-muted text-decoration-none px-2">Private</a></li>
                        <li class="list-inline-item"><a href="#" class="text-muted text-decoration-none px-2">Dealer</a></li>
                    </ul>

                </div>




                <!-- item -->
                <div class="shadow-xs rounded mb-4 p-3">

                    <div class="row g-0">

                        <div class="col-6 col-md-3 p--0">

                            <figure class="overflow-hidden text-center clearfix d-block m-0 position-relative">
                                <a href="niche.classifieds-item.html" class="text-decoration-none">
                                    <img class="img-fluid lazy" data-src="/images/unsplash/products/barrett-ward-cOJgO4Zzs-w-unsplash-min.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                                </a>
                            </figure>

                            <!-- desktop : compare+save -->
                            <div class="clearfix pt-2 hidden-md-down">

                                <label class="form-checkbox form-checkbox-danger m-0">
                                    <input type="checkbox" name="checkbox_p">
                                    <i></i> Compare
                                </label>

                                <a href="#" class="btn btn-sm m-0 p-0 text-muted">
                                    <i class="fi fi-heart-slim float-start fs-6"></i>
                                    <span class="d-inline-block">Save</span>
                                </a>

                            </div>

                        </div>

                        <div class="col-6 col-md-3 order-xs-2 order-md-3 order-lg-3 p--0">

                            <span class="btn btn-sm w-100 bg-primary text-white text-center mb-2 fs-6 d-none d-lg-block">
                                <i class="fi fi-star"></i> 
                                Featured
                            </span>

                            <ul class="bg-light h-100-xs p-3 list-unstyled rounded mb-2 fs-6 text-muted">
                                <li class="small">
                                    <i class="fi fi-check float-start"></i> good condition
                                </li>
                                <li class="small">
                                    <i class="fi fi-check float-start"></i> refund
                                </li>
                                <li class="small">
                                    <i class="fi fi-check float-start"></i> lorem
                                </li>
                                <li class="small">
                                    <i class="fi fi-close float-start"></i> ipsum
                                </li>
                            </ul>

                            <a href="#" class="btn btn-sm w-100 btn-warning fs-6 m-0 d-none d-lg-block">
                                <i class="fi fi-phone"></i>
                                Contact Seller
                            </a>

                        </div>


                        <div class="col-12 mt-3 d-block d-sm-none"><!-- mobile spacer --></div>

                        <div class="col-12 col-md-6 order-xs-3 order-md-2 order-lg-2 p-0">

                            <div class="p-0 p-lg-3">

                                <h2 class="fs-5">
                                    <a href="niche.classifieds-item.html" class="text-danger">
                                        Lorem ipsum dolor sit amet adipiscium
                                    </a>
                                </h2>

                                <p class="m-0">

                                    <span class="d-block fs-6">
                                        Merc c180 avantgarde new model 2015. unregistered. japan. local ap holder. white ...
                                    </span>

                                    <span class="d-block fs-5 mt-3 text-dark">
                                        $158.95
                                    </span>

                                </p>


                                <!-- mobile : compare+save -->
                                <div class="clearfix d-block d-sm-none">
                                    
                                    <hr>

                                    <label class="form-checkbox form-checkbox-danger">
                                        <input type="checkbox" name="checkbox_p">
                                        <i></i> Compare
                                    </label>

                                    <a href="#" class="btn btn-sm m-0 p-0 text-muted">
                                        <i class="fi fi-heart-slim float--start fs-4"></i>
                                        <span class="d-inline-block">Save</span>
                                    </a>
                    
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- /item -->




                <!-- item -->
                <div class="shadow-xs rounded mb-4 p-3">

                    <div class="row g-0">

                        <div class="col-6 col-md-3 p--0">

                            <figure class="overflow-hidden text-center clearfix d-block m-0 position-relative">
                                <a href="niche.classifieds-item.html" class="text-decoration-none">
                                    <img class="img-fluid lazy" data-src="/images/unsplash/products/thumb_330/aidan-hancock-EwKkZu18HPo-unsplash-min.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                                </a>
                            </figure>

                            <!-- desktop : compare+save -->
                            <div class="clearfix pt-2 hidden-md-down">

                                <label class="form-checkbox form-checkbox-danger m-0">
                                    <input type="checkbox" name="checkbox_p">
                                    <i></i> Compare
                                </label>

                                <a href="#" class="btn btn-sm m-0 p-0 text-muted">
                                    <i class="fi fi-heart-slim float-start fs-6"></i>
                                    <span class="d-inline-block">Save</span>
                                </a>

                            </div>

                        </div>

                        <div class="col-6 col-md-3 order-xs-2 order-md-3 order-lg-3 p--0">

                            <ul class="bg-light h-100-xs p-3 list-unstyled rounded mb-2 fs-6 text-muted">
                                <li class="small">
                                    <i class="fi fi-check float-start"></i> good condition
                                </li>
                                <li class="small">
                                    <i class="fi fi-check float-start"></i> refund
                                </li>
                                <li class="small">
                                    <i class="fi fi-check float-start"></i> lorem
                                </li>
                                <li class="small">
                                    <i class="fi fi-close float-start"></i> ipsum
                                </li>
                            </ul>

                            <a href="#" class="btn btn-sm w-100 btn-warning fs-6 m-0 d-none d-lg-block">
                                <i class="fi fi-phone"></i>
                                Contact Seller
                            </a>

                        </div>


                        <div class="col-12 mt-3 d-block d-sm-none"><!-- mobile spacer --></div>

                        <div class="col-12 col-md-6 order-xs-3 order-md-2 order-lg-2 p-0">

                            <div class="p-0 p-lg-3">

                                <h2 class="fs-5">
                                    <a href="niche.classifieds-item.html" class="text-danger">
                                        Lorem ipsum dolor sit amet adipiscium
                                    </a>
                                </h2>

                                <p class="m-0">

                                    <span class="d-block fs-6">
                                        Merc c180 avantgarde new model 2015. unregistered. japan. local ap holder. white ...
                                    </span>

                                    <span class="d-block fs-5 mt-3 text-dark">
                                        $158.95
                                    </span>

                                </p>


                                <!-- mobile : compare+save -->
                                <div class="clearfix d-block d-sm-none">
                                    
                                    <hr>

                                    <label class="form-checkbox form-checkbox-danger">
                                        <input type="checkbox" name="checkbox_p">
                                        <i></i> Compare
                                    </label>

                                    <a href="#" class="btn btn-sm m-0 p-0 text-muted">
                                        <i class="fi fi-heart-slim float--start fs-4"></i>
                                        <span class="d-inline-block">Save</span>
                                    </a>
                    
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- /item -->




                <!-- item -->
                <div class="shadow-xs rounded mb-4 p-3">

                    <div class="row g-0">

                        <div class="col-6 col-md-3 p--0">

                            <figure class="overflow-hidden text-center clearfix d-block m-0 position-relative">
                                <a href="niche.classifieds-item.html" class="text-decoration-none">
                                    <img class="img-fluid lazy" data-src="/images/unsplash/products/thumb_330/aidan-hancock-UtzrcidfCsk-unsplash-min.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                                </a>
                            </figure>

                            <!-- desktop : compare+save -->
                            <div class="clearfix pt-2 hidden-md-down">

                                <label class="form-checkbox form-checkbox-danger m-0">
                                    <input type="checkbox" name="checkbox_p">
                                    <i></i> Compare
                                </label>

                                <a href="#" class="btn btn-sm m-0 p-0 text-muted">
                                    <i class="fi fi-heart-slim float-start fs-6"></i>
                                    <span class="d-inline-block">Save</span>
                                </a>

                            </div>

                        </div>

                        <div class="col-6 col-md-3 order-xs-2 order-md-3 order-lg-3 p--0">

                            <ul class="bg-light h-100-xs p-3 list-unstyled rounded mb-2 fs-6 text-muted">
                                <li class="small">
                                    <i class="fi fi-check float-start"></i> good condition
                                </li>
                                <li class="small">
                                    <i class="fi fi-check float-start"></i> refund
                                </li>
                                <li class="small">
                                    <i class="fi fi-check float-start"></i> lorem
                                </li>
                                <li class="small">
                                    <i class="fi fi-close float-start"></i> ipsum
                                </li>
                            </ul>

                            <a href="#" class="btn btn-sm w-100 btn-warning fs-6 m-0 d-none d-lg-block">
                                <i class="fi fi-phone"></i>
                                Contact Seller
                            </a>

                        </div>


                        <div class="col-12 mt-3 d-block d-sm-none"><!-- mobile spacer --></div>

                        <div class="col-12 col-md-6 order-xs-3 order-md-2 order-lg-2 p-0">

                            <div class="p-0 p-lg-3">

                                <h2 class="fs-5">
                                    <a href="niche.classifieds-item.html" class="text-danger">
                                        Lorem ipsum dolor sit amet adipiscium
                                    </a>
                                </h2>

                                <p class="m-0">

                                    <span class="d-block fs-6">
                                        Merc c180 avantgarde new model 2015. unregistered. japan. local ap holder. white ...
                                    </span>

                                    <span class="d-block fs-5 mt-3 text-dark">
                                        $158.95
                                    </span>

                                </p>


                                <!-- mobile : compare+save -->
                                <div class="clearfix d-block d-sm-none">
                                    
                                    <hr>

                                    <label class="form-checkbox form-checkbox-danger">
                                        <input type="checkbox" name="checkbox_p">
                                        <i></i> Compare
                                    </label>

                                    <a href="#" class="btn btn-sm m-0 p-0 text-muted">
                                        <i class="fi fi-heart-slim float--start fs-4"></i>
                                        <span class="d-inline-block">Save</span>
                                    </a>
                    
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- /item -->




                <!-- item -->
                <div class="shadow-xs rounded mb-4 p-3">

                    <div class="row g-0">

                        <div class="col-6 col-md-3 p--0">

                            <figure class="overflow-hidden text-center clearfix d-block m-0 position-relative">
                                <a href="niche.classifieds-item.html" class="text-decoration-none">
                                    <img class="img-fluid lazy" data-src="/images/unsplash/products/thumb_330/barrett-ward-EImqPfdl9y8-unsplash-min.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                                </a>
                            </figure>

                            <!-- desktop : compare+save -->
                            <div class="clearfix pt-2 hidden-md-down">

                                <label class="form-checkbox form-checkbox-danger m-0">
                                    <input type="checkbox" name="checkbox_p">
                                    <i></i> Compare
                                </label>

                                <a href="#" class="btn btn-sm m-0 p-0 text-muted">
                                    <i class="fi fi-heart-slim float-start fs-6"></i>
                                    <span class="d-inline-block">Save</span>
                                </a>

                            </div>

                        </div>

                        <div class="col-6 col-md-3 order-xs-2 order-md-3 order-lg-3 p--0">

                            <ul class="bg-light h-100-xs p-3 list-unstyled rounded mb-2 fs-6 text-muted">
                                <li class="small">
                                    <i class="fi fi-check float-start"></i> good condition
                                </li>
                                <li class="small">
                                    <i class="fi fi-check float-start"></i> refund
                                </li>
                                <li class="small">
                                    <i class="fi fi-check float-start"></i> lorem
                                </li>
                                <li class="small">
                                    <i class="fi fi-close float-start"></i> ipsum
                                </li>
                            </ul>

                            <a href="#" class="btn btn-sm w-100 btn-warning fs-6 m-0 d-none d-lg-block">
                                <i class="fi fi-phone"></i>
                                Contact Seller
                            </a>

                        </div>


                        <div class="col-12 mt-3 d-block d-sm-none"><!-- mobile spacer --></div>

                        <div class="col-12 col-md-6 order-xs-3 order-md-2 order-lg-2 p-0">

                            <div class="p-0 p-lg-3">

                                <h2 class="fs-5">
                                    <a href="niche.classifieds-item.html" class="text-danger">
                                        Lorem ipsum dolor sit amet adipiscium
                                    </a>
                                </h2>

                                <p class="m-0">

                                    <span class="d-block fs-6">
                                        Merc c180 avantgarde new model 2015. unregistered. japan. local ap holder. white ...
                                    </span>

                                    <span class="d-block fs-5 mt-3 text-dark">
                                        $158.95
                                    </span>

                                </p>


                                <!-- mobile : compare+save -->
                                <div class="clearfix d-block d-sm-none">
                                    
                                    <hr>

                                    <label class="form-checkbox form-checkbox-danger">
                                        <input type="checkbox" name="checkbox_p">
                                        <i></i> Compare
                                    </label>

                                    <a href="#" class="btn btn-sm m-0 p-0 text-muted">
                                        <i class="fi fi-heart-slim float--start fs-4"></i>
                                        <span class="d-inline-block">Save</span>
                                    </a>
                    
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- /item -->




                <!-- item -->
                <div class="shadow-xs rounded mb-4 p-3">

                    <div class="row g-0">

                        <div class="col-6 col-md-3 p--0">

                            <figure class="overflow-hidden text-center clearfix d-block m-0 position-relative">
                                <a href="niche.classifieds-item.html" class="text-decoration-none">
                                    <img class="img-fluid lazy" data-src="/images/unsplash/products/thumb_330/barrett-ward-BsxlZgY4jMM-unsplash-min.jpg" src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="...">
                                </a>
                            </figure>

                            <!-- desktop : compare+save -->
                            <div class="clearfix pt-2 hidden-md-down">

                                <label class="form-checkbox form-checkbox-danger m-0">
                                    <input type="checkbox" name="checkbox_p">
                                    <i></i> Compare
                                </label>

                                <a href="#" class="btn btn-sm m-0 p-0 text-muted">
                                    <i class="fi fi-heart-slim float-start fs-6"></i>
                                    <span class="d-inline-block">Save</span>
                                </a>

                            </div>

                        </div>

                        <div class="col-6 col-md-3 order-xs-2 order-md-3 order-lg-3 p--0">

                            <ul class="bg-light h-100-xs p-3 list-unstyled rounded mb-2 fs-6 text-muted">
                                <li class="small">
                                    <i class="fi fi-check float-start"></i> good condition
                                </li>
                                <li class="small">
                                    <i class="fi fi-check float-start"></i> refund
                                </li>
                                <li class="small">
                                    <i class="fi fi-check float-start"></i> lorem
                                </li>
                                <li class="small">
                                    <i class="fi fi-close float-start"></i> ipsum
                                </li>
                            </ul>

                            <a href="#" class="btn btn-sm w-100 btn-warning fs-6 m-0 d-none d-lg-block">
                                <i class="fi fi-phone"></i>
                                Contact Seller
                            </a>

                        </div>


                        <div class="col-12 mt-3 d-block d-sm-none"><!-- mobile spacer --></div>

                        <div class="col-12 col-md-6 order-xs-3 order-md-2 order-lg-2 p-0">

                            <div class="p-0 p-lg-3">

                                <h2 class="fs-5">
                                    <a href="niche.classifieds-item.html" class="text-danger">
                                        Lorem ipsum dolor sit amet adipiscium
                                    </a>
                                </h2>

                                <p class="m-0">

                                    <span class="d-block fs-6">
                                        Merc c180 avantgarde new model 2015. unregistered. japan. local ap holder. white ...
                                    </span>

                                    <span class="d-block fs-5 mt-3 text-dark">
                                        $158.95
                                    </span>

                                </p>


                                <!-- mobile : compare+save -->
                                <div class="clearfix d-block d-sm-none">
                                    
                                    <hr>

                                    <label class="form-checkbox form-checkbox-danger">
                                        <input type="checkbox" name="checkbox_p">
                                        <i></i> Compare
                                    </label>

                                    <a href="#" class="btn btn-sm m-0 p-0 text-muted">
                                        <i class="fi fi-heart-slim float--start fs-4"></i>
                                        <span class="d-inline-block">Save</span>
                                    </a>
                    
                                </div>

                            </div>

                        </div>

                    </div>

                </div>
                <!-- /item -->



                <!-- pagination -->
                <nav aria-label="pagination" class="mt-5">
                    <ul class="pagination pagination-pill justify-content-end justify-content-center justify-content-md-end">

                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        
                        <li class="page-item">
                            <a class="page-link" href="#">1</a>
                        </li>
                        
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">2 <span class="visually-hidden">(current)</span></a>
                        </li>
                        
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>

                    </ul>
                </nav>
                <!-- pagination -->

            </div>


            <div class="col-12 col-lg-3 mb-5 order-1">


                <!-- CATEGORIES -->
                <nav class="nav-deep nav-deep-light mb-4 shadow-xs shadow-none-md shadow-none-xs px-4 pb-3 p-0-md p-0-xs rounded">

                    <!-- mobile trigger : categories -->
                    <button class="clearfix btn btn-toggle btn-sm w-100 text-align-left shadow-md border rounded mb-1 d-block d-lg-none" data-bs-target="#nav_responsive" data-toggle-container-class="d-none d-sm-block bg-white shadow-md border animate-fadein rounded p-3">
                        <span class="group-icon px-2 py-2 float-start">
                            <i class="fi fi-bars-2"></i>
                            <i class="fi fi-close"></i>
                        </span>

                        <span class="h5 py-2 m-0 float-start">
                            Categories
                        </span>
                    </button>

                    <!-- desktop only -->
                    <h5 class="py-3 m-0 d-none d-lg-block">
                        Categories
                    </h5>


                    <!-- navbar : navigation -->
                    <ul id="nav_responsive" class="nav flex-column d-none d-lg-block">

                        <li class="nav-item">
                            <a class="nav-link px-0" href="#">

                                <span class="badge bg-warning float-end p-1 smaller mt-1">
                                    New in stock
                                </span>

                                <i class="fi fi-arrow-end m-0 smaller"></i> 
                                <span class="px-2 d-inline-block">
                                    Computers
                                </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link px-0" href="#">
                                <i class="fi fi-arrow-end m-0 smaller"></i> 
                                <span class="px-2 d-inline-block">
                                    Electronics
                                </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link px-0" href="#">
                                <i class="fi fi-arrow-end m-0 smaller"></i> 
                                <span class="px-2 d-inline-block">
                                    Women's Fashion
                                </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link px-0" href="#">
                                <i class="fi fi-arrow-end m-0 smaller"></i> 
                                <span class="px-2 d-inline-block">
                                    Home &amp; Kitchen
                                </span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link px-0" href="#">
                                <span class="group-icon">
                                    <i class="fi fi-arrow-end"></i>
                                    <i class="fi fi-arrow-down"></i>
                                </span>

                                <span class="px-2 d-inline-block">
                                    Multi level
                                </span>
                            </a>

                            <ul class="nav flex-column px-3">
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        Option 1
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        Option 2
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">
                                        Option 3
                                    </a>
                                </li>
                            </ul>

                        </li>

                    </ul>

                </nav>
                <!-- /CATEGORIES -->


                <!-- Suggestions -->
                <div class="card rounded border-0 shadow-xs d-block mb-4 p-3">
                    <h6 class="mb-4">Suggestions</h6>

                    <ul class="list-unstyled mb-0">
                        <li class="p-1">
                            <i class="fi fi-arrow-end smaller me-2"></i>
                            <a href="documentation/" class="link-muted border-0">
                                Smarty Documentation
                            </a>
                        </li>

                        <li class="p-1">
                            <i class="fi fi-arrow-end smaller me-2"></i>
                            <a href="about-us-2.html" class="link-muted border-0">
                                About Us page
                            </a>
                        </li>

                        <li class="p-1">
                            <i class="fi fi-arrow-end smaller me-2"></i>
                            <a href="services-1.html" class="link-muted border-0">
                                Services Page
                            </a>
                        </li>

                        <li class="p-1">
                            <i class="fi fi-arrow-end smaller me-2"></i>
                            <a href="contact-3.html" class="link-muted border-0">
                                Contact Us page
                            </a>
                        </li>

                        <li class="p-1">
                            <i class="fi fi-arrow-end smaller me-2"></i>
                            <a href="account-sign-1.html" class="link-muted border-0">
                                Account page
                            </a>
                        </li>
                    </ul>

                </div>
                <!-- /Suggestions -->


            </div>

        </div>

    </div>
</div>

@include('components.subscribe-to-newsletter')

@endsection
