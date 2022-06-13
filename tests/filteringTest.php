<?php
use PHPUnit\Framework\TestCase;
use ITEC\Presencial\DAW\filter;

     
    final class filteringTest extends TestCase{
        public function DPtestlistaAlumnosfiltrar(){
                $alumno1 = ITEC\Presencial\DAW\alumnos\crearalumnos(
                "nombre3",
                "calle tres",
                "12/04/2005",
                "e@.com",
                "12345678V",
                );
                $alumno2 = ITEC\Presencial\DAW\alumnos\crearalumnos(
                    "nombre2",
                    "calle dos",
                    "12/04/2004",
                    "e@.com",
                    "12345678V",
                );
                $alumno3 = ITEC\Presencial\DAW\alumnos\crearalumnos(
                    "nombre3",
                    "calle tres",
                    "12/04/2002",
                    "e@.com",
                    "12345678V",
                );
                $alumno4 = ITEC\Presencial\DAW\alumnos\crearalumnos(
                    "nombre4",
                    "calle cuatro",
                    "12/04/1965",
                    "e@.com",
                    "12345678V",
                );
                $alumno5 = ITEC\Presencial\DAW\alumnos\crearalumnos(
                    "nombre4",
                    "calle cinco",
                    "12/04/1996",
                    "e@.com",
                    "12345678V",
                );
                $alumno6 = ITEC\Presencial\DAW\alumnos\crearalumnos(
                    "nombre4",
                    "calle six",
                    "12/04/1987",
                    "e@.com",
                    "12345678V",
                );
                
                $edad = 20;
                $edad2 = 19;
                $tablaentrada1=[$alumno1, $alumno2, $alumno3];
                $esperado1 =[];
                $tablaentrada2=[$alumno4, $alumno5, $alumno6];
                $esperado2=[$alumno4, $alumno5, $alumno6];
                $tablaentrada3= [$alumno1, $alumno2, $alumno3, $alumno4, $alumno5, $alumno6];
                $esperado3=[$alumno3, $alumno4, $alumno5, $alumno6];

            return [
                "No queda ni uno"=>[$esperado1, $tablaentrada1, $edad],
                "Entran todos"=>[$esperado2, $tablaentrada2, $edad],
                "Entran todos menos alumno1 y alumno 2"=>[$esperado3, $tablaentrada3, $edad2]
            ];
        }
        /**
         * @dataProvider DPtestlistaAlumnosfiltrar
         */
        public function testlistaAlumnosfiltrar($esperado, $array, $elderthan){
            $this->assertEquals($esperado,\ITEC\Presencial\DAW\filter\filtering($array, $elderthan));
        }
 
        public function DPtestFiltrarPorCampo(){
                $alumno7 = ITEC\Presencial\DAW\alumnos\crearalumnos(
                    "nombre3",
                    "calle tres",
                    "12/04/2005",
                    "e@.com",
                    "12345678V",
                );
                $alumno8 = ITEC\Presencial\DAW\alumnos\crearalumnos(
                    "nombre2",
                    "calle dos",
                    "12/04/2004",
                    "e@.com",
                    "12345678V",
                );
                $alumno9 = ITEC\Presencial\DAW\alumnos\crearalumnos(
                    "nombre3",
                    "calle six",
                    "12/04/2002",
                    "e@.com",
                    "12345678V",
                );
                $alumno10 = ITEC\Presencial\DAW\alumnos\crearalumnos(
                    "nombre4",
                    "calle six",
                    "12/04/1965",
                    "e@.com",
                    "12345678V",
                );
                $alumno11 = ITEC\Presencial\DAW\alumnos\crearalumnos(
                    "nombre4",
                    "calle six",
                    "12/04/1996",
                    "e@.com",
                    "12345678V",
                );
                $alumno12 = ITEC\Presencial\DAW\alumnos\crearalumnos(
                    "nombre4",
                    "calle six",
                    "12/04/1987",
                    "e@.com",
                    "12345678V",
                );
                
                $lista=[$alumno7, $alumno8, $alumno9, $valor];
                $esperado6 =[$alumno7, $alumno8, $alumno9, null];
                $lista1=[$alumno10, $alumno11, $alumno12];
                $esperado7=[$alumno10, $alumno11, $alumno12];
                $campo="direccion";
                $valor="calle six";
        
            return [
                "Da null"=>[$esperado6, $lista, $campo, $valor],
                "Da el nombre"=>[$esperado7, $lista1, $campo, $valor],
            ];
        }
        /**
         * @dataProvider DPtestFiltrarPorCampo
         */

        public function testFiltrarPorCampo($esperado, $lista, $campo, $valor){
            $this->assertEquals($esperado, \ITEC\Presencial\DAW\filter\FiltrarPorCampo($lista, $campo, $valor));
        }
    }

?>