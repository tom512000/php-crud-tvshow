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
    ////////////////////////////// NOM SERIES ///////////////////////////////////
    $nomSeries = MyPdo::getInstance()->prepare(
        <<<'SQL'
        SELECT name, originalName, overview
        FROM tvshow
        WHERE id= :id
    SQL);
    $nomSeries->execute([":id"=>$idtvshow]);
    while (($ligne = $nomSeries->fetch()) !== false) {
        $nom = AppWebPage::escapeString($ligne['name']);
        $vrainom = AppWebPage::escapeString($ligne['originalName']);
        $description = AppWebPage::escapeString($ligne['overview']);
    }
    $webPage = new AppWebPage("Série TV : $nom");
    $webPage->appendContent("<div class='element'><img src='css/default.png' alt='image par défaut'>&emsp;<p>$nom</p><br><p class='barre'>&ensp;$vrainom</p><br><p class='barre'>&emsp;$description</p></div>");

    ////////////////////////////// SAISON SERIES ////////////////////////////////
    $saisonSeries = MyPdo::getInstance()->prepare(
        <<<'SQL'
        SELECT id, tvShowId, posterId, name, seasonNumber
        FROM season
        WHERE id= :id
        ORDER BY seasonNumber
    SQL);
    $saisonSeries->execute([":id"=>$idtvshow]);
    while (($saison = $saisonSeries->fetch()) !== false) {
        $webPage->appendContent("<div class='element'><p><a href='tvshow.php?idtvshow=$id'>$nom : {$saison['name']}</a></p><br></div>");
    }
    echo $webPage->toHTML();

} catch (\Siko0001\PhpCrudTvshow\Entity\Exception\EntityNotFoundException) {
    return http_response_code(404);
}
