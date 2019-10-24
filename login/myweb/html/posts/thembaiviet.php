<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap-4.0.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="content">
    <form action="thembaiviet.php" method ="post" enctype="multipart/form-data">
        <textarea placeholder="Title" name ="title"></textarea><br/>
        <input type="file" name="image"><br/>
        <textarea placeholder="Content" name ="content"></textarea><br/>
        <!-- Confirm Password: <input type="password" name="txtConfirmPass"> -->
                    <input type="submit" name="update" value="Cập nhật bài viết">
    </form>

    </div>
    
</body>
</html>
<?php
       $conn = mysqli_connect('localhost','root','','db');
       mysqli_set_charset($conn, 'UTF8');
    if(!($conn)){
        die ('Khong the ket noi co so du lieu');
    };
    if(isset($_POST['update']))
    {   
        $target = "images/".basename($_FILES['image']['name']);
         
        $title = mysqli_real_escape_string($conn, $_POST['title']); 
        $image = $_FILES['image']['name']; 
        $content = mysqli_real_escape_string($conn, $_POST['content']); 
        //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
        if (!$title || !$content)
        {
            echo "Vui lòng nhập đầy đủ thông tin trước khi cập nhật.";
            exit;
        }
        $link_img='../posts/images/'.$target;
        $sql = "INSERT INTO posts (title, image, content) VALUES ('$title','$image','$content')";
        $result = mysqli_query($conn, $sql);    
        if(move_uploaded_file($_FILES['image']['tmp_name'],"../posts/images/". $target)){
            
            $msg = "Upload complete.";
        }else{
            $msg = "Upload fail.";
        }


        $sql = ("SELECT title, content FROM users WHERE title='$title'");
        echo'Bạn đã cập nhật thành công. <a href="javascript: history.go(-1)">Trở lại</a>';

    }

    
?>
