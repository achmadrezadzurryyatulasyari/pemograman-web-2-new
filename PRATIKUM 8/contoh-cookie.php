<<<<<<< HEAD
<?php
$value = "ini cookie pertama";
if(!isset($_COOKIE['first_cookie'])){
    setcookie("first_cookie", $value, time() + 3600 * 24 * 30);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implementasi Cookie</title>
</head>
<body>
    <h1>Implementasi Cookie</h1>
    <?php if(isset($_COOKIE['first_cookie'])):?>
        <p><?php echo $_COOKIE['first_cookie'];?></p>
    <?php else:?>
        <p>Cookie belum di-set</p>
        <?php endif;?>
        <!--menghapus cookie -->
        <?php
        if(isset($_COOKIE['first_cookie'])){
            setcookie('first_cookie');
        }?>
</body>
=======
<?php
$value = "ini cookie pertama";
if(!isset($_COOKIE['first_cookie'])){
    setcookie("first_cookie", $value, time() + 3600 * 24 * 30);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Implementasi Cookie</title>
</head>
<body>
    <h1>Implementasi Cookie</h1>
    <?php if(isset($_COOKIE['first_cookie'])):?>
        <p><?php echo $_COOKIE['first_cookie'];?></p>
    <?php else:?>
        <p>Cookie belum di-set</p>
        <?php endif;?>
        <!--menghapus cookie -->
        <?php
        if(isset($_COOKIE['first_cookie'])){
            setcookie('first_cookie');
        }?>
</body>
>>>>>>> 09866dd7e2419bcb2ed28c6cee9c201d053da652
</html>