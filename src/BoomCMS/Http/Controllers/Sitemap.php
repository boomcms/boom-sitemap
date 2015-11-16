<?php

namespace BoomCMS\Http\Controllers;

use BoomCMS\Sitemap\Sitemap as Map;
use Illuminate\Http\Response;

class Sitemap extends \Illuminate\Routing\Controller
{
    public function view()
    {
        return (new Response())
            ->header('Content-Type', 'text/xml')
            ->setContent(new Map());
    }
}
