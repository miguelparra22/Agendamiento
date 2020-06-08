<?php

/**
 * Description of Cliente
 *
 * @author Tinoco
 */
class Clientecontroller {

    private $model;
    private $vo;

    public function __CONSTRUCT() {
        $this->model = new Cliente();
        $this->vo = new ClienteVO();
    }

    public function llamar() {
        include_once 'views/header.php';
        include_once 'views/cliente/index.php';
        include_once 'views/footer.php';
    }

    public function agregar() {

        $this->vo->setCliente_nombre($_POST["usuario_nombre"]);
        $this->vo->setCliente_pwd($_POST["usuario_pwd"]);
        $this->vo->setCliente_correo($_POST["usuario_correo"]);
        if ($this->model->agregar($this->vo)) {
            echo "Se ha ingresado correctamente";
            include_once 'views/header.php';
            include_once 'views/cliente/index.php';
            include_once 'views/footer.php';
        } else {
            echo "falló";
            include_once 'views/header.php';
            include_once 'views/exeption/noExiste.php';
            include_once 'views/footer.php';
        }
    }

    public function iniciarSesion() {
        $this->vo->setCliente_pwd($_POST["usuario_pwd"]);
        $this->vo->setCliente_correo($_POST["usuario_correo"]);
        $resultado = $this->model->iniciarSesion($vo);
        if (!is_object($resultado)) {
            include_once 'views/header.php';
            include_once 'views/exception/noExiste.php';
            include_once 'views/footer.php';
        } else {
            include_once 'views/header.php';
            include_once 'views/usuario/listartodo.php';
            include_once 'views/footer.php';
        }
    }

}

?>