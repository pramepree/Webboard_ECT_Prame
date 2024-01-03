<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
</head>

<body align="center">
    <h1 style="text-align: center">PRAMEPREE VORNTHAISONG</h1>
    <hr />
    <?php
    $id1 = $_GET['id'];
    ?>
    <div>
        <h2 style="text-align: center">ต้องการดูกระทู้หมายเลข
            <?php echo $id1; ?>
        </h2>
    </div>
    <br>
    <table style="border: 2px solid black;width: 40%" align="center">
        <tr style="background-color: #6cd2fe;">
            <td>แสดงความคิดเห็น</td>
        </tr>
        <td align="center"><textarea name="" id="" cols="50" rows="10"></textarea></td>
        <tr>
            <td><input type="submit" value="ส่งข้อความ"></td>
        </tr>
    </table>
    <br>
    <div style="text-align: center">
        <a href="index.html">กลับไปยังหน้าหลัก</a>
    </div>
</body>

</html>