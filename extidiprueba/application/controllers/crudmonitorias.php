<?php 
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CrudMonitores extends EXTIDI_Controller{

    public function listado(){
        $this->load->model("monitorias");
        $data = $this->monitorias->listadoMonitorias();
        echo json_encode($data);
    }

    public function crear(){
        $data = array("nombres" =>"Aris",
                    "materia"=>"Julio",
                    "monitor_asignado" => "Ing sistemas",
                    "fecha"=> "10",
                    "salon"=> "2589746");
        $this->load->model("monitorias");
        $data = $this->monitorias->crearMonitorias($data);
        if($data){
            echo "Inserto";
        }else{
            echo "No inserto";
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
        $this->load->model("monitorias");
        $data = $this->monitorias->modificarMonitorias($data);
        if($data){
            echo "Actualizo";
        }else{
            echo "No actualizo";
        }
    }

    public function eliminar(){
        $data = array(
            "id" => 1);
        $this->load->model("monitorias");
        $data = $this->monitorias->eliminarMonitorias($data);
        if($data){
            echo "Eliminado";
        }else{
            echo "No Eliminado";
        }
    }
}