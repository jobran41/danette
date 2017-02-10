
<?php 
if($_GET['programmer']=="ghaoui" && $_GET['task']=="getlist"){

	require_once 'database.php';

	if(isset($_GET['action'])){
		$sql = "delete from images where id_user = ".$_GET['id'];
		$pdo->query($sql);
	}
	if(isset($_GET['rejouer'])){
		$sql = "delete from images where id_user = ".$_GET['id'];
		$pdo->query($sql);
		$sql = "delete from users where id = ".$_GET['id'];
		$pdo->query($sql);
	}
	$sql = "select u.*, i.id as image_id from users u, images i where u.id = i.id_user";
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
			<th>CIN</th>
			<th>TEL</th>
			<th>Ville</th>
			<th>Date Inscription</th>
			<th>Image Id</th>
			<th>Nombre de vote</th>
			<th>Voir votes</th>
			<th>Bloquer</th>
			<th>Rejouer</th>
		</tr>
	</thead>
	<tbody>
	<?php while($post = $query->fetch()){?>
		<tr>
			<td><?php echo $post['id']; ?></td>
			<td><?php echo $post['nom']; ?></td>
			<td><?php echo $post['cin']; ?></td>
			<td><?php echo $post['tel']; ?></td>
			<td><?php echo $post['ville']; ?></td>
			<td><?php echo $post['date_inscrit']; ?></td>
			<td><?php echo $post['image_id']; ?></td>

			<td>
				<?php
					$req = "select count(*) as num from image_vote where id_image = ".$post['image_id'];
					$res = $pdo->query($req);
					$f = $res->fetch();
					$nb = $f['num'];
					echo $nb;
				?>				
			</td>
			<td><a href="votes.php?programmer=ghaoui&task=getlist&id=<?php echo $post['image_id'];?>" target="_blank">Voir vote</a></td>
			<td><a href="liste.php?programmer=ghaoui&task=getlist&action=do&id=<?php echo $post['id'];?>">Bloquer</a></td>
			<td><a href="liste.php?programmer=ghaoui&task=getlist&rejouer=do&id=<?php echo $post['id'];?>">Rejouer</a></td>
		</tr>
	<?php } ?>
	</tbody>
</table>
</body>
</html>

<?php
}

