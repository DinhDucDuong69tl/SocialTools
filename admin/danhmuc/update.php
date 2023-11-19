<?php
    if(is_array($dm)){
        extract($dm);
    }
?>

<div class="content-body">
    <div class="container-fluid">	
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Update danh mục</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="index.php?act=updatedm" method="post">
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Tên danh mục</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="ten_danhmuc" value=" <?php if(isset($ten_danhmuc)&&($ten_danhmuc!="")) echo $ten_danhmuc?>">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                    <input type="hidden" name="id_danhmuc" value="<?php if(isset($id_danhmuc)&&($id_danhmuc>0)) echo $id_danhmuc ?>" class="btn btn-primary">
                                    <input type="submit" name="capnhat" id="" value="Cập nhật" class="btn btn-primary">
                                    <input type="reset" name="" id="" value="Nhập lại" class="btn btn-primary">
                                    <a href="index.php?act=lisdm"><input type="button" value="Danh sách" class="btn btn-primary"></a>
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