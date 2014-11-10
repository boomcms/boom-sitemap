<?php

Route::set('boom-sitemap', 'sitemap.<action>')
	->defaults(array(
		'controller' => 'sitemap',
	));
