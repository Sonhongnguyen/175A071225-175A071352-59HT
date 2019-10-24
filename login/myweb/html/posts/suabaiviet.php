<html>
<head>
<title>Sửa Bài Viết</title>
<style type="text/css">
form {
    border:  black solid 1px;
    width: 80%;
    height: 600px;
    background-image: url('images/brg.jpg');
    border-radius: 10px;
    margin: auto;
    padding-left: 300px ;
    color:#000;
    background-size: cover;
    background-position: center center;

    
    
}
h1{
    color:#000;
}
input,#a {
    margin: 10px;
    border-radius: 10px;
    border: none;
    padding: 5px;
    background-color:black;
    color:#fff;
}
input[name="update"]{
   width:150px; 
}

</style>
</head>
<body>
<?php 

    $conn = mysqli_connect('localhost','root','','db');
    mysqli_set_charset($conn, 'UTF8');
    //buoc2: kiem tra va xu ly loi neu co
    if(!$conn)//hieu: conn khac TRUE
    {
       die('Error...'.mysql_connect_error());
    }else{
        if (!isset($_GET['idtin'])) {
            die("Thông số bị thiếu!");  
          }
          
          $idtin = intval($_GET['idtin']);
       //buoc 3: Thuc hien truy van du lieu
        $sql="SELECT * from posts where idtin = '$idtin'" or die("Lỗi truy vấn.");
        $result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
        $rs = mysqli_fetch_array($result);
    
    }
?>

<form action="../posts/xl_baiviet.php" method="post" enctype="multipart/form-data">
<h1>Cập nhập người dùng</h1>
    <input type="hidden" name="idtin" value="<?php echo $rs['idtin'];?>"><br> 
    <textarea rows="8" cols="60"  placeholder="Title" name ="title"><?php echo $rs['title'];?></textarea><br/>
    <input type="file" name="image"><?php echo $rs['image'];?><br/>
    <textarea rows="8" cols="60"  placeholder="Content" name ="content"><?php echo $rs['content'];?></textarea><br/>
    <input type="submit" name="update" value="Cập nhật bài viết"> <a id="a" href='javascript: history.go(-1)'>Trở lại</a>";
</form>
</body>
</html>