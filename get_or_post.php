<?php 
// simple number filter:
$value1 = (isset($_GET['get_param']))? (int) $_GET['get_param'] : 0;
$value2 = (isset($_POST['post_param']))? strip_tags($_POST['post_param']) : 'N/A';
?>
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

    <td>
        <h3>GET</h3>
        <form method="get">
        <input type="text" name="get_param" value="<?php echo $value1; ?>"/>
        <input type="submit" />
        </form>
    </td>

    <td>
        <h3>POST</h3>
        <form method="post">
        <input type="text" name="post_param" value="<?php echo $value2; ?>" />
        <input type="submit" />
        </form>
    </td>

</tr>
</table>
<?php phpinfo(INFO_VARIABLES); ?>
</body>
</html>