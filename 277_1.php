<?php

session_start();

echo "<ul>";
echo "<li>$_SESSION[name]</li>";
echo "<li>$_SESSION[surname]</li>";
echo "<li>$_SESSION[patronymic]</li>";

echo "</ul>";
