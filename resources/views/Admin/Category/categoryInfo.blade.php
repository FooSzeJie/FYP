@extends('Admin.layout')
@section('title')
<title>Category Information</title>
<link rel="stylesheet" href="{{ asset('css/adminCSS/CategoryCSS/categoryStyle.css') }}">
@endsection

@section('content')
<h3 class="i-name">Category Views</h3>

<div class="toolbar">
    <div class="tool">
        <div class="filter">
            <select id=''>
                <option value="0">--Status--</option>
                <option value="1">Active</option>
                <option value="2">Inactive</option>
            </select>
        </div>
            
    </div>

    <div class="tool">
        <div class="toolBtn">
            <div class="addBtn">
                <a href="#"><i class="fa-solid fa-plus"></i>Add</a>
            </div>

            <div class="deleteBtn">
                <a href="#"><i class="fa-regular fa-trash-can"></i>Delete</a>
            </div>
        </div>
    </div>
</div>

<div class="dataBoard">
    <table width="100%">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
        </thead>
            
        <tbody>
            @foreach($categories as $category)
            <tr>
                <td class="checkboxArea">
                    <label class="checkbox">
                        <input type="checkbox" value="{{ $category->id }}">
                        <span class="checkmark"></span>
                    </label>
                </td>

                <td class="Cname">
                    <h5>{{ $category->name }}</h5>
                </td>

                <td class="status">
                    <p>Active</p>
                </td>

                <td class="action">
                    <div class="btnBox">
                        <div class="btn">
                            <a href="#" class="edit">Edit</a>
                        </div>

                        <div class="btn">
                            <a href="#" class="delete">Delete</a>
                        </div>
                    </div>
                </td>
            </tr>
        </tbody>
        @endforeach
    </table>
</div>
@endsection