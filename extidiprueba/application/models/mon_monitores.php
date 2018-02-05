<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once APPPATH."core/EXTIDI_ModelDynamic.php";

Class Mon_Monitores extends EXTIDI_ModelDynamic {

	function __construct() {

		$this->__config["tabla"]="mon_monitores";
		$this->__config["condicion"]="prin.estado = 1";
		$this->__config["ruta"]="Extidi.modulos.monitores";
		$this->__config["accionesAdicionales"] = array(
			array(
			  "text" =>"Duplicar",
			  "name"=> "duplicar",
			  "tooltip" => "Boton duplicar",
			  "disabled" => false,
			  "icon" => "images/icons/16/page_go.png"
			),

			array(
			  "text" =>"Subir foto",
			  "name"=> "subir_foto",
			  "tooltip" => "Boton Subir Foto",
			  "disabled" => false,
			  "icon" => "images/icons/16/page_go.png"
			)
		 );
        parent::__construct();

		//operaciones despues del __construct
		$this->nombres=array(
			"tipo"=> "varchar",
			"tamano"=> 50,
			"nulo"=>false,
			"formulario" => array( //Propiedades para formulario
				"nombre" => "Nombres"
			),
			"grilla" => array(
				"cabecera" => "Nombres"
			)
		);

		$this->apellidos = array(
			"tipo" => "varchar",
			"tamano" => 50,
			"formulario" => array( //Propiedades para formulario
				"nombre" => "Apellidos",
				"visible" => true
			),

			"grilla" => array(
				"cabecera" => "Apellidos",
				"visible" => true
			)
		);

		$this->programa_academico = array(
			"tipo" => "varchar",
			"tamano" => 50,
			"nulo" => false,
			"formulario" => array( //Propiedades para formulario
				"nombre" => "Programa"
			),
			"grilla" => array(
				"cabecera" => "Programa"
			)
		);

		$this->semestre=array(
			"tipo" => "varchar",
			"tamano" => 45,

			"formulario" => array( //Propiedades para formulario
				"nombre" => "Semestre",
				"visible" => true
			),

			"grilla" => array(
				"cabecera" => "Semestre",
				"visible" => true
			)
		);

		$this->cedula = array(
			"tipo" => "varchar",
			"tamano" => 45,
			"nulo" => false,
			"unico" => true,
			"formulario"=>array( //Propiedades para formulario
				"nombre"=>"Cedula"
			),
			"grilla"=>array(
				"cabecera"=>"Cedula"
			)
		);

		$this->telefono=array(
			"tipo" => "varchar",
			"tamano" => 100,
			"nulo" => false,
			"unico" => true,
			"formulario" => array( //Propiedades para formulario
				"nombre" => "Correo electr&oacute;nico"
			),
			"grilla" => array(
				"cabecera" => "Email"
			)
		);

		/*$this->foto_perfil=array(
			"tipo" => "varchar",
			"tamano" => 500,
			"archivo" => true,
			"extensionarchivo" => array(
				"jpg",
				"png",
				"bmp",
				"gif"
			)
		);*/

		

    }

}
