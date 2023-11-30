<?php
    function tong_tien_nap(){
        $sql = "SELECT SUM(`total_money`) FROM `user` ";
        $tong_tien_nap = pdo_query_one($sql);
        return $tong_tien_nap;
    }
    
    function tong_tien_bill(){
        $sql = "SELECT SUM(`price`) FROM `bill` JOIN `phanmem` ON bill.id_phanmem = phanmem.id_phanmem ";
        $tong_tien_bill = pdo_query_one($sql);
        return $tong_tien_bill;
    }

    function tong_bill(){
        $sql = "SELECT COUNT(`id_bill`) FROM `bill` ";
        $tong_bill = pdo_query_one($sql);
        return $tong_bill;
    }

    function tong_tien_nap_user($id_user){
        $sql = "SELECT SUM(`total_money`) FROM `user` WHERE `id_user` = {$id_user}";
        $tong_tien_nap_user = pdo_query_one($sql);
        return $tong_tien_nap_user;
    }
    
    function tong_tien_bill_user($id_user){
        $sql = "SELECT SUM(`price`) FROM `bill` JOIN `phanmem` ON bill.id_phanmem = phanmem.id_phanmem WHERE `id_user` = {$id_user}";
        $tong_tien_bill_user = pdo_query_one($sql);
        return $tong_tien_bill_user;
    }

    function tong_bill_user($id_user){
        $sql = "SELECT COUNT(`id_bill`) FROM `bill` WHERE `id_user` = {$id_user}";
        $tong_bill_user = pdo_query_one($sql);
        return $tong_bill_user;
    }

?>