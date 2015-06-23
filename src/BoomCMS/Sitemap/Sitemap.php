<?php

namespace BoomCMS\Sitemap;

use BoomCMS\Core\Page\Finder;
use View;

class Sitemap
{
    private $viewDirectory = 'boom::sitemap';

    /**
     * Array of items to show in the sitemap.
     *
     * @var array
     */
    private $items = [];

    public function __construct()
    {
        $this->items = $this->getPageItems();
    }

    public function __toString()
    {
        return (string) $this->render();
    }

    public function addItem(Item $item)
    {
        $this->items[] = $item;

        return $this;
    }

    public function getItems()
    {
        return $this->items;
    }

    private function getPageItems()
    {
        $items = [];

        foreach ($this->getPages() as $page) {
            $items[] = new Item((string) $page->url(), $page->getLastModified());
        }

        return $items;
    }

    private function getPages()
    {
        $finder = new Finder\Finder;
        $finder->addFilter(new Finder\VisibleToSearchEngines());

        return $finder->findAll();
    }

    public function render($format = 'xml')
    {
        return new View($this->viewDirectory . '/' . $format, array(
            'items' => $this->getItems(),
        ));
    }
}