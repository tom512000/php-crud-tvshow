<?php

declare(strict_types=1);

namespace public;

use Entity\Collection\ArtistCollection;
use Html\AppWebPage;
use Html\WebPage;

$appWebPage = new AppWebPage();
$appWebPage->setTitle('Artistes');

$tab = ArtistCollection::findAll();

for ($i = 0; $i < count($tab); $i++) {
    $name = WebPage::EscapeString($tab[$i]->getName());
    $id = $tab[$i]->getId();
    $appWebPage->appendContent("<p><a href='/artist.php?artistId=$id'>$name</a></p>\n");
}

echo $appWebPage->toHTML();
