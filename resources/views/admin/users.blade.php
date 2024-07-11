@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')


    @include('admin.components.sidebar')

    <!-- main -->
    <main id="middle" class="flex-fill mx-auto">


        <!-- PAGE TITLE -->
        <header>
            <h1 class="h4">Customer list</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb small">
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item"><a href="#">Users</a></li>
                    <li class="breadcrumb-item text-muted active" aria-current="page">Customer list</li>
                </ol>
            </nav>
        </header>


        <!-- overview -->
        <div class="row g-4 mb-4">
            <div class="col-lg-3">

                <div class="section p-4">
                    <h6 class="mb-0 text-muted">Registered Users</h6>
                    <div class="d-flex align-items-center">
                        <span class="w-100 fs-5 fw-bold mb-0">{{ $usersCount }}</span>
                        <span class="badge bg-soft-success">
                            <svg width="14px" height="14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"></polyline>
                            </svg>
                        </span>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">

                <div class="section p-4">
                    <h6 class="mb-0 text-muted">Active Users</h6>
                    <div class="d-flex align-items-center">
                        <span class="w-100">
                            <span class="fs-5 fw-bold">{{ $usersCount }}</span>
                            <small class="text-muted">/ {{ $usersCount }}</small>
                        </span>
                        <span class="badge bg-soft-success">
                            <svg width="14px" height="14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="23 6 13.5 15.5 8.5 10.5 1 18"></polyline>
                                <polyline points="17 6 23 6 23 12"></polyline>
                            </svg>
                            <span class="ms-2">68%</span>
                        </span>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">

                <div class="section p-4">
                    <h6 class="mb-0 text-muted">Returning</h6>
                    <div class="d-flex align-items-center">
                        <span class="w-100">
                            <span class="fs-5 fw-bold">0</span>
                            <small class="text-muted">/ 0</small>
                        </span>
                        <span class="badge bg-soft-danger">
                            <svg width="14px" height="14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <polyline points="23 18 13.5 8.5 8.5 13.5 1 6"></polyline>
                                <polyline points="17 18 23 18 23 12"></polyline>
                            </svg>
                            <span class="ms-2">24%</span>
                        </span>
                    </div>
                </div>

            </div>
            <div class="col-lg-3">

                <div class="section p-4">
                    <h6 class="mb-0 text-muted">Total Orders</h6>
                    <span class="fs-5 fw-bold">0</span>
                    <small class="text-muted">/ current month</small>
                </div>

            </div>
        </div>


        <!-- user list -->
        <div class="section p-0">
            <div class="card-header p-4">

                <div class="row g-3">

                    <!-- review filter -->
                    <div class="order-2 order-md-1 col">
                        <form class="position-relative d-flex align-items-center" method="get" action="#">

                            <!-- search icon -->
                            <svg class="z-index-1 position-absolute start-0 ms-3 text-primary" width="18px" height="18px"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <circle cx="11" cy="11" r="8"></circle>
                                <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                            </svg>

                            <div class="dropdown w-100">

                                <input type="text"
                                    class="form-control form-control-sm border-0 shadow-none ps-5 bg-gray-100"
                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" placeholder="Name / email">

                                <!--
                                              .dropdown-mega-sm
                                              .dropdown-mega-md
                                              .dropdown-mega-lg
                                              .dropdown-mega-xl
                                            -->
                                <div class="dropdown-menu dropdown-mega-sm shadow-lg p-4 mt-1">
                                    <h6 class="mb-4">Filter</h6>

                                    <div class="form-floating mb-3">
                                        <select class="form-select" id="filter-status" name="status"
                                            aria-label="Status">
                                            <option value="" selected="">Any</option>
                                            <option value="1">Active</option>
                                            <option value="0">Innactive</option>
                                            <option value="0">Banned</option>
                                        </select>
                                        <label for="filter-status">Status</label>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-check mb-2">
                                            <input class="form-check-input form-check-input-primary" type="checkbox"
                                                id="filter-returning" name="sale" value="1">
                                            <label class="form-check-label user-select-none"
                                                for="filter-returning">Returning</label>
                                        </div>

                                        <div class="form-check mb-2">
                                            <input class="form-check-input form-check-input-primary" type="checkbox"
                                                id="filter-abandoned" name="preorder" value="1">
                                            <label class="form-check-label user-select-none"
                                                for="filter-abandoned">Abandoned checkouts</label>
                                        </div>
                                    </div>

                                    <div class="d-flex justify-content-between mt-4">
                                        <button type="submit" class="btn btn-sm btn-primary">Apply filter</button>
                                        <a href="/product/product-list/"
                                            class="btn btn-sm btn-danger  float-end">Reset</a>
                                    </div>

                                </div>
                            </div>

                        </form>
                    </div>

                </div>

                <!-- active filters -->
                <ul class="list-inline mt-2 mb-0">
                    <li class="list-inline-item badge bg-primary me-1">
                        <a href="#!" class="text-white text-decoration-none d-flex align-items-center">
                            <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                            <span class="text-white ms-1">Filters:</span>
                        </a>
                    </li>
                    <li class="list-inline-item badge bg-light me-1">
                        <a href="#!" class="link-muted d-flex align-items-center">
                            <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                            <span class="text-muted ms-1">John Doe</span>
                        </a>
                    </li>
                    <li class="list-inline-item badge bg-light me-1">
                        <a href="#!" class="link-muted d-flex align-items-center">
                            <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                            <span class="text-muted ms-1">Active</span>
                        </a>
                    </li>
                    <li class="list-inline-item badge bg-light me-1">
                        <a href="#!" class="link-muted d-flex align-items-center">
                            <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg"
                                fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z">
                                </path>
                            </svg>
                            <span class="text-muted ms-1">Returning</span>
                        </a>
                    </li>
                </ul>

            </div>

            <div class="card-body pt-1">

                <!-- item list -->
                <div class="table-responsive-md">

                    <table class="table table-align-middle" role="grid" aria-describedby="mobile-page-info">
                        <thead>
                            <tr>
                                <th class="small text-muted">USER</th>
                                <th class="small text-muted" style="width:200px">
                                    <a href="#!" class="d-flex link-muted" title="order by inventory"
                                        aria-label="order by inventory">
                                        <span class="d-flex flex-column lh-1">
                                            <svg class="lh-1 text-primary" width="13px" height="13px"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 15l7-7 7 7"></path>
                                            </svg>

                                            <svg class="lh-1 mt-n1 text-muted" width="13px" height="13px"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </span>
                                        <span class="ms-2">REG. DATE</span>
                                    </a>
                                </th>
                                <th class="small text-muted" style="width:120px">
                                    <a href="#!" class="d-flex link-muted" title="order by inventory"
                                        aria-label="order by inventory">
                                        <span class="d-flex flex-column lh-1">
                                            <svg class="lh-1 text-primary" width="13px" height="13px"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 15l7-7 7 7"></path>
                                            </svg>

                                            <svg class="lh-1 mt-n1 text-muted" width="13px" height="13px"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </span>
                                        <span class="ms-2">ORDERS</span>
                                    </a>
                                </th>
                                <th class="small text-muted" style="width:150px">
                                    <a href="#!" class="d-flex link-muted" title="order by price"
                                        aria-label="order by inventory">
                                        <span class="d-flex flex-column lh-1">
                                            <svg class="lh-1 text-primary" width="13px" height="13px"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M5 15l7-7 7 7"></path>
                                            </svg>

                                            <svg class="lh-1 mt-n1 text-muted" width="13px" height="13px"
                                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </span>
                                        <span class="ms-2">STATUS</span>
                                    </a>
                                </th>
                                <th class="small text-muted" style="width:64px"><!-- options --></th>
                            </tr>
                        </thead>
                        <tbody id="checkall-list">

                            @foreach ($users as $user)
                                <tr>
                                    <td><!-- user -->
                                        <div class="d-flex align-items-center">
                                            <img class="avatar avatar-sm rounded-circle" src="{{ $user->avatar }}">
                                            </img>
                                            <div class="ms-3">
                                                <a href="#!" class="link-normal fw-medium">{{ $user->name }}</a>
                                                <small class="d-block">{{ $user->email }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td><!-- date -->
                                        <span class="d-block text-muted small">{{ $user->created_at }}</span>
                                    </td>
                                    <td class="text-center"><!-- orders -->
                                        0
                                    </td>
                                    <td class="text-success"><!-- status -->
                                        Active
                                    </td>
                                    <td class="dropstart text-end"><!-- options -->
                                        <a class="btn btn-sm btn-light btn-ghost btn-icon text-muted rounded-circle"
                                            href="#" role="button" data-bs-toggle="dropdown"
                                            aria-expanded="false">
                                            <span class="group-icon">
                                                <svg width="18px" height="18px" viewBox="0 0 16 16"
                                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z">
                                                    </path>
                                                </svg>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                                    <line x1="18" y1="6" x2="6" y2="18">
                                                    </line>
                                                    <line x1="6" y1="6" x2="18" y2="18">
                                                    </line>
                                                </svg>
                                            </span>
                                        </a>
                                        <ul class="dropdown-menu dropdown-menu-clean">
                                            <li class="small px-3 py-2 text-muted">Set user</li>
                                            <li>
                                                <a class="dropdown-item" href="#"
                                                    onclick="event.preventDefault(); document.getElementById('delete-form').submit();">
                                                    <svg class="text-danger" width="18px" height="18px"
                                                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor" stroke-width="2"
                                                        stroke-linecap="round" stroke-linejoin="round">
                                                        <polyline points="3 6 5 6 21 6"></polyline>
                                                        <path
                                                            d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                        </path>
                                                        <line x1="10" y1="11" x2="10"
                                                            y2="17"></line>
                                                        <line x1="14" y1="11" x2="14"
                                                            y2="17"></line>
                                                    </svg>
                                                    <span class="w-100">Delete</span>
                                                </a>
                                                <form id="delete-form" action="/admin/users/remove-user" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                                </form>
                                            </li>

                                            @if($user->role == 'customer')
                                            <li>
                                                <a class="dropdown-item" href="#"
                                                    onclick="event.preventDefault(); document.getElementById('admin-role-form').submit();">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                                        fill="currentColor" class="bi bi-person-check-fill"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                                                        <path
                                                            d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                    </svg>
                                                    <span class="w-100">Assign admin role</span>
                                                </a>
                                                <form id="admin-role-form" action="/admin/users/set-role" method="POST"
                                                    style="display: none;">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                                    <input type="hidden" name="role" value="admin">
                                                </form>
                                            </li>
                                            @else
                                            <li>
                                                <a class="dropdown-item" href="#"
                                                    onclick="event.preventDefault(); document.getElementById('customer-role-form').submit();">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px"
                                                        fill="currentColor" class="bi bi-person-check-fill"
                                                        viewBox="0 0 16 16">
                                                        <path fill-rule="evenodd"
                                                            d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0" />
                                                        <path
                                                            d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
                                                    </svg>
                                                    <span class="w-100">Assign customer role</span>
                                                </a>
                                                <form id="customer-role-form" action="/admin/users/set-role"
                                                    method="POST" style="display: none;">
                                                    @csrf
                                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
                                                    <input type="hidden" name="role" value="customer">
                                                </form>
                                            </li>
                                            @endif


                                        </ul>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>

                </div>

            </div>
        </div>


    </main>

@endsection
