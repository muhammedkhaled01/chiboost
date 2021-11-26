@extends('auth.login-layout')
@section('content')
    <div class="bg-auth">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card-auth">
                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email" value="">{{ __('Email') }}</label>
                                <input id="email" class="form-control mt-1 w-full" type="email" name="email"
                                             value="{{old('email')}}" required autofocus/>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <button class="btn btn-success w-100">
                                    {{ __('Email Password Reset Link') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection




