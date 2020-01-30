<?php
// incluye la clase Persistencia
require_once('PersistenciaAPI.php');

class CrudProveedor
{
	// constructor de la clase
	public function __construct()
	{ }

	// método para insertar, recibe como parámetro un objeto de tipo Proveedor
	public function insertar($Proveedor)
	{
		$db = Persistencia::conectar();
		$insert = $db->prepare('INSERT INTO proveedor values(NULL,:nomprov,:idciu1,:dirprov,:telprov,:emaprov)');
		$insert->bindValue('nomprov', $Proveedor->getNombreProveedor());
		$insert->bindValue('idciu1', $Proveedor->getCiudad());
		$insert->bindValue('dirprov', $Proveedor->getDireccionproveedor());
		$insert->bindValue('telprov', $Proveedor->getTelefono());
		$insert->bindValue('emaprov', $Proveedor->getEmail());
		$insert->execute();
	}

	// método para mostrar todos los Proveedor
	public function mostrar()
	{
		$db = Persistencia::conectar();
		$listaProveedor = [];
		$select = $db->query('SELECT * FROM proveedor');

		foreach ($select->fetchAll() as $Proveedor) {
			$myProveedor = new Proveedor();
			$myProveedor->setId($Proveedor['idprov']);
			$myProveedor->setNombreProveedor($Proveedor['nomprov']);
			$myProveedor->setCiudad($Proveedor['idciu1']);
			$myProveedor->setDireccionproveedor($Proveedor['dirprov']);
			$myProveedor->setTelefono($Proveedor['telprov']);
			$myProveedor->setEmail($Proveedor['emaprov']);
			$listaProveedor[] = $myProveedor;
		}
		return $listaProveedor;
	}

	// método para eliminar un Proveedor, recibe como parámetro el idprov del Proveedor
	public function eliminar($idprov)
	{
		$db = Persistencia::conectar();
		$eliminar = $db->prepare('DELETE FROM proveedor WHERE idprov=:idprov');
		$eliminar->bindValue('idprov', $idprov);
		$eliminar->execute();
	}

	// método para buscar un Proveedor, recibe como parámetro el idprov del Proveedor
	public function obtenerProveedor($idprov)
	{
		$db = Persistencia::conectar();
		$select = $db->prepare('SELECT * FROM proveedor WHERE idprov=:idprov');
		$select->bindValue('idprov', $idprov);
		$select->execute();
		$Proveedor = $select->fetch();
		$myProveedor = new Proveedor();
		$myProveedor->setId($Proveedor['idprov']);
		$myProveedor->setNombreProveedor($Proveedor['nomprov']);
		$myProveedor->setCiudad($Proveedor['idciu1']);
		$myProveedor->setDireccionproveedor($Proveedor['dirprov']);
		$myProveedor->setTelefono($Proveedor['telprov']);
		$myProveedor->setEmail($Proveedor['emaprov']);
		return $myProveedor;
	}

	// método para actualizar un Proveedor, recibe como parámetro el Proveedor
	public function actualizar($Proveedor)
	{
		$db = Persistencia::conectar();
		$actualizar = $db->prepare('UPDATE proveedor SET nomprov=:nomprov, idciu1=:idciu1,dirprov=:dirprov,telprov=:telprov,emaprov=:emaprov  WHERE idprov=:idprov');
		$actualizar->bindValue('idprov', $Proveedor->getId());
		$actualizar->bindValue('nomprov', $Proveedor->getNombreProveedor());
		$actualizar->bindValue('idciu1', $Proveedor->getCiudad());
		$actualizar->bindValue('dirprov', $Proveedor->getDireccionproveedor());
		$actualizar->bindValue('telprov', $Proveedor->getTelefono());
		$actualizar->bindValue('emaprov', $Proveedor->getEmail());
		$actualizar->execute();
	}
}
