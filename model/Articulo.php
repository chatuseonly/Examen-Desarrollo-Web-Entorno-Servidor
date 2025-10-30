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

    
