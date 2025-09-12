<?php

include "functions.php";

// №1⊗ppPmSFLTAt
task(1);
// Дан следующий массив:

$arr = [
    ['href' => 'page1.html', 'text' =>
    'text1'],
    ['href' => 'page2.html', 'text' =>
    'text2'],
    ['href' => 'page3.html', 'text' =>
    'text3'],
];

echo "<ul>";
foreach ($arr as $el) {
    foreach ($el as $key => $value)
        echo "<li><a href=\"{$el['href']}\">{$el['text']}</a></li>";
}
echo "</ul>";

//Сформируйте с его помощью следующий HTML код:

// <ul>
// 	<li><a href="page1.html">text1</a></li>
// 	<li><a href="page2.html">text2</a></li>
// 	<li><a href="page3.html">text3</a></li>
// </ul>
// №2⊗ppPmSFLTAt

// Дан следующий массив:
task(2);

$arr = [
    ['value' => '1', 'text' => 'text1'],
    ['value' => '2', 'text' => 'text2'],
    ['value' => '3', 'text' => 'text3'],
];

echo "<select>";
foreach ($arr as $option) {
    echo "<option value=\"$option[value]\">$option[text]</option>";
}
echo "</select>";
// Сформируйте с его помощью следующий HTML код:

// <select>
// 	<option value="1">text1</option>
// 	<option value="2">text2</option>
// 	<option value="3">text3</option>
// </select>