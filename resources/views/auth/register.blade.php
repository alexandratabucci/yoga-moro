@extends('layouts.app')
@include('layouts.header')

@section('content')
    <div class="container">
        <div class="content">
            <h1 class="block_title">Регистрация</h1>
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color: red;">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form action="{{ route('register') }}" method="POST" class="auth_form">
                @csrf
                <div class="auth_form_wrapper">
                    <div class="input_wrapper">
                        <input type="text" name="name" placeholder="Имя" class="form-control">
                    </div>
                    <div class="input_wrapper">
                        <input type="text" name="email" placeholder="Почтовый адрес" class="form-control">
                    </div>
                    <div class="input_wrapper">
                        <input type="password" name="password" placeholder="Пароль" class="form-control">
                    </div>
                    <div class="input_wrapper">
                        <input type="password" name="password_confirmation" placeholder="Подтвердите пароль" class="form-control">
                    </div>
                    <button class="auth_btn">Зарегистрироваться</button>
                </div>
            </form>
        </div>
    </div>
@endsection
