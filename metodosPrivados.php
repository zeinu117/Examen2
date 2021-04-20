<?php

    #un metodo privado solo puede ser 
    #accedido en la misma clase que solo fue creado y
    #al mismo tiempo no puede mostrarse fuera o en instancia
    //debe manejarse dentro de un metodo de la misma clase


    class clase1{
        private  static function saludar(){
            return "saludando";
        }

        public static function mandaSaludo(){
            return self::saludar();
        }
    }

    echo clase1::mandaSaludo();




?>