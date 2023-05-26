<!doctype html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="{{ config('app.description') }}">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @hasSection('title')
    <title>@yield('title') | {{ config('app.name') }}</title>
  @else
    <title>{{ config('app.name') }}</title>
  @endif
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('img/favicon-16x16.png') }}">
  @vite('resources/css/style.scss')
</head>

<body>