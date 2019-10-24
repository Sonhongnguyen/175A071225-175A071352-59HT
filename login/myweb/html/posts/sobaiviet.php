
 <html>
<head>
<title>Quản Lý Bài Viết</title>
<style type="text/css">
table {
margin: 8px;
width:800px;
height:300px;
text-align:center;
}

th {
font-family: Arial, Helvetica, sans-serif;
font-size: .7em;
background: #666;
color: #FFF;
padding: 2px 6px;
border-collapse: separate;
border: 1px solid #000;
}

td {
font-family: Arial, Helvetica, sans-serif;
font-size: .7em;
border: 1px solid #DDD;
}
</style>
</head>
<body>
<?php
    $conn = mysqli_connect('localhost','root','','db');
    mysqli_set_charset($conn, 'UTF8');
if(!$conn)
{
   die('Error...'.mysql_connect_error());
}
else {
$sql="SELECT idtin,title,image,content from posts";
  $result =mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0){
    echo 'Tổng số bài viết:' .mysqli_num_rows($result);
    echo'<table ';
    echo'<table border >';
    echo'<tr>';
    echo'<th>IDTin</th><th>Title</th><th>Images</th><th>Content</th><th>Delete</th><th>Edit</th>';
    echo'<tr>';

    while ($row= mysqli_fetch_assoc($result))
    {
    echo'<tr>';
    echo'<td>'.$row['idtin'].'</td>';
    echo'<td>'.$row['title'].'</td>';
    echo'<td>'.$row['image'].'</td>';
    echo'<td>'.$row['content'].'</td>';
    echo '<td><a href="../posts/xoabaiviet.php?idtin='.$row['idtin'].'">Delete</a></td>';
    echo'<td> <a href="../posts/suabaiviet.php?idtin='.$row['idtin'].'">Edit</a></td>';
    echo'</tr>';
        }
            echo'</table>';
        }
    }
?>
 
</body>
</html>