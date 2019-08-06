@extends('template.master')

@section('content')
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Echarts <small>Some examples to get you started</small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Bar Graph</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="mainb" style="height:350px;"></div>

                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Mini Pie</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="echart_mini_pie" style="height:350px;"></div>

                  </div>
                </div>
              </div>


              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pie Graph</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="echart_pie" style="height:350px;"></div>

                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pie Area</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="echart_pie2" style="height:350px;"></div>

                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Donut Graph</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="echart_donut" style="height:350px;"></div>

                  </div>
                </div>
              </div>


              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Scatter Graph</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="echart_scatter" style="height:350px;"></div>

                  </div>
                </div>
              </div>

              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Line Graph</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="echart_line" style="height:350px;"></div>

                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Horizontal Bar</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="echart_bar_horizontal" style="height:370px;"></div>

                  </div>
                </div>
              </div>

              <div class="col-md-8 col-sm-8 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>World Map</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="echart_world_map" style="height:370px;"></div>

                  </div>
                </div>
              </div>


              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Pyramid</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="echart_pyramid" style="height:370px;"></div>

                  </div>
                </div>
              </div>

              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Sonar</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <div id="echart_sonar" style="height:370px;"></div>

                  </div>
                </div>
              </div>


              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Guage</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="echart_guage" style="height:370px;"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        @endsection

@section('content_script')

<!-- ECharts -->
<script src="{{ URL::to('shantu/js/echarts.min.js') }}"></script>
<script src="{{ URL::to('shantu/js/world.js') }}"></script>

    <script>
      var theme = {
          color: [
              '#26B99A', '#34495E', '#BDC3C7', '#3498DB',
              '#9B59B6', '#8abb6f', '#759c6a', '#bfd3b7'
          ],

          title: {
              itemGap: 8,
              textStyle: {
                  fontWeight: 'normal',
                  color: '#408829'
              }
          },

          dataRange: {
              color: ['#1f610a', '#97b58d']
          },

          toolbox: {
              color: ['#408829', '#408829', '#408829', '#408829']
          },

          tooltip: {
              backgroundColor: 'rgba(0,0,0,0.5)',
              axisPointer: {
                  type: 'line',
                  lineStyle: {
                      color: '#408829',
                      type: 'dashed'
                  },
                  crossStyle: {
                      color: '#408829'
                  },
                  shadowStyle: {
                      color: 'rgba(200,200,200,0.3)'
                  }
              }
          },

          dataZoom: {
              dataBackgroundColor: '#eee',
              fillerColor: 'rgba(64,136,41,0.2)',
              handleColor: '#408829'
          },
          grid: {
              borderWidth: 0
          },

          categoryAxis: {
              axisLine: {
                  lineStyle: {
                      color: '#408829'
                  }
              },
              splitLine: {
                  lineStyle: {
                      color: ['#eee']
                  }
              }
          },

          valueAxis: {
              axisLine: {
                  lineStyle: {
                      color: '#408829'
                  }
              },
              splitArea: {
                  show: true,
                  areaStyle: {
                      color: ['rgba(250,250,250,0.1)', 'rgba(200,200,200,0.1)']
                  }
              },
              splitLine: {
                  lineStyle: {
                      color: ['#eee']
                  }
              }
          },
          timeline: {
              lineStyle: {
                  color: '#408829'
              },
              controlStyle: {
                  normal: {color: '#408829'},
                  emphasis: {color: '#408829'}
              }
          },

          k: {
              itemStyle: {
                  normal: {
                      color: '#68a54a',
                      color0: '#a9cba2',
                      lineStyle: {
                          width: 1,
                          color: '#408829',
                          color0: '#86b379'
                      }
                  }
              }
          },
          map: {
              itemStyle: {
                  normal: {
                      areaStyle: {
                          color: '#ddd'
                      },
                      label: {
                          textStyle: {
                              color: '#c12e34'
                          }
                      }
                  },
                  emphasis: {
                      areaStyle: {
                          color: '#99d2dd'
                      },
                      label: {
                          textStyle: {
                              color: '#c12e34'
                          }
                      }
                  }
              }
          },
          force: {
              itemStyle: {
                  normal: {
                      linkStyle: {
                          strokeColor: '#408829'
                      }
                  }
              }
          },
          chord: {
              padding: 4,
              itemStyle: {
                  normal: {
                      lineStyle: {
                          width: 1,
                          color: 'rgba(128, 128, 128, 0.5)'
                      },
                      chordStyle: {
                          lineStyle: {
                              width: 1,
                              color: 'rgba(128, 128, 128, 0.5)'
                          }
                      }
                  },
                  emphasis: {
                      lineStyle: {
                          width: 1,
                          color: 'rgba(128, 128, 128, 0.5)'
                      },
                      chordStyle: {
                          lineStyle: {
                              width: 1,
                              color: 'rgba(128, 128, 128, 0.5)'
                          }
                      }
                  }
              }
          },
          gauge: {
              startAngle: 225,
              endAngle: -45,
              axisLine: {
                  show: true,
                  lineStyle: {
                      color: [[0.2, '#86b379'], [0.8, '#68a54a'], [1, '#408829']],
                      width: 8
                  }
              },
              axisTick: {
                  splitNumber: 10,
                  length: 12,
                  lineStyle: {
                      color: 'auto'
                  }
              },
              axisLabel: {
                  textStyle: {
                      color: 'auto'
                  }
              },
              splitLine: {
                  length: 18,
                  lineStyle: {
                      color: 'auto'
                  }
              },
              pointer: {
                  length: '90%',
                  color: 'auto'
              },
              title: {
                  textStyle: {
                      color: '#333'
                  }
              },
              detail: {
                  textStyle: {
                      color: 'auto'
                  }
              }
          },
          textStyle: {
              fontFamily: 'Arial, Verdana, sans-serif'
          }
      };

      var echartBar = echarts.init(document.getElementById('mainb'), theme);

      echartBar.setOption({
        title: {
          text: 'Graph title',
          subtext: 'Graph Sub-text'
        },
        tooltip: {
          trigger: 'axis'
        },
        legend: {
          data: ['sales', 'purchases']
        },
        toolbox: {
          show: false
        },
        calculable: false,
        xAxis: [{
          type: 'category',
          data: ['1?', '2?', '3?', '4?', '5?', '6?', '7?', '8?', '9?', '10?', '11?', '12?']
        }],
        yAxis: [{
          type: 'value'
        }],
        series: [{
          name: 'sales',
          type: 'bar',
          data: [2.0, 4.9, 7.0, 23.2, 25.6, 76.7, 135.6, 162.2, 32.6, 20.0, 6.4, 3.3],
          markPoint: {
            data: [{
              type: 'max',
              name: '???'
            }, {
              type: 'min',
              name: '???'
            }]
          },
          markLine: {
            data: [{
              type: 'average',
              name: '???'
            }]
          }
        }, {
          name: 'purchases',
          type: 'bar',
          data: [2.6, 5.9, 9.0, 26.4, 28.7, 70.7, 175.6, 182.2, 48.7, 18.8, 6.0, 2.3],
          markPoint: {
            data: [{
              name: 'sales',
              value: 182.2,
              xAxis: 7,
              yAxis: 183,
            }, {
              name: 'purchases',
              value: 2.3,
              xAxis: 11,
              yAxis: 3
            }]
          },
          markLine: {
            data: [{
              type: 'average',
              name: '???'
            }]
          }
        }]
      });

      var echartRadar = echarts.init(document.getElementById('echart_sonar'), theme);

      echartRadar.setOption({
        title: {
          text: 'Budget vs spending',
          subtext: 'Subtitle'
        },
         tooltip: {
            trigger: 'item'
        },
        legend: {
          orient: 'vertical',
          x: 'right',
          y: 'bottom',
          data: ['Allocated Budget', 'Actual Spending']
        },
        toolbox: {
          show: true,
          feature: {
            restore: {
              show: true,
              title: "Restore"
            },
            saveAsImage: {
              show: true,
              title: "Save Image"
            }
          }
        },
        polar: [{
          indicator: [{
            text: 'Sales',
            max: 6000
          }, {
            text: 'Administration',
            max: 16000
          }, {
            text: 'Information Techology',
            max: 30000
          }, {
            text: 'Customer Support',
            max: 38000
          }, {
            text: 'Development',
            max: 52000
          }, {
            text: 'Marketing',
            max: 25000
          }]
        }],
        calculable: true,
        series: [{
          name: 'Budget vs spending',
          type: 'radar',
          data: [{
            value: [4300, 10000, 28000, 35000, 50000, 19000],
            name: 'Allocated Budget'
          }, {
            value: [5000, 14000, 28000, 31000, 42000, 21000],
            name: 'Actual Spending'
          }]
        }]
      });

      var echartFunnel = echarts.init(document.getElementById('echart_pyramid'), theme);

      echartFunnel.setOption({
        title: {
          text: 'Echart Pyramid Graph',
          subtext: 'Subtitle'
        },
        tooltip: {
          trigger: 'item',
          formatter: "{a} <br/>{b} : {c}%"
        },
        toolbox: {
          show: true,
          feature: {
            restore: {
              show: true,
              title: "Restore"
            },
            saveAsImage: {
              show: true,
              title: "Save Image"
            }
          }
        },
        legend: {
          data: ['Something #1', 'Something #2', 'Something #3', 'Something #4', 'Something #5'],
          orient: 'vertical',
          x: 'left',
          y: 'bottom'
        },
        calculable: true,
        series: [{
          name: '漏斗图',
          type: 'funnel',
          width: '40%',
          data: [{
            value: 60,
            name: 'Something #1'
          }, {
            value: 40,
            name: 'Something #2'
          }, {
            value: 20,
            name: 'Something #3'
          }, {
            value: 80,
            name: 'Something #4'
          }, {
            value: 100,
            name: 'Something #5'
          }]
        }]
      });

      var echartGauge = echarts.init(document.getElementById('echart_guage'), theme);

      echartGauge.setOption({
        tooltip: {
          formatter: "{a} <br/>{b} : {c}%"
        },
        toolbox: {
          show: true,
          feature: {
            restore: {
              show: true,
              title: "Restore"
            },
            saveAsImage: {
              show: true,
              title: "Save Image"
            }
          }
        },
        series: [{
          name: 'Performance',
          type: 'gauge',
          center: ['50%', '50%'],
          startAngle: 140,
          endAngle: -140,
          min: 0,
          max: 100,
          precision: 0,
          splitNumber: 10,
          axisLine: {
            show: true,
            lineStyle: {
              color: [
                [0.2, 'lightgreen'],
                [0.4, 'orange'],
                [0.8, 'skyblue'],
                [1, '#ff4500']
              ],
              width: 30
            }
          },
          axisTick: {
            show: true,
            splitNumber: 5,
            length: 8,
            lineStyle: {
              color: '#eee',
              width: 1,
              type: 'solid'
            }
          },
          axisLabel: {
            show: true,
            formatter: function(v) {
              switch (v + '') {
                case '10':
                  return 'a';
                case '30':
                  return 'b';
                case '60':
                  return 'c';
                case '90':
                  return 'd';
                default:
                  return '';
              }
            },
            textStyle: {
              color: '#333'
            }
          },
          splitLine: {
            show: true,
            length: 30,
            lineStyle: {
              color: '#eee',
              width: 2,
              type: 'solid'
            }
          },
          pointer: {
            length: '80%',
            width: 8,
            color: 'auto'
          },
          title: {
            show: true,
            offsetCenter: ['-65%', -10],
            textStyle: {
              color: '#333',
              fontSize: 15
            }
          },
          detail: {
            show: true,
            backgroundColor: 'rgba(0,0,0,0)',
            borderWidth: 0,
            borderColor: '#ccc',
            width: 100,
            height: 40,
            offsetCenter: ['-60%', 10],
            formatter: '{value}%',
            textStyle: {
              color: 'auto',
              fontSize: 30
            }
          },
          data: [{
            value: 50,
            name: 'Performance'
          }]
        }]
      });

      var echartLine = echarts.init(document.getElementById('echart_line'), theme);

      echartLine.setOption({
        title: {
          text: 'Line Graph',
          subtext: 'Subtitle'
        },
        tooltip: {
          trigger: 'axis'
        },
        legend: {
          x: 220,
          y: 40,
          data: ['Intent', 'Pre-order', 'Deal']
        },
        toolbox: {
          show: true,
          feature: {
            magicType: {
              show: true,
              title: {
                line: 'Line',
                bar: 'Bar',
                stack: 'Stack',
                tiled: 'Tiled'
              },
              type: ['line', 'bar', 'stack', 'tiled']
            },
            restore: {
              show: true,
              title: "Restore"
            },
            saveAsImage: {
              show: true,
              title: "Save Image"
            }
          }
        },
        calculable: true,
        xAxis: [{
          type: 'category',
          boundaryGap: false,
          data: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']
        }],
        yAxis: [{
          type: 'value'
        }],
        series: [{
          name: 'Deal',
          type: 'line',
          smooth: true,
          itemStyle: {
            normal: {
              areaStyle: {
                type: 'default'
              }
            }
          },
          data: [10, 12, 21, 54, 260, 830, 710]
        }, {
          name: 'Pre-order',
          type: 'line',
          smooth: true,
          itemStyle: {
            normal: {
              areaStyle: {
                type: 'default'
              }
            }
          },
          data: [30, 182, 434, 791, 390, 30, 10]
        }, {
          name: 'Intent',
          type: 'line',
          smooth: true,
          itemStyle: {
            normal: {
              areaStyle: {
                type: 'default'
              }
            }
          },
          data: [1320, 1132, 601, 234, 120, 90, 20]
        }]
      });

      var echartScatter = echarts.init(document.getElementById('echart_scatter'), theme);

      echartScatter.setOption({
        title: {
          text: 'Scatter Graph',
          subtext: 'Heinz  2003'
        },
        tooltip: {
          trigger: 'axis',
          showDelay: 0,
          axisPointer: {
            type: 'cross',
            lineStyle: {
              type: 'dashed',
              width: 1
            }
          }
        },
        legend: {
          data: ['Data2', 'Data1']
        },
        toolbox: {
          show: true,
          feature: {
            saveAsImage: {
              show: true,
              title: "Save Image"
            }
          }
        },
        xAxis: [{
          type: 'value',
          scale: true,
          axisLabel: {
            formatter: '{value} cm'
          }
        }],
        yAxis: [{
          type: 'value',
          scale: true,
          axisLabel: {
            formatter: '{value} kg'
          }
        }],
        series: [{
          name: 'Data1',
          type: 'scatter',
          tooltip: {
            trigger: 'item',
            formatter: function(params) {
              if (params.value.length > 1) {
                return params.seriesName + ' :<br/>' + params.value[0] + 'cm ' + params.value[1] + 'kg ';
              } else {
                return params.seriesName + ' :<br/>' + params.name + ' : ' + params.value + 'kg ';
              }
            }
          },
          data: [
            [161.2, 51.6],
            [167.5, 59.0],
            [159.5, 49.2],
            [157.0, 63.0],
            [155.8, 53.6],
            [170.0, 59.0],
            [159.1, 47.6],
            [166.0, 69.8],
            [176.2, 66.8],
            [160.2, 75.2],
            [172.5, 55.2],
            [170.9, 54.2],
            [172.9, 62.5],
            [153.4, 42.0],
            [160.0, 50.0],
            [147.2, 49.8],
            [168.2, 49.2],
            [175.0, 73.2],
            [157.0, 47.8],
            [167.6, 68.8],
            [159.5, 50.6],
            [175.0, 82.5],
            [166.8, 57.2],
            [176.5, 87.8],
            [170.2, 72.8],
            [174.0, 54.5],
            [173.0, 59.8],
            [179.9, 67.3],
            [170.5, 67.8],
            [160.0, 47.0],
            [154.4, 46.2],
            [162.0, 55.0],
            [176.5, 83.0],
            [160.0, 54.4],
            [152.0, 45.8],
            [162.1, 53.6],
            [170.0, 73.2],
            [160.2, 52.1],
            [161.3, 67.9],
            [166.4, 56.6],
            [168.9, 62.3],
            [163.8, 58.5],
            [167.6, 54.5],
            [160.0, 50.2],
            [161.3, 60.3],
            [167.6, 58.3],
            [165.1, 56.2],
            [160.0, 50.2],
            [170.0, 72.9],
            [157.5, 59.8],
            [167.6, 61.0],
            [160.7, 69.1],
            [163.2, 55.9],
            [152.4, 46.5],
            [157.5, 54.3],
            [168.3, 54.8],
            [180.3, 60.7],
            [165.5, 60.0],
            [165.0, 62.0],
            [164.5, 60.3],
            [156.0, 52.7],
            [160.0, 74.3],
            [163.0, 62.0],
            [165.7, 73.1],
            [161.0, 80.0],
            [162.0, 54.7],
            [166.0, 53.2],
            [174.0, 75.7],
            [172.7, 61.1],
            [167.6, 55.7],
            [151.1, 48.7],
            [164.5, 52.3],
            [163.5, 50.0],
            [152.0, 59.3],
            [169.0, 62.5],
            [164.0, 55.7],
            [161.2, 54.8],
            [155.0, 45.9],
            [170.0, 70.6],
            [176.2, 67.2],
            [170.0, 69.4],
            [162.5, 58.2],
            [170.3, 64.8],
            [164.1, 71.6],
            [169.5, 52.8],
            [163.2, 59.8],
            [154.5, 49.0],
            [159.8, 50.0],
            [173.2, 69.2],
            [170.0, 55.9],
            [161.4, 63.4],
            [169.0, 58.2],
            [166.2, 58.6],
            [159.4, 45.7],
            [162.5, 52.2],
            [159.0, 48.6],
            [162.8, 57.8],
            [159.0, 55.6],
            [179.8, 66.8],
            [162.9, 59.4],
            [161.0, 53.6],
            [151.1, 73.2],
            [168.2, 53.4],
            [168.9, 69.0],
            [173.2, 58.4],
            [171.8, 56.2],
            [178.0, 70.6],
            [164.3, 59.8],
            [163.0, 72.0],
            [168.5, 65.2],
            [166.8, 56.6],
            [172.7, 105.2],
            [163.5, 51.8],
            [169.4, 63.4],
            [167.8, 59.0],
            [159.5, 47.6],
            [167.6, 63.0],
            [161.2, 55.2],
            [160.0, 45.0],
            [163.2, 54.0],
            [162.2, 50.2],
            [161.3, 60.2],
            [149.5, 44.8],
            [157.5, 58.8],
            [163.2, 56.4],
            [172.7, 62.0],
            [155.0, 49.2],
            [156.5, 67.2],
            [164.0, 53.8],
            [160.9, 54.4],
            [162.8, 58.0],
            [167.0, 59.8],
            [160.0, 54.8],
            [160.0, 43.2],
            [168.9, 60.5],
            [158.2, 46.4],
            [156.0, 64.4],
            [160.0, 48.8],
            [167.1, 62.2],
            [158.0, 55.5],
            [167.6, 57.8],
            [156.0, 54.6],
            [162.1, 59.2],
            [173.4, 52.7],
            [159.8, 53.2],
            [170.5, 64.5],
            [159.2, 51.8],
            [157.5, 56.0],
            [161.3, 63.6],
            [162.6, 63.2],
            [160.0, 59.5],
            [168.9, 56.8],
            [165.1, 64.1],
            [162.6, 50.0],
            [165.1, 72.3],
            [166.4, 55.0],
            [160.0, 55.9],
            [152.4, 60.4],
            [170.2, 69.1],
            [162.6, 84.5],
            [170.2, 55.9],
            [158.8, 55.5],
            [172.7, 69.5],
            [167.6, 76.4],
            [162.6, 61.4],
            [167.6, 65.9],
            [156.2, 58.6],
            [175.2, 66.8],
            [172.1, 56.6],
            [162.6, 58.6],
            [160.0, 55.9],
            [165.1, 59.1],
            [182.9, 81.8],
            [166.4, 70.7],
            [165.1, 56.8],
            [177.8, 60.0],
            [165.1, 58.2],
            [175.3, 72.7],
            [154.9, 54.1],
            [158.8, 49.1],
            [172.7, 75.9],
            [168.9, 55.0],
            [161.3, 57.3],
            [167.6, 55.0],
            [165.1, 65.5],
            [175.3, 65.5],
            [157.5, 48.6],
            [163.8, 58.6],
            [167.6, 63.6],
            [165.1, 55.2],
            [165.1, 62.7],
            [168.9, 56.6],
            [162.6, 53.9],
            [164.5, 63.2],
            [176.5, 73.6],
            [168.9, 62.0],
            [175.3, 63.6],
            [159.4, 53.2],
            [160.0, 53.4],
            [170.2, 55.0],
            [162.6, 70.5],
            [167.6, 54.5],
            [162.6, 54.5],
            [160.7, 55.9],
            [160.0, 59.0],
            [157.5, 63.6],
            [162.6, 54.5],
            [152.4, 47.3],
            [170.2, 67.7],
            [165.1, 80.9],
            [172.7, 70.5],
            [165.1, 60.9],
            [170.2, 63.6],
            [170.2, 54.5],
            [170.2, 59.1],
            [161.3, 70.5],
            [167.6, 52.7],
            [167.6, 62.7],
            [165.1, 86.3],
            [162.6, 66.4],
            [152.4, 67.3],
            [168.9, 63.0],
            [170.2, 73.6],
            [175.2, 62.3],
            [175.2, 57.7],
            [160.0, 55.4],
            [165.1, 104.1],
            [174.0, 55.5],
            [170.2, 77.3],
            [160.0, 80.5],
            [167.6, 64.5],
            [167.6, 72.3],
            [167.6, 61.4],
            [154.9, 58.2],
            [162.6, 81.8],
            [175.3, 63.6],
            [171.4, 53.4],
            [157.5, 54.5],
            [165.1, 53.6],
            [160.0, 60.0],
            [174.0, 73.6],
            [162.6, 61.4],
            [174.0, 55.5],
            [162.6, 63.6],
            [161.3, 60.9],
            [156.2, 60.0],
            [149.9, 46.8],
            [169.5, 57.3],
            [160.0, 64.1],
            [175.3, 63.6],
            [169.5, 67.3],
            [160.0, 75.5],
            [172.7, 68.2],
            [162.6, 61.4],
            [157.5, 76.8],
            [176.5, 71.8],
            [164.4, 55.5],
            [160.7, 48.6],
            [174.0, 66.4],
            [163.8, 67.3]
          ],
          markPoint: {
            data: [{
              type: 'max',
              name: 'Max'
            }, {
              type: 'min',
              name: 'Min'
            }]
          },
          markLine: {
            data: [{
              type: 'average',
              name: 'Mean'
            }]
          }
        }, {
          name: 'Data2',
          type: 'scatter',
          tooltip: {
            trigger: 'item',
            formatter: function(params) {
              if (params.value.length > 1) {
                return params.seriesName + ' :<br/>' + params.value[0] + 'cm ' + params.value[1] + 'kg ';
              } else {
                return params.seriesName + ' :<br/>' + params.name + ' : ' + params.value + 'kg ';
              }
            }
          },
          data: [
            [174.0, 65.6],
            [175.3, 71.8],
            [193.5, 80.7],
            [186.5, 72.6],
            [187.2, 78.8],
            [181.5, 74.8],
            [184.0, 86.4],
            [184.5, 78.4],
            [175.0, 62.0],
            [184.0, 81.6],
            [180.0, 76.6],
            [177.8, 83.6],
            [192.0, 90.0],
            [176.0, 74.6],
            [174.0, 71.0],
            [184.0, 79.6],
            [192.7, 93.8],
            [171.5, 70.0],
            [173.0, 72.4],
            [176.0, 85.9],
            [176.0, 78.8],
            [180.5, 77.8],
            [172.7, 66.2],
            [176.0, 86.4],
            [173.5, 81.8],
            [178.0, 89.6],
            [180.3, 82.8],
            [180.3, 76.4],
            [164.5, 63.2],
            [173.0, 60.9],
            [183.5, 74.8],
            [175.5, 70.0],
            [188.0, 72.4],
            [189.2, 84.1],
            [172.8, 69.1],
            [170.0, 59.5],
            [182.0, 67.2],
            [170.0, 61.3],
            [177.8, 68.6],
            [184.2, 80.1],
            [186.7, 87.8],
            [171.4, 84.7],
            [172.7, 73.4],
            [175.3, 72.1],
            [180.3, 82.6],
            [182.9, 88.7],
            [188.0, 84.1],
            [177.2, 94.1],
            [172.1, 74.9],
            [167.0, 59.1],
            [169.5, 75.6],
            [174.0, 86.2],
            [172.7, 75.3],
            [182.2, 87.1],
            [164.1, 55.2],
            [163.0, 57.0],
            [171.5, 61.4],
            [184.2, 76.8],
            [174.0, 86.8],
            [174.0, 72.2],
            [177.0, 71.6],
            [186.0, 84.8],
            [167.0, 68.2],
            [171.8, 66.1],
            [182.0, 72.0],
            [167.0, 64.6],
            [177.8, 74.8],
            [164.5, 70.0],
            [192.0, 101.6],
            [175.5, 63.2],
            [171.2, 79.1],
            [181.6, 78.9],
            [167.4, 67.7],
            [181.1, 66.0],
            [177.0, 68.2],
            [174.5, 63.9],
            [177.5, 72.0],
            [170.5, 56.8],
            [182.4, 74.5],
            [197.1, 90.9],
            [180.1, 93.0],
            [175.5, 80.9],
            [180.6, 72.7],
            [184.4, 68.0],
            [175.5, 70.9],
            [180.6, 72.5],
            [177.0, 72.5],
            [177.1, 83.4],
            [181.6, 75.5],
            [176.5, 73.0],
            [175.0, 70.2],
            [174.0, 73.4],
            [165.1, 70.5],
            [177.0, 68.9],
            [192.0, 102.3],
            [176.5, 68.4],
            [169.4, 65.9],
            [182.1, 75.7],
            [179.8, 84.5],
            [175.3, 87.7],
            [184.9, 86.4],
            [177.3, 73.2],
            [167.4, 53.9],
            [178.1, 72.0],
            [168.9, 55.5],
            [157.2, 58.4],
            [180.3, 83.2],
            [170.2, 72.7],
            [177.8, 64.1],
            [172.7, 72.3],
            [165.1, 65.0],
            [186.7, 86.4],
            [165.1, 65.0],
            [174.0, 88.6],
            [175.3, 84.1],
            [185.4, 66.8],
            [177.8, 75.5],
            [180.3, 93.2],
            [180.3, 82.7],
            [177.8, 58.0],
            [177.8, 79.5],
            [177.8, 78.6],
            [177.8, 71.8],
            [177.8, 116.4],
            [163.8, 72.2],
            [188.0, 83.6],
            [198.1, 85.5],
            [175.3, 90.9],
            [166.4, 85.9],
            [190.5, 89.1],
            [166.4, 75.0],
            [177.8, 77.7],
            [179.7, 86.4],
            [172.7, 90.9],
            [190.5, 73.6],
            [185.4, 76.4],
            [168.9, 69.1],
            [167.6, 84.5],
            [175.3, 64.5],
            [170.2, 69.1],
            [190.5, 108.6],
            [177.8, 86.4],
            [190.5, 80.9],
            [177.8, 87.7],
            [184.2, 94.5],
            [176.5, 80.2],
            [177.8, 72.0],
            [180.3, 71.4],
            [171.4, 72.7],
            [172.7, 84.1],
            [172.7, 76.8],
            [177.8, 63.6],
            [177.8, 80.9],
            [182.9, 80.9],
            [170.2, 85.5],
            [167.6, 68.6],
            [175.3, 67.7],
            [165.1, 66.4],
            [185.4, 102.3],
            [181.6, 70.5],
            [172.7, 95.9],
            [190.5, 84.1],
            [179.1, 87.3],
            [175.3, 71.8],
            [170.2, 65.9],
            [193.0, 95.9],
            [171.4, 91.4],
            [177.8, 81.8],
            [177.8, 96.8],
            [167.6, 69.1],
            [167.6, 82.7],
            [180.3, 75.5],
            [182.9, 79.5],
            [176.5, 73.6],
            [186.7, 91.8],
            [188.0, 84.1],
            [188.0, 85.9],
            [177.8, 81.8],
            [174.0, 82.5],
            [177.8, 80.5],
            [171.4, 70.0],
            [185.4, 81.8],
            [185.4, 84.1],
            [188.0, 90.5],
            [188.0, 91.4],
            [182.9, 89.1],
            [176.5, 85.0],
            [175.3, 69.1],
            [175.3, 73.6],
            [188.0, 80.5],
            [188.0, 82.7],
            [175.3, 86.4],
            [170.5, 67.7],
            [179.1, 92.7],
            [177.8, 93.6],
            [175.3, 70.9],
            [182.9, 75.0],
            [170.8, 93.2],
            [188.0, 93.2],
            [180.3, 77.7],
            [177.8, 61.4],
            [185.4, 94.1],
            [168.9, 75.0],
            [185.4, 83.6],
            [180.3, 85.5],
            [174.0, 73.9],
            [167.6, 66.8],
            [182.9, 87.3],
            [160.0, 72.3],
            [180.3, 88.6],
            [167.6, 75.5],
            [186.7, 101.4],
            [175.3, 91.1],
            [175.3, 67.3],
            [175.9, 77.7],
            [175.3, 81.8],
            [179.1, 75.5],
            [181.6, 84.5],
            [177.8, 76.6],
            [182.9, 85.0],
            [177.8, 102.5],
            [184.2, 77.3],
            [179.1, 71.8],
            [176.5, 87.9],
            [188.0, 94.3],
            [174.0, 70.9],
            [167.6, 64.5],
            [170.2, 77.3],
            [167.6, 72.3],
            [188.0, 87.3],
            [174.0, 80.0],
            [176.5, 82.3],
            [180.3, 73.6],
            [167.6, 74.1],
            [188.0, 85.9],
            [180.3, 73.2],
            [167.6, 76.3],
            [183.0, 65.9],
            [183.0, 90.9],
            [179.1, 89.1],
            [170.2, 62.3],
            [177.8, 82.7],
            [179.1, 79.1],
            [190.5, 98.2],
            [177.8, 84.1],
            [180.3, 83.2],
            [180.3, 83.2]
          ],
          markPoint: {
            data: [{
              type: 'max',
              name: 'Max'
            }, {
              type: 'min',
              name: 'Min'
            }]
          },
          markLine: {
            data: [{
              type: 'average',
              name: 'Mean'
            }]
          }
        }]
      });

      var echartBar = echarts.init(document.getElementById('echart_bar_horizontal'), theme);

      echartBar.setOption({
        title: {
          text: 'Bar Graph',
          subtext: 'Graph subtitle'
        },
        tooltip: {
          trigger: 'axis'
        },
        legend: {
          x: 100,
          data: ['2015', '2016']
        },
        toolbox: {
          show: true,
          feature: {
            saveAsImage: {
              show: true,
              title: "Save Image"
            }
          }
        },
        calculable: true,
        xAxis: [{
          type: 'value',
          boundaryGap: [0, 0.01]
        }],
        yAxis: [{
          type: 'category',
          data: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun']
        }],
        series: [{
          name: '2015',
          type: 'bar',
          data: [18203, 23489, 29034, 104970, 131744, 630230]
        }, {
          name: '2016',
          type: 'bar',
          data: [19325, 23438, 31000, 121594, 134141, 681807]
        }]
      });

      var echartPieCollapse = echarts.init(document.getElementById('echart_pie2'), theme);

      echartPieCollapse.setOption({
        tooltip: {
          trigger: 'item',
          formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
          x: 'center',
          y: 'bottom',
          data: ['rose1', 'rose2', 'rose3', 'rose4', 'rose5', 'rose6']
        },
        toolbox: {
          show: true,
          feature: {
            magicType: {
              show: true,
              type: ['pie', 'funnel']
            },
            restore: {
              show: true,
              title: "Restore"
            },
            saveAsImage: {
              show: true,
              title: "Save Image"
            }
          }
        },
        calculable: true,
        series: [{
          name: 'Area Mode',
          type: 'pie',
          radius: [25, 90],
          center: ['50%', 170],
          roseType: 'area',
          x: '50%',
          max: 40,
          sort: 'ascending',
          data: [{
            value: 10,
            name: 'rose1'
          }, {
            value: 5,
            name: 'rose2'
          }, {
            value: 15,
            name: 'rose3'
          }, {
            value: 25,
            name: 'rose4'
          }, {
            value: 20,
            name: 'rose5'
          }, {
            value: 35,
            name: 'rose6'
          }]
        }]
      });

      var echartDonut = echarts.init(document.getElementById('echart_donut'), theme);

      echartDonut.setOption({
        tooltip: {
          trigger: 'item',
          formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        calculable: true,
        legend: {
          x: 'center',
          y: 'bottom',
          data: ['Direct Access', 'E-mail Marketing', 'Union Ad', 'Video Ads', 'Search Engine']
        },
        toolbox: {
          show: true,
          feature: {
            magicType: {
              show: true,
              type: ['pie', 'funnel'],
              option: {
                funnel: {
                  x: '25%',
                  width: '50%',
                  funnelAlign: 'center',
                  max: 1548
                }
              }
            },
            restore: {
              show: true,
              title: "Restore"
            },
            saveAsImage: {
              show: true,
              title: "Save Image"
            }
          }
        },
        series: [{
          name: 'Access to the resource',
          type: 'pie',
          radius: ['35%', '55%'],
          itemStyle: {
            normal: {
              label: {
                show: true
              },
              labelLine: {
                show: true
              }
            },
            emphasis: {
              label: {
                show: true,
                position: 'center',
                textStyle: {
                  fontSize: '14',
                  fontWeight: 'normal'
                }
              }
            }
          },
          data: [{
            value: 335,
            name: 'Direct Access'
          }, {
            value: 310,
            name: 'E-mail Marketing'
          }, {
            value: 234,
            name: 'Union Ad'
          }, {
            value: 135,
            name: 'Video Ads'
          }, {
            value: 1548,
            name: 'Search Engine'
          }]
        }]
      });

      var echartPie = echarts.init(document.getElementById('echart_pie'), theme);

      echartPie.setOption({
        tooltip: {
          trigger: 'item',
          formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
          x: 'center',
          y: 'bottom',
          data: ['Direct Access', 'E-mail Marketing', 'Union Ad', 'Video Ads', 'Search Engine']
        },
        toolbox: {
          show: true,
          feature: {
            magicType: {
              show: true,
              type: ['pie', 'funnel'],
              option: {
                funnel: {
                  x: '25%',
                  width: '50%',
                  funnelAlign: 'left',
                  max: 1548
                }
              }
            },
            restore: {
              show: true,
              title: "Restore"
            },
            saveAsImage: {
              show: true,
              title: "Save Image"
            }
          }
        },
        calculable: true,
        series: [{
          name: '访问来源',
          type: 'pie',
          radius: '55%',
          center: ['50%', '48%'],
          data: [{
            value: 335,
            name: 'Direct Access'
          }, {
            value: 310,
            name: 'E-mail Marketing'
          }, {
            value: 234,
            name: 'Union Ad'
          }, {
            value: 135,
            name: 'Video Ads'
          }, {
            value: 1548,
            name: 'Search Engine'
          }]
        }]
      });

      var dataStyle = {
        normal: {
          label: {
            show: false
          },
          labelLine: {
            show: false
          }
        }
      };

      var placeHolderStyle = {
        normal: {
          color: 'rgba(0,0,0,0)',
          label: {
            show: false
          },
          labelLine: {
            show: false
          }
        },
        emphasis: {
          color: 'rgba(0,0,0,0)'
        }
      };

      var echartMiniPie = echarts.init(document.getElementById('echart_mini_pie'), theme);

      echartMiniPie .setOption({
        title: {
          text: 'Chart #2',
          subtext: 'From ExcelHome',
          sublink: 'http://e.weibo.com/1341556070/AhQXtjbqh',
          x: 'center',
          y: 'center',
          itemGap: 20,
          textStyle: {
            color: 'rgba(30,144,255,0.8)',
            fontFamily: '微软雅黑',
            fontSize: 35,
            fontWeight: 'bolder'
          }
        },
        tooltip: {
          show: true,
          formatter: "{a} <br/>{b} : {c} ({d}%)"
        },
        legend: {
          orient: 'vertical',
          x: 170,
          y: 45,
          itemGap: 12,
          data: ['68%Something #1', '29%Something #2', '3%Something #3'],
        },
        toolbox: {
          show: true,
          feature: {
            mark: {
              show: true
            },
            dataView: {
              show: true,
              title: "Text View",
              lang: [
                "Text View",
                "Close",
                "Refresh",
              ],
              readOnly: false
            },
            restore: {
              show: true,
              title: "Restore"
            },
            saveAsImage: {
              show: true,
              title: "Save Image"
            }
          }
        },
        series: [{
          name: '1',
          type: 'pie',
          clockWise: false,
          radius: [105, 130],
          itemStyle: dataStyle,
          data: [{
            value: 68,
            name: '68%Something #1'
          }, {
            value: 32,
            name: 'invisible',
            itemStyle: placeHolderStyle
          }]
        }, {
          name: '2',
          type: 'pie',
          clockWise: false,
          radius: [80, 105],
          itemStyle: dataStyle,
          data: [{
            value: 29,
            name: '29%Something #2'
          }, {
            value: 71,
            name: 'invisible',
            itemStyle: placeHolderStyle
          }]
        }, {
          name: '3',
          type: 'pie',
          clockWise: false,
          radius: [25, 80],
          itemStyle: dataStyle,
          data: [{
            value: 3,
            name: '3%Something #3'
          }, {
            value: 97,
            name: 'invisible',
            itemStyle: placeHolderStyle
          }]
        }]
      });

      var echartMap = echarts.init(document.getElementById('echart_world_map'), theme);

      echartMap.setOption({
        title: {
          text: 'World Population (2010)',
          subtext: 'from United Nations, Total population, both sexes combined, as of 1 July (thousands)',
          x: 'center',
          y: 'top'
        },
        tooltip: {
          trigger: 'item',
          formatter: function(params) {
            var value = (params.value + '').split('.');
            value = value[0].replace(/(\d{1,3})(?=(?:\d{3})+(?!\d))/g, '$1,') + '.' + value[1];
            return params.seriesName + '<br/>' + params.name + ' : ' + value;
          }
        },
        toolbox: {
          show: true,
          orient: 'vertical',
          x: 'right',
          y: 'center',
          feature: {
            mark: {
              show: true
            },
            dataView: {
              show: true,
              title: "Text View",
              lang: [
                "Text View",
                "Close",
                "Refresh",
              ],
              readOnly: false
            },
            restore: {
              show: true,
              title: "Restore"
            },
            saveAsImage: {
              show: true,
              title: "Save Image"
            }
          }
        },
        dataRange: {
          min: 0,
          max: 1000000,
          text: ['High', 'Low'],
          realtime: false,
          calculable: true,
          color: ['#087E65', '#26B99A', '#CBEAE3']
        },
        series: [{
          name: 'World Population (2010)',
          type: 'map',
          mapType: 'world',
          roam: false,
          mapLocation: {
            y: 60
          },
          itemStyle: {
            emphasis: {
              label: {
                show: true
              }
            }
          },
          data: [{
            name: 'Afghanistan',
            value: 28397.812
          }, {
            name: 'Angola',
            value: 19549.124
          }, {
            name: 'Albania',
            value: 3150.143
          }, {
            name: 'United Arab Emirates',
            value: 8441.537
          }, {
            name: 'Argentina',
            value: 40374.224
          }, {
            name: 'Armenia',
            value: 2963.496
          }, {
            name: 'French Southern and Antarctic Lands',
            value: 268.065
          }, {
            name: 'Australia',
            value: 22404.488
          }, {
            name: 'Austria',
            value: 8401.924
          }, {
            name: 'Azerbaijan',
            value: 9094.718
          }, {
            name: 'Burundi',
            value: 9232.753
          }, {
            name: 'Belgium',
            value: 10941.288
          }, {
            name: 'Benin',
            value: 9509.798
          }, {
            name: 'Burkina Faso',
            value: 15540.284
          }, {
            name: 'Bangladesh',
            value: 151125.475
          }, {
            name: 'Bulgaria',
            value: 7389.175
          }, {
            name: 'The Bahamas',
            value: 66402.316
          }, {
            name: 'Bosnia and Herzegovina',
            value: 3845.929
          }, {
            name: 'Belarus',
            value: 9491.07
          }, {
            name: 'Belize',
            value: 308.595
          }, {
            name: 'Bermuda',
            value: 64.951
          }, {
            name: 'Bolivia',
            value: 716.939
          }, {
            name: 'Brazil',
            value: 195210.154
          }, {
            name: 'Brunei',
            value: 27.223
          }, {
            name: 'Bhutan',
            value: 716.939
          }, {
            name: 'Botswana',
            value: 1969.341
          }, {
            name: 'Central African Republic',
            value: 4349.921
          }, {
            name: 'Canada',
            value: 34126.24
          }, {
            name: 'Switzerland',
            value: 7830.534
          }, {
            name: 'Chile',
            value: 17150.76
          }, {
            name: 'China',
            value: 1359821.465
          }, {
            name: 'Ivory Coast',
            value: 60508.978
          }, {
            name: 'Cameroon',
            value: 20624.343
          }, {
            name: 'Democratic Republic of the Congo',
            value: 62191.161
          }, {
            name: 'Republic of the Congo',
            value: 3573.024
          }, {
            name: 'Colombia',
            value: 46444.798
          }, {
            name: 'Costa Rica',
            value: 4669.685
          }, {
            name: 'Cuba',
            value: 11281.768
          }, {
            name: 'Northern Cyprus',
            value: 1.468
          }, {
            name: 'Cyprus',
            value: 1103.685
          }, {
            name: 'Czech Republic',
            value: 10553.701
          }, {
            name: 'Germany',
            value: 83017.404
          }, {
            name: 'Djibouti',
            value: 834.036
          }, {
            name: 'Denmark',
            value: 5550.959
          }, {
            name: 'Dominican Republic',
            value: 10016.797
          }, {
            name: 'Algeria',
            value: 37062.82
          }, {
            name: 'Ecuador',
            value: 15001.072
          }, {
            name: 'Egypt',
            value: 78075.705
          }, {
            name: 'Eritrea',
            value: 5741.159
          }, {
            name: 'Spain',
            value: 46182.038
          }, {
            name: 'Estonia',
            value: 1298.533
          }, {
            name: 'Ethiopia',
            value: 87095.281
          }, {
            name: 'Finland',
            value: 5367.693
          }, {
            name: 'Fiji',
            value: 860.559
          }, {
            name: 'Falkland Islands',
            value: 49.581
          }, {
            name: 'France',
            value: 63230.866
          }, {
            name: 'Gabon',
            value: 1556.222
          }, {
            name: 'United Kingdom',
            value: 62066.35
          }, {
            name: 'Georgia',
            value: 4388.674
          }, {
            name: 'Ghana',
            value: 24262.901
          }, {
            name: 'Guinea',
            value: 10876.033
          }, {
            name: 'Gambia',
            value: 1680.64
          }, {
            name: 'Guinea Bissau',
            value: 10876.033
          }, {
            name: 'Equatorial Guinea',
            value: 696.167
          }, {
            name: 'Greece',
            value: 11109.999
          }, {
            name: 'Greenland',
            value: 56.546
          }, {
            name: 'Guatemala',
            value: 14341.576
          }, {
            name: 'French Guiana',
            value: 231.169
          }, {
            name: 'Guyana',
            value: 786.126
          }, {
            name: 'Honduras',
            value: 7621.204
          }, {
            name: 'Croatia',
            value: 4338.027
          }, {
            name: 'Haiti',
            value: 9896.4
          }, {
            name: 'Hungary',
            value: 10014.633
          }, {
            name: 'Indonesia',
            value: 240676.485
          }, {
            name: 'India',
            value: 1205624.648
          }, {
            name: 'Ireland',
            value: 4467.561
          }, {
            name: 'Iran',
            value: 240676.485
          }, {
            name: 'Iraq',
            value: 30962.38
          }, {
            name: 'Iceland',
            value: 318.042
          }, {
            name: 'Israel',
            value: 7420.368
          }, {
            name: 'Italy',
            value: 60508.978
          }, {
            name: 'Jamaica',
            value: 2741.485
          }, {
            name: 'Jordan',
            value: 6454.554
          }, {
            name: 'Japan',
            value: 127352.833
          }, {
            name: 'Kazakhstan',
            value: 15921.127
          }, {
            name: 'Kenya',
            value: 40909.194
          }, {
            name: 'Kyrgyzstan',
            value: 5334.223
          }, {
            name: 'Cambodia',
            value: 14364.931
          }, {
            name: 'South Korea',
            value: 51452.352
          }, {
            name: 'Kosovo',
            value: 97.743
          }, {
            name: 'Kuwait',
            value: 2991.58
          }, {
            name: 'Laos',
            value: 6395.713
          }, {
            name: 'Lebanon',
            value: 4341.092
          }, {
            name: 'Liberia',
            value: 3957.99
          }, {
            name: 'Libya',
            value: 6040.612
          }, {
            name: 'Sri Lanka',
            value: 20758.779
          }, {
            name: 'Lesotho',
            value: 2008.921
          }, {
            name: 'Lithuania',
            value: 3068.457
          }, {
            name: 'Luxembourg',
            value: 507.885
          }, {
            name: 'Latvia',
            value: 2090.519
          }, {
            name: 'Morocco',
            value: 31642.36
          }, {
            name: 'Moldova',
            value: 103.619
          }, {
            name: 'Madagascar',
            value: 21079.532
          }, {
            name: 'Mexico',
            value: 117886.404
          }, {
            name: 'Macedonia',
            value: 507.885
          }, {
            name: 'Mali',
            value: 13985.961
          }, {
            name: 'Myanmar',
            value: 51931.231
          }, {
            name: 'Montenegro',
            value: 620.078
          }, {
            name: 'Mongolia',
            value: 2712.738
          }, {
            name: 'Mozambique',
            value: 23967.265
          }, {
            name: 'Mauritania',
            value: 3609.42
          }, {
            name: 'Malawi',
            value: 15013.694
          }, {
            name: 'Malaysia',
            value: 28275.835
          }, {
            name: 'Namibia',
            value: 2178.967
          }, {
            name: 'New Caledonia',
            value: 246.379
          }, {
            name: 'Niger',
            value: 15893.746
          }, {
            name: 'Nigeria',
            value: 159707.78
          }, {
            name: 'Nicaragua',
            value: 5822.209
          }, {
            name: 'Netherlands',
            value: 16615.243
          }, {
            name: 'Norway',
            value: 4891.251
          }, {
            name: 'Nepal',
            value: 26846.016
          }, {
            name: 'New Zealand',
            value: 4368.136
          }, {
            name: 'Oman',
            value: 2802.768
          }, {
            name: 'Pakistan',
            value: 173149.306
          }, {
            name: 'Panama',
            value: 3678.128
          }, {
            name: 'Peru',
            value: 29262.83
          }, {
            name: 'Philippines',
            value: 93444.322
          }, {
            name: 'Papua New Guinea',
            value: 6858.945
          }, {
            name: 'Poland',
            value: 38198.754
          }, {
            name: 'Puerto Rico',
            value: 3709.671
          }, {
            name: 'North Korea',
            value: 1.468
          }, {
            name: 'Portugal',
            value: 10589.792
          }, {
            name: 'Paraguay',
            value: 6459.721
          }, {
            name: 'Qatar',
            value: 1749.713
          }, {
            name: 'Romania',
            value: 21861.476
          }, {
            name: 'Russia',
            value: 21861.476
          }, {
            name: 'Rwanda',
            value: 10836.732
          }, {
            name: 'Western Sahara',
            value: 514.648
          }, {
            name: 'Saudi Arabia',
            value: 27258.387
          }, {
            name: 'Sudan',
            value: 35652.002
          }, {
            name: 'South Sudan',
            value: 9940.929
          }, {
            name: 'Senegal',
            value: 12950.564
          }, {
            name: 'Solomon Islands',
            value: 526.447
          }, {
            name: 'Sierra Leone',
            value: 5751.976
          }, {
            name: 'El Salvador',
            value: 6218.195
          }, {
            name: 'Somaliland',
            value: 9636.173
          }, {
            name: 'Somalia',
            value: 9636.173
          }, {
            name: 'Republic of Serbia',
            value: 3573.024
          }, {
            name: 'Suriname',
            value: 524.96
          }, {
            name: 'Slovakia',
            value: 5433.437
          }, {
            name: 'Slovenia',
            value: 2054.232
          }, {
            name: 'Sweden',
            value: 9382.297
          }, {
            name: 'Swaziland',
            value: 1193.148
          }, {
            name: 'Syria',
            value: 7830.534
          }, {
            name: 'Chad',
            value: 11720.781
          }, {
            name: 'Togo',
            value: 6306.014
          }, {
            name: 'Thailand',
            value: 66402.316
          }, {
            name: 'Tajikistan',
            value: 7627.326
          }, {
            name: 'Turkmenistan',
            value: 5041.995
          }, {
            name: 'East Timor',
            value: 10016.797
          }, {
            name: 'Trinidad and Tobago',
            value: 1328.095
          }, {
            name: 'Tunisia',
            value: 10631.83
          }, {
            name: 'Turkey',
            value: 72137.546
          }, {
            name: 'United Republic of Tanzania',
            value: 44973.33
          }, {
            name: 'Uganda',
            value: 33987.213
          }, {
            name: 'Ukraine',
            value: 46050.22
          }, {
            name: 'Uruguay',
            value: 3371.982
          }, {
            name: 'United States of America',
            value: 312247.116
          }, {
            name: 'Uzbekistan',
            value: 27769.27
          }, {
            name: 'Venezuela',
            value: 236.299
          }, {
            name: 'Vietnam',
            value: 89047.397
          }, {
            name: 'Vanuatu',
            value: 236.299
          }, {
            name: 'West Bank',
            value: 13.565
          }, {
            name: 'Yemen',
            value: 22763.008
          }, {
            name: 'South Africa',
            value: 51452.352
          }, {
            name: 'Zambia',
            value: 13216.985
          }, {
            name: 'Zimbabwe',
            value: 13076.978
          }]
        }]
      });
    </script>
@endsection
