<?php $myarray = array('1','2','3','4','5','6'); ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>M7Ex1</title>
</head>
<body>
<h1>HTML with PHP</h1>
<table>
<tr>
<?php foreach ($myarray as $val) { ?>
	<td><?php echo $val; ?></td>
<?php }  // closing the foreach loop from line 11 ?>
</tr>
</table>
</body>
</html>