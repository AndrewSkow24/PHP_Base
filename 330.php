<?php

require_once "connectDB.php";

//№1⊗ppPmDBND
//Удалите юзера с id, равным 7.
//mysqli_query($link, "DELETE FROM users where id=7");


// №2⊗ppPmDBND

// Удалите всех юзеров, у которых возраст 23 года.
// mysqli_query($link, "DELETE FROM users where age=23");


// №3⊗ppPmDBND

// Удалите всех юзеров.

mysqli_query($link, "DELETE FROM users where 1");
