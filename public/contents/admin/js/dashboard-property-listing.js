$(function() {
    "use strict";
	  
	  // chart 1
	 
		  var ctx = document.getElementById('dash2-chart1').getContext('2d');
		
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
					datasets: [{
						label: 'Orders',
						data: [25, 23, 27, 15, 27, 23, 31, 41, 31, 25, 35, 25, 30],
						backgroundColor: 'rgba(255, 255, 255, 0.12)',
						borderColor: "transparent",
						borderWidth: 3
					}, {
						label: 'Payments',
						type: 'line',
						data: [10, 8, 12, 5, 12, 8, 16, 25, 15, 10, 20, 10, 15],
						backgroundColor: "rgba(255, 255, 255, 0.12)",
						borderColor: "#fff",
						pointBackgroundColor:'transparent',
                        pointHoverBackgroundColor:'#fff',
						pointBorderWidth :3,
						pointRadius :4,
						pointHoverRadius :4,
						borderWidth: 3
						
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
					  display: true ,
					  color: "rgba(221, 221, 221, 0.08)"
					},
				  }],
				   yAxes: [{
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
			
			
	
	  });	