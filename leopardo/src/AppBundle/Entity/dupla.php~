<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="dupla")
*/
class dupla {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer") 
	* @ORM\GeneratedValue
	*/
	protected $cod_dupla;
	/** @ORM\Column(type="integer") */
	protected $cod_usr;
	/** @ORM\Column(type="integer") */	
	protected $cod_comen;

    /**
     * Get cod_dupla
     *
     * @return integer 
     */
    public function getCodDupla()
    {
        return $this->cod_dupla;
    }

    /**
     * Set cod_usr
     *
     * @param integer $codUsr
     * @return dupla
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
     * Set cod_comen
     *
     * @param integer $codComen
     * @return dupla
     */
    public function setCodComen($codComen)
    {
        $this->cod_comen = $codComen;

        return $this;
    }

    /**
     * Get cod_comen
     *
     * @return integer 
     */
    public function getCodComen()
    {
        return $this->cod_comen;
    }
}
