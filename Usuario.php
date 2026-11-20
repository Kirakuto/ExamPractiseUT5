<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of Usuario
 *
 * @author WEB2-21
 */
abstract class Usuario {
    
    public string $nombre;
    public string $email;
    public string $fecha_registro;
    public static int $total_usuarios;
    
    public function __construct(string $nombre, string $email, string $fecha_registro) {
        $this->nombre = $nombre;
        $this->email = $email;
        $this->fecha_registro = $fecha_registro;
    }
    
    public function get_datos() : array{
        return $info = ["Nombre"=>$this->nombre, "Email" =>$this->email, "Fecha de registro"=>$this->fecha_registro];
    }
    public abstract function get_tipo_usuario();
}