<?php include('header.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Shivoham Consultancy Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css"/><style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Poppins', sans-serif;
    background: linear-gradient(135deg, #0f172a 0%, #1a2844 100%);
    color: #fff;
    overflow-x: hidden;
}

/* HERO */
.hero {
    height: 60vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    background: linear-gradient(135deg, rgba(15,23,42,0.8), rgba(30,41,59,0.8)), url('./images/slider-image1.png') center/cover;
    animation: fadeInDown 0.8s ease-out;
}

.hero h1 {
    font-size: 48px;
    background: linear-gradient(to right, #3190e7, #00d4ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: slideInUp 0.8s ease-out;
}

.hero p {
    color: #cbd5e1;
    margin-top: 10px;
    font-size: 18px;
    animation: slideInUp 0.8s ease-out 0.2s both;
}

/* ANIMATIONS */
@keyframes fadeInDown {
    from { opacity: 0; transform: translateY(-30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes slideInUp {
    from { opacity: 0; transform: translateY(30px); }
    to { opacity: 1; transform: translateY(0); }
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes scaleIn {
    from { opacity: 0; transform: scale(0.95); }
    to { opacity: 1; transform: scale(1); }
}

@keyframes pulse {
    0%, 100% { transform: scale(1); }
    50% { transform: scale(1.05); }
}

/* TAB NAVIGATION */
.service-tabs {
    padding: 50px 0;
    background: rgb(255, 255, 255);
}

.tabs-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}

.tabs-header {
    display: flex;
    gap: 10px;
    justify-content: center;
    flex-wrap: wrap;
    margin-bottom: 40px;
    animation: fadeIn 0.6s ease-out;
}

.tab-btn {
    padding: 12px 30px;
    background: rgba(255,255,255,0.05);
    border: 2px solid rgba(49,144,231,0.3);
    color: #cbd5e1;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.4s ease;
    font-weight: 600;
    font-size: 14px;
    text-transform: uppercase;
    white-space: nowrap;
}

.tab-btn:hover {
    border-color: #3190e7;
    color: #3190e7;
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(49,144,231,0.2);
}

.tab-btn.active {
    background: linear-gradient(135deg, #3190e7, #00d4ff);
    color: #fff;
    border-color: #3190e7;
    box-shadow: 0 15px 40px rgba(49,144,231,0.3);
}

/* TAB CONTENT */
.tab-content {
    display: none;
    animation: scaleIn 0.5s ease-out;
}

.tab-content.active {
    display: block;
}

/* SECTION */
.service-section {
    margin-bottom: 50px;
}

.section-title {
    font-size: 32px;
    margin-bottom: 40px;
    text-align: center;
    background: linear-gradient(to right, #3190e7, #00d4ff);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: slideInUp 0.6s ease-out;
}

/* GRID */
.grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 30px;
    animation: fadeIn 0.8s ease-out;
}

/* CARD */
.card {
    background: rgb(45, 194, 252);
    backdrop-filter: blur(12px);
    border-radius: 16px;
    padding: 30px;
    transition: all 0.4s ease;
    border: 2px solid rgba(0, 46, 251, 0.2);
    position: relative;
    overflow: hidden;
    animation: slideInUp 0.6s ease-out forwards;
    opacity: 0;
}

.card:nth-child(1) { animation-delay: 0.1s; }
.card:nth-child(2) { animation-delay: 0.2s; }
.card:nth-child(3) { animation-delay: 0.3s; }
.card:nth-child(4) { animation-delay: 0.4s; }
.card:nth-child(5) { animation-delay: 0.5s; }
.card:nth-child(6) { animation-delay: 0.6s; }

/* Glow effect */
.card::before {
    content: "";
    position: absolute;
    width: 300%;
    height: 300%;
    background: radial-gradient(circle, rgba(49,144,231,0.2), transparent);
    top: -50%;
    left: -50%;
    opacity: 0;
    transition: 0.6s;
}

.card:hover::before {
    opacity: 1;
}

.card:hover {
    transform: translateY(-12px) scale(1.03);
    border-color: #3190e7;
    box-shadow: 0 20px 50px rgba(49,144,231,0.2);
}

.card-icon {
    font-size: 50px;
    margin-bottom: 15px;
    display: inline-block;
    animation: pulse 2s ease-in-out infinite;
}

.card h3 {
    margin-bottom: 15px;
    color: #fff;
    font-size: 24px;
    font-weight: 600;
}

.card p {
    color: #fff;
    line-height: 1.6;
    font-size: 16px;
}

/* CTA SECTION */
.cta-section {
    background: linear-gradient(135deg, rgba(49,144,231,0.1), rgba(0,212,255,0.05));
    padding: 60px 0;
    text-align: center;
    margin-top: 50px;
    border-top: 2px solid rgba(49,144,231,0.3);
    animation: fadeIn 0.6s ease-out;
}

.cta-section h2 {
    font-size: 32px;
    margin-bottom: 15px;
    color: #3190e7;
}

.cta-section p {
    color: #cbd5e1;
    margin-bottom: 25px;
    font-size: 16px;
}

.cta-btn {
    display: inline-block;
    background: linear-gradient(135deg, #3190e7, #00d4ff);
    color: #fff;
    padding: 15px 40px;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 700;
    transition: all 0.4s ease;
    border: none;
    cursor: pointer;
    box-shadow: 0 10px 30px rgba(49,144,231,0.3);
}

.cta-btn:hover {
    transform: translateY(-3px);
    box-shadow: 0 15px 45px rgba(49,144,231,0.4);
    color: #fff;
}

/* FLOATING BUTTONS */
.floating-btns {
    position: fixed;
    bottom: 30px;
    right: 30px;
    display: flex;
    flex-direction: column;
    gap: 12px;
    z-index: 999;
}

.floating-btns a {
    width: 60px;
    height: 60px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    font-size: 24px;
    text-decoration: none;
    box-shadow: 0 4px 15px rgba(0,0,0,0.3);
    transition: all 0.3s ease;
}

.call-btn {
    background: linear-gradient(135deg, #3190e7, #0aafe7);
}

.whatsapp-btn {
    background: linear-gradient(135deg, #25D366, #1a8c4e);
}

.floating-btns a:hover {
    transform: scale(1.15);
    box-shadow: 0 8px 25px rgba(0,0,0,0.4);
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .hero {
        height: 40vh;
    }

    .hero h1 {
        font-size: 32px;
    }

    .hero p {
        font-size: 14px;
    }

    .tabs-header {
        gap: 8px;
        justify-content: flex-start;
        flex-wrap: nowrap;
        overflow-x: auto;
        padding-bottom: 6px;
    }

    .tab-btn {
        padding: 10px 20px;
        font-size: 12px;
        flex: 0 0 auto;
    }

    .section-title {
        font-size: 24px;
    }

    .grid {
        grid-template-columns: 1fr;
    }

    .card {
        padding: 20px;
    }

    .floating-btns {
        bottom: 20px;
        right: 20px;
    }

    .floating-btns a {
        width: 50px;
        height: 50px;
        font-size: 20px;
    }
}

@media (max-width: 480px) {
    .hero h1 {
        font-size: 24px;
    }

    .section-title {
        font-size: 20px;
    }

    .tab-btn {
        width: auto;
    }
}
</style>

<style>
body {
  font-family: 'Poppins', sans-serif;
  margin: 0;
  background: #f7f9fc;
  color: #333;
}

.section {
  padding: 60px 20px;
  max-width: 1200px;
  margin: auto;
}

.section h2 {
  text-align: center;
  font-size: 36px;
  margin-bottom: 40px;
  color: #1a2a44;
}

/* Grid */
.services-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
  gap: 25px;
}

/* Card */
.service-card {
  background: #fff;
  border-radius: 12px;
  padding: 25px;
  box-shadow: 0 8px 20px rgba(0,0,0,0.05);
  transition: all 0.3s ease;
  opacity: 0;
  transform: translateY(30px);
}

.service-card.visible {
  opacity: 1;
  transform: translateY(0);
}

.service-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 30px rgba(0,0,0,0.1);
}

/* Title */
.service-card h3 {
  font-size: 18px;
  margin-bottom: 15px;
  color: #0eafee;
}

/* List */
.service-card ul {
  padding-left: 18px;
  margin: 0;
}

.service-card ul li {
  margin-bottom: 8px;
  font-size: 14px;
}

/* Footer */
.footer {
  text-align: center;
  margin-top: 50px;
  font-size: 14px;
  color: #555;
}

/* Responsive tweaks */
@media(max-width: 600px) {
  .section h2 {
    font-size: 28px;
  }
}
</style>
</head>

<body>
<!-- ?php include('header.php'); ? -->
<!-- FLOATING BUTTONS -->
<div class="floating-btns">
    <a href="tel:+919876543210" class="call-btn" title="Call Us">
        <i class="fas fa-phone"></i>
    </a>
    <a href="https://wa.me/919876543210" target="_blank" class="whatsapp-btn" title="Chat on WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>
</div>

<!-- HERO SECTION -->
<section class="hero">
    <div class="container">
        <h1>Our Services</h1>
        <p>Complete business solutions tailored for your success</p>
    </div>
</section>

<!-- TAB NAVIGATION & CONTENT -->
<section class="service-tabs">
    <div class="tabs-container">
        <div class="tabs-header">
            <button class="tab-btn active" data-tab="income-tax">
                <i class="fas fa-file-invoice-dollar"></i> Income Tax
            </button>
            <button class="tab-btn" data-tab="tds">
                <i class="fas fa-receipt"></i> TDS Returns
            </button>
            <button class="tab-btn" data-tab="accounting">
                <i class="fas fa-calculator"></i> Accounting & GST
            </button>
            <button class="tab-btn" data-tab="company">
                <i class="fas fa-building"></i> Company & Others
            </button>
        </div>

        <!-- INCOME TAX TAB -->
        <div class="tab-content active" id="income-tax">

            <div class="service-section">
                <h2 class="section-title">Income Tax Services</h2>
                <div class="grid">
                    <div class="card">
                        <div class="card-icon">💼</div>
                        <h3 style = "color: #ffffff;">ITR Filing</h3>
                        <p style = "font-size: 16px; color: #ffffff;">Accurate and timely filing of Income Tax Returns for individuals & businesses.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">📊</div>
                        <h3 style = "color: #ffffff;">Tax Planning</h3>
                        <p style = "font-size: 16px; color: #ffffff;">Smart tax-saving strategies to reduce liabilities and maximize savings.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">📑</div>
                        <h3 style = "color: #ffffff;">Notice Handling</h3>
                        <p style = "font-size: 16px; color: #ffffff;">Professional support in responding to Income Tax notices and scrutiny cases.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">🏢</div>
                        <h3 style = "color: #ffffff;">Business Tax Filing</h3>
                        <p style = "font-size: 16px; color: #ffffff;">Complete tax filing solutions for companies, firms, and startups.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">💰</div>
                        <h3 style = "color: #ffffff;">Refund Assistance</h3>
                        <p style = "font-size: 16px; color: #ffffff;">Track and process your Income Tax refunds quickly and efficiently.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">📁</div>
                        <h3 style = "color: #ffffff;">Documentation Support</h3>
                        <p style = "font-size: 16px; color: #ffffff;">Help with proper documentation and compliance for smooth tax filing.</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- TDS RETURNS TAB -->
        <div class="tab-content" id="tds">

            <div class="service-section">
                <h2 class="section-title">TDS Return Services</h2>
                <div class="grid">
                    <div class="card">
                        <div class="card-icon">📄</div>
                        <h3>TDS Return Filing</h3>
                        <p>Quarterly TDS return filing (24Q, 26Q, 27Q) with accuracy and compliance.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">🧾</div>
                        <h3>Form 16 / 16A</h3>
                        <p>Generation and issuance of TDS certificates for employees and vendors.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">⚖️</div>
                        <h3>TDS Compliance</h3>
                        <p>Ensure adherence to all TDS rules and avoid penalties or legal issues.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">📊</div>
                        <h3>TDS Calculation</h3>
                        <p>Accurate calculation of TDS on salaries, contracts, rent, and more.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">📑</div>
                        <h3>Correction Returns</h3>
                        <p>Correction of errors in filed TDS returns including PAN & amount mismatch.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">💼</div>
                        <h3>TDS Consultation</h3>
                        <p>Expert advice on TDS applicability, rates, and compliance requirements.</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- ACCOUNTING & GST TAB -->
        <div class="tab-content" id="accounting">

            <div class="service-section">
                <h2 class="section-title">Accounting Services</h2>
                <div class="grid">
                    <div class="card">
                        <div class="card-icon">📒</div>
                        <h3>Bookkeeping</h3>
                        <p>Maintain daily financial records accurately and efficiently.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">📊</div>
                        <h3>Financial Reporting</h3>
                        <p>Profit & loss statements and balance sheets for informed decisions.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">💼</div>
                        <h3>Payroll Management</h3>
                        <p>Smooth salary processing with full compliance requirements.</p>
                    </div>
                </div>
            </div>

            <div class="service-section">
                <h2 class="section-title">GST Services</h2>
                <div class="grid">
                    <div class="card">
                        <div class="card-icon">📝</div>
                        <h3>GST Registration</h3>
                        <p>Quick and easy GST registration for your business.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">📄</div>
                        <h3>GST Return Filing</h3>
                        <p>Monthly & quarterly GST returns with complete accuracy.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">⚖️</div>
                        <h3>GST Compliance</h3>
                        <p>Ensure compliance and avoid penalties and issues.</p>
                    </div>
                </div>
            </div>

        </div>

        <!-- COMPANY & OTHERS TAB -->
        <div class="tab-content" id="company">

            <div class="service-section">
                <h2 class="section-title">Company Registration</h2>
                <div class="grid">
                    <div class="card">
                        <div class="card-icon">🏢</div>
                        <h3>Private Limited Company</h3>
                        <p>Register your Pvt Ltd company quickly and easily.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">👥</div>
                        <h3>Partnership Firm</h3>
                        <p>Legal partnership firm registration with all documentation.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">👤</div>
                        <h3>Proprietorship</h3>
                        <p>Start your own business with sole proprietorship setup.</p>
                    </div>
                </div>
            </div>

            <div class="service-section">
                <h2 class="section-title">Other Services</h2>
                <div class="grid">
                    <div class="card">
                        <div class="card-icon">📜</div>
                        <h3>MSME Registration</h3>
                        <p>Register your business under MSME/Udyam scheme.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">🔖</div>
                        <h3>Trademark Registration</h3>
                        <p>Protect your brand with trademark registration.</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">📑</div>
                        <h3>Business Compliance</h3>
                        <p>Ensure legal compliance for your business operations.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="section">
  <h2>Our Services also includes:</h2>

  <div class="services-grid">

    <div class="service-card">
      <h3 style="font-size: 24px;">Company Registration</h3>
      <ul>
        <b><li>Private Limited Company</li>
        <li>LLP Registration</li>
        <li>Partnership Firm</li>
        <li>Startup India</li>
        <li>MSME Registration</li>
        <li>IEC Code</li></b>
      </ul>
    </div>

    <div class="service-card">
      <h3 style="font-size: 24px;">Compliance</h3>
      <ul>
        <b><li>Annual Compliance</li>
        <li>Accounting Services</li>
        <li>Director Changes</li>
        <li>Share Transfers</li>
        <li>LLP Agreement Changes</li></b>
      </ul>
    </div>

    <div class="service-card">
      <h3 style="font-size: 24px;">Registrations & Certifications</h3>
      <ul>
        <b><li>RERA Registration</li>
        <li>Trademark Registration</li>
        <li>MSME & EPF</li>
        <li>Shop License</li></b>
      </ul>
    </div>

    <div class="service-card">
      <h3 style="font-size: 24px;">NGO Services</h3>
      <ul>
        <b><li>Section 8 Company</li>
        <li>12A & 80G</li>
        <li>FCRA Registration</li>
        <li>NGO Accounting</li></b>
      </ul>
    </div>

    <div class="service-card">
      <h3 style="font-size: 24px;">Government Licenses</h3>
      <ul>
        <b><li>Drug License</li>
        <li>ISO Certification</li>
        <li>Professional Tax</li></b>
      </ul>
    </div>

    <div class="service-card">
      <h3 style="font-size: 24px;">FSSAI Services</h3>
      <ul>
        <b><li>FSSAI Registration</li>
        <li>State & Central License</li>
        <li>Renewal & Approval</li></b>
      </ul>
    </div>

    <div class="service-card">
      <h3 style="font-size: 24px;">Legal Agreements</h3>
      <ul>
        <b><li>Partnership Deed</li>
        <li>MoU</li>
        <li>NDA</li>
        <li>Shareholder Agreement</li></b>
      </ul>
    </div>

    <div class="service-card">
      <h3 style="font-size: 24px;">Taxation</h3>
      <ul>
        <b><li>ITR Filing</li>
        <li>GST Registration</li>
        <li>GST Returns</li>
        <li>E-Way Bill</li></b>
      </ul>
    </div>

    <div class="service-card">
      <h3 style="font-size: 24px;">Business Consulting</h3>
      <ul>
        <b><li>Startup Planning</li>
        <li>Pitch Deck</li>
        <li>CSR Registration</li></b>
      </ul>
    </div>

    <div class="service-card">
      <h3 style="font-size: 24px;">Professional Services</h3>
      <ul>
        <b><li>CA Services</li>
        <li>Financial Consulting</li>
        <li>Legal Support</li></b>
      </ul>
    </div>

  </div>

  

</section>

<script>
// Scroll animation
const cards = document.querySelectorAll('.service-card');

const serviceCardsObserver = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if(entry.isIntersecting){
      entry.target.classList.add('visible');
    }
  });
}, { threshold: 0.2 });

cards.forEach(card => serviceCardsObserver.observe(card));
</script>




<!-- CTA SECTION -->
<section class="cta-section">
    <div class="container">
        <h2>Need Professional Assistance?</h2>
        <p>Get expert consultation and support for all your business needs</p>
        <a href="contact.php" class="cta-btn">Contact Us Now</a>
    </div>
</section>

<!-- FOOTER -->
<!-- <php include('footer.php'); ? -->

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
// TAB SWITCHING FUNCTIONALITY
document.querySelectorAll('.tab-btn').forEach((button) => {
    button.addEventListener('click', function() {
        const tabName = this.getAttribute('data-tab');
        const targetTab = document.getElementById(tabName);

        if (!targetTab) {
            return;
        }

        // Remove active class from all buttons and contents
        document.querySelectorAll('.tab-btn').forEach(btn => btn.classList.remove('active'));
        document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));

        // Add active class to clicked button and corresponding content
        this.classList.add('active');
        targetTab.classList.add('active');
    });
});

// GET TAB FROM URL PARAMETER
window.addEventListener('DOMContentLoaded', function() {
    const urlParams = new URLSearchParams(window.location.search);
    const tab = urlParams.get('tab');
    
    if (tab) {
        // Find and click the button with the corresponding data-tab
        const tabButton = document.querySelector(`[data-tab="${tab}"]`);
        if (tabButton) {
            tabButton.click();
        }
    }
});

// PAGE SCROLL ANIMATION
const tabCardsObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.style.animation = 'slideInUp 0.6s ease-out forwards';
        }
    });
}, { threshold: 0.1 });

document.querySelectorAll('.card').forEach(card => {
    tabCardsObserver.observe(card);
});
</script>
<?php include('footer.php'); ?>
</body>
</html>