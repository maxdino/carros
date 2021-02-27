<div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?php echo base_url(); ?>/index.php/Login/validar" method="post">
              <h1>Login</h1>
              <div>
                <input type="text" class="form-control" name="usuario" autocomplete="off" placeholder="usuario" required="" />
              </div>
              <div>
                <input type="password" class="form-control" name="clave" autocomplete="off" placeholder="Contraseña" required="" />
              </div>
              <div>
                <button type="submit" class="btn btn-default submit" >Ingresar</button>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><img src="<?php echo base_url(); ?>/public/logo/logo0.png" width="50"> JOMHIA CAR</h1>
                  <p> ©<?php echo date('Y') ?> Todos los derechos Reservados. </p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>