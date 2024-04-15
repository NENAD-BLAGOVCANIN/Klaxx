<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="UTF-8">
        <title>{{ config('app.name', 'Laravel') }}</title>
		<meta name="description" content="...">

		<meta name="viewport" content="width=device-width, maximum-scale=5, initial-scale=1">

		<link rel="dns-prefetch" href="https://fonts.googleapis.com/">
		<link rel="dns-prefetch" href="https://fonts.gstatic.com/">
		<link rel="preconnect" href="https://fonts.googleapis.com/">
		<link rel="preconnect" href="https://fonts.gstatic.com/">
		<link rel="preload" href="assets/fonts/flaticon/Flaticon.woff2" as="font" type="font/woff2" crossorigin>

		<link rel="stylesheet" href="/css/core.min.css?v=5">
		<link rel="stylesheet" href="/css/vendor_bundle.min.css?v=4">
		<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap" rel="stylesheet">

		<!-- favicon -->
		<link rel="shortcut icon" href="/logo/icon.png">
		<link rel="apple-touch-icon" href="demo.files/logo/icon_512x512.png">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

	</head>
	
    <body class="font-sans text-gray-900 antialiased">

        @yield('content')

        <script src="assets/js/core.min.js"></script>
		
	</body>
</html>