@extends('layouts')
@section('content')
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

<title>Pricing page</title>
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Favicon-->

<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

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

<section class="content">
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="pricing pricing-palden">
                        <div class="pricing-item">
                            <div class="pricing-deco l-slategray">
                                <div class="pricing-price"><span class="pricing-currency">£</span>
                                <span class="pricing-period">/ mo</span>{{$basic -> price}}
                                </div>
                                <h3 class="pricing-title">BASIC</h3>
                            </div>
                            <ul class="feature-list">
                                <li>5GB Disk Space</li>
                                <li>10 Domain Names</li>
                                <li>5 E-Mail Address</li>
                                <li>Fully Support</li>
                            </ul>

                            <a href="{{ route('plans.checkout', $basic->plan_id) }}" class="pricing-action l-amber">Choose plan</a>
                        </div>

                        
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js -->
<script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->

<script src="{{ asset('assets/bundles/mainscripts.bundle.js') }}"></script><!-- Custom Js -->
</body>
@endsection