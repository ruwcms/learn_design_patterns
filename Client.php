<?php

use App\learndesignpatterns\MobileSniffer;

class Client
{

    private $mobSnif;

    public function __construct()
    {
         $this->mobSnif = new MobileSniffer();
         echo "Device: " . $this->mobSnif->findDevice() . "<br>";
         echo "Browser: " . $this->mobSnif->findBrowser() . "<br>";
    }

}