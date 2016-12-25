<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="rutas")
*/
class rutas {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer") 
	* @ORM\GeneratedValue
	*/
	protected $cod_ruta;
	/** @ORM\Column(type="integer") */
	protected $ruta;
    /** @ORM\Column(type="string",length=4) */
    protected $metodo;
	/** @ORM\Column(type="integer") */
	protected $min_horance;
    /** @ORM\Column(type="boolean") */
    protected $habilitado;

    /**
     * Get cod_ruta
     *
     * @return integer 
     */
    public function getCodRuta()
    {
        return $this->cod_ruta;
    }

    /**
     * Set ruta
     *
     * @param integer $ruta
     * @return rutas
     */
    public function setRuta($ruta)
    {
        $this->ruta = $ruta;

        return $this;
    }

    /**
     * Get ruta
     *
     * @return integer 
     */
    public function getRuta()
    {
        return $this->ruta;
    }

    /**
     * Set metodo
     *
     * @param string $metodo
     * @return rutas
     */
    public function setMetodo($metodo)
    {
        $this->metodo = $metodo;

        return $this;
    }

    /**
     * Get metodo
     *
     * @return string 
     */
    public function getMetodo()
    {
        return $this->metodo;
    }

    /**
     * Set min_horance
     *
     * @param integer $minHorance
     * @return rutas
     */
    public function setMinHorance($minHorance)
    {
        $this->min_horance = $minHorance;

        return $this;
    }

    /**
     * Get min_horance
     *
     * @return integer 
     */
    public function getMinHorance()
    {
        return $this->min_horance;
    }

    /**
     * Set habilitado
     *
     * @param boolean $habilitado
     * @return rutas
     */
    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;

        return $this;
    }

    /**
     * Get habilitado
     *
     * @return boolean 
     */
    public function getHabilitado()
    {
        return $this->habilitado;
    }
}
