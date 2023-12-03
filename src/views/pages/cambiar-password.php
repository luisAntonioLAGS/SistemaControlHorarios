<div class="page-wrapper">
      <div class="container-fluid p-0">
        <div class="row">
          <div class="col-12">     
            <div class="login-card">
              <div>
                <div class="login-main"> 
                  <form class="theme-form" method="post">
                    <h4>Cambiar Contraseña</h4>
                    <label class="col-form-label">Para una mayor seguridad cambia tu contraseña.</label>
                    <div class="form-group">
                      <label class="col-form-label">Nueva Contraseña</label>
                      <div class="form-input position-relative">
                        <input class="form-control" type="password" name="nuevaContraseña" required="" autofocus placeholder="*********">
                        <input class="form-control" type="hidden" name="id" required="" value="<?= $admin["id"] ?>">
                      </div>
                    </div>
                    <div class="form-group mb-0">
                      <button class="btn color-blue btn-block w-100" type="submit">CAMBIAR CONTRASEÑA                          </button>
                    </div>

                    <?php
                      $cambiarPassword = new ControladorDocentes();
                      $cambiarPassword -> ctrActualizarPassword();
		                ?>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>