<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segi telu</title>
    <style>
        table, td, th {
            border: 1px solid black;
            border-collapse: collapse;
        }

        table {
            width: 20%;
            margin: 20px auto;
        }

        tr td:nth-child(odd) {
            text-align: center;
        }

        tr td:nth-child(even) {
            padding: 5px 20px;
        }

        th {
            padding: 5px 0;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nilai n</th>
                <th>Output</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    <?php
                    $n = 1;
                    for ($i = $n; $i > 0; $i--) {
                        for ($j = $n; $j >= $i; $j--) {
                            echo "*";
                        }
                        echo "<br>";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    <?php
                    $n = 2;
                    for ($i = 1; $i <= $n; $i++) {
                        for ($j = $n; $j >= $i; $j -= 1) {
                            echo "*";
                        }
                        echo "<br>";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>
                    <?php
                    $n = 3;
                    for ($i = $n; $i > 0; $i--) {
                        for ($j = $n; $j >= $i; $j--) {
                            echo "*";
                        }
                        echo "<br>";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>
                    <?php
                    $n = 5;
                    for ($i = $n; $i > 0; $i--) {
                        for ($j = $n; $j >= $i; $j--) {
                            echo "*";
                        }
                        echo "<br>";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>
                    <?php
                    $n = 6;
                    for ($i = 1; $i <= $n; $i++) {
                        for ($j = $n; $j >= $i; $j -= 1) {
                            echo "*";
                        }
                        echo "<br>";
                    }
                    ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>