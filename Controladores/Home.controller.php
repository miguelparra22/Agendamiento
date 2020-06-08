<?php


class HomeController{
    private $model;
    public function __CONSTRUCT(){
        
    }

    public function Index(){
    	require_once "Vistas/Header.php";
        require_once "Vistas/Empleado/Agregar_empleado.php";
       require_once "Vistas/footer.php";
    }


}

?>