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
    window.learn_chart = this
    var canvas = this.$refs.canvas
    // init chart.js
    this.chart = new Chart(canvas, {
      type: 'line',
      data: {
        datasets: [{
          label: 'Avg fitness',
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


Vue.component('chart-param',{
  template: '<canvas ref="canvas_param" style="width: 200px; height: 100px"></canvas>',
  data: function(){
      return {
        chart: {},
        game: game,
        logs: logs,
        // freq: game_param.freq

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
      this.chart.data.datasets[0].data.push({x:this.game.generation,y:(game_param.freq/30)*100})
      this.chart.data.datasets[1].data.push({x:this.game.generation,y:(game_param.pipeHoll-100)})
      this.chart.data.datasets[2].data.push({x:this.game.generation,y:(game_param.pipeSpeed/6)*100})
      // this.chart.data.datasets[1].data = this.logs.pipeSpeed
      this.chart.update()
    }
  },
  mounted: function(){
    // fetch canvas DOM element
    window.param_chart = this
    var canvas = this.$refs.canvas_param
    // init chart.js
    this.chart = new Chart(canvas, {
      type: 'line',
      data: {
        datasets: [{
          label: 'Avg frequence',
          borderColor: '#0033cc',
          // backgroundColor: '#1734c4',
          data: []
          ,
        },{
          label: 'Avg pipe height',
          borderColor: '#cc33ff',
          // backgroundColor: '#1734c4',
          data: []
          ,
        },{
          label: 'Avg pipe speed',
          borderColor: '#ff9933',
          // backgroundColor: '#1734c4',
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
