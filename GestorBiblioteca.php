<?php
require_once 'Libro.php';
require_once 'Usuario.php';
require_once 'Estudiante.php';
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

/**
 * Description of GestorBiblioteca
 *
 * @author WEB2-21
 */
class GestorBiblioteca {

    public static function registrar_prestamo(Libro $libro, Usuario $usuario) : void {
        
        if(!$libro->disponible){
            throw new Exception("El libro no esta disponible");
        }
        
        if (isset($libro, $usuario)) {
            if ($libro->disponible == true && $usuario->puede_tomar_prestado() == true) {
                $libro->disponible = false;
                array_push($usuario->libros_prestados, $libro);
                $usuario->prestamos_actuales++;
                $usuario->limite_prestamos--;      
            }
        }
    }
    
    public static function registrar_devolucion(Libro $devolucion){
        
         if (isset($libro)) {
            if ($libro->disponible == false){
                
                $usuario = $libro->usuario_prestamo;
        
                unset($usuario->libros_prestados[$libro->isbn]);
                $usuario->prestamos_actuales--;
                $usuario->limite_prestamos++;
                
                $libro->disponible = true;
            }
        }
    }
}
