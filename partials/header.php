<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP mini chat</title>
    <link rel="stylesheet" href="./assets/main.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <header class="bg-light">
        <nav class="container d-flex justify-content-between align-items-center">
            <a href="/index.php" class="brand-logo">MiniChat</a>
            <div class="nav_button">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Sign in
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Log in
                </button>
                <button type="button" class="btn btn-primary">
                    <?php echo $_SESSION['login'] ?>
                </button>
                <a href="./process/logout_user.php"><button type="button" class="btn btn-primary">
                    Log out
                </button></a>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#signinModal">
                    Signin modal
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">
                    Login modal
                </button>
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#logoutModal">
                    Logout modal
                </button>
            </div>
        </nav>
    </header>