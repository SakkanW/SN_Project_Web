<!-- 
<!DOCTYPE html>
<html>
<head>
 <title>Complete User Registration and Login System in Codeigniter</title>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>

<body>
 <div class="container">
  <br />
  <h3 align="center">Complete User Registration and Login System in Codeigniter</h3>
  <br />
  <div class="panel panel-default">
   <div class="panel-heading">Register</div>
   <div class="panel-body">
    <form method="post" action="<?php echo site_url('register/validation'); ?>">
     <div class="form-group">
      <label>Enter Your Name</label>
      <input type="text" name="user_name" class="form-control" value="<?php echo set_value('user_name'); ?>" />
      <span class="text-danger"><?php echo form_error('user_name'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Your Valid Email Address</label>
      <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
      <span class="text-danger"><?php echo form_error('user_email'); ?></span>
     </div>
     <div class="form-group">
      <label>Enter Password</label>
      <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
      <span class="text-danger"><?php echo form_error('user_password'); ?></span>
     </div>
     <div class="form-group">
      <input type="submit" name="register" value="Register" class="btn btn-info" />
     </div>
    </form>
   </div>
  </div>
 </div>
</body>
</html> -->

<!DOCTYPE HTML>
<html>
<head>
<title>โปรแกรมการเก็บข้อมูลผู้ป่วยที่มีภาวะแทรกซ้อนทางไต</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Continuous Ambulatory Peritoneal Dialysis" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link type="text/css" href="<?php echo base_url();?>frontframework/css/bootstrap.css" rel='stylesheet'  />
<link type="text/css" href="<?php echo base_url('bootstrap/css/bootstrap.min.css');?>" rel="stylesheet" />

<!-- Custom CSS -->
<link type="text/css" href="<?php echo base_url();?>frontframework/css/style.css" rel='stylesheet'  />
<!-- dataTable -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" /> -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css" />


<!-- font-awesome icons -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- <link type="text/css" href="<?php echo base_url();?>frontframework/css/font-awesome.css" rel="stylesheet">  -->
<!-- //font-awesome icons -->
<link href="https://fonts.googleapis.com/css?family=Krub&amp;subset=latin-ext,thai,vietnamese" rel="stylesheet"> 
 <!-- js-->
<script src="<?php echo base_url(); ?>frontframework/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url(); ?>frontframework/js/modernizr.custom.js"></script>
<!--webfonts-->
<link type="text/css" href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link type="text/css" href="<?php echo base_url(); ?>frontframework/css/animate.css" rel="stylesheet"  media="all">
<script src="<?php echo base_url(); ?>frontframework/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- chart -->
<script src="<?php echo base_url(); ?>frontframework/js/Chart.js"></script>
<!-- //chart -->

<!-- Metis Menu -->
<script src="<?php echo base_url(); ?>frontframework/js/metisMenu.min.js"></script>
<script src="<?php echo base_url(); ?>frontframework/js/custom.js"></script>
<link type="text/css" href="<?php echo base_url(); ?>frontframework/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->
<style>
p.serif {
	font-family: 'Krub', sans-serif;
}
h3.serif {
	font-family: 'Krub', sans-serif;
}
h4.serif {
	font-family: 'Krub', sans-serif;
}
h5.serif {
	font-family: 'Krub', sans-serif;
}
h6.serif {
	font-family: 'Krub', sans-serif;
}
label.serif {
	font-family: 'Krub', sans-serif;
}
a.serif {
	font-family: 'Krub', sans-serif;
}
}
</style>

</head>

<body>
<form method="post" action="<?php echo site_url('register/validation'); ?>">
<div id="page-wrapper">
			<div class="main-page signup-page">
				<h3 class="title1 serif">สมัครเพื่อเข้าใช้งานระบบ</h3>
				<!-- <p class="creating">Having hands on experience in creating innovative designs,I do offer design 
							solutions which harness.</p> -->
				<div class="sign-up-row widget-shadow">
					<h5 class="serif">ข้อมูลส่วนตัว :</h5>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="serif">ชื่อ-นามสกุล<font style="color: red">*</font> :</h4>
						</div>
						<div class="sign-up2">
							
								<input type="text"  name="user_name"  value="<?php echo set_value('user_name'); ?>" required>
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
                        <input type="text" name="user_email"  value="<?php echo set_value('user_email'); ?>" required/>
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
							
								<input type="text" name="position" value="<?php echo set_value('position'); ?>" required>
							
						</div>
						<div class="clearfix"> </div>
					</div>
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
					<h6 class="serif">ตั้งรหัสผ่าน :</h6>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="serif">รหัสผ่าน<font style="color: red">*</font> :</h4>
						</div>
						<div class="sign-up2">
                        <input type="password" name="user_password"  value="<?php echo set_value('user_password'); ?>" required/>
                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sign-u">
						<div class="sign-up1">
							<h4 class="serif">ยืนยันรหัสผ่าน<font style="color: red">*</font> :</h4>
						</div>
						<div class="sign-up2">
							
								<input type="password" name="confirm_pass"required>
                                <span class="text-danger"><?php echo form_error('confirm_pass'); ?></span>
							
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="sub_home">
						
							<input type="submit" value="ส่ง"> 
                            <h5 class=" text-right serif"> <a href="<?php echo site_url('login'); ?>" > ลงชื่อเข้าใช้ >></a></h5>
						
						<div class="clearfix"> </div>
					</div>
				</div>
			</div>
		</div>
        </form>
</body>
</html>