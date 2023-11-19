<div class="content-body">
            <div class="container-fluid">	
                 <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">TẤT CẢ ĐƠN HÀNG CỦA BẠN</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-responsive-md">
                                        <thead>
                                            <tr>
                                                <th style="width:80px;"><strong>STT</strong></th>
                                                <th><strong>Tên Phần Mềm</strong></th>
                                                <th><strong>Giá</strong></th>
                                                <th><strong>Ngày mua</strong></th>
                                                <th><strong>Link</strong></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($listbill as $bill){
                                                extract($bill);
                                            ?>
                                            <tr>
                                                <td><strong><?php echo $id_bill?></strong></td>
                                                <td><?php echo $ten_phanmem?></td>
                                                <td><?php echo $price?></td>
                                                <td><?php echo $date?></td>
                                                <td><a href="<?php echo $link?>"><span class="badge light badge-success">DOWNLOAD</span></a></td>
											
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