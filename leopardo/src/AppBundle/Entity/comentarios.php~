<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="comentarios")
*/
class comentarios {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer") 
	* @ORM\GeneratedValue
	*/
	protected $cod_comen;
	/** @ORM\Column(type="integer") */
	protected $cod_vid;
	/** @ORM\Column(type="text") */
	protected $lopuesto;
    /** @ORM\Column(type="integer") */
    protected $baneado;

    /**
     * Get cod_comen
     *
     * @return integer 
     */
    public function getCodComen()
    {
        return $this->cod_comen;
    }

    /**
     * Set cod_vid
     *
     * @param integer $codVid
     * @return comentarios
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
     * Set lopuesto
     *
     * @param string $lopuesto
     * @return comentarios
     */
    public function setLopuesto($lopuesto)
    {
        $this->lopuesto = $lopuesto;

        return $this;
    }

    /**
     * Get lopuesto
     *
     * @return string 
     */
    public function getLopuesto()
    {
        return $this->lopuesto;
    }

    /**
     * Set baneado
     *
     * @param integer $baneado
     * @return comentarios
     */
    public function setBaneado($baneado)
    {
        $this->baneado = $baneado;

        return $this;
    }

    /**
     * Get baneado
     *
     * @return integer 
     */
    public function getBaneado()
    {
        return $this->baneado;
    }
}
