@extends('app')
@section('content')

<h3>Welcome <b>
        @if(Auth::user())
        {{ Auth::user()->fullname }}
        @endif
    </b></h3>
@auth
<a href="{{ route('logout') }}">Log Out</a>
@endauth
@guest
<a href="{{ route('login') }}">Login</a>
@endguest


@endsection