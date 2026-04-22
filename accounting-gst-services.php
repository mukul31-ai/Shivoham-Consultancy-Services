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
        }

        .accounting-icon { color: #fd7e14; }
        .gst-icon { color: #6f42c1; }

        .section-title {
            font-weight: bold;
            margin-bottom: 30px;
        }

        .cta {
            background: #32baeb;
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
        <h2 class="fw-bold">Accounting & GST Services</h2>
        <p class="mt-3">Complete financial & tax solutions for your business</p>
    </div>
</section>

<!-- ACCOUNTING SECTION -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center section-title">Accounting Services</h2>
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon accounting-icon mb-3">📒</div>
                    <h5>Bookkeeping</h5>
                    <p>Maintain daily financial records accurately.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon accounting-icon mb-3">📊</div>
                    <h5>Financial Reporting</h5>
                    <p>Profit & loss statements and balance sheets.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon accounting-icon mb-3">💼</div>
                    <h5>Payroll Management</h5>
                    <p>Smooth salary processing with compliance.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- GST SECTION -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center section-title">GST Services</h2>
        <div class="row g-4">

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon gst-icon mb-3">📝</div>
                    <h5>GST Registration</h5>
                    <p>Quick and easy GST registration.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon gst-icon mb-3">📄</div>
                    <h5>GST Return Filing</h5>
                    <p>Monthly & quarterly GST returns.</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card service-card p-4 text-center">
                    <div class="icon gst-icon mb-3">⚖️</div>
                    <h5>GST Compliance</h5>
                    <p>Ensure compliance and avoid penalties.</p>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta">
    <h2><span>Need Help with Accounting or GST?</span></h2>
    <p>Let our experts handle your compliance</p>
    <a href="contact.php">Contact Us</a>
</section>

<?php include('footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>