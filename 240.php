<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
</head>

<body>
  <h1>Something</h1>
  <p>
    <?php echo 'text'; ?>
  </p>
  <p>
    <?php
    $currentDate = date_create("now");
    echo date_format($currentDate, "Y-m-d"); ?>
  </p>
</body>

</html>