<nav class="navbar navbar-light navbar-custom">
    <div class="container-md fixed-top">

        <a class="navbar-brand" href="../../index.php">
            <img src="../../assets/images/logo.png" alt="Logo" class="d-inline-block align-text-top nav-bar-logo-custom">
        </a>

        <div class="navigation-custom navbar-light d-none d-md-flex flex-row">
            <ul class="nav-ul-custom nav justify-content-end">
                <?php if(isset($_SESSION['userid'])) : ?>
                    <li class="nav-item nav-item-custom">
                        <a class="nav-link nav-link-custom" href="../../views/wishTrip.php">Plan trip</a>
                    </li>
                <?php endif;  ?>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link nav-link-custom" href="../../views/attractions.php">Attractions</a>
                </li>
                <li class="nav-item nav-item-custom">
                    <a class="nav-link nav-link-custom" href="../../views/about.php">About</a>
                </li>
            </ul>
            <div class="navigation-btn btn-group">
                <?php if(isset($_SESSION['userid'])) : ?>
                    <button type="button" class="btn btn-light rounded-pill shadow bg-body me-1"  onclick="signOut()">Sign out</button>
                     <button type="button" class="btn btn-light rounded-pill shadow bg-body me-1">
                        <i class="fa fa-home"></i>
                    </button>
                <?php else : ?>
                    <button type="button" class="btn btn-light rounded-pill shadow bg-body me-1" onclick="showSignIn()">Sign in</button>
                <?php endif; ?>
            </div>

<!--            <div class="navigation-btn btn-group">-->
<!--                <div class="dropdown">-->
<!--                    <button class="btn btn-secondary dropdown-toggle btn-light rounded-pill shadow-sm bg-body me-1" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">-->
<!--                        <i class="fa fa-home"></i>-->
<!--                    </button>-->
<!--                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">-->
<!--                        <button class="dropdown-item">Account</button>-->
<!--                        <button class="dropdown-item">Settings</button>-->
<!--                        <div class="dropdown-divider"></div>-->
<!---->
<!--                       -->
<!--                    </ul>-->
<!--                </div>-->
<!--            </div>-->

        </div>

        <button class="burger-menu-custom navbar-toggler d-md-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon navbar-dark"></span>
        </button>

        <div class="offcanvas offcanvas-end d-md-none" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <button type="button" class="btn-close text-reset ms-auto p-3" data-bs-dismiss="offcanvas" aria-label="Close"></button>

            <div class="offcanvas-body">
                <ul class="nav-ul-custom nav justify-content-end pb-2 d-block">
                    <li class="nav-item nav-item-custom">
                        <a class="nav-link nav-link-custom" href="../../index.php">Home</a>
                    </li>
                    <?php if(isset($_SESSION['userid'])) { ?>
                        <li class="nav-item nav-item-custom">
                            <a class="nav-link nav-link-custom" href="../../views/wishTrip.php">Plan trip</a>
                        </li>
                    <?php }  ?>
                    <li class="nav-item nav-item-custom ">
                        <a class="nav-link nav-link-custom" href="../../views/attractions.php">Attractions</a>
                    </li>
                    <li class="nav-item nav-item-custom ">
                        <a class="nav-link nav-link-custom" href="../../views/about.php">About</a>
                    </li>
                </ul>

                <div class="navigation-btn btn-group">
                    <?php if(isset($_SESSION['userid'])) { ?>
                        <button type="button" class="btn btn-light rounded-pill shadow bg-body me-1"  onclick="signOut()">Sign out</button>
                        <button type="button" class="btn btn-light rounded-pill shadow bg-body me-1">
                            <i class="fa fa-home"></i>
                        </button>
                    <?php } else { ?>
                        <button type="button" class="btn btn-light rounded-pill shadow-sm bg-body me-1" onclick="showSignIn()">Sign in</button>
                    <?php } ?>
<!--                    <button class="btn btn-light rounded-pill shadow bg-body d-none" id="showRegister">Register</button>-->
                </div>
            </div>
        </div>
    </div>
</nav>

<!--<script src="../../assets/js/navbar.js"></script>-->