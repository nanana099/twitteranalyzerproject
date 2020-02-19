<template>
  <table class="c-time-table">
    <!-- タイトル-時間 -->
    <tr class="c-time-table__row">
      <td class="c-time-table__cell c-time-table__cell--title"></td>
      <td v-for="n in 24" :key="n" class="c-time-table__cell c-time-table__cell--title">{{n}}</td>
      <td class="c-time-table__cell c-time-table__cell--title">計</td>
    </tr>

    <tr class="c-time-table__row" v-for="week in weeks" :key="week">
      <td class="c-time-table__cell c-time-table__cell--title">
        <!-- タイトル-曜日 -->
        {{week}}
      </td>
      <td class="c-time-table__cell">b</td>
      <td class="c-time-table__cell">c</td>
      <td class="c-time-table__cell">d</td>
      <td class="c-time-table__cell">e</td>
      <td class="c-time-table__cell">f</td>
      <td class="c-time-table__cell">a</td>
      <td class="c-time-table__cell">b</td>
      <td class="c-time-table__cell c-time-table__cell--primary">c</td>
      <td class="c-time-table__cell">d</td>
      <td class="c-time-table__cell">e</td>
      <td class="c-time-table__cell">f</td>
      <td class="c-time-table__cell">a</td>
      <td class="c-time-table__cell">b</td>
      <td class="c-time-table__cell c-time-table__cell--primary">c</td>
      <td class="c-time-table__cell">d</td>
      <td class="c-time-table__cell">e</td>
      <td class="c-time-table__cell">f</td>
      <td class="c-time-table__cell">a</td>
      <td class="c-time-table__cell">b</td>
      <td class="c-time-table__cell c-time-table__cell--primary">c</td>
      <td class="c-time-table__cell">d</td>
      <td class="c-time-table__cell">e</td>
      <td class="c-time-table__cell">f</td>
      <td class="c-time-table__cell">f</td>
      <td class="c-time-table__cell c-time-table__cell--sum-week">.4</td>
    </tr>

    <tr class="c-time-table__row">
      <td class="c-time-table__cell c-time-table__cell--title">計</td>
      <td v-for="n in 24" :key="n" class="c-time-table__cell c-time-table__cell--sum-time">{{n/10}}</td>
      <td class="c-time-table__cell c-time-table__cell--sum-all">1.0</td>
    </tr>
  </table>
</template>

<script>
export default {
  props: ["colName1", "colName2"],
  data: function() {
    return {
      num: 10,
      weeks: ["月", "火", "水", "木", "金", "土", "日"],
      datas: [] // 7 * 24の配列
    };
  },

  created: function() {
    console.log("piyo");
  }
};
</script>