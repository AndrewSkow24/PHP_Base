<?php

require_once "connectDB.php";

$id = $_GET['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$salary = $_POST['salary'];

$query = "UPDATE users SET 
name='$name', age='$age', salary='$salary'
WHERE id=$id;
";

mysqli_query($link, $query);

echo "
<script>
    alert('Данные сохранены');
</script>
";
