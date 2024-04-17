<?php

include './vendor/autoload.php';

use Stichoza\GoogleTranslate\GoogleTranslate;
use Sentiment\Analyzer;

class LanguageTranslator {
    protected $translator;

    public function convert($text, $sourceLanguage = null) {
        $this->translator = new GoogleTranslate('en');
        $this->setSourceLanguage($sourceLanguage);
        return $this->translator->translate($text);
    }
    
    public function setSourceLanguage($sourceLanguage) {
        $this->translator->setSource($sourceLanguage);
    }

    
}

class SentimentAnalyzerWrapper extends LanguageTranslator {
    private $analyzer;

    public function analyzeText($text) {
        $this->analyzer = new Analyzer();
        return $this->analyzer->getSentiment($text);
    }
}

// Usage
$sentimentAnalyzer = new SentimentAnalyzerWrapper();

// Example text with unknown source language
$text = "Ang tanga mo!";

// Detect language and translate to English
$translatedText = $sentimentAnalyzer->convert($text);

// Analyze sentiment
$sentiment = $sentimentAnalyzer->analyzeText($translatedText);

// Output translated text and sentiment
echo "Translated Text: $translatedText\n";
print_r($sentiment);

?>
