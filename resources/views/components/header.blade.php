<header id="header" class="shadow-xs">

    <!-- TOP BAR -->
    <div id="top_bar" class="bg-light">
        <!-- optional if body.header-sticky is present: add .js-ignore class to ignore autohide and stay visible all the time -->
        <div class="container">

            <div class="text-nowrap">
                <!-- change with .scrollable-horizontal to horizontally scroll, if -only- no dropdown is present -->
                <div class="d-flex justify-content-between">

                    <div class="d-inline-block float-start">
                        <ul class="list-inline m-0">

                            <!-- LANGUAGE -->
                            <li class="dropdown list-inline-item m-0">

                                <a id="topDDLanguage" href="#" class="py-2 d-inline-block"
                                    data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                                    <i class="flag flag-us"></i>
                                    <span class="text-muted px-2">English</span>
                                </a>

                                <div aria-labelledby="topDDLanguage"
                                    class="dropdown-menu dropdown-menu-hover p-1 pb-0 scrollable-vertical">
                                    <a href="#"
                                        class="active dropdown-item text-muted text-truncate lh-1 rounded mb-1">
                                        <i class="flag flag-us"></i>
                                        English
                                    </a>
                                    <a href="#" class="dropdown-item text-muted text-truncate lh-1 rounded mb-1">
                                        <i class="flag flag-de"></i>
                                        German
                                    </a>
                                    <a href="#" class="dropdown-item text-muted text-truncate lh-1 rounded mb-1">
                                        <i class="flag flag-fr"></i>
                                        Francaise
                                    </a>
                                </div>

                            </li>
                            <!-- /LANGUAGE -->


                            <!-- CURRENCY -->
                            <li class="dropdown list-inline-item m-0">

                                <span class="text-muted">/</span><!-- optional separator -->

                                <a id="topDDCurrency" href="#" class="py-2 d-inline-block"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="text-muted px-2">USD</span>
                                </a>

                                <div aria-labelledby="topDDCurrency"
                                    class="dropdown-menu dropdown-menu-hover text-uppercase text-center p-1 pb-0 w-auto">
                                    <a href="#"
                                        class="active dropdown-item text-muted text-truncate lh-1 rounded mb-1">
                                        USD
                                    </a>
                                    <a href="#" class="dropdown-item text-muted text-truncate lh-1 rounded mb-1">
                                        EUR
                                    </a>
                                    <a href="#" class="dropdown-item text-muted text-truncate lh-1 rounded mb-1">
                                        GBP
                                    </a>
                                </div>

                            </li>
                            <!-- /CURRENCY -->

                        </ul>
                    </div>


                    <div class="d-inline-block float-end">

                        <ul class="list-inline m-0">

                            <li class="dropdown list-inline-item">

                                <a href="tel:+01-555-5555" class="p-2 d-inline-block fw-medium">
                                    <i class="float-start fi fi-phone"></i> (+01) 555-5555
                                </a>

                            </li>

                        </ul>

                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- /TOP BAR -->




    <!-- Navbar -->
    <div class="container position-relative">


        <nav class="navbar navbar-expand-lg navbar-light justify-content-lg-between justify-content-md-inherit">

            <div class="align-items-start">

                <!-- mobile menu button : show -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMainNav"
                    aria-controls="navbarMainNav" aria-expanded="false" aria-label="Toggle navigation">
                    <svg width="25" viewBox="0 0 20 20">
                        <path d="M 19.9876 1.998 L -0.0108 1.998 L -0.0108 -0.0019 L 19.9876 -0.0019 L 19.9876 1.998 Z">
                        </path>
                        <path
                            d="M 19.9876 7.9979 L -0.0108 7.9979 L -0.0108 5.9979 L 19.9876 5.9979 L 19.9876 7.9979 Z">
                        </path>
                        <path
                            d="M 19.9876 13.9977 L -0.0108 13.9977 L -0.0108 11.9978 L 19.9876 11.9978 L 19.9876 13.9977 Z">
                        </path>
                        <path
                            d="M 19.9876 19.9976 L -0.0108 19.9976 L -0.0108 17.9976 L 19.9876 17.9976 L 19.9876 19.9976 Z">
                        </path>
                    </svg>
                </button>

                <!--
            Logo : height: 70px max
          -->
                <a class="navbar-brand m-0" href="shop-index-1.html">
                    <img src="assets/images/logo/logo_dark.svg" width="110" height="38" alt="...">
                </a>

            </div>


            <!--

          [SOW] SEARCH SUGGEST PLUGIN
          ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++
          PLEASE READ DOCUMENTATION
          documentation/plugins-sow-search-suggest.html
          ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++ ++

        -->
            <form action="#search-page" method="GET" data-autosuggest="on" data-mode="json" data-json-max-results="10"
                data-json-related-title="Explore Smarty" data-json-related-item-icon="fi fi-star-empty"
                data-json-suggest-title="Suggestions for you" data-json-suggest-noresult="No results for"
                data-json-suggest-item-icon="fi fi-search" data-json-suggest-min-score="5"
                data-json-highlight-term='true' data-contentType='application/json; charset=utf-8' data-dataType='json'
                data-container="#sow-search-container" data-input-min-length="2" data-input-delay="250"
                data-related-keywords="" data-related-url="_ajax/search_suggest_related.json"
                data-suggest-url="_ajax/search_suggest_input.json" data-related-action="related_get"
                data-suggest-action="suggest_get"
                class="js-ajax-search sow-search sow-search-mobile-float d-flex-1-1-auto m-0 mx-lg-5">
                <div class="sow-search-input w-100">

                    <!-- rounded: form-control-pill -->
                    <div class="input-group-over d-flex align-items-center w-100 h-100 rounded form-control-pill">

                        <input placeholder="what are you looking today?" aria-label="what are you looking today?"
                            name="s" type="text" class="form-control-sow-search form-control" value=""
                            autocomplete="off">

                        <span class="sow-search-buttons">

                            <!-- search button -->
                            <button aria-label="Global Search" type="submit"
                                class="btn shadow-none m-0 px-3 py-2 bg-transparent text-muted">
                                <i class="fi fi-search fs-5 m-0"></i>
                            </button>

                            <!-- close : mobile only (d-inline-block d-lg-none) -->
                            <a href="javascript:;"
                                class="btn-sow-search-toggler btn btn-light shadow-none m-0 p-2 d-inline-block d-lg-none">
                                <i class="fi fi-close fs-5 m-0"></i>
                            </a>

                        </span>

                    </div>

                </div>

                <!-- search suggestion container -->
                <div class="sow-search-container w-100 p-0 hide shadow-md" id="sow-search-container">
                    <div class="sow-search-container-wrapper">

                        <!-- main search container -->
                        <div class="sow-search-loader p-3 text-center hide">
                            <i class="fi fi-circle-spin fi-spin text-muted fs-1"></i>
                        </div>

                        <!--
                AJAX CONTENT CONTAINER
                SHOULD ALWAYS BE AS IT IS : NO COMMENTS OR EVEN SPACES!
              -->
                        <div class="sow-search-content rounded w-100 scrollable-vertical"></div>

                    </div>
                </div>
                <!-- /search suggestion container -->

                <!--

            overlay combinations:
              backdrop-dark
              backdrop-light
              overlay-dark opacity-* [1-9]
              overlay-light opacity-* [1-9]

          -->
                <div class="sow-search-backdrop backdrop-dark hide"><!-- alternate: overlay-dark opacity-3 --></div>

            </form>
            <!-- /SEARCH -->




            <!-- OPTIONS -->
            <ul class="list-inline list-unstyled mb-0 d-flex align-items-end">

                <!-- mobile : search toggler -->
                <li class="list-inline-item mx-1 dropdown d-inline-block d-lg-none">

                    <a href="#" aria-label="Search" data-bs-toggle="dropdown" aria-expanded="false"
                        aria-haspopup="true" class="btn-sow-search-toggler d-inline-block text-center text-dark">
                        <i class="fi fi-search fs-5"></i>
                        <span class="d-block small">search</span>
                    </a>

                </li>

                <!-- my account -->
                <li class="list-inline-item mx-1 dropdown">

                    <a href="#" aria-label="My Account" id="dropdownAccountOptions" data-bs-toggle="dropdown"
                        aria-expanded="false" aria-haspopup="true" class="d-inline-block text-center text-dark">
                        <i class="fi fi-users fs-4"></i>
                        <span class="d-block small">account</span>
                    </a>


                    <!-- dropdown -->
                    <div aria-labelledby="dropdownAccountOptions"
                        class="list-unstyled dropdown-menu dropdown-menu-clean dropdown-click-ignore end-0 py-2 rounded-xl"
                        style="min-width:215px;">

                        <div class="dropdown-header px-4 mb-1 text-wrap fw-medium">John Doe</div>
                        <div class="dropdown-divider mb-3"></div>
                        <a class="dropdown-item active" href="account-index.html">
                            <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z">
                                </path>
                            </svg>
                            <span>My account</span>
                        </a>
                        <a class="dropdown-item" href="account-orders.html">
                            <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3zm4.354 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z">
                                </path>
                            </svg>
                            <span>My orders</span>
                        </a>
                        <a class="dropdown-item" href="account-favourites.html">
                            <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                                </path>
                            </svg>
                            <span>Favourites</span>
                        </a>
                        <a class="dropdown-item" href="account-reward.html">
                            <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                <path fill-rule="evenodd"
                                    d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z">
                                </path>
                            </svg>
                            <span>Reward points</span>
                        </a>
                        <a class="dropdown-item" href="account-coupons.html">
                            <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.273 2.513l-.921-.944.715-.698.622.637.89-.011a2.89 2.89 0 0 1 2.924 2.924l-.01.89.636.622a2.89 2.89 0 0 1 0 4.134l-.637.622.011.89a2.89 2.89 0 0 1-2.924 2.924l-.89-.01-.622.636a2.89 2.89 0 0 1-4.134 0l-.622-.637-.89.011a2.89 2.89 0 0 1-2.924-2.924l.01-.89-.636-.622a2.89 2.89 0 0 1 0-4.134l.637-.622-.011-.89a2.89 2.89 0 0 1 2.924-2.924l.89.01.622-.636a2.89 2.89 0 0 1 4.134 0l-.715.698a1.89 1.89 0 0 0-2.704 0l-.92.944-1.32-.016a1.89 1.89 0 0 0-1.911 1.912l.016 1.318-.944.921a1.89 1.89 0 0 0 0 2.704l.944.92-.016 1.32a1.89 1.89 0 0 0 1.912 1.911l1.318-.016.921.944a1.89 1.89 0 0 0 2.704 0l.92-.944 1.32.016a1.89 1.89 0 0 0 1.911-1.912l-.016-1.318.944-.921a1.89 1.89 0 0 0 0-2.704l-.944-.92.016-1.32a1.89 1.89 0 0 0-1.912-1.911l-1.318.016z">
                                </path>
                                <path fill-rule="evenodd"
                                    d="M10.354 6.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7 8.793l2.646-2.647a.5.5 0 0 1 .708 0z">
                                </path>
                            </svg>
                            <span>Coupons</span>
                        </a>
                        <a class="dropdown-item" href="account-reviews.html">
                            <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                <path
                                    d="M3 2h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2h1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1H1a2 2 0 0 1 2-2z">
                                </path>
                                <path
                                    d="M5 0h8a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1H3a2 2 0 0 1 2-2zM1 6v-.5a.5.5 0 0 1 1 0V6h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V9h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z">
                                </path>
                            </svg>
                            <span>My reviews</span>
                        </a>
                        <a class="dropdown-item" href="account-refunds.html">
                            <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z"></path>
                                <path
                                    d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z">
                                </path>
                            </svg>
                            <span>My refunds</span>
                        </a>
                        <a class="dropdown-item" href="account-addresses.html">
                            <svg class="text-gray-600 float-start" width="18px" height="18px"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                <circle cx="12" cy="10" r="3"></circle>
                            </svg>
                            <span>My addresses</span>
                        </a>
                        <a class="dropdown-item" href="account-settings.html">
                            <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16"
                                xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z">
                                </path>
                            </svg>
                            <span>Account settings</span>
                        </a>
                        <div class="dropdown-divider mt-3"></div>
                        <a href="#" title="Log Out" class="dropdown-item mt-1">
                            <i class="fi fi-power float-start"></i>
                            Log Out
                        </a>
                    </div>

                </li>


                <!-- favourites button : visible : desktop only -->
                <li class="list-inline-item mx-1 dropdown d-none d-sm-block">

                    <a href="account-favourites.html" aria-label="My Favourites"
                        class="d-inline-block text-center text-dark">
                        <span class="badge bg-light text-dark position-absolute end-0 mt-n1 p-1">2</span>
                        <i class="fi fi-heart-empty fs-4"></i>
                        <span class="d-block small">favourites</span>
                    </a>

                </li>


                <!-- cart -->
                <li class="list-inline-item mx-1 dropdown">

                    <a href="#" aria-label="My Cart" data-bs-toggle="dropdown" aria-expanded="false"
                        aria-haspopup="true" class="d-inline-block text-center text-dark">
                        <span class="badge bg-warning text-dark position-absolute end-0 mt-n1 p-1">2</span>
                        <i class="fi fi-cart-1 fs-4"></i>
                        <span class="d-block small">my cart</span>
                    </a>

                    <!-- dropdown -->
                    <div aria-labelledby="dropdownAccount" id="dropdownAccount"
                        class="dropdown-menu dropdown-menu-clean dropdown-menu-invert dropdown-click-ignore mt-2 p-0 rounded-xl"
                        style="width:300px">
                        <div class="dropdown-header p-3 fw-medium">Cart Products</div>

                        <!--
              <div class="py-5 text-center bg-light">
                Your cart is empty!
              </div>
              -->


                        <!-- item list -->
                        <div class="max-vh-50 scrollable-vertical">

                            <!-- item -->
                            <div class="p-3 border-top border-light">

                                <!-- image -->
                                <div class="ratio ratio-1x1 float-start mt-1 bg-cover"
                                    style="width:40px; background-image:url(demo.files/images/unsplash/products/thumb_330/barrett-ward-fYYUgvHYgpU-unsplash-min.jpg)">
                                </div>

                                <a href="#" class="small d-block link-normal">
                                    <span class="d-block text-truncate">
                                        1 &times; Product title comes here
                                    </span>
                                </a>

                                <span class="d-block small mt-1">$196.00</span>
                            </div>
                            <!-- /item -->


                            <!-- item -->
                            <div class="p-3 border-top border-light">

                                <div class="ratio ratio-1x1 float-start mt-1 bg-cover"
                                    style="width:40px; background-image:url(demo.files/images/unsplash/products/thumb_330/hardik-sharma-CrPAvN29Nhs-unsplash-min.jpg)">
                                </div>

                                <a href="#" class="small d-block link-normal">
                                    <span class="d-block text-truncate">
                                        1 &times; Product title comes here
                                    </span>
                                </a>

                                <span class="d-block small mt-1">$56.99</span>
                            </div>
                            <!-- /item -->


                        </div>
                        <!-- /item list -->


                        <!-- subtotal -->
                        <div class="fs-6 text-align-start border-top border-light px-3 py-2">
                            Subtotal: <span class="float-end">$196.00</span>
                        </div>


                        <!-- go to cart button -->
                        <div class="border-top border-light p-3">

                            <a href="shop-page-cart-1.html" class="btn btn-primary w-100">
                                <span>Go to Cart</span>
                                <i class="fi fi-arrow-end smaller"></i>
                            </a>

                        </div>


                    </div>


                </li>

            </ul>
            <!-- /OPTIONS -->


        </nav>

    </div>
    <!-- /Navbar -->




    <div class="clearfix">

        <!-- line -->
        <hr class="m-0 bg-gray-500 opacity-25">

        <div class="container">

            <nav
                class="navbar h-auto navbar-expand-lg navbar-light justify-content-lg-between justify-content-md-inherit">


                <!-- Menu -->
                <!--

            Dropdown Classes (should be added to primary .dropdown-menu only, dropdown childs are also affected)
              .dropdown-menu-dark     - dark dropdown (desktop only, will be white on mobile)
              .dropdown-menu-hover    - open on hover
              .dropdown-menu-clean    - no background color on hover
              .dropdown-menu-invert     - open dropdown in oposite direction (left|right, according to RTL|LTR)
              .dropdown-menu-uppercase  - uppercase text (font-size is scalled down to 13px)
              .dropdown-click-ignore    - keep dropdown open on inside click (useful on forms inside dropdown)

              Repositioning long dropdown childs (Example: Pages->Account)
                .dropdown-menu-up-n100    - open up with top: -100px
                .dropdown-menu-up-n100    - open up with top: -150px
                .dropdown-menu-up-n180    - open up with top: -180px
                .dropdown-menu-up-n220    - open up with top: -220px
                .dropdown-menu-up-n250    - open up with top: -250px
                .dropdown-menu-up       - open up without negative class


              Dropdown prefix icon (optional, if enabled in variables.scss)
                .prefix-link-icon .prefix-icon-dot    - link prefix
                .prefix-link-icon .prefix-icon-line   - link prefix
                .prefix-link-icon .prefix-icon-ico    - link prefix
                .prefix-link-icon .prefix-icon-arrow  - link prefix

              .nav-link.nav-link-caret-hide   - no dropdown icon indicator on main link
              .nav-item.dropdown-mega     - required ONLY on fullwidth mega menu

              Mobile animation - add to .navbar-collapse:
              .navbar-animate-fadein
            .navbar-animate-fadeinup
              .navbar-animate-bouncein

          -->
                <div class="collapse navbar-collapse navbar-animate-fadein" id="navbarMainNav">


                    <!-- navbar : mobile menu -->
                    <div class="navbar-xs d-none"><!-- .sticky-top -->

                        <!-- mobile menu button : close -->
                        <button class="navbar-toggler pt-0" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarMainNav" aria-controls="navbarMainNav" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <svg width="20" viewBox="0 0 20 20">
                                <path
                                    d="M 20.7895 0.977 L 19.3752 -0.4364 L 10.081 8.8522 L 0.7869 -0.4364 L -0.6274 0.977 L 8.6668 10.2656 L -0.6274 19.5542 L 0.7869 20.9676 L 10.081 11.679 L 19.3752 20.9676 L 20.7895 19.5542 L 11.4953 10.2656 L 20.7895 0.977 Z">
                                </path>
                            </svg>
                        </button>

                        <!--
                Mobile Menu Logo
                Logo : height: 70px max
              -->
                        <a class="navbar-brand" href="shop-index-1.html">
                            <img src="assets/images/logo/logo_dark.svg" width="110" height="38"
                                alt="...">
                        </a>

                    </div>
                    <!-- /navbar : mobile menu -->



                    <!-- navbar : navigation -->
                    <ul class="navbar-nav navbar-sm">
                        <!-- Menu -->
                        <!--

                Dropdown Classes (should be added to primary .dropdown-menu only, dropdown childs are also affected)
                  .dropdown-menu-dark     - dark dropdown (desktop only, will be white on mobile)
                  .dropdown-menu-hover    - open on hover
                  .dropdown-menu-clean    - no background color on hover
                  .dropdown-menu-invert     - open dropdown in oposite direction (left|right, according to RTL|LTR)
                  .dropdown-menu-uppercase  - uppercase text (font-size is scalled down to 13px)
                  .dropdown-click-ignore    - keep dropdown open on inside click (useful on forms inside dropdown)

                  Repositioning long dropdown childs (Example: Pages->Account)
                    .dropdown-menu-up-n100    - open up with top: -100px
                    .dropdown-menu-up-n100    - open up with top: -150px
                    .dropdown-menu-up-n180    - open up with top: -180px
                    .dropdown-menu-up-n220    - open up with top: -220px
                    .dropdown-menu-up-n250    - open up with top: -250px
                    .dropdown-menu-up       - open up without negative class


                  Dropdown prefix icon (optional, if enabled in variables.scss)
                    .prefix-link-icon .prefix-icon-dot    - link prefix
                    .prefix-link-icon .prefix-icon-line   - link prefix
                    .prefix-link-icon .prefix-icon-ico    - link prefix
                    .prefix-link-icon .prefix-icon-arrow  - link prefix

                  .nav-link.nav-link-caret-hide   - no dropdown icon indicator on main link
                  .nav-item.dropdown-mega     - required ONLY on fullwidth mega menu

              -->
                        <!-- home -->
                        <li class="nav-item dropdown active">

                            <a href="#" id="mainNavHome" class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Home
                            </a>

                            <div aria-labelledby="mainNavHome"
                                class="dropdown-menu dropdown-menu-clean dropdown-menu-hover dropdown-mega-xl dropdown-fadeindown rounded-xl rounded-top-0 p-0 overflow-hidden">

                                <div class="row">

                                    <!-- menu items -->
                                    <div class="col-12 col-lg-7">

                                        <!--
                        optional line column separator
                        .col-border-lg
                      -->
                                        <div class="row col-border-lg">

                                            <!-- title -->
                                            <h3 class="col-12 py-3 mx-lg-4 mt-2 fs-6 fw-bold">Shop variations</h3>

                                            <!-- col 1 -->
                                            <div class="col-12 col-lg-6">
                                                <ul class="list-unstyled">
                                                    <li class="dropdown-item"><a href="shop-index-1.html"
                                                            class="dropdown-link">Home 1</a></li>
                                                    <li class="dropdown-item"><a href="shop-index-2.html"
                                                            class="dropdown-link">Home 2</a></li>
                                                    <li class="dropdown-item"><a href="shop-index-3.html"
                                                            class="dropdown-link">Home 3</a></li>
                                                    <li class="dropdown-item"><a href="shop-index-4.html"
                                                            class="dropdown-link">Home 4</a></li>
                                                    <li class="dropdown-item"><a href="shop-index-5.html"
                                                            class="dropdown-link">Home 5</a></li>
                                                    <li class="dropdown-item"><a href="shop-index-christmas.html"
                                                            class="dropdown-link">Home 6</a></li>
                                                    <li class="dropdown-item"><a href="shop-index-7.html"
                                                            class="dropdown-link disabled">Home 7 (soon)</a></li>
                                                    <li class="dropdown-item"><a href="shop-index-8.html"
                                                            class="dropdown-link disabled">Home 8 (soon)</a></li>
                                                </ul>
                                            </div>

                                            <!-- col 2 -->
                                            <div class="col-12 col-lg-6">
                                                <ul class="list-unstyled">
                                                    <li class="dropdown-item"><a href="shop-index-9.html"
                                                            class="dropdown-link disabled">Home 9 (soon)</a></li>
                                                    <li class="dropdown-item"><a href="shop-index-10.html"
                                                            class="dropdown-link disabled">Home 10 (soon)</a></li>
                                                    <li class="dropdown-item"><a href="shop-index-11.html"
                                                            class="dropdown-link disabled">Home 11 (soon)</a></li>
                                                    <li class="dropdown-item"><a href="shop-index-12.html"
                                                            class="dropdown-link disabled">Home 12 (soon)</a></li>
                                                    <li class="dropdown-item"><a href="shop-index-13.html"
                                                            class="dropdown-link disabled">Home 13 (soon)</a></li>
                                                    <li class="dropdown-item"><a href="shop-index-14.html"
                                                            class="dropdown-link disabled">Home 14 (soon)</a></li>
                                                    <li class="dropdown-item"><a href="shop-index-15.html"
                                                            class="dropdown-link disabled">Home 15 (soon)</a></li>
                                                    <li class="dropdown-item"><a href="shop-index-16.html"
                                                            class="dropdown-link disabled">Home 16 (soon)</a></li>
                                                </ul>
                                            </div>

                                            <!-- col 3 -->
                                            <ul class="col-12 list-unstyled pt-3">
                                                <li class="dropdown-divider"></li>
                                                <li class="dropdown-item pt-1 pb-2">
                                                    <a href="index.html#ecommerce"
                                                        class="dropdown-link text-muted d-flex align-items-center">
                                                        <span class="pe-2">Visual mode</span>
                                                        <svg width="18px" height="18px"
                                                            xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                                            class="bi bi-arrow-right-short" viewBox="0 0 16 16">
                                                            <path fill-rule="evenodd"
                                                                d="M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </li>
                                            </ul>

                                        </div>

                                    </div>

                                    <!-- image -->
                                    <div class="col px-3 py-5 bg-cover position-relative overlay-dark overlay-opacity-4 text-white d-flex flex-column align-items-center justify-content-center"
                                        style="background-image: url(demo.files/images/unsplash/portfolio/thumb_330/boxed-water-is-better-LWagu5WepHU-unsplash-min.jpg);">

                                        <img src="assets/images/logo/logo_light.svg" width="110" height="38"
                                            alt="...">
                                        <p class="m-0">Smarty Ecommerce</p>

                                    </div>

                                </div>

                            </div>

                        </li>


                        <!-- pages -->
                        <li class="nav-item dropdown">

                            <a href="#" id="mainNavPages" class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>

                            <div aria-labelledby="mainNavPages"
                                class="dropdown-menu dropdown-menu-hover dropdown-menu-clean dropdown-fadeindown rounded-xl rounded-top-0">
                                <ul class="list-unstyled m-0 p-0">
                                    <li class="dropdown-item dropdown"><a href="#" class="dropdown-link"
                                            data-bs-toggle="dropdown">Category</a>
                                        <ul
                                            class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
                                            <li class="dropdown-item"><a href="shop-page-category-1.html"
                                                    class="dropdown-link">Category 1</a></li>
                                            <li class="dropdown-item"><a href="shop-page-category-2.html"
                                                    class="dropdown-link">Category 2</a></li>
                                            <li class="dropdown-item"><a href="shop-page-category-3.html"
                                                    class="dropdown-link">Category 3</a></li>
                                            <li class="dropdown-item"><a href="shop-page-category-4.html"
                                                    class="dropdown-link">Category 4</a></li>
                                            <li class="dropdown-item"><a href="shop-page-category-lazyload.html"
                                                    class="dropdown-link">Using lazyload</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li class="dropdown-item"><a href="shop-page-category-sidebar-right.html"
                                                    class="dropdown-link">Right sidebar</a></li>
                                            <li class="dropdown-item"><a href="shop-page-category-sidebar-no.html"
                                                    class="dropdown-link">No sidebar</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-item dropdown"><a href="#" class="dropdown-link"
                                            data-bs-toggle="dropdown">Product</a>
                                        <ul
                                            class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
                                            <li class="dropdown-item"><a href="shop-page-product-1.html"
                                                    class="dropdown-link">Product 1</a></li>
                                            <li class="dropdown-item"><a href="shop-page-product-2.html"
                                                    class="dropdown-link">Product 2</a></li>
                                            <li class="dropdown-item"><a href="shop-page-product-3.html"
                                                    class="dropdown-link">Product 3</a></li>
                                            <li class="dropdown-item"><a href="shop-page-product-4.html"
                                                    class="dropdown-link">Product 4</a></li>
                                            <li class="dropdown-item"><a href="shop-page-product-5.html"
                                                    class="dropdown-link">Product 5</a></li>
                                            <li class="dropdown-divider"></li>
                                            <li class="dropdown-item"><a href="shop-page-product-options.html"
                                                    class="dropdown-link">Options</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-item dropdown"><a href="#" class="dropdown-link"
                                            data-bs-toggle="dropdown">Account</a>
                                        <ul
                                            class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
                                            <li class="dropdown-item"><a href="account-index.html"
                                                    class="dropdown-link">My account</a></li>
                                            <li class="dropdown-item"><a href="account-orders.html"
                                                    class="dropdown-link">My orders</a></li>
                                            <li class="dropdown-item"><a href="account-favourites.html"
                                                    class="dropdown-link">My favourites</a></li>
                                            <li class="dropdown-item"><a href="account-reward.html"
                                                    class="dropdown-link">Reward points</a></li>
                                            <li class="dropdown-item"><a href="account-coupons.html"
                                                    class="dropdown-link">My coupons</a></li>
                                            <li class="dropdown-item"><a href="account-reviews.html"
                                                    class="dropdown-link">My reviews</a></li>
                                            <li class="dropdown-item"><a href="account-refunds.html"
                                                    class="dropdown-link">My refunds</a></li>
                                            <li class="dropdown-item"><a href="account-addresses.html"
                                                    class="dropdown-link">My addresses</a></li>
                                            <li class="dropdown-item"><a href="account-settings.html"
                                                    class="dropdown-link">Settings</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-item dropdown"><a href="#" class="dropdown-link"
                                            data-bs-toggle="dropdown">Checkout</a>
                                        <ul
                                            class="dropdown-menu dropdown-menu-hover dropdown-menu-block-md shadow-lg rounded-xl border-0 m-0">
                                            <li class="dropdown-item"><a href="shop-page-cart-1.html"
                                                    class="dropdown-link">Cart</a></li>
                                            <li class="dropdown-item"><a href="shop-page-cart-empty.html"
                                                    class="dropdown-link">Cart empty</a></li>
                                            <li class="dropdown-item"><a href="shop-page-checkout.html"
                                                    class="dropdown-link">Checkout page</a></li>
                                            <li class="dropdown-item"><a href="shop-page-checkout-success.html"
                                                    class="dropdown-link">Order completed</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-divider my-2"></li>
                                    <li class="dropdown-item"><a href="shop-page-signin.html"
                                            class="dropdown-link">Sign in</a></li>
                                    <li class="dropdown-item"><a href="shop-page-signup.html"
                                            class="dropdown-link">Sign up</a></li>
                                    <li class="dropdown-item"><a href="shop-page-password.html"
                                            class="dropdown-link">Password reset</a></li>
                                    <li class="dropdown-item"><a href="shop-page-faq.html" class="dropdown-link">Help
                                            page</a></li>
                                    <li class="dropdown-item"><a href="shop-page-contact.html"
                                            class="dropdown-link">Contact us</a></li>
                                    <li class="dropdown-item"><a href="shop-page-stores.html"
                                            class="dropdown-link">Store list</a></li>
                                    <li class="dropdown-item"><a href="invoice.html"
                                            class="dropdown-link">Invoice</a></li>
                                </ul>
                            </div>

                        </li>


                        <!-- Catalog -->
                        <li class="nav-item dropdown dropdown-mega">

                            <a href="#" id="mainNavCatalog" class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                !Catalog
                            </a>

                            <div aria-labelledby="mainNavCatalog"
                                class="dropdown-menu dropdown-menu-hover dropdown-menu-clean dropdown-fadeindown rounded-xl rounded-top-0">
                                <ul class="list-unstyled m-0 p-0">
                                    <li class="dropdown-item bg-transparent">

                                        <div class="row g-lg-4">

                                            <div class="col-12 col-md-3">

                                                <h3 class="fs-6 fw-bold mb-3">Baby Clothing</h3>
                                                <ul class="list-unstyled">
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Baby T-Shirts</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Baby bibs</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Baby clothing sets</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Baby dresses</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Baby hoodies & sweatshirts</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Baby jackets & outwears</a></li>
                                                </ul>

                                            </div>

                                            <div class="col-12 col-md-3">

                                                <h3 class="fs-6 fw-bold mb-3">Childrens Clothing</h3>
                                                <ul class="list-unstyled">
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Boys Clothing</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Boys Clothing (old)</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Family Matching Outfits</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Girls Clothing</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Girls Clothing (old)</a></li>
                                                </ul>

                                            </div>

                                            <div class="col-12 col-md-3">

                                                <h3 class="fs-6 fw-bold mb-3">Ethnic Clothing</h3>
                                                <ul class="list-unstyled">
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Africa Clothing</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">American Clothing</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">European Clothing</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">India & Pakistan Clothing</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Islamic Clothing</a></li>
                                                </ul>

                                            </div>

                                            <div class="col-12 col-md-3">

                                                <h3 class="fs-6 fw-bold mb-3">Home Decor</h3>
                                                <ul class="list-unstyled">
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Artificial Plants and Flowers</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Blinds, Shades & Shutters</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Candles & Home Fragrance</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Clocks</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Curtain Poles, Tracks & Accessories</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Decorative Accents</a></li>
                                                </ul>

                                            </div>

                                            <div class="col-12 col-md-3">

                                                <h3 class="fs-6 fw-bold mb-3">Men's Clothing</h3>
                                                <ul class="list-unstyled">
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Men's Coats</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Men's Jackets</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Men's Jeans</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Men's Leggings</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Men's Hoodies & Sweatshirts</a></li>
                                                </ul>

                                            </div>

                                            <div class="col-12 col-md-3">

                                                <h3 class="fs-6 fw-bold mb-3">Garment & Accessories</h3>
                                                <ul class="list-unstyled">
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Badges</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Boning</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Braid</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Buckles</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Buttons</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Cords</a></li>
                                                </ul>

                                            </div>

                                            <div class="col-12 col-md-3">

                                                <h3 class="fs-6 fw-bold mb-3">Infant & Toddlers Clothing</h3>
                                                <ul class="list-unstyled">
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Baby Swimwear</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Other Baby Clothing (old)</a></li>
                                                </ul>

                                            </div>

                                            <div class="col-12 col-md-3">

                                                <h3 class="fs-6 fw-bold mb-3">Bath Supplies</h3>
                                                <ul class="list-unstyled">
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Bath Beads</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Bath Brushes</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Sponges & Scrubbers</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Bath Fizzies</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Bath Oil</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Bath Powder</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link py-1"
                                                            href="#">Bath Salt</a></li>
                                                </ul>

                                            </div>

                                        </div>

                                    </li>
                                </ul>
                            </div>

                        </li>


                        <!-- Categories -->
                        <li class="nav-item dropdown dropdown-mega">

                            <a href="#" id="mainNavCats" class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                !Categories
                            </a>

                            <div aria-labelledby="mainNavCats"
                                class="dropdown-menu dropdown-menu-hover dropdown-menu-clean dropdown-fadeindown rounded-xl rounded-top-0">
                                <ul class="list-unstyled m-0 p-0">
                                    <li class="dropdown-item bg-transparent">

                                        <div class="row">

                                            <!-- col 1 -->
                                            <div class="col-12 col-md-3">

                                                <h3 class="fs-6 fw-bold mb-3">Baby Clothing</h3>
                                                <ul class="list-unstyled">
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">Baby T-Shirts</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">Baby bibs</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">Baby clothing sets</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">Baby dresses</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">Baby hoodies & sweatshirts</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">Baby jackets & outwears</a></li>
                                                </ul>

                                            </div>

                                            <!-- col 2 -->
                                            <div class="col-12 col-md-3">

                                                <h3 class="fs-6 fw-bold mb-3">Ethnic Clothing</h3>
                                                <ul class="list-unstyled">
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">Africa Clothing</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">American Clothing</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">European Clothing</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">India & Pakistan Clothing</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">Islamic Clothing</a></li>
                                                </ul>

                                            </div>

                                            <!-- col 3 -->
                                            <div class="col-12 col-md-3">

                                                <h3 class="fs-6 fw-bold mb-3">Men's Clothing</h3>
                                                <ul class="list-unstyled">
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">Men's Coats</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">Men's Jackets</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">Men's Jeans</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">Men's Leggings</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">Men's Hoodies & Sweatshirts</a></li>
                                                </ul>

                                            </div>

                                            <div class="col-12 col-md-3">

                                                <!-- best selling item -->
                                                <a href="#" style="min-height:300px;"
                                                    class="d-block position-relative h-100 bg-cover overlay-dark overlay-opacity-3 overlay-opacity-4-hover text-white rounded lazy"
                                                    data-background-image="demo.files/images/unsplash/portfolio/thumb_330/boxed-water-is-better-LWagu5WepHU-unsplash-min.jpg">
                                                    <div
                                                        class="position-absolute fw-medium top-0 p-3 p-lg-4 d-flex flex-column">
                                                        <span class="d-block text-uppercase small">Best Seller</span>
                                                        <span class="d-block h5 mb-3">Boxed water is better</span>
                                                        <span class="d-block h5">$12.99</span>
                                                    </div>
                                                </a>

                                            </div>

                                        </div>

                                    </li>
                                </ul>
                            </div>

                        </li>


                        <!-- Luxury -->
                        <li class="nav-item dropdown dropdown-mega">

                            <a href="#" id="mainNavWomen" class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                !Luxury
                            </a>

                            <div aria-labelledby="mainNavWomen"
                                class="dropdown-menu dropdown-menu-hover dropdown-menu-clean dropdown-fadeindown rounded-xl rounded-top-0">
                                <ul class="list-unstyled m-0 p-0">
                                    <li class="dropdown-item bg-transparent">

                                        <div class="row g-2">

                                            <!-- col 1 -->
                                            <div class="col-12 col-lg-4 col-xl-3">

                                                <ul class="list-unstyled">
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">Modern furniture</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">Living room</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">Exotic plants</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">Kitchen design</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">Bathroom accessories</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">Caffe & chair sets</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">Garden accessories</a></li>
                                                    <li class="dropdown-item"><a class="dropdown-link"
                                                            href="#">Garden accessories</a></li>
                                                </ul>

                                            </div>

                                            <!-- col 2 -->
                                            <div class="col">

                                                <!-- bst selling item -->
                                                <a href="#" style="min-height:300px;"
                                                    class="d-block position-relative h-100 bg-cover overlay-dark overlay-opacity-3 overlay-opacity-4-hover text-white rounded lazy"
                                                    data-background-image="demo.files/images/unsplash/products/plants/photo-1531982560660-d9d15efdbe49.jpeg">
                                                    <div
                                                        class="position-absolute fw-medium top-0 p-3 p-lg-4 d-flex flex-column">
                                                        <span class="d-block text-uppercase small">Best Seller</span>
                                                        <span class="d-block h4 mb-3">Exotic room plants</span>
                                                        <span class="d-block h5">$46.99</span>
                                                    </div>
                                                </a>

                                            </div>

                                        </div>

                                    </li>
                                </ul>
                            </div>

                        </li>


                        <!-- New arrivals -->
                        <li class="nav-item dropdown dropdown-mega">

                            <a href="#" id="mainNavNewArrivals" class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                !New Arrivals
                            </a>

                            <div aria-labelledby="mainNavNewArrivals"
                                class="dropdown-menu dropdown-menu-hover dropdown-menu-clean dropdown-fadeindown rounded-xl rounded-top-0">
                                <ul class="list-unstyled m-0 p-0">
                                    <li class="dropdown-item bg-transparent">

                                        <div class="row g-4">

                                            <!-- col 1 -->
                                            <div class="col-12 col-md-4">

                                                <!-- item -->
                                                <div class="ratio ratio-4x3 bg-cover overlay-dark overlay-opacity-3 text-white rounded lazy"
                                                    data-background-image="demo.files/images/unsplash/products/thumb_330/nikolai-chernichenko-oyr64kMIz98-unsplash-min.jpg">
                                                    <div
                                                        class="position-absolute fw-medium top-0 p-3 p-lg-4 text-center d-flex flex-column align-items-center justify-content-center">
                                                        <span class="d-block text-uppercase smaller">Home &
                                                            Garden</span>
                                                        <span class="d-block mb-3">Exotic room plants</span>
                                                        <a class="btn btn-sm btn-light" href="#">Shop Now</a>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- col 2 -->
                                            <div class="col-12 col-md-4">

                                                <!-- item -->
                                                <div class="ratio ratio-4x3 bg-cover overlay-dark overlay-opacity-3 text-white rounded lazy"
                                                    data-background-image="demo.files/images/unsplash/products/cosmetics/the-honest-company-jPQE61INdTg-unsplash-min.jpg">
                                                    <div
                                                        class="position-absolute fw-medium top-0 p-3 p-lg-4 text-center d-flex flex-column align-items-center justify-content-center">
                                                        <span class="d-block text-uppercase smaller">Women</span>
                                                        <span class="d-block mb-3">New lipstick</span>
                                                        <a class="btn btn-sm btn-light" href="#">Shop Now</a>
                                                    </div>
                                                </div>

                                            </div>

                                            <!-- col 3 -->
                                            <div class="col-12 col-md-4">

                                                <!-- item -->
                                                <div class="ratio ratio-4x3 bg-cover overlay-dark overlay-opacity-3 text-white rounded lazy"
                                                    data-background-image="demo.files/images/unsplash/products/thumb_330/aidan-hancock-UtzrcidfCsk-unsplash-min.jpg">
                                                    <div
                                                        class="position-absolute fw-medium top-0 p-3 p-lg-4 text-center d-flex flex-column align-items-center justify-content-center">
                                                        <span class="d-block text-uppercase smaller">Apple</span>
                                                        <span class="d-bloc mb-3">New Mackbook Pro</span>
                                                        <a class="btn btn-sm btn-light" href="#">Shop Now</a>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>

                                    </li>
                                </ul>
                            </div>

                        </li>


                        <li class="nav-item">
                            <a href="landing-0.html" class="nav-link">Back to main</a>
                        </li>


                        <li class="nav-item d-block d-sm-none text-center mb-4">

                            <h3 class="h6 text-muted">Follow Us</h3>

                            <a href="#"
                                class="btn btn-sm btn-facebook transition-hover-top mb-2 rounded-circle text-white"
                                rel="noopener">
                                <i class="fi fi-social-facebook"></i>
                            </a>

                            <a href="#"
                                class="btn btn-sm btn-twitter transition-hover-top mb-2 rounded-circle text-white"
                                rel="noopener">
                                <i class="fi fi-social-twitter"></i>
                            </a>

                            <a href="#"
                                class="btn btn-sm btn-linkedin transition-hover-top mb-2 rounded-circle text-white"
                                rel="noopener">
                                <i class="fi fi-social-linkedin"></i>
                            </a>

                            <a href="#"
                                class="btn btn-sm btn-youtube transition-hover-top mb-2 rounded-circle text-white"
                                rel="noopener">
                                <i class="fi fi-social-youtube"></i>
                            </a>

                        </li>

                        <li class="nav-item d-block d-sm-none">
                            <a target="_blank" href="#buy_now"
                                class="btn w-100 btn-primary shadow-none text-white m-0">
                                Get Smarty
                            </a>
                        </li>

                    </ul>
                </div>
            </nav>

        </div>
    </div>

</header>
