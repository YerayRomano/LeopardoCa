<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="usr_categ")
*/
class usr_categ {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer") 
	* @ORM\GeneratedValue
	*/
	protected $cod_assina;
	/** @ORM\Column(type="integer") */
	protected $cod_usr;
	/** @ORM\Column(type="integer") */	
	protected $cod_categ;
	/** @ORM\Column(type="date") */
	protected $fecha_acceso;
    /** @ORM\Column(type="integer") */
    protected $vesses;

    /**
     * Get cod_assina
     *
     * @return integer 
     */
    public function getCodAssina()
    {
        return $this->cod_assina;
    }

    /**
     * Set cod_usr
     *
     * @param integer $codUsr
     * @return usr_categ
     */
    public function setCodUsr($codUsr)
    {
        $this->cod_usr = $codUsr;

        return $this;
    }

    /**
     * Get cod_usr
     *
     * @return integer 
     */
    public function getCodUsr()
    {
        return $this->cod_usr;
    }

    /**
     * Set cod_categ
     *
     * @param integer $codCateg
     * @return usr_categ
     */
    public function setCodCateg($codCateg)
    {
        $this->cod_categ = $codCateg;

        return $this;
    }

    /**
     * Get cod_categ
     *
     * @return integer 
     */
    public function getCodCateg()
    {
        return $this->cod_categ;
    }

    /**
     * Set fecha_acceso
     *
     * @param \DateTime $fechaAcceso
     * @return usr_categ
     */
    public function setFechaAcceso($fechaAcceso)
    {
        $this->fecha_acceso = $fechaAcceso;

        return $this;
    }

    /**
     * Get fecha_acceso
     *
     * @return \DateTime 
     */
    public function getFechaAcceso()
    {
        return $this->fecha_acceso;
    }

    /**
     * Set vesses
     *
     * @param integer $vesses
     * @return usr_categ
     */
    public function setVesses($vesses)
    {
        $this->vesses = $vesses;

        return $this;
    }

    /**
     * Get vesses
     *
     * @return integer 
     */
    public function getVesses()
    {
        return $this->vesses;
    }
}
