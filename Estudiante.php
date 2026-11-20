<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */
require_once 'Usuario.php';
/**
 * Description of Estudiante
 *
 * @author WEB2-21
 */
class Estudiante extends Usuario {

    public string $grado;
    public int $limite_prestamos = 3;
    public int $prestamos_actuales = 0;
    public array $libros_prestados = [];

    public function __construct(string $grado) {
        $this->grado = $grado;
        parent::__construct($nombre, $email, $fecha_registro);
        parent::$total_usuarios++;
    }

    public function get_tipo_usuario() : string{
        return "Estudiante";
    }

    public function get_prestamos() : array{
        return $this->libros_prestados;
    }

    public function puede_tomar_prestado() : bool{
        return $this->limite_prestamos > 0 ? true : false;
    }
    
    #[\Override]
    public function get_datos() : array{
        $info = parent::get_datos();
        $info["grado"] = $this->grado;
        $info["limite_prestamos"] = $this->limite_prestamos;
        $info["prestamos_actuales"] = $this->prestamos_actuales;
        $info["libros_prestados"] = $this->libros_prestados;
        
        return $info;
    }
}
