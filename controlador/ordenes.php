<?php
global $objModulo;
switch($objModulo->getId()){
	case 'ordenes':
		$db = TBase::conectaDB();
		$sql = "select * from estado";
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("estados", $datos);
		
		$sql = "select * from usuario";
		
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("usuarios", $datos);
		
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
		global $sesion;
		$sql = "select a.*, b.nombre as estado, b.color, c.razonsocial as cliente, d.nombre as usuario, e.nombre as tipo from orden a join estado b using(idEstado) join cliente c using(idCliente) left join usuario d using(idUsuario) join tipoorden e on a.idTipo = e.idTipo where not a.idEstado = 5";
			
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
		$sql = "select a.*, b.nombre as estado, b.color, c.razonsocial as cliente, d.nombre as usuario, e.nombre as tipo from orden a join estado b using(idEstado) join cliente c using(idCliente) left join usuario d using(idUsuario) join tipoorden e on a.idTipo = e.idTipo where not a.idEstado = 5 and a.idUsuario = ".$_POST['usuario'];
			
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("json", $datos);
	break;
	case 'cordenes':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TOrden();
				
				$obj->setId($_POST['id']);
				
				if ($_POST['estado'] <> '')
					$obj->estado->setId($_POST['estado']);
				
				if ($_POST['cliente'] <> '')
					$obj->cliente->setId($_POST['cliente']);
					
				if ($_POST['usuario'] <> '')
					$obj->usuario->setId($_POST['usuario']);
					
				if ($_POST['tipo'] <> '')
					$obj->setTipo($_POST['tipo']);
				
				if ($_POST['fecha'] <> '')
					$obj->setFecha($_POST['fecha']);
					
				if ($_POST['factura'] <> '')
					$obj->setFactura($_POST['factura']);
					
				$obj->setLugar($_POST['lugar']);
				$obj->setTransportista($_POST['transportista']);
				$obj->setChofer($_POST['chofer']);
				$obj->setGafete($_POST['gafete']);
				$obj->setContenedor($_POST['contenedor']);
				$obj->setTipoContenedor($_POST['tipoContenedor']);
				$obj->setClaveContenedor($_POST['claveContenedor']);
				$obj->setPlacas($_POST['placas']);
				$obj->setNumeroCandado($_POST['numeroCandado']);
				
					
				$band = $obj->guardar();
				
				$smarty->assign("json", array("band" => $band));
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
		}
	break;
}
?>