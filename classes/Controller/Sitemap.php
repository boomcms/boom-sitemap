<?php

use Boom\Sitemap\Sitemap;

class Controller_Sitemap extends Controller
{
    public function action_xml()
    {
        $this->response
            ->headers('Content-Type', 'text/xml')
            ->body(new Sitemap());
    }
}