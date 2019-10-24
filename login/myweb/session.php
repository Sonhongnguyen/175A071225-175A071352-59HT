<?php
    session_start();
?>
<?php
if(!isset($_SESSION["user"])){
    header("location: loginv1.php");
    exit();
}
?>