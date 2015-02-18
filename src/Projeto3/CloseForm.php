<?php
/**
 * Created by PhpStorm.
 * User: Bruno
 * Date: 18/02/2015
 * Time: 12:10
 */

namespace Projeto3;
use Projeto3\Interfaces\CloseFormInterface;

class CloseForm implements CloseFormInterface {
    private $html;

    public function CloseForm()
    {
        $this->html = $html = "</form>";
        return true;

    }
    public function getHtml()
    {
        return $this->html;
    }
}