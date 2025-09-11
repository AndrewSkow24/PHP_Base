<?php

require_once "connectDB.php";

$res = mysqli_query($link, "SELECT * FROM users;");

for ($usersArr = []; $row = mysqli_fetch_assoc($res); $usersArr[] = $row);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>349</title>
</head>

<body>
    <ul>
        <?php foreach ($usersArr as $user): ?>
            <li>
                <a href="edit.php?id=<?= $user['id']  ?>">
                    Редактировать id= <?= $user['id']  ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>