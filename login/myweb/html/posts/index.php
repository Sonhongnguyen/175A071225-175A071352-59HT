<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài viết</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
         $conn = mysqli_connect('localhost','root','','db');
         mysqli_set_charset($conn, 'UTF8');
         if(!($conn)){
             die ('Khong the ket noi co so du lieu');
         };
         $sql= "select * from posts order by 'istin' asc";
         $result = mysqli_query($conn, $sql) or die( mysqli_error($conn));
         
    ?>

<div class="main">
      <div class="container">
      <div class="row bt">
          <div class="col-md-9">
              <h2 class="heading-2"><a href="#/">Tin tức</a></h2>
              <div class="card-group">
                <?php 
                while($row = mysqli_fetch_array($result)) {
                    ?>
                 <div class="card card-m">
                    <a href="#" class="card-a"><img class="card-img-top" src="images/<?php echo $row['image']?>" alt="Card image cap"></a>
                    <div class="card-body">
                       <a href="" class="title"><h5 class="card-title"><?php echo $row['title']?></h5></a>
                       <div class="card-text">
                          <p><?php echo $row['content'] ?></p>
                       </div>
                    </div>
                 </div>
                <?php } ?>
          </div>
          <ul class="list-unstyled" style="float: right;font-size: 12px;">
              <li><a class="c-blue-a5 font-weight-bold" href="#"><i class="fas fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a></li>
          </ul>
        </div>
        <div class="col-md-3">
            <h2 class="heading-2"><a href="#">Media</a></h2>
            <div class="card-group">
                <div class="card card-m">
                    <iframe width="250" height="150" src="https://www.youtube.com/embed/JViDyojZzhs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                   <div class="card-body">
                      <div class="card-text">
                          <ul class="list-style-1">
                              <li><i class="fas fa-angle-right"></i><a href="https://www.youtube.com/watch?v=iZ1EUr2DAMs">ĐIỂM TIN THÁNG 8</a></li>
                              <li><i class="fas fa-angle-right"></i><a href="https://www.youtube.com/watch?v=SwWJkVE6vMg">ĐH Nguyễn Tất Thành – 20 năm dấu ấn một chặng đường</a></li>
                              <li><i class="fas fa-angle-right"></i><a href="https://www.youtube.com/watch?v=txdD9O_bGXA">NỎ THẦN - TẬP 8 | BẬT MÍ VỀ NỎ THẦN VÀ NHỮNG CÂU CHUYỆN CÓ THẬT</a></li>
                          </ul>
                      </div>
                   </div>
                </div>
                </div>
                <ul class="list-unstyled" style="float: right; font-size: 12px;">
                    <li><a class="c-blue-a5 font-weight-bold" href="#"><i class="fas fa-chevron-circle-right mr-2 c-blue-a5"></i>Xem thêm</a></li>
                </ul> 
        </div>
      </div>
        </div>
</body>

</html>