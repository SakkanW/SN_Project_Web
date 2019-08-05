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
<link type="text/css" href="<?php echo base_url();?>bootstrap/css/bootstrap-theme.css" rel="stylesheet" />

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
<!-- <script src="<?php echo base_url(); ?>frontframework/js/jquery-1.11.1.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> 
<script src="<?php echo base_url(); ?>frontframework/js/modernizr.custom.js"></script>
<!--webfonts-->
<link type="text/css" href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
<!--//webfonts--> 
<!--animate-->
<link type="text/css" href="<?php echo base_url(); ?>frontframework/css/animate.css" rel="stylesheet"  media="all">
<!-- <script src="<?php echo base_url(); ?>frontframework/js/bootstrap.js"> </script> -->
<script src="<?php echo base_url(); ?>frontframework/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!-- chart -->
<script src="<?php echo base_url(); ?>frontframework/js/Chart.js"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<!-- //chart -->

<!-- Metis Menu -->
<script src="<?php echo base_url(); ?>frontframework/js/metisMenu.min.js"></script>
<script src="<?php echo base_url(); ?>frontframework/js/custom.js"></script>
<link type="text/css" href="<?php echo base_url(); ?>frontframework/css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

<!-- datepicker -->
<link href="<?php echo base_url(); ?>frontframework/bootstrap-datepicker-1.6.4-dist/css/bootstrap-datepicker.css" rel="stylesheet" />
<script type="text/javascript" src="<?php echo base_url(); ?>frontframework/bootstrap-datepicker-1.6.4-dist/js/bootstrap-datepicker-custom.js" ></script>
<script type="text/javascript" src="<?php echo base_url(); ?>frontframework/bootstrap-datepicker-1.6.4-dist/locales/bootstrap-datepicker.th.min.js" charset="UTF-8"></script>


<!-- datepicker -->

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
label.serif {
	font-family: 'Krub', sans-serif;
}
a.serif {
	font-family: 'Krub', sans-serif;
}
font.serif {
	font-family: 'Krub', sans-serif;
}
tr.serif {
	font-family: 'Krub', sans-serif;
}



/* Important part */
.modal-dialog{
    overflow-y: initial !important
}
.modal-body{
	
	max-height: calc(100vh - 210px);
    overflow-y: auto;
}
body.modal-open {
    overflow: hidden;
}

</style>

</head>
<body class="cbp-spmenu-push">
	<?php
// $thai_day_arr=array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");   
// $thai_month_arr=array(   
//     "0"=>"",   
//     "1"=>"มกราคม",   
//     "2"=>"กุมภาพันธ์",   
//     "3"=>"มีนาคม",   
//     "4"=>"เมษายน",   
//     "5"=>"พฤษภาคม",   
//     "6"=>"มิถุนายน",    
//     "7"=>"กรกฎาคม",   
//     "8"=>"สิงหาคม",   
//     "9"=>"กันยายน",   
//     "10"=>"ตุลาคม",   
//     "11"=>"พฤศจิกายน",   
//     "12"=>"ธันวาคม"                    
// );   
// $thai_month_arr_short=array(   
//     "0"=>"",   
//     "1"=>"ม.ค.",   
//     "2"=>"ก.พ.",   
//     "3"=>"มี.ค.",   
//     "4"=>"เม.ย.",   
//     "5"=>"พ.ค.",   
//     "6"=>"มิ.ย.",    
//     "7"=>"ก.ค.",   
//     "8"=>"ส.ค.",   
//     "9"=>"ก.ย.",   
//     "10"=>"ต.ค.",   
//     "11"=>"พ.ย.",   
//     "12"=>"ธ.ค."                    
// );   
// function thai_date_and_time($time){   // 19 ธันวาคม 2556 เวลา 10:10:43
//     global $thai_day_arr,$thai_month_arr;   
//     $thai_date_return = date("j",$time);   
//     $thai_date_return.=" ".$thai_month_arr[date("n",$time)];   
//     $thai_date_return.= " ".(date("Y",$time)+543);   
//     $thai_date_return.= " เวลา ".date("H:i:s",$time);
//     return $thai_date_return;   
// } 
// function thai_date_and_time_short($time){   // 19  ธ.ค. 2556 10:10:4
//     global $thai_day_arr,$thai_month_arr_short;   
//     $thai_date_return = date("j",$time);   
//     $thai_date_return.="&nbsp;&nbsp;".$thai_month_arr_short[date("n",$time)];   
//     $thai_date_return.= " ".(date("Y",$time)+543);   
//     $thai_date_return.= " ".date("H:i:s",$time);
//     return $thai_date_return;   
// } 
// function thai_date_short($time){   // 19  ธ.ค. 2556
//     global $thai_day_arr,$thai_month_arr_short;   
//     $thai_date_return = date("j",$time);   
//     $thai_date_return.="&nbsp;&nbsp;".$thai_month_arr_short[date("n",$time)];   
//     $thai_date_return.= " ".(date("Y",$time)+543);   
//     return $thai_date_return;   
// } 
 function date_thai($date)
{
	$str_date_split = explode ("-", $date);
	$year=$str_date_split[0];
	$year=(int)$year+543;
	$date_thai = $str_date_split[2].'/'.$str_date_split[1].'/'.$year;
	return $date_thai;
}
function thai_date_fullmonth($time){   // 19 ธันวาคม 2556

	$thai_day_arr=array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");   
$thai_month_arr=array(   
    "0"=>"",   
    "1"=>"มกราคม",   
    "2"=>"กุมภาพันธ์",   
    "3"=>"มีนาคม",   
    "4"=>"เมษายน",   
    "5"=>"พฤษภาคม",   
    "6"=>"มิถุนายน",    
    "7"=>"กรกฎาคม",   
    "8"=>"สิงหาคม",   
    "9"=>"กันยายน",   
    "10"=>"ตุลาคม",   
    "11"=>"พฤศจิกายน",   
    "12"=>"ธันวาคม"                    
);   
$thai_month_arr_short=array(   
    "0"=>"",   
    "1"=>"ม.ค.",   
    "2"=>"ก.พ.",   
    "3"=>"มี.ค.",   
    "4"=>"เม.ย.",   
    "5"=>"พ.ค.",   
    "6"=>"มิ.ย.",    
    "7"=>"ก.ค.",   
    "8"=>"ส.ค.",   
    "9"=>"ก.ย.",   
    "10"=>"ต.ค.",   
    "11"=>"พ.ย.",   
    "12"=>"ธ.ค."                    
);   
    // global $thai_day_arr,$thai_month_arr;   
    $thai_date_return = date("j",$time);   
    $thai_date_return.=" ".$thai_month_arr[date("n",$time)];   
    $thai_date_return.= " ".(date("Y",$time)+543);   
    return $thai_date_return;   
} 
// function thai_date_short_number($time){   // 19-12-56
//     global $thai_day_arr,$thai_month_arr;   
//     $thai_date_return = date("d",$time);   
//     $thai_date_return.="-".date("m",$time);   
//     $thai_date_return.= "-".substr((date("Y",$time)+543),-2);   
//     return $thai_date_return;   
// } 
?>
	<div class="main-content">
		<!--left-fixed -navigation-->
		<div class=" sidebar" role="navigation">

            <div class="navbar-collapse">
				<nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left" id="cbp-spmenu-s1">
					<ul class="nav" id="side-menu">
						<li>
							<a href="<?php echo site_url('dashboard') ?>" class = "serif"><i class="fa fa-home nav_icon" ></i> หน้าภาพรวม</p></a>
							<!-- //nav-second-level -->
						</li>
						<li>
							<!-- <a href="<?php echo site_url('createpatient') ?>" class = "serif"><i class="fa fa-file-text-o nav_icon"></i>สร้างข้อมูลผู้ป่วย</a> -->
							<?php if($this->session->userdata('status') =='ผู้ดูแล')
							{

							
							?>
							<a href="#" class = "serif"><i class="fa fa-file-text-o nav_icon"></i>บุคลากร  <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="<?php echo site_url('user_management') ?>" class = "serif">จัดการผู้ใช้งาน</a>
								</li>
								
							</ul>
							<?php
							}?>
							<!-- /nav-second-level -->
							<!-- //nav-second-level -->
						</li>
						<li>
							<!-- <a href="<?php echo site_url('createpatient') ?>" class = "serif"><i class="fa fa-file-text-o nav_icon"></i>สร้างข้อมูลผู้ป่วย</a> -->
							<a href="#" class = "serif"><i class="fa fa-file-text-o nav_icon"></i>ผู้ป่วย  <span class="fa arrow"></span></a>
							<ul class="nav nav-second-level collapse">
								<li>
									<a href="<?php echo site_url('createpatient') ?>" class = "serif">สร้างข้อมูลผู้ป่วย</a>
								</li>
								<li>
									<a href="<?php echo site_url('findpatient') ?>" class = "serif">ค้นหาผู้ป่วย</a>
								</li>
							</ul>
							<!-- /nav-second-level -->
							<!-- //nav-second-level -->
						</li>
						<!-- <li>
							<a href="<?php echo site_url('findpatient') ?>" class = "serif"><i class="fa fa-table nav_icon"></i>ค้นหาผู้ป่วย </a> -->
							<!-- //nav-second-level -->
						<!-- </li> -->
						<li>
							<a href="<?php echo site_url('food_edit/create') ?>" class = "serif"><i class="fa fa-calculator nav_icon"></i>เพิ่ม/ลบอาหาร</a>
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
										<!-- <p>รัตนา มงคล</p> -->
										<p class="serif"><?php echo $this->session->userdata('name'); ?></p>
										<span><?php echo $this->session->userdata('position'); ?></span>
									</div>
									<i class="fa fa-angle-down lnr"></i>
									<i class="fa fa-angle-up lnr"></i>
									<div class="clearfix"></div>
							</a>
							<ul class="dropdown-menu drp-mnu">
								<li> <a href="<?php echo site_url('userinfo/index/'.$this->session->userdata('id')) ?>"><i class="fa fa-user"></i> ข้อมูลส่วนตัว</a> </li>
								<li> <a href="<?php echo site_url('private_area/logout')?>"><i class="fa fa-sign-out"></i> ลงชื่อออก</a> </li>
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

   <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
</body>
</html>