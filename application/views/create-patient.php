
		<!-- main content start-->
		<div id="page-wrapper">
			<div class="row">
				<h3 class="title1 serif">สร้างข้อมูลผู้ป่วย</h3>
				<div class="form-three widget-shadow">
				
					<form class="form-horizontal"  action="<?php echo site_url('createpatient/create') ?>" method="post" >
					
                    <?php echo form_open('form'); ?>  
						<div class="form-group">
							<label for="firstname" class="col-sm-2 control-label serif">ชื่อ<font style="color: red">*</font></label>
							<div class="col-sm-8">
								<input type="text" class="form-control1"   value="<?php echo set_value('firstname'); ?>" name="firstname">
								<?php echo form_error('firstname'); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="lastname" class="col-sm-2 control-label serif">นามสกุล<font style="color: red">*</font></label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" value="<?php echo set_value('lastname'); ?>" name="lastname">
								<?php echo form_error('lastname'); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="idcard" class="col-sm-2 control-label serif">เลขบัตรประชาชน<font style="color: red">*</font></label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" id="idcard" value="<?php echo set_value('idcard'); ?>" name="idcard">
								<?php echo form_error('idcard'); ?>
							</div>
						</div>
						<div class="form-group"> 
							<label for="birthday" class="col-sm-2 control-label serif">เกิดวันที่<font style="color: red">*</font></label>
							<div class="col-sm-8">
								<input type="text" class="form-control1" value="<?php echo set_value('birthday'); ?>" name="birthday" placeholder="วว/ดด/ปปปป(พ.ศ.)">
								<?php echo form_error('birthday'); ?>
								<!-- <input type="text" class="form-control1" id="birthday"  name="birthday"> -->
							</div>
						</div>
						<div class="form-group"> 
							<label for="radio-inline" class="col-sm-2 control-label serif">เพศ<font style="color: red">*</font></label>
							<div class="col-sm-8">
							<label class="radio-inline"><input type="radio" name="sex_pa" value="ชาย" <?php echo set_radio('sex_pa', 'ชาย'); ?>>ชาย<br></label>
							<label class="radio-inline"><input type="radio"   name="sex_pa" value="หญิง"  <?php echo set_radio('sex_pa', 'หญิง'); ?>>หญิง<br></label>
							<?php echo form_error('sex_pa'); ?>
			
							</div>
							
						</div>
						
						<div class="form-group">
							<label for="address" class="col-sm-2 control-label serif">ที่อยู่<font style="color: red">*</font></label>
							<div class="col-sm-8">
								<textarea  rows="10" cols="90" name="address"><?php echo set_value('address');?></textarea>
								<?php echo form_error('address'); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="tel_no" class="col-sm-2 control-label serif">เบอร์โทรศัพท์<font style="color: red">*</font></label>
							<div class="col-sm-8">
								<input type="text" class="form-control1"  value="<?php echo set_value('tel_no'); ?>" name="tel_no">
								<?php echo form_error('tel_no'); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="user_email" class="col-sm-2 control-label serif">อีเมล</label>
							<div class="col-sm-8">
								<input type="text" class="form-control1"  value="<?php echo set_value('user_email'); ?>" name="user_email">
								<?php echo form_error('user_email'); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="weight" class="col-sm-2 control-label serif">น้ำหนัก(กก.)<font style="color: red">*</font></label>
							<div class="col-md-3 ">
								<input type="text" class="form-control1" value="<?php echo set_value('weight'); ?>"  name="weight">
								<?php echo form_error('weight'); ?>
							</div>
							<label for="height" class="col-sm-2 control-label serif">ส่วนสูง(ซม.)<font style="color: red">*</font></label>
							<div class="col-md-3 ">
								<input type="text" class="form-control1" value="<?php echo set_value('height'); ?>" name="height">
								<?php echo form_error('height'); ?>
							</div>
						</div>
						<div class="form-group">
							<label for="blood" class="col-sm-2 control-label serif">น้ำตาลในเลือด<font style="color: red">*</font></label>
							<div class="col-md-3 ">
								<input type="text" class="form-control1" value="<?php echo set_value('blood'); ?>"  name="blood">
								<?php echo form_error('blood'); ?>
							</div> 
							<label for="num_family" class="col-sm-2 control-label serif">จำนวนสมาชิกในครอบครัว<font style="color: red">*</font></label>
							<div class="col-md-3 ">
								<input type="text" class="form-control1" value="<?php echo set_value('num_family'); ?>" name="num_family">
								<?php echo form_error('num_family'); ?>

							</div>
						</div>
						<div class="form-group">
							<label for="radio-inline" class="col-sm-2 control-label serif">ผู้ป่วยเป็น<font style="color: red">*</font></label>
							<div class="col-sm-3">
								<label class="radio-inline"><input type="radio" name="stat_fam" value="หัวหน้าครอบครัว" <?php echo set_radio('stat_fam', 'หัวหน้าครอบครัว'); ?>>หัวหน้าครอบครัว</label>
								<label class="radio-inline"><input type="radio" name="stat_fam" value="สมาชิก"<?php echo set_radio('stat_fam', 'สมาชิก'); ?>>สมาชิก</label>
								<?php echo form_error('stat_fam'); ?>
							</div>
			
						</div>
						<div class="form-group">
							<label for="start" class="col-sm-2 control-label serif">เริ่มล้างไตทางช่องท้อง(ปี พศ.)<font style="color: red">*</font></label>
							<div class="col-md-3 ">
								<input type="text" class="form-control1"  value="<?php echo set_value('start'); ?>" name="start" >
								<?php echo form_error('start'); ?>
							</div>
						</div>
						<div class="form-group">
						<label for="checkbox" class="col-sm-2 control-label serif">ระบบที่ผู้ป่วยใช้<font style="color: red">*</font></label>
						<div class="col-sm-3">
							<label class="radio-inline"><input type="radio" name="system_use" value="ระบบถุงคู่ Twinbag" <?php echo set_radio('system_use', "ระบบถุงคู่ Twinbag"); ?> >ระบบถุงคู่ Twinbag</label>
							
						</div>
						<div class="col-sm-3">
							<label class="radio-inline"><input type="radio" name="system_use" value="ระบบถุงคู่ใช้จานหมุน ANY disc" <?php echo set_radio('system_use', "ระบบถุงคู่ใช้จานหมุน ANY disc"); ?>>ระบบถุงคู่ใช้จานหมุน ANY disc</label>
							
						</div>
						<div class="col-sm-3">
							<label class="radio-inline"><input type="radio" name="system_use" value="เครื่องล้างไตอัตโนมัติ APD" <?php echo set_radio('system_use', "เครื่องล้างไตอัตโนมัติ APD"); ?>>เครื่องล้างไตอัตโนมัติ APD</label>
						
						</div>
						
					</div>
					<?php echo form_error('system_use'); ?>
					<div class="form-group">
							<label for="intensity" class="col-sm-2 control-label serif">ความเข้มข้นของน้ำยาล้างไต<font style="color: red">*</font></label>
							<div class="col-md-8">
								<!-- <label class="radio-inline "><input type="radio" name="intensity" value="1.5" <?php echo set_radio('intensity', "1.5"); ?>>1.5%</label>
								<label class="radio-inline "><input type="radio" name="intensity" value="2.5" <?php echo set_radio('intensity', "2.5"); ?>>2.5%</label>
								<label class="radio-inline"><input type="radio" name="intensity" value="4.25" <?php echo set_radio('intensity', "4.25"); ?>>4.25%</label>
								<label class="radio-inline "><input type="radio"  name="intensity" id = "other" value="other"  <?php echo set_radio('intensity', "other"); ?> >อื่นๆ  </label> <input  id="inputother"  type="number" step=any  onchange="changeradioother()" /> % -->
								<label class="radio-inline "><input type="number" value="<?php echo set_value('intensity'); ?>" name="intensity"> %</label>
								<?php echo form_error('intensity'); ?>
							</div>
							
							
					</div>
							<div class="form-group">
							<label for="number" class="col-sm-2 control-label serif">จำนวนรอบ<font style="color: red">*</font></label> 
							<div class="col-md-8 ">
								<!-- <label class="radio-inline "><input type="radio" name="number" value="1" <?php echo set_radio('number', "1"); ?>>1 รอบ</label>
								<label class="radio-inline "><input type="radio" name="number" value="2" <?php echo set_radio('number', "2"); ?>>2 รอบ</label>
								<label class="radio-inline "><input type="radio" name="number" value="3" <?php echo set_radio('number', "3"); ?>>3 รอบ</label>
								<label class="radio-inline "><input type="radio" name="number" value="4" <?php echo set_radio('number', "4"); ?>>4 รอบ</label>
								<label class="radio-inline "><input type="radio" name="number" id = "other1" value="other1" <?php echo set_radio('number', "other1"); ?>>อื่นๆ</label> <input  id="inputother1"  type="number" step=any onchange="changeradioother1()" /> รอบ -->
								<!-- <input type="text" class="form-control1" value="<?php echo set_value('number'); ?>" name="number">  -->
								<label class="radio-inline "><input type="number" value="<?php echo set_value('number'); ?>" name="number"> รอบ</label>
								<?php echo form_error('number'); ?>
							</div>
					</div>
					<div class="form-group">
							<label for="number" class="col-sm-2 control-label serif">ปริมาณน้ำยาล้างไต<font style="color: red">*</font></label> 
							<div class="col-md-8 ">
								<!-- <label class="radio-inline "><input type="radio" name="quan_kidney" value="1000" <?php echo set_radio('quan_kidney', "1000"); ?>>1000 ซีซี</label>
								<label class="radio-inline "><input type="radio" name="quan_kidney" value="1500" <?php echo set_radio('quan_kidney', "1500"); ?>>1500 ซีซี</label>
								<label class="radio-inline "><input type="radio" name="quan_kidney" value="2000" <?php echo set_radio('quan_kidney', "2000"); ?>>2000 ซีซี</label>
								<label class="radio-inline "><input type="radio" name="quan_kidney" id = "other2" value="other2" <?php echo set_radio('quan_kidney', "other2"); ?>>อื่นๆ</label> <input  id="inputother2"  type="number" step=any onchange="changeradioother2()" /> ซีซี -->
								<label class="radio-inline "><input type="number" value="<?php echo set_value('quan_kidney'); ?>" name="quan_kidney"> ซีซี</label>
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