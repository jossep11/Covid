

</select>

<?php
check_admin();

$ID=clear($ID);
$q=$mysqli->query("SELECT * from contacto where ID='$ID'");
$rq=mysqli_fetch_array($q);

if(isset($enviar)){
    
    $idpro= clear($idpro);
    $nombre= clear ($nombre);
    $email=clear($email);
    $mensaje =clear($mensaje);
    $apellido= clear ($apellido);
  
    $mysqli->query("UPDATE contacto SET Nombre ='$nombre', Apellido='$apellido', Email='$email', Mensaje='$mensaje' where ID='$idpro'");
    redir("?p=contenido");


}

?>
<form method="POST" action="" enctype="multipart/form-data">
<div class="form-group">
    <input type="text" class="form-control" name="nombre" value="<?=$rq['Nombre']?>" >
</div>

<div class="form-group">
    <input type="text" class="form-control" name="apellido" value="<?=$rq['Apellido']?>" >
</div>

<div class="form-group">
    <input type="text" class="form-control" name="email" value="<?=$rq['Email']?>" >
</div>

<div class="form-group">
    <input type="text" class="form-control" name="mensaje" value="<?=$rq['Mensaje']?>">
</div>

<div class="form-group">
    <button type="submit" class="btn btn-success" name="enviar"><i class="fa fa-check"></i> Modificar producto</button>
</div>

<input type="hidden" name="idpro" value="<?=$ID?>">

</form>
