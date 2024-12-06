<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include("inc/stylesheet.php"); ?>
    </head>

    <body>

        <header class="page-header">
            <nav class="navbar navbar-expand-lg">
                <div class="container pt-0">
                    <a class="navbar-brand" href="#"><img src="assets/images/logo.png" class="logo" alt=""></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"
                        aria-labelledby="offcanvasRightLabel">
                        <div class="offcanvas-header">
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <div>
                                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-center">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="#destination">Destination</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                            aria-expanded="false" type="button" href="#packages">
                                            Packages</a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="package.php#trending-package">Trending Packages</a></li>
                                            <li><a class="dropdown-item" href="package.php#oneday-package">One Day Packages</a></li>
                                            <li><a class="dropdown-item" href="package.php#weekend-package">Weekend Packages</a></li>
                                            <li><a class="dropdown-item" href="package.php#customized-package">Customized Package</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="#contactus">Contact</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link secondary"  href="myaccount.php"><i class="fa-solid fa-user"></i></a>
                                    </li>
                                    <li class="nav-item btn-none">
                                        <a class="nav-link search primary" href="#search"><i
                                                class="fa-solid fa-magnifying-glass"></i>
                                            <input type="text" placeholder="Search" class="search-input"
                                                name="search"></a>
                                    </li>
                                    <li class="nav-item btn-none">
                                        <a class="nav-link login primary" href="login.php">Login</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="btn-box">
                        <li class="nav-item btn-display">
                            <a class="nav-link search primary" href="#search"><i
                                    class="fa-solid fa-magnifying-glass"></i>
                                <input type="text" placeholder="Search" class="search-input" name="search"></a>
                        </li>
                        <li class="nav-item btn-display">
                            <a class="nav-link login primary" href="login.php">Login</a>
                        </li>
                    </div>
                </div>
            </nav>
        </header>


        <main>

            <section id="destination" class="destination">
                <div class="container">
                    <div class="row gy-3 pt-4">
                        <div class="col-md-6">
                            <div class="destinations"  data-aos="zoom-in" data-aos-delay="50"
                            data-aos-duration="1000">
                                <a href="goa.php"><img src="assets/images/goa.webp" class="gallery_img" alt=""></a>
                                <h2 class="title">Goa</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="destinations"  data-aos="zoom-in" data-aos-delay="150"
                            data-aos-duration="1000">
                                <a href="kerela.php"><img src="assets/images/kerela.cms" class="gallery_img" alt=""></a>
                                <h2 class="title">Kerela</h2>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="destinations"  data-aos="zoom-in" data-aos-delay="250"
                            data-aos-duration="1000">
                                <a href="manali.php"><img src="assets/images/manali.jpg" class="gallery_img" alt=""></a>
                                <h2 class="title">Manali</h2>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="destinations"  data-aos="zoom-in" data-aos-delay="350"
                            data-aos-duration="1000">
                                <a href="saurastra.php"><img src="assets/images/saurastra.jpg" class="gallery_img" alt=""></a>
                                <h2 class="title">Saurastra</h2>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="destinations" data-aos="zoom-in" data-aos-delay="450"
                            data-aos-duration="1000">
                                <a href="rajasthan.php"><img src="assets/images/rajasthan.jpg" class="gallery_img" alt=""></a>
                                <h2 class="title">Rajasthan</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="destinations" data-aos="zoom-in" data-aos-delay="50"
                            data-aos-duration="1000">
                                <a href="mumbai.php"><img src="assets/images/mumbai.jpg" class="gallery_img" alt=""></a>
                                <h2 class="title">mumbai</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="destinations" data-aos="zoom-in" data-aos-delay="150"
                            data-aos-duration="1000">
                                <a href="haridwar.php"><img src="assets/images/haridwar.jpg" class="gallery_img" alt=""></a>
                                <h2 class="title">Haridwar</h2>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="destinations" data-aos="zoom-in" data-aos-delay="150"
                            data-aos-duration="1000">
                                <a href="agra.php"><img src="assets/images/agra.jpg" class="gallery_img" alt=""></a>
                                <h2 class="title">Agra</h2>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="destinations" data-aos="zoom-in" data-aos-delay="250"
                            data-aos-duration="1000">
                                <a href="lakshdweep.php"><img src="assets/images/lakshdweep.jpg" class="gallery_img" alt=""></a>
                                <h2 class="title">Lakshadweep</h2>
                            </div>
                        </div>
                        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="350"
                        data-aos-duration="1000">
                            <div class="destinations">
                                <a href="kedarnath.php"><img src="assets/images/kedarnath.jpg" class="gallery_img" alt=""></a>
                                <h2 class="title">Kedarnath</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <?php include("inc/contact.php"); ?>

        </main>

        <?php include("inc/script.php"); ?>
    </body>

</html>