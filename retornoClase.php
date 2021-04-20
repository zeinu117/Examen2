<?php

    class retornoDatos{
        //tipo String
        #tipo Entero
        //tipo arreglo
        #tipo json

        public function retornastring($edad){
            if($edad > 18){
                return 'Es mayor de edad';
            }else{
                return "No es mayor de ";
            }
        }
        public function retornaEntero($valor){
            if($valor > 0){
                return 1;
            }else{
                return 0;
            }
        }

        public function retornarreglo($ciclos){
            $datos = array();
            for($i = 0; $i < $ciclos; $i++){
                $datos[$i]=$i;
            }
            return $datos;
        }

        public function retornajson(){
            $arr=array(
                'hdd' => 500,
                'pantalla' => 21,
                "ram" => 8
            );
            return json_encode($arr);
        }
    }

    $cadena= new retornoDatos();
    var_dump($cadena->retornastring(20));
    echo "<br>";
    var_dump($cadena->retornaEntero(1));
    echo "<br>";
    var_dump($cadena->retornarreglo(10));
    echo "<br>";
    var_dump($cadena->retornajson());

?>