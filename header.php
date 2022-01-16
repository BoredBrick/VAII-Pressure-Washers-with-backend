
<script type="text/javascript" src="js/modals.js"></script>

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
                    <a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#modalFormLogin">Login</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!--login modal-->
<div class="modal fade" id="modalFormLogin">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="titleLogin">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="log-form" onsubmit="return false" method="POST">
                    <div class="mb-3" id="login-name-input">
                        <input type="text" class="form-control input" id="usernameLogin" name="username"
                               placeholder="Username" required/>
                    </div>
                    <div class="mb-3" id="login-pass-input">
                        <input type="password" class="form-control input" id="passwordLogin" name="password"
                               placeholder="Password" required/>
                    </div>
                    <div class="modal-footer d-block">
                        <p class="float-start">Not registered? <a href="" class="link-dark" data-bs-toggle="modal"
                                                                  data-bs-target="#modalFormReg">Sign Up</a></p>
                        <button type="submit" onclick="login()" class="btn btn-dark float-end">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!--reg modal-->
<div class="modal fade" id="modalFormReg">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalReg">Register</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="reg-form" onsubmit="return false" method="POST">
                    <div class="mb-3" id="name-input">
                        <input type="text" class="form-control input" id="username" name="username"
                               placeholder="Username" required/>
                    </div>
                    <div class="mb-3" id="mail-input">
                        <input type="email" class="form-control input" id="email" name="email" placeholder="Email"
                               required/>
                    </div>
                    <div class="mb-3" id="pass=input">
                        <input type="password" class="form-control input password" id="password" name="password"
                               placeholder="Password" required/>
                    </div>
                    <div class="mb-3" id="pass-check-input">
                        <input type="password" class="form-control input password" id="passwordConfirm"
                               name="passwordConfirm" placeholder="Confirm password" required/>
                    </div>
                    <div class="modal-footer d-block">
                        <p class="float-start">Already registered? <a class="link-dark" id="openReq" href="#" data-bs-toggle="modal"
                                                                      data-bs-target="#modalFormLogin">Log in</a></p>
                        <button type="submit" onclick="register()" class="btn btn-dark float-end">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>