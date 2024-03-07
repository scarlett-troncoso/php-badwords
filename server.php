<?php 
/*
var_dump($_GET);
var_dump($_GET['paragraph']);
var_dump($_GET['word']);
*/

$paragraphToCensor = $_GET['paragraph'];
$wordToCensor = $_GET['word'];

var_dump($paragraphToCensor, $wordToCensor);
echo 'Original Paragraph: ' . $paragraphToCensor;
echo '<br/>';
echo 'Original Paragraph Length: ' . strlen($paragraphToCensor);
?>