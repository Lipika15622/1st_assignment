
 
 <?php

 $filePath = 'file.txt';
 
 $fileContents = file_get_contents($filePath);
 
 $words = explode(' ',$fileContents );
 
 $wordCount = 0;
 
 for ($i = 0; $i < count($words); $i++) {
     $wordCount++;
 }
 echo "The file contains " . $wordCount . " words.";

?>
