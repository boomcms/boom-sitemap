<?php

namespace BoomCMS\Sitemap;

use DateTime;

class Item
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var DateTime
     */
    private $lastModified;

    public function __construct($url, DateTime $lastModified)
    {
        $this->url = $url;
        $this->lastModified = $lastModified;
    }

    public function getUrl()
    {
        return $this->url;
    }

    public function getLastModified()
    {
        return $this->lastModified;
    }
}
