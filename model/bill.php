<?php
    function insert_bill($id_phanmem, $id_user, $date){
        $sql = "INSERT INTO `bill` (`id_phanmem`, `id_user`, `date`) VALUES ('{$id_phanmem}', '{$id_user}', '{$date}');";
        pdo_execute($sql);
    }

    function loadall_bill(){
        $sql = "SELECT * FROM `bill`";
        $listbill = pdo_query($sql);
        return $listbill;
    }

    function load_bill_user($id_user){
        $sql = "SELECT * FROM `bill`
        JOIN `user` ON bill.id_user = user.id_user
        JOIN `phanmem` ON bill.id_phanmem = phanmem.id_phanmem where bill.id_user = {$id_user}";
        $listbill = pdo_query($sql);
        return $listbill;
    }

    function loadall_bill_allUser(){
        $sql = "SELECT * FROM `bill`
        JOIN `user` ON bill.id_user = user.id_user
        JOIN `phanmem` ON bill.id_phanmem = phanmem.id_phanmem;";
        $listbill = pdo_query($sql);
        return $listbill;
    }


?>