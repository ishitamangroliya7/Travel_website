<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include("inc/stylesheet.php"); ?>
    </head>

    <body>

       
    <?php include("inc/header3.php"); ?>

        <main>

            <section id="home" class="banner">
                    <div class="banner-box kerela-banner">
                        <div class="mask"></div>
                        <div class="row justify-content-center">
                            <div class="col-sm-7 col-lg-8 banner-content">
                                <h1 data-aos="zoom-in" data-aos-delay="150"
                                data-aos-duration="1000">KERELA</h1>
                            </div>
                        </div>
                    </div>
            </section>

            <section class="kerela-packages p-0">
                <div class="container">
                    <div class="row pt-4">
                        <div class="col-12">
                            <div class="d-flex justify-content-between">
                                <h1 class="secondary">kerela</h1>
                                <div>
                                    <h4 class="pb-2">₹8,200 / <small>person</small></h4>
                                    <h6>Duration: 5 Days</h6>
                                </div>
                            </div>
                            <h4 class="pt-3 secondary">About:</h4>
                            <h6>Kerala, known as "God's Own Country," is a serene and stunningly beautiful state located in the southwestern part of India. With its lush green landscapes, pristine beaches, tranquil backwaters, and rich cultural heritage, Kerala offers a diverse and unforgettable travel experience. This tour will take you through the heart of Kerala, showcasing its natural beauty, vibrant traditions, and warm hospitality.</h6>
                        </div>
                        <div class="col-lg-9 pt-5">
                            <h4 class="secondary">Schedule:</h4>
                            <div id="accordionExample" class="accordion pt-3">

                                <div class="accordion-item">
                                    <h5 class="accordion-header p-0" id="headingOne">
                                        <button class="accordion-button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true" type="button"
                                            aria-controls="collapseOne">Day1: </button>
                                    </h5>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>At vero eoset accusamus etiusto dignissimos duci blanditiis praesentium
                                                corrupti dolores molest excepturi sint occaecati cupiditate</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header p-0" id="headingTwo">
                                        <button class="accordion-button collapsed" aria-expanded="false" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-controls="collapseTwo">Day2: </button>
                                    </h5>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>At vero eoset accusamus etiusto dignissimos duci blanditiis praesentium
                                                corrupti dolores molest excepturi sint occaecati cupiditate</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header p-0" id="headingThree">
                                        <button class="accordion-button collapsed" aria-expanded="false" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-controls="collapseThree">Day3: </button>
                                    </h5>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>At vero eoset accusamus etiusto dignissimos duci blanditiis praesentium
                                                corrupti dolores molest excepturi sint occaecati cupiditate</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header p-0" id="headingFour">
                                        <button class="accordion-button collapsed" aria-expanded="false" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-controls="collapseFour">Day4: </button>
                                    </h5>
                                    <div id="collapseFour" class="accordion-collapse collapse"
                                        aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>At vero eoset accusamus etiusto dignissimos duci blanditiis praesentium
                                                corrupti dolores molest excepturi sint occaecati cupiditate</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h5 class="accordion-header p-0" id="headingFive">
                                        <button class="accordion-button collapsed" aria-expanded="false" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                            aria-controls="collapseFive">Day5: </button>
                                    </h5>
                                    <div id="collapseFive" class="accordion-collapse collapse"
                                        aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>At vero eoset accusamus etiusto dignissimos duci blanditiis praesentium
                                                corrupti dolores molest excepturi sint occaecati cupiditate</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row ">
                        <div class="col text-start pt-5">
                            <a href="destination.php"><button type="button" class="btn theme-btn"><i
                                        class="fa-solid fa-arrow-left"></i>Back</button></a>
                        </div>
                        <div class="col text-end pt-5">
                            <button type="button" class="btn theme-btn" data-bs-toggle="modal" data-bs-target="#bookTourModal">Book Now</button>
                        </div>
                    </div>
                </div>
            </section>

           
            <?php include("inc/modal.php"); ?>

            <?php include("inc/contact.php"); ?>

        </main>

       
        <?php include("inc/script.php"); ?>
    </body>

</html>