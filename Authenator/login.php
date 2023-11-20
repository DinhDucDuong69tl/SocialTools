<?php   
    session_start();
    require "../model/pdo.php";
    require "../model/function.php";

  


 
    if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])) {   
        showArr($_POST);    
       $error = [];
       if(empty($_POST['user'])){
           $error['user'] = "Bạn cần nhập tên user";
       }else{
           $user=$_POST['user'];
       }
       
       if(empty($_POST['pass'])){
           $error['pass'] = "Bạn cần nhập mật khẩu";
       }else{
           $pass=$_POST['pass'];
       }
       
       if(!empty($error)){

       }else{
           $sql = "select * from user WHERE `ten_user`='{$user}' and `pass`='{$pass}'";
           $checkUser=pdo_query_one($sql);
       }
      
     
       if(is_array($checkUser)){
           $_SESSION['user']=$checkUser;
           
           $thongbao = "Đã đăng nhập thành công";
           header("Location:../view/index.php");
           
       }else{
           $thongbao = "Tài khoản không tồn tại";
       }
      
   }  

?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:description" content="Social Tools : Trang Đăng Nhập">
	<meta property="og:image" content="../img/logo7.png">
	
	<!-- PAGE TITLE HERE -->
	<title>Social Tools : Trang Đăng Nhập</title>
	
	<!-- FAVICONS ICON -->
	<link rel="shortcut icon" type="image/png" href="../img/logo7.png">
    <link href="../css/style.css" rel="stylesheet">
</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<a href="index.html"><img src="../img/logo-full.png" alt=""></a>
									</div>
                                    <h4 class="text-center mb-4">Sign in your account</h4>
                                    <span><?php if (isset($thongbao)) echo $thongbao?></span>
                                    <form action="" method="post">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type="text" name="user" class="form-control" placeholder="Enter Your Username">
                                            <span><?php if(isset($error['user'])) echo $error['user']?></span>
                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>password</strong></label>
                                            <input type="password" name="pass" class="form-control" placeholder="Enter Your Password">
                                            <span><?php if(isset($error['pass'])) echo $error['pass']?></span>
                                        </div>
                                        <div class="row d-flex justify-content-between mt-4 mb-2">
                                           
                                            <div class="mb-3">
                                                <a href="forgot.php">Forgot Password?</a>
                                            </div>
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" value="dangnhap" name="dangnhap" class="btn btn-primary btn-block">Login</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Don't have an account? <a class="text-primary" href="register.php">Sign up</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/dlabnav-init.js"></script>
	<script src="js/styleSwitcher.js"></script>
</body>
</html>