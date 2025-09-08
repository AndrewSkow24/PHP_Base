<?php
require_once "connectDB.php";

// получение массива с выводом из БД

$result = mysqli_query($link, "SELECT * from test");
for ($data = []; $row = mysqli_fetch_assoc($result); $data[] = $row);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>345</title>
</head>

<body>
    <h1>Оформление вывода из DB</h1>
    <h2>View 1</h2>
    <?php foreach ($data as $user): ?>
        <div style="border: 1px solid black; padding: 15px; margin-bottom: 5px; border-radius: 15px;">
            <h2><?= $user['name']  ?></h2>
            <p>
                <?= $user['age'] ?> years <b> <?= $user['salary'] ?> $ </b>
            </p>
        </div>
    <?php endforeach; ?>


    <h2>View 2</h2>

    <?php
    echo "<table>
	<tr>
		<th>id</th>
		<th>name</th>
		<th>age</th>
		<th>salary</th>
	</tr>";


    foreach ($data as $user) {
        echo "<tr>";
        echo "<td>$user[id]</td>";
        echo "<td>$user[name]</td>";
        echo "<td>$user[age]</td>";
        echo "<td>$user[salary]</td>";
        echo "</tr>";
    }


    echo "</table>";

    ?>


    <h2>View 3</h2>

    <?php
    echo "<ul>";

    foreach ($data as $user) {
        echo "<li>$user[name]</li>";
    }
    echo "</ul>";

    ?>

</body>

</html>