<?php


class HomeController{
    private $model;
    public function __CONSTRUCT(){
        
    }

    public function Index(){
    	require_once "Vistas/Header.php";
        require_once "Vistas/Home/home.php";
       require_once "Vistas/footer.php";
    }


}

?>