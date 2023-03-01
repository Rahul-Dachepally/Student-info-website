<!DOCTYPE html>

<html lang="en">

<head>
    <title>LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>

        <?php if (isset($_GET['error'])) { ?>
            <!-- //isset is variable set or not other than null -->
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <label>User Name</label>
        <input type="text" name="uid" placeholder="User Name"><br>

        <label>Password</label>
        <input type="password" name="pw" placeholder="Password" minlength="3"><br>

        <button type="submit">Login</button>
    </form>

</body>

</html>