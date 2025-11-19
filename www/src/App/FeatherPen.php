<?php
/**
 * Classe FeatherPen, plume d'écriture 
 */

namespace App;

// FeatherPen étend les fonctionnalités de Pen 
// FeatherPen hérite de Pen 
// Final bloque la possibilité d'étendre FeatherPen dans une autre classe 
final class FeatherPen extends Pen
{
   // Valeur par défaut sur une propriété 
    private string $font_family = 'sans-serif';

    // Surcharge "partielle" du construct
    public function __construct(string $css_color = 'red', string $css_font_family = 'sans-serif')
    {
        // On execute le constructeur parent 
        parent::__construct($css_color);

        // On complète la suite
        $this->font_family = $css_font_family;
    }

    // Surcharge "totale" de la méthode write
    public function write( string $message ): void
    {
        printf(
            '<span style ="color:%s;font-family:%s">%s</span>',
            $this->color,
            $this->font_family,
            $message
        );
    }
}