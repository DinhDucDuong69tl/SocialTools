<div class="content-body">
    <div class="container-fluid">	
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Thêm mới Danh mục</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="index.php?act=adddm" method="post" enctype="multipart/form-data">
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Tên danh mục</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="ten_danhmuc">
                                        <span><?php if(isset($error['ten_danhmuc'])) echo $error['ten_danhmuc']?></span>
                                    </div>
                                    
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Img</label>
                                    <div class="col-sm-10">
                                        <div class="input-group mb-3">
                                            <div class="form-file">
                                                <input type="file" class="form-file-input form-control" name="img">
                                            </div>
											<span class="input-group-text">Upload</span>
                                        </div>
                                        <span><?php if(isset($error['img'])) echo $error['img']?></span>

                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" name="themmoi" id="" value="Thêm mới"  class="btn btn-primary" >
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