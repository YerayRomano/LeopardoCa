<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * nacionalidaes
 */
class nacionalidaes
{
    /**
     * @var integer
     */
    private $cod_nac;

    /**
     * @var string
     */
    private $nombre;

    /**
     * @var string
     */
    private $banderita;


    /**
     * Get cod_nac
     *
     * @return integer 
     */
    public function getCodNac()
    {
        return $this->cod_nac;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return nacionalidaes
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
     * Set banderita
     *
     * @param string $banderita
     * @return nacionalidaes
     */
    public function setBanderita($banderita)
    {
        $this->banderita = $banderita;

        return $this;
    }

    /**
     * Get banderita
     *
     * @return string 
     */
    public function getBanderita()
    {
        return $this->banderita;
    }
}
