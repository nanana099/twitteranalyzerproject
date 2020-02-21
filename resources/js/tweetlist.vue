<template>
  <div>
    <section class="c-section">
      <div class="p-tweetlist__inputs">
        <div class="c-select-wrap p-tweetlist__inputs-item">
          <i class="fas fa-angle-down c-select-arrow"></i>
          <select name id class="c-select">
            <option value>過去７日間</option>
            <option value selected>過去２８日間</option>
            <option value>2020/02</option>
            <option value>2020/01</option>
            <option value>2019/12</option>
            <option value>2019/11</option>
          </select>
        </div>
        <div class="c-select-wrap p-tweetlist__inputs-item">
          <i class="fas fa-angle-down c-select-arrow"></i>
          <select name id class="c-select">
            <option value>いいね数順</option>
            <option value selected>いいね率順</option>
            <option value>いいね数順</option>
            <option value>いいね数順</option>
            <option value>いいね数順</option>
            <option value>いいね数順</option>
          </select>
        </div>
        <button class="c-btn c-btn--circle c-btn--primary p-tweetlist__inputs-item">再表示</button>
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
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2"
              >インプレッション数</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2"
              >エンゲージ数</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3"
              >エンゲージ率</th>

              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2"
              >エンゲージ数</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3"
              >エンゲージ率</th>

              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2"
              >エンゲージ数</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3"
              >エンゲージ率</th>

              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2"
              >エンゲージ数</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3"
              >エンゲージ率</th>

              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2"
              >エンゲージ数</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3"
              >エンゲージ率</th>

              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2"
              >エンゲージ数</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3"
              >エンゲージ率</th>
            </tr>
          </thead>
          <tbody class="c-tweet-table__body">
            <tr
              class="c-tweet-table__row"
              v-for="(tweet,index) in tweets"
              :key="index"
              style="white-space:pre-wrap; word-wrap:break-word;"
            >
              <td class="c-tweet-table__cell c-tweet-table__cell--left">{{tweet.content}}</td>
              <td class="c-tweet-table__cell">{{tweet.posted_at}}</td>
              <td class="c-tweet-table__cell">{{tweet.impression_num}}</td>
              <td class="c-tweet-table__cell">{{tweet.engage_num}}</td>

              <td class="c-tweet-table__cell">{{tweet.engage_rate}}</td>
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
  </div>
</template>

<script>
export default {
  data: function() {
    return {
      tweets: []
    };
  },
  created: function() {
    let that = this;
    axios.get("/tweet/get").then(function(response) {
      that.tweets = response.data;
      console.log(that.tweets);
    });
  }
};
</script>