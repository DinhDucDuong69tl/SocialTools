
<div class="content-body">
                <div class="container-fluid">	
					<div class="row">
 					<?php 
						foreach ($listdanhmuc as $danhmuc ){
							extract($danhmuc);
							// echo "<pre>";
							// print_r($danhmuc);
							// echo "</pre>";
						?>						
							<div class="col-xl-6">
									<div class="card text-center">
										<a href="index.php?act=ctdanhmuc&id_danhmuc=<?php echo $id_danhmuc ?>">
											<div class="card-header">
												<img class="card-img-top img-fluid" src="<?php echo $img ?>" alt="Card image cap">                              
												
											</div>
											<div class="card-body">
											<b><h5 class="card-title"><?php echo $ten_danhmuc?></h5></b>
											<!-- <p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the additional content. This content is a little <br> bit longer. Some quick example text to build the bulk</p> -->
											<!-- <p class=""><b class="text-dark">Giá : </b> <?php echo $price ?> <b class="text-success">VND</b></p> -->
											<!-- <a href="javascript:void(0);" class="btn btn-primary">Xem chi tiết</a> -->
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