<?php

namespace Inventario\Bundle\InventarioBundle\Entity;

/**
 * Medicamentos
 */
class Medicamentos
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
    private $codigo;

    /**
     * @var \DateTime
     */
    private $fecha;

    /**
     * @var string
     */
    private $tipo;

    /**
     * @var integer
     */
    private $costo;

    /**
     * @var integer
     */
    private $precio;


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
     * @return Medicamentos
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
     * Set codigo
     *
     * @param integer $codigo
     *
     * @return Medicamentos
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return integer
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Medicamentos
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
     * Set tipo
     *
     * @param string $tipo
     *
     * @return Medicamentos
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set costo
     *
     * @param integer $costo
     *
     * @return Medicamentos
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
     * @return Medicamentos
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
     * @var \Inventario\Bundle\InventarioBundle\Entity\Productos
     */
    private $Producto;


    /**
     * Set ventas
     *
     * @param \Inventario\Bundle\InventarioBundle\Entity\Ventas $ventas
     *
     * @return Medicamentos
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
     * @return Medicamentos
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
     * @return Medicamentos
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

    /**
     * Set producto
     *
     * @param \Inventario\Bundle\InventarioBundle\Entity\Productos $producto
     *
     * @return Medicamentos
     */
    public function setProducto(\Inventario\Bundle\InventarioBundle\Entity\Productos $producto = null)
    {
        $this->Producto = $producto;

        return $this;
    }

    /**
     * Get producto
     *
     * @return \Inventario\Bundle\InventarioBundle\Entity\Productos
     */
    public function getProducto()
    {
        return $this->Producto;
    }
}
