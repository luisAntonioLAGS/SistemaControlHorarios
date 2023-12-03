<?php

/*=============================================
  S1 LUNES
=============================================*/

#8:00
@$S1Lunes8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Lunes', '08:00', '08:30');
@$idMateriaS1Lunes8 = $S1Lunes8['id_materia'];
@$materiaS1Lunes8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Lunes8 );
@$idProfesorS1Lunes8 = $S1Lunes8['id_profesor'];
@$profesorS1Lunes8 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Lunes8 );

if(@$profesorS1Lunes8 == ""){

    @$respS1Lunes8 = "0";
}else{
    @$respS1Lunes8 = "<b>". $materiaS1Lunes8['materia'] ."</b> </br>" . " ". $profesorS1Lunes8['nombres']. " ". $profesorS1Lunes8['apellidos'];
 
}

#9:00
@$S1Lunes9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Lunes', '09:00', '09:30');
@$idMateriaS1Lunes9 = $S1Lunes9['id_materia'];
@$materiaS1Lunes9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Lunes9 );
@$idProfesorS1Lunes9 = $S1Lunes9['id_profesor'];
@$profesorS1Lunes9 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Lunes9 );
if(@$profesorS1Lunes9 == ""){

    @$respS1Lunes9 = "0";
}else{
    @$respS1Lunes9 = "<b>". $materiaS1Lunes9['materia'] ."</b> </br>" . " ". $profesorS1Lunes9['nombres']. " ". $profesorS1Lunes9['apellidos'];
 
}

#10:00
@$S1Lunes10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Lunes', '10:00', '10:30');
@$idMateriaS1Lunes10 = $S1Lunes10['id_materia'];
@$materiaS1Lunes10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Lunes10 );
@$idProfesorS1Lunes10 = $S1Lunes10['id_profesor'];
@$profesorS1Lunes10 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Lunes10 );
if(@$profesorS1Lunes10 == ""){

    @$respS1Lunes10 = "0";
}else{
    @$respS1Lunes10 = "<b>". $materiaS1Lunes10['materia'] ."</b> </br>" . " ". $profesorS1Lunes10['nombres']. " ". $profesorS1Lunes10['apellidos'];
 
}

#11:00
@$S1Lunes11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Lunes', '11:00', '11:30');
@$idMateriaS1Lunes11 = $S1Lunes11['id_materia'];
@$materiaS1Lunes11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Lunes11 );
@$idProfesorS1Lunes11 = $S1Lunes11['id_profesor'];
@$profesorS1Lunes11 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Lunes11 );
if(@$profesorS1Lunes11 == ""){

    @$respS1Lunes11 = "0";
}else{
    @$respS1Lunes11 = "<b>". $materiaS1Lunes11['materia'] ."</b> </br>" . " ". $profesorS1Lunes11['nombres']. " ". $profesorS1Lunes11['apellidos'];
 
}

#12:00
@$S1Lunes12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Lunes', '12:00', '12:30');
@$idMateriaS1Lunes12 = $S1Lunes12['id_materia'];
@$materiaS1Lunes12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Lunes12 );
@$idProfesorS1Lunes12 = $S1Lunes12['id_profesor'];
@$profesorS1Lunes12 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Lunes12 );
if(@$profesorS1Lunes12 == ""){

    @$respS1Lunes12 = "0";
}else{
    @$respS1Lunes12 = "<b>". $materiaS1Lunes12['materia'] ."</b> </br>" . " ". $profesorS1Lunes12['nombres']. " ". $profesorS1Lunes12['apellidos'];
 
}

#13:00
@$S1Lunes13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Lunes', '13:00', '13:30');
@$idMateriaS1Lunes13 = $S1Lunes13['id_materia'];
@$materiaS1Lunes13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Lunes13 );
@$idProfesorS1Lunes13 = $S1Lunes13['id_profesor'];
@$profesorS1Lunes13 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Lunes13 );
if(@$profesorS1Lunes13 == ""){

    @$respS1Lunes13 = "0";
}else{
    @$respS1Lunes13 = "<b>". $materiaS1Lunes13['materia'] ."</b> </br>" . " ". $profesorS1Lunes13['nombres']. " ". $profesorS1Lunes13['apellidos'];
 
}

#14:00
@$S1Lunes14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Lunes', '14:00', '14:30');
@$idMateriaS1Lunes14 = $S1Lunes14['id_materia'];
@$materiaS1Lunes14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Lunes14 );
@$idProfesorS1Lunes14 = $S1Lunes14['id_profesor'];
@$profesorS1Lunes14 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Lunes14 );
if(@$profesorS1Lunes14 == ""){

    @$respS1Lunes14 = "0";
}else{
    @$respS1Lunes14 = "<b>". $materiaS1Lunes14['materia'] ."</b> </br>" . " ". $profesorS1Lunes14['nombres']. " ". $profesorS1Lunes14['apellidos'];
 
}

#15:00
@$S1Lunes15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Lunes', '15:00', '15:30');
@$idMateriaS1Lunes15 = $S1Lunes15['id_materia'];
@$materiaS1Lunes15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Lunes15 );
@$idProfesorS1Lunes15 = $S1Lunes15['id_profesor'];
@$profesorS1Lunes15 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Lunes15 );
if(@$profesorS1Lunes15 == ""){

    @$respS1Lunes15 = "0";
}else{
    @$respS1Lunes15 = "<b>". $materiaS1Lunes15['materia'] ."</b> </br>" . " ". $profesorS1Lunes15['nombres']. " ". $profesorS1Lunes15['apellidos'];
 
}

#16:00
@$S1Lunes16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Lunes', '16:00', '16:30');
@$idMateriaS1Lunes16 = $S1Lunes16['id_materia'];
@$materiaS1Lunes16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Lunes16 );
@$idProfesorS1Lunes16 = $S1Lunes16['id_profesor'];
@$profesorS1Lunes16 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Lunes16 );
if(@$profesorS1Lunes16 == ""){

    @$respS1Lunes16 = "0";
}else{
    @$respS1Lunes16 = "<b>". $materiaS1Lunes16['materia'] ."</b> </br>" . " ". $profesorS1Lunes16['nombres']. " ". $profesorS1Lunes16['apellidos'];
 
}

#17:00
@$S1Lunes17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Lunes', '17:00', '17:30');
@$idMateriaS1Lunes17 = $S1Lunes17['id_materia'];
@$materiaS1Lunes17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Lunes17 );
@$idProfesorS1Lunes17 = $S1Lunes17['id_profesor'];
@$profesorS1Lunes17 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Lunes17 );
if(@$profesorS1Lunes17 == ""){

    @$respS1Lunes17 = "0";
}else{
    @$respS1Lunes17 = "<b>". $materiaS1Lunes17['materia'] ."</b> </br>" . " ". $profesorS1Lunes17['nombres']. " ". $profesorS1Lunes17['apellidos'];
 
}

/*=============================================
   S1 MARTES
=============================================*/

#8:00
@$S1Martes8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Martes', '08:00', '08:30');
@$idMateriaS1Martes8 = $S1Martes8['id_materia'];
@$materiaS1Martes8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Martes8 );
@$idProfesorS1Martes8 = $S1Martes8['id_profesor'];
@$profesorS1Martes8 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Martes8 );
if(@$profesorS1Martes8 == ""){

    @$respS1Martes8 = "0";
}else{
    @$respS1Martes8 = "<b>". $materiaS1Martes8['materia'] ."</b> </br>" . " ". $profesorS1Martes8['nombres']. " ". $profesorS1Martes8['apellidos'];
 
}

#9:00
@$S1Martes9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Martes', '09:00', '09:30');
@$idMateriaS1Martes9 = $S1Martes9['id_materia'];
@$materiaS1Martes9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Martes9 );
@$idProfesorS1Martes9 = $S1Martes9['id_profesor'];
@$profesorS1Martes9 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Martes9 );
if(@$profesorS1Martes9 == ""){

    @$respS1Martes9 = "0";
}else{
    @$respS1Martes9 = "<b>". $materiaS1Martes9['materia'] ."</b> </br>" . " ". $profesorS1Martes9['nombres']. " ". $profesorS1Martes9['apellidos'];
 
}

#10:00
@$S1Martes10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Martes', '10:00', '10:30');
@$idMateriaS1Martes10 = $S1Martes10['id_materia'];
@$materiaS1Martes10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Martes10 );
@$idProfesorS1Martes10 = $S1Martes10['id_profesor'];
@$profesorS1Martes10 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Martes10 );
if(@$profesorS1Martes10 == ""){

    @$respS1Martes10 = "0";
}else{
    @$respS1Martes10 = "<b>". $materiaS1Martes10['materia'] ."</b> </br>" . " ". $profesorS1Martes10['nombres']. " ". $profesorS1Martes10['apellidos'];
 
}

#11:00
@$S1Martes11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Martes', '11:00', '11:30');
@$idMateriaS1Martes11 = $S1Martes11['id_materia'];
@$materiaS1Martes11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Martes11 );
@$idProfesorS1Martes11 = $S1Martes11['id_profesor'];
@$profesorS1Martes11 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Martes11 );
if(@$profesorS1Martes11 == ""){

    @$respS1Martes11 = "0";
}else{
    @$respS1Martes11 = "<b>". $materiaS1Martes11['materia'] ."</b> </br>" . " ". $profesorS1Martes11['nombres']. " ". $profesorS1Martes11['apellidos'];
 
}

#12:00
@$S1Martes12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Martes', '12:00', '12:30');
@$idMateriaS1Martes12 = $S1Martes12['id_materia'];
@$materiaS1Martes12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Martes12 );
@$idProfesorS1Martes12 = $S1Martes12['id_profesor'];
@$profesorS1Martes12 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Martes12 );
if(@$profesorS1Martes12 == ""){

    @$respS1Martes12 = "0";
}else{
    @$respS1Martes12 = "<b>". $materiaS1Martes12['materia'] ."</b> </br>" . " ". $profesorS1Martes12['nombres']. " ". $profesorS1Martes12['apellidos'];
 
}

#13:00
@$S1Martes13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Martes', '13:00', '13:30');
@$idMateriaS1Martes13 = $S1Martes13['id_materia'];
@$materiaS1Martes13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Martes13 );
@$idProfesorS1Martes13 = $S1Martes13['id_profesor'];
@$profesorS1Martes13 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Martes13 );
if(@$profesorS1Martes13 == ""){

    @$respS1Martes13 = "0";
}else{
    @$respS1Martes13 = "<b>". $materiaS1Martes13['materia'] ."</b> </br>" . " ". $profesorS1Martes13['nombres']. " ". $profesorS1Martes13['apellidos'];
 
}

#14:00
@$S1Martes14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Martes', '14:00', '14:30');
@$idMateriaS1Martes14 = $S1Martes14['id_materia'];
@$materiaS1Martes14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Martes14 );
@$idProfesorS1Martes14 = $S1Martes14['id_profesor'];
@$profesorS1Martes14 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Martes14 );
if(@$profesorS1Martes14 == ""){

    @$respS1Martes14 = "0";
}else{
    @$respS1Martes14 = "<b>". $materiaS1Martes14['materia'] ."</b> </br>" . " ". $profesorS1Martes14['nombres']. " ". $profesorS1Martes14['apellidos'];
 
}

#15:00
@$S1Martes15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Martes', '15:00', '15:30');
@$idMateriaS1Martes15 = $S1Martes15['id_materia'];
@$materiaS1Martes15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Martes15 );
@$idProfesorS1Martes15 = $S1Martes15['id_profesor'];
@$profesorS1Martes15 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Martes15 );
if(@$profesorS1Martes15 == ""){

    @$respS1Martes15 = "0";
}else{
    @$respS1Martes15 = "<b>". $materiaS1Martes15['materia'] ."</b> </br>" . " ". $profesorS1Martes15['nombres']. " ". $profesorS1Martes15['apellidos'];
 
}

#16:00
@$S1Martes16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Martes', '16:00', '16:30');
@$idMateriaS1Martes16 = $S1Martes16['id_materia'];
@$materiaS1Martes16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Martes16 );
@$idProfesorS1Martes16 = $S1Martes16['id_profesor'];
@$profesorS1Martes16 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Martes16 );
if(@$profesorS1Martes16 == ""){

    @$respS1Martes16 = "0";
}else{
    @$respS1Martes16 = "<b>". $materiaS1Martes16['materia'] ."</b> </br>" . " ". $profesorS1Martes16['nombres']. " ". $profesorS1Martes16['apellidos'];
 
}

#17:00
@$S1Martes17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Martes', '17:00', '17:30');
@$idMateriaS1Martes17 = $S1Martes17['id_materia'];
@$materiaS1Martes17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Martes17 );
@$idProfesorS1Martes17 = $S1Martes17['id_profesor'];
@$profesorS1Martes17 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Martes17 );
if(@$profesorS1Martes17 == ""){

    @$respS1Martes17 = "0";
}else{
    @$respS1Martes17 = "<b>". $materiaS1Martes17['materia'] ."</b> </br>" . " ". $profesorS1Martes17['nombres']. " ". $profesorS1Martes17['apellidos'];
 
}

/*=============================================
   S1 MIERCOLES
=============================================*/

#8:00
@$S1Miercoles8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Miercoles', '08:00', '08:30');
@$idMateriaS1Miercoles8 = $S1Miercoles8['id_materia'];
@$materiaS1Miercoles8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Miercoles8 );
@$idProfesorS1Miercoles8 = $S1Miercoles8['id_profesor'];
@$profesorS1Miercoles8 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Miercoles8 );
if(@$profesorS1Miercoles8 == ""){

    @$respS1Miercoles8 = "0";
}else{
    @$respS1Miercoles8 = "<b>". $materiaS1Miercoles8['materia'] ."</b> </br>" . " ". $profesorS1Miercoles8['nombres']. " ". $profesorS1Miercoles8['apellidos'];
 
}

#9:00
@$S1Miercoles9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Miercoles', '09:00', '09:30');
@$idMateriaS1Miercoles9 = $S1Miercoles9['id_materia'];
@$materiaS1Miercoles9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Miercoles9 );
@$idProfesorS1Miercoles9 = $S1Miercoles9['id_profesor'];
@$profesorS1Miercoles9 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Miercoles9 );
if(@$profesorS1Miercoles9 == ""){

    @$respS1Miercoles9 = "0";
}else{
    @$respS1Miercoles9 = "<b>". $materiaS1Miercoles9['materia'] ."</b> </br>" . " ". $profesorS1Miercoles9['nombres']. " ". $profesorS1Miercoles9['apellidos'];
 
}

#10:00
@$S1Miercoles10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Miercoles', '10:00', '10:30');
@$idMateriaS1Miercoles10 = $S1Miercoles10['id_materia'];
@$materiaS1Miercoles10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Miercoles10 );
@$idProfesorS1Miercoles10 = $S1Miercoles10['id_profesor'];
@$profesorS1Miercoles10 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Miercoles10 );
if(@$profesorS1Miercoles10 == ""){

    @$respS1Miercoles10 = "0";
}else{
    @$respS1Miercoles10 = "<b>". $materiaS1Miercoles10['materia'] ."</b> </br>" . " ". $profesorS1Miercoles10['nombres']. " ". $profesorS1Miercoles10['apellidos'];
 
}

#11:00
@$S1Miercoles11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Miercoles', '11:00', '11:30');
@$idMateriaS1Miercoles11 = $S1Miercoles11['id_materia'];
@$materiaS1Miercoles11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Miercoles11 );
@$idProfesorS1Miercoles11 = $S1Miercoles11['id_profesor'];
@$profesorS1Miercoles11 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Miercoles11 );
if(@$profesorS1Miercoles11 == ""){

    @$respS1Miercoles11 = "0";
}else{
    @$respS1Miercoles11 = "<b>". $materiaS1Miercoles11['materia'] ."</b> </br>" . " ". $profesorS1Miercoles11['nombres']. " ". $profesorS1Miercoles11['apellidos'];
 
}

#12:00
@$S1Miercoles12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Miercoles', '12:00', '12:30');
@$idMateriaS1Miercoles12 = $S1Miercoles12['id_materia'];
@$materiaS1Miercoles12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Miercoles12 );
@$idProfesorS1Miercoles12 = $S1Miercoles12['id_profesor'];
@$profesorS1Miercoles12 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Miercoles12 );
if(@$profesorS1Miercoles12 == ""){

    @$respS1Miercoles12 = "0";
}else{
    @$respS1Miercoles12 = "<b>". $materiaS1Miercoles12['materia'] ."</b> </br>" . " ". $profesorS1Miercoles12['nombres']. " ". $profesorS1Miercoles12['apellidos'];
 
}

#13:00
@$S1Miercoles13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Miercoles', '13:00', '13:30');
@$idMateriaS1Miercoles13 = $S1Miercoles13['id_materia'];
@$materiaS1Miercoles13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Miercoles13 );
@$idProfesorS1Miercoles13 = $S1Miercoles13['id_profesor'];
@$profesorS1Miercoles13 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Miercoles13 );
if(@$profesorS1Miercoles13 == ""){

    @$respS1Miercoles13 = "0";
}else{
    @$respS1Miercoles13 = "<b>". $materiaS1Miercoles13['materia'] ."</b> </br>" . " ". $profesorS1Miercoles13['nombres']. " ". $profesorS1Miercoles13['apellidos'];
 
}

#14:00
@$S1Miercoles14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Miercoles', '14:00', '14:30');
@$idMateriaS1Miercoles14 = $S1Miercoles14['id_materia'];
@$materiaS1Miercoles14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Miercoles14 );
@$idProfesorS1Miercoles14 = $S1Miercoles14['id_profesor'];
@$profesorS1Miercoles14 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Miercoles14 );
if(@$profesorS1Miercoles14 == ""){

    @$respS1Miercoles14 = "0";
}else{
    @$respS1Miercoles14 = "<b>". $materiaS1Miercoles14['materia'] ."</b> </br>" . " ". $profesorS1Miercoles14['nombres']. " ". $profesorS1Miercoles14['apellidos'];
 
}

#15:00
@$S1Miercoles15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Miercoles', '15:00', '15:30');
@$idMateriaS1Miercoles15 = $S1Miercoles15['id_materia'];
@$materiaS1Miercoles15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Miercoles15 );
@$idProfesorS1Miercoles15 = $S1Miercoles15['id_profesor'];
@$profesorS1Miercoles15 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Miercoles15 );
if(@$profesorS1Miercoles15 == ""){

    @$respS1Miercoles15 = "0";
}else{
    @$respS1Miercoles15 = "<b>". $materiaS1Miercoles15['materia'] ."</b> </br>" . " ". $profesorS1Miercoles15['nombres']. " ". $profesorS1Miercoles15['apellidos'];
 
}

#16:00
@$S1Miercoles16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Miercoles', '16:00', '16:30');
@$idMateriaS1Miercoles16 = $S1Miercoles16['id_materia'];
@$materiaS1Miercoles16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Miercoles16 );
@$idProfesorS1Miercoles16 = $S1Miercoles16['id_profesor'];
@$profesorS1Miercoles16 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Miercoles16 );
if(@$profesorS1Miercoles16 == ""){

    @$respS1Miercoles16 = "0";
}else{
    @$respS1Miercoles16 = "<b>". $materiaS1Miercoles16['materia'] ."</b> </br>" . " ". $profesorS1Miercoles16['nombres']. " ". $profesorS1Miercoles16['apellidos'];
 
}

#17:00
@$S1Miercoles17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Miercoles', '17:00', '17:30');
@$idMateriaS1Miercoles17 = $S1Miercoles17['id_materia'];
@$materiaS1Miercoles17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Miercoles17 );
@$idProfesorS1Miercoles17 = $S1Miercoles17['id_profesor'];
@$profesorS1Miercoles17 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Miercoles17 );
if(@$profesorS1Miercoles17 == ""){

    @$respS1Miercoles17 = "0";
}else{
    @$respS1Miercoles17 = "<b>". $materiaS1Miercoles17['materia'] ."</b> </br>" . " ". $profesorS1Miercoles17['nombres']. " ". $profesorS1Miercoles17['apellidos'];
 
}

/*=============================================
   S1 JUEVES
=============================================*/

#8:00
@$S1Jueves8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Jueves', '08:00', '08:30');
@$idMateriaS1Jueves8 = $S1Jueves8['id_materia'];
@$materiaS1Jueves8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Jueves8 );
@$idProfesorS1Jueves8 = $S1Jueves8['id_profesor'];
@$profesorS1Jueves8 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Jueves8 );
if(@$profesorS1Jueves8 == ""){

    @$respS1Jueves8 = "0";
}else{
    @$respS1Jueves8 = "<b>". $materiaS1Jueves8['materia'] ."</b> </br>" . " ". $profesorS1Jueves8['nombres']. " ". $profesorS1Jueves8['apellidos'];
 
}

#9:00
@$S1Jueves9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Jueves', '09:00', '09:30');
@$idMateriaS1Jueves9 = $S1Jueves9['id_materia'];
@$materiaS1Jueves9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Jueves9 );
@$idProfesorS1Jueves9 = $S1Jueves9['id_profesor'];
@$profesorS1Jueves9 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Jueves9 );
if(@$profesorS1Jueves9 == ""){

    @$respS1Jueves9 = "0";
}else{
    @$respS1Jueves9 = "<b>". $materiaS1Jueves9['materia'] ."</b> </br>" . " ". $profesorS1Jueves9['nombres']. " ". $profesorS1Jueves9['apellidos'];
 
}

#10:00
@$S1Jueves10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Jueves', '10:00', '10:30');
@$idMateriaS1Jueves10 = $S1Jueves10['id_materia'];
@$materiaS1Jueves10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Jueves10 );
@$idProfesorS1Jueves10 = $S1Jueves10['id_profesor'];
@$profesorS1Jueves10 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Jueves10 );
if(@$profesorS1Jueves10 == ""){

    @$respS1Jueves10 = "0";
}else{
    @$respS1Jueves10 = "<b>". $materiaS1Jueves10['materia'] ."</b> </br>" . " ". $profesorS1Jueves10['nombres']. " ". $profesorS1Jueves10['apellidos'];
 
}

#11:00
@$S1Jueves11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Jueves', '11:00', '11:30');
@$idMateriaS1Jueves11 = $S1Jueves11['id_materia'];
@$materiaS1Jueves11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Jueves11 );
@$idProfesorS1Jueves11 = $S1Jueves11['id_profesor'];
@$profesorS1Jueves11 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Jueves11 );
if(@$profesorS1Jueves11 == ""){

    @$respS1Jueves11 = "0";
}else{
    @$respS1Jueves11 = "<b>". $materiaS1Jueves11['materia'] ."</b> </br>" . " ". $profesorS1Jueves11['nombres']. " ". $profesorS1Jueves11['apellidos'];
 
}

#12:00
@$S1Jueves12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Jueves', '12:00', '12:30');
@$idMateriaS1Jueves12 = $S1Jueves12['id_materia'];
@$materiaS1Jueves12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Jueves12 );
@$idProfesorS1Jueves12 = $S1Jueves12['id_profesor'];
@$profesorS1Jueves12 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Jueves12 );
if(@$profesorS1Jueves12 == ""){

    @$respS1Jueves12 = "0";
}else{
    @$respS1Jueves12 = "<b>". $materiaS1Jueves12['materia'] ."</b> </br>" . " ". $profesorS1Jueves12['nombres']. " ". $profesorS1Jueves12['apellidos'];
 
}

#13:00
@$S1Jueves13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Jueves', '13:00', '13:30');
@$idMateriaS1Jueves13 = $S1Jueves13['id_materia'];
@$materiaS1Jueves13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Jueves13 );
@$idProfesorS1Jueves13 = $S1Jueves13['id_profesor'];
@$profesorS1Jueves13 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Jueves13 );
if(@$profesorS1Jueves13 == ""){

    @$respS1Jueves13 = "0";
}else{
    @$respS1Jueves13 = "<b>". $materiaS1Jueves13['materia'] ."</b> </br>" . " ". $profesorS1Jueves13['nombres']. " ". $profesorS1Jueves13['apellidos'];
 
}

#14:00
@$S1Jueves14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Jueves', '14:00', '14:30');
@$idMateriaS1Jueves14 = $S1Jueves14['id_materia'];
@$materiaS1Jueves14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Jueves14 );
@$idProfesorS1Jueves14 = $S1Jueves14['id_profesor'];
@$profesorS1Jueves14 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Jueves14 );
if(@$profesorS1Jueves14 == ""){

    @$respS1Jueves14 = "0";
}else{
    @$respS1Jueves14 = "<b>". $materiaS1Jueves14['materia'] ."</b> </br>" . " ". $profesorS1Jueves14['nombres']. " ". $profesorS1Jueves14['apellidos'];
 
}

#15:00
@$S1Jueves15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Jueves', '15:00', '15:30');
@$idMateriaS1Jueves15 = $S1Jueves15['id_materia'];
@$materiaS1Jueves15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Jueves15 );
@$idProfesorS1Jueves15 = $S1Jueves15['id_profesor'];
@$profesorS1Jueves15 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Jueves15 );
if(@$profesorS1Jueves15 == ""){

    @$respS1Jueves15 = "0";
}else{
    @$respS1Jueves15 = "<b>". $materiaS1Jueves15['materia'] ."</b> </br>" . " ". $profesorS1Jueves15['nombres']. " ". $profesorS1Jueves15['apellidos'];
 
}

#16:00
@$S1Jueves16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Jueves', '16:00', '16:30');
@$idMateriaS1Jueves16 = $S1Jueves16['id_materia'];
@$materiaS1Jueves16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Jueves16 );
@$idProfesorS1Jueves16 = $S1Jueves16['id_profesor'];
@$profesorS1Jueves16 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Jueves16 );
if(@$profesorS1Jueves16 == ""){

    @$respS1Jueves16 = "0";
}else{
    @$respS1Jueves16 = "<b>". $materiaS1Jueves16['materia'] ."</b> </br>" . " ". $profesorS1Jueves16['nombres']. " ". $profesorS1Jueves16['apellidos'];
 
}

#17:00
@$S1Jueves17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Jueves', '17:00', '17:30');
@$idMateriaS1Jueves17 = $S1Jueves17['id_materia'];
@$materiaS1Jueves17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Jueves17 );
@$idProfesorS1Jueves17 = $S1Jueves17['id_profesor'];
@$profesorS1Jueves17 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Jueves17 );
if(@$profesorS1Jueves17 == ""){

    @$respS1Jueves17 = "0";
}else{
    @$respS1Jueves17 = "<b>". $materiaS1Jueves17['materia'] ."</b> </br>" . " ". $profesorS1Jueves17['nombres']. " ". $profesorS1Jueves17['apellidos'];
 
}

/*=============================================
   S1 VIERNES
=============================================*/

#8:00
@$S1Viernes8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Viernes', '08:00', '08:30');
@$idMateriaS1Viernes8 = $S1Viernes8['id_materia'];
@$materiaS1Viernes8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Viernes8 );
@$idProfesorS1Viernes8 = $S1Viernes8['id_profesor'];
@$profesorS1Viernes8 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Viernes8 );
if(@$profesorS1Viernes8 == ""){

    @$respS1Viernes8 = "0";
}else{
    @$respS1Viernes8 = "<b>". $materiaS1Viernes8['materia'] ."</b> </br>" . " ". $profesorS1Viernes8['nombres']. " ". $profesorS1Viernes8['apellidos'];
 
}

#9:00
@$S1Viernes9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Viernes', '09:00', '09:30');
@$idMateriaS1Viernes9 = $S1Viernes9['id_materia'];
@$materiaS1Viernes9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Viernes9 );
@$idProfesorS1Viernes9 = $S1Viernes9['id_profesor'];
@$profesorS1Viernes9 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Viernes9 );
if(@$profesorS1Viernes9 == ""){

    @$respS1Viernes9 = "0";
}else{
    @$respS1Viernes9 = "<b>". $materiaS1Viernes9['materia'] ."</b> </br>" . " ". $profesorS1Viernes9['nombres']. " ". $profesorS1Viernes9['apellidos'];
 
}

#10:00
@$S1Viernes10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Viernes', '10:00', '10:30');
@$idMateriaS1Viernes10 = $S1Viernes10['id_materia'];
@$materiaS1Viernes10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Viernes10 );
@$idProfesorS1Viernes10 = $S1Viernes10['id_profesor'];
@$profesorS1Viernes10 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Viernes10 );
if(@$profesorS1Viernes10 == ""){

    @$respS1Viernes10 = "0";
}else{
    @$respS1Viernes10 = "<b>". $materiaS1Viernes10['materia'] ."</b> </br>" . " ". $profesorS1Viernes10['nombres']. " ". $profesorS1Viernes10['apellidos'];
 
}

#11:00
@$S1Viernes11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Viernes', '11:00', '11:30');
@$idMateriaS1Viernes11 = $S1Viernes11['id_materia'];
@$materiaS1Viernes11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Viernes11 );
@$idProfesorS1Viernes11 = $S1Viernes11['id_profesor'];
@$profesorS1Viernes11 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Viernes11 );
if(@$profesorS1Viernes11 == ""){

    @$respS1Viernes11 = "0";
}else{
    @$respS1Viernes11 = "<b>". $materiaS1Viernes11['materia'] ."</b> </br>" . " ". $profesorS1Viernes11['nombres']. " ". $profesorS1Viernes11['apellidos'];
 
}

#12:00
@$S1Viernes12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Viernes', '12:00', '12:30');
@$idMateriaS1Viernes12 = $S1Viernes12['id_materia'];
@$materiaS1Viernes12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Viernes12 );
@$idProfesorS1Viernes12 = $S1Viernes12['id_profesor'];
@$profesorS1Viernes12 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Viernes12 );
if(@$profesorS1Viernes12 == ""){

    @$respS1Viernes12 = "0";
}else{
    @$respS1Viernes12 = "<b>". $materiaS1Viernes12['materia'] ."</b> </br>" . " ". $profesorS1Viernes12['nombres']. " ". $profesorS1Viernes12['apellidos'];
 
}

#13:00
@$S1Viernes13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Viernes', '13:00', '13:30');
@$idMateriaS1Viernes13 = $S1Viernes13['id_materia'];
@$materiaS1Viernes13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Viernes13 );
@$idProfesorS1Viernes13 = $S1Viernes13['id_profesor'];
@$profesorS1Viernes13 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Viernes13 );
if(@$profesorS1Viernes13 == ""){

    @$respS1Viernes13 = "0";
}else{
    @$respS1Viernes13 = "<b>". $materiaS1Viernes13['materia'] ."</b> </br>" . " ". $profesorS1Viernes13['nombres']. " ". $profesorS1Viernes13['apellidos'];
 
}

#14:00
@$S1Viernes14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Viernes', '14:00', '14:30');
@$idMateriaS1Viernes14 = $S1Viernes14['id_materia'];
@$materiaS1Viernes14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Viernes14 );
@$idProfesorS1Viernes14 = $S1Viernes14['id_profesor'];
@$profesorS1Viernes14 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Viernes14 );
if(@$profesorS1Viernes14 == ""){

    @$respS1Viernes14 = "0";
}else{
    @$respS1Viernes14 = "<b>". $materiaS1Viernes14['materia'] ."</b> </br>" . " ". $profesorS1Viernes14['nombres']. " ". $profesorS1Viernes14['apellidos'];
 
}

#15:00
@$S1Viernes15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Viernes', '15:00', '15:30');
@$idMateriaS1Viernes15 = $S1Viernes15['id_materia'];
@$materiaS1Viernes15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Viernes15 );
@$idProfesorS1Viernes15 = $S1Viernes15['id_profesor'];
@$profesorS1Viernes15 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Viernes15 );
if(@$profesorS1Viernes15 == ""){

    @$respS1Viernes15 = "0";
}else{
    @$respS1Viernes15 = "<b>". $materiaS1Viernes15['materia'] ."</b> </br>" . " ". $profesorS1Viernes15['nombres']. " ". $profesorS1Viernes15['apellidos'];
 
}

#16:00
@$S1Viernes16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Viernes', '16:00', '16:30');
@$idMateriaS1Viernes16 = $S1Viernes16['id_materia'];
@$materiaS1Viernes16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Viernes16 );
@$idProfesorS1Viernes16 = $S1Viernes16['id_profesor'];
@$profesorS1Viernes16 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Viernes16 );
if(@$profesorS1Viernes16 == ""){

    @$respS1Viernes16 = "0";
}else{
    @$respS1Viernes16 = "<b>". $materiaS1Viernes16['materia'] ."</b> </br>" . " ". $profesorS1Viernes16['nombres']. " ". $profesorS1Viernes16['apellidos'];
 
}

#17:00
@$S1Viernes17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('1', 'Viernes', '17:00', '17:30');
@$idMateriaS1Viernes17 = $S1Viernes17['id_materia'];
@$materiaS1Viernes17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS1Viernes17 );
@$idProfesorS1Viernes17 = $S1Viernes17['id_profesor'];
@$profesorS1Viernes17 = ControladorProfesores::ctrMostrarProfesores('id', $idProfesorS1Viernes17 );
if(@$profesorS1Viernes17 == ""){

    @$respS1Viernes17 = "0";
}else{
    @$respS1Viernes17 = "<b>". $materiaS1Viernes17['materia'] ."</b> </br>" . " ". $profesorS1Viernes17['nombres']. " ". $profesorS1Viernes17['apellidos'];
 
}

?>