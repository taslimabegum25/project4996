
 <?php
$servername = "127.0.0.1:8080";
$username = "root";
$password = "admin2013";

$conn = mysqli_connect($servername, $username, $password);

$sql = "CREATE DATABASE myDB";
if ($conn->query($sql) === TRUE) {
    echo "Db creation is a success!";
} else {
    echo "Error: could not create the db " . $conn->error;
}

$conn->close();
?>
 
<!DOCTYPE html>
<html>
<head>
	<title>To Do List</title>
	<link href="https://fonts.googleapis.com/css?family=Courgette" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rancho&effect=shadow-multiple" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
	
</head>
<body>
	<div class="heading">
		<h2> To do list </h2>
	</div>

<form method = "POST" action = "index.php">
  <input type="text" name="task" class="insert_Task">
  <button type= "submit" class="add" name="submit"> Add task</button>
</form> 
	<table>
		<thread>
			<tr>
				<th> NUMBER </th>
				<th> TASKS </th>
                <th> DELETE </th>
				<th> STATUS </th>    
			</tr>
		</thread>
		<tbody>
		<?php while ($row = mysqli_fetch_array($tasks))
		{ ?>
			<tr>
				<td><?php echo $row['id'];?></td>
				<td class="task"><?php echo $row['task'];?></td> 
                <td>		
					<input type="radio" name="delete" value="deleted" checked> Delete <br>
				</td>
				<td class="status"> 
		}
		<input type="radio" name="status" value="started" checked> Started <br>
		<input type="radio" name="status" value="pending" checked> Pending <br>
		<input type="radio" name="status" value="completed" checked> Completed <br>
		<input type="radio" name="status" value="late" checked> Late <br>
	
				</td>
			</tr>
			<?php
		}?>
		</tbody>
	</table>

</body>
</html>