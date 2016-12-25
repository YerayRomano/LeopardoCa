<?php
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="dispositivos")
*/
class dispositivos {
	/**
	* @ORM\Id
	* @ORM\Column(type="integer") 
	* @ORM\GeneratedValue
	*/
	protected $cod_dev;
	/** @ORM\Column(type="string",length=255) */
	protected $cod_ses;
    /** @ORM\Column(type="string",length=39) */
    protected $ip;
    /** @ORM\Column(type="string",length=255) */
    protected $user_agent;
    /** @ORM\Column(type="boolean") */
    protected $habilitado;

    /**
     * Get cod_dev
     *
     * @return integer 
     */
    public function getCodDev()
    {
        return $this->cod_dev;
    }

    /**
     * Set cod_ses
     *
     * @param string $codSes
     * @return dispositivos
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
     * Set ip
     *
     * @param string $ip
     * @return dispositivos
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
     * @return dispositivos
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
     * @return dispositivos
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
