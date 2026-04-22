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
            border-radius: 15px;
            transition: 0.3s;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        .icon {
            font-size: 40px;
            color: #198754;
        }

        .section-title {
            font-weight: bold;
        }

        .cta {
            background: #6abcf6;
            color: white;
            padding: 50px 20px;
            text-align: center;
        }

        .cta a {
            background: white;
            color: #00c3ff;
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

<!-- HERO -->
<section class="hero">
    <div class="container">
        <h2 class="fw-bold">TDS Return Services</h2>
        <p class="mt-3">Accurate filing, compliance & expert TDS solutions</p>
    </div>
</section>

<!-- ABOUT -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="section-title mb-4">Professional TDS Services</h2>
        <p>
            We provide complete TDS return filing services for businesses, professionals, and organizations.
            Ensure timely compliance, avoid penalties, and stay worry-free with our expert guidance.
        </p>
    </div>
</section>

<!-- SERVICES -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon mb-3">📄</div>
                    <h5>TDS Return Filing</h5>
                    <p>Quarterly TDS return filing (24Q, 26Q, 27Q) with accuracy and compliance.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon mb-3">🧾</div>
                    <h5>Form 16 / 16A</h5>
                    <p>Generation and issuance of TDS certificates for employees and vendors.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon mb-3">⚖️</div>
                    <h5>TDS Compliance</h5>
                    <p>Ensure adherence to all TDS rules and avoid penalties or legal issues.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon mb-3">📊</div>
                    <h5>TDS Calculation</h5>
                    <p>Accurate calculation of TDS on salaries, contracts, rent, and more.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon mb-3">📑</div>
                    <h5>Correction Returns</h5>
                    <p>Correction of errors in filed TDS returns including PAN & amount mismatch.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon mb-3">💼</div>
                    <h5>Consultation</h5>
                    <p>Expert advice on TDS applicability, rates, and compliance requirements.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- PROCESS -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="section-title mb-4">Our Process</h2>
        <div class="row g-3 process-row">

            <div class="col-md-3">
                <div class="process-card" style="background: url('./images/grey_screen.png') no-repeat center; background-size: cover; color: white; padding: 25px; border-radius: 8px; min-height: 150px; display: flex; flex-direction: column; justify-content: center;">
                    <h5>1. Data Collection</h5>
                    <p>Gather required financial & transaction details.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="process-card" style="background: url('./images/grey_screen.png') no-repeat center; background-size: cover; color: white; padding: 25px; border-radius: 8px; min-height: 150px; display: flex; flex-direction: column; justify-content: center;">
                    <h5>2. Verification</h5>
                    <p>Check accuracy and compliance of data.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="process-card" style="background: url('./images/grey_screen.png') no-repeat center; background-size: cover; color: white; padding: 25px; border-radius: 8px; min-height: 150px; display: flex; flex-direction: column; justify-content: center;">
                    <h5>3. Filing</h5>
                    <p>Submit TDS returns on time.</p>
                </div>
            </div>

            <div class="col-md-3">
                <div class="process-card" style="background: url('./images/grey_screen.png') no-repeat center; background-size: cover; color: white; padding: 25px; border-radius: 8px; min-height: 150px; display: flex; flex-direction: column; justify-content: center;">
                    <h5>4. Support</h5>
                    <p>Post-filing support & corrections if needed.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta">
    <h2><span>Need Help with TDS Filing?</span></h2>
    <p>We ensure accurate and timely TDS compliance</p>
    <a href="contact.php">Get Consultation</a>
</section>

<?php include('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>