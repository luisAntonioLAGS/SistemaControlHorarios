<?php


/*=============================================
  S1 LUNES
=============================================*/

#8:00
@$S1Lunes8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Lunes', '08:00', '08:30');
@$idMateriaS1Lunes8 = $S1Lunes8['id_materia'];
@$materiaS1Lunes8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Lunes8 );
@$idDocenteS1Lunes8 = $S1Lunes8['id_docente'];
@$docenteS1Lunes8 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Lunes8 );

if(@$docenteS1Lunes8 == ""){

    @$respS1Lunes8 = "0";
}else{
    @$respS1Lunes8 = "<b>". $materiaS1Lunes8['materia'] ."</b> </br>" . " ". $docenteS1Lunes8['nombre'] . '

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Lunes8['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Lunes8['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';	
 
}

#9:00
@$S1Lunes9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Lunes', '09:00', '09:30');
@$idMateriaS1Lunes9 = $S1Lunes9['id_materia'];
@$materiaS1Lunes9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Lunes9 );
@$idDocenteS1Lunes9 = $S1Lunes9['id_docente'];
@$docenteS1Lunes9 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Lunes9 );
if(@$docenteS1Lunes9 == ""){

    @$respS1Lunes9 = "0";
}else{
    @$respS1Lunes9 = "<b>". $materiaS1Lunes9['materia'] ."</b> </br>" . " ". $docenteS1Lunes9['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Lunes9['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Lunes9['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';	
 
}

#10:00
@$S1Lunes10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Lunes', '10:00', '10:30');
@$idMateriaS1Lunes10 = $S1Lunes10['id_materia'];
@$materiaS1Lunes10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Lunes10 );
@$idDocenteS1Lunes10 = $S1Lunes10['id_docente'];
@$docenteS1Lunes10 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Lunes10 );
if(@$docenteS1Lunes10 == ""){

    @$respS1Lunes10 = "0";
}else{
    @$respS1Lunes10 = "<b>". $materiaS1Lunes10['materia'] ."</b> </br>" . " ". $docenteS1Lunes10['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Lunes10['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Lunes10['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#11:00
@$S1Lunes11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Lunes', '11:00', '11:30');
@$idMateriaS1Lunes11 = $S1Lunes11['id_materia'];
@$materiaS1Lunes11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Lunes11 );
@$idDocenteS1Lunes11 = $S1Lunes11['id_docente'];
@$docenteS1Lunes11 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Lunes11 );
if(@$docenteS1Lunes11 == ""){

    @$respS1Lunes11 = "0";
}else{
    @$respS1Lunes11 = "<b>". $materiaS1Lunes11['materia'] ."</b> </br>" . " ". $docenteS1Lunes11['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
    <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Lunes11['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
    <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Lunes11['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
</div>';
 
}

#12:00
@$S1Lunes12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Lunes', '12:00', '12:30');
@$idMateriaS1Lunes12 = $S1Lunes12['id_materia'];
@$materiaS1Lunes12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Lunes12 );
@$idDocenteS1Lunes12 = $S1Lunes12['id_docente'];
@$docenteS1Lunes12 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Lunes12 );
if(@$docenteS1Lunes12 == ""){

    @$respS1Lunes12 = "0";
}else{
    @$respS1Lunes12 = "<b>". $materiaS1Lunes12['materia'] ."</b> </br>" . " ". $docenteS1Lunes12['nombre'] . '

    </br> <div class="btn-group btn-group-pill" role="group">
    <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Lunes12['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
    <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Lunes12['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
</div>';
 
}

#13:00
@$S1Lunes13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Lunes', '13:00', '13:30');
@$idMateriaS1Lunes13 = $S1Lunes13['id_materia'];
@$materiaS1Lunes13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Lunes13 );
@$idDocenteS1Lunes13 = $S1Lunes13['id_docente'];
@$docenteS1Lunes13 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Lunes13 );
if(@$docenteS1Lunes13 == ""){

    @$respS1Lunes13 = "0";
}else{
    @$respS1Lunes13 = "<b>". $materiaS1Lunes13['materia'] ."</b> </br>" . " ". $docenteS1Lunes13['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Lunes13['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Lunes13['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#14:00
@$S1Lunes14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Lunes', '14:00', '14:30');
@$idMateriaS1Lunes14 = $S1Lunes14['id_materia'];
@$materiaS1Lunes14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Lunes14 );
@$idDocenteS1Lunes14 = $S1Lunes14['id_docente'];
@$docenteS1Lunes14 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Lunes14 );
if(@$docenteS1Lunes14 == ""){

    @$respS1Lunes14 = "0";
}else{
    @$respS1Lunes14 = "<b>". $materiaS1Lunes14['materia'] ."</b> </br>" . " ". $docenteS1Lunes14['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Lunes14['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Lunes14['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#15:00
@$S1Lunes15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Lunes', '15:00', '15:30');
@$idMateriaS1Lunes15 = $S1Lunes15['id_materia'];
@$materiaS1Lunes15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Lunes15 );
@$idDocenteS1Lunes15 = $S1Lunes15['id_docente'];
@$docenteS1Lunes15 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Lunes15 );
if(@$docenteS1Lunes15 == ""){

    @$respS1Lunes15 = "0";
}else{
    @$respS1Lunes15 = "<b>". $materiaS1Lunes15['materia'] ."</b> </br>" . " ". $docenteS1Lunes15['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Lunes15['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Lunes15['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#16:00
@$S1Lunes16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Lunes', '16:00', '16:30');
@$idMateriaS1Lunes16 = $S1Lunes16['id_materia'];
@$materiaS1Lunes16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Lunes16 );
@$idDocenteS1Lunes16 = $S1Lunes16['id_docente'];
@$docenteS1Lunes16 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Lunes16 );
if(@$docenteS1Lunes16 == ""){

    @$respS1Lunes16 = "0";
}else{
    @$respS1Lunes16 = "<b>". $materiaS1Lunes16['materia'] ."</b> </br>" . " ". $docenteS1Lunes16['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Lunes16['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Lunes16['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#17:00
@$S1Lunes17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Lunes', '17:00', '17:30');
@$idMateriaS1Lunes17 = $S1Lunes17['id_materia'];
@$materiaS1Lunes17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Lunes17 );
@$idDocenteS1Lunes17 = $S1Lunes17['id_docente'];
@$docenteS1Lunes17 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Lunes17 );
if(@$docenteS1Lunes17 == ""){

    @$respS1Lunes17 = "0";
}else{
    @$respS1Lunes17 = "<b>". $materiaS1Lunes17['materia'] ."</b> </br>" . " ". $docenteS1Lunes17['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Lunes17['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Lunes17['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}




/*=============================================
   S1 MARTES
=============================================*/

#8:00
@$S1Martes8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Martes', '08:00', '08:30');
@$idMateriaS1Martes8 = $S1Martes8['id_materia'];
@$materiaS1Martes8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Martes8 );
@$idDocenteS1Martes8 = $S1Martes8['id_docente'];
@$docenteS1Martes8 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Martes8 );

if(@$docenteS1Martes8 == ""){

    @$respS1Martes8 = "0";
}else{
    @$respS1Martes8 = "<b>". $materiaS1Martes8['materia'] ."</b> </br>" . " ". $docenteS1Martes8['nombre'] . '

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Martes8['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Martes8['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';	
 
}

#9:00
@$S1Martes9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Martes', '09:00', '09:30');
@$idMateriaS1Martes9 = $S1Martes9['id_materia'];
@$materiaS1Martes9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Martes9 );
@$idDocenteS1Martes9 = $S1Martes9['id_docente'];
@$docenteS1Martes9 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Martes9 );
if(@$docenteS1Martes9 == ""){

    @$respS1Martes9 = "0";
}else{
    @$respS1Martes9 = "<b>". $materiaS1Martes9['materia'] ."</b> </br>" . " ". $docenteS1Martes9['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Martes9['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Martes9['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';	
 
}

#10:00
@$S1Martes10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Martes', '10:00', '10:30');
@$idMateriaS1Martes10 = $S1Martes10['id_materia'];
@$materiaS1Martes10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Martes10 );
@$idDocenteS1Martes10 = $S1Martes10['id_docente'];
@$docenteS1Martes10 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Martes10 );
if(@$docenteS1Martes10 == ""){

    @$respS1Martes10 = "0";
}else{
    @$respS1Martes10 = "<b>". $materiaS1Martes10['materia'] ."</b> </br>" . " ". $docenteS1Martes10['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Martes10['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Martes10['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#11:00
@$S1Martes11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Martes', '11:00', '11:30');
@$idMateriaS1Martes11 = $S1Martes11['id_materia'];
@$materiaS1Martes11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Martes11 );
@$idDocenteS1Martes11 = $S1Martes11['id_docente'];
@$docenteS1Martes11 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Martes11 );
if(@$docenteS1Martes11 == ""){

    @$respS1Martes11 = "0";
}else{
    @$respS1Martes11 = "<b>". $materiaS1Martes11['materia'] ."</b> </br>" . " ". $docenteS1Martes11['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
    <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Martes11['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
    <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Martes11['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
</div>';
 
}

#12:00
@$S1Martes12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Martes', '12:00', '12:30');
@$idMateriaS1Martes12 = $S1Martes12['id_materia'];
@$materiaS1Martes12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Martes12 );
@$idDocenteS1Martes12 = $S1Martes12['id_docente'];
@$docenteS1Martes12 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Martes12 );
if(@$docenteS1Martes12 == ""){

    @$respS1Martes12 = "0";
}else{
    @$respS1Martes12 = "<b>". $materiaS1Martes12['materia'] ."</b> </br>" . " ". $docenteS1Martes12['nombre'] . '

    </br> <div class="btn-group btn-group-pill" role="group">
    <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Martes12['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
    <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Martes12['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
</div>';
 
}

#13:00
@$S1Martes13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Martes', '13:00', '13:30');
@$idMateriaS1Martes13 = $S1Martes13['id_materia'];
@$materiaS1Martes13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Martes13 );
@$idDocenteS1Martes13 = $S1Martes13['id_docente'];
@$docenteS1Martes13 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Martes13 );
if(@$docenteS1Martes13 == ""){

    @$respS1Martes13 = "0";
}else{
    @$respS1Martes13 = "<b>". $materiaS1Martes13['materia'] ."</b> </br>" . " ". $docenteS1Martes13['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Martes13['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Martes13['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#14:00
@$S1Martes14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Martes', '14:00', '14:30');
@$idMateriaS1Martes14 = $S1Martes14['id_materia'];
@$materiaS1Martes14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Martes14 );
@$idDocenteS1Martes14 = $S1Martes14['id_docente'];
@$docenteS1Martes14 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Martes14 );
if(@$docenteS1Martes14 == ""){

    @$respS1Martes14 = "0";
}else{
    @$respS1Martes14 = "<b>". $materiaS1Martes14['materia'] ."</b> </br>" . " ". $docenteS1Martes14['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Martes14['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Martes14['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#15:00
@$S1Martes15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Martes', '15:00', '15:30');
@$idMateriaS1Martes15 = $S1Martes15['id_materia'];
@$materiaS1Martes15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Martes15 );
@$idDocenteS1Martes15 = $S1Martes15['id_docente'];
@$docenteS1Martes15 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Martes15 );
if(@$docenteS1Martes15 == ""){

    @$respS1Martes15 = "0";
}else{
    @$respS1Martes15 = "<b>". $materiaS1Martes15['materia'] ."</b> </br>" . " ". $docenteS1Martes15['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Martes15['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Martes15['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#16:00
@$S1Martes16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Martes', '16:00', '16:30');
@$idMateriaS1Martes16 = $S1Martes16['id_materia'];
@$materiaS1Martes16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Martes16 );
@$idDocenteS1Martes16 = $S1Martes16['id_docente'];
@$docenteS1Martes16 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Martes16 );
if(@$docenteS1Martes16 == ""){

    @$respS1Martes16 = "0";
}else{
    @$respS1Martes16 = "<b>". $materiaS1Martes16['materia'] ."</b> </br>" . " ". $docenteS1Martes16['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Martes16['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Martes16['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#17:00
@$S1Martes17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Martes', '17:00', '17:30');
@$idMateriaS1Martes17 = $S1Martes17['id_materia'];
@$materiaS1Martes17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Martes17 );
@$idDocenteS1Martes17 = $S1Martes17['id_docente'];
@$docenteS1Martes17 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Martes17 );
if(@$docenteS1Martes17 == ""){

    @$respS1Martes17 = "0";
}else{
    @$respS1Martes17 = "<b>". $materiaS1Martes17['materia'] ."</b> </br>" . " ". $docenteS1Martes17['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Martes17['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Martes17['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}


/*=============================================
   S1 MIERCOLES
=============================================*/

#8:00
@$S1Miercoles8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Miercoles', '08:00', '08:30');
@$idMateriaS1Miercoles8 = $S1Miercoles8['id_materia'];
@$materiaS1Miercoles8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Miercoles8 );
@$idDocenteS1Miercoles8 = $S1Miercoles8['id_docente'];
@$docenteS1Miercoles8 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Miercoles8 );

if(@$docenteS1Miercoles8 == ""){

    @$respS1Miercoles8 = "0";
}else{
    @$respS1Miercoles8 = "<b>". $materiaS1Miercoles8['materia'] ."</b> </br>" . " ". $docenteS1Miercoles8['nombre'] . '

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Miercoles8['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Miercoles8['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';	
 
}

#9:00
@$S1Miercoles9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Miercoles', '09:00', '09:30');
@$idMateriaS1Miercoles9 = $S1Miercoles9['id_materia'];
@$materiaS1Miercoles9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Miercoles9 );
@$idDocenteS1Miercoles9 = $S1Miercoles9['id_docente'];
@$docenteS1Miercoles9 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Miercoles9 );
if(@$docenteS1Miercoles9 == ""){

    @$respS1Miercoles9 = "0";
}else{
    @$respS1Miercoles9 = "<b>". $materiaS1Miercoles9['materia'] ."</b> </br>" . " ". $docenteS1Miercoles9['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Miercoles9['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Miercoles9['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';	
 
}

#10:00
@$S1Miercoles10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Miercoles', '10:00', '10:30');
@$idMateriaS1Miercoles10 = $S1Miercoles10['id_materia'];
@$materiaS1Miercoles10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Miercoles10 );
@$idDocenteS1Miercoles10 = $S1Miercoles10['id_docente'];
@$docenteS1Miercoles10 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Miercoles10 );
if(@$docenteS1Miercoles10 == ""){

    @$respS1Miercoles10 = "0";
}else{
    @$respS1Miercoles10 = "<b>". $materiaS1Miercoles10['materia'] ."</b> </br>" . " ". $docenteS1Miercoles10['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Miercoles10['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Miercoles10['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#11:00
@$S1Miercoles11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Miercoles', '11:00', '11:30');
@$idMateriaS1Miercoles11 = $S1Miercoles11['id_materia'];
@$materiaS1Miercoles11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Miercoles11 );
@$idDocenteS1Miercoles11 = $S1Miercoles11['id_docente'];
@$docenteS1Miercoles11 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Miercoles11 );
if(@$docenteS1Miercoles11 == ""){

    @$respS1Miercoles11 = "0";
}else{
    @$respS1Miercoles11 = "<b>". $materiaS1Miercoles11['materia'] ."</b> </br>" . " ". $docenteS1Miercoles11['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
    <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Miercoles11['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
    <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Miercoles11['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
</div>';
 
}

#12:00
@$S1Miercoles12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Miercoles', '12:00', '12:30');
@$idMateriaS1Miercoles12 = $S1Miercoles12['id_materia'];
@$materiaS1Miercoles12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Miercoles12 );
@$idDocenteS1Miercoles12 = $S1Miercoles12['id_docente'];
@$docenteS1Miercoles12 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Miercoles12 );
if(@$docenteS1Miercoles12 == ""){

    @$respS1Miercoles12 = "0";
}else{
    @$respS1Miercoles12 = "<b>". $materiaS1Miercoles12['materia'] ."</b> </br>" . " ". $docenteS1Miercoles12['nombre'] . '

    </br> <div class="btn-group btn-group-pill" role="group">
    <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Miercoles12['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
    <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Miercoles12['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
</div>';
 
}

#13:00
@$S1Miercoles13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Miercoles', '13:00', '13:30');
@$idMateriaS1Miercoles13 = $S1Miercoles13['id_materia'];
@$materiaS1Miercoles13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Miercoles13 );
@$idDocenteS1Miercoles13 = $S1Miercoles13['id_docente'];
@$docenteS1Miercoles13 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Miercoles13 );
if(@$docenteS1Miercoles13 == ""){

    @$respS1Miercoles13 = "0";
}else{
    @$respS1Miercoles13 = "<b>". $materiaS1Miercoles13['materia'] ."</b> </br>" . " ". $docenteS1Miercoles13['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Miercoles13['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Miercoles13['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#14:00
@$S1Miercoles14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Miercoles', '14:00', '14:30');
@$idMateriaS1Miercoles14 = $S1Miercoles14['id_materia'];
@$materiaS1Miercoles14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Miercoles14 );
@$idDocenteS1Miercoles14 = $S1Miercoles14['id_docente'];
@$docenteS1Miercoles14 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Miercoles14 );
if(@$docenteS1Miercoles14 == ""){

    @$respS1Miercoles14 = "0";
}else{
    @$respS1Miercoles14 = "<b>". $materiaS1Miercoles14['materia'] ."</b> </br>" . " ". $docenteS1Miercoles14['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Miercoles14['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Miercoles14['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#15:00
@$S1Miercoles15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Miercoles', '15:00', '15:30');
@$idMateriaS1Miercoles15 = $S1Miercoles15['id_materia'];
@$materiaS1Miercoles15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Miercoles15 );
@$idDocenteS1Miercoles15 = $S1Miercoles15['id_docente'];
@$docenteS1Miercoles15 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Miercoles15 );
if(@$docenteS1Miercoles15 == ""){

    @$respS1Miercoles15 = "0";
}else{
    @$respS1Miercoles15 = "<b>". $materiaS1Miercoles15['materia'] ."</b> </br>" . " ". $docenteS1Miercoles15['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Miercoles15['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Miercoles15['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#16:00
@$S1Miercoles16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Miercoles', '16:00', '16:30');
@$idMateriaS1Miercoles16 = $S1Miercoles16['id_materia'];
@$materiaS1Miercoles16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Miercoles16 );
@$idDocenteS1Miercoles16 = $S1Miercoles16['id_docente'];
@$docenteS1Miercoles16 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Miercoles16 );
if(@$docenteS1Miercoles16 == ""){

    @$respS1Miercoles16 = "0";
}else{
    @$respS1Miercoles16 = "<b>". $materiaS1Miercoles16['materia'] ."</b> </br>" . " ". $docenteS1Miercoles16['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Miercoles16['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Miercoles16['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#17:00
@$S1Miercoles17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Miercoles', '17:00', '17:30');
@$idMateriaS1Miercoles17 = $S1Miercoles17['id_materia'];
@$materiaS1Miercoles17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Miercoles17 );
@$idDocenteS1Miercoles17 = $S1Miercoles17['id_docente'];
@$docenteS1Miercoles17 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Miercoles17 );
if(@$docenteS1Miercoles17 == ""){

    @$respS1Miercoles17 = "0";
}else{
    @$respS1Miercoles17 = "<b>". $materiaS1Miercoles17['materia'] ."</b> </br>" . " ". $docenteS1Miercoles17['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Miercoles17['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Miercoles17['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}


/*=============================================
   S1 JUEVES
=============================================*/

#8:00
@$S1Jueves8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Jueves', '08:00', '08:30');
@$idMateriaS1Jueves8 = $S1Jueves8['id_materia'];
@$materiaS1Jueves8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Jueves8 );
@$idDocenteS1Jueves8 = $S1Jueves8['id_docente'];
@$docenteS1Jueves8 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Jueves8 );

if(@$docenteS1Jueves8 == ""){

    @$respS1Jueves8 = "0";
}else{
    @$respS1Jueves8 = "<b>". $materiaS1Jueves8['materia'] ."</b> </br>" . " ". $docenteS1Jueves8['nombre'] . '

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Jueves8['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Jueves8['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';	
 
}

#9:00
@$S1Jueves9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Jueves', '09:00', '09:30');
@$idMateriaS1Jueves9 = $S1Jueves9['id_materia'];
@$materiaS1Jueves9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Jueves9 );
@$idDocenteS1Jueves9 = $S1Jueves9['id_docente'];
@$docenteS1Jueves9 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Jueves9 );
if(@$docenteS1Jueves9 == ""){

    @$respS1Jueves9 = "0";
}else{
    @$respS1Jueves9 = "<b>". $materiaS1Jueves9['materia'] ."</b> </br>" . " ". $docenteS1Jueves9['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Jueves9['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Jueves9['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';	
 
}

#10:00
@$S1Jueves10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Jueves', '10:00', '10:30');
@$idMateriaS1Jueves10 = $S1Jueves10['id_materia'];
@$materiaS1Jueves10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Jueves10 );
@$idDocenteS1Jueves10 = $S1Jueves10['id_docente'];
@$docenteS1Jueves10 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Jueves10 );
if(@$docenteS1Jueves10 == ""){

    @$respS1Jueves10 = "0";
}else{
    @$respS1Jueves10 = "<b>". $materiaS1Jueves10['materia'] ."</b> </br>" . " ". $docenteS1Jueves10['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Jueves10['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Jueves10['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#11:00
@$S1Jueves11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Jueves', '11:00', '11:30');
@$idMateriaS1Jueves11 = $S1Jueves11['id_materia'];
@$materiaS1Jueves11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Jueves11 );
@$idDocenteS1Jueves11 = $S1Jueves11['id_docente'];
@$docenteS1Jueves11 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Jueves11 );
if(@$docenteS1Jueves11 == ""){

    @$respS1Jueves11 = "0";
}else{
    @$respS1Jueves11 = "<b>". $materiaS1Jueves11['materia'] ."</b> </br>" . " ". $docenteS1Jueves11['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
    <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Jueves11['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
    <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Jueves11['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
</div>';
 
}

#12:00
@$S1Jueves12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Jueves', '12:00', '12:30');
@$idMateriaS1Jueves12 = $S1Jueves12['id_materia'];
@$materiaS1Jueves12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Jueves12 );
@$idDocenteS1Jueves12 = $S1Jueves12['id_docente'];
@$docenteS1Jueves12 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Jueves12 );
if(@$docenteS1Jueves12 == ""){

    @$respS1Jueves12 = "0";
}else{
    @$respS1Jueves12 = "<b>". $materiaS1Jueves12['materia'] ."</b> </br>" . " ". $docenteS1Jueves12['nombre'] . '

    </br> <div class="btn-group btn-group-pill" role="group">
    <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Jueves12['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
    <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Jueves12['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
</div>';
 
}

#13:00
@$S1Jueves13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Jueves', '13:00', '13:30');
@$idMateriaS1Jueves13 = $S1Jueves13['id_materia'];
@$materiaS1Jueves13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Jueves13 );
@$idDocenteS1Jueves13 = $S1Jueves13['id_docente'];
@$docenteS1Jueves13 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Jueves13 );
if(@$docenteS1Jueves13 == ""){

    @$respS1Jueves13 = "0";
}else{
    @$respS1Jueves13 = "<b>". $materiaS1Jueves13['materia'] ."</b> </br>" . " ". $docenteS1Jueves13['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Jueves13['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Jueves13['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#14:00
@$S1Jueves14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Jueves', '14:00', '14:30');
@$idMateriaS1Jueves14 = $S1Jueves14['id_materia'];
@$materiaS1Jueves14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Jueves14 );
@$idDocenteS1Jueves14 = $S1Jueves14['id_docente'];
@$docenteS1Jueves14 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Jueves14 );
if(@$docenteS1Jueves14 == ""){

    @$respS1Jueves14 = "0";
}else{
    @$respS1Jueves14 = "<b>". $materiaS1Jueves14['materia'] ."</b> </br>" . " ". $docenteS1Jueves14['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Jueves14['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Jueves14['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#15:00
@$S1Jueves15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Jueves', '15:00', '15:30');
@$idMateriaS1Jueves15 = $S1Jueves15['id_materia'];
@$materiaS1Jueves15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Jueves15 );
@$idDocenteS1Jueves15 = $S1Jueves15['id_docente'];
@$docenteS1Jueves15 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Jueves15 );
if(@$docenteS1Jueves15 == ""){

    @$respS1Jueves15 = "0";
}else{
    @$respS1Jueves15 = "<b>". $materiaS1Jueves15['materia'] ."</b> </br>" . " ". $docenteS1Jueves15['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Jueves15['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Jueves15['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#16:00
@$S1Jueves16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Jueves', '16:00', '16:30');
@$idMateriaS1Jueves16 = $S1Jueves16['id_materia'];
@$materiaS1Jueves16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Jueves16 );
@$idDocenteS1Jueves16 = $S1Jueves16['id_docente'];
@$docenteS1Jueves16 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Jueves16 );
if(@$docenteS1Jueves16 == ""){

    @$respS1Jueves16 = "0";
}else{
    @$respS1Jueves16 = "<b>". $materiaS1Jueves16['materia'] ."</b> </br>" . " ". $docenteS1Jueves16['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Jueves16['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Jueves16['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#17:00
@$S1Jueves17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Jueves', '17:00', '17:30');
@$idMateriaS1Jueves17 = $S1Jueves17['id_materia'];
@$materiaS1Jueves17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Jueves17 );
@$idDocenteS1Jueves17 = $S1Jueves17['id_docente'];
@$docenteS1Jueves17 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Jueves17 );
if(@$docenteS1Jueves17 == ""){

    @$respS1Jueves17 = "0";
}else{
    @$respS1Jueves17 = "<b>". $materiaS1Jueves17['materia'] ."</b> </br>" . " ". $docenteS1Jueves17['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Jueves17['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Jueves17['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}


/*=============================================
   S1 VIERNES
=============================================*/

#8:00
@$S1Viernes8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Viernes', '08:00', '08:30');
@$idMateriaS1Viernes8 = $S1Viernes8['id_materia'];
@$materiaS1Viernes8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Viernes8 );
@$idDocenteS1Viernes8 = $S1Viernes8['id_docente'];
@$docenteS1Viernes8 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Viernes8 );

if(@$docenteS1Viernes8 == ""){

    @$respS1Viernes8 = "0";
}else{
    @$respS1Viernes8 = "<b>". $materiaS1Viernes8['materia'] ."</b> </br>" . " ". $docenteS1Viernes8['nombre'] . '

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Viernes8['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Viernes8['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';	
 
}

#9:00
@$S1Viernes9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Viernes', '09:00', '09:30');
@$idMateriaS1Viernes9 = $S1Viernes9['id_materia'];
@$materiaS1Viernes9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Viernes9 );
@$idDocenteS1Viernes9 = $S1Viernes9['id_docente'];
@$docenteS1Viernes9 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Viernes9 );
if(@$docenteS1Viernes9 == ""){

    @$respS1Viernes9 = "0";
}else{
    @$respS1Viernes9 = "<b>". $materiaS1Viernes9['materia'] ."</b> </br>" . " ". $docenteS1Viernes9['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Viernes9['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Viernes9['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';	
 
}

#10:00
@$S1Viernes10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Viernes', '10:00', '10:30');
@$idMateriaS1Viernes10 = $S1Viernes10['id_materia'];
@$materiaS1Viernes10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Viernes10 );
@$idDocenteS1Viernes10 = $S1Viernes10['id_docente'];
@$docenteS1Viernes10 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Viernes10 );
if(@$docenteS1Viernes10 == ""){

    @$respS1Viernes10 = "0";
}else{
    @$respS1Viernes10 = "<b>". $materiaS1Viernes10['materia'] ."</b> </br>" . " ". $docenteS1Viernes10['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Viernes10['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Viernes10['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#11:00
@$S1Viernes11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Viernes', '11:00', '11:30');
@$idMateriaS1Viernes11 = $S1Viernes11['id_materia'];
@$materiaS1Viernes11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Viernes11 );
@$idDocenteS1Viernes11 = $S1Viernes11['id_docente'];
@$docenteS1Viernes11 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Viernes11 );
if(@$docenteS1Viernes11 == ""){

    @$respS1Viernes11 = "0";
}else{
    @$respS1Viernes11 = "<b>". $materiaS1Viernes11['materia'] ."</b> </br>" . " ". $docenteS1Viernes11['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
    <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Viernes11['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
    <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Viernes11['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
</div>';
 
}

#12:00
@$S1Viernes12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Viernes', '12:00', '12:30');
@$idMateriaS1Viernes12 = $S1Viernes12['id_materia'];
@$materiaS1Viernes12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Viernes12 );
@$idDocenteS1Viernes12 = $S1Viernes12['id_docente'];
@$docenteS1Viernes12 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Viernes12 );
if(@$docenteS1Viernes12 == ""){

    @$respS1Viernes12 = "0";
}else{
    @$respS1Viernes12 = "<b>". $materiaS1Viernes12['materia'] ."</b> </br>" . " ". $docenteS1Viernes12['nombre'] . '

    </br> <div class="btn-group btn-group-pill" role="group">
    <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Viernes12['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
    <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Viernes12['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
</div>';
 
}

#13:00
@$S1Viernes13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Viernes', '13:00', '13:30');
@$idMateriaS1Viernes13 = $S1Viernes13['id_materia'];
@$materiaS1Viernes13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Viernes13 );
@$idDocenteS1Viernes13 = $S1Viernes13['id_docente'];
@$docenteS1Viernes13 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Viernes13 );
if(@$docenteS1Viernes13 == ""){

    @$respS1Viernes13 = "0";
}else{
    @$respS1Viernes13 = "<b>". $materiaS1Viernes13['materia'] ."</b> </br>" . " ". $docenteS1Viernes13['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Viernes13['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Viernes13['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#14:00
@$S1Viernes14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Viernes', '14:00', '14:30');
@$idMateriaS1Viernes14 = $S1Viernes14['id_materia'];
@$materiaS1Viernes14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Viernes14 );
@$idDocenteS1Viernes14 = $S1Viernes14['id_docente'];
@$docenteS1Viernes14 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Viernes14 );
if(@$docenteS1Viernes14 == ""){

    @$respS1Viernes14 = "0";
}else{
    @$respS1Viernes14 = "<b>". $materiaS1Viernes14['materia'] ."</b> </br>" . " ". $docenteS1Viernes14['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Viernes14['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Viernes14['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#15:00
@$S1Viernes15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Viernes', '15:00', '15:30');
@$idMateriaS1Viernes15 = $S1Viernes15['id_materia'];
@$materiaS1Viernes15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Viernes15 );
@$idDocenteS1Viernes15 = $S1Viernes15['id_docente'];
@$docenteS1Viernes15 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Viernes15 );
if(@$docenteS1Viernes15 == ""){

    @$respS1Viernes15 = "0";
}else{
    @$respS1Viernes15 = "<b>". $materiaS1Viernes15['materia'] ."</b> </br>" . " ". $docenteS1Viernes15['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Viernes15['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Viernes15['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#16:00
@$S1Viernes16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Viernes', '16:00', '16:30');
@$idMateriaS1Viernes16 = $S1Viernes16['id_materia'];
@$materiaS1Viernes16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Viernes16 );
@$idDocenteS1Viernes16 = $S1Viernes16['id_docente'];
@$docenteS1Viernes16 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Viernes16 );
if(@$docenteS1Viernes16 == ""){

    @$respS1Viernes16 = "0";
}else{
    @$respS1Viernes16 = "<b>". $materiaS1Viernes16['materia'] ."</b> </br>" . " ". $docenteS1Viernes16['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Viernes16['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Viernes16['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}

#17:00
@$S1Viernes17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Viernes', '17:00', '17:30');
@$idMateriaS1Viernes17 = $S1Viernes17['id_materia'];
@$materiaS1Viernes17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Viernes17 );
@$idDocenteS1Viernes17 = $S1Viernes17['id_docente'];
@$docenteS1Viernes17 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS1Viernes17 );
if(@$docenteS1Viernes17 == ""){

    @$respS1Viernes17 = "0";
}else{
    @$respS1Viernes17 = "<b>". $materiaS1Viernes17['materia'] ."</b> </br>" . " ". $docenteS1Viernes17['nombre'] .'

    </br> <div class="btn-group btn-group-pill" role="group">
        <button class="btn btn-warning editarS1" idHorarioS1 ="'.$S1Viernes17['id'].'" type="button" data-bs-toggle="modal" data-bs-target="#editarS1" data-whatever="@getbootstrap"><i data-feather="edit"></i></button>
        <button class="btn btn-danger eliminarS1" idHorarioS1 ="'.$S1Viernes17['id'].'" type="button" data-bs-original-title="" title=""><i data-feather="delete"></i></button>
    </div>';
 
}


?>