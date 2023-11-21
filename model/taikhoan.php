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

?>