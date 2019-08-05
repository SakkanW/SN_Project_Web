
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<h3 class="title1 serif">ค้นหาผู้ป่วย</h3>
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
					<table id="dataTables" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
						<thead>
						<tr class="serif">
							<th class="th-sm">ลำดับ
							</th>
							<th class="th-sm">รหัสบัตรประชาชน
							</th>
							<th class="th-sm">ชื่อ-นามสกุล
							</th>
							<th class="th-sm">คำนวณ
							</th>
							<th class="th-sm">ข้อมูลผู้ป่วย
							</th>
							</th>
							<th class="th-sm">การล้างไต
							</th>
							<th class="th-sm">ผู้เปลี่ยนรหัสผ่าน
							</th>
							<th class="th-sm">สถานะผู้ร่วมโครงการ
							</th>
						</tr>
						</thead>
						<tbody>
						<?php
						$i= 1;
							foreach($createpatient as $row)
							{  ?>
								
								<tr class="serif">
									<td><?php echo $i ?></td>
									<td><a href = "<?php echo site_url('createpatient/edit/'. $row->id) ?>"><?php echo $row->idcard ?></a></td>
									<td><?php echo $row->fname ?> <?php echo $row->lname ?></td>
									<td><a href='food/index/<?php echo $row->id ?>' ><i class="glyphicon glyphicon-edit"></i>อาหาร </a></td>
									<td><a href="patient_his/show_all/<?php echo $row->id ?>"><i class="glyphicon glyphicon-list-alt"></i>ดู </a></td>
									<td><a href='kidney/index/<?php echo $row->id ?>'><i class="glyphicon glyphicon-list-alt"></i>ใส่ค่า</a></td>
									<td><?php echo $row->who_change_pass ;?></a></td>
									<td>
										<?php echo $row->joined ;?>
					
									</td>
								</tr>
								<?php
								$i++;
							}?>
						
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<script >
        $(document).ready(function () {
            $('#dataTables').DataTable();
        });
	</script>

		