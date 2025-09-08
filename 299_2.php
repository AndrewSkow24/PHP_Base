<?php

$foldersName = [
    'newFolder 1',
    'newFolder 2',
    'newFolder 3'
];

foreach ($foldersName as $folderName) {
    mkdir($folderName);
}
