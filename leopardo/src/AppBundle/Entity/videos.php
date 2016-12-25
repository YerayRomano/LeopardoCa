<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="videos")
*/
class videos {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer") 
	* @ORM\GeneratedValue
	*/
	protected $cod_vid;
	/** @ORM\Column(type="string",length=128) */	
	protected $titulo;
    /** @ORM\Column(type="string",length=255) */
    protected $img;
	/** @ORM\Column(type="text") */
	protected $descripcion;
	/** @ORM\Column(type="integer") */
	protected $visitas;
    /** @ORM\Column(type="boolean") */
    protected $visible;
    /** @ORM\Column(type="boolean") */
    protected $jugoso;

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
     * Set titulo
     *
     * @param string $titulo
     * @return videos
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set img
     *
     * @param string $img
     * @return videos
     */
    public function setImg($img)
    {
        $this->img = $img;

        return $this;
    }

    /**
     * Get img
     *
     * @return string 
     */
    public function getImg()
    {
        return $this->img;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return videos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set visitas
     *
     * @param integer $visitas
     * @return videos
     */
    public function setVisitas($visitas)
    {
        $this->visitas = $visitas;

        return $this;
    }

    /**
     * Get visitas
     *
     * @return integer 
     */
    public function getVisitas()
    {
        return $this->visitas;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     * @return videos
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean 
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set jugoso
     *
     * @param boolean $jugoso
     * @return videos
     */
    public function setJugoso($jugoso)
    {
        $this->jugoso = $jugoso;

        return $this;
    }

    /**
     * Get jugoso
     *
     * @return boolean 
     */
    public function getJugoso()
    {
        return $this->jugoso;
    }
}
