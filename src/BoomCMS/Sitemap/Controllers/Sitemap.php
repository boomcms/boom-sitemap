<?php

namespace BoomCMS\Sitemap\Controllers;

use BoomCMS\Sitemap\Sitemap as Map;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class Sitemap extends Controller
{
    public function xml()
    {
		return (new Response())
            ->header('Content-Type', 'text/xml')
            ->body(new Map());
    }
}