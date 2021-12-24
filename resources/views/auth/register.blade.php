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
                                <input type="text" name="name" value="{{old('name')}}" class="form-control" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="email" value="{{old('email')}}" class="form-control" required>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Phone</label>
                                <input type="number" id="inputPhone" name="phone" value="{{old('phone')}}" class="form-control" required>
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control" required>
                                @error('password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Confirm password</label>
                                <input type="password" name="password_confirmation" class="form-control" required>
                                @error('password_confirmation')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-login w-100">Register</button>
                            <a href="#" class="link-card">Already have an account?</a>
                            <hr>
                            <div class="card-auth-footer text-center ">
                                <a href="{{ url('login') }}" class="link-card d-block">Go to login</a>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
