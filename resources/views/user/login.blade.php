@extends('app')
@section('content')

<div class="about-login">
    <h3>About Us</h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum ea officiis, fuga eum labore
        necessitatibus, laudantium quisquam unde facere tenetur odio! Dolores numquam laborum sunt accusamus ipsum
        iure expedita quia.</p>
    <img src="/img/undraw_medicine_b-1-ol.svg" class="abt_img" alt="About" />
</div>


@if(session('success'))
<p class="alert-success">{{ session('success') }}</p>
@endif
<form method="POST" action="{{ route('login.action') }}">
    @csrf
    <h3><a href="{{ route('index') }}"><i class="fa-solid fa-hospital"></i>Clinic</a></h3>
    <h4>Sign in</h4>
    @if($errors->any())
    @foreach($errors->all() as $err)
    <p class="alert-error">{{ $err }}</p>
    @endforeach
    @endif
    <div class="input-field">
        <i class="fa fa-user"></i>
        <input type="text" name="username" placeholder="Username" value="{{ old('username') }}" />
    </div>
    <div class="input-field">
        <i class="fa fa-key"></i>
        <input type="password" name="password" placeholder="Password" />
    </div>
    <input type="submit" value="Login" class="btn transparent" />
    <p>Or sign in with your social handles.</p>
    <ul class="social-ul">
        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
        <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
    </ul>
    <p>Don't have an account? <a href="/register">Sign Up</a></p>
</form>
@endsection