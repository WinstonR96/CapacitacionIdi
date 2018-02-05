<?php

date_default_timezone_set('America/Bogota');
if(!defined('BASEPATH'))
    exit('No direct script access allowed');


Class Monitores extends EXTIDI_Model{

    var $id = 0;
    var $nombres = null;
    var $apellidos = null;
    var $programa_academico = null;
    var $semestre = null; 
    var $cedula = null;
    var $telefono = null;
    var $estado = "1";

    function __construct(){
        parent:: __construct();
        $this->_tabla = "mon_monitores";
        $this->_llave = "id";
        $this->_estado = "estado";
    }

    function listadoMonitores(){
        $this->db->where("estado", "1");
        $response = $this->db->get("mon_monitores");
        return $response->result_array();
    }

    function crearMonitor($data){
        return $this->db->insert("mon_monitores", $data);
    }

    function modificarMonitor($data){
        $this->db->where("id", $data["id"]);
        return $this->db->update("mon_monitores", $data);
    }

    function eliminarMonitor($data){
        $this->db->where("id", $data["id"]);
        return $this->db->update("mon_monitores", $data);
    }
}

