<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <title>Smarty v5</title>
    <meta name="description" content="...">

    <meta name="viewport" content="width=device-width, maximum-scale=5, initial-scale=1">

    <link rel="dns-prefetch" href="https://fonts.googleapis.com/">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com/">
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link rel="preload" href="/fonts/flaticon/Flaticon.woff2" as="font" type="font/woff2" crossorigin>

    <link rel="stylesheet" href="/css/core.min.css">
    <link rel="stylesheet" href="/css/vendor_bundle.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap">

    <link rel="shortcut icon" href="favicon.ico">

</head>

<body class="layout-admin layout-padded aside-sticky"
    data-s2t-class="btn-primary btn-sm bg-gradient-default rounded-circle border-0">

    <div id="wrapper" class="d-flex align-items-stretch flex-column">

        <div id="wrapper_content" class="d-flex flex-fill">

            @yield('content')

        </div>

        <script src="/js/core.min.js"></script>

    </div>

</body>

</html>
