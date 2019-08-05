
		<!-- main content start-->
		<div id="page-wrapper">
		<div class="form-two widget-shadow">
						<div class="form-title">
							<h4 class = "serif">เปลี่ยนรหัสผ่านผู้ป่วย</h4>
						</div>
						<div class="form-body" data-example-id="simple-form-inline">
							<form class="form-inline" action="<?php echo site_url('createpatient/change_pass_by_admin') ?>" method="post">
							<input type="hidden" class="form-control" name="id_patient" value="<?php echo $patient_info->id; ?>" placeholder="ตั้งรหัส"> 
							<?php echo form_open('form'); ?> 
								<div class="form-group"> 
									<label for="exampleInputName2">กรอกรหัสผ่านใหม่</label> 
									<input type="password" class="form-control" name="pass" placeholder="ตั้งรหัส"> 
									<input type="hidden"  value="<?php echo $this->session->userdata('name'); ?>" name="who_change_pass" >
									
								</div> 
									<?php echo form_error('pass'); ?>
								<div class="form-group"> 
										<label for="exampleInputEmail2">ยืนยันรหัสผ่านใหม่</label> 
										<input type="password" class="form-control" name="confirm_pass" placeholder="ยืนยันรหัสผ่านใหม่อีกครั้ง"> 
										
									
								</div>
								<?php echo form_error('confirm_pass'); ?> 
								<button type="submit" class="btn btn-primary">เปลี่ยน</button> 
							</form> 
						</div>
					</div>
			<div class="row">
				<h3 class="title1 serif">แก้ไขข้อมูลผู้ป่วย</h3>
				<div class="form-three widget-shadow">
				
					<form class="form-horizontal"  action="<?php echo site_url('createpatient/update/'.$patient_info->id) ?>" method="post" >
					
                    <?php echo form_open('form'); ?>  
						<div class="form-group">
							<label for="firstname" class="col-sm-2 control-label serif">ชื่อ<font style="color: red">*</font></label>
							<div class="col-sm-8">
								<input type="text" class="form-control1"   value="<?php echo $patient_info->fname ?>" name="firstname">
								
								<?php echo form_error('firstname'); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="lastname" class="col-sm-2 control-label serif">นามสกุล<font style="color: red">*</font></label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" value="<?php echo $patient_info->lname ?>" name="lastname">
								<?php echo form_error('lastname'); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="idcard" class="col-sm-2 control-label serif">เลขบัตรประชาชน<font style="color: red">*</font></label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" id="idcard" value="<?php echo $patient_info->idcard ?>" name="idcard">
								<?php echo form_error('idcard'); ?>
							</div>
						</div>
						<div class="form-group"> 
							<label for="birthday" class="col-sm-2 control-label serif">เกิดวันที่<font style="color: red">*</font></label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" value="<?php echo date_thai($patient_info->birthday); ?>" name="birthday" placeholder="วว/ดด/ปปปป(พ.ศ.)">
								<?php echo form_error('birthday'); ?>
								<!-- <input type="text" class="form-control1" id="birthday"  name="birthday"> -->
							</div>
						</div>
						<div class="form-group"> 
							<label for="radio-inline" class="col-sm-2 control-label serif">เพศ<font style="color: red">*</font></label>
							<div class="col-sm-8">
							<label class="radio-inline"><input type="radio" name="sex_pa" value="ชาย" <?php echo set_value('sex_pa', $patient_info->sex_pa) == 'ชาย' ? "checked" : ""; ?>>ชาย<br></label>
							<label class="radio-inline"><input type="radio"   name="sex_pa" value="หญิง"  <?php echo set_value('sex_pa', $patient_info->sex_pa) == 'หญิง' ? "checked" : ""; ?>>หญิง<br></label>
							<?php echo form_error('sex_pa'); ?>
			
							</div>
							
						</div>
						<div class="form-group"> 
							<label for="radio-inline" class="col-sm-2 control-label serif">สถานะการเข้าร่วมโครงการ<font style="color: red">*</font></label>
							<div class="col-sm-8">
							<label class="radio-inline"><input type="radio" name="joined" value="yes" <?php echo set_value('joined', $patient_info->joined) == 'yes' ? "checked" : ""; ?>>อยู่<br></label>
							<label class="radio-inline"><input type="radio"   name="joined" value="no"  <?php echo set_value('joined', $patient_info->joined) == 'no' ? "checked" : ""; ?>>ไม่อยู่<br></label>
							<?php echo form_error('joined'); ?>
			
							</div>
							
						</div>
						
						<div class="form-group">
							<label for="address" class="col-sm-2 control-label serif">ที่อยู่<font style="color: red">*</font></label>
							<div class="col-sm-8">
								<textarea  rows="10" cols="90" name="address"><?php echo $patient_info->address;?></textarea>
								<?php echo form_error('address'); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="tel_no" class="col-sm-2 control-label serif">เบอร์โทรศัพท์<font style="color: red">*</font></label>
							<div class="col-sm-8">
								<input type="text" class="form-control1"  value="<?php echo $patient_info->tel_no; ?>" name="tel_no">
								<?php echo form_error('tel_no'); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="user_email" class="col-sm-2 control-label serif">อีเมล</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1"  value="<?php echo $patient_info->user_email; ?>" name="user_email">
								<?php echo form_error('user_email'); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="weight" class="col-sm-2 control-label serif">น้ำหนัก(กก.)<font style="color: red">*</font></label>
							<div class="col-md-3 ">
								<input type="text" class="form-control1" value="<?php echo $patient_info->weight; ?>"  name="weight">
								<?php echo form_error('weight'); ?>
							</div>
							<label for="height" class="col-sm-2 control-label serif">ส่วนสูง(ซม.)<font style="color: red">*</font></label>
							<div class="col-md-3 ">
								<input type="text" class="form-control1" value="<?php echo $patient_info->height; ?>" name="height">
								<?php echo form_error('height'); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="blood" class="col-sm-2 control-label serif">น้ำตาลในเลือด<font style="color: red">*</font></label>
							<div class="col-md-3 ">
								<input type="text" class="form-control1" value="<?php echo $patient_info->bloodsugar; ?>"  name="blood">
								<?php echo form_error('blood'); ?>
							</div> 
							<label for="num_family" class="col-sm-2 control-label serif">จำนวนสมาชิกในครอบครัว<font style="color: red">*</font></label>
							<div class="col-md-3 ">
								<input type="text" class="form-control1" value="<?php echo $patient_info->family_num; ?>" name="num_family">
								<?php echo form_error('num_family'); ?>

							</div>
						</div>
						<div class="form-group">
							<label for="radio-inline" class="col-sm-2 control-label serif">ผู้ป่วยเป็น<font style="color: red">*</font></label>
							<div class="col-sm-3">
								<label class="radio-inline"><input type="radio" name="stat_fam" value="หัวหน้าครอบครัว" <?php echo set_value('stat_fam', $patient_info->family_status) == 'หัวหน้าครอบครัว' ? "checked" : ""; ?>>หัวหน้าครอบครัว</label>
								<label class="radio-inline"><input type="radio" name="stat_fam" value="สมาชิก"<?php echo set_value('stat_fam', $patient_info->family_status) == 'สมาชิก' ? "checked" : ""; ?>>สมาชิก</label>
								<?php echo form_error('stat_fam'); ?>
							</div>
			
						</div>
						<div class="form-group">
							<label for="start" class="col-sm-2 control-label serif">เริ่มล้างไตทางช่องท้อง(ปี พศ.)<font style="color: red">*</font></label>
							<div class="col-md-3 ">
								<input type="text" class="form-control1"  value="<?php echo $patient_info->start_capd; ?>" name="start" >
								<?php echo form_error('start'); ?>
							</div>
						</div>
						<div class="form-group">
						<label for="checkbox" class="col-sm-2 control-label serif">ระบบที่ผู้ป่วยใช้<font style="color: red">*</font></label>
						<div class="col-sm-3">
							<label class="radio-inline"><input type="radio" name="system_use" value="ระบบถุงคู่ Twinbag" <?php echo set_value('system_use', $patient_info->system_use)== 'ระบบถุงคู่ Twinbag' ? "checked" : ""; ?> >ระบบถุงคู่ Twinbag</label>
							
						</div>
						<div class="col-sm-3">
							<label class="radio-inline"><input type="radio" name="system_use" value="ระบบถุงคู่ใช้จานหมุน ANY disc" <?php echo set_value('system_use', $patient_info->system_use)== 'ระบบถุงคู่ใช้จานหมุน ANY disc' ? "checked" : ""; ?>>ระบบถุงคู่ใช้จานหมุน ANY disc</label>
							
						</div>
						<div class="col-sm-3">
							<label class="radio-inline"><input type="radio" name="system_use" value="เครื่องล้างไตอัตโนมัติ APD" <?php echo set_value('system_use', $patient_info->system_use)== 'เครื่องล้างไตอัตโนมัติ APD' ? "checked" : ""; ?>>เครื่องล้างไตอัตโนมัติ APD</label>
						
						</div>
						
					</div>
					<?php echo form_error('system_use'); ?>
					<div class="form-group">
							<label for="intensity" class="col-sm-2 control-label serif">ความเข้มข้นของน้ำยาล้างไต<font style="color: red">*</font></label>
							<div class="col-md-8">
								<!-- <label class="radio-inline "><input type="radio" name="intensity" value="1.5" <?php echo set_value('intensity', $patient_info->intensity)== 1.5 ? "checked" : ""; ?>>1.5%</label>
								<label class="radio-inline "><input type="radio" name="intensity" value="2.5" <?php echo set_value('intensity', $patient_info->intensity)== 2.5 ? "checked" : ""; ?>>2.5%</label>
								<label class="radio-inline"><input type="radio" name="intensity" value="4.25" <?php echo set_value('intensity', $patient_info->intensity)== 4.25 ? "checked" : ""; ?>>4.25%</label>
								<label class="radio-inline "><input type="radio"  name="intensity" id = "other" value="other"  <?php echo set_value('intensity', $patient_info->intensity)!= 1.5 ||set_value('intensity', $patient_info->intensity)!= 2.5||set_value('intensity', $patient_info->intensity)!= 4.25 ? "checked" : ""; ?> >อื่นๆ  </label> <input  id="inputother"  type="number" step=any  onchange="changeradioother()" value="<?php if($patient_info->intensity!= 1.5 || $patient_info->intensity!= 2.5 || $patient_info->intensity!= 4.25){echo $patient_info->intensity;} ?>" /> % -->
								<label class="radio-inline "><input type="number" value="<?php echo  $patient_info->intensity; ?>" name="intensity"> %</label>
								<?php echo form_error('intensity'); ?>
							</div>
							
							
					</div>
							<div class="form-group">
							<label for="number" class="col-sm-2 control-label serif">จำนวนรอบ<font style="color: red">*</font></label> 
							<div class="col-md-8 ">
								<!-- <label class="radio-inline "><input type="radio" name="number" value="1" <?php echo set_value('number', $patient_info->number)== 1? "checked" : ""; ?>>1 รอบ</label>
								<label class="radio-inline "><input type="radio" name="number" value="2" <?php echo set_value('number', $patient_info->number)== 2 ? "checked" : ""; ?>>2 รอบ</label>
								<label class="radio-inline "><input type="radio" name="number" value="3" <?php echo set_value('number', $patient_info->number)== 3 ? "checked" : ""; ?>>3 รอบ</label>
								<label class="radio-inline "><input type="radio" name="number" value="4" <?php echo set_value('number', $patient_info->number)== 4 ? "checked" : ""; ?>>4 รอบ</label>
								<label class="radio-inline "><input type="radio" name="number" id = "other1" value="other1" <?php echo set_value('number', $patient_info->number)!= 1 ||set_value('number', $patient_info->number)!= 2 ||set_value('number', $patient_info->number)!= 3||set_value('number', $patient_info->number)!= 4? "checked" : ""; ?>>อื่นๆ</label> <input  id="inputother1"  type="number" step=any onchange="changeradioother1()" value="<?php if($patient_info->number!= 1 ||$patient_info->number!= 2 ||$patient_info->number!= 3||$patient_info->number!= 4){echo $patient_info->number;} ?>" /> รอบ -->
								<!-- <input type="text" class="form-control1" value="<?php echo set_value('number'); ?>" name="number">  -->
								<label class="radio-inline "><input type="number" value="<?php echo $patient_info->number; ?>" name="number"> รอบ</label>
								<?php echo form_error('number'); ?>
							</div>
					</div>
					<div class="form-group">
							<label for="number" class="col-sm-2 control-label serif">ปริมาณน้ำยาล้างไต<font style="color: red">*</font></label> 
							<div class="col-md-8 ">
								<!-- <label class="radio-inline "><input type="radio" name="quan_kidney" value="1000" <?php echo set_value('quan_kidney', $patient_info->quan_kidney)== 1000? "checked" : ""; ?>>1000 ซีซี</label>
								<label class="radio-inline "><input type="radio" name="quan_kidney" value="1500" <?php echo set_value('quan_kidney', $patient_info->quan_kidney)== 1500? "checked" : ""; ?>>1500 ซีซี</label>
								<label class="radio-inline "><input type="radio" name="quan_kidney" value="2000" <?php echo set_value('quan_kidney', $patient_info->quan_kidney)== 2000? "checked" : ""; ?>>2000 ซีซี</label>
								<label class="radio-inline "><input type="radio" name="quan_kidney" id = "other2" value="" <?php echo set_radio('quan_kidney', $patient_info->quan_kidney)!= 1000 ||set_value('quan_kidney', $patient_info->quan_kidney)!= 1500||set_value('quan_kidney', $patient_info->quan_kidney)!= 2000? "checked" : ""; ?>>อื่นๆ</label> <input  id="inputother2"  type="number" step=any onchange="changeradioother2()" value="<?php if($patient_info->quan_kidney!= 1000 ||$patient_info->quan_kidney!= 1500|| $patient_info->quan_kidney!= 2000){echo $patient_info->quan_kidney;}?>"/> ซีซี -->
								<!-- <input type="text" class="form-control1" value="<?php echo set_value('number'); ?>" name="number">  -->
								<label class="radio-inline "><input type="number" value="<?php echo $patient_info->quan_kidney; ?>" name="quan_kidney"> ซีซี</label>
								<?php echo form_error('quan_kidney'); ?>
							</div>
					</div>
					
				
						<center>
							<button type="submit" class="btn btn-primary"  name="submit" value="Create patient">บันทึก</button>
						</center>
					</form>
				</div>
			</div>
		</div>
	
<script>
	function changeradioother(){
 var other= document.getElementById("other");
    other.value=document.getElementById("inputother").value;
}
function changeradioother1(){
 var other1= document.getElementById("other1");
    other1.value=document.getElementById("inputother1").value;
}
function changeradioother2(){
 var other2= document.getElementById("other2");
    other2.value=document.getElementById("inputother2").value;
}

// $('.ladder1').change(function () {
//     if($(this).is(':checked') {
//         $('.ladder-meters1').attr('required');
//     } else {
//         $('.ladder-meters1').removeAttr('required');
//     }
// });
// $('.ladder2').change(function () {
//     if($(this).is(':checked') {
//         $('.ladder-meters2').attr('required');
//     } else {
//         $('.ladder-meters2').removeAttr('required');
//     }
// });
// $('.ladder3').change(function () {
//     if($(this).is(':checked') {
//         $('.ladder-meters3').attr('required');
//     } else {
//         $('.ladder-meters3').removeAttr('required');
//     }
// });

// $("#optionsRadios1").click(function() {$("#myfields").prop("disabled", false);});
// $("#optionsRadios2").click(function() {$("#myfields").prop("disabled", true);});
// $("#optionsRadios3").click(function() {$("#myfields").prop("disabled", true);});
// $("#optionsRadios4").click(function() {$("#myfields").prop("disabled", true);});
// $("#optionsRadios5").click(function() {$("#myfields2").prop("disabled", true);});
// $("#optionsRadios6").click(function() {$("#myfields2").prop("disabled", true);});
// $("#optionsRadios7").click(function() {$("#myfields2").prop("disabled", true);});
// $("#optionsRadios8").click(function() {$("#myfields2").prop("disabled", false);});
</script>