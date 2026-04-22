<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
  /* Using a specific class name to wrap everything */
.gh-top-bar-custom {
    background-color: #3b7bb9;
    color: #ffffff !important;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-size: 13px;
    padding: 8px 0;
    width: 100%;
}

.gh-top-bar-flex-container {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 15px;
}

.gh-contact-group, 
.gh-info-group {
    display: flex;
    align-items: center;
    gap: 15px;
}

/* Vertical divider line with unique name */
.gh-vertical-spacer {
    width: 1px;
    height: 16px;
    background-color: rgba(255, 255, 255, 0.4);
    margin: 0 5px;
}

/* Scoped link styles to avoid global 'a' tag conflicts */
.gh-top-bar-custom a.gh-top-link,
.gh-top-bar-custom a.gh-social-item {
    color: #ffffff !important;
    text-decoration: none;
    transition: opacity 0.2s ease;
}

.gh-social-item {
    font-weight: bold;
    margin-right: 10px;
}

.gh-email-text {
    font-weight: 600;
    letter-spacing: 0.5px;
}

.gh-top-bar-custom a:hover {
    opacity: 0.8;
    text-decoration: underline;
}

/* Mobile responsive - stacks sections vertically */
@media (max-width: 768px) {
    .gh-top-bar-flex-container {
        flex-direction: column;
        gap: 8px;
    }
    .gh-vertical-spacer {
        display: none;
    }
}
</style>
</head>
<body>
<!-- Top Header -->
<header class="gh-top-bar-custom">
    <div class="gh-top-bar-flex-container">
        <div class="gh-contact-group">
            <div class="gh-phone-numbers">
                <span class="gh-icon-span">📞</span>
                <a href="tel:7766902358" class="gh-top-link">7766902358</a> / 
                <a href="tel:9835088644" class="gh-top-link">9835088644</a>
            </div>
            <div class="gh-vertical-spacer"></div>
            <div class="gh-social-links">
                <a href="#" class="gh-social-item" aria-label="Facebook">f</a>
                <a href="#" class="gh-social-item" aria-label="LinkedIn">in</a>
            </div>
        </div>

        <div class="gh-info-group">
            <div class="gh-operating-hours">
                MON - SAT 10:30AM - 06:30PM
            </div>
            <div class="gh-email-action">
                <a href="mailto:info@shivooham.com" class="gh-top-link gh-email-text">E-MAIL US AT info@shivooham.com</a>
            </div>
        </div>
    </div>
</header>

<nav class="navbar navbar-expand-lg navbar-premium">
  <div class="container-fluid">
    <!-- Logo -->
    <a class="navbar-brand" href="index.php">
      <div class="logo-wrapper">
        <img src="./images/logo.png" alt="Shivoham Consultancy Services Logo" class="logo-img" href="index.php"/>
        <span class="logo-text">Shivoham</span>
      </div>
    </a>

    <!-- Toggler -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigation Links -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.php">Service</a>
        </li>
        <!-- Services Dropdown
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Services
          </a>
              <ul class="dropdown-menu dropdown-menu-premium">
                <li><a class="dropdown-item" href="service.php?tab=income-tax"><i class="fas fa-file-invoice-dollar me-2"></i>Income Tax Services</a></li>
                <li><a class="dropdown-item" href="service.php?tab=tds"><i class="fas fa-receipt me-2"></i>TDS Return Services</a></li>
                <li><a class="dropdown-item" href="service.php?tab=accounting"><i class="fas fa-calculator me-2"></i>Accounting & GST Services</a></li>
                <li><a class="dropdown-item" href="service.php?tab=company"><i class="fas fa-building me-2"></i>Company & Other Services</a></li>
              </ul>
        </li> -->
        <li class="nav-item">
          <a class="nav-link" href="gallery.php">
            Gallery
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">
            Contact Us
          </a>
        </li>
      </ul>

      <!-- CTA Button -->
      <a href="contact.php" class="btn btn-nav-cta ms-3">Get Started</a>
    </div>
  </div>
</nav>

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Get the current page filename
  const currentPage = window.location.pathname.split('/').pop() || 'index.php';
  
  // Get all nav links
  const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
  
  // Remove active class from all links
  navLinks.forEach(link => {
    link.classList.remove('active');
  });
  
  // Add active class to the current page link
  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPage || (currentPage === '' && href === 'index.php')) {
      link.classList.add('active');
    }
  });
});
</script>
</body>
</html>