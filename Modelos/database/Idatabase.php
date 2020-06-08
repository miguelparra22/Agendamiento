<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
interface Idatabase{
    
    public function listar();
    public function agregar($vo);
    public function consultaUnica($id);
    public function eliminar($id);
    public function actualizar($vo);
            
}
