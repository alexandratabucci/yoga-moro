@extends('layouts.app')

@include('layouts.header')

@section('content')

    <div class="banner-main">
        <div class="logo">
            <img src="{{ asset('assets/images/logo.png') }}" alt="">
        </div>
        <img src="{{ asset('assets/images/banner.png') }}" alt="Banner">
        <div class="banner_text">
            “Серьезная духовная практика - это нечто большее, чем безмятежные прогулки по лесу, зажженные свечи и благовония. Ты должен быть предан своему делу. Ты должен быть готов войти в свою собственную тьму и выйти за её пределы", - Мария Эрвинг
        </div>
    </div>

    <div class="container">
        <div class="text-block">
            <div class="text-left">
                Йога – это древняя система физических и умственных упражнений, направленных на достижение гармонии между телом и разумом<br><br>Независимо от вашего возраста, физической подготовки или уровня гибкости, йога доступна каждому и может принести огромную пользу вашему здоровью и благополучию
            </div>
            <div class="images-right">
                <div class="big-circle">
                    <img src="{{ asset('assets/images/womans-circle-big.png') }}" alt="">
                </div>
                <div class="small-circle">
                    <img src="{{ asset('assets/images/womans-circle-small.png') }}" alt="">
                </div>
                <div class="woman-circle">
                    <img src="{{ asset('assets/images/main-yoga_woman.png') }}" alt="">
                </div>
            </div>
            <div class="text-block-bottom">
                <div class="people_number">
                    <div class="number">300 000 000+</div>
                    <div class="number-text">человек практикуют йогу по всему миру</div>
                </div>
                <div class="text-block-bottom_text_right">
                    Наша платформа создана для начинающих йогов.<br>
                    Мы ставим перед собой цель - просвещение и помощь всем, кто желает достичь физического и духовного роста.<br>
                    Поэтому этот ресурс абсолютно бесплатный!
                </div>
            </div>
        </div>
    </div>

    <div class="text-block">
        <div class="middle-title">Здесь каждый найдет что-то для себя!</div>
    </div>

    <div class="container">
        <div class="text-block">
            <h1 class="block_title">Йога поможет тебе . . .</h1>

            <div class="yoga_help_wrapper">
                <div class="yoga_help_item">
                    <img src="{{ asset('assets/images/control.png') }}" alt="">
                    <div class="text_help">Обрести контроль над своим телом</div>
                </div>
                <div class="yoga_help_item">
                    <img src="{{ asset('assets/images/yoga-mat 1.png') }}" alt="">
                    <div class="text_help">Развить гибкость</div>
                </div>
                <div class="yoga_help_item">
                    <img src="{{ asset('assets/images/third-help.png') }}" alt="">
                    <div class="text_help">Научиться дышать правильно</div>
                </div>
                <div class="yoga_help_item">
                    <img src="{{ asset('assets/images/flower.png') }}" alt="">
                    <div class="text_help">Обрести внутреннее спокойствие</div>
                </div>
            </div>
        </div>

        <div class="text-block">
            <div class="rounds-block">
                <img src="{{ asset('assets/images/small-round.png') }}">
                <img src="{{ asset('assets/images/med-round.png') }}">
                <img src="{{ asset('assets/images/womans-circle-small.png') }}">
            </div>
        </div>

        <div class="text-block">
            <div class="text-wrapper">
                <div class="text">Практика йоги - это путешествие к самопознанию и гармонии</div>
                <div class="text">Начните свой путь сегодня и откройте для себя мир благополучия и внутреннего равновесия с помощью йоги!</div>
            </div>
        </div>

        <div class="text-block">
            <div class="text-wrapper">
                <a class='auth_button' href="{{ route('login') }}">Авторизация</a>
                <img class="med-round" src="{{ asset('assets/images/med-round.png') }}">
                <img class="pos_auth" src="{{ asset('assets/images/pos_auth.png') }}" alt="">
            </div>
        </div>

        <div class="text-block" style="margin-top: 200px">
            <div class="text-wrapper">
                <h1 class="block_title">Рейтинг самых йоганутых:</h1>
                <div class="users-list">
                    <ul>
                        @if (count($users) > 0)
                            @foreach($users as $user)
                                <li><i>{{ $user->name }}</i></li>
                            @endforeach
                        @else
                            <li><i>Пусто ...</i></li>
                            <li><i>Пусто ...</i></li>
                            <li><i>Пусто ...</i></li>
                            <li><i>Пусто ...</i></li>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection

@include('layouts.footer')
