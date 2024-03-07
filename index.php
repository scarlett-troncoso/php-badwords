<?php
/*
Creare un form PHP che permetta di inviare due campi: un paragrafo ed una parola da censurare.
Gestire il tutto con due file diversi. Il primo file dovrà permettere all’utente di inserire i dati e inviare la richiesta al server.
Il secondo file riceverà la richiesta ed eseguirà queste operazioni:
- stampare a schermo il paragrafo e la sua lunghezza
- stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare
*/

$paragraph = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quo odio cum. Distinctio quod iusto odio consequatur eos, quo delectus necessitatibus corrupti. Necessitatibus corrupti, sequi aut ipsam alias soluta laborum? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab quo odio cum. Distinctio quod iusto odio consequatur eos, quo delectus necessitatibus corrupti. Necessitatibus corrupti, sequi aut ipsam alias soluta laborum?';

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
            <h2 class="mt-5 mb-3"> Censor Word</h2>
            <form action="./server.php" method="post"> 
                <div class="mb-3">
                    <label for="paragraph" class="form-label">Paragraph</label>
                    <textarea name="paragraph" id="paragraph" cols="30" rows="10" class="form-control"></textarea>
                    <small id="paragraphHelp" class="form-text text-muted">Add paragraph to censor</small>
                </div>

                <div class="mb-3">
                    <label for="word" class="form-label">Parola</label>
                    <input type="text" class="form-control" name="word" id="word" aria-describedby="wordHelp" placeholder="Type a word"/>
                    <small id="wordHelp" class="form-text text-muted">Add word to censor</small>
                </div>

                <button type="submit" class="btn btn-primary"> Censor </button>
            </form>
       </div>
        
      
    </body>
</html>
