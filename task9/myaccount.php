<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include("inc/stylesheet.php"); ?>
    </head>

    <body>

    <?php include("inc/header4.php"); ?>
       

        <main>
            <section id="details" class="container mt-5">
                <div class="row align-items-center"  data-aos="fade-left" data-aos-delay="150"
                data-aos-duration="1000">
                    <div class="col-2">
                        <img src="assets/images/img (2).png" class="w-100" alt="">
                    </div>
                    <div class="col-10 d-flex flex-column gap-1">
                        <div class="d-flex align-items-center">
                            <h6 class="p-0 m-0">Name: Ishita Mangroliya</h6>
                        </div>
                        <div>
                            <h6 class="p-0 m-0">Email: ishumangroliya17@gmail.com</h6>
                        </div>
                        <div>
                            <h6 class="p-0 m-0">Phone: 123654789</h6>
                        </div>
                    </div>
                </div>
                <div class="pt-4"  data-aos="fade-left" data-aos-delay="150"
                data-aos-duration="1000">
                    <h4>Edit your details:</h4>
                    <form class="pt-3">
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Full Name</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter your full name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="mb-3">
                            <label for="phoneNumber" class="form-label">Phone Number</label>
                            <input type="tel" class="form-control" id="phoneNumber"
                                placeholder="Enter your phone number">
                        </div>
                        <button type="submit" class="btn theme-btn">Submit</button>
                    </form>
                </div>
            </section>

            <section id="yourpackages" class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center">
                        <h2 class="p-0"  data-aos="fade-up" data-aos-delay="150"
                        data-aos-duration="1000">Your Packages</h2>
                    </div>
                    <div class="col-sm-4">
                        <img src="assets/images/image2.jpg" class="w-100" alt="">
                    </div>
                    <div class="col-sm-8 d-flex flex-column gap-1"  data-aos="fade-right" data-aos-delay="150"
                    data-aos-duration="1000">
                        <h6 class="m-0">Kerela</h6>
                        <div>
                            <h6 class="p-0 m-0"><i class="fa-regular fa-user pe-2" aria-hidden="true"></i>2
                                Adults</h6>
                        </div>
                        <div>
                            <p class="p-0 m-0"><i class="fa-solid fa-calendar-days pe-2" aria-hidden="true"></i>Fri
                                - May 31, 2024 - 8:00 AM</p>
                        </div>
                        <div>
                            <p class="m-0">Total Price : ₹50,000</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center pt-3"><h2  data-aos="fade-up" data-aos-delay="150"
                        data-aos-duration="1000">Track Your Packages</h2></div>
                    <div class="col-12">
                        <div class="timeline-items">
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-date">May 31, 2024</div>
                                <div class="timeline-content" data-aos="fade-left" data-aos-delay="150"
                                data-aos-duration="1000">
                                    <h6><i class="fa-solid fa-circle-check pe-2"></i>Book package</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-date">June 2, 2024</div>
                                <div class="timeline-content" data-aos="fade-right" data-aos-delay="150"
                                data-aos-duration="1000">
                                    <h6><i class="fa-solid fa-circle-check pe-2"></i>Package will be confirm</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-date">June 4, 2024</div>
                                <div class="timeline-content" data-aos="fade-left" data-aos-delay="150"
                                data-aos-duration="1000">
                                    <h6><i class="fa-solid fa-circle-check pe-2"></i>Tour details and tickets</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut labore et dolore magna aliqua. </p>
                                </div>
                            </div>
                            <div class="timeline-item">
                                <div class="timeline-dot"></div>
                                <div class="timeline-date">June 7, 2024</div>
                                <div class="timeline-content" data-aos="fade-right" data-aos-delay="150"
                                data-aos-duration="1000">
                                    <h6><i class="fa-solid fa-circle-check pe-2"></i>Start the journey</h6>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt
                                        ut labore et dolore magna aliqua. </p>
                                </div>
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