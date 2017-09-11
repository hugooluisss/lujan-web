<?php
global $objModulo;
switch($objModulo->getId()){
	case 'mercancias':
	break;
	case 'listaMercancia':
		$db = TBase::conectaDB();
		global $sesion;
		$sql = "select * from mercancia where idOrden = ".$_POST['orden'];
			
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("lista", $datos);
		$smarty->assign("json", $datos);
	break;
	case 'cmercancias':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TMercancia();
				
				$obj->setId($_POST['id']);

					
				$obj->setFraccion($_POST['fraccion']);
				$obj->setDescripcion($_POST['descripcion']);
				$obj->setMarca($_POST['marca']);
				$obj->setModelo($_POST['modelo']);
				$obj->setSerie($_POST['serie']);
				$obj->setCantidad($_POST['cantidad']);
				$obj->setPesoNeto($_POST['pesoneto']);
				$obj->setPesoBruto($_POST['pesobruto']);
				$obj->setEmbalaje($_POST['embalaje']);
				$obj->setMCTM($_POST['mctm']);
				$obj->setEC($_POST['ec']);
				$obj->setObservaciones($_POST['observaciones']);
					
				$band = $obj->guardar($_POST['orden']);
				
				$smarty->assign("json", array("band" => $band));
			break;
			case 'del':
				$obj = new TMercancia($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>