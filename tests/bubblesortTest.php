<?php
use PHPUnit\Framework\TestCase;
use ITEC\Presencial\DAW\bubbleshort;
         

final class bubblesortTest extends TestCase{
    public function DPtestbubbleSort(){
        $numeros=[7,5,8,2,4,1,3];
        $numeros1=(9);
        $numeros2=[2,5,1,9,5,4,6];
        $numeros3=(12);
        $numerosordenador=[1,2,3,4,5,7,8];
        return[
            "No es un array"=>[null,"a"],
            "Un array numérico"=>[$numerosordenador,$numeros],
            "Un array numérico1"=>[$numerosordenador,$numeros2],
            "No es un array2"=>[null, "b"],
            "La que ha liao el pollo"=>[[1],[1]]
        ];
    }      
    /**
     * @dataProvider DPtestbubbleSort
     */ 
    public function testbubbleSort($esperado, $numerosordenador){
        $this->assertEquals($esperado, ITEC\Presencial\DAW\bubbleshort\bubblesort($numerosordenador));
    }

    public function DPtestbubbleSort2(){
        $numeros4=[7,5,8,2,4,1,3,6];
        $numeros5=(9);
        $numerosordenador2=[8,7,6,5,4,3,2,1];
        return[
            "No es un array"=>[null,"desc"],
            "Un array numérico asc"=>[$numerosordenador2,$numeros5,"desc"],
            "No es un array2"=>[null, "b","desc"],
            "La que ha liao el pollo"=>[[1],[1],"desc"]
        ];
    }   
    /**
     * @dataProvider DPtestbubbleSort2
     */ 
    public function testbubbleSort2($esperado,$numerosordenador2,){
        $this->assertEquals($esperado, ITEC\Presencial\DAW\bubbleshort\bubblesort2($actual));
    }
}   

?>