  @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center login-location">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header login-title">{{ __('message.sign_in_title') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group column">
                            <label for="username" class="col-md-4 col-form-label text-md-left login-label">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror login-input" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group column">
                            <label for="password" class="col-md-4 col-form-label text-md-left login-label">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror login-input" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 login-submit">
                                <button type="submit" class="btn btn-submit">
                                    {{ __('message.sign_in') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('message.forgot_password') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row justify-content-center">
                            <div class="col-md-10 sign-with">
                                <p class="title-google">Sign in with</p>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center mt-4 mb-4">
                            <div class="col-md-10">
                                <button class="account-google">
                                    <a href="#">
                                        <i class="fab fa-google-plus-g">Google</i>
                                    </a>
                                </button>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-md-10 sign-with model-register">
                                <p class="title-google title-register">or New to HapoLearn</p>
                            </div>
                        </div>

                        <div class="from-group row mt-5 justify-content-center">
                            
                            <button type="submit" class="btn btn-register">
                            <a href="{{ route('register') }}">
                                {{ __('message.create_new_account') }}
                            </a>
                            </button>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
