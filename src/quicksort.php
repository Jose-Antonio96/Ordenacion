<?php
namespace ITEC\Presencial\DAW\quicksort;
function quicksort($array)
{
    if (count($array) < 2) {
        return $array;
    }
    $left = $right = array();
    reset($array);
    $pivot_key = key($array);
    $pivot = array_shift($array);
    foreach ($array as $k => $v) {
        if ($v['times_ordered'] > $pivot['times_ordered']) {
            $left[$k] = $v;
        } else {
            $right[$k] = $v;
        }
    }
    return array_merge(quicksort($left), array($pivot_key => $pivot), quicksort($right));
}
?>