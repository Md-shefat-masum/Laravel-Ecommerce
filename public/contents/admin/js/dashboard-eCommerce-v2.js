$(function() {
    "use strict";

	
	// chart 1
	
	
	var options = {
            chart: {
                height: 35,
                type: 'line',
                zoom: {
                      enabled: false
                    },
             foreColor: 'rgba(255, 255, 255, 0.65)',
             toolbar: {
                  show: false
                },
          sparkline:{
              enabled:true,
            },
            dropShadow: {
                    enabled: true,
                    top: 1,
					left: 1,
					blur: 2,
					opacity: 0.12,
                }
            },
            plotOptions: {
                bar: {
            columnWidth: '10%',
              endingShape: 'rounded',
                    dataLabels: {
                        position: 'top', // top, center, bottom
                    },
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: 2.5, 
                curve: 'straight'
            },
            series: [{
                name: 'Orders',
                data: [25, 66, 41, 59, 25, 44, 12, 36, 9, 21]
            }],

            xaxis: {
                type: 'month',
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],                
            },
            yaxis: {
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false,
                },
                labels: {
                    show: false,
                    formatter: function(val) {
                    return parseInt(val);
                  }
                }

            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    gradientToColors: ['#fff'],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 80, 100]
                },
            },
            colors: ['#fff'],
            legend: {
                show: 0,
                position: "top",
                horizontalAlign: "center",
                offsetX: -20,
                fontSize: "12px",
                markers: {
                  radius: 50,
                  width: 10,
                  height: 10
                }
              },
            grid:{
                show: false,
                borderColor: 'rgba(66, 59, 116, 0.12)',
            },
            tooltip: {
                theme: 'dark',
                x: {
                    show: false
                },

            }
        }

        var chart = new ApexCharts(
            document.querySelector("#chart1"),
            options
        );

        chart.render();
	
	
	
	
	
	
	// chart 2
	
	
	var options = {
            chart: {
                height: 35,
                type: 'line',
                zoom: {
                      enabled: false
                    },
             foreColor: 'rgba(255, 255, 255, 0.65)',
             toolbar: {
                  show: false
                },
          sparkline:{
              enabled:true,
            },
            dropShadow: {
                    enabled: true,
                    top: 1,
					left: 1,
					blur: 2,
					opacity: 0.12,
                }
            },
            plotOptions: {
                bar: {
            columnWidth: '10%',
              endingShape: 'rounded',
                    dataLabels: {
                        position: 'top', // top, center, bottom
                    },
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: 2.5, 
                curve: 'straight'
            },
            series: [{
                name: 'Orders',
                data: [12, 14, 2, 47, 32, 44, 14, 55, 41, 69]
            }],

            xaxis: {
                type: 'month',
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],                
            },
            yaxis: {
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false,
                },
                labels: {
                    show: false,
                    formatter: function(val) {
                    return parseInt(val);
                  }
                }

            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'dark',
                    gradientToColors: ['#fff'],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 80, 100]
                },
            },
            colors: ['#fff'],
            legend: {
                show: 0,
                position: "top",
                horizontalAlign: "center",
                offsetX: -20,
                fontSize: "12px",
                markers: {
                  radius: 50,
                  width: 10,
                  height: 10
                }
              },
            grid:{
                show: false,
                borderColor: 'rgba(66, 59, 116, 0.12)',
            },
            tooltip: {
                theme: 'dark',
                x: {
                    show: false
                },

            }
        }

        var chart = new ApexCharts(
            document.querySelector("#chart2"),
            options
        );

        chart.render();
	
	
	
	
	
	// chart 3
	
	
	var options = {
            chart: {
                height: 35,
                type: 'line',
                zoom: {
                      enabled: false
                    },
             foreColor: 'rgba(255, 255, 255, 0.65)',
             toolbar: {
                  show: false
                },
          sparkline:{
              enabled:true,
            },
            dropShadow: {
                    enabled: true,
                    top: 1,
					left: 1,
					blur: 2,
					opacity: 0.12,
                }
            },
            plotOptions: {
                bar: {
            columnWidth: '10%',
              endingShape: 'rounded',
                    dataLabels: {
                        position: 'top', // top, center, bottom
                    },
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: 2.5, 
                curve: 'straight'
            },
            series: [{
                name: 'Orders',
                data: [47, 45, 74, 32, 56, 31, 44, 33, 45, 19]
            }],

            xaxis: {
                type: 'month',
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],                
            },
            yaxis: {
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false,
                },
                labels: {
                    show: false,
                    formatter: function(val) {
                    return parseInt(val);
                  }
                }

            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'light',
                    gradientToColors: ['#fff'],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 80, 100]
                },
            },
            colors: ['#fff'],
            legend: {
                show: 0,
                position: "top",
                horizontalAlign: "center",
                offsetX: -20,
                fontSize: "12px",
                markers: {
                  radius: 50,
                  width: 10,
                  height: 10
                }
              },
            grid:{
                show: false,
                borderColor: 'rgba(66, 59, 116, 0.12)',
            },
            tooltip: {
                theme: 'dark',
                x: {
                    show: false
                },

            }
        }

        var chart = new ApexCharts(
            document.querySelector("#chart3"),
            options
        );

        chart.render();
		
		
		
		
   // chart 4
	
	
	var options = {
            chart: {
                height: 35,
                type: 'line',
                zoom: {
                      enabled: false
                    },
             foreColor: 'rgba(255, 255, 255, 0.65)',
             toolbar: {
                  show: false
                },
          sparkline:{
              enabled:true,
            },
            dropShadow: {
                    enabled: true,
                    top: 1,
					left: 1,
					blur: 2,
					opacity: 0.12,
                }
            },
            plotOptions: {
                bar: {
            columnWidth: '10%',
              endingShape: 'rounded',
                    dataLabels: {
                        position: 'top', // top, center, bottom
                    },
                }
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                width: 2.5, 
                curve: 'straight'
            },
            series: [{
                name: 'Orders',
                data: [15, 75, 47, 65, 14, 32, 19, 54, 44, 61]
            }],

            xaxis: {
                type: 'month',
                categories: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct"],                
            },
            yaxis: {
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false,
                },
                labels: {
                    show: false,
                    formatter: function(val) {
                    return parseInt(val);
                  }
                }

            },
            fill: {
                type: 'gradient',
                gradient: {
                    shade: 'light',
                    gradientToColors: ['#fff'],
                    shadeIntensity: 1,
                    type: 'horizontal',
                    opacityFrom: 1,
                    opacityTo: 1,
                    stops: [0, 80, 100]
                },
            },
            colors: ['#fff'],
            legend: {
                show: 0,
                position: "top",
                horizontalAlign: "center",
                offsetX: -20,
                fontSize: "12px",
                markers: {
                  radius: 50,
                  width: 10,
                  height: 10
                }
              },
            grid:{
                show: false,
                borderColor: 'rgba(66, 59, 116, 0.12)',
            },
            tooltip: {
                theme: 'dark',
                x: {
                    show: false
                },

            }
        }

        var chart = new ApexCharts(
            document.querySelector("#chart4"),
            options
        );

        chart.render();
	
	
	
	
	
	// chart 5
	
	
	 var ctx = document.getElementById('chart5').getContext('2d');

			var myChart = new Chart(ctx, {
				type: 'line',
				data: {
					labels: ['Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa', 'Su'],
					datasets: [{
						label: 'Visits',
						data: [33, 43, 43, 63, 53, 76, 63],
						backgroundColor: '#fff',
						borderColor: 'transparent',
						pointRadius :"0",
						pointHoverRadius:"0",
						borderWidth: 5
					}, {
						label: 'Sales',
						data: [43, 59, 67, 91, 83, 106, 93],
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
  
	
	// chart 6
	
	var ctx = document.getElementById('chart6').getContext('2d');

		  var gradientStroke = ctx.createLinearGradient(0, 0, 0, 300);
		      gradientStroke.addColorStop(0, 'rgba(255, 255, 255, 0.9)');  
		      gradientStroke.addColorStop(1, 'rgba(255, 255, 255, 0.1)'); 

			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun"],
					datasets: [{
						label: 'Sales',
						data: [9, 7, 14, 10, 12, 8],
						backgroundColor: gradientStroke,
						hoverBackgroundColor: gradientStroke,
						borderColor: "#fff",
						pointRadius :6,
						pointHoverRadius :6,
						pointHoverBackgroundColor: "#fff",
						borderWidth: 2

					}]
				},
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
				  	barPercentage: .4,
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: false ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }],
				   yAxes: [{
					ticks: {
						beginAtZero:true,
						fontColor: '#ddd'
					},
					gridLines: {
					  display: false ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }]
				 }

			 }
			}); 
	
	
  // chart 7
	 
   var options = {
      chart: {
        height: 290,
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
              fontSize: '40px',
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
      labels: ['Monthly Revenue'],

    }

    var chart = new ApexCharts(
      document.querySelector("#chart7"),
      options
    );

    chart.render();


	

	// chart 8
	 
	var options = {
      chart: {
        height: 290,
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
              fontSize: '40px',
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
      labels: ['Weekly Revenue'],

    }

    var chart = new ApexCharts(
      document.querySelector("#chart8"),
      options
    );

    chart.render();	 

	
	
   // chart 9
   
		 
   var options = {
      chart: {
        height: 290,
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
              fontSize: '40px',
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
      labels: ['Daily Revenue'],

    }

    var chart = new ApexCharts(
      document.querySelector("#chart9"),
      options
    );

    chart.render(); 
		 
		 
		 
            
      //chart 10
	  
		var ctx = document.getElementById("chart10").getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'doughnut',
				data: {
					labels: ["Google Chrome", "Opera", "Firefox"],
					datasets: [{
						backgroundColor: [
							"#ffffff",
							"rgba(255, 255, 255, 0.50)",
							"rgba(255, 255, 255, 0.25)"
						],
						data: [5856, 2602, 1802],
						borderWidth: [0, 0, 0]
					}]
				},
			options: {
				cutoutPercentage: 60,
				maintainAspectRatio: false,
			   legend: {
				 position :"bottom",	
				 display: false,
				    labels: {
					  fontColor: '#ddd',  
					  boxWidth:15
				   }
				}
				,
				tooltips: {
				  displayColors:false
				}
			   }
			});

             
        /*  var options = {
            chart: {
                width: 300,
                type: 'donut',
                foreColor: 'rgba(255, 255, 255, 0.85)',
            },
            dataLabels: {
                enabled: true
            },
            series: [44, 55, 60],
            fill: {
                type: 'gradient',
                gradient: {
                    gradientToColors: [ '#ee0979', '#08a50e', '#2575fc'],
                },
            },
            colors: ["#ff6a00", "#cddc35", '#6a11cb'],
            tooltip: {
                  enabled: false,
                  theme: 'dark',
              },
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
            document.querySelector("#chart10"),
            options
        );

        chart.render(); */



    // chart 11
	 
	var options = {
      chart: {
        height: 175,
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
              offsetY: -0,
              show: false,
              color: '#fff',
              fontSize: '16px'
            },
            value: {
              formatter: function(val) {
                return val + "%";
              },
			  offsetY: 8,
              color: '#fff',
              fontSize: '19px',
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
	  responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        height: 230
                    }
                }
            }]

    }

    var chart = new ApexCharts(
      document.querySelector("#chart11"),
      options
    );

    chart.render();

    
	
	 // chart 12
	 
	 var options = {
      chart: {
        height: 175,
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
              offsetY: -0,
              show: false,
              color: '#fff',
              fontSize: '16px'
            },
            value: {
              formatter: function(val) {
                return val + "%";
              },
			  offsetY: 8,
              color: '#fff',
              fontSize: '19px',
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
      series: [45],
      stroke: {
        lineCap: 'round'
      },
      labels: ['Percent'],
	  responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        height: 230
                    }
                }
            }]

    }

    var chart = new ApexCharts(
      document.querySelector("#chart12"),
      options
    );

    chart.render();
	
	
	
	 // chart 13
	 
	 var options = {
      chart: {
        height: 175,
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
              offsetY: -0,
              show: false,
              color: '#fff',
              fontSize: '16px'
            },
            value: {
              formatter: function(val) {
                return val + "%";
              },
			  offsetY: 8,
              color: '#fff',
              fontSize: '19px',
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
      series: [55],
      stroke: {
        lineCap: 'round'
      },
      labels: ['Percent'],
	  responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        height: 230
                    }
                }
            }]

    }

    var chart = new ApexCharts(
      document.querySelector("#chart13"),
      options
    );

    chart.render();
	
	
	// chart 14
	 
	 var options = {
      chart: {
        height: 175,
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
              offsetY: -0,
              show: false,
              color: '#fff',
              fontSize: '16px'
            },
            value: {
              formatter: function(val) {
                return val + "%";
              },
			  offsetY: 8,
              color: '#fff',
              fontSize: '19px',
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
      series: [80],
      stroke: {
        lineCap: 'round'
      },
      labels: ['Percent'],
	  responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        height: 230
                    }
                }
            }]

    }

    var chart = new ApexCharts(
      document.querySelector("#chart14"),
      options
    );

    chart.render();
	
	
	
	// chart 15
	 
	 var options = {
      chart: {
        height: 175,
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
              offsetY: -0,
              show: false,
              color: '#fff',
              fontSize: '16px'
            },
            value: {
              formatter: function(val) {
                return val + "%";
              },
			  offsetY: 8,
              color: '#fff',
              fontSize: '19px',
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
      series: [65],
      stroke: {
        lineCap: 'round'
      },
      labels: ['Percent'],
	  responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        height: 230
                    }
                }
            }]

    }

    var chart = new ApexCharts(
      document.querySelector("#chart15"),
      options
    );

    chart.render();
	
	
	
	// chart 16
	 
	 var options = {
      chart: {
        height: 175,
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
              offsetY: -0,
              show: false,
              color: '#fff',
              fontSize: '16px'
            },
            value: {
              formatter: function(val) {
                return val + "%";
              },
			  offsetY: 8,
              color: '#fff',
              fontSize: '19px',
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
      series: [70],
      stroke: {
        lineCap: 'round'
      },
      labels: ['Percent'],
	  responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        height: 230
                    }
                }
            }]

    }

    var chart = new ApexCharts(
      document.querySelector("#chart16"),
      options
    );

    chart.render();
	
	
	
	 	
// worl map

$(function(){
    
       $('#world-map').vectorMap({

       	backgroundColor: 'transparent',
       	borderColor: '#818181',
        borderOpacity: 0.25,
        regionStyle : {
	        initial : {
	          fill : 'rgba(255, 255, 255, 0.35)'
	        }
	      },
      
        onRegionClick: function(event, code){
            code = code.toLowerCase();
            if(countries.indexOf(code) == -1)
                code = 'us';
            window.location = 'http://www.microstrategy.com/' + code;
        },
        series: {
            regions: [{
                values: {
                    IN:'#fff',
                    US:'#fff',
                    RU:'#fff',
                    AU:'#fff'
                }
            }]
        }
     
    });
 
})



    });