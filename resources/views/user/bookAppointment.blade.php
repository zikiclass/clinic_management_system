@extends('app')
@section('content')


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
                    <a href="{{ route('dashboard') }}">
                        <span class="icon"><i class="fa fa-home"></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('bookAppointment') }}" class="active">
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
                <p><b>Book Appointment
                    </b></p>
            </div>

            <div class="card-container">
                <div class="card card-appoint">
                    <div class="card-icon">
                        <h2>Book Appointment</h2>

                        <div>
                            <form action="{{ route('bookappoint.action') }}" method="POST" class="frm-user"
                                id="frm-user">
                                @csrf
                                <div class="form-group">
                                    <label>doctor:</label>
                                    <select name="doctor">
                                        <option value="John">John</option>
                                        <option value="Martins">Martins</option>
                                        <option value="Collins">Collins</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>date of appointment:</label>
                                    <input type="date" name="date" required />
                                </div>
                                <div class="form-group">
                                    <label>time of appointment:</label>
                                    <input type="text" name="time" placeholder="00:00 AM/PM" required />
                                </div>
                                <div class="form-group">
                                    <label>Reason for visit:</label>
                                    <textarea rows="7" placeholder="Reason for visit..." name="reason"></textarea>
                                </div>
                                <input type="submit" class="btn-register" value="Book Now" />
                                <button onclick="resetForm();" class="btn-reset">Reset</button>
                            </form>
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