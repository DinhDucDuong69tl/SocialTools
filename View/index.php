<?php
    require "../model/pdo.php";
    require "../model/danhmuc.php";
    require "../model/phanmem.php";
    require "../model/bill.php";
    require "../model/taikhoan.php";
    require "../model/nganhang.php";
    require "../model/function.php";

    session_start();
    if(isset($_SESSION['user']['ten_user'])){
    require "header.php";

    $listphanmem = loadall_phanmem();
    $listdanhmuc = loadall_danhmuc();
    
        
    if(isset($_GET['act'])&&($_GET['act'])!=""){
        $act = $_GET['act'];
        switch($act){
            case 'ctphanmem':                 
                if(isset($_GET['id_phanmem'])&&($_GET['id_phanmem']>0)) {                    
                    $onephanmem = loadone_phanmem($_GET['id_phanmem']); 
                    extract($onephanmem);

                    $listphanmem = load_phanmem_tuongtu($_GET['id_phanmem'],$id_danhmuc);
                    require "ctphanmem.php";
                }else{
                    require "home.php";
                }                       
                break;
            case 'ctdanhmuc':                 
                if(isset($_GET['id_danhmuc'])&&($_GET['id_danhmuc']>0)) {                    
                    $listphanmem = load_phanmem_cungdanhmuc($_GET['id_danhmuc']);
                    require "ctdanhmuc.php";
                }else{
                    require "home.php";
                }                       
                break;
            case 'muangay':
                if(isset($_POST['muangay'])&&($_POST['muangay'])){
                    if(isset($_SESSION['user'])){
                        $id_user =  $_SESSION['user']['id_user'];
                    }else{
                        $id_user = 0;
                    }

                    $id_phanmem = $_POST['id_phanmem'];
                    $price = $_POST['price'];
                    if( $_SESSION['user']['money'] >= $price){
                        $money_user =  $_SESSION['user']['money'] - $price;
                        $_SESSION['user']['money'] = $money_user;
                        $date =date('h:i:sa  d/m/Y');
                        update_money_mua($id_user,$money_user);
                        $id_bill = insert_bill($id_phanmem, $id_user, $date);
                        
                        $thongbao = "Mua thành công hãy xem bill";
                        
                    }else{
                        $thongbao = "Bạn không đủ tiền để mua";

                    }  
                    require "muangay.php";                                                       
                }
                
                // 
                break;
            case 'bill':
                    $listbillUser = load_bill_user( $_SESSION['user']['id_user']) ;   
                    require "bill.php";                    
                break;
            case 'naptien':
                // // $ngaydathang =date('h:i:sa  d/m/Y');
                // $listbillUser = load_bill_user(1) ;   
                require "naptien.php";                    
                break;
            case 'profile':         
                $id_user = $_SESSION['user']['id_user'];
                $listlsnap = loadall_ls_nap($id_user);
                require "profile.php";                    
                break;
            // case 'logout':
            //     session_unset();
            //     // header("Location: ../index.html");
            //     break;
            default:
                require "home.php";
                break;
        }
    }else{
        require "home.php";
    }



    require "footer.php";
} else {
    header('Location: ../Error/404.php');
}
?>