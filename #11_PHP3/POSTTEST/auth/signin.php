<?php
if (isset($_POST['submit'])) {
    include 'config.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM agent WHERE email = '$email' AND password = '$password'";
    $query = mysqli_query($conn, $sql);

    if ($query) {
        session_start();
        $row = mysqli_fetch_assoc($query);
        $_SESSION["email"] = $row["email"];
        $_SESSION["tipe"] = $row["tipe"];
        $_SESSION["id"] = $row["id"];
        setcookie("name", $row["name"], time() + 86400);
        
        header("Location: home.php");
    } else {
        echo "<script>alert('Email dan password salah!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BIN | Sign In</title>
    <link rel="stylesheet" href="../styles/signin.css">
</head>

<body>
    <main>
        <form action="signin.php" method="post" id="msform">
            <fieldset>
                <h1>Badan Intelejen Negara</h1>
                <img src="../assets/logo-bin.png" alt="Logo BIN" width="200px" height="200px">
                <div class="email-box">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="name@example.com" name="email" required>
                </div>
                <div class="password-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="********" name="password" required>
                </div>
                <div class="btn-center">
                    <button type="submit" class="action-button" name="submit">Sign In</button>
                </div>
            </fieldset>
        </form>
    </main>
</body>

</html>