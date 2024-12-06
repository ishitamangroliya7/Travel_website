<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include("inc/stylesheet.php"); ?>
    </head>

    <body>

    <?php include("inc/header.php"); ?>


        <main>
            <section>
                <div class="container booking pt-4">
                    <div class="row">
                        <div class="col-md-8 bg-white" data-aos="fade-left" data-aos-delay="150"
                            data-aos-duration="1000">
                            <div class="accordion booking-template" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            Contact details
                                        </button>
                                    </h2>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <form class="detailform" id="detailForm"
                                                onsubmit="return submitContactDetails(event);">
                                                <div class="d-sm-flex gap-3 justify-content-between">
                                                    <div class="mb-3 w-100">
                                                        <label for="exampleInputName" class="form-label">First
                                                            Name</label>
                                                        <input type="text" class="form-control" id="firstName" required>
                                                    </div>
                                                    <div class="mb-3 w-100">
                                                        <label for="exampleInputName" class="form-label">Last
                                                            Name</label>
                                                        <input type="text" class="form-control" id="lastName" required>
                                                    </div>
                                                </div>
                                                <div class="d-sm-flex gap-3 justify-content-between">
                                                    <div class="mb-3 w-100">
                                                        <label for="exampleInputEmail1" class="form-label">Email
                                                            address</label>
                                                        <input type="email" class="form-control" id="email"
                                                            aria-describedby="emailHelp" required>
                                                    </div>
                                                    <div class="mb-3 w-100">
                                                        <label for="exampleInputPhone" class="form-label">Phone
                                                            No.</label>
                                                        <input type="text" class="form-control" id="phone" required>
                                                    </div>
                                                </div>
                                                <button type="submit"
                                                    class="btn primary theme2 text-white">Next</button>
                                            </form>
                                            <div id="contactDetailsDisplay" class="mt-3 hidden"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                            aria-expanded="false" aria-controls="collapseTwo">
                                            Activities
                                        </button>
                                    </h2>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row align-items-center">
                                                <div class="col-sm-4">
                                                    <img src="assets/images/image2.jpg" class="w-100" alt="">
                                                </div>
                                                <div class="col-sm-8 d-flex flex-column gap-1">
                                                    <h6 class="m-0">Kerela</h6>
                                                    <div>
                                                        <h6 class="p-0 m-0"><i class="fa-regular fa-user pe-2"></i>2
                                                            Adults</h6>
                                                    </div>
                                                    <div>
                                                        <p class="p-0 m-0"><i
                                                                class="fa-solid fa-calendar-days pe-2"></i>Fri
                                                            - May 31, 2024 - 8:00 AM</p>
                                                    </div>
                                                    <div>
                                                        <p class="m-0">Free cancellation : Cancel up to 24 hours in
                                                            advance for a
                                                            full refund</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="activityForm">
                                                <form onsubmit="return submitActivityDetails(event);">
                                                    <h6 class="mt-3 mb-0">Meeting and pickup</h6>
                                                    <p class="p-0">You can make your own way to the meeting point or
                                                        request
                                                        pickup. If
                                                        you're not sure, you can decide later.</p>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="pickupOption"
                                                            id="flexRadioDefault1" onclick="showLocationInput()">
                                                        <label class="form-check-label" for="flexRadioDefault1">
                                                            <p class="m-0 p-0"> I'd like to be picked up</p>
                                                        </label>
                                                    </div>
                                                    <div id="locationInput" style="display: none;">
                                                        <input type="text" id="userLocation"
                                                            placeholder="Enter your location">
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="pickupOption"
                                                            id="flexRadioDefault2" onclick="hideLocationInput()">
                                                        <label class="form-check-label" for="flexRadioDefault2">
                                                            <p class="m-0 p-0"> I'll make my own way to the meeting
                                                                point
                                                            </p>
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="pickupOption"
                                                            id="flexRadioDefault3" onclick="hideLocationInput()"
                                                            checked>
                                                        <label class="form-check-label" for="flexRadioDefault3">
                                                            <p class="m-0 p-0"> I'll decide later </p>
                                                        </label>
                                                    </div>
                                                    <div class="mb-3 mt-3">
                                                        <label for="exampleInputName" class="form-label half-width">
                                                            <h6 class="m-0">Special
                                                                requirements</h6>
                                                        </label>
                                                        <input type="text" class="form-control" id="specialRequirements"
                                                            aria-describedby="emailHelp">
                                                    </div>
                                                    <button type="submit"
                                                        class="btn primary theme2 text-white">Next</button>
                                                </form>
                                            </div>
                                            <div id="activityDetailsDisplay" class="mt-3 hidden"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            Payment details
                                        </button>
                                    </h2>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <div class="row justify-content-between">
                                                <div class="col text-start">
                                                    <h6>Total Price</h6>
                                                </div>
                                                <div class="col text-end">
                                                    <h6>₹50,000</h6>
                                                </div>
                                            </div>
                                            <form onsubmit="return toggleNextPanel(event, 'collapseOne');">
                                                <div class="form-check pb-3">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                        id="flexRadioDefault1" onclick="showPaymentForm()">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        <p class="m-0 p-0">Pay with Debit/Credit card</p>
                                                    </label>
                                                </div>
                                                <div id="paymentform" style="display: none;">
                                                    <div class="mb-3 w-100">
                                                        <label for="exampleInputName" class="form-label">Cardholder
                                                            name</label>
                                                        <input type="text" class="form-control" id="exampleInputName"
                                                            required>
                                                    </div>
                                                    <div class="mb-3 w-100">
                                                        <label for="exampleInputNumber" class="form-label">Card
                                                            number</label>
                                                        <input type="text" class="form-control" id="exampleInputNumber"
                                                            required>
                                                    </div>
                                                    <div class="d-sm-flex gap-3 justify-content-between">
                                                        <div class="mb-3 w-100">
                                                            <label for="exampleInputNumber" class="form-label">Security
                                                                code</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleInputNumber" required>
                                                        </div>
                                                        <div class="mb-3 w-100">
                                                            <label for="exampleInputName"
                                                                class="form-label">Country</label>
                                                            <input type="text" class="form-control"
                                                                id="exampleInputName" required>
                                                        </div>
                                                    </div>
                                                    <div class="mb-3 w-100">
                                                        <label for="exampleInputName" class="form-label">Apply
                                                            Coupen</label>
                                                        <input type="text" class="form-control" id="exampleInputName">
                                                    </div>
                                                </div>
                                                <div class="text-end">
                                                    <button type="submit" class="btn primary theme2 text-white"
                                                        data-bs-toggle="modal" data-bs-target="#confirmModal">Confirm
                                                        Booking</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-4" data-aos="zoom-in" data-aos-delay="200" data-aos-duration="1000">
                            <h6>Available Coupens</h6>
                            <div class="offer1 pt-3">
                                <h6><i class="fa-solid fa-square-check"></i> TOUR2024</h6>
                                <p>Use this code and get flat 10% of for online booking</p>
                            </div>
                            <div class="offer2">
                                <h6><i class="fa-solid fa-square-check"></i> COUPLE50</h6>
                                <p>Use this code and get upto 50% of for couples</p>
                            </div>
                            <div class="offer3">
                                <h6><i class="fa-solid fa-square-check"></i> GROUP11</h6>
                                <p>Use this code if your group has 10 member we allow 1 member extra your group</p>
                            </div>
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