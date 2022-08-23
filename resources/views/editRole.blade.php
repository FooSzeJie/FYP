@extends('layouts')
@section('content')

<div class="content">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <h3>Edit Role</h3>
            <form action="{{ route('updateRole') }}" method="POST" enctype="multipart/form-data" >
                @CSRF
                @foreach($users as $user)
                        <input type="hidden" name="userID" id="userID" value="{{$user->id}}">
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select name="role" id="role" class="form-control">
                                <option value="user">User</option>
                                <option value="teacher">Teacher</option>
                                <option value="admin">Admin</option>
                            </select>
                        </div>
                    </div>
                @endforeach
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>

        <div class="col-sm-1"></div>
    </div>
</div>

@endsection