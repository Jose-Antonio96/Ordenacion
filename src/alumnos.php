<?php
namespace ITEC\Presencial\DAW\alumnos;
use ITEC\Presencial\DAW\fechas;

include "./vendor/autoload.php"; //se usa para incluir archivos
/*
php script que nos permitira guardar información sobre los alumnos
nombre, fecha nacimiento e email 
[
    "nombre"->valor]
    "edad"->valor>]
    "email"->valor>]
    "fecha nacimiento"->valor]
    "dni"->valor>]

    funcion factorial (toma valores)

    devuelve array asociativo
*/

function crearalumnos(
    $nombre, 
    $direccion,
    $fechanacimiento, 
    $email, 
    $dni
){
    $alumno = [
        "nombre"=>$nombre,
        "direccion"=>$direccion,
        "fechanacimiento"=>$fechanacimiento,
        "email"=>$email,
        "dni"=>$dni
    ];
    return $alumno; 
}
function getAge($alumno){
    return \ITEC\Presencial\DAW\fechas\yearsFromDate($alumno["fechanacimiento"]);
}

function getBornDate($alumno){
    return \DateTime::createFromFormat("d/m/Y", $alumno["fechanacimiento"]);
}
function getElderDate($ListadeAlumnos)
{
    if (count($ListadeAlumnos)<1) return NAN; //Si el numero de personas en la lista es menor a 1, retorna NAN

    $Elder = getBornDate($ListadeAlumnos[0]);//Aquí se asume que el primero es el más viejo, siguiente línea se empieza a recorrer
    for ($i=1;$i<count($ListadeAlumnos);$i++) //para cuando el índice es 1, menor al número de lista de personas, se incrementa en 1
    {
        if(getBornDate($ListadeAlumnos[$i])<$Elder){ //Se revisa índice por índice para encontrar al más anciano
            $Elder= getElderDate($ListadeAlumnos[$i]);//Elder es igual a la fecha de nacimiento de cierto índice que resulta ser el mas anciano
        }
    }
    return $Elder->format("d/m/Y");//retorna Elder con formato

}

function getElderAlumno($ListadeAlumnos)
{
    if (count($ListadeAlumnos)<1) return NAN; //
    $ElderPerson= $ListadeAlumnos[0];
    $ElderDate = getBornDate($ListadeAlumnos[0]);//
    for ($i=1;$i<count($ListadeAlumnos);$i++) //
    {
        if(getBornDate($ListadeAlumnos[$i])<$ElderDate){ //
            $ElderPerson= $ListadeAlumnos[$i];
            $ElderDate= getElderDate($ListadeAlumnos[$i]);//
        }
    }
    return $ElderPerson;//

}

function getAlumnodata($alumno, $nombredato){
    if(!isset($alumno[$nombredato])) return null;//nos aseguramos de que el valor existe
    return $alumno[$nombredato];
}

function getElderAlumnoData($ListadeAlumnos,$Campo){
    $ElderPerson=getElderAlumno($ListadeAlumnos);
    return getElderAlumno($ListadeAlumnos,$Campo);
}

?>
