<?php
/**
* @ Author: José Antonio Páez Rodríguez
* @ Create Time: 22-03-2022 10:30:52
* @ Modified by: Your name
* @ Modified time: 2022-03-30 11:26:30
* @ Description: Módulo fechas.php define las funciones de manejo de fechas.
*/

namespace ITEC\Presencial\DAW\fechas;
function validarFecha($fechanacimiento){

    return validateDateWithFormat($fechanacimiento); //Funcion establecida para sacar fechas en formato inglés
     
 }
/**
 * Validar una fecha codificada en un string a DateTime
 *
 * @param string $date
 * Fecha codificada en un string
 * @param string $format
 * Formato de fecha pasada en el string. Por defecto, "d/m/Y"
 * @return boolean
 * Si la fecha es válida con ese formato devolverá true
 */
 function validateDateWithFormat($date, $format='d/m/Y')
 {
   $d=\DateTime::createFromFormat($format,$date);
 
   return $d && $d->format($format) === $date;
 }
 
 function validar_fecha_español($fechanacimiento){
   $valores = explode("-",$fechanacimiento);
   return(
     count($valores) == 3 &&
     checkdate($valores[1], $valores[0], $valores[2]
     )
   );   
 
  }

function diferenciaFechas($fecha1,$fecha2,$format="d/m/Y"){
  $firstdate = \DateTime::createFromFormat($format,$fecha1);
  $secondate = \DateTime::createFromFormat($format,$fecha2);
  return $firstdate->diff($secondate);
}
  

function fechaactual($format="d/m/Y"){
  return \DateTime::createFromFormat($format, date($format));

}
function getCurrentYear(){
  return \DateTime::createFromFormat("Y",date("Y"));

}
function yearsFromDate($date){
  $firstdate= \DateTime::createFromFormat("d/m/Y",$date);
  $secondate = fechaactual();
  return $firstdate->diff($secondate)->y;
}
?>
