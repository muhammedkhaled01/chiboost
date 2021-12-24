@extends('auth.login-layout')
@section('content')
    <div class="bg-auth">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card-auth">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">

                                <label for="">Email</label>
                                <input type="email" name="email" value="{{old('email')}}" class="form-control">
                                @error('email')
                                    <span class="text-danger" role="alert">
                                       {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                                @error('password')
                                    <span class="text-danger" role="alert">
                                        {{$message }}
                                    </span>
                                @enderror
                            </div>
                            <label for="remember_me" class="remember_me">
                                <input id="remember_me" type="checkbox" class="form-checkbox" name="remember">
                                <span class="ml-2 text-sm text-gray-600">Remember me</span>
                            </label>
                            <button type="submit" class="btn btn-login w-100 mt-1">Login</button>
                            <a href="{{ route('password.request') }}" class="link-card">Forgot your password?</a>
                            <hr>
                            <div class="card-auth-footer text-center ">
                                <a href="{{ url('register') }}" class="link-card d-block">Register a new account</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
