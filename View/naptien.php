<div class="content-body">
                <div class="container-fluid">	
					<div class="row">
					<?php 
										foreach ($nganhang as $nh ){
											extract($nh);
											// echo "<pre>";
											// print_r($phanmem);
											// echo "</pre>";
										?>		
											<div class="col-xl-6">
											<div class="card text-center">
                                            <h5 class="card-title"> <b><?php echo $nh['ten_nganhang']?></b></h5>
											<div class="card-header" style="display: flex;justify-content: center;">
												<img class="card-img-top img-fluid" src="https://qr.sepay.vn/img?acc=<?php echo $taikhoan_nganhang?>&bank=<?php echo $ten_nganhang?>&des=SocialTools%20<?php echo $_SESSION['user']['id_user']?>" alt="QR NAP" style="width: 300px;">                              
											</div>
											<div class="card-body">
											<!-- <p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the additional content. This content is a little <br> bit longer. Some quick example text to build the bulk</p> -->
											<p class=""><b class="text-dark">Nội Dung Chuyển Khoản Của Bạn Là :</b><b class="text-info">SocialTools <?php echo $_SESSION['user']['id_user'] ?></b></p>
											</div>
									</div>
							</div>
							
							<?php
								}
							?>
							
							
                </div>
    		</div>
		</div>
		</div>