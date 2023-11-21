
		
<!--**********************************
     Home
***********************************-->	

<div class="content-body">
                <div class="container-fluid">	
					<div class="row">
 					<?php 
						foreach ($listphanmem as $phanmem ){
							extract($phanmem);
							// echo "<pre>";
							// print_r($phanmem);
							// echo "</pre>";
						?>						
							<div class="col-xl-6">
									<div class="card text-center">
										<a href="index.php?act=ctphanmem&id_phanmem=<?php echo $id_phanmem ?>">
											<div class="card-header">
												<img class="card-img-top img-fluid" src="../images/card/1.png" alt="Card image cap">                              
											</div>
											<div class="card-body">
											<b><h5 class="card-title"><?php echo $ten_phanmem ?></h5></b>
											<!-- <p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the additional content. This content is a little <br> bit longer. Some quick example text to build the bulk</p> -->
											<p class=""><b class="text-dark">Giá : </b> <?php echo $price ?> <b class="text-success">VND</b></p>
											<a href="javascript:void(0);" class="btn btn-primary">Mua Ngay</a>
											</div>
										</a>
									</div>
							</div>
								
						<?php
						}
						?>
						
                </div>
    		</div>
		</div>

		