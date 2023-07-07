<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', __('app.main_page')) - {{ __('app.title') }}</title>
  @vite('resources/css/app.css')
</head>
<body class="antialiased">
<header class="flex flex-wrap items-center justify-between px-4 py-5 shadow-md shadow-slate-900/5 dark:shadow-none">
  <div class="flex flex-grow basis-0"></div>
  <div>
    <a href="/" class="font-semibold text-3xl">{{ __('app.title') }}</a>
  </div>
  <div class="flex basis-0 justify-end gap-6 sm:gap-8 md:flex-grow">
    @auth
      <a href="{{ route('logout') }}" title="{{ __('auth.logout.hint') }}">{{ __('auth.logout.nav_btn') }}</a>
    @else
      <a href="{{ route('login') }}">{{ __('auth.login.nav_btn') }}</a>
      <a href="{{ route('register') }}">{{ __('auth.register.nav_btn') }}</a>
    @endauth
  </div>
</header>
<div id="app">
  @yield('content')
</div>
</body>
</html>
