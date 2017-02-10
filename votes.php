
<?php 
if($_GET['programmer']=="ghaoui" && $_GET['task']=="getlist"){

	require_once 'database.php';

	
	$sql = "select id_user_fb, id  from image_vote  where id_image = ".$_GET['id'];
	$query = $pdo->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>List des Joueurs</title>
</head>
<body>
	<table style="width : 100%;border: 2px solid #ccc" border="2">
	<thead>
		<tr>
			<th>ID</th>
			<th>NOM</th>
		</tr>
	</thead>
	<tbody>
	<?php while($post = $query->fetch()){?>
		<tr>
			<td><?php echo $post['id']; ?></td>
			<td><a href="https://www.facebook.com/<?php echo $post['id_user_fb']; ?>" target="_blank">https://www.facebook.com/<?php echo $post['id_user_fb'];?></a></td>
			
		</tr>
	<?php } ?>
	</tbody>
</table>
</body>
</html>

<?php
}

