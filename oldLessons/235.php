<?php

$arr = ['text1', 'text2', 'text3'];

echo "<select>";
foreach ($arr as $el) {
    echo "<option>$el</option>";
}
echo "</select>";
