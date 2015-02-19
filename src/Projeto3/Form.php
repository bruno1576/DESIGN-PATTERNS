<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 18/02/2015
 * Time: 12:07
 */

namespace Projeto3;
use Projeto3\Interfaces\OpenFormInterface;
use Projeto3\Interfaces\CloseFormInterface;
use Projeto3\Interfaces\RenderInterface;
class Form implements OpenFormInterface,RenderInterface,CloseFormInterface{


    private $id;

    private $action;
    private $method;
    private $class;
    private $html;
    private $camandos = array();

    public function OpenForm($id, $method, $action, $class)
    {
        $this->id = $id;
        $this->method = $method;
        $this->action = $action;
        $this->class = $class;
        $this->html = $html = "<Form id-='{$this->getId()}' action='{$this->getAction()}' method='{$this->getMethod()}' class='{$this->getClass()}'" . "/>";
        return true;
    }



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
    public function CloseForm()
    {
        $this->html = $html = "</form>";
        return true;

    }


    public function getId()
    {
        return $this->id;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getClass()
    {
        return $this->class;
    }
    public function getHtml()
    {
        return $this->html;
    }
}