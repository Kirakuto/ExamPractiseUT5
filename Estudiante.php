<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Estudiante
 *
 * @author WEB2-21
 */
class Estudiante extends Usuario{
    
    public string $grado;
    public int $limite_prestaciones = 3;
    public int $prestamos_actuales = 0;
    public array $libros_prestados = [];
    
    public function __construct(string $grado) {
        $this->grado = $grado;
        parent::__construct($nombre, $email, $fecha_registro);
        }

    
    public function get_tipo_usuario(){
        return "Estudiante";
    }
    
    public function get_prestamos(){
        return $this->libros_prestados;
    }
    
    public function puede_tomar_prestado(){
        return $this->limite_prestaciones > 0 ? true : false;
    }
    
}
