<?php include_once('header.php'); ?>

<body class="login-page">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute navbar-transparent fixed-top">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-toggle d-inline">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <a class="navbar-brand" href="javascript:void(0)">LOGIN</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="navbar-nav ml-auto">
                    <?php
                    if (isset($_SESSION["useruid"])) {
                        echo '<li class="nav-item ">
                        <a href="dashboard.php" class="nav-link action">
                            <i class="tim-icons icon-chart-pie-36"></i> Dashboard
                        </a>
                    </li>';
                        echo '<li class="nav-item action">
                        <a href="includes/logout.inc.php" class="nav-link">
                            <i class="tim-icons icon-single-02"></i> LogOut
                        </a>
                    </li>';
                    } else {
                        echo '                    <li class="nav-item action">
                        <a href="index.php" class="nav-link">
                            <i class="tim-icons icon-button-power"></i> Home
                        </a>
                    </li>';
                        echo '<li class="nav-item ">
                        <a href="signup.php" class="nav-link action">
                            <i class="tim-icons icon-laptop"></i> Register
                        </a>
                    </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="wrapper wrapper-full-page ">
        <div class="full-page login-page ">
            <!--   you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
            <div class="content">
                <div class="container">
                    <div class="col-lg-4 col-md-6 ml-auto mr-auto">
                        <form name="myForm" class="form" action="includes/login.inc.php" method="post">
                            <div class="card card-login card-white">
                                <div class="card-header">
                                    <img src="assets/img/card-primary.png" alt="">
                                    <h1 class="card-title">. Log in</h1>
                                </div>
                                <div class="card-body">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tim-icons icon-email-85"></i>
                                            </div>
                                        </div>
                                        <input type="text" id="uid" name="uid" value="" class="form-control" placeholder="Email / User Name">
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                <i class="tim-icons icon-lock-circle"></i>
                                            </div>
                                        </div>
                                        <input type="password" id="pwd" name="pwd" value="" placeholder="Password" class="form-control">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button id="submit" type="submit" name="submit" class="btn btn-primary btn-lg btn-block mb-3">Login</button>
                                    <div class="pull-left">
                                        <h6>
                                            <a href="register.html" class="link footer-link">Create Account</a>
                                        </h6>
                                    </div>
                                    <div class="pull-right">
                                        <h6>
                                            <a href="javascript:void(0)" class="link footer-link">Need Help?</a>
                                        </h6>
                                    </div>
                                    <?php
                                    if (isset($_GET["error"])) {
                                        if ($_GET["error"] == "emptyinput") {
                                            echo "<br><p style='colour:red;'>Fill in all Fields</p>";
                                        } else if ($_GET["error"] == "wronglogin") {
                                            echo "<br><p style='colour:red;'>Incorrect Login Info</p>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <?php include_once('footer.php'); ?>