<?php
//hatdog
include './vendor/autoload.php';

use Stichoza\GoogleTranslate\GoogleTranslate;
use Sentiment\Analyzer;

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
echo $selected;


$tr = new GoogleTranslate('en'); // Translates into English
$tr->setSource($selected); // Translate from English
$tr->setTarget('en'); // Translate to Georgian

echo $tr->translate('Ang hirap mag-code');

// Usage
$sentimentAnalyzer = new SentimentAnalyzerWrapper();

// Example text with unknown source language
$text = "Ang tanga mo!";

// Detect language and translate to English
$sentimentAnalyzer->setTargetLanguage('en');
$translatedText = $sentimentAnalyzer->translate($text);

// Analyze sentiment
$sentiment = $sentimentAnalyzer->analyzeText($translatedText);

// Output translated text and sentiment
echo "Translated Text: $translatedText\n";
print_r($sentiment);

?>
