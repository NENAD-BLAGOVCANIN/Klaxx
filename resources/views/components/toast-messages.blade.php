    <!-- Success Toast -->
    @if (session('success'))
        <div id="wrapper_toast_bc" style="max-width:330px;max-height:75vh;z-index:9999;"
            class="w-100 scrollable-vertical rounded fixed-bottom mx-auto">
            <div class="toast bg-gradient border-0 js-toast fade border-0 bg-success mb-3 hide" role="alert"
                aria-live="polite" aria-atomic="true" data-autohide="false">
                <div class="toast-header px-3 bg-transparent overlay-dark overlay-opacity-1 text-white">
                    <div class="w-100 text-truncate"><strong>Success</strong></div>
                    <div class="text-align-end" style="width:180px">
                        <button type="button" class="close float-end" data-bs-dismiss="toast" aria-label="Close">
                            <span class="fi fi-close" style="font-size:16px" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
                <div class="toast-body p-3">
                    <div class="text-white" style="padding-top:5px; padding-bottom:10px;">
                        {{ session('success') }}
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- Error Toast -->
    @if (session('error'))
        <div id="wrapper_toast_bc" style="max-width:330px;max-height:75vh;z-index:9999;"
            class="w-100 scrollable-vertical rounded fixed-bottom mx-auto">
            <div class="toast bg-gradient border-0 js-toast fade border-0 bg-danger mb-3 hide" role="alert"
                aria-live="polite" aria-atomic="true" data-autohide="false">
                <div class="toast-header px-3 bg-transparent overlay-dark overlay-opacity-1 text-white">
                    <div class="w-100 text-truncate"><strong>Error</strong></div>
                    <div class="text-align-end" style="width:180px">
                        <button type="button" class="close float-end" data-bs-dismiss="toast" aria-label="Close">
                            <span class="fi fi-close" style="font-size:16px" aria-hidden="true"></span>
                        </button>
                    </div>
                </div>
                <div class="toast-body p-3">
                    <div class="text-white" style="padding-top:5px; padding-bottom:10px;">
                        {{ session('error') }}
                    </div>
                </div>
            </div>
        </div>
    @endif


    @if ($errors->any())
        <div class="alert bg-danger text-white alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <div id="wrapper_toast_bc" style="max-width:330px;max-height:75vh;z-index:9999;"
                        class="w-100 scrollable-vertical rounded fixed-bottom mx-auto">
                        <div class="toast bg-gradient border-0 js-toast fade border-0 bg-danger mb-3 hide"
                            role="alert" aria-live="polite" aria-atomic="true" data-autohide="false">
                            <div class="toast-header px-3 bg-transparent overlay-dark overlay-opacity-1 text-white">
                                <div class="w-100 text-truncate"><strong>Error</strong></div>
                                <div class="text-align-end" style="width:180px">
                                    <button type="button" class="close float-end" data-bs-dismiss="toast"
                                        aria-label="Close">
                                        <span class="fi fi-close" style="font-size:16px" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </div>
                            <div class="toast-body p-3">
                                <div class="text-white" style="padding-top:5px; padding-bottom:10px;">
                                    {{ $error }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </ul>
            <button type="button" class="btn-close btn-close-white ms-2" data-bs-dismiss="alert"
                aria-label="Close"></button>
        </div>
    @endif
