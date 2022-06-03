<?php

declare(strict_types=1);

namespace Siko0001\PhpCrudTvshow\Html;

use DateTime;

class WebPage
{
    private string $head = "";
    private string $title = "";
    private string $body = "";

    /**
     * Constructeur de la classe WebPage. Ce constructeur permet d’affecter un titre à une WebPage.
     * Lorsque ces caractéritiques ne sont pas renseignées lors de l’appel du contructeur,
     * titre prend la valeur "".
     *
     * @param string $title (optional) Titre de la page Web
     */
    public function __construct(string $title = "")
    {
        $this->title = $title;
    }

    /**
     * Accesseur de la classe Webpage. Retourne la valeur de head sous forme de chaîne
     * de caractères.
     *
     * @return string
     */
    public function getHead(): string
    {
        return $this->head;
    }

    /**
     * Accesseur de la classe Webpage. Retourne la valeur de title sous forme de chaîne
     * de caractères.
     *
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Modificateur du titre de la classe Webpage.
     *
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * Accesseur de la classe Webpage. Retourne la valeur de body sous forme de chaîne
     * de caractères.
     *
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * Ajoute la valeur $content à l'instance body.
     *
     * @param string $content
     */
    public function appendContent(string $content): void
    {
        $this->body = $this->body.$content;
    }

    /**
     * Ajoute une table de style $css à l'instance head.
     *
     * @param string $css
     */
    public function appendCss(string $css): void
    {
        $this->head = $this->head."<style>{$css}</style>";
    }

    /**
     * Ajoute un lien $url à l'instance head.
     *
     * @param string $url
     */
    public function appendCssUrl(string $url): void
    {
        $this->head = $this->head."<link href={$url} rel='stylesheet'>";
    }

    /**
     * Ajoute une partie Java Sript $js à l'instance head.
     *
     * @param string $js
     */
    public function appendJs(string $js): void
    {
        $this->head = $this->head."<script>{$js}</script>";
    }

    /**
     * Ajoute un lien Java Script $url à l'instance head.
     *
     * @param string $url
     */
    public function appendJsUrl(string $url): void
    {
        $this->head = $this->head."<script type='text/javascript' src={$url}></script>";
    }

    /**
     * Ajoute la valeur $content à l'instance head.
     *
     * @param string $content
     */
    public function appendToHead(string $content): void
    {
        $this->head = $this->head.$content;
    }

    /**
     * Verifie les caractères spéciaux $string en fonction d'HTML.
     *
     * @param string $string
     */
    public static function escapeString(string $string): string
    {
        return htmlspecialchars($string, ENT_QUOTES | ENT_HTML5);
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
                    {$this->getBody()}
                <div style='font-style: italic; text-align: right;'>
                    {$this->getLastModification()}
                </div>
                </body>
                </html>
                HTML;
    }

    /**
     * Retourne la date et l'heure de la dernière modification du code HTML.
     *
     * @param string
     */
    public static function getLastModification(): string
    {
        $date = new DateTime();
        return "Dernière modification de cette page le ".date("d/m/Y à H:i:s", getlastmod());
    }
}
