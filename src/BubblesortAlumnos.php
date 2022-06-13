<?php
namespace ITEC\Presencial\DAW\BubblesortAlumnos;
use ITEC\Presencial\DAW\alumnos;
use ITEC\Presencial\DAW\fechas;
    /*
fecha de los alumnos de mayor a menor
*/
function bubblesort2Alumnos($array,$class="desc"){
    if (!is_array($array)) return null;
    if (count($array)<2) return $array;
    for ($i=1; $i<count($array);$i++){ 
        for ($j=0; $j<count($array)-$i;$j++){ //Iteramos por todo el array pero siempre reduciendo en uno,
            //que es el índice
            if (demayoramenor(\ITEC\Presencial\DAW\alumnos\getAge($array[$j]),
            \ITEC\Presencial\DAW\alumnos\getAge($array[$j+1]),$class)){
                $aux=$array[$j]; //hace un intercambio de valores
                $array[$j]=$array[$j+1];
                $array[$j+1]=$aux;
            }
        }
    }
    return $array;
}

function demayoramenor($a,$b,$class){
    return ($class=="asc"?$a>$b:($class="desc"?$a<$b:null));
}

?>