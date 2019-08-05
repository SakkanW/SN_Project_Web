
    

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
<!-- <div id="page-wrapper"> -->
<!-- <div class="container"> -->
		
		<!-- <form class="form-horizontal well" method="post" id="form" action="/index.php/login/doforget">
			<fieldset>
	          <legend>Reset password</legend>
			
				<div class="control-group">
					<label for="email"> Email</label>
					<input class="box" type="text" id="email" name="email" />
				</div>
				<div class="form-actions">
					<input type="submit" class="btn btn-primary" value="Reset" />
				</div>
				<?php if( isset($info)): ?>
					<div class="alert alert-success">
						<?php echo($info) ?>
					</div>
				<?php elseif( isset($error)): ?>
					<div class="alert alert-error">
						<?php echo($error) ?>
					</div>
				<?php endif; ?>
				
			</fieldset>
		</form>
    </div> -->

    <div id="page-wrapper">
			<div class="main-page">
            <center>
							<div class="inline-form widget-shadow" style="height: 200px;width: 50%;">
								<div class="form-title">
									<h4 class="serif text-left">เปลี่ยนรหัสผ่าน : </h4>
								</div>
								<div class="form-body">
									<form data-toggle="validator">
										<div class="form-group has-feedback">
											<input type="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Bruh, that email address is invalid" required>
											<span class="glyphicon form-control-feedback" aria-hidden="true"></span>
										</div>
										<!-- <div class="form-group">
											<input type="text" data-toggle="validator" data-minlength="6" class="form-control" id="inputPassword" placeholder="Enter your phone number" required>
										</div> -->
										<div class="bottom">
											<div class="form-group">
												<center><button type="submit" class="btn btn-primary disabled">ส่ง</button></center>
											</div>
                                        </div>
                                        <div class="forgot">
									<a href="<?php echo site_url('login'); ?>">ลงชื่อเข้าใช้>></a>
								</div>
									</form>
								</div>
							</div>
                        </div>
                        <center>
						<div class="clearfix"> </div>	
					</div>
				</div>
			<!-- </div>
		</div> -->

</body>
</html>