
<div class="content-body">
    <div class="container-fluid">     
        <div class="row">
					<div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Danh sách phần mềm</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th><strong>Id</strong></th>
                                                <th><strong>Tên phần mềm</strong></th>
                                                <th><strong>Img</strong></th>
                                                <th><strong>Price</strong></th>
                                                <th><strong>Link</strong></th>
                                                <th><strong>Des</strong></th>
                                                <th><strong>Danh mục</strong></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach($listphanmem as $phanmem){
                                                extract($phanmem);
                                                // echo "<pre>";
                                                // print_r($danhmuc);
                                                // echo "</pre>";
                                            ?>
                                            <tr>
                                                <td><strong><?php echo $id_phanmem?></strong></td>
                                                <td><?php echo $ten_phanmem?></td>
                                                <td><img src="<?php echo $img?>" alt="" class="me-3 rounded" width="150" height="150"></td>
                                                <td><?php echo $price?></td>
                                                <td><a href="<?php echo $link?>"><span class="badge light badge-success">Links</span></a></td>
                                                <?php $text_with_br = nl2br($des) ?> 
                                                <td><?php echo $text_with_br?></td>
                                                <td><?php echo $name_danhmuc = load_name_danhmuc($id_danhmuc)?></td>
                                                <td>
													<div class="d-flex">
														<a href="index.php?act=suapm&id_phanmem=<?php echo $id_phanmem ?>" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fas fa-pencil-alt"></i></a>
														<a href="index.php?act=xoapm&id_phanmem=<?php echo $id_phanmem ?>" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
													</div>
												</td>
                                            </tr>
                                            <?php
                                            }
                                             ?>
                                            
                                        </tbody>
                                       
                                    </table>
                                    <a href="index.php?act=addpm"><input type="button" value="Thêm mới"  class="btn btn-primary"></a>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div>      