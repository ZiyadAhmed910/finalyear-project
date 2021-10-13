<?php include_once('header.php'); ?>

<body class="home-page">
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
                <a class="navbar-brand" href="javascript:void(0)">HOME</a>
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
                        echo '<li class="nav-item ">
                        <a href="signup.php" class="nav-link action">
                            <i class="tim-icons icon-laptop"></i> Register
                        </a>
                    </li>';
                        echo '                    <li class="nav-item action">
                        <a href="login.php" class="nav-link">
                            <i class="tim-icons icon-single-02"></i> Login
                        </a>
                    </li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-user">
                    <div class="card-body">
                        <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="javascript:void(0)">
                                <img class="avatar" src="assets/img/Cloudlogo.png" alt="...">
                                <h5 class="title">Project</h5>
                            </a>
                            <p class="description">
                                Cloud Based Irrigation System with Iot and Machine Learning
                            </p>
                        </div>
                        </p>
                        <div style="text-align: center;" class="card-description">
                            <h5>Welcome to our Iot Platform here we are building an amazing IoT project, Our project Title is Cloud based Irrigation system with Machine Learning and IoT. Sounds Cool Login and find what we have done and follow our timeline as we build this amazing project !!! </h5>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="button-container">
                            <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                                <i class="fab fa-facebook"></i>
                            </button>
                            <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                                <i class="fab fa-google-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="card-body">
                        <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="javascript:void(0)">
                                <img class="avatar" src="http://roboticscbit.tech/img/vectors/zeeu.png" alt="...">
                                <h5 class="title">Ziyad Ahmed Mohammed</h5>
                            </a>
                            <p class="description">
                                Web Developer & Project Member
                            </p>
                        </div>
                        </p>
                        <div style="text-align: center;" class="card-description">
                            <h5>Welcome to our Iot Platform here we are building an amazing IoT project, Our project Title is Cloud based Irrigation system with Machine Learning and IoT. Sounds Cool Login and find what we have done and follow our timeline as we build this amazing project !!! </h5>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="button-container">
                            <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                                <i class="fab fa-facebook"></i>
                            </button>
                            <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                                <i class="fab fa-google-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="card-body">
                        <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="javascript:void(0)">
                                <img class="avatar" src="http://roboticscbit.tech/img/vectors/zeeu.png" alt="...">
                                <h5 class="title">Rashmith Arra Reddy</h5>
                            </a>
                            <p class="description">
                                Project Member
                            </p>
                        </div>
                        </p>
                        <div style="text-align: center;" class="card-description">
                            <h5>Welcome to our Iot Platform here we are building an amazing IoT project, Our project Title is Cloud based Irrigation system with Machine Learning and IoT. Sounds Cool Login and find what we have done and follow our timeline as we build this amazing project !!! </h5>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="button-container">
                            <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                                <i class="fab fa-facebook"></i>
                            </button>
                            <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                                <i class="fab fa-google-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-user">
                    <div class="card-body">
                        <p class="card-text">
                        <div class="author">
                            <div class="block block-one"></div>
                            <div class="block block-two"></div>
                            <div class="block block-three"></div>
                            <div class="block block-four"></div>
                            <a href="javascript:void(0)">
                                <img class="avatar" src="http://roboticscbit.tech/img/vectors/zeeu.png" alt="...">
                                <h5 class="title">Rani</h5>
                            </a>
                            <p class="description">
                                Project Member
                            </p>
                        </div>
                        </p>
                        <div style="text-align: center;" class="card-description">
                            <h5>Welcome to our Iot Platform here we are building an amazing IoT project, Our project Title is Cloud based Irrigation system with Machine Learning and IoT. Sounds Cool Login and find what we have done and follow our timeline as we build this amazing project !!! </h5>
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="button-container">
                            <button href="javascript:void(0)" class="btn btn-icon btn-round btn-facebook">
                                <i class="fab fa-facebook"></i>
                            </button>
                            <button href="javascript:void(0)" class="btn btn-icon btn-round btn-twitter">
                                <i class="fab fa-twitter"></i>
                            </button>
                            <button href="javascript:void(0)" class="btn btn-icon btn-round btn-google">
                                <i class="fab fa-google-plus"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="header text-center">
                <h3 class="title">Timeline</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-timeline card-plain">
                        <div class="card-body">
                            <ul class="timeline">
                                <li class="timeline-inverted">
                                    <div class="timeline-badge danger">
                                        <i class="tim-icons icon-planet"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <span class="badge badge-pill badge-danger">Some Title</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Wifey made the best Father's Day meal ever. So thankful so happy so blessed. Thank you for
                                                making my family We just had fun with the “future” theme !!! It was a fun night all together
                                                ... The always rude Kanye Show at 2am Sold Out Famous viewing @ Figueroa and 12th in downtown.
                                            </p>
                                        </div>
                                        <h6>
                                            <i class="ti-time"></i> 11 hours ago via Twitter
                                        </h6>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge success">
                                        <i class="tim-icons icon-user-run"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <span class="badge badge-pill badge-success">Another One</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Thank God for the support of my wife and real friends. I also wanted to point out that it’s
                                                the first album to go number 1 off of streaming!!! I love you Ellen and also my number one
                                                design rule of anything I do from shoes to music to homes is that Kim has to like it....</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge info">
                                        <i class="tim-icons icon-notes"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <span class="badge badge-pill badge-info">Another Title</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Called I Miss the Old Kanye That’s all it was Kanye And I love you like Kanye loves Kanye
                                                Famous viewing @ Figueroa and 12th in downtown LA 11:10PM</p>
                                            <p>What if Kanye made a song about Kanye Royère doesn't make a Polar bear bed but the Polar bear
                                                couch is my favorite piece of furniture we own It wasn’t any Kanyes Set on his goals Kanye</p>
                                            <hr>
                                        </div>
                                        <div class="timeline-footer">
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-round btn-info dropdown-toggle" data-toggle="dropdown">
                                                    <i class="tim-icons icon-settings-gear-63"></i>
                                                </button>
                                                <div class="dropdown-menu">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Another action</a>
                                                    <a class="dropdown-item" href="#">Something else here</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge warning">
                                        <i class="tim-icons icon-gift-2"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <span class="badge badge-pill badge-warning">Another One</span>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Tune into Big Boy's 92.3 I'm about to play the first single from Cruel Winter also to Kim’s
                                                hair and makeup Lorraine jewelry and the whole style squad at Balmain and the Yeezy team.
                                                Thank you Anna for the invite thank you to the whole Vogue team</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>

    <?php include_once('footer.php'); ?>