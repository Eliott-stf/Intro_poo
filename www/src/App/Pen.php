<?php
/**
 * Classe Pen
 */

// Déclaration du namespace pour cette classe 
namespace App;

//Déclaration de la classe 
class Pen 
{
    // Propriété: variable qui est membre d'une classe
    // C'est une caractèristique de l'objet crée
    protected string $color;

    //Méthode constructeur: appelée lorsqu'on instancie la classe
    public function __construct(string $css_color = 'black' )
    {
        $this->color = $css_color;
    }

    //Méthode: fonction qui est membre d'une classe
    // C'est une fonctionnalité de l'objet crée
    public function write( string $message ): void
    {
        // $this contient l'instance actuelle (sur laquelle la méthode a été appelée) 
        /* $result = '<span style ="color:' . $this->color . '">'. $message . '</span>'; */
        //Fonctions de formatage de chaine:
        // - printf(): formate et echo le résultat
        // - sprintf(): formate et retourne le résultat 

/*         $result = sprintf(
            '<span style ="color:%s">%s</span>',
            $this->color,
             $message
        );
 */
        // echo incrémente le corps de la réponse HTTP avec la chaine donnée 
        /* echo $result; */

        printf(
            '<span style ="color:%s">%s</span>',
            $this->color,
             $message
        );

    }
}