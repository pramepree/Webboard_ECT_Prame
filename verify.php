<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>

<body>
    <h1 style="text-align: center">PRAMEPREE VORNTHAISONG</h1>
    <hr>
    <?php
    $user = $_POST['user'];
    $pwd = $_POST['pwd'];
    ?>
    <h2 style="text-align: center">เข้าสู่ระบบด้วย</h2>
    <h2 style="text-align: center">Login =
        <?php echo $user; ?>
    </h2>
    <h2 style="text-align: center">Password =
        <?php echo $pwd; ?>
    </h2>
</body>

</html>