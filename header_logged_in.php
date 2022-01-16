<script type="text/javascript" src="js/modals.js"></script>
<script src="plugins/toast/jquery.toast.min.js""></script>
<link rel="stylesheet" href="plugins/toast/jquery.toast.min.css"/>
<body>
<nav class="navbar sticky-top navbar-expand-lg  bg-dark">
    <div class="container-fluid ">
        <a href="index.php" class="navbar-brand" id="logo-text"
        ><img
                    src="img/washingGun.png"
                    alt="Washing gun"
                    width="90"
                    height="84"

            />Power Washers</a
        >
        <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navItems"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navItems">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="about-us.php" class="nav-link">About us</a>
                </li>
                <li class="nav-item">
                    <a href="pricing.php" class="nav-link">Pricing</a>
                </li>
                <li class="nav-item">
                    <a href="newsletter.php" class="nav-link">Newsletter</a>
                </li>
                <li class="nav-item">
                    <a href="contact.php" class="nav-link">Contact us</a>
                </li>
                <li class="nav-item">

                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id=""
                                   role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <?php echo $_SESSION['username'] ?>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" a>
                                    <li><a class="dropdown-item" href="view_mail.php">View emails</a></li>
                                    <li><a class="dropdown-item" href="edit_profile.php">Edit profile</a></li>
                                    <li><a class="dropdown-item" href="Controller/Logout.php">Log out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>

                </li>
            </ul>
        </div>
    </div>
</nav>
</body>