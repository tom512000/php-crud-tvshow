<?php

declare(strict_types=1);
use Database\MyPdo;
use Html\WebPage;

$webpage= new WebPage("Série tv");

$webpage->appendContent(<<<HTML
    <div class= "header">
        <h1>Série TV</h1>
    </div>
HTML);

