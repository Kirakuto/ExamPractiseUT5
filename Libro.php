<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Libro
 *
 * @author WEB2-21
 */
class Libro {

    public static int $total_libros;
    public static int $total_prestados;
    public bool $disponible = true;
    public string $titulo;
    public string $isbn;
    public string $autor;
    public int $numero_paginas;
    public Usuario $usuario_prestamo;

    public function __construct(string $titulo, string $isbn, string $autor, int $numero_paginas) {
        $this->disponible = $disponible;
        $this->titulo = $titulo;
        $this->isbn = $isbn;
        $this->autor = $autor;
        $this->numero_paginas = $numero_paginas;
    }

    public function prestar(Libro $libro,Usuario $usuario) {
        if ($libro->disponible == true) {
            $libro->disponible = false;
            self::$total_prestados++;
            $this->usuario_prestamo = $usuario;
        }else{
            echo "<h2 style='color:red;font-weight:bold;'> El libro ya esta prestado </h2>";
        }
    }
    
    public function devolver(Libro $libro,Usuario $usuario){
        if ($libro->disponible == false) {
            $libro->disponible = true;
            self::$total_prestados--;
            unset($this->usuario_prestamo);
        }else{
            echo "<h2 style='color:red;font-weight:bold;'> El libro no esta prestado </h2>";
        }
    }
    
    public function get_info(){
        return $info = ["Disponible"=>[$this->disponible], "Titulo" =>[$this->titulo], "Isbn"=>[$this->isbn], "Autor"=>[$this->autor], "Numero de paginas"=>[$this->numero_paginas]];
    }
    
    public static function get_total_libros(){
        return self::total_libros;
    }
    
    public static function get_libros_prestados(){
        return self::$total_prestados;
    }
 
    public function equals(Libro $otro){
        return this->isbn === $otro["isbn"] ? true : false;
    }
}
