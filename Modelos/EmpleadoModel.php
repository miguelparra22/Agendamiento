<?php

class Empleado extends Conexion {

    private $PDO;
    private $EmpleadoVO;
    private $tabla;


    public function __CONSTRUCT(){
        $this->PDO = parent::__construct();
        $this->tabla = "empleado";
    }

    public function agregar($vo){
        $this->EmpleadoVO = $vo;
        $sentencia = "INSERT INTO $this->tabla VALUES(null,:nombre,:correo,:password,:especialidad,:estado,:rol)";
         
        $resultado = $this->PDO->prepare($sentencia);

        return $resultado->execute(
            array(
             ':nombre' => $this->EmpleadoVO->getEmpleado_nombre(),
             ':correo' => $this->EmpleadoVO->getEmpleado_correo(),
             ':password' => $this->EmpleadoVO->getEmpleado_password(),
             ':especialidad' => $this->EmpleadoVO->getEmpleado_especialidad(),
             ':estado' => $this->EmpleadoVO->getEmpleado_estado(),
             ':rol' => $this->EmpleadoVO->getEmpleado_rol(),
            
             ));
    }
}


?>