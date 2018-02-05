<?php 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CrudMonitores extends EXTIDI_Controller{

    public function listado(){
        $this->load->model("monitores");
        $data = $this->monitores->listadoMonitores();
        echo json_encode($data);
    }

    public function crear(){
        /*$data = array("nombres" =>"Aris",
                    "apellidos"=>"Julio",
                    "programa_academico"=> "Ing sistemas",
                    "semestre"=> "10",
                    "cedula"=> "2589746",
                    "telefono"=> "154786");*/
        $data = $this->input->post();
        unset($data['id']);
        $this->load->model("monitores");
        $data = $this->monitores->crearMonitor($data);
        if($data){
            echo json_encode(array('status'  => true));
        }else{
            echo json_encode(array('status'  => false));
        }
    }

    public function modificar(){
        $data = array(
        "id" => 1,
        "nombres" =>"Winston Junior",
        "apellidos"=>"Rodriguez Stand",
        "programa_academico"=> "Ingenieria sistemas",
        "semestre"=> "8",
        "cedula"=> "1045742017",
        "telefono"=> "3008527990");
        $this->load->model("monitores");
        $data = $this->monitores->modificarMonitor($data);
        if($data){
            echo "Actualizo";
        }else{
            echo "No actualizo";
        }
    }

    public function eliminar(){
        $data = array(
            "id" => 3,
            "estado" => "-1");
        $this->load->model("monitores");
        $data = $this->monitores->eliminarMonitor($data);
        if($data){
            echo "Eliminado";
        }else{
            echo "No Eliminado";
        }
    }
}