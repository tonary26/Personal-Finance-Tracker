@extends('layouts.main')

@section('styles')
    @vite(['resources/css/index.css'])
@endsection


@section('title')
    <title>Главная страница</title>
@endsection

@section('main')
    <div class="main">
        <div class="content">
            <h1>Следите за своими тратами!</h1>
            <a href="spending.html">
                <button type="button" class="btn">Ваши траты</button>
            </a>
        </div>
    </div>
@endsection