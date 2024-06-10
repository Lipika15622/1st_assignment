<?php

function reversed_Sentence($sentence) {
    $spilt_word = explode(' ', $sentence); 
  //  $reversed_word = array();
        
    foreach ( $spilt_word as $word) {
        $reversed_word = '';
        for ($i = strlen($word) - 1; $i >= 0; $i--) {
            $reversed_word .= $word[$i];
        }
        $reversed_words[] = $reversed_word;
    }

    $reversed_Sentence = implode(' ', $reversed_words); 
    return $reversed_Sentence;
}



$original_Sentence = readline("Enter the string: ");
$reversed_Sentence = reversed_Sentence($original_Sentence);
echo "Original Sentence: " . $original_Sentence . "\n";
echo "Reversed Sentence: " . $reversed_Sentence;

?>