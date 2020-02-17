@extends('layouts.app')

@section('content')
<section class="c-site-width">
    <h1 class="c-page-title">ツイートのデータを登録 <i class="fas fa-upload"></i></h1>
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
        <form action="">
            <div class="p-registtweet__upload-file-area">
                <p>
                    ドラッグ＆ドロップ
                    <br>
                    またはクリックしてアップロード
                </p>
                <input type="file" name="" class="p-registtweet__upload-file-input" id="">
            </div>
            <div class="p-registtweet__uploaded-file-area">
                {{-- ファイルが選択されていません --}}

                <div class="p-registtweet__uploaded-file-item">
                    <span class="">tweet_activity_metrics_Arknanana_20200107_20200204_ja.csv</span>
                    <span class="p-registtweet__uploaded-file-item-delete-button">
                        <div class="c-btn--batu"><span></span></div>
                    </span>
                </div>

                <div class="p-registtweet__uploaded-file-item">
                    <span class="">tweet_activity_metrics_Arknanana_20200107_20200204_ja.csv</span>
                    <span class="p-registtweet__uploaded-file-item-delete-button">
                        <div class="c-btn--batu"><span></span></div>
                    </span>
                </div>

                <div class="p-registtweet__uploaded-file-item">
                    <span class="">tweet_activity_metrics_Arknanana_20200107_20200204_ja.csv</span>
                    <span class="p-registtweet__uploaded-file-item-delete-button">
                        <div class="c-btn--batu"><span></span></div>
                    </span>
                </div>
            </div>
            <button class="c-btn c-btn--primary p-registtweet__upload-btn">登録する &gt;</button>
        </form>
    </section>
</section>
@endsection