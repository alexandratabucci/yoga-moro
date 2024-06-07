@section('footer')
    <footer>
        <div class="container">
            <div class="footer_wrapper">
                <div class="top_footer">
                    <a href="/"><img class="footer_logo" src="{{ asset('assets/images/logo.png') }}" alt=""></a>
                    <div class="footer_menu">
                        <ul>
                            <li><a href="{{ route('home') }}">О нас</a></li>
                            <li><a href="{{ route('poses') }}">Позы</a></li>
                            <li><a href="{{ route('practices') }}">Практики</a></li>
                            <li><a href="{{ route('meditations') }}">Медитации</a></li>
                            <li><a href="{{ route('login') }}">Авторизация</a></li>
                        </ul>
                    </div>
                </div>
                <div class="bot_footer">
                    <p><b>© 2024 | All Rights Reserved</b></p>
                    <div class="socials">
                        <ul>
                            <li><a href="#"><img src="{{ asset('assets/images/inst.png') }}" alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/facebook.png') }}" alt=""></a></li>
                            <li><a href="#"><img src="{{ asset('assets/images/youtube.png') }}" alt=""></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
@endsection
