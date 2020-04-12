<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>总体情况</title>
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/overall.css">
  <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0,user-scalable=no">
  <script src="js/echarts.min.js"></script>
</head>
<body>
  <div class="container" ref="qudao">
    <div id="text">
        <h1>{{testText}}</h1>
    </div>
    <div v-show="chartShow" ref="earth" class="earth animated bounceInDown delay-2"></div>
    <div v-show="chartShow" class="left_box animated fadeInLeft delay-2">
        <section class="chart-container">
          <el-row>                     
              <el-col :span="12">
                  <div id="chartPie" style="width:100%; height:400px;"></div>
              </el-col>          
          </el-row>
        </section>
    </div>
    <div v-show="chartShow" class="right_box animated fadeInRight delay-2">
      <div id="main" style="width:100%;height: 400px;"></div>
    </div>
    <p>
      <a href="index.php" id="back">返回</a>
    </p>
  </div>
</body>
<script src="js/vue.min.js"></script>
<script type="text/javascript">
  new Vue({
        el:'#text',
        data:{
            nowIndex:0,
            testText:'蔬菜品质'
        },
        mounted(){
            let _this=this;
            let timer = setInterval(function(){
                _this.nowIndex++;
                switch (_this.nowIndex) {
                    case 1:
                        _this.testText = '蔬菜品质';
                        break;
                    case 2:
                        _this.testText = '健康环保';
                        break;
                    case 3:
                        _this.testText = '总体情况';
                        break;
                }
                if (_this.nowIndex > 3) {
                    setTimeout(() => {
                        clearInterval(timer);
                    }, 2000)
                }
            }, 2000)
        }
    });

  new Vue({
    name:'overall',
    data:{
      close:true,
      chartShow:false,
      loading:false
    },
    mounted () {
      window.addEventListener('scroll', this.handleScroll)
    },
    methods: {
      handleScroll () { // 实现当滚动到指定位置，触发动画
        let _this = this
        let refArray = [
          {ref: 'qudao', show: 'chartShow'}
        ]
        refArray.forEach((r,i) => {
          _this.gdjz(r.ref, 20, () => {
            _this[r.show] = true
          })
        })
      },
      gdjz (div, offset, callback) {
        let dom = this.$refs[div] // 等同于document.querySelector('.earth') true
        if(dom){
          var a,b,c,d;
          d = dom.offsetTop // 元素距离相对父级的高度，这里父级指的是body
          a = eval(d + offset)
          b = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop //  获取窗口滚动条高度
          c = document.documentElement.clientHeight || document.body.clientHeight // 获取浏览器可视区的高度
          if( b + c > a ) {
            callback && callback()
          }
        }
      }
    }
  });

  new Vue({
    el:'.chart-container',
    data:{
      chartPie: null
    },
    methods: {                               
        drawPieChart() {
            this.chartPie = echarts.init(document.getElementById('chartPie'));
            this.chartPie.setOption({
                title: {
                    text: '广东省蔬菜产值情况',
                    subtext: '(仅供参考)',
                    x: 'center'
                },
                tooltip: {
                    trigger: 'item',
                    formatter: "{a} <br/>{b} : {c} ({d}%)"
                },
                legend: {
                    orient: 'vertical',
                    left: 'left',
                    data: ['叶菜类', '豆类', '根茎类', '瓜菜类', '葱蒜类']
                },
                series: [
                    {
                        name: '产量(万公顷)、比例',
                        type: 'pie',
                        radius: '55%',
                        center: ['50%', '60%'],
                        data: [
                            { value: 1340, name: '叶菜类' },
                            { value: 355, name: '豆类' },
                            { value: 414, name: '根茎类' },
                            { value: 305, name: '瓜菜类' },
                            { value: 110, name: '葱蒜类' }
                        ],
                        itemStyle: {
                            emphasis: {
                                shadowBlur: 10,
                                shadowOffsetX: 0,
                                shadowColor: 'rgba(0, 0, 0, 0.9)'
                            }
                        }
                    }
                ]
            });
        },
        drawCharts() {
            this.drawPieChart()
        },
    },

    mounted: function () {
        this.drawCharts()
    }
  });

  new Vue({
    el:'#main',
    data:{
      charts: '',
      opinionData: ["1360", "1590", "1886", "2100", "2315"]
    },
    methods: {
        drawLine(id) {
            this.charts = echarts.init(document.getElementById('main'));
            this.charts.setOption({
                tooltip: {
                    trigger: 'axis'
                },
                legend: {
                    data: ['近几年蔬菜市场需求(单位:万公顷)']
                },
                grid: {
                    left: '2%',
                    right: '7%',
                    bottom: '4%',
                    containLabel: true
                },

                toolbox: {
                    feature: {
                        saveAsImage: {}
                    }
                },
                xAxis: {
                    type: 'category',
                    boundaryGap: false,
                data: ["2015年","2016年","2017年","2018年","2019年"]
                
                },
                yAxis: {
                    type: 'value'
                },

                series: [{
                    name: '近几年蔬菜市场需求(单位:万公顷)',
                    type: 'line',
                    stack: '总量',
                    data: this.opinionData
                }]
            })
        }
    },
    //调用
    mounted() {
        this.$nextTick(function() {
            this.drawLine('main')
        })
    }
  });
</script>
</html>