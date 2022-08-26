@extends('layouts2')
@section('content2')
<head>
    <style>
        #discussion{
            color: #DCDCDC;
            display: fixed;
            justify-content: center;
            width: 300px;
            font-size: 5rem;
        }

        #positionCol{
            display: flex;
            flex-flow: column wrap;
            border: 3px solid white;
            height: 300px;
            gap:0;
        }

        #comment, #name{
            color: white;
        }

        #position{
            
            top: 100px;
            left: 425px;
            width: 1000px;
            height: 150px;
        }

        #class{
            color: #A9A9A9;
        }

    </style>
</head>

<div class="contentbox">
    <br>
    <div class="row" id="position">
    <h1 id="discussion">Discussion</h1>
        <div class="row-cols-1 row-cols-md-1 g-2">
        @foreach($comments as $comment)
        <div class="col" id="positionCol">
            <br>
            
            <div class="card text-center" style="height: 200px;">
                <input type="hidden" name="id" id="id" value="{{$comment->id}}">
                <img src="{{ asset('profileImage/') }}/{{ $comment->profileImage }}" width="50" class="img-fluid rounded mx-auto d-block" alt="" >
                <div class="card-body">
                    <h5 class="card-title" id="name">{{ $comment->userName }}</h5>
                    <p class="card-text" id="class">{{ $comment->userRole }}</p>
                    <p class="card-text" id="comment">{{ $comment->comment }}</p>

            </div>
            </div>
            <br>
        </div>
        @endforeach
        
        </div>
    </div>

<script>
    
</script>
@endsection