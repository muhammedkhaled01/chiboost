@extends('auth.login-layout')
@section('content')
    <div class="bg-auth">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card-auth">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <div class="form-group">
                                <label for="email" value="">{{ __('Email') }}</label>
                                <input id="email" class="form-control mt-1 w-full" type="email" name="email"
                                       value="{{old('email', $request->email)}}" required autofocus/>
                            </div>

                            <div class="mt-4 form-group">
                                <label for="password" value="">{{ __('Password') }}</label>
                                <input id="password" class="form-control mt-1 w-full" type="password" name="password"
                                             required autocomplete="new-password">
                            </div>

                            <div class="mt-4 form-group">
                                <label for="password_confirmation" value="">{{ __('Confirm Password') }}</label>
                                <input id="password_confirmation" class="form-control mt-1 w-full" type="password"
                                             name="password_confirmation" required autocomplete="new-password">
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <button class="btn btn-success w-100">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection




