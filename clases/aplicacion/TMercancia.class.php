<?php
/**
* TMercancia
* @package aplicacion
* @autor Hugo Santiago hugooluisss@gmail.com
**/

class TMercancia{
	private $idMercancia;
	private $idOrden;
	private $fraccion;
	private $descripcion;
	private $marca;
	private $modelo;
	private $serie;
	private $cantidad;
	private $pesoneto;
	private $pesobruto;
	private $embalaje;
	private $mctm;
	private $ec;
	private $observaciones;
	
	/**
	* Constructor de la clase
	*
	* @autor Hugo
	* @access public
	* @param int $id identificador del objeto
	*/
	public function TMercancia($id = ''){
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
		$sql = "select * from mercancia where idMercancia = ".$id;
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		foreach($rs->fetch_assoc() as $field => $val)
			$this->$field = $val;
		
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
		return $this->idMercancia;
	}
	
	/**
	* Establece la fracción
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setFraccion($val = ''){
		$this->fraccion = $val;
		return true;
	}
	
	/**
	* Retorna la fracción
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getFraccion(){
		return $this->fraccion;
	}
	
	/**
	* Establece la descripción
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setDescripcion($val = ''){
		$this->descripcion = $val;
		return true;
	}
	
	/**
	* Retorna la descripción
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getDescripcion(){
		return $this->descripcion;
	}
	
	/**
	* Establece la marca
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setMarca($val = ''){
		$this->marca = $val;
		return true;
	}
	
	/**
	* Retorna la marca
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getMarca(){
		return $this->marca;
	}
	
	/**
	* Establece el modelo
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setModelo($val = ''){
		$this->modelo = $val;
		return true;
	}
	
	/**
	* Retorna el modelo
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getModelo(){
		return $this->modelo;
	}
	
	/**
	* Establece la serie
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setSerie($val = ''){
		$this->serie = $val;
		return true;
	}
	
	/**
	* Retorna la serie
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getSerie(){
		return $this->serie;
	}
	
	/**
	* Establece la cantidad
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setCantidad($val = 0){
		$this->cantidad = $val;
		return true;
	}
	
	/**
	* Retorna la cantidad
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getCantidad(){
		return $this->cantidad == ''?0:$this->cantidad;
	}
	
	/**
	* Establece el pesoneto
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setPesoNeto($val = 0){
		$this->pesoneto = $val;
		return true;
	}
	
	/**
	* Retorna el pesoneto
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getPesoNeto(){
		return $this->pesoneto == ''?0:$this->pesoneto;
	}
	
	/**
	* Establece el peso bruto
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setPesoBruto($val = 0){
		$this->pesobruto = $val;
		return true;
	}
	
	/**
	* Retorna el peso bruto
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getPesoBruto(){
		return $this->pesobruto == ''?0:$this->pesobruto;
	}
	
	/**
	* Establece el embalaje
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setEmbalaje($val = ''){
		$this->embalaje = $val;
		return true;
	}
	
	/**
	* Retorna el embalaje
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getEmbalaje(){
		return $this->embalaje;
	}
	
	/**
	* Establece el mctm
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setMCTM($val = ''){
		$this->mctm = $val;
		return true;
	}
	
	/**
	* Retorna el MCTM
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getMCTM(){
		return $this->mctm;
	}
	
	/**
	* Establece el ec
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setEC($val = ''){
		$this->ec = $val;
		return true;
	}
	
	/**
	* Retorna el ec
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getEC(){
		return $this->ec;
	}
	
	/**
	* Establece las observaciones
	*
	* @autor Hugo
	* @access public
	* @param string $val Valor a asignar
	* @return boolean True si se realizó sin problemas
	*/
	
	public function setObservaciones($val = ''){
		$this->observaciones = $val;
		return true;
	}
	
	/**
	* Retorna las observaciones
	*
	* @autor Hugo
	* @access public
	* @return string Texto
	*/
	
	public function getObservaciones(){
		return $this->observaciones;
	}
	
	/**
	* Guarda los datos en la base de datos, si no existe un identificador entonces crea el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function guardar($orden = ''){
		if ($orden == '') return false;
		$db = TBase::conectaDB();
		
		if ($this->getId() == ''){
			$sql = "INSERT INTO mercancia(idOrden) VALUES(".$orden.");";
			$rs = $db->query($sql) or errorMySQL($db, $sql);;
			if (!$rs) return false;
			
			$this->idMercancia = $db->insert_id;
		}
		
		if ($this->getId() == '')
			return false;
		
		$sql = "UPDATE mercancia
			SET
				fraccion = '".$this->getFraccion()."',
				descripcion = '".$this->getDescripcion()."',
				marca = '".$this->getMarca()."',
				modelo = '".$this->getModelo()."',
				serie = '".$this->getSerie()."',
				cantidad = ".$this->getCantidad().",
				pesoneto = ".$this->getPesoNeto().",
				pesobruto = ".$this->getPesoBruto().",
				embalaje = '".$this->getEmbalaje()."',
				fraccion = '".$this->getFraccion()."',
				mctm = '".$this->getMCTM()."',
				ec = '".$this->getEC()."',
				observaciones = '".$this->getObservaciones()."'
			WHERE idMercancia = ".$this->getId();
			
		$rs = $db->query($sql) or errorMySQL($db, $sql);
			
		return $rs?true:false;
	}
	
	/**
	* Elimina el objeto
	*
	* @autor Hugo
	* @access public
	* @return boolean True si se realizó sin problemas
	*/
	
	public function eliminar(){
		if ($this->getId() == '') return false;
		
		$db = TBase::conectaDB();
		$sql = "delete from mercancia where idMercancia = ".$this->getId();
		$rs = $db->query($sql) or errorMySQL($db, $sql);
		
		return $rs?true:false;
	}
}
?>