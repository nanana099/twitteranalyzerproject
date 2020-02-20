@extends('layouts.app')

@section('content')
<section class="c-site-width">
    <h1 class="c-page-title">過去のツイート一覧 <i class="fas fa-list-ul"></i></h1>
    <section class="c-section">
        <div class="p-tweetlist__inputs">
            <div class="c-select-wrap p-tweetlist__inputs-item">
                <i class="fas fa-angle-down c-select-arrow"></i>
                <select name="" id="" class="c-select">
                    <option value="">過去７日間</option>
                    <option value="" selected>過去２８日間</option>
                    <option value="">2020/02</option>
                    <option value="">2020/01</option>
                    <option value="">2019/12</option>
                    <option value="">2019/11</option>
                </select>
            </div>
            <button class="c-btn c-btn--circle">列の設定</button>
        </div>
    </section>
    <section class="c-section">
        <div class="c-tweet-table-wrapper">

            <table class="c-tweet-table">
                <thead class="c-tweet-table__header">
                    <tr>
                        <th class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-1">投稿内容</th>
                        <th class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2">投稿日時</th>
                        <th class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2">インプレッション数</th>
                        <th class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2">エンゲージ数</th>
                        <th class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3">エンゲージ率</th>

                        <th class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2">エンゲージ数</th>
                        <th class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3">エンゲージ率</th>

                        <th class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2">エンゲージ数</th>
                        <th class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3">エンゲージ率</th>


                        <th class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2">エンゲージ数</th>
                        <th class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3">エンゲージ率</th>

                        <th class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2">エンゲージ数</th>
                        <th class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3">エンゲージ率</th>

                        <th class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2">エンゲージ数</th>
                        <th class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3">エンゲージ率</th>

                    </tr>
                </thead>
                <tbody class="c-tweet-table__body">
                    <tr class="c-tweet-table__row">
                        <td class="c-tweet-table__cell c-tweet-table__cell--left">
                            Vue.jsで使えるグラフ描画ライブラリはいくつかありますが、有名なのはどれもChart.jsのラッパーライブラリとなっています。
                            <br />
                            今回はその中でも多機能なvue-chartjsを使ってみることにしました。
                        </td>
                        <td class="c-tweet-table__cell">2019/01/22</td>
                        <td class="c-tweet-table__cell">99989898</td>
                        <td class="c-tweet-table__cell">99</td>

                        <td class="c-tweet-table__cell">0.2</td>
                        <td class="c-tweet-table__cell">0.2</td>

                        <td class="c-tweet-table__cell">1929</td>
                        <td class="c-tweet-table__cell">99</td>

                        <td class="c-tweet-table__cell">1929</td>
                        <td class="c-tweet-table__cell">0.2</td>

                        <td class="c-tweet-table__cell">1929</td>
                        <td class="c-tweet-table__cell">0.2</td>

                        <td class="c-tweet-table__cell">1929</td>
                        <td class="c-tweet-table__cell">0.2</td>

                        <td class="c-tweet-table__cell">1929</td>
                    </tr>

                    <tr class="c-tweet-table__row">
                        <td class="c-tweet-table__cell c-tweet-table__cell--left">
                            Vue.jsで使えるグラフ描画ライブラリはいくつかありますが、有名なのはどれもChart.jsのラッパーライブラリとなっています。
                            <br />
                            今回はその中でも多機能なvue-chartjsを使ってみることにしました。</td>
                        <td class="c-tweet-table__cell">2019/01/22</td>
                        <td class="c-tweet-table__cell">99989898</td>
                        <td class="c-tweet-table__cell">99</td>

                        <td class="c-tweet-table__cell">0.2</td>
                        <td class="c-tweet-table__cell">0.2</td>

                        <td class="c-tweet-table__cell">1929</td>
                        <td class="c-tweet-table__cell">99</td>

                        <td class="c-tweet-table__cell">1929</td>
                        <td class="c-tweet-table__cell">0.2</td>

                        <td class="c-tweet-table__cell">1929</td>
                        <td class="c-tweet-table__cell">0.2</td>

                        <td class="c-tweet-table__cell">1929</td>
                        <td class="c-tweet-table__cell">0.2</td>

                        <td class="c-tweet-table__cell">1929</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
</section>
@endsection