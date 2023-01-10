@extends('app')
@section('content')
@auth




@endauth
<div class="dashboard-wrapper">
    <div class="container">
        <div class="navigation">
            <ul>
                <li class="logo">
                    <a href="{{ route('dashboard') }}">
                        <span class="icon"><i class="fa-solid fa-hospital"></i></span>
                        <span class="title">Clinic</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('dashboard') }}" class="active">
                        <span class="icon"><i class="fa fa-home"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('bookAppointment') }}">
                        <span class="icon"><i class="fa fa-briefcase"></i></span>
                        <span class="title">Book Appointment</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('viewAppointment') }}">
                        <span class="icon"><i class="fa fa-book"></i></span>
                        <span class="title">View Appointment</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('medicalHistory') }}">
                        <span class="icon"><i class="fa fa-file-text" aria-hidden="true"></i>
                        </span>
                        <span class="title">Medical History</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('profile') }}">
                        <span class="icon"><i class="fa fa-user"></i></span>
                        <span class="title">My Profile</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('logout') }}">
                        <span class="icon"><i class="fa fa-sign-out"></i></span>
                        <span class="title">Log Out</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="main">
            <div class="topbar">
                <div class="toggle" onclick="toggleMenu();">
                    <i class="fa fa-bars" aria-hidden="true"></i>

                </div>
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search here" />
                        <i class="fa fa-search" aria-hidden="true"></i>

                    </label>
                </div>
                <div class="notification">
                    <a href="#"><i class="fa fa-bell" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-envelope" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-comment" aria-hidden="true"></i></a>
                    <a href="{{ route('logout') }}"><i class="fa fa-sign-out"></i></a>
                </div>
            </div>

            <div class="welcome">
                <p id="welcome">Welcome <b>@if(Auth::user())
                        {{ Auth::user()->fullname }}
                        @endif
                    </b>!</p>
            </div>

            <div class="card-container">
                <div class="card card-appoint">
                    <div class="card-icon">
                        <h2>Your Appointment</h2>

                        <div class="table">
                            @if(session('success'))
                            <p class="alert-success">{{ session('success') }}</p>
                            @endif
                            <table cellspacing="0" cellpadding="0">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Date</th>
                                        <th>Time</th>
                                        <th>Doctor</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
<tbody>
@php $count = 1;
@endphp
                                        @foreach($AppointmentRecord as $row)

                                        <tr>
                                            <td>{{ $count }}</td>

                                            <td>{{ $row['appointment_date']}}</td>
                                        
                                            <td>{{ $row['appointment_time']}} </td>

                                            <td></td>

                                            <td>
                                                @if($row['Status'] == 'Pending')
                                                <span class="status pending">{{ $row['Status'] }}</span>
                                              
                                                @elseif($row['Status'] == 'Treated')
                                                <span class="status success">{{ $row['Status'] }}</span>
                                                
                                                @endif
                                                
                                            </td>

                                           @php
                                            $count++;
                                           @endphp
                                        </tr>

                                        @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-icon">
                        <h2>Our Doctors</h2>

                        <div class="doc-1">
                            <img src="/img/doc1.jpg" alt="doc-img" />
                            <div>
                                <b>Name - </b>Johnson Collins<br />
                                <b>Specialization - </b>Brain<br />
                                <b>Experience - </b>2 years<br />
                                <b>Status - </b><span class="status success">Verified</span>
                            </div>
                        </div>
                        <div class="doc-1">
                            <img src="/img/doc1.jpg" alt="doc-img" />
                            <div>
                                <b>Name - </b>Johnson Collins<br />
                                <b>Specialization - </b>Brain<br />
                                <b>Experience - </b>2 years<br />
                                <b>Status - </b><span class="status success">Verified</span>
                            </div>
                        </div>
                        <div class="doc-1">
                            <img src="/img/doc1.jpg" alt="doc-img" />
                            <div>
                                <b>Name - </b>Johnson Collins<br />
                                <b>Specialization - </b>Brain<br />
                                <b>Experience - </b>2 years<br />
                                <b>Status - </b><span class="status success">Verified</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="dashboard-footer">
                <p><b>Developed by </b>Edafe Ezekiel
                <p>&copy; 2023 All rights reserved</p>

            </div>
        </div>
    </div>
</div>


@endsection