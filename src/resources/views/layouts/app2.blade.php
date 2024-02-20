<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common2.css') }}">
    @yield('css')
</head>

<body>
    <header class="header">
        <div class="header_inner">
            <div class="header_logo">FashionablyLate</div>
            @yield('button')
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>
