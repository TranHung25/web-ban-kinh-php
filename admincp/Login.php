<?php
	session_start();
 include('../admincp/connect/connect.php'); 
?>
<?php
	// session_destroy();
	// unset('dangnhap');
	if(isset($_POST['dangnhap'])) {
		$taikhoan = $_POST['taikhoan'];
		$matkhau = $_POST['matkhau'];
		if($taikhoan=='' || $matkhau ==''){
			echo '<p>Xin nhập đủ</p>';
		}else{
			$sql = mysqli_query($mysqli,"SELECT * FROM tbl_admin WHERE username='$taikhoan' AND password='$matkhau'");
			$count = mysqli_num_rows($sql);
			$row_dangnhap = mysqli_fetch_array($sql);
			if($count>0){
				//$_SESSION['dangnhap'] = $row_dangnhap['admin_name'];
				$_SESSION['admin_id'] = $row_dangnhap['id_admin'];
				header('Location: index-admin.php');
			}else{
				echo '<p>Tài khoản hoặc mật khẩu sai</p>';
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Admin</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
	<h2 align="center">Đăng nhập Admin</h2>
	<div class="col-md-6">
	<div class="form-group">
		<form action="" method="POST">
		<label>Username</label>
		<input type="text" name="taikhoan" placeholder="Điền Email" class="form-control"><br>
		<label>Password</label>
		<input type="password" name="matkhau" placeholder="Điền mật khẩu" class="form-control"><br>
		<input type="submit" name="dangnhap" class="btn btn-primary" value="Đăng nhập Admin">
		</form>
	</div>
	</div>
</body>
</html>