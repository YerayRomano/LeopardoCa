<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="act_vid")
*/
class act_vid {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer") 
	* @ORM\GeneratedValue
	*/
	protected $cod_union;
	/** @ORM\Column(type="integer") */	
	protected $cod_act;
	/** @ORM\Column(type="integer") */	
	protected $cod_vid;
    /** @ORM\Column(type="integer") */	
    protected $veces;

    /**
     * Get cod_union
     *
     * @return integer 
     */
    public function getCodUnion()
    {
        return $this->cod_union;
    }

    /**
     * Set cod_act
     *
     * @param integer $codAct
     * @return act_vid
     */
    public function setCodAct($codAct)
    {
        $this->cod_act = $codAct;

        return $this;
    }

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
     * Set cod_vid
     *
     * @param integer $codVid
     * @return act_vid
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
     * Set veces
     *
     * @param integer $veces
     * @return act_vid
     */
    public function setVeces($veces)
    {
        $this->veces = $veces;

        return $this;
    }

    /**
     * Get veces
     *
     * @return integer 
     */
    public function getVeces()
    {
        return $this->veces;
    }
}
