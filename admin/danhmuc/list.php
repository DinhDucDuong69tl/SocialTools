
<div class="content-body">
    <div class="container-fluid">     
        <div class="row">
					<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Danh sách danh mục</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th><strong>Mã loại</strong></th>
                                                <th><strong>Tên danh mục</strong></th>
                                                <th><strong>Img danh mục</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach($listdanhmuc as $danhmuc){
                                                extract($danhmuc);
                                                // echo "<pre>";
                                                // print_r($danhmuc);
                                                // echo "</pre>";
                                            ?>
                                            <tr>
                                                <td><strong><?php echo $id_danhmuc?></strong></td>
                                                <td><?php echo $ten_danhmuc?></td>
                                                <td><img src="<?php echo $img?>" alt="" class="me-3 rounded" width="150" height="150"></td>
                                                <td>
													<div class="d-flex">
														<a href="index.php?act=suadm&id_danhmuc=<?php echo $id_danhmuc ?>" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="index.php?act=xoadm&id_danhmuc=<?php echo $id_danhmuc ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <?php
                                            }
                                             ?>
                                            
                                        </tbody>
                                       
                                    </table>
                                    <a href="index.php?act=adddm"><input type="button" value="Thêm mới"  class="btn btn-primary"></a>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>      