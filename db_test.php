<?php
function makeFirstUpper($key, $value)
{
    return ucfirst($value);
}
$params = include __DIR__ . '/db.php';

$dbh = mysqli_connect($params['host'], 
                        $params['username'], 
                        $params['password'], 
                        $params['database']);
if (!$dbh) {
    die('Unable to connect to database');
}

$sql    = 'SELECT * FROM customers';
$result = mysqli_query($dbh, $sql);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>
<table>
<?php $first = TRUE; ?>
<?php while ($row = mysqli_fetch_assoc($result)) : ?>
	<?php if ($first) : ?>
	<?php $first = FALSE; ?>
    <tr><th><?= implode('</th><th>', array_keys($row)); ?></th></tr>
	<?php endif; ?>
    <tr><td><?= implode('</td><td>', $row); ?></td></tr>
<?php endwhile; ?>
</table>
</body>
</html>
