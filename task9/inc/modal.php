<div class="modal fade" id="bookTourModal" tabindex="-1" aria-labelledby="bookTourModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title secondary" id="bookTourModalLabel">Book Tour</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="loginBox">
                    <div class="mb-4">
                        <span>Log in or Sign-up for a Booking and to redeem available offers.
                            <a class="secondary" href="login.php">Login</a> </span>
                    </div>
                    <div class="inputBox">
                        <input type="text" id="user" class="inputField" required>
                        <label for="user" class="label">Name</label>
                    </div>
                    <div class="inputBox">
                        <input type="date" id="date" class="inputField" required>
                    </div>
                    <div class="inputBox">
                        <a href="book.php"><input type="submit" class="theme-btn w-100" value="Book"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header flex-column">
                <img src="assets/images/Image.png" alt="">
                <!-- <i class="fa-regular fa-circle-check"></i> -->
                <h2 class="p-0 m-0 pt-4">Thank You!</h2>
                <h6>Please confirm your booking.</h6>
            </div>
            <div class="modal-body text-center">
                <div class="d-flex gap-3 justify-content-evenly">
                    <a href="book.php"><button type="submit" class="btn theme-btn">Cancle</button></a>
                    <a href="index.php"><button type="submit" class="btn theme-btn">Confirm</button></a>
                </div>
            </div>
        </div>
    </div>
</div>