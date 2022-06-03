<?php

declare(strict_types=1);

namespace Collection;

use Database\MyPdo;
use Entity\TvShow;
use PDO;

class CollectionTvShow
{
    /**
     * Retourne un tableau contenant tous les tvshow de la base de donnée se trouvant sur MyPDO
     * @return array
     */
    public static function findAll(): array
    {
        $tabTvShow = MyPDO::getInstance()->prepare(
            <<<'SQL'
        SELECT id, originalName, name, posterId, overview
        FROM tvshow
        ORDER BY name
        SQL);

        $tabTvShow->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, TVShow::class);
        $tabTvShow->execute();
        return $tabTvShow->fetchAll();
    }
}