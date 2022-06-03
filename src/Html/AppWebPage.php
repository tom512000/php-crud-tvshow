<?php

declare(strict_types=1);

namespace Html;

class AppWebPage extends WebPage
{
    /**
    * Constructeur de la classe AppWebPage. Ce constructeur permet d’affecter un titre à une WebPage.
    * Lorsque ces caractéritiques ne sont pas renseignées lors de l’appel du contructeur,
    * titre prend la valeur "".
    *
    * @param string $title (optional) Titre de la page Web
    */
    public function __construct(string $title = "")
    {
        parent::__construct($title);
        $this->appendCssUrl('css/style.css');
    }

    /**
     * Retourne le code HTML en chaîne de caractères.
     *
     * @return string
     */
    public function toHTML(): string
    {
        return <<<HTML
                <!doctype html>
                <html lang='fr'>
                <head>
                    <meta charset='utf-8'>
                    <meta name='viewport' content='width=device-width, initial-scale=1'>
                    <title>{$this->getTitle()}</title>
                    {$this->getHead()}
                </head>
                <body>
                    <div class=header ><h1>{$this->getTitle()}</h1></div>
                    <div class=content ><div class=list >{$this->getBody()}</div></div>
                    <div class=footer >{$this->getLastModification()}</div>
                </body>
                </html>
                HTML;
    }
}
