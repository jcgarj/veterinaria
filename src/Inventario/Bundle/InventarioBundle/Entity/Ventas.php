<?php

namespace Inventario\Bundle\InventarioBundle\Entity;

/**
 * Ventas
 */
class Ventas
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $fechaSalida;

    /**
     * @var integer
     */
    private $cantidad;

    /**
     * @var integer
     */
    private $total;


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
     * Set fechaSalida
     *
     * @param \DateTime $fechaSalida
     *
     * @return Ventas
     */
    public function setFechaSalida($fechaSalida)
    {
        $this->fechaSalida = $fechaSalida;

        return $this;
    }

    /**
     * Get fechaSalida
     *
     * @return \DateTime
     */
    public function getFechaSalida()
    {
        return $this->fechaSalida;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return Ventas
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set total
     *
     * @param integer $total
     *
     * @return Ventas
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return integer
     */
    public function getTotal()
    {
        return $this->total;
    }
    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Productos;

    /**
     * @var \Registro\Bundle\RegistroBundle\Entity\cliente
     */
    private $Cliente;

    /**
     * @var \Registro\Bundle\RegistroBundle\Entity\MVZ
     */
    private $MVZ;

    /**
     * @var \Inventario\Bundle\InventarioBundle\Entity\Medicamentos
     */
    private $Medicamentos;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Productos = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add producto
     *
     * @param \Inventario\Bundle\InventarioBundle\Entity\Productos $producto
     *
     * @return Ventas
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

    /**
     * Set cliente
     *
     * @param \Registro\Bundle\RegistroBundle\Entity\cliente $cliente
     *
     * @return Ventas
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
     * Set mVZ
     *
     * @param \Registro\Bundle\RegistroBundle\Entity\MVZ $mVZ
     *
     * @return Ventas
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

    /**
     * Set medicamentos
     *
     * @param \Inventario\Bundle\InventarioBundle\Entity\Medicamentos $medicamentos
     *
     * @return Ventas
     */
    public function setMedicamentos(\Inventario\Bundle\InventarioBundle\Entity\Medicamentos $medicamentos = null)
    {
        $this->Medicamentos = $medicamentos;

        return $this;
    }

    /**
     * Get medicamentos
     *
     * @return \Inventario\Bundle\InventarioBundle\Entity\Medicamentos
     */
    public function getMedicamentos()
    {
        return $this->Medicamentos;
    }
}
