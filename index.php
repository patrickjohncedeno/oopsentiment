<?php
//hatdog
include './vendor/autoload.php';

use Stichoza\GoogleTranslate\GoogleTranslate;


abstract class SelectedLanguage{
    abstract function languageSource($source);
}
class Filipino extends SelectedLanguage{
    private $sourceLang;
    function languageSource($sourceLang){
        $this->sourceLang = $sourceLang;
    }
    function getLanguage(){
        return $this->sourceLang;
    }
}
class Japanese extends SelectedLanguage{
    public $sourceLang;
    function languageSource($sourceLang){
        $this->sourceLang = $sourceLang;
    }
    function getLanguage(){
        return $this->sourceLang;
    }
}



$fil = new Filipino();
$fil->languageSource("fil");
$selected = $fil->getLanguage();


$tr = new GoogleTranslate('en'); // Translates into English
$tr->setSource($selected); // Translate from English
$tr->setTarget('en'); 

echo $tr->translate('Ang hirap mag-code');

// Usage


?>
