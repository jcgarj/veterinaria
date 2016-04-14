<?php

namespace Inventario\Bundle\InventarioBundle\Entity;

/**
 * Productos
 */
class Productos
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
    private $costo;

    /**
     * @var integer
     */
    private $precio;

    /**
     * @var \DateTime
     */
    private $fecha;


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
     * @return Productos
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
     * Set costo
     *
     * @param integer $costo
     *
     * @return Productos
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
     * Set precio
     *
     * @param integer $precio
     *
     * @return Productos
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return integer
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Productos
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
     * @var \Inventario\Bundle\InventarioBundle\Entity\Ventas
     */
    private $Ventas;

    /**
     * @var \Inventario\Bundle\InventarioBundle\Entity\Proveedores
     */
    private $Proveedores;

    /**
     * @var \Inventario\Bundle\InventarioBundle\Entity\Inventario
     */
    private $Inventario;


    /**
     * Set ventas
     *
     * @param \Inventario\Bundle\InventarioBundle\Entity\Ventas $ventas
     *
     * @return Productos
     */
    public function setVentas(\Inventario\Bundle\InventarioBundle\Entity\Ventas $ventas = null)
    {
        $this->Ventas = $ventas;

        return $this;
    }

    /**
     * Get ventas
     *
     * @return \Inventario\Bundle\InventarioBundle\Entity\Ventas
     */
    public function getVentas()
    {
        return $this->Ventas;
    }

    /**
     * Set proveedores
     *
     * @param \Inventario\Bundle\InventarioBundle\Entity\Proveedores $proveedores
     *
     * @return Productos
     */
    public function setProveedores(\Inventario\Bundle\InventarioBundle\Entity\Proveedores $proveedores = null)
    {
        $this->Proveedores = $proveedores;

        return $this;
    }

    /**
     * Get proveedores
     *
     * @return \Inventario\Bundle\InventarioBundle\Entity\Proveedores
     */
    public function getProveedores()
    {
        return $this->Proveedores;
    }

    /**
     * Set inventario
     *
     * @param \Inventario\Bundle\InventarioBundle\Entity\Inventario $inventario
     *
     * @return Productos
     */
    public function setInventario(\Inventario\Bundle\InventarioBundle\Entity\Inventario $inventario = null)
    {
        $this->Inventario = $inventario;

        return $this;
    }

    /**
     * Get inventario
     *
     * @return \Inventario\Bundle\InventarioBundle\Entity\Inventario
     */
    public function getInventario()
    {
        return $this->Inventario;
    }
}
