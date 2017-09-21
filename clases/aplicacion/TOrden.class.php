<?php
/**
* TOrden
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TOrden{
	private $idOrden;
	public $estado;
	public $cliente;
	private $idTipo;
	public $previo;
	public $capturista;
	private $fecha;
	private $factura;
	private $lugar;
	private $transportista;
	private $chofer;
	private $gafete;
	private $contenedor;
	private $tipocontenedor;
	private $clavecontenedor;
	private $placas;
	private $numerocandado;
	private $registro;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TOrden($id = ''){
		$this->estado = new TEstado;
		$this->cliente = new TCliente;
		$this->idTipo = 1;
		$this->previo = new TUsuario;
		$this->capturista = new TUsuario;
		
		$this->setId($id);
		
		return true;
	}
	
	/**
	* Carga los datos del objeto
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setId($id = ''){
		if ($id == '') return false;
		
		$db = TBase::conectaDB();
		$sql = "select * from orden where idOrden = ".$id;
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		foreach($rs->fetch_assoc() as $field => $val){
			switch($field){
				case 'idEstado':
					$this->estado = new TEstado($val);
				break;
				case 'idCliente':
					$this->cliente = new TCliente($val);
				break;
				case "idPrevio":
					$this->previo = new TUsuario($val);
				break;
				case "idCapturista":
					$this->capturista = new TUsuario($val);
				break;
				default:
					$this->$field = $val;
				break;
			}
		}
		
		return true;
	}
	
	/**
	* Retorna el id
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getId(){
		return $this->idOrden;
	}
	
	/**
	* Establece el nombre
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setTipo($val = 1){
		$this->idTipo = $val;
		return true;
	}
	
	/**
	* Retorna el tipo
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getTipo(){
		return $this->idTipo;
	}
	
	/**
	* Establece la fecha
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setFecha($val = ''){
		$this->fecha = $val == ''?date():$val;
		return true;
	}
	
	/**
	* Retorna la fecha
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getFecha(){
		return $this->fecha;
	}
	
	/**
	* Establece el número de factura
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setFactura($val = ''){
		$this->factura = $val;
		return true;
	}
	
	/**
	* Retorna el número de factura
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getFactura(){
		return $this->factura;
	}
	
	/**
	* Establece el lugar
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setLugar($val = ''){
		$this->lugar = $val;
		return true;
	}
	
	/**
	* Retorna el lugar
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getLugar(){
		return $this->lugar;
	}
	
	/**
	* Establece a la empresa transportista
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setTransportista($val = ''){
		$this->transportista = $val;
		return true;
	}
	
	/**
	* Retorna el nombre de la empresa transportista
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getTransportista(){
		return $this->transportista;
	}
	
	/**
	* Establece el nombre del chofer
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setChofer($val = ''){
		$this->chofer = $val;
		return true;
	}
	
	/**
	* Retorna el nombre del chofer
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getChofer(){
		return $this->chofer;
	}
	
	/**
	* Establece si trae gafete o no
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setGafete($val = true){
		$this->gafete = $val;
		return true;
	}
	
	/**
	* Retorna true si trae gafete
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getGafete(){
		return $this->gafete;
	}
	
	/**
	* Establece el número del contenedor
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setContenedor($val = ''){
		$this->contenedor = $val;
		return true;
	}
	
	/**
	* Retorna el número del contenedor
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getContenedor(){
		return $this->contenedor;
	}
	
	/**
	* Establece el tipo de contenedor
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setTipoContenedor($val = ''){
		$this->tipocontenedor = $val;
		return true;
	}
	
	/**
	* Retorna el tipo de contenedor
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getTipoContenedor(){
		return $this->tipocontenedor;
	}
	
	/**
	* Establece la clave del contenedor
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setClaveContenedor($val = ''){
		$this->clavecontenedor = $val;
		return true;
	}
	
	/**
	* Retorna la clave del contenedor
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getClaveContenedor(){
		return $this->clavecontenedor;
	}
	
	/**
	* Establece el número de placas
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setPlacas($val = ''){
		$this->placas = $val;
		return true;
	}
	
	/**
	* Retorna el número de placas
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getPlacas(){
		return $this->placas;
	}
	
	/**
	* Establece el numero del candado
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setNumeroCandado($val = ''){
		$this->numerocandado = $val;
		return true;
	}
	
	/**
	* Retorna el número del candado
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getNumeroCandado(){
		return $this->numerocandado;
	}
	
	/**
	* Retorna la fecha en la que se realizó el registro
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getRegistro(){
		return $this->registro;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar(){
		if ($this->estado->getId() == '') return false;
		if ($this->cliente->getId() == '') return false;
		if ($this->getTipo() == '') return false;
		
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$sql = "INSERT INTO orden(idEstado, idCliente, idTipo) VALUES(".$this->estado->getId().", ".$this->cliente->getId().", ".$this->getTipo().");";
			$rs = $db->query($sql) or errorMySQL($db, $sql);
			if (!$rs) return false;
			
			$this->idOrden = $db->insert_id;
		}
		
		if ($this->getId() == '')
			return false;
		
		$sql = "UPDATE orden
			SET
				idEstado = ".$this->estado->getId().",
				idCliente = ".$this->cliente->getId().",
				idTipo = ".$this->getTipo().",
				idPrevio = ".($this->previo->getId() == ''?"null":$this->previo->getId()).",
				idCapturista = ".($this->capturista->getId() == ''?"null":$this->capturista->getId()).",
				fecha = '".$this->getFecha()."',
				factura = '".$this->getFactura()."',
				lugar = '".$this->getLugar()."',
				transportista = '".$this->getTransportista()."',
				chofer = '".$this->getChofer()."',
				gafete = '".$this->getGafete()."',
				contenedor = '".$this->getContenedor()."',
				tipocontenedor = '".$this->getTipoContenedor()."',
				clavecontenedor = '".$this->getClaveContenedor()."',
				placas = '".$this->getPlacas()."',
				numerocandado = '".$this->getNumeroCandado()."',
				registro = now()
			WHERE idOrden = ".$this->getId();
			
		$rs = $db->query($sql) or errorMySQL($db, $sql);
			
		return $rs?true:false;
	}
}
?>