@extends('layouts.app')

@section('title', 'View Listing')

@section('content')

    <div class="section">
        <div class="container">

            <div class="row">

                <div class="col mb-5">

                    <span class="h4 float-end text-danger">
                        ${{ $listing->price }}
                    </span>

                    <h1 class="h4 fw-bold mb-5">
                        {{ $listing->title }}

                        <small class="d-block smaller fw-medium text-muted">
                            Updated on: {{ $listing->updated_at->format('j F Y') }}
                        </small>
                    </h1>

                    <figure class="mb-5">
                        @if ($listing->images->isNotEmpty())
                            <img class="img-fluid" src="{{ $listing->images[0]->image_path }}" alt="...">
                        @else
                            <img class="img-fluid lazy" src="/images/various/no-image.jpg" alt="No Image">
                        @endif
                    </figure>

                    <h2 class="h5">Seller's Comments</h2>
                    <p>
                        {{ $listing->description }}
                    </p>

                    <div class="bg-light p-3 fs-6">
                        We highly recommend buyers to get the precise details from sellers directly before making any
                        decision. We don't guarantee the correctness of data, please refer to our disclaimer policy.
                    </div>

                </div>

                <div class="col-12 col-lg-4 mb-5">

                    <h2 class="h6 text-primary">
                        Seller Information
                    </h2>

                    <div class="clearfix">
                        <i class="fi fi-users float-start"></i>
                        Private Seller
                    </div>

                    <hr>

                    <a href="#" class="btn btn-lg w-100 btn-warning">
                        Contact Seller
                    </a>

                    <!-- specifications -->
                    <div class="mt-5">

                        <h3 class="h5">
                            Specifications
                        </h3>

                        <!-- specs list -->
                        <ul class="list-unstyled mb-0">

                            @foreach ($listingAttributes as $listingAttribute)
                                <li class="list-item clearfix border-bottom py-2">
                                    <span class="float-end">{{ $listingAttribute->value }}</span>
                                    <span class="text-muted">
                                        <span class="d-inline-block px-2">{{ $listingAttribute->attribute->name }}</span>
                                    </span>
                                </li>
                            @endforeach

                        </ul>
                        <!-- /specs list -->

                        <!-- expand specs list -->
                        <div id="specs_expand" class="collapse">
                            <ul class="list-unstyled mb-0">

                                <li class="list-item clearfix border-bottom py-2">
                                    <span class="float-end">24/24</span>
                                    <span class="text-muted">
                                        <i class="fi fi-24 fs-5"></i>
                                        <span class="d-inline-block px-2">Online</span>
                                    </span>
                                </li>


                                <li class="list-item clearfix border-bottom py-2">
                                    <span class="float-end">Yes</span>
                                    <span class="text-muted">
                                        <i class="fi fi-dashboard fs-5"></i>
                                        <span class="d-inline-block px-2">High Speed</span>
                                    </span>
                                </li>

                                <li class="list-item clearfix border-bottom py-2">
                                    <span class="float-end">Yes</span>
                                    <span class="text-muted">
                                        <i class="fi fi-lightning fs-5"></i>
                                        <span class="d-inline-block px-2">Protection</span>
                                    </span>
                                </li>

                            </ul>
                        </div>


                        <!-- button : expand specs -->
                        <div class="mt-3">
                            <a href="#specs_expand" class="btn-toggle text-decoration-none text-danger fs-6"
                                data-bs-toggle="collapse">
                                <span class="group-icon">
                                    <i class="fi fi-plus"></i>
                                    <i class="fi fi-minus"></i>
                                </span>

                                <span class="group-icon px-2">
                                    <span>view more specs</span>
                                    <span>view less specs</span>
                                </span>
                            </a>
                        </div>
                        <!-- /expand specs list -->

                    </div>
                    <!-- /specifications -->

                </div>

            </div>

        </div>
    </div>


    <div class="section border-top">
        <div class="container">

            <h2 class="mb-5">Recommended</h2>

            <div class="row">

                <!-- item -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <a href="niche.classifieds-item.html"
                        class="d-block p-2 shadow-xs border-0 text-decoration-none shadow-md-hover transition-hover-top transition-all-ease-250">

                        <!-- image -->
                        <div class="text-center bg-light rounded ratio ratio-4x3 bg-cover lazy"
                            data-background-image="/images/unsplash/products/thumb_330/aidan-hancock-LIFe9y3-HKE-unsplash-min.jpg">
                        </div>

                        <div class="card-body">

                            <h3 class="fs-6 fw-medium text-truncate text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            </h3>

                            <p class="m-0 text-danger">
                                $159.99
                            </p>

                        </div>

                    </a>
                </div>


                <!-- item -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <a href="niche.classifieds-item.html"
                        class="d-block p-2 shadow-xs border-0 text-decoration-none shadow-md-hover transition-hover-top transition-all-ease-250">

                        <!-- badge -->
                        <div class="badge bg-success-soft position-absolute top-0 end-0 m-2">NEW</div>

                        <!-- image -->
                        <div class="text-center bg-light rounded ratio ratio-4x3 bg-cover lazy"
                            data-background-image="/images/unsplash/products/thumb_330/imani-clovis-LxVxPA1LOVM-unsplash-min.jpg">
                        </div>

                        <div class="card-body">

                            <h3 class="fs-6 fw-medium text-truncate text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            </h3>

                            <p class="m-0 text-danger">
                                $159.99
                            </p>

                        </div>

                    </a>
                </div>


                <!-- item -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <a href="niche.classifieds-item.html"
                        class="d-block p-2 shadow-xs border-0 text-decoration-none shadow-md-hover transition-hover-top transition-all-ease-250">

                        <!-- image -->
                        <div class="text-center bg-light rounded ratio ratio-4x3 bg-cover lazy"
                            data-background-image="/images/unsplash/products/thumb_330/barrett-ward-fYYUgvHYgpU-unsplash-min.jpg">
                        </div>

                        <div class="card-body">

                            <h3 class="fs-6 fw-medium text-truncate text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            </h3>

                            <p class="m-0 text-danger">
                                $159.99
                            </p>

                        </div>

                    </a>
                </div>


                <!-- item -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <a href="niche.classifieds-item.html"
                        class="d-block p-2 shadow-xs border-0 text-decoration-none shadow-md-hover transition-hover-top transition-all-ease-250">

                        <!-- image -->
                        <div class="text-center bg-light rounded ratio ratio-4x3 bg-cover lazy"
                            data-background-image="/images/unsplash/products/thumb_330/hardik-sharma-CrPAvN29Nhs-unsplash-min.jpg">
                        </div>

                        <div class="card-body">

                            <h3 class="fs-6 fw-medium text-truncate text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            </h3>

                            <p class="m-0 text-danger">
                                $159.99
                            </p>

                        </div>

                    </a>
                </div>

            </div>

        </div>
    </div>

@endsection
