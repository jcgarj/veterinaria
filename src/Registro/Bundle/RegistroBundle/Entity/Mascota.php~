<?php

namespace Registro\Bundle\RegistroBundle\Entity;

/**
 * Mascota
 */
class Mascota
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
     * @var integer
     */
    private $peso;

    /**
     * @var integer
     */
    private $edad;

    /**
     * @var string
     */
    private $color;

    /**
     * @var string
     */
    private $especie;

    /**
     * @var string
     */
    private $raza;


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
     * @return Mascota
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
     * Set peso
     *
     * @param integer $peso
     *
     * @return Mascota
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;

        return $this;
    }

    /**
     * Get peso
     *
     * @return integer
     */
    public function getPeso()
    {
        return $this->peso;
    }

    /**
     * Set edad
     *
     * @param integer $edad
     *
     * @return Mascota
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set color
     *
     * @param string $color
     *
     * @return Mascota
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * Get color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * Set especie
     *
     * @param string $especie
     *
     * @return Mascota
     */
    public function setEspecie($especie)
    {
        $this->especie = $especie;

        return $this;
    }

    /**
     * Get especie
     *
     * @return string
     */
    public function getEspecie()
    {
        return $this->especie;
    }

    /**
     * Set raza
     *
     * @param string $raza
     *
     * @return Mascota
     */
    public function setRaza($raza)
    {
        $this->raza = $raza;

        return $this;
    }

    /**
     * Get raza
     *
     * @return string
     */
    public function getRaza()
    {
        return $this->raza;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Citas;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $MVZ;

    /**
     * @var \Registro\Bundle\RegistroBundle\Entity\cliente
     */
    private $cliente;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Citas = new \Doctrine\Common\Collections\ArrayCollection();
        $this->MVZ = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add cita
     *
     * @param \Citas\Bundle\CitasBundle\Entity\Citas $cita
     *
     * @return Mascota
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
     * Add mVZ
     *
     * @param \Registro\Bundle\RegistroBundle\Entity\MVZ $mVZ
     *
     * @return Mascota
     */
    public function addMVZ(\Registro\Bundle\RegistroBundle\Entity\MVZ $mVZ)
    {
        $this->MVZ[] = $mVZ;

        return $this;
    }

    /**
     * Remove mVZ
     *
     * @param \Registro\Bundle\RegistroBundle\Entity\MVZ $mVZ
     */
    public function removeMVZ(\Registro\Bundle\RegistroBundle\Entity\MVZ $mVZ)
    {
        $this->MVZ->removeElement($mVZ);
    }

    /**
     * Get mVZ
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMVZ()
    {
        return $this->MVZ;
    }

    /**
     * Set cliente
     *
     * @param \Registro\Bundle\RegistroBundle\Entity\cliente $cliente
     *
     * @return Mascota
     */
    public function setCliente(\Registro\Bundle\RegistroBundle\Entity\cliente $cliente = null)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \Registro\Bundle\RegistroBundle\Entity\cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    }
}
