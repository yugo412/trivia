<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
  <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
  <title>{{ config('app.name') }}</title>
  <!-- CSS files -->
  <link href="{{ asset('css/tabler.min.css') }}" rel="stylesheet"/>
  <style>
    @import url('https://rsms.me/inter/inter.css');

    :root {
      --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
    }

    body {
      font-feature-settings: "cv03", "cv04", "cv11";
    }
  </style>
</head>
<body>
<div class="page">
  <!-- Navbar -->
  @includeWhen(!isset($header) || $header, 'partials.header')
  @includeWhen(!isset($nav) || $nav, 'partials.nav')

  <div class="page-wrapper">
    <!-- Page header -->
    <div class="page-header d-print-none">
      <div class="container-xl">
        <div class="row g-2 align-items-center">
          <div class="col">
            <h2 class="page-title">
              {{ $title ?? '' }}
            </h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Page body -->
    @yield('content')

    @includeWhen(!isset($footer) || $footer, 'partials.footer')
  </div>
</div>
<!-- Libs JS -->
<!-- Tabler Core -->
<script src="{{ asset('js/tabler.min.js') }}" defer></script>
</body>
</html>
