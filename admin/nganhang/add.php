<div class="content-body">
    <div class="container-fluid">	
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Thêm mới Ngân hàng</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="index.php?act=addnh" method="post" enctype="multipart/form-data">
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Tên ngân hàng</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="ten_nganhang">
                                        <span><?php if(isset($error['ten_nganhang'])) echo $error['ten_nganhang']?></span>

                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Tài khoản ngân hàng</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="taikhoan_nganhang">
                                        <span><?php if(isset($error['taikhoan_nganhang'])) echo $error['taikhoan_nganhang']?></span>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" name="themmoi" id="" value="Thêm mới"  class="btn btn-primary" >
                                        <input type="reset" name="" id="" value="Nhập lại"  class="btn btn-primary" >
                                        <a href="index.php?act=listnganhang"><input type="button" value="Danh sách"  class="btn btn-primary"></a>
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