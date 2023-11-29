<?php
    if(is_array($nganhang)){
        extract($nganhang);
    }

?>
<div class="content-body">
    <div class="container-fluid">	
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update Ngân hàng</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="index.php?act=updatenh" method="post" enctype="multipart/form-data">
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Tên ngân hàng</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="ten_nganhang" value=" <?php if(isset($ten_nganhang)&&($ten_nganhang!="")) echo $ten_nganhang?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Tài khoản ngân hàng</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="taikhoan_nganhang" value=" <?php if(isset($taikhoan_nganhang)&&($taikhoan_nganhang!="")) echo $taikhoan_nganhang?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                    <input type="hidden" name="id_nganhang" value="<?php if(isset($id_nganhang)&&($id_nganhang>0)) echo $id_nganhang ?>" class="btn btn-primary">
                                    <input type="submit" name="capnhat" id="" value="Cập nhật" class="btn btn-primary">
                                    <input type="reset" name="" id="" value="Nhập lại" class="btn btn-primary">
                                    <a href="index.php?act=listnganhang"><input type="button" value="Danh sách" class="btn btn-primary"></a>
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