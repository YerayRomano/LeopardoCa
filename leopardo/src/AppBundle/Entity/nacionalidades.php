<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="nacionalidades")
*/
class nacionalidades {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer") 
	* @ORM\GeneratedValue
	*/
	protected $cod_nac;
	/** @ORM\Column(type="string",length=25) */
	protected $nombre;
	/** @ORM\Column(type="string",length=255) */
	protected $banderita;

    /**
     * Get cod_nac
     *
     * @return integer 
     */
    public function getCodNac()
    {
        return $this->cod_nac;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return nacionalidades
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
     * Set banderita
     *
     * @param string $banderita
     * @return nacionalidades
     */
    public function setBanderita($banderita)
    {
        $this->banderita = $banderita;

        return $this;
    }

    /**
     * Get banderita
     *
     * @return string 
     */
    public function getBanderita()
    {
        return $this->banderita;
    }
}
