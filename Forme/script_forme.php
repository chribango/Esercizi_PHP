<?php
$type=$_POST["forma"];
$n = $_POST["dim"];
if ($type=="triangolo") {
    for ($x = 1; $x <= $n; $x++) {
        for ($y = 1; $y <= $x; $y++) {
            echo "  *";
        }
        echo "<br>";
    }
}
if ($type=="triangolo inverso") {
    for ($x = $n; $x >= 1; $x--) {
        for ($y = 1; $y <= $x; $y++) {
            echo "*   ";
        }
        echo "<br>";
    }
}
if ($type=="quadrato") {
    for ($x = 1; $x <= $n; $x++) {
        for ($y = 1; $y <= $n; $y++) {
            echo "  *";
        }
        echo "<br>";
    }
}
if ($type=="cornice") {
    for ($x = 0; $x <= $n; $x++) {
        for ($y = 0; $y <= $n; $y++) {
            if ($x ==0||$x ==$n || $y==0||$y==$n) {
                echo "* ";
            }else {
                echo "&nbsp";
                echo "&nbsp";
                echo "&nbsp";
            }
        }
        echo "<br>";
    }
}

?>
<button>
    <a href="pagina_forme.html">
        indietro
    </a>
</button>