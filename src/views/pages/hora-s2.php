<?php

/*=============================================
  S2 LUNES
=============================================*/

#8:00
@$S2Lunes8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Lunes', '08:00', '08:30');
@$idMateriaS2Lunes8 = $S2Lunes8['id_materia'];
@$materiaS2Lunes8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Lunes8 );
@$idProfesorS2Lunes8 = $S2Lunes8['id_profesor'];
@$profesorS2Lunes8 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Lunes8 );

if(@$profesorS2Lunes8 == ""){

    @$respS2Lunes8 = "0";
}else{
    @$respS2Lunes8 = "<b>". $materiaS2Lunes8['materia'] ."</b> </br>" . " ". $profesorS2Lunes8['nombre'];
 
}

#9:00
@$S2Lunes9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Lunes', '09:00', '09:30');
@$idMateriaS2Lunes9 = $S2Lunes9['id_materia'];
@$materiaS2Lunes9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Lunes9 );
@$idProfesorS2Lunes9 = $S2Lunes9['id_profesor'];
@$profesorS2Lunes9 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Lunes9 );
if(@$profesorS2Lunes9 == ""){

    @$respS2Lunes9 = "0";
}else{
    @$respS2Lunes9 = "<b>". $materiaS2Lunes9['materia'] ."</b> </br>" . " ". $profesorS2Lunes9['nombre'];
 
}

#10:00
@$S2Lunes10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Lunes', '10:00', '10:30');
@$idMateriaS2Lunes10 = $S2Lunes10['id_materia'];
@$materiaS2Lunes10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Lunes10 );
@$idProfesorS2Lunes10 = $S2Lunes10['id_profesor'];
@$profesorS2Lunes10 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Lunes10 );
if(@$profesorS2Lunes10 == ""){

    @$respS2Lunes10 = "0";
}else{
    @$respS2Lunes10 = "<b>". $materiaS2Lunes10['materia'] ."</b> </br>" . " ". $profesorS2Lunes10['nombre'];
 
}

#11:00
@$S2Lunes11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Lunes', '11:00', '11:30');
@$idMateriaS2Lunes11 = $S2Lunes11['id_materia'];
@$materiaS2Lunes11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Lunes11 );
@$idProfesorS2Lunes11 = $S2Lunes11['id_profesor'];
@$profesorS2Lunes11 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Lunes11 );
if(@$profesorS2Lunes11 == ""){

    @$respS2Lunes11 = "0";
}else{
    @$respS2Lunes11 = "<b>". $materiaS2Lunes11['materia'] ."</b> </br>" . " ". $profesorS2Lunes11['nombre'];
 
}

#12:00
@$S2Lunes12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Lunes', '12:00', '12:30');
@$idMateriaS2Lunes12 = $S2Lunes12['id_materia'];
@$materiaS2Lunes12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Lunes12 );
@$idProfesorS2Lunes12 = $S2Lunes12['id_profesor'];
@$profesorS2Lunes12 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Lunes12 );
if(@$profesorS2Lunes12 == ""){

    @$respS2Lunes12 = "0";
}else{
    @$respS2Lunes12 = "<b>". $materiaS2Lunes12['materia'] ."</b> </br>" . " ". $profesorS2Lunes12['nombre'];
 
}

#13:00
@$S2Lunes13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Lunes', '13:00', '13:30');
@$idMateriaS2Lunes13 = $S2Lunes13['id_materia'];
@$materiaS2Lunes13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Lunes13 );
@$idProfesorS2Lunes13 = $S2Lunes13['id_profesor'];
@$profesorS2Lunes13 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Lunes13 );
if(@$profesorS2Lunes13 == ""){

    @$respS2Lunes13 = "0";
}else{
    @$respS2Lunes13 = "<b>". $materiaS2Lunes13['materia'] ."</b> </br>" . " ". $profesorS2Lunes13['nombre'];
 
}

#14:00
@$S2Lunes14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Lunes', '14:00', '14:30');
@$idMateriaS2Lunes14 = $S2Lunes14['id_materia'];
@$materiaS2Lunes14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Lunes14 );
@$idProfesorS2Lunes14 = $S2Lunes14['id_profesor'];
@$profesorS2Lunes14 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Lunes14 );
if(@$profesorS2Lunes14 == ""){

    @$respS2Lunes14= "0";
}else{
    @$respS2Lunes14 = "<b>". $materiaS2Lunes14['materia'] ."</b> </br>" . " ". $profesorS2Lunes14['nombre'];
 
}

#15:00
@$S2Lunes15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Lunes', '15:00', '15:30');
@$idMateriaS2Lunes15 = $S2Lunes15['id_materia'];
@$materiaS2Lunes15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Lunes15 );
@$idProfesorS2Lunes15 = $S2Lunes15['id_profesor'];
@$profesorS2Lunes15 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Lunes15 );
if(@$profesorS2Lunes15 == ""){

    @$respS2Lunes15 = "0";
}else{
    @$respS2Lunes15 = "<b>". $materiaS2Lunes15['materia'] ."</b> </br>" . " ". $profesorS2Lunes15['nombre'];
 
}

#16:00
@$S2Lunes16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Lunes', '16:00', '16:30');
@$idMateriaS2Lunes16 = $S2Lunes16['id_materia'];
@$materiaS2Lunes16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Lunes16 );
@$idProfesorS2Lunes16 = $S2Lunes16['id_profesor'];
@$profesorS2Lunes16 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Lunes16 );
if(@$profesorS2Lunes16 == ""){

    @$respS2Lunes16 = "0";
}else{
    @$respS2Lunes16 = "<b>". $materiaS2Lunes16['materia'] ."</b> </br>" . " ". $profesorS2Lunes16['nombre'];
 
}

#17:00
@$S2Lunes17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Lunes', '17:00', '17:30');
@$idMateriaS2Lunes17 = $S2Lunes17['id_materia'];
@$materiaS2Lunes17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Lunes17 );
@$idProfesorS2Lunes17 = $S2Lunes17['id_profesor'];
@$profesorS2Lunes17 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Lunes17 );
if(@$profesorS2Lunes17 == ""){

    @$respS2Lunes17 = "0";
}else{
    @$respS2Lunes17 = "<b>". $materiaS2Lunes17['materia'] ."</b> </br>" . " ". $profesorS2Lunes17['nombre'];
 
}

/*=============================================
   S2 MARTES
=============================================*/

#8:00
@$S2Martes8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Martes', '08:00', '08:30');
@$idMateriaS2Martes8 = $S2Martes8['id_materia'];
@$materiaS2Martes8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Martes8 );
@$idProfesorS2Martes8 = $S2Martes8['id_profesor'];
@$profesorS2Martes8 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Martes8 );
if(@$profesorS2Martes8 == ""){

    @$respS2Martes8 = "0";
}else{
    @$respS2Martes8 = "<b>". $materiaS2Martes8['materia'] ."</b> </br>" . " ". $profesorS2Martes8['nombre'];
 
}

#9:00
@$S2Martes9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Martes', '09:00', '09:30');
@$idMateriaS2Martes9 = $S2Martes9['id_materia'];
@$materiaS2Martes9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Martes9 );
@$idProfesorS2Martes9 = $S2Martes9['id_profesor'];
@$profesorS2Martes9 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Martes9 );
if(@$profesorS2Martes9 == ""){

    @$respS2Martes9 = "0";
}else{
    @$respS2Martes9 = "<b>". $materiaS2Martes9['materia'] ."</b> </br>" . " ". $profesorS2Martes9['nombre'];
 
}

#10:00
@$S2Martes10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Martes', '10:00', '10:30');
@$idMateriaS2Martes10 = $S2Martes10['id_materia'];
@$materiaS2Martes10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Martes10 );
@$idProfesorS2Martes10 = $S2Martes10['id_profesor'];
@$profesorS2Martes10 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Martes10 );
if(@$profesorS2Martes10 == ""){

    @$respS2Martes10 = "0";
}else{
    @$respS2Martes10 = "<b>". $materiaS2Martes10['materia'] ."</b> </br>" . " ". $profesorS2Martes10['nombre'];
 
}

#11:00
@$S2Martes11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Martes', '11:00', '11:30');
@$idMateriaS2Martes11 = $S2Martes11['id_materia'];
@$materiaS2Martes11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Martes11 );
@$idProfesorS2Martes11 = $S2Martes11['id_profesor'];
@$profesorS2Martes11 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Martes11 );
if(@$profesorS2Martes11 == ""){

    @$respS2Martes11 = "0";
}else{
    @$respS2Martes11 = "<b>". $materiaS2Martes11['materia'] ."</b> </br>" . " ". $profesorS2Martes11['nombre'];
 
}

#12:00
@$S2Martes12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Martes', '12:00', '12:30');
@$idMateriaS2Martes12 = $S2Martes12['id_materia'];
@$materiaS2Martes12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Martes12 );
@$idProfesorS2Martes12 = $S2Martes12['id_profesor'];
@$profesorS2Martes12 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Martes12 );
if(@$profesorS2Martes12 == ""){

    @$respS2Martes12 = "0";
}else{
    @$respS2Martes12 = "<b>". $materiaS2Martes12['materia'] ."</b> </br>" . " ". $profesorS2Martes12['nombre'];
 
}

#13:00
@$S2Martes13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Martes', '13:00', '13:30');
@$idMateriaS2Martes13 = $S2Martes13['id_materia'];
@$materiaS2Martes13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Martes13 );
@$idProfesorS2Martes13 = $S2Martes13['id_profesor'];
@$profesorS2Martes13 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Martes13 );
if(@$profesorS2Martes13 == ""){

    @$respS2Martes13 = "0";
}else{
    @$respS2Martes13 = "<b>". $materiaS2Martes13['materia'] ."</b> </br>" . " ". $profesorS2Martes13['nombre'];
 
}

#14:00
@$S2Martes14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Martes', '14:00', '14:30');
@$idMateriaS2Martes14 = $S2Martes14['id_materia'];
@$materiaS2Martes14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Martes14 );
@$idProfesorS2Martes14 = $S2Martes14['id_profesor'];
@$profesorS2Martes14 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Martes14 );
if(@$profesorS2Martes14 == ""){

    @$respS2Martes14 = "0";
}else{
    @$respS2Martes14 = "<b>". $materiaS2Martes14['materia'] ."</b> </br>" . " ". $profesorS2Martes14['nombre'];
 
}

#15:00
@$S2Martes15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Martes', '15:00', '15:30');
@$idMateriaS2Martes15 = $S2Martes15['id_materia'];
@$materiaS2Martes15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Martes15 );
@$idProfesorS2Martes15 = $S2Martes15['id_profesor'];
@$profesorS2Martes15 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Martes15 );
if(@$profesorS2Martes15 == ""){

    @$respS2Martes15 = "0";
}else{
    @$respS2Martes15 = "<b>". $materiaS2Martes15['materia'] ."</b> </br>" . " ". $profesorS2Martes15['nombre'];
 
}

#16:00
@$S2Martes16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Martes', '16:00', '16:30');
@$idMateriaS2Martes16 = $S2Martes16['id_materia'];
@$materiaS2Martes16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Martes16 );
@$idProfesorS2Martes16 = $S2Martes16['id_profesor'];
@$profesorS2Martes16 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Martes16 );
if(@$profesorS2Martes16 == ""){

    @$respS2Martes16 = "0";
}else{
    @$respS2Martes16 = "<b>". $materiaS2Martes16['materia'] ."</b> </br>" . " ". $profesorS2Martes16['nombre'];
 
}

#17:00
@$S2Martes17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Martes', '17:00', '17:30');
@$idMateriaS2Martes17 = $S2Martes17['id_materia'];
@$materiaS2Martes17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Martes17 );
@$idProfesorS2Martes17 = $S2Martes17['id_profesor'];
@$profesorS2Martes17 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Martes17 );
if(@$profesorS2Martes17 == ""){

    @$respS2Martes17 = "0";
}else{
    @$respS2Martes17 = "<b>". $materiaS2Martes17['materia'] ."</b> </br>" . " ". $profesorS2Martes17['nombre'];
 
}

/*=============================================
   S2 MIERCOLES
=============================================*/

#8:00
@$S2Miercoles8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Miercoles', '08:00', '08:30');
@$idMateriaS2Miercoles8 = $S2Miercoles8['id_materia'];
@$materiaS2Miercoles8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Miercoles8 );
@$idProfesorS2Miercoles8 = $S2Miercoles8['id_profesor'];
@$profesorS2Miercoles8 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Miercoles8 );
if(@$profesorS2Miercoles8 == ""){

    @$respS2Miercoles8 = "0";
}else{
    @$respS2Miercoles8 = "<b>". $materiaS2Miercoles8['materia'] ."</b> </br>" . " ". $profesorS2Miercoles8['nombre'];
 
}

#9:00
@$S2Miercoles9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Miercoles', '09:00', '09:30');
@$idMateriaS2Miercoles9 = $S2Miercoles9['id_materia'];
@$materiaS2Miercoles9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Miercoles9 );
@$idProfesorS2Miercoles9 = $S2Miercoles9['id_profesor'];
@$profesorS2Miercoles9 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Miercoles9 );
if(@$profesorS2Miercoles9 == ""){

    @$respS2Miercoles9 = "0";
}else{
    @$respS2Miercoles9 = "<b>". $materiaS2Miercoles9['materia'] ."</b> </br>" . " ". $profesorS2Miercoles9['nombre'];
 
}

#10:00
@$S2Miercoles10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Miercoles', '10:00', '10:30');
@$idMateriaS2Miercoles10 = $S2Miercoles10['id_materia'];
@$materiaS2Miercoles10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Miercoles10 );
@$idProfesorS2Miercoles10 = $S2Miercoles10['id_profesor'];
@$profesorS2Miercoles10 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Miercoles10 );
if(@$profesorS2Miercoles10 == ""){

    @$respS2Miercoles10 = "0";
}else{
    @$respS2Miercoles10 = "<b>". $materiaS2Miercoles10['materia'] ."</b> </br>" . " ". $profesorS2Miercoles10['nombre'];
 
}

#11:00
@$S2Miercoles11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Miercoles', '11:00', '11:30');
@$idMateriaS2Miercoles11 = $S2Miercoles11['id_materia'];
@$materiaS2Miercoles11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Miercoles11 );
@$idProfesorS2Miercoles11 = $S2Miercoles11['id_profesor'];
@$profesorS2Miercoles11 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Miercoles11 );
if(@$profesorS2Miercoles11 == ""){

    @$respS2Miercoles11 = "0";
}else{
    @$respS2Miercoles11 = "<b>". $materiaS2Miercoles11['materia'] ."</b> </br>" . " ". $profesorS2Miercoles11['nombre'];
 
}

#12:00
@$S2Miercoles12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Miercoles', '12:00', '12:30');
@$idMateriaS2Miercoles12 = $S2Miercoles12['id_materia'];
@$materiaS2Miercoles12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Miercoles12 );
@$idProfesorS2Miercoles12 = $S2Miercoles12['id_profesor'];
@$profesorS2Miercoles12 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Miercoles12 );
if(@$profesorS2Miercoles12 == ""){

    @$respS2Miercoles12 = "0";
}else{
    @$respS2Miercoles12 = "<b>". $materiaS2Miercoles12['materia'] ."</b> </br>" . " ". $profesorS2Miercoles12['nombre'];
 
}

#13:00
@$S2Miercoles13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Miercoles', '13:00', '13:30');
@$idMateriaS2Miercoles13 = $S2Miercoles13['id_materia'];
@$materiaS2Miercoles13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Miercoles13 );
@$idProfesorS2Miercoles13 = $S2Miercoles13['id_profesor'];
@$profesorS2Miercoles13 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Miercoles13 );
if(@$profesorS2Miercoles13 == ""){

    @$respS2Miercoles13 = "0";
}else{
    @$respS2Miercoles13 = "<b>". $materiaS2Miercoles13['materia'] ."</b> </br>" . " ". $profesorS2Miercoles13['nombre'];
 
}

#14:00
@$S2Miercoles14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Miercoles', '14:00', '14:30');
@$idMateriaS2Miercoles14 = $S2Miercoles14['id_materia'];
@$materiaS2Miercoles14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Miercoles14 );
@$idProfesorS2Miercoles14 = $S2Miercoles14['id_profesor'];
@$profesorS2Miercoles14 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Miercoles14 );
if(@$profesorS2Miercoles14 == ""){

    @$respS2Miercoles14 = "0";
}else{
    @$respS2Miercoles14 = "<b>". $materiaS2Miercoles14['materia'] ."</b> </br>" . " ". $profesorS2Miercoles14['nombre'];
 
}

#15:00
@$S2Miercoles15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Miercoles', '15:00', '15:30');
@$idMateriaS2Miercoles15 = $S2Miercoles15['id_materia'];
@$materiaS2Miercoles15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Miercoles15 );
@$idProfesorS2Miercoles15 = $S2Miercoles15['id_profesor'];
@$profesorS2Miercoles15 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Miercoles15 );
if(@$profesorS2Miercoles15 == ""){

    @$respS2Miercoles15 = "0";
}else{
    @$respS2Miercoles15 = "<b>". $materiaS2Miercoles15['materia'] ."</b> </br>" . " ". $profesorS2Miercoles15['nombre'];
 
}

#16:00
@$S2Miercoles16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Miercoles', '16:00', '16:30');
@$idMateriaS2Miercoles16 = $S2Miercoles16['id_materia'];
@$materiaS2Miercoles16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Miercoles16 );
@$idProfesorS2Miercoles16 = $S2Miercoles16['id_profesor'];
@$profesorS2Miercoles16 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Miercoles16 );
if(@$profesorS2Miercoles16 == ""){

    @$respS2Miercoles16 = "0";
}else{
    @$respS2Miercoles16 = "<b>". $materiaS2Miercoles16['materia'] ."</b> </br>" . " ". $profesorS2Miercoles16['nombre'];
 
}

#17:00
@$S2Miercoles17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Miercoles', '17:00', '17:30');
@$idMateriaS2Miercoles17 = $S2Miercoles17['id_materia'];
@$materiaS2Miercoles17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Miercoles17 );
@$idProfesorS2Miercoles17 = $S2Miercoles17['id_profesor'];
@$profesorS2Miercoles17 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Miercoles17 );
if(@$profesorS2Miercoles17 == ""){

    @$respS2Miercoles17 = "0";
}else{
    @$respS2Miercoles17 = "<b>". $materiaS2Miercoles17['materia'] ."</b> </br>" . " ". $profesorS2Miercoles17['nombre'];
 
}

/*=============================================
   S2 JUEVES
=============================================*/

#8:00
@$S2Jueves8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Jueves', '08:00', '08:30');
@$idMateriaS2Jueves8 = $S2Jueves8['id_materia'];
@$materiaS2Jueves8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Jueves8 );
@$idProfesorS2Jueves8 = $S2Jueves8['id_profesor'];
@$profesorS2Jueves8 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Jueves8 );
if(@$profesorS2Jueves8 == ""){

    @$respS2Jueves8 = "0";
}else{
    @$respS2Jueves8 = "<b>". $materiaS2Jueves8['materia'] ."</b> </br>" . " ". $profesorS2Jueves8['nombre'];
 
}

#9:00
@$S2Jueves9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Jueves', '09:00', '09:30');
@$idMateriaS2Jueves9 = $S2Jueves9['id_materia'];
@$materiaS2Jueves9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Jueves9 );
@$idProfesorS2Jueves9 = $S2Jueves9['id_profesor'];
@$profesorS2Jueves9 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Jueves9 );
if(@$profesorS2Jueves9 == ""){

    @$respS2Jueves9 = "0";
}else{
    @$respS2Jueves9 = "<b>". $materiaS2Jueves9['materia'] ."</b> </br>" . " ". $profesorS2Jueves9['nombre'];
 
}

#10:00
@$S2Jueves10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Jueves', '10:00', '10:30');
@$idMateriaS2Jueves10 = $S2Jueves10['id_materia'];
@$materiaS2Jueves10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Jueves10 );
@$idProfesorS2Jueves10 = $S2Jueves10['id_profesor'];
@$profesorS2Jueves10 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Jueves10 );
if(@$profesorS2Jueves10 == ""){

    @$respS2Jueves10 = "0";
}else{
    @$respS2Jueves10 = "<b>". $materiaS2Jueves10['materia'] ."</b> </br>" . " ". $profesorS2Jueves10['nombre'];
 
}

#11:00
@$S2Jueves11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Jueves', '11:00', '11:30');
@$idMateriaS2Jueves11 = $S2Jueves11['id_materia'];
@$materiaS2Jueves11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Jueves11 );
@$idProfesorS2Jueves11 = $S2Jueves11['id_profesor'];
@$profesorS2Jueves11 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Jueves11 );
if(@$profesorS2Jueves11 == ""){

    @$respS2Jueves11 = "0";
}else{
    @$respS2Jueves11 = "<b>". $materiaS2Jueves11['materia'] ."</b> </br>" . " ". $profesorS2Jueves11['nombre'];
 
}

#12:00
@$S2Jueves12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Jueves', '12:00', '12:30');
@$idMateriaS2Jueves12 = $S2Jueves12['id_materia'];
@$materiaS2Jueves12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Jueves12 );
@$idProfesorS2Jueves12 = $S2Jueves12['id_profesor'];
@$profesorS2Jueves12 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Jueves12 );
if(@$profesorS2Jueves12 == ""){

    @$respS2Jueves12 = "0";
}else{
    @$respS2Jueves12 = "<b>". $materiaS2Jueves12['materia'] ."</b> </br>" . " ". $profesorS2Jueves12['nombre'];
 
}

#13:00
@$S2Jueves13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Jueves', '13:00', '13:30');
@$idMateriaS2Jueves13 = $S2Jueves13['id_materia'];
@$materiaS2Jueves13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Jueves13 );
@$idProfesorS2Jueves13 = $S2Jueves13['id_profesor'];
@$profesorS2Jueves13 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Jueves13 );
if(@$profesorS2Jueves13 == ""){

    @$respS2Jueves13 = "0";
}else{
    @$respS2Jueves13 = "<b>". $materiaS2Jueves13['materia'] ."</b> </br>" . " ". $profesorS2Jueves13['nombre'];
 
}

#14:00
@$S2Jueves14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Jueves', '14:00', '14:30');
@$idMateriaS2Jueves14 = $S2Jueves14['id_materia'];
@$materiaS2Jueves14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Jueves14 );
@$idProfesorS2Jueves14 = $S2Jueves14['id_profesor'];
@$profesorS2Jueves14 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Jueves14 );
if(@$profesorS2Jueves14 == ""){

    @$respS2Jueves14 = "0";
}else{
    @$respS2Jueves14 = "<b>". $materiaS2Jueves14['materia'] ."</b> </br>" . " ". $profesorS2Jueves14['nombre'];
 
}

#15:00
@$S2Jueves15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Jueves', '15:00', '15:30');
@$idMateriaS2Jueves15 = $S2Jueves15['id_materia'];
@$materiaS2Jueves15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Jueves15 );
@$idProfesorS2Jueves15 = $S2Jueves15['id_profesor'];
@$profesorS2Jueves15 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Jueves15 );
if(@$profesorS2Jueves15 == ""){

    @$respS2Jueves15 = "0";
}else{
    @$respS2Jueves15 = "<b>". $materiaS2Jueves15['materia'] ."</b> </br>" . " ". $profesorS2Jueves15['nombre'];
 
}

#16:00
@$S2Jueves16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Jueves', '16:00', '16:30');
@$idMateriaS2Jueves16 = $S2Jueves16['id_materia'];
@$materiaS2Jueves16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Jueves16 );
@$idProfesorS2Jueves16 = $S2Jueves16['id_profesor'];
@$profesorS2Jueves16 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Jueves16 );
if(@$profesorS2Jueves16 == ""){

    @$respS2Jueves16 = "0";
}else{
    @$respS2Jueves16 = "<b>". $materiaS2Jueves16['materia'] ."</b> </br>" . " ". $profesorS2Jueves16['nombre'];
 
}

#17:00
@$S2Jueves17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Jueves', '17:00', '17:30');
@$idMateriaS2Jueves17 = $S2Jueves17['id_materia'];
@$materiaS2Jueves17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Jueves17 );
@$idProfesorS2Jueves17 = $S2Jueves17['id_profesor'];
@$profesorS2Jueves17 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Jueves17 );
if(@$profesorS2Jueves17 == ""){

    @$respS2Jueves17 = "0";
}else{
    @$respS2Jueves17 = "<b>". $materiaS2Jueves17['materia'] ."</b> </br>" . " ". $profesorS2Jueves17['nombre'];
 
}

/*=============================================
   S2 VIERNES
=============================================*/

#8:00
@$S2Viernes8 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Viernes', '08:00', '08:30');
@$idMateriaS2Viernes8 = $S2Viernes8['id_materia'];
@$materiaS2Viernes8 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Viernes8 );
@$idProfesorS2Viernes8 = $S2Viernes8['id_profesor'];
@$profesorS2Viernes8 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Viernes8 );
if(@$profesorS2Viernes8 == ""){

    @$respS2Viernes8 = "0";
}else{
    @$respS2Viernes8 = "<b>". $materiaS2Viernes8['materia'] ."</b> </br>" . " ". $profesorS2Viernes8['nombre'];
 
}

#9:00
@$S2Viernes9 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Viernes', '09:00', '09:30');
@$idMateriaS2Viernes9 = $S2Viernes9['id_materia'];
@$materiaS2Viernes9 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Viernes9 );
@$idProfesorS2Viernes9 = $S2Viernes9['id_profesor'];
@$profesorS2Viernes9 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Viernes9 );
if(@$profesorS2Viernes9 == ""){

    @$respS2Viernes9 = "0";
}else{
    @$respS2Viernes9 = "<b>". $materiaS2Viernes9['materia'] ."</b> </br>" . " ". $profesorS2Viernes9['nombre'];
 
}

#10:00
@$S2Viernes10 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Viernes', '10:00', '10:30');
@$idMateriaS2Viernes10 = $S2Viernes10['id_materia'];
@$materiaS2Viernes10 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Viernes10 );
@$idProfesorS2Viernes10 = $S2Viernes10['id_profesor'];
@$profesorS2Viernes10 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Viernes10 );
if(@$profesorS2Viernes10 == ""){

    @$respS2Viernes10 = "0";
}else{
    @$respS2Viernes10 = "<b>". $materiaS2Viernes10['materia'] ."</b> </br>" . " ". $profesorS2Viernes10['nombre'] ;
 
}

#11:00
@$S2Viernes11 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Viernes', '11:00', '11:30');
@$idMateriaS2Viernes11 = $S2Viernes11['id_materia'];
@$materiaS2Viernes11 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Viernes11 );
@$idProfesorS2Viernes11 = $S2Viernes11['id_profesor'];
@$profesorS2Viernes11 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Viernes11 );
if(@$profesorS2Viernes11 == ""){

    @$respS2Viernes11 = "0";
}else{
    @$respS2Viernes11 = "<b>". $materiaS2Viernes11['materia'] ."</b> </br>" . " ". $profesorS2Viernes11['nombre'] ;
 
}

#12:00
@$S2Viernes12 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Viernes', '12:00', '12:30');
@$idMateriaS2Viernes12 = $S2Viernes12['id_materia'];
@$materiaS2Viernes12 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Viernes12 );
@$idProfesorS2Viernes12 = $S2Viernes12['id_profesor'];
@$profesorS2Viernes12 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Viernes12 );
if(@$profesorS2Viernes12 == ""){

    @$respS2Viernes12 = "0";
}else{
    @$respS2Viernes12 = "<b>". $materiaS2Viernes12['materia'] ."</b> </br>" . " ". $profesorS2Viernes12['nombre'] ;
 
}

#13:00
@$S2Viernes13 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Viernes', '13:00', '13:30');
@$idMateriaS2Viernes13 = $S2Viernes13['id_materia'];
@$materiaS2Viernes13 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Viernes13 );
@$idProfesorS2Viernes13 = $S2Viernes13['id_profesor'];
@$profesorS2Viernes13 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Viernes13 );
if(@$profesorS2Viernes13 == ""){

    @$respS2Viernes13 = "0";
}else{
    @$respS2Viernes13 = "<b>". $materiaS2Viernes13['materia'] ."</b> </br>" . " ". $profesorS2Viernes13['nombre'] ;
 
}

#14:00
@$S2Viernes14 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Viernes', '14:00', '14:30');
@$idMateriaS2Viernes14 = $S2Viernes14['id_materia'];
@$materiaS2Viernes14 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Viernes14 );
@$idProfesorS2Viernes14 = $S2Viernes14['id_profesor'];
@$profesorS2Viernes14 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Viernes14 );
if(@$profesorS2Viernes14 == ""){

    @$respS2Viernes14 = "0";
}else{
    @$respS2Viernes14 = "<b>". $materiaS2Viernes14['materia'] ."</b> </br>" . " ". $profesorS2Viernes14['nombre'] ;
 
}

#15:00
@$S2Viernes15 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Viernes', '15:00', '15:30');
@$idMateriaS2Viernes15 = $S2Viernes15['id_materia'];
@$materiaS2Viernes15 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Viernes15 );
@$idProfesorS2Viernes15 = $S2Viernes15['id_profesor'];
@$profesorS2Viernes15 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Viernes15 );
if(@$profesorS2Viernes15 == ""){

    @$respS2Viernes15 = "0";
}else{
    @$respS2Viernes15 = "<b>". $materiaS2Viernes15['materia'] ."</b> </br>" . " ". $profesorS2Viernes15['nombre'] ;
 
}

#16:00
@$S2Viernes16 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Viernes', '16:00', '16:30');
@$idMateriaS2Viernes16 = $S2Viernes16['id_materia'];
@$materiaS2Viernes16 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Viernes16 );
@$idProfesorS2Viernes16 = $S2Viernes16['id_profesor'];
@$profesorS2Viernes16 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Viernes16 );
if(@$profesorS2Viernes16 == ""){

    @$respS2Viernes16 = "0";
}else{
    @$respS2Viernes16 = "<b>". $materiaS2Viernes16['materia'] ."</b> </br>" . " ". $profesorS2Viernes16['nombre'] ;
 
}

#17:00
@$S2Viernes17 = ControladorHorarios::ctrMostrarHorarioPersonalizado('2', 'Viernes', '17:00', '17:30');
@$idMateriaS2Viernes17 = $S2Viernes17['id_materia'];
@$materiaS2Viernes17 = ControladorMaterias::ctrMostrarMaterias('id', $idMateriaS2Viernes17 );
@$idProfesorS2Viernes17 = $S2Viernes17['id_profesor'];
@$profesorS2Viernes17 = ControladorAdministradores::ctrMostrarAdministradores('id', $idProfesorS2Viernes17 );
if(@$profesorS2Viernes17 == ""){

    @$respS2Viernes17 = "0";
}else{
    @$respS2Viernes17 = "<b>". $materiaS2Viernes17['materia'] ."</b> </br>" . " ". $profesorS2Viernes17['nombre'] ;
 
}

?>