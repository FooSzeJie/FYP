@extends('Admin.layout')
@section('title')
<title>User Informtation</title>
<link rel="stylesheet" href="{{ asset('css/adminCSS/userInfoCSS/userInfoStyle.css') }}">
@endsection

@section('content')
<h3 class="i-name">User Views</h3>

<div class="toolBar">
    <div class="tool">
        <div class="fillter">
            <select name="userID" id="roleFilter">
                <option value="0">--Role--</option>
                <option value="1">User</option>
                <option value="2">Teacher</option>
            </select>
        </div>
        
    </div>

    <div class="tool">
        <div class="delete">
            <a href="#"><i class="fa-regular fa-trash-can"></i>Delete</a>
        </div>        
    </div>
</div>

<div class="board">
    <table width="100%">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Age</td>
                <td>Role</td>
                <td>Address</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
        </thead>

        <tbody id="userData">
        @foreach($users as $user)
            <tr>
                <td class="checkbox">
                    <input type="checkbox">
                </td>

                <td class="people">
                    <img src="{{ asset('profileImage/') }}/{{ $user->profileImage }}">
                    <div class="people-de">
                        <h5>{{$user->name}}</h5>
                        <p>{{ $user->email }}</p>
                    </div>
                </td>

                <td class="people-des">
                    <h5>{{ $user->age }}</h5>
                </td>

                <td class="role">
                    <p>{{ $user->role }}</p>
                </td>

                <td class="address">
                    <p>{{ $user->address }}</p>
                </td>

                <td class="status">
                    <p>{{ $user->paymentStatus}}</p>
                </td>

                <td class="action">
                    <div class="buttonBox">
                        <div class="button">
                            <a href="#" class="edit">Edit</a>
                        </div>

                        <div class="button">
                            <a href="{{ route('deleteUser', ['id'=>$user->id]) }}" class="delete">Delete</a>
                        </div>
                    </div>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('js')
<script type="text/javascript" src="{{ asset('js/admin/userInfo.js') }}"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

@endsection