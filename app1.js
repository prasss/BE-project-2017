$(document).ready(function(){
	$.ajax({
		url: "http://10.42.0.64/test_connect.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var value = [];
			var time = [];

			for(var i in data) {
				time.push(data[i].time);
				value.push(data[i].value);
				
			}
			
			

			var chartdata = {
				labels: time,
				datasets : [
					{
						label: 'power values',
						backgroundColor: 'rgba(200, 0, 0, 0.75)',
						borderColor: 'rgba(200, 0, 0, 0.75)',
						hoverBackgroundColor: 'rgba(200,200, 200, 1)',
						hoverBorderColor: 'rgba(200, 200, 200, 1)',
						data: value
					}
				]
			};

			
			var ctx = $("#mycanvas");
            //ctx.height = 800;
			var barGraph = new Chart(ctx, {
				type: 'line',
				data: chartdata,
				
				options: {
         tooltips: {
          mode: 'label'
      },
      responsive: true,
      scales: {
          
          yAxes: [{
              

              stacked: true,
               ticks: {
                  min: 200,
                  stepSize: 10
                
              }
		  }] }
          }
	  });	
		
		
		},
		
			
		error: function(data) {
			console.log(data);
		}
	});
});
