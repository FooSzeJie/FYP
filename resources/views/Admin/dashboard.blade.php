@extends('Admin.layout')
@section('title')
<title>Dashboard</title>
<link rel="stylesheet" href="{{ asset('css/adminCSS/DashboardCSS/dashboardStyle.css') }}">
@endsection

@section('content')

<h3 class="i-name">Dashboard</h3>

<div class="values">
    <div class="val-box">
        <i class="fa-solid fa-users"></i>
        <div>
            <h3>{{ $user }}</h3>
            <span>Users</span>
        </div>
    </div>

    <div class="val-box">
        <i class="fa-solid fa-chalkboard-user"></i>
        <div>
            <h3>{{ $teacher }}</h3>
            <span>Teachers</span>
        </div>
    </div>

    <div class="val-box">
        <i class="fa-regular fa-rectangle-list"></i>
        <div>
            <h3>{{ $category }}</h3>
            <span>Categories</span>
        </div>
    </div>

    <div class="val-box">
        <i class="fa-solid fa-book"></i>
        <div>
            <h3>{{ $course }}</h3>
            <span>Courses:</span>
        </div>
    </div>
</div>

<div class="board">
    <table width="100%">
        <thead>
            <tr>
                <td>Name</td>
                <td>Age</td>
                <td>Role</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td class="people">
                    <img src="{{ asset('images/admin/book5.jpg') }}">
                    <div class="people-de">
                        <h5>John Doe</h5>
                        <p>abc@gmail.com</p>
                    </div>
                </td>

                <td class="people-des">
                    <h5>12</h5>
                </td>

                <td class="role">
                    <p>Admin</p>
                </td>

                <td class="status">
                    <p>Active</p>
                </td>

                <td class="action">
                    <div class="buttonBox">
                        <div class="button">
                            <a href="#" class="edit">Edit</a>
                        </div>

                        <div class="button">
                            <a href="#" class="delete">Delete</a>
                        </div>
                    </div>
                    
                </td>
            </tr>
        </tbody>
    </table>
</div>
@endsection