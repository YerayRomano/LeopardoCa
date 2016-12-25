<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="vid_likedislike")
*/
class vid_likedislike {
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
    protected $genera_blanco;

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
     * @return vid_likedislike
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
     * @return vid_likedislike
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
     * Set genera_blanco
     *
     * @param boolean $generaBlanco
     * @return vid_likedislike
     */
    public function setGeneraBlanco($generaBlanco)
    {
        $this->genera_blanco = $generaBlanco;

        return $this;
    }

    /**
     * Get genera_blanco
     *
     * @return boolean 
     */
    public function getGeneraBlanco()
    {
        return $this->genera_blanco;
    }
}
