@extends('app')
@section('content')

<div class="index-wrapper">
    <div class="header-container">
        <h3><a href="{{ route('index') }}"><i class="fa-solid fa-hospital"></i>Clinic</a></h3>
        <h5>info@zikiprojects.com</h5>
        <ul>
            <li><a href="{{ route('index') }}" class="active">Home</a></li>
            <li><a href="{{ route('index') }}">Contact</a></li>
            <li><a href="{{ route('index') }}">Services</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>

        </ul>

    </div>
    <div class="index-container">

        <div class="description">
            <h1>Clinic <br />Management <br />System</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur molestiae accusantium at deleniti
                quaerat, inventore placeat ea, magni consequuntur aperiam assumenda illum id exercitationem excepturi
                ratione, labore recusandae! Expedita similique reprehenderit.</p>
            <h3> <b>
                    @if(Auth::user())
                    {{ Auth::user()->fullname }}
                    @endif
                </b></h3>
            <!-- @auth
            <a href="{{ route('logout') }}">Log Out</a>
            @endauth -->
            <div class="cta">
                @guest
                <a href="{{ route('register') }}" class="btn-register">Register</a>
                <a href="{{  route('login') }}" class="btn-login">Login</a>
                @endguest
            </div>
        </div>
        <div class="img1">
            <img src="/img/undraw_medicine_b-1-ol.svg" alt="img" />
        </div>
    </div>
</div>



@endsection