<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 5a Q1</title>
</head>
<body>
    <?php
    $name = "Nurul Nabilah Binti Suhud";
    $matric_number = "AI220050";
    $course = "Bachelor of Computer Science (Software Engineering) with Honors";
    $year_of_study = 3;
    $address = "Kolej Kediaman Tun Fatihah, 1, Jalan 7/1, 13300, Batu Pahat, Johor.";
   

    ?>
    <table>
        <tr>
            <td>Name</td>
            <td>: <?php echo $name; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td>: <?php echo $matric_number; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td>: <?php echo $course; ?></td>
        </tr>
        <tr>
            <td>Year of Study</td>
            <td>: <?php echo $year_of_study; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td>: <?php echo $address; ?></td>
        </tr>
    </table>
</body>
</html>