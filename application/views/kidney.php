
		<!-- main content start-->
		<!-- <div id="page-wrapper">
			<div class="row">
				<h3 class="title1 serif">ค่าการล้างไต</h3>
				<div class="form-three widget-shadow">
				
					<form class="form-horizontal"  action="<?php echo site_url('createpatient/create') ?>" method="post" >
					
                    <?php//echo form_open('form'); ?>  
						<div class="form-group">
							<label for="firstname" class="col-sm-2 control-label serif">กรุณาเลือกวัน</label>
							<div class="col-sm-8">
								<input type="date" class="form-control1"    name="kidney_date" >
								
							</div>
						</div>
						<div class="form-group">
							<label for="lastname" class="col-sm-2 control-label serif">ใส่ค่าการล้างไต</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1"  name="kidney_val">
								
							</div>
						</div>
						
					
				
						<center>
							<button type="submit" class="btn btn-primary"  name="submit" value="Create patient">บันทึก</button>
						</center>
					</form>
				</div>
			</div>
		</div> -->

		<div id="page-wrapper">
			<div class="main-page">
			
				<div class="forms">
					<h3 class="title1 serif">บันทึกค่าการล้างไต:</h3>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4 class="text-right serif"><?php echo $patient_info->fname ?> <?php echo $patient_info->lname ?></h4>
						</div>
						<div class="form-body">
							<form action="<?php echo site_url('kidney/store/'.$patient_info->id.'/'.$this->session->userdata('id')) ?>" method="post"  > 
								<div class="row">
									<div class="col-md-3">
										<div class="form-group"> 
											<label class ="serif" >กรุณาเลือกวัน:</label> 
											<input type="text" class="form-control"  name="date_kidney"  placeholder="วว/ดด/ปปปป(พ.ศ.)">
											
											
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group"> 
											<label class ="serif" >ค่าความเข้มข้น:</label>
											<input type="hidden" class="form-control" name="intensity_pa" value="<?php echo $patient_info->intensity?> %">
											<input type="text" class="form-control" value="<?php echo $patient_info->intensity?> " disabled>
											
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group"> 
											<label class ="serif" >จำนวนรอบ:</label> 
											<input type="hidden" class="form-control" name="number_kidney" value="<?php echo $patient_info->number?> ">
											<input type="text" class="form-control" value="<?php echo $patient_info->number?>" disabled>
											
										</div>
									</div>
									<div class="col-md-3">
										<div class="form-group"> 
											<label class ="serif" >ปริมาณน้ำยาล้างไต:</label> 
											<input type="hidden" class="form-control" name="quan_kidney" value="<?php echo $patient_info->quan_kidney?> ">
											<input type="text" class="form-control" value="<?php echo $patient_info->quan_kidney?>" disabled>
											
										</div>
									</div>
									
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="form-group"> 
											<label class ="serif" >เข้า:</label> 
											<input type="number" class="form-control " name="in" placeholder="ค่าล้างไต"> 
										</div> 	
									</div>
									<div class="col-md-6">
										<div class="form-group"> 
											<label class ="serif" >ออก:</label> 
											<input type="number" class="form-control " name="out" placeholder="ค่าล้างไต"> 
										</div> 	
									</div>
								</div>
								

								<center><button type="submit" class="btn btn-default">บันทึก</button></center>
							</form> 
						</div>
					</div>
					
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
					</div> -->
					<!-- <div class="row">
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
				</div>
					<div class="row">
						<h3 class="title1 serif">ประวัติการล้างไต :</h3>
						<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							<h4 class="text-right serif"><?php echo $patient_info->fname ?> <?php echo $patient_info->lname ?></h4>
						</div>
						<div class="blank-page widget-shadow scroll" id="style-2 div1">
							<!-- <table id="dataTables" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%"> -->
							<table id="dataTables" class="table table-striped table-bordered" style="width:100%">
							<thead>
							<tr class="serif">
								<th class="th-sm">ลำดับ</th>
								<!-- <th class="th-sm">รหัสบัตรประชาชน
								</th> -->
								<th class="th-sm">เข้า</th>
								<th class="th-sm">ออก</th>
								<th class="th-sm">ผลลัพธ์</th>
								<th class="th-sm">ความเข้มข้น</th>
								<th class="th-sm">จำนวนรอบ</th>
								<th class="th-sm">ปริมาณน้ำยา</th>
								<th class="th-sm">วันที่</th>
								<th class="th-sm">การดำเนินการ</th>
							
							</tr>
							</thead>
							<tbody>
							<?php 
							$i=1;
							 foreach ($kidney_info as $row)
							{
								?>
							<tr class="serif">
								<td><?php echo $i?></td>
								<!-- <td></td> -->
								<td><?php echo $row->in?> มล.</td>
								<td><?php echo $row->out?> มล.</td>
								<td>
									<center><?php 
									if($row->result>0)
									{
										echo'<span class="label label-success">กำไร</span>';
									}
									else
									{
										echo'<span class="label label-danger">ขาดทุน</span>';
									}

									?></center>
								</td>
								<td><?php echo $row->intensity_pa?></td>
								<td><?php echo $row->number_kidney?></td>
								<td><?php echo $row->quantity_liq?></td>
								<td><?php echo thai_date_fullmonth(strtotime($row->date_kidney)) ;?></td>
								<td><center><a href="<?php echo site_url('kidney/destroy/'.$row->id.'/'.$patient_info->id);?>" ><button class="btn btn-danger">ลบ</button></a></center></td>
								
							</tr>
							<?php 
							$i++;
							}
							?>
							</tbody>
						</table>
						</div>
					</div>
						
					</div>

				</div>
			</div>
		</div>
		<!-- Thai datepicker -->



<!-- //Thai datepicker -->
	<script >
        $(document).ready(function () {
            $('#dataTables').DataTable();

		
			
        });


	</script>

		