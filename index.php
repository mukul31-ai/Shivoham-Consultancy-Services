<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shivoham Consultancy Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css"/>

<style>
body { 
  margin: 0; 
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  line-height: 1.7;
  overflow-x: hidden;
  font-size: 16px;
}

html {
  scroll-behavior: smooth;
}

.slider {
  position: relative;
  width: 100%;
  height: 100vh;
  min-height: 500px;
  overflow: hidden;
  background: #000;
  margin: 0;
  padding: 0;
}

.slide {
  display: none;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  animation: fadeIn 0.8s ease-in-out;
}

.slide img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  position: absolute;
  top: 0;
  left: 0;
}

.active {
  display: block;
  z-index: 1;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

.text {
  position: absolute;
  bottom: 60px;
  left: 60px;
  color: #fff;
  background: rgba(0, 0, 0, 0.8);
  padding: 35px 50px;
  border-radius: 12px;
  max-width: 600px;
  z-index: 10;
  animation: slideUp 0.8s ease-in-out;
  box-shadow: 0 8px 32px rgba(0, 0, 0, 0.6);
  backdrop-filter: blur(4px);
}

@keyframes slideUp {
  from {
    opacity: 0;
    transform: translateY(40px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

.text h2 {
  font-size: 48px;
  margin: 0 0 15px 0;
  font-weight: 700;
  color: #fff;
  letter-spacing: -0.5px;
}

.text p {
  font-size: 19px;
  margin: 0;
  line-height: 1.8;
  color: #e8e8e8;
}

/* Slider Navigation Dots */
.slider-dots {
  position: absolute;
  bottom: 40px;
  right: 50px;
  display: flex;
  gap: 12px;
  z-index: 20;
}

.dot {
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.5);
  cursor: pointer;
  transition: all 0.3s ease;
  border: 2px solid transparent;
}

.dot.active {
  background: #3190e7;
  width: 30px;
  border-radius: 6px;
  box-shadow: 0 0 10px rgba(49, 144, 231, 0.6);
}

.dot:hover {
  background: rgba(255, 255, 255, 0.8);
  transform: scale(1.2);
}

/* Mobile & Tablet Responsive */
@media (max-width: 1024px) {
  .text {
    bottom: 50px;
    left: 50px;
    max-width: 550px;
    padding: 30px 40px;
  }
  
  .text h2 {
    font-size: 36px;
  }
  
  .text p {
    font-size: 16px;
  }
  
  .slider-dots {
    bottom: 30px;
    right: 30px;
  }
}

@media (max-width: 768px) {
  .slider {
    height: 70vh;
    min-height: 400px;
  }
  
  .text {
    bottom: 35px;
    left: 25px;
    right: 25px;
    max-width: none;
    padding: 20px 25px;
  }
  
  .text h2 {
    font-size: 26px;
    margin-bottom: 10px;
  }
  
  .text p {
    font-size: 14px;
    line-height: 1.5;
  }
  
  .slider-dots {
    bottom: 20px;
    right: 20px;
    gap: 8px;
  }
  
  .dot {
    width: 10px;
    height: 10px;
  }
  
  .dot.active {
    width: 24px;
  }
}

@media (max-width: 480px) {
  .slider {
    height: 60vh;
    min-height: 350px;
  }
  
  .text {
    bottom: 25px;
    left: 15px;
    right: 15px;
    padding: 15px 20px;
    border-radius: 8px;
  }
  
  .text h2 {
    font-size: 22px;
    margin-bottom: 8px;
  }
  
  .text p {
    font-size: 12px;
  }
  
  .slider-dots {
    bottom: 15px;
    right: 15px;
    gap: 6px;
  }
  
  .dot {
    width: 8px;
    height: 8px;
  }
  
  .dot.active {
    width: 20px;
  }
}
</style>

<!-- Floating Buttons -->
<style>
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

<!-- SERVICES SECTION -->
<style>
.services-section {
  padding: 80px 20px 50px;
  background: #f9f9f9;
  text-align: center;
}

.services-container {
  max-width: 1200px;
  margin: 0 auto;
}

/* Space for top image */
.services-top {
  margin-bottom: 40px;
}

.services-top img {
  max-width: 100%;
  height: auto;
  border-radius: 10px;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

/* Grid */
.services-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
  gap: 30px;
  margin-top: 30px;
}

/* Card */
.service-card {
  background: #fff;
  padding: 30px 25px;
  border-radius: 12px;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
  transition: all 0.3s ease;
  position: relative;
  text-decoration: none;
  color: inherit;
  display: flex;
  flex-direction: column;
}

.service-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.service-card img {
  width: 120px;
  height: 120px;
  border-radius: 10px;
  margin: 0 auto 20px;
  object-fit: cover;
}

/* Icon circle with pulse */
.icon {
  width: 120px;
  height: 120px;
  margin: 0 auto 20px;
  border-radius: 10px;
  background: #25D366;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #fff;
  font-size: 48px;
  position: relative;
}

/* Pulse animation */
.icon::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  border-radius: 50%;
  background: rgba(37, 211, 102, 0.5);
  animation: pulse 1.8s infinite;
  z-index: 0;
}

.icon i {
  position: relative;
  z-index: 1;
}

@keyframes pulse {
  0% {
    transform: scale(1);
    opacity: 0.7;
  }
  70% {
    transform: scale(1.6);
    opacity: 0;
  }
  100% {
    transform: scale(1);
    opacity: 0;
  }
}

/* Text */
.service-card h3 {
  margin: 15px 0 10px 0;
  font-size: 30px;
  color: #333;
}

.service-card p {
  font-size: 14px;
  color: #666;
  margin: 0;
  flex-grow: 1;
  line-height: 1.6;
}

.service-card .btn {
  margin-top: 15px;
  align-self: center;
}

/* Role of Accountants Cards Hover Effects */
.py-5.bg-light .card {
  transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  background: #fff;
  border: none;
  position: relative;
  overflow: hidden;
}

.py-5.bg-light .card::before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
  transition: left 0.6s ease;
  z-index: 1;
}

.py-5.bg-light .card:hover::before {
  left: 100%;
}

.py-5.bg-light .card:hover {
  transform: translateY(-12px) scale(1.02);
  box-shadow: 0 15px 40px rgba(49, 144, 231, 0.25);
  background: linear-gradient(135deg, #ffffff 0%, #f0f7ff 100%);
}

.py-5.bg-light .card:hover h5 {
  color: #0d6efd;
  transform: scale(1.05);
}

.py-5.bg-light .card:hover p {
  color: #333;
}

.py-5.bg-light .card div[style*="font-size"] {
  transition: all 0.4s ease;
  display: inline-block;
  animation: iconBounce 0.6s ease;
}

.py-5.bg-light .card:hover div[style*="font-size"] {
  font-size: 50px !important;
  animation: iconSpin 0.6s ease;
  filter: drop-shadow(0 0 8px rgba(49, 144, 231, 0.4));
}

@keyframes iconSpin {
  0% {
    transform: rotateY(0deg) scale(1);
  }
  50% {
    transform: rotateY(180deg) scale(1.1);
  }
  100% {
    transform: rotateY(360deg) scale(1);
  }
}

@keyframes iconBounce {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-10px);
  }
}

.py-5.bg-light .card h5 {
  transition: all 0.3s ease;
  margin: 15px 0 10px;
}

.py-5.bg-light .card p {
  transition: all 0.3s ease;
}

/* How Accounting Professionals Help You Cards Hover Effects */
section.py-5:not(.bg-light) .card {
  transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
  background: #fff;
  border: none;
  position: relative;
  overflow: hidden;
}

section.py-5:not(.bg-light) .card::before {
  content: "";
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
  transition: left 0.6s ease;
  z-index: 1;
}

section.py-5:not(.bg-light) .card:hover::before {
  left: 100%;
}

section.py-5:not(.bg-light) .card:hover {
  transform: translateY(-12px) scale(1.02);
  box-shadow: 0 15px 40px rgba(49, 144, 231, 0.25);
  background: linear-gradient(135deg, #ffffff 0%, #f0f7ff 100%);
}

section.py-5:not(.bg-light) .card:hover h5 {
  color: #0d6efd;
  transform: scale(1.05);
}

section.py-5:not(.bg-light) .card:hover p {
  color: #333;
}

section.py-5:not(.bg-light) .card div[style*="font-size"] {
  transition: all 0.4s ease;
  display: inline-block;
}

section.py-5:not(.bg-light) .card:hover div[style*="font-size"] {
  font-size: 50px !important;
  animation: iconSpin 0.6s ease;
  filter: drop-shadow(0 0 8px rgba(49, 144, 231, 0.4));
}

section.py-5:not(.bg-light) .card h5 {
  transition: all 0.3s ease;
  margin: 15px 0 10px;
}

section.py-5:not(.bg-light) .card p {
  transition: all 0.3s ease;
}
</style>

<!-- Testinomials -->



</head>
<body>
 
<?php include 'header.php'; ?>

    <!-- Slider  -->

    <?php
$slides = [
  [
    "image" => "./images/slider-image1.png",
    "title" => "Our motto:",
    "desc"  => "A complete solution for all your accounting and GST needs under one roof."
  ],
  [
    "image" => "./images/slider-image2.png",
    "title" => "Our Vision:",
    "desc"  => "To be the leading provider of accounting and GST services in the region. We aim to empower businesses with accurate financial management and compliance, enabling them to thrive in a competitive market."
  ],
  [
    "image" => "./images/slider-image3.png",
    "title" => "Our Mission:",
    "desc"  => "To deliver high-quality, reliable, and affordable accounting and GST services to our clients, helping them achieve their financial goals."
  ]
];
?>

<div class="slider">

<?php foreach($slides as $index => $slide): ?>
  <div class="slide <?php echo $index === 0 ? 'active' : ''; ?>">
    <img src="<?php echo $slide['image']; ?>" alt="<?php echo $slide['title']; ?>">
    <div class="text">
      <h2><?php echo $slide['title']; ?></h2>
      <p><?php echo $slide['desc']; ?></p>
    </div>
  </div>
<?php endforeach; ?>

  <!-- Slider Navigation Dots -->
  <div class="slider-dots">
    <?php foreach($slides as $index => $slide): ?>
      <span class="dot <?php echo $index === 0 ? 'active' : ''; ?>" onclick="currentSlide(<?php echo $index; ?>)"></span>
    <?php endforeach; ?>
  </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
  let slides = document.querySelectorAll(".slide");
  let dots = document.querySelectorAll(".dot");
  let current = 0;
  let autoSlideInterval = null;

  function showSlide(n) {
    // Normalize the index
    if (n >= slides.length) {
      n = 0;
    }
    if (n < 0) {
      n = slides.length - 1;
    }
    
    current = n;
    
    // Remove active class from all slides and dots
    for (var i = 0; i < slides.length; i++) {
      slides[i].classList.remove("active");
    }
    for (var i = 0; i < dots.length; i++) {
      dots[i].classList.remove("active");
    }
    
    // Add active class to current slide and dot
    slides[current].classList.add("active");
    dots[current].classList.add("active");
  }

  function nextSlide() {
    showSlide(current + 1);
  }

  function currentSlide(n) {
    clearInterval(autoSlideInterval);
    current = n;
    showSlide(current);
    startAutoSlide();
  }

  function startAutoSlide() {
    autoSlideInterval = setInterval(function() {
      nextSlide();
    }, 6000);
  }

  // Make currentSlide global for onclick calls
  window.currentSlide = currentSlide;
  
  // Initial display of first slide
  showSlide(0);
  
  // Start auto-play
  startAutoSlide();
});
</script>

<!-- Slider ends -->


<!-- Floating buttons  -->
<div class="floating-btns">
  <a href="tel:+919876543210" class="call-btn" title="Call Us">
    <i class="fas fa-phone"></i>
  </a>
  <a href="https://wa.me/919876543210" target="_blank" class="whatsapp-btn" title="Chat on WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>
</div>
<!-- Floating buttons ends  -->

<!-- Welcome Section -->
<section class="welcome-section">
  <h2>Welcome to <span>Shivoham Consultancy Services</span></h2>
  <h6 class="text-justify" style="font-style: italic; font-size: 24px;">
We, in <strong>Shivoham Consultancy Services</strong>, provide Accounting, GST, Income Tax and Company Law Services to our esteemed clients. To provide excellence in our services we have constituted a group of young and experienced accounting professional(s), having expertise in their core field. We have created separate divisions of each major segment of taxation GST DIVISION, INCOME TAX DIVISION, COMPANY LAW AND TDS DIVISION. Each division is headed exclusively by a trained accounting professional, fully dedicated to that division. It enables them to keep abreast of all the latest amendments and updates, which are frequent and common. We passionately believe that to provide flawless professional services, the team should be completely dedicated and responsible for their particular division(s).</h6>
  <button href="about.php" class="btn btn-primary mt-3" style="font-size: larger;">Read More About us</button>
</section>

<!-- how accountants will work with you -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">Role of Accountants</h2>
        <h6 class="text-justify"style="font-style: italic;">In digital world where all tax compliances are online which need 100% accuracy while filing e-returns, whether its GST monthly compliances for Micro, Small and Medium Enterprises or ITR for salaried class and small business enterprises.<br><br>

        You must be aware that timely compliances of GST, INCOME TAX, and any other statutory compliances will keep you free from late fees, interest, and other penal provisions. To meet all this obligation with prompt and 100% accuracy, you need an experienced accountant, who will protect you from trivial mistakes and errors. Further, it will save you from penalties and late fees and other penal provisions.<br><br></h6>
        <div class="row g-4">

            <div class="col-md-3">
                <div class="card text-center p-4 shadow-sm h-100 border-0">
                    <div style="font-size:40px;">📊</div>
                    <h5 class="mt-3">Financial Reporting</h5>
                    <p><b>Prepare accurate financial statements for better decision-making.</b></p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-center p-4 shadow-sm h-100 border-0">
                    <div style="font-size:40px;">💰</div>
                    <h5 class="mt-3">Tax Management</h5>
                    <p><b>Ensure proper tax planning and timely filing.</b></p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-center p-4 shadow-sm h-100 border-0">
                    <div style="font-size:40px;">📒</div>
                    <h5 class="mt-3">Book keeping</h5>
                    <p><b>Maintain organized records of all financial transactions.</b></p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card text-center p-4 shadow-sm h-100 border-0">
                    <div style="font-size:40px;">⚖️</div>
                    <h5 class="mt-3">Compliance</h5>
                    <p><b>Ensure your business follows all legal and financial regulations.</b></p>
                </div>
            </div><br>
          <h6 class="text-justify"style="font-style: italic;">So, IF YOU WANT TO BECOME A SMART TAX COMPLIANT CITIZEN, we are HERE to provide you the best services at affordable fees.</h6>

        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="text-center fw-bold mb-5">How Accounting Professionals Help You</h2>
        <h6 class="text-justify" style="font-style: italic;">Accountancy is the Language, which communicates your Business financial and sometimes non-financial status to other business and financial intermediaries as well as the Tax Authorities. So, the True and Correct representation of your actual financial status will help you to excel in business.<br><br> Accounting, better known as the "language of business", measures the results of an organization's economic activities, and conveys this information to a variety of stakeholders, including investors, creditors, management, and regulators. So only correct way of accounting will represent appropriate financial status of your business, which may benefit you: -</h6><br><br>
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card text-center p-4 shadow-sm h-100 border-0">
                    <div style="font-size:40px;">📈</div>
                    <h5 class="mt-3">Business Growth</h5>
                    <p><b>Provide insights and strategies to grow your business efficiently.</b></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center p-4 shadow-sm h-100 border-0">
                    <div style="font-size:40px;">💡</div>
                    <h5 class="mt-3">Financial Advice</h5>
                    <p><b>Expert guidance on managing money and investments.</b></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center p-4 shadow-sm h-100 border-0">
                    <div style="font-size:40px;">⏱️</div>
                    <h5 class="mt-3">Save Time</h5>
                    <p><b>Handle complex financial tasks so you can focus on business.</b></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center p-4 shadow-sm h-100 border-0">
                    <div style="font-size:40px;">🛡️</div>
                    <h5 class="mt-3">Risk Reduction</h5>
                    <p><b>Avoid penalties and financial risks with proper compliance.</b></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center p-4 shadow-sm h-100 border-0">
                    <div style="font-size:40px;">📑</div>
                    <h5 class="mt-3">Accurate Records</h5>
                    <p><b>Maintain error-free and well-organized financial data.</b></p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center p-4 shadow-sm h-100 border-0">
                    <div style="font-size:40px;">🤝</div>
                    <h5 class="mt-3">Professional Support</h5>
                    <p><b>Get continuous support for all financial and tax matters.</b></p>
                </div>
            </div><br>
            <h6 class="text-justify" style="font-style: italic;">
                If you are a business entity (even MSME)and cross the basic exemption limit as prescribed in GST, Income Tax, TDS, FERA under their various provisions you must adhere Several Tax Compliances, apart from regular filing of returns. If you fail to comply with any of the compliances within the stipulated time limit, then penalty and late fees will inevitably be imposed on you.
            </h6>
        </div>
    </div>
</section>


<!-- Why Choose Us Section -->
<section class="choose-us-section" id="chooseUs" aria-label="Why choose us">
	<div class="container choose-us-layout">
		<div class="choose-us-content">
			<h2>Why Choose Us</h2>
			<p></p>

			<ul class="choose-us-list" aria-label="Core strengths">
				<li class="choose-us-item choose-reveal" style="--choose-delay: 0.34s;">
					<span class="choose-us-check" aria-hidden="true">&#10004;</span>
					<span>Expert & Reliable Service:
            We provide accurate and professional accounting, tax, and compliance services backed by strong expertise and attention to detail.</span>
				</li>
				<li class="choose-us-item choose-reveal" style="--choose-delay: 0.46s;">
					<span class="choose-us-check" aria-hidden="true">&#10004;</span>
					<span>Timely & Hassle-Free Process:
          We ensure all filings and compliances are completed on time, so you never worry about penalties or delays.</span>
				</li>
				<li class="choose-us-item choose-reveal" style="--choose-delay: 0.58s;">
					<span class="choose-us-check" aria-hidden="true">&#10004;</span>
					<span>Personalized Client Support:
          Every client gets dedicated support and customized solutions based on their business needs.</span>
				</li>
			<!--	<li class="choose-us-item choose-reveal" style="--choose-delay: 0.7s;">
					<span class="choose-us-check" aria-hidden="true">&#10004;</span>
					<span>Modern Designs</span>
				</li>-->
			</ul>

			<a class="choose-us-btn choose-reveal" style="--choose-delay: 0.82s;" href="contact.php">Discuss Your Project</a>
		</div>

		<div class="choose-us-visual-wrap choose-reveal" style="--choose-delay: 0.36s;">
			<div class="choose-us-visual-card" id="chooseUsVisualCard">
				<img src="./images/mukul.png" alt="Shivoham Consultancy Services pvt ltd" loading="lazy">
				<div class="choose-us-badge choose-us-badge-top">Transparency</div>
				<div class="choose-us-badge choose-us-badge-bottom">Cost-Effective Solutions</div>
			</div>
		</div>
	</div>
</section>

<!-- Services Section -->
<section class="services-section">
  <div class="services-container">
    <!-- Top Image Space -->
    <div class="services-top">
      <img src="./images/mukul5.png" alt="Services Banner">
    </div>

    <!-- Services Grid -->
    <div class="services-grid">

      <div class="service-card">
        <img src="./images/mukul1.png" alt="Income Tax Services">
        <h3>Income Tax Services</h3>
        <p><b style="font-size: 16px;">We provide various Income tax return preparation and filing services for ITR-1, ITR-2, ITR-3, and more, along with statement of affairs or Balance sheet preparation.</b></p>
        <a href="income-tax-services.php" class="btn btn-primary btn-sm">Learn More</a>
      </div>

      <div class="service-card">
         <img src="./images/mukul2.png" alt="TDS Return Services">
        <h3>TDS Return Services</h3>
        <p><b style="font-size: 16px;">Comprehensive TDS return filing and compliance services for businesses.</b></p>
        <a href="tds-return-services.php" class="btn btn-primary btn-sm">Learn More</a>
      </div>

      <div class="service-card">
        <img src="./images/mukul3.png" alt="Accounting & GST Services">
        <h3>Accounting & GST Services</h3>
        <p><b style="font-size: 16px;">Comprehensive accounting and GST services including filing, compliance, and bookkeeping for your business.</b></p>
        <a href="accounting-gst-services.php" class="btn btn-primary btn-sm">Learn More</a>
      </div>

      <div class="service-card">
        <img src="./images/mukul4.png" alt="Company & Other Services">
        <h3>Company & Other Services</h3>
        <p><b style="font-size: 16px;">Comprehensive services to support your business needs including company registration and compliance.</b></p>
        <a href="company-other-services.php" class="btn btn-primary btn-sm">Learn More</a>
      </div>

    </div>
  </div>
</section>





<!-- ABOUT US SECTION -->
<style>
/* .about-section {
  position: relative;
  background: url('https://picsum.photos/1200/600') center/cover no-repeat;
  padding: 80px 20px;
  color: #fff;
  margin-bottom: 60px;
  z-index: 1;
} */

/* Dark overlay for readability */
/* .about-section::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.6);
} */

/* .about-content {
  position: relative;
  max-width: 800px;
  margin: auto;
  text-align: center;
  z-index: 2;
} */

/* .about-content h2 {
  font-size: 36px;
  margin-bottom: 15px;
}

.about-content p {
  font-size: 16px;
  line-height: 1.6;
  color: #ddd;
} */

/* Footer Elements Section */
.footer-elements {
  background: #f9f9f9;
  padding: 60px 20px;
  margin-top: 0;
  z-index: 2;
  position: relative;
}

.footer-element {
  text-align: center;
  padding: 20px;
}

.footer-element span {
  font-size: 48px;
  color: #3190e7;
  margin-bottom: 15px;
  display: block;
}

.footer-element p {
  margin: 15px 0;
  color: #333;
  font-weight: 500;
}

.footer-element p span {
  display: block;
  margin-top: 8px;
  font-size: 14px;
  color: #000000;
  font-weight: normal;
}

.footer-element a {
  color: #3190e7;
  text-decoration: none;
  transition: 0.3s;
}

.footer-element a:hover {
  text-decoration: underline;
}

</style>
<!-- 
<section class="about-section">

  <div class="about-content">
    <h2>About Us</h2>
    <p>
      We are a passionate team dedicated to building modern, responsive, and user-friendly digital solutions.
      Our goal is to help businesses grow online with innovative design and powerful technology.
    </p>

    <a href="about.php" class="about-btn">Learn More</a>
  </div>

</section> -->

<!-- Client review section-->
<body>

<section class="reviews-section">
  <div class="container">
    <h2 class="section-title">What Our Clients Say</h2>
    <p class="section-subtitle" style="font-size: 22px;">Trusted by businesses and individuals for Income Tax, TDS & GST services</p>

    <div class="reviews-wrapper">

      <div class="review-card">
        <p class="review-text">
          "Excellent service for income tax filing. Very professional and quick response. Highly recommended!"
        </p>
        <h4 class="client-name">Rohit Sharma</h4>
        <span class="client-role">Business Owner</span>
      </div>

      <div class="review-card">
        <p class="review-text">
          "They handled my TDS returns perfectly. Hassle-free experience and great support throughout."
        </p>
        <h4 class="client-name">Priya Mehta</h4>
        <span class="client-role">HR Manager</span>
      </div>

      <div class="review-card">
        <p class="review-text">
          "Very knowledgeable team. Helped me with GST filing and compliance without any issues."
        </p>
        <h4 class="client-name">Amit Verma</h4>
        <span class="client-role">Entrepreneur</span>
      </div>

    </div>
  </div>
</section>

</body>


</html>

<!-- Footer Elements Section -->
<section class="footer-elements">
  <div class="container">
    <div class="row">
      <div class="col-sm-3">
        <div class="footer-element">
          <span class="typcn typcn-watch"></span>
          <p>MONDAY TO SAT<span>10:30AM - 06:30PM</span></p>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="footer-element">
          <span class="typcn typcn-location-outline"></span>
          <p>Room No 202B,Sri krishna Puri,<span>Patna - 800001</span></p>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="footer-element">
          <span class="typcn typcn-mail"></span>
          <p>E-MAIL:<span><a href="mailto:info@shivohamconsultancy.in">info@shivohamconsultancy.in</a></span></p>
        </div>
      </div>

      <div class="col-sm-3">
        <div class="footer-element">
          <span class="typcn typcn-phone-outline"></span>
          <p>CALL US:<span>7766902358 / 9835088644</span></p>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtKeC9+NAwZ5xzD+twizzM+f3T8aHS6VwvmR9z5z5z5z5z5z5z5z5z5z5z5z5z5" crossorigin="anonymous"></script>

<!-- Submenu Dropdown Script -->
<script>
document.querySelectorAll('.dropdown-submenu').forEach(function(element) {
  element.addEventListener('click', function(e) {
    e.preventDefault();
    e.stopPropagation();
  });
});

// Handle submenu display on hover
document.querySelectorAll('.dropdown-submenu .dropdown-toggle').forEach(function(element) {
  element.addEventListener('click', function(e) {
    e.preventDefault();
    var submenu = this.nextElementSibling;
    if (submenu) {
      submenu.classList.toggle('show');
    }
  });
});
</script>

</body>
</html>