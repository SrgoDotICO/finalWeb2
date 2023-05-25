<?php include "header.php"; ?>
     </div>
   </nav>
   </div>
  <div class="container">
  
        <div   class="col s12 m5">
            <div>
                <h1>Iniciar Sesion</h1>
                <form   method="POST"  action="logica/loguear.php">
                   <div class="row">
                     <div class="input-field col s6">
                       <input id="cuenta" type="text" class="validate" name="no_cuenta">
                       <label for="cuenta">Numero de Cuenta</label>
                     </div>
                   </div>

                    <div class="row">
                      <div class="input-field col s6">
                        <input id="password" type="password" class="validate" name="clave">
                        <label for="password">Contraseña</label>
                      </div>
                    </div>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Iniciar</button>
                </form>
            </div>
        </div>

   
   </div>
<?php include "footer.php"; ?>
