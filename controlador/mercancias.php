<?php
global $objModulo;
switch($objModulo->getId()){
	case 'mercancias':
	break;
	case 'listaMercancia':
		$db = TBase::conectaDB();
		global $sesion;
		$sql = "select a.*, b.nombre as origen from mercancia a join pais b on a.idOrigen = b.idPais where idOrden = ".$_POST['orden'];
			
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		
		while($row = $rs->fetch_assoc()){
			$repositorio = "repositorio/mercancia/".$row['idMercancia']."/";
			$archivos = scandir($repositorio, 1);
			$row['imagenes'] = array();
			foreach($archivos as $file){
				if (!in_array($file, array(".", "..", ".DS_Store")))
					array_push($row['imagenes'], array("src" => $repositorio.$file, "nombre" => $file));
			}
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

				$obj->setDescripcion($_POST['descripcion']);
				$obj->setMarca($_POST['marca']);
				$obj->setModelo($_POST['modelo']);
				$obj->setSerie($_POST['serie']);
				$obj->setCantidad($_POST['cantidad']);
				$obj->setPesoNeto($_POST['pesoneto']);
				$obj->setEmbalaje($_POST['embalaje']);
				$obj->setMCTM($_POST['mctm']);
				$obj->setEC($_POST['ec']);
				$obj->setObservaciones($_POST['observaciones']);
				$obj->setOrigen($_POST['origen']);
					
				$band = $obj->guardar($_POST['orden']);
				
				$smarty->assign("json", array("band" => $band));
			break;
			case 'del':
				$obj = new TMercancia($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
			case 'uploadImagen':
				$mercancia = new TMercancia($_POST['identificador']);
				if ($mercancia->getId() == '')
					$smarty->assign("json", array("band" => false));
				else{
					mkdir("repositorio/mercancia/".$mercancia->getId()."/", 0777, true);
					
					saveImage($_POST['imagen'], "repositorio/mercancia/".$mercancia->getId()."/".date("YmdHis").".jpg");
					$smarty->assign("json", array("band" => true));
				}
			break;
			case 'eliminarFoto':
				unlink($_POST['archivo']);
				$smarty->assign("json", array("band" => true));
			break;
			case 'getFotografias':
				$repositorio = "repositorio/mercancia/".$_POST['identificador']."/";
				$archivos = scandir($repositorio, 1);
				$imagenes = array();
				foreach($archivos as $file){
					if (!in_array($file, array(".", "..", ".DS_Store")))
						array_push($imagenes, array("src" => $repositorio.$file, "nombre" => $file));
				}
				
				$smarty->assign("json", $imagenes);
			break;
		}
	break;
}
?>