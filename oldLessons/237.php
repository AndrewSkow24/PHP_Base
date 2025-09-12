<?php

$arr = [
    [
        'name' => 'user1',
        'age' => 30,
        'salary' => 500
    ],
    [
        'name' => 'user2',
        'age' => 31,
        'salary' => 600
    ],
    [
        'name' => 'user3',
        'age' => 32,
        'salary' => 700
    ],
];

echo "<table>";
foreach ($arr as $user) {
    echo "<tr>
        <td>$user[name]</td>
        <td>$user[age] years</td>
        <td>$user[salary]\$</td>
    </tr>";
}
echo "</table>";
