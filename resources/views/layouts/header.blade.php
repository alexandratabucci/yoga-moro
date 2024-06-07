@section('header')

    <header>
        <div class="container">
            <div class="header_wrapper">
                <div class="nav_menu">
                    <ul>
                        <li><a href="{{ route('home') }}">О Нас</a></li>
                        <li><a href="{{ route('poses') }}">Позы</a></li>
                        <li><a href="{{ route('practices') }}">Практики</a></li>
                        <li><a href="{{ route('meditations') }}">Медитации</a></li>
                        <li><a href="{{ route('login') }}">Авторизация</a></li>
                    </ul>
                </div>
                @if (auth()->user())
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
