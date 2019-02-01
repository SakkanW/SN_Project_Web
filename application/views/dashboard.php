	<div id="page-wrapper">
			<div class="main-page">
				<div class="charts">
					<center><h3 class="title1">จำนวนผู้เข้าร่วมโครงการในแต่ละปี</h3></center>
					<div class="widget-shadow">
						<canvas id="line" height="300" width="400" style="width: 400px; height: 300px;"></canvas>
					</div>

					<div class="clearfix"> </div>
							 <script>
								var lineChartData = {
									labels : ["2016","2017","2018","2019"],
									datasets : [
										{
											fillColor : "rgba(97, 100, 193, 1)",
											strokeColor : "#6164C1",
											pointColor : "rgba(97, 100, 193,1)",
											pointStrokeColor : "#9358ac",
											data : [50,40,60,70]
										}
									]
								};
							new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
							</script>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>