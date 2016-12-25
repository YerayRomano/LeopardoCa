<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="categorias")
*/
class categorias {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer") 
	* @ORM\GeneratedValue
	*/
	protected $cod_categ;
	/** @ORM\Column(type="string",length=96) */	
	protected $nombre;
	/** @ORM\Column(type="string",length=255) */	
	protected $img;
	/** @ORM\Column(type="boolean") */
	protected $habilitado;

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
     * Set nombre
     *
     * @param string $nombre
     * @return categorias
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
     * Set img
     *
     * @param string $img
     * @return categorias
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
     * Set habilitado
     *
     * @param boolean $habilitado
     * @return categorias
     */
    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;

        return $this;
    }

    /**
     * Get habilitado
     *
     * @return boolean 
     */
    public function getHabilitado()
    {
        return $this->habilitado;
    }
}
