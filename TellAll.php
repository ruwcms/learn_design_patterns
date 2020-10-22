<?php


class TellAll
{
    private $useragent;

    public function __construct()
    {
        $this->useragent = $_SERVER['HTTP_USER_AGENT'];
        echo $this->useragent;
    }
}

(new TellAll());