<?php

echo '<table border="1">
    <tr><th>num</th><th>Автор</th><th>Категория</th><th>Дата</th><th>Коментар</th><th colspan=3>Опции</th></tr>
   <tr>';

foreach ($row as $values) {
    foreach ($values as $value) {
        echo '<td>' . $value . '</td>';
    }
    echo '<td ><a href="view/editMessage.php?edit=' . $values['id'] . '">edit</a></td>'
    . '<td><a href="index.php?delete=' . $values['id'] . '">delete</td>'
    . '</tr>';
}
echo '</table>';
