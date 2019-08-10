<?php


class WebPageIndexer
{
    private $urlHost="";

    function __construct($url) {
      $this->urlHost = $this->getHost($url);
    }
    private function getHost(string $url) : string{
        return parse_url($url)['host'];
    }


}