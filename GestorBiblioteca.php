<?php
include 'Libro.php';
include 'Usuario.php';
include 'Estudiantes.php';
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

    public static function registrar_prestamo(Libro $libro, Usuario $usuario) {
        if (isset($libro, $usuario)) {
            if ($libro->disponible == true && $usuario->puede_tomar_prestado() == true) {
                $libro->disponible = false;
                array_push($usuario->libros_prestados, $libro);
                $usuario->prestamos_actuales++;
                $usuario->limite_prestaciones--;      
            }
        }
    }
}
