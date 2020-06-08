<?php 
class EmpleadoVO{
    private $empleado_id;
    private $empleado_nombre;
    private $empleado_correo;
    private $empleado_password;
    private $empleado_especialidad;
    private $empleado_estado;
    private $empleado_rol;



    function getEmpleado_id(){
        return $this->empleado_id;
    }

    function getEmpleado_nombre(){
        return $this->empleado_nombre;
    }

    function getEmpleado_correo(){
        return $this->empleado_correo;
    }

    function getEmpleado_password(){
        return $this->empleado_password;
    }

    function getEmpleado_especialidad(){
        return $this->empleado_especilidad;
    }

    function getEmpleado_estado(){
        return $this->empleado_estado;
    }

    function getEmpleado_rol(){
        return $this->empleado_rol;
    }

    //set

    function setEmpleado_id($empleado_id){
        $this->empleado_id = $empleado_id;
    }

    function setEmpleado_nombre($empleado_nombre){
        $this->empleado_nombre = $empleado_nombre;
    }

    function setEmpleado_correo(){
        return $this->empleado_correo;
    }

    function setEmpleado_password(){
        return $this->empleado_password;
    }


    function setEmpleado_especialidad(){
        return $this->empleado_especialidad;
    }

    function setEmpleado_estado(){
        return $this->empleado_estado;
    }

    function setEmpleado_rol(){
        return $this->empleado_rol;
    }
}


?>

