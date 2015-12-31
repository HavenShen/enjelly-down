<?php
/**
 * Created by PhpStorm.
 * User: HavenShen
 * Date: 15/12/15
 * Time: 上午11:00
 */

namespace HavenShen\EnjellyDown\Services;


use HavenShen\EnjellyDown\Librarys\Parser;

class EnjellyDownServices
{
    protected $parser;
    public function __construct(Parser $parser){
        $this->parser = $parser;
    }

    public function markdown($text){
        $html = $this->parser->makeHtml($text);
        return $html;
    }
}