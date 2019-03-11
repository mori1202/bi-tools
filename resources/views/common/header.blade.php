@section('header')
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>店舗向けアクセス解析ページ</title>
    @yield('addCss')
</head>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">店舗アクセス解析ページ</a>
    </nav>
@stop
