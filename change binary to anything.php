<!DOCTYPE HTML> 
<html>
 <head> 
 <title>PHP Application</title> 
 </head> 
 <body> 
 <?php
$replaceWhat = array('o', 'f');
$replaceWith   = array('1', '0');
$text    = 'oofoofooffffofo';
$output  = str_replace($replaceWhat, $replaceWith, $text);
echo $output;
?>
 </body> 
 </html>
