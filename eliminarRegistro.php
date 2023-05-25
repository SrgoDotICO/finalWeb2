<?php
    session_start();
    include "./logica/conexion.php";
    $control= $_SESSION['usermane'];//413112576

    if(!isset($control)){

        header("location: index.php");
    }else{
    $numCuenta = $_POST['ncDel'];
    $consulta = "SELECT * FROM persona WHERE no_cuenta=".$numCuenta;
    $resultado = $conexion -> query($consulta);
    $row = mysqli_fetch_assoc($resultado);
?>
<a href="actualizar.php"><h2 >volvER</h2></a>
                 <form method="POST" action="logicaEliminar.php">
                     <label>Num. Cuenta</label><br>
                     <input type="hiden" name="idUser" value="<?php echo $row["no_cuenta"]?>" readonly>
                     <br><label>Nombre</label><br>
                     <input type="hiden"name="txtNb" value="<?php echo $row["nombre_usuario"]?>" readonly>
                     <br><label>Carrera</label><br>
                     <input type="hiden"name="txtCr" value="<?php echo $row["carrera"]?>" readonly>
                     <br><label>Telefono</label><br>
                     <input type="hiden"name="txtTl" value="<?php echo $row["telefono"]?>" readonly>
                     <br><label>Email</label><br>
                     <input type="hiden"name="txtEml" value="<?php echo $row["email"]?>"readonly>
                     <br><label>Clave</label><br>
                     <input type="hiden"name="txtPswd" value="<?php echo $row["password"]?>"readonly>
                    <br> <input type="submit" value="Eliminar">
                 </form>
<?php
}
?>
