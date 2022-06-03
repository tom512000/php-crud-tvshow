<?php

declare(strict_types=1);

use Database\MyPdo;
use Html\AppWebPage;
use Html\WebPage;

if (!isset($_GET["artistId"]) || (!ctype_digit($_GET["artistId"]))) {
    header('Location: /index.php');
    exit;
}
$artistId = (int)$_GET["artistId"];
try {
    $artisteverif = Artist::findById($artistId);

    if (!$artisteverif) {
        return http_response_code(404);
    }
    $webPage = new AppWebPage();

    ////////////////////////////// RECHERCHE ARTISTE ///////////////////////////////////

    $queryName = Artist::findById(intval($artistId));

    $titre = WebPage::escapeString($queryName->getName());

    $webPage->setTitle('Albums de '.$titre);

    ////////////////////////////// RECHERCHE ALBUMS ///////////////////////////////////

    $albums = AlbumCollection::findByArtistId(intval($artistId));

    foreach ($albums as $alb) {
        $name = WebPage::escapeString($alb->getName());
        $webPage->appendContent("<div class='album'><div class='album__year'>{$alb->getYear()}</div>&nbsp;<div class='album__name'>{$name}</div></div>\n");
    }

    echo $webPage->toHTML();
} catch (\Entity\Exception\EntityNotFoundException) {
    return http_response_code(404);
}
