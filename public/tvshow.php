<?php

declare(strict_types=1);

use Database\MyPdo;
use Siko0001\PhpCrudTvshow\Html\WebPage;

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
    $nom = $nomSeries->fetch()['name'];
    $description = $nomSeries->fetch()['overview'];
    echo "<p>$nom</p><br><p>$description</p>";

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
        echo "<p>$nom : {$saison['name']}</p><br>";
    }

} catch (\Entity\Exception\EntityNotFoundException) {
    return http_response_code(404);
}
