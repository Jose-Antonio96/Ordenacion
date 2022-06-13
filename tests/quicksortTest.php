<?php
use PHPUnit\Framework\TestCase;
use ITEC\Presencial\DAW\quicksort;
    

final class quicksortTest extends TestCase{
    public function DPtestquicksort(){
        $numeros=[7,5,8,2,4,1,3];
        $numeros1=(9);
        $numeros2=[2,5,1,9,5,4,6];
        $numeros3=(12);
        $numerosordenador=[1,2,3,4,5,7,8];
        return[
            "No es un array"=>[null, "a"],
            "Un array numérico"=>[$numerosordenador,$numeros],
            "Un array numérico1"=>[$numerosordenador,$numeros2],
            "No es un array2"=>[null, "b"],
            "La que ha liao el pollo"=>[[1],[1]]
        ];
    }      
    /**
     * @dataProvider DPtestquicksort
     */ 
    public function testquicksort($esperado, $numerosordenador){
        $this->assertEquals($esperado, ITEC\Presencial\DAW\quicksort\quicksort($numerosordenador));
    }
}   
?>