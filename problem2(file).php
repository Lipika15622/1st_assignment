
 
 <?php

 $filePath = 'file.txt';
 
 
 $fileContents = file_get_contents($filePath);
 
 
 //$words = preg_split('/\s+/', $fileContents, -1, PREG_SPLIT_NO_EMPTY);
 $words = explode(' ',$fileContents );
 
 
 $wordCount = 0;
 
 
 for ($i = 0; $i < count($words); $i++) {
     $wordCount++;
 }
 
 
 echo "The file contains " . $wordCount . " words.";

?>