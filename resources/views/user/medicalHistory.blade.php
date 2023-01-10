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
                    <a href="{{ route('medicalHistory') }}" class="active">
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
                <p><b>Medical History
                    </b></p>
            </div>

            <div class="card-container">
                <div class="card card-appoint">
                    <div class="card-icon">
                        <h2>Medical History</h2>

                        <div class="table">
                            <table cellspacing="0" cellpadding="0">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Date</th>
                                        <th>Doctor/Nurse</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>1/1/2023</td>
                                        <td>Dr. James</td>
                                        <td><span class="status pending">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>2.</td>
                                        <td>1/1/2023</td>
                                        <td>Dr. James</td>
                                        <td><span class="status success">Treated</span></td>
                                    </tr>
                                    <tr>
                                        <td>3.</td>
                                        <td>1/1/2023</td>
                                        <td>Dr. James</td>
                                        <td><span class="status pending">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>4.</td>
                                        <td>1/1/2023</td>
                                        <td>Dr. James</td>
                                        <td><span class="status success">Treated</span></td>
                                    </tr>
                                    <tr>
                                        <td>5.</td>
                                        <td>1/1/2023</td>
                                        <td>Dr. James</td>
                                        <td><span class="status pending">Pending</span></td>
                                    </tr>
                                    <tr>
                                        <td>6.</td>
                                        <td>1/1/2023</td>
                                        <td>Dr. James</td>
                                        <td><span class="status success">Treated</span></td>
                                    </tr>
                                </tbody>
                            </table>
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