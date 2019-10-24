<?php  include('server.php'); 

	if(isset ($_GET['edit'])){
		$id = $_GET['edit'];
		$update=true;

		$rec = mysqli_query($db,"Select * from Name where id=$id");
		$record = mysqli_fetch_array($rec);
		$username= $record['Username'];
		$name= $record['Name'];
		$id= $record['id'];

	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User</title>
	<link rel="stylesheet" type="text/css" href="css/user.css">
</head>
<body>
	<?php 
		if(isset($_SESSION['msg'])):
	 ?>
	 <div class="msg">
	 	<?php 
	 	echo $_SESSION['msg'];
	 	unset($_SESSION['msg']);
	 	 ?>
	 </div>
	 <?php endif ?>
	<table>
		<thead>
			<tr>
				<th>User name</th>
				<th>Name</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>
			<?php while ($row =mysqli_fetch_array($results)){ ?>
			<tr>
				<td><?php echo $row['Username']; ?></td>
				<td><?php echo $row['Name']; ?></td>
				<td>
					<a href="user.php?edit=<?php echo $row['id']?>" class="edit_btn">Edit</a>
				</td>
				<td>
					<a href="server.php?del=<?php echo $row['id']; ?>" class="del_btn">Delete</a>
				</td>
			</tr>
			<?php } ?>


		</tbody>
	</table>
	<form method="post" action="server.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<div class="input-group">
			<label>User name</label>
			<input type="text" name="username" value="<?php echo $username ?>">
		</div>
		<div class="input-group">
			<label>Name</label>
			<input type="text" name="name" value="<?php echo $name ?>">
		</div>
		<div class="input-group">
			<?php if ($update == false): ?>
				<button class="btn" type="submit" name="save" >Save</button>
			<?php else: ?>
				<button class="btn" type="submit" name="update" >Update</button>
			<?php endif ?>
			
		</div>
	</form>
</body>
</html>