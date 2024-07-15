@extends('account.base')

@section('title', 'Coupons')

@section('accountContent')

    <!-- additional filters -->
    <div class="card mb-3">
        <div class="card-body">

            <div class="dropdown">
                <a id="dropdownMenuFilter" href="#" class="text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>Available coupons</span>
                    <svg class="mx-1" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>

                <ul class="dropdown-menu shadow-lg rounded-xl" aria-labelledby="dropdownMenuFilter">
                    <li><a class="dropdown-item" href="#">All coupons</a></li>
                    <li><a class="dropdown-item active" href="#">Available coupons</a></li>
                    <li><a class="dropdown-item" href="#">Used coupons</a></li>
                    <li><a class="dropdown-item" href="#">Expired coupons</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- /additional filters -->


    <!-- item -->
    <div class="card mb-3">
        <div class="card-body">

            <div class="row g-3">

                <div class="col">

                    <p>
                        CODE: <span class="text-uppercase user-select-all fw-bold">202112rwt05o</span>
                    </p>

                    <div class="bg-gray-200 p-2 d-xl-inline-block">
                        <p class="smaller fw-bold text-success mb-1">Reward points conversion</p>
                        <span class="d-block smaller fw-medium">Recv. Date: 11 Dec 2021, 02:51</span>
                        <span class="d-block smaller fw-medium">Expire date: &ndash;</span>
                        <span class="d-block smaller fw-medium">Used date: &ndash;</span>
                    </div>

                </div>

                <div class="col-12 col-md-6 col-xl-7">

                    <div class="row">

                        <!-- discount, amount -->
                        <div class="col text-md-end">Discount: $20.00</div>

                        <!-- use button -->
                        <div class="col text-end">

                            <!-- <span class="text-muted">Used</span> -->
                            <button type="submit" class="btn btn-primary px-3 py-2 d-inline-flex align-items-center">
                                <small>Use coupon</small>
                            </button>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>


    <!-- item -->
    <div class="card mb-3">
        <div class="card-body">

            <div class="row g-3">

                <div class="col">

                    <p>
                        CODE: <span class="text-uppercase user-select-all fw-bold">GIFT2022</span>
                    </p>

                    <div class="bg-gray-200 p-2 d-xl-inline-block">
                        <p class="smaller fw-bold text-success mb-1">Given by Smarty</p>
                        <span class="d-block smaller fw-medium">Recv. Date: 11 Dec 2021, 02:51</span>
                        <span class="d-block smaller fw-medium">Expire date: &ndash;</span>
                        <span class="d-block smaller fw-medium">Used date: 11 Dec 2022, 02:51</span>
                    </div>

                </div>

                <div class="col-12 col-md-6 col-xl-7">

                    <div class="row">

                        <!-- discount, amount -->
                        <div class="col text-md-end">Discount: $10.00</div>

                        <!-- use button -->
                        <div class="col text-end">

                            <span class="text-muted">Already used</span>
                            <!--
                              <button type="submit" class="btn btn-primary px-3 py-2">
                                <small>Use coupon</small>
                                <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z"></path>
                                </svg>
                              </button>
                            -->

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </div>


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
