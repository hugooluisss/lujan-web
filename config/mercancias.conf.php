<?php
global $conf;

$conf['listaMercancia'] = array(
	'controlador' => 'mercancias.php',
	'vista' => 'mercancias/lista.tpl',
	'descripcion' => 'Lista de mercancias',
	'seguridad' => true,
	'capa' => LAYOUT_AJAX);
	
$conf['cmercancias'] = array(
	'controlador' => 'mercancias.php',
	'descripcion' => 'Controlador de mercancias',
	'seguridad' => true,
	'capa' => LAYOUT_JSON);
?>