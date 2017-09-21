<?php
global $objModulo;
switch($objModulo->getId()){
	case 'ordenes': case 'ordeneslogistica': case 'ordenesoficina':
		$db = TBase::conectaDB();
		$sql = "select * from estado";
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("estados", $datos);
		
		$sql = "select * from usuario where visible = true and idTipo in (3, 4)";
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$previos = array();
		$capturistas = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			if ($row['idTipo'] == 3)
				array_push($previos, $row);
			else
				array_push($capturistas, $row);
		}
		
		$smarty->assign("previos", $previos);
		$smarty->assign("capturistas", $capturistas);
		
		$sql = "select * from tipoorden";
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("tipos", $datos);
	break;
	case 'listaOrdenes':
		$db = TBase::conectaDB();
		global $userSesion;
		
		if ($userSesion->getIdTipo() <> 4){
			$sql = "select a.*, b.nombre as estado, b.color, c.razonsocial as cliente, e.nombre as tipo from orden a join estado b using(idEstado) join cliente c using(idCliente) join tipoorden e on a.idTipo = e.idTipo where not a.idEstado = 5";
		}else
			$sql = "select a.*, b.nombre as estado, b.color, c.razonsocial as cliente, e.nombre as tipo from orden a join estado b using(idEstado) join cliente c using(idCliente) join tipoorden e on a.idTipo = e.idTipo where not a.idEstado = 5 and idCapturista = ".$userSesion->getId();
			
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'listaOrdenesAgente':
		$db = TBase::conectaDB();
		global $sesion;
		$sql = "select a.*, b.nombre as estado, b.color, c.razonsocial as cliente, e.nombre as tipo from orden a join estado b using(idEstado) join cliente c using(idCliente) join tipoorden e on a.idTipo = e.idTipo where a.idEstado = 2 and a.idPrevio = ".$_POST['usuario'];
			
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$archivo = "repositorio/facturas/factura".$row['idOrden'].".pdf";
			$row['archivo'] = file_exists($archivo)?$archivo:"";
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("json", $datos);
	break;
	case 'cordenes':
		$repositorio = "repositorio/facturas/";
		
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TOrden();
				
				$obj->setId($_POST['id']);
				
				if (isset($_POST['estado']))
					$obj->estado->setId($_POST['estado']);
				
				if (isset($_POST['cliente']))
					$obj->cliente->setId($_POST['cliente']);
					
				if (isset($_POST['previo'])){
					$obj->previo = new TUsuario($_POST['previo']);
					
					if ($obj->estado->getId() == 1)
						$obj->estado->setId(2);
				}
				
				if (isset($_POST['capturista']))
					$obj->capturista = new TUsuario($_POST['capturista']);
					
				if (isset($_POST['tipo']))
					$obj->setTipo($_POST['tipo']);
				
				if (isset($_POST['fecha']))
					$obj->setFecha($_POST['fecha']);
					
				if (isset($_POST['factura']))
					$obj->setFactura($_POST['factura']);
				
				if (isset($_POST['lugar']))
					$obj->setLugar($_POST['lugar']);
				
				if (isset($_POST['transportista']))
					$obj->setTransportista($_POST['transportista']);
				
				if (isset($_POST['chofer']))
					$obj->setChofer($_POST['chofer']);
				
				if (isset($_POST['gafete']))
					$obj->setGafete($_POST['gafete']);
				
				if (isset($_POST['contenedor']))
					$obj->setContenedor($_POST['contenedor']);
					
				if (isset($_POST['tipoContenedor']))
					$obj->setTipoContenedor($_POST['tipoContenedor']);
					
				if (isset($_POST['claveContenedor']))
					$obj->setClaveContenedor($_POST['claveContenedor']);
					
				if (isset($_POST['placas']))
					$obj->setPlacas($_POST['placas']);
					
				if (isset($_POST['numeroCandado']))
					$obj->setNumeroCandado($_POST['numeroCandado']);			
					
				$band = $obj->guardar();
				
				$smarty->assign("json", array("band" => $band, "id" => $obj->getId()));
			break;
			case 'getPaises':
				$db = TBase::conectaDB();
				$sql = "select * from pais";
					
				$rs = $db->query($sql) or errorMySQL($db, $sql);
				$datos = array();
				while($row = $rs->fetch_assoc()){
					array_push($datos, $row);
				}
				
				$smarty->assign("json", $datos);
			break;
			case 'upload':
				if(isset($_FILES['upl']) && $_FILES['upl']['error'] == 0){
					$extension = strtolower(end(explode(".", $_FILES['upl']['name'])));
					
					if(move_uploaded_file($_FILES['upl']['tmp_name'], $repositorio."factura".$_GET['orden'].".".$extension))
						$result = array("status" => true);
					else{
						$result = array("status" => false, "msg" => "Al copiar");
					}
				}else
					$result = array("status" => false, "msg" => "No se subió");
				
				$smarty->assign("json", $result);
			break;
		}
	break;
}
?>