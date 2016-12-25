<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="comen_likedislike")
*/
class comen_likedislike {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer") 
	* @ORM\GeneratedValue
	*/
	protected $cod_voto;
	/** @ORM\Column(type="integer") */
	protected $cod_usr;
	/** @ORM\Column(type="integer") */	
	protected $cod_vid;
    /** @ORM\Column(type="boolean") */
    protected $horror;

    /**
     * Get cod_voto
     *
     * @return integer 
     */
    public function getCodVoto()
    {
        return $this->cod_voto;
    }

    /**
     * Set cod_usr
     *
     * @param integer $codUsr
     * @return comen_likedislike
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
     * Set cod_vid
     *
     * @param integer $codVid
     * @return comen_likedislike
     */
    public function setCodVid($codVid)
    {
        $this->cod_vid = $codVid;

        return $this;
    }

    /**
     * Get cod_vid
     *
     * @return integer 
     */
    public function getCodVid()
    {
        return $this->cod_vid;
    }

    /**
     * Set horror
     *
     * @param boolean $horror
     * @return comen_likedislike
     */
    public function setHorror($horror)
    {
        $this->horror = $horror;

        return $this;
    }

    /**
     * Get horror
     *
     * @return boolean 
     */
    public function getHorror()
    {
        return $this->horror;
    }
}
