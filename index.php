<?php

$bad_word = $_GET ? $_GET['badword'] : '';


$paragraph = 'La ricetta della torta di mele è quella che mi ricorda maggiormente la mia infanzia e questa che vi propongo oggi è la ricetta della torta di mele soffice e leggera che prepara la mia mamma da quando ne ho memoria: credo sia la tradizionale ricetta della torta di mele della nonna e per me è la più buona del mondo ;)

La torta di mele è un dolce classico della cucina italiana ed è forse la ricetta per torte che preferisco in assoluto: soffice, profumata e facile e veloce da preparare, con varie consistenze date dal morbido impasto e dai pezzetti di mela. In una parola sola perfetta, sia per i grandi che per i bambini.

Durante l \'inverno mia mamma prepara la torta di mele almeno una volta a settimana e, se avanza (molto raramente o se ne fa un paio), congeliamo le fette e le scongeliamo al momento per mangiarle a colazione. Oppure tocca a me mettermi all\'opera, cucinando la mia versione del dolce fatto in casa, che pure riscuote un certo successo!

Oggi voglio condividere la ricetta con voi. Come vedrete, le dosi e gli ingredienti sono calibrati per una tortiera mediamente grande, ma è difficile fare la proporzione con il numero di persone: questa torta è così buona e golosa che un bis è inevitabile! Spero che la torta di mele classica vi piaccia e che possa diventare una dolce coccola per la vostra famiglia così come lo è per me e per la mia.
';

$substitution = '***';

$edited_paragraph = str_replace($bad_word, $substitution, $paragraph);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Torta di <?php echo $substitution ?></title>
</head>

<body>

    <header class="container">
        <h1 class="my-5">Torta di <?php echo $substitution ?></h1>
        <form action=""></form>
    </header>
    <main>
        <div class="container">
            <p><?php echo $edited_paragraph ?></p>
        </div>
    </main>

</body>

</html>