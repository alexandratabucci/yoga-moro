@extends('layouts.app')

@include('layouts.header')

@section('content')
    <div class="container">
        <div class="content">
            <h1 class="block_title">О Нас</h1>
            <div class="block_logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Yoga Poses">
            </div>
            <div class="text-content">
                Добро пожаловать в мир гармонии и баланса с нашим онлайн-проектом по занятиям йогой! Мы - сообщество поклонников здорового образа жизни, увлеченных искусством йоги и её благотворным воздействием на тело и разум.

                Наша миссия:
                Мы стремимся создать виртуальное пространство, где каждый человек может открыть для себя удивительный мир йоги, независимо от опыта и уровня физической подготовки. Наша цель - помочь вам обрести гармонию между телом, умом и душой, пройдя путь самопознания и физического совершенствования.

                Что нас отличает:

                Опытные инструкторы: Наши преподаватели - профессионалы своего дела, обладающие глубоким пониманием йоги. Они помогут вам развивать свои навыки, независимо от вашего уровня подготовки.

                Разнообразие программ: Мы предлагаем широкий спектр программ и уроков, от основных азов для новичков до продвинутых техник для опытных практиков. У нас есть что-то для каждого!

                Гибкий график: Занимайтесь йогой в удобное для вас время и место. Наши онлайн-уроки позволяют вам создать свой собственный график занятий, совмещая йогу с вашим образом жизни.

                Наши ценности:
                Мы верим в важность единения и поддержки. Наше сообщество открыто для всех, кто ищет путь к здоровью и равновесию. Здесь вы найдете не только уроки йоги, но и вдохновляющую атмосферу, где каждый может расти и развиваться вместе с нами.

                Присоединяйтесь к нашему онлайн-сообществу и начните свой уникальный путь к лучшей версии себя. Ждем вас на коврике!
            </div>
            <br>
            <h1 class="block_title">Таблица Лидеров</h1>
            <div class="block_logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Yoga Poses">
            </div>
            <div class="users_list">
                @foreach($users as $user)
                    <div class="user_item">{{ $user->name }}</div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
