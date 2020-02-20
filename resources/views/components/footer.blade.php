<footer id="footer">
    <div class="c-site-width">
        <div class="p-footer__links">
            <a class="p-footer__link" href="{{route('inquiry.show')}}">お問い合わせ</a>
            <a class="p-footer__link" href="{{route('rule.show')}}">利用規約</a>
            <a class="p-footer__link" href="{{route('privacy.show')}}">プライバシーポリシー</a>
            <a class="p-footer__link" href="{{route('tokusho.show')}}">特定商取引法に基づく表記</a>
        </div>
        <div class="c-copy">
            Copyright © {{ config('app.name', 'つぶやきプランナー') }} All Rights Reserved.
        </div>
    </div>
</footer>