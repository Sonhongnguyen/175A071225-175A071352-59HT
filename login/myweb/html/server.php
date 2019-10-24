<?php 
session_start();
 ?>
<?php 
	ob_start();
	
	$db = mysqli_connect('localhost', 'root', '', 'db');
	if(!$db){
	die('Khong the ket noi DB');
	};

	// initialize variables
	$username = "";
	$name = "";
	$id = "";
	$update = false;
	

	if (isset($_POST['save'])) {
		$username = $_POST['username'];
		$name = $_POST['name'];

		mysqli_query($db, "INSERT INTO Name (Username, Name) VALUES ('$username', '$name')"); 
		$_SESSION['message'] = "ADDED"; 
		header('location: user.php');
	}

	if(isset($_POST['update'])){
		$username =mysqli_real_escape_string($db,$_POST['Username']);
		$name =mysqli_real_escape_string($db,$_POST['Name']);
		$id =mysqli_real_escape_string($db,$_POST['id']);

		mysqli_query($db,"UPDATE Name SET Username='$username', Name='$name' WHERE id=$id" or die('Sai'));
		$_SESSION['message'] = "UPDATED";
		header('location:user.php');

	}

	if(isset($_GET['del'])){
		$id=$_GET['del'];
		mysqli_query($db,"DELETE FROM Name WHERE id=$id");
		$_SESSION['message'] = "DELETED";
		header('location:user.php');

	}

	$results=mysqli_query($db,"Select * from Name")
 ?>