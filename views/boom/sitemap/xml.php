<?= '<?xml version="1.0" encoding="UTF-8"?>' ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
	<? foreach ($pages as $p): ?>
		<url>
			<loc><?= $p->url() ?></loc>
            <lastmod><?= $p->getLastModified()->format('c') ?></lastmod>
		</url>
	<? endforeach ?>
</urlset>