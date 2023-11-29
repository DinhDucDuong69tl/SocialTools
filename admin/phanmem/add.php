<div class="content-body">
    <div class="container-fluid">	
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Thêm mới Phần mềm</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="index.php?act=addpm" method="post" enctype="multipart/form-data">
                                <div class="input-group mb-3">
                                        <label class="col-sm-2 col-form-label col-form-label-lg">Danh mục</label>
                                        <div class="col-sm-10">
                                            <select class="default-select form-control wide" name="id_danhmuc">
                                                <option value="" selected>Chọn danh mục</option>
                                                <?php
                                                    foreach($listdanhmuc as $danhmuc){
                                                        extract($danhmuc);
                                                ?>
                                                    <option value="<?php echo $id_danhmuc ?>"><?php echo $ten_danhmuc?></option>
                                                <?php
                                                    }
                                                ?>
                                                
                                            </select>
                                        <span><?php if(isset($error['id_danhmuc'])) echo $error['id_danhmuc']?></span>
                                        </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Tên phần mềm</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="ten_phanmem">
                                        <span><?php if(isset($error['ten_phanmem'])) echo $error['ten_phanmem']?></span>
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
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="price">
                                        <span><?php if(isset($error['price'])) echo $error['price']?></span>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="link">
                                        <span><?php if(isset($error['link'])) echo $error['link']?></span>
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Des</label>
                                    <div class="col-sm-10">
                                        <textarea name="des" id="" cols="115" rows="10" ></textarea>
                                        <span><?php if(isset($error['des'])) echo $error['des']?></span>
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="submit" name="themmoi" id="" value="Thêm mới"  class="btn btn-primary" >
                                        <input type="reset" name="" id="" value="Nhập lại"  class="btn btn-primary" >
                                        <a href="index.php?act=lispm"><input type="button" value="Danh sách"  class="btn btn-primary"></a>
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