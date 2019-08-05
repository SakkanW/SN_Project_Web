

<div id="page-wrapper">
			<div class="main-page signup-page">
				<h3 class="title1 serif">แก้ไขข้อมูลส่วนตัว</h3>
				<!-- <p class="creating">Having hands on experience in creating innovative designs,I do offer design 
							solutions which harness.</p> -->
     <form method="post" action="<?php echo site_url('userinfo/info_change/'.$user_info->id); ?>">
            <?php echo form_open('form'); ?>                        
				<div class="sign-up-row widget-shadow">
					<h5 class="serif">ข้อมูลส่วนตัว :</h5>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="serif">ชื่อ-นามสกุล<font style="color: red">*</font> :</h4>
						</div>
						<div class="sign-up2">
                               
								<input type="text"  name="user_name"  value="<?php echo $user_info->name; ?>" required>
                                <span class="text-danger"><?php echo form_error('user_name'); ?></span>
						</div>
						<div class="clearfix"> </div>
					</div>
                    
					<!-- <div class="sign-u">
						<div class="sign-up1">
							<h4 class="serif">นามสกุล* :</h4>
						</div>
						<div class="sign-up2">
							<form>
								<input type="text" required>
							</form>
						</div>
						<div class="clearfix"> </div>
					</div> -->
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="serif">อีเมล<font style="color: red">*</font> :</h4>
						</div>
						<div class="sign-up2">
                        <input type="text" name="user_email"  value="<?php echo $user_info->email; ?>" required/>
                         <span class="text-danger"><?php echo form_error('user_email'); ?></span>
						</div>
						<div class="clearfix"> </div>
					</div>
                    <!-- <div class="sign-u">
						<div class="sign-up1">
							<h4 class="serif">ชื่อผู้ใช้งาน* :</h4>
						</div>
						<div class="sign-up2">
							<form>
								<input type="text" required>
							</form>
						</div>
						<div class="clearfix"> </div>
					</div> -->
                    <div class="sign-u">
						<div class="sign-up1">
							<h4 class="serif">ตำแหน่ง<font style="color: red">*</font> :</h4>
						</div>
						<div class="sign-up2">
							
								<input type="text" name="position" value="<?php echo $user_info->position; ?>" required>
                                <span class="text-danger"><?php echo form_error('position'); ?></span>
						</div>
						<div class="clearfix"> </div>
					</div>
                    <div class="sign-u">
						<div class="sign-up1">
							<h4 class="serif">สิทธิการใช้งานที่ได้รับ:</h4>
						</div>
						<div class="sign-up2">
							
								<input type="text" value="<?php echo 'yes' ?>" disabled>
							
						</div>
						<div class="clearfix"> </div>
                        <div class="sub_home">
						
							<center><input type="submit" value="ยืนยันการแก้ไข"></center>
						
						    <div class="clearfix"> </div>
					    </div>
					</div> 
                    </form>
					<!-- <div class="sign-u">
						<div class="sign-up1">
							<h4>Gender* :</h4>
						</div>
						<div class="sign-up2">
							<label>
								<input type="radio" name="Gender" required>
								Male
							</label>
							<label>
								<input type="radio" name="Gender" required>
								Female
							</label>
						</div>
						<div class="clearfix"> </div>
					</div> -->
                    <form method="post" action="<?php echo site_url('userinfo/password_change/'.$user_info->id); ?>">
					<h6 class="serif">ตั้งรหัสผ่านใหม่ :</h6>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="serif">รหัสผ่านใหม่<font style="color: red">*</font> :</h4>
						</div>
						<div class="sign-up2">
                        <input type="password" name="user_password"   required/>
                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="serif">ยืนยันรหัสผ่านใหม่<font style="color: red">*</font> :</h4>
						</div>
						<div class="sign-up2">
							
								<input type="password" name="confirm_pass"required>
                                <span class="text-danger"><?php echo form_error('confirm_pass'); ?></span>
							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sub_home">
						
							<center><input type="submit" value="เปลี่ยนรหัสผ่าน"></center>
						
						<div class="clearfix"> </div>
					</div>
                    </form>
				</div>
			</div>
		</div>
       
