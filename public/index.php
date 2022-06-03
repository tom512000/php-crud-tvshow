<?php

declare(strict_types=1);

namespace public;

use Collection\CollectionTvShow;
use Html\WebPage;
use Html\AppWebPage;

$titre = "Série TV";
$webPage = new AppWebPage($titre);
$webPage->appendContent("<div class='header'><h1>$titre</h1></div>");

$tvshow = CollectionTvShow::findAll();

foreach ($tvshow as $element) {
    $nom = WebPage::escapeString($element->getName());
    $id = WebPage::escapeString(strval($element->getId()));
    $description = WebPage::escapeString(strval($element->getDescription()));
    $webPage->appendContent("<div class='element'><a href='tvshow.php?idtvshow=$id'>$nom</a><br>$description<br></div><br>\n");
}

echo $webPage->toHTML();
