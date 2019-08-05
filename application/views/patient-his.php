<div id="page-wrapper">
			<div class="main-page">
			
			
				<div class="forms">
					<h3 class="title1 serif">ผลการประเมินอาหาร:</h3>
					<div class="charts">
					<!-- <div class="col-md-4 charts-grids widget">
						<h4 class="title">Bar Chart Example</h4>
						<canvas id="bar" height="300" width="400"> </canvas>
					</div> -->
					<!-- <div class="col-md-4 charts-grids widget states-mdl">
						<h4 class="title">Line Chart Example</h4>
						<canvas id="line" height="300" width="400"> </canvas>
					</div> -->
					<!-- <div class="col-md-4 charts-grids widget">
						<h4 class="title">Pie Chart Example</h4>
						<canvas id="pie" height="300" width="400"> </canvas>
					</div> -->
					<div class="clearfix"> </div>
							 <script>
								var barChartData = {
									labels : ["Jan","Feb","March","April","May","June","July"],
									datasets : [
										{
											fillColor : "rgba(233, 78, 2, 0.9)",
											strokeColor : "rgba(233, 78, 2, 0.9)",
											highlightFill: "#e94e02",
											highlightStroke: "#e94e02",
											data : [65,59,90,81,56,55,40]
										},
										{
											fillColor : "rgba(79, 82, 186, 0.9)",
											strokeColor : "rgba(79, 82, 186, 0.9)",
											highlightFill: "#4F52BA",
											highlightStroke: "#4F52BA",
											data : [40,70,55,20,45,70,60]
										}
									]
									
								};
								var lineChartData = {
									// labels : ["Jan","Feb","March","April","May","June","July"],
									labels : ["1","2","3","4","5","6","7","8","9","10"],
									datasets : [
										{
											fillColor : "rgba(242, 179, 63, 1)",
											strokeColor : "#F2B33F",
											pointColor : "rgba(242, 179, 63, 1)",
											pointStrokeColor : "#fff",
											data : [70,60,72,61,75,59,80]

										},
										{
											fillColor : "rgba(97, 100, 193, 1)",
											strokeColor : "#6164C1",
											pointColor : "rgba(97, 100, 193,1)",
											pointStrokeColor : "#9358ac",
											data : [50,65,51,67,52,64,50]

										}
									]
									
								};
								var pieData = [
										{
											value: 90,
											color:"rgba(233, 78, 2, 1)",
											label: "Product 1"
										},
										{
											value : 50,
											color : "rgba(242, 179, 63, 1)",
											label: "Product 2"
										},
										{
											value : 60,
											color : "rgba(88, 88, 88,1)",
											label: "Product 3"
										},
										{
											value : 40,
											color : "rgba(79, 82, 186, 1)",
											label: "Product 4"
										}
										
									];
								
							new Chart(document.getElementById("line").getContext("2d")).Line(lineChartData);
							new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
							new Chart(document.getElementById("pie").getContext("2d")).Pie(pieData);
							
							</script>
							
				</div>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
					<div class="form-title">
							<h4 class="text-right serif"><?php echo $patient_info->fname?> <?php echo $patient_info->lname?></h4>
					</div>
					

					<div class="clearfix"> </div>
					<!-- <div><h4 class="serif">ตารางแสดงการประเมินอาหาร</h4></div> -->
					<table id="dataTables" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
						<thead>
						<tr class="serif">
							<th class="th-sm">ลำดับ
							</th>
							<th class="th-sm">วันที่
							</th>
							<th class="th-sm">พลังงานรวม
							</th>
							<th class="th-sm">โปรตีนรวม
							</th>
							<th class="th-sm">โซเดียมรวม
							</th>
							
							<th class="th-sm">ผลการประเมิน
							</th>
							
						</tr>
						</thead>
						<tbody>
						<?php
						function quantity_energy($age)
						{
							if($age>=60)
							{
								return 30;
							}else{
								return 35;
							}
						}
						function age_acl($birthday)
						{
							 $from = new DateTime($birthday);
							$to   = new DateTime('today');
							return $from->diff($to)->y;
						}
						function get_total_energy($date_food,$patient_nutri)
						{
							$total_energy = 0;
							foreach($patient_nutri as $row){
								if($row->date_food == $date_food)
								{
									$total_energy = $total_energy+($row->energy)*($row->quantity);
								}
							}
							return $total_energy;
						}
						function get_total_protein($date_food,$patient_nutri)
						{
							$total_protein = 0;
							foreach($patient_nutri as $row){
								if($row->date_food == $date_food)
								{
									$total_protein = $total_protein+($row->protein)*($row->quantity);
								}
							}
							return $total_protein;
						}
						function get_total_sodium($date_food,$patient_nutri)
						{
							$total_sodium = 0;
							foreach($patient_nutri as $row){
								if($row->date_food == $date_food)
								{
									$total_sodium = $total_sodium+($row->sodium)*($row->quantity); 
								}
							}
							return $total_sodium;
						}
						$i= 1;
						$date_food_tmp='';
					
							foreach($patient_nutri as $row)
							{  
								
								?>
								<?php if($date_food_tmp != $row->date_food )
									{
										?>
								<tr class="serif">
									<td><?php echo $i ?></td>
									
									<td>
										<?php echo thai_date_fullmonth(strtotime($row->date_food)) ;//echo date('d/m/Y' ,strtotime($row->date_food));?></a>
										<?php  $date_food_tmp=$row->date_food;?>
									</td>
									
									<td><?php echo  get_total_energy($row->date_food,$patient_nutri);?> kcal <?php //echo quantity_energy(age_acl($patient_info->birthday))*$patient_info->weight?><?php if(get_total_energy($row->date_food,$patient_nutri) >= quantity_energy(age_acl($patient_info->birthday))*$patient_info->weight) { echo'<span class="label label-danger">เกิน</span>';} else {echo '<span class="label label-success">ไม่เกิน</span>';}?></td>
									<td><?php echo  get_total_protein($row->date_food,$patient_nutri);?> กรัม <?php if(get_total_protein($row->date_food,$patient_nutri) > $patient_info->weight * 0.6) { echo'<span class="label label-danger">เกิน</span>';} else {echo '<span class="label label-success">ไม่เกิน</span>';}?></td>
									<td><?php echo  get_total_sodium($row->date_food,$patient_nutri);?> มิลลิกรัม <?php if(get_total_sodium($row->date_food,$patient_nutri) > 1999) { echo'<span class="label label-danger">เกิน</span>';} else {echo '<span class="label label-success">ไม่เกิน</span>';}?></td>
									<td>
										<center>
											<!-- <input type="button" class="btn btn-default view_data" value="View Info" id="<?php echo  $patient_info->id; ?>"> -->
											<button  data-toggle="modal" class="btn btn-default view_data" id="<?php echo  $patient_info->id; ?>" day="<?php echo  $row->date_food;  ?>"  date_for_show="<?php echo thai_date_fullmonth(strtotime($row->date_food)) ;?>">ดูผลลัพธ์</button>
										</center>
									</td>
								</tr>
								<?php
								$i++;
								}
							}?>
						
						</tbody>
					</table>
						</div>
					</div>
					<!-- <h2 class="test">This is a heading</h2>

<p class="test">This is a paragraph.</p>
<p>This is another paragraph.</p>

<button>Click me</button>
					<button href="#patientModal" id="openBtn" data-toggle="modal" class="btn btn-default">Modal</button> -->

<div class="modal fade" id="patientModal">
<div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="modal-title serif">ผลการประเมินอาหาร</h3>
		  <h4 class="modal-title serif">ประจำวันที่ <text id="day_div"></text></h4>
		  <h5 class="modal-title text-right serif "><?php echo $patient_info->fname?> <?php echo $patient_info->lname?></h5>
        </div>
        <div class="modal-body">

		  		<div id="patient_result">
					

						</div>
		
       
          <div class="form-group">
            <!-- <input type="button" class="btn btn-warning btn-sm pull-right" value="Reset"> -->
            <div class="clearfix"></div>
          </div>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger " data-dismiss="modal">ปิด</button>
          <!-- <button type="button" class="btn btn-primary">Save Changes</button> -->
        </div>
				
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
					
					<!-- <div class=" form-grids row form-grids-right">
						<div class="widget-shadow " data-example-id="basic-forms"> 
							<div class="form-title">
								<h4>Horizontal form :</h4>
							</div>
							<div class="form-body">
								<form class="form-horizontal"> <div class="form-group"> <label for="inputEmail3" class="col-sm-2 control-label">Email</label> <div class="col-sm-9"> <input type="email" class="form-control" id="inputEmail3" placeholder="Email"> </div> </div> <div class="form-group"> <label for="inputPassword3" class="col-sm-2 control-label">Password</label> <div class="col-sm-9"> <input type="password" class="form-control" id="inputPassword3" placeholder="Password"> </div> </div> <div class="form-group"> <div class="col-sm-offset-2 col-sm-10"> <div class="checkbox"> <label> <input type="checkbox"> Remember me </label> </div> </div> </div> <div class="col-sm-offset-2"> <button type="submit" class="btn btn-default">Sign in</button> </div> </form> 
							</div>
						</div>
					</div>
					<div class="inline-form widget-shadow">
						<div class="form-title">
							<h4>Inline form Example 1 :</h4>
						</div>
						<div class="form-body">
							<div data-example-id="simple-form-inline"> <form class="form-inline"> <div class="form-group"> <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email"> </div> <div class="form-group"> <input type="password" class="form-control" id="exampleInputPassword3" placeholder="Password"> </div> <div class="checkbox"> <label> <input type="checkbox"> Remember me </label> </div> <button type="submit" class="btn btn-default">Sign in</button> </form> </div>
						</div>
					</div>
					<div class="form-two widget-shadow">
						<div class="form-title">
							<h4>Inline form Example 2 :</h4>
						</div>
						<div class="form-body" data-example-id="simple-form-inline">
							<form class="form-inline"> <div class="form-group"> <label for="exampleInputName2">Name</label> <input type="text" class="form-control" id="exampleInputName2" placeholder="Your name"> </div> <div class="form-group"> <label for="exampleInputEmail2">Email</label> <input type="email" class="form-control" id="exampleInputEmail2" placeholder="mail.abc@example.com"> </div> <button type="submit" class="btn btn-default">Send invitation</button> </form> 
						</div>
					</div>
					<div class="row">
					<div class="col-md-4 stats-info widget">
						<div class="stats-title">
							<h4 class="title">Browser Stats</h4>
						</div>
						<div class="stats-body">
							<ul class="list-unstyled">
								<li>GoogleChrome <span class="pull-right">85%</span>  
									<div class="progress progress-striped active progress-right">
										<div class="bar green" style="width:85%;"></div> 
									</div>
								</li>
								<li>Firefox <span class="pull-right">35%</span>  
									<div class="progress progress-striped active progress-right">
										<div class="bar yellow" style="width:35%;"></div>
									</div>
								</li>
								<li>Internet Explorer <span class="pull-right">78%</span>  
									<div class="progress progress-striped active progress-right">
										<div class="bar red" style="width:78%;"></div>
									</div>
								</li>
								<li>Safari <span class="pull-right">50%</span>  
									<div class="progress progress-striped active progress-right">
										<div class="bar blue" style="width:50%;"></div>
									</div>
								</li>
								<li>Opera <span class="pull-right">80%</span>  
									<div class="progress progress-striped active progress-right">
										<div class="bar light-blue" style="width:80%;"></div>
									</div>
								</li>
								<li class="last">Others <span class="pull-right">60%</span>  
									<div class="progress progress-striped active progress-right">
										<div class="bar orange" style="width:60%;"></div>
									</div>
								</li> 
							</ul>
						</div>
					</div>
					<div class="col-md-8 stats-info stats-last widget-shadow">
						<table class="table stats-table ">
							<thead>
								<tr>
									<th>S.NO</th>
									<th>PRODUCT</th>
									<th>STATUS</th>
									<th>PROGRESS</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>Lorem ipsum</td>
									<td><span class="label label-success">In progress</span></td>
									<td><h5>85% <i class="fa fa-level-up"></i></h5></td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>Aliquam</td>
									<td><span class="label label-warning">New</span></td>
									<td><h5>35% <i class="fa fa-level-up"></i></h5></td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>Lorem ipsum</td>
									<td><span class="label label-danger">Overdue</span></td>
									<td><h5  class="down">40% <i class="fa fa-level-down"></i></h5></td>
								</tr>
								<tr>
									<th scope="row">4</th>
									<td>Aliquam</td>
									<td><span class="label label-info">Out of stock</span></td>
									<td><h5>100% <i class="fa fa-level-up"></i></h5></td>
								</tr>
								<tr>
									<th scope="row">5</th>
									<td>Lorem ipsum</td>
									<td><span class="label label-success">In progress</span></td>
									<td><h5 class="down">10% <i class="fa fa-level-down"></i></h5></td>
								</tr>
								<tr>
									<th scope="row">6</th>
									<td>Aliquam</td>
									<td><span class="label label-warning">New</span></td>
									<td><h5>38% <i class="fa fa-level-up"></i></h5></td>
								</tr>
							</tbody>
						</table>
					</div> -->
					<div class="clearfix"> </div>
				
					<div class="row">
						<h3 class="title1 serif">ผลการล้างไต :</h3>
						<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4 class="text-right serif"><?php echo $patient_info->fname?> <?php echo $patient_info->lname?></h4>
						</div>
					
						<table id="dataTables2" class="table table-striped table-bordered" style="width:100%">
							<thead>
							<tr class="serif">
								<th class="th-sm">ลำดับ</th>
								<th class="th-sm">วันที่</th>
								<!-- <th class="th-sm">อัตราส่วน กำไร ต่อ ขาดทุน</th> -->
								<th class="th-sm">ผลลัพธ์</th>
							</tr>
							</thead>
							<tbody>
							<?php 
							$i=1;
							$date_kidney_tmp ='';
						
							 foreach ($kidney_info as $row)
							{
								?>
								<?php if($date_kidney_tmp != $row->date_kidney ) 
									{?>
							<tr class="serif">
								<td><?php echo $i?></td>
								<td><?php echo thai_date_fullmonth(strtotime($row->date_kidney));// echo date('d/m/Y', strtotime($row->date_kidney))?></td>
								<?php 
								?>
								<?php  $date_kidney_tmp=$row->date_kidney;?>
								<td>
										<center>
											<!-- <input type="button" class="btn btn-default view_data" value="View Info" id="<?php echo  $patient_info->id; ?>"> -->
											<button  data-toggle="modal" class="btn btn-default view_kidney" id="<?php echo  $patient_info->id; ?>" day="<?php echo  $row->date_kidney; ?>"date_for_show="<?php echo thai_date_fullmonth(strtotime($row->date_kidney)) ;?>">ดูผลลัพธ์</button>
										</center>
									</td>
							</tr>
							<?php 
							$i++;
								}
							}
							?>
							</tbody>
						</table>
						
					</div>
						
					</div>

<div class="modal fade" id="patientModal_kidney">
<div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="modal-title serif">ผลการล้างไต</h3>
		  <h4 class="modal-title serif">ประจำวันที่ <text id="day_kidney"></text></h4>
		  <h5 class="modal-title text-right serif "><?php echo $patient_info->fname?> <?php echo $patient_info->lname?></h5>
        </div>
        <div class="modal-body">
		 
		
          <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
              <tr >
                <th>ลำดับ</th>
                <th>เข้า</th>
                <th>ออก</th>
								<th>ค่าล้างไต</th>
								<th>ผลลัพธ์</th>
								<th>ผู้ประเมิน</th>
								
              </tr>
            </thead>
            <tbody id="patient_result_kidney">
			<!-- patient nutrition ifo -->
				

				
            </tbody>
          </table>
          <div class="form-group">
            <!-- <input type="button" class="btn btn-warning btn-sm pull-right" value="Reset"> -->
            <div class="clearfix"></div>
          </div>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger " data-dismiss="modal">ปิด</button>
          <!-- <button type="button" class="btn btn-primary">Save Changes</button> -->
        </div>
				
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
					<div class="clearfix"> </div>
				
					<div class="row">
						<h3 class="title1 serif">ผลการประเมินเยี่ยมบ้าน: </h3>
						<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4  class=" serif">ประเมินอาการ<p class="text-right"><?php echo $patient_info->fname?> <?php echo $patient_info->lname?></p></h4>
						</div>
						<div class="form-body">
						<table id="dataTables3" class="table table-striped table-bordered" style="width:100%">
							<thead>
							<tr class="serif">
								<th class="th-sm">ลำดับ</th>
								<th class="th-sm">วันที่</th>
								<th class="th-sm">ผลลัพธ์</th>
							</tr>
							</thead>
							<tbody>
							<?php 
							$i=1;
							$date_symtom_tmp ='';
							$date_symtom='';
							 foreach ($symtom_info as $row)
							{
								$date_symtom = date('Y-m-d',strtotime($row->created_at))
								?>
								<?php// if($date_symtom_tmp != $date_symtom) 
									//{?>
							<tr class="serif">
								<td><?php echo $i?></td>
								<td><?php echo thai_date_fullmonth(strtotime($date_symtom));//echo date('d/m/Y', strtotime($date_symtom))?></td>
								<?php  $date_symtom_tmp=$date_symtom;?>
								<td>
										<center>
											<!-- <input type="button" class="btn btn-default view_data" value="View Info" id="<?php echo  $patient_info->id; ?>"> -->
											<button  data-toggle="modal" class="btn btn-default view_symtom" id="<?php echo  $patient_info->id; ?>" day="<?php echo  $row->created_at; ?>" date_for_show="<?php echo thai_date_fullmonth(strtotime($date_symtom)) ;?>">ดูผลลัพธ์</button>
										</center>
									</td>
							</tr>
							<?php 
							$i++;
								//}
							}
							?>
							</tbody>
						</table>
						</div>
					</div>
						
					</div>


					<div class="modal fade" id="patientModal_symtom">
<div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="modal-title serif">ผลการประเมินอาการ</h3>
		  <h4 class="modal-title serif">ประจำวันที่ <text id="day_symtom"></text></h4>
		  <h5 class="modal-title text-right serif "><?php echo $patient_info->fname?> <?php echo $patient_info->lname?></h5>
        </div>
        <div class="modal-body">
		 
							<div id="patient_result_symtom">
							</div>
         
          <div class="form-group">
            <!-- <input type="button" class="btn btn-warning btn-sm pull-right" value="Reset"> -->
            <div class="clearfix"></div>
          </div>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger " data-dismiss="modal">ปิด</button>
          <!-- <button type="button" class="btn btn-primary">Save Changes</button> -->
        </div>
				
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
								
					<div class="inline-form widget-shadow">
						<div class="form-title">
						<h4  class=" serif">ผลการประเมินสภาพทั่วไป<p class="text-right"><?php echo $patient_info->fname?> <?php echo $patient_info->lname?></p></h4>
						</div>
						<table id="dataTables4" class="table table-striped table-bordered" style="width:100%">
							<thead>
							<tr class="serif">
								<th class="th-sm">ลำดับ</th>
								<th class="th-sm">วันที่</th>
								<th class="th-sm">ผลลัพธ์</th>
							</tr>
							</thead>
							<tbody>
							<?php 
							$i=1;
							$date_environ_tmp ='';
							$date_environ='';
							 foreach ($environ_info as $row)
							{
								$date_environ = date('Y-m-d',strtotime($row->created_at))
								?>
								<?php// if($date_environ_tmp != $date_environ) 
									//{?>
							<tr class="serif">
								<td><?php echo $i?></td>
								<td><?php echo thai_date_fullmonth(strtotime($date_environ));//echo date('d/m/Y', strtotime($date_symtom))?></td>
								<?php  $date_environ_tmp=$date_environ;?>
								<td>
										<center>
											<!-- <input type="button" class="btn btn-default view_data" value="View Info" id="<?php echo  $patient_info->id; ?>"> -->
											<button  data-toggle="modal" class="btn btn-default view_environ" id="<?php echo  $patient_info->id; ?>" day="<?php echo  $row->created_at; ?>" date_for_show="<?php echo thai_date_fullmonth(strtotime($date_environ)) ;?>">ดูผลลัพธ์</button>
										</center>
									</td>
							</tr>
							<?php 
							$i++;
								//}
							}
							?>
							</tbody>
						</table>
					</div>
					
					<div class="modal fade" id="patientModal_environ">
<div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="modal-title serif">ผลการประเมินสภาพทั่วไป</h3>
		  <h4 class="modal-title serif">ประจำวันที่ <text id="day_environ"></text></h4>
		  <h5 class="modal-title text-right serif "><?php echo $patient_info->fname?> <?php echo $patient_info->lname?></h5>
        </div>
        <div class="modal-body">
		  
		
          <table class="table table-bordered" id="tblGrid">
            <thead id="tblHead">
              <tr class="serif">
                <th><center>หัวข้อ</center></th>
                <th><center>ดี</center></th>
                <th><center>พอใช้</center></th>
								<th><center>ปรับปรุง</center></th>
								<th><center>ไม่ได้ประเมิน</center></th>
								
								
              </tr>
            </thead>
            <tbody id="patient_result_environ">
			<!-- patient nutrition ifo -->
				

				
            </tbody>
          </table>
          <div class="form-group">
            <!-- <input type="button" class="btn btn-warning btn-sm pull-right" value="Reset"> -->
            <div class="clearfix"></div>
          </div>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger " data-dismiss="modal">ปิด</button>
          <!-- <button type="button" class="btn btn-primary">Save Changes</button> -->
        </div>
				
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

					<div class="inline-form widget-shadow">
						<div class="form-title">
						<h4  class=" serif">ผลการสัมภาษณ์ญาติ<p class="text-right"><?php echo $patient_info->fname?> <?php echo $patient_info->lname?></p></h4>
						</div>
						<table id="dataTables5" class="table table-striped table-bordered" style="width:100%">
							<thead>
							<tr class="serif">
								<th class="th-sm">ลำดับ</th>
								<th class="th-sm">วันที่</th>
								<th class="th-sm">ผลลัพธ์</th>
							</tr>
							</thead>
							<tbody>
							<?php 
							$i=1;
							$date_interview_tmp ='';
							$date_interview='';
							 foreach ($interview_info as $row)
							{
								$date_interview = date('Y-m-d',strtotime($row->created_at))
								?>
								<?php //if($date_interview_tmp != $date_interview) 
								//	{?>
							<tr class="serif">
								<td><?php echo $i?></td>
								<td><?php echo thai_date_fullmonth(strtotime($date_interview));//echo date('d/m/Y', strtotime($date_symtom))?></td>
								<?php  $date_interview_tmp=$date_interview;?>
								<td>
										<center>
											<!-- <input type="button" class="btn btn-default view_data" value="View Info" id="<?php echo  $patient_info->id; ?>"> -->
											<button  data-toggle="modal" class="btn btn-default view_interview" id="<?php echo  $patient_info->id; ?>" day="<?php echo  $row->created_at; ?>" date_for_show="<?php echo thai_date_fullmonth(strtotime($date_interview)) ;?>">ดูผลลัพธ์</button>
										</center>
									</td>
							</tr>
							<?php 
							$i++;
							//	}
							}
							?>
							</tbody>
						</table>
					</div>
					
					<div class="modal fade" id="patientModal_interview">
<div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="modal-title serif">ผลการสัมภาษณ์ญาติ</h3>
		  <h4 class="modal-title serif">ประจำวันที่ <text id="day_interview"></text></h4>
		  <h5 class="modal-title text-right serif "><?php echo $patient_info->fname?> <?php echo $patient_info->lname?></h5>
        </div>
        <div class="modal-body">
							<div id="patient_result_interview">
								
						</div>
		
          
          <div class="form-group">
            <!-- <input type="button" class="btn btn-warning btn-sm pull-right" value="Reset"> -->
            <div class="clearfix"></div>
          </div>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger " data-dismiss="modal">ปิด</button>
          <!-- <button type="button" class="btn btn-primary">Save Changes</button> -->
        </div>
				
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

					<div class="inline-form widget-shadow">
						<div class="form-title">
						<h4  class=" serif">ผลการสรุปความคิดเห็นของผู้เยี่ยม<p class="text-right"><?php echo $patient_info->fname?> <?php echo $patient_info->lname?></p></h4>
						</div>
						<table id="dataTables6" class="table table-striped table-bordered" style="width:100%">
							<thead>
							<tr class="serif">
								<th class="th-sm">ลำดับ</th>
								<th class="th-sm">วันที่</th>
								<th class="th-sm">ผลลัพธ์</th>
							</tr>
							</thead>
							<tbody>
							<?php 
							$i=1;
							$date_conclutions_tmp ='';
							$date_conclutions='';
							 foreach ($conclutions_info as $row)
							{
								$date_conclutions = date('Y-m-d',strtotime($row->created_at))
								?>
								<?php //if($date_conclutions_tmp != $date_conclutions) 
									//{?>
							<tr class="serif">
								<td><?php echo $i?></td>
								<td><?php echo thai_date_fullmonth(strtotime($date_conclutions));//echo date('d/m/Y', strtotime($date_symtom))?></td>
								<?php  $date_conclutions_tmp=$date_conclutions;?>
								<td>
										<center>
											<!-- <input type="button" class="btn btn-default view_data" value="View Info" id="<?php echo  $patient_info->id; ?>"> -->
											<button  data-toggle="modal" class="btn btn-default view_conclutions" id="<?php echo  $patient_info->id; ?>" day="<?php echo  $row->created_at; ?>" date_for_show="<?php echo thai_date_fullmonth(strtotime($date_conclutions)) ;?>">ดูผลลัพธ์</button>
										</center>
									</td>
							</tr>
							<?php 
							$i++;
							//	}
							}
							?>
							</tbody>
						</table>
					</div>
					
					<div class="modal fade" id="patientModal_conclutions">
<div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="modal-title serif">ผลการสรุปความคิดเห็นของผู้เยี่ยม</h3>
		  <h4 class="modal-title serif">ประจำวันที่ <text id="day_conclutions"></text></h4>
		  <h5 class="modal-title text-right serif "><?php echo $patient_info->fname?> <?php echo $patient_info->lname?></h5>
        </div>
        <div class="modal-body">
		  
		
          <table class="table table-bordered" id="tblGrid">
            <thead id="tblHead">
              <tr class="serif">
								<th><canter>หัวข้อ</center></th>
								<th><canter>ผลการประเมิน</center></th>
                
								
              </tr>
            </thead>
            <tbody id="patient_result_conclutions">
		

				
            </tbody>
          </table>
          <div class="form-group">
            <!-- <input type="button" class="btn btn-warning btn-sm pull-right" value="Reset"> -->
            <div class="clearfix"></div>
          </div>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger " data-dismiss="modal">ปิด</button>
          <!-- <button type="button" class="btn btn-primary">Save Changes</button> -->
        </div>
				
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->

					<div class="inline-form widget-shadow">
						<div class="form-title">
						<h4  class=" serif">รูปถ่าย<p class="text-right"><?php echo $patient_info->fname?> <?php echo $patient_info->lname?></p></h4>
						</div>
						<table id="dataTables7" class="table table-striped table-bordered" style="width:100%">
							<thead>
							<tr class="serif">
								<th class="th-sm">ลำดับ</th>
								<th class="th-sm">วันที่</th>
								<th class="th-sm">ผลลัพธ์</th>
							</tr>
							</thead>
							<tbody>
							<?php 
							$i=1;
							$date_images_tmp ='';
							$date_images='';
							 foreach ($images_info as $row)
							{
								$date_images = date('Y-m-d',strtotime($row->created_at))
								?>
								<?php if($date_images_tmp != $date_images) 
									{?>
							<tr class="serif">
								<td><?php echo $i?></td>
								<td><?php echo thai_date_fullmonth(strtotime($date_images));//echo date('d/m/Y', strtotime($date_symtom))?></td>
								<?php  $date_images_tmp=$date_images;?>
								<td>
										<center>
											<!-- <input type="button" class="btn btn-default view_data" value="View Info" id="<?php echo  $patient_info->id; ?>"> -->
											<button  data-toggle="modal" class="btn btn-default view_images" id="<?php echo  $patient_info->id; ?>" day="<?php echo  $row->created_at; ?>" date_for_show="<?php echo thai_date_fullmonth(strtotime($date_images)) ;?>">ดูผลลัพธ์</button>
										</center>
									</td>
							</tr>
							<?php 
							$i++;
								}
							}
							?>
							</tbody>
						</table>
					</div>
					
					<div class="modal fade" id="patientModal_images">
<div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="modal-title serif">รูปถ่าย</h3>
		  <h4 class="modal-title serif">ประจำวันที่ <text id="day_images"></text></h4>
		  <h5 class="modal-title text-right serif "><?php echo $patient_info->fname?> <?php echo $patient_info->lname?></h5>
        </div>
        <div class="modal-body">
		  
		
          <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
              <tr class="serif">
								<th><center>ลำดับ</center></th>
								<th><center>รูปถ่าย</center></th>
								<th><center>คำอธิบายภาพ</center></th>
								<th><center>ผู้ประเมิน</center></th>
                <!-- <th>เข้า</th>
                <th>ออก</th>
								<th>ค่าล้างไต</th>
								<th>ผลลัพธ์</th>
								<th>ผู้ประเมิน</th> -->
								
              </tr>
            </thead>
            <tbody id="patient_result_images">
			<!-- patient nutrition ifo -->
				

				
            </tbody>
          </table>
          <div class="form-group">
            <!-- <input type="button" class="btn btn-warning btn-sm pull-right" value="Reset"> -->
            <div class="clearfix"></div>
          </div>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger " data-dismiss="modal">ปิด</button>
          <!-- <button type="button" class="btn btn-primary">Save Changes</button> -->
        </div>
				
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


					<!-- close -->

				</div>
				
			</div>
		</div>

		<script type="text/javascript">
     // Start jQuery function after page is loaded
        $(document).ready(function(){

// 			$(".view_data").click(function(){
//     $(".test").hide();
// 	$('#patientModal').modal('show');
//   });
       
         	$('#dataTables').DataTable();
					 $('#dataTables2').DataTable();
					 $('#dataTables3').DataTable();
					 $('#dataTables4').DataTable();
					 $('#dataTables5').DataTable();
					 $('#dataTables6').DataTable();
					 $('#dataTables7').DataTable();
					//  view_data
            $('.view_data').click(function(){
				
				
                var patientData = $(this).attr('id');
								var patientDate = $(this).attr('day');
								var show_date = $(this).attr('date_for_show');
								$('#day_div').text(show_date);
                $.ajax({
                
                    url: "<?php echo site_url('patient_his/get_patient_result') ?>",
                   
                    method: "POST",
					data: {patientData:patientData,patientDate:patientDate},
					success: function(data){
                    
                  
                       
                       $('#patient_result').html(data);
                         $('#patientModal').modal('show');
						// $("#patientModal").modal().on("show", function () {
						// 	$("body").addClass("modal-open");
						// 	}).on("hidden", function () {
						// 	$("body").removeClass("modal-open")
						// });
						
                    }
             });

           
         });
				//  end view_data

				//  view_kidney
				$('.view_kidney').click(function(){
				
				
                var patientData = $(this).attr('id');
								var patientDate = $(this).attr('day');
								var show_date = $(this).attr('date_for_show');
								$('#day_kidney').text(show_date);
                $.ajax({
                
                    url: "<?php echo site_url('patient_his/get_patient_kidney') ?>",
                   
                    method: "POST",
										data: {patientData:patientData,patientDate:patientDate},
										success: function(data){
                    
                  
                       
                    	$('#patient_result_kidney').html(data);
                        // $('#patientModal').modal('show');
											$("#patientModal_kidney").modal().on("show", function () {
												$("body").addClass("modal-open");
												}).on("hidden", function () {
												$("body").removeClass("modal-open")
											});
						
                    }
             });

           
         });

				//  end view_kidney

				// view_symtom
				$('.view_symtom').click(function(){
				
				//  $('#patientModal_symtom').modal('show');
				var patientData = $(this).attr('id');
				var patientDate = $(this).attr('day');
				var show_date = $(this).attr('date_for_show');
						$('#day_symtom').text(show_date);
				$.ajax({
				
						url: "<?php echo site_url('patient_his/get_patient_symtom') ?>",
					 
						method: "POST",
						data: {patientData:patientData,patientDate:patientDate},
						success: function(data){
						
					
							 
							$('#patient_result_symtom').html(data);
								// $('#patientModal').modal('show');
							$("#patientModal_symtom").modal().on("show", function () {
								$("body").addClass("modal-open");
								}).on("hidden", function () {
								$("body").removeClass("modal-open")
							});
		
						}
		 });

	 
 });
				
				// end view_symtom

				//view_conclutions
				$('.view_conclutions').click(function(){
				
				//  $('#patientModal_symtom').modal('show');
				var patientData = $(this).attr('id');
				var patientDate = $(this).attr('day');
				var show_date = $(this).attr('date_for_show');
						$('#day_conclutions').text(show_date);
				$.ajax({
				
						url: "<?php echo site_url('patient_his/get_patient_conclutions') ?>",
					 
						method: "POST",
						data: {patientData:patientData,patientDate:patientDate},
						success: function(data){
						
					
							 
							$('#patient_result_conclutions').html(data);
								// $('#patientModal').modal('show');
							$("#patientModal_conclutions").modal().on("show", function () {
								$("body").addClass("modal-open");
								}).on("hidden", function () {
								$("body").removeClass("modal-open")
							});
		
						}
		 });

	 
 });
				//end view_conclutions
				//view_interview
				$('.view_interview').click(function(){
				
				//  $('#patientModal_symtom').modal('show');
				var patientData = $(this).attr('id');
				var patientDate = $(this).attr('day');
				var show_date = $(this).attr('date_for_show');
						$('#day_interview').text(show_date);
				$.ajax({
				
						url: "<?php echo site_url('patient_his/get_patient_interview') ?>",
					 
						method: "POST",
						data: {patientData:patientData,patientDate:patientDate},
						success: function(data){
						
					
							 
							$('#patient_result_interview').html(data);
								// $('#patientModal').modal('show');
							$("#patientModal_interview").modal().on("show", function () {
								$("body").addClass("modal-open");
								}).on("hidden", function () {
								$("body").removeClass("modal-open")
							});
		
						}
		 });

	 
 });
				//end view_interview

				//view_environ
				$('.view_environ').click(function(){
				
				//  $('#patientModal_symtom').modal('show');
				var patientData = $(this).attr('id');
				var patientDate = $(this).attr('day');
				var show_date = $(this).attr('date_for_show');
						$('#day_environ').text(show_date);
				$.ajax({
				
						url: "<?php echo site_url('patient_his/get_patient_environ') ?>",
					 
						method: "POST",
						data: {patientData:patientData,patientDate:patientDate},
						success: function(data){
						
					
							 
							$('#patient_result_environ').html(data);
								// $('#patientModal').modal('show');
							$("#patientModal_environ").modal().on("show", function () {
								$("body").addClass("modal-open");
								}).on("hidden", function () {
								$("body").removeClass("modal-open")
							});
		
						}
		 });

	 
 });

				//end view_environ

				//view_images
				$('.view_images').click(function(){
				
				//  $('#patientModal_symtom').modal('show');
				var patientData = $(this).attr('id');
				var patientDate = $(this).attr('day');
				var show_date = $(this).attr('date_for_show');
						$('#day_images').text(show_date);
				$.ajax({
				
						url: "<?php echo site_url('patient_his/get_patient_images') ?>",
					 
						method: "POST",
						data: {patientData:patientData,patientDate:patientDate},
						success: function(data){
						
					
							 
							$('#patient_result_images').html(data);
								// $('#patientModal').modal('show');
							$("#patientModal_images").modal().on("show", function () {
								$("body").addClass("modal-open");
								}).on("hidden", function () {
								$("body").removeClass("modal-open")
							});
		
						}
		 });

	 
 });

				//end images
     });  
    </script>

