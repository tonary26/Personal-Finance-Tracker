<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('styles')

    @yield('title')
</head>
<body>
<div class="header">
    <div class="nav-menu">
        <a href="{{ route('home') }}">Главная</a>
        <a href="spending.html">История трат</a>
        <a href="add-spending.html">Добавить трату</a>
        <a href="balance.html">Баланс</a>
        <a href="#">Войти</a>
    </div>
</div>
    @yield('main')
</body>
</html>