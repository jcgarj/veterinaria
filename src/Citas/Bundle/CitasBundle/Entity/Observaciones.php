<?php

namespace Citas\Bundle\CitasBundle\Entity;

/**
 * Observaciones
 */
class Observaciones
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $descripcion;


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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Observaciones
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }
    /**
     * @var \Citas\Bundle\CitasBundle\Entity\Citas
     */
    private $Observaciones;


    /**
     * Set observaciones
     *
     * @param \Citas\Bundle\CitasBundle\Entity\Citas $observaciones
     *
     * @return Observaciones
     */
    public function setObservaciones(\Citas\Bundle\CitasBundle\Entity\Citas $observaciones = null)
    {
        $this->Observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return \Citas\Bundle\CitasBundle\Entity\Citas
     */
    public function getObservaciones()
    {
        return $this->Observaciones;
    }
}
