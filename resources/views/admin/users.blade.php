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
                <span class="w-100 fs-5 fw-bold mb-0">3899</span>
                <span class="badge bg-soft-success">
                  <svg width="14px" height="14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                  <span class="fs-5 fw-bold">2912</span>
                  <small class="text-muted">/ 3899</small>
                </span>
                <span class="badge bg-soft-success">
                  <svg width="14px" height="14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
                  <span class="fs-5 fw-bold">612</span>
                  <small class="text-muted">/ 2912</small>
                </span>
                <span class="badge bg-soft-danger">
                  <svg width="14px" height="14px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
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
              <span class="fs-5 fw-bold">612</span>
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
                  <svg class="z-index-1 position-absolute start-0 ms-3 text-primary" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                  </svg>

                  <div class="dropdown w-100">
                    
                    <input type="text" class="form-control form-control-sm border-0 shadow-none ps-5 bg-gray-100" data-bs-toggle="dropdown" data-bs-auto-close="outside" placeholder="Name / email">

                    <!--
                      .dropdown-mega-sm
                      .dropdown-mega-md
                      .dropdown-mega-lg
                      .dropdown-mega-xl
                    -->
                    <div class="dropdown-menu dropdown-mega-sm shadow-lg p-4 mt-1">
                      <h6 class="mb-4">Filter</h6>

                      <div class="form-floating mb-3">
                        <select class="form-select" id="filter-status" name="status" aria-label="Status">
                          <option value="" selected="">Any</option>
                          <option value="1">Active</option>
                          <option value="0">Innactive</option>
                          <option value="0">Banned</option>
                        </select>
                        <label for="filter-status">Status</label>
                      </div>

                      <div class="mb-3">
                        <div class="form-check mb-2">
                          <input class="form-check-input form-check-input-primary" type="checkbox" id="filter-returning" name="sale" value="1">
                          <label class="form-check-label user-select-none" for="filter-returning">Returning</label>
                        </div>

                        <div class="form-check mb-2">
                          <input class="form-check-input form-check-input-primary" type="checkbox" id="filter-abandoned" name="preorder" value="1">
                          <label class="form-check-label user-select-none" for="filter-abandoned">Abandoned checkouts</label>
                        </div>
                      </div>

                      <div class="d-flex justify-content-between mt-4">
                        <button type="submit" class="btn btn-sm btn-primary">Apply filter</button>
                        <a href="/product/product-list/" class="btn btn-sm btn-danger  float-end">Reset</a>
                      </div>

                    </div>
                  </div>

                </form>
              </div>

              <!-- options -->
              <div class="order-1 order-md-2 col-md-auto">
                <a href="#!" class="w-100 btn btn-sm btn-primary">
                  <svg width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                  </svg>
                  <span>User</span>
                </a>
              </div>

            </div>

            <!-- active filters -->
            <ul class="list-inline mt-2 mb-0">
              <li class="list-inline-item badge bg-primary me-1">
                <a href="#!" class="text-white text-decoration-none d-flex align-items-center">
                  <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                  </svg>
                  <span class="text-white ms-1">Filters:</span>
                </a>
              </li>
              <li class="list-inline-item badge bg-light me-1">
                <a href="#!" class="link-muted d-flex align-items-center">
                  <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                  </svg>
                  <span class="text-muted ms-1">John Doe</span>
                </a>
              </li>
              <li class="list-inline-item badge bg-light me-1">
                <a href="#!" class="link-muted d-flex align-items-center">
                  <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                  </svg>
                  <span class="text-muted ms-1">Active</span>
                </a>
              </li>
              <li class="list-inline-item badge bg-light me-1">
                <a href="#!" class="link-muted d-flex align-items-center">
                  <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
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
                    <th style="width:46px">
                      <div class="form-check"><!-- check all -->
                        <input data-checkall-container="#checkall-list" class="form-check-input js-init-checkall" type="checkbox" value="1">
                      </div>
                    </th>
                    <th class="small text-muted">USER</th>
                    <th class="small text-muted" style="width:200px">
                      <a href="#!" class="d-flex link-muted" title="order by inventory" aria-label="order by inventory">
                        <span class="d-flex flex-column lh-1">
                          <svg class="lh-1 text-primary" width="13px" height="13px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                          </svg>

                          <svg class="lh-1 mt-n1 text-muted" width="13px" height="13px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                          </svg>
                        </span>
                        <span class="ms-2">REG. DATE</span>
                      </a>
                    </th>
                    <th class="small text-muted" style="width:120px">
                      <a href="#!" class="d-flex link-muted" title="order by inventory" aria-label="order by inventory">
                        <span class="d-flex flex-column lh-1">
                          <svg class="lh-1 text-primary" width="13px" height="13px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                          </svg>

                          <svg class="lh-1 mt-n1 text-muted" width="13px" height="13px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                          </svg>
                        </span>
                        <span class="ms-2">ORDERS</span>
                      </a>
                    </th>
                    <th class="small text-muted" style="width:150px">
                      <a href="#!" class="d-flex link-muted" title="order by price" aria-label="order by inventory">
                        <span class="d-flex flex-column lh-1">
                          <svg class="lh-1 text-primary" width="13px" height="13px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 15l7-7 7 7"></path>
                          </svg>

                          <svg class="lh-1 mt-n1 text-muted" width="13px" height="13px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                          </svg>
                        </span>
                        <span class="ms-2">STATUS</span>
                      </a>
                    </th>
                    <th class="small text-muted" style="width:64px"><!-- options --></th>
                  </tr>
                </thead>
                <tbody id="checkall-list">
                  
                  <!-- item -->
                  <tr>
                    <th><!-- check -->
                      <div class="form-check">
                        <input class="form-check-input form-check-input-primary" type="checkbox" value="">
                      </div>
                    </th>
                    <td><!-- user -->
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-sm rounded-circle" style="background-image:url(../html_frontend/demo.files/images/avatar/jessica_barden.jpg)"></div>
                        <div class="ms-3">
                          <a href="#!" class="link-normal fw-medium">Jessica Doe</a>
                          <small class="d-block">jessica.doe@gmail.com</small>
                        </div>
                      </div>
                    </td>
                    <td><!-- date -->
                      <span class="d-block text-muted small">Jan 01 2021, 20:38</span>
                      <span class="d-block text-muted small">26 days ago</span>
                    </td>
                    <td class="text-center"><!-- orders -->
                      3
                    </td>
                    <td class="text-success"><!-- status -->
                      Active
                    </td>
                    <td class="dropstart text-end"><!-- options -->
                      <a class="btn btn-sm btn-light btn-ghost btn-icon text-muted rounded-circle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="group-icon">
                          <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path></svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </span>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-clean">
                        <li class="small px-3 py-2 text-muted">Set user</li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span>Active</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <line x1="18" y1="6" x2="6" y2="18"></line>
                              <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                            <span>Innactive</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <line x1="18" y1="6" x2="6" y2="18"></line>
                              <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                            <span>Banned</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-danger" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                              <line x1="10" y1="11" x2="10" y2="17"></line>
                              <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg>
                            <span class="w-100">Delete</span>
                          </a>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <!-- end item -->

                  <!-- item -->
                  <tr>
                    <th><!-- check -->
                      <div class="form-check">
                        <input class="form-check-input form-check-input-primary" type="checkbox" value="">
                      </div>
                    </th>
                    <td><!-- user -->
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-sm rounded-circle bg-gray-200">PD</div>
                        <div class="ms-3">
                          <a href="#!" class="link-normal fw-medium">Peter Doe</a>
                          <small class="d-block">peter.doe@gmail.com</small>
                        </div>
                      </div>
                    </td>
                    <td><!-- date -->
                      <span class="d-block text-muted small">Jan 01 2021, 20:38</span>
                      <span class="d-block text-muted small">26 days ago</span>
                    </td>
                    <td class="text-center"><!-- orders -->
                      6
                    </td>
                    <td class="text-info"><!-- status -->
                      Innactive
                    </td>
                    <td class="dropstart text-end"><!-- options -->
                      <a class="btn btn-sm btn-light btn-ghost btn-icon text-muted rounded-circle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="group-icon">
                          <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path></svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </span>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-clean">
                        <li class="small px-3 py-2 text-muted">Set user</li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span>Active</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <line x1="18" y1="6" x2="6" y2="18"></line>
                              <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                            <span>Innactive</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <line x1="18" y1="6" x2="6" y2="18"></line>
                              <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                            <span>Banned</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-danger" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                              <line x1="10" y1="11" x2="10" y2="17"></line>
                              <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg>
                            <span class="w-100">Delete</span>
                          </a>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <!-- end item -->

                  <!-- item -->
                  <tr>
                    <th><!-- check -->
                      <div class="form-check">
                        <input class="form-check-input form-check-input-primary" type="checkbox" value="">
                      </div>
                    </th>
                    <td><!-- user -->
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-sm rounded-circle bg-gray-200">BB</div>
                        <div class="ms-3">
                          <a href="#!" class="link-normal fw-medium">Brian Bates</a>
                          <small class="d-block">brian@gmail.com</small>
                        </div>
                      </div>
                    </td>
                    <td><!-- date -->
                      <span class="d-block text-muted small">Jan 01 2021, 20:38</span>
                      <span class="d-block text-muted small">26 days ago</span>
                    </td>
                    <td class="text-center"><!-- orders -->
                      7
                    </td>
                    <td class="text-danger"><!-- status -->
                      Banned
                    </td>
                    <td class="dropstart text-end"><!-- options -->
                      <a class="btn btn-sm btn-light btn-ghost btn-icon text-muted rounded-circle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="group-icon">
                          <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path></svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </span>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-clean">
                        <li class="small px-3 py-2 text-muted">Set user</li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span>Active</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <line x1="18" y1="6" x2="6" y2="18"></line>
                              <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                            <span>Innactive</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <line x1="18" y1="6" x2="6" y2="18"></line>
                              <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                            <span>Banned</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-danger" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                              <line x1="10" y1="11" x2="10" y2="17"></line>
                              <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg>
                            <span class="w-100">Delete</span>
                          </a>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <!-- end item -->

                  <!-- item -->
                  <tr>
                    <th><!-- check -->
                      <div class="form-check">
                        <input class="form-check-input form-check-input-primary" type="checkbox" value="">
                      </div>
                    </th>
                    <td><!-- user -->
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-sm rounded-circle" style="background-image:url(../html_frontend/demo.files/images/avatar/jadson_dantas.jpg)"></div>
                        <div class="ms-3">
                          <a href="#!" class="link-normal fw-medium">Mark Colbert</a>
                          <small class="d-block">mark@gmail.com</small>
                        </div>
                      </div>
                    </td>
                    <td><!-- date -->
                      <span class="d-block text-muted small">Jan 01 2021, 20:38</span>
                      <span class="d-block text-muted small">26 days ago</span>
                    </td>
                    <td class="text-center"><!-- orders -->
                      8
                    </td>
                    <td class="text-success"><!-- status -->
                      Active
                    </td>
                    <td class="dropstart text-end"><!-- options -->
                      <a class="btn btn-sm btn-light btn-ghost btn-icon text-muted rounded-circle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="group-icon">
                          <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path></svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </span>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-clean">
                        <li class="small px-3 py-2 text-muted">Set user</li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span>Active</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <line x1="18" y1="6" x2="6" y2="18"></line>
                              <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                            <span>Innactive</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <line x1="18" y1="6" x2="6" y2="18"></line>
                              <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                            <span>Banned</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-danger" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                              <line x1="10" y1="11" x2="10" y2="17"></line>
                              <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg>
                            <span class="w-100">Delete</span>
                          </a>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <!-- end item -->

                  <!-- item -->
                  <tr>
                    <th><!-- check -->
                      <div class="form-check">
                        <input class="form-check-input form-check-input-primary" type="checkbox" value="">
                      </div>
                    </th>
                    <td><!-- user -->
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-sm rounded-circle" style="background-image:url(../html_frontend/demo.files/images/avatar/peter_cole.jpg)"></div>
                        <div class="ms-3">
                          <a href="#!" class="link-normal fw-medium">Tomislava Nalini</a>
                          <small class="d-block">tnai@gmail.com</small>
                        </div>
                      </div>
                    </td>
                    <td><!-- date -->
                      <span class="d-block text-muted small">Jan 01 2021, 20:38</span>
                      <span class="d-block text-muted small">26 days ago</span>
                    </td>
                    <td class="text-center"><!-- orders -->
                      0
                    </td>
                    <td class="text-success"><!-- status -->
                      Active
                    </td>
                    <td class="dropstart text-end"><!-- options -->
                      <a class="btn btn-sm btn-light btn-ghost btn-icon text-muted rounded-circle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="group-icon">
                          <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path></svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </span>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-clean">
                        <li class="small px-3 py-2 text-muted">Set user</li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span>Active</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <line x1="18" y1="6" x2="6" y2="18"></line>
                              <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                            <span>Innactive</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <line x1="18" y1="6" x2="6" y2="18"></line>
                              <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                            <span>Banned</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-danger" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                              <line x1="10" y1="11" x2="10" y2="17"></line>
                              <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg>
                            <span class="w-100">Delete</span>
                          </a>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <!-- end item -->

                  <!-- item -->
                  <tr>
                    <th><!-- check -->
                      <div class="form-check">
                        <input class="form-check-input form-check-input-primary" type="checkbox" value="">
                      </div>
                    </th>
                    <td><!-- user -->
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-sm rounded-circle bg-warning-soft">SS</div>
                        <div class="ms-3">
                          <a href="#!" class="link-normal fw-medium">Silja Sheona</a>
                          <small class="d-block">sheona@gmail.com</small>
                        </div>
                      </div>
                    </td>
                    <td><!-- date -->
                      <span class="d-block text-muted small">Jan 01 2021, 20:38</span>
                      <span class="d-block text-muted small">26 days ago</span>
                    </td>
                    <td class="text-center"><!-- orders -->
                      1
                    </td>
                    <td class="text-success"><!-- status -->
                      Active
                    </td>
                    <td class="dropstart text-end"><!-- options -->
                      <a class="btn btn-sm btn-light btn-ghost btn-icon text-muted rounded-circle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="group-icon">
                          <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path></svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </span>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-clean">
                        <li class="small px-3 py-2 text-muted">Set user</li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span>Active</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <line x1="18" y1="6" x2="6" y2="18"></line>
                              <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                            <span>Innactive</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <line x1="18" y1="6" x2="6" y2="18"></line>
                              <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                            <span>Banned</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-danger" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                              <line x1="10" y1="11" x2="10" y2="17"></line>
                              <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg>
                            <span class="w-100">Delete</span>
                          </a>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <!-- end item -->

                  <!-- item -->
                  <tr>
                    <th><!-- check -->
                      <div class="form-check">
                        <input class="form-check-input form-check-input-primary" type="checkbox" value="">
                      </div>
                    </th>
                    <td><!-- user -->
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-sm rounded-circle" style="background-image:url(../html_frontend/demo.files/images/avatar/tasmin_egerton.jpg)"></div>
                        <div class="ms-3">
                          <a href="#!" class="link-normal fw-medium">Syed Sabah</a>
                          <small class="d-block">s.abah@gmail.com</small>
                        </div>
                      </div>
                    </td>
                    <td><!-- date -->
                      <span class="d-block text-muted small">Jan 01 2021, 20:38</span>
                      <span class="d-block text-muted small">26 days ago</span>
                    </td>
                    <td class="text-center"><!-- orders -->
                      3
                    </td>
                    <td class="text-success"><!-- status -->
                      Active
                    </td>
                    <td class="dropstart text-end"><!-- options -->
                      <a class="btn btn-sm btn-light btn-ghost btn-icon text-muted rounded-circle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="group-icon">
                          <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path></svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </span>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-clean">
                        <li class="small px-3 py-2 text-muted">Set user</li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span>Active</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <line x1="18" y1="6" x2="6" y2="18"></line>
                              <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                            <span>Innactive</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <line x1="18" y1="6" x2="6" y2="18"></line>
                              <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                            <span>Banned</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-danger" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                              <line x1="10" y1="11" x2="10" y2="17"></line>
                              <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg>
                            <span class="w-100">Delete</span>
                          </a>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <!-- end item -->

                  <!-- item -->
                  <tr>
                    <th><!-- check -->
                      <div class="form-check">
                        <input class="form-check-input form-check-input-primary" type="checkbox" value="">
                      </div>
                    </th>
                    <td><!-- user -->
                      <div class="d-flex align-items-center">
                        <div class="avatar avatar-sm rounded-circle bg-gray-200">MT</div>
                        <div class="ms-3">
                          <a href="#!" class="link-normal fw-medium">Mar Thibault</a>
                          <small class="d-block">mar@gmail.com</small>
                        </div>
                      </div>
                    </td>
                    <td><!-- date -->
                      <span class="d-block text-muted small">Jan 01 2021, 20:38</span>
                      <span class="d-block text-muted small">26 days ago</span>
                    </td>
                    <td class="text-center"><!-- orders -->
                      16
                    </td>
                    <td class="text-success"><!-- status -->
                      Active
                    </td>
                    <td class="dropstart text-end"><!-- options -->
                      <a class="btn btn-sm btn-light btn-ghost btn-icon text-muted rounded-circle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="group-icon">
                          <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path></svg>
                          <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                        </span>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-clean">
                        <li class="small px-3 py-2 text-muted">Set user</li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                            <span>Active</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <line x1="18" y1="6" x2="6" y2="18"></line>
                              <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                            <span>Innactive</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <line x1="18" y1="6" x2="6" y2="18"></line>
                              <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                            <span>Banned</span>
                          </a>
                        </li>
                        <li>
                          <a class="dropdown-item" href="#">
                            <svg class="text-danger" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                              <polyline points="3 6 5 6 21 6"></polyline>
                              <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                              <line x1="10" y1="11" x2="10" y2="17"></line>
                              <line x1="14" y1="11" x2="14" y2="17"></line>
                            </svg>
                            <span class="w-100">Delete</span>
                          </a>
                        </li>
                      </ul>
                    </td>
                  </tr>
                  <!-- end item -->

                </tbody>
              </table>

            </div>

            <!-- pagination, selected items -->
            <div class="row">
              <div class="col py-3 text-center text-md-start">
                
                <!-- selected items -->
                <div class="dropup">
                  <a class="btn btn-sm btn-primary" href="#" role="button" id="ddSelected" data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="group-icon">
                      <svg width="18px" height="18px" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" fill="currentColor"><path fill-rule="evenodd" d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"></path></svg>
                      <svg xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
                    </span>
                    <span>Selected items</span>
                  </a>

                  <ul class="dropdown-menu dropdown-menu-clean my-2" aria-labelledby="ddSelected">
                    <li>
                      <a class="dropdown-item" href="#form-list">
                        <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polyline points="20 6 9 17 4 12"></polyline>
                        </svg>
                        <span>Active</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <line x1="18" y1="6" x2="6" y2="18"></line>
                          <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                        <span>Innactive</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <svg class="text-muted" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <line x1="18" y1="6" x2="6" y2="18"></line>
                          <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg>
                        <span>Banned</span>
                      </a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <svg class="text-danger" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                          <polyline points="3 6 5 6 21 6"></polyline>
                          <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                          <line x1="10" y1="11" x2="10" y2="17"></line>
                          <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>
                        <span class="w-100">Delete</span>
                      </a>
                    </li>
                  </ul>

                </div>

              </div>

              <div class="col-md-auto py-3">

                <!-- pagination -->
                <nav class="w-100 text-center" aria-label="Pagination">
             
                  <!-- pagination : desktop -->
                  <nav class="text-center float-md-end mt-3 mt-md-0 d-none d-md-flex" aria-label="Pagination">
                    <ul class="nav nav-sm nav-invert">
                      <li class="nav-item">
                        <a class="nav-link px-3 px-3 disabled" href="#" tabindex="-1">
                          <span aria-hidden="true">«</span>
                        </a>
                      </li>
                      <li class="nav-item"><a class="nav-link px-3" href="#">1</a></li>
                      <li class="nav-item" aria-current="page">
                        <a class="nav-link px-3 px-3 active" href="#">2</a>
                      </li>
                      <li class="nav-item"><a class="nav-link px-3" href="#">3</a></li>
                      <li class="nav-item"><a class="nav-link px-3" href="#">4</a></li>
                      <li class="nav-item">
                        <a class="nav-link px-3 px-3" href="#">
                          <span aria-hidden="true">»</span>
                        </a>
                      </li>
                    </ul>
                  </nav>

                  <!-- pagination : mobile -->
                  <ul class="list-inline mb-0 d-md-none">
                    <li class="list-inline-item">
                      <a href="#!" class="btn btn-sm rounded-circle link-normal disabled" tabindex="0">
                        <svg width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                      </a>
                    </li>
                    <li class="list-inline-item">
                      <a href="#!" class="btn btn-sm rounded-circle link-normal" tabindex="0">
                        <svg width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">  
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                      </a>
                    </li>
                  </ul>
                  <div class="text-muted small d-md-none" id="mobile-page-info" role="status" aria-live="polite">
                    Showing results 1 to 30 of 180
                  </div>

                </nav>

              </div>
            </div>

          </div>
        </div>


      </main>

@endsection
