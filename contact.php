<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shivoham Consultancy Services</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css"/>

    <!-- Floating Buttons -->
<style>
.hero {
              background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                          url('./images/slider-image1.png') center/cover no-repeat;
              color: #fff;
              padding: 100px 0;
              text-align: center;
        }

.floating-btns {
  position: fixed;
  bottom: 20px;
  right: 20px;
  display: flex;
  flex-direction: column;
  gap: 12px;
  z-index: 999;
}

.floating-btns a {
  width: 55px;
  height: 55px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 24px;
  text-decoration: none;
  box-shadow: 0 4px 10px rgba(0,0,0,0.3);
  transition: 0.3s;
}

/* Call Button */
.call-btn {
  background: #007bff;
}

/* WhatsApp Button */
.whatsapp-btn {
  background: #25D366;
}

.floating-btns a:hover {
  transform: scale(1.1);
}
</style>


</head>
<body>
     <?php include 'header.php'; ?>
     <!-- HERO -->
<section class="hero">
    <div class="container">
        <h2 class="fw-bold">Home > Contact</h2>
        <p class="mt-3">Accurate filing, compliance & expert TDS solutions</p>
    </div>
</section>

        <section class="contact-section">
  <div class="container">

    <h2 class="section-title">Contact Us</h2>
    <p class="section-subtitle">
      Get in touch for Income Tax, TDS, GST & Accounting services
    </p>

    <div class="contact-wrapper">

      <!-- LEFT: CONTACT INFO -->
      <div class="contact-info">
        <h3>Get in Touch</h3>
        <p>We are here to help you with all your financial and taxation needs.</p>
        <b>
        <div class="info-box">
          <span>📍</span>
          <p>Patna, Bihar, India</p>
        </div>

        <div class="info-box">
          <span>📞</span>
          <p>7766902358 / 9835088644</p>
        </div>

        <div class="info-box">
          <span>✉️</span>
          <p>info@shivohamconsultancy.com</p>
        </div>

        <div class="info-box">
          <span>⏰</span>
          <p>Mon - Sat: 9:00 AM - 7:00 PM</p>
        </div>
        </b>
      </div>

      <!-- RIGHT: CONTACT FORM -->
      <div class="contact-form">
        <form>
          <div class="form-group">
            <input type="text" placeholder="Your Name" required>
          </div>

          <div class="form-group">
            <input type="email" placeholder="Your Email" required>
          </div>

          <div class="form-group">
            <input type="tel" placeholder="Your Phone" required>
          </div>

          <div class="form-group">
            <textarea rows="5" placeholder="Your Message" required></textarea>
          </div>

          <button type="submit">Send Message</button>
        </form>
      </div>

    </div>
  </div>
</section>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2790.1152899327844!2d85.35746327387791!3d23.354891503848002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f4e22950b0a3f9%3A0xacf963a8f8f3db7f!2sSTPI%20RANCHI!5e1!3m2!1sen!2sin!4v1775842729400!5m2!1sen!2sin" style="width: 100%; height: 600px; border: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    <!-- floating buttons -->
    <div class="floating-btns">
      <a href="tel:+919876543210" class="call-btn" title="Call Us">
        <i class="fas fa-phone"></i>
      </a>
      <a href="https://wa.me/919876543210" target="_blank" class="whatsapp-btn" title="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
      </a>
    </div>
    <!-- floating buttons ends -->

<?php include 'footer.php'; ?> 

</body>
</html>