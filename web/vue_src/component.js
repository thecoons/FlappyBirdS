Vue.component('chart-item',{
  template: '<canvas ref="canvas" style="width: 200px; height: 100px"></canvas>',
  data: function(){
      return {
        chart: {},
        game: game,
        logs: logs,

      }
    },
  computed: {
    birdAlive: function(){
        return this.game.birds.length;
      },
  },
  watch: {
      logs: function(newlogs){
        this.increment()
      }
    },
  methods:{
    increment: function(){
      this.chart.data.datasets[0].data = this.logs
      this.chart.update()
    }
  },
  mounted: function(){
    // fetch canvas DOM element
    window.flappy = this
    var canvas = this.$refs.canvas
    // init chart.js
    this.chart = new Chart(canvas, {
      type: 'line',
      data: {
        datasets: [{
          label: 'Avg fiteness',
          borderColor: '#42f4eb',
          backgroundColor: '#1734c4',
          data: []
          ,
        }]
      },
      options: {
        scales: {
          xAxes: [{
                type: 'linear',
                position: 'bottom',
                beginAtZero: true
            }],
          yAxes: [{
            ticks: {
              beginAtZero: true
            }
          }]
        }
      }
    })
    console.log(this.chart)
  }
})
