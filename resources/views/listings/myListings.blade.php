@extends('layouts.app')

@section('title', 'My Listings')

@section('content')


<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center pb-5">
        <h1 class="h4 fw-bold">My Listings
            <small class="d-block smaller fw-medium text-muted pt-2">
                Here you can manage listings published be this account.
            </small>
        </h1>

        <a href="/listings/create" class="btn btn-dark"><i class="fa fa-plus"></i> Create new listing</a>

    </div>

    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-link active" id="nav-active-tab" data-bs-toggle="tab" href="#nav-active" role="tab"
                aria-controls="nav-active" aria-selected="true">Active</a>
            <a class="nav-link" id="nav-pending-tab" data-bs-toggle="tab" href="#nav-pending" role="tab"
                aria-controls="nav-pending" aria-selected="false">Pending Approval</a>
            <a class="nav-link" id="nav-expired-tab" data-bs-toggle="tab" href="#nav-expired" role="tab"
                aria-controls="nav-expired" aria-selected="false">Expired</a>
            <a class="nav-link" id="nav-denied-tab" data-bs-toggle="tab" href="#nav-denied" role="tab"
                aria-controls="nav-denied" aria-selected="false">Denied</a>
            <a class="nav-link" id="nav-draft-tab" data-bs-toggle="tab" href="#nav-draft" role="tab"
                aria-controls="nav-draft" aria-selected="false">Draft</a>
        </div>
    </nav>
    <div class="tab-content mt-4" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-active" role="tabpanel" aria-labelledby="nav-active-tab">
            <div class="row">
                @forelse ($active_listings as $listing)
                <div class="shadow-xs rounded mb-4 p-3">

                    <div class="row g-0">

                        <div class="col-6 col-md-3 p--0">

                            <figure class="overflow-hidden text-center clearfix d-block m-0 position-relative">
                                <a href='/listings/view/{{ $listing->id }}' class="text-decoration-none">
                                    @if ($listing->images->isNotEmpty())
                                    <img class="img-fluid lazy" src="{{ $listing->images[0]->image_path }}" alt="...">
                                    @else
                                    <img class="img-fluid lazy" src="/images/various/no-image.jpg" alt="No Image">
                                    @endif
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

                            <span
                                class="btn btn-sm w-100 bg-primary text-white text-center mb-2 fs-6 d-none d-lg-block">
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


                        <div class="col-12 mt-3 d-block d-sm-none">
                            <!-- mobile spacer -->
                        </div>

                        <div class="col-12 col-md-6 order-xs-3 order-md-2 order-lg-2 p-0">

                            <div class="p-0 p-lg-3">

                                <h2 class="fs-5">
                                    <a href='/listings/view/{{ $listing->id }}' class="text-danger">
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
                @empty
                <div class="py-5">
                    <span class="text-muted text-center m-auto d-block py-5">😔 No active listings currently
                        yet!</span>
                </div>
                @endforelse

            </div>
        </div>
        <div class="tab-pane fade" id="nav-pending" role="tabpanel" aria-labelledby="nav-pending-tab">
            <div class="row">
                @forelse ($pending_listings as $listing)
                <div class="shadow-xs rounded mb-4 p-3">

                    <div class="row g-0">

                        <div class="col-6 col-md-3 p--0">

                            <figure class="overflow-hidden text-center clearfix d-block m-0 position-relative">
                                <a href='/listings/view/{{ $listing->id }}' class="text-decoration-none">
                                    @if ($listing->images->isNotEmpty())
                                    <img class="img-fluid lazy" src="{{ $listing->images[0]->image_path }}" alt="...">
                                    @else
                                    <img class="img-fluid lazy" src="/images/various/no-image.jpg" alt="No Image">
                                    @endif
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

                            <span
                                class="btn btn-sm w-100 bg-primary text-white text-center mb-2 fs-6 d-none d-lg-block">
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


                        <div class="col-12 mt-3 d-block d-sm-none">
                            <!-- mobile spacer -->
                        </div>

                        <div class="col-12 col-md-6 order-xs-3 order-md-2 order-lg-2 p-0">

                            <div class="p-0 p-lg-3">

                                <h2 class="fs-5">
                                    <a href='/listings/view/{{ $listing->id }}' class="text-danger">
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
                @empty
                <div class="py-5">
                    <span class="text-muted text-center m-auto d-block py-5">😔No pending listings currently
                        yet!</span>
                </div>
                @endforelse

            </div>
        </div>
        <div class="tab-pane fade" id="nav-expired" role="tabpanel" aria-labelledby="nav-expired-tab">
            <div class="row">
                @forelse ($expired_listings as $listing)
                <div class="shadow-xs rounded mb-4 p-3">

                    <div class="row g-0">

                        <div class="col-6 col-md-3 p--0">

                            <figure class="overflow-hidden text-center clearfix d-block m-0 position-relative">
                                <a href='/listings/view/{{ $listing->id }}' class="text-decoration-none">
                                    @if ($listing->images->isNotEmpty())
                                    <img class="img-fluid lazy" src="{{ $listing->images[0]->image_path }}" alt="...">
                                    @else
                                    <img class="img-fluid lazy" src="/images/various/no-image.jpg" alt="No Image">
                                    @endif
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

                            <span
                                class="btn btn-sm w-100 bg-primary text-white text-center mb-2 fs-6 d-none d-lg-block">
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


                        <div class="col-12 mt-3 d-block d-sm-none">
                            <!-- mobile spacer -->
                        </div>

                        <div class="col-12 col-md-6 order-xs-3 order-md-2 order-lg-2 p-0">

                            <div class="p-0 p-lg-3">

                                <h2 class="fs-5">
                                    <a href='/listings/view/{{ $listing->id }}' class="text-danger">
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
                @empty
                <div class="py-5">
                    <span class="text-muted text-center m-auto d-block py-5">No expired listings currently
                        yet!</span>
                </div>
                @endforelse

            </div>
        </div>
        <div class="tab-pane fade" id="nav-denied" role="tabpanel" aria-labelledby="nav-denied-tab">
            <div class="row">
                @forelse ($denied_listings as $listing)
                <div class="shadow-xs rounded mb-4 p-3">

                    <div class="row g-0">

                        <div class="col-6 col-md-3 p--0">

                            <figure class="overflow-hidden text-center clearfix d-block m-0 position-relative">
                                <a href='/listings/view/{{ $listing->id }}' class="text-decoration-none">
                                    @if ($listing->images->isNotEmpty())
                                    <img class="img-fluid lazy" src="{{ $listing->images[0]->image_path }}" alt="...">
                                    @else
                                    <img class="img-fluid lazy" src="/images/various/no-image.jpg" alt="No Image">
                                    @endif
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

                            <span
                                class="btn btn-sm w-100 bg-primary text-white text-center mb-2 fs-6 d-none d-lg-block">
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


                        <div class="col-12 mt-3 d-block d-sm-none">
                            <!-- mobile spacer -->
                        </div>

                        <div class="col-12 col-md-6 order-xs-3 order-md-2 order-lg-2 p-0">

                            <div class="p-0 p-lg-3">

                                <h2 class="fs-5">
                                    <a href='/listings/view/{{ $listing->id }}' class="text-danger">
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
                @empty
                <div class="py-5">
                    <span class="text-muted text-center m-auto d-block py-5">No denied listings currently
                        yet!</span>
                </div>
                @endforelse

            </div>
        </div>
        <div class="tab-pane fade" id="nav-draft" role="tabpanel" aria-labelledby="nav-draft-tab">
            <div class="row">
                @forelse ($draft_listings as $listing)
                <div class="shadow-xs rounded mb-4 p-3">

                    <div class="row g-0">

                        <div class="col-6 col-md-3 p--0">

                            <figure class="overflow-hidden text-center clearfix d-block m-0 position-relative">
                                <a href='/listings/view/{{ $listing->id }}' class="text-decoration-none">
                                    @if ($listing->images->isNotEmpty())
                                    <img class="img-fluid lazy" src="{{ $listing->images[0]->image_path }}" alt="...">
                                    @else
                                    <img class="img-fluid lazy" src="/images/various/no-image.jpg" alt="No Image">
                                    @endif
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

                            <span
                                class="btn btn-sm w-100 bg-primary text-white text-center mb-2 fs-6 d-none d-lg-block">
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


                        <div class="col-12 mt-3 d-block d-sm-none">
                            <!-- mobile spacer -->
                        </div>

                        <div class="col-12 col-md-6 order-xs-3 order-md-2 order-lg-2 p-0">

                            <div class="p-0 p-lg-3">

                                <h2 class="fs-5">
                                    <a href='/listings/view/{{ $listing->id }}' class="text-danger">
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
                @empty
                <div class="py-5">
                    <span class="text-muted text-center m-auto d-block py-5">No draft listings currently
                        yet!</span>
                </div>
                @endforelse

            </div>
        </div>
    </div>


</div>


@endsection