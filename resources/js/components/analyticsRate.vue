<template>
  <div>
    <section class="c-section">
      <div class="p-analytics-tab__header">
        <div class="p-analytics-tab__header__summary">
          <span class="p-analytics-tab__header__summary-item">平均値：3.1</span>
          <span class="p-analytics-tab__header__summary-item">最頻値：2.1</span>
        </div>
        <div class="c-select-wrap p-tweetlist__inputs-item">
          <i class="fas fa-angle-down c-select-arrow"></i>
          <select name id class="c-select" v-model="selectedIndex">
            <option value="1">インプレッション数</option>
            <option value="2">エンゲージ率</option>
            <option value="3">エンゲージ数</option>
            <option value="4">いいね率</option>
            <option value="5">いいね数</option>
          </select>
        </div>
      </div>
    </section>
    <analytics-rate-graph :height="200"></analytics-rate-graph>
  </div>
</template>

<script>
import AnalyticsRateGraph from "./analyticsRateGraph.vue";

export default {
  components: {
    "analytics-rate-graph": AnalyticsRateGraph
  },
  data: function() {
    return {
      selectedIndex: 1
    };
  }
};
</script> 