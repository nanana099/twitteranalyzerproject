@extends('layouts.app')

@section('content')
<section class="c-site-width">
    <h1 class="c-h1">本登録</h1>
    <section class="c-section">
        <div class="p-login-panel">
            <p class="p-login-p">ご登録されたメールアドレスへ<br>本登録用のURLを送信しております。<br><br>URLをクリックし、本登録を完了させてください。</p>
            <br>
            <a href="https://mail.google.com/mail/u/0/#inbox">Gmail</a>
            <br>
            <br>
            <a href="https://jp.mg5.mail.yahoo.co.jp/neo/launch">Yahooメール</a>
            <br>
            <br>
            <br>
            <p class="p-login-p">
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    なおメールが届いていない場合は<br>以下のボタンより、メールを再送信できます。<br><br>
                    <button type="submit" class="c-btn c-btn--square">メール再送信</button>
                </form>
            </p>
            @if (session('resent'))
            <br>
            <br>
            <div class="alert alert-success" role="alert">
                再送信されました。<br>メールボックスをご確認ください。
            </div>
            @endif
        </div>
    </section>
</section>
@endsection