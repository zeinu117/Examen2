<?php


    //los metodos protegidos solo puede ser accedido desde
    #herencia de clases o desde clases hijas

    class clasePadre{
        protected function metodo1(){
            return "metodo protegido";
        }
    }

    class claseHija extends clasePadre{
        public function muestra(){
            return parent::metodo1();
        }
    }

    $obj = new claseHija();
    echo $obj->muestra();

?>