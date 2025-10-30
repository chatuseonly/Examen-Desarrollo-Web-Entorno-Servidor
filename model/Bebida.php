<?php
// Clase Bebida que hereda de Artículo
class Bebida extends Articulo{
     public $tamano;
     public $temperatura;
     
     public function __construct($tamano, $temperatura, $nombre, $precio, $disponibilidad, $categoria){
        parent::__construct($nombre, $precio, $disponibilidad, $categoria);
        $this -> tamano = $tamano;
        $this -> $temperatura = $temperatura;
        
     }

     //GETTERS
     public function getTamano(){
        return $this -> tamano;
     }

     public function getTemperatura(){
        return $this -> temperatura;
     }

     //SETTERS

     public function setTamano($tamano){
        $this -> tamano = $tamano;
        return $this;
     }

     public function setTemperatura($temperatura){
      $this -> temperatura = $temperatura;
      return $this;
     }

     //Método mágico __toString()

     public function __toString(){
        return "Tamaño" . $this -> tamano . "<br>" . "Temperatura: " . $this -> temperatura . "<br>";
     }







}
