<?php


class Node
{
    private $url;
    private $parentUrl;

    public function __construct($url,$parentUrl)
    {
        $this->url = $url;
        $this->parentUrl = $parentUrl;
    }
    public function getUrl() {
        return $this->url;
    }
    public function getParentUrl() {
        return $this->parentUrl;
    }
}