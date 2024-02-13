<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        section {
            width: 20%;
            float: left;
            margin: 4% 2%;
            text-align: left;
            font-size: 20px;
            padding-top: 5px;
            border: #4d4e50 1px solid;
        }
    </style>
</head>

<body>
    <form action="calendar.php" method="get">
        <div>
            <section class="stick">
                <div>
                    กรุณากรอกเดือน :
                    <select name="months">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                    </select>
                    <br>
                </div>
                <div style="margin-top: 5px;">
                    กรุณากรอกปี (พ.ศ.) :
                    <input type="Year" name="Year">
                </div>
                <div style="margin-top: 5px;">
                    วันที่ 1 ของเดือนตรงกับ
                    <select name="Day">
                        <option value="mon">วันจันทร์</option>
                        <option value="tur">วันอังคาร</option>
                        <option value="wed">วันพุธ</option>
                        <option value="thi">วันพฤหัสบดี</option>
                        <option value="fri">วันศุกร์</option>
                        <option value="sat">วันเสาร์</option>
                        <option value="sun">วันอาทิตย์</option>
                    </select>
                </div>
                <div style="margin-top: 5px;">
                    <button type="submit" id="sub_btn">ตกลง</button>
                    <button type="submit" id="clr_btn">ล้างข้อมูล</button>
                </div>
                <div style="margin-bottom: 50px;">
                </div>
            </section>
        </div>
</body>

</html>