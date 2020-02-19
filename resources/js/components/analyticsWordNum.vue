<script>
import { Bar } from "vue-chartjs";

export default {
  extends: Bar,
  name: "chart",
  data() {
    return {
      data: {
        labels: this.getLabels(),
        datasets: [
          {
            label: "割合",
            data: [
              0.03,
              0.11,
              0.09,
              0.05,
              0.11,
              0.11,
              0.05,
              0.05,
              0.05,
              0.03,
              0.11,
              0.02,
              0.03,
              0.05,
              0.05,
              0.09,
              0.11,
              0.03,
              0.09,
              0.05,
              0.11,
              0.05,
              0.05,
              0.05,
              0.03,
              0.11,
              0.02
            ],
            backgroundColor: "rgba(106, 220, 255, 0.288)",
            borderColor: "rgba(54, 162, 235, 1)",
            borderWidth: 1
          }
        ]
      },
      options: {
        scales: {
          xAxes: [
            {
              scaleLabel: {
                display: true,
                labelString: "文字数"
              }
            }
          ],
          yAxes: [
            {
              ticks: {
                beginAtZero: true,
                stepSize: 10
              }
            }
          ]
        }
      }
    };
  },
  methods: {
    getLabels: function() {
      let ret = [];
      let interval = 5;
      for (var i = 0; i < 135; ) {
        ret.push(i + "-" + (i + 10));
        i += interval;
      }
      return ret;
    }
  },
  mounted() {
    this.renderChart(this.data, this.options);
  }
};
</script>