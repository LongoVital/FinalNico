<?php

require_once 'Conexion.php';
require_once 'Materia.php';

class Alumno extends Conexion // Clase Alumno que hereda de la clase Conexion

{
    public $id, $nombre, $apellido, $fec_nac; // Atributos de la clase Alumno

    public function create() // Método para crear un nuevo alumno
    // CREAMOS UN NUEVO ALUMNO.   INSERTANDOLO EN LA BASE DE DATOS DE LA TABLA ALUMNOS, RESPETANDO NOMBRE APELLIDO Y FECHA DE NACIMIENTO, CON LOS VALUE QUE SEAN CARGADOS POR EL O EL ADMINISTRADOR
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO alumnos (nombre, apellido, fec_nac) VALUES (?, ?, ?)");
        $pre->bind_param("sss", $this->nombre, $this->apellido, $this->fec_nac);
        $pre->execute();
    }

    public static function all() // Método para obtener todos los alumnos
    // PODEMOS OBTENER TODOS LOS ALUMNOS QUE TENEMOS EBN LA BASE DE DATOS
    {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM alumnos");
        $result->execute();
        $valoresDb = $result->get_result();
        $alumnos = [];
        while ($alumno = $valoresDb->fetch_object(Alumno::class)) { // Obtenemos cada alumno de la base de datos y las hacemos objetos

            $alumnos[] = $alumno; // Los almacenamos en un array

        }
        return $alumnos;
    }

    public static function getById($id) // Método para obtener un alumno por su id
    // HACEMOS LA CONECCION RECORREMOS ALUMNOS DONDE EL ALUMNO TENGA ESE "ID" Y LO GUARDAMOS EN UN FETCH OBJECT, COMO ALUMNO EN CLASS.

    {
        $conexion = new Conexion();
        $conexion->conectar();
        $result = mysqli_prepare($conexion->con, "SELECT * FROM alumnos WHERE id = ?");
        $result->bind_param("i", $id);
        $result->execute();
        $valorDb = $result->get_result();
        $alumno = $valorDb->fetch_object(Alumno::class);
        return $alumno;
    }

    public function delete()
    {
        $this->conectar();
        // Primero elimino registros de  la tabla materias_alumnos
        // SE ELIMINA PRIMERO LAS MATERIAS QUE TENGA EL ALUMNO PARA LUEGO PODER ELIMINAR EL ALUMNO
        $pre = mysqli_prepare($this->con, "DELETE FROM alumnos_materias WHERE alumno_id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();

        // despues elimino al alumno
        $pre = mysqli_prepare($this->con, "DELETE FROM alumnos WHERE id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    } //bind param medida de seg

    public function update() // Método para actualizar un alumno
    // ACA SE HACE UNA ACTUALIZACION DEL ALUMNO, SE LE PODRIAN HACER MAS CAMBIOS SI TUVIERA MAS DATOS PERSONALES.
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "UPDATE alumnos SET nombre = ?, apellido = ?, fec_nac = ? WHERE id = ?");
        $pre->bind_param("sssi", $this->nombre, $this->apellido, $this->fec_nac, $this->id);
        $pre->execute();
    }

    public function materias() //  Método para obtener las materias de un alumno
    // OBTENGO TODAS LAS MATERIAS QUE TIENE ASIGNADO UN ALUMNO 
    // SELECIONO MATERIAS, DE MATERIAS Y LE REALIZO UN INNER JOIN DE ALUMNOS MATERIAS, EN EL CUAL EL ID DE LA MATERIA EN LA BASE DE DATO SEA IGUAL AL ALMUNO EN ALUMNO MATERIA.
    {
        $this->conectar();
        $result = mysqli_prepare($this->con, "SELECT materias.* FROM materias INNER JOIN alumnos_materias ON materias.id = alumnos_materias.materia_id WHERE alumnos_materias.alumno_id = ?");
        $result->bind_param("i", $this->id);
        $result->execute();
        $valoresDb = $result->get_result(); //  Obtenemos los valores de la base de datos

        $materias = [];
        while ($materia = $valoresDb->fetch_object(Materia::class)) { //  Obtenemos cada materia de la base de datos y las hacemos objetos
            $materias[] = $materia;
        }
        return $materias;
    }

    public function desasignarTodasLasMaterias() // Método para desasignar todas las materias de un alumno
    //LO MISMO QUE ABAJO, PERO BUENO, EN ESTE CASO DELETEAMOS DE ALUMNOS MATERIA TODO LAS MATERIAS QUE OBTENEMOS POR ID
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "DELETE FROM alumnos_materias WHERE alumno_id = ?");
        $pre->bind_param("i", $this->id);
        $pre->execute();
    }

    public function asignarMateria($materia_id) // Método para asignar una materia a un alumno
    // ASIGNAMOS EN LA TABLA ALUMNOS MATERIAS DONDE EL ALUMNO TANTO Y LA MATERIA TANTO SEAN LOS VALORES QUE LE ACABAMOS DE PASAR.
    {
        $this->conectar();
        $pre = mysqli_prepare($this->con, "INSERT INTO alumnos_materias (alumno_id, materia_id) VALUES (?, ?)");
        $pre->bind_param("ii", $this->id, $materia_id);
        $pre->execute();
    }
}

