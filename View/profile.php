<div class="content-body">
            <div class="container-fluid">	              
                <div class="row">
                    <div class="col-lg-12">
                        <div class="profile card card-body px-3 pt-3 pb-0">
                            <div class="profile-head">
                                <div class="photo-content">
                                    <div class="cover-photo rounded"></div>
                                </div>
                                <div class="profile-info">
									<div class="profile-photo">
										<img src="../images/profile/pic1.jpg" class="img-fluid rounded-circle" alt="">
									</div>
									<div class="profile-details">
										<div class="profile-name px-3 pt-2">
											<h4 class="text-primary mb-0"><?php echo $_SESSION['user']['ten_user'] ?></h4>
											<p>User name</p>
										</div>
										<div class="profile-email px-2 pt-2">
											<h4 class="text-muted mb-0"><?php echo $_SESSION['user']['money'] ?></h4>
											<p>Money</p>
										</div>										
									</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
					<div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Lịch sử nạp</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th><strong>Money</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                <tr>
                                                    <td><?php echo "+".$money_nap?></td>
                                                </tr>  
                                      
                                        </tbody>
                                       
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Lịch sử mua hàng</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th><strong>Money</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            
                                        </tbody>
                                       
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
</div>