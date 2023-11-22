<?php
function insert_taikhoan($user,$pass,$money){
    $sql = "INSERT INTO `user` (`user`, `pass`, `money`) VALUES ('{$user}', '{$pass}','{$money}')";
    pdo_execute($sql);
}
function loadall_taikhoan() {
    $sql = "select * from `user`";
    $listtaikhoan= pdo_query($sql);
    return $listtaikhoan;
}

function load_one_user($id_user) {
    $sql = "select * from `user` where `id_user`= '{$id_user}'";
    $one_user = pdo_query_one($sql);
    // $money_user = implode(' ', $money);
    return $one_user;
}

function update_money($id_user,$money){
    $sql = "UPDATE `user` SET `money` = '{$money}' WHERE `user`.`id_user` = {$id_user}";
    pdo_execute($sql);
}
?>