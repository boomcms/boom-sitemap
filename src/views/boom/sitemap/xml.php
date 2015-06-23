<?= '<?xml version="1.0" encoding="UTF-8"?>' ?>

<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php foreach ($items as $item): ?>
        <url>
            <loc><?= $item->getUrl() ?></loc>
            <lastmod><?= $item->getLastModified()->format('c') ?></lastmod>
        </url>
    <?php endforeach ?>
</urlset>