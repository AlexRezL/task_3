<form method="POST" action="./">
    <label>n</label>
    <input type="text" placeholder="n" name="sizeArray">
    <label>k</label>
    <input type="text" placeholder="k" name="elementToSearch">
    <button type="submit">Посчитать</button>
</form>

<?php

if (!empty($_POST)) {
    $sizeArray = trim($_POST['sizeArray']);
    $elementToSearch = trim($_POST['elementToSearch']);
    if ($_POST['sizeArray'] === "" or $_POST['elementToSearch'] === "") {
        exit('Введите значения');
    }
}
else {
    exit();
}

$array = range(1, $sizeArray);
sort($array, SORT_STRING);
echo array_search($elementToSearch, $array) + 1;
?>