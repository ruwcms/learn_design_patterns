<?php
namespace App\learndesignpatterns;

class MobileSniffer
{
    private $useragent;
    private $device;
    private $browser;
    private $deviceLength;
    private $browserLength;

    public function __construct()
    {
        $this->useragent = $_SERVER["HTTP_USER_AGENT"];
        $this->useragent = strtolower($this->useragent);

        $this->device = ['iphone', 'ipad', 'silk', 'blackberry','touch', 'screen'];
        $this->browser = ['firefox','chrome','opera','msie','safari','blackberry','trident'];

        $this->deviceLength = count($this->device);
        $this->browserLength = count($this->browser);
    }

    /**
     * @return string
     */
    public function findDevice()
    {
        for($uaSniff = 0 ; $uaSniff < $this->deviceLength ; $uaSniff++)
        {
            if(strstr($this->useragent, $this->device[$uaSniff]))
            {
                return $this->device[$uaSniff];
            }
        }
    }

    public function findBrowser()
    {
        for($uaSniff = 0 ; $uaSniff < $this->browserLength ; $uaSniff++)
        {
            if(strstr($this->useragent, $this->browser[$uaSniff]))
            {
                return $this->browser[$uaSniff];
            }
        }
    }
}
?>
