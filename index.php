<?php

include './vendor/autoload.php';

Use Sentiment\Analyzer;
$analyzer = new Analyzer(); 

$output_text = $analyzer->getSentiment("");

$output_emoji = $analyzer->getSentiment("😁");

$output_text_with_emoji = $analyzer->getSentiment("Aproko doctor made me 🤣.");

print_r($output_text);
print_r($output_emoji);
print_r($output_text_with_emoji);