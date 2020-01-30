<?php
class Proveedor
{
    private $idprov;
    private $nomprov;
    private $idciu1;
    private $dirprov;
    private $telprov;
    private $emaprov;

    function __construct()
    { }

    public function getId()
    {
        return $this->idprov;
    }

    public function setId($idprov)
    {
        $this->idprov = $idprov;
    }

    public function getNombreProveedor()
    {
        return $this->nomprov;
    }

    public function setNombreProveedor($nomprov)
    {
        $this->nomprov = $nomprov;
    }

    public function getCiudad()
    {
        return $this->idciu1;
    }

    public function setCiudad($idciu1)
    {
        $this->idciu1 = $idciu1;
    }

    public function getDireccionproveedor()
    {
        return $this->dirprov;
    }

    public function setDireccionproveedor($dirprov)
    {
        $this->dirprov = $dirprov;
    }

    public function getTelefono()
    {
        return $this->telprov;
    }

    public function setTelefono($telprov)
    {
        $this->telprov = $telprov;
    }

    public function getEmail()
    {
        return $this->emaprov;
    }

    public function setEmail($emaprov)
    {
        $this->emaprov = $emaprov;
    }
}
