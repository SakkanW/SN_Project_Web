
		<!-- main content start-->
		
		
		
		<div id="page-wrapper">
			<div class="main-page general">
      <h3 class="title1 serif"> อาหารแลกเปลี่ยน </h3>
				<div class="panel-group tool-tips widget-shadow" id="accordion" role="tablist" aria-multiselectable="true">
					
					
                   
                       

                   

                    
				
					<h4 class="text-right serif"> <?php echo $patient->fname?>  <?php echo $patient->lname?></h4>
			
						<center>กรุณาเลือกวันที่ : <input type="date" id="dateFood"  name="date_food"> <button  data-toggle="modal" class="btn btn-default view_data" id="<?php echo  $patient->id; ?>" >ดูผลลัพธ์</button></center>
			
					<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne">
					  <h4 class="panel-title">
						<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
						  กับข้าวร่วมสำรับ
						</a>
					  </h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
					  <div class="panel-body">
						  <div class="table-responsive bs-example widget-shadow">
							  <table class="table table-bordered"> <thead> <tr class="info serif"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>ปริมาณ</th><th>การดำเนินการ</th> </tr> </thead>
								  <tbody>
									
										
                                            
                                            <?php 
                                            $i_deck = 0;
                                            foreach($decks as $deck )
                                            { $i_deck++;
                                            ?>
                                                <tr class="serif">
                                                    <th scope="row"><?php echo $i_deck?></th> 
                                                    <td><?php echo $deck->menu?></td> 
                                                    <td><?php echo $deck->unit?></td> 
                                                    <td><?php echo $deck->energy?></td> 
                                                    <td><?php echo $deck->protein?></td> 
																										<td><?php echo $deck->sodium?></td> 
																										<td><input type="number" id="quanti" min="1" name="quantity" required> </td>
                                                    <td><center><button type="" id="<?php echo $patient->id ?>" staff_id="<?php echo $this->session->userdata('id'); ?>" food_id="<?php echo $deck->id ?>" class="btn btn-primary btn_save">เลือก</button></center></td> 
                                                   
                                                    
                                                    
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        
								
								  
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
						  <table class="table table-bordered"> <thead> <tr class="info serif"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th>  <th>ปริมาณ</th><th>การดำเนินการ</th></tr> </thead>
							  <tbody>
                                
										
                                            
                                        <?php 
                                        $i_onedish = 0;
                                        foreach($onedishes as $onedish )
                                        { $i_onedish++;
                                        ?>
                                            <tr class="serif">
                                                <th scope="row"><?php echo $i_onedish?></th> 
                                                <td><?php echo $onedish->menu?></td> 
                                                <td><?php echo $onedish->unit?></td> 
                                                <td><?php echo $onedish->energy?></td> 
                                                <td><?php echo $onedish->protein?></td> 
                                                <td><?php echo $onedish->sodium?></td> 
                                                <td><input type="number" id="quanti" min="1" name="quantity" > </td>
                                                <td><center><button type="" class="btn btn-primary btn_save" id="<?php echo $patient->id ?>" staff_id="<?php echo $this->session->userdata('id'); ?>" food_id="<?php echo $onedish->id ?>" >เลือก</button></center></td> 
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    
                                
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
						  <table class="table table-bordered"> <thead> <tr class="info serif"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>ปริมาณ</th> <th>การดำเนินการ</th></tr> </thead>
							  <tbody>
                                    
                                            
                                                
                                            <?php 
                                            $i_carbohydrate = 0;
                                            foreach($carbohydrates as $carbohydrate )
                                            { $i_carbohydrate++;
                                            ?>
                                                <tr class="serif">
                                                    <th scope="row"><?php echo $i_carbohydrate?></th> 
                                                    <td><?php echo $carbohydrate->menu?></td> 
                                                    <td><?php echo $carbohydrate->unit?></td> 
                                                    <td><?php echo $carbohydrate->energy?></td> 
                                                    <td><?php echo $carbohydrate->protein?></td> 
                                                    <td><?php echo $carbohydrate->sodium?></td> 
                                                    <td><input type="number" id="quanti" min="1" name="quantity" > </td>
                                                    <td><center><button type="" id="<?php echo $patient->id ?>" staff_id="<?php echo $this->session->userdata('id'); ?>" food_id="<?php echo $carbohydrate->id ?>" class="btn btn-primary btn_save">เลือก</button></center></td> 
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        
                                  
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
						  <table class="table table-bordered"> <thead> <tr class="info serif"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>ปริมาณ</th> <th>การดำเนินการ</th></tr> </thead>
							  <tbody>
                                   
                                            
                                                
                                            <?php 
                                            $i_carbohydrate_without_protein = 0;
                                            foreach($carbohydrate_without_proteins as $carbohydrate_without_protein )
                                            { $i_carbohydrate_without_protein++;
                                            ?>
                                                <tr class="serif">
                                                    <th scope="row"><?php echo $i_carbohydrate_without_protein?></th> 
                                                    <td><?php echo $carbohydrate_without_protein->menu?></td> 
                                                    <td><?php echo $carbohydrate_without_protein->unit?></td> 
                                                    <td><?php echo $carbohydrate_without_protein->energy?></td> 
                                                    <td><?php echo $carbohydrate_without_protein->protein?></td> 
                                                    <td><?php echo $carbohydrate_without_protein->sodium?></td> 
                                                    <td><input type="number" id="quanti" min="1" name="quantity" > </td>
                                                    <td><center><button type="" id="<?php echo $patient->id ?>" staff_id="<?php echo $this->session->userdata('id'); ?>" food_id="<?php echo $carbohydrate_without_protein->id ?>" class="btn btn-primary btn_save">เลือก</button></center></td> 
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        
                                    
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
						  <table class="table table-bordered"> <thead> <tr class="info serif"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>ปริมาณ</th> <th>การดำเนินการ</th></tr> </thead>
							  <tbody>
                                   
                                            
                                                
                                            <?php 
                                            $i_fat = 0;
                                            foreach($fats as $fat )
                                            { $i_fat++;
                                            ?>
                                                <tr class="serif">
                                                    <th scope="row"><?php echo $i_fat?></th> 
                                                    <td><?php echo $fat->menu?></td> 
                                                    <td><?php echo $fat->unit?></td> 
                                                    <td><?php echo $fat->energy?></td> 
                                                    <td><?php echo $fat->protein?></td> 
                                                    <td><?php echo $fat->sodium?></td> 
                                                    <td><input type="number" id="quanti" min="1" name="quantity" > </td>
                                                    <td><center><button type="" id="<?php echo $patient->id ?>" staff_id="<?php echo $this->session->userdata('id'); ?>" food_id="<?php echo $fat->id ?>" class="btn btn-primary btn_save">เลือก</button></center></td> 
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        
                                    
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
								<table class="table table-bordered"> <thead> <tr class="info serif"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>ปริมาณ</th> <th>การดำเนินการ</th></tr> </thead>
									<tbody>
                                        
                                            
                                                
                                            <?php 
                                            $i_meat = 0;
                                            foreach($meats as $meat )
                                            { $i_meat++;
                                            ?>
                                                <tr class="serif">
                                                    <th scope="row"><?php echo $i_meat?></th> 
                                                    <td><?php echo $meat->menu?></td> 
                                                    <td><?php echo $meat->unit?></td> 
                                                    <td><?php echo $meat->energy?></td> 
                                                    <td><?php echo $meat->protein?></td> 
                                                    <td><?php echo $meat->sodium?></td> 
                                                    <td><input type="number" id="quanti" min="1" name="quantity" > </td>
                                                    <td><center><button type="" id="<?php echo $patient->id ?>" staff_id="<?php echo $this->session->userdata('id'); ?>" food_id="<?php echo $meat->id ?>" class="btn btn-primary btn_save">เลือก</button></center></td> 
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        
                                        
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
								<table class="table table-bordered"> <thead> <tr class="info serif"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>ปริมาณ</th> <th>การดำเนินการ</th></tr> </thead>
									<tbody>
                                        
                                            
                                                
                                            <?php 
                                            $i_vegetable = 0;
                                            foreach($vegetables as $vegetable )
                                            { $i_vegetable++;
                                            ?>
                                                <tr class="serif">
                                                    <th scope="row"><?php echo $i_vegetable?></th> 
                                                    <td><?php echo $vegetable->menu?></td> 
                                                    <td><?php echo $vegetable->unit?></td> 
                                                    <td><?php echo $vegetable->energy?></td> 
                                                    <td><?php echo $vegetable->protein?></td> 
                                                    <td><?php echo $vegetable->sodium?></td> 
                                                    <td><input type="number" id="quanti" min="1" name="quantity" > </td>
                                                    <td><center><button type="" id="<?php echo $patient->id ?>" staff_id="<?php echo $this->session->userdata('id'); ?>" food_id="<?php echo $vegetable->id ?>" class="btn btn-primary btn_save">เลือก</button></center></td> 
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                    
                                        
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
								<table class="table table-bordered"> <thead> <tr class="info serif"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>ปริมาณ</th> <th>การดำเนินการ</th></tr> </thead>
									<tbody>
                                        
                                            
                                                
                                            <?php 
                                            $i_fruit = 0;
                                            foreach($fruits as $fruit )
                                            { $i_fruit++;
                                            ?>
                                                <tr class="serif">
                                                    <th scope="row"><?php echo $i_fruit?></th> 
                                                    <td><?php echo $fruit->menu?></td> 
                                                    <td><?php echo $fruit->unit?></td> 
                                                    <td><?php echo $fruit->energy?></td> 
                                                    <td><?php echo $fruit->protein?></td> 
                                                    <td><?php echo $fruit->sodium?></td> 
                                                    <td><input type="number" id="quanti" min="1" name="quantity" > </td>
                                                    <td><center><button type="" id="<?php echo $patient->id ?>" staff_id="<?php echo $this->session->userdata('id'); ?>" food_id="<?php echo $fruit->id ?>" class="btn btn-primary btn_save">เลือก</button></center></td> 
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        
                                       
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
								<table class="table table-bordered"> <thead> <tr class="info serif"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>ปริมาณ</th> <th>การดำเนินการ</th></tr> </thead>
									<tbody>
                                        
                                                
                                                    
                                                <?php 
                                                $i_candy = 0;
                                                foreach($candys as $candy )
                                                { $i_candy++;
                                                ?>
                                                    <tr class="serif">
                                                        <th scope="row"><?php echo $i_candy?></th> 
                                                        <td><?php echo $candy->menu?></td> 
                                                        <td><?php echo $candy->unit?></td> 
                                                        <td><?php echo $candy->energy?></td> 
                                                        <td><?php echo $candy->protein?></td> 
                                                        <td><?php echo $candy->sodium?></td> 
                                                        <td><input type="number" id="quanti" min="1" name="quantity" > </td>
                                                    <td><center><button type="" id="<?php echo $patient->id ?>" staff_id="<?php echo $this->session->userdata('id'); ?>" food_id="<?php echo $candy->id ?>" class="btn btn-primary btn_save">เลือก</button></center></td> 
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            
                                        
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
								<table class="table table-bordered"> <thead> <tr class="info serif"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>ปริมาณ</th> <th>การดำเนินการ</th></tr> </thead>
									<tbody>
                                        
                                                
                                                    
                                                <?php 
                                                $i_drink = 0;
                                                foreach($drinks as $drink )
                                                { $i_drink++;
                                                ?>
                                                    <tr class="serif">
                                                        <th scope="row"><?php echo $i_drink?></th> 
                                                        <td><?php echo $drink->menu?></td> 
                                                        <td><?php echo $drink->unit?></td> 
                                                        <td><?php echo $drink->energy?></td> 
                                                        <td><?php echo $drink->protein?></td> 
                                                        <td><?php echo $drink->sodium?></td> 
																												<td><input type="number" id="quanti" min="1" name="quantity" > </td>
                                                    <td><center><button type="" id="<?php echo $patient->id ?>" staff_id="<?php echo $this->session->userdata('id'); ?>" food_id="<?php echo $drink->id ?>" class="btn btn-primary btn_save">เลือก</button></center></td> 
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            
                                        
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
								<table class="table table-bordered"> <thead> <tr class="info serif"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>ปริมาณ</th> <th>การดำเนินการ</th></tr> </thead>
									<tbody>
                                      
                                                
                                                    
                                                <?php 
                                                $i_garnish = 0;
                                                foreach($garnishes as $garnish )
                                                { $i_garnish++;
                                                ?>
                                                    <tr class="serif">
                                                        <th scope="row"><?php echo $i_garnish?></th> 
                                                        <td><?php echo $garnish->menu?></td> 
                                                        <td><?php echo $garnish->unit?></td> 
                                                        <td><?php echo $garnish->energy?></td> 
                                                        <td><?php echo $garnish->protein?></td> 
                                                        <td><?php echo $garnish->sodium?></td> 
																												<td><input type="number" id="quanti" min="1" name="quantity" > </td>
                                                    <td><center><button type="" id="<?php echo $patient->id ?>" staff_id="<?php echo $this->session->userdata('id'); ?>" food_id="<?php echo $garnish->id ?>" class="btn btn-primary btn_save">เลือก</button></center></td> 
                                                    </tr>
                                                <?php
                                                }
                                                ?>
                                            
                                       
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" id="patientModal">
<div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="modal-title serif">ผลการประเมินอาหาร</h3>
		  <!-- <h4 class="modal-title serif">ประจำวันที่ <text id="day_div"></text></h4> -->
		  <h5 class="modal-title text-right serif "><?php echo $patient->fname?> <?php echo $patient->lname?></h5>
        </div>
        <div class="modal-body">
		
		
          <table class="table table-striped" id="tblGrid">
            <thead id="tblHead">
              <tr class="serif">
                <th>ลำดับ</th>
                <th>ชื่อรายการอาหาร</th>
                <th>พลังงาน</th>
								<th>โปรตีน</th>
								<th>โซเดียม</th>
								<th>ปริมาณ</th>
								<th>ผู้ประเมิน</th>
								<!-- <th>การดำเนินการ</th> -->
              </tr>
            </thead>
            <tbody id="show_data">
			<!-- patient nutrition ifo -->
				

				
            </tbody>
          </table>
          <div class="form-group">
            <!-- <input type="button" class="btn btn-warning btn-sm pull-right" value="Reset"> -->
            <div class="clearfix"></div>
          </div>
		</div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger " data-dismiss="modal">ปิด</button>
          <!-- <button type="button" class="btn btn-primary">Save Changes</button> -->
        </div>
				
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


		<div id="page-wrapper">
			<div class="main-page">
				<h3 class="title1 serif">ลบรายการอาหาร</h3>
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
					<table id="dataTables8" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
						<thead>
						<tr class="serif">
							<th class="th-sm">ลำดับ
							</th>
							<th class="th-sm">ชื่อรายการอาหาร
							</th>
							<th class="th-sm">พลังงาน
							</th>
							<th class="th-sm">โปรตีน
							</th>
							<th class="th-sm">โซเดียม
							</th>
							</th>
							<th class="th-sm">ปริมาณ
							</th>
							</th>
							<th class="th-sm">วันที่
							</th>
							<th class="th-sm">ผู้ประเมิน
							</th>
							<th class="th-sm">การดำเนินการ
							</th>
						</tr>
						</thead>
						<tbody>
						<?php
						$i= 1;
						$total_energy = 0;
						$total_protein = 0;
						$total_sodium = 0;
							foreach($food_nutritions as $row)
							{  $total_energy = $total_energy+($row->energy)*($row->quantity);
								$total_protein = $total_protein+($row->protein)*($row->quantity);
								$total_sodium = $total_sodium+($row->sodium)*($row->quantity);
								?>
								
								<tr class = "serif">
									<td><?php echo $i ?></td>
									<td><?php echo $row->menu ?></td>
									<td><?php echo $row->energy ?></td>
									<td><?php echo $row->protein ?></td>
									<td><?php echo $row->sodium ?></td>
									<td><?php echo $row->quantity ?></td>
									<td><?php echo thai_date_fullmonth(strtotime($row->date_food)) ?></td>
									<td><?php echo $row->name ?></td>
									<td><center><a href="<?php echo site_url('food/destroy2/'.$patient->id."/".$row->id) ?>"><button class="btn btn-danger">ลบ</button></a></center></td>
								</tr>
								<?php
								$i++;
							}?>
							<!-- <tr>
								<td><?php echo "" ?></td>
								<td><?php echo "" ?></td>
								<td><?php echo "พลังงานรวม" ?></td>
								<td><?php echo "โปรตีนรวม" ?></td>
								<td><?php echo "โซเดียมรวม" ?></td>
								<td><?php echo "" ?></td>
							</tr>
							<tr>
								<td><?php echo "" ?></td>
								<td><?php echo "" ?></td>
								<td><?php echo $total_energy . " "."kcal"?></td>
								<td><?php echo $total_protein ." "."กรัม"?></td>
								<td><?php echo $total_sodium ." ". "มิลลิกรัม"?></td>
								<td><?php echo "" ?></td>
							</tr> -->
						</tbody>
					</table>
				</div>
			</div>
		</div>


		<!-- <div id="page-wrapper">
			<div class="main-page">
				<h3 class="title1">คำนวณรายการอาหาร</h3>
				<div class="blank-page widget-shadow scroll" id="style-2 div1">
					<table id="dtBasicExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
						<thead>
						<tr>
							<th class="th-sm">ลำดับ
							</th>
							<th class="th-sm">ชื่อรายการอาหาร
							</th>
							<th class="th-sm">พลังงาน
							</th>
							<th class="th-sm">โปรตีน
							</th>
							<th class="th-sm">โซเดียม
							</th>
							</th>
							<th class="th-sm">ปริมาณ
							</th>
							</th>
							<th class="th-sm">วันที่
							</th>
							<th class="th-sm">ผู้ประเมิน
							</th>
							<th class="th-sm">การดำเนินการ
							</th>
						</tr>
						</thead>
						<tbody id = "show_data_2">
					
						</tbody>
					</table>
				</div>
			</div>
		</div> -->




		<script type="text/javascript">
	//  var paDate = $('#DynamicValueAssignedHere').find('input[name="date_food"]').val();
     // Start jQuery function after page is loaded
        $(document).ready(function(){
				 $('#dataTables8').DataTable();
// 			$(".view_data").click(function(){
//     $(".test").hide();
// 	$('#patientModal').modal('show');
//   });
				
         	
					
					 //Save product
					 $('.btn_save').on('click',function(){
           
						var patientData = $(this).attr('id');
						var staffData = $(this).attr('staff_id');
						var foodData = $(this).attr('food_id');
           
						var patientDate1 = $('#dateFood').val();
						 $('#dateFood').val(patientDate1);

						 var quan = $('#quanti').val();
						 $('#quanti').val(quan);

            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('food/store')?>",
                dataType : "JSON",
                data : {patientData:patientData , staffData:staffData, foodData:foodData, patientDate1:patientDate1, quan:quan},
                success: function(data){
                    $('[name="patientData"]').val("");
                    $('[name="staffData"]').val("");
                    $('[name="foodData"]').val("");
										$('[name="patientDate1"]').val("");
										$('[name="quan"]').val("");
										alert("SUCCESS");       
   									//  console.log('SUCCESS: ' + data.success);
                    // $('#Modal_Add').modal('hide');
                    // show_product();
                }
								// error: function (request, status, error) {
       					// 	 alert(request.responseText);
    						// }
            });
            return false;
        });

				//show_product
				// function show_product(){
        //     $.ajax({
        //         type  : 'ajax',
        //         url   : '<?php echo site_url('food/get_patient_result')?>',
        //         async : true,
        //         dataType : 'json',
				// 				method: "POST",
				// 				data: {patientData:patientData,patientDate:patientDate},
        //         success : function(data){
        //             var html = '';
        //             var i;
				// 						var tmp=1;
        //             for(i=0; i<data.length; i++,tmp++){
        //                 html += '<tr class="serif">'+
				// 												'<td>'+tmp +'</td>'+	
        //                         '<td>'+data[i].menu+'</td>'+
        //                         '<td>'+data[i].energy+'</td>'+
				// 												'<td>'+data[i].protein+'</td>'+
				// 												'<td>'+data[i].sodium+'</td>'+
				// 												'<td>'+data[i].quantity+'</td>'+
				// 												'<td>'+data[i].name+'</td>'+
        //                         '<td style="text-align:right;">'+
                                    
        //                             '<button type ="submit" class="btn btn-danger btn-sm btn_delete" data-product_code="'+data[i].id+'">ลบ</a>'+
        //                         '</td>'+
        //                         '</tr>';
        //             }
        //             $('#show_data_2').html(html);
        //         }
 
        //     });
        // }
				//end_show_product
					//  view_data
            $('.view_data').click(function(){
				
				
                var patientData = $(this).attr('id');
								// var patientDate = $(this).attr('day');
								//  var patientDate = $('#DynamicValueAssignedHere').find('input[name="date_food"]').val();
								//  var patientDate = paDate;
								 var patientDate = $('#dateFood').val();
								 $('#dateFood').val(patientDate);

								//  var show_date = $(this).attr('date_for_show');
								//  $('#day_div').text(show_date);
                $.ajax({
                
										type  : 'ajax',
                    url: "<?php echo site_url('food/get_patient_result') ?>",
										async : false,
               			dataType : 'JSON',
                    method: "POST",
										data: {patientData:patientData,patientDate:patientDate},
										success: function(data){
											var html = '';
                    var i;
										var tmp=1;
                    for(i=0; i<data.length; i++ ,tmp++){
                        html += '<tr class="serif">'+
																'<td>'+tmp +'</td>'+	
                                '<td>'+data[i].menu+'</td>'+
                                '<td>'+data[i].energy+'</td>'+
																'<td>'+data[i].protein+'</td>'+
																'<td>'+data[i].sodium+'</td>'+
																'<td>'+data[i].quantity+'</td>'+
																'<td>'+data[i].name+'</td>'+
                                
                                    
                                   
                                '</tr>';
                    }
                    
                  
										$('#show_data').html(html);
																					$('#patient_result').html(data);
																						// $('#patientModal').modal('show');
																$("#patientModal").modal().on("show", function () {
																	$("body").addClass("modal-open");
																	}).on("hidden", function () {
																	$("body").removeClass("modal-open")
																});
						
                    }
             });

           
         });

				//  end view_data
				$('.btn_delete').on('click',function(){
            // var product_code = $('#data-product_cod').val();
						var product_code = $(this).attr('data-product_code');
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('food/destroy')?>",
                dataType : "JSON",
                data : {product_code:product_code},
                success: function(data){
									$('[name="product_code"]').val("");
									// $('[name="product_code_delete"]').val("");
                  
                },
								error: function(data){
									alert(data);
                  
                }
            });
            return false;
        });

     });  
    </script>
