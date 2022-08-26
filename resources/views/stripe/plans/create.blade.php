@extends('layouts')
@section('content')


<div class="container">
            <br>
            <h1>Create Plans</h1>
            <form action="{{ route('plans.store') }}" method="POST" enctype="multipart/form-data">
            @CSRF
            <div class="form-group">
                <label for="planName">Plan Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter Plan Name">
            </div>

            <div class="form-group">
                <label for="amount">Amount</label>
                <input type="number" name="amount" class="form-control" placeholder="Enter Amount">
            </div>

            <div class="form-group">
                
                <input type="hidden" name="currency" class="form-control" value="MYR">
            </div>

            <div class="form-group">
                <label for="interval_count">Interval Count</label>
                <input type="number" name="interval_count" class="form-control" placeholder="Enter Count">
            </div>

            <div class="form-group">
                    <label for="billingPeriod">Billing Period</label>
                    <select name="billing_period" id="billing_period" class="form-control">
                        <option disabled selected>Choose billing method</option>
                        <option value="week">Weekly</option>
                        <option value="month">Monthly</option>
                        <option value="year">Yearly</option>
                    </select>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </div>
        </form>
</div>

@endsection