<?php 
 require 'config.php';

$list = [];

$sql = $conn->query("SELECT * FROM comentarios");

if($sql->rowCount() > 0){
	$list = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<a href="add.php"> Adicionar comentario</a>
</br></br>
<table border="1" width="100%">
	<tr>
		<th>ID</th>
		<th>NOME</th>
		<th>E-MAIL</th>
		<th>COMENTARIOS</th>
	</tr>

	<?php foreach($list as $comentario): ?>
		<tr>
			<td><?= $comentario['id']; ?></td>
			<td><?= $comentario['nome']; ?></td>
			<td><?= $comentario['email']; ?></td>
			<td><?= $comentario['comentario']; ?></td>
		</tr>
	<?php endforeach; ?>
</table>
