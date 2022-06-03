<?php

declare(strict_types=1);

use Siko0001\PhpCrudTvshow\Database\MyPdo;
use Siko0001\PhpCrudTvshow\Html\AppWebPage;

if (!isset($_GET["idtvshow"]) || (!ctype_digit($_GET["idtvshow"]))) {
    header('Location: /index.php');
    exit;
}
$idtvshow = (int)$_GET["idtvshow"];

try {
    ////////////////////////////// NOM SERIES ET SAISON ///////////////////////////////////
    $nomSeries = MyPdo::getInstance()->prepare(
        <<<'SQL'
        SELECT tv.name, se.name, tv.id
        FROM tvshow tv, season se
        WHERE tv.id=se.tvShowId
        AND tv.id= :id
    SQL);
    $nomSeries->execute([":id"=>$idtvshow]);
    while (($ligne = $nomSeries->fetch()) !== false) {
        $nom = AppWebPage::escapeString($ligne['tv.name']);
        $id = AppWebPage::escapeString($ligne['tv.id']);
        $titreSai = AppWebPage::escapeString($ligne['se.name']);
    }
    $webPage = new AppWebPage("Série TV : $nom <br> $titreSai");
    $webPage->appendContent("<div class='element'><img src='css/default.png' alt='image par défaut'>&emsp;<p><a href='tvshow.php?idtvshow=$id'>$nom</a></p><p class='barre'>&ensp;$titreSai</p></div>");

    ////////////////////////////// EPISODE SERIES ////////////////////////////////
    $episodeSeries = MyPdo::getInstance()->prepare(
        <<<'SQL'
        SELECT episodeNumber, name, overview
        FROM episode
        WHERE id= :id
        ORDER BY episodeNumber
    SQL);
    $episodeSeries->execute([":id"=>$seasonId]);
    while (($episode = $episodeSeries->fetch()) !== false) {
        $episodeNumber = AppWebPage::escapeString($ligne['episodeNumber']);
        $name = AppWebPage::escapeString($ligne['name']);
        $overview = AppWebPage::escapeString($ligne['overview']);
        $webPage->appendContent("<div class='element'><p>$episodeNumber - $name</p><br><p>$overview</p><br></div>");
    }
    echo $webPage->toHTML();

} catch (\Siko0001\PhpCrudTvshow\Entity\Exception\EntityNotFoundException) {
    return http_response_code(404);
}
