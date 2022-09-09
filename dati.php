<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
    <link rel="stylesheet" href="css/phpStyle.css">
</head>
<body>
    <?php 
        $text = "SEI PERSONAGGI IN CERCA DI AUTORE: L’opera che ha caratterizzanto maggiormente la dottrina teatrale di Luigi Pirandello è stata Sei personaggi in cerca d’autore, un'opera teatrale composta nel 1921 circa e rivisitata dall'autore quattro anni più tardi 1925. Le tematiche di Sei personaggi in cerca d'autore sono state già anticipate in altri scritti e, diversamente da altri drammi, non è suddivisa in atti, ma è comunque possibile darle una ripartizione in base alle naturali interruzioni che si creano nel susseguirsi delle vicende.L’antefatto di Sei personaggi in cerca d'autore descrive l’arrivo di sei personaggi (il Padre, la Madre, la Figliastra, il Figlio, il Giovinetto e la Bambina), i quali irrompendo sul palcoscenico, già popolato dagli Attori (il Capocomico, il primo attore, la prima attrice, la seconda donna, l’attrice giovane e l’attore giovane), illustrano al meglio la loro vicenda per farla inscenare. Il Padre spiega, secondo il suo personale punto di vista, come il tradimento di sua moglie con un altro uomo sia stata la causa della fine della loro storia d’amore. La Madre, nonché la moglie del Padre, fu pertanto privata del Figlio, nato dal matrimonio con il Padre, e successivamente fu privata anche dell’amore del convivente, il quale morendo, lasciò la donna e i tre figli (la Figliastra, il Giovinetto e la Bambina) da lei avuti. Lo spiacevole evento creò un tale disagio economico da costringere la Madre a lavorare come sarta nella bottega di Madama Pace, la quale nasconde nel retrobottega una casa di appuntamenti. Qui la Figliastra si prostituisce al fine di dare un ausilio economico alla famiglia.";
        $word = $_POST['censored-word'];
        $censoredText = str_replace($word, '***', strtolower($text));
    ?>

    <h1>SEI PERSONAGGI IN CERCA D'AUTORE</h1>
    <p>
        <?php echo $censoredText ?>
    </p>

    <p>Il paragrafo è lungo <?php echo strlen($text); ?> caratteri</p>

</body>
</html>