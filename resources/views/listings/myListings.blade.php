@extends('layouts.app')

@section('title', 'My Listings')

@section('content')


    <div class="container py-5">
        <h2>My Listings</h2>

        <a href="/listings/create" class="btn btn-primary">Create new listing</a>


        <div class="row">
            @foreach ($listings as $listing)

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
                                        {{ $listing->title }}
                                    </a>
                                </h2>

                                <p class="m-0">

                                    <span class="d-block fs-6">
                                        {{ $listing->description }}
                                    </span>

                                    <span class="d-block fs-5 mt-3 text-dark">
                                        ${{ $listing->price }}
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

            @endforeach
        </div>


    </div>


@endsection
