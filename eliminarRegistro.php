<?php
    session_start();
    include "./logica/conexion.php";
    $control= $_SESSION['usermane'];//413112576

    if(!isset($control)){

        header("location: index.php");
    }else{
    include "header.php";
    $numCuenta = $_POST['ncDel'];
    $consulta = "SELECT * FROM persona WHERE no_cuenta=".$numCuenta;
    $resultado = $conexion -> query($consulta);
    $row = mysqli_fetch_assoc($resultado);
?>
      <ul class="right hide-on-med-and-down">
        <li><a href="actualizar.php">Volver</a></li>
        <li><a href="logica/salir.php">Salir</a></li>
      </ul>
      <a href="#" data-target="responsive-menu" class="sidenav-trigger right" >
        <i class="material-icons">menu</i>
      </a>
    </div>
  </nav>
  </div>
  <ul id="responsive-menu" class="sidenav right">
        <li><a href="actualizar.php">Volver</a></li>
        <li><a href="logica/salir.php">Salir</a></li>
  </ul>

                 <div class="container">
                 <h3>Eliminar Registro</h3>
                 <form method="POST" action="logicaEliminar.php">
                     <div class="input-field col s12">
                       <input id="cuenta" type="text" name="idUser" value="<?php echo $row["no_cuenta"] ?>" readonly>
                       <label for="cuenta">Numero de Cuenta</label>
                     </div>

                     <div class="input-field col s12">
                       <input id="cuenta" type="text" name="txtNb" value="<?php echo $row["nombre_usuario"] ?>" readonly> 
                       <label for="cuenta">Nombre</label>
                     </div>

                     <div class="input-field col s12">
                       <input id="cuenta" type="text" name="txtCr" value="<?php echo $row["carrera"] ?>" readonly> 
                       <label for="cuenta">Carrera</label>
                     </div>

                     <div class="input-field col s12">
                       <input id="cuenta" type="text" name="txtTl" value="<?php echo $row["telefono"] ?>" readonly> 
                       <label for="cuenta">Telefono</label>
                     </div>

                     <div class="input-field col s12">
                       <input id="cuenta" type="text" name="txtEml" value="<?php echo $row["email"] ?>" readonly> 
                       <label for="cuenta">Correo</label>
                     </div>

                     <div class="input-field col s12">
                       <input id="cuenta" type="text" name="txtPswd" value="<?php echo $row["password"] ?>" readonly> 
                       <label for="cuenta">Clave</label>
                     </div>

                     <button class="btn waves-effect waves-light" type="submit" name="action">Eliminar</button>
                 </form>
                 </div>
<?php
   include "footer.php";
}
?>
