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

function computeSentiment($compoundScore) {
    $percentage = abs($compoundScore) * 100; // Calculate percentage from 0 to 100

    if ($compoundScore == 0) {
        return ['sentiment' => 'Neutral', 'percentage' => 100]; // Neutral
    } elseif ($compoundScore < 0) {
        return ['sentiment' => 'Negative', 'percentage' => round($percentage, 2)]; // Negative
    } else {
        return ['sentiment' => 'Positive', 'percentage' => round($percentage, 2)]; // Positive
    }
}






function View(){
    if (isset($_POST['comment'])) {
        // Retrieve form data
        $comment = $_POST['comment']; 
        

    $sentimentAnalyzer = new SentimentAnalyzerWrapper();
    $translatedText = $sentimentAnalyzer->convert($comment);
    
    // Analyze sentiment
    $sentiment = $sentimentAnalyzer->analyzeText($translatedText);
    
     
    $result = computeSentiment($sentiment["compound"]);
    
    ?>
    <div>
        <h2 class="text-danger"><?php ?> <?php echo "Comment: $comment";?></h2>
    </div>
    <div>
        <h2 class="text-success"><?php ?> <?php  echo "Translated Comment: $translatedText";?></h2>
    </div>
    <div>
        <h2 class="text-info"><?php ?> <?php  echo "Sentiment: {$result['sentiment']}, Percentage: {$result['percentage']}%";?></h2>
    </div>
    <?php
    }
}
?>
</body>
</html>