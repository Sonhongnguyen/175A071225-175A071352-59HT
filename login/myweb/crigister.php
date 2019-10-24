<?php
    $conn = mysqli_connect('localhost','root','','db');
if(!$conn){
    die('Khong the ket noi DB');
    };

?>
<?php
    $errors = array();
    
    $email = trim($_POST['txtEmail']);
    if (empty($email)) {
        $errors[] = 'Bạn chưa nhập email';
    }
    if(isset($_POST['txtPass1'])){
        $password1 = $_POST['txtPass1'];
    }
    if(isset($password1)){ 
        echo '';
    }
    $password2 = trim($_POST['txtPass2']);
    if (!empty($password1)) {
        if ($password1 !== $password2) {
        $errors[] = 'Mật khẩu không khớp';
    } 
} else {
    $errors[] = 'Bạn chưa điền mật khẩu';
}
if (empty($errors)) {
try {
	    $hashed_passcode = password_hash($_POST['txtPass1'], PASSWORD_DEFAULT);
		require ('database.php');         
		$query = "INSERT INTO users (email,password) VALUES('$email','$hashed_passcode') ";
        if(mysqli_query($conn, $query))  
           {  
                header ("location:html2/index.php"); 
           }  
            else {
		    $errorstring = "<p style='color:red'>";
			$errorstring .= "Lỗi hệ thống<br/>";
			echo "<p class=' text-center col-sm-2' style='color:red'>$errorstring</p>";
			echo '<p>' . mysqli_error($conn) . '<br><br>Query: ' . $query . '</p>';
		    mysqli_close($conn);
		exit();
		}
    }
    catch (Exception $e)
{
  print "Đã có lỗi xảy ra. Vui lòng thử lại sau\n";
}
} 

?>