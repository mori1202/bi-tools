@section('header')
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>{{{isset($title) ? $title : 'Hello'}}}</title>
    @yield('addCss')
</head>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="#">店舗アクセス解析ページ</a>
    </nav>
@stop
