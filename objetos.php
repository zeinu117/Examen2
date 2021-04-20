<?php
          
    class clase{
        #mis atributos
        public $resultado = 0;

        #mis metodos
        public function miMetodo($v1,$v2){
            $this->resultado =$v1+$v2;

            return $this->resultado;
        }

        

    }
    #instanciar un objeto
    $miObjeto = new clase();

    echo $miObjeto->miMetodo(5,10);
    
?>