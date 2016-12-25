<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="vid_categ")
*/
class vid_categ {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer") 
	* @ORM\GeneratedValue
	*/
	protected $cod_asig;
	/** @ORM\Column(type="integer") */
	protected $cod_vid;
	/** @ORM\Column(type="integer") */
	protected $cod_categ;
	/** @ORM\Column(type="integer") */
	protected $accesos;

    /**
     * Get cod_asig
     *
     * @return \cid_categ 
     */
    public function getCodAsig()
    {
        return $this->cod_asig;
    }

    /**
     * Set cod_vid
     *
     * @param integer $codVid
     * @return vid_categ
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
     * Set cod_categ
     *
     * @param integer $codCateg
     * @return vid_categ
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
     * Set accesos
     *
     * @param integer $accesos
     * @return vid_categ
     */
    public function setAccesos($accesos)
    {
        $this->accesos = $accesos;

        return $this;
    }

    /**
     * Get accesos
     *
     * @return integer 
     */
    public function getAccesos()
    {
        return $this->accesos;
    }
}
