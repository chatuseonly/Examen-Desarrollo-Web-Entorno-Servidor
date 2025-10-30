<?php
// Clase Artículo
 class Articulo{
 
    protected $nombre;
    protected $precio;
    protected $disponibilidad;
    protected $categoria;

    public function __construct($nombre, $precio, $disponibilidad, $categoria){
        $this -> nombre = $nombre;
        $this -> precio = $precio;
        $this -> disponibilidad = $disponibilidad;
        $this -> categoria = $categoria;
    }

    //GETTERS
    public function getNombre(){
        return $this -> nombre;
    }

    public function getPrecio(){
        return $this -> precio;
    }

    public function getCategoria(){
        return $this -> categoria;
    }

    //SETTERS

    public function setNombre($nombre){
        $this -> nombre = $nombre;
        return $this;
    }

    public function setPrecio($precio){
        $this -> precio = $precio;
        return $this;
    }

    public function setDisponibilidad($disponibilidad){
        $this -> disponibilidad = $disponibilidad;
        return $this;
    }

    //Método mágico __toString()

    public function __toString(){
        return "Nombre:" . $this -> nombre . "<br>" . "Precio: " . $this -> precio . "<br>" . "Disponibilidad: " . $this -> disponibilidad . "<br>" . "Categoría: " . $this -> categoria . "<br>"; 
    }
  
}
