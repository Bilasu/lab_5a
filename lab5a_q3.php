<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function multiplication($num) {
            $results = [];
            for ($i = 1; $i <= 12; $i++) {
                $results[] = [
                    'No' => $i,
                    'Multiplier' => $num,
                    'Answer' => $i * $num
                ];
            }

            return $results;
        }
    
        // Example usage
    $num = 5; // Change this number for different multiplication tables
    $multiplication_table = multiplication($num);
    ?>

    <h2>Multiplication Table for <?php echo $num; ?></h2>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Multiplier</th>
            <th>Answer</th>
        </tr>

        <?php foreach ($multiplication_table as $row): ?>
        <tr>
            <td><?php echo $row['No']; ?></td>
            <td><?php echo $row['Multiplier']; ?></td>
            <td><?php echo $row['Answer']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    
    
    
    
</body>
</html>