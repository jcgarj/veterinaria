<?php

namespace Registro\Bundle\RegistroBundle\Entity;

/**
 * MVZ
 */
class MVZ
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $appat;

    /**
     * @var string
     */
    private $apmat;

    /**
     * @var string
     */
    private $calle;

    /**
     * @var integer
     */
    private $noExt;

    /**
     * @var integer
     */
    private $noInt;

    /**
     * @var string
     */
    private $colonia;

    /**
     * @var string
     */
    private $delegacion;

    /**
     * @var string
     */
    private $telefono;

    /**
     * @var string
     */
    private $correo;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return MVZ
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set appat
     *
     * @param string $appat
     *
     * @return MVZ
     */
    public function setAppat($appat)
    {
        $this->appat = $appat;

        return $this;
    }

    /**
     * Get appat
     *
     * @return string
     */
    public function getAppat()
    {
        return $this->appat;
    }

    /**
     * Set apmat
     *
     * @param string $apmat
     *
     * @return MVZ
     */
    public function setApmat($apmat)
    {
        $this->apmat = $apmat;

        return $this;
    }

    /**
     * Get apmat
     *
     * @return string
     */
    public function getApmat()
    {
        return $this->apmat;
    }

    /**
     * Set calle
     *
     * @param string $calle
     *
     * @return MVZ
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;

        return $this;
    }

    /**
     * Get calle
     *
     * @return string
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set noExt
     *
     * @param integer $noExt
     *
     * @return MVZ
     */
    public function setNoExt($noExt)
    {
        $this->noExt = $noExt;

        return $this;
    }

    /**
     * Get noExt
     *
     * @return integer
     */
    public function getNoExt()
    {
        return $this->noExt;
    }

    /**
     * Set noInt
     *
     * @param integer $noInt
     *
     * @return MVZ
     */
    public function setNoInt($noInt)
    {
        $this->noInt = $noInt;

        return $this;
    }

    /**
     * Get noInt
     *
     * @return integer
     */
    public function getNoInt()
    {
        return $this->noInt;
    }

    /**
     * Set colonia
     *
     * @param string $colonia
     *
     * @return MVZ
     */
    public function setColonia($colonia)
    {
        $this->colonia = $colonia;

        return $this;
    }

    /**
     * Get colonia
     *
     * @return string
     */
    public function getColonia()
    {
        return $this->colonia;
    }

    /**
     * Set delegacion
     *
     * @param string $delegacion
     *
     * @return MVZ
     */
    public function setDelegacion($delegacion)
    {
        $this->delegacion = $delegacion;

        return $this;
    }

    /**
     * Get delegacion
     *
     * @return string
     */
    public function getDelegacion()
    {
        return $this->delegacion;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return MVZ
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set correo
     *
     * @param string $correo
     *
     * @return MVZ
     */
    public function setCorreo($correo)
    {
        $this->correo = $correo;

        return $this;
    }

    /**
     * Get correo
     *
     * @return string
     */
    public function getCorreo()
    {
        return $this->correo;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Citas;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $ventas;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Citas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ventas = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cita
     *
     * @param \Citas\Bundle\CitasBundle\Entity\Citas $cita
     *
     * @return MVZ
     */
    public function addCita(\Citas\Bundle\CitasBundle\Entity\Citas $cita)
    {
        $this->Citas[] = $cita;

        return $this;
    }

    /**
     * Remove cita
     *
     * @param \Citas\Bundle\CitasBundle\Entity\Citas $cita
     */
    public function removeCita(\Citas\Bundle\CitasBundle\Entity\Citas $cita)
    {
        $this->Citas->removeElement($cita);
    }

    /**
     * Get citas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCitas()
    {
        return $this->Citas;
    }

    /**
     * Add venta
     *
     * @param \Inventario\Bundle\InventarioBundle\Entity\Ventas $venta
     *
     * @return MVZ
     */
    public function addVenta(\Inventario\Bundle\InventarioBundle\Entity\Ventas $venta)
    {
        $this->ventas[] = $venta;

        return $this;
    }

    /**
     * Remove venta
     *
     * @param \Inventario\Bundle\InventarioBundle\Entity\Ventas $venta
     */
    public function removeVenta(\Inventario\Bundle\InventarioBundle\Entity\Ventas $venta)
    {
        $this->ventas->removeElement($venta);
    }

    /**
     * Get ventas
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getVentas()
    {
        return $this->ventas;
    }
    
    public function __toString(){
        return $this->nombre;
    }
    
}
