<?php
include "conexion.php";

$accion=$_GET["accion"];

switch($accion){
    case 'guardarAlumno':

        $clave=$_GET["clave"];
        $nombre=$_GET["nombre"];
        $apelido=$_GET["apellido"];

        $sql="insert into alumno values (0,'$clave', '$nombre', '$apelido')";

        $ejecutarSQL=$conexion->query($sql);

        if($ejecutarSQL){
            echo "1";
        }
        else {
            echo "0";
        }
        break;

//ELIMINAR ID

case 'eliminarAlumno':

    $id=$_GET["id"];

    $sql="delete from alumno where id='$id'";

    $ejecutarSQL=$conexion->query($sql);

    if($ejecutarSQL){
        echo "1";
    }
    else {
        echo "0";
    }
    break;


    //Editar alumno
    case 'editarAlumno':

        //Recibir los datos
        $clave=$_GET["clave"];
        $nombre=$_GET["nombre"];
        $apellido=$_GET["apellido"];

        $sql="update alumno set nombre='$nombre', apellido='$apellido' where clave='$clave'";

        $ejecutarSQL=$conexion->query($sql);

        if($ejecutarSQL){
            echo "1";
        }
        else {
            echo "0";
        }
        break;

        
}
?>