@extends('layouts.app')

@section('title', 'Welcome')

@section('content')

    <!-- Main -->
    <div class="section bg-light">
        <div class="container">

            <!-- main title : SEO Purpose -->
            <h1 class="h5 mb-3 text-secondary text-center-xs fw-normal">
                <span class="text-danger fw-medium">Smarty</span> #1 classifieds website in Europe &amp; Asia
            </h1>

            <form novalidate method="get" action="#" class="bs-validate bg-white rounded shadow-xs px-2 pb-3">
                <div class="row g-0">

                    <!-- keywords -->
                    <div class="col-12 col-md-6">
                        <div class="px-2 pt-3 position-relative">

                            <input required class="form-control form-control-lg px-5" type="text" name="kw"
                                placeholder="What are you looking today?">
                            <i class="fi fi-search position-absolute top-0 start-0 mx-4 mt-4 pt-1 text-muted fs-4"></i>

                        </div>
                    </div>

                    <!-- city/location -->
                    <div class="col-12 col-md-4">
                        <div class="px-2 pt-3 position-relative">

                            <input class="form-control form-control-lg px-5" type="text" name="loc"
                                placeholder="Any City">
                            <i class="fi fi-pin-2 position-absolute top-0 start-0 mx-4 mt-4 pt-1 text-muted fs-4"></i>

                        </div>
                    </div>

                    <!-- submit -->
                    <div class="col-12 col-md-2">
                        <div class="px-2 pt-3 position-relative">

                            <button type="submit" class="btn btn-lg btn-warning w-100">
                                <span class="px-2">Search</span>
                                <i class="fi fi-arrow-end"></i>
                            </button>

                        </div>
                    </div>

                </div>
            </form>



            <!-- top 10 categories : highest traffic -->
            <div class="mt-6">

                <h2 class="h5 mb-3 text-secondary fw-normal">
                    <span class="text-danger fw-medium">2.178.322</span> items <span class="text-gray-500">/ explore by
                        category</span>
                </h2>

                <div class="row gutters-sm">

                    <div class="col-6 col-md-4 col-lg-5th mb-3">

                        <a href="niche.classifieds-category.html"
                            class="d-block bg-white shadow shadow-md-hover transition-hover-top transition-all-ease-250 rounded px-3 py-4 text-center text-decoration-none">

                            <svg width="50" viewBox="0 0 431.789 431.789">
                                <path fill="#6c757d"
                                    d="M422.438,151.93H390.77c-2.412,0-4.73,0.932-6.471,2.6l-6.76,6.476c-11.395-26.366-27.742-52.439-49.822-79.432c-11.936-14.585-29.586-22.949-48.43-22.949H152.501c-18.846,0-36.497,8.365-48.426,22.95c-22.777,27.842-38.799,53.287-49.924,79.338l-6.66-6.383c-1.741-1.668-4.06-2.6-6.472-2.6H9.353c-5.166,0-9.353,4.187-9.353,9.353v21.651c0,4.937,3.838,9.022,8.765,9.334l32.549,2.05c-4.918,14.371-8.758,35.786-8.758,65.987c0,26.205,5.234,43.428,14.343,54.578v50.449c0,4.326,3.507,7.832,7.833,7.832h36.029c4.328,0,7.836-3.506,7.836-7.832v-31.328h234.596v31.328c0,4.326,3.508,7.832,7.834,7.832h36.029c4.326,0,7.834-3.506,7.834-7.832v-50.449c9.107-11.15,14.344-28.373,14.344-54.578c0-30.201-3.84-51.616-8.758-65.987l32.549-2.05c4.926-0.312,8.764-4.397,8.764-9.334v-21.651C431.789,156.117,427.604,151.93,422.438,151.93z M130.806,103.442c5.346-6.534,13.254-10.283,21.695-10.283h126.786c8.441,0,16.352,3.749,21.697,10.283c15.447,18.883,27.646,36.954,37.074,54.955l-244.543,0.046C102.737,140.842,115.005,122.756,130.806,103.442z M104.157,295.693c-17.933,0-32.469-5.857-32.469-20.066c0-14.208,5.274-25.729,23.206-25.729s41.73,11.521,41.73,25.729S122.087,295.693,104.157,295.693z M249.93,292.732h-68.069c-10.262,0-18.61-8.348-18.61-18.609c0-2.878,2.334-5.212,5.214-5.212h94.863c2.879,0,5.211,2.334,5.211,5.212C268.539,284.385,260.191,292.732,249.93,292.732z M327.633,295.693c-17.932,0-32.469-5.857-32.469-20.066c0-14.208,23.801-25.729,41.73-25.729c17.932,0,23.207,11.521,23.207,25.729S345.566,295.693,327.633,295.693z">
                                </path>
                            </svg>

                            <p class="text-muted fw-medium mb-0 mt-3">
                                Auto &amp; Moto
                            </p>

                        </a>

                    </div>


                    <div class="col-6 col-md-4 col-lg-5th mb-3">

                        <a href="niche.classifieds-category.html"
                            class="d-block bg-white shadow shadow-md-hover transition-hover-top transition-all-ease-250 rounded px-3 py-4 text-center text-decoration-none">

                            <!-- badge -->
                            <div class="badge bg-success-soft position-absolute top-0 end-0 m-1">NEW</div>

                            <svg width="50" viewBox="0 0 58.365 58.365">
                                <path fill="#6c757d"
                                    d="M57.863,26.632L29.182,0L0.502,26.632c-0.404,0.376-0.428,1.009-0.052,1.414c0.374,0.404,1.009,0.427,1.413,0.052l4.319-4.011v3.278v31h16v-18c0-3.866,3.134-7,7-7s7,3.134,7,7v18h16v-31v-3.278l4.319,4.011c0.192,0.179,0.437,0.267,0.681,0.267c0.269,0,0.536-0.107,0.732-0.319C58.291,27.641,58.267,27.008,57.863,26.632z">
                                </path>
                            </svg>

                            <p class="text-muted fw-medium mb-0 mt-3">
                                Real Estate
                            </p>

                        </a>

                    </div>


                    <div class="col-6 col-md-4 col-lg-5th mb-3">

                        <a href="niche.classifieds-category.html"
                            class="d-block bg-white shadow shadow-md-hover transition-hover-top transition-all-ease-250 rounded px-3 py-4 text-center text-decoration-none">

                            <svg width="50" viewBox="0 -31 512 512">
                                <path fill="#6c757d" d="m211 240h90v30h-90zm0 0"></path>
                                <path fill="#6c757d"
                                    d="m415.378906 270h-84.378906v15c0 8.289062-6.710938 15-15 15h-120c-8.289062 0-15-6.710938-15-15v-15h-84.378906c-19.394532 0-36.546875-12.363281-42.6875-30.761719l-53.933594-161.828125v327.589844c0 24.8125 20.1875 45 45 45h422c24.8125 0 45-20.1875 45-45v-327.578125l-53.9375 161.816406c-6.136719 18.398438-23.289062 30.761719-42.683594 30.761719zm0 0">
                                </path>
                                <path fill="#6c757d"
                                    d="m316 0h-120c-24.8125 0-45 20.1875-45 45v15h-125.191406l56.574218 169.746094c2.050782 6.136718 7.777344 10.253906 14.238282 10.253906h84.378906v-15c0-8.289062 6.710938-15 15-15h120c8.289062 0 15 6.710938 15 15v15h84.378906c6.460938 0 12.1875-4.117188 14.238282-10.253906l56.578124-169.746094h-125.195312v-15c0-24.8125-20.1875-45-45-45zm-135 60v-15c0-8.277344 6.722656-15 15-15h120c8.277344 0 15 6.722656 15 15v15zm0 0">
                                </path>
                            </svg>

                            <p class="text-muted fw-medium mb-0 mt-3">
                                Jobs
                            </p>

                        </a>

                    </div>


                    <div class="col-6 col-md-4 col-lg-5th mb-3">

                        <a href="niche.classifieds-category.html"
                            class="d-block bg-white shadow shadow-md-hover transition-hover-top transition-all-ease-250 rounded px-3 py-4 text-center text-decoration-none">

                            <svg width="50" viewBox="0 0 70.07 70.07">
                                <path fill="#6c757d"
                                    d="M65.094,32.195h-6.982h-0.934c-2.064,0-3.738,1.674-3.738,3.745v0.406c0,2.073,1.674,3.748,3.741,3.748h6.989h0.924c2.068,0,3.747-1.682,3.747-3.748l-0.004-0.411C68.841,33.869,67.162,32.195,65.094,32.195z">
                                </path>
                                <path fill="#6c757d"
                                    d="M65.098,22.852h-1.649V4.734c0-2.604-2.13-4.734-4.735-4.734H27.475c-2.604,0-4.734,2.131-4.734,4.734v12.999c-6.301,3.562-12.8,7.283-12.814,7.292C6.399,26.477,1.23,31.162,1.23,42.225c0,0.988,0.065,1.9,0.156,2.781c0.029,0.258,0.061,0.506,0.096,0.755c0.091,0.647,0.205,1.266,0.341,1.854c0.049,0.21,0.087,0.429,0.14,0.63c0.183,0.68,0.395,1.318,0.633,1.925c0.12,0.301,0.25,0.575,0.381,0.857c0.14,0.297,0.281,0.589,0.432,0.862c0.175,0.329,0.35,0.646,0.542,0.947c0.046,0.07,0.096,0.134,0.143,0.205c4.556,6.887,12.961,6.918,12.961,6.918h5.686v5.379c0,2.601,2.13,4.731,4.734,4.731h31.238c2.605,0,4.735-2.131,4.735-4.731v-6.561h0.722v-0.004h0.921c2.071,0,3.75-1.675,3.746-3.746l0.004-0.408c-0.004-2.068-1.679-3.738-3.747-3.738H64.17h-6.059h-0.934c-2.068,0-3.738,1.674-3.738,3.741v0.415c0,2.062,1.674,3.743,3.741,3.743h2.974v2.534h-34.12V27.323c1.714-1.087,3.301-2.133,4.206-2.834c4.585-3.546,8.937-6.37,9.526-8.931c0.767-3.323-1.784-6.123-6.209-3.824c-1.394,0.724-4.255,2.311-7.523,4.146V7.502l34.12,0.005V22.85h-2.043v0.004h-0.929c-2.069,0-3.748,1.674-3.748,3.747v0.406c0,2.072,1.679,3.742,3.743,3.742h0.929h6.059h0.931c2.066,0,3.741-1.674,3.741-3.742V26.59C68.841,24.531,67.167,22.852,65.098,22.852z M43.09,62.976c1.312,0,2.37,1.059,2.37,2.368c0,1.312-1.059,2.367-2.37,2.367c-1.307,0-2.363-1.058-2.363-2.367C40.729,64.039,41.788,62.976,43.09,62.976z M48.093,4.558h-9.996c-0.314,0-0.574-0.255-0.574-0.57c0-0.32,0.26-0.575,0.574-0.575h9.996c0.314,0,0.57,0.254,0.57,0.575C48.663,4.302,48.407,4.558,48.093,4.558z">
                                </path>
                                <path fill="#6c757d"
                                    d="M65.094,41.538H64.17h-6.992c-2.064,0-3.743,1.679-3.743,3.746v0.41c0,2.069,1.675,3.743,3.743,3.743h0.929h6.059h0.926c2.071,0,3.741-1.674,3.746-3.743v-0.41C68.837,43.217,67.167,41.538,65.094,41.538z">
                                </path>
                            </svg>

                            <p class="text-muted fw-medium mb-0 mt-3">
                                Electronics
                            </p>

                        </a>

                    </div>


                    <div class="col-6 col-md-4 col-lg-5th mb-3">

                        <a href="niche.classifieds-category.html"
                            class="d-block bg-white shadow shadow-md-hover transition-hover-top transition-all-ease-250 rounded px-3 py-4 text-center text-decoration-none">

                            <svg width="50" viewBox="0 0 512.001 512.001">
                                <path fill="#6c757d"
                                    d="M341.13,56.104V0h-30.046v64.54c-19.381,8.496-36.268,22.412-48.356,40.544L256,115.176l-6.728-10.092c-12.087-18.131-28.975-32.048-48.356-40.544V0H170.87v56.104c-4.945-0.667-9.959-1.02-15.023-1.02v66.101c0,33.188,26.904,60.092,60.092,60.092h80.122c33.188,0,60.092-26.904,60.092-60.092V55.084C351.09,55.084,346.075,55.437,341.13,56.104z">
                                </path>
                                <path fill="#6c757d"
                                    d="M326.107,211.323H185.893L16.635,475.727v1.002c156.111,47.03,322.619,47.03,478.731,0v-1.002L326.107,211.323z">
                                </path>
                            </svg>

                            <p class="text-muted fw-medium mb-0 mt-3">
                                Fashion
                            </p>

                        </a>

                    </div>


                    <div class="col-6 col-md-4 col-lg-5th mb-3">

                        <a href="niche.classifieds-category.html"
                            class="d-block bg-white shadow shadow-md-hover transition-hover-top transition-all-ease-250 rounded px-3 py-4 text-center text-decoration-none">

                            <svg width="50" viewBox="0 0 448.262 448.262">
                                <path fill="#6c757d"
                                    d="M221.2,164.587c4.217,1.654,8.354-2.394,6.956-6.701c-9.594-29.565-44.331-40.594-76.623-14.364c-16.986,13.799-23.369,16.731-23.53,16.805c11.198,11.196,23.991,48.766,51.91,52.921c30.755,5.576,57.975-24.682,35.705-38.528c-14.646-9.105-31.89-14.394-50.374-14.394C184.622,155.958,203.967,157.831,221.2,164.587z">
                                </path>
                                <path fill="#6c757d"
                                    d="M360.464,143.52c-55.742-45.278-91.291,26.126-69.194,19.048c15.694-5.027,32.851-6.122,50.061-2.243c-29.159,0-56.038,13.363-73.959,35.114c1.472-34.182,3.698-55.578,6.279-71.494c14.895-0.512,34.747-12.54,45.649-33.587c18.795-33.636,10.079-68.124,7.274-89.886c-14.686,14.301-78.839-2.456-104.271,41.124c-11.234,19.251-7.969,42.677,3.849,59.82c3.741,5.427,12.686,2.823,12.941-3.763c1.11-28.65,15.369-50.296,41.951-62.285c-11.928,15.455-19.76,32.758-23.806,50.642c-6.289,27.859-12.858,46.134-15.27,134.929c-0.245,9.005,7.05,16.459,16.058,16.346c6.521-0.082,12.107-4.22,14.615-10.24c3.814-9.156,10.022-18.632,20.124-27.314c9.6,10.611,24.208,16.257,39.323,13.516c27.8-4.137,40.774-41.789,51.909-52.923C383.834,160.252,377.45,157.32,360.464,143.52z">
                                </path>
                                <path fill="#6c757d"
                                    d="M442.406,254.158c-17.426-11.823-36.392-3.398-45.102,1.631l-109.304,80l-64,0.014l-16-16h58.776c17.677,0,37.474-11.514,37.474-32.007c0-21.757-19.797-32.007-37.474-32.007h-22.026c-16.362,0-35.483,1.459-48.965-5.758c-12.809-6.518-27.559-10.227-43.304-10.227c-26.439,0-50.102,10.54-66.317,27.162L0,351.789l96,96l32-48h151.216c16.127,0,31.694-5.916,43.75-16.626L443.5,276.088C450.201,270.136,449.823,259.191,442.406,254.158z">
                                </path>
                            </svg>

                            <p class="text-muted fw-medium mb-0 mt-3">
                                Home &amp; Garden
                            </p>

                        </a>

                    </div>


                    <div class="col-6 col-md-4 col-lg-5th mb-3">

                        <a href="niche.classifieds-category.html"
                            class="d-block bg-white shadow shadow-md-hover transition-hover-top transition-all-ease-250 rounded px-3 py-4 text-center text-decoration-none">

                            <svg width="50" viewBox="0 0 31.793 31.794">
                                <path fill="#6c757d"
                                    d="M16.211,8.913c2.38,0,4.308-1.996,4.308-4.454C20.519,1.996,18.591,0,16.211,0c-2.382,0-4.314,1.996-4.314,4.459C11.897,6.917,13.829,8.913,16.211,8.913z">
                                </path>
                                <path fill="#6c757d"
                                    d="M23.855,12.692c-0.214-0.65-1.436-2.621-4.752-2.639l-6.491,0.017c-3.219-0.18-4.504,1.722-4.705,2.565c0,0-2.174,6.941-1.801,8.549c0.231,0.998,1.963,2.219,3.807,3.127l-2.456,7.483h17.318l-2.389-7.745c1.646-0.871,3.092-1.958,3.301-2.865C26.065,19.557,23.855,12.692,23.855,12.692z M13.307,20.341c-0.301,0.134-0.634,0.211-0.983,0.211c-1.354,0-2.45-1.114-2.45-2.487s1.097-2.486,2.45-2.486c1.329,0,2.421,1.076,2.457,2.418c0.422-0.303,0.854-0.445,1.178-0.504c0,0.002,0,0.004,0,0.007c0.487-0.093,0.865,0,0.865,0c1.634,0.362,5.245,1.964,5.245,1.964s-1.938,2.4-5.458,2.385c-0.092,0-0.182-0.002-0.267-0.006h-0.001c-0.324-0.008-0.615-0.029-0.877-0.061C13.804,21.586,13.328,20.966,13.307,20.341z">
                                </path>
                            </svg>

                            <p class="text-muted fw-medium mb-0 mt-3">
                                Mom &amp; Kids
                            </p>

                        </a>

                    </div>


                    <div class="col-6 col-md-4 col-lg-5th mb-3">

                        <a href="niche.classifieds-category.html"
                            class="d-block bg-white shadow shadow-md-hover transition-hover-top transition-all-ease-250 rounded px-3 py-4 text-center text-decoration-none">

                            <svg width="50" viewBox="0 0 953 953">
                                <path fill="#6c757d"
                                    d="M430.589,953c236.6,0,428.401-191.801,428.401-428.4c0-72.799-18.102-141.299-50.102-201.299c-3.5,0.5-7.1,0.7-10.6,0.7c-2,0-4.1-0.1-6.199-0.2l-54.5-4.2l-39.201,39.2c29.9,48.2,47.201,105,47.201,165.799c0,173.9-141,314.9-314.901,314.9c-173.899,0-315-141-315-314.9c0-173.899,141-314.899,314.9-314.899c60.901,0,117.7,17.3,165.799,47.2l35.5-35.5l-4.799-62.5c-0.4-5-0.301-10,0.199-14.9c-58.9-30.5-125.799-47.8-196.799-47.8c-236.5,0-428.3,191.8-428.3,428.399S193.989,953,430.589,953z">
                                </path>
                                <path fill="#6c757d"
                                    d="M430.589,413.9c2.8,0,5.6,0.101,8.4,0.3l79.1-79.1l1.699-1.7c-27.1-12.7-57.299-19.8-89.2-19.8c-116.5,0-210.9,94.4-210.9,210.9c0,116.5,94.4,211,210.9,211c116.5,0,210.901-94.4,210.901-210.9c0-31.9-7.102-62.099-19.801-89.2l-1.699,1.7l-79.102,79.099c0.201,2.801,0.301,5.602,0.301,8.4c0,61.1-49.5,110.701-110.7,110.701c-61.2,0-110.601-49.602-110.601-110.701C319.889,463.5,369.489,413.9,430.589,413.9z">
                                </path>
                                <path fill="#6c757d"
                                    d="M872.089,142.6l25.4-25.4c11.6-11.6,11.6-30.3,0-41.9l-17.602-17.7c-5.799-5.8-13.398-8.7-20.898-8.7s-15.201,2.9-20.9,8.7l-29.1,29.1l-6-77.5c-0.4-5.7-5.102-9.2-10-9.2c-2.5,0-5,0.9-7,2.9l-114.5,114.5c-10.301,10.3-15.602,24.6-14.5,39.2l0.299,4.5l5.5,71.7l-41.4,41.4l-74.5,74.5l-1.699,1.7l-72.1,72.101l-32,32c-4.2,4.199-6.8,9.8-7.2,15.699l-2,25.101c-1.2,14.6,10.4,27,24.9,27c0.399,0,0.8,0,1.3,0l26.5-1.301c6.199-0.301,12.1-2.9,16.4-7.301L532.689,482l72.1-72.1l1.701-1.7l74.5-74.5l45-45l65.398,5l2.9,0.2c1.301,0.1,2.6,0.1,3.801,0.1c13.199,0,25.9-5.2,35.4-14.6L947.888,165c6-6,2.201-16.4-6.299-17L872.089,142.6z">
                                </path>
                            </svg>

                            <p class="text-muted fw-medium mb-0 mt-3">
                                Sport, Art
                            </p>

                        </a>

                    </div>


                    <div class="col-6 col-md-4 col-lg-5th mb-3">

                        <a href="niche.classifieds-category.html"
                            class="d-block bg-white shadow shadow-md-hover transition-hover-top transition-all-ease-250 rounded px-3 py-4 text-center text-decoration-none">

                            <svg width="50" viewBox="0 0 489.576 489.576">
                                <path fill="#6c757d"
                                    d="M330.973,255.208c-22.181-34.606-60.458-55.538-101.556-55.538c-41.093,0-79.37,20.931-101.55,55.538l-61.063,95.255c-16.723,26.092-14.388,60.059,5.737,83.614c20.151,23.556,53.343,31.143,81.728,18.668l0.019-0.017c47.878-21.044,102.388-21.044,150.28,0.017c28.368,12.475,61.56,4.897,81.713-18.659c20.142-23.555,22.477-57.531,5.754-83.623L330.973,255.208z">
                                </path>
                                <path fill="#6c757d"
                                    d="M78.688,246.023c28.07-10.786,40.537-46.255,27.859-79.189c-12.686-32.927-45.717-50.89-73.756-40.087C4.743,137.532-7.706,172.994,4.949,205.935C17.641,238.852,50.674,256.824,78.688,246.023z">
                                </path>
                                <path fill="#6c757d"
                                    d="M188.936,186.381c36.563,0,66.215-34.815,66.215-77.741c0-42.944-29.652-77.758-66.215-77.758c-36.553,0-66.206,34.813-66.206,77.758C122.73,151.566,152.383,186.381,188.936,186.381z">
                                </path>
                                <path fill="#6c757d"
                                    d="M312.391,209.488c34.697,11.53,73.822-12.162,87.363-52.898c13.55-40.742-3.621-83.134-38.297-94.663c-34.699-11.529-73.823,12.162-87.354,52.905C260.561,155.575,277.715,197.959,312.391,209.488z">
                                </path>
                                <path fill="#6c757d"
                                    d="M469.653,197.798c-24.182-17.866-60.784-9.377-81.789,18.996c-20.98,28.381-18.406,65.876,5.729,83.742c24.128,17.876,60.773,9.379,81.79-18.988C496.362,253.168,493.781,215.666,469.653,197.798z">
                                </path>
                            </svg>

                            <p class="text-muted fw-medium mb-0 mt-3">
                                Pets
                            </p>

                        </a>

                    </div>


                    <div class="col-6 col-md-4 col-lg-5th mb-3">

                        <a href="niche.classifieds-category.html"
                            class="d-block bg-white shadow shadow-md-hover transition-hover-top transition-all-ease-250 rounded px-3 py-4 text-center text-decoration-none">

                            <svg width="50" viewBox="0 0 512 512">
                                <path fill="#6c757d"
                                    d="M123.733,130.133c-17.067-17.067-89.6-21.333-113.067-23.467c-2.133,0-4.267,0-6.4,2.133C2.133,110.933,0,115.2,0,117.333v192C0,315.733,4.267,320,10.667,320h64c4.267,0,8.533-2.133,10.667-6.4c0-6.4,38.4-119.467,42.667-174.933C128,136.533,128,132.267,123.733,130.133z">
                                </path>
                                <path fill="#6c757d"
                                    d="M352,181.333c-21.333-6.4-40.533-14.933-57.6-21.333c-38.4-17.067-55.467-8.533-89.6,25.6c-14.933,14.933-25.6,36.267-23.467,44.8c0,2.133,0,2.133,4.267,4.267c10.667,4.267,25.6,6.4,40.533-17.067c2.133-2.133,4.267-4.267,8.533-4.267c6.4,0,8.533-2.133,14.933-4.267c4.267-2.133,8.533-4.267,14.933-6.4c2.133,0,2.133,0,4.267,0c2.133,0,6.4,2.133,8.533,2.133C288,215.467,307.2,230.4,326.4,247.467c29.867,23.467,59.733,49.067,74.667,68.267h2.133C388.267,273.067,362.667,200.533,352,181.333z">
                                </path>
                                <path fill="#6c757d"
                                    d="M501.333,128c-83.2,0-130.133,21.333-132.267,21.333c-2.133,2.133-4.267,4.267-6.4,6.4c0,2.133,0,6.4,2.133,8.533c12.8,21.333,55.467,138.667,61.867,168.533c2.133,4.267,6.4,8.533,10.667,8.533h64c6.4,0,10.667-4.267,10.667-10.667v-192C512,132.267,507.733,128,501.333,128z">
                                </path>
                                <path fill="#6c757d"
                                    d="M386.133,337.067c-8.533-19.2-44.8-46.933-76.8-72.533C292.267,249.6,275.2,236.8,262.4,226.133c-2.133,2.133-6.4,2.133-6.4,4.267c-6.4,2.133-8.533,4.267-17.067,4.267C221.867,256,200.533,264.533,177.067,256c-10.667-2.133-17.067-10.667-19.2-19.2c-4.267-21.333,14.933-51.2,29.867-66.133h-42.667c-8.533,42.667-23.467,98.133-34.133,128c8.533,8.533,17.067,19.2,23.467,23.467c40.533,34.133,87.467,68.267,96,74.667c6.4,4.267,19.2,8.533,25.6,8.533c2.133,0,4.267,0,6.4,0L228.267,371.2c-4.267-4.267-4.267-10.667,0-14.933s10.667-4.267,14.933,0l42.667,42.667c4.267,4.267,8.533,2.133,12.8,2.133c6.4-2.133,8.533-6.4,10.667-12.8L260.267,339.2c-4.267-4.267-4.267-10.667,0-14.933s10.667-4.267,14.933,0l53.333,53.333c2.133,2.133,10.667,2.133,17.067,0c2.133-2.133,6.4-4.267,8.533-8.533L294.4,309.333c-4.267-4.267-4.267-10.667,0-14.933s10.667-4.267,14.933,0l61.867,61.867c4.267,2.133,8.533,0,12.8-2.133C386.133,352,390.4,345.6,386.133,337.067z">
                                </path>
                            </svg>

                            <p class="text-muted fw-medium mb-0 mt-3">
                                Business, Services
                            </p>

                        </a>

                    </div>


                    <!--
           <div class="col-6 col-md-4 col-lg-5th mb-3">

            <a href="niche.classifieds-category.html" class="d-block bg-white shadow shadow-md-hover transition-hover-top transition-all-ease-250 rounded px-3 py-4 text-center text-decoration-none">

             <svg width="50" viewBox="0 0 464.842 464.841">
              <path fill="#6c757d" d="M277.888,124.306h-21.123c-2.745,0-4.97-2.225-4.97-4.97s2.225-4.97,4.97-4.97h21.123c2.745,0,4.97,2.225,4.97,4.97S280.633,124.306,277.888,124.306z"></path>
              <path fill="#6c757d" d="M341.387,196.858c-68.072,0-123.454,49.15-123.454,117.224c0,32.625,12.947,62.438,36.455,83.945c22.833,20.89,53.729,32.395,86.999,32.395c33.271,0,64.169-11.505,87.001-32.395c23.508-21.509,36.454-51.32,36.454-83.945C464.842,246.009,409.46,196.858,341.387,196.858z M341.387,366.677c-29,0-52.595-23.594-52.595-52.595c0-29.002,23.595-52.596,52.595-52.596c29.001,0,52.595,23.594,52.595,52.596C393.981,343.083,370.388,366.677,341.387,366.677z"></path>
              <path fill="#6c757d" d="M87.4,260.648c-48.193,0-87.4,39.209-87.4,87.401c0,23.101,9.167,44.209,25.812,59.438c16.166,14.79,38.038,22.935,61.589,22.935c23.552,0,45.425-8.145,61.59-22.935c16.645-15.229,25.812-36.339,25.812-59.438C174.802,299.857,135.594,260.648,87.4,260.648z M87.4,385.113c-20.435,0-37.06-16.627-37.06-37.063c0-20.436,16.625-37.062,37.06-37.062s37.061,16.626,37.061,37.062C124.461,368.486,107.835,385.113,87.4,385.113z"></path>
              <path fill="#6c757d" d="M245.277,220.425c25.347-23.58,59.479-36.566,96.108-36.566c24.679,0,48.221,5.901,68.708,16.959c0.103,0.055,0.204,0.088,0.306,0.132c1.882,1.353,4.231,2.068,6.717,1.847c5.501-0.49,9.562-5.347,9.072-10.848c-0.093-1.047-9.351-104.934-11.104-125.312c-2.771-32.218-26.047-32.218-34.809-32.218H245.281c-12.047-0.024-34.378-0.013-41.274,34.135c-3.881,19.216-12.413,59.658-19,90.541c-34.663,0-67.15,0-92.26,0v-50.582c0-7.375-5.979-13.353-13.353-13.353s-13.353,5.979-13.353,13.353v50.582c-12.812,0-20.931,0-22.52,0c-38.677,0-50.627,83.074-29.327,120.321c18.33-19.54,44.365-31.77,73.208-31.77c50.5,0,92.405,37.479,99.376,86.083h19.604c-0.957-6.42-1.448-12.98-1.448-19.647C204.933,277.891,219.261,244.629,245.277,220.425z M395.159,68.352c1.099,12.771,5.136,58.241,8.026,90.744c-15.819,0-46.297,0-83.104,0V54.419h60.196C390.01,54.419,394.006,54.954,395.159,68.352z M223.611,72.513c3.656-18.1,10.463-18.087,21.663-18.094h58.807v104.676c-30.991,0-65.323,0-98.629,0C212.397,126.456,220.854,86.163,223.611,72.513z"></path>
             </svg>

             <p class="text-muted fw-medium mb-0 mt-3">
              Agriculture
             </p>

            </a>

           </div>
           -->

                </div>

            </div>
            <!-- /top 10 categories : highest traffic -->

        </div>
    </div>
    <!-- /Main -->

    <div class="section border-bottom py-5">
        <div class="container">
            <div class="row align-items-center text-center-xs">

                <div class="col-12 col-md-6">
                    <h3 class="m-0">Everywhere! Always! Connected!</h3>
                    <p class="m-0">You always want to be the first getting and doing the best deals!</p>
                </div>

                <div class="col-12 mb-4 d-block d-md-none"><!-- mobile spacer --></div>

                <div class="col-12 col-md-6 text-align-end text-center-xs">

                    <!-- App Store -->
                    <a href="#" class="btn btn-dark bg-gradient-dark border-0 mx-1 rounded-xl transition-hover-top">
                        <i class="float-start">
                            <svg height="32" viewBox="0 0 90 90">
                                <path fill="#ffffff"
                                    d="M49.645 6.817c3.232-3.8 8.695-6.627 13.203-6.817.575 5.279-1.541 10.565-4.669 14.374-3.133 3.802-8.261 6.764-13.294 6.369-.684-5.165 1.851-10.551 4.76-13.926zm25.646 72.01c-3.741 5.485-7.61 10.938-13.718 11.053-6.012.114-7.938-3.571-14.799-3.571-6.866 0-9.016 3.457-14.69 3.686-5.897.222-10.382-5.926-14.152-11.387-7.703-11.168-13.585-31.576-5.677-45.35 3.916-6.84 10.934-11.167 18.537-11.282 5.792-.107 11.263 3.917 14.799 3.917 3.544 0 10.185-4.831 17.165-4.122 2.922.121 11.123 1.181 16.391 8.912-.417.274-9.789 5.745-9.676 17.141.114 13.614 11.891 18.137 12.029 18.199-.108.32-1.884 6.459-6.209 12.804z" />
                            </svg>
                        </i>

                        <span class="float-start text-align-start px-2">
                            <span class="d-block lh-1 small">Download on the</span>
                            <span class="d-block lh-1 pt-1">App Store</span>
                        </span>
                    </a>

                    <div class="mt-3 d-block d-md-none"><!-- mobile spacer --></div>

                    <!-- Play Store -->
                    <a href="#" class="btn btn-dark bg-gradient-dark border-0 mx-1 rounded-xl transition-hover-top">
                        <i class="float-start">
                            <svg height="32" viewBox="0 0 512 512">
                                <path fill="#ffffff"
                                    d="M99.617 8.057c-11.664-7.537-25.674-9.815-38.815-6.713l230.932 230.933 74.846-74.846-266.963-149.374zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877-235.877-235.879zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711l-230.918 230.918c3.786.891 7.639 1.371 11.492 1.371 9.522 0 19.011-2.708 27.31-8.07l266.965-149.372-74.849-74.847z" />
                            </svg>
                        </i>

                        <span class="float-start text-align-start px-2">
                            <span class="d-block lh-1 small">Download on the</span>
                            <span class="d-block lh-1 pt-1">Play Store</span>
                        </span>
                    </a>

                </div>

            </div>
        </div>
    </div>
    <!-- /CALL TO ACTION : APP -->

    <!-- CONTENT  -->
    <div class="section">
        <div class="container">


            <!-- Sponsored / Hot -->
            <h2 class="h5 mb-3 fw-normal">
                Sponsored
            </h2>

            <div class="row">

                <!-- item -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <a href="niche.classifieds-item.html"
                        class="d-block p-2 shadow-xs border-0 text-decoration-none shadow-md-hover transition-hover-top transition-all-ease-250">

                        <!-- image -->
                        <div class="text-center bg-light rounded ratio ratio-4x3 bg-cover lazy"
                            data-background-image="/images/unsplash/products/thumb_330/aidan-hancock-LIFe9y3-HKE-unsplash-min.jpg">
                        </div>

                        <div class="card-body">

                            <h3 class="fs-6 fw-medium text-truncate text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            </h3>

                            <p class="m-0 text-danger">
                                $159.99
                            </p>

                        </div>

                    </a>
                </div>


                <!-- item -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <a href="niche.classifieds-item.html"
                        class="d-block p-2 shadow-xs border-0 text-decoration-none shadow-md-hover transition-hover-top transition-all-ease-250">

                        <!-- badge -->
                        <div class="badge bg-success-soft position-absolute top-0 end-0 m-2">NEW</div>

                        <!-- image -->
                        <div class="text-center bg-light rounded ratio ratio-4x3 bg-cover lazy"
                            data-background-image="/images/unsplash/products/thumb_330/imani-clovis-LxVxPA1LOVM-unsplash-min.jpg">
                        </div>

                        <div class="card-body">

                            <h3 class="fs-6 fw-medium text-truncate text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            </h3>

                            <p class="m-0 text-danger">
                                $159.99
                            </p>

                        </div>

                    </a>
                </div>


                <!-- item -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <a href="niche.classifieds-item.html"
                        class="d-block p-2 shadow-xs border-0 text-decoration-none shadow-md-hover transition-hover-top transition-all-ease-250">

                        <!-- image -->
                        <div class="text-center bg-light rounded ratio ratio-4x3 bg-cover lazy"
                            data-background-image="/images/unsplash/products/thumb_330/barrett-ward-fYYUgvHYgpU-unsplash-min.jpg">
                        </div>

                        <div class="card-body">

                            <h3 class="fs-6 fw-medium text-truncate text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            </h3>

                            <p class="m-0 text-danger">
                                $159.99
                            </p>

                        </div>

                    </a>
                </div>


                <!-- item -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <a href="niche.classifieds-item.html"
                        class="d-block p-2 shadow-xs border-0 text-decoration-none shadow-md-hover transition-hover-top transition-all-ease-250">

                        <!-- image -->
                        <div class="text-center bg-light rounded ratio ratio-4x3 bg-cover lazy"
                            data-background-image="/images/unsplash/products/thumb_330/hardik-sharma-CrPAvN29Nhs-unsplash-min.jpg">
                        </div>

                        <div class="card-body">

                            <h3 class="fs-6 fw-medium text-truncate text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            </h3>

                            <p class="m-0 text-danger">
                                $159.99
                            </p>

                        </div>

                    </a>
                </div>

            </div>

            <div class="text-align-end">
                <a href="niche.classifieds-category.html" class="btn btn-light btn-sm">
                    <span>view all sponsored</span>
                    <i class="fi fi-arrow-end"></i>
                </a>
            </div>






            <!-- Recently Added -->
            <h2 class="h4 mb-4 mt-6">
                1,355 Recently Added Items
            </h2>

            <div class="row">

                <!-- item -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <a href="niche.classifieds-item.html"
                        class="d-block p-2 shadow-xs border-0 text-decoration-none shadow-md-hover transition-hover-top transition-all-ease-250">

                        <!-- image -->
                        <div class="text-center bg-light rounded ratio ratio-4x3 bg-cover lazy"
                            data-background-image="/images/unsplash/products/thumb_330/julian-o-hayon-oW4tZeidfkA-unsplash-min.jpg">
                        </div>

                        <div class="card-body">

                            <h3 class="fs-6 fw-medium text-truncate text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            </h3>

                            <p class="m-0 text-danger">
                                $159.99
                            </p>

                        </div>

                    </a>
                </div>


                <!-- item -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <a href="niche.classifieds-item.html"
                        class="d-block p-2 shadow-xs border-0 text-decoration-none shadow-md-hover transition-hover-top transition-all-ease-250">

                        <!-- badge -->
                        <div class="badge bg-success-soft position-absolute top-0 end-0 m-2">NEW</div>

                        <!-- image -->
                        <div class="text-center bg-light rounded ratio ratio-4x3 bg-cover lazy"
                            data-background-image="/images/unsplash/products/thumb_330/nikolai-chernichenko-wodKMXpXsMA-unsplash-min.jpg">
                        </div>

                        <div class="card-body">

                            <h3 class="fs-6 fw-medium text-truncate text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            </h3>

                            <p class="m-0 text-danger">
                                $159.99
                            </p>

                        </div>

                    </a>
                </div>


                <!-- item -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <a href="niche.classifieds-item.html"
                        class="d-block p-2 shadow-xs border-0 text-decoration-none shadow-md-hover transition-hover-top transition-all-ease-250">

                        <!-- image -->
                        <div class="text-center bg-light rounded ratio ratio-4x3 bg-cover lazy"
                            data-background-image="/images/unsplash/products/thumb_330/barrett-ward-pI1pPuGKuTQ-unsplash-min.jpg">
                        </div>

                        <div class="card-body">

                            <h3 class="fs-6 fw-medium text-truncate text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            </h3>

                            <p class="m-0 text-danger">
                                $159.99
                            </p>

                        </div>

                    </a>
                </div>


                <!-- item -->
                <div class="col-6 col-md-4 col-lg-3 mb-4">
                    <a href="niche.classifieds-item.html"
                        class="d-block p-2 shadow-xs border-0 text-decoration-none shadow-md-hover transition-hover-top transition-all-ease-250">

                        <!-- image -->
                        <div class="text-center bg-light rounded ratio ratio-4x3 bg-cover lazy"
                            data-background-image="/images/unsplash/products/thumb_330/julian-o-hayon-sDU_o416hlE-unsplash-min.jpg">
                        </div>

                        <div class="card-body">

                            <h3 class="fs-6 fw-medium text-truncate text-muted">
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            </h3>

                            <p class="m-0 text-danger">
                                $159.99
                            </p>

                        </div>

                    </a>
                </div>

            </div>

            <div class="text-align-end">
                <a href="niche.classifieds-category.html" class="btn btn-light btn-sm">
                    <span>view all</span>
                    <i class="fi fi-arrow-end"></i>
                </a>
            </div>





            <!--
          Week / Month
         -->
            <div class="row">

                <div class="col-12 col-md-6 mb-5">

                    <h2 class="h4 mb-4 mt-6">
                        This week, 3,899 items
                    </h2>

                    <a href="niche.classifieds-item.html"
                        class="d-flex p-2 mb-3 shadow-xs shadow-md-hover rounded text-decoration-none transition-hover-top transition-all-ease-250">

                        <!-- image -->
                        <div style="width:100px;height:100px" class="text-center bg-light rounded bg-cover lazy"
                            data-background-image="/images/unsplash/products/thumb_330/barrett-ward-cOJgO4Zzs-w-unsplash-min.jpg">
                        </div>

                        <div class="col px-3">

                            <p class="py-2 link-dark">
                                2019 New original shoes, never weared
                                <span class="d-block mt-2 text-danger fw-medium fs-5">
                                    $159.99
                                </span>
                            </p>

                        </div>

                    </a>


                    <a href="niche.classifieds-item.html"
                        class="d-flex p-2 mb-3 shadow-xs shadow-md-hover rounded text-decoration-none transition-hover-top transition-all-ease-250">

                        <!-- image -->
                        <div style="width:100px;height:100px" class="text-center bg-light rounded bg-cover lazy"
                            data-background-image="/images/unsplash/products/thumb_330/aidan-hancock-EwKkZu18HPo-unsplash-min.jpg">
                        </div>

                        <div class="col px-3">

                            <p class="py-2 text-dark">
                                Brand new phone, no scratches
                                <span class="d-block mt-2 text-danger fw-medium fs-5">
                                    $55.99
                                </span>
                            </p>

                        </div>

                    </a>


                    <a href="niche.classifieds-item.html"
                        class="d-flex p-2 mb-3 shadow-xs shadow-md-hover rounded text-decoration-none transition-hover-top transition-all-ease-250">

                        <!-- image -->
                        <div style="width:100px;height:100px" class="text-center bg-light rounded bg-cover lazy"
                            data-background-image="/images/unsplash/products/thumb_330/aidan-hancock-UtzrcidfCsk-unsplash-min.jpg">
                        </div>

                        <div class="col px-3">

                            <p class="py-2 text-dark">
                                I sell my old laptop, to buy a new one
                                <span class="d-block mt-2 text-danger fw-medium fs-5">
                                    $159.99
                                </span>
                            </p>

                        </div>

                    </a>


                    <div class="text-align-end">
                        <a href="niche.classifieds-category.html" class="btn btn-light btn-sm">
                            <span>view all</span>
                            <i class="fi fi-arrow-end"></i>
                        </a>
                    </div>

                </div>

                <div class="col-12 col-md-6 mb-5">

                    <h2 class="h4 mb-4 mt-6">
                        This month, 12,211 items
                    </h2>

                    <a href="niche.classifieds-item.html"
                        class="d-flex p-2 mb-3 shadow-xs shadow-md-hover rounded text-decoration-none transition-hover-top transition-all-ease-250">

                        <!-- image -->
                        <div style="width:100px;height:100px" class="text-center bg-light rounded bg-cover lazy"
                            data-background-image="/images/unsplash/products/thumb_330/barrett-ward-EImqPfdl9y8-unsplash-min.jpg">
                        </div>

                        <div class="col px-3">

                            <p class="py-2 fw-light text-dark">
                                Need an upgrade for this camera, please contact me if you have one...
                                <span class="d-block mt-2 text-danger fw-medium fs-5">
                                    $159.99
                                </span>
                            </p>

                        </div>

                    </a>


                    <a href="niche.classifieds-item.html"
                        class="d-flex p-2 mb-3 shadow-xs shadow-md-hover rounded text-decoration-none transition-hover-top transition-all-ease-250">

                        <!-- image -->
                        <div style="width:100px;height:100px" class="text-center bg-light rounded bg-cover lazy"
                            data-background-image="/images/unsplash/products/thumb_330/julian-o-hayon-w4znns7NTA0-unsplash-min.jpg">
                        </div>

                        <div class="col px-3">

                            <p class="py-2 fw-light text-dark">
                                I am moving from my country so I sell my TV
                                <span class="d-block mt-2 text-danger fw-medium fs-5">
                                    $159.99
                                </span>
                            </p>

                        </div>

                    </a>


                    <a href="niche.classifieds-item.html"
                        class="d-flex p-2 mb-3 shadow-xs shadow-md-hover rounded text-decoration-none transition-hover-top transition-all-ease-250">

                        <!-- image -->
                        <div style="width:100px;height:100px" class="text-center bg-light rounded bg-cover lazy"
                            data-background-image="/images/unsplash/products/thumb_330/barrett-ward-BsxlZgY4jMM-unsplash-min.jpg">
                        </div>

                        <div class="col px-3">

                            <p class="py-2 fw-light text-dark">
                                New camera for sale, Canon 50D
                                <span class="d-block mt-2 text-danger fw-medium fs-5">
                                    $159.99
                                </span>
                            </p>

                        </div>

                    </a>


                    <div class="text-align-end">
                        <a href="niche.classifieds-category.html" class="btn btn-light btn-sm">
                            <span>view all</span>
                            <i class="fi fi-arrow-end"></i>
                        </a>
                    </div>

                </div>

            </div>





            <!-- News -->
            <h2 class="h4 mb-4 mt-6">
                Recent news
            </h2>

            <!-- sticky article -->
            <div class="row">

                <a href="blog-page-article-sidebar.html" class="col-12 col-md-4 mb-4">
                    <img class="img-fluid w-100 rounded"
                        src="/images/unsplash/covers/thumb_330/hayden-walker-fgpg3KzFrQY-unsplash.jpg"
                        alt="...">
                </a>

                <div class="col pb-4">

                    <!-- title -->
                    <div class="mb-4">

                        <h2 class="h4 mb-0">
                            <a href="blog-page-article-sidebar.html" class="text-dark fw-medium">
                                We are in 2019, global market will crash in upcoming years!
                            </a>
                        </h2>

                        <!-- publish date -->
                        <span class="text-muted">
                            September 18 2019
                        </span>

                    </div>

                    <!-- content preview -->
                    <div class="mb-4">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                            labore et dolore magna aliqua. Sodales neque sodales ut etiam sit amet nisl purus in. Sed
                            vulputate mi sit amet mauris commodo. Suscipit tellus mauris a diam maecenas sed enim ut.
                            Pretium nibh ipsum consequat nisl vel pretium. Congue mauris rhoncus aenean vel elit scelerisque
                            mauris pellentesque pulvinar.</p>
                    </div>

                    <a href="blog-page-sidebar.html" class="link-muted">Read more</a>

                </div>

            </div>
            <!-- /sticky article -->


            <!-- more articles / blog -->
            <div class="py-4 mt-3">

                <div class="row">

                    <div class="col-12 col-md-6">

                        <div class="d-flex mb-3 text-decoration-none">

                            <!-- image -->
                            <div style="width:100px;height:100px" class="text-center bg-light rounded bg-cover lazy"
                                data-background-image="/images/unsplash/products/thumb_330/julian-o-hayon-sDU_o416hlE-unsplash-min.jpg">
                            </div>

                            <div class="col px-3">

                                <h3 class="h5 fw-bold">
                                    <a href="blog-page-article-sidebar.html" class="text-dark">
                                        Lorem ipsum dolor sit amet
                                    </a>
                                </h3>

                                <p class="small">
                                    <strong>(29 December 2019)</strong> Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit...
                                </p>

                            </div>

                        </div>


                        <div class="d-flex mb-3 text-decoration-none">

                            <!-- image -->
                            <div style="width:100px;height:100px" class="text-center bg-light rounded bg-cover lazy"
                                data-background-image="/images/unsplash/products/thumb_330/julian-o-hayon-w4znns7NTA0-unsplash-min.jpg">
                            </div>

                            <div class="col px-3">

                                <h3 class="h5 fw-bold">
                                    <a href="blog-page-article-sidebar.html" class="text-dark">
                                        Sodales neque sodales ut
                                    </a>
                                </h3>

                                <p class="small">
                                    <strong>(29 December 2019)</strong> Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit...
                                </p>

                            </div>

                        </div>

                    </div>

                    <div class="col-12 col-md-6">

                        <div class="d-flex mb-3 text-decoration-none">

                            <!-- image -->
                            <div style="width:100px;height:100px" class="text-center bg-light rounded bg-cover lazy"
                                data-background-image="/images/unsplash/products/thumb_330/mubariz-mehdizadeh-Py8F6-hRn5o-unsplash-min.jpg">
                            </div>

                            <div class="col px-3">

                                <h3 class="h5 fw-bold">
                                    <a href="blog-page-article-sidebar.html" class="text-dark">
                                        Lorem ipsum dolor sit amet
                                    </a>
                                </h3>

                                <p class="small">
                                    <strong>(29 December 2019)</strong> Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit...
                                </p>

                            </div>

                        </div>


                        <div class="d-flex mb-3 text-decoration-none">

                            <!-- image -->
                            <div style="width:100px;height:100px" class="text-center bg-light rounded bg-cover lazy"
                                data-background-image="/images/unsplash/products/thumb_330/kareya-saleh-tLKOj6cNwe0-unsplash-min.jpg">
                            </div>

                            <div class="col px-3">

                                <h3 class="h5 fw-bold">
                                    <a href="blog-page-article-sidebar.html" class="text-dark">
                                        Sodales neque sodales ut etiam sit amet
                                    </a>
                                </h3>

                                <p class="small">
                                    <strong>(29 December 2019)</strong> Lorem ipsum dolor sit amet, consectetur adipiscing
                                    elit...
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>
            <!-- /more articles / blog -->

        </div>
    </div>
    <!-- /CONTENT -->

    <!-- SUBSCRIBE -->
    <div class="section border-top py-5 py-lg-4">
        <div class="container">

            <div class="row g-4 align-items-center">

                <div class="col-10 mx-auto col-lg-8 text-center-md text-center-xs">
                    <h3 class="m-0">Let's connect to share the <span class="text-danger">best deals</span>!</h3>
                    <p class="m-0">You know you want the best deals, especially tasty best deals, isn't it?</p>
                </div>

                <div class="col-10 mx-auto col-lg-4">

                    <form novalidate="" method="post" action="#subscribe_url"
                        class="bs-validate py-3 mt-1 input-group-over input-group-pill">

                        <input required="" class="form-control form-control-lg fw-light text-center-md text-center-xs"
                            name="subscriber_email" type="email" value="" placeholder="email address..."
                            aria-label="email address...">

                        <button aria-label="subscribe" type="submit" class="btn bg-transparent shadow-none">
                            <i class="fi fi-send fs-4"></i>
                        </button>

                    </form>

                </div>

            </div>

        </div>
    </div>
    <!-- /SUBSCRIBE -->


    <!-- Testimonial Block -->
    <div class="section bg-light">
        <div class="container">

            <div class="row">

                <div class="col-12 col-lg-6 order-1 order-lg-2 mb-5">

                    <div class="px-4">

                        <h2 class="text-center-xs mb-5 fw-bold">
                            <span class="fs-6 d-block text-secondary fw-medium">We wait your best deal!</span>
                            When <span class="text-danger">Smarty</span> buyers are happy!
                        </h2>

                        <p class="lead mb-5">
                            Tell us about your best deal on <b>Smarty</b> #1 Classifieds website! We are waiting for your
                            incredible story, for sure you have one or definitely you'll get one with Smarty!
                        </p>

                        <a href="contact-1.html" class="btn btn-lg btn-danger transition-hover-top">
                            Tell us your story!
                        </a>

                    </div>

                </div>


                <div class="col-12 col-lg-6 order-2 order-lg-1 mb-5">

                    <div class="p-4 shadow-xs bg-white rounded text-center">

                        <div class="swiper-container max-w-500"
                            data-swiper='{
										"slidesPerView": 1,
										"spaceBetween": 0,
										"slidesPerGroup": 1,
										"loop": true,
										"autoplay": false,
										"pagination": { "el":".swiper-pagination", "type": "bullets" },
										"breakpoints": {
											"1024": { "slidesPerView": "1" },
											"920": 	{ "slidesPerView": "1" },
											"768": 	{ "slidesPerView": "1" },
											"460": 	{ "slidesPerView": "1" }
										}
									}'>
                            <div class="swiper-wrapper">

                                <!-- slide -->
                                <div class="swiper-slide py-5">

                                    <div class="mb-4">
                                        <!-- svg quote : svg also present as image in demo.files/svg/icons/quotes.svg -->
                                        <svg width="40" class="fill-danger" viewBox="0 0 377.917 377.917">
                                            <path
                                                d="M377.917 109.665l-12.124-55.747c-87.296 3.999-147.809 40.32-147.809 147.133v122.947h152.509v-154.526h-57.759c.001-34.273 21.505-54.431 65.183-59.807zM159.933 109.665l-12.124-55.747c-87.296 3.999-147.809 40.321-147.809 147.134v122.947h152.515v-154.527h-57.795c0-34.273 21.504-54.431 65.213-59.807z" />
                                        </svg>
                                    </div>

                                    <!-- testimonial paragraph -->
                                    <p class="lead mb-4">
                                        Buy this now. I'd be lost without webdesign. I made back the purchase price in just
                                        48 hours!"
                                    </p>

                                    <!-- name -->
                                    <p>
                                        Lynette Y. <span class="fw-medium">CEO Smarty</span>
                                    </p>

                                </div>



                                <!-- slide -->
                                <div class="swiper-slide py-5">

                                    <div class="mb-4">
                                        <!-- svg quote : svg also present as image in demo.files/svg/icons/quotes.svg -->
                                        <svg width="40" class="fill-danger" viewBox="0 0 377.917 377.917">
                                            <path
                                                d="M377.917 109.665l-12.124-55.747c-87.296 3.999-147.809 40.32-147.809 147.133v122.947h152.509v-154.526h-57.759c.001-34.273 21.505-54.431 65.183-59.807zM159.933 109.665l-12.124-55.747c-87.296 3.999-147.809 40.321-147.809 147.134v122.947h152.515v-154.527h-57.795c0-34.273 21.504-54.431 65.213-59.807z" />
                                        </svg>
                                    </div>

                                    <!-- testimonial paragraph -->
                                    <p class="lead mb-4">
                                        I have gotten at least 50 times the value from webdesign. I would like to personally
                                        thank you for your outstanding product.
                                    </p>

                                    <!-- name -->
                                    <p>
                                        Benoite I. <span class="fw-medium">CEO Healtyes</span>
                                    </p>

                                </div>



                                <!-- slide -->
                                <div class="swiper-slide py-5">

                                    <div class="mb-4">
                                        <!-- svg quote : svg also present as image in demo.files/svg/icons/quotes.svg -->
                                        <svg width="40" class="fill-danger" viewBox="0 0 377.917 377.917">
                                            <path
                                                d="M377.917 109.665l-12.124-55.747c-87.296 3.999-147.809 40.32-147.809 147.133v122.947h152.509v-154.526h-57.759c.001-34.273 21.505-54.431 65.183-59.807zM159.933 109.665l-12.124-55.747c-87.296 3.999-147.809 40.321-147.809 147.134v122.947h152.515v-154.527h-57.795c0-34.273 21.504-54.431 65.213-59.807z" />
                                        </svg>
                                    </div>

                                    <!-- testimonial paragraph -->
                                    <p class="lead mb-4">
                                        Thank You! This is simply unbelievable! I have gotten at least 50 times the value
                                        from webdesign
                                    </p>

                                    <!-- name -->
                                    <p>
                                        Anthony I. <span class="fw-medium">Director Alibyaby</span>
                                    </p>

                                </div>


                            </div>

                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>

                        </div>


                    </div>

                </div>

            </div>


        </div>
    </div>
    <!-- /Testimonial Block -->


    <div class="section py-5">
        <div class="container">
            <div class="row text-center-xs">

                <div class="col-12 col-md-6">
                    <h3 class="m-0">Everywhere! Always! Connected!</h3>
                    <p class="m-0">You always want to be the first getting and doing the best deals!</p>
                </div>

                <div class="col-12 mb-5 d-block d-md-none"><!-- mobile spacer --></div>

                <div class="col-12 col-md-6 text-align-end text-center-xs">

                    <!-- App Store -->
                    <a href="#" class="btn btn-dark bg-gradient-dark border-0 mx-1 rounded-xl transition-hover-top">
                        <i class="float-start">
                            <svg height="32" viewBox="0 0 90 90">
                                <path fill="#ffffff"
                                    d="M49.645 6.817c3.232-3.8 8.695-6.627 13.203-6.817.575 5.279-1.541 10.565-4.669 14.374-3.133 3.802-8.261 6.764-13.294 6.369-.684-5.165 1.851-10.551 4.76-13.926zm25.646 72.01c-3.741 5.485-7.61 10.938-13.718 11.053-6.012.114-7.938-3.571-14.799-3.571-6.866 0-9.016 3.457-14.69 3.686-5.897.222-10.382-5.926-14.152-11.387-7.703-11.168-13.585-31.576-5.677-45.35 3.916-6.84 10.934-11.167 18.537-11.282 5.792-.107 11.263 3.917 14.799 3.917 3.544 0 10.185-4.831 17.165-4.122 2.922.121 11.123 1.181 16.391 8.912-.417.274-9.789 5.745-9.676 17.141.114 13.614 11.891 18.137 12.029 18.199-.108.32-1.884 6.459-6.209 12.804z" />
                            </svg>
                        </i>

                        <span class="float-start text-align-start px-2">
                            <span class="d-block lh-1 small">Download on the</span>
                            <span class="d-block lh-1 pt-1">App Store</span>
                        </span>
                    </a>

                    <div class="mt-3 d-block d-md-none"><!-- mobile spacer --></div>

                    <!-- Play Store -->
                    <a href="#" class="btn btn-dark bg-gradient-dark border-0 mx-1 rounded-xl transition-hover-top">
                        <i class="float-start">
                            <svg height="32" viewBox="0 0 512 512">
                                <path fill="#ffffff"
                                    d="M99.617 8.057c-11.664-7.537-25.674-9.815-38.815-6.713l230.932 230.933 74.846-74.846-266.963-149.374zM32.139 20.116c-6.441 8.563-10.148 19.077-10.148 30.199v411.358c0 11.123 3.708 21.636 10.148 30.199l235.877-235.877-235.877-235.879zM464.261 212.087l-67.266-37.637-81.544 81.544 81.548 81.548 67.273-37.64c16.117-9.03 25.738-25.442 25.738-43.908s-9.621-34.877-25.749-43.907zM291.733 279.711l-230.918 230.918c3.786.891 7.639 1.371 11.492 1.371 9.522 0 19.011-2.708 27.31-8.07l266.965-149.372-74.849-74.847z" />
                            </svg>
                        </i>

                        <span class="float-start text-align-start px-2">
                            <span class="d-block lh-1 small">Download on the</span>
                            <span class="d-block lh-1 pt-1">Play Store</span>
                        </span>
                    </a>

                </div>

            </div>
        </div>
    </div>
    <!-- /CALL TO ACTION : APP -->


@endsection
