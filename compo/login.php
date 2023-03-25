<?php
session_start();
require_once('./config/config.php');
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$username=$_POST['username'];
$ret= mysqli_query($con,"SELECT * FROM account WHERE username='$username' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="welcome.php";
$_SESSION['login']=$_POST['username'];
$_SESSION['id']=$num['id'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location: push.php");
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
// header("location:index.php");
exit();
}

}


?>
<!DOCTYPE html>
<html lang="en"><head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
	  <link rel="shortcut icon" type="image/png" href="./img/nro.png">
      <meta name="author" content="">
      <title>Nro demon</title>
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/all.min.css">
<link rel="stylesheet" href="assets/css/dataTables.bootstrap5.min.css">
<script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/vpEprwpCoBMgy-fvZET0Mz6L/recaptcha__vi.js" crossorigin="anonymous" integrity="sha384-SWplpoTGO9n0cCKQPyLeFxbEA+jhAKSUD53tZ7QyqoUGsraUbgCI8L1rCnfTPrS9"></script>
<script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/vpEprwpCoBMgy-fvZET0Mz6L/recaptcha__vi.js" crossorigin="anonymous" integrity="sha384-SWplpoTGO9n0cCKQPyLeFxbEA+jhAKSUD53tZ7QyqoUGsraUbgCI8L1rCnfTPrS9"></script>
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="http://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

      <script src="https://www.google.com/recaptcha/api.js"></script>
      <style>
         html {
         font-size: 14px;
         }
         @media (min-width: 768px) {
         html {
         font-size: 16px;
         }
         }
         .container {
         max-width: 960px;
         }
         .pricing-header {
         max-width: 700px;
         }
         .card-deck .card {
         min-width: 220px;
         }
         .border-top {
         border-top: 1px solid #e5e5e5;
         }
         .border-bottom {
         border-bottom: 1px solid #e5e5e5;
         }
         .box-
		 
		 
		 shadow {
         box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05);
         }
        .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        background-color: #f44336;
    }
		 .nav-link {
        color: #f44336;
    }

    .nav-link:focus,
    .nav-link:hover {
        color: #cd3a2f;
    }
      </style>
  
   </style>
</head>
<body>
   
      <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
         <div class="d-flex flex-column flex-md-row align-items-center container">            
           <a href="index.php" class="d-flex align-items-center text-dark text-decoration-none">
              <img class="img-fluid" src="./img/nro.png" alt="" width="36" height="36">
<span class="fs-5">Ngọc Rồng demon</span>     
            </a>
            
              <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto" style="font-weight: 500">
<a class="me-3 py-2 text-dark text-decoration-none" href="./choosen/source.php">Tải về</a>
<a class="me-3 py-2 text-dark text-decoration-none" href="./choosen/history.php">Lịch sử</a>
<a class="me-3 py-2 text-dark text-decoration-none" target="_blank" href="https://www.facebook.com/ng.huo.129">Messenger</a>
<a class="me-3 py-2 text-dark text-decoration-none" target="_blank" href="https://www.facebook.com/ng.huo.129">Hỗ trợ</a>
</nav>
                        <nav class="my-2 my-md-0 mr-md-3">
               <a class="btn btn-outline-primary" href="./login.php" style="font-weight: 500">Đăng nhập</a>
			   
                           </nav>
         </div>
      </div>
   





<style>
    .btn-primary {
        border-color: #f44336 !important;
        color: #fff !important;
    }

    .border-primary {
        border-color: #f44336 !important;
    }

    .bg-primary,
    .btn-primary {
        background-color: #f44336 !important;
    }

    .btn-outline-primary:hover {
        background-color: #f44336;
        border-color: #f44336;
    }

    .btn-outline-primary {
        color: #f44336;
        border-color: #f44336;
    }

    .feature-box {
        padding: 38px 30px;
        position: relative;
        overflow: hidden;
        background: #fff;
        box-shadow: 0 0 29px 0 rgb(18 66 101 / 8%);
        transition: all 0.3s ease-in-out;
        border-radius: 8px;
        z-index: 1;
        width: 100%;
    }

    .feature-icon {
        font-size: 1.8em;
        margin-bottom: 1rem;
    }

    .feature-title {
        font-size: 1.2em;
        font-weight: 500;
        padding-bottom: 0.25rem;
        text-decoration: none;
        color: #212529;
    }

    .list-group-item.active {
        background-color: #f44336;
        border-color: #f44336;
    }

    a {
        text-decoration: none;
    }

    .nav-pills .nav-link.active,
    .nav-pills .show>.nav-link {
        background-color: #f44336;
    }

    .nav-link {
        color: #f44336;
    }

    .nav-link:focus,
    .nav-link:hover {
        color: #cd3a2f;
    }
    .copy-text{
        cursor: pointer;
    }
</style>
<div class="container py-3">
<header>
</header><main>
<form class="form-signin" method="POST">
<div class="text-center mb-2">
<img src="./img/nro.png" alt="" width="57" height="57">
</div>
  <h1 class="h3 mb-3 fw-normal text-center">Vui lòng đăng nhập</h1>
<input type="hidden" name="_token" value="JEGpj39vMoqzUAPDoHWTY8Y4jJiy4t0mhPST9nds">
                        <label class="sr-only">Tài khoản</label>
            <input type="text" class="form-control" placeholder="Tài khoản" required="" name="username">
            <label class="sr-only">Mật khẩu</label>
            <input type="password" class="form-control" placeholder="Mật khẩu" required="" name="password">
            <div class="checkbox mb-3">
<label>
<input type="checkbox" name="remember" value="forever"> Nhớ đăng nhập
</label>
</div>
<button class="btn btn-primary w-100" type="submit" name="login">Đăng nhập</button>
<div class="text-center pt-2">
Bạn chưa có tài khoản? <a href="./register.php">Đăng ký ngay</a>
</div>
<div class="text-center pt-2">
<a href="#">Quên mật khẩu</a>
</div>
</form>
<style>
        .form-signin {
            width: 100%;
            max-width: 400px;
            padding: 15px;
            margin: 0 auto;
        }

        .form-signin .checkbox {
            font-weight: 400;
        }

        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }

        .form-signin .form-control:focus {
            z-index: 2;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
  </style>
</main>
<script src="assets/js/jquery.form.min.js"></script>
<script src="assets/js/clipboard.min.js"></script>
<script src="assets/js/jquery.dataTables.min.js"></script>
<script src="assets/js/dataTables.bootstrap5.min.js"></script>
<script src="assets/js/appa368.js?_=1668687096"></script>
		<footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="text-center">
                Trò chơi không có bản quyền chính thức, hãy cân nhắc kỹ trước khi tham gia.<br> Chơi quá 180 phút một ngày sẽ ảnh hưởng đến sức khỏe.
            </div>
        </footer>

<div class="modal fade" id="modalDownload" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h6 class="modal-title">Tải game</h6>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="list-group">
					<a href="#" class="list-group-item list-group-item-action"><i class="fas fa-download mr-2"></i>Tải về phiên bản cho JAVA</a>
					<a href="#" class="list-group-item list-group-item-action"><i class="fab fa-android mr-2"></i>Tải về phiên bản cho Android</a>
					<a href="#" class="list-group-item list-group-item-action"><i class="fab fa-windows mr-2"></i>Tải về phiên bản cho PC</a>
				</div>
			</div>
		</div>
	</div>
</div>

</div>
<!-- Code made in tui 127.0.0.1 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>

</body>
</html>