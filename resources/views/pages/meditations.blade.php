@extends('layouts.app')

@include('layouts.header')

@section('content')

    <div class="container">
        <div class="content">
            <h1 class="block_title">Медитации</h1>

            <div class="meditations_list">
                <div class="meditation">
                    <p>1. Медитация для внутреннего равновесия</p>
                    <audio controls>
                        <source src="{{ asset('assets/audio/1.ogg')}}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <div class="meditation">
                    <p>2. Медитация для внутреннего равновесия</p>
                    <audio controls>
                        <source src="{{ asset('assets/audio/2.ogg')}}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <div class="meditation">
                    <p>3. Медитация для внутреннего равновесия</p>
                    <audio controls>
                        <source src="{{ asset('assets/audio/3.ogg')}}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <div class="meditation">
                    <p>4. Медитация для внутреннего равновесия</p>
                    <audio controls>
                        <source src="{{ asset('assets/audio/4.ogg')}}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <div class="meditation">
                    <p>5. Медитация для внутреннего равновесия</p>
                    <audio controls>
                        <source src="{{ asset('assets/audio/5.ogg')}}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <div class="meditation">
                    <p>6. Медитация для внутреннего равновесия</p>
                    <audio controls>
                        <source src="{{ asset('assets/audio/6.ogg')}}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <div class="meditation">
                    <p>7. Медитация для внутреннего равновесия</p>
                    <audio controls>
                        <source src="{{ asset('assets/audio/7.ogg')}}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <div class="meditation">
                    <p>8. Медитация для внутреннего равновесия</p>
                    <audio controls>
                        <source src="{{ asset('assets/audio/8.ogg')}}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <div class="meditation">
                    <p>9. Медитация для внутреннего равновесия</p>
                    <audio controls>
                        <source src="{{ asset('assets/audio/9.ogg')}}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <div class="meditation">
                    <p>10. Медитация для внутреннего равновесия</p>
                    <audio controls>
                        <source src="{{ asset('assets/audio/10.ogg')}}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <div class="meditation">
                    <p>11. Медитация для внутреннего равновесия</p>
                    <audio controls>
                        <source src="{{ asset('assets/audio/11.ogg')}}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
                <div class="meditation">
                    <p>12. Медитация для внутреннего равновесия</p>
                    <audio controls>
                        <source src="{{ asset('assets/audio/12.ogg')}}" type="audio/mpeg">
                        Your browser does not support the audio element.
                    </audio>
                </div>
            </div>
        </div>
    </div>

@endsection

@include('layouts.footer')
