
		<!-- main content start-->
		
		
		
		<div id="page-wrapper">
			<div class="main-page general">
      <h3 class="title1"> อาหารแลกเปลี่ยน </h3>
				<div class="panel-group tool-tips widget-shadow" id="accordion" role="tablist" aria-multiselectable="true">
					
					
                   
                        <table class="table table-bordered"> <thead> <tr class="info">  <th>ชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>หมวด</th> <th>เพิ่ม</th></tr> </thead>
								  <tbody>
									<form action="<?php echo site_url('food_edit/store') ?>" method="post" >
                                        <tr> 
                                            <td><input type="text" class="form-control1" name = "menu" required></td> 
                                            <td><input type="text" class="form-control1" name = "unit" required></td> 
                                            <td><input type="text" class="form-control1" name = "energy" required></td> 
                                            <td><input type="text" class="form-control1" name = "protein"required></td> 
                                            <td><input type="text" class="form-control1" name = "sodium" required></td> 
                                            <td>
                                                <select required class="form"  name = "category" >
                                                    <option  value= "" >กรุณาเลือก</option>
                                                    <option  value="กับข้าวร่วมสำรับ">กับข้าวร่วมสำรับ</option>
                                                    <option  value="อาหารจานเดียว">อาหารจานเดียว</option>
                                                    <option  value="ข้าวและแป้ง">ข้าวและแป้ง</option>
                                                    <option  value="แป้งปลอดโปรตีน">แป้งปลอดโปรตีน</option>
                                                    <option  value="ไขมัน">ไขมัน</option>
                                                    <option  value="เนื้อสัตว์">เนื้อสัตว์</option>
                                                    <option  value="ผัก">ผัก</option>
                                                    <option  value="ผลไม้">ผลไม้</option>
                                                    <option  value="ขนม">ขนม</option>
                                                    <option  value="เครื่องดื่ม">เครื่องดื่ม </option>
                                                    <option  value="เครื่องปรุง">เครื่องปรุง</option>
                                                </select>
                                            </td>
                                            <td><button type="submit" class="btn btn-primary">เพิ่ม</button></td> 
                                        </tr>
									</form>
								  
								  </tbody>
							  </table>

                   

                    
				
					</center>
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
							  <table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>การดำเนินการ</th> </tr> </thead>
								  <tbody>
								
										
                                            
                                            <?php 
                                            $i_deck = 0;
                                            foreach($decks as $deck )
                                            { $i_deck++;
                                            ?>
                                                <tr>
                                                    <th scope="row"><?php echo $i_deck?></th> 
                                                    <td><?php echo $deck->menu?></td> 
                                                    <td><?php echo $deck->unit?></td> 
                                                    <td><?php echo $deck->energy?></td> 
                                                    <td><?php echo $deck->protein?></td> 
                                                    <td><?php echo $deck->sodium?></td> 
                                                    <td><center><a href="<?php //echo site_url('food_edit/destroy/'.$deck->id) ?>"><button type="" class="btn btn-danger">ลบ</button></a></center></td> 
                                                    <!-- <?php
                                                    if($deck->is_active == "yes")
                                                    {
                                                      ?>
                                                      <td><center><a href="<?php echo site_url('food_edit/cancel_nutri/'.$deck->id) ?>"><button type="" class="btn btn-danger">ยกเลิก</button></a></center></td>
                                                      <?php
                                                    }
                                                    else{
                                                      ?>
                                                      <td><center><a href="<?php echo site_url('food_edit/active/'.$deck->id) ?>"><button type="" class="btn btn-primary">ใช้งาน</button></a></center></td>
                                                      <?php
                                                    }
                                                    ?> -->
                                                    
                                                    
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
						  <table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>การดำเนินการ</th></tr> </thead>
							  <tbody>
                                <form action="<?php echo site_url('') ?>" method="post" >
										
                                            
                                        <?php 
                                        $i_onedish = 0;
                                        foreach($onedishes as $onedish )
                                        { $i_onedish++;
                                        ?>
                                            <tr>
                                                <th scope="row"><?php echo $i_onedish?></th> 
                                                <td><?php echo $onedish->menu?></td> 
                                                <td><?php echo $onedish->unit?></td> 
                                                <td><?php echo $onedish->energy?></td> 
                                                <td><?php echo $onedish->protein?></td> 
                                                <td><?php echo $onedish->sodium?></td> 
                                                <td><center><a href="<?php echo site_url('food_edit/destroy/'.$onedish->id) ?>"><button type="" class="btn btn-danger">ลบ</button></a></center></td> 
                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    
                                </form>
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
						  <table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>การดำเนินการ</th></tr> </thead>
							  <tbody>
                                    <form action="<?php echo site_url('') ?>" method="post" >
                                            
                                                
                                            <?php 
                                            $i_carbohydrate = 0;
                                            foreach($carbohydrates as $carbohydrate )
                                            { $i_carbohydrate++;
                                            ?>
                                                <tr>
                                                    <th scope="row"><?php echo $i_carbohydrate?></th> 
                                                    <td><?php echo $carbohydrate->menu?></td> 
                                                    <td><?php echo $carbohydrate->unit?></td> 
                                                    <td><?php echo $carbohydrate->energy?></td> 
                                                    <td><?php echo $carbohydrate->protein?></td> 
                                                    <td><?php echo $carbohydrate->sodium?></td> 
                                                    <td><center><a href="<?php echo site_url('food_edit/destroy/'.$carbohydrate->id) ?>"><button type="" class="btn btn-danger">ลบ</button></a></center></td> 
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        
                                    </form>
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
						  <table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>การดำเนินการ</th></tr> </thead>
							  <tbody>
                                    <form action="<?php echo site_url('') ?>" method="post" >
                                            
                                                
                                            <?php 
                                            $i_carbohydrate_without_protein = 0;
                                            foreach($carbohydrate_without_proteins as $carbohydrate_without_protein )
                                            { $i_carbohydrate_without_protein++;
                                            ?>
                                                <tr>
                                                    <th scope="row"><?php echo $i_carbohydrate_without_protein?></th> 
                                                    <td><?php echo $carbohydrate_without_protein->menu?></td> 
                                                    <td><?php echo $carbohydrate_without_protein->unit?></td> 
                                                    <td><?php echo $carbohydrate_without_protein->energy?></td> 
                                                    <td><?php echo $carbohydrate_without_protein->protein?></td> 
                                                    <td><?php echo $carbohydrate_without_protein->sodium?></td> 
                                                    <td><center><a href="<?php echo site_url('food_edit/destroy/'.$carbohydrate_without_protein->id) ?>"><button type="" class="btn btn-danger">ลบ</button></a></center></td> 
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        
                                    </form>
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
						  <table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>การดำเนินการ</th></tr> </thead>
							  <tbody>
                                    <form action="<?php echo site_url('') ?>" method="post" >
                                            
                                                
                                            <?php 
                                            $i_fat = 0;
                                            foreach($fats as $fat )
                                            { $i_fat++;
                                            ?>
                                                <tr>
                                                    <th scope="row"><?php echo $i_fat?></th> 
                                                    <td><?php echo $fat->menu?></td> 
                                                    <td><?php echo $fat->unit?></td> 
                                                    <td><?php echo $fat->energy?></td> 
                                                    <td><?php echo $fat->protein?></td> 
                                                    <td><?php echo $fat->sodium?></td> 
                                                    <td><center><a href="<?php echo site_url('food_edit/destroy/'.$fat->id) ?>"><button type="" class="btn btn-danger">ลบ</button></a></center></td> 
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        
                                    </form>
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
								<table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>การดำเนินการ</th></tr> </thead>
									<tbody>
                                        
                                            
                                                
                                            <?php 
                                            $i_meat = 0;
                                            foreach($meats as $meat )
                                            { $i_meat++;
                                            ?>
                                                <tr>
                                                    <th scope="row"><?php echo $i_meat?></th> 
                                                    <td><?php echo $meat->menu?></td> 
                                                    <td><?php echo $meat->unit?></td> 
                                                    <td><?php echo $meat->energy?></td> 
                                                    <td><?php echo $meat->protein?></td> 
                                                    <td><?php echo $meat->sodium?></td> 
                                                    <td><center><a href="<?php echo site_url('food_edit/destroy/'.$meat->id) ?>"><button type="" class="btn btn-danger">ลบ</button></a></center></td> 
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
								<table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>การดำเนินการ</th></tr> </thead>
									<tbody>
                                        <form action="<?php echo site_url('') ?>" method="post" >
                                            
                                                
                                            <?php 
                                            $i_vegetable = 0;
                                            foreach($vegetables as $vegetable )
                                            { $i_vegetable++;
                                            ?>
                                                <tr>
                                                    <th scope="row"><?php echo $i_vegetable?></th> 
                                                    <td><?php echo $vegetable->menu?></td> 
                                                    <td><?php echo $vegetable->unit?></td> 
                                                    <td><?php echo $vegetable->energy?></td> 
                                                    <td><?php echo $vegetable->protein?></td> 
                                                    <td><?php echo $vegetable->sodium?></td> 
                                                    <td><center><a href="<?php echo site_url('food_edit/destroy/'.$vegetable->id) ?>"><button type="" class="btn btn-danger">ลบ</button></a></center></td> 
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                    
                                        </form>
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
								<table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>การดำเนินการ</th></tr> </thead>
									<tbody>
                                        
                                            
                                                
                                            <?php 
                                            $i_fruit = 0;
                                            foreach($fruits as $fruit )
                                            { $i_fruit++;
                                            ?>
                                                <tr>
                                                    <th scope="row"><?php echo $i_fruit?></th> 
                                                    <td><?php echo $fruit->menu?></td> 
                                                    <td><?php echo $fruit->unit?></td> 
                                                    <td><?php echo $fruit->energy?></td> 
                                                    <td><?php echo $fruit->protein?></td> 
                                                    <td><?php echo $fruit->sodium?></td> 
                                                    <td><center><a href="<?php echo site_url('food_edit/destroy/'.$fruit->id) ?>"><button type="" class="btn btn-danger">ลบ</button></a></center></td> 
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
								<table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>การดำเนินการ</th></tr> </thead>
									<tbody>
                                        
                                                
                                                    
                                                <?php 
                                                $i_candy = 0;
                                                foreach($candys as $candy )
                                                { $i_candy++;
                                                ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $i_candy?></th> 
                                                        <td><?php echo $candy->menu?></td> 
                                                        <td><?php echo $candy->unit?></td> 
                                                        <td><?php echo $candy->energy?></td> 
                                                        <td><?php echo $candy->protein?></td> 
                                                        <td><?php echo $candy->sodium?></td> 
                                                        <td><center><a href="<?php echo site_url('food_edit/destroy/'.$candy->id) ?>"><button type="" class="btn btn-danger">ลบ</button></a></center></td> 
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
								<table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>การดำเนินการ</th></tr> </thead>
									<tbody>
                                        
                                                
                                                    
                                                <?php 
                                                $i_drink = 0;
                                                foreach($drinks as $drink )
                                                { $i_drink++;
                                                ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $i_drink?></th> 
                                                        <td><?php echo $drink->menu?></td> 
                                                        <td><?php echo $drink->unit?></td> 
                                                        <td><?php echo $drink->energy?></td> 
                                                        <td><?php echo $drink->protein?></td> 
                                                        <td><?php echo $drink->sodium?></td> 
                                                        <td><center><a href="<?php echo site_url('food_edit/destroy/'.$drink->id) ?>"><button type="" class="btn btn-danger">ลบ</button></a></center></td> 
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
								<table class="table table-bordered"> <thead> <tr class="info"> <th>ลำดับ</th> <th>รายชื่ออาหาร</th> <th>หน่วย</th> <th>พลังงาน</th> <th>โปรตีน</th> <th>โซเดียม</th> <th>การดำเนินการ</th></tr> </thead>
									<tbody>
                                      
                                                
                                                    
                                                <?php 
                                                $i_garnish = 0;
                                                foreach($garnishes as $garnish )
                                                { $i_garnish++;
                                                ?>
                                                    <tr>
                                                        <th scope="row"><?php echo $i_garnish?></th> 
                                                        <td><?php echo $garnish->menu?></td> 
                                                        <td><?php echo $garnish->unit?></td> 
                                                        <td><?php echo $garnish->energy?></td> 
                                                        <td><?php echo $garnish->protein?></td> 
                                                        <td><?php echo $garnish->sodium?></td> 
                                                        <td><center><a href="<?php echo site_url('food_edit/destroy/'.$garnish->id) ?>"><button type="" class="btn btn-danger">ลบ</button></a></center></td> 
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