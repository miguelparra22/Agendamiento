<?php

/*Iniciio de sesiones */
/*session_start();*/


/*Carga de bases de datos*/
require_once 'Modelos/DB/db.php';
require_once 'models/database/Idatabase.php';



/* Cargo VO */
require_once "VO/ClienteVO.php";


/*Carga Modelos */
require_once "models/Cliente.php";

/*Cargar controladores */

require_once 'Controladores/Home.controller.php';
require_once 'Controladores/EmpleadoController.php';
require_once "controllers/Cliente.controller.php";


?>