<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<meta name="csrf-token" content="{{ csrf_token() }}">

<title>@yield('title', config('app.name'))</title>
<meta name="description" content="@yield('meta_description', 'Descripción por defecto de la aplicación')">

<!-- Open Graph / Facebook -->
<meta property="og:title" content="@yield('title', config('app.name'))" />
<meta property="og:description" content="@yield('meta_description', 'Descripción por defecto de la aplicación')" />
<meta property="og:image" content="@yield('meta_image', asset('vendors/images/logo.png'))" />
<meta property="og:type" content="website" />

<!-- Bootstrap core CSS -->
<link href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}?v={{ config('app.version', '1.0') }}" rel="stylesheet">

<!-- Font Awesome -->
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" >

<!-- Custom styles for this template -->
<link href="{{ asset('vendors/core/style.css') }}?v={{ config('app.version', '1.0') }}" rel="stylesheet">

