<!-- header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Online Flower Shop</title>
</head>
<body>
    <header>
        <h1>Welcome to Our Online Flower Shop</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="flower.php">Flowers</a>
            <a href="chat.php">Chat</a>
            <?php if(isset($_SESSION['loggedin'])): ?>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="register.php">Register</a>
            <?php endif; ?>
        </nav>
    </header>


    <!-- footer.php -->
    <footer>
        <p>&copy; 2024 Online Flower Shop. All rights reserved.</p>
    </footer>
</body>
</html>
