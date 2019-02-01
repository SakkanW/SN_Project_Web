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
<!-- font CSS -->

<!-- font-awesome icons -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<!-- <link type="text/css" href="<?php echo base_url();?>frontframework/css/font-awesome.css" rel="stylesheet">  -->
<!-- //font-awesome icons -->

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

</head>
<body class="cbp-spmenu-push">
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">

            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="dashboard" ><i class="fa fa-home nav_icon" ></i>หน้าภาพรวม</a>
							<!-- //nav-second-level -->
						</li>
						<li>
							<a href="createpatient"><i class="fa fa-file-text-o nav_icon"></i>สร้างข้อมูลผู้ป่วย</a>
							<!-- //nav-second-level -->
						</li>
						<li>
							<a href="findpatient"><i class="fa fa-table nav_icon"></i>ค้นหาผู้ป่วย </a>
							<!-- //nav-second-level -->
						</li>
					</ul>
					<!-- //sidebar-collapse -->
				</nav>
			</div>
		</div>
		<!--left-fixed -navigation-->

		<!-- header-starts -->
		<div class="sticky-header header-section ">

			<div class="header-left">
				<!--toggle button start-->
				<button id="showLeftPush"><i class="fa fa-bars"></i></button>
				<!--toggle button end-->
				<!--logo -->
				<div class="logo">
					<a href="index.html">
						<h1>PCK</h1>
						<span>CAPD</span>
					</a>
				</div>
				<!--//logo-->
				<div class="clearfix"> </div>
			</div>
			<div class="header-right">
				<!--notification menu end -->
				<div class="profile_details">
					<ul>
						<li class="dropdown profile_details_drop">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="user-name">
										<p>รัตนา มงคล</p>
										<span>พยาบาลวิชาชีพเชี่ยวชาญ</span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="#"><i class="fa fa-user"></i> ข้อมูลส่วนตัว</a> </li>
								<li> <a href="#"><i class="fa fa-sign-out"></i> ลงชื่อออก</a> </li>
							</ul>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //header-ends -->
		<!-- main content start-->
	

		<?php $this->load->view($content); ?>
		
		<!--footer-->
		<div class="footer">

		</div>
        <!--//footer-->
	</div>
	<!-- Classie -->
		<script src="<?php echo base_url(); ?>frontframework/js/classie.js"></script>
		<script>
			var menuLeft = document.getElementById( 'cbp-spmenu-s1' ),
				showLeftPush = document.getElementById( 'showLeftPush' ),
				body = document.body;
				
			showLeftPush.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( body, 'cbp-spmenu-push-toright' );
				classie.toggle( menuLeft, 'cbp-spmenu-open' );
				disableOther( 'showLeftPush' );
			};
			

			function disableOther( button ) {
				if( button !== 'showLeftPush' ) {
					classie.toggle( showLeftPush, 'disabled' );
				}
			}
		</script>
	<!--scrolling js-->
	<script src="<?php echo base_url(); ?>frontframework/js/jquery.nicescroll.js"></script>
	<script src="<?php echo base_url(); ?>frontframework/js/scripts.js"></script>
	<!--//scrolling js-->
	<!-- Bootstrap Core JavaScript -->
   <script src="<?php echo base_url(); ?>frontframework/js/bootstrap.js"> </script>
</body>
</html>