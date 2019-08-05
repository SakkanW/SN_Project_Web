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
			
				
					<div class="row">
						<h3 class="title1 serif">จัดการผู้ใช้งาน :</h3>
						<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							
						</div>
						<div class="blank-page widget-shadow scroll" id="style-2 div1">
							<!-- <table id="dataTables" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%"> -->
							<table id="dataTables" class="table table-striped table-bordered" style="width:100%">
							<thead>
							<tr class="serif">
								<th class="th-sm">ลำดับ</th>
								<!-- <th class="th-sm">รหัสบัตรประชาชน
								</th> -->
								<th class="th-sm">ชื่อ-สกุล</th>
								<th class="th-sm">ตำแหน่ง</th>
								<th class="th-sm">สถานะการยืนยัน</th>
								<!-- <th class="th-sm">สถานะ</th> -->
								<th class="th-sm">ระดับการใช้งาน/การดำเนินการ</th>
							
							</tr>
							</thead>
							<tbody>
							<?php 
							$i=1;
							 foreach ($users as $row)
							{
								?>
							<tr class="serif">
								<td><?php echo $i?></td>
								<!-- <td></td> -->
								<td><a href="<?php echo site_url('userinfo/index/'.$row->id) ?>"><?php echo $row->name?></a></td>
								<td><?php echo $row->position?></td>
                               
								<!-- <td>
                                    <center><?php 
									if($row->is_email_verified=="yes")
									{
										 echo $row->status;
									}
									else
									{?>
										<select form= "form1"  name="status" class="form-control" >
                                            <option value="ผู้ดูข้อมูล">ผู้ดูข้อมูล</option>
                                            <option value="ผู้ดูแล">ผู้ดูแล</option>
                                            <option value="ผู้กรอกและดูข้อมูล">ผู้กรอกและดูข้อมูล</option>
                                            <option value="พยาบาลอนามัย">พยาบาลอนามัย</option>
                                        </select>
                                    <?php
									}?>

									
                                    </center>
                                    
                                </td> -->
                                <td>
									<center><?php 
									

									
									if($row->is_email_verified=="yes")
									{
										echo'<span class="label label-success">ยืนยันแล้ว</span>';
									}
									else
									{
										echo'<span class="label label-danger">ยังไม่ยืนยัน</span>';
									}

									?></center>
								</td>
								<td>
									<?php
									
                                    if($row->is_email_verified=="yes" )
                                    {
										
										?>
										
                                        <center>
										<input type="text" class="form-control " value = "<?php echo $row->status;?>" disabled>
										<?php if($row->id!=1)
										{
											?>
											<a href="<?php echo site_url('user_management/cancel/'.$row->id) ?>"><button  class="btn btn-danger"  >ยกเลิก</button></a></center>
										<?php
										} 
										?>
										

                                   <?php 
                                   }
                                   else
                                    {
                                   ?>
                                        <form action = "<?php echo site_url('user_management/active/'.$row->id) ?>" method = "post" >
										<center><select   name="status" class="form-control" >
                                            <option value="ผู้ดูแล">ผู้ดูแล</option>
                                            <option value="ผู้กรอกประวัติ">ผู้กรอกประวัติ</option>
                                            <option value="พยาบาลอนามัย">พยาบาลอนามัย</option>
											<option value="แพทย์/พยาบาล">แพทย์/พยาบาล</option>
                                        </select>
											
                                             <button type="submit" class="btn btn-primary"  name="submit" >ยืนยัน</button></center>
                                        </form>
                                   <?php 
								   } 
								
								   ?>
                                   
                                    
                                </td>
                                
								
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
	<script >
        $(document).ready(function () {
            $('#dataTables').DataTable();
        });
	</script>

		