<?php
    if(is_array($pm)){
        extract($pm);
        
    }
    // showArray($pm);
    // $hinhpath="../upload/phanmem/".$img;
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
                        <h4 class="card-title">Update Phần mềm</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="index.php?act=updatepm" method="post" enctype="multipart/form-data">
                                <div class="input-group mb-3">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Danh mục</label>
                                        <select class="default-select form-control wide" name="id_danhmuc">
                                            <?php
                                                foreach($listdanhmuc as $danhmuc){
                                                    extract($danhmuc);
                                                    if($pm['id_danhmuc']==$danhmuc['id_danhmuc']){
                                            ?>
                                                <option value="<?php echo $id_danhmuc ?>" selected ><?php echo $ten_danhmuc?></option>
                                            <?php
                                                    }
                                                }
                                            ?>
                                            
                                        </select>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Tên phần mềm</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="ten_phanmem" value=" <?php if(isset($ten_phanmem)&&($ten_phanmem!="")) echo $ten_phanmem?>">
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
                                        <img src="<?php if(isset($pm['img'])&&($pm['img']!="")) echo $pm['img']?>" alt="" class="me-3 rounded" width="150" height="150">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Price</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="price" value=" <?php if(isset($price)&&($price!="")) echo $price?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Link</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="link" value=" <?php if(isset($link)&&($link!="")) echo $link?>">
                                    </div>
                                </div>
                                <div class="mb-3 row">
                                    <label class="col-sm-2 col-form-label col-form-label-lg">Des</label>
                                    <div class="col-sm-10">
                                        <textarea name="des" id="" cols="115" rows="10" ><?php if(isset($des)&&($des!="")) echo $des?></textarea>
                                    </div>
                                </div>
                               
                                <div class="row">
                                    <div class="col-lg-12">
                                        <input type="hidden" name="id_phanmem" value="<?php if(isset($id_phanmem)&&($id_phanmem>0)) echo $id_phanmem ?>" class="btn btn-primary">
                                        <input type="submit" name="capnhat" id="" value="Cập nhật"  class="btn btn-primary" >
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