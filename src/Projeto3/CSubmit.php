<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 18/02/2015
 * Time: 12:12
 */

namespace Projeto3;

use Projeto3\Interfaces\CSubmitInterface;
class CSubmit implements CSubmitInterface {
    private $id;
    private $type;
    private $html;


    public function CSubmit($id = null, $type)
    {
        $this->type = $type;
        $this->id = $id;
        $this->html = $html = "<input id='{$this->getId()}' type='{$this->getType()}'" . "/>";
        return true;

    }

    public function getId()
    {
        return $this->id;
    }


    public function getType()
    {
        return $this->type;
    }
    public function getHtml()
    {
        return $this->html;
    }
}