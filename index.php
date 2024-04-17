<?php

include './vendor/autoload.php';

use Stichoza\GoogleTranslate\GoogleTranslate;
use Sentiment\Analyzer;

class LanguageTranslator {
    protected $translator;

    public function __construct($sourceLanguage = null, $targetLanguage = 'en') {
        $this->translator = new GoogleTranslate($targetLanguage);
        if ($sourceLanguage) {
            $this->translator->setSource($sourceLanguage);
        }
    }

    public function translate($text) {
        return $this->translator->translate($text);
    }
}

class SentimentAnalyzerWrapper extends LanguageTranslator {
    private $analyzer;

    public function __construct($sourceLanguage = null) {
        parent::__construct($sourceLanguage);
        $this->analyzer = new Analyzer();
    }

    public function analyzeText($text) {
        return $this->analyzer->getSentiment($text);
    }
}

// Usage
$sentimentAnalyzer = new SentimentAnalyzerWrapper();

// Example text with unknown source language
$text = "Ang tanga mo!";

// Detect language and translate to English
$translatedText = $sentimentAnalyzer->translate($text);

// Analyze sentiment
$sentiment = $sentimentAnalyzer->analyzeText($translatedText);

// Output translated text and sentiment
echo "Translated Text: $translatedText\n";
print_r($sentiment);

?>
