<?php
for ($i = 60; $i >= 1; $i--) {

    if ($i > 1) {
        $sisa = $i - 1;

        echo "heung heung heung heung heung, heungheung, anak rubah turun bermain.<br>";
        echo "Anak rubah turunlah $i, pergi satu tinggal $sisa.<br>";
    } else {
        echo "heung heung heung heung heung, heungheung, anak rubah turun bermain.<br>";
        echo "Anak rubah turunlah 1, pergi satu tinggal induknya 🦊.<br>";
    }

    if ($i - 1 == 5) {
        echo "Induk rubah berkata: \"Anakku kemana? Kenapa tinggal 5? Main kemana mereka?\"<br>";
    }

    echo "<br>";
}
?>