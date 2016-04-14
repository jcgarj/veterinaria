<?php

namespace Inventario\Bundle\InventarioBundle\Entity;

/**
 * Inventario
 */
class Inventario
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $cantidadExist;


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
     * Set cantidadExist
     *
     * @param integer $cantidadExist
     *
     * @return Inventario
     */
    public function setCantidadExist($cantidadExist)
    {
        $this->cantidadExist = $cantidadExist;

        return $this;
    }

    /**
     * Get cantidadExist
     *
     * @return integer
     */
    public function getCantidadExist()
    {
        return $this->cantidadExist;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Medicamentos;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Productos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Medicamentos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Productos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add medicamento
     *
     * @param \Inventario\Bundle\InventarioBundle\Entity\Medicamentos $medicamento
     *
     * @return Inventario
     */
    public function addMedicamento(\Inventario\Bundle\InventarioBundle\Entity\Medicamentos $medicamento)
    {
        $this->Medicamentos[] = $medicamento;

        return $this;
    }

    /**
     * Remove medicamento
     *
     * @param \Inventario\Bundle\InventarioBundle\Entity\Medicamentos $medicamento
     */
    public function removeMedicamento(\Inventario\Bundle\InventarioBundle\Entity\Medicamentos $medicamento)
    {
        $this->Medicamentos->removeElement($medicamento);
    }

    /**
     * Get medicamentos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMedicamentos()
    {
        return $this->Medicamentos;
    }

    /**
     * Add producto
     *
     * @param \Inventario\Bundle\InventarioBundle\Entity\Productos $producto
     *
     * @return Inventario
     */
    public function addProducto(\Inventario\Bundle\InventarioBundle\Entity\Productos $producto)
    {
        $this->Productos[] = $producto;

        return $this;
    }

    /**
     * Remove producto
     *
     * @param \Inventario\Bundle\InventarioBundle\Entity\Productos $producto
     */
    public function removeProducto(\Inventario\Bundle\InventarioBundle\Entity\Productos $producto)
    {
        $this->Productos->removeElement($producto);
    }

    /**
     * Get productos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProductos()
    {
        return $this->Productos;
    }
}
