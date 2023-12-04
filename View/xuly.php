<?php
        require "../model/pdo.php";
        require "../model/danhmuc.php";
        require "../model/phanmem.php";
        require "../model/bill.php";
        require "../model/taikhoan.php";
        require "../model/nganhang.php";
        require "../model/function.php";
    session_start();

    // showArr($_SESSION);
    // showArr($_POST);
    
    if(isset($_SESSION['user'])){
        $id_user =  $_SESSION['user']['id_user'];
    }else{
        $id_user = 0;
    }

if(isset($_POST['action']) && $_POST['action'] == 'mua'){        
    // Xử lý dữ liệu tại đây

        $id_phanmem = $_POST['idpm'];
        $price = $_POST['gia'];
        if( $_SESSION['user']['money'] >= $price){
            
            $money_user =  $_SESSION['user']['money'] - $price;
            $_SESSION['user']['money'] = $money_user;
            $date =date('h:i:sa  d/m/Y');
            update_money_mua($id_user,$money_user);
            insert_bill($id_phanmem, $id_user, $date);   
            $data1 = "Mua Thành Công";
            $data2 = "Cảm Ơn Bạn Đã Mua!";
            $data3 = "success";
            echo json_encode(array('data1' => $data1, 'data2' => $data2, 'data3' => $data3));
        }else{
            $data1 = "Mua Thất Bại";
            $data2 = "Bạn Không Đủ Tiền Để Mua!";
            $data3 = "error";
            echo json_encode(array('data1' => $data1, 'data2' => $data2, 'data3' => $data3));

        }  
} else {
    $data1 = "Mua Thất Bại";
    $data2 = "Không có dữ liệu được gửi.";
    $data3 = "error";
    echo json_encode(array('data1' => $data1, 'data2' => $data2, 'data3' => $data3));
}
?>
