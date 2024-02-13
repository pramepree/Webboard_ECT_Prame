<!DOCTYPE html>
<html>
<head>
    <title>Calendar Example</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
            width: 14%; /* ความกว้างของแต่ละเซลล์ในหนึ่งแถว */
            height: 50px; /* ความสูงของแต่ละเซลล์ในตาราง */
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Calendar</h2>

<table>
    <tr>
        <th>Sunday</th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
        <th>Saturday</th>
    </tr>
    <?php
    // Get the current month and year
    $month = date('n');
    $year = date('Y');

    // Get the number of days in the current month
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);

    // Get the first day of the month
    $firstDay = date('w', mktime(0, 0, 0, $month, 1, $year));

    // Start a counter
    $dayCounter = 1;

    // Generate the calendar
    for ($row = 1; $row <= 6; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 7; $col++) {
            if (($dayCounter > 1 || $col > $firstDay) && $dayCounter <= $daysInMonth) {
                echo "<td>$dayCounter</td>";
                $dayCounter++;
            } else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
