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

echo '<br/>';

// var_dump(str_replace($wordToCensor, '***', $paragraphToCensor)); 
$censorParagraph = str_replace($wordToCensor, '***', $paragraphToCensor);

echo 'Original Paragraph: ' . $censorParagraph;
echo '<br/>';
echo 'Original Paragraph Length: ' . strlen($censorParagraph);
?>