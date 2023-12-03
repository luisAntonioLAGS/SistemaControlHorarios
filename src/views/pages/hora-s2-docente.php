<?php


/*=============================================
  S2 LUNES
=============================================*/

#8:00
@$S2Lunes8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Lunes', '08:00', '08:30');
@$idMateriaS2Lunes8 = $S2Lunes8['id_materia'];
@$materiaS2Lunes8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Lunes8 );
@$idDocenteS2Lunes8 = $S2Lunes8['id_docente'];
@$docenteS2Lunes8 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Lunes8 );

if(@$docenteS2Lunes8 == ""){

    @$respS2Lunes8 = "0";
}else{
    @$respS2Lunes8 = "<b>". $materiaS2Lunes8['materia'] ."</b> </br>" . " ". $docenteS2Lunes8['nombre'];
 
}

#9:00
@$S2Lunes9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Lunes', '09:00', '09:30');
@$idMateriaS2Lunes9 = $S2Lunes9['id_materia'];
@$materiaS2Lunes9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Lunes9 );
@$idDocenteS2Lunes9 = $S2Lunes9['id_docente'];
@$docenteS2Lunes9 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Lunes9 );
if(@$docenteS2Lunes9 == ""){

    @$respS2Lunes9 = "0";
}else{
    @$respS2Lunes9 = "<b>". $materiaS2Lunes9['materia'] ."</b> </br>" . " ". $docenteS2Lunes9['nombre'];
 
}

#10:00
@$S2Lunes10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Lunes', '10:00', '10:30');
@$idMateriaS2Lunes10 = $S2Lunes10['id_materia'];
@$materiaS2Lunes10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Lunes10 );
@$idDocenteS2Lunes10 = $S2Lunes10['id_docente'];
@$docenteS2Lunes10 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Lunes10 );
if(@$docenteS2Lunes10 == ""){

    @$respS2Lunes10 = "0";
}else{
    @$respS2Lunes10 = "<b>". $materiaS2Lunes10['materia'] ."</b> </br>" . " ". $docenteS2Lunes10['nombre'];
 
}

#11:00
@$S2Lunes11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Lunes', '11:00', '11:30');
@$idMateriaS2Lunes11 = $S2Lunes11['id_materia'];
@$materiaS2Lunes11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Lunes11 );
@$idDocenteS2Lunes11 = $S2Lunes11['id_docente'];
@$docenteS2Lunes11 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Lunes11 );
if(@$docenteS2Lunes11 == ""){

    @$respS2Lunes11 = "0";
}else{
    @$respS2Lunes11 = "<b>". $materiaS2Lunes11['materia'] ."</b> </br>" . " ". $docenteS2Lunes11['nombre'];
 
}

#12:00
@$S2Lunes12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Lunes', '12:00', '12:30');
@$idMateriaS2Lunes12 = $S2Lunes12['id_materia'];
@$materiaS2Lunes12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Lunes12 );
@$idDocenteS2Lunes12 = $S2Lunes12['id_docente'];
@$docenteS2Lunes12 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Lunes12 );
if(@$docenteS2Lunes12 == ""){

    @$respS2Lunes12 = "0";
}else{
    @$respS2Lunes12 = "<b>". $materiaS2Lunes12['materia'] ."</b> </br>" . " ". $docenteS2Lunes12['nombre'];
 
}

#13:00
@$S2Lunes13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Lunes', '13:00', '13:30');
@$idMateriaS2Lunes13 = $S2Lunes13['id_materia'];
@$materiaS2Lunes13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Lunes13 );
@$idDocenteS2Lunes13 = $S2Lunes13['id_docente'];
@$docenteS2Lunes13 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Lunes13 );
if(@$docenteS2Lunes13 == ""){

    @$respS2Lunes13 = "0";
}else{
    @$respS2Lunes13 = "<b>". $materiaS2Lunes13['materia'] ."</b> </br>" . " ". $docenteS2Lunes13['nombre'];
 
}

#14:00
@$S2Lunes14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Lunes', '14:00', '14:30');
@$idMateriaS2Lunes14 = $S2Lunes14['id_materia'];
@$materiaS2Lunes14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Lunes14 );
@$idDocenteS2Lunes14 = $S2Lunes14['id_docente'];
@$docenteS2Lunes14 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Lunes14 );
if(@$docenteS2Lunes14 == ""){

    @$respS2Lunes14 = "0";
}else{
    @$respS2Lunes14 = "<b>". $materiaS2Lunes14['materia'] ."</b> </br>" . " ". $docenteS2Lunes14['nombre'];
 
}

#15:00
@$S2Lunes15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Lunes', '15:00', '15:30');
@$idMateriaS2Lunes15 = $S2Lunes15['id_materia'];
@$materiaS2Lunes15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Lunes15 );
@$idDocenteS2Lunes15 = $S2Lunes15['id_docente'];
@$docenteS2Lunes15 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Lunes15 );
if(@$docenteS2Lunes15 == ""){

    @$respS2Lunes15 = "0";
}else{
    @$respS2Lunes15 = "<b>". $materiaS2Lunes15['materia'] ."</b> </br>" . " ". $docenteS2Lunes15['nombre'];
 
}

#16:00
@$S2Lunes16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Lunes', '16:00', '16:30');
@$idMateriaS2Lunes16 = $S2Lunes16['id_materia'];
@$materiaS2Lunes16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Lunes16 );
@$idDocenteS2Lunes16 = $S2Lunes16['id_docente'];
@$docenteS2Lunes16 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Lunes16 );
if(@$docenteS2Lunes16 == ""){

    @$respS2Lunes16 = "0";
}else{
    @$respS2Lunes16 = "<b>". $materiaS2Lunes16['materia'] ."</b> </br>" . " ". $docenteS2Lunes16['nombre'];
 
}

#17:00
@$S2Lunes17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Lunes', '17:00', '17:30');
@$idMateriaS2Lunes17 = $S2Lunes17['id_materia'];
@$materiaS2Lunes17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Lunes17 );
@$idDocenteS2Lunes17 = $S2Lunes17['id_docente'];
@$docenteS2Lunes17 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Lunes17 );
if(@$docenteS2Lunes17 == ""){

    @$respS2Lunes17 = "0";
}else{
    @$respS2Lunes17 = "<b>". $materiaS2Lunes17['materia'] ."</b> </br>" . " ". $docenteS2Lunes17['nombre'];
 
}




/*=============================================
   S2 MARTES
=============================================*/

#8:00
@$S2Martes8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Martes', '08:00', '08:30');
@$idMateriaS2Martes8 = $S2Martes8['id_materia'];
@$materiaS2Martes8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Martes8 );
@$idDocenteS2Martes8 = $S2Martes8['id_docente'];
@$docenteS2Martes8 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Martes8 );

if(@$docenteS2Martes8 == ""){

    @$respS2Martes8 = "0";
}else{
    @$respS2Martes8 = "<b>". $materiaS2Martes8['materia'] ."</b> </br>" . " ". $docenteS2Martes8['nombre'];	
 
}

#9:00
@$S2Martes9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Martes', '09:00', '09:30');
@$idMateriaS2Martes9 = $S2Martes9['id_materia'];
@$materiaS2Martes9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Martes9 );
@$idDocenteS2Martes9 = $S2Martes9['id_docente'];
@$docenteS2Martes9 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Martes9 );
if(@$docenteS2Martes9 == ""){

    @$respS2Martes9 = "0";
}else{
    @$respS2Martes9 = "<b>". $materiaS2Martes9['materia'] ."</b> </br>" . " ". $docenteS2Martes9['nombre'];	
 
}

#10:00
@$S2Martes10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Martes', '10:00', '10:30');
@$idMateriaS2Martes10 = $S2Martes10['id_materia'];
@$materiaS2Martes10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Martes10 );
@$idDocenteS2Martes10 = $S2Martes10['id_docente'];
@$docenteS2Martes10 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Martes10 );
if(@$docenteS2Martes10 == ""){

    @$respS2Martes10 = "0";
}else{
    @$respS2Martes10 = "<b>". $materiaS2Martes10['materia'] ."</b> </br>" . " ". $docenteS2Martes10['nombre'];
 
}

#11:00
@$S2Martes11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Martes', '11:00', '11:30');
@$idMateriaS2Martes11 = $S2Martes11['id_materia'];
@$materiaS2Martes11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Martes11 );
@$idDocenteS2Martes11 = $S2Martes11['id_docente'];
@$docenteS2Martes11 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Martes11 );
if(@$docenteS2Martes11 == ""){

    @$respS2Martes11 = "0";
}else{
    @$respS2Martes11 = "<b>". $materiaS2Martes11['materia'] ."</b> </br>" . " ". $docenteS2Martes11['nombre'];
 
}

#12:00
@$S2Martes12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Martes', '12:00', '12:30');
@$idMateriaS2Martes12 = $S2Martes12['id_materia'];
@$materiaS2Martes12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Martes12 );
@$idDocenteS2Martes12 = $S2Martes12['id_docente'];
@$docenteS2Martes12 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Martes12 );
if(@$docenteS2Martes12 == ""){

    @$respS2Martes12 = "0";
}else{
    @$respS2Martes12 = "<b>". $materiaS2Martes12['materia'] ."</b> </br>" . " ". $docenteS2Martes12['nombre'];
 
}

#13:00
@$S2Martes13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Martes', '13:00', '13:30');
@$idMateriaS2Martes13 = $S2Martes13['id_materia'];
@$materiaS2Martes13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Martes13 );
@$idDocenteS2Martes13 = $S2Martes13['id_docente'];
@$docenteS2Martes13 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Martes13 );
if(@$docenteS2Martes13 == ""){

    @$respS2Martes13 = "0";
}else{
    @$respS2Martes13 = "<b>". $materiaS2Martes13['materia'] ."</b> </br>" . " ". $docenteS2Martes13['nombre'];
 
}

#14:00
@$S2Martes14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Martes', '14:00', '14:30');
@$idMateriaS2Martes14 = $S2Martes14['id_materia'];
@$materiaS2Martes14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Martes14 );
@$idDocenteS2Martes14 = $S2Martes14['id_docente'];
@$docenteS2Martes14 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Martes14 );
if(@$docenteS2Martes14 == ""){

    @$respS2Martes14 = "0";
}else{
    @$respS2Martes14 = "<b>". $materiaS2Martes14['materia'] ."</b> </br>" . " ". $docenteS2Martes14['nombre'];
 
}

#15:00
@$S2Martes15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Martes', '15:00', '15:30');
@$idMateriaS2Martes15 = $S2Martes15['id_materia'];
@$materiaS2Martes15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Martes15 );
@$idDocenteS2Martes15 = $S2Martes15['id_docente'];
@$docenteS2Martes15 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Martes15 );
if(@$docenteS2Martes15 == ""){

    @$respS2Martes15 = "0";
}else{
    @$respS2Martes15 = "<b>". $materiaS2Martes15['materia'] ."</b> </br>" . " ". $docenteS2Martes15['nombre'];
 
}

#16:00
@$S2Martes16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Martes', '16:00', '16:30');
@$idMateriaS2Martes16 = $S2Martes16['id_materia'];
@$materiaS2Martes16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Martes16 );
@$idDocenteS2Martes16 = $S2Martes16['id_docente'];
@$docenteS2Martes16 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Martes16 );
if(@$docenteS2Martes16 == ""){

    @$respS2Martes16 = "0";
}else{
    @$respS2Martes16 = "<b>". $materiaS2Martes16['materia'] ."</b> </br>" . " ". $docenteS2Martes16['nombre'];
 
}

#17:00
@$S2Martes17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Martes', '17:00', '17:30');
@$idMateriaS2Martes17 = $S2Martes17['id_materia'];
@$materiaS2Martes17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Martes17 );
@$idDocenteS2Martes17 = $S2Martes17['id_docente'];
@$docenteS2Martes17 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Martes17 );
if(@$docenteS2Martes17 == ""){

    @$respS2Martes17 = "0";
}else{
    @$respS2Martes17 = "<b>". $materiaS2Martes17['materia'] ."</b> </br>" . " ". $docenteS2Martes17['nombre'];
 
}


/*=============================================
   S2 MIERCOLES
=============================================*/

#8:00
@$S2Miercoles8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Miercoles', '08:00', '08:30');
@$idMateriaS2Miercoles8 = $S2Miercoles8['id_materia'];
@$materiaS2Miercoles8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Miercoles8 );
@$idDocenteS2Miercoles8 = $S2Miercoles8['id_docente'];
@$docenteS2Miercoles8 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Miercoles8 );

if(@$docenteS2Miercoles8 == ""){

    @$respS2Miercoles8 = "0";
}else{
    @$respS2Miercoles8 = "<b>". $materiaS2Miercoles8['materia'] ."</b> </br>" . " ". $docenteS2Miercoles8['nombre'];	
 
}

#9:00
@$S2Miercoles9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Miercoles', '09:00', '09:30');
@$idMateriaS2Miercoles9 = $S2Miercoles9['id_materia'];
@$materiaS2Miercoles9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Miercoles9 );
@$idDocenteS2Miercoles9 = $S2Miercoles9['id_docente'];
@$docenteS2Miercoles9 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Miercoles9 );
if(@$docenteS2Miercoles9 == ""){

    @$respS2Miercoles9 = "0";
}else{
    @$respS2Miercoles9 = "<b>". $materiaS2Miercoles9['materia'] ."</b> </br>" . " ". $docenteS2Miercoles9['nombre'];	
 
}

#10:00
@$S2Miercoles10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Miercoles', '10:00', '10:30');
@$idMateriaS2Miercoles10 = $S2Miercoles10['id_materia'];
@$materiaS2Miercoles10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Miercoles10 );
@$idDocenteS2Miercoles10 = $S2Miercoles10['id_docente'];
@$docenteS2Miercoles10 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Miercoles10 );
if(@$docenteS2Miercoles10 == ""){

    @$respS2Miercoles10 = "0";
}else{
    @$respS2Miercoles10 = "<b>". $materiaS2Miercoles10['materia'] ."</b> </br>" . " ". $docenteS2Miercoles10['nombre'];
 
}

#11:00
@$S2Miercoles11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Miercoles', '11:00', '11:30');
@$idMateriaS2Miercoles11 = $S2Miercoles11['id_materia'];
@$materiaS2Miercoles11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Miercoles11 );
@$idDocenteS2Miercoles11 = $S2Miercoles11['id_docente'];
@$docenteS2Miercoles11 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Miercoles11 );
if(@$docenteS2Miercoles11 == ""){

    @$respS2Miercoles11 = "0";
}else{
    @$respS2Miercoles11 = "<b>". $materiaS2Miercoles11['materia'] ."</b> </br>" . " ". $docenteS2Miercoles11['nombre'];
 
}

#12:00
@$S2Miercoles12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Miercoles', '12:00', '12:30');
@$idMateriaS2Miercoles12 = $S2Miercoles12['id_materia'];
@$materiaS2Miercoles12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Miercoles12 );
@$idDocenteS2Miercoles12 = $S2Miercoles12['id_docente'];
@$docenteS2Miercoles12 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Miercoles12 );
if(@$docenteS2Miercoles12 == ""){

    @$respS2Miercoles12 = "0";
}else{
    @$respS2Miercoles12 = "<b>". $materiaS2Miercoles12['materia'] ."</b> </br>" . " ". $docenteS2Miercoles12['nombre'];
 
}

#13:00
@$S2Miercoles13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Miercoles', '13:00', '13:30');
@$idMateriaS2Miercoles13 = $S2Miercoles13['id_materia'];
@$materiaS2Miercoles13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Miercoles13 );
@$idDocenteS2Miercoles13 = $S2Miercoles13['id_docente'];
@$docenteS2Miercoles13 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Miercoles13 );
if(@$docenteS2Miercoles13 == ""){

    @$respS2Miercoles13 = "0";
}else{
    @$respS2Miercoles13 = "<b>". $materiaS2Miercoles13['materia'] ."</b> </br>" . " ". $docenteS2Miercoles13['nombre'];
 
}

#14:00
@$S2Miercoles14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Miercoles', '14:00', '14:30');
@$idMateriaS2Miercoles14 = $S2Miercoles14['id_materia'];
@$materiaS2Miercoles14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Miercoles14 );
@$idDocenteS2Miercoles14 = $S2Miercoles14['id_docente'];
@$docenteS2Miercoles14 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Miercoles14 );
if(@$docenteS2Miercoles14 == ""){

    @$respS2Miercoles14 = "0";
}else{
    @$respS2Miercoles14 = "<b>". $materiaS2Miercoles14['materia'] ."</b> </br>" . " ". $docenteS2Miercoles14['nombre'];
 
}

#15:00
@$S2Miercoles15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Miercoles', '15:00', '15:30');
@$idMateriaS2Miercoles15 = $S2Miercoles15['id_materia'];
@$materiaS2Miercoles15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Miercoles15 );
@$idDocenteS2Miercoles15 = $S2Miercoles15['id_docente'];
@$docenteS2Miercoles15 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Miercoles15 );
if(@$docenteS2Miercoles15 == ""){

    @$respS2Miercoles15 = "0";
}else{
    @$respS2Miercoles15 = "<b>". $materiaS2Miercoles15['materia'] ."</b> </br>" . " ". $docenteS2Miercoles15['nombre'];
 
}

#16:00
@$S2Miercoles16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Miercoles', '16:00', '16:30');
@$idMateriaS2Miercoles16 = $S2Miercoles16['id_materia'];
@$materiaS2Miercoles16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Miercoles16 );
@$idDocenteS2Miercoles16 = $S2Miercoles16['id_docente'];
@$docenteS2Miercoles16 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Miercoles16 );
if(@$docenteS2Miercoles16 == ""){

    @$respS2Miercoles16 = "0";
}else{
    @$respS2Miercoles16 = "<b>". $materiaS2Miercoles16['materia'] ."</b> </br>" . " ". $docenteS2Miercoles16['nombre'];
 
}

#17:00
@$S2Miercoles17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Miercoles', '17:00', '17:30');
@$idMateriaS2Miercoles17 = $S2Miercoles17['id_materia'];
@$materiaS2Miercoles17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Miercoles17 );
@$idDocenteS2Miercoles17 = $S2Miercoles17['id_docente'];
@$docenteS2Miercoles17 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Miercoles17 );
if(@$docenteS2Miercoles17 == ""){

    @$respS2Miercoles17 = "0";
}else{
    @$respS2Miercoles17 = "<b>". $materiaS2Miercoles17['materia'] ."</b> </br>" . " ". $docenteS2Miercoles17['nombre'];
 
}


/*=============================================
   S2 JUEVES
=============================================*/

#8:00
@$S2Jueves8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Jueves', '08:00', '08:30');
@$idMateriaS2Jueves8 = $S2Jueves8['id_materia'];
@$materiaS2Jueves8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Jueves8 );
@$idDocenteS2Jueves8 = $S2Jueves8['id_docente'];
@$docenteS2Jueves8 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Jueves8 );

if(@$docenteS2Jueves8 == ""){

    @$respS2Jueves8 = "0";
}else{
    @$respS2Jueves8 = "<b>". $materiaS2Jueves8['materia'] ."</b> </br>" . " ". $docenteS2Jueves8['nombre'];	
 
}

#9:00
@$S2Jueves9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Jueves', '09:00', '09:30');
@$idMateriaS2Jueves9 = $S2Jueves9['id_materia'];
@$materiaS2Jueves9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Jueves9 );
@$idDocenteS2Jueves9 = $S2Jueves9['id_docente'];
@$docenteS2Jueves9 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Jueves9 );
if(@$docenteS2Jueves9 == ""){

    @$respS2Jueves9 = "0";
}else{
    @$respS2Jueves9 = "<b>". $materiaS2Jueves9['materia'] ."</b> </br>" . " ". $docenteS2Jueves9['nombre'];	
 
}

#10:00
@$S2Jueves10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Jueves', '10:00', '10:30');
@$idMateriaS2Jueves10 = $S2Jueves10['id_materia'];
@$materiaS2Jueves10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Jueves10 );
@$idDocenteS2Jueves10 = $S2Jueves10['id_docente'];
@$docenteS2Jueves10 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Jueves10 );
if(@$docenteS2Jueves10 == ""){

    @$respS2Jueves10 = "0";
}else{
    @$respS2Jueves10 = "<b>". $materiaS2Jueves10['materia'] ."</b> </br>" . " ". $docenteS2Jueves10['nombre'];
 
}

#11:00
@$S2Jueves11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Jueves', '11:00', '11:30');
@$idMateriaS2Jueves11 = $S2Jueves11['id_materia'];
@$materiaS2Jueves11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Jueves11 );
@$idDocenteS2Jueves11 = $S2Jueves11['id_docente'];
@$docenteS2Jueves11 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Jueves11 );
if(@$docenteS2Jueves11 == ""){

    @$respS2Jueves11 = "0";
}else{
    @$respS2Jueves11 = "<b>". $materiaS2Jueves11['materia'] ."</b> </br>" . " ". $docenteS2Jueves11['nombre'];
 
}

#12:00
@$S2Jueves12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Jueves', '12:00', '12:30');
@$idMateriaS2Jueves12 = $S2Jueves12['id_materia'];
@$materiaS2Jueves12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Jueves12 );
@$idDocenteS2Jueves12 = $S2Jueves12['id_docente'];
@$docenteS2Jueves12 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Jueves12 );
if(@$docenteS2Jueves12 == ""){

    @$respS2Jueves12 = "0";
}else{
    @$respS2Jueves12 = "<b>". $materiaS2Jueves12['materia'] ."</b> </br>" . " ". $docenteS2Jueves12['nombre'];
 
}

#13:00
@$S2Jueves13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Jueves', '13:00', '13:30');
@$idMateriaS2Jueves13 = $S2Jueves13['id_materia'];
@$materiaS2Jueves13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Jueves13 );
@$idDocenteS2Jueves13 = $S2Jueves13['id_docente'];
@$docenteS2Jueves13 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Jueves13 );
if(@$docenteS2Jueves13 == ""){

    @$respS2Jueves13 = "0";
}else{
    @$respS2Jueves13 = "<b>". $materiaS2Jueves13['materia'] ."</b> </br>" . " ". $docenteS2Jueves13['nombre'];
 
}

#14:00
@$S2Jueves14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Jueves', '14:00', '14:30');
@$idMateriaS2Jueves14 = $S2Jueves14['id_materia'];
@$materiaS2Jueves14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Jueves14 );
@$idDocenteS2Jueves14 = $S2Jueves14['id_docente'];
@$docenteS2Jueves14 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Jueves14 );
if(@$docenteS2Jueves14 == ""){

    @$respS2Jueves14 = "0";
}else{
    @$respS2Jueves14 = "<b>". $materiaS2Jueves14['materia'] ."</b> </br>" . " ". $docenteS2Jueves14['nombre'];
 
}

#15:00
@$S2Jueves15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Jueves', '15:00', '15:30');
@$idMateriaS2Jueves15 = $S2Jueves15['id_materia'];
@$materiaS2Jueves15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Jueves15 );
@$idDocenteS2Jueves15 = $S2Jueves15['id_docente'];
@$docenteS2Jueves15 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Jueves15 );
if(@$docenteS2Jueves15 == ""){

    @$respS2Jueves15 = "0";
}else{
    @$respS2Jueves15 = "<b>". $materiaS2Jueves15['materia'] ."</b> </br>" . " ". $docenteS2Jueves15['nombre'];
 
}

#16:00
@$S2Jueves16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Jueves', '16:00', '16:30');
@$idMateriaS2Jueves16 = $S2Jueves16['id_materia'];
@$materiaS2Jueves16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Jueves16 );
@$idDocenteS2Jueves16 = $S2Jueves16['id_docente'];
@$docenteS2Jueves16 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Jueves16 );
if(@$docenteS2Jueves16 == ""){

    @$respS2Jueves16 = "0";
}else{
    @$respS2Jueves16 = "<b>". $materiaS2Jueves16['materia'] ."</b> </br>" . " ". $docenteS2Jueves16['nombre'];
 
}

#17:00
@$S2Jueves17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Jueves', '17:00', '17:30');
@$idMateriaS2Jueves17 = $S2Jueves17['id_materia'];
@$materiaS2Jueves17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Jueves17 );
@$idDocenteS2Jueves17 = $S2Jueves17['id_docente'];
@$docenteS2Jueves17 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Jueves17 );
if(@$docenteS2Jueves17 == ""){

    @$respS2Jueves17 = "0";
}else{
    @$respS2Jueves17 = "<b>". $materiaS2Jueves17['materia'] ."</b> </br>" . " ". $docenteS2Jueves17['nombre'];
 
}


/*=============================================
   S2 VIERNES
=============================================*/

#8:00
@$S2Viernes8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Viernes', '08:00', '08:30');
@$idMateriaS2Viernes8 = $S2Viernes8['id_materia'];
@$materiaS2Viernes8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Viernes8 );
@$idDocenteS2Viernes8 = $S2Viernes8['id_docente'];
@$docenteS2Viernes8 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Viernes8 );

if(@$docenteS2Viernes8 == ""){

    @$respS2Viernes8 = "0";
}else{
    @$respS2Viernes8 = "<b>". $materiaS2Viernes8['materia'] ."</b> </br>" . " ". $docenteS2Viernes8['nombre'];	
 
}

#9:00
@$S2Viernes9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Viernes', '09:00', '09:30');
@$idMateriaS2Viernes9 = $S2Viernes9['id_materia'];
@$materiaS2Viernes9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Viernes9 );
@$idDocenteS2Viernes9 = $S2Viernes9['id_docente'];
@$docenteS2Viernes9 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Viernes9 );
if(@$docenteS2Viernes9 == ""){

    @$respS2Viernes9 = "0";
}else{
    @$respS2Viernes9 = "<b>". $materiaS2Viernes9['materia'] ."</b> </br>" . " ". $docenteS2Viernes9['nombre'];	
 
}

#10:00
@$S2Viernes10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Viernes', '10:00', '10:30');
@$idMateriaS2Viernes10 = $S2Viernes10['id_materia'];
@$materiaS2Viernes10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Viernes10 );
@$idDocenteS2Viernes10 = $S2Viernes10['id_docente'];
@$docenteS2Viernes10 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Viernes10 );
if(@$docenteS2Viernes10 == ""){

    @$respS2Viernes10 = "0";
}else{
    @$respS2Viernes10 = "<b>". $materiaS2Viernes10['materia'] ."</b> </br>" . " ". $docenteS2Viernes10['nombre'];
 
}

#11:00
@$S2Viernes11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Viernes', '11:00', '11:30');
@$idMateriaS2Viernes11 = $S2Viernes11['id_materia'];
@$materiaS2Viernes11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Viernes11 );
@$idDocenteS2Viernes11 = $S2Viernes11['id_docente'];
@$docenteS2Viernes11 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Viernes11 );
if(@$docenteS2Viernes11 == ""){

    @$respS2Viernes11 = "0";
}else{
    @$respS2Viernes11 = "<b>". $materiaS2Viernes11['materia'] ."</b> </br>" . " ". $docenteS2Viernes11['nombre'];
 
}

#12:00
@$S2Viernes12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Viernes', '12:00', '12:30');
@$idMateriaS2Viernes12 = $S2Viernes12['id_materia'];
@$materiaS2Viernes12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Viernes12 );
@$idDocenteS2Viernes12 = $S2Viernes12['id_docente'];
@$docenteS2Viernes12 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Viernes12 );
if(@$docenteS2Viernes12 == ""){

    @$respS2Viernes12 = "0";
}else{
    @$respS2Viernes12 = "<b>". $materiaS2Viernes12['materia'] ."</b> </br>" . " ". $docenteS2Viernes12['nombre'];
 
}

#13:00
@$S2Viernes13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Viernes', '13:00', '13:30');
@$idMateriaS2Viernes13 = $S2Viernes13['id_materia'];
@$materiaS2Viernes13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Viernes13 );
@$idDocenteS2Viernes13 = $S2Viernes13['id_docente'];
@$docenteS2Viernes13 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Viernes13 );
if(@$docenteS2Viernes13 == ""){

    @$respS2Viernes13 = "0";
}else{
    @$respS2Viernes13 = "<b>". $materiaS2Viernes13['materia'] ."</b> </br>" . " ". $docenteS2Viernes13['nombre'];
 
}

#14:00
@$S2Viernes14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Viernes', '14:00', '14:30');
@$idMateriaS2Viernes14 = $S2Viernes14['id_materia'];
@$materiaS2Viernes14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Viernes14 );
@$idDocenteS2Viernes14 = $S2Viernes14['id_docente'];
@$docenteS2Viernes14 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Viernes14 );
if(@$docenteS2Viernes14 == ""){

    @$respS2Viernes14 = "0";
}else{
    @$respS2Viernes14 = "<b>". $materiaS2Viernes14['materia'] ."</b> </br>" . " ". $docenteS2Viernes14['nombre'];
 
}

#15:00
@$S2Viernes15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Viernes', '15:00', '15:30');
@$idMateriaS2Viernes15 = $S2Viernes15['id_materia'];
@$materiaS2Viernes15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Viernes15 );
@$idDocenteS2Viernes15 = $S2Viernes15['id_docente'];
@$docenteS2Viernes15 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Viernes15 );
if(@$docenteS2Viernes15 == ""){

    @$respS2Viernes15 = "0";
}else{
    @$respS2Viernes15 = "<b>". $materiaS2Viernes15['materia'] ."</b> </br>" . " ". $docenteS2Viernes15['nombre'];
 
}

#16:00
@$S2Viernes16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Viernes', '16:00', '16:30');
@$idMateriaS2Viernes16 = $S2Viernes16['id_materia'];
@$materiaS2Viernes16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Viernes16 );
@$idDocenteS2Viernes16 = $S2Viernes16['id_docente'];
@$docenteS2Viernes16 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Viernes16 );
if(@$docenteS2Viernes16 == ""){

    @$respS2Viernes16 = "0";
}else{
    @$respS2Viernes16 = "<b>". $materiaS2Viernes16['materia'] ."</b> </br>" . " ". $docenteS2Viernes16['nombre'];
 
}

#17:00
@$S2Viernes17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Viernes', '17:00', '17:30');
@$idMateriaS2Viernes17 = $S2Viernes17['id_materia'];
@$materiaS2Viernes17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Viernes17 );
@$idDocenteS2Viernes17 = $S2Viernes17['id_docente'];
@$docenteS2Viernes17 = ControladorDocentes::ctrMostrarDocentes('id', $idDocenteS2Viernes17 );
if(@$docenteS2Viernes17 == ""){

    @$respS2Viernes17 = "0";
}else{
    @$respS2Viernes17 = "<b>". $materiaS2Viernes17['materia'] ."</b> </br>" . " ". $docenteS2Viernes17['nombre'];
 
}


?>