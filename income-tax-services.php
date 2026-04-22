<?php include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Shivoham Consultancy Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css"/>
    
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }

        .hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                        url('./images/slider-image1.png') center/cover no-repeat;
            color: #fff;
            padding: 100px 0;
            text-align: center;
        }

        .service-card {
            border: none;
            transition: 0.3s;
            border-radius: 15px;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .icon {
            font-size: 40px;
            color: #0d6efd;
        }

        .cta {
            background: #6abcf6;
            color: white;
            padding: 50px 20px;
            text-align: center;
        }

        .cta a {
            background: white;
            color: #0d6efd;
            padding: 10px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
        }

        @media (max-width: 768px) {
            .hero {
                padding: 70px 20px;
            }
        }
    </style>
<!-- floating buttons -->
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


<!-- HERO SECTION -->
<section class="hero">
    <div class="container">
        <h2 class="fw-bold">Income Tax Services</h2>
        <p class="mt-3">Expert solutions for filing, compliance & tax planning</p>
    </div>
</section>

<!-- ABOUT SECTION -->
<section class="py-5">
    <div class="container text-center">
        <h2>Why Choose Our Income Tax Services?</h2>
        <p>
            We provide professional Income Tax services including filing returns, tax planning, and compliance.
            Our goal is to minimize your tax liability while ensuring complete legal compliance.
        </p>
    </div>
</section>

<!-- SERVICES -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon mb-3">💼</div>
                    <h5>ITR Filing</h5>
                    <p>Accurate and timely filing of Income Tax Returns for individuals & businesses.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon mb-3">📊</div>
                    <h5>Tax Planning</h5>
                    <p>Smart tax-saving strategies to reduce liabilities and maximize savings.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon mb-3">📑</div>
                    <h5>Notice Handling</h5>
                    <p>Professional support in responding to Income Tax notices and scrutiny cases.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon mb-3">🏢</div>
                    <h5>Business Tax Filing</h5>
                    <p>Complete tax filing solutions for companies, firms, and startups.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon mb-3">💰</div>
                    <h5>Refund Assistance</h5>
                    <p>Track and process your Income Tax refunds quickly and efficiently.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon mb-3">📁</div>
                    <h5>Documentation Support</h5>
                    <p>Help with proper documentation and compliance for smooth tax filing.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta">
    <h2>Need Help with Income Tax?</h2>
    <p>Get expert consultation today</p>
    <a href="contact.php">Contact Us</a>
</section>

<!-- FOOTER -->
<?php include('footer.php'); ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>