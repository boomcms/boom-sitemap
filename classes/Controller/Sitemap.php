<?php

use Boom\Page;

class Controller_Sitemap extends Boom\Controller
{
	public function action_xml()
	{
		// Set an content-type header.
		$this->response
			->headers('Content-Type', 'text/xml')
			->body(
				View::factory('boom/sitemap/xml', array(
					'base_url'	=>	URL::base($this->request),
					'pages'	=>	$this->getPages(),
				))
			);
	}


	protected function getPages()
	{
		$finder = new Page\Finder;
        $finder->addFilter(new Page\Finder\Filter\VisibleToSearchEngines());

        return $finder->findAll();
	}
}