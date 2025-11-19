<?php

const DS = DIRECTORY_SEPARATOR;
// Import des fichiers sources des classes 
require_once dirname(__FILE__, 2) . DS . 'src' . DS . 'App' . DS . 'IWriterDevice.php';
require_once dirname(__FILE__, 2) . DS . 'src' . DS . 'App' . DS . 'Pen.php';
require_once dirname(__FILE__, 2) . DS . 'src' . DS . 'App' . DS . 'FeatherPen.php';
require_once dirname(__FILE__, 2) . DS . 'src' . DS . 'App' . DS . 'VocalWriter.php';
require_once dirname(__FILE__, 2) . DS . 'src' . DS . 'App' . DS . 'ScreenManager.php';
// On déclare que l'on veut utiliser dans ce fichier la classe Pen
//App\Pen est le "nom complètement qualifié" (fully qualified name) de la classe  
use App\Pen;
use App\FeatherPen;
use App\ScreenManager;
use App\VocalWriter;


// Instantiation de Pen: On crée un objet sur le modèle de la classe Pen 
$bic_pas_cher = new Pen('rgba(136, 20, 0, 1)');
$bic_bleu = new Pen('#00c');
$bic_noir = new Pen;
$plume = new FeatherPen();


//Appel d'une méthode publique 
$bic_pas_cher->write('Bonjour');
$bic_bleu->write('oh mais c\'est bleu!');
$bic_pas_cher->write('Je prefere celui-ci finalement');
$bic_noir->write('Celui ci est pas mal non plus');
echo '<br>';
$plume->write('J\'ecris au stylo plume!!');

//VocalWriter seul
$vocal = new VocalWriter;
$the_message = $vocal->acquireVoiceMessage();
$vocal->sendToScreen($the_message);
echo '<br>';
echo '<br>';

// Utilisation du ScreenManager 
ScreenManager::display($vocal, 'Coucou, je suis le bic bleu');