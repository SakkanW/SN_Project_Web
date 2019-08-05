<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_his extends CI_Controller {
	

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct()
	{
	//call CodeIgniter's default Constructor
	parent::__construct();
	
	 if(!$this->session->userdata('id'))
	 {
	  redirect('login');
	 }
	
	
	// //load database libray manually
	// // $this->load->database('group_name',TRUE);
	
	// //load Model
	$this->load->model('createpatient_model');
	$this->load->model('patientnutrition_model');
	$this->load->model('symtom_model');
	$this->load->model('kidney_model');
	$this->load->model('conclutions_model');
	$this->load->model('environ_model');
	$this->load->model('interview_model');
	$this->load->model('images_model');
	$this->load->helper(array('form', 'url'));
	$this->load->library('form_validation');
	// $this->load->database();
	 }

	public function show_all($patient_id=null)
	{
		$id = (int)$patient_id;
		$patient_nutrition = $this->patientnutrition_model->show($id);
		$symtom =  $this->symtom_model->show($id);
		$conclutions =  $this->conclutions_model->show($id);
		$environ =  $this->environ_model->show($id);
		$interview =  $this->interview_model->show($id);
		$images =  $this->images_model->show($id);
		$kidney = $this->kidney_model->show_kidney_his($id);
		$result = $this->createpatient_model->show_id($id);
		$data = array('content'=>'patient-his');
		$data['patient_info']=$result;
		$data['patient_nutri']=$patient_nutrition;
		$data['kidney_info']=$kidney;
		$data['symtom_info']=$symtom;
		$data['conclutions_info']=$conclutions;
		$data['environ_info']=$environ;
		$data['interview_info']=$interview;
		$data['images_info']=$images;
		$this->load->view('layouts/main',$data);



	}


	public function get_patient_result()
	{
		$patientData1 = $this->input->post('patientData');
		$patientDate1 = $this->input->post('patientDate');
		$patientDate = date('Y-m-d',strtotime($patientDate1));
		$patientData = (int)$patientData1;
        if(isset($patientData) and !empty($patientData)){
			$records = $this->patientnutrition_model->get_search_patient($patientData,$patientDate);
			
			$output = '';
			$i=1;
			$total_energy = 0;
			$total_protein = 0;
			$total_sodium = 0;

			$total_energy2 = 0;
			$total_protein2 = 0;
			$total_sodium2 = 0;
			foreach($records as $row){
				$total_energy2 = $total_energy2+($row->energy)*($row->quantity);
				$total_protein2 = $total_protein2+($row->protein)*($row->quantity);
				$total_sodium2 = $total_sodium2+($row->sodium)*($row->quantity);
			}
			echo '<script>
			window.onload = function () {
			
			var chart = new CanvasJS.Chart("chartContainer", {
				animationEnabled: true,
				theme: "light2", // "light1", "light2", "dark1", "dark2"
				title:{
					text: "ปริมาณทางโภชนาการ"
				},
				axisY: {
					title: "ปริมาณ"
				},
				data: [{        
					type: "column",  
					showInLegend: true, 
					legendMarkerColor: "grey",
					legendText: "MMbbl = one million barrels",
					dataPoints: [      
						{ y: 300878, label: "พังงาน" },
						{ y: 266455,  label: "โปรตีน" },
					
						{ y: 80000,  label: "โซเดียม" }
					]
				}]
			});
			chart.render();
			
			}
			</script>';
			// echo '<div id="chartContainer" style="height: 300px; width: 100%;"></div>
			// <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>';
			

			echo '<table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
              <tr class="serif">
                <th>ลำดับ</th>
                <th>ชื่อรายการอาหาร</th>
                <th>พลังงาน</th>
				<th>โปรตีน</th>
				<th>โซเดียม</th>
				<th>ปริมาณ</th>
				<th>ผู้ประเมิน</th>
              </tr>
            </thead>
            <tbody>';
		
				

				
           
            foreach($records as $row){
				$total_energy = $total_energy+($row->energy)*($row->quantity);
				$total_protein = $total_protein+($row->protein)*($row->quantity);
				$total_sodium = $total_sodium+($row->sodium)*($row->quantity);
				$output .= '
			
				<tr class="serif">
					<td>'.$i++.'</td>
					<td>'.$row->menu .'</td>
					<td>'.$row->energy .'</td>
					<td>'.$row->protein .'</td>
					<td>'.$row->sodium .'</td>
					<td>'.$row->quantity .'</td>
					<td>'.$row->name .'</td>
				</tr>
              
                  
        		';
			}
			$output .= '
			
			<tr class="serif">
				<td>  </td>
				<td> </td>
				<td>พลังงานรวม</td>
				<td>โปรตีนรวม</td>
				<td>โซเดียมรวม</td>
				<td></td>
				<td></td>
			</tr>
			<tr class="serif">
				<td></td>
				<td></td>
				<td>'.$total_energy." "."kcal".'</td>
				<td>'.$total_protein ." "."กรัม".'</td>
				<td>'.$total_sodium ." ". "มิลลิกรัม".'</td>
				<td></td>
				<td></td>
			</tr>
              
                  
        		';
			echo $output;
        }
        else {
         echo '<center><ul class="list-group"><li class="list-group-item">'.'ไม่มีข้อมูล'.'</li></ul></center>';
		} 
		echo '</tbody>
        </table>';
	}

	public function get_patient_kidney()
	{
		$patientData1 = $this->input->post('patientData');
		$patientDate1 = $this->input->post('patientDate');
		$patientDate = date('Y-m-d',strtotime($patientDate1));
		$patientData = (int)$patientData1;
        if(isset($patientData) and !empty($patientData)){
            $records = $this->kidney_model->get_show_kidney($patientData,$patientDate);
			$output = '';
			$i=1;
			$count_kum=0;
			$count_kad=0;
            foreach($records as $row){
			
			
				echo '<tr class="serif">';
					echo'<td>'.$i++.'</td>';
					echo'<td>'.$row->in .'</td>';
					echo'<td>'.$row->out .'</td>';
					echo'<td>'.$row->result .'</td>';
					
					if($row->result>0)
					{
						echo'<td><span class="label label-success">กำไร</span></td>';
						$count_kum++;
					}
					else
					{
						echo'<td><span class="label label-danger">ขาดทุน</span></td>';
						$count_kad++;
					}
					echo'<td>'.$row->name .'</td>';
				echo'</tr>';
                  

			}
			echo '<tr class="serif">';
					echo'<td></td>';
					echo'<td></td>';
					echo'<td></td>';
					echo'<td>ผลกำไร:ขาดทุน</td>';
					
					
					echo'<td>'.$count_kum.':'.$count_kad.'</td>';///
					
					
					
					echo'<td></td>';
				echo'</tr>';
			
        }
        else {
         echo '<center><ul class="list-group"><li class="list-group-item">'.'ไม่มีข้อมูล'.'</li></ul></center>';
        }
		
	}

	public function get_patient_symtom()
	{
		$patientData1 = $this->input->post('patientData');
		$patientDate1 = $this->input->post('patientDate');
		// $patientDate = date('Y-m-d',strtotime($patientDate1));
		$patientDate = $patientDate1;
		$patientData = (int)$patientData1;
        if(isset($patientData) and !empty($patientData)){



			$has ='<td><center><span class="glyphicon glyphicon-ok"></span></center</td>
			<td></td>
			';
			$nohas='<td></td>
			<td><center><span class="glyphicon glyphicon-ok"></span></center</td>
			';

			$infec='<div class="checkbox-inline"> <span class="glyphicon glyphicon-ok"></span>Infection</div>
			<div class="checkbox-inline">__Peritonitis</div>
			<div class="checkbox-inline">__Exit site infection</div>
			<div class="checkbox-inline">__Malnutrition</div>
			<div class="checkbox-inline">__Care giver problems</div>';

			$per='<div class="checkbox-inline">__Infection</div>
			<div class="checkbox-inline"> <span class="glyphicon glyphicon-ok"></span>Peritonitis</div>
			<div class="checkbox-inline">__Exit site infection</div>
			<div class="checkbox-inline">__Malnutrition</div>
			<div class="checkbox-inline">__Care giver problems</div>';

			$exit='<div class="checkbox-inline">__Infection</div>
			<div class="checkbox-inline">__Peritonitis</div>
			<div class="checkbox-inline"><span class="glyphicon glyphicon-ok"></span>Exit site infection</div>
			<div class="checkbox-inline">__Malnutrition</div>
			<div class="checkbox-inline">__Care giver problems</div>';

			$mal='<div class="checkbox-inline">__Infection</div>
			<div class="checkbox-inline">__Peritonitis</div>
			<div class="checkbox-inline">__Exit site infection</div>
			<div class="checkbox-inline"> <span class="glyphicon glyphicon-ok"></span>Malnutrition</div>
			<div class="checkbox-inline">__Care giver problems</div>';

			$care='<div class="checkbox-inline">__Infection</div>
			<div class="checkbox-inline">__Peritonitis</div>
			<div class="checkbox-inline">__Exit site infection</div>
			<div class="checkbox-inline">__Malnutrition</div>
			<div class="checkbox-inline"> <span class="glyphicon glyphicon-ok"></span>Care giver problems</div>';

			$close = '</div>
			<div class="col">
				<font class="serif">4.อื่นๆ(ระบุ)............</font>
			</div>
		</div>

		</div>';
			
			$record = $this->symtom_model->get_show_symtom($patientData,$patientDate);
			echo '<div class="form-group">
								<div class="row">
									<div class="col">';
									echo	'<font class="serif">1.ความดันโลหิต '.$record->bloodpressure1.' / '.$record->bloodpressure2.' mmHg</font>';
								echo	'</div>
									<div class="col">';
									if($record->scale == "มี"){
										echo	'<font class="serif">2.น้ำหนัก(ชั่งในขณะ <span class="glyphicon glyphicon-ok"></span>มี หรือ___ไม่มีน้ำยาในช่องท้อง) '.$record->weight.' กิโลกรัม</font>';
									}else if($record->scale == "ไม่มี"){
										echo	'<font class="serif">2.น้ำหนัก(ชั่งในขณะ___มีหรือ <span class="glyphicon glyphicon-ok"></span>ไม่มีน้ำยาในช่องท้อง) '.$record->weight.' กิโลกรัม</font>';
									}

										
								
								echo	'</div>
									<div class="col">
										<font class="serif">3.อาการ/ปัญหาสำคัญในการติดตามเยี่ยมครั้งนี้/ที่พบในครั้งนี้</font>
									</div>
									<div class="col">';
										if($record->symtomprob =="Infection"){
												echo $infec;
												echo $close;
										}else if($record->symtomprob =="Peritonitis"){
											echo $per;
											echo $close;
										}else if($record->symtomprob=="Exit site infection"){
											echo $exit;
											echo $close;
										}else if($record->symtomprob=="Malnutrition"){
											echo $mal;
											echo $close;
										}else if($record->symtomprob=="Care giver problems"){
											echo $care;
											echo $close;
										}else{
											echo '<div class="checkbox-inline">__Infection</div>
											<div class="checkbox-inline">__Peritonitis</div>
											<div class="checkbox-inline">__Exit site infection</div>
											<div class="checkbox-inline">__Malnutrition</div>
											<div class="checkbox-inline">__Care giver problems</div>';
											echo '</div>
													<div class="col">';
													echo	'<font class="serif">4.....'.$record->symtomprob.'............</font>';
											echo	'</div>
												</div>

												</div>';
										}
										
								
			echo '<table class="table table-bordered" id="tblGrid">';
            echo '<thead id="tblHead">';
            echo  '<tr class="serif">';
                echo '<th><center>หัวข้อ</center></th>';
                echo '<th><center>มี</center></th>';
            	echo '<th><center>ไม่มี</center></th>';					
            echo '</tr>';
            echo '</thead>';
			echo '<tbody>';
			
			echo '<tr class="serif">';
				echo '<td>'."1 วิงเวียน".'</td>';
				if($record->dizzy == "มี"){
						echo $has;
				}else if($record->dizzy == "ไม่มี"){
						echo $nohas;
				}
			echo '</tr>';
			echo '<tr class="serif">';
				echo '<td>'."2 คลื่นไส้, อาเจียน".'</td>';
				if($record->squeamish == "มี"){
					echo $has;
				}else if($record->squeamish == "ไม่มี"){
						echo $nohas;
				}
			echo '</tr>';
			echo '<tr class="serif">';
				echo '<td>'."3 เบื่ออาหารรับประทานได้น้อย".'</td>';
				if($record->boredom == "มี"){
					echo $has;
				}else if($record->boredom == "ไม่มี"){
						echo $nohas;
				}
			echo '</tr>';
			echo '<tr class="serif">';
				echo '<td>'."4 บวมปลายมือ/เท้า/ใบหน้า/อื่นๆ ระบุ".'</td>';
				if($record->swelling == "มี"){
					echo $has;
				}else if($record->swelling == "ไม่มี"){
						echo $nohas;
				}
			echo '</tr>';
			echo '<tr class="serif">';
				echo '<td>'."5 หายใจหอบเหนื่อย".'</td>';
				if($record->breathe == "มี"){
					echo $has;
				}else if($record->breathe == "ไม่มี"){
						echo $nohas;
				}
			echo '</tr>';
			echo '<tr class="serif">';
				echo '<td>'."6 มีภาวะซีด".'</td>';
				if($record->pale == "มี"){
					echo $has;
				}else if($record->pale == "ไม่มี"){
						echo $nohas;
				}
			echo '</tr>';
			echo '<tr class="serif">';
				echo '<td>'."7 การติดเชื้อที่ร่างกาย".'</td>';
				if($record->infected == "มี"){
					echo $has;
				}else if($record->infected == "ไม่มี"){
						echo $nohas;
				}
			echo '</tr>';
			echo '<tr class="serif">';
				echo '<td>'."8 ปัญหาความสัมพันธ์ในครอบครัว/ผู้ดูแล".'</td>';
				if($record->relationshipprob == "มี"){
					echo $has;
				}else if($record->relationshipprob == "ไม่มี"){
					echo $nohas;
				}
			echo '</tr>';
			echo '</tbody>';
			echo '</table>';
			echo '<p>อื่นๆ(ถ้ามี)'." ". $record->other.'</p>';
			// $output = '';
			// $i=1;
            // foreach($records as $row){
			
			
				// echo '<tr>';
					// echo'<td>'.$i++.'</td>';
					// echo'<td>'. $record->timesvisit .'</td>';
				// 	echo'<td>'.$row->out .'</td>';
				// 	echo'<td>'.$row->result .'</td>';
					
				// 	if($row->result>0)
				// 	{
				// 		echo'<td><span class="label label-success">กำไร</span></td>';
				// 	}
				// 	else
				// 	{
				// 		echo'<td><span class="label label-danger">ขาดทุน</span></td>';
				// 	}
				// 	echo'<td>'.$row->name .'</td>';
				// echo'</tr>';
                // echo json_encode($record)  ;

			// }
			
        }
        else {
         echo '<center><ul class="list-group"><li class="list-group-item">'.'ไม่มีข้อมูล'.'</li></ul></center>';
        }
		
	}
	public function get_patient_environ()
	{
		$patientData1 = $this->input->post('patientData');
		$patientDate1 = $this->input->post('patientDate');
		// $patientDate = date('Y-m-d',strtotime($patientDate1));
		$patientDate = $patientDate1;
		$patientData = (int)$patientData1;
        if(isset($patientData) and !empty($patientData)){
            $record = $this->environ_model->get_show_environ($patientData,$patientDate);
			// $output = '';
			// $i=1;
            // foreach($records as $row){
			$good ='<td><center><span class="glyphicon glyphicon-ok"></span></center</td>
			<td></td>
			<td></td>
			<td></td>';
			$fair ='<td></td>
			<td><center><span class="glyphicon glyphicon-ok"></span></center></td>
			<td></td>
			<td></td>';
			$poor = '<td></td>
			<td></td>
			<td><center><span class="glyphicon glyphicon-ok"></span></center></td>
			<td></td>';
			$non ='<td></td>
			<td></td>
			<td></td>
			<td><center><span class="glyphicon glyphicon-ok"></span></center></td>'
			;
				echo '<tr class="serif">';
				echo'<td>'."1.สภาพแวดล้อม".'</td>';
				if($record->envi == "ดี"){
					echo $good;
				}else if($record->envi == "พอใช้"){
					echo $fair;
				}else if($record->envi == "ปรับปรุง"){
					echo $poor;
				}else if($record->envi == "ไม่ได้ประเมิน"){
					echo $non;
				}
						
				echo'</tr>';
				echo '<tr class="serif">';
					echo'<td>'."2.รอบบ้าน,ฝุ่น,ที่ทิ้งถุงน้ำยาที่ตากผ้าเช็ดมือ".'</td>';
					if($record->around == "ดี"){
							echo $good;
					}else if($record->around == "พอใช้"){
						echo $fair;
					}else if($record->around == "ปรับปรุง"){
						echo $poor;
					}else if($record->around == "ไม่ได้ประเมิน"){
						echo $non;
					}
							
				echo'</tr>';
				echo '<tr class="serif">';
					echo'<td>'."3.สถานที่เก็บถุงน้ำยาใหม่".'</td>';
					if($record->placekeepbag == "ดี"){
						echo $good;
					}else if($record->placekeepbag == "พอใช้"){
						echo $fair;
					}else if($record->placekeepbag == "ปรับปรุง"){
						echo $poor;
					}else if($record->placekeepbag == "ไม่ได้ประเมิน"){
						echo $non;
					}
				echo'</tr>';
				echo '<tr class="serif">';
					echo'<td>'."4.ความสะอาดภายในบ้าน".'</td>';
					if($record->houseclean == "ดี"){
						echo $good;
					}else if($record->houseclean == "พอใช้"){
						echo $fair;
					}else if($record->houseclean == "ปรับปรุง"){
						echo $poor;
					}else if($record->houseclean == "ไม่ได้ประเมิน"){
						echo $non;
					}
				echo'</tr>';
				echo '<tr class="serif">';
					echo'<td>'."5.ความสะอาดสถานที่เปลี่ยนน้ำยา".'</td>';
					if($record->localclean == "ดี"){
						echo $good;
					}else if($record->localclean == "พอใช้"){
						echo $fair;
					}else if($record->localclean == "ปรับปรุง"){
						echo $poor;
					}else if($record->localclean == "ไม่ได้ประเมิน"){
						echo $non;
					}
				echo'</tr>';
				echo '<tr class="serif">';
					echo'<td>'."6.ห้องที่ผู้ป่วยนอน".'</td>';
					if($record->patientroom == "ดี"){
						echo $good;
					}else if($record->patientroom == "พอใช้"){
						echo $fair;
					}else if($record->patientroom == "ปรับปรุง"){
						echo $poor;
					}else if($record->patientroom == "ไม่ได้ประเมิน"){
						echo $non;
					}
				echo'</tr>';
				echo '<tr class="serif">';
					echo'<td>'."7.ห้องน้ำ".'</td>';
					if($record->toilet == "ดี"){
						echo $good;
					}else if($record->toilet == "พอใช้"){
						echo $fair;
					}else if($record->toilet == "ปรับปรุง"){
						echo $poor;
					}else if($record->toilet == "ไม่ได้ประเมิน"){
						echo $non;
					}
				echo'</tr>';
				echo '<tr class="serif">';
					echo'<td>'."8.อ่างล้างมือ".'</td>';
					if($record->sink == "ดี"){
						echo $good;
					}else if($record->sink == "พอใช้"){
						echo $fair;
					}else if($record->sink == "ปรับปรุง"){
						echo $poor;
					}else if($record->sink == "ไม่ได้ประเมิน"){
						echo $non;
					}
				echo'</tr>';
				echo '<tr class="serif">';
					echo'<td>'."9.แหล่งน้ำที่ใช้".'</td>';
					if($record->water == "ดี"){
						echo $good;
					}else if($record->water == "พอใช้"){
						echo $fair;
					}else if($record->water == "ปรับปรุง"){
						echo $poor;
					}else if($record->water == "ไม่ได้ประเมิน"){
						echo $non;
					}
				echo'</tr>';
				echo '<tr class="serif">';
					echo'<td>'."10.การเตรียมอุปกรณ์/ปิดพัดลมหน้าต่าง".'</td>';
					if($record->prepare == "ดี"){
						echo $good;
					}else if($record->prepare == "พอใช้"){
						echo $fair;
					}else if($record->prepare == "ปรับปรุง"){
						echo $poor;
					}else if($record->prepare == "ไม่ได้ประเมิน"){
						echo $non;
					}
				echo'</tr>';
				echo '<tr class="serif">';
					echo'<td>'."11.การสวมผ้าปิดปากปิดจมูก".'</td>';
					if($record->mask == "ดี"){
						echo $good;
					}else if($record->mask == "พอใช้"){
						echo $fair;
					}else if($record->mask == "ปรับปรุง"){
						echo $poor;
					}else if($record->mask == "ไม่ได้ประเมิน"){
						echo $non;
					}
				echo'</tr>';
				echo '<tr class="serif">';
					echo'<td>'."12.การล้างมือ".'</td>';
					if($record->handwash == "ดี"){
						echo $good;
					}else if($record->handwash == "พอใช้"){
						echo $fair;
					}else if($record->handwash == "ปรับปรุง"){
						echo $poor;
					}else if($record->handwash == "ไม่ได้ประเมิน"){
						echo $non;
					}
				echo'</tr>';
				echo '<tr class="serif">';
					echo'<td>'."13.การบันทึกการล้างไตของผู้ป่วย".'</td>';
					if($record->kidneyrec == "ดี"){
						echo $good;
					}else if($record->kidneyrec == "พอใช้"){
						echo $fair;
					}else if($record->kidneyrec == "ปรับปรุง"){
						echo $poor;
					}else if($record->kidneyrec == "ไม่ได้ประเมิน"){
						echo $non;
					}
				echo'</tr>';
				echo '<tr class="serif">';
					echo'<td>'."14.การกินและเก็บรักษายากิน".'</td>';
					if($record->medicine == "ดี"){
						echo $good;
					}else if($record->medicine == "พอใช้"){
						echo $fair;
					}else if($record->medicine == "ปรับปรุง"){
						echo $poor;
					}else if($record->medicine == "ไม่ได้ประเมิน"){
						echo $non;
					}
				echo'</tr>';
				echo '<tr class="serif">';
					echo'<td>'."15.การบริหารยาฉีด EPO/Insulin(เก็บ,ฉีด)".'</td>';
					if($record->epo == "ดี"){
						echo $good;
					}else if($record->epo == "พอใช้"){
						echo $fair;
					}else if($record->epo == "ปรับปรุง"){
						echo $poor;
					}else if($record->epo == "ไม่ได้ประเมิน"){
						echo $non;
					}
				echo'</tr>';
				echo '<tr class="serif">';
					echo'<td>'."16.การเก็บSetทำแผล,NSS,Betadine".'</td>';
					if($record->nss == "ดี"){
						echo $good;
					}else if($record->nss == "พอใช้"){
						echo $fair;
					}else if($record->nss == "ปรับปรุง"){
						echo $poor;
					}else if($record->nss == "ไม่ได้ประเมิน"){
						echo $non;
					}
				echo'</tr>';
				echo '<tr class="serif">';
					echo'<td>'."17.วิธีการกำจัดน้ำยา/ถุงนํ้ายาที่ใช้แล้ว".'</td>';
					if($record->eliminate == "ดี"){
						echo $good;
					}else if($record->eliminate == "พอใช้"){
						echo $fair;
					}else if($record->eliminate == "ปรับปรุง"){
						echo $poor;
					}else if($record->eliminate == "ไม่ได้ประเมิน"){
						echo $non;
					}
				echo'</tr>';
		
				
					// echo'<td>'.$i++.'</td>';
					// echo'<td>'. $record->timesvisit .'</td>';
				// 	echo'<td>'.$row->out .'</td>';
				// 	echo'<td>'.$row->result .'</td>';
					
				// 	if($row->result>0)
				// 	{
				// 		echo'<td><span class="label label-success">กำไร</span></td>';
				// 	}
				// 	else
				// 	{
				// 		echo'<td><span class="label label-danger">ขาดทุน</span></td>';
				// 	}
				// 	echo'<td>'.$row->name .'</td>';
				
                // echo json_encode($record)  ;

			// }
			
        }
        else {
         echo '<center><ul class="list-group"><li class="list-group-item">'.'ไม่มีข้อมูล'.'</li></ul></center>';
        }
		
	}

	public function get_patient_interview()
	{
		$patientData1 = $this->input->post('patientData');
		$patientDate1 = $this->input->post('patientDate');
		// $patientDate = date('Y-m-d',strtotime($patientDate1));
		$patientDate = $patientDate1;
		$patientData = (int)$patientData1;
        if(isset($patientData) and !empty($patientData)){
			$record = $this->interview_model->get_show_interview($patientData,$patientDate);
			echo'<div>';
			echo '<span>สัมภาษณ์ญาติที่อยู่บ้านเดียวกับผู้ป่วย 1 คนความสัมพันธ์เป็น____'.$record->relationship.'_____ของผู้ป่วย </span>';
			echo '<table class="table table-bordered" id="tblGrid">
            <thead id="tblHead">
              <tr class="serif">
							<th><canter>หัวข้อ</center></th>
							<th><canter>ผลการประเมิน</center></th>
              
								
              </tr>
            </thead>
            <tbody id="patient_result_interview">';
			
				

				
            
			echo '<tr class="serif">';
				echo '<td>1.เป็นผู้เปลี่ยนน้ำยา</td>';
				echo '<td>'.$record->liquidchange.'</td>';
			echo'</tr>';
			echo '<tr class="serif">';
				echo '<td>2.เป็นผู้ทำแผลให้ผู้ป่วย</td>';
				echo '<td>'.$record->wound.'</td>';
			echo'</tr>';
			echo '<tr class="serif">';
				echo '<td>3.ใครเป็นผู้เปลี่ยนน้ำยาให้ผู้ป่วย</td>';
				echo '<td>'.$record->wholiquid.'</td>';
			echo'</tr>';
			echo '<tr class="serif">';
				echo '<td>4.การดูแลตนเองของผู้ป่วย</td>';
				echo '<td>'.$record->careyourselft.'</td>';
			echo'</tr>';

			echo '<tr class="serif">';
				echo '<td>5.ใครเป็นผู้ดูแล/ผู้ช่วยเหลือผู้ป่วย</td>';
				echo '<td>'.$record->patienthelper.'</td>';
			echo'</tr>';
			echo '<tr class="serif">';
				echo '<td>6.กิจกรรมของผู้ป่วย</td>';
				echo '<td>'.$record->activity.'</td>';
			echo'</tr>';
			echo '<tr class="serif">';
				echo '<td>7.กิจกรรมที่ผู้ป่วยทำให้กับสังคม</td>';
				echo '<td>'.$record->activityso.'</td>';
			echo'</tr>';
			echo '<tr class="serif">';
				echo '<td>8.ผู้ป่วยเปลี่ยนน้ำยาตามกำหนด</td>';
				echo '<td>'.$record->change_assign.'</td>';
			echo'</tr>';
			echo '<tr class="serif">';
				echo '<td>9.โดยภาพรวมความรู้สึกญาติประเมินสุขภาพผู้ป่วยมีสุขภาพ</td>';
				echo '<td>'.$record->overview.'</td>';
			echo'</tr>';

		echo '</tbody>
		  </table>';
		  echo'</div>';
        }
        else {
         echo '<center><ul class="list-group"><li class="list-group-item">'.'ไม่มีข้อมูล'.'</li></ul></center>';
        }
		
	}
	public function get_patient_conclutions()
	{
		$patientData1 = $this->input->post('patientData');
		$patientDate1 = $this->input->post('patientDate');
		// $patientDate = date('Y-m-d',strtotime($patientDate1));
		$patientDate = $patientDate1;
		$patientData = (int)$patientData1;
        if(isset($patientData) and !empty($patientData)){
            $record = $this->conclutions_model->get_show_conclutions($patientData,$patientDate);
			echo '<tr class="serif">';
				echo '<td>1.สภาพแวดล้อม</td>';
				echo '<td>'.$record->envi.'</td>';
			echo'</tr>';
			echo '<tr class="serif">';
				echo '<td>2.การดำเนินชีวิตของผู้ป่วยที่บ้านอยู่ในเกณฑ์</td>';
				echo '<td>'.$record->lifeday.'</td>';
			echo'</tr>';
			echo '<tr class="serif">';
				echo '<td>3.ผู้ป่วยมีความสุขกับการรักษา</td>';
				echo '<td>'.$record->happiness.'</td>';
			echo'</tr>';
			echo '<tr class="serif">';
				echo '<td>4.สิ่งที่ต้องติดตามเยี่ยมในครั้งต่อไป</td>';
				echo '<td>'.$record->follow.'</td>';
			echo'</tr>';
			echo '<tr class="serif">';
				echo '<td>5.ปัญหาอื่นๆ</td>';
				echo '<td>'.$record->prob.'</td>';
			echo'</tr>';
					
			
        }
        else {
         echo '<center><ul class="list-group"><li class="list-group-item">'.'ไม่มีข้อมูล'.'</li></ul></center>';
        }
		
	}

	public function get_patient_images()
	{
		$patientData1 = $this->input->post('patientData');
		$patientDate1 = $this->input->post('patientDate');
		// $patientDate = date('Y-m-d',strtotime($patientDate1));
		$patientDate = $patientDate1;
		$patientData = (int)$patientData1;
        if(isset($patientData) and !empty($patientData)){
            $records = $this->images_model->get_show_images($patientData,$patientDate);
			$output = '';
			$i=1;
            foreach($records as $row){
			
			
				echo '<tr class="serif">';
					echo'<td><center>'.$i++.'</center></td>';
					echo'<td><center><img src="'. base_url('patient_img/'.$row->name_images.'.jpg').'" width="200" height="200"/></center></td>';
					echo'<td><center>'.$row->caption.'</center></td>';
					echo'<td><center>'.$row->name.'</center></td>';
				echo'</tr>';
                // echo json_encode($records)  ;

			}
			
        }
        else {
         echo '<center><ul class="list-group"><li class="list-group-item">'.'ไม่มีข้อมูล'.'</li></ul></center>';
        }
		
	}
	


}