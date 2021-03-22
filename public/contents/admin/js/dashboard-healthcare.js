$(function() {
    "use strict";


// chart 1

    /* var options = {
            chart: {
                height: 340,
                type: 'area',
                stacked: false,
                foreColor: 'rgba(255, 255, 255, 0.65)',
                toolbar: {
                      show: false
                    },
                dropShadow: {
                    enabled: false,
                    opacity: 0.1,
                    blur: 3,
                    left: -7,
                    top: 22,
                }
            },
            plotOptions: {
                bar: {
            columnWidth: '30%',
              endingShape: 'rounded',
                    dataLabels: {
                        position: 'top', // top, center, bottom
                    },
                }
            },
            dataLabels: {
                enabled: false,
                formatter: function(val) {
                  return parseInt(val);
                },
                offsetY: -20,
                style: {
                    fontSize: '14px',
                    colors: ["#304758"]
                }
            },
            stroke: {
                show: true,
                width: [5, 5],
                dashArray: [0, 0],
                curve: 'smooth'
               // colors: ['transparent']
            },
            grid:{
                show: true,
                borderColor: 'rgba(255, 255, 255, 0.12)',
            },
            series: [{
                name: 'Outpatients',
                data: [44, 75, 37, 56, 61, 58, 83, 60, 66, 70, 55, 60]
            },{
                name: 'Inpatients',
                data: [20, 41, 26, 46, 30, 50, 52, 53, 41, 30, 40, 25]
            }],
            xaxis: {
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    gradientToColors: [ '#fff', '#fff'],
                    shadeIntensity: 1,
                    type: 'vertical',
                    opacityFrom: 0.8,
                    opacityTo: 0.2,
                    stops: [0, 100, 100, 100]
                },
            },
            colors: ["#fff", '#fff'],
            tooltip: {
                theme: 'dark',
                y: {
                    formatter: function (val) {
                        return " " + val + " "
                    }
                }
            },
            title: {
				text: 'Outpatients vs Inpatients Trend',
				floating: true,
				offsetY: 0,
				align: 'center',
				style: {
				fontSize: '15px',
					color: '#fff'
				}
			},
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                  height: 330,
                  stacked: true,
                          },
                legend: {
                  show: !0,
                  position: "bottom",
                  horizontalAlign: "center",
                  offsetX: -20,
                  fontSize: "10px",
                  markers: {
                    radius: 50,
                    width: 10,
                    height: 10
                  }
                  },
                  plotOptions: {
                  bar: {
                    columnWidth: '30%'
                    }
                  }
                      }
                  }]
        }

        var chart = new ApexCharts(
            document.querySelector("#Outpatients-vs-Inpatients-Trend"),
            options
        );

        chart.render(); */
		
		
		
		
		
		
		var ctx = document.getElementById('Outpatients-vs-Inpatients-Trend').getContext('2d');

			var myChart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
					datasets: [{
						label: 'Inpatients',
						data: [20, 41, 26, 46, 30, 50, 52, 53, 41, 30, 40, 25],
						backgroundColor: '#fff',
						borderColor: 'transparent',
						pointRadius :"0",
						pointHoverRadius:"0",
						borderWidth: 5
					}, {
						label: 'Outpatients',
						data: [4, 75, 37, 56, 61, 58, 83, 60, 66, 70, 55, 60],
						backgroundColor: 'rgba(255, 255, 255, 0.15)',
						borderColor: 'transparent',
						pointRadius :"0",
						pointHoverRadius:"0",
						borderWidth: 5
					}]
				},
			options: {
				maintainAspectRatio: false,
				legend: {
				  display: true,
				  labels: {
					fontColor: '#ddd',  
					boxWidth:20
				  }
				},
				tooltips: {
				  enabled:false,
				  displayColors:false,
				},	
			  scales: {
				  xAxes: [{
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(255, 255, 255, 0.08)"
					},
				  }],
				   yAxes: [{
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: true ,
					  color: "rgba(255, 255, 255, 0.08)"
					},
				  }]
				 }

			 }
			}); 
		
		
		
		
		
		
		
		
		
		



  // chart 2


var options = {
            chart: {
                height: 350,
                type: 'bar',
                toolbar: {
                      show: false
                    },
			    foreColor: 'rgba(255, 255, 255, 0.65)',
            },
            plotOptions: {
                bar: {
                	endingShape: 'rounded',
                	distributed: true,
                    horizontal: true,
                }
            },
            dataLabels: {
                enabled: true
            },
            series: [{
            	name: 'Time',
                data: [20, 35, 30, 15, 28, 36, 42]
            }],
            xaxis: {
                categories: ['Cardiology', 'Dermatology', 'Gynaecology', 'Neurology', 'Oncology', 'Orthopaedics', 'Surgery'],
            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'light',
                    gradientToColors: [ '#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff'],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityTo: 0.9,
					opacityFrom: 0.2,
                    stops: [0, 100, 100, 100]
                },
            },
            colors: ['#fff', '#fff', '#fff', '#fff', '#fff', '#fff', '#fff'],
			grid:{
                show: true,
                borderColor: 'rgba(255, 255, 255, 0.15)',
            },
            tooltip: {
                theme: 'dark',
                x:{
                   show: 1
                },
                y: {
                    formatter: function (val) {
                        return "20Min"
                    }
                }
            }
        }

       var chart = new ApexCharts(
            document.querySelector("#Avg-Waiting-Time-By-Division"),
            options
        );
        
        chart.render();




   // chart 7
	 
   var options = {
      chart: {
        height: 260,
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
            size: '85%',
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
              //color: 'rgba(246, 181, 49, 0.65)',
              opacity: 0.12
            }
          },
          track: {
            background: 'rgba(255, 255, 255, 0.15)',
            strokeWidth: '30%',
            margin: 0, // margin is in pixels
            dropShadow: {
              enabled: true,
              top: -3,
              left: 0,
              blur: 4,
			  //color: 'rgba(246, 181, 49, 0.65)',
              opacity: 0.12
            }
          },

          dataLabels: { 
            showOn: 'always',
            name: {
              offsetY: -20,
              show: true,
              color: '#fff',
              fontSize: '15px'
            },
            value: {
              formatter: function (val) {
						return val + "%";
					},
              color: '#fff',
              fontSize: '35px',
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
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100]
        }
      },
      colors: ["#fff"],
      series: [64],
      stroke: {
        //lineCap: 'round',
        dashArray: 4
      },
      labels: ['Excellent'],

    }

    var chart = new ApexCharts(
      document.querySelector("#excellent-satisfaction"),
      options
    );

    chart.render();

 


// chart 8
	 
	var options = {
      chart: {
        height: 260,
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
            size: '85%',
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
              //color: 'rgba(209, 58, 223, 0.65)',
              opacity: 0.12
            }
          },
          track: {
            background: 'rgba(255, 255, 255, 0.15)',
            strokeWidth: '30%',
            margin: 0, // margin is in pixels
            dropShadow: {
              enabled: true,
              top: -3,
              left: 0,
              blur: 4,
			  //color: 'rgba(209, 58, 223, 0.65)',
              opacity: 0.12
            }
          },

          dataLabels: { 
            showOn: 'always',
            name: {
              offsetY: -20,
              show: true,
              color: '#fff',
              fontSize: '15px'
            },
            value: {
              formatter: function (val) {
						return val + "%";
					},
              color: '#fff',
              fontSize: '35px',
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
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100]
        }
      },
      colors: ["#fff"],
      series: [68],
      stroke: {
        //lineCap: 'round',
        dashArray: 4
      },
      labels: ['Good'],

    }

    var chart = new ApexCharts(
      document.querySelector("#good-satisfaction"),
      options
    );

    chart.render();	 


// chart 8
	 
	var options = {
      chart: {
        height: 260,
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
            size: '85%',
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
              //color: 'rgba(209, 58, 223, 0.65)',
              opacity: 0.12
            }
          },
          track: {
            background: 'rgba(255, 255, 255, 0.15)',
            strokeWidth: '30%',
            margin: 0, // margin is in pixels
            dropShadow: {
              enabled: true,
              top: -3,
              left: 0,
              blur: 4,
			  //color: 'rgba(209, 58, 223, 0.65)',
              opacity: 0.12
            }
          },

          dataLabels: { 
            showOn: 'always',
            name: {
              offsetY: -20,
              show: true,
              color: '#fff',
              fontSize: '15px'
            },
            value: {
              formatter: function (val) {
						return val + "%";
					},
              color: '#fff',
              fontSize: '35px',
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
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100]
        }
      },
      colors: ["#fff"],
      series: [82],
      stroke: {
        //lineCap: 'round',
        dashArray: 4
      },
      labels: ['Positive'],

    }

    var chart = new ApexCharts(
      document.querySelector("#positive-satisfaction"),
      options
    );

    chart.render();	 


// chart 9
   
		 
   var options = {
      chart: {
        height: 260,
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
            size: '85%',
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
              //color: 'rgba(8, 165, 14, 0.65)',
              opacity: 0.12
            }
          },
          track: {
            background: 'rgba(255, 255, 255, 0.15)',
            strokeWidth: '30%',
            margin: 0, // margin is in pixels
            dropShadow: {
              enabled: true,
              top: -3,
              left: 0,
              blur: 4,
			  //color: 'rgba(8, 165, 14, 0.65)',
              opacity: 0.12
            }
          },

          dataLabels: { 
            showOn: 'always',
            name: {
              offsetY: -20,
              show: true,
              color: '#fff',
              fontSize: '15px'
            },
            value: {
              formatter: function (val) {
						return val + "%";
					},
              color: '#fff',
              fontSize: '35px',
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
          opacityFrom: 1,
          opacityTo: 1,
          stops: [0, 100]
        }
      },
      colors: ["#fff"],
      series: [74],
      stroke: {
        //lineCap: 'round',
        dashArray: 4
      },
      labels: ['Negative'],

    }

    var chart = new ApexCharts(
      document.querySelector("#negative-satisfaction"),
      options
    );

    chart.render(); 





















    });