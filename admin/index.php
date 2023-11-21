<?php
    require "../model/pdo.php";
    require "../model/danhmuc.php";
    require "../model/phanmem.php";
    require "../model/taikhoan.php";
    require "../model/bill.php";
    
  
    require "header.php";

    if(isset($_GET['act'])){
        $act = $_GET['act'];
        switch($act){
            case 'adddm':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $ten_danhmuc= $_POST['ten_danhmuc'];

                    $dir = "../upload/danhmuc/";
                    $filename = basename($_FILES['img']['name']);
                    $fileimg = $dir.$filename;
                    if(move_uploaded_file($_FILES['img']['tmp_name'],$fileimg)){
                        $_POST['img'] = $fileimg;
                        $img = $_POST['img'];
                    }else{
                        echo "up load thất bại";
                    }

                    insert_danhmuc($ten_danhmuc,$img);
                    $thongbao = "Thêm thành công";
                }
                include "danhmuc/add.php";
                break;
            case 'lisdm':
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php"; 
                break;
            case 'xoadm':
                if(isset($_GET['id_danhmuc'])&&($_GET['id_danhmuc']>0)){
                    delete_danhmuc($_GET['id_danhmuc']);
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php"; 
                break;
            case 'suadm':
                if(isset($_GET['id_danhmuc'])&&($_GET['id_danhmuc']>0)){
                    $dm=loadone_danhmuc($_GET['id_danhmuc']);
                }               
                include "danhmuc/update.php"; 
                break;
            case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $ten_danhmuc = $_POST['ten_danhmuc'];
                    $id_danhmuc = $_POST['id_danhmuc'];

                    $dir = "../upload/danhmuc/";
                    $filename = basename($_FILES['img']['name']);
                    $fileimg = $dir.$filename;
                    if(move_uploaded_file($_FILES['img']['tmp_name'],$fileimg)){
                        $_POST['img'] = $fileimg;
                        $img_danhmuc = $_POST['img'];
                    }else{
                        echo "up load thất bại";
                    }
                    update_danhmuc($id_danhmuc,$ten_danhmuc,$img_danhmuc);
                    $thongbao = "Cập nhật thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "danhmuc/list.php"; 
                break;


            // //sản phẩm
            case 'addpm':
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $id_danhmuc=$_POST['id_danhmuc'];
                    $ten_phanmem = $_POST['ten_phanmem'];
                    $price = $_POST['price'];
                    $link = $_POST['link'];
                    $des = $_POST['des'];
                    
                    $dir = "../upload/phanmem/";
                    $filename = basename($_FILES['img']['name']);
                    $fileimg = $dir.$filename;
                    if(move_uploaded_file($_FILES['img']['tmp_name'],$fileimg)){
                        $_POST['img'] = $fileimg;
                        $img = $_POST['img'];
                    }else{
                        echo "up load thất bại";
                    }
                    insert_phanmem($ten_phanmem,$img,$price,$link,$des,$id_danhmuc);
                    $thongbao = "Thêm thành công";
                }
                $listdanhmuc=loadall_danhmuc();
                include "phanmem/add.php";
                break;
            case 'lispm':
                // if(isset($_POST['listok'])&&($_POST['listok'])){
                //     $kyw = $_POST['kyw'];
                //     $iddm = $_POST['iddm'];
                // }else{
                //     $kyw='';
                //     $iddm=0;
                // }
                // $listdanhmuc=loadall_danhmuc();
                $listphanmem=loadall_phanmem();
                include "phanmem/list.php"; 
                break;
            case 'xoapm':
                if(isset($_GET['id_phanmem'])&&($_GET['id_phanmem']>0)){
                    delete_phanmem($_GET['id_phanmem']);
                }
                $sql = "select * from `phanmem`";
                $listphanmem=loadall_phanmem();
                include "phanmem/list.php"; 
                break;
            case 'suapm':
                if(isset($_GET['id_phanmem'])&&($_GET['id_phanmem']>0)){
                    $pm=loadone_phanmem($_GET['id_phanmem']);
                }      
                $listdanhmuc=loadall_danhmuc();     
                include "phanmem/update.php"; 
                break;
            case 'updatepm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $id_phanmem=$_POST['id_phanmem'];
                    $ten_phanmem = $_POST['ten_phanmem'];
                    $price = $_POST['price'];
                    $link = $_POST['link'];
                    $des = $_POST['des'];
                    
                    $dir = "../upload/phanmem/";
                    $filename = basename($_FILES['img']['name']);
                    $fileimg = $dir.$filename;
                    if(move_uploaded_file($_FILES['img']['tmp_name'],$fileimg)){
                        $_POST['img'] = $fileimg;
                        $img = $_POST['img'];
                    }else{
                        echo "up load thất bại";
                    }
                    
                    update_phanmem($id_phanmem,$ten_phanmem,$img,$price,$link,$des);
                    $thongbao = "Cập nhật thành công";
                }
                $listphanmem=loadall_phanmem();
                include "phanmem/list.php"; 
                break;

            //user
            case 'dsuser':     
                $listtaikhoan=loadall_taikhoan();     
                include "taikhoan/list.php"; 
                break;
            case 'naptienuser':
                $listtaikhoan=loadall_taikhoan();    
                include "taikhoan/naptien.php";
                break;
            // //binhluan
            // case 'dsbl':                   
            //     $listbinhluan=loadall_binhluan(0);     
            //     include "binhluan/list.php"; 
            //     break;
            // case 'xoabl':
            //     if(isset($_GET['id'])&&($_GET['id']>0)){
            //         delete_binhluan($_GET['id']);
            //     }
            //     $sql = "select * from binhluan";
            //     $listbinhluan = pdo_query($sql);
            //     include "binhluan/list.php"; 
            //     break;

            // //bill
            case 'listbill':
                $listbill=loadall_bill_allUser();
                include "bill/list.php"; 
                break;
            // case 'xoadh':
            //     if(isset($_GET['id'])&&($_GET['id']>0)){
            //         delete_cart($_GET['id']);
            //         delete_bill($_GET['id']);
            //     }
            //     $sql = "select * from bill";
            //     $listbill=loadall_bill("",0);
            //     include "bill/listbill.php"; 
            //     break;
            // case 'suadh':
            //     if(isset($_GET['id'])&&($_GET['id']>0)){
            //         $bill=loadone_bill($_GET['id']);
            //     }      
            //     $listbill = loadall_bill();    
            //     include "bill/updatebill.php"; 
            //     break;
            // case 'updatedh':
            //     if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
            //         $ttgh = $_POST['ttgh'];
            //         $id = $_POST['id'];
            //         update_bill($id,$ttgh);
            //         $thongbao = "Cập nhật thành công";
            //     }
            //     $listbill=loadall_bill("",0);
            //     include "bill/listbill.php"; 
            //     break;

            // //thong ke hang hoa
            // case 'thongke':
            //     if(isset($_POST['kyw'])&&($_POST['kyw']!="")){
            //         $kyw = $_POST['kyw'];
            //     }else{
            //         $kyw ="";
            //     }
            //     $listthongke=loadall_thongke();
            //     include "thongke/list.php"; 
            //     break;
            // case 'bieudo':
            //     $listthongke=loadall_thongke();
            //     include "thongke/bieudo.php"; 
            //     break;
            default:
                include "home.php";
                break;             
        }
    }else{
        include "home.php";
    }



    require "footer.php";
?>



