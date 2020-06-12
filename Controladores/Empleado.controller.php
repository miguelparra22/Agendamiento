<?php 


class EmpleadoController{
    
    private $model;
    private $vo;


    public function __CONSTRUCT(){
        $this->model = new Empleado();
        $this->vo = new EmpleadoVO();
    }


    /*Metodos de agregar empleado*/ 

   /* public function vistaAgregarEmpleado(){
        include_once 'Vistas/header.php';
        include_once 'Vistas/Empleado/Agregar_empleado.php';
        include_once 'Vistas/footer.php';
    }*/

    public function agregar_empleado() {

        $this->vo->setEmpleado_nombre($_POST["nombre_empleado"]);
        $this->vo->setEmpleado_correo($_POST["correo_empleado"]);
        $this->vo->setEmpleado_password($_POST["contraseña_empleado"]);
        $this->vo->setEmpleado_especialidad($_POST["especialidad_empleado"]);
        $this->vo->setEmpleado_estado($_POST["estado_empleado"]);

        if ($this->model->agregar_empleado($this->vo)) {
            echo "ingresó correctamente";
           /* include_once 'views/header.php';
            include_once 'views/usuario/consulta.php';
            include_once 'views/footer.php';*/
        } else {
            echo "falló";
           /* include_once 'views/header.php';
            include_once 'views/exeption/noExiste.php';
            include_once 'views/footer.php';*/
        }
    }


    
}
?>