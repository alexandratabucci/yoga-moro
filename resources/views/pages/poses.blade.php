@extends('layouts.app')

@include('layouts.header')

@section('content')
    <div class="container">
        <div class="content">
            <h1 class="block_title">Стандартные позы в йоге</h1>
            <div class="yoga_poses">
                <div class="yoga_pose">
                    <img src="{{ asset('assets/images/three-legged.png') }}" alt="">
                    <p>Three legged downward-facing dog</p>
                </div>
                <div class="yoga_pose">
                    <img src="{{ asset('assets/images/plow.png') }}" alt="">
                    <p>Plow</p>
                </div>
                <div class="yoga_pose">
                    <img src="{{ asset('assets/images/sarva.png') }}" alt="">
                    <p>Sarvangasana</p>
                </div>
                <div class="yoga_pose">
                    <img src="{{ asset('assets/images/boat.png') }}" alt="">
                    <p>Boat pose</p>
                </div>
                <div class="yoga_pose">
                    <img src="{{ asset('assets/images/one-legged.png') }}" alt="">
                    <p>One legged king pigeon</p>
                </div>
                <div class="yoga_pose">
                    <img src="{{ asset('assets/images/paschimottanasana.png') }}" alt="">
                    <p>Paschimottanasana</p>
                </div>
                <div class="yoga_pose">
                    <img src="{{ asset('assets/images/lift.png') }}" alt="">
                    <p>Halfway lift</p>
                </div>
                <div class="yoga_pose">
                    <img src="{{ asset('assets/images/uttanasana.png') }}" alt="">
                    <p>Uttanasana</p>
                </div>
            </div>
            <div class="yoga_poses" style="margin-top: 20px; background: #e5e5d9; padding-bottom: 10px">
                <div class="yoga_pose">
                    <img src="{{ asset('assets/images/three-legged.png') }}" alt="">
                    <p>Three legged downward-facing dog</p>
                </div>
                <div class="yoga_pose">
                    <img src="{{ asset('assets/images/plow.png') }}" alt="">
                    <p>Plow</p>
                </div>
                <div class="yoga_pose">
                    <img src="{{ asset('assets/images/sarva.png') }}" alt="">
                    <p>Sarvangasana</p>
                </div>
                <div class="yoga_pose">
                    <img src="{{ asset('assets/images/boat.png') }}" alt="">
                    <p>Boat pose</p>
                </div>
                <div class="yoga_pose">
                    <img src="{{ asset('assets/images/one-legged.png') }}" alt="">
                    <p>One legged king pigeon</p>
                </div>
                <div class="yoga_pose">
                    <img src="{{ asset('assets/images/paschimottanasana.png') }}" alt="">
                    <p>Paschimottanasana</p>
                </div>
                <div class="yoga_pose">
                    <img src="{{ asset('assets/images/lift.png') }}" alt="">
                    <p>Halfway lift</p>
                </div>
                <div class="yoga_pose">
                    <img src="{{ asset('assets/images/uttanasana.png') }}" alt="">
                    <p>Uttanasana</p>
                </div>
            </div>
        </div>
    </div>
@endsection

@include('layouts.footer')
