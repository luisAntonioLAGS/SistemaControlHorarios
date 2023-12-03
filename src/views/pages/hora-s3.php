<?php


/*=============================================
  S3 LUNES
=============================================*/

#8:00
@$S3Lunes8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Lunes', '08:00', '08:30');
@$idMateriaS3Lunes8 = $S3Lunes8['id_materia'];
@$materiaS3Lunes8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Lunes8 );
@$idDocenteS3Lunes8 = $S3Lunes8['id_docente'];
@$docenteS3Lunes8 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Lunes8 );

if(@$docenteS3Lunes8 == ""){

    @$respS3Lunes8 = "0";
}else{
    @$respS3Lunes8 = "<b>". $materiaS3Lunes8['materia'] ."</b> </br>" . " ". $docenteS3Lunes8['nombre'] . '

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Lunes8['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Lunes8['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';	
 
}

#9:00
@$S3Lunes9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Lunes', '09:00', '09:30');
@$idMateriaS3Lunes9 = $S3Lunes9['id_materia'];
@$materiaS3Lunes9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Lunes9 );
@$idDocenteS3Lunes9 = $S3Lunes9['id_docente'];
@$docenteS3Lunes9 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Lunes9 );
if(@$docenteS3Lunes9 == ""){

    @$respS3Lunes9 = "0";
}else{
    @$respS3Lunes9 = "<b>". $materiaS3Lunes9['materia'] ."</b> </br>" . " ". $docenteS3Lunes9['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Lunes9['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Lunes9['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';	
 
}

#10:00
@$S3Lunes10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Lunes', '10:00', '10:30');
@$idMateriaS3Lunes10 = $S3Lunes10['id_materia'];
@$materiaS3Lunes10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Lunes10 );
@$idDocenteS3Lunes10 = $S3Lunes10['id_docente'];
@$docenteS3Lunes10 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Lunes10 );
if(@$docenteS3Lunes10 == ""){

    @$respS3Lunes10 = "0";
}else{
    @$respS3Lunes10 = "<b>". $materiaS3Lunes10['materia'] ."</b> </br>" . " ". $docenteS3Lunes10['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Lunes10['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Lunes10['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#11:00
@$S3Lunes11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Lunes', '11:00', '11:30');
@$idMateriaS3Lunes11 = $S3Lunes11['id_materia'];
@$materiaS3Lunes11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Lunes11 );
@$idDocenteS3Lunes11 = $S3Lunes11['id_docente'];
@$docenteS3Lunes11 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Lunes11 );
if(@$docenteS3Lunes11 == ""){

    @$respS3Lunes11 = "0";
}else{
    @$respS3Lunes11 = "<b>". $materiaS3Lunes11['materia'] ."</b> </br>" . " ". $docenteS3Lunes11['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
    <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Lunes11['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
    <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Lunes11['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
</div>';
 
}

#12:00
@$S3Lunes12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Lunes', '12:00', '12:30');
@$idMateriaS3Lunes12 = $S3Lunes12['id_materia'];
@$materiaS3Lunes12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Lunes12 );
@$idDocenteS3Lunes12 = $S3Lunes12['id_docente'];
@$docenteS3Lunes12 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Lunes12 );
if(@$docenteS3Lunes12 == ""){

    @$respS3Lunes12 = "0";
}else{
    @$respS3Lunes12 = "<b>". $materiaS3Lunes12['materia'] ."</b> </br>" . " ". $docenteS3Lunes12['nombre'] . '

    </br> <div class="btn-group btn-group-pill" role="group">
    <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Lunes12['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
    <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Lunes12['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
</div>';
 
}

#13:00
@$S3Lunes13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Lunes', '13:00', '13:30');
@$idMateriaS3Lunes13 = $S3Lunes13['id_materia'];
@$materiaS3Lunes13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Lunes13 );
@$idDocenteS3Lunes13 = $S3Lunes13['id_docente'];
@$docenteS3Lunes13 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Lunes13 );
if(@$docenteS3Lunes13 == ""){

    @$respS3Lunes13 = "0";
}else{
    @$respS3Lunes13 = "<b>". $materiaS3Lunes13['materia'] ."</b> </br>" . " ". $docenteS3Lunes13['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Lunes13['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Lunes13['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#14:00
@$S3Lunes14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Lunes', '14:00', '14:30');
@$idMateriaS3Lunes14 = $S3Lunes14['id_materia'];
@$materiaS3Lunes14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Lunes14 );
@$idDocenteS3Lunes14 = $S3Lunes14['id_docente'];
@$docenteS3Lunes14 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Lunes14 );
if(@$docenteS3Lunes14 == ""){

    @$respS3Lunes14 = "0";
}else{
    @$respS3Lunes14 = "<b>". $materiaS3Lunes14['materia'] ."</b> </br>" . " ". $docenteS3Lunes14['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Lunes14['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Lunes14['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#15:00
@$S3Lunes15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Lunes', '15:00', '15:30');
@$idMateriaS3Lunes15 = $S3Lunes15['id_materia'];
@$materiaS3Lunes15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Lunes15 );
@$idDocenteS3Lunes15 = $S3Lunes15['id_docente'];
@$docenteS3Lunes15 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Lunes15 );
if(@$docenteS3Lunes15 == ""){

    @$respS3Lunes15 = "0";
}else{
    @$respS3Lunes15 = "<b>". $materiaS3Lunes15['materia'] ."</b> </br>" . " ". $docenteS3Lunes15['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Lunes15['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Lunes15['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#16:00
@$S3Lunes16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Lunes', '16:00', '16:30');
@$idMateriaS3Lunes16 = $S3Lunes16['id_materia'];
@$materiaS3Lunes16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Lunes16 );
@$idDocenteS3Lunes16 = $S3Lunes16['id_docente'];
@$docenteS3Lunes16 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Lunes16 );
if(@$docenteS3Lunes16 == ""){

    @$respS3Lunes16 = "0";
}else{
    @$respS3Lunes16 = "<b>". $materiaS3Lunes16['materia'] ."</b> </br>" . " ". $docenteS3Lunes16['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Lunes16['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Lunes16['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#17:00
@$S3Lunes17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Lunes', '17:00', '17:30');
@$idMateriaS3Lunes17 = $S3Lunes17['id_materia'];
@$materiaS3Lunes17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Lunes17 );
@$idDocenteS3Lunes17 = $S3Lunes17['id_docente'];
@$docenteS3Lunes17 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Lunes17 );
if(@$docenteS3Lunes17 == ""){

    @$respS3Lunes17 = "0";
}else{
    @$respS3Lunes17 = "<b>". $materiaS3Lunes17['materia'] ."</b> </br>" . " ". $docenteS3Lunes17['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Lunes17['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Lunes17['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}




/*=============================================
   S3 MARTES
=============================================*/

#8:00
@$S3Martes8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Martes', '08:00', '08:30');
@$idMateriaS3Martes8 = $S3Martes8['id_materia'];
@$materiaS3Martes8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Martes8 );
@$idDocenteS3Martes8 = $S3Martes8['id_docente'];
@$docenteS3Martes8 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Martes8 );

if(@$docenteS3Martes8 == ""){

    @$respS3Martes8 = "0";
}else{
    @$respS3Martes8 = "<b>". $materiaS3Martes8['materia'] ."</b> </br>" . " ". $docenteS3Martes8['nombre'] . '

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Martes8['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Martes8['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';	
 
}

#9:00
@$S3Martes9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Martes', '09:00', '09:30');
@$idMateriaS3Martes9 = $S3Martes9['id_materia'];
@$materiaS3Martes9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Martes9 );
@$idDocenteS3Martes9 = $S3Martes9['id_docente'];
@$docenteS3Martes9 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Martes9 );
if(@$docenteS3Martes9 == ""){

    @$respS3Martes9 = "0";
}else{
    @$respS3Martes9 = "<b>". $materiaS3Martes9['materia'] ."</b> </br>" . " ". $docenteS3Martes9['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Martes9['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Martes9['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';	
 
}

#10:00
@$S3Martes10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Martes', '10:00', '10:30');
@$idMateriaS3Martes10 = $S3Martes10['id_materia'];
@$materiaS3Martes10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Martes10 );
@$idDocenteS3Martes10 = $S3Martes10['id_docente'];
@$docenteS3Martes10 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Martes10 );
if(@$docenteS3Martes10 == ""){

    @$respS3Martes10 = "0";
}else{
    @$respS3Martes10 = "<b>". $materiaS3Martes10['materia'] ."</b> </br>" . " ". $docenteS3Martes10['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Martes10['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Martes10['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#11:00
@$S3Martes11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Martes', '11:00', '11:30');
@$idMateriaS3Martes11 = $S3Martes11['id_materia'];
@$materiaS3Martes11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Martes11 );
@$idDocenteS3Martes11 = $S3Martes11['id_docente'];
@$docenteS3Martes11 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Martes11 );
if(@$docenteS3Martes11 == ""){

    @$respS3Martes11 = "0";
}else{
    @$respS3Martes11 = "<b>". $materiaS3Martes11['materia'] ."</b> </br>" . " ". $docenteS3Martes11['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
    <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Martes11['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
    <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Martes11['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
</div>';
 
}

#12:00
@$S3Martes12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Martes', '12:00', '12:30');
@$idMateriaS3Martes12 = $S3Martes12['id_materia'];
@$materiaS3Martes12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Martes12 );
@$idDocenteS3Martes12 = $S3Martes12['id_docente'];
@$docenteS3Martes12 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Martes12 );
if(@$docenteS3Martes12 == ""){

    @$respS3Martes12 = "0";
}else{
    @$respS3Martes12 = "<b>". $materiaS3Martes12['materia'] ."</b> </br>" . " ". $docenteS3Martes12['nombre'] . '

    </br> <div class="btn-group btn-group-pill" role="group">
    <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Martes12['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
    <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Martes12['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
</div>';
 
}

#13:00
@$S3Martes13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Martes', '13:00', '13:30');
@$idMateriaS3Martes13 = $S3Martes13['id_materia'];
@$materiaS3Martes13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Martes13 );
@$idDocenteS3Martes13 = $S3Martes13['id_docente'];
@$docenteS3Martes13 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Martes13 );
if(@$docenteS3Martes13 == ""){

    @$respS3Martes13 = "0";
}else{
    @$respS3Martes13 = "<b>". $materiaS3Martes13['materia'] ."</b> </br>" . " ". $docenteS3Martes13['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Martes13['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Martes13['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#14:00
@$S3Martes14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Martes', '14:00', '14:30');
@$idMateriaS3Martes14 = $S3Martes14['id_materia'];
@$materiaS3Martes14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Martes14 );
@$idDocenteS3Martes14 = $S3Martes14['id_docente'];
@$docenteS3Martes14 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Martes14 );
if(@$docenteS3Martes14 == ""){

    @$respS3Martes14 = "0";
}else{
    @$respS3Martes14 = "<b>". $materiaS3Martes14['materia'] ."</b> </br>" . " ". $docenteS3Martes14['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Martes14['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Martes14['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#15:00
@$S3Martes15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Martes', '15:00', '15:30');
@$idMateriaS3Martes15 = $S3Martes15['id_materia'];
@$materiaS3Martes15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Martes15 );
@$idDocenteS3Martes15 = $S3Martes15['id_docente'];
@$docenteS3Martes15 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Martes15 );
if(@$docenteS3Martes15 == ""){

    @$respS3Martes15 = "0";
}else{
    @$respS3Martes15 = "<b>". $materiaS3Martes15['materia'] ."</b> </br>" . " ". $docenteS3Martes15['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Martes15['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Martes15['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#16:00
@$S3Martes16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Martes', '16:00', '16:30');
@$idMateriaS3Martes16 = $S3Martes16['id_materia'];
@$materiaS3Martes16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Martes16 );
@$idDocenteS3Martes16 = $S3Martes16['id_docente'];
@$docenteS3Martes16 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Martes16 );
if(@$docenteS3Martes16 == ""){

    @$respS3Martes16 = "0";
}else{
    @$respS3Martes16 = "<b>". $materiaS3Martes16['materia'] ."</b> </br>" . " ". $docenteS3Martes16['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Martes16['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Martes16['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#17:00
@$S3Martes17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Martes', '17:00', '17:30');
@$idMateriaS3Martes17 = $S3Martes17['id_materia'];
@$materiaS3Martes17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Martes17 );
@$idDocenteS3Martes17 = $S3Martes17['id_docente'];
@$docenteS3Martes17 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Martes17 );
if(@$docenteS3Martes17 == ""){

    @$respS3Martes17 = "0";
}else{
    @$respS3Martes17 = "<b>". $materiaS3Martes17['materia'] ."</b> </br>" . " ". $docenteS3Martes17['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Martes17['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Martes17['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}


/*=============================================
   S3 MIERCOLES
=============================================*/

#8:00
@$S3Miercoles8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Miercoles', '08:00', '08:30');
@$idMateriaS3Miercoles8 = $S3Miercoles8['id_materia'];
@$materiaS3Miercoles8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Miercoles8 );
@$idDocenteS3Miercoles8 = $S3Miercoles8['id_docente'];
@$docenteS3Miercoles8 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Miercoles8 );

if(@$docenteS3Miercoles8 == ""){

    @$respS3Miercoles8 = "0";
}else{
    @$respS3Miercoles8 = "<b>". $materiaS3Miercoles8['materia'] ."</b> </br>" . " ". $docenteS3Miercoles8['nombre'] . '

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Miercoles8['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Miercoles8['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';	
 
}

#9:00
@$S3Miercoles9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Miercoles', '09:00', '09:30');
@$idMateriaS3Miercoles9 = $S3Miercoles9['id_materia'];
@$materiaS3Miercoles9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Miercoles9 );
@$idDocenteS3Miercoles9 = $S3Miercoles9['id_docente'];
@$docenteS3Miercoles9 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Miercoles9 );
if(@$docenteS3Miercoles9 == ""){

    @$respS3Miercoles9 = "0";
}else{
    @$respS3Miercoles9 = "<b>". $materiaS3Miercoles9['materia'] ."</b> </br>" . " ". $docenteS3Miercoles9['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Miercoles9['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Miercoles9['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';	
 
}

#10:00
@$S3Miercoles10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Miercoles', '10:00', '10:30');
@$idMateriaS3Miercoles10 = $S3Miercoles10['id_materia'];
@$materiaS3Miercoles10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Miercoles10 );
@$idDocenteS3Miercoles10 = $S3Miercoles10['id_docente'];
@$docenteS3Miercoles10 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Miercoles10 );
if(@$docenteS3Miercoles10 == ""){

    @$respS3Miercoles10 = "0";
}else{
    @$respS3Miercoles10 = "<b>". $materiaS3Miercoles10['materia'] ."</b> </br>" . " ". $docenteS3Miercoles10['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Miercoles10['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Miercoles10['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#11:00
@$S3Miercoles11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Miercoles', '11:00', '11:30');
@$idMateriaS3Miercoles11 = $S3Miercoles11['id_materia'];
@$materiaS3Miercoles11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Miercoles11 );
@$idDocenteS3Miercoles11 = $S3Miercoles11['id_docente'];
@$docenteS3Miercoles11 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Miercoles11 );
if(@$docenteS3Miercoles11 == ""){

    @$respS3Miercoles11 = "0";
}else{
    @$respS3Miercoles11 = "<b>". $materiaS3Miercoles11['materia'] ."</b> </br>" . " ". $docenteS3Miercoles11['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
    <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Miercoles11['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
    <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Miercoles11['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
</div>';
 
}

#12:00
@$S3Miercoles12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Miercoles', '12:00', '12:30');
@$idMateriaS3Miercoles12 = $S3Miercoles12['id_materia'];
@$materiaS3Miercoles12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Miercoles12 );
@$idDocenteS3Miercoles12 = $S3Miercoles12['id_docente'];
@$docenteS3Miercoles12 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Miercoles12 );
if(@$docenteS3Miercoles12 == ""){

    @$respS3Miercoles12 = "0";
}else{
    @$respS3Miercoles12 = "<b>". $materiaS3Miercoles12['materia'] ."</b> </br>" . " ". $docenteS3Miercoles12['nombre'] . '

    </br> <div class="btn-group btn-group-pill" role="group">
    <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Miercoles12['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
    <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Miercoles12['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
</div>';
 
}

#13:00
@$S3Miercoles13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Miercoles', '13:00', '13:30');
@$idMateriaS3Miercoles13 = $S3Miercoles13['id_materia'];
@$materiaS3Miercoles13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Miercoles13 );
@$idDocenteS3Miercoles13 = $S3Miercoles13['id_docente'];
@$docenteS3Miercoles13 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Miercoles13 );
if(@$docenteS3Miercoles13 == ""){

    @$respS3Miercoles13 = "0";
}else{
    @$respS3Miercoles13 = "<b>". $materiaS3Miercoles13['materia'] ."</b> </br>" . " ". $docenteS3Miercoles13['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Miercoles13['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Miercoles13['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#14:00
@$S3Miercoles14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Miercoles', '14:00', '14:30');
@$idMateriaS3Miercoles14 = $S3Miercoles14['id_materia'];
@$materiaS3Miercoles14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Miercoles14 );
@$idDocenteS3Miercoles14 = $S3Miercoles14['id_docente'];
@$docenteS3Miercoles14 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Miercoles14 );
if(@$docenteS3Miercoles14 == ""){

    @$respS3Miercoles14 = "0";
}else{
    @$respS3Miercoles14 = "<b>". $materiaS3Miercoles14['materia'] ."</b> </br>" . " ". $docenteS3Miercoles14['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Miercoles14['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Miercoles14['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#15:00
@$S3Miercoles15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Miercoles', '15:00', '15:30');
@$idMateriaS3Miercoles15 = $S3Miercoles15['id_materia'];
@$materiaS3Miercoles15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Miercoles15 );
@$idDocenteS3Miercoles15 = $S3Miercoles15['id_docente'];
@$docenteS3Miercoles15 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Miercoles15 );
if(@$docenteS3Miercoles15 == ""){

    @$respS3Miercoles15 = "0";
}else{
    @$respS3Miercoles15 = "<b>". $materiaS3Miercoles15['materia'] ."</b> </br>" . " ". $docenteS3Miercoles15['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Miercoles15['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Miercoles15['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#16:00
@$S3Miercoles16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Miercoles', '16:00', '16:30');
@$idMateriaS3Miercoles16 = $S3Miercoles16['id_materia'];
@$materiaS3Miercoles16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Miercoles16 );
@$idDocenteS3Miercoles16 = $S3Miercoles16['id_docente'];
@$docenteS3Miercoles16 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Miercoles16 );
if(@$docenteS3Miercoles16 == ""){

    @$respS3Miercoles16 = "0";
}else{
    @$respS3Miercoles16 = "<b>". $materiaS3Miercoles16['materia'] ."</b> </br>" . " ". $docenteS3Miercoles16['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Miercoles16['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Miercoles16['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#17:00
@$S3Miercoles17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Miercoles', '17:00', '17:30');
@$idMateriaS3Miercoles17 = $S3Miercoles17['id_materia'];
@$materiaS3Miercoles17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Miercoles17 );
@$idDocenteS3Miercoles17 = $S3Miercoles17['id_docente'];
@$docenteS3Miercoles17 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Miercoles17 );
if(@$docenteS3Miercoles17 == ""){

    @$respS3Miercoles17 = "0";
}else{
    @$respS3Miercoles17 = "<b>". $materiaS3Miercoles17['materia'] ."</b> </br>" . " ". $docenteS3Miercoles17['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Miercoles17['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Miercoles17['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}


/*=============================================
   S3 JUEVES
=============================================*/

#8:00
@$S3Jueves8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Jueves', '08:00', '08:30');
@$idMateriaS3Jueves8 = $S3Jueves8['id_materia'];
@$materiaS3Jueves8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Jueves8 );
@$idDocenteS3Jueves8 = $S3Jueves8['id_docente'];
@$docenteS3Jueves8 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Jueves8 );

if(@$docenteS3Jueves8 == ""){

    @$respS3Jueves8 = "0";
}else{
    @$respS3Jueves8 = "<b>". $materiaS3Jueves8['materia'] ."</b> </br>" . " ". $docenteS3Jueves8['nombre'] . '

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Jueves8['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Jueves8['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';	
 
}

#9:00
@$S3Jueves9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Jueves', '09:00', '09:30');
@$idMateriaS3Jueves9 = $S3Jueves9['id_materia'];
@$materiaS3Jueves9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Jueves9 );
@$idDocenteS3Jueves9 = $S3Jueves9['id_docente'];
@$docenteS3Jueves9 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Jueves9 );
if(@$docenteS3Jueves9 == ""){

    @$respS3Jueves9 = "0";
}else{
    @$respS3Jueves9 = "<b>". $materiaS3Jueves9['materia'] ."</b> </br>" . " ". $docenteS3Jueves9['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Jueves9['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Jueves9['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';	
 
}

#10:00
@$S3Jueves10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Jueves', '10:00', '10:30');
@$idMateriaS3Jueves10 = $S3Jueves10['id_materia'];
@$materiaS3Jueves10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Jueves10 );
@$idDocenteS3Jueves10 = $S3Jueves10['id_docente'];
@$docenteS3Jueves10 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Jueves10 );
if(@$docenteS3Jueves10 == ""){

    @$respS3Jueves10 = "0";
}else{
    @$respS3Jueves10 = "<b>". $materiaS3Jueves10['materia'] ."</b> </br>" . " ". $docenteS3Jueves10['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Jueves10['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Jueves10['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#11:00
@$S3Jueves11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Jueves', '11:00', '11:30');
@$idMateriaS3Jueves11 = $S3Jueves11['id_materia'];
@$materiaS3Jueves11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Jueves11 );
@$idDocenteS3Jueves11 = $S3Jueves11['id_docente'];
@$docenteS3Jueves11 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Jueves11 );
if(@$docenteS3Jueves11 == ""){

    @$respS3Jueves11 = "0";
}else{
    @$respS3Jueves11 = "<b>". $materiaS3Jueves11['materia'] ."</b> </br>" . " ". $docenteS3Jueves11['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
    <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Jueves11['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
    <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Jueves11['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
</div>';
 
}

#12:00
@$S3Jueves12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Jueves', '12:00', '12:30');
@$idMateriaS3Jueves12 = $S3Jueves12['id_materia'];
@$materiaS3Jueves12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Jueves12 );
@$idDocenteS3Jueves12 = $S3Jueves12['id_docente'];
@$docenteS3Jueves12 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Jueves12 );
if(@$docenteS3Jueves12 == ""){

    @$respS3Jueves12 = "0";
}else{
    @$respS3Jueves12 = "<b>". $materiaS3Jueves12['materia'] ."</b> </br>" . " ". $docenteS3Jueves12['nombre'] . '

    </br> <div class="btn-group btn-group-pill" role="group">
    <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Jueves12['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
    <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Jueves12['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
</div>';
 
}

#13:00
@$S3Jueves13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Jueves', '13:00', '13:30');
@$idMateriaS3Jueves13 = $S3Jueves13['id_materia'];
@$materiaS3Jueves13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Jueves13 );
@$idDocenteS3Jueves13 = $S3Jueves13['id_docente'];
@$docenteS3Jueves13 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Jueves13 );
if(@$docenteS3Jueves13 == ""){

    @$respS3Jueves13 = "0";
}else{
    @$respS3Jueves13 = "<b>". $materiaS3Jueves13['materia'] ."</b> </br>" . " ". $docenteS3Jueves13['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Jueves13['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Jueves13['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#14:00
@$S3Jueves14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Jueves', '14:00', '14:30');
@$idMateriaS3Jueves14 = $S3Jueves14['id_materia'];
@$materiaS3Jueves14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Jueves14 );
@$idDocenteS3Jueves14 = $S3Jueves14['id_docente'];
@$docenteS3Jueves14 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Jueves14 );
if(@$docenteS3Jueves14 == ""){

    @$respS3Jueves14 = "0";
}else{
    @$respS3Jueves14 = "<b>". $materiaS3Jueves14['materia'] ."</b> </br>" . " ". $docenteS3Jueves14['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Jueves14['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Jueves14['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#15:00
@$S3Jueves15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Jueves', '15:00', '15:30');
@$idMateriaS3Jueves15 = $S3Jueves15['id_materia'];
@$materiaS3Jueves15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Jueves15 );
@$idDocenteS3Jueves15 = $S3Jueves15['id_docente'];
@$docenteS3Jueves15 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Jueves15 );
if(@$docenteS3Jueves15 == ""){

    @$respS3Jueves15 = "0";
}else{
    @$respS3Jueves15 = "<b>". $materiaS3Jueves15['materia'] ."</b> </br>" . " ". $docenteS3Jueves15['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Jueves15['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Jueves15['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#16:00
@$S3Jueves16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Jueves', '16:00', '16:30');
@$idMateriaS3Jueves16 = $S3Jueves16['id_materia'];
@$materiaS3Jueves16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Jueves16 );
@$idDocenteS3Jueves16 = $S3Jueves16['id_docente'];
@$docenteS3Jueves16 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Jueves16 );
if(@$docenteS3Jueves16 == ""){

    @$respS3Jueves16 = "0";
}else{
    @$respS3Jueves16 = "<b>". $materiaS3Jueves16['materia'] ."</b> </br>" . " ". $docenteS3Jueves16['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Jueves16['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Jueves16['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#17:00
@$S3Jueves17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Jueves', '17:00', '17:30');
@$idMateriaS3Jueves17 = $S3Jueves17['id_materia'];
@$materiaS3Jueves17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Jueves17 );
@$idDocenteS3Jueves17 = $S3Jueves17['id_docente'];
@$docenteS3Jueves17 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Jueves17 );
if(@$docenteS3Jueves17 == ""){

    @$respS3Jueves17 = "0";
}else{
    @$respS3Jueves17 = "<b>". $materiaS3Jueves17['materia'] ."</b> </br>" . " ". $docenteS3Jueves17['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Jueves17['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Jueves17['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}


/*=============================================
   S3 VIERNES
=============================================*/

#8:00
@$S3Viernes8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Viernes', '08:00', '08:30');
@$idMateriaS3Viernes8 = $S3Viernes8['id_materia'];
@$materiaS3Viernes8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Viernes8 );
@$idDocenteS3Viernes8 = $S3Viernes8['id_docente'];
@$docenteS3Viernes8 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Viernes8 );

if(@$docenteS3Viernes8 == ""){

    @$respS3Viernes8 = "0";
}else{
    @$respS3Viernes8 = "<b>". $materiaS3Viernes8['materia'] ."</b> </br>" . " ". $docenteS3Viernes8['nombre'] . '

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Viernes8['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Viernes8['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';	
 
}

#9:00
@$S3Viernes9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Viernes', '09:00', '09:30');
@$idMateriaS3Viernes9 = $S3Viernes9['id_materia'];
@$materiaS3Viernes9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Viernes9 );
@$idDocenteS3Viernes9 = $S3Viernes9['id_docente'];
@$docenteS3Viernes9 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Viernes9 );
if(@$docenteS3Viernes9 == ""){

    @$respS3Viernes9 = "0";
}else{
    @$respS3Viernes9 = "<b>". $materiaS3Viernes9['materia'] ."</b> </br>" . " ". $docenteS3Viernes9['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Viernes9['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Viernes9['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';	
 
}

#10:00
@$S3Viernes10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Viernes', '10:00', '10:30');
@$idMateriaS3Viernes10 = $S3Viernes10['id_materia'];
@$materiaS3Viernes10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Viernes10 );
@$idDocenteS3Viernes10 = $S3Viernes10['id_docente'];
@$docenteS3Viernes10 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Viernes10 );
if(@$docenteS3Viernes10 == ""){

    @$respS3Viernes10 = "0";
}else{
    @$respS3Viernes10 = "<b>". $materiaS3Viernes10['materia'] ."</b> </br>" . " ". $docenteS3Viernes10['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Viernes10['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Viernes10['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#11:00
@$S3Viernes11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Viernes', '11:00', '11:30');
@$idMateriaS3Viernes11 = $S3Viernes11['id_materia'];
@$materiaS3Viernes11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Viernes11 );
@$idDocenteS3Viernes11 = $S3Viernes11['id_docente'];
@$docenteS3Viernes11 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Viernes11 );
if(@$docenteS3Viernes11 == ""){

    @$respS3Viernes11 = "0";
}else{
    @$respS3Viernes11 = "<b>". $materiaS3Viernes11['materia'] ."</b> </br>" . " ". $docenteS3Viernes11['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
    <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Viernes11['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
    <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Viernes11['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
</div>';
 
}

#12:00
@$S3Viernes12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Viernes', '12:00', '12:30');
@$idMateriaS3Viernes12 = $S3Viernes12['id_materia'];
@$materiaS3Viernes12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Viernes12 );
@$idDocenteS3Viernes12 = $S3Viernes12['id_docente'];
@$docenteS3Viernes12 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Viernes12 );
if(@$docenteS3Viernes12 == ""){

    @$respS3Viernes12 = "0";
}else{
    @$respS3Viernes12 = "<b>". $materiaS3Viernes12['materia'] ."</b> </br>" . " ". $docenteS3Viernes12['nombre'] . '

    </br> <div class="btn-group btn-group-pill" role="group">
    <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Viernes12['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
    <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Viernes12['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
</div>';
 
}

#13:00
@$S3Viernes13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Viernes', '13:00', '13:30');
@$idMateriaS3Viernes13 = $S3Viernes13['id_materia'];
@$materiaS3Viernes13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Viernes13 );
@$idDocenteS3Viernes13 = $S3Viernes13['id_docente'];
@$docenteS3Viernes13 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Viernes13 );
if(@$docenteS3Viernes13 == ""){

    @$respS3Viernes13 = "0";
}else{
    @$respS3Viernes13 = "<b>". $materiaS3Viernes13['materia'] ."</b> </br>" . " ". $docenteS3Viernes13['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Viernes13['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Viernes13['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#14:00
@$S3Viernes14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Viernes', '14:00', '14:30');
@$idMateriaS3Viernes14 = $S3Viernes14['id_materia'];
@$materiaS3Viernes14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Viernes14 );
@$idDocenteS3Viernes14 = $S3Viernes14['id_docente'];
@$docenteS3Viernes14 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Viernes14 );
if(@$docenteS3Viernes14 == ""){

    @$respS3Viernes14 = "0";
}else{
    @$respS3Viernes14 = "<b>". $materiaS3Viernes14['materia'] ."</b> </br>" . " ". $docenteS3Viernes14['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Viernes14['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Viernes14['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#15:00
@$S3Viernes15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Viernes', '15:00', '15:30');
@$idMateriaS3Viernes15 = $S3Viernes15['id_materia'];
@$materiaS3Viernes15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Viernes15 );
@$idDocenteS3Viernes15 = $S3Viernes15['id_docente'];
@$docenteS3Viernes15 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Viernes15 );
if(@$docenteS3Viernes15 == ""){

    @$respS3Viernes15 = "0";
}else{
    @$respS3Viernes15 = "<b>". $materiaS3Viernes15['materia'] ."</b> </br>" . " ". $docenteS3Viernes15['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Viernes15['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Viernes15['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#16:00
@$S3Viernes16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Viernes', '16:00', '16:30');
@$idMateriaS3Viernes16 = $S3Viernes16['id_materia'];
@$materiaS3Viernes16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Viernes16 );
@$idDocenteS3Viernes16 = $S3Viernes16['id_docente'];
@$docenteS3Viernes16 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Viernes16 );
if(@$docenteS3Viernes16 == ""){

    @$respS3Viernes16 = "0";
}else{
    @$respS3Viernes16 = "<b>". $materiaS3Viernes16['materia'] ."</b> </br>" . " ". $docenteS3Viernes16['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Viernes16['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Viernes16['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#17:00
@$S3Viernes17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('3', 'Viernes', '17:00', '17:30');
@$idMateriaS3Viernes17 = $S3Viernes17['id_materia'];
@$materiaS3Viernes17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS3Viernes17 );
@$idDocenteS3Viernes17 = $S3Viernes17['id_docente'];
@$docenteS3Viernes17 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS3Viernes17 );
if(@$docenteS3Viernes17 == ""){

    @$respS3Viernes17 = "0";
}else{
    @$respS3Viernes17 = "<b>". $materiaS3Viernes17['materia'] ."</b> </br>" . " ". $docenteS3Viernes17['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS3" idHorarioS3 ="'.$S3Viernes17['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS3" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS3" idHorarioS3 ="'.$S3Viernes17['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}


?>