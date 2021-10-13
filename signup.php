<?php include_once('header.php'); ?>

<body class="register-page">
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
                        <a href="login.php" class="nav-link action">
                            <i class="tim-icons icon-single-02"></i> Login
                        </a>
                    </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <div class="modal modal-search fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="SEARCH">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <i class="tim-icons icon-simple-remove"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Navbar -->
    <div class="wrapper wrapper-full-page ">
        <div class="full-page register-page">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 ml-auto">
                            <div class="info-area info-horizontal mt-5">
                                <div class="icon icon-warning">
                                    <i class="tim-icons icon-wifi"></i>
                                </div>
                                <div class="description">
                                    <h3 class="info-title">Connectivity</h3>
                                    <p class="description">
                                        This Project is Connected to the cloud and uses machine learning.
                                    </p>
                                </div>
                            </div>
                            <div class="info-area info-horizontal">
                                <div class="icon icon-primary">
                                    <i class="tim-icons icon-triangle-right-17"></i>
                                </div>
                                <div class="description">
                                    <h3 class="info-title">Fully Coded by Us with ❤️</h3>
                                    <p class="description">
                                        This Project is completely developed by Us and is one of the greatest achievement of our Life.
                                    </p>
                                </div>
                            </div>
                            <div class="info-area info-horizontal">
                                <div class="icon icon-info">
                                    <i class="tim-icons icon-trophy"></i>
                                </div>
                                <div class="description">
                                    <h3 class="info-title">The Project</h3>
                                    <p class="description">
                                        This project is an IOT based Irrigation System with Machine Learning .
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 mr-auto">
                            <div class="card card-register card-white">
                                <div class="card-header">
                                    <img class="card-img" src="assets/img/card-primary.png" alt="Card image">
                                    <h4 class="card-title">. Register</h4>
                                </div>
                                <div class="card-body">
                                    <form class="form" name="myForm" action="includes/signup.inc.php" method="post">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tim-icons icon-single-02"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Name" id="name" name="name" value="">
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tim-icons icon-satisfied"></i>
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" placeholder="User Name" id="uid" name="uid" value="">
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tim-icons icon-email-85"></i>
                                                </div>
                                            </div>
                                            <input type="text" placeholder="Email" class="form-control" id="email" name="email" value="">
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tim-icons icon-lock-circle"></i>
                                                </div>
                                            </div>
                                            <input type="password" class="form-control" placeholder="Password" id="pwd" name="pwd" value="">
                                        </div>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="tim-icons icon-lock-circle"></i>
                                                </div>
                                            </div>
                                            <input type="password" class="form-control" placeholder="Confirm Password" id="pwdrepeat" name="pwdrepeat" value="">
                                        </div>
                                        <div class="card-footer">
                                            <button id="submit" type="submit" name="submit" class="btn btn-primary btn-round btn-lg">Get Started</button>
                                        </div>
                                        <?php
                                        if (isset($_GET["error"])) {
                                            if ($_GET["error"] == "emptyinput") {
                                                echo "<p style='colour:red;'>Fill in all Fields</p>";
                                            } else if ($_GET["error"] == "invaliduid") {
                                                echo "<p style='colour:red;'>Choose a proper Username</p>";
                                            } else if ($_GET["error"] == "invalidemail") {
                                                echo "<p style='colour:red;'>Invalid Email</p>";
                                            } else if ($_GET["error"] == "passwordsdontmatch") {
                                                echo "<p style='colour:red;'>The Passwords Dont Match</p>";
                                            } else if ($_GET["error"] == "usernametaken") {
                                                echo "<p style='colour:red;'>Username Already Exists</p>";
                                            } else if ($_GET["error"] == "stmtfailed") {
                                                echo "<p style='colour:red;'>Something Went Wrong</p>";
                                            } else if ($_GET["error"] == "none") {
                                                echo "<p style='colour:green;'>You Have Signed Up successfully</p>";
                                            }
                                        }
                                        ?>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <?php include_once('footer.php'); ?>