<div class="content-body">
            <div class="container-fluid">	
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Danh sách ngân hàng</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th style="width:80px;"><strong>Id ngân hàng</strong></th>
                                                <th><strong>Tên ngân hàng</strong></th>
                                                <th><strong>Tài khoản ngân hàng</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($listnganhang as $nganhang){
                                                extract($nganhang);
                                            ?>
                                            <tr>
                                                <td><strong><?php echo $id_nganhang?></strong></td>
                                                <td><?php echo $ten_nganhang?></td>
                                                <td><?php echo $taikhoan_nganhang?></td>	
                                                <td>
													<div class="d-flex">
														<a href="index.php?act=suanh&id_nganhang=<?php echo $id_nganhang ?>" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="index.php?act=xoanh&id_nganhang=<?php echo $id_nganhang ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>									
                                            </tr>
                                            <?php
                                            }
                                            ?>                                           
                                        </tbody>
                                    </table>
                                    <a href="index.php?act=addnh"><input type="button" value="Thêm mới"  class="btn btn-primary"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> 