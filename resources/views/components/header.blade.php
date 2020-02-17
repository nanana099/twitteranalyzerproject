@php
$login = 1;
@endphp
<header id="header">
    <div class="c-site-width p-header__wrapper">
        <div class="c-logo">
            <a href="">
                <img src="{{ asset('/images/logo.png') }}" alt="つぶやきプランナー" class="">
            </a>
        </div>
        <nav class="">
            <ul class="c-gnav__list">
                @if($login)
                <li class="c-gnav__item"><a href="{{route('tweetlist.show')}}" class="c-gnav__link">ツイート <i
                            class="fas fa-list-ul"></i></a></li>
                <li class="c-gnav__item"><a href="{{route('analytics.show')}}" class="c-gnav__link">分析 <i class="fas fa-chart-bar"></i></a></li>
                <li class="c-gnav__item"><a href="{{route('registtweet.show')}}" class="c-gnav__link">データ登録 <i
                            class="fas fa-upload"></i></a></li>
                <li class="c-gnav__item"><a href="" class="c-gnav__link">
                        <div class="p-header__twiicon">Click! 
                            {{-- <div class="c-fukidasi c-fukidasi--anime">アカウントを追加してください
                            </div> --}}
                        </div>
                    </a></li>
                <li class="c-gnav__item"><a href="" class=""><i class="fas fa-cog p-header__setting-icon"></i></a></li>
                @else
                <li class="c-gnav__item"><a href="" class="c-btn c-btn--primary c-btn--square">無料で使ってみる</a></li>
                <li class="c-gnav__item"><a href="" class="c-btn c-btn--square">ログイン</a></li>
                @endif
            </ul>
        </nav>
    </div>
</header>