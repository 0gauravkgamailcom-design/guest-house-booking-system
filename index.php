<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest House Booking</title>

    <style>

        /* Hero Section */

.hero {
    height: 600px;

    background-image:
        linear-gradient(
            rgba(0, 0, 0, 0.55),
            rgba(0, 0, 0, 0.55)
        ),
        url("https://images.unsplash.com/photo-1566073771259-6a8506099945");

    background-size: cover;
    background-position: center;

    display: flex;
    align-items: center;
    justify-content: center;

    text-align: center;
    color: white;
}

.hero-content {
    max-width: 800px;
    padding: 20px;
}

.hero-small {
    font-size: 16px;
    letter-spacing: 3px;
    margin-bottom: 20px;
}

.hero h1 {
    font-size: 55px;
    line-height: 1.2;
    margin-bottom: 20px;
}

.hero-text {
    font-size: 18px;
    line-height: 1.6;
    margin-bottom: 35px;
}

.hero-btn {
    display: inline-block;
    background-color: #c59d5f;
    color: white;

    text-decoration: none;

    padding: 15px 30px;

    border-radius: 5px;

    font-weight: bold;
    letter-spacing: 1px;
}

.hero-btn:hover {
    background-color: #a98248;
}

/* Mobile Hero */

@media (max-width: 768px) {

    .hero {
        height: 500px;
    }

    .hero h1 {
        font-size: 36px;
    }

    .hero-text {
        font-size: 15px;
    }

}
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
        }

        /* Navbar */
        .navbar {
            width: 100%;
            height: 70px;
            background-color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 8%;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .logo {
            font-size: 26px;
            font-weight: bold;
            color: #222;
        }

        .logo span {
            color: #c59d5f;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .nav-links a {
            text-decoration: none;
            color: #333;
            font-size: 16px;
            font-weight: 500;
        }

        .nav-links a:hover {
            color: #c59d5f;
        }

        .book-btn {
            background-color: #c59d5f;
            color: white !important;
            padding: 12px 20px;
            border-radius: 5px;
        }

        .book-btn:hover {
            background-color: #a98248;
        }

        /* Mobile */
        @media (max-width: 768px) {
            .navbar {
                padding: 0 5%;
            }

            .nav-links {
                gap: 12px;
            }

            .nav-links a {
                font-size: 13px;
            }

            .logo {
                font-size: 20px;
            }
        }
        /* About Section */

.about {
    padding: 90px 8%;
    background-color: #f8f8f8;
}

.about-container {
    max-width: 1200px;
    margin: auto;

    display: grid;
    grid-template-columns: 1fr 1fr;

    gap: 60px;

    align-items: center;
}

.about-image img {
    width: 100%;
    height: 450px;

    object-fit: cover;

    border-radius: 10px;
}

.about-content {
    padding: 10px;
}

.section-title {
    color: #c59d5f;

    font-size: 14px;

    font-weight: bold;

    letter-spacing: 3px;

    margin-bottom: 15px;
}

.about-content h2 {
    font-size: 40px;

    color: #222;

    margin-bottom: 20px;
}

.about-content p {
    color: #666;

    line-height: 1.8;

    margin-bottom: 15px;

    font-size: 16px;
}

.about-features {
    display: grid;

    grid-template-columns: 1fr 1fr;

    gap: 15px;

    margin-top: 25px;
}

.about-features div {
    color: #333;

    font-size: 15px;
}

.about-features strong {
    color: #c59d5f;

    margin-right: 8px;

    font-size: 18px;
}

/* Mobile */

@media (max-width: 768px) {

    .about {
        padding: 60px 5%;
    }

    .about-container {
        grid-template-columns: 1fr;

        gap: 35px;
    }

    .about-image img {
        height: 300px;
    }

    .about-content h2 {
        font-size: 32px;
    }

    .about-features {
        grid-template-columns: 1fr;
    }

}
/* Rooms Section */

.rooms {
    padding: 90px 8%;
    background-color: #ffffff;
}

.rooms-heading {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 50px;
}

.rooms-heading h2 {
    font-size: 40px;
    color: #222;
    margin-bottom: 15px;
}

.rooms-heading > p:last-child {
    color: #666;
    line-height: 1.6;
}

.rooms-container {
    max-width: 1200px;
    margin: auto;

    display: grid;
    grid-template-columns: repeat(3, 1fr);

    gap: 30px;
}

.room-card {
    background: #ffffff;

    border-radius: 10px;

    overflow: hidden;

    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.10);

    transition: 0.3s;
}

.room-card:hover {
    transform: translateY(-8px);

    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);
}

.room-card img {
    width: 100%;
    height: 230px;

    object-fit: cover;
}

.room-info {
    padding: 25px;
}

.room-info h3 {
    font-size: 24px;

    color: #222;

    margin-bottom: 12px;
}

.room-description {
    color: #666;

    line-height: 1.6;

    font-size: 14px;

    margin-bottom: 20px;
}

.room-details {
    display: flex;

    gap: 15px;

    color: #555;

    font-size: 13px;

    margin-bottom: 25px;
}

.room-bottom {
    display: flex;

    align-items: center;

    justify-content: space-between;
}

.price {
    color: #c59d5f;

    font-size: 20px;

    font-weight: bold;
}

.price small {
    color: #777;

    font-size: 12px;

    font-weight: normal;
}

.room-btn {
    background-color: #c59d5f;

    color: white;

    text-decoration: none;

    padding: 10px 15px;

    border-radius: 5px;

    font-size: 13px;
}

.room-btn:hover {
    background-color: #a98248;
}


/* Mobile */

@media (max-width: 900px) {

    .rooms-container {
        grid-template-columns: 1fr 1fr;
    }

}

@media (max-width: 600px) {

    .rooms {
        padding: 60px 5%;
    }

    .rooms-heading h2 {
        font-size: 32px;
    }

    .rooms-container {
        grid-template-columns: 1fr;
    }

}
/* Facilities Section */

.facilities {
    padding: 90px 8%;
    background-color: #f8f8f8;
}

.facilities-heading {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 50px;
}

.facilities-heading h2 {
    font-size: 40px;
    color: #222;
    margin-bottom: 15px;
}

.facilities-heading > p:last-child {
    color: #666;
    line-height: 1.6;
}

.facilities-container {
    max-width: 1100px;
    margin: auto;

    display: grid;
    grid-template-columns: repeat(4, 1fr);

    gap: 25px;
}

.facility-card {
    background: white;

    text-align: center;

    padding: 35px 20px;

    border-radius: 10px;

    box-shadow: 0 5px 20px rgba(0,0,0,0.08);

    transition: 0.3s;
}

.facility-card:hover {
    transform: translateY(-7px);
}

.facility-icon {
    font-size: 42px;
    margin-bottom: 18px;
}

.facility-card h3 {
    font-size: 20px;
    margin-bottom: 10px;
    color: #222;
}

.facility-card p {
    color: #666;
    font-size: 14px;
    line-height: 1.6;
}


/* Mobile */

@media (max-width: 900px) {

    .facilities-container {
        grid-template-columns: 1fr 1fr;
    }

}

@media (max-width: 600px) {

    .facilities {
        padding: 60px 5%;
    }

    .facilities-container {
        grid-template-columns: 1fr;
    }

    .facilities-heading h2 {
        font-size: 32px;
    }

}
/* Booking Section */

.booking {
    padding: 90px 8%;
    background-color: #ffffff;
}

.booking-container {
    max-width: 900px;
    margin: auto;
}

.booking-heading {
    text-align: center;
    margin-bottom: 45px;
}

.booking-heading h2 {
    font-size: 40px;
    color: #222;
    margin-bottom: 15px;
}

.booking-heading > p:last-child {
    color: #666;
    line-height: 1.6;
}

.booking-form {
    background-color: #f8f8f8;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 25px;
}

.form-group {
    margin-bottom: 22px;
}

.form-group label {
    display: block;
    color: #333;
    font-weight: 600;
    font-size: 14px;
    margin-bottom: 8px;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 13px 15px;

    border: 1px solid #ddd;
    border-radius: 5px;

    font-size: 14px;
    font-family: Arial, sans-serif;

    outline: none;
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    border-color: #c59d5f;
}

.form-group textarea {
    resize: vertical;
}

.booking-btn {
    width: 100%;

    padding: 15px;

    border: none;
    border-radius: 5px;

    background-color: #c59d5f;
    color: white;

    font-size: 15px;
    font-weight: bold;

    cursor: pointer;
}

.booking-btn:hover {
    background-color: #a98248;
}


/* Booking Mobile */

@media (max-width: 600px) {

    .booking {
        padding: 60px 5%;
    }

    .booking-form {
        padding: 25px 20px;
    }

    .form-row {
        grid-template-columns: 1fr;
        gap: 0;
    }

    .booking-heading h2 {
        font-size: 32px;
    }

}
/* Contact Section */

.contact {
    padding: 90px 8%;
    background-color: #f8f8f8;
}

.contact-container {
    max-width: 1100px;
    margin: auto;

    display: grid;
    grid-template-columns: 1fr 1fr;

    gap: 60px;
}

.contact-info h2 {
    font-size: 40px;
    color: #222;
    margin-bottom: 20px;
}

.contact-info > p:not(.section-title) {
    color: #666;
    line-height: 1.7;
    margin-bottom: 30px;
}

.contact-item {
    display: flex;
    gap: 15px;
    margin-bottom: 25px;
}

.contact-item > span {
    font-size: 25px;
}

.contact-item h4 {
    color: #222;
    margin-bottom: 5px;
}

.contact-item p {
    color: #666;
    font-size: 14px;
}


/* Contact Form */

.contact-form {
    background: white;

    padding: 35px;

    border-radius: 10px;

    box-shadow: 0 5px 20px rgba(0,0,0,0.08);
}

.contact-form h3 {
    font-size: 25px;
    margin-bottom: 25px;
    color: #222;
}

.contact-form input,
.contact-form textarea {
    width: 100%;

    padding: 13px 15px;

    margin-bottom: 15px;

    border: 1px solid #ddd;

    border-radius: 5px;

    outline: none;

    font-family: Arial, sans-serif;
}

.contact-form input:focus,
.contact-form textarea:focus {
    border-color: #c59d5f;
}

.contact-form textarea {
    resize: vertical;
}

.contact-form button {
    width: 100%;

    padding: 14px;

    border: none;

    border-radius: 5px;

    background-color: #c59d5f;

    color: white;

    font-weight: bold;

    cursor: pointer;
}

.contact-form button:hover {
    background-color: #a98248;
}


/* Footer */

.footer {
    background-color: #222;
    color: white;

    padding-top: 60px;
}

.footer-container {
    max-width: 1100px;
    margin: auto;

    padding: 0 8% 50px;

    display: grid;
    grid-template-columns: 2fr 1fr 1fr;

    gap: 50px;
}

.footer h2 {
    font-size: 25px;
    margin-bottom: 15px;
}

.footer h2 span {
    color: #c59d5f;
}

.footer h3 {
    margin-bottom: 20px;
}

.footer p {
    color: #bbb;
    line-height: 1.7;
    font-size: 14px;
}

.footer-links {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.footer-links a {
    color: #bbb;
    text-decoration: none;
    font-size: 14px;
}

.footer-links a:hover {
    color: #c59d5f;
}

.footer-contact p {
    margin-bottom: 10px;
}

.footer-bottom {
    border-top: 1px solid #444;

    text-align: center;

    padding: 20px;
}


/* Contact & Footer Mobile */

@media (max-width: 768px) {

    .contact {
        padding: 60px 5%;
    }

    .contact-container {
        grid-template-columns: 1fr;
        gap: 40px;
    }

    .contact-info h2 {
        font-size: 32px;
    }

    .footer-container {
        grid-template-columns: 1fr;
        gap: 35px;
    }

}
/* Smooth scrolling */
html {
    scroll-behavior: smooth;
}

/* Smooth transition for buttons and links */
a,
button {
    transition: all 0.3s ease;
}

/* Button hover effect */
button:hover,
.btn:hover {
    transform: translateY(-3px);
}

/* Room/Facebook/card hover effect */
.card,
.room-card,
.facility-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.card:hover,
.room-card:hover,
.facility-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

/* Image hover effect */
img {
    transition: transform 0.4s ease;
}

img:hover {
    transform: scale(1.03);
}

/* Fade-in animation */
@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Main sections animation */
section {
    animation: fadeIn 0.8s ease-in-out;
}
    
    </style>
</head>

<body>

    <!-- Navbar -->

    <nav class="navbar">

        <div class="logo">
            Guest<span>House</span>
        </div>

        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#rooms">Rooms</a></li>
            <li><a href="#contact">Contact</a></li>
            <li>
                <a href="#booking" class="book-btn">Book Now</a>
            </li>
        </ul>

    </nav>
    

    <!-- Hero Section -->

<section class="hero">

    <div class="hero-content">

        <p class="hero-small">WELCOME TO OUR GUEST HOUSE</p>

        <h1>Comfortable Stay,<br>Memorable Experience</h1>

        <p class="hero-text">
            Enjoy a peaceful and comfortable stay with
            modern facilities and excellent hospitality.
        </p>

        <a href="#booking" class="hero-btn">BOOK YOUR STAY</a>

    </div>

</section>


    <!-- About Section -->

<section class="about" id="about">

    <div class="about-container">

        <div class="about-image">
            <img 
                src="https://images.unsplash.com/photo-1566665797739-1674de7a421a"
                alt="Guest House Room"
            >
        </div>

        <div class="about-content">

            <p class="section-title">ABOUT US</p>

            <h2>Welcome to Our Guest House</h2>

            <p>
                We provide a comfortable, peaceful and memorable stay
                for our guests. Our guest house is designed to give you
                a home-like experience with modern facilities.
            </p>

            <p>
                Whether you are travelling for business, vacation or
                spending time with your family, we are here to make
                your stay comfortable and enjoyable.
            </p>

            <div class="about-features">

                <div>
                    <strong>✓</strong>
                    Comfortable Rooms
                </div>

                <div>
                    <strong>✓</strong>
                    Free Wi-Fi
                </div>

                <div>
                    <strong>✓</strong>
                    24/7 Support
                </div>

                <div>
                    <strong>✓</strong>
                    Clean Environment
                </div>

            </div>

        </div>

    </div>

</section>



    <!-- Rooms Section -->
    <section class="rooms" id="rooms">
        <div class="rooms-heading">
            <p class="section-title">OUR ROOMS</p>
            <h2>Choose Your Perfect Room</h2>
            <p>Comfortable rooms with modern facilities for a relaxing stay.</p>
        </div>

        <div class="rooms-container">


        <!-- Room 1 -->
        <div class="room-card">

            <img 
                src="https://images.unsplash.com/photo-1611892440504-42a792e24d32"
                alt="Deluxe Room"
            >

            <div class="room-info">

                <h3>Deluxe Room</h3>

                <p class="room-description">
                    A comfortable room perfect for couples and business travellers.
                </p>

                <div class="room-details">
                    <span>👤 2 Guests</span>
                    <span>🛏️ 1 Bed</span>
                </div>

                <div class="room-bottom">

                    <div class="price">
                        ₹1,500 <small>/ Night</small>
                    </div>

                    <a href="#booking" class="room-btn">
                        Book Now
                    </a>

                </div>

            </div>

        </div>


        <!-- Room 2 -->
        <div class="room-card">

            <img 
                src="https://images.unsplash.com/photo-1590490360182-c33d57733427"
                alt="Family Room"
            >

            <div class="room-info">

                <h3>Family Room</h3>

                <p class="room-description">
                    Spacious room designed for families and small groups.
                </p>

                <div class="room-details">
                    <span>👤 4 Guests</span>
                    <span>🛏️ 2 Beds</span>
                </div>

                <div class="room-bottom">

                    <div class="price">
                        ₹2,500 <small>/ Night</small>
                    </div>

                    <a href="#booking" class="room-btn">
                        Book Now
                    </a>

                </div>

            </div>

        </div>


        <!-- Room 3 -->
        <div class="room-card">

            <img 
                src="https://images.unsplash.com/photo-1591088398332-8a7791972843"
                alt="Premium Room"
            >

            <div class="room-info">

                <h3>Premium Room</h3>

                <p class="room-description">
                    Premium room with extra space and enhanced facilities.
                </p>

                <div class="room-details">
                    <span>👤 3 Guests</span>
                    <span>🛏️ 1 King Bed</span>
                </div>

                <div class="room-bottom">

                    <div class="price">
                        ₹3,000 <small>/ Night</small>
                    </div>

                    <a href="#booking" class="room-btn">
                        Book Now
                    </a>

                </div>

            </div>

        </div>

    
        </div>
    </section>


<section class="facilities">

    <div class="facilities-heading">
        <p class="section-title">OUR FACILITIES</p>
        <h2>Everything You Need</h2>
        <p>
            We provide modern facilities to make your stay comfortable.
        </p>
    </div>

    <div class="facilities-container">

        <div class="facility-card">
            <div class="facility-icon">📶</div>
            <h3>Free Wi-Fi</h3>
            <p>High-speed internet available for all guests.</p>
        </div>

        <div class="facility-card">
            <div class="facility-icon">🚗</div>
            <h3>Free Parking</h3>
            <p>Safe and convenient parking for your vehicle.</p>
        </div>

        <div class="facility-card">
            <div class="facility-icon">🍽️</div>
            <h3>Restaurant</h3>
            <p>Enjoy delicious meals and refreshments.</p>
        </div>

        <div class="facility-card">
            <div class="facility-icon">🛎️</div>
            <h3>24/7 Service</h3>
            <p>Our support team is available whenever you need.</p>
        </div>

    </div>
    <!-- Booking Section -->
     <!-- Booking Section -->
<section class="booking" id="booking">

    <div class="booking-container">

        <div class="booking-heading">
            <p class="section-title">BOOK YOUR STAY</p>

            <h2>Make Your Reservation</h2>

            <p>
                Fill in the details below and reserve your comfortable stay.
            </p>
        </div>


        <!-- Booking Form -->
        <form class="booking-form" action="save_booking.php" method="POST">

            <!-- Name + Phone -->
            <div class="form-row">

                <div class="form-group">
                    <label for="name">Full Name</label>

                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Enter your full name"
                        required
                    >
                </div>


                <div class="form-group">
                    <label for="phone">Mobile Number</label>

                    <input
                        type="tel"
                        id="phone"
                        name="phone"
                        placeholder="Enter 10-digit mobile number"
                        pattern="[0-9]{10}"
                        maxlength="10"
                        required
                    >
                </div>

            </div>


            <!-- Email + Guests -->
            <div class="form-row">

                <div class="form-group">
                    <label for="email">Email Address</label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        placeholder="Enter your email"
                        required
                    >
                </div>


                <div class="form-group">
                    <label for="guests">Number of Guests</label>

                    <select id="guests" name="guests" required>

                        <option value="">
                            Select Guests
                        </option>

                        <option value="1">
                            1 Guest
                        </option>

                        <option value="2">
                            2 Guests
                        </option>

                        <option value="3">
                            3 Guests
                        </option>

                        <option value="4">
                            4 Guests
                        </option>

                    </select>

                </div>

            </div>


            <!-- Check-in + Check-out -->
            <div class="form-row">

                <div class="form-group">
                    <label for="check_in">Check-in Date</label>

                    <input
                        type="date"
                        id="check_in"
                        name="check_in"
                        required
                    >
                </div>


                <div class="form-group">
                    <label for="check_out">Check-out Date</label>

                    <input
                        type="date"
                        id="check_out"
                        name="check_out"
                        required
                    >
                </div>

            </div>


            <!-- Room -->
            <div class="form-group">

                <label for="room">
                    Select Room
                </label>

                <select
                    id="room"
                    name="room"
                    required
                >

                    <option value="">
                        Select a Room
                    </option>

                    <option value="Deluxe Room">
                        Deluxe Room - ₹1,500/night
                    </option>

                    <option value="Family Room">
                        Family Room - ₹2,500/night
                    </option>

                    <option value="Premium Room">
                        Premium Room - ₹3,000/night
                    </option>

                </select>

            </div>


            <!-- Special Request -->
            <div class="form-group">

                <label for="message">
                    Special Request
                </label>

                <textarea
                    id="message"
                    name="message"
                    rows="4"
                    placeholder="Any special request?"
                ></textarea>

            </div>


            <!-- Submit Button -->
            <button
                type="submit"
                class="booking-btn"
            >
                SUBMIT BOOKING
            </button>


        </form>
        <!-- Booking Form End -->

    </div>

</section>

<section class="contact" id="contact">

    <div class="contact-container">

        <div class="contact-info">

            <p class="section-title">CONTACT US</p>

            <h2>Get In Touch</h2>

            <p>
                Have any questions or need help with your booking?
                Feel free to contact us.
            </p>

            <div class="contact-item">
                <span>📍</span>
                <div>
                    <h4>Address</h4>
                    <p>123 Main Street, Uttarakhand, India</p>
                </div>
            </div>

            <div class="contact-item">
                <span>📞</span>
                <div>
                    <h4>Phone</h4>
                    <p>+91 98765 43210</p>
                </div>
            </div>

            <div class="contact-item">
                <span>✉️</span>
                <div>
                    <h4>Email</h4>
                    <p>info@guesthouse.com</p>
                </div>
            </div>

        </div>


        <div class="contact-form">

            <h3>Send Us a Message</h3>

            <form action="#" method="POST">

                <input
                    type="text"
                    name="name"
                    placeholder="Your Name"
                    required
                >

                <input
                    type="email"
                    name="email"
                    placeholder="Your Email"
                    required
                >

                <input
                    type="tel"
                    name="phone"
                    placeholder="Your Phone"
                    required
                >

                <textarea
                    name="message"
                    rows="5"
                    placeholder="Your Message"
                    required
                ></textarea>

                <button type="submit">
                    SEND MESSAGE
                </button>

            </form>

        </div>

    </div>

</section>

<footer class="footer">

    <div class="footer-container">

        <div class="footer-about">

            <h2>Guest<span>House</span></h2>

            <p>
                Comfortable rooms, modern facilities and
                memorable hospitality for every guest.
            </p>

        </div>


        <div class="footer-links">

            <h3>Quick Links</h3>

            <a href="index.php">Home</a>
            <a href="#about">About</a>
            <a href="#rooms">Rooms</a>
            <a href="#booking">Booking</a>
            <a href="#contact">Contact</a>

        </div>


        <div class="footer-contact">

            <h3>Contact</h3>

            <p>📍 Uttarakhand, India</p>
            <p>📞 +91 98765 43210</p>
            <p>✉️ info@guesthouse.com</p>

        </div>

    </div>


    <div class="footer-bottom">

        <p>
            © 2026 GuestHouse. All Rights Reserved.
        </p>

    </div>

</footer>

</body>
</html>