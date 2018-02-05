<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH."core/EXTIDI_ModelDynamic.php";

Class Mon_Monitorias extends EXTIDI_ModelDynamic {

	function __construct() {

		$this->__config["tabla"]="mon_monitorias";
		$this->__config["condicion"]="prin.estado = 1";
		$this->__config["ruta"]="Extidi.modulos.monitorias";
        parent::__construct();

		//operaciones despues del __construct
		$this->materia=array(
			"tipo"=> "varchar",
			"tamano"=> 50,
			"nulo"=>false,
			"formulario" => array( //Propiedades para formulario
				"materia" => "Materia"
			),
			"grilla" => array(
				"cabecera" => "Materia"
			)
		);

		$this->monitor_asignado = array(
			"tipo" => "bigint",
			"tamano" => 50,
			"foraneo"=>array(
				"tabla"=>"mon_monitores", //tiene que ser un modelo
				"condicion"=>"prin.estado = 1", //sql de la condicion de la tabla foranea
				"columnasvalor"=>array(
					"nombres","apellidos"
				),
				"columnasgrilla"=>array(
					"NombreGrupo"=>"Nombre",
					"estado"
				)
				),
			"formulario" => array( //Propiedades para formulario
				"monitor_asignado" => "Monitor",
				"visible" => true
			),

			"grilla" => array(
				"cabecera" => "Monitor",
				"visible" => true
			)
		);

		$this->fecha = array(
            "tipo" => "datetime",
            "pordefecto"=>gmdate("Y-m-d H:i:s", time() + 3600*(-5)),
			"nulo" => false,
			"formulario" => array( //Propiedades para formulario
				"fecha" => "Fecha"
			),
			"grilla" => array(
				"cabecera" => "Fecha"
			)
		);

		$this->salon=array(
			"tipo" => "varchar",
			"tamano" => 50,
			"formulario" => array( //Propiedades para formulario
				"salon" => "Salon",
				"visible" => true
			),

			"grilla" => array(
				"cabecera" => "Salon",
				"visible" => true
			)
		);

	}

}
