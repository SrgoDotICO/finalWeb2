<?php
    include "./logica/conexion.php";
    $pkeyDel = $_POST['idUser'];
    if($pkeyDel!=null){
        $eliminar = "DELETE FROM persona WHERE no_cuenta='".$pkeyDel."'";
        $conexion -> query($eliminar);
        if($pkeyDel=1){
            header("location: actualizar.php");
        }
    }
?>
