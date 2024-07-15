@extends('account.base')

@section('title', 'Orders')

@section('accountContent')

    <!-- additional filters -->
    <div class="card mb-3">
        <div class="card-body">

            <div class="dropdown">
                <a id="dropdownMenuFilter" href="#" class="text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>All orders</span>
                    <svg class="mx-1" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>

                <ul class="dropdown-menu shadow-lg rounded-xl" aria-labelledby="dropdownMenuFilter">
                    <li><a class="dropdown-item active" href="#">All orders</a></li>
                    <li><a class="dropdown-item" href="#">Last 3 months</a></li>
                    <li><a class="dropdown-item" href="#">Last 6 months</a></li>
                    <li><a class="dropdown-item" href="#">Last 12 months</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- /additional filters -->


    <!-- item -->
    <a href="account-order-detail.html" class="card mb-3 link-normal">
        <div class="card-body p-lg-4">
            <div class="row">

                <div class="col">
                    <h5 class="fw-bold">Order no. 20211199</h5>
                    <p class="mb-0 text-dark small">Date: 27 Nov 2022, 01:24 | Total: $365.00</p>
                </div>

                <div class="col-12 border-top border-light my-2 d-lg-none"><!-- mobile divider --></div>

                <div class="col-lg-4 text-lg-end text-dark">
                    <span class="d-block fw-medium text-info">Pending</span>
                    <span class="d-block small">credit card</span>
                </div>

            </div>
        </div>
    </a>


    <!-- item -->
    <a href="account-order-detail.html" class="card mb-3 link-normal">
        <div class="card-body p-lg-4">
            <div class="row">

                <div class="col">
                    <h5 class="fw-bold">Order no. 20211112</h5>
                    <p class="mb-0 text-dark small">Date: 25 Nov 2022, 01:24 | Total: $276.31</p>
                </div>

                <div class="col-12 border-top border-light my-2 d-lg-none"><!-- mobile divider --></div>

                <div class="col-lg-4 text-lg-end text-dark">
                    <span class="d-block fw-medium text-success">Completed</span>
                    <span class="d-block small">credit card</span>
                </div>

            </div>
        </div>
    </a>


    <!-- item -->
    <a href="account-order-detail.html" class="card mb-3 link-normal">
        <div class="card-body p-lg-4">
            <div class="row">

                <div class="col">
                    <h5 class="fw-bold">Order no. 20211100</h5>
                    <p class="mb-0 text-dark small">Date: 12 Nov 2022, 01:24 | Total: $113.99</p>
                </div>

                <div class="col-12 border-top border-light my-2 d-lg-none"><!-- mobile divider --></div>

                <div class="col-lg-4 text-lg-end text-dark">
                    <span class="d-block fw-medium text-danger">Canceled</span>
                    <span class="d-block small">unpaid</span>
                </div>

            </div>
        </div>
    </a>


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
