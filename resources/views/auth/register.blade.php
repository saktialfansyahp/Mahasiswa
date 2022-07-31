@extends('layout_auth')
@section('title', "Register")
@section("content")
<div class="container">
    <div class="row" style="padding-top: 50px">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="form-login" style="text-align: center;">
                <h4>Register</h4>
            </div>
            @if (session("success"))
            <div class="alert alert-primary">{{ session('success') }}</div>
            @endif
            @if ($errors->any())
            <div class="alert alert-danger" role="alert">
                {!! implode('', $errors->all('<li>:message</li>')) !!}
            </div>
            @endif
            <form method="post" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="name" name="name" class="form-control" placeholder="Enter Name"
                        value="{{ old('name')}}">
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter email"
                        value="{{ old('email')}}">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <div class="form-group">
                    <label>Password Confirmation</label>
                    <input type="password" name="password_confirmation" class="form-control"
                        placeholder="Retype Password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
            <br>
            sudah punya akun ? <a href="{{ url('/login') }}">Login</a>
        </div>
    </div>
</div>
@endsection
