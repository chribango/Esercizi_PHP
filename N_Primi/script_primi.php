<?php
$n = $_POST["n"];

    if ($n < 1) {
        echo "Inserisci un numero intero positivo maggiore o uguale a 1.";
        exit;
    }

    echo "<h2>I primi $n numeri primi sono:</h2>";
    echo "<ul>";

    $count = 0;      // quanti numeri primi abbiamo trovato finora
    $num = 2;        // numero corrente da testare

    // ciclo finché non abbiamo trovato n numeri primi
    while ($count < $n) {
        // test se $num è primo
        if ($num >= 2) {
            $is_prime = true;
            // controllo divisori da 2 fino a sqrt($num)
            // calcolo la radice come float, poi conversione a intero
            $lim = (int) floor(sqrt($num));
            $div = 2;
            while ($div <= $lim) {
                if ($num % $div === 0) {
                    $is_prime = false;
                    break;
                }
                $div++;
            }
            // se è primo, lo stampo e incremento il contatore
            if ($is_prime) {
                echo "<li>" . $num . "</li>";
                $count++;
            }
        }
        $num++;
    }

    echo "</ul>";
?>