<?php
// SELECT * FROM orders

// db connection
$conn = mysqli_connect('127.0.0.1', 'root', 'vagrant', 'php1');

// query
$result = mysqli_query($conn, 'SELECT * FROM orders');

// fetch
echo '<pre>';
while($row = mysqli_fetch_assoc($result)) {
    var_dump($row);
}

// close
mysqli_close($conn);

echo '</pre>';