<div class="content-body">
<div class="container-fluid">				
                <div class="row">
                    <?php
                        extract($onephanmem);
                        // echo "<pre>";
						// print_r($onephanmem);
						// echo "</pre>";
                    ?>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">                                   
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade show active" id="first">
                                                <img class="img-fluid" src="<?php echo $onephanmem['img'] ?>" style="width: 300px; height: 300px;" alt="">
                                            </div>
                                        </div> 
                                    </div>
                                    <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                        <div class="product-detail-content"> 
                                            <div class="new-arrival-content pr">
                                                <h4><?php echo $onephanmem['ten_phanmem'] ?></h4>
                                                <div class="comment-review star-rating">
													<ul>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
														<li><i class="fa fa-star"></i></li>
													</ul>
												</div>
												<div class="d-table mb-2">
                                                    <b><p style="font-size: 40px; color:#5BCFC5"><?php echo number_format($onephanmem['price'])?> <b class="text-success">  VND</b> </p> </b>
													
                                                </div>
                                                <?php $text_with_br = nl2br($onephanmem['des']) ?>                                                
                                                <p class="text-content"><?php echo $text_with_br ?></p>
                                                <div class="card-title">
                                                <input type="hidden" class="idphanmem" name="idphanmem" value="<?php echo $onephanmem['id_phanmem'] ?>">
                                                <input type="hidden" class="price" name="price" value="<?php echo $onephanmem['price'] ?>">
                                                <input type="submit" value="Mua ngay" name="muangay" class="btn btn-primary btn-mua">
                                                </div>
                                               
                                            </div>

                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

    <h3>Sản phẩm tương tự</h3>
  
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
										<a href="index.php?act=ctphanmem&id_phanmem=<?php echo $phanmem['id_phanmem'] ?>">
											<div class="card-header">
												<img class="card-img-top img-fluid" src="<?php echo $phanmem['img'] ?>" style="width: 700px; height: 400px;" alt="Card image cap">                              
											</div>
											<div class="card-body">
											<b><h5 class="card-title"><?php echo  $phanmem['ten_phanmem'] ?></h5></b>
											<!-- <p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the additional content. This content is a little <br> bit longer. Some quick example text to build the bulk</p> -->
											<p class=""><b class="text-dark">Giá : </b> <?php echo number_format($phanmem['price'])?> <b class="text-success">VND</b></p>
												
											</div>
										</a>
                                        <div class="card-title">
										<input type="hidden" class="idphanmem" name="idphanmem" value="<?php echo  $phanmem['id_phanmem'] ?>">
										<input type="hidden" class="price" name="price" value="<?php echo  $phanmem['price'] ?>">
										<input type="submit" value="Mua ngay" name="muangay" class="btn btn-primary btn-mua">
										</div>
									</div>
							</div>
								
						<?php
						}
						?>
						
                    </div> 
                </div>
</div>
    	
	

		