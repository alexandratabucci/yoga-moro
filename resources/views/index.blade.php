@extends('layouts.app')

@include('layouts.header')

@section('content')

    <div class="container">
        <div class="content">
            <h1 class="block_title">Yoga Poses</h1>
            <div class="block_logo">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Yoga Poses">
            </div>
            <div class="block_items">
                <div class="item">
                    <div class="item_image">
                        <img src="{{ asset('assets/images/mermaid.png') }}" alt="Mermaid">
                    </div>
                    <div class="item_title">Mermaid</div>
                </div>
                <div class="item">
                    <div class="item_image">
                        <img src="{{ asset('assets/images/downward.png') }}" alt="Downward-Facing Dog">
                    </div>
                    <div class="item_title">Downward-Facing Dog</div>
                </div>
                <div class="item">
                    <div class="item_image">
                        <img src="{{ asset('assets/images/scorpion.png') }}" alt="One Legged Scorpion Hand-Stand">
                    </div>
                    <div class="item_title">One Legged Scorpion Hand-Stand</div>
                </div>
                <div class="item">
                    <div class="item_image">
                        <img src="{{ asset('assets/images/plow.png') }}" alt="Plow">
                    </div>
                    <div class="item_title">Plow</div>
                </div>
                <div class="item">
                    <div class="item_image">
                        <img src="{{ asset('assets/images/lotus.png') }}" alt="Lotus">
                    </div>
                    <div class="item_title">Lotus</div>
                </div>
                <div class="item">
                    <div class="item_image">
                        <img src="{{ asset('assets/images/handstand.png') }}" alt="Handstand With Splits">
                    </div>
                    <div class="item_title">Handstand With Splits</div>
                </div>
                <div class="item">
                    <div class="item_image">
                        <img src="{{ asset('assets/images/pigeon.png') }}" alt="One Legged King Pigeon">
                    </div>
                    <div class="item_title">One Legged King Pigeon</div>
                </div>
                <div class="item">
                    <div class="item_image">
                        <img src="{{ asset('assets/images/boat.png') }}" alt="Boat Pose">
                    </div>
                    <div class="item_title">Boat Pose</div>
                </div>
                <div class="item">
                    <div class="item_image">
                        <img src="{{ asset('assets/images/scorpion_2.png') }}" alt="One Legged Scorpion">
                    </div>
                    <div class="item_title">One Legged Scorpion</div>
                </div>
                <div class="item">
                    <div class="item_image">
                        <img src="{{ asset('assets/images/wheel.png') }}" alt="Wheel">
                    </div>
                    <div class="item_title">Wheel</div>
                </div>
                <div class="item">
                    <div class="item_image">
                        <img src="{{ asset('assets/images/lunge.png') }}" alt="Crescent Lunge">
                    </div>
                    <div class="item_title">Crescent Lunge</div>
                </div>
                <div class="item">
                    <div class="item_image">
                        <img src="{{ asset('assets/images/upward.png') }}" alt="Upward-Facing Dog">
                    </div>
                    <div class="item_title">Upward-Facing Dog</div>
                </div>
                <div class="item">
                    <div class="item_image">
                        <img src="{{ asset('assets/images/downward_2.png') }}" alt="Three Legged Downward-Facing Dog">
                    </div>
                    <div class="item_title">Three Legged Downward-Facing Dog</div>
                </div>
                <div class="item">
                    <div class="item_image">
                        <img src="{{ asset('assets/images/warrior.png') }}" alt="Warrior III">
                    </div>
                    <div class="item_title">Warrior III</div>
                </div>
                <div class="item">
                    <div class="item_image">
                        <img src="{{ asset('assets/images/sarvangasana.png') }}" alt="Sarvangasana">
                    </div>
                    <div class="item_title">Sarvangasana</div>
                </div>
                <div class="item">
                    <div class="item_image">
                        <img src="{{ asset('assets/images/bow.png') }}" alt="Standing Bow">
                    </div>
                    <div class="item_title">Standing Bow</div>
                </div>
            </div>
        </div>
    </div>

@endsection
