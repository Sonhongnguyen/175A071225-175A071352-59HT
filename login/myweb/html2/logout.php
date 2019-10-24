<?php 
    function Location($url)
                        { ?>
                            <script type ="text/javascript">
                            window.location = "<?=$url?>";
                            </script>
<?php }?>

<?php
	$conn=mysqli_connect('localhost','root','','db') or die(mysqli_connect_error());
	session_start();
	session_destroy();

	Location("../loginv1.php");

  ?>
