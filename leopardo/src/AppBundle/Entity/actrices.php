<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="actrices")
*/
class actrices {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer") 
	* @ORM\GeneratedValue
	*/
	protected $cod_act;
	/** @ORM\Column(type="string",length=128) */
	protected $nombre;
	/** @ORM\Column(type="integer") */	
	protected $nacionalidad;
	/** @ORM\Column(type="date") */
	protected $fecha_nascimento;
    /** @ORM\Column(type="string",length=128) */
    protected $horoscopo;

    /**
     * Get cod_act
     *
     * @return integer 
     */
    public function getCodAct()
    {
        return $this->cod_act;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return actrices
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
     * Set nacionalidad
     *
     * @param integer $nacionalidad
     * @return actrices
     */
    public function setNacionalidad($nacionalidad)
    {
        $this->nacionalidad = $nacionalidad;

        return $this;
    }

    /**
     * Get nacionalidad
     *
     * @return integer 
     */
    public function getNacionalidad()
    {
        return $this->nacionalidad;
    }

    /**
     * Set fecha_nascimento
     *
     * @param \DateTime $fechaNascimento
     * @return actrices
     */
    public function setFechaNascimento($fechaNascimento)
    {
        $this->fecha_nascimento = $fechaNascimento;

        return $this;
    }

    /**
     * Get fecha_nascimento
     *
     * @return \DateTime 
     */
    public function getFechaNascimento()
    {
        return $this->fecha_nascimento;
    }

    /**
     * Set horoscopo
     *
     * @param string $horoscopo
     * @return actrices
     */
    public function setHoroscopo($horoscopo)
    {
        $this->horoscopo = $horoscopo;

        return $this;
    }

    /**
     * Get horoscopo
     *
     * @return string 
     */
    public function getHoroscopo()
    {
        return $this->horoscopo;
    }
}
