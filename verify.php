<?php
session_start();
?>
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
    <div align="center">
        <?php
        $login = $_POST['login'];
        $pwd = $_POST['pwd'];
        if ($login == "admin" && $pwd == "ad1234") {
            $_SESSION['username'] = "admin";
            $_SESSION['role'] = "a";
            $_SESSION['id'] = session_id();
            echo "ยินดีต้อนรับ ADMIN <br>";
        } elseif ($login == "member" && $pwd == "mem1234") {
            $_SESSION['username'] = "member";
            $_SESSION['role'] = "m";
            $_SESSION['id'] = session_id();
            echo "ยินดีต้อนรับ MEMBER <br>";
        } else {
            echo "ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง <br>";
        }
        ?>
        <a href="index.php">กลับไปยังหน้าหลัก</a>
    </div>
</body>

</html>