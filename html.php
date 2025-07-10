<?php

function h1($header_text)
{
    echo "<h1>$header_text</h1>";
}

function h2($header_text)
{
    echo "<h2>$header_text</h2>";
}

function p($paragraph_text)
{
    echo "<p>$paragraph_text</p>";
}

function task_heading($task_number)
{
    echo "<h2>Задача $task_number</h2>";
}

function br()
{
    echo '<br>';
}

function pre($text)
{
    echo "<pre>$text</pre>";
}
