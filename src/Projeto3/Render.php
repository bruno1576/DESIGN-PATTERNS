<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 18/02/2015
 * Time: 12:15
 */

namespace Projeto3;

use Projeto3\Interfaces\RenderInterface;

class Render implements RenderInterface {



    private $camandos = array();


    public function Render()
    {
        $retorno = '';
        foreach ($this->camandos as $elemento) {
            $retorno .= $elemento;
        }
        return $retorno;


    }

    public function addElementos($elemento)
    {
        $this->camandos[] = $elemento;

    }
}