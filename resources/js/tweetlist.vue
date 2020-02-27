<template>
  <div>
    <section class="c-section">
      <div class="p-tweetlist__inputs">
        <div>
          <!-- <div class="c-select-wrap p-tweetlist__inputs-item">
            <i class="fas fa-angle-down c-select-arrow"></i>
            <select name="period" id class="c-select">
              <option value>過去７日間</option>
              <option value selected>過去２８日間</option>
              <option value>2020/02</option>
              <option value>2020/01</option>
              <option value>2019/12</option>
              <option value>2019/11</option>
            </select>
          </div> -->
          <div class="c-select-wrap p-tweetlist__inputs-item">
            <i class="fas fa-angle-down c-select-arrow"></i>
            <select name="sort" id class="c-select" v-model="selectedSortOption">
              <option
                v-for="sortOption in sortOptions"
                :value="sortOption.id"
                :key="sortOption.id"
              >{{ sortOption.name }}</option>
            </select>
          </div>
          <button
            class="c-btn c-btn--circle c-btn--primary p-tweetlist__inputs-item"
            @click="refresh"
          >再表示</button>
        </div>
        <button class="c-btn c-btn--circle p-tweetlist__inputs-item">列の設定</button>
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
              >リツイート数</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3"
              >リツイート率</th>
              <th class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2">リプライ数</th>
              <th class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3">リプライ率</th>
              <th class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2">いいね数</th>
              <th class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3">いいね率</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2"
              >プロフクリック数</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3"
              >プロフクリック率</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2"
              >固定リンクのクリック数</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3"
              >固定リンクのクリック率</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2"
              >ハッシュタグクリック数</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3"
              >ハッシュタグクリック率</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2"
              >ツイートの詳細クリック数</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3"
              >ツイートの詳細クリック率</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2"
              >固定リンクのクリック数</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3"
              >固定リンクのクリック率</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2"
              >アプリ表示数</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3"
              >アプリ表示率</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2"
              >アプリインストール数</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3"
              >アプリインストール率</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2"
              >フォローしている数</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3"
              >フォローしている率</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2"
              >ツイートをメール送信数</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3"
              >ツイートをメール送信率</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2"
              >ダイアル式電話数</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3"
              >ダイアル式電話率</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2"
              >メディア再生数</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3"
              >メディア再生率</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-2"
              >メディアのエンゲージエンゲージ数</th>
              <th
                class="c-tweet-table__cell c-tweet-table__cell--header c-tweet-table__col-3"
              >メディアのエンゲージエンゲージ率</th>
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
              <td class="c-tweet-table__cell">{{tweet.retweet_num}}</td>
              <td class="c-tweet-table__cell">{{tweet.retweet_rate}}</td>
              <td class="c-tweet-table__cell">{{tweet.reply_num}}</td>
              <td class="c-tweet-table__cell">{{tweet.reply_rate}}</td>
              <td class="c-tweet-table__cell">{{tweet.like_num}}</td>
              <td class="c-tweet-table__cell">{{tweet.like_rate}}</td>
              <td class="c-tweet-table__cell">{{tweet.prof_click_num}}</td>
              <td class="c-tweet-table__cell">{{tweet.prof_click_rate}}</td>
              <td class="c-tweet-table__cell">{{tweet.url_click_num}}</td>
              <td class="c-tweet-table__cell">{{tweet.url_click_rate}}</td>
              <td class="c-tweet-table__cell">{{tweet.hash_click_num}}</td>
              <td class="c-tweet-table__cell">{{tweet.hash_click_rate}}</td>
              <td class="c-tweet-table__cell">{{tweet.detail_click_num}}</td>
              <td class="c-tweet-table__cell">{{tweet.detail_click_rate}}</td>
              <td class="c-tweet-table__cell">{{tweet.fixed_link_click_num}}</td>
              <td class="c-tweet-table__cell">{{tweet.fixed_link_click_rate}}</td>
              <td class="c-tweet-table__cell">{{tweet.app_show_num}}</td>
              <td class="c-tweet-table__cell">{{tweet.app_show_rate}}</td>
              <td class="c-tweet-table__cell">{{tweet.app_inst_num}}</td>
              <td class="c-tweet-table__cell">{{tweet.app_inst_rate}}</td>
              <td class="c-tweet-table__cell">{{tweet.following_num}}</td>
              <td class="c-tweet-table__cell">{{tweet.following_rate}}</td>
              <td class="c-tweet-table__cell">{{tweet.tweet_mail_num}}</td>
              <td class="c-tweet-table__cell">{{tweet.tweet_mail_rate}}</td>
              <td class="c-tweet-table__cell">{{tweet.dial_tel_num}}</td>
              <td class="c-tweet-table__cell">{{tweet.dial_tel_rate}}</td>
              <td class="c-tweet-table__cell">{{tweet.media_play_num}}</td>
              <td class="c-tweet-table__cell">{{tweet.media_play_rate}}</td>
              <td class="c-tweet-table__cell">{{tweet.medhi_engage_num}}</td>
              <td class="c-tweet-table__cell">{{tweet.medhi_engage_rate}}</td>
            </tr>
          </tbody>
        </table>
      </div>
      <infinite-loading @infinite="infiniteHandler" spinner="spiral" ref="infiniteLoading">
        <!-- // ステータスがcompleteに更新されると下記が表示される -->
        <span slot="no-more">-----以上-----</span>
        <!-- // 結果が存在しない場合下記が表示される -->
        <span slot="no-results">-----No result-----</span>
      </infinite-loading>
    </section>
  </div>
</template>

<script>
import InfiniteLoading from "vue-infinite-loading";
export default {
  components: {
    "infinite-loading": InfiniteLoading
  },
  data: function() {
    return {
      page: 0,
      selectedSortOption: 0,
      sortOptions: [
        { id: 0, name: "投稿日時" },
        { id: 1, name: "インプレッション" },
        { id: 2, name: "エンゲージメント" },
        { id: 3, name: "エンゲージメント率" },
        { id: 4, name: "リツイート" },
        { id: 5, name: "返信" },
        { id: 6, name: "いいね" },
        { id: 7, name: "ユーザープロフィールクリック" },
        { id: 8, name: "詳細クリック" },
        { id: 9, name: "固定リンクのクリック数" },
        { id: 10, name: "アプリ表示" },
        { id: 11, name: "アプリインストール" },
        { id: 12, name: "フォローしている" },
        { id: 13, name: "ツイートをメール送信" },
        { id: 14, name: "ダイアル式電話" },
        { id: 15, name: "メディアの再生数" },
        { id: 16, name: "メディアのエンゲージメント" }
      ],
      tweets: []
    };
  },
  methods: {
    refresh: function() {
      this.tweets = [];
      this.page = 0;
      this.$refs.infiniteLoading.stateChanger.reset(); // infiniteLoadingのプロパティを参照、reset()でcomplate()やloaded()をリセットする
    },
    infiniteHandler: function($state) {
      let that = this;
      axios
        .get("/tweet/get", {
          params: {
            page: that.page + 1,
            sort: that.selectedSortOption
          }
        })
        .then(function(response) {
          that.page = response.data.current_page;
          that.tweets.push(...response.data.data);
          if (response.data.last_page !== response.data.current_page) {
            $state.loaded();
          } else {
            $state.complete();
          }
        })
        .catch(err => {
          $state.complete();
        });
    }
  }
};
</script>