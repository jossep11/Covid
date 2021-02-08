<?php
check_admin();




if(isset($eliminar)){
	$mysqli->query("DELETE FROM contacto WHERE ID = '$eliminar'");
	redir("?p=contenido");
}




?>


<h1>Informacion</h1><br><br>


<table class="table table-striped">


    <tr>
		<th>ID</th>
		<th>Nombre</th>
		<th>Mensaje</th>
		<th>Email</th>
	</tr>
    
    
	<?php
		$prod = $mysqli->query("SELECT * FROM contacto ORDER BY ID ASC");
		while($rp=mysqli_fetch_array($prod)){

		?>


<tr>
			
					<td><?=$rp['ID']?></td>
					<td><?=$rp['Nombre']?></td>
					<td><?=$rp['Mensaje']?></td>
					<td><?=$rp['Email']?></td>
					<td>
					<a style="color:#08f" href="?p=modificar_producto&ID=<?=$rp['ID']?>"><i class="fa fa-edit"></i></a>
						&nbsp;
						<a style="color:#08f" href="?p=contenido&eliminar=<?=$rp['ID']?>"><i class="fa fa-times"></i></a>

					</td>
				</tr>


				<?php
		}
	?>

</table>