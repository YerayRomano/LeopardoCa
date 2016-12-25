<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * activacion
 */
class activacion
{
    /**
     * @var integer
     */
    private $cod_activ;

    /**
     * @var string
     */
    private $token_kojonen;

    /**
     * @var integer
     */
    private $cod_usr;

    /**
     * @var \DateTime
     */
    private $caducidad;


    /**
     * Get cod_activ
     *
     * @return integer 
     */
    public function getCodActiv()
    {
        return $this->cod_activ;
    }

    /**
     * Set token_kojonen
     *
     * @param string $tokenKojonen
     * @return activacion
     */
    public function setTokenKojonen($tokenKojonen)
    {
        $this->token_kojonen = $tokenKojonen;

        return $this;
    }

    /**
     * Get token_kojonen
     *
     * @return string 
     */
    public function getTokenKojonen()
    {
        return $this->token_kojonen;
    }

    /**
     * Set cod_usr
     *
     * @param integer $codUsr
     * @return activacion
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
     * Set caducidad
     *
     * @param \DateTime $caducidad
     * @return activacion
     */
    public function setCaducidad($caducidad)
    {
        $this->caducidad = $caducidad;

        return $this;
    }

    /**
     * Get caducidad
     *
     * @return \DateTime 
     */
    public function getCaducidad()
    {
        return $this->caducidad;
    }
}
