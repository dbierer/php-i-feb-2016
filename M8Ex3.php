<?php
// 2 primary database functions

//            host         user    pwd        db
$dbParams = ['127.0.0.1', 'root', 'vagrant', 'php1'];

function connect_db(array $db)
{
    // db connection
    return mysqli_connect($db[0],$db[1],$db[2],$db[3]);
}

function getCustomers($conn)
{
    // query
    $result = mysqli_query($conn, 'SELECT * FROM customers');
    
    // fetch
    $list = array();
    while($row = mysqli_fetch_assoc($result)) {
        $list[] = $row;
    }
    
    return $list;
}

function closeConnection($conn)
{
    // close
    mysqli_close($conn);
}

echo '<pre>';
var_dump(getCustomers(connect_db($dbParams)));
echo '</pre>';
