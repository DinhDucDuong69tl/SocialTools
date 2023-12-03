<?php
    if(is_array($dm)){
        extract($dm);
    }

    // $hinhpath="../upload/danhmuc/".$img;
    // if(is_file($hinhpath)){
    //     $img = " <img src='".$hinhpath."' heigth='50px'; width='50px' >";
    // }else{
    //     $img = "no photo";
    // }
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
                            <form action="index.php?act=updatedm" method="post"  enctype="multipart/form-data">
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Tên danh mục</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="ten_danhmuc" value=" <?php if(isset($ten_danhmuc)&&($ten_danhmuc!="")) echo $ten_danhmuc?>">
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
                                        <img src="<?php if(isset($img)&&($img!="")) echo $img?>" alt="" class="me-3 rounded" width="150" height="150">
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