<div class="container-fluid">
    <div class="row">
        <div class="col-xl-7"><img class="bg-img-cover bg-center" src="public/assets/images/login/itilogo.svg" alt="looginpage"></div>
        <div class="col-xl-5 p-0">
            <div class="login-card">
                <div>
                    <div><a class="logo text-start" href=""></a></div>

                    <div class="login-main" id="formAlumnos"> 
                        <form class="theme-form" method="post">
                            <h4>Bienvenido</h4>
                            <p>Ingrese su usuario y contraseña para iniciar sesión</p>
                            <div class="form-group">
                                <label class="col-form-label">Usuario</label>
                                <input class="form-control" type="text" name="ingresoUsuario" placeholder="Usuario" autofocus autocomplete="off" required>
                            </div>
                            <div class="form-group">
                                <label class="col-form-label">Contraseña</label>
                                <div class="form-input position-relative">
                                    <input class="form-control" type="password" name="ingresoPassword" required placeholder="contraseña">
                                </div>
                            </div>
                            <div class="form-group mb-0">
                                <button class="btn bg-orange-iti btn-block w-100" type="submit">Entrar</button>
                            </div>

                            <p class="mt-4 mb-0 text-center ">¿Olvidó su contraseña?<a class="ms-2 text-recuperar" data-bs-toggle="modal" data-bs-target="#recuperarPassword" data-whatever="@getbootstrap">Recuperela aquí.</a></p>

                            <?php
                              $ingreso = new ControladorAdministradores();
                              $ingreso -> ctrIngresoAdministradores(); 
					                  ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>

<!-- MODAL RECUPERAR CONTRASEÑA -->
<div class="modal fade" id="recuperarPassword" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header color-blue">
        <h5 class="modal-title">RECUPERAR CONTRASEÑA</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formRecuperarPassword">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Perfil</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="user-check"></i> </span>
                        <input type="text" class="form-control" name="perfil" value="Docente" readonly autocomplete="off" required>   
                      </div>
                  </div>
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Correo Electrónico</label>
                      <div class="input-group"><span class="input-group-text"> <i data-feather="mail"></i> </span>
                        <input type="email" class="form-control" name="emailRecuperarPassword" placeholder="Email" autocomplete="off" required>   
                      </div>
                  </div>
              </div>
            </div>
          </div>               
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn color-blue" type="submit">RECUPERAR CONTRASEÑA</button>
        </div>

        <?php

          $recuperarPassword = new ControladorAdministradores();
          $recuperarPassword -> ctrRecuperarPassword();

		    ?>

      </form>
    </div>
  </div>
</div>