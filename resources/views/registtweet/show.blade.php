@extends('layouts.app')

@section('content')
<section class="c-site-width">
    <h1 class="c-h1">ツイートのデータを登録 <i class="fas fa-upload"></i></h1>
    <section class="c-section">
        <div class="p-registtweet__steps-wrapper">
            <img src="{{ asset('/images/steps.png') }}" alt="a" class="p-registtweet__steps">
        </div>

        <div class="p-registtweet__steps--link-wrapper">
            <a href="" target="_blank" class="p-registtweet__steps--link">詳しい手順を確認する &gt;&gt;</a>
            <a href="https://analytics.twitter.com/" target="_blank"
                class="p-registtweet__steps--link">Twitterアナリティクスを開く &gt;&gt;</a>
        </div>
    </section>
    <section class="c-section">
        <file-uploader></file-uploader>       
    </section>
</section>
@endsection