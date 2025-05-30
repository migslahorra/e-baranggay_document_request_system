<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- This is to link the poppins font from google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <!-- This is to link the font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-k6RqeWeci5ZR/Lv4MR0sA0FfDOMz4z5e5l5a7b1d5c">

    <!-- The title depends on what baranggay are you in -->
    <title>E-Baranggay Document Request System</title>

    <!-- Linking the stylesheet file for the systems ui -->
    <link rel="stylesheet" href="../style/styles.css">

    <title>Document</title>
</head>
<body>
    <!-- This is to link the navigation template -->
    <?php include '../templates/navigation.php'; ?>

    <!-- This is the login form for the user to access the system -->
    <div class="login-form">
        <form action="login.php" method="post">
            <h2>Login</h2>
                <label for="username">
                    Username:
                </label>
                <input type="text" id="username" name="username" required>

                <label for="password">
                    Password:
                </label>
                <input type="password" id="password" name="password" required>

                <button type="submit">
                    Login
                </button>
        </form>
    </div>
    
    <!-- This is to include the footer template -->
    <?php include '../templates/footer.php'; ?>
    
    <!-- This is to link the main javascript file -->
    <script src="../javascripts/main.js"></script>
</body>
</html>