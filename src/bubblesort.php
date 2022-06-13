<?php
    Namespace ITEC\Presencial\DAW\bubbleshort;

    function bubblesort($array){
        if (!is_array($array)) return null;
        if (count($array)<2) return $array;
        for ($i=1; $i<count($array);$i++){ //Empieza por 1
            for ($j=0; $j<count($array)-$i;$j++){ //La j va trayendo números a la izquierda de la i 
                //ordenandolos. Pero el proceso comienza al final del array y se va reduciendo 
                //desde ahí para que cada paso no coja los índices ya en uso
                if ($array[$j]>[$j+1]){
                    $aux=$array[$j];
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
    
    function bubblesort2($array,$class){
        if (!is_array($array)) return null;
        if (count($array)<2) return $array;
        for ($i=1; $i<count($array);$i++){ //Empieza por 1
            for ($j=0; $j<count($array)-$i;$j++){ //La j va trayendo números a la izquierda de la i 
                //ordenandolos. Pero el proceso comienza al final del array y se va reduciendo 
                //desde ahí para que cada paso no coja los índices ya en uso
                if (demayoramenor($array[$j],[$j+1],$class)){
                    $aux=$array[$j];
                    $array[$j]=$array[$j+1];
                    $array[$j+1]=$aux;
                }
            }
        }
        return $array;
    }