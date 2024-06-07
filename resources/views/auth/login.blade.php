@extends('layouts.app')
@include('layouts.header')

@section('content')
<div class="container">
    <div class="content">
        <h1 class="block_title">Авторизация</h1>
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
                <div class="input_wrapper">
                    <img src="{{ asset('assets/images/envelope.svg')}}" alt="">
                    <input type="text" name="email" placeholder="Почтовый адрес" class="form-control">
                </div>
                <div class="input_wrapper">
                    <img src="{{ asset('assets/images/shield-slash.svg')}}" alt="">
                    <input type="password" name="password" placeholder="Пароль" class="form-control">
                </div>
                <button class="auth_btn">Войти</button>
            </div>
        </form>
        <div class="register_button">
            Еще не зарегистрировались?
            <a href="{{ route('register') }}">Создать аккаунт</a>
        </div>
    </div>
</div>
@endsection
