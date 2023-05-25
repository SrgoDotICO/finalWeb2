<?php
session_start();
include "./logica/conexion.php";
include "header.php";
$no_cuenta= $_SESSION['usermane'];//413112576
$consulta = "SELECT * FROM persona WHERE no_cuenta =".$no_cuenta;
$resultado = $conexion -> query($consulta);
$row = mysqli_fetch_assoc($resultado);


if(!isset($no_cuenta)){

        header("location: index.php");
}else{
?>
      <ul class="right hide-on-med-and-down">
        <li><a href="actualizar.php">Actualizar</a></li>
        <li><a href="logica/salir.php">Salir</a></li>
      </ul>
      <a href="#" data-target="responsive-menu" class="sidenav-trigger right" >
        <i class="material-icons">menu</i>
      </a>
    </div>
  </nav>
  </div>
  <ul id="responsive-menu" class="sidenav right">
        <li><a href="actualizar.php">Actualizar</a></li>
        <li><a href="logica/salir.php">Salir</a></li>
  </ul>

    <div class="container">
    <h3>Hola <?php echo $row['nombre_usuario']; ?> cuenta <?php echo $no_cuenta; ?></h3>
    <h5>Usuarios</h5>
    <?php include "logicaListado.php"; ?>
    
    <section>
   <h4>Descripcion</h4>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt accusamus, eligendi recusandae accusantium suscipit exercitationem. Temporibus quidem cumque est eius dolorum, accusantium adipisci ab fuga, fugit ipsam, veniam doloremque expedita?</p>
   <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis reprehenderit dolores obcaecati! Eligendi, natus? Laborum, suscipit aliquam sed ipsum magni magnam velit accusamus perferendis soluta asperiores odit praesentium maxime ut.</p>
   </section>
   </div>

<?php
  include "footer.php";
}
?>
