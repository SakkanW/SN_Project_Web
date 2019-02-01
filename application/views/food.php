<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Novus Admin Panel an Admin Panel Category Flat Bootstrap Responsive Website Template | General Elements :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Novus Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
			<div class="main-page general">
				<div class="panel-group tool-tips widget-shadow" id="accordion" role="tablist" aria-multiselectable="true">
					<h4 class="title2"> อาหารแลกเปลี่ยน </h4>
				  <div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
					  <h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						  กับข้าวร่วมสำรับ
						</a>
					  </h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
					  <div class="panel-body">
						  <div class="table-responsive bs-example widget-shadow">
							  <table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>จำนวนที่กินต่อวัน</th> <th>เพิ่ม</th></tr> </thead>
								  <tbody>
								  <tr><th scope="row">1</th> <td>ไข่เจียว</td> <td>1 ฟอง</td> <td>150</td> <td>7</td> <td>400</td> <td><input type="text" class="form-control1" id="side_input1"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
								  <tr><th scope="row">2</th> <td>ไข่ตุ๋น</td> <td>1 ฟอง</td> <td>100</td> <td>7</td> <td>700</td> <td><input type="text" class="form-control1" id="side_input2"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
								  <tr><th scope="row">3</th> <td>ผัดผัก ใส่เนื้อสัตว์</td> <td>1 ช้อนโต๊ะ</td> <td>12</td> <td>0.6</td> <td>60</td> <td><input type="text" class="form-control1" id="side_input3"></td><td><button type="submit" class="btn btn-default">เลือก</button></td></tr>
								  <tr><th scope="row">4</th> <td>ผัดผัก ไม่ใส่เนื้อสัตว์</td> <td>1 ช้อนโต๊ะ</td> <td>8</td> <td>0.2</td> <td>40</td> <td><input type="text" class="form-control1" id="side_input4"></td><td><button type="submit" class="btn btn-default">เลือก</button></td></tr>
								  <tr><th scope="row">5</th> <td>ผัดเผ็ด,ฉู่ฉี่,เนื้อสัตว์ผัด,ลาบ,หมก</td> <td>1 ช้อนโต๊ะ</td> <td>16</td> <td>1.5</td> <td>90</td> <td><input type="text" class="form-control1" id="side_input5"></td><td><button type="submit" class="btn btn-default">เลือก</button></td></tr>
								  <tr><th scope="row">6</th> <td>ยำมีเนื้อสัตว์</td> <td>1 ช้อนโต๊ะ</td> <td>13</td> <td>0.7</td> <td>70</td> <td><input type="text" class="form-control1" id="side_input6"></td><td><button type="submit" class="btn btn-default">เลือก</button></td></tr>
								  <tr><th scope="row">7</th> <td>ส้มตำ</td> <td>1 ช้อนโต๊ะ</td> <td>5</td> <td>0.2</td> <td>55</td> <td><input type="text" class="form-control1" id="side_input7"></td><td><button type="submit" class="btn btn-default">เลือก</button></td></tr>
								  <tr><th scope="row">8</th> <td>ต้มยำ,แกงส้ม,แป๊ะซะ,แกงป่า,แกงเลี้ยง,แกงผัก,แกงจืด</td> <td>1 ช้อนโต๊ะ</td> <td>6</td> <td>0.6</td> <td>50</td> <td><input type="text" class="form-control1" id="side_input8"></td><td><button type="submit" class="btn btn-default">เลือก</button></td></tr>
								  <tr><th scope="row">9</th> <td>แกงแพนง,ห่อหมก</td> <td>1 ช้อนโต๊ะ</td> <td>27</td> <td>2</td> <td>70</td> <td><input type="text" class="form-control1" id="side_input9"></td><td><button type="submit" class="btn btn-default">เลือก</button></td></tr>
								  <tr><th scope="row">10</th> <td>แกงเผ็ด,แกงเขียวหวาน,แกงกะทิ,ต้มข่า</td> <td>1 ช้อนโต๊ะ</td> <td>15</td> <td>1</td> <td>60</td> <td><input type="text" class="form-control1" id="side_input10"></td><td><button type="submit" class="btn btn-default">เลือก</button></td></tr>
								  <th scope="row">11</th> <td>นำ้พริก ใส่เนื้อสัตว์</td> <td>1 ช้อนโต๊ะ</td> <td>42</td> <td>2.3</td> <td>400</td> <td><input type="text" class="form-control1" id="side_input11"></td><td><button type="submit" class="btn btn-default">เลือก</button></td></tr>
								  <th scope="row">12</th> <td>ป่น,แจ่ว,จ่อม ใส่เนื้อสัตว์</td> <td>1 ช้อนโต๊ะ</td> <td>8</td> <td>1</td> <td>140</td> <td><input type="text" class="form-control1" id="side_input12"></td><td><button type="submit" class="btn btn-default">เลือก</button></td></tr>
								  <th scope="row">13</th> <td>ป่น,แจ่ว,จ่อม ไม่ใส่เนื้อสัตว์</td> <td>1 ช้อนโต๊ะ</td> <td>10</td> <td>0.4</td> <td>150</td> <td><input type="text" class="form-control1" id="side_input13"></td><td><button type="submit" class="btn btn-default">เลือก</button></td></tr>
								  </tbody>
							  </table>
						  </div>
					  </div>
					</div>
				  </div>
				  <div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingTwo">
					  <h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							หมวดอาหารจานเดียว
						</a>
					  </h4>
					</div>
					<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					  <div class="panel-body">
						  <table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>จำนวนที่กินต่อวัน</th> <th>เพิ่ม</th></tr> </thead>
							  <tbody>
							  <tr><th scope="row">1</th> <td>ข้าวราดกับข้าว 1-2 อย่าง</td> <td>1 จาน</td> <td>530</td> <td>19</td> <td>840</td> <td><input type="text" class="form-control1" id="fast_input1"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
							  <tr><th scope="row">2</th> <td>ข้าวต้มเครื่อง/โจ๊ก ไม่ใส่กระเทียมเจียว</td> <td>1 ชาม</td> <td>350</td> <td>12</td> <td>910</td> <td><input type="text" class="form-control1" id="fast_input2"></td><td><button type="fast_submit2" class="btn btn-default">เลือก</button></td> </tr>
							  <tr><th scope="row">3</th> <td>ข้าวผัด/ก๋วยเตี๋ยวผัด</td> <td>1 จาน</td> <td>580</td> <td>18</td> <td>1200</td> <td><input type="text" class="form-control1" id="fast_input3"></td><td><button type="submit" class="btn btn-default">เลือก</button></td></tr>
							  <tr><th scope="row">4</th> <td>ก๋วยเตี๋ยวนำ้/ขนมจีน</td> <td>1 ชาม</td> <td>330</td> <td>19</td> <td>1850</td> <td><input type="text" class="form-control1" id="fast_input4"></td><td><button type="submit" class="btn btn-default">เลือก</button></td></tr>
							  <tr><th scope="row">5</th> <td>ก๋วยเตี๋ยวแห้ง ไม่ใส่กระเทียมเจียว</td> <td>1 ชาม</td> <td>380</td> <td>16</td> <td>870</td> <td><input type="text" class="form-control1" id="fast_input5"></td><td><button type="submit" class="btn btn-default">เลือก</button></td></tr>
							  <tr><th scope="row">6</th> <td>ราดหน้า</td> <td>1 จาน</td> <td>405</td> <td>12</td> <td>1450</td> <td><input type="text" class="form-control1" id="fast_input6"></td><td><button type="submit" class="btn btn-default">เลือก</button></td></tr>
							  </tbody>
						  </table>
					  </div>
					</div>
				  </div>
				  <div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingThree">
					  <h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							หมวดข้าวและแป้ง
						</a>
					  </h4>
					</div>
					<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					  <div class="panel-body">
						  <table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>จำนวนที่กินต่อวัน</th> <th>เพิ่ม</th></tr> </thead>
							  <tbody>
							  <tr><th scope="row">1</th> <td>ข้าวสวย/เส้นก๋วยเตี๋ยว/เส้นขนมจีน</td> <td>1 ทัพพี *ข้าวเหนียว (1/2 ทัพพี)</td> <td>70</td> <td>2</td> <td>7</td> <td><input type="text" class="form-control1" id="flour_input1"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
							  <tr><th scope="row">2</th> <td>ขนมปังแผ่น</td> <td>1 แผ่น</td> <td>70</td> <td>2</td> <td>130</td> <td><input type="text" class="form-control1" id="input2"></td><td><button type="fast_submit2" class="btn btn-default">เลือก</button></td> </tr>
							  </tbody>
						  </table>
					  </div>
					</div>
				  </div>
				  <div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingFour">
					  <h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
							หมวดแป้งปลอดโปรตีน
						</a>
					  </h4>
					</div>
					<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
					  <div class="panel-body">
						  <table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>จำนวนที่กินต่อวัน</th> <th>เพิ่ม</th></tr> </thead>
							  <tbody>
							  <tr><th scope="row">1</th> <td>วุ้นเส้น/เส้นก๋วยเตี๋ยวเซี่ยงไฮ้/สาคู</td> <td>1 ทัพพี </td> <td>70</td> <td>-</td> <td>7</td> <td><input type="text" class="form-control1" id="noflour_input1"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
							  </tbody>
						  </table>
					  </div>
					</div>
				  </div>
				  <div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingFive">
					  <h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
							หมวดไขมัน
						</a>
					  </h4>
					</div>
					<div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
					  <div class="panel-body">
						  <table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>จำนวนที่กินต่อวัน</th> <th>เพิ่ม</th></tr> </thead>
							  <tbody>
							  <tr><th scope="row">1</th> <td>นำ้มัน/ครีมเทียม/กะทิ/นำ้สลัด</td> <td>1 ช้อนชา/2 ช้อนชา/1 ช้อนโต๊ะ </td> <td>45</td> <td>-</td> <td>N/A</td> <td><input type="text" class="form-control1" id="fat_input1"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
							  </tbody>
						  </table>
					  </div>
					</div>
				  </div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingSix">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
									หมวดเนื้อสัตว์
								</a>
							</h4>
						</div>
						<div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
							<div class="panel-body">
								<table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>จำนวนที่กินต่อวัน</th> <th>เพิ่ม</th></tr> </thead>
									<tbody>
									<tr><th scope="row">1</th> <td>เนื้อสัตว์สุก</td> <td>1 ช้อนโต๊ะ </td> <td>35</td> <td>3.5</td> <td>17.5</td> <td><input type="text" class="form-control1" id="meat_input1"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									<tr><th scope="row">2</th> <td>อาหารทะเล หรือไข่</td> <td>1 ช้อนโต๊ะ / 1/2 ฟอง </td> <td>35</td> <td>3.5</td> <td>30</td> <td><input type="text" class="form-control1" id="meat_input2"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									<tr><th scope="row">3</th> <td>เนื้อสัตว์แปรรูป/ตากแห้ง</td> <td>1 ช้อนโต๊ะ </td> <td>35</td> <td>2.5</td> <td>80</td> <td><input type="text" class="form-control1" id="meat_input3"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									<tr><th scope="row">4</th> <td>ถั่ว/ธัญพืช</td> <td>1 ช้อนโต๊ะ </td> <td>50</td> <td>2</td> <td>30</td> <td><input type="text" class="form-control1" id="meat_input4"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingSeven">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
									หมวดผัก
								</a>
							</h4>
						</div>
						<div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
							<div class="panel-body">
								<table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>จำนวนที่กินต่อวัน</th> <th>เพิ่ม</th></tr> </thead>
									<tbody>
									<tr><th scope="row">1</th> <td>ผักสุก หรือ ผักสด</td> <td>1 ทัพพี หรือ 2ทัพพี </td> <td>25</td> <td>1</td> <td>15</td> <td><input type="text" class="form-control1" id="veg_input1"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									<tr><th scope="row">2</th> <td>ผักแปรรูป/ดอง/กระป๋อง</td> <td>1 ทัพพี </td> <td>15</td> <td>0.8</td> <td>300</td> <td><input type="text" class="form-control1" id="veg_input2"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingEight">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
									หมวดผลไม้
								</a>
							</h4>
						</div>
						<div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
							<div class="panel-body">
								<table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>จำนวนที่กินต่อวัน</th> <th>เพิ่ม</th></tr> </thead>
									<tbody>
									<tr><th scope="row">1</th> <td>ผลไม้สด</td> <td>1 ส่วน</td> <td>70</td> <td>0.5</td> <td>2</td> <td><input type="text" class="form-control1" id="fruit_input1"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									<tr><th scope="row">2</th> <td>ผลไม้อบแห้ง</td> <td>1 ช้อนโต๊ะ </td> <td>3.5</td> <td>-</td> <td>2.5</td> <td><input type="text" class="form-control1" id="fruit_input2"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									<tr><th scope="row">3</th> <td>ผลไม้ดอง</td> <td>1 ช้อนโต๊ะ</td> <td>70</td> <td>0.5</td> <td>50</td> <td><input type="text" class="form-control1" id="fruit_input3"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									<tr><th scope="row">4</th> <td>ผลไม้แปรรูป</td> <td>1 ถ้วยตวง </td> <td>340</td> <td>-</td> <td>15</td> <td><input type="text" class="form-control1" id="fruit_input4"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingNine">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
									หมวดขนม
								</a>
							</h4>
						</div>
						<div id="collapseNine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingNine">
							<div class="panel-body">
								<table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>จำนวนที่กินต่อวัน</th> <th>เพิ่ม</th></tr> </thead>
									<tbody>
									<tr><th scope="row">1</th> <td>ขนมกรุบกรอบ</td> <td>1 ห่อเล็ก 30 g</td> <td>150</td> <td>2</td> <td>140</td> <td><input type="text" class="form-control1" id="sweet_input1"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									<tr><th scope="row">2</th> <td>ขนมไทย</td> <td>1 ชื้น </td> <td>100</td> <td>1</td> <td>25</td> <td><input type="text" class="form-control1" id="sweet_input2"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									<tr><th scope="row">3</th> <td>ขนมไทยใส่กะทิ</td> <td>1 ถ้วย </td> <td>350</td> <td>4.5</td> <td>140</td> <td><input type="text" class="form-control1" id="sweet_input3"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									<tr><th scope="row">4</th> <td>ขนม/เบเกอร์รี่ใส่เนื้อสัตว์หรือชีส</td> <td>1 ชิ้น </td> <td>260</td> <td>10</td> <td>400</td> <td><input type="text" class="form-control1" id="sweet_input4"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									<tr><th scope="row">5</th> <td>ขนม/เบเกอร์รี่ ไส้ถั่ว หรือ ไม่มีเนื้อสัตว์</td> <td>1 ชิ้น </td> <td>240</td> <td>4.5</td> <td>200</td> <td><input type="text" class="form-control1" id="sweet_input5"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingTen">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
									หมวดเครื่องดื่ม
								</a>
							</h4>
						</div>
						<div id="collapseTen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTen">
							<div class="panel-body">
								<table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>จำนวนที่กินต่อวัน</th> <th>เพิ่ม</th></tr> </thead>
									<tbody>
									<tr><th scope="row">1</th> <td>นำ้หวาน/นำ้สมุนไพร/นำ้ผลไม้</td> <td>1 แก้ว/240 cc.</td> <td>130</td> <td>-</td> <td>60</td> <td><input type="text" class="form-control1" id="drinks_input1"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									<tr><th scope="row">2</th> <td>นำ้อัดลม/ชาเขียว</td> <td>1 กระป๋อง 325 cc. / 1 ขวด/500 cc. </td> <td>180</td> <td>-</td> <td>80</td> <td><input type="text" class="form-control1" id="drinks_input2"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									<tr><th scope="row">3</th> <td>นม/นมถั่วเหลือง/เครื่องดื่มธัญพืช/</td> <td>1 แก้ว/กล่อง 240 cc. </td> <td>150</td> <td>6</td> <td>120</td> <td><input type="text" class="form-control1" id="drinks_input3"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									<tr><th scope="row">4</th> <td>ชานม กาแฟ ช็อกโกแลต</td> <td>1 แก้ว/240 cc. </td> <td>220</td> <td>5</td> <td>90</td> <td><input type="text" class="form-control1" id="drinks_input4"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="headingEleven">
							<h4 class="panel-title">
								<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
									หมวดเครื่องปรุง
								</a>
							</h4>
						</div>
						<div id="collapseEleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEleven">
							<div class="panel-body">
								<table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>จำนวนที่กินต่อวัน</th> <th>เพิ่ม</th></tr> </thead>
									<tbody>
									<tr><th scope="row">1</th> <td>เกลือ</td> <td>1 ช้อนชา</td> <td>-</td> <td>-</td> <td>2000</td> <td><input type="text" class="form-control1" id="flavor_input1"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									<tr><th scope="row">2</th> <td>ผงปรุงรส</td> <td>1 ช้อนชา </td> <td>-</td> <td>-</td> <td>950</td> <td><input type="text" class="form-control1" id="flavor_input2"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									<tr><th scope="row">3</th> <td>ผงชูรส</td> <td>1 ช้อนชา </td> <td>-</td> <td>-</td> <td>600</td> <td><input type="text" class="form-control1" id="flavor_input3"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									<tr><th scope="row">4</th> <td>นำ้ปลา/ซีอิ้ว/ซอสปรุงรส</td> <td>1 ช้อนชา </td> <td>-</td> <td>-</td> <td>400</td> <td><input type="text" class="form-control1" id="flavor_input4"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									<tr><th scope="row">5</th> <td>กะปิ</td> <td>1 ช้อนชา </td> <td>8</td> <td>-</td> <td>240</td> <td><input type="text" class="form-control1" id="flavor_input5"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									<tr><th scope="row">4</th> <td>นำ้จิ้มไก่/ซอสพริก/ซอสมะเขือเทศ</td> <td>1 ช้อนชา </td> <td>8</td> <td>-</td> <td>75</td> <td><input type="text" class="form-control1" id="flavor_input6"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									<tr><th scope="row">5</th> <td>นำ้ตาล</td> <td>1 ช้อนชา/ 1 ก้อน </td> <td>20</td> <td>-</td> <td>-</td> <td><input type="text" class="form-control1" id="flavor_input7"></td><td><button type="submit" class="btn btn-default">เลือก</button></td> </tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
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
</body>
</html>