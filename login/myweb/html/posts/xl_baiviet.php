<?php 
    function Location($url)
                        { ?>
                            <script type ="text/javascript">
                            window.location = "<?=$url?>";
                            </script>
<?php }?>
<?php
$conn = mysqli_connect('localhost','root','','db');
mysqli_set_charset($conn, 'UTF8');
if(!$conn)
    {
       die('Error...'.mysql_connect_error());
    }
    

if(isset($_POST['update'])){
    $target = "images/".basename($_FILES['image']['name']);
    $idtin = mysqli_real_escape_string($conn, $_POST['idtin']); 
    $title = mysqli_real_escape_string($conn, $_POST['title']); 
    $image = $_FILES['image']['name']; 
    $content = mysqli_real_escape_string($conn, $_POST['content']); 

    $sql= mysqli_query($conn,"update posts 
                                set idtin = '$idtin', title = '$title', image = '$image', content = '$content'
                                where idtin ='$idtin'") or die('Error!!!');
    if(move_uploaded_file($_FILES['image']['tmp_name'], $target)){
        $msg = "Upload complete.";
    }else{
        $msg = "Upload fail.";
    }
        if($sql){
            location("../posts/so_baiviet.php"); 
    }else{
        echo 'Ban phải điền đầy đủ các thông tin.';
    }
}
    
?>