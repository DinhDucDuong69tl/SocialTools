<?php
function insert_nganhang($ten_nganhang,$taikhoan_nganhang){
    $sql = "INSERT INTO `nganhang` (`ten_nganhang`, `taikhoan_nganhang`) VALUES ('{$ten_nganhang}', '{$taikhoan_nganhang}')";
    pdo_execute($sql);
}
function loadall_nganhang() {
    $sql = "select * from `nganhang`";
    $listnganhang= pdo_query($sql);
    return $listnganhang;
}

function loadone_nganhang($id_nganhang) {
    $sql = "select * from nganhang WHERE `id_nganhang` =".$id_nganhang;
    $nganhang = pdo_query_one($sql);
    return $nganhang;
}

function delete_nganhang($id_nganhang) {
    $sql= "DELETE FROM `nganhang` WHERE `nganhang`.`id_nganhang` = ".$_GET['id_nganhang'];
    pdo_execute($sql);
}


function update_nganhang($id_nganhang,$ten_nganhang, $taikhoan_nganhang){
    $sql = "UPDATE `nganhang` SET `ten_nganhang` = '{$ten_nganhang}', `taikhoan_nganhang` = '{$taikhoan_nganhang}' WHERE `id_nganhang` = {$id_nganhang}";      
    pdo_execute($sql);
}


?>