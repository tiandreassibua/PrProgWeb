<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIN | Home</title>
    <link rel="stylesheet" href="../styles/home.css">
</head>
<body>
<main id="msform">
    <div class="wrapper">
        <table class="tabel-data">
            <tr>
                <td>
                    Email
                </td>
                <td>
                    <?php echo $_SESSION["email"];?>
                </td>
            </tr>

            <tr>
                <td>
                    Nama
                </td>
                <td>
                    <?php echo $_COOKIE["name"];?>
                </td>
            </tr>

            <tr>
                <td>
                    Tipe
                </td>
                <td>
                    <?php echo $_SESSION["tipe"];?>
                </td>
            </tr>
        </table>
    </div>
    <form action="home.php" method="POST">
        <input class="action-button" type="submit" value="Logout" name="logout">
    </form>
    <a href="detail.php">Lihat Detail History</a>
    </main>
</body>
</html>