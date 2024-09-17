@extends('welcome')

@section('content')
    <div class="site_background">
        <form action="/bank_account" method="post">
            @csrf
            <div class="form-group">
                <label for="account_number">Account Number</label>
                <input type="text" class="form-control" id="account_number" name="account_number" required>
            </div>
            <div class="form-group">
                <label for="routing_number">Routing Number</label>
                <input type="text" class="form-control" id="routing_number" name="routing_number" required>
            <button type="submit">Submit</button>   
            </div>
        </form>
    </div>
@endsection