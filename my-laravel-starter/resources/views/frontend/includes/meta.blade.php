<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
<meta http-equiv="Pragma" content="no-cache"/>
<meta http-equiv="Expires" content="0"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1.0, user-scalable=no">
<meta name="csrf-token" content="{{ csrf_token() }}"/>

<meta name="robots" content="INDEX, FOLLOW">

<meta name="author" content="">

<meta name="description" content="">
<meta name="keywords" content="">

<meta property="fb:app_id" content="" />
<meta property="og:url" content="{{ URL::current() }}" />
<meta property="og:type" content="website" />

<meta property="og:title" content="@yield('og_title')" />
<meta property="og:description" content="@yield('og_description')" />
<meta property="og:image" content="{{ url('/') }}@yield('og_image')" />
