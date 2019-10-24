<html>
<head>
<title>Quản Lý</title>
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
  //Buoc 1
  $conn=  mysqli_connect('localhost','root','','db');

if(!$conn)
{
   die('Error...'.mysql_connect_error());
}
else {
   //Thuc hien truy van du lieu
$sql="SELECT id,email,password from users";
$result =mysqli_query($conn,$sql);
//Xu ly ket qua
if(mysqli_num_rows($result)>0){
    echo 'Tổng số thành viên:' .mysqli_num_rows($result);
    echo'<table ';
    echo'<table border >';
    echo'<tr>';
    echo'<th>ID</th><th>Users</th><th>Password</th><th>Delete</th><th>Edit</th>';
    echo'<tr>';

    while ($row= mysqli_fetch_assoc($result))
    {
    echo'<tr>';
    echo'<td>'.$row['id'].'</td>';
    echo'<td>'.$row['email'].'</td>';
    echo'<td>'.$row['password'].'</td>';
    echo '<td><a href="../html/delete.php?id='.$row['id'].'">Delete</a></td>';
    echo'<td> <a href="../html/edit.php?id='.$row['id'].'">Edit</a></td>';
    echo'</tr>';
        }
            echo'</table>';
        }
    }
?>
 
</body>
</html>
