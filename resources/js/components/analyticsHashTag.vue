<template>
  <div class="c-half-table-wrapper">
    <table class="c-half-table">
      <thead class="c-half-table__header">
        <tr>
          <th
            class="c-half-table__cell c-half-table__cell--header c-half-table__col-1"
          >{{ colName1 }}</th>
          <th
            class="c-half-table__cell c-half-table__cell--header c-half-table__col-2"
          >{{ colName2 }}</th>
        </tr>
      </thead>
      <tbody class="c-half-table__body">
        <tr class="c-half-table__row" v-for="n of num" :key="n">
          <td class="c-half-table__cell c-half-table__cell--between">
            <div>#ハッシュタグです</div>
            <div>
              <a href class="piyo">
                <i class="fas fa-list-ul"></i>
              </a>
              <a href class="piyo piyo--disabled">
                <i class="fas fa-search piyo"></i>
              </a>
              <a href class="piyo">
                <i class="fas fa-copy"></i>
              </a>
            </div>
          </td>
          <td class="c-half-table__cell">40回</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  props: ["colName1", "colName2"],
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