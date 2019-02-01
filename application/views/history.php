<!DOCTYPE HTML>
<html>
<head>
	<title>โปรแกรมการเก็บข้อมูลผู้ป่วยที่มีภาวะแทรกซ้อนทางไต</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Continuous Ambulatory Peritoneal Dialysis" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- font CSS -->
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome icons -->
	<!-- js-->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<!--webfonts-->
	<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>
	<!--//webfonts-->
	<!-- chart -->
	<script src="js/Chart.js"></script>
	<!-- //chart -->
	<!--animate-->
	<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
	<script src="js/wow.min.js"></script>
	<script>
        new WOW().init();
	</script>
	<!--//end-animate-->
	<!-- Metis Menu -->
	<script src="js/metisMenu.min.js"></script>
	<script src="js/custom.js"></script>
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/addons/datatables.min.css" rel="stylesheet">
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
						<a href="index.html"><i class="fa fa-home nav_icon"></i>หน้าภาพรวม</a>
						<!-- /nav-second-level -->
					</li>
					<li>
						<a href="create-patient.html"><i class="fa fa-file-text-o nav_icon"></i>สร้างข้อมูลผู้ป่วย</a>
						<!-- /nav-second-level -->
					</li>
					<li>
						<a href="find.html"><i class="fa fa-table nav_icon"></i>ค้นหาผู้ป่วย </a>
					</li>
				</ul>
				<div class="clearfix"> </div>
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
	<div id="page-wrapper">
		<div class="main-page">
			<h3 class="title1">ประวัติการรักษา</h3>
			<div class="blank-page widget-shadow scroll" id="style-2 div1">

			</div>
		</div>
	</div>
	<!--footer-->
	<div class="footer">

	</div>
	<!--//footer-->
</div>
<!-- Classie -->
<script src="js/classie.js"></script>
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
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!--//scrolling js-->
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.js"> </script>
<script type="text/javascript" src="js/addons/datatables.min.js"></script>
<script >
    $(document).ready(function () {
        $('#dtBasicExample').DataTable();
        $('.dataTables_length').addClass('bs-select');
    });
</script>
</body>
</html>