<?php
session_start();
if (isset($_SESSION["id"])) {
header("location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Login</title>
</head>

<body>
  <h1 style="text-align: center">PRAMEPREE VORNTHAISONG</h1>
  <hr>
  <form action="verify.php" method="post">
    <table style="border: 2px solid black; width: 40%" align="center">
      <tr>
        <td colspan="2" style="background-color: #6cd2fe; text-align: center">
          เข้าสู่ระบบ
        </td>
        <td></td>
      </tr>

      <tr>
        <td>login</td>
        <td><input type="text" name="login" size="30" required /></td>
      </tr>
      <tr>
        <td>password</td>
        <td><input type="password" name="pwd" size="30" required /></td>
      </tr>
      <tr>
        <td colspan="2" align="center">
          <input type="submit" value="login" style="text-align: center" />
        </td>
      </tr>
    </table>
  </form>
  <br />
  <div align="center">
    ถ้ายังไม่ได้เป็นสมาชิกกรุณาสมัครสมาชิก
    <a href="register.html">กรุณาสมัครสมาชิก</a>
  </div>
</body>

</html>