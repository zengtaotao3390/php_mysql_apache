
<?php
/**
 *
 * User: peach
 * Date: 2015/5/6
 * Time: 20:47
 */
session_start();

?>

<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>home</title>
</head>
<body>
    <?php if($_SESSION["authenticated"]) {?>
        you are logined in!
        <br/>
    <?php }else{ ?>
        you are not logged in!
     <?php } ?>
</body>
</html>