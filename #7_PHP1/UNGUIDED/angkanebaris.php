<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angkane baris</title>
    <style>
        table, td, th {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th {
            padding: 5px 0;
        }
        tbody tr td:first-child {
            text-align: center;
        }

        tbody tr td:nth-child(2) {
            padding: 5px;
        }

        table {
            margin: 20px auto;
        }
    </style>
</head>

<body>
    <?php

    function getSequence($n)
    {
        $sequence = [];
        $num1 = 1;
        $num2 = 1;
        $num3 = 1;
        $sequence[] = $num1;
        $sequence[] = $num2;
        $sequence[] = $num3;
        for ($i = 3; $i < $n; $i++) {
            $num4 = $num1 + $num2 + $num3;
            $sequence[] = $num4;
            $num1 = $num2;
            $num2 = $num3;
            $num3 = $num4;
        }
        return $sequence;
    }
    ?>
    <table border="1">
        <thead>
            <tr>
                <th width="80px">
                    Nilai n
                </th>
                <th width="300px">
                    Output
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>
                    <?php
                    $n = 1;
                    $sequence = getSequence($n);
                    for ($i = 0; $i < $n; $i++) {
                        echo $sequence[$i] . " ";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>
                    <?php
                    $n = 2;
                    $sequence = getSequence($n);
                    for ($i = 0; $i < $n; $i++) {
                        echo $sequence[$i] . " ";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>
                    <?php
                    $n = 3;
                    $sequence = getSequence($n);
                    for ($i = 0; $i < $n; $i++) {
                        echo $sequence[$i] . " ";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>
                    <?php
                    $n = 4;
                    $sequence = getSequence($n);
                    for ($i = 0; $i < $n; $i++) {
                        echo $sequence[$i] . " ";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>
                    <?php
                    $n = 5;
                    $sequence = getSequence($n);
                    for ($i = 0; $i < $n; $i++) {
                        echo $sequence[$i] . " ";
                    }
                    ?>
                </td>
            </tr>
            <tr>
                <td>7</td>
                <td>
                    <?php
                    $n = 7;
                    $sequence = getSequence($n);
                    for ($i = 0; $i < $n; $i++) {
                        echo $sequence[$i] . " ";
                    }

                    ?>
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>