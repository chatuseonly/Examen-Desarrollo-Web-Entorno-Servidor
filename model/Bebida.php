<?php
// Clase Bebida que hereda de Artículo
class Bebida extends Articulo{
     private $tamano;
     
     public function __construct($tamano, $nombre, $precio, $disponibilidad, $categoria){
        parent::__construct($nombre, $precio, $disponibilidad, $categoria);
        $this -> tamano = $tamano;
     }

     //GETTERS
     public function getTamano(){
        return $this -> tamano;
     }

     //SETTERS

     public function setTamano($tamano){
        $this -> tamano = $tamano;
        return $this;
     }

     //Método mágico __toString()

     public function __toString(){
        return "Tamaño" . $this -> tamano . "<br>";
     }







}
