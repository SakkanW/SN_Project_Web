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
        <h3 align="center">เข้าสู่ระบบ</h3>
        <br />
        <div class="panel panel-default">
            <div class="panel-heading">Login</div>
            <div class="panel-body">
            <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                ?>
                <form method="post" action="<?php echo site_url('login/validation'); ?>">
                    <div class="form-group">
                        <label>Enter Email Address</label>
                        <input type="text" name="user_email" class="form-control" value="<?php echo set_value('user_email'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                    </div>
                    <div class="form-group">
                        <label>Enter Password</label>
                        <input type="password" name="user_password" class="form-control" value="<?php echo set_value('user_password'); ?>" />
                        <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="login" value="Login" class="btn btn-info" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('register'); ?>">Register</a>
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
<div id="page-wrapper">
			<div class="main-page login-page ">
				<h3 class="title1 serif">เข้าสู่ระบบ</h3>
				<div class="widget-shadow">
					<div class="login-top">
						<h4 class="serif">ยินดีต้อนรับ <br> ยังไม่ได้เป็นสมาชิกใช่ไหม? <a href="<?php echo site_url('register'); ?>">  สมัครเลย »</a> </h4>
					</div>
					<div class="login-body">
                    <?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                ?>
						<form method="post" action="<?php echo site_url('loginmobile/validation'); ?>">
							<input type="text" class="user" name="user_email" placeholder="Enter your email" required="" value="<?php echo set_value('user_email'); ?>">
                            <span class="text-danger"><?php echo form_error('user_email'); ?></span>
							<input type="password" name="user_password" class="lock" placeholder="password" value="<?php echo set_value('user_password'); ?>">
                            <span class="text-danger"><?php echo form_error('user_password'); ?></span>
							<input type="submit" name="Sign In" value="ลงชื่อเข้าใช้">
							<div class="forgot-grid">
								<!-- <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i></i>Remember me</label> -->
								<div class="forgot">
									<a href="#">ลืมรหัสผ่าน?</a>
								</div>
								<div class="clearfix"> </div>
							</div>
						</form>
					</div>
				</div>
</body>
</html>