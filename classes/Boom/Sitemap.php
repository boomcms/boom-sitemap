<?php

namespace Boom;

use Boom\Page;
use View;

class Sitemap
{
    private $viewDirectory = 'boom/sitemap';

    public function __toString()
    {
        return (string) $this->render();
    }

    private function getPages()
    {
		$finder = new Page\Finder;
        $finder->addFilter(new Page\Finder\Filter\VisibleToSearchEngines());

        return $finder->findAll();
    }

    public function render($format = 'xml')
    {
        return new View($this->viewDirectory . '/' . $format, array(
            'pages' => $this->getPages(),
        ));
    }
}