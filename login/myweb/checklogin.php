<?php
$conn = mysqli_connect('localhost','root','','db');
if(!$conn){
	die('Khong the ket noi DB');
	};
    $email=isset($_POST["txtEmail"]) ? $_POST["txtEmail"] :0;
    $pass =isset($_POST["txtPass"]) ? $_POST["txtPass"] :0;
if(isset($_POST['login'])){
	$sql="SELECT * from users where email='$email'";
	
		$result=mysqli_query($conn,$sql);
		$row = mysqli_fetch_assoc($result);
		if(password_verify($pass, $row['password'])){
			$_SESSION['user']=$email;
			header('location:html/Quantrihethong.php');// kiem tra dung thi cho vao trnag admin
		}
		else{
			
			echo "<script type='text/javascript'>alert('Sai mật khẩu.');</script>";
						 
		}



}
?>

