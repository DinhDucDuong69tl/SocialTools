<div class="content-body">
            <div class="container-fluid">				
                <div class="row">
                    <?php
                        extract($onephanmem);
                    ?>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6  col-md-6 col-xxl-5 ">
                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade show active" id="first">
                                                <img class="img-fluid" src="<?php echo $img ?>" alt="">
                                            </div>
                                        </div>
                                        <!-- <div class="tab-slide-content new-arrival-product mb-4 mb-xl-0">
                                            
                                            <ul class="nav slide-item-list mt-3" role="tablist">
                                                <li role="presentation" class="show">
                                                    <a href="#first" role="tab" data-bs-toggle="tab">
                                                        <img class="img-fluid" src="images/tab/1.jpg" alt="" width="50">
                                                    </a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#second" role="tab" data-bs-toggle="tab"><img class="img-fluid" src="images/tab/2.jpg" alt="" width="50"></a>
                                                </li>
                                                <li role="presentation">
                                                    <a href="#third" role="tab" data-bs-toggle="tab"><img class="img-fluid" src="images/tab/3.jpg" alt="" width="50"></a>
                                                </li>
												<li role="presentation">
                                                    <a href="#for" role="tab" data-bs-toggle="tab"><img class="img-fluid" src="images/tab/4.jpg" alt="" width="50"></a>
                                                </li>
                                            </ul>
                                        </div> -->
                                    </div>
                                    <!--Tab slider End-->
                                    <div class="col-xl-9 col-lg-6  col-md-6 col-xxl-7 col-sm-12">
                                        <div class="product-detail-content">
                                            <!--Product details-->
                                            <div class="new-arrival-content pr">
                                                <h4><?php echo $ten_phanmem ?></h4>
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
													<p class="price float-start d-block"><?php echo $price ?> </p> <b class="text-success">  VND</b>
                                                </div>
                                                <?php $text_with_br = nl2br($des);?>                                                
                                                <p class="text-content"><?php echo $text_with_br ?></p>
                                                <form action="index.php?act=muangay" method="post">
												<input type="hidden" name="id_phanmem" value="<?php echo $id_phanmem ?>">
												<input type="hidden" name="price" value="<?php echo $price ?>">
												<input type="submit" value="Mua ngay" name="muangay" class="btn btn-primary">
											    </form>
												
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
										<a href="index.php?act=ctphanmem&id_phanmem=<?php echo $id_phanmem ?>">
											<div class="card-header">
												<img class="card-img-top img-fluid" src="<?php echo $img ?>" alt="Card image cap">                              
											</div>
											<div class="card-body">
											<b><h5 class="card-title"><?php echo $ten_phanmem ?></h5></b>
											<!-- <p class="card-text">This is a wider card with supporting text and below as a natural lead-in to the additional content. This content is a little <br> bit longer. Some quick example text to build the bulk</p> -->
											<p class=""><b class="text-dark">Giá : </b> <?php echo $price ?> <b class="text-success">VND</b></p>
											<form action="index.php?act=muangay" method="post">
												<input type="hidden" name="id_phanmem" value="<?php echo $id_phanmem ?>">
												<input type="hidden" name="price" value="<?php echo $price ?>">
												<input type="submit" value="Mua ngay" name="muangay" class="btn btn-primary">
											</form>
											</div>
										</a>
									</div>
							</div>
								
						<?php
						}
						?>
						
                </div>
    		</div>
	

		