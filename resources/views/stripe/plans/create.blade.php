@extends('layouts')
@section('content')

<div class="row">
    <form method="POST" action="{{ route('plans.store')}}">
        @CSRF
        <div class="form-group">
            <label>Plan Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter Email">
        </div>
        <div class="form-group">
            <label>Amount</label>
            <input type="number" name="amount" class="form-control" placeholder="Enter Amount">
        </div>
        <div class="form-group">
            <label>Currency</label>
            <input type="text" name="currency" class="form-control" placeholder="Enter Currency">
        </div>
        <div class="form-group">
            <label>interval Count</label>
            <input type="number" name="interval_count" class="form-control" placeholder="Enter Count">
        </div>
        <div class="form-group">
            <label>Billing Period</label>
            <select name="billing_period" class="form-control">
                <option disabled selected>Choose billing method</option>
                <option value="week">Weekly</option>
                <option value="month">Monthly</option>
                <option value="year">Yearly</option>
            </select>
        </div><br>
        <button type="submit" class="btn btn-xs-primary">Save</button>
    </form>
</div>

@endsection