@extends('welcome')

@section('content')
    <div class="site_background">
        <form action="/register" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <button type="submit">Submit</button>
        </div>
    </div>
@endsection