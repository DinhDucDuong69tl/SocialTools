<?php
    function insert_phanmem($ten_phanmem,$img,$price,$link,$des,$id_danhmuc){
        $sql = "INSERT INTO `phanmem` (`ten_phanmem`, `img`, `price`, `link`, `des`, `id_danhmuc`) VALUES ('{$ten_phanmem}', '{$img}', '{$price} ', '{$link}', '{$des}', '{$id_danhmuc}')";
        pdo_execute($sql);
    }

    function loadall_phanmem(){
        $sql = "SELECT * FROM `phanmem`";
        $listphanmem = pdo_query($sql);
        return $listphanmem;
    }

    function load_phanmem_tuongtu($id_phanmem){
        $sql = "SELECT * FROM `phanmem` WHERE `id_phanmem` <> {$id_phanmem} ";
        $listphanmem = pdo_query($sql);
        return $listphanmem;
    }

    function loadone_phanmem($id_phanmem){
        $sql = "SELECT * FROM `phanmem` WHERE `id_phanmem` = {$id_phanmem}";
        $onephanmem = pdo_query_one($sql);
        return $onephanmem;
    }

    function delete_phanmem($id_phanmem){
        $sql = "DELETE FROM `phanmem` WHERE `id_phanmem` = {$id_phanmem}";
        pdo_execute($sql);
    }

    function update_phanmem($id_phanmem,$ten_phanmem,$img,$price,$link,$des){
        if($img!=""){
            $sql = "UPDATE `phanmem` SET `ten_phanmem` = '{$ten_phanmem}', `img` = '{$img}', `price` = '{$price}', `link` = '{$link}', `des` = '{$des}' WHERE `phanmem`.`id_phanmem` = {$id_phanmem}";
        }else{
            $sql = "UPDATE `phanmem` SET `ten_phanmem` = '{$ten_phanmem}', `price` = '{$price}', `link` = '{$link}', `des` = '{$des}' WHERE `phanmem`.`id_phanmem` = {$id_phanmem}";
        }        
        pdo_execute($sql);
    }

?>