<?php

require 'vendor/autoload.php';

use Peru\Sunat\Ruc;
use Peru\Reniec\Dni;
$ruc = new Ruc();
$data = $ruc->get($_GET['ruc']);


//$dni = new Dni();
//$data = $dni->get('42558705');

$razonSocial = (array)$data;

//echo $razonSocial;
$todo = array(	
				"ruc"=>$razonSocial['ruc'],
				"razonSocial"=>$razonSocial['razonSocial'],
				"tipo"=>$razonSocial['tipo'],
				"estado"=>$razonSocial['estado'],
				"condicion"=>$razonSocial['condicion'],
				"direccion"=>$razonSocial['direccion'],
				"departamento"=>$razonSocial['departamento'],
				"provincia"=>$razonSocial['provincia'],
				"distrito"=>$razonSocial['distrito']
			);
echo json_encode($todo);
//echo '</br>';
//print_r($todo);


//$json = json_encode($data);

//echo $json;

//var_dump($data);

