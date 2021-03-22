
$(function() {
    "use strict";
  
  // chart 1

     var ctx = document.getElementById("data-chart1").getContext('2d');
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['01', '02', '03', '04', '05', '06', '07', '08'],
          datasets: [{
            label: 'Total Earning',
            data: [39, 19, 25, 16, 31, 39, 23, 20],
            backgroundColor: "#fff"
          },{
            label: 'Total Sales',
            data: [27, 12, 26, 15, 21, 27, 13, 25],
            backgroundColor: "rgba(255, 255, 255, 0.20)"
          }]
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false,
            position: 'bottom',
            labels: {
            fontColor: '#ddd',  
            boxWidth:13
            }
          },
          tooltips: {
            enabled:false,
            displayColors:false,
          },  
          
          scales: {
            xAxes: [{
               stacked: true,
              barPercentage: .4,
            display: false,
            gridLines: false
            }],
            yAxes: [{
              stacked: true,
            display: false,
            gridLines: false
            }]
          }

       }
       
      });



      // chart 2

     var ctx = document.getElementById("data-chart2").getContext('2d');
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['01', '02', '03', '04', '05', '06', '07', '08'],
          datasets: [{
            label: 'Total Earning',
            data: [39, 19, 25, 16, 31, 39, 23, 20],
            backgroundColor: "transparent",
            borderColor: '#fff',
            pointRadius :"0",
            pointHoverRadius:"0",
            borderWidth: 5
          }]
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false,
            position: 'bottom',
            labels: {
            fontColor: '#ddd',  
            boxWidth:13
            }
          },
          tooltips: {
            enabled:false,
            displayColors:false,
          },  
          
          scales: {
            xAxes: [{
               stacked: true,
              barPercentage: .4,
            display: false,
            gridLines: false
            }],
            yAxes: [{
              stacked: true,
            display: false,
            gridLines: false
            }]
          }

       }
       
      });

      // chart 3

     var ctx = document.getElementById("data-chart3").getContext('2d');
      var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['01', '02', '03', '04', '05', '06', '07', '08'],
          datasets: [{
            label: 'Total Earning',
            data: [39, 19, 25, 16, 31, 39, 23, 20],
            backgroundColor: "rgba(255, 255, 255, 0.20)",
            borderColor: 'transparent',             
          },{
            type:'line',
            label: 'Total Earning',
            data: [29, 9, 15, 6, 21, 29, 13, 10],
            backgroundColor: "transparent",
            borderColor: '#fff',
            pointRadius :"0",
            pointHoverRadius:"0",
            borderWidth: 5
          }]
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false,
            position: 'bottom',
            labels: {
            fontColor: '#ddd',  
            boxWidth:13
            }
          },
          tooltips: {
            enabled:false,
            displayColors:false,
          },  
          
          scales: {
            xAxes: [{
               stacked: true,
              barPercentage: .4,
            display: false,
            gridLines: false
            }],
            yAxes: [{
              stacked: true,
            display: false,
            gridLines: false
            }]
          }

       }
       
      });


       // chart 4

     var ctx = document.getElementById("data-chart4").getContext('2d');

      var gradientStroke1 = ctx.createLinearGradient(0, 0, 0, 300);
              gradientStroke1.addColorStop(0, 'rgba(255, 255, 255, 0.125)');  
              gradientStroke1.addColorStop(1, 'rgba(255, 255, 255, 0.5)'); 

      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['01', '02', '03', '04', '05', '06'],
          datasets: [{
            label: 'Total Earning',
            data: [39, 19, 35, 25, 31, 45],
            backgroundColor: gradientStroke1,
            borderColor: '#fff',
            pointRadius :"0",
            pointHoverRadius:"0",
            borderWidth: 5
          }]
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false,
            position: 'bottom',
            labels: {
            fontColor: '#ddd',  
            boxWidth:13
            }
          },
          tooltips: {
            enabled:false,
            displayColors:false,
          },  
          
          scales: {
            xAxes: [{
               stacked: true,
              barPercentage: .4,
            display: false,
            gridLines: false
            }],
            yAxes: [{
              stacked: true,
            display: false,
            gridLines: false
            }]
          }

       }
       
      });



      // chart 5

     var ctx = document.getElementById("data-chart5").getContext('2d');

      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'],
          datasets: [{
            label: 'Total Earning',
            data: [542, 480, 430, 550, 530, 453, 380, 434, 568, 610, 700, 630],
            backgroundColor: "rgba(255, 255, 255, 0.25)",
            borderColor: "#fff",
            pointRadius :"0",
            pointHoverRadius:"0",
            borderWidth: 5
          }]
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false,
            position: 'bottom',
            labels: {
            fontColor: '#ddd',  
            boxWidth:13
            }
          },
          tooltips: {
            enabled:false,
            displayColors:false,
          },  
          
          scales: {
            xAxes: [{
               stacked: true,
              barPercentage: .4,
            display: false,
            gridLines: false
            }],
            yAxes: [{
              stacked: true,
            display: false,
            gridLines: false
            }]
          }

       }
       
      });
	  

      // chart 6
    
    $('#data-chart6').sparkline([5,8,7,10,9,10,8,6,4,6,8,7,6,8], {
            type: 'bar',
            height: '25',
            barWidth: '2',
            resize: true,
            barSpacing: '4',
            barColor: '#fff'
        });


      // chart 7
		
       $('.easy-dash-chart').easyPieChart({
          easing: 'easeOutBounce',
          barColor : '#ffffff',
          lineWidth: 10,
          trackColor : 'rgba(255, 255, 255, 0.12)',
          scaleColor: false,
          onStep: function(from, to, percent) {
          $(this.el).find('.w_percent').text(Math.round(percent));
        }
     }); 
	 
	 
	 //chart 8


      var options = {
            chart: {
                width: 300,
                type: 'pie',
                foreColor: 'rgba(255, 255, 255, 0.85)',
            },
            dataLabels: {
                enabled: true
            },
            series: [90, 85, 70, 65],
            tooltip: {
                  enabled: false,
                  theme: 'dark',
              },
            colors: ["#ffffff", "rgba(255, 255, 255, 0.55)", 'rgba(255, 255, 255, 0.35)', 'rgba(255, 255, 255, 0.15)'],
            legend: {
              show:false,
                formatter: function(val, opts) {
                    return val + " - " + opts.w.globals.series[opts.seriesIndex]
                }
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 280
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]

        }

        var chart = new ApexCharts(
            document.querySelector("#data-chart8"),
            options
        );

        chart.render();

	 
	 // chart 9
	 
	 var options = {
      chart: {
        height: 350,
        type: 'radialBar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        radialBar: {
          startAngle: -135,
          endAngle: 225,
           hollow: {
            margin: 0,
            size: '70%',
            background: 'rgba(255, 255, 255, 0.0)',
            image: undefined,
            imageOffsetX: 0,
            imageOffsetY: 0,
            position: 'front',
            dropShadow: {
              enabled: true,
              top: 3,
              left: 0,
              blur: 4,
              opacity: 0.24
            }
          },
          track: {
            background: 'rgba(255, 255, 255, 0.12)',
            strokeWidth: '67%',
            margin: 0, // margin is in pixels
            dropShadow: {
              enabled: true,
              top: -3,
              left: 0,
              blur: 4,
              opacity: 0.35
            }
          },

          dataLabels: {
            showOn: 'always',
            name: {
              offsetY: -10,
              show: true,
              color: '#fff',
              fontSize: '17px'
            },
            value: {
              formatter: function(val) {
                return parseInt(val);
              },
              color: '#fff',
              fontSize: '36px',
              show: true,
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'light',
          type: 'horizontal',
          shadeIntensity: 0.5,
          gradientToColors: ['#fff'],
          inverseColors: false,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100]
        }
      },
      colors: ["#fff"],
      series: [75],
      stroke: {
        lineCap: 'round'
      },
      labels: ['Percent'],

    }

    var chart = new ApexCharts(
      document.querySelector("#data-chart9"),
      options
    );

    chart.render();
	 
	 
	 
	// chart 10
	 
	 var options = {
      chart: {
        height: 350,
        type: 'radialBar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        radialBar: {
          startAngle: -240,
          endAngle: 120,
           hollow: {
            margin: 0,
            size: '70%',
			//background: '#000',
            image: 'assets/images/products/clock.png',
		    imageWidth: 64,
		    imageHeight: 64,
			imageClipped: false
          },
          track: {
            background: 'rgba(255, 255, 255, 0.12)',
            strokeWidth: '67%',
            margin: 0, // margin is in pixels
            dropShadow: {
              enabled: true,
              top: -3,
              left: 0,
              blur: 4,
              opacity: 0.35
            }
          },

          dataLabels: {
            showOn: 'always',
            name: {
              offsetY: -10,
              show: false,
              color: '#fff',
              fontSize: '17px'
            },
            value: {
              formatter: function(val) {
                return parseInt(val);
              },
              color: '#fff',
              fontSize: '36px',
              show: false,
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'dark',
          type: 'horizontal',
          shadeIntensity: 0.5,
          gradientToColors: ['#fff'],
          inverseColors: true,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100]
        }
      },
      colors: ["#fff"],
      series: [75],
      stroke: {
        lineCap: 'round'
      },
      labels: ['Percent'],

    }

    var chart = new ApexCharts(
      document.querySelector("#data-chart10"),
      options
    );

    chart.render(); 



  // chart 11 

    var options = {
            chart: {
                height: 350,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
					hollow: {
						margin: 10,
						size: '50%',
						background: 'rgba(0, 0, 0, 0.0)'
					  },
                    startAngle: -225,
                    endAngle: 135,
                    dataLabels: {
                        name: {
                            fontSize: '14px',
                            color: '#fff',
                            offsetY: -10
                        },
                        value: {
                            offsetY: 0,
                            fontSize: '22px',
                            color: '#fff',
                            formatter: function (val) {
                                return val + "%";
                            }
                        }
                    },
                    track: {
                      background: '#fff',
                      strokeWidth: '0%',
                      margin: 0, // margin is in pixels
                      dropShadow: {
                        enabled: true,
                        top: -3,
                        left: 0,
                        blur: 4,
                        opacity: 0.35
                      }
                    },
                },
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    shadeIntensity: 0.15,
                    inverseColors: false,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 50, 65, 91]
                },
            },
            stroke: {
                dashArray: 4
            },
            fill: {
              type: 'gradient',
              gradient: {
              shade: 'dark',
              type: 'horizontal',
              shadeIntensity: 0.5,
              gradientToColors: ['#fff'],
              inverseColors: false,
              opacityFrom: 1,
              opacityTo: 1,
              stops: [0, 100]
            }
         }, colors: ["#fff"],
            series: [87],
            labels: ['Median Ratio'],
            
        }

       var chart = new ApexCharts(
            document.querySelector("#data-chart11"),
            options
        );
        
        chart.render();

        // window.setInterval(function () {
        //     chart.updateSeries([Math.floor(Math.random() * (100 - 1 + 1)) + 1])
        // }, 2000)
	 

	 
	 // chart 12
	 
	 var ctx = document.getElementById('data-chart-12').getContext('2d');

              
       var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
          datasets: [{
            label: 'Total Orders',
            data: [50, 150, 100, 190, 130, 90, 100, 190, 120, 140],
            backgroundColor: 'rgba(255, 255, 255, 0.25)',
            borderColor: '#fff',
            pointBackgroundColor:'#000',
            pointHoverBackgroundColor:'#fff',
            pointBorderColor :'#fff',
            pointHoverBorderColor :'#fff',
            //lineTension: "5",
            pointBorderWidth :2,
            pointRadius :0,
            pointHoverRadius :4,
            borderWidth: 2,
          }]
        }
        ,
        options: {
          maintainAspectRatio: false,
                legend: {
                  display: false,
                  labels: {
                    fontColor: '#ddd',  
                    boxWidth:40
                  }
                },
                tooltips: {
                  displayColors:false
                },  
              scales: {
                  xAxes: [{
                    barPercentage: .5,
                    display: false,
                    ticks: {
                        beginAtZero:true,
                        fontColor: '#ddd'
                    },
                    gridLines: {
                      display: true ,
                      color: "rgba(221, 221, 221, 0.08)"
                    },
                  }],
                   yAxes: [{
                    display: false,
                    ticks: {
                        beginAtZero:true,
                        fontColor: '#ddd'
                    },
                    gridLines: {
                      display: true ,
                      color: "rgba(221, 221, 221, 0.08)"
                    },
                  }]
                 }

             }
      });
	  
	  
	  
	  // chart 13

       var ctx = document.getElementById('data-chart-13').getContext('2d');


       var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
          datasets: [{
            label: 'Total Revenue',
            data: [90, 100, 190, 50, 150, 100, 190, 130, 120, 140],
            backgroundColor: 'rgba(255, 255, 255, 0.25)',
            borderColor: '#fff',
            pointBackgroundColor:'#000',
            pointHoverBackgroundColor:'#fff',
            pointBorderColor :'#fff',
            pointHoverBorderColor :'#fff',
            //lineTension: "5",
            pointBorderWidth :2,
            pointRadius :0,
            pointHoverRadius :4,
            borderWidth: 2,
          }]
        }
        ,
        options: {
          maintainAspectRatio: false,
                legend: {
                  display: false,
                  labels: {
                    fontColor: '#ddd',  
                    boxWidth:40
                  }
                },
                tooltips: {
                  displayColors:false
                },  
              scales: {
                  xAxes: [{
                    barPercentage: .5,
                    display: false,
                    ticks: {
                        beginAtZero:true,
                        fontColor: '#ddd'
                    },
                    gridLines: {
                      display: true ,
                      color: "rgba(221, 221, 221, 0.08)"
                    },
                  }],
                   yAxes: [{
                    display: false,
                    ticks: {
                        beginAtZero:true,
                        fontColor: '#ddd'
                    },
                    gridLines: {
                      display: true ,
                      color: "rgba(221, 221, 221, 0.08)"
                    },
                  }]
                 }

             }
      });



// chart 14

       var ctx = document.getElementById('data-chart-14').getContext('2d');

              
       var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
          datasets: [{
            label: 'Support Requests',
            data: [120, 140, 50, 90, 100, 190 ,150, 100, 190, 130],
            backgroundColor: 'rgba(255, 255, 255, 0.25)',
            borderColor: '#fff',
            pointBackgroundColor:'#000',
            pointHoverBackgroundColor:'#fff',
            pointBorderColor :'#fff',
            pointHoverBorderColor :'#fff',
            //lineTension: "5",
            pointBorderWidth :2,
            pointRadius :0,
            pointHoverRadius :4,
            borderWidth: 2,
          }]
        }
        ,
        options: {
          maintainAspectRatio: false,
                legend: {
                  display: false,
                  labels: {
                    fontColor: '#ddd',  
                    boxWidth:40
                  }
                },
                tooltips: {
                  displayColors:false
                },  
              scales: {
                  xAxes: [{
                    barPercentage: .5,
                    display: false,
                    ticks: {
                        beginAtZero:true,
                        fontColor: '#ddd'
                    },
                    gridLines: {
                      display: true ,
                      color: "rgba(221, 221, 221, 0.08)"
                    },
                  }],
                   yAxes: [{
                    display: false,
                    ticks: {
                        beginAtZero:true,
                        fontColor: '#ddd'
                    },
                    gridLines: {
                      display: true ,
                      color: "rgba(221, 221, 221, 0.08)"
                    },
                  }]
                 }

             }
      });




       // chart 15

       var ctx = document.getElementById('data-chart-15').getContext('2d');

              
       var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
          datasets: [{
            label: 'Messages',
            data: [30, 150, 100, 190, 130, 90, 100, 200, 120, 50],
            backgroundColor: 'rgba(255, 255, 255, 0.25)',
            borderColor: '#fff',
            pointBackgroundColor:'#000',
            pointHoverBackgroundColor:'#fff',
            pointBorderColor :'#fff',
            pointHoverBorderColor :'#fff',
            //lineTension: "5",
            pointBorderWidth :2,
            pointRadius :0,
            pointHoverRadius :4,
            borderWidth: 2,
          }]
        }
        ,
        options: {
          maintainAspectRatio: false,
                legend: {
                  display: false,
                  labels: {
                    fontColor: '#ddd',  
                    boxWidth:40
                  }
                },
                tooltips: {
                  displayColors:false
                },  
              scales: {
                  xAxes: [{
                    barPercentage: .5,
                    display: false,
                    ticks: {
                        beginAtZero:true,
                        fontColor: '#ddd'
                    },
                    gridLines: {
                      display: true ,
                      color: "rgba(221, 221, 221, 0.08)"
                    },
                  }],
                   yAxes: [{
                    display: false,
                    ticks: {
                        beginAtZero:true,
                        fontColor: '#ddd'
                    },
                    gridLines: {
                      display: true ,
                      color: "rgba(221, 221, 221, 0.08)"
                    },
                  }]
                 }

             }
      });
	  
	  
	  
	  
	  // chart 16
	 
	 var options = {
      chart: {
        height: 220,
        type: 'radialBar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        radialBar: {
          //startAngle: -100,
          //endAngle: 260,
           hollow: {
            margin: 0,
            size: '70%',
            background: 'transparent',
            image: undefined,
            imageOffsetX: 0,
            imageOffsetY: 0,
            position: 'front',
            dropShadow: {
              enabled: true,
              top: 3,
              left: 0,
              blur: 4,
              opacity: 0.24
            }
          },
          track: {
            background: 'rgba(255, 255, 255, 0.12)',
            strokeWidth: '67%',
            margin: 0, // margin is in pixels
            dropShadow: {
              enabled: false,
              top: -3,
              left: 0,
              blur: 4,
			  color: 'rgba(242, 14, 108, 0.65)',
              opacity: 0.5
            }
          },

          dataLabels: { 
            showOn: 'always',
            name: {
              offsetY: -5,
              show: true,
              color: '#fff',
              fontSize: '14px'
            },
            value: {
              formatter: function (val) {
						return val + "%";
					},
              color: '#fff',
              fontSize: '20px',
              show: true,
			  offsetY: 10,
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'light',
          type: 'horizontal',
          shadeIntensity: 0.5,
          gradientToColors: ['#fff'],
          inverseColors: false,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100]
        }
      },
      colors: ["#fff"],
      series: [80],
      stroke: {
        lineCap: 'round'
      },
      labels: ['Total'],

    }

    var chart = new ApexCharts(
      document.querySelector("#data-chart-16"),
      options
    );

    chart.render();
	
	
	
	
	// chart 17
	 
	 var options = {
      chart: {
        height: 220,
        type: 'radialBar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        radialBar: {
          //startAngle: -135,
          //endAngle: 225,
           hollow: {
            margin: 0,
            size: '70%',
            background: 'transparent',
            image: undefined,
            imageOffsetX: 0,
            imageOffsetY: 0,
            position: 'front',
            dropShadow: {
              enabled: true,
              top: 3,
              left: 0,
              blur: 4,

              opacity: 0.24
            }
          },
          track: {
            background: 'rgba(255, 255, 255, 0.12)',
            strokeWidth: '67%',
            margin: 0, // margin is in pixels
            dropShadow: {
              enabled: false,
              top: -3,
              left: 0,
              blur: 4,
			  color: 'rgba(0, 169, 255, 0.65)',
              opacity: 0.35
            }
          },

          dataLabels: { 
            showOn: 'always',
            name: {
              offsetY: -5,
              show: true,
              color: '#fff',
              fontSize: '14px'
            },
            value: {
              formatter: function (val) {
						return val + "%";
					},
              color: '#fff',
              fontSize: '20px',
              show: true,
			  offsetY: 10,
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'light',
          type: 'horizontal',
          shadeIntensity: 0.5,
          gradientToColors: ['#fff'],
          inverseColors: false,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100]
        }
      },
      colors: ["#fff"],
      series: [55],
      stroke: {
        lineCap: 'round'
      },
      labels: ['Total'],

    }

    var chart = new ApexCharts(
      document.querySelector("#data-chart-17"),
      options
    );

    chart.render();
	
	
	
	// chart 18
	 
	 var options = {
      chart: {
        height: 220,
        type: 'radialBar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        radialBar: {
          //startAngle: -135,
          //endAngle: 225,
           hollow: {
            margin: 0,
            size: '70%',
            background: 'transparent',
            image: undefined,
            imageOffsetX: 0,
            imageOffsetY: 0,
            position: 'front',
            dropShadow: {
              enabled: true,
              top: 3,
              left: 0,
              blur: 4,
              opacity: 0.24
            }
          },
          track: {
            background: 'rgba(255, 255, 255, 0.12)',
            strokeWidth: '67%',
            margin: 0, // margin is in pixels
            dropShadow: {
              enabled: false,
              top: -3,
              left: 0,
              blur: 4,
			  color: 'rgba(254, 197, 7, 0.55)',
              opacity: 0.55
            }
          },

          dataLabels: { 
            showOn: 'always',
            name: {
              offsetY: -5,
              show: true,
              color: '#fff',
              fontSize: '14px'
            },
            value: {
              formatter: function (val) {
						return val + "%";
					},
              color: '#fff',
              fontSize: '20px',
              show: true,
			  offsetY: 10,
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'light',
          type: 'horizontal',
          shadeIntensity: 0.5,
          gradientToColors: ['#fff'],
          inverseColors: false,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100]
        }
      },
      colors: ["#fff"],
      series: [65],
      stroke: {
        lineCap: 'round'
      },
      labels: ['Total'],

    }

    var chart = new ApexCharts(
      document.querySelector("#data-chart-18"),
      options
    );

    chart.render();
	
	
	
	// chart 19
	 
	 var options = {
      chart: {
        height: 220,
        type: 'radialBar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        radialBar: {
         // startAngle: -135,
          //endAngle: 225,
           hollow: {
            margin: 0,
            size: '70%',
            background: 'transparent',
            image: undefined,
            imageOffsetX: 0,
            imageOffsetY: 0,
            position: 'front',
            dropShadow: {
              enabled: true,
              top: 3,
              left: 0,
              blur: 4,
              opacity: 0.24
            }
          },
          track: {
            background: 'rgba(255, 255, 255, 0.12)',
            strokeWidth: '67%',
            margin: 0, // margin is in pixels
            dropShadow: {
              enabled: false,
              top: -3,
              left: 0,
              blur: 4,
			  color: 'rgba(0, 128, 0, 0.56)',
              opacity: 0.35
            }
          },

          dataLabels: { 
            showOn: 'always',
            name: {
              offsetY: -5,
              show: true,
              color: '#fff',
              fontSize: '14px'
            },
            value: {
              formatter: function (val) {
						return val + "%";
					},
              color: '#fff',
              fontSize: '20px',
              show: true,
			  offsetY: 10,
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'light',
          type: 'horizontal',
          shadeIntensity: 0.5,
          gradientToColors: ['#fff'],
          inverseColors: false,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100]
        }
      },
      colors: ["#fff"],
      series: [75],
      stroke: {
        lineCap: 'round'
      },
      labels: ['Total'],

    }

    var chart = new ApexCharts(
      document.querySelector("#data-chart-19"),
      options
    );

    chart.render();
	
	
	
	// chart 20
	 
	 var options = {
      chart: {
        height: 220,
        type: 'radialBar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        radialBar: {
          //startAngle: -100,
          //endAngle: 260,
           hollow: {
            margin: 0,
            size: '70%',
            background: 'transparent',
            image: undefined,
            imageOffsetX: 0,
            imageOffsetY: 0,
            position: 'front',
            dropShadow: {
              enabled: true,
              top: 3,
              left: 0,
              blur: 4,
              opacity: 0.24
            }
          },
          track: {
            background: 'rgba(255, 255, 255, 0.25)',
            strokeWidth: '67%',
            margin: 0, // margin is in pixels
            dropShadow: {
              enabled: true,
              top: -3,
              left: 0,
              blur: 4,
			  color: 'rgba(242, 14, 108, 0.65)',
              opacity: 0.5
            }
          },

          dataLabels: { 
            showOn: 'always',
            name: {
              offsetY: -5,
              show: true,
              color: '#fff',
              fontSize: '14px'
            },
            value: {
              formatter: function (val) {
						return val + "%";
					},
              color: '#fff',
              fontSize: '20px',
              show: true,
			  offsetY: 10,
            }
          }
        }
      },
	  stroke: {
		dashArray: 4
	  },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'light',
          type: 'horizontal',
          shadeIntensity: 0.5,
          gradientToColors: ['#fff'],
          inverseColors: false,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100]
        }
      },
      colors: ["#fff"],
      series: [80],
      stroke: {
        lineCap: 'round'
      },
      labels: ['Total'],

    }

    var chart = new ApexCharts(
      document.querySelector("#data-chart-20"),
      options
    );

    chart.render();
	
	
	
	
	// chart 21
	 
	 var options = {
      chart: {
        height: 220,
        type: 'radialBar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        radialBar: {
          //startAngle: -135,
          //endAngle: 225,
           hollow: {
            margin: 0,
            size: '70%',
            background: 'transparent',
            image: undefined,
            imageOffsetX: 0,
            imageOffsetY: 0,
            position: 'front',
            dropShadow: {
              enabled: true,
              top: 3,
              left: 0,
              blur: 4,

              opacity: 0.24
            }
          },
          track: {
            background: 'rgba(255, 255, 255, 0.25)',
            strokeWidth: '67%',
            margin: 0, // margin is in pixels
            dropShadow: {
              enabled: true,
              top: -3,
              left: 0,
              blur: 4,
			  color: 'rgba(0, 169, 255, 0.65)',
              opacity: 0.35
            }
          },

          dataLabels: { 
            showOn: 'always',
            name: {
              offsetY: -5,
              show: true,
              color: '#fff',
              fontSize: '14px'
            },
            value: {
              formatter: function (val) {
						return val + "%";
					},
              color: '#fff',
              fontSize: '20px',
              show: true,
			  offsetY: 10,
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'light',
          type: 'horizontal',
          shadeIntensity: 0.5,
          gradientToColors: ['#fff'],
          inverseColors: false,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100]
        }
      },
      colors: ["#fff"],
      series: [55],
      stroke: {
        lineCap: 'round'
      },
      labels: ['Total'],

    }

    var chart = new ApexCharts(
      document.querySelector("#data-chart-21"),
      options
    );

    chart.render();
	
	

	// chart 22
	 
	 var options = {
      chart: {
        height: 220,
        type: 'radialBar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        radialBar: {
          //startAngle: -135,
          //endAngle: 225,
           hollow: {
            margin: 0,
            size: '70%',
            background: 'transparent',
            image: undefined,
            imageOffsetX: 0,
            imageOffsetY: 0,
            position: 'front',
            dropShadow: {
              enabled: true,
              top: 3,
              left: 0,
              blur: 4,
              opacity: 0.24
            }
          },
          track: {
            background: 'rgba(255, 255, 255, 0.25)',
            strokeWidth: '67%',
            margin: 0, // margin is in pixels
            dropShadow: {
              enabled: true,
              top: -3,
              left: 0,
              blur: 4,
			  color: 'rgba(254, 197, 7, 0.55)',
              opacity: 0.55
            }
          },

          dataLabels: { 
            showOn: 'always',
            name: {
              offsetY: -5,
              show: true,
              color: '#fff',
              fontSize: '14px'
            },
            value: {
              formatter: function (val) {
						return val + "%";
					},
              color: '#fff',
              fontSize: '20px',
              show: true,
			  offsetY: 10,
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'light',
          type: 'horizontal',
          shadeIntensity: 0.5,
          gradientToColors: ['#fff'],
          inverseColors: false,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100]
        }
      },
      colors: ["#fff"],
      series: [65],
      stroke: {
        lineCap: 'round'
      },
      labels: ['Total'],

    }

    var chart = new ApexCharts(
      document.querySelector("#data-chart-22"),
      options
    );

    chart.render();
	
	
	
	// chart 23
	 
	 var options = {
      chart: {
        height: 220,
        type: 'radialBar',
        toolbar: {
          show: false
        }
      },
      plotOptions: {
        radialBar: {
         // startAngle: -135,
          //endAngle: 225,
           hollow: {
            margin: 0,
            size: '70%',
            background: 'transparent',
            image: undefined,
            imageOffsetX: 0,
            imageOffsetY: 0,
            position: 'front',
            dropShadow: {
              enabled: true,
              top: 3,
              left: 0,
              blur: 4,
              opacity: 0.24
            }
          },
          track: {
            background: 'rgba(255, 255, 255, 0.25)',
            strokeWidth: '67%',
            margin: 0, // margin is in pixels
            dropShadow: {
              enabled: true,
              top: -3,
              left: 0,
              blur: 4,
			  color: 'rgba(0, 128, 0, 0.56)',
              opacity: 0.35
            }
          },

          dataLabels: { 
            showOn: 'always',
            name: {
              offsetY: -5,
              show: true,
              color: '#fff',
              fontSize: '14px'
            },
            value: {
              formatter: function (val) {
						return val + "%";
					},
              color: '#fff',
              fontSize: '20px',
              show: true,
			  offsetY: 10,
            }
          }
        }
      },
      fill: {
        type: 'gradient',
        gradient: {
          shade: 'light',
          type: 'horizontal',
          shadeIntensity: 0.5,
          gradientToColors: ['#fff'],
          inverseColors: false,
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100]
        }
      },
      colors: ["#fff"],
      series: [75],
      stroke: {
        lineCap: 'round'
      },
      labels: ['Total'],

    }

    var chart = new ApexCharts(
      document.querySelector("#data-chart-23"),
      options
    );

    chart.render();
	
	
	//chart 24
	
	var options = {
            chart: {
                height: 250,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    //startAngle: -135,
                    //endAngle: 135,
                    hollow: {
                      margin: 0,
                      size: '70%',
                      background: 'transparent',
                      image: undefined,
                      imageOffsetX: 0,
                      imageOffsetY: 0,
                      position: 'front',
                      dropShadow: {
                        enabled: true,
                        top: 3,
                        left: 0,
                        blur: 4,
                        opacity: 0.24
                      }
                    },
                    track: {
                      background: 'rgba(255, 255, 255, 0.12)',
                      strokeWidth: '0%',
                      margin: 0, // margin is in pixels
                      dropShadow: {
                        enabled: true,
                        top: -3,
                        left: 0,
                        blur: 4,
                        opacity: 0.35
                      }
                    },
                    dataLabels: {
                        name: {
                            fontSize: '14px',
                            color: '#fff',
                            offsetY: -5
                        },
                        value: {
                            offsetY: 0,
                            fontSize: '20px',
                            color: '#fff',
                            formatter: function (val) {
                                return val + "%";
                            }
                        }
                    }
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    shadeIntensity: 0.15,
					gradientToColors: ['#fff'],
                    inverseColors: false,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 50, 65, 91]
                },
            },
            stroke: {
                dashArray: 4
            },
			colors: ["#fff"],
            series: [82],
            labels: ['Total'],
            
        }

       var chart = new ApexCharts(
            document.querySelector("#data-chart-24"),
            options
        );
        
        chart.render();

        // window.setInterval(function () {
        //     chart.updateSeries([Math.floor(Math.random() * (100 - 1 + 1)) + 1])
        // }, 2000)
		
		
		
	
	//chart 25
  
  var options = {
            chart: {
                height: 250,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    //startAngle: -135,
                    //endAngle: 135,
                    hollow: {
                      margin: 0,
                      size: '70%',
                      background: 'transparent',
                      image: undefined,
                      imageOffsetX: 0,
                      imageOffsetY: 0,
                      position: 'front',
                      dropShadow: {
                        enabled: true,
                        top: 3,
                        left: 0,
                        blur: 4,
                        opacity: 0.24
                      }
                    },
                    track: {
                      background: 'rgba(255, 255, 255, 0.12)',
                      strokeWidth: '0%',
                      margin: 0, // margin is in pixels
                      dropShadow: {
                        enabled: true,
                        top: -3,
                        left: 0,
                        blur: 4,
                        opacity: 0.35
                      }
                    },
                    dataLabels: {
                        name: {
                            fontSize: '14px',
                            color: '#fff',
                            offsetY: -10
                        },
                        value: {
                            offsetY: 0,
                            fontSize: '20px',
                            color: '#fff',
                            formatter: function (val) {
                                return val + "%";
                            }
                        }
                    }
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    shadeIntensity: 0.15,
                    gradientToColors: ['#fff'],
                    inverseColors: false,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 50, 65, 91]
                },
            },
            stroke: {
                dashArray: 4
            },
            colors: ["#fff"],
            series: [85],
            labels: ['Total'],
            
        }

       var chart = new ApexCharts(
            document.querySelector("#data-chart-25"),
            options
        );
        
        chart.render();

        // window.setInterval(function () {
        //     chart.updateSeries([Math.floor(Math.random() * (100 - 1 + 1)) + 1])
        // }, 2000)
	
	
	 //gauge chart 26
  
  var options = {
            chart: {
                height: 250,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    //startAngle: -135,
                    //endAngle: 135,
                    hollow: {
                      margin: 0,
                      size: '70%',
                      background: 'transparent',
                      image: undefined,
                      imageOffsetX: 0,
                      imageOffsetY: 0,
                      position: 'front',
                      dropShadow: {
                        enabled: true,
                        top: 3,
                        left: 0,
                        blur: 4,
                        opacity: 0.24
                      }
                    },
                    track: {
                      background: 'rgba(255, 255, 255, 0.12)',
                      strokeWidth: '0%',
                      margin: 0, // margin is in pixels
                      dropShadow: {
                        enabled: true,
                        top: -3,
                        left: 0,
                        blur: 4,
                        opacity: 0.35
                      }
                    },
                    dataLabels: {
                        name: {
                            fontSize: '14px',
                            color: '#fff',
                            offsetY: -10
                        },
                        value: {
                            offsetY: 0,
                            fontSize: '20px',
                            color: '#fff',
                            formatter: function (val) {
                                return val + "%";
                            }
                        }
                    }
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    shadeIntensity: 0.15,
                    gradientToColors: ['#fff'],
                    inverseColors: false,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 50, 65, 91]
                },
            },
            stroke: {
                dashArray: 4
            },
            colors: ["#fff"],
            series: [79],
            labels: ['Total'],
            
        }

       var chart = new ApexCharts(
            document.querySelector("#data-chart-26"),
            options
        );
        
        chart.render();

        // window.setInterval(function () {
        //     chart.updateSeries([Math.floor(Math.random() * (100 - 1 + 1)) + 1])
        // }, 2000)
		
	
   //chart 27
  
  var options = {
            chart: {
                height: 250,
                type: 'radialBar',
            },
            plotOptions: {
                radialBar: {
                    //startAngle: -135,
                    //endAngle: 135,
                    hollow: {
                      margin: 0,
                      size: '70%',
                      background: 'transparent',
                      image: undefined,
                      imageOffsetX: 0,
                      imageOffsetY: 0,
                      position: 'front',
                      dropShadow: {
                        enabled: true,
                        top: 3,
                        left: 0,
                        blur: 4,
                        opacity: 0.24
                      }
                    },
                    track: {
                      background: 'rgba(255, 255, 255, 0.12)',
                      strokeWidth: '0%',
                      margin: 0, // margin is in pixels
                      dropShadow: {
                        enabled: true,
                        top: -3,
                        left: 0,
                        blur: 4,
                        opacity: 0.35
                      }
                    },
                    dataLabels: {
                        name: {
                            fontSize: '14px',
                            color: '#fff',
                            offsetY: -10
                        },
                        value: {
                            offsetY: 0,
                            fontSize: '20px',
                            color: '#fff',
                            formatter: function (val) {
                                return val + "%";
                            }
                        }
                    }
                }
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    shadeIntensity: 0.15,
                    gradientToColors: ['#fff'],
                    inverseColors: false,
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 50, 65, 91]
                },
            },
            stroke: {
                dashArray: 4
            },
            colors: ["#fff"],
            series: [90],
            labels: ['Total'],
            
        }

       var chart = new ApexCharts(
            document.querySelector("#data-chart-27"),
            options
        );
        
        chart.render();

        // window.setInterval(function () {
        //     chart.updateSeries([Math.floor(Math.random() * (100 - 1 + 1)) + 1])
        // }, 2000)
	 
	 
	 

	  	
	  
});		