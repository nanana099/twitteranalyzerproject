<header id="header">
    <div class="c-site-width p-header__wrapper">
        <div class="c-logo">
            <a href="">
                <img src="{{ asset('/images/logo.png') }}" alt="つぶやきプランナー" class="">
            </a>
        </div>
        <nav class="">
            <ul class="c-gnav__list">
                @if(Auth::check())
                <li class="c-gnav__item"><a href="{{route('tweetlist.show')}}" class="c-gnav__link">ツイート <i
                            class="fas fa-list-ul"></i></a></li>
                <li class="c-gnav__item"><a href="{{route('analytics.show')}}" class="c-gnav__link">分析 <i
                            class="fas fa-chart-bar"></i></a></li>
                <li class="c-gnav__item"><a href="{{route('registtweet.show')}}" class="c-gnav__link">データ登録 <i
                            class="fas fa-upload"></i></a></li>

                <li class="c-gnav__item">
                    {{-- アカウント --}}
                    @if(true)
                    <a href="/twitteraccount/add" class="c-gnav__link">
                        <div class="p-header__twiicon">Click!
                            <div class="c-fukidasi c-fukidasi--anime">アカウントを追加してください
                            </div>
                        </div>
                    </a>
                    @else
                    <div class="p-switchbox">
                        <label class="p-switchbox__label" for="label1">
                            <div class="p-header__twiicon">アカ
                            </div>
                        </label>
                        <input type="checkbox" id="label1" class="p-switchbox__checkbox" />
                        <div class="p_switchbox__content">
                            <ul class="c-float-menu">
                                <li class="c-float-menu__list c-float-menu__list--border"> <a href="" class="c-float-menu__item">user0000001</a></li>
                                <li class="c-float-menu__list c-float-menu__list--border"> <a href="" class="c-float-menu__item">user0000002</a></li>
                                <li class="c-float-menu__list c-float-menu__list--border"> <a href="" class="c-float-menu__item">user0000003</a></li>
                            </ul>
                        </div>
                    </div>
                    @endif
                </li>
                <li class="c-gnav__item">
                    {{-- 設定 --}}
                    <div class="p-switchbox">
                        <label class="p-switchbox__label" for="label2"><i
                                class="fas fa-cog p-header__setting-icon"></i></label>
                        <input type="checkbox" id="label2" class="p-switchbox__checkbox" />
                        <div class="p_switchbox__content">
                            <ul class="c-float-menu">
                                <li class="c-float-menu__list c-float-menu__list--border">
                                    <a href="" class="c-float-menu__item">アカウント設定</a>
                                </li>
                                <li class="c-float-menu__list">
                                    <a href="" class="c-float-menu__item">ヘルプ</a>
                                </li>
                                <li class="c-float-menu__list">
                                    <a class="c-float-menu__item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        ログアウト
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                @else
                <li class="c-gnav__item"><a href="{{ route('register') }}"
                        class="c-btn c-btn--primary c-btn--square">無料で使ってみる</a>
                </li>
                <li class="c-gnav__item"><a href="{{ route('login') }}" class="c-btn c-btn--square">ログイン</a></li>
                @endif
            </ul>
        </nav>
    </div>
</header>