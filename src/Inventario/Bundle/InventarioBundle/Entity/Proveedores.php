<?php

namespace Inventario\Bundle\InventarioBundle\Entity;

/**
 * Proveedores
 */
class Proveedores
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $regimenT;

    /**
     * @var string
     */
    private $rfc;

    /**
     * @var string
     */
    private $telefono;


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
     * Set regimenT
     *
     * @param string $regimenT
     *
     * @return Proveedores
     */
    public function setRegimenT($regimenT)
    {
        $this->regimenT = $regimenT;

        return $this;
    }

    /**
     * Get regimenT
     *
     * @return string
     */
    public function getRegimenT()
    {
        return $this->regimenT;
    }

    /**
     * Set rfc
     *
     * @param string $rfc
     *
     * @return Proveedores
     */
    public function setRfc($rfc)
    {
        $this->rfc = $rfc;

        return $this;
    }

    /**
     * Get rfc
     *
     * @return string
     */
    public function getRfc()
    {
        return $this->rfc;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Proveedores
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
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Productos;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Medicamentos;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $Inventario;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Productos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Medicamentos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->Inventario = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add producto
     *
     * @param \Inventario\Bundle\InventarioBundle\Entity\Productos $producto
     *
     * @return Proveedores
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
     * Add medicamento
     *
     * @param \Inventario\Bundle\InventarioBundle\Entity\Medicamentos $medicamento
     *
     * @return Proveedores
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
     * Add inventario
     *
     * @param \Inventario\Bundle\InventarioBundle\Entity\Inventario $inventario
     *
     * @return Proveedores
     */
    public function addInventario(\Inventario\Bundle\InventarioBundle\Entity\Inventario $inventario)
    {
        $this->Inventario[] = $inventario;

        return $this;
    }

    /**
     * Remove inventario
     *
     * @param \Inventario\Bundle\InventarioBundle\Entity\Inventario $inventario
     */
    public function removeInventario(\Inventario\Bundle\InventarioBundle\Entity\Inventario $inventario)
    {
        $this->Inventario->removeElement($inventario);
    }

    /**
     * Get inventario
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInventario()
    {
        return $this->Inventario;
    }
}
