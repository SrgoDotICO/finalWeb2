<?php   
       
    $consulta_sql="SELECT * FROM persona";

        $resultado=$conexion->query($consulta_sql);
        
        $count=mysqli_num_rows($resultado);
 ?>       
        <table border="2px" class="responsive-table striped"> 
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
                     $nombre = $row["nombre_usuario"];
                     $carrera = $row["carrera"];
                     $cuenta = $row["no_cuenta"];
                     $tel = $row["telefono"];
                     $mail = $row["email"];

                     echo "<tr>";
                     echo "<td>".$nombre."</td>";
                     echo "<td>".$carrera."</td>";
                     echo "<td>".$cuenta."</td>";
                     echo "<td>".$tel."</td>";
                     echo "<td>".$mail."</td>";
                     echo "</tr>";
                }
            
            }else{
        
                echo "<h1>Sin registro</h1>";
            }
        
        ?>
        
        </table>  
