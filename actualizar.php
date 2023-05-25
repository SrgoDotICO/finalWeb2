<?php
    session_start();
    include "./logica/conexion.php";
    include "header.php";
    $control= $_SESSION['usermane'];//413112576

    if(!isset($control)){

        header("location: index.php");
    }else{
       
    $consulta_sql="SELECT * FROM persona";

        $resultado=$conexion->query($consulta_sql);
        
        $count=mysqli_num_rows($resultado);
 ?>
        <ul class="right hide-on-med-and-down">
        <li><a href="Principal.php">Volver</a></li>
        <li><a href="logica/salir.php">Salir</a></li>
      </ul>
      <a href="#" data-target="responsive-menu" class="sidenav-trigger right" >
        <i class="material-icons">menu</i>
      </a>
    </div>
  </nav>
  </div>
  <ul id="responsive-menu" class="sidenav right">
        <li><a href="Principal.php">Volver</a></li>
        <li><a href="logica/salir.php">Salir</a></li>
  </ul>

        <div class="container">
        <h3>Lista Usuarios</h3>
        <table border="2px" class="responsive-table highlight"> 
            <tr>

                <th>Nombre Usuario</th>
                <th>Carrera</th>
                <th>Numero de cuenta</th>
                <th>Telefono</th>
                <th>Email</th>
            </tr>
     <?php   
            if ($count>0){
                while($row = $resultado->fetch_assoc()){
                     echo "<tr>";
                     echo "<td>".$row["nombre_usuario"]."</td>";
                     echo "<td>".$row["carrera"]."</td>";
                     echo "<td>".$row["no_cuenta"]."</td>";
                     echo "<td>".$row["telefono"]."</td>";
                     echo "<td>".$row["email"]."</td>";
                     
                     echo '<td>
                               <form method="POST" action="logicaActualizar.php">
                                  <input type="hiden" name="nc" value='.$row["no_cuenta"].' readonly style="display:none">
                                  <button class="btn waves-effect waves-light" type="submit" name="action">Editar</button>
                               </form>
                           </td>
                          ';
                     
                     echo '<td>
                               <form method="POST" action="eliminarRegistro.php">
                                  <input type="hiden" name="ncDel" value='.$row["no_cuenta"].' readonly style="display:none">
                                  <button class="btn waves-effect waves-light" type="submit" name="action">Eliminar</button>
                               </form>
                           </td>
                          ';
                     echo "</tr>";
                }
            
            }else{
        
                echo "<h1>Sin registro</h1>";
            }
        
        ?>
        </table>
        </div>
<?php
 include "footer.php";
}
?>
