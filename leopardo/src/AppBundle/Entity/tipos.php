<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="tipos")
*/
class tipos {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer") 
	* @ORM\GeneratedValue
	*/
	protected $cod_tipo;
	/** @ORM\Column(type="string",length=48) */	
	protected $nombre;
	/** @ORM\Column(type="string",length=15) */
    protected $canonico;
    /** @ORM\Column(type="boolean") */
	protected $habilitado;
	/** @ORM\Column(type="integer") */
	protected $horance;

    /**
     * Get cod_tipo
     *
     * @return integer 
     */
    public function getCodTipo()
    {
        return $this->cod_tipo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return tipos
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
     * Set canonico
     *
     * @param string $canonico
     * @return tipos
     */
    public function setCanonico($canonico)
    {
        $this->canonico = $canonico;

        return $this;
    }

    /**
     * Get canonico
     *
     * @return string 
     */
    public function getCanonico()
    {
        return $this->canonico;
    }

    /**
     * Set habilitado
     *
     * @param boolean $habilitado
     * @return tipos
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

    /**
     * Set horance
     *
     * @param integer $horance
     * @return tipos
     */
    public function setHorance($horance)
    {
        $this->horance = $horance;

        return $this;
    }

    /**
     * Get horance
     *
     * @return integer 
     */
    public function getHorance()
    {
        return $this->horance;
    }
}
