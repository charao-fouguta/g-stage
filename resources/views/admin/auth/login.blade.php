<!-- Custom styles for this template-->
<link href="{{ mix('css/admin/app.css') }}" rel="stylesheet">

<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-8 text-center mb-3">
           <img src="{{ asset('images/logo-black.png?20210330') }}" style="height: 110px;">
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-center" style="background-color: #0a0837; height: 60px;">
                    <img src="{{ asset('images/G-STAGE-rogo.png') }}" style="height: 40px;">
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.login') }}">
                        @csrf

                        <div class="form-group row mt-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('メールアドレス') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mt-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('パスワード') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('ログイン状態を保持する') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 mt-3">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn" style="background-color: #0a0837;">
                                    <span style="color: white;">{{ __('ログイン') }}</span>
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

