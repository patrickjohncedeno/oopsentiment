<?php

include './vendor/autoload.php';

Use Sentiment\Analyzer;

class SentimentAnalyzerWrapper {
    private $analyzer;

    public function __construct() {
        $this->analyzer = new Analyzer();
    }

    public function analyzeText($text) {
        return $this->analyzer->getSentiment($text);
    }
}

$sentimentAnalyzer = new SentimentAnalyzerWrapper();

$output_text = $sentimentAnalyzer->analyzeText("David is fuck, handsome, and funny.");

$output_emoji = $sentimentAnalyzer->analyzeText("😁");

$output_text_with_emoji = $sentimentAnalyzer->analyzeText("Aproko doctor made me 🤣.");

print_r($output_text);