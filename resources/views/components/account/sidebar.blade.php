<style>
    #user-profile-photo {
        width: 68px;
        height: 68px;
        object-fit: cover;
    }
    .profile-image-container {
        position: relative;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 50%;
        cursor: pointer;
    }

    .profile-image {
        display: block;
        color: #ccc;
    }

    .hover-text {
        display: none;
        position: absolute;
        top: 50%;
        left: 50%;
        cursor: pointer;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.7);
        color: #fff;
        height: 68px;
        width: 68px;
        font-size: 10pt;
        justify-content: center;
        align-items: center;
        border-radius: 50%;
    }

    .file-input {
        display: none;
    }

    .profile-image-container:hover .hover-text {
        display: flex;
    }
</style>

<nav class="sticky-kit nav-deep nav-deep-light">

    <div class="card">
        <div class="card-body p-0 p-md-4">

            <!-- mobile only -->
            <button
                class="clearfix btn btn-toggle btn-sm w-100 text-align-left shadow-md border rounded d-block d-lg-none"
                data-bs-target="#nav_responsive"
                data-toggle-container-class="d-none d-sm-block bg-white shadow-md border animate-fadein rounded p-3">
                <span class="group-icon px-2 py-2 float-start">
                    <i class="fi fi-bars-2"></i>
                    <i class="fi fi-close"></i>
                </span>

                <span class="h5 py-2 m-0 float-start">
                    Account Menu
                </span>
            </button>


            <!-- navbar : navigation -->
            <ul id="nav_responsive" class="nav flex-column d-none d-lg-block mt-1 mt-lg-0">
                <li>
                    <form id="profile-form" action="/account/settings/update-user-avatar" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex align-items-center mb-2 pb-4 border-bottom">

                            <div class="profile-image-container">
                                <img src="{{ auth()->user()->avatar }}" class="rounded-circle"
                                    id="user-profile-photo" alt="" loading="lazy">

                                <label for="profile-picture-input" class="hover-text" id="change-picture-label">
                                    <span class="text-center">Change Image</span>
                                </label>
                                <input type="file" id="profile-picture-input" name="avatar" class="file-input" accept="image/*">
                            </div>
                            <div class="w-100 px-3">
                                <span>Hello,</span>
                                <span class="d-block fw-bold">
                                    {{ auth()->user()->name }}
                                </span>
                            </div>
                        </div>
                    </form>
                </li>
                <li class="nav-item {{ Request::is('account') ? 'active' : '' }}">
                    <a class="nav-link px-0 d-flex align-items-center" href="/account">
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
                </li>
                <li class="nav-item">
                    <a class="nav-link px-0 d-flex align-items-center" href="account-orders.html">
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
                </li>
                <li class="nav-item">
                    <a class="nav-link px-0 d-flex align-items-center" href="account-favourites.html">
                        <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8 2.748l-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z">
                            </path>
                        </svg>
                        <span>Favourites</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-0 d-flex align-items-center" href="account-reward.html">
                        <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z">
                            </path>
                            <path fill-rule="evenodd"
                                d="M11.315 10.014a.5.5 0 0 1 .548.736A4.498 4.498 0 0 1 7.965 13a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .548-.736h.005l.017.005.067.015.252.055c.215.046.515.108.857.169.693.124 1.522.242 2.152.242.63 0 1.46-.118 2.152-.242a26.58 26.58 0 0 0 1.109-.224l.067-.015.017-.004.005-.002zM4.756 4.566c.763-1.424 4.02-.12.952 3.434-4.496-1.596-2.35-4.298-.952-3.434zm6.488 0c1.398-.864 3.544 1.838-.952 3.434-3.067-3.554.19-4.858.952-3.434z">
                            </path>
                        </svg>
                        <span>Reward points</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-0 d-flex align-items-center" href="account-coupons.html">
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
                </li>
                <li class="nav-item">
                    <a class="nav-link px-0 d-flex align-items-center" href="account-reviews.html">
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
                </li>
                <li class="nav-item {{ Request::is('account/privacy') ? 'active' : '' }}">
                    <a class="nav-link px-0 d-flex align-items-center" href="/account/privacy">
                        <i class="fa fa-lock pe-1 text-gray-600 float-start"></i>
                        <span>Privacy</span>
                    </a>
                </li>
                <li class="nav-item {{ Request::is('account/settings') ? 'active' : '' }}">
                    <a class="nav-link px-0 d-flex align-items-center" href="/account/settings">
                        <svg class="text-gray-600 float-start" width="18px" height="18px" viewBox="0 0 16 16"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M.102 2.223A3.004 3.004 0 0 0 3.78 5.897l6.341 6.252A3.003 3.003 0 0 0 13 16a3 3 0 1 0-.851-5.878L5.897 3.781A3.004 3.004 0 0 0 2.223.1l2.141 2.142L4 4l-1.757.364L.102 2.223zm13.37 9.019L13 11l-.471.242-.529.026-.287.445-.445.287-.026.529L11 13l.242.471.026.529.445.287.287.445.529.026L13 15l.471-.242.529-.026.287-.445.445-.287.026-.529L15 13l-.242-.471-.026-.529-.445-.287-.287-.445-.529-.026z">
                            </path>
                        </svg>
                        <span>Account settings</span>
                    </a>
                </li>

                <li class="nav-item border-top my-3"></li>

                <li class="nav-item">
                    <a class="nav-link px-0" href="/logout">
                        <i class="fi fi-power float-start"></i>
                        Log Out
                    </a>
                </li>

            </ul>

        </div>
    </div>

</nav>



<script>
    document.addEventListener("DOMContentLoaded", function() {
        var fileInput = document.getElementById("profile-picture-input");
        var profileForm = document.getElementById("profile-form");

        fileInput.onchange = function() {
            profileForm.submit();
        };

    });
</script>
