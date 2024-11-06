<?php

require_once __DIR__ . '/../../Models/Alumno.php'; //incluimos archivos  de modelos para utilizar la clase alumno


if (isset($_POST['crearAlumno'])) { //si se aprieta  el boton de crear alumno que esta en el indexview 
    //guarda  los datos del formulario en variables

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $fec_nac = $_POST['fec_nac'];

    $alumno = new Alumno(); //se crea una nueva instancia
    $alumno->nombre = $nombre; //se asignan los valores agarrados en las variables de arriba
    $alumno->apellido = $apellido;
    $alumno->fec_nac = $fec_nac;
    $alumno->create(); //se crea el objeto y se guarda en la base de datos

    header('location: indexAlumnos.php'); //te redirije al index
}
require_once __DIR__ . '/../../Views/Alumnos/create.view.php';
