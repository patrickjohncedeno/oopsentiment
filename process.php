<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
require_once 'control.php';

function View(){
    if (isset($_POST['comment'])) {
        // Retrieve form data
        $comment = $_POST['comment']; 
        

    $sentimentAnalyzer = new SentimentAnalyzerWrapper();
    $translatedText = $sentimentAnalyzer->convert($comment);
    
    // Analyze sentiment
    $sentiment = $sentimentAnalyzer->analyzeText($translatedText);
    
    echo "<h2> Comment: $comment" . "</h2></br>";
    echo "Translated Comment: $translatedText" . "</br>";
    echo "Sentiment Analysis: ";
    print_r($sentiment);
    
    }
}
?>
</body>
</html>
