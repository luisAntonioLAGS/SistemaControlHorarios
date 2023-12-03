<!-- LUNES -->

<!-- MODAL LUNES 17 -->
<div class="modal fade" id="S3Lunes17" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title">Agregar Horario</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formS3Lunes17">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Sala</label>
                      <div class="input-group"><span class="input-group-text"> <i style="font-size:18px" class="fas fa-laptop-house"></i> </span>
                        <input type="text" class="form-control" name="editarSala" value="Sala 3" autocomplete="off" required readonly>
                        <input type="hidden" class="form-control" name="idSala" value="3"  autocomplete="off" required>
                      </div>
                  </div>
                  
                  <div class="mb-3 m-form__group">
                    <label class="form-label">Dia</label>
                    <div class="input-group"><span class="input-group-text"> <i class="fas fa-calendar"></i> </span>
                    <input type="text" class="form-control" name="dia"  autocomplete="off" value="Lunes" required readonly>
                    </div>
                  </div>
                  
                  <div class="mb-3 m-form__group">
                    <label class="form-label">Hora Entrada</label>
                    <div class="input-group"><span class="input-group-text"> <i style="font-size:18px" class="fas fa-clock"></i> </span>
                      <input type="time" class="form-control" name="hora" value="17:00"  autocomplete="off" required readonly>
                    </div>
                  </div>

                  <div class="mb-3 m-form__group">
                    <label class="form-label">Hora Salida</label>
                    <div class="input-group"><span class="input-group-text"> <i style="font-size:18px" class="fas fa-clock"></i> </span>
                      <input type="time" class="form-control" name="horas" value="17:30"  autocomplete="off" required readonly>
                    </div>
                  </div>

                  <div class="mb-3 m-form__group">
                    <label class="form-label">Materia</label>
                    <div class="input-group"><span class="input-group-text"> <i class="fas fa-check-circle"></i> </span>
                      <select class="form-control" name="materia" required>
                        <option value="">Selecione una materia</option>
                        <?php
                          $materias = ControladorMaterias::ctrMostrarMaterias(null, null);
                          foreach ($materias as $key => $value) {
                            echo '<option value="' . $value["id"] . '">' . $value["materia"] . '</option>';
                          }
                        ?>
                      </select>
                    </div>
                  </div>

                  <div class="mb-3 m-form__group">
                    <label class="form-label">Profesor</label>
                    <div class="input-group"><span class="input-group-text"> <i class="fas fa-user"></i> </span>
                      <select class="form-control" name="docente" required>
                        <option value="">Seleccione un Docente</option>
                        <?php
                          $docentes = ControladorDocentes::ctrMostrarDocentes(null, null);
                          foreach ($docentes as $key => $value) : ?>
                          <option value="<?= $value["id"] ?>"> <?= $value["nombre"] ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                  </div>

              </div>
            </div>
          </div>               
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary" type="submit">Guardar</button>
        </div>

      </form>
    </div>
  </div>
</div>

<!-- MODAL MARTES 17 -->
<div class="modal fade" id="S3Martes17" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title">Agregar Horario</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formS3Martes17">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Sala</label>
                      <div class="input-group"><span class="input-group-text"> <i style="font-size:18px" class="fas fa-laptop-house"></i> </span>
                        <input type="text" class="form-control" name="editarSala" value="Sala 3" autocomplete="off" required readonly>
                        <input type="hidden" class="form-control" name="idSala" value="3"  autocomplete="off" required>
                      </div>
                  </div>
                  
                  <div class="mb-3 m-form__group">
                    <label class="form-label">Dia</label>
                    <div class="input-group"><span class="input-group-text"> <i class="fas fa-calendar"></i> </span>
                    <input type="text" class="form-control" name="dia"  autocomplete="off" value="Martes" required readonly>
                    </div>
                  </div>
                  
                  <div class="mb-3 m-form__group">
                    <label class="form-label">Hora Entrada</label>
                    <div class="input-group"><span class="input-group-text"> <i style="font-size:18px" class="fas fa-clock"></i> </span>
                      <input type="time" class="form-control" name="hora" value="17:00"  autocomplete="off" required readonly>
                    </div>
                  </div>

                  <div class="mb-3 m-form__group">
                    <label class="form-label">Hora Salida</label>
                    <div class="input-group"><span class="input-group-text"> <i style="font-size:18px" class="fas fa-clock"></i> </span>
                      <input type="time" class="form-control" name="horas" value="17:30"  autocomplete="off" required readonly>
                    </div>
                  </div>

                  <div class="mb-3 m-form__group">
                    <label class="form-label">Materia</label>
                    <div class="input-group"><span class="input-group-text"> <i class="fas fa-check-circle"></i> </span>
                      <select class="form-control" name="materia" required>
                        <option value="">Selecione una materia</option>
                        <?php
                          $materias = ControladorMaterias::ctrMostrarMaterias(null, null);
                          foreach ($materias as $key => $value) {
                            echo '<option value="' . $value["id"] . '">' . $value["materia"] . '</option>';
                          }
                        ?>
                      </select>
                    </div>
                  </div>

                  <div class="mb-3 m-form__group">
                    <label class="form-label">Profesor</label>
                    <div class="input-group"><span class="input-group-text"> <i class="fas fa-user"></i> </span>
                      <select class="form-control" name="docente" required>
                        <option value="">Seleccione un Docente</option>
                        <?php
                          $docentes = ControladorDocentes::ctrMostrarDocentes(null, null);
                          foreach ($docentes as $key => $value) : ?>
                          <option value="<?= $value["id"] ?>"> <?= $value["nombre"] ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                  </div>

              </div>
            </div>
          </div>               
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary" type="submit">Guardar</button>
        </div>

      </form>
    </div>
  </div>
</div>

<!-- MODAL MIERCOLES 17 -->
<div class="modal fade" id="S3Miercoles17" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title">Agregar Horario</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formS3Miercoles17">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Sala</label>
                      <div class="input-group"><span class="input-group-text"> <i style="font-size:18px" class="fas fa-laptop-house"></i> </span>
                        <input type="text" class="form-control" name="editarSala" value="Sala 3" autocomplete="off" required readonly>
                        <input type="hidden" class="form-control" name="idSala" value="3"  autocomplete="off" required>
                      </div>
                  </div>
                  
                  <div class="mb-3 m-form__group">
                    <label class="form-label">Dia</label>
                    <div class="input-group"><span class="input-group-text"> <i class="fas fa-calendar"></i> </span>
                    <input type="text" class="form-control" name="dia"  autocomplete="off" value="Miercoles" required readonly>
                    </div>
                  </div>
                  
                  <div class="mb-3 m-form__group">
                    <label class="form-label">Hora Entrada</label>
                    <div class="input-group"><span class="input-group-text"> <i style="font-size:18px" class="fas fa-clock"></i> </span>
                      <input type="time" class="form-control" name="hora" value="17:00"  autocomplete="off" required readonly>
                    </div>
                  </div>

                  <div class="mb-3 m-form__group">
                    <label class="form-label">Hora Salida</label>
                    <div class="input-group"><span class="input-group-text"> <i style="font-size:18px" class="fas fa-clock"></i> </span>
                      <input type="time" class="form-control" name="horas" value="17:30"  autocomplete="off" required readonly>
                    </div>
                  </div>

                  <div class="mb-3 m-form__group">
                    <label class="form-label">Materia</label>
                    <div class="input-group"><span class="input-group-text"> <i class="fas fa-check-circle"></i> </span>
                      <select class="form-control" name="materia" required>
                        <option value="">Selecione una materia</option>
                        <?php
                          $materias = ControladorMaterias::ctrMostrarMaterias(null, null);
                          foreach ($materias as $key => $value) {
                            echo '<option value="' . $value["id"] . '">' . $value["materia"] . '</option>';
                          }
                        ?>
                      </select>
                    </div>
                  </div>

                  <div class="mb-3 m-form__group">
                    <label class="form-label">Profesor</label>
                    <div class="input-group"><span class="input-group-text"> <i class="fas fa-user"></i> </span>
                      <select class="form-control" name="docente" required>
                        <option value="">Seleccione un Docente</option>
                        <?php
                          $docentes = ControladorDocentes::ctrMostrarDocentes(null, null);
                          foreach ($docentes as $key => $value) : ?>
                          <option value="<?= $value["id"] ?>"> <?= $value["nombre"] ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                  </div>

              </div>
            </div>
          </div>               
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary" type="submit">Guardar</button>
        </div>

      </form>
    </div>
  </div>
</div>

<!-- MODAL JUEVES 17 -->
<div class="modal fade" id="S3Jueves17" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title">Agregar Horario</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formS3Jueves17">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Sala</label>
                      <div class="input-group"><span class="input-group-text"> <i style="font-size:18px" class="fas fa-laptop-house"></i> </span>
                        <input type="text" class="form-control" name="editarSala" value="Sala 3" autocomplete="off" required readonly>
                        <input type="hidden" class="form-control" name="idSala" value="3"  autocomplete="off" required>
                      </div>
                  </div>
                  
                  <div class="mb-3 m-form__group">
                    <label class="form-label">Dia</label>
                    <div class="input-group"><span class="input-group-text"> <i class="fas fa-calendar"></i> </span>
                    <input type="text" class="form-control" name="dia"  autocomplete="off" value="Jueves" required readonly>
                    </div>
                  </div>
                  
                  <div class="mb-3 m-form__group">
                    <label class="form-label">Hora Entrada</label>
                    <div class="input-group"><span class="input-group-text"> <i style="font-size:18px" class="fas fa-clock"></i> </span>
                      <input type="time" class="form-control" name="hora" value="17:00"  autocomplete="off" required readonly>
                    </div>
                  </div>

                  <div class="mb-3 m-form__group">
                    <label class="form-label">Hora Salida</label>
                    <div class="input-group"><span class="input-group-text"> <i style="font-size:18px" class="fas fa-clock"></i> </span>
                      <input type="time" class="form-control" name="horas" value="17:30"  autocomplete="off" required readonly>
                    </div>
                  </div>

                  <div class="mb-3 m-form__group">
                    <label class="form-label">Materia</label>
                    <div class="input-group"><span class="input-group-text"> <i class="fas fa-check-circle"></i> </span>
                      <select class="form-control" name="materia" required>
                        <option value="">Selecione una materia</option>
                        <?php
                          $materias = ControladorMaterias::ctrMostrarMaterias(null, null);
                          foreach ($materias as $key => $value) {
                            echo '<option value="' . $value["id"] . '">' . $value["materia"] . '</option>';
                          }
                        ?>
                      </select>
                    </div>
                  </div>

                  <div class="mb-3 m-form__group">
                    <label class="form-label">Profesor</label>
                    <div class="input-group"><span class="input-group-text"> <i class="fas fa-user"></i> </span>
                      <select class="form-control" name="docente" required>
                        <option value="">Seleccione un Docente</option>
                        <?php
                          $docentes = ControladorDocentes::ctrMostrarDocentes(null, null);
                          foreach ($docentes as $key => $value) : ?>
                          <option value="<?= $value["id"] ?>"> <?= $value["nombre"] ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                  </div>

              </div>
            </div>
          </div>               
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary" type="submit">Guardar</button>
        </div>

      </form>
    </div>
  </div>
</div>

<!-- MODAL VIERNES 17 -->
<div class="modal fade" id="S3Viernes17" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header bg-primary">
        <h5 class="modal-title">Agregar Horario</h5>
        <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="post" id="formS3Viernes17">   
        <div class="modal-body">
          <div class="card-body">
            <div class="row">
              <div class="col-md-12">
                  <div class="mb-3 m-form__group">
                      <label class="form-label">Sala</label>
                      <div class="input-group"><span class="input-group-text"> <i style="font-size:18px" class="fas fa-laptop-house"></i> </span>
                        <input type="text" class="form-control" name="editarSala" value="Sala 3" autocomplete="off" required readonly>
                        <input type="hidden" class="form-control" name="idSala" value="3"  autocomplete="off" required>
                      </div>
                  </div>
                  
                  <div class="mb-3 m-form__group">
                    <label class="form-label">Dia</label>
                    <div class="input-group"><span class="input-group-text"> <i class="fas fa-calendar"></i> </span>
                    <input type="text" class="form-control" name="dia"  autocomplete="off" value="Viernes" required readonly>
                    </div>
                  </div>
                  
                  <div class="mb-3 m-form__group">
                    <label class="form-label">Hora Entrada</label>
                    <div class="input-group"><span class="input-group-text"> <i style="font-size:18px" class="fas fa-clock"></i> </span>
                      <input type="time" class="form-control" name="hora" value="17:00"  autocomplete="off" required readonly>
                    </div>
                  </div>

                  <div class="mb-3 m-form__group">
                    <label class="form-label">Hora Salida</label>
                    <div class="input-group"><span class="input-group-text"> <i style="font-size:18px" class="fas fa-clock"></i> </span>
                      <input type="time" class="form-control" name="horas" value="17:30"  autocomplete="off" required readonly>
                    </div>
                  </div>

                  <div class="mb-3 m-form__group">
                    <label class="form-label">Materia</label>
                    <div class="input-group"><span class="input-group-text"> <i class="fas fa-check-circle"></i> </span>
                      <select class="form-control" name="materia" required>
                        <option value="">Selecione una materia</option>
                        <?php
                          $materias = ControladorMaterias::ctrMostrarMaterias(null, null);
                          foreach ($materias as $key => $value) {
                            echo '<option value="' . $value["id"] . '">' . $value["materia"] . '</option>';
                          }
                        ?>
                      </select>
                    </div>
                  </div>

                  <div class="mb-3 m-form__group">
                    <label class="form-label">Profesor</label>
                    <div class="input-group"><span class="input-group-text"> <i class="fas fa-user"></i> </span>
                      <select class="form-control" name="docente" required>
                        <option value="">Seleccione un Docente</option>
                        <?php
                          $docentes = ControladorDocentes::ctrMostrarDocentes(null, null);
                          foreach ($docentes as $key => $value) : ?>
                          <option value="<?= $value["id"] ?>"> <?= $value["nombre"] ?></option>
                        <?php endforeach ?>
                      </select>
                    </div>
                  </div>

              </div>
            </div>
          </div>               
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Cerrar</button>
          <button class="btn btn-primary" type="submit">Guardar</button>
        </div>
      </form>
    </div>
  </div>
</div>