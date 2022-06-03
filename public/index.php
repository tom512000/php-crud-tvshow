<?php

declare(strict_types=1);

namespace public;

use Siko0001\PhpCrudTvshow\Entity\Collection\CollectionTvShow;
use Siko0001\PhpCrudTvshow\Html\WebPage;
use Siko0001\PhpCrudTvshow\Html\AppWebPage;
use Siko0001\PhpCrudTvshow\Entity\TvShow;

$webPage = new AppWebPage("Série TV");

$tvshow = CollectionTvShow::findAll();

foreach ($tvshow as $element) {
    $nom = WebPage::escapeString($element->getName());
    $id = WebPage::escapeString(strval($element->getId()));
    $description = WebPage::escapeString(strval($element->getOverview()));
    $webPage->appendContent("<div class='element'><a href='tvshow.php?idtvshow=$id'>$nom</a><br>$description<br></div><br>\n");
}

echo $webPage->toHTML();
