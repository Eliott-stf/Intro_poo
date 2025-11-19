<?php

const DS = DIRECTORY_SEPARATOR;
// Import des fichiers sources des classes 
require_once dirname(__FILE__, 2) . DS . 'src' . DS . 'App' . DS . 'Pen.php';

// On déclare que l'on veut utiliser dans ce fichier la classe Pen
//App\Pen est le "nom complètement qualifié" (fully qualified name) de la classe  
use App\Pen;

// Instantiation de Pen: On crée un objet sur le modèle de la classe Pen 
$bic_pas_cher = new Pen();
//modification d'une propriété publique
$bic_pas_cher->color = 'rgba(136, 20, 0, 1)';

$bic_bleu = new Pen;
$bic_bleu->color = '#00c';

//Appel d'une méthode publique 
$bic_pas_cher->write('Bonjour');
$bic_bleu->write('oh mais c\'est bleu!');
$bic_pas_cher->write('Je prefere celui-ci finalement');
