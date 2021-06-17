<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="bulma.min.css">
    <script defer src="fa-all.min.js"></script>
</head>
<body>
<nav class="navbar is-primary" role="navigation" aria-label="main navigation" id="navbar">
    <div class="navbar-brand">
        <a class="navbar-item" href="#">
            <h2>P&Y</h2>
        </a>
        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
                Lab 8
            </a>
                <div class="navbar-dropdown">
                    <a class="navbar-item" href="login.php">
                        Login
                    </a>
                    <a class="navbar-item" href="menampilkan.php">
                        Menampilkan
                    </a>
                </div>
            </div>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
                Lab 9
            </a>
                <div class="navbar-dropdown">
                    <a class="navbar-item" href="input.php">
                        Input
                    </a>
                    <a class="navbar-item" href="update.php">
                        Update
                    </a>
                </div>
            </div>
        </div>

        <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
            <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
                Lab 10
            </a>
                <div class="navbar-dropdown">
                    <a class="navbar-item" href="menampilkan-no1.php">
                        Nomor 1
                    </a>
                    <a class="navbar-item" href="menampilkan-no2.php">
                        Nomor 2
                    </a>
                    <a class="navbar-item" href="menampilkan-no3.php">
                        Nomor 3
                    </a>
                    <a class="navbar-item" href="menampilkan-no4.php">
                        Nomor 4
                    </a>
                    <a class="navbar-item" href="menampilkan-no5.php">
                        Nomor 5
                    </a>
                </div>
            </div>
        </div>

    <div class="navbar-end">
        <div class="navbar-item">
            <p class="control">
                <a class="button is-danger" href="log.php?op=out">
                  <span class="icon">
                    <i class="fas fa-sign-out-alt"></i>
                </span>
                <span>Logout</span>
                </a>
            </p>
        </div>
    </div>
</div>
</nav>
<br id="br-head">