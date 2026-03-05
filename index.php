<?php
include "includes/header.php";
?>
    <!-- Hero Section -->
    <header class="hero" id="home" >
        <div class="hero-overlay"></div>
        <div class="container hero-content text-center reveal">
            <h1 class="hero-title">Elegance Redefined</h1>
            <p class="hero-subtitle">Experience the ultimate luxury for your unforgettable moments at HVPC Banquet Hall.</p>
            <a href="#booking" class="btn-gold mt-4">Discover More</a>
        </div>
    </header>

    <!-- About Section -->
    <section class="about section-padding" id="about">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 reveal slide-left">
                    <img src="assets/img/collage.jpg" alt="Wedding Event at HVPC" class="img about-img rounded shadow-lg" width="100%" style="width:100%;height:500px;object-fit:cover;">
                </div>
                <div class="col-md-6 reveal slide-right">
                    <div class="about-text pl-md-5 mt-4 mt-md-0">
                        <h2 class="section-title">A Legacy of Grandeur</h2>
                        <h4 class="gold-text mb-3">Where Dreams Meet Reality</h4>
                        <p>HVPC Banquet Hall is more than a venue; it is an experience of sophisticated luxury. Designed with modern architecture and adorned with crystal chandeliers, our space provides the perfect canvas for your majestic celebrations.</p>
                        <p>Whether it's a grand wedding or a corporate gala, our premium service and elegant ambiance will leave a lasting impression on your guests.</p>
                        <a href="#gallery" class="btn-outline-gold mt-3">View Gallery</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
   <section class="services-section">
    <div class="container">
        <div class="text-center mb-5">
            <span class="sub-title">Our Services</span>
            <h2 class="main-title">WHAT WE CAN DO</h2>
            <div class="divider">
                <span class="line"></span>
                <span class="iconify divider-icon" data-icon="ph:flower-lotus-light"></span>
                <span class="line"></span>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <div class="card-icon-wrapper">
                        <span class="dash"></span>
                        <span class="iconify card-icon" data-icon="ph:diamond-light"></span>
                        <span class="dash"></span>
                    </div>
                    <h3>Wedding Ceremony</h3>
                    <p>Quis ipsome suspendisse ultrices gravid. Risus commod viverra maescums.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <div class="card-icon-wrapper">
                        <span class="dash"></span>
                        <span class="iconify card-icon" data-icon="ph:briefcase-light"></span>
                        <span class="dash"></span>
                    </div>
                    <h3>Corporate Party</h3>
                    <p>Quis ipsome suspendisse ultrices gravid. Risus commod viverra maescums.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <div class="card-icon-wrapper">
                        <span class="dash"></span>
                        <span class="iconify card-icon" data-icon="ph:users-three-light"></span>
                        <span class="dash"></span>
                    </div>
                    <h3>Farewell / Prom</h3>
                    <p>Quis ipsome suspendisse ultrices gravid. Risus commod viverra maescums.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <div class="card-icon-wrapper">
                        <span class="dash"></span>
                        <span class="iconify card-icon" data-icon="ph:guitar-light"></span>
                        <span class="dash"></span>
                    </div>
                    <h3>Sangeet</h3>
                    <p>Quis ipsome suspendisse ultrices gravid. Risus commod viverra maescums.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <div class="card-icon-wrapper">
                        <span class="dash"></span>
                        <span class="iconify card-icon" data-icon="ph:handshake-light"></span>
                        <span class="dash"></span>
                    </div>
                    <h3>Engagement</h3>
                    <p>Quis ipsome suspendisse ultrices gravid. Risus commod viverra maescums.</p>
                </div>
            </div>

            <div class="col-md-4 mb-4">
                <div class="service-card">
                    <div class="card-icon-wrapper">
                        <span class="dash"></span>
                        <span class="iconify card-icon" data-icon="ph:cake-light"></span>
                        <span class="dash"></span>
                    </div>
                    <h3>Birthday Party</h3>
                    <p>Quis ipsome suspendisse ultrices gravid. Risus commod viverra maescums.</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- slider start here-->
 <?php include "includes/slider_container.html";?>
<!-- slider end here -->

<!-- features start here-->
 <?php include "includes/features.html";?>
<!-- features end here -->

<!-- Gallery start here -->
 <?php
 include "includes/gallery.html"
 ?>
<!-- Gallery end here -->



<!-- testimonial start here-->
 <?php include "includes/testimonial.html";?>
<!-- testimonial end here -->

<!-- Booking Section -->
<section class="booking section-padding bg-dark-tone" id="booking">
        <div class="container reveal">
            <div class="row justify-content-center">
                <div class="col-md-8 text-center">
                    <h2 class="section-title text-white">Reserve Your Date</h2>
                    <p class="text-light mb-5">Connect with our event specialists to begin planning your extraordinary event.</p>
                    
                    <form class="premium-form">
                        <div class="row">
                            <div class="col-md-6 position-relative">
                                <input type="text" id="name" class="form-control" required placeholder=" ">
                                <label for="name" class="floating-label">Full Name</label>
                            </div>
                            <div class="col-md-6 position-relative mt-4 mt-md-0">
                                <input type="email" id="email" class="form-control" required placeholder=" ">
                                <label for="email" class="floating-label">Email Address</label>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6 position-relative">
                                <input type="date" id="date" class="form-control" required placeholder=" ">
                                <label for="date" class="floating-label">Event Date</label>
                            </div>
                            <div class="col-md-6 position-relative mt-4 mt-md-0">
                                <select id="eventType" class="form-control" required>
                                    <option value="" disabled selected>Select Event Type</option>
                                    <option>Wedding</option>
                                    <option>Corporate Gala</option>
                                    <option>Private Party</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-12 position-relative">
                                <textarea id="message" class="form-control" rows="4" required placeholder=" "></textarea>
                                <label for="message" class="floating-label">Additional Details</label>
                            </div>
                        </div>
                        <button type="submit" class="btn-gold mt-4 btn-block">Send Inquiry</button>
                    </form>
                </div>
            </div>
        </div>
</section>

<?php
    include "includes/footer.php";
    ?>
    

   