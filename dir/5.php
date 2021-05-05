<?php

$cols = rand(2, 10);
$rows = rand(2, 10);

echo '<table style="border: darkblue 1px solid; border-radius: 5px;">';
for ($i = 1; $i < $rows + 1; $i++) {
    echo '<tr>';
    for ($j = 1; $j < $cols + 1; $j++) {
        if ($i == 1 || $j == 1) {
            echo '<td style="border: darkblue 1px solid; padding: 11px; color: bisque; background-color: chocolate; border-radius: 5px;">' . $i * $j . '</td>';
        } else {
            echo '<td style="border: darkblue 1px solid; padding: 11px; color: darkred; background-color: bisque; border-radius: 5px;">' . $i * $j . '</td>';
        }

    }
    echo '</tr>';
}
echo '</table>';