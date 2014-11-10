<?php

use Boom\Page;

class Controller_Sitemap extends Boom\Controller
{
	public function action_xml()
	{
		// Set an content-type header.
		$this->response
			->headers('Content-Type', 'text/xml')
			->body(new Boom\Sitemap());
	}
}