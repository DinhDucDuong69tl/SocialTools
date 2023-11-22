<?php
    require "../model/pdo.php";
    require "../model/danhmuc.php";
    require "../model/phanmem.php";
    require "../model/bill.php";
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
            case 'bill':
                    // $ngaydathang =date('h:i:sa  d/m/Y');
                    $listbillUser = load_bill_user( $_SESSION['user']['id_user']) ;   
                    require "bill.php";                    
                break;
            case 'naptien':
                // // $ngaydathang =date('h:i:sa  d/m/Y');
                // $listbillUser = load_bill_user(1) ;   
                require "naptien.php";                    
                break;
            case 'profile':
 
                require "profile.php";                    
                break;
            case 'logout':
                session_unset();
                // header("Location: ../index.html");
                break;
            default:
                require "home.php";
                break;
        }
    }else{
        require "home.php";
    }



    require "footer.php";
?>