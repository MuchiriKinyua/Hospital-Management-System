<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hospital</title>
  <link rel="stylesheet" href="css/style.css">

</head>
<body>

  <!-- Top blue bar -->
  <div class="top-bar">
    <div class="left">
      <a href="#">Events</a>
      <a href="#">Careers</a>
      <a href="#">Pledge Your Eyes</a>
      <a href="#">Make a Donation</a>
      <a href="#">Locate Centre</a>
    </div>
    <div class="right">
      📞 0713030677
    </div>
  </div>

  <!-- Main nav bar -->
  <div class="nav-bar">
    <div class="nav-logo">
      <img src="images/hospital.jpg" alt="Lions Logo">
    </div>
    <div class="nav-links">
      <a href="#" class="active">Home</a>
      <a href="#">About Us</a>

      <div class="dropdown">
        <a href="#">Eye Care ▾</a>
        <div class="dropdown-content">
          <a href="#">Eye Exams</a>
          <a href="#">Surgery</a>
        </div>
      </div>

      <div class="dropdown">
        <a href="#">Dental Care ▾</a>
        <div class="dropdown-content">
          <a href="#">Cleaning</a>
          <a href="#">Braces</a>
        </div>
      </div>

      <div class="dropdown">
        <a href="#">Diabetes Care ▾</a>
        <div class="dropdown-content">
          <a href="#">Diagnosis</a>
          <a href="#">Treatment</a>
        </div>
      </div>

      <div class="dropdown">
        <a href="#">Services ▾</a>
        <div class="dropdown-content">
          <a href="#">Pharmacy</a>
          <a href="#">Counseling</a>
        </div>
      </div>

      <a href="#">Learn More</a>
      <a href="#">Contact Us</a>
    </div>
  </div>

    <!-- slider section -->

    <section class="hero-slider-horizontal">
  <div class="slider-track">
    <div class="slide-h" style="background-image: url('/images/hospital1.jpg');">
      <div class="slide-content-h">
        <h2>Our Motto</h2>
        <p>Compassionate and Quality Health Care for All</p>
      </div>
    </div>
    <div class="slide-h" style="background-image: url('/images/hospital2.jpg');">
      <div class="slide-content-h">
        <h2>Our Vision</h2>
        <p>Patient-Centered Health Care Services</p>
      </div>
    </div>
    <div class="slide-h" style="background-image: url('/images/hospital3.jpeg');">
      <div class="slide-content-h">
        <h2>Our Mission</h2>
        <p>To Deliver Accessible, Affordable & Sustainable Health Solutions</p>
      </div>
    </div>
  </div>
</section>


<!-- services -->

<section class="services-section flipped">
  <div class="services-container">
    <div class="services-header">
      <h2>Our Services</h2>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <img src="/images/maternity.jpg" alt="Maternity">
        <h4>Maternity Care</h4>
        <p>Comprehensive support for mothers and newborns.</p>
      </div>
      <div class="service-card">
        <img src="/images/physiotherapy.png" alt="Physiotherapy">
        <h4>Physiotherapy</h4>
        <p>Rehabilitation care to get you moving again.</p>
      </div>
      <div class="service-card">
        <img src="/images/counseling.png" alt="Counseling">
        <h4>Counseling</h4>
        <p>Mental health and emotional well-being support.</p>
      </div>
      <div class="service-card">
        <img src="/images/pediatrics.jpg" alt="Pediatrics">
        <h4>Pediatrics</h4>
        <p>Expert care tailored for children and infants.</p>
      </div>
      <div class="service-card">
        <img src="/images/nutrition.png" alt="Nutrition">
        <h4>Nutrition</h4>
        <p>Personalized dietary plans for better health.</p>
      </div>
      <div class="service-card">
        <img src="/images/emergency.png" alt="Emergency">
        <h4>Emergency</h4>
        <p>Fast, responsive care when you need it most.</p>
      </div>
    </div>

    <div class="services-text">
      <h2>More Health Services</h2>
      <p>Explore even more ways we’re committed to your wellness and holistic care journey.</p>
      <div class="buttons">
        <a href="#all-services" class="btn-outline">See More Services</a>
        <a href="#appointment" class="btn-yellow">Book an Appointment →</a>
      </div>
    </div>
  </div>
</section>




<!-- Contact section -->

<section id="contact" class="contact-hidden"
         style="display: flex; align-items: center; background: #CBC3E3; justify-content: space-between; padding: 80px 10%; gap: 50px;">

    <div style="width: 45%; text-align: left; background: #CBC3E3; color: #CBC3E3; line-height: 1.8;">
        <h2 style="font-size: 36px; font-weight: bold; color: #333;">Contact Us</h2>
        <p style="font-size: 18px; color: #555;">
            Have questions or want to collaborate with us? Reach out—we’d love to hear from you!  
            Our team is ready to provide solutions tailored to your needs.
        </p>

        <p style="font-size: 18px; color: #222;"><strong>📍 Location:</strong> Nairobi, Kenya</p>
        <p style="font-size: 18px; color: #222;"><strong>📞 Phone:</strong> +254 713 030 677</p>
        <p style="font-size: 18px; color: #222;"><strong>📧 Email:</strong> <a href="mailto:hospital@gmail.com" style="color: #ff5733; text-decoration: none;">hospital@gmail.com</a></p>

        <p style="font-size: 18px; font-weight: bold; color: #222;">
            Connect with us on social media:
        </p>
        <div>
            <a href="#" style="margin-right: 15px; font-size: 24px; color: #3357ff;"><i class="fab fa-facebook"></i></a>
            <a href="#" style="margin-right: 15px; font-size: 24px; color: #ff5733;"><i class="fab fa-twitter"></i></a>
            <a href="#" style="font-size: 24px; color: #33ff57;"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>

    <!-- Contact Form -->
    <div style="width: 50%; background: #CBC3E3; padding: 30px; border-radius: 10px; box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.1);">
        <h3 style="text-align: center; color: #333; font-size: 24px;">Send Us a Message</h3>
        <form action="#" method="POST" style="display: flex; flex-direction: column; gap: 15px;">
            <input type="text" name="name" placeholder="Your Name" required 
                   style="padding: 12px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">
            <input type="email" name="email" placeholder="Your Email" required 
                   style="padding: 12px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">
            <input type="phone" name="phone" placeholder="Your Phone Number" required 
                   style="padding: 12px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;">
            <textarea name="message" placeholder="Your Message" rows="5" required 
                      style="padding: 12px; border: 1px solid #ccc; border-radius: 5px; font-size: 16px;"></textarea>
            <button type="submit" style="padding: 12px; background: #ff5733; color: white; font-size: 18px; border: none; border-radius: 5px; cursor: pointer;">
                Send Message
            </button>
        </form>
    </div>
    </section>

    <script>
    const contactSection = document.querySelector('#contact');

    const contactObserver = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('contact-animate-up');
                contactObserver.unobserve(entry.target); // optional: stop observing after animation
            }
        });
    }, { threshold: 0.2 });

    contactObserver.observe(contactSection);
</script>


<!-- footer -->


<footer class="footer">
    <div class="footer-section map-container">
        <h3 style="font-weight: bold;">Our Location</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15955.186920576527!2d36.806528!3d-1.286389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d4e10e4df1%3A0x6f8c909f2873e4b2!2sNairobi%2C%20Kenya!5e0!3m2!1sen!2ske!4v1615650123456" allowfullscreen=""></iframe>
    </div>
    <div class="footer-section business-time">
        <h3 style="font-weight: bold;">Business Time</h3>
        <p>Monday - Friday: 08.00am to 05.00pm</p>
        <p>Saturday: 10.00am to 08.00pm</p>
        <p>Sunday: Closed</p>
    </div>
    <div class="footer-section newsletter">
        <h3 style="font-weight: bold;">Newsletter</h3>
        <input type="email" placeholder="Email Address">
        <button>Submit</button>
    </div>
    <div class="footer-section company">
        <h3>Company</h3>
        <a href="{{ route('register') }}">Account</a>
        <a href="#">Careers</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Company Profile</a>
    </div>
</footer>


</body>
</html>
