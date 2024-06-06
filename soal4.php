<?php
function showNumber($number) {
    if ($number > 10) {
        return;
    }

    if ($number % 2 === 0) {
        echo "$number. Bilangan Genap\n";
    } else {
        echo "$number. Bilangan Ganjil\n";
    }

    showNumber($number + 1);
}

showNumber(1);
?>
