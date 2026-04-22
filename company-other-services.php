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
        body { font-family: 'Segoe UI', sans-serif; }

        .hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                        url('./images/slider-image1.png') center/cover no-repeat;
            color: #fff;
            padding: 100px 0;
            text-align: center;
        }

        .service-card {
            border: none;
            border-radius: 15px;
            transition: 0.3s;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .icon {
            font-size: 40px;
            color: #0dcaf0;
        }

        .section-title {
            font-weight: bold;
            margin-bottom: 30px;
        }

        .cta {
            background: #0dcaf0;
            color: white;
            padding: 50px 20px;
            text-align: center;
        }

        .cta a {
            background: white;
            color: #0dcaf0;
            padding: 10px 25px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
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


<!-- HERO -->
<section class="hero">
    <div class="container">
        <h2 class="fw-bold">Company & Other Services</h2>
        <p class="mt-3">Complete business setup & compliance solutions</p>
    </div>
</section>

<!-- COMPANY SERVICES -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center section-title">Company Registration Services</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon mb-3">🏢</div>
                    <h5>Private Limited Company</h5>
                    <p>Register your Pvt Ltd company quickly and easily.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon mb-3">👥</div>
                    <h5>Partnership Firm</h5>
                    <p>Legal partnership firm registration with documentation.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon mb-3">👤</div>
                    <h5>Proprietorship</h5>
                    <p>Start your own business with sole proprietorship.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- OTHER SERVICES -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center section-title">Other Services</h2>

        <div class="row g-4">

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon mb-3">📜</div>
                    <h5>MSME Registration</h5>
                    <p>Register your business under MSME/Udyam scheme.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon mb-3">🔖</div>
                    <h5>Trademark Registration</h5>
                    <p>Protect your brand with trademark registration.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon mb-3">📑</div>
                    <h5>Business Compliance</h5>
                    <p>Ensure legal compliance for your business operations.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon mb-3">📊</div>
                    <h5>Project Reports</h5>
                    <p>Detailed financial reports for loans & approvals.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon mb-3">💬</div>
                    <h5>Business Consultation</h5>
                    <p>Expert advice for startups and growing businesses.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon mb-3">📁</div>
                    <h5>Document Support</h5>
                    <p>Complete assistance with legal documentation.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta">
    <h2>Start Your Business Today</h2>
    <p>We help you register and grow your company hassle-free</p>
    <a href="contact.php">Get Started</a>
</section>

<?php include('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>