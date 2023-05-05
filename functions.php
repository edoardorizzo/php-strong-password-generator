<?php
        // Controlla se è stata inviata la richiesta
        if(isset($_GET['number'])){
            // Funzione per generare la password casuale
            function randomPassword() {
                $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                $pass = array(); //remember to declare $pass as an array
                $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
                for ($i = 0; $i < $_GET['number']; $i++) {
                    $n = rand(0, $alphaLength);
                    $pass[] = $alphabet[$n];
                }
                return implode($pass);
            }

            $password = randomPassword();
            echo "<p>Password generata: $password</p>";
        }
    ?>