<?php   
       
    $consulta_sql="SELECT * FROM persona";

        $resultado=$conexion->query($consulta_sql);
        
        $count=mysqli_num_rows($resultado);
 ?>       
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
                     echo "</tr>";
                }
            
            }else{
        
                echo "<h1>Sin registro</h1>";
            }
        
        ?>
        <a href="actualizar.php"><h2>Actualizar Informacion Usuario</h2></a>
        
        </table>  
