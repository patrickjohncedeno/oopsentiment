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

require_once 'SentimentAnalyzer.php';

$sentimentAnalyzer = new SentimentAnalyzerWrapper();

$output_text = $sentimentAnalyzer->analyzeText("David is smart, handsome, and funny.");

print_r($output_text);