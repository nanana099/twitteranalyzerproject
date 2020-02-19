<template>
  <div id="tabBox">
    <div id="tabs">
      <input type="radio" value="1" id="tab1" v-model="isActive" />
      <label for="tab1">ツイート</label>
      <input type="radio" value="2" id="tab2" v-model="isActive" />
      <label for="tab2">単語</label>
      <input type="radio" value="3" id="tab3" v-model="isActive" />
      <label for="tab3">文字数</label>
      <input type="radio" value="4" id="tab4" v-model="isActive" />
      <label for="tab4">投稿時間</label>
      <input type="radio" value="5" id="tab5" v-model="isActive" />
      <label for="tab5">メディア</label>
      <input type="radio" value="6" id="tab6" v-model="isActive" />
      <label for="tab6">リプライ</label>
      <input type="radio" value="7" id="tab7" v-model="isActive" />
      <label for="tab7">ハッシュタグ</label>
      <input type="radio" value="8" id="tab8" v-model="isActive" />
      <label for="tab8">分布</label>
    </div>
    <ul id="contents">
      <li v-if="isActive == '1'">
        <tweet-list></tweet-list>
      </li>
      <li v-else-if="isActive == '2'">
        <analytics-word v-bind:colName1="'名詞'" :colName2="'使用回数'"></analytics-word>
        <analytics-word v-bind:colName1="'名詞'" :colName2="'使用回数'"></analytics-word>
        <analytics-word v-bind:colName1="'名詞'" :colName2="'使用回数'"></analytics-word>
      </li>
      <li v-else-if="isActive == '3'">
        <h1>テスト3</h1>
        <p>
          テスト本文3テスト本文3テスト本文3テスト本文3テスト本文3
          <br />テスト本文3テスト本文3テスト本文3テスト本文3テスト本文3テスト本文3
        </p>
      </li>

      <li v-else-if="isActive == '4'">
        <analytics-post-time></analytics-post-time>
      </li>
 
      <li v-else-if="isActive == '5'">
        <analytics-media></analytics-media>
      </li>

      <li v-else-if="isActive == '6'">
        <analytics-reply v-bind:colName1="'リプライ先'" :colName2="'回数'"></analytics-reply>
        <analytics-reply v-bind:colName1="'リプライ先'" :colName2="'回数'"></analytics-reply>
      </li>
      <li v-else-if="isActive == '7'">
        
        <analytics-hash-tag v-bind:colName1="'ハッシュタグ'" :colName2="'回数'"></analytics-hash-tag>
        <analytics-hash-tag v-bind:colName1="'ハッシュタグ'" :colName2="'回数'"></analytics-hash-tag>
      </li>

      <li v-else-if="isActive == '8'">
        <h1>テスト8</h1>
        <p>
          テスト本文3テスト本文3テスト本文3テスト本文3テスト本文3
          <br />テスト本文3テスト本文3テスト本文3テスト本文3テスト本文3テスト本文3
        </p>
      </li>
    </ul>
  </div>
  <!--tabBox-->
</template>

<script>
import TweetList from "./tweetlist.vue";
import AnalyticsPostTime from "./analyticsPostTime.vue";
import AnalyticsMedia from "./analyticsMedia.vue";
import AnalyticsWord from "./analyticsWord.vue";
import AnalyticsReply from "./analyticsReply.vue";
import AnalyticsHashTag from "./analyticsHashTag.vue";

export default {
  components: {
    "tweet-list": TweetList,
    "analytics-post-time": AnalyticsPostTime,
    "analytics-media": AnalyticsMedia,
    "analytics-word": AnalyticsWord,
    "analytics-hash-tag": AnalyticsHashTag,
    "analytics-reply": AnalyticsReply
  },
  data: function() {
    return {
      isActive: 1
    };
  }
};
</script> 

<style scoped>
body {
  font-size: 16px;
}

ul {
  padding: 0;
  margin: 0;
}

li {
  list-style: none;
}

h1 {
  font-size: 16px;
  margin: 0;
}

p {
  margin: 0;
  font-size: 15px;
}

#tabs {
  overflow: hidden;
}

#tabs input {
  display: none;
}

#tabs label {
  display: inline-block;
  text-align: center;
  padding: 10px 10px;
  cursor: pointer;
  background: #ffffff;
  border: 2px solid #2c4bff;
  border-bottom: none;
  transition: 0.1s;
  border-radius: 10px 10px 0 0;
}

#tabs input:checked + label,
#tabs label:hover {
  background: #2c4bff;
  color: #fff;
  transition: 0.1s;
}

#contents {
  width: 100%;
  padding-top: 50px;
  border-top: 2px solid #2c4bff;
}
</style>
