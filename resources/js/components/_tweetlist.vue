<template>
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
      <tbody class="c-tweet-table__body" v-for="n of num" :key="n">
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
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      num: 10
    };
  },

  created: function() {
    console.log("piyo");
  }
};
</script>