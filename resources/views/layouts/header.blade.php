@section('header')

    <header>
        <div class="container">
            <div class="header_wrapper">
                <div class="logo">
                    <a href="/">
                        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo">
                    </a>
                </div>
                <div class="nav_menu">
                    <ul>
                        <li><a href="/">Главная</a></li>
                        <li><a href="{{ route('about') }}">О Нас</a></li>
                    </ul>
                </div>
                @if (!auth()->user())
                    <div class="auth_header">
                        <a href="{{ route('login') }}">Авторизация</a>
                    </div>
                @else
                    <div class="auth_header">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button>Выйти</button>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </header>

@endsection
