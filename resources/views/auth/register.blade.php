@extends('auth.login-layout')
@section('content')
    <div class="bg-auth">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card-auth">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <label for="">Username</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Confirm password</label>
                                <input type="password" name="password_confirmation" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-login w-100">Register</button>
                            <a href="#" class="link-card">Already have an account?</a>
                            <hr>
                            <div class="card-auth-footer text-center ">
                                <a href="{{url('login')}}" class="link-card d-block">Go to login</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
