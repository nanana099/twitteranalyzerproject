@extends('layouts.app')

@section('content')
<section class="c-site-width">
    <h1 class="c-page-title">ツイートを分析する <i class="fas fa-chart-bar"></i></h1>
    <section class="c-section">
        <div class="p-tweetanal__howtolink-wrapper">
            <a href="" target="_blank" class="p-tweetanal__howtolink">分析方法の一例を見てみる &gt;&gt;</a>
        </div>
        <div class="c-fieldset p-tweetanal__search-box">
            <span class="c-fieldset-title">
                絞り込み
            </span>
            <div class="p-tweetanal__search-box__group">
                <button class="c-btn c-btn--circle p-tweetanal__search-box__item">条件を追加する <i
                        class="fas fa-plus-circle"></i></button>
                <button class="c-btn c-btn--circle p-tweetanal__search-box__item">条件を読み込む <i
                        class="fas fa-file-download"></i></button>
                <button class="c-btn c-btn--circle p-tweetanal__search-box__item">設定中の条件をクリア <i
                        class="fas fa-trash-alt"></i></button>
            </div>


            <div class="p-tweetanal__search-box__group">
                <div class="p-tweetanal__search-box__item p-tweetanal__search-box__item--condition">
                    <div class="p-tweetanal__search-box__item--condition-wrapper">
                        <span class="p-tweetanal__search-box__item--condition-name">本日から２８日以内</span>
                        <span class="p-registtweet__uploaded-file-item-delete-button">
                            <div class="c-btn--batu"><span></span></div>
                        </span>
                    </div>
                </div>
                <div class="p-tweetanal__search-box__item p-tweetanal__search-box__item--condition">
                    <div class="p-tweetanal__search-box__item--condition-wrapper">
                        <span class="p-tweetanal__search-box__item--condition-name">いいね率が３％以上</span>
                        <span class="p-registtweet__uploaded-file-item-delete-button">
                            <div class="c-btn--batu"><span></span></div>
                        </span>
                    </div>
                </div>


                <div class="p-tweetanal__search-box__group p-tweetanal__search-box__group--right">
                    <button class="c-btn c-btn--circle p-tweetanal__search-box__item">設定中の条件を保存する <i
                            class="fas fa-save"></i></button>
                    <button class="c-btn c-btn--primary c-btn--circle p-tweetanal__search-box__item">絞り込んで検索する <i
                            class="fas fa-search"></i></button>
                </div>
            </div>
    </section>
    <section class="c-section">
        たぶ
    </section>
</section>
@endsection