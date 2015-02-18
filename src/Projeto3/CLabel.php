<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 18/02/2015
 * Time: 12:14
 */

namespace Projeto3;
use Projeto3\Interfaces\ClabelInterface;

class CLabel implements ClabelInterface {

    private $for;
    private $label;
    private $html;



    public function CLabel($for, $label)
    {
        $this->for = $for;
        $this->label = $label;
        $this->html = $html = "<label for='{$this->getFor()}'>" . "{$this->getLabel()}" . "</label>";

    }
    public function getFor()
    {
        return $this->for;
    }


    public function getLabel()
    {
        return $this->label;
    }
    public function getHtml()
    {
        return $this->html;
    }

}