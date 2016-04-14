<?php

namespace Citas\Bundle\CitasBundle\Entity;

/**
 * Citas
 */
class Citas
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $motivo;

    /**
     * @var integer
     */
    private $costo;


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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Citas
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set motivo
     *
     * @param string $motivo
     *
     * @return Citas
     */
    public function setMotivo($motivo)
    {
        $this->motivo = $motivo;

        return $this;
    }

    /**
     * Get motivo
     *
     * @return string
     */
    public function getMotivo()
    {
        return $this->motivo;
    }

    /**
     * Set costo
     *
     * @param integer $costo
     *
     * @return Citas
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;

        return $this;
    }

    /**
     * Get costo
     *
     * @return integer
     */
    public function getCosto()
    {
        return $this->costo;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Observaciones;

    /**
     * @var \Registro\Bundle\RegistroBundle\Entity\cliente
     */
    private $Cliente;

    /**
     * @var \Registro\Bundle\RegistroBundle\Entity\Mascota
     */
    private $Mascota;

    /**
     * @var \Registro\Bundle\RegistroBundle\Entity\MVZ
     */
    private $MVZ;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Observaciones = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add observacione
     *
     * @param \Citas\Bundle\CitasBundle\Entity\Observaciones $observacione
     *
     * @return Citas
     */
    public function addObservacione(\Citas\Bundle\CitasBundle\Entity\Observaciones $observacione)
    {
        $this->Observaciones[] = $observacione;

        return $this;
    }

    /**
     * Remove observacione
     *
     * @param \Citas\Bundle\CitasBundle\Entity\Observaciones $observacione
     */
    public function removeObservacione(\Citas\Bundle\CitasBundle\Entity\Observaciones $observacione)
    {
        $this->Observaciones->removeElement($observacione);
    }

    /**
     * Get observaciones
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getObservaciones()
    {
        return $this->Observaciones;
    }

    /**
     * Set cliente
     *
     * @param \Registro\Bundle\RegistroBundle\Entity\cliente $cliente
     *
     * @return Citas
     */
    public function setCliente(\Registro\Bundle\RegistroBundle\Entity\cliente $cliente = null)
    {
        $this->Cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \Registro\Bundle\RegistroBundle\Entity\cliente
     */
    public function getCliente()
    {
        return $this->Cliente;
    }

    /**
     * Set mascota
     *
     * @param \Registro\Bundle\RegistroBundle\Entity\Mascota $mascota
     *
     * @return Citas
     */
    public function setMascota(\Registro\Bundle\RegistroBundle\Entity\Mascota $mascota = null)
    {
        $this->Mascota = $mascota;

        return $this;
    }

    /**
     * Get mascota
     *
     * @return \Registro\Bundle\RegistroBundle\Entity\Mascota
     */
    public function getMascota()
    {
        return $this->Mascota;
    }

    /**
     * Set mVZ
     *
     * @param \Registro\Bundle\RegistroBundle\Entity\MVZ $mVZ
     *
     * @return Citas
     */
    public function setMVZ(\Registro\Bundle\RegistroBundle\Entity\MVZ $mVZ = null)
    {
        $this->MVZ = $mVZ;

        return $this;
    }

    /**
     * Get mVZ
     *
     * @return \Registro\Bundle\RegistroBundle\Entity\MVZ
     */
    public function getMVZ()
    {
        return $this->MVZ;
    }
}
