<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <title>@hasSection('title') @yield('title') | @endif {{ env('APP_NAME') }} - {{ env('APP_DESCRIPTION') }}</title>
    <meta name="description" content="{{ env('APP_DESCRIPTION') }}" />

    <link href="{{ asset('css/tabler.min.css') }}" rel="stylesheet" />
    @yield('css')
    {{-- <style>@import url(https://rsms.me/inter/inter.css);:root{--tblr-font-sans-serif:Inter,-apple-system,BlinkMacSystemFont,San Francisco,Segoe UI,Roboto,Helvetica Neue,sans-serif}body{font-family:var(--tblr-font-sans-serif)}</style> --}}
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body @hasSection('body-class')class="@yield('body-class')"@endif>

    @yield('body')

    @yield('libs-js')
    <script src="{{ asset('js/tabler.min.js') }}" defer></script>
    @stack('js')
</body>
{{-- <!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta16
* @link https://tabler.io
* Copyright 2018-2022 The Tabler Authors
* Copyright 2018-2022 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
--> --}}

</html>
