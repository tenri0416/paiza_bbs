<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>共通テンプレート</title>
    @include('style-sheet'){{--ここでbootstrapを全てに使えるようにしている} --}}
</head>
<body>
    @include('nav')
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
