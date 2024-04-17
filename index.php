<?php

include './vendor/autoload.php';

Use Sentiment\Analyzer;

//Encapsulation
class SentimentAnalyzerWrapper {
    private $analyzer;

    public function __construct() {
        $this->analyzer = new Analyzer();
    }

    //Getter since the object analyzer got the getSentiment() method in Analyzer class
    public function analyzeText($text) {
        return $this->analyzer->getSentiment($text);
    }
}

$sentimentAnalyzer = new SentimentAnalyzerWrapper();

$output_text = $sentimentAnalyzer->analyzeText("David is smart, handsome, and funny.");

print_r($output_text);