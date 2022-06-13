<?php
namespace ITEC\Presencial\DAW\filter;
use ITEC\Presencial\DAW\alumnos;
use ITEC\Presencial\DAW\fechas;

/*
Función dada una lista de personas se le da además una edad y devuelve una lista de personas
 con edad mayor a la puesta
*/

    function filtering($array, $elderthan){
        if (!is_array($array)) return null;
        if (!count($array)>0) return null;
        $lista_alumnos= [];
        for($indice=0; $indice<count($array); $indice++){
            if(\ITEC\Presencial\DAW\alumnos\getAge($array[$indice]) >= $elderthan)
            $lista_alumnos[]=$array[$indice];
        }
        return $lista_alumnos;
    }

/*Listado de alumnos, nombre del campo, valor que yo busco. Si ese valor no está, paso*/

    function FiltrarPorCampo($lista, $campo, $valor){
        if(!count($lista)>0) return [];
        if(!in_array($campo, array_keys($lista[0]))) return null;
        $listado=[];
        for ($indice=0; $indice<count($lista); $indice++){
            if (\ITEC\Presencial\DAW\alumnos\getAlumnodata($lista[$indice],$campo)===$valor);
            $listado[]=$lista[$indice];
        }
        return $listado;
    }

    function filterPersonByField($List, $field, $Value){
        if (!is_array($List))
            throw new Exception('Parámetro $List no es un array');
        if (!count($List) > 0)
            throw new Exception('El array no tiene suficientes elementos');

        $result = [];
        for ($i=0; $i < count($List); $i++){
            if (\is_null(getPersonaData($List[$i], $field)))
                throw new Exception("Array mal formado");
            if (getPersonaData($List[$i], $field)===$value);
                $result[]= $List[$i];
        }
        $result;
    }

?>