<!DOCTYPE html>
<?php
	//include('login.php'); // Memasuk-kan skrip Login 
	session_start(); // Memulai Session
	if(isset($_SESSION['login_user'])){
		header("location: beranda.php");
	}
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
	<title>On-Learning Login</title>
	
	<link href="http://fonts.googleapis.com/css?family=Lato:100italic,100,300italic,300,400italic,400,700italic,700,900italic,900" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/styles.css" />
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

	<section class="container">
			<div class="alert text-center" role="alert" id="passwordSalah">
			  
			</div>
			<section class="login-form">
				<form method="post" action="" id="form" role="login">
					<h2>Please Log in</h2>
					<p>To enter in your private dashboard</p>
					<div class="form-group">
	    				<div class="input-group">
		      				<div class="input-group-addon"><span><img src="assets/images/username.png" width="15" height="15"></img></span></div>
							<input type="username" id="username" name="username" placeholder="Username" required class="form-control" />
						</div>
					</div>
					<div class="form-group">
	    				<div class="input-group">
		      				<div class="input-group-addon"><span class="text-primary glyphicon glyphicon-lock"></span></div>
							<input type="password" id="password" name="password" placeholder="Password" required class="form-control" />
						</div>
					</div>
					<button type="submit" id="submit" name="go" class="btn btn-block btn-success">Sign in</button>
					<a href="#" class="btn btn-block btn-default">Forgot password</a>
				</form>
			</section>
	</section>
	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../jquery-1.2.6.min.js"></script>
	<script type="text/javascript">
    $(document).ready(function(){
			$("#form").submit(function(){
				var formTemp=$("#form").serialize();
				$.ajax({
					type: "POST",
					url: "login.php",
					data:  formTemp,
					success: function(msg){
						if(msg=='berhasil'){
							window.location.href = 'beranda.php';
						}
						else{
							$("#passwordSalah").addClass("alert-danger");
							$("#passwordSalah").html('<span><p>Kombinasi username dan password anda salah!</p></span>');
						}
					}
				});
				return false;
			});
		});
	</script>
	
</body>
</html>