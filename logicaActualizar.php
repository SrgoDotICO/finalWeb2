<?php
    session_start();
    include "./logica/conexion.php";
    $control= $_SESSION['usermane'];//413112576

    if(!isset($control)){

        header("location: index.php");
    }else{
    $numCuenta = $_POST['nc'];
    $consulta = "SELECT * FROM persona WHERE no_cuenta=".$numCuenta;
    $resultado = $conexion -> query($consulta);
    $row = mysqli_fetch_assoc($resultado); 
?>
<a href="actualizar.php"><h2 >volvER</h2></a>
                 <form method="POST" action="editar.php">
                     <label>Num. Cuenta</label><br>
                     <input type="hiden" name="idUser" value="<?php echo $row["no_cuenta"]?>" readonly>
                     <br><label>Nombre</label><br>
                     <input type="hiden"name="txtNb" value="<?php echo $row["nombre_usuario"]?>">
                     <br><label>Carrera</label><br>
                     <input type="hiden"name="txtCr" value="<?php echo $row["carrera"]?>">
                     <br><label>Telefono</label><br>
                     <input type="hiden"name="txtTl" value="<?php echo $row["telefono"]?>">
                     <br><label>Email</label><br>
                     <input type="hiden"name="txtEml" value="<?php echo $row["email"]?>">
                     <br><label>Clave</label><br>
                     <input type="hiden"name="txtPswd" value="<?php echo $row["password"]?>">
                    <br> <input type="submit" value="Actualizar">
                 </form>
<?php
}
?>
