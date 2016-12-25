<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="sesiones")
*/
class sesiones {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer") 
	* @ORM\GeneratedValue
	*/
	protected $cod_entrada;
	/** @ORM\Column(type="string",length=255) */
	protected $cod_ses;
	/** @ORM\Column(type="integer") */	
	protected $cod_usr;
    /** @ORM\Column(type="string",length=39) */
    protected $ip;
    /** @ORM\Column(type="string",length=255) */
    protected $user_agent;
    /** @ORM\Column(type="boolean") */
    protected $habilitado;

    /**
     * Get cod_entrada
     *
     * @return integer 
     */
    public function getCodEntrada()
    {
        return $this->cod_entrada;
    }

    /**
     * Set cod_ses
     *
     * @param string $codSes
     * @return sesiones
     */
    public function setCodSes($codSes)
    {
        $this->cod_ses = $codSes;

        return $this;
    }

    /**
     * Get cod_ses
     *
     * @return string 
     */
    public function getCodSes()
    {
        return $this->cod_ses;
    }

    /**
     * Set cod_usr
     *
     * @param integer $codUsr
     * @return sesiones
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
     * Set ip
     *
     * @param string $ip
     * @return sesiones
     */
    public function setIp($ip)
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * Get ip
     *
     * @return string 
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set user_agent
     *
     * @param string $userAgent
     * @return sesiones
     */
    public function setUserAgent($userAgent)
    {
        $this->user_agent = $userAgent;

        return $this;
    }

    /**
     * Get user_agent
     *
     * @return string 
     */
    public function getUserAgent()
    {
        return $this->user_agent;
    }

    /**
     * Set habilitado
     *
     * @param boolean $habilitado
     * @return sesiones
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
