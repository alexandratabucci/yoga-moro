@extends('layouts.app')
@include('layouts.header')

@section('content')
<div class="container">
    <div class="content">
        <h1 class="block_title">Авторизация</h1>
        <div class="block_logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Yoga Poses">
        </div>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li style="color: red;">{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('login') }}" method="POST" class="auth_form">
            @csrf
            <div class="auth_form_wrapper">
                <input type="text" name="email" placeholder="Email" class="form-control">
                <input type="password" name="password" placeholder="Пароль" class="form-control">
                <button class="auth_btn">Войти</button>
            </div>
        </form>
        <a href="{{ route('register') }}" class="register_button">
            Регистрация
        </a>
    </div>
</div>
@endsection
