<?php
    include "./logica/conexion.php";
    $pkeyU = $_POST['idUser'];
    $nombre = $_POST['txtNb'];
    $carrera = $_POST['txtCr'];
    $telefono = $_POST['txtTl'];
    $mail = $_POST['txtEml'];
    $passw = $_POST['txtPswd'];
    if($pkeyU!=null ||$nombre!=null ||$carrera!=null ||$telefono!=null ||$mail!=null ||$passw!=null){
        $editar = "UPDATE persona  SET nombre_usuario='".$nombre."', carrera='".$carrera."',telefono='".$telefono."',email='".$mail."',password='".$passw."' WHERE no_cuenta='".$pkeyU."'";
        $conexion -> query($editar);
        if($pkeyU=1){
            header("location: actualizar.php");
        }
    }
?>
