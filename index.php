<!-- 
Dobbiamo creare una pagina che permetta ai nostri utenti di utilizzare il nostro generatore di password (abbastanza) sicure. L’esercizio è suddiviso in varie milestone ed è molto importante svilupparle in modo ordinato.

Creare un form che invii in GET la lunghezza della password. Una nostra funzione utilizzerà questo dato per generare una password casuale (composta da lettere, lettere maiuscole, numeri e simboli) da restituire all’utente. Scriviamo tutto (logica e layout) in un unico file index.php -->
<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <form action="index.php" method="get">
        <label for="number">Lunghezza della password:</label>
        <input type="number" id="number" name="number" min="1" max="100">
        <br><br>
        <input type="submit" value="Genera password">
        <p>
            <?php

            include './functions.php';

            ?>
        </p>
    </form>

</body>

</html>