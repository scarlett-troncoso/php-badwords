<?php 
/*
var_dump($_GET);
var_dump($_GET['paragraph']);
var_dump($_GET['word']);
*/

$paragraphToCensor = trim($_POST['paragraph']);
$wordToCensor = trim($_POST['word']);

// var_dump($paragraphToCensor, $wordToCensor);
/*
echo 'Original Paragraph: ' . $paragraphToCensor;
echo '<br/>';
echo 'Original Paragraph Length: ' . strlen($paragraphToCensor);
 
echo '<br/>'; */

// var_dump(str_replace($wordToCensor, '***', $paragraphToCensor)); 
$censorParagraph = str_replace($wordToCensor, '***', $paragraphToCensor);

/*
echo 'Original Paragraph: ' . $censorParagraph;
echo '<br/>';
echo 'Original Paragraph Length: ' . strlen($censorParagraph); */
?>

<!doctype html>
<html lang="en">
    <head>
        <title>ex php badwords</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"/>
    </head>

    <body>
       <div class="container">
            <h2 class="mt-5 mb-3"> Original Paragraph
                <span class="badge bg-primary"><?= strlen($paragraphToCensor); ?></span>
            </h2>
            <p> <?= $paragraphToCensor; ?></p>
            
            <hr>
            
            <h2 class="mt-5 mb-3"> Censored Paragraph
                <span class="badge bg-primary"><?= strlen($censorParagraph); ?></span>
            </h2>
            <p> <?= $censorParagraph; ?></p>
       </div>   
    </body>
</html>