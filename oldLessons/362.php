<?php

if (!isset($_GET['arg'])) {
    header("Location: ?arg=1");
}

echo $_GET['arg'];
