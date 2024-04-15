<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <title>Klemmes - classifieds website in Europe & Asia</title>
    <meta name="description" content="...">

    <meta name="viewport" content="width=device-width, maximum-scale=5, initial-scale=1">

    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="preload" href="/fonts/flaticon/Flaticon.woff2" as="font" type="font/woff2" crossorigin>

    <link rel="stylesheet" href="/css/core.min.css?v=3">

    <link rel="stylesheet" href="/css/vendor_bundle.min.css?v=2">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link rel="shortcut icon" href="/logo/icon.png">
    <link rel="apple-touch-icon" href="/logo/icon_512x512.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>

    <div id="wrapper">

        @include('components.header')

        @yield('content')

        @include('components.footer')



        <script src="/js/core.min.js"></script>

    </div>

    @if (session('success'))
        <div id="wrapper_toast_bc" style="max-width:330px;max-height:75vh;z-index:9999;"
            class="w-100 scrollable-vertical rounded fixed-bottom mx-auto">
            <div class="toast bg-gradient borer-0 js-toast fade border-0 bg-success mb-3 hide" role="alert"
                aria-live="polite" aria-atomic="true" data-autohide="false">
                <div class="toast-header px-3 bg-transparent overlay-dark overlay-opacity-1 text-white">
                    <div class="w-100 text-truncate"><strong>Success</strong></div>
                    <div class="text-align-end" style="width:180px"><button type="button" style=""
                            class="close float-end" data-bs-dismiss="toast" aria-label="Close"><span class="fi fi-close"
                                style="font-size:16px" aria-hidden="true"></span></button></div>
                </div>
                <div class="toast-body p-3">
                    <div class="text-white" style="padding-top:5px; padding-bottom:10px;">
                        {{ session('success') }}
                    </div>
                </div>
            </div>
        </div>
    @endif


</body>

</html>
