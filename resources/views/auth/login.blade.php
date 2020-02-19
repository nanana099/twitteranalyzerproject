@extends('layouts.app')

@section('content')
<section class="c-site-width">
    <h1 class="c-page-title">ログイン</i></h1>
    <section class="c-section">

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="p-login-panel">
                <div class="p-login-panel__no-account">
                    <p class="p-login-p">アカウントをお持ちでない方はこちら</p>
                    <a href="{{ route('register') }}" class="c-btn c-btn--square">新規会員登録</a>
                </div>
                <div class="p-login-panel__account">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <input type="email" placeholder="メールアドレス" name="email" value="{{ old('email') }}" required
                        class="c-input--text p-login__input">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <input type="password" placeholder="パスワード" name="password" required
                        class="c-input--text p-login__input">


                    <div class="c-input--checkbox-wrapper p-login__input">
                        <input type="checkbox" class="" name="remember" id="remember"
                            {{ old('remember') ? 'checked' : '' }}>
                        <label for="remember" class="">
                            ログイン状態を保持する
                        </label>
                    </div>
                    <button class="c-btn c-btn--primary p-login__login-btn p-login__input">ログイン</button>
                    <a href="" class="p-login__input">パスワードをお忘れの方</a>
                </div>
            </div>
        </form>
    </section>

</section>
@endsection