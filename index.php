<?php

include './vendor/autoload.php';



use Stichoza\GoogleTranslate\GoogleTranslate;

$tr = new GoogleTranslate('en'); // Translates into English
$tr->setSource('fil'); // Translate from English
$tr->setSource(); // Detect language automatically
$tr->setTarget('en'); // Translate to Georgian

echo $tr->translate('Gwapo si Louis');




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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
</head>
<body>
    <form action="try.php" method="POST">
        <input type="text" name="adik" id=""><br>
        <input type="submit" value="Submit" name="submit">
    </form>

</body>
</html>