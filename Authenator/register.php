<?php
require "../model/pdo.php";

if(isset($_POST['dangky'])&&($_POST['dangky'])) { 
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

    if(empty($_POST['email'])){
        $error['email'] = "Bạn cần nhập email";
    }else{
        $email=$_POST['email'];
    }



if(!empty($error)){

}else{
    $sql = "INSERT INTO `user` (`ten_user`, `pass`, `email`) VALUES ('{$user}', '{$pass} ', '{$email}')";
    pdo_execute($sql);
    $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chức năng bình luận hoặc đặt hàng";
}



}    

?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta property="og:description" content="Social Tools : Trang Đăng Kí">
	<meta property="og:image" content="../img/logo7.png">
	
	<!-- PAGE TITLE HERE -->
	<title>Social Tools : Trang Đăng Kí</title>
	
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
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form action="" method="post">
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type="text" class="form-control" placeholder="Enter Your Username" name="user"  value="<?php if(isset($user)) echo $user?>">
                                            <span><?php if(isset($error['user'])) echo $error['user']?></span>

                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="Enter Your Password" name="pass"  value="<?php if(isset($pass)) echo $pass?>">
                                            <span><?php if(isset($error['pass'])) echo $error['pass']?></span>

                                        </div>
                                        <div class="mb-3">
                                            <label class="mb-1"><strong>Email</strong></label>
                                            <input type="email" class="form-control" placeholder="Enter Your Email" name="email"  value="<?php if(isset($email)) echo $email?>">
                                            <span><?php if(isset($error['email'])) echo $error['email']?></span>

                                        </div>                                         
                                        <div class="text-center mt-4">
                                            <button type="submit" name="dangky" id="" value="Đăng ký" class="btn btn-primary btn-block">Sign up</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="login.php">Sign in</a></p>
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