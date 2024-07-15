@extends('account.base')

@section('title', 'Orders')

@section('accountContent')

    <!-- additional filters -->
    <div class="card mb-3">
        <div class="card-body">

            <div class="dropdown">
                <a id="dropdownMenuFilter" href="#" class="text-dark" data-bs-toggle="dropdown" aria-expanded="false">
                    <span>Available points</span>
                    <svg class="mx-1" xmlns="http://www.w3.org/2000/svg" width="18px" height="18px" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <polyline points="6 9 12 15 18 9"></polyline>
                    </svg>
                </a>

                <ul class="dropdown-menu shadow-lg rounded-xl" aria-labelledby="dropdownMenuFilter">
                    <li><a class="dropdown-item" href="#">All</a></li>
                    <li><a class="dropdown-item active" href="#">Available points</a></li>
                    <li><a class="dropdown-item" href="#">Converted coupons</a></li>
                    <li><a class="dropdown-item" href="#">Expired coupons</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- /additional filters -->

    <form id="form-list" method="post" action="#">

        <input tabindex="-1" class="d-none" type="text" name="csrf_token" value="">
        <input tabindex="-1" class="d-none" type="text" name="action" value="points:to:coupon">

        <div class="card mt-2">

            <div class="card-body pt-4">

                <div class="table-responsive-md">

                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th class="pt-0" style="width:46px">&nbsp;</th>
                                <th class="small text-muted pt-0">ORDER NO.</th>
                                <th class="small text-muted pt-0" style="width:100px">POINTS</th>
                                <th class="small text-muted pt-0 text-end" style="width:120px">STATUS
                                </th>
                            </tr>
                        </thead>
                        <tbody id="checkall-list">

                            <!-- item -->
                            <tr>

                                <!-- check -->
                                <th>

                                    <label class="form-check" aria-label="Select item"><!-- usable -->
                                        <!--
                                                    Required by javascript to calculate (see javascript code below):
                                                        data-points="112" 	no of points
                                                        data-rate="0.1" 		conversion rate. Example: 1 point = $0.1 -->
                                        <input data-points="112" data-rate="0.1"
                                            class="form-check-input form-check-input-primary" type="checkbox"
                                            name="order_id[]" value="20211112">
                                    </label>

                                </th>

                                <td>

                                    <!-- order no -->
                                    <a href="account-order-detail.html" class="link-normal fw-bold">
                                        20211112
                                    </a>

                                    <!-- order date -->
                                    <span class="d-block smaller fw-medium">
                                        Order date: 08 Dec 2021, 04:32
                                    </span>

                                    <!-- converted date -->
                                    <span class="d-block smaller fw-medium">
                                        Converted date: 11 Dec 2021, 02:51
                                    </span>

                                    <!-- expiration date -->
                                    <span class="d-block smaller fw-medium">Expiration date:
                                        &ndash;</span>

                                </td>

                                <!-- points -->
                                <td>112</td>

                                <!-- status -->
                                <td class="text-end">
                                    <span class="text-success fw-medium">available</span>
                                </td>
                            </tr>

                            <!-- item -->
                            <tr>

                                <!-- check -->
                                <th>

                                    <label class="form-check" aria-label="Select item"><!-- usable -->
                                        <!--
                                                    Required by javascript to calculate (see javascript code below):
                                                        data-points="21" 		no of points
                                                        data-rate="0.1" 		conversion rate. Example: 1 point = $0.1 -->
                                        <input data-points="21" data-rate="0.1"
                                            class="form-check-input form-check-input-primary" type="checkbox"
                                            name="order_id[]" value="20211112">
                                    </label>

                                </th>

                                <td>

                                    <!-- order no -->
                                    <a href="account-order-detail.html" class="link-normal fw-bold">
                                        20232112
                                    </a>

                                    <!-- order date -->
                                    <span class="d-block smaller fw-medium">
                                        Order date: 08 Dec 2021, 04:32
                                    </span>

                                    <!-- converted date -->
                                    <span class="d-block smaller fw-medium">
                                        Converted date: &ndash;
                                    </span>

                                    <!-- expiration date -->
                                    <span class="d-block smaller fw-medium">Expiration date:
                                        &ndash;</span>

                                </td>

                                <!-- points -->
                                <td>21</td>

                                <!-- status -->
                                <td class="text-end">
                                    <span class="text-success fw-medium">available</span>
                                </td>
                            </tr>

                            <!-- item -->
                            <tr>

                                <!-- check -->
                                <th>

                                    <label class="form-check" aria-label="Select item"><!-- usable -->
                                        <!--
                                                    Required by javascript to calculate (see javascript code below):
                                                        data-points="112" 	no of points
                                                        data-rate="0.1" 		conversion rate. Example: 1 point = $0.1 -->
                                        <input disabled data-points="0" data-rate="0"
                                            class="form-check-input form-check-input-primary" type="checkbox"
                                            name="order_id[]" value="20211112">
                                    </label>

                                </th>

                                <td>

                                    <!-- order no -->
                                    <a href="account-order-detail.html" class="link-normal fw-bold">
                                        <del>20211112</del>
                                    </a>

                                    <!-- order date -->
                                    <span class="d-block smaller fw-medium">
                                        Order date: 08 Dec 2021, 04:32
                                    </span>

                                    <!-- converted date -->
                                    <span class="d-block smaller fw-medium">
                                        Converted date: 11 Dec 2021, 02:51
                                    </span>

                                </td>

                                <!-- points -->
                                <td>112</td>

                                <!-- status -->
                                <td class="text-end">
                                    <span class="text-muted fw-medium">converted</span>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>

            </div>


            <div class="card-footer bg-gray-200 border-0 p-lg-4">

                <p class="small mb-0 text-primary fw-bold">
                    <span id="rewardPointsSelectedSum">0</span> selected points
                    ($<span id="rewardPointsSelectedValue">0.00</span>)
                </p>

                <p class="fw-medium">
                    Convert all selected points into a coupon!
                </p>

                <button disabled id="rewardBtnConvert"
                    onclick="return confirm('Are you sure you want to convert all selected points?\nThis is a permanent action!')"
                    type="submit" class="btn btn-sm btn-primary px-3 py-2">
                    Convert into a coupon
                </button>

            </div>


        </div>

    </form>
@endsection
