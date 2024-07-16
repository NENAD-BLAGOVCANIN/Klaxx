@extends('account.base')

@section('title', 'Favourites')

@section('accountContent')

    <div class="card mb-4 d-none d-sm-block">
        <div class="card-body px-4 py-5">

            <div class="row col-border">

                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="text-center">
                        <i class="fi fi-heart-empty fs-1 text-primary"></i>
                        <h2 class="small my-3">
                            ADD TO FAVOURITES
                        </h2>
                        <p class="small">
                            Do you love a product? You can add any product to your favourite list with one click!
                        </p>
                    </div>
                </div>


                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="text-center">
                        <i class="fi fi-cart-3 fs-1 text-primary"></i>
                        <h2 class="small my-3">
                            PURCHASE ANY TIME
                        </h2>
                        <p class="small">
                            Purchase your favourites at any time, never forget your favourite products!
                        </p>
                    </div>
                </div>


                <div class="col-12 col-sm-4 col-md-4 col-lg-4">
                    <div class="text-center">
                        <i class="fi fi-smart-devices fs-1 text-primary"></i>
                        <h2 class="small my-3">
                            ALL FAVOURITES IN ONE PLACE
                        </h2>
                        <p class="small">
                            Desktop, tablet or mobile! You can access your favourite products any time, from everywhere!
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- /banner -->


    <!-- item -->
    <div class="card p-3 shadow-xs shadow-md-hover mb-3 rounded bg-white">

        <div class="row col-border">

            <!-- image -->
            <div class="col-5 col-sm-3 col-md-3 col-lg-2 text-center">
                <a class="text-decoration-none">
                    <img class="img-fluid bg-suprime"
                        src="/images/unsplash/products/thumb_330/imani-clovis-LxVxPA1LOVM-unsplash-min.jpg"
                        alt="...">
                </a>
            </div>

            <!-- detail -->
            <div class="col-7 col-sm-5 col-md-4 col-lg-6 bordered-start">

                <a class="fs-6 link-normal fw-medium" href="shop-page-product-2.html">
                    Product title here
                </a>

                <div class="mb-3 clearfix">
                    <i class="rating-5 text-warning fs-6 float-start mt-1"></i>
                    <span class="text-muted small">6 reviews</span>
                </div>

                <p class="fw-medium mb-0">
                    <del class="text-muted">$189.95</del> $158.95
                </p>

            </div>

            <div class="col-12 d-block d-sm-none mt-3"><!-- mobile spacer --></div>

            <!-- buttons -->
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-align-end text-align-center-xs border-0">

                <button type="submit" class="btn btn-sm btn-primary fs-6 w-100-xs d-block-xs">
                    Add to cart
                </button>

                <div class="clearfix mt-2">
                    <a href="#" data-href="#?action=delete&amp;item_id=1" data-ajax-confirm-mode="regular"
                        data-ajax-confirm-size="modal-md" data-ajax-confirm-centered="false"
                        data-ajax-confirm-title="Please Confirm"
                        data-ajax-confirm-body="Are you sure? Remove from favourites?"
                        data-ajax-confirm-btn-yes-class="btn-sm btn-danger" data-ajax-confirm-btn-yes-text="Yes, Remove"
                        data-ajax-confirm-btn-yes-icon="fi fi-check" data-ajax-confirm-btn-no-class="btn-sm btn-light"
                        data-ajax-confirm-btn-no-text="Cancel" data-ajax-confirm-btn-no-icon="fi fi-close"
                        data-ajax-confirm-callback-function=""
                        class="js-ajax-confirm btn btn-sm btn-light d-block-xs fw-normal fs-6 w-100-xs d-block-xs">
                        Remove
                    </a>

                </div>

            </div>

        </div>

    </div>
    <!-- /item -->


    <!-- item -->
    <div class="card p-3 shadow-xs shadow-md-hover mb-3 rounded bg-white">

        <div class="row col-border">

            <!-- image -->
            <div class="col-5 col-sm-3 col-md-3 col-lg-2 text-center">
                <a class="text-decoration-none">
                    <img class="img-fluid bg-suprime"
                        src="/images/unsplash/products/thumb_330/aidan-hancock-UtzrcidfCsk-unsplash-min.jpg"
                        alt="...">
                </a>
            </div>

            <!-- detail -->
            <div class="col-7 col-sm-5 col-md-4 col-lg-6 bordered-start">

                <a class="link-normal fw-medium" href="shop-page-product-2.html">
                    Product title here
                </a>

                <div class="mb-3 clearfix">
                    <i class="rating-0 text-warning fs-6 float-start mt-1"></i>
                    <span class="text-muted small">0 reviews</span>
                </div>

                <p class="fw-medium mb-0">
                    <del class="text-muted">$189.95</del> $158.95
                </p>

            </div>

            <div class="col-12 d-block d-sm-none mt-3"><!-- mobile spacer --></div>

            <!-- buttons -->
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-align-end text-align-center-xs border-0">

                <button type="submit" class="btn btn-sm btn-primary fs-6 w-100-xs d-block-xs">
                    Add to cart
                </button>

                <div class="clearfix mt-2">
                    <a href="#" data-href="#?action=delete&amp;item_id=1" data-ajax-confirm-mode="regular"
                        data-ajax-confirm-size="modal-md" data-ajax-confirm-centered="false"
                        data-ajax-confirm-title="Please Confirm"
                        data-ajax-confirm-body="Are you sure? Remove from favourites?"
                        data-ajax-confirm-btn-yes-class="btn-sm btn-danger" data-ajax-confirm-btn-yes-text="Yes, Remove"
                        data-ajax-confirm-btn-yes-icon="fi fi-check" data-ajax-confirm-btn-no-class="btn-sm btn-light"
                        data-ajax-confirm-btn-no-text="Cancel" data-ajax-confirm-btn-no-icon="fi fi-close"
                        data-ajax-confirm-callback-function=""
                        class="js-ajax-confirm btn btn-sm btn-light d-block-xs fw-normal fs-6 w-100-xs d-block-xs">
                        Remove
                    </a>
                </div>

            </div>

        </div>

    </div>
    <!-- /item -->


    <!-- item -->
    <div class="card p-3 shadow-xs shadow-md-hover mb-3 rounded bg-white">

        <div class="row col-border">

            <!-- image -->
            <div class="col-5 col-sm-3 col-md-3 col-lg-2 text-center">
                <a class="text-decoration-none">
                    <img class="img-fluid bg-suprime"
                        src="/images/unsplash/products/thumb_330/hardik-sharma-CrPAvN29Nhs-unsplash-min.jpg"
                        alt="...">
                </a>
            </div>

            <!-- detail -->
            <div class="col-7 col-sm-5 col-md-4 col-lg-6 bordered-start">

                <a class="link-normal fw-medium" href="shop-page-product-2.html">
                    Product title here
                </a>

                <div class="mb-3 clearfix">
                    <i class="rating-4 text-warning fs-6 float-start mt-1"></i>
                    <span class="text-muted small">3 reviews</span>
                </div>

                <p class="fw-medium mb-0">
                    <del class="text-muted">$189.95</del> $158.95
                </p>

            </div>

            <div class="col-12 d-block d-sm-none mt-3"><!-- mobile spacer --></div>

            <!-- buttons -->
            <div class="col-12 col-sm-4 col-md-4 col-lg-4 text-align-end text-align-center-xs border-0">

                <button type="submit" class="btn btn-sm btn-primary fs-6 w-100-xs d-block-xs">
                    Add to cart
                </button>

                <div class="clearfix mt-2">
                    <a href="#" data-href="#?action=delete&amp;item_id=1" data-ajax-confirm-mode="regular"
                        data-ajax-confirm-size="modal-md" data-ajax-confirm-centered="false"
                        data-ajax-confirm-title="Please Confirm"
                        data-ajax-confirm-body="Are you sure? Remove from favourites?"
                        data-ajax-confirm-btn-yes-class="btn-sm btn-danger" data-ajax-confirm-btn-yes-text="Yes, Remove"
                        data-ajax-confirm-btn-yes-icon="fi fi-check" data-ajax-confirm-btn-no-class="btn-sm btn-light"
                        data-ajax-confirm-btn-no-text="Cancel" data-ajax-confirm-btn-no-icon="fi fi-close"
                        data-ajax-confirm-callback-function=""
                        class="js-ajax-confirm btn btn-sm btn-light d-block-xs fw-normal fs-6 w-100-xs d-block-xs">
                        Remove
                    </a>
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

            <li class="page-item active">
                <a class="page-link" href="#">1 <span class="visually-hidden">(current)</span></a>
            </li>

            <li class="page-item" aria-current="page">
                <a class="page-link" href="#">2</a>
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


@endsection
