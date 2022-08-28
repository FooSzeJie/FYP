@extends('layouts')
@section('content')
<head>
    <style>
        span{
            color: red;
        }

        .superlink{
            color:blue;
        }

        p{
            color: grey;
        }
    </style>
</head>

<div class="container">
            <br>
            <h1>upload hrdf</h1>
            <form action="{{ route('uploadHrdf')}}" method="POST" enctype="multipart/form-data">
            @CSRF

            <div class="form-group">
                <label for="courseName">Teacher Name: </label>
                <label for="courseName">{{ Auth::user()->name }}</label>

                <input type="hidden" name="status" id="status" value="Pending"> 
            </div>


            <div class="form-group">
                <label for="HRDFForm">HRDF Form</label>
                <input type="file" class="form-control" id="HRDFForm" name="HRDFForm">
                <span>#Please rename the file name to hrdf_email. Example: hrdf_abc@gmail.com</span>
            </div>

            <div class="form-group">
                <p>
                    * You can download the form in 
                    <a href="{{ asset('files/hrdfForm.pdf') }}" class="superlink">Here</a>
                </p>
            </div>

            <button type="submit" class="btn btn-primary">Upload</button>
            <br><br>
        </div>
        </form>
</div>



@endsection