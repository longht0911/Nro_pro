<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
  }
	
?>
<!DOCTYPE html>
<html lang="en"><head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
	  <link rel="shortcut icon" type="image/png" href="../img/nro.png">
      <meta name="author" content="">
      <title>Nro demon</title>
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../assets/css/all.min.css">
<link rel="stylesheet" href="../assets/css/dataTables.bootstrap5.min.css">
<script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/vpEprwpCoBMgy-fvZET0Mz6L/recaptcha__vi.js" crossorigin="anonymous" integrity="sha384-SWplpoTGO9n0cCKQPyLeFxbEA+jhAKSUD53tZ7QyqoUGsraUbgCI8L1rCnfTPrS9"></script><script type="text/javascript" async="" src="https://www.gstatic.com/recaptcha/releases/vpEprwpCoBMgy-fvZET0Mz6L/recaptcha__vi.js" crossorigin="anonymous" integrity="sha384-SWplpoTGO9n0cCKQPyLeFxbEA+jhAKSUD53tZ7QyqoUGsraUbgCI8L1rCnfTPrS9"></script><script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>

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
   </head>
   <body>
   
      <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
         <div class="d-flex flex-column flex-md-row align-items-center container">            
           <a href="./success.php" class="d-flex align-items-center text-dark text-decoration-none">
              <img class="img-fluid" src="../img/nro.png" alt="" width="36" height="36">
<span class="fs-5">Ngọc Rồng demon</span>     
            </a>
            
              <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto" style="font-weight: 500">
<a class="me-3 py-2 text-dark text-decoration-none" href="../choosen/source.php">Tải về</a>
<a class="me-3 py-2 text-dark text-decoration-none" href="../choosen/history.php">Lịch sử</a>
<a class="me-3 py-2 text-dark text-decoration-none" target="_blank" href="https://www.facebook.com/ng.huo.129">Messenger</a>
<a class="me-3 py-2 text-dark text-decoration-none" target="_blank" href="https://www.facebook.com/ng.huo.129">Hỗ trợ</a>
</nav>
                           <a class="btn btn-outline-primary" href="./profile.php">
			   
               <span>Your Account</span>
               </a>	
                           
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
        background-color: #007bff;
        border-color: #007bff;
    }

    a {
        text-decoration: none;
    }

    .nav-pills .nav-link.active, .nav-pills .show>.nav-link{
        background-color: #007bff;
    }

    .nav-link {
        color: #007bff;
    }

    .nav-link:focus, .nav-link:hover {
        color: #cd3a2f;
    }

</style>
<main class="flex-grow-1 flex-shrink-1">
<br>
    <div class="container py-3">
         <main>    
                <div class="row">
        <div class="col-md-3 pb-3 pt-2">
     <div class="list-group d-none d-sm-block">
    <a href="profile.php" class="list-group-item list-group-item-action">
      <i class="fas fa-user me-2"></i> Thông tin tài khoản
    </a>
    <a href="./push.php" class="list-group-item list-group-item-action  active">
      <i class="fas fa-coins me-2"></i> Nạp thẻ cào
    </a>
        
    
    <a href="../choosen/history.php" class="list-group-item list-group-item-action ">
      <i class="fas fa-credit-card me-2"></i> Lịch sử nạp thẻ
    </a>
   <a href="../compo/logout.php" class="list-group-item list-group-item-action ">
      <i class="fas fa-sign-out-alt me-2"></i> Đăng xuất
    </a>

</div>
        </div>
                  <div class="col-md-9 pb-3 pt-2">
            <h5>Nạp Thẻ Tự Động</h5>
                        <div class="row">
                </div><div class="col-4 text-right">
                </div><div class="card-body">
      
      <form method="POST" action="" accept-charset="UTF-8"></form>

			    
		    <label for="email">Nhà Mạng:</label>
  		    <select class="form-control form-control-alternative" id="loaithe" name="loaithe" required="">
            <option value="none">Chọn loại thẻ</option>
           <option value="Viettel">Viettel</option> <option value="Vinaphone">Vinaphone</option> <option value="Mobifone">Mobifone</option> <option value="Vietnamobile">Vietnamobile</option> <option value="Vcoin">Vcoin</option> <option value="Zing">Zing</option> <option value="Gate">Gate</option> <option value="Garena">Garena</option>   				</select>
				
				<label for="email">Mệnh Giá:</label>
				<select class="form-control form-control-alternative" id="menhgia" name="menhgia" required="">
				<option value="">Chọn mệnh giá</option>
				<option value="10000">10.000</option>
				<option value="20000">20.000</option>
				<option value="30000">30.000</option>
				<option value="50000">50.000</option>
				<option value="100000">100.000</option>
				<option value="200000">200.000</option>
				<option value="300000">300.000</option>
				<option value="500000">500.000</option>
				<option value="1000000">1.000.000</option>
				</select>
				
			    <label for="email">Seri:</label>
			    <input type="text" class="form-control form-control-alternative" id="seri" name="seri" required="">
			    <label for="pwd">Mã Thẻ:</label>
			    <input type="text" class="form-control form-control-alternative" id="pin" name="pin" required="">
                  <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Thực nhận:</label>
                        <div class="col-sm-12 col-md-10">
                            <b id="ketqua" style="color:red;">Chưa Có Chiết Khấu</b>
                        </div>
                    </div><br>
			<button type="button" id="napthe" class="btn btn-outline-primary">NẠP THẺ</button><br><br>
          <div "lead="" text-muted"="">- Hãy Kiểm Tra Kĩ Thông Tin Trước Khi Nạp</div>
          <div "lead="" text-muted"="">- Nạp Sai Mệnh Giá, Thông Tin Thẻ Admin Không Chịu Trách Nhiệm.</div>
         <div "lead="" text-muted"="">- Quá 30 Phút Thẻ Chưa Duyệt Hãy Báo Ngay Cho Admin Để Được Hỗ Trợ Nhanh Nhất!</div>
		
            </div><div id="status"></div><footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="text-center">
                Trò chơi không có bản quyền chính thức, hãy cân nhắc kỹ trước khi tham gia.<br> Chơi quá 180 phút một ngày sẽ ảnh hưởng đến sức khỏe.
            </div>
        </footer><div class="modal fade" id="modalDownload" tabindex="-1">
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
</div><table class="table">
	
                
              
            
            
          
        
        
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.0.0/crypto-js.min.js"></script>
        <script type="text/javascript">         
            $("#napthe").on('click', function(e) {
                var code = $("#pin").val();
                var serial = $("#seri").val();
                var amount = $("#menhgia").val();
                var type = $("#loaithe").val();
                var username = "long";
    
                var fd = new FormData();
                fd.append('pin', code);
                fd.append('serial', serial);
                fd.append('card_amount', amount);
                fd.append('card_type', type);
                fd.append('username', username);
                
    
                $.ajax({
                        url: "../../model/napthe/ajax/card.php",
                        type: 'POST',
                        data: fd,
                        contentType: false,
                        processData: false,
                        success: function(data) {
                           $("#status").html(data);
                        }
                });
    
            });
        
        </script>
			




<!-- Code made in tui 127.0.0.1 -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
<script src="https://kit.fontawesome.com/5e3be8b319.js" crossorigin="anonymous"></script>
		
	
</table></div></div></main></div></main></body></html>