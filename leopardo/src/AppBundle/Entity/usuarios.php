<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="usuarios")
*/
class usuarios {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer") 
	* @ORM\GeneratedValue
	*/
	protected $cod_usr;
	/** @ORM\Column(type="string",length=32) */
	protected $nombre;
	/** @ORM\Column(type="string",length=64) */
	protected $apellido;
	/** @ORM\Column(type="string",length=255) */
	protected $mail;
    /** @ORM\Column(type="integer") */
    protected $algo;
    /** @ORM\Column(type="string",length=255) */
    protected $pss;
    /** @ORM\Column(type="boolean") */
    protected $activo;
    /** @ORM\Column(type="integer") */
    protected $tipo;
    /** @ORM\Column(type="integer") */
    protected $especial;
    /** @ORM\Column(type="integer") */
    protected $notifica;
    /** @ORM\Column(type="string",length=255) */
    protected $avatar;

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
     * Set nombre
     *
     * @param string $nombre
     * @return usuarios
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
     * Set apellido
     *
     * @param string $apellido
     * @return usuarios
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return usuarios
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set algo
     *
     * @param integer $algo
     * @return usuarios
     */
    public function setAlgo($algo)
    {
        $this->algo = $algo;

        return $this;
    }

    /**
     * Get algo
     *
     * @return integer 
     */
    public function getAlgo()
    {
        return $this->algo;
    }

    /**
     * Set pss
     *
     * @param string $pss
     * @return usuarios
     */
    public function setPss($pss)
    {
        $this->pss = $pss;

        return $this;
    }

    /**
     * Get pss
     *
     * @return string 
     */
    public function getPss()
    {
        return $this->pss;
    }

    /**
     * Set activo
     *
     * @param boolean $activo
     * @return usuarios
     */
    public function setActivo($activo)
    {
        $this->activo = $activo;

        return $this;
    }

    /**
     * Get activo
     *
     * @return boolean 
     */
    public function getActivo()
    {
        return $this->activo;
    }

    /**
     * Set tipo
     *
     * @param integer $tipo
     * @return usuarios
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return integer 
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set especial
     *
     * @param integer $especial
     * @return usuarios
     */
    public function setEspecial($especial)
    {
        $this->especial = $especial;

        return $this;
    }

    /**
     * Get especial
     *
     * @return integer 
     */
    public function getEspecial()
    {
        return $this->especial;
    }

    /**
     * Set notifica
     *
     * @param integer $notifica
     * @return usuarios
     */
    public function setNotifica($notifica)
    {
        $this->notifica = $notifica;

        return $this;
    }

    /**
     * Get notifica
     *
     * @return integer 
     */
    public function getNotifica()
    {
        return $this->notifica;
    }

    /**
     * Set avatar
     *
     * @param string $avatar
     * @return usuarios
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return string 
     */
    public function getAvatar()
    {
        return $this->avatar;
    }
}
