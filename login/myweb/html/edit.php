<html>
<head>
<title>Sửa Thành Viên</title>
<style type="text/css">
form {
    border:  black solid 1px;
    width: 80%;
    height: 600px;
    background-image: url('images/brg.jpg');
    border-radius: 10px;
    margin: auto;
    padding-left: 300px ;
    color:black;
    background-size: cover;
    background-position: center center;

    
    
}

input,#a {
    margin: 10px;
    border-radius: 10px;
    border: none;
    padding: 5px;
    background-color:rgb(179, 149, 51);
    color:black;
}
input[name="update"]{
   width:150px; 
}

</style>
</head>
<body>
<?php 

$conn=  mysqli_connect('localhost','root','','db');
    //buoc2: kiem tra va xu ly loi neu co
    if(!$conn)//hieu: conn khac TRUE
    {
       die('Error...'.mysql_connect_error());
    }else{
        if (!isset($_GET['id'])) {
            die("Thông số bị thiếu!");  
          }
          
          $id = intval($_GET['id']);
       //buoc 3: Thuc hien truy van du lieu
        $sql="SELECT * from users where id = '$id'" or die("Lỗi truy vấn.");
        $result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
        $rs = mysqli_fetch_array($result);
    
    }
?>

<form action="xl_edit.php" method="post" >
<h1>Cập nhập người dùng</h1>
<input type="hidden" name="id" value="<?php echo $rs['id'];?>"><br> 
    
    Email:<input style="margin-left:39px;" type="text" name="email" value="<?php echo $rs['email'];?>" required><br>
    Password: <input type="password" name="password" value="<?php echo $rs['password'];?>" required><br>
    
    <input type="submit" name="update" value="Cập nhật"> <a id="a" href='javascript: history.go(-1)'>Trở lại</a>
</form>
</body>
</html>