@extends('layouts')
@section('content')
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">

<title>Pricing page</title>


<style>
    .container {
        padding: 25px;
    }

    .pricing-plan{
        width: 300px;
        border-radius: 25px;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        overflow: hidden;
        font-family: 'Lato', sans-serif;
        font-size: 16px;
        line-height: 1.5;
        color: #555555;
        margin: 20px;
        padding: 0px;
    }

    .pricing-plan--highlighted {
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
        transform: scale(1.05);
    }

    .pricing-plan__special-text {
        padding:10px;
        text-align: center;
        font-weight: bold;
        color: #fff;
        background: #007c64;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
    }

    .pricing-plan__header{
        padding: 0px;
        background: #009578;
        color: #ffffff;
    }

    .pricing-plan__title, .pricing-plan__summary{
        margin: 0;
        text-align: center;
    }

    .pricing-plan__title{
        font-size: 1.5em;
        font-weight 400;
    }

    .pricing-plan__summary{
        font-size: 1em;
        font-weight 300;
    }

    .pricing-plan__description{
        padding: 15px;
    }

    .pricing-plan__list{
        padding: 0;
        margin: 0;
    }

    .pricing-plan__feature{
        list-style: none;
        margin: 0; 
        padding-left: 25px;
        position: relative;
        font-size: 0.9em;
    }

    .pricing-plan__feature:not(:last-child) {
        margin-bottom: 0;         
    }

    .pricing-plan__feature:before {
        content: "\2714";
        color: #009578;
        position: absolute;
        left: 0;

    }

    .pricing-plan__actions {
        padding: 25px;
        border-top: 1px solid #eee;
        display:flex;
        flex-direction: column;
    }

    .pricing-plan__button {
        display: inline-block;
        margin: 15px auto;
        padding: 8px 20px;
        text-decoration: none;
        color: #009578;
        background: #fff;
        border: 1px solid #009578;
        text-transform: uppercase;
        letter-spacing: 0.02em;
        font-weight: bold;
    }

    .pricing-plan__button:hover {   
        color: #fff;
        background: #009578;
    }

    .pricing-plan__cost {
        margin: 0;
        color: #000;
        text-align: center;
        font-size: 2em;
    }

    .pricing-plan__text {
        font-size: 0.9em;
        margin: 0 0 10px 0;
        text-align: center;
    }

    .pricing-plan-container {
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 20px;
    }

</style>

</head>
<body class="theme-cyan">

<div class="row">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>

<div class="container">
    <div class="pricing-plan-container">
        <section class="pricing-plan pricing-plan--highlighted">
            <div class="pricing-plan__header">
                <h1 class="pricing-plan__title">Basic Plan</h1>
                <h2 class="pricing-plan__summary">For those getting started</h2>
            </div>

            <div class="pricing-plan__description">
                <ul class="pricing-plan__list">
                    <li class="pricing-plan__feature">5GB Disk Space</li>
                    <li class="pricing-plan__feature">10 Domain Names</li>
                    <li class="pricing-plan__feature">5 E-Mail Address</li>
                    <li class="pricing-plan__feature">Fully Support</li>
                </ul>
            </div>

            <div class="pricing-plan__actions">
                <p class="pricing-plan__cost">RM{{$basic -> price}}</p>
                <p Class="pricing-plan__text">per month</p>
                <a href="{{ route('plans.checkout', $basic->plan_id) }}" class="pricing-plan__button">Purchase</a>
                <p Class="pricing-plan__text">Minimum spend Rm816 over 12 months</p>
            </div>
        </section>

        <section class="pricing-plan pricing-plan--highlighted">
            <div class="pricing-plan__special-text">Recommended</div>
            <div class="pricing-plan__header">
                <h1 class="pricing-plan__title">Professional Plan</h1>
                <h2 class="pricing-plan__summary">For those getting started</h2>
            </div>

            <div class="pricing-plan__description">
                <ul class="pricing-plan__list">
                    <li class="pricing-plan__feature">Feature #1</li>
                    <li class="pricing-plan__feature">Feature #2</li>
                    <li class="pricing-plan__feature">Feature #3</li>
                </ul>
            </div>

            <div class="pricing-plan__actions">
                <p class="pricing-plan__cost">RM{{$professional -> price}}</p>
                <p Class="pricing-plan__text">per 6 month</p>
                <a href="#" class="pricing-plan__button">Purchase</a>
                <p Class="pricing-plan__text">Minimum spend Rm816 over 12 months</p>
            </div>
        </section>

        <section class="pricing-plan pricing-plan--highlighted">
            <div class="pricing-plan__header">
                <h1 class="pricing-plan__title">Enterprise Plan</h1>
                <h2 class="pricing-plan__summary">For those getting started</h2>
            </div>

            <div class="pricing-plan__description">
                <ul class="pricing-plan__list">
                    <li class="pricing-plan__feature">Feature #1</li>
                    <li class="pricing-plan__feature">Feature #2</li>
                    <li class="pricing-plan__feature">Feature #3</li>
                </ul>
            </div>

            <div class="pricing-plan__actions">
                <p class="pricing-plan__cost">RM{{$enterprise -> price}}</p>
                <p Class="pricing-plan__text">per 12 month</p>
                <a href="#" class="pricing-plan__button">Purchase</a>
                <p Class="pricing-plan__text">Minimum spend Rm816 over 12 months</p>
            </div>
        </section>
    </div>
</div>
<!-- Jquery Core Js -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->
</body>
@endsection