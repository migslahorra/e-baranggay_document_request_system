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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- The title depends on what baranggay are you in -->
    <title>E-Baranggay Document Request System</title>

    <!-- Linking the stylesheet file for the systems ui -->
    <link rel="stylesheet" href="../style/styles.css">
</head>
<body>
    <!-- This is to include the navigation template -->
    <?php include '../templates/navigation.php'; ?>

    <!-- This is the main content which introduces the page -->
    <main>
        <h4>
            Welcome to the E-Baranggay Document Request System
        </h4>

        <span>
        This system allows you to request documents from your local baranggay online. <br>
        Please navigate through the menu to access different features.
        </span>

        <div class="links">
                <a href="register.php" style="background-color: rgb(50, 50, 220); color: white; border-radius: 5px;">
                    <i class="fa-solid fa-user-plus"></i>
                    Register
                </a>

                <a href="login.php" style="border: 2px solid rgb(50, 50, 220); border-radius: 5px;">
                    <i class="fa-solid fa-sign-in-alt"></i>
                    Login
                </a>
        </div>
    </main>

    <!-- This is to include the footer template -->
    <?php include '../templates/footer.php'; ?>

    <!-- This is to link the main javascript file -->
    <script src="../javascripts/main.js"></script>
</body>
</html>