<?php
global $conf;

$conf['ordenes'] = array(
	'controlador' => "ordenes.php",
	'vista' => 'ordenes/panel.tpl',
	'descripcion' => 'Administración de ordenes',
	'seguridad' => true,
	'js' => array('orden.class.js'),
	'jsTemplate' => array('ordenes.js', 'mercancias.js'),
	'capa' => LAYOUT_DEFECTO);

$conf['listaOrdenes'] = array(
	'controlador' => 'ordenes.php',
	'vista' => 'ordenes/lista.tpl',
	'descripcion' => 'Lista de ordenes',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['listaOrdenesAgente'] = array(
	'controlador' => 'ordenes.php',
	'descripcion' => 'Lista de ordenes',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
	
$conf['cordenes'] = array(
	'controlador' => 'ordenes.php',
	'descripcion' => 'Controlador de ordenes',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
?>