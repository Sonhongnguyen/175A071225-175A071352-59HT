<?php 
    function Location($url)
                        { ?>
                            <script type ="text/javascript">
                            window.location = "<?=$url?>";
                            </script>
<?php }?>
<?php
$conn=  mysqli_connect('localhost','root','','db');
if(!$conn)
    {
       die('Error...'.mysql_connect_error());
    }
    

if(isset($_POST['update'])){
    $id = mysqli_real_escape_string($conn, $_POST['id']);  
    $email = mysqli_real_escape_string($conn, $_POST['email']); 
    $password = mysqli_real_escape_string($conn, $_POST['password']);  
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    
    $sql= mysqli_query($conn,"UPDATE users 
                                set  email = '$email',password = '$hashed_password' 
                                where id ='$id' ") or die('Error!!!');
        if($sql){
            location("../html2/user_.php"); 
    }else{
        echo 'Ban phải điền đầy đủ các thông tin.';
    }
}
    
?>