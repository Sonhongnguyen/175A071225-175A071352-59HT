<?php 
    function Location($url)
                        { ?>
                            <script type ="text/javascript">
                            window.location = "<?=$url?>";
                            </script>
<?php }?>
<?php
  //Buoc 1
  $conn=  mysqli_connect('localhost','root','','db');
//buoc2: kiem tra va xu ly loi neu co
if(!$conn)//hieu: conn khac TRUE
{
   die('Error...'.mysql_connect_error());
}
else {
    if (!isset($_GET['id'])) {
        die("Thông số bị thiếu!");  
      }
      
      $id = intval($_GET['id']);
   //buoc 3: Thuc hien truy van du lieu
    $sql="DELETE from users where id = '$id'";
    $result =mysqli_query($conn,$sql);
    
    location("../html2/user_.php"); 
}
?>