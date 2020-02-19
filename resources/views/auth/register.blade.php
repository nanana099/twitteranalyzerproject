@extends('layouts.app')

@section('content')
<section class="c-site-width">
    <h1 class="c-page-title">新規会員登録</i></h1>
    <section class="c-section">

        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="p-login-panel">
                <div class="p-login-panel__no-account">
                    <p class="p-login-p">アカウントをお持ちの方はこちら</p>
                    <a href="{{ route('login') }}" class="c-btn c-btn--square">ログイン画面へ</a>
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


                    <input type="password" placeholder="パスワード（再入力）" name="password_confirmation" required
                        class="c-input--text p-login__input">
                        
                    <button class="c-btn c-btn--primary p-login__login-btn p-login__input">登録する</button>
                </div>
            </div>
        </form>
    </section>

</section>
@endsection