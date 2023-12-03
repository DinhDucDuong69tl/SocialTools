<?php
    function insert_danhmuc($ten_danhmuc,$img){
        $sql = "INSERT INTO `danhmuc` ( `ten_danhmuc`, `img`) VALUES ('{$ten_danhmuc}', '{$img}')";
        pdo_execute($sql);
    }    
    
    function loadall_danhmuc(){
        $sql = "SELECT * FROM `danhmuc`";
        $listcate = pdo_query($sql);
        return $listcate;
    }

    function load_name_danhmuc($id){
        if($id>0){
            $sql = "SELECT * FROM `danhmuc` WHERE `id_danhmuc` = {$id}";
            $cate = pdo_query_one($sql);
            extract($cate);
            return $ten_danhmuc;
        }else{
            return "";
        }
    }

    function delete_danhmuc($id_danhmuc) {
        $sql= "DELETE FROM `danhmuc` WHERE `danhmuc`.`id_danhmuc` = ".$_GET['id_danhmuc'];
        pdo_execute($sql);
    }

    function loadone_danhmuc($id) {
        $sql = "select * from danhmuc WHERE `id_danhmuc` =".$id;
        $dm=pdo_query_one($sql);
        return $dm;
    }

    function update_danhmuc($id_danhmuc,$ten_danhmuc, $img_danhmuc){
        if($img_danhmuc!=""){
            $sql = "UPDATE `danhmuc` SET `ten_danhmuc` = '{$ten_danhmuc}', `img` = '{$img_danhmuc}' WHERE `id_danhmuc` = {$id_danhmuc}";
        }else{
            $sql = "UPDATE `danhmuc` SET `ten_danhmuc` = '{$ten_danhmuc}' WHERE `id_danhmuc` = {$id_danhmuc}";
        }        
        pdo_execute($sql);
    }

    
?>


