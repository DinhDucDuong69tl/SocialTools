<div class="content-body">
    <div class="container-fluid">	
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Nạp tiền cho User</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="index.php?act=adddm" method="post" enctype="multipart/form-data">
                                <div class="input-group mb-3">
                                        <label class="col-sm-2 col-form-label col-form-label-lg">User</label>
                                            <select class="default-select form-control wide" name="id_user">
                                                <option selected="">User</option>
                                                <?php
                                                    foreach($listtaikhoan as $user){
                                                        extract($user);
                                                ?>
                                                    <option value="<?php echo $id_user ?>"><?php echo $ten_user?></option>
                                                <?php
                                                    }
                                                ?>
                                                
                                            </select>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Money</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="money">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" name="naptien" id="" value="Nạp tiền"  class="btn btn-primary" >
                                        <input type="reset" name="" id="" value="Nhập lại"  class="btn btn-primary" >
                                        <a href="index.php?act=lisdm"><input type="button" value="Danh sách"  class="btn btn-primary"></a>
                                    </div>
                                </div>
                                <div class="row">
                                <p><?php
                                    if(isset($thongbao)&&($thongbao!="")){
                                        echo $thongbao;
                                    }

                                ?></p>
                                </div>
                            </form>
                        </div>    
                    </div>
                </div>   
            </div>
        </div>
    </div>
</div>