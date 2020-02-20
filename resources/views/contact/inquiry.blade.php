@extends('layouts.app')

@section('content')
<section class="c-site-width">
    <h1 class="c-h1">お問い合わせ</h1>
    <section class="c-section">

        <form method="POST" action="{{ route('inquiry.post') }}">
            @csrf
            <div class="p-login-panel">
                <div class="p-login-panel__no-account">
                    <p class="p-login-p">メールアドレス、件名、お問い合わせ内容を<br>ご入力ください。</p>
                </div>
                <div class="p-login-panel__account">
                    {{-- email --}}
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <input type="email" placeholder="メールアドレス" name="email" value="{{ old('email') }}" required
                        class="c-input--text p-login__input">
                    {{-- 件名 --}}
                    @error('title')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <input type="text" placeholder="件名" name="title" required
                        class="c-input--text p-login__input">
                    {{-- お問い合わせ内容 --}}
                    <textarea name="content" id="" cols="30" rows="10" required class="c-input--textarea p-login__input" placeholder="お問い合わせ内容">{{ old('content') }}</textarea>

                    <button class="c-btn c-btn--primary p-login__login-btn p-login__input">送信する</button>
                </div>
            </div>
        </form>
    </section>

</section>
@endsection