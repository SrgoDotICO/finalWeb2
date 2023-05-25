<?php
session_start();
include "./logica/conexion.php";
$no_cuenta= $_SESSION['usermane'];//413112576
$consulta = "SELECT * FROM persona WHERE no_cuenta =".$no_cuenta;
$resultado = $conexion -> query($consulta);
$row = mysqli_fetch_assoc($resultado);


if(!isset($no_cuenta)){

        header("location: index.php");
}else{
    echo "<h1> Hola " .$row['nombre_usuario']. " tu numero de cuenta es $no_cuenta </h1>";
//listar registros            
    include "logicaListado.php";
    echo "<a href='logica/salir.php'><h2> SALIR</h2></a>";
    
    echo "<body>
    
    <section>
   <h1>titulo 1</h1>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt accusamus, eligendi recusandae accusantium suscipit exercitationem. Temporibus quidem cumque est eius dolorum, accusantium adipisci ab fuga, fugit ipsam, veniam doloremque expedita?</p>
   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis reprehenderit dolores obcaecati! Eligendi, natus? Laborum, suscipit aliquam sed ipsum magni magnam velit accusamus perferendis soluta asperiores odit praesentium maxime ut.</p>
   </section> 
   </body>
   ";
}


?>
