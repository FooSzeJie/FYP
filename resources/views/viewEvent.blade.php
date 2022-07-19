@extends('layouts')
@section('content')
<head>
    <title>event</title>
    
<style>
  .event-container {
    font-family: "Roboto", sans-serif;
    max-width: 800px;
    margin: 0 auto;
  }

  .event-container h3.year {
    font-size: 40px;
    text-align: center;
    border-bottom: 1px solid #b1b1b1;
  }

  .event-container .event {
    box-shadow: 0 4px 16px -8px rgba(0, 0, 0, 0.4);
    display: flex;
    border-radius: 8px;
    margin: 32px 0;
  }

  .event .event-left {
    background: #222;
    min-width: 82px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #eee;
    padding: 8px 48px;
    font-weight: bold;
    text-align: center;
    border-radius: 8px 0 0 8px;
  }

  .event .event-left .date {
    font-size: 56px;
  }

  .event .event-left .month {
    font-size: 16px;
    font-weight: normal;
  }

  .event .event-right {
    display: flex;
    flex-direction: column;
    justify-content: center;
    padding: 0 24px;
  }

  .event .event-right h3.event-title {
    font-size: 24px;
    margin: 24px 0 10px 0;
    color: #218bbb;
    text-transform: uppercase;
  }

  .event .event-right .event-timing {
    background: #fff8ba;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 100px;
    padding: 8px;
    border-radius: 16px;
    margin: 24px 0;
    font-size: 14px;
  }

  .event .event-right .event-timing img {
    height: 20px;
    padding-right: 8px;
  }

  .launch-time{
      display: flex;
  }

  .launch-time div{
      flex-basis: 100px;
  }

  .launch-time div p{
      font-size: 30px;
      margin-bottom: -14px;
  }

  @media (max-width: 550px) {
    .event {
      flex-direction: column;
    }

    .event .event-left {
      padding: 0;
      border-radius: 8px 8px 0 0;
    }

    .event .event-left .event-date .date,
    .event .event-left .event-date .month {
      display: inline-block;
      font-size: 24px;
    }

    .event .event-left .event-date {
      padding: 10px 0;
    }
  }
</style>

</head>
<body>

<!-- home section  -->

<div class="container">
<section class="home">

<div class="event-container">
      <h3 class="year">2022</h3>

      <div class="event">
        <div class="event-left">
          <div class="event-date">
            <div class="date">1</div>
            <div class="month">Jan</div>
          </div>
        </div>

        <div class="event-right">
          <h3 class="event-title"><a href="{{ asset ('EMathEvent') }}">Elementary Math Quiz</a></h3>

          <div class="event-description">
            This competition is suitable for elementary school level of mathematics, anyone can participate in the competition
          </div>

          <div class="event-timing">
            <img src="{{ asset('images/time.png')}}" alt="" /> Available Now!
            
          </div>

        </div>
      </div>

      <div class="event">
        <div class="event-left">
          <div class="event-date">
            <div class="date">1</div>
            <div class="month">Feb</div>
          </div>
        </div>

        <div class="event-right">
          <h3 class="event-title">Elementary Chinese Quiz</h3>

          <div class="event-description">
            This competition is suitable for elementary school level of chinese, anyone can participate in the competition
          </div>

          <div class="event-timing">
            <img src="{{ asset('images/time.png')}}" alt="" /> 10:45 am
          </div>

        </div>
      </div>

      <div class="event">
        <div class="event-left">
          <div class="event-date">
            <div class="date">1</div>
            <div class="month">Mar</div>
          </div>
        </div>

        <div class="event-right">
          <h3 class="event-title">Some Title Here</h3>

          <div class="event-description">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus,
            ratione.
          </div>

          <div class="event-timing">
            <img src="{{ asset('images/time.png')}}" alt="" /> 10:00 am
          </div>
        </div>
      </div>

      <div class="event">
        <div class="event-left">
          <div class="event-date">
            <div class="date">1</div>
            <div class="month">Mar</div>
          </div>
        </div>

        <div class="event-right">
          <h3 class="event-title">Some Title Here</h3>

          <div class="event-description">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus,
            ratione.
          </div>

          <div class="event-timing">
            <img src="{{ asset('images/time.png')}}" alt="" /> 10:30 am
          </div>
        </div>
      </div>

      <div class="event">
        <div class="event-left">
          <div class="event-date">
            <div class="date">1</div>
            <div class="month">Apr</div>
          </div>
        </div>

        <div class="event-right">
          <h3 class="event-title">Some Title Here</h3>

          <div class="event-description">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Accusamus,
            ratione.
          </div>

          <div class="event-timing">
            <img src= "{{ asset('images/time.png')}}" alt="" /> 10:00 am
          </div>
        </div>
      </div>

    </div>
  </section> 



<!-- custom js file link -->
<script src="js/script.js"></script>

</body>
@endsection