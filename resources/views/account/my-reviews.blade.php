@extends('account.base')

@section('title', 'My Reviews')

@section('accountContent')

    <!-- item -->
    <div class="card mb-3">
        <div class="card-body p-lg-4">

            <div class="row g-3 fw-medium mb-4">

                <div class="col">
                    <span class="d-block fw-bold">My review title</span>
                    <i class="rating-5 text-warning fs-6 float-start mt-1"><!-- stars --></i>
                </div>

                <div class="col-md-4 small text-md-end">
                    <span class="d-block text-muted">13 Aug 2022, 04:56</span>
                    <span class="d-block text-success">Pending approval</span>
                </div>

            </div>

            <!-- body -->
            <p class="mb-1">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>

            <hr class="bg-gray-300">

            <!-- item link -->
            <a href="shop-page-product-2.html" class="small text-decoration-none">
                Product title here
            </a>

        </div>
    </div>


    <!-- item -->
    <div class="card mb-3">
        <div class="card-body p-lg-4">

            <div class="row g-3 fw-medium mb-4">

                <div class="col">
                    <span class="d-block fw-bold">WTF is this?</span>
                    <i class="rating-1 text-warning fs-6 float-start mt-1"><!-- stars --></i>
                </div>

                <div class="col-md-4 small text-md-end">
                    <span class="d-block text-muted">13 Aug 2022, 04:56</span>
                    <span class="d-block text-danger">Rejected</span>
                </div>

            </div>

            <!-- body -->
            <p class="mb-1">
                Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>

            <hr class="bg-gray-300">

            <!-- item link -->
            <a href="shop-page-product-2.html" class="small text-decoration-none">
                Product title here
            </a>

        </div>
    </div>


    <!-- item -->
    <div class="card mb-3">
        <div class="card-body p-lg-4">

            <div class="row g-3 fw-medium mb-4">

                <div class="col">
                    <span class="d-block fw-bold">Good product but still has issues</span>
                    <i class="rating-3 text-warning fs-6 float-start mt-1"><!-- stars --></i>
                </div>

                <div class="col-md-4 small text-md-end">
                    <span class="d-block text-muted">13 Aug 2022, 04:56</span>
                    <span class="d-block text-muted">Approved</span>
                </div>

            </div>

            <!-- body -->
            <p class="mb-1">
                Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>

            <hr class="bg-gray-300">

            <!-- item link -->
            <a href="shop-page-product-2.html" class="small text-decoration-none">
                Product title here
            </a>

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
