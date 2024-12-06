
const header = document.querySelector('.page-header');
const toggleClass = 'is-sticky';
window.addEventListener('scroll', () => {
    header.classList.toggle(toggleClass, document.documentElement.scrollTop > 10);
});



var swiper = new Swiper(".mySwiper", {
    slidesPerView: 2,
    spaceBetween: 5,
    centeredSlides: true,
    loop: true,
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
    effect: 'coverflow',
    coverflowEffect: {
        rotate: 30,
        slideShadows: false,
    },
    // scale: 1,
    pagination: {
        el: ".swiper-pagination1",
        clickable: true,
    },
    navigation: {
        nextEl: ".swiper-button-next1",
        prevEl: ".swiper-button-prev1",
    },
    breakpoints: {
        375: {
            spaceBetween: 10,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
        991: {
            slidesPerView: 4,
            spaceBetween: 20,
        }
    }

});



var swiper = new Swiper(".mySwiper2", {
    autoplay: {
        delay: 2000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
    effect: 'cards',
    cardsEffect: {
        rotate: true,
        perSlideOffset: 8,
    },

});



var swiper = new Swiper(".mySwiper3", {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
    },
    pagination: {
        el: ".swiper-pagination1",
        clickable: true,
    },
    navigation: {
        nextEl: ".custom-swiper-button-next",
        prevEl: ".custom-swiper-button-prev",
    },
    breakpoints: {
        568: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        1200: {
            slidesPerView: 3,
            spaceBetween: 20,
        }
    }

});


function displayCustomizedPackage() {

    const destinationSelect = document.getElementById('inputGroupSelect01');
    const activitySelect = document.getElementById('inputGroupSelect02');
    const travelBySelect = document.getElementById('inputGroupSelect03');

    const destination = destinationSelect.options[destinationSelect.selectedIndex].text;
    const activity = activitySelect.options[activitySelect.selectedIndex].text;
    const travelBy = travelBySelect.options[travelBySelect.selectedIndex].text;
    const dateFrom = document.getElementById('when').value;
    const dateReturn = document.getElementById('return').value;
    const guest = document.getElementById('guest').value;

    if (!destination || !activity || !travelBy || !dateFrom || !dateReturn || !guest) {
        alert('Please fill out all fields.');
        return;
    }

    const packageDetails = `
    <div class="container" data-aos="zoom-in" data-aos-delay="100"
    data-aos-duration="1000">
    <h3 class="text-center pb-2">Your Customized Package</h3>
    <div class="row justify-content-center">
        <div class="col-8 custom-package">
            <p class="p-0"><strong>Destination:</strong> ${destination}</p>
            <p class="p-0"><strong>Activity:</strong> ${activity}</p>
            <p class="p-0"><strong>Travel By:</strong> ${travelBy}</p>
            <p class="p-0"><strong>Date From:</strong> ${dateFrom}</p>
            <p class="p-0"><strong>Return Date:</strong> ${dateReturn}</p>
            <p class="p-0"><strong>Number of Guests:</strong> ${guest}</p>
            <button type="button" class="btn theme-btn" data-bs-toggle="modal" data-bs-target="#bookTourModal">Book Now</button>
        </div>
    </div>
    </div>
    `;

    document.getElementById('customized-package-details').innerHTML = packageDetails;
}

function submitContactDetails(event) {
    event.preventDefault();
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const email = document.getElementById('email').value;
    const phone = document.getElementById('phone').value;
    
    document.getElementById('contactDetailsDisplay').innerHTML = `
        <p><strong>First Name:</strong> ${firstName}</p>
        <p><strong>Last Name:</strong> ${lastName}</p>
        <p><strong>Email:</strong> ${email}</p>
        <p><strong>Phone:</strong> ${phone}</p>
    `;
    document.getElementById('contactDetailsDisplay').classList.remove('hidden');
    document.getElementById('detailForm').classList.add('hidden');

    toggleNextPanel(event, 'collapseTwo');
    return false;
}

function submitActivityDetails(event) {
    
    event.preventDefault();
    const pickupOption = document.querySelector('input[name="pickupOption"]:checked').nextElementSibling.innerText.trim();
    console.log("Hello");
    const location = document.getElementById('userLocation').value;
    const specialRequirements = document.getElementById('specialRequirements').value;

    document.getElementById('activityDetailsDisplay').innerHTML = `
        <p><strong>Pickup Option:</strong> ${pickupOption}</p>
        ${location ? `<p><strong>Location:</strong> ${location}</p>` : ''}
        ${specialRequirements ? `<p><strong>Special Requirements:</strong> ${specialRequirements}</p>` : ''}
    `;
    document.getElementById('activityDetailsDisplay').classList.remove('hidden');
    document.getElementById('activityForm').classList.add('hidden');

    toggleNextPanel(event, 'collapseThree');
    return false;
}

function toggleNextPanel(event, nextPanelId) {
    event.preventDefault();
    var myCollapse = document.getElementById(nextPanelId);
    var bsCollapse = new bootstrap.Collapse(myCollapse, {
        toggle: true
    });
    return false;
}

function showLocationInput() {
    document.getElementById("locationInput").style.display = "block";
}
function hideLocationInput() {
    document.getElementById("locationInput").style.display = "none";
}

function showPaymentForm() {
    document.getElementById("paymentform").style.display = "block";
}

function goBack() {
    window.history.back();
}