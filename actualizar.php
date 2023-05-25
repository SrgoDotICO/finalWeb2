<?php
    session_start();
    include "./logica/conexion.php";
    $control= $_SESSION['usermane'];//413112576

    if(!isset($control)){

        header("location: index.php");
    }else{
       
    $consulta_sql="SELECT * FROM persona";

        $resultado=$conexion->query($consulta_sql);
        
        $count=mysqli_num_rows($resultado);
 ?>
<a href="Principal.php"><h2 >Regresar</h2></a>
        <table border="2px"> 
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
                                  <input type="submit" value="Editar">
                               </form>
                           </td>
                          ';
                     echo '<td>
                               <form method="POST" action="eliminarRegistro.php">
                                  <input type="hiden" name="ncDel" value='.$row["no_cuenta"].' readonly style="display:none">
                                  <input type="submit" value="Eliminar">
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
<?php
}
?>
