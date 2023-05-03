<?php
    session_start();
    include "config.php";

    $id = $_SESSION["id"];
    $sql = "SELECT * FROM history_agent JOIN history
            ON history_agent.id_history = history.id_history
            WHERE id_agent = '$id'";
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIN | Detail</title>
    <style>
        *{
            background-color: #cfc5c5;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
            padding: 10px;
        }

        table.center{
            margin-left: auto; 
            margin-right: auto;
            margin-top: 100px;
        }
    </style>
</head>
<body>
    <main>
        <a href="home.php">< Kembali</a>
        <table class="center">
            <thead>
                <th>History</th>
                <th>Pemberi</th>
            </thead>
            <tbody>
                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <tr>
                    <td><?php echo $row['mission'];?></td>
                    <td><?php echo $row['pemberi'];?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
</body>
</html>