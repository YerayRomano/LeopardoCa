<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * vistas
 */
class vistas
{
    /**
     * @var integer
     */
    private $cod_visitas;

    /**
     * @var integer
     */
    private $cod_vid;

    /**
     * @var integer
     */
    private $cod_nigga;

    /**
     * @var \DateTime
     */
    private $fecha_entrada;

    /**
     * @var \DateTime
     */
    private $fecha_salida;


    /**
     * Get cod_visitas
     *
     * @return integer 
     */
    public function getCodVisitas()
    {
        return $this->cod_visitas;
    }

    /**
     * Set cod_vid
     *
     * @param integer $codVid
     * @return vistas
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
     * Set cod_nigga
     *
     * @param integer $codNigga
     * @return vistas
     */
    public function setCodNigga($codNigga)
    {
        $this->cod_nigga = $codNigga;

        return $this;
    }

    /**
     * Get cod_nigga
     *
     * @return integer 
     */
    public function getCodNigga()
    {
        return $this->cod_nigga;
    }

    /**
     * Set fecha_entrada
     *
     * @param \DateTime $fechaEntrada
     * @return vistas
     */
    public function setFechaEntrada($fechaEntrada)
    {
        $this->fecha_entrada = $fechaEntrada;

        return $this;
    }

    /**
     * Get fecha_entrada
     *
     * @return \DateTime 
     */
    public function getFechaEntrada()
    {
        return $this->fecha_entrada;
    }

    /**
     * Set fecha_salida
     *
     * @param \DateTime $fechaSalida
     * @return vistas
     */
    public function setFechaSalida($fechaSalida)
    {
        $this->fecha_salida = $fechaSalida;

        return $this;
    }

    /**
     * Get fecha_salida
     *
     * @return \DateTime 
     */
    public function getFechaSalida()
    {
        return $this->fecha_salida;
    }
}
