<?php
global $objModulo;
switch($objModulo->getId()){
	case 'listaClientes':
		$db = TBase::conectaDB();
		global $sesion;
		$sql = "select * from cliente a where a.visible = true";
			
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$row['json'] = json_encode($row);
			
			array_push($datos, $row);
		}
		
		$smarty->assign("lista", $datos);
	break;
	case 'listaClientesAutocomplete':
		$db = TBase::conectaDB();
		global $userSesion;
		
		$rs = $db->query("select * from cliente a where a.visible = true and (contacto like '%".$_GET['term']."%' or razonsocial like '%".$_GET['term']."%')");
		$datos = array();
		while($row = $rs->fetch_assoc()){
			$aux = array();
			
			$aux["label"] = $row['razonsocial'];
			$aux['identificador'] = $row['idCliente'];
			
			array_push($datos, $aux);
		}
		$smarty->assign("json", $datos);
	break;
	case 'cclientes':
		switch($objModulo->getAction()){
			case 'add':
				$obj = new TCliente();
				
				$obj->setId($_POST['id']);
				$obj->setRazonSocial($_POST['razonsocial']);
				$obj->setContacto($_POST['contacto']);
				$obj->setTelefono($_POST['telefono']);
				$obj->setCorreo($_POST['correo']);
					
				$band = $obj->guardar();
				
				$smarty->assign("json", array("band" => $band));
			break;
			case 'del':
				$obj = new TCliente($_POST['id']);
				$smarty->assign("json", array("band" => $obj->eliminar()));
			break;
		}
	break;
}
?>