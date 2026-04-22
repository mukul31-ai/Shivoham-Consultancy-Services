<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Shivoham Consultancy Services</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css"/>

    <!-- floating buttons -->
<style>
  .hero {
            background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
                        url('./images/slider-image1.png') center/cover no-repeat;
            color: #fff;
            padding: 120px 0;
            text-align: center;
        }
  
  .hero h2 {
    font-size: 44px;
    font-weight: 700;
    margin-bottom: 15px;
  }
  
  .hero p {
    font-size: 18px;
    line-height: 1.8;
    margin-top: 0;
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
        <h2 class="fw-bold">Home > About</h2>
        <p class="mt-3">Accurate filing, compliance & expert TDS solutions</p>
    </div>
</section>
    <section id="about">
        <div class="container">
            <h2><span>About Us</span></h2>
            <h6><span>Shivoham Consultancy Services</span> is a leading provider of comprehensive financial and business solutions. With a commitment to excellence and a client-centric approach, we offer a wide range of services including income tax consulting, TDS return filing, accounting and GST services, as well as company registration and compliance. Our team of experienced professionals is dedicated to helping individuals and businesses navigate the complexities of finance and taxation, ensuring compliance while maximizing growth opportunities. At Shivoham Consultancy Services, we pride ourselves on delivering personalized solutions that meet the unique needs of each client, fostering long-term relationships built on trust and success.</h6>
        </div>
    </section>

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

    <!-- Why choose us section-->

    <section class="about-premium">
  <div class="container">

    <!-- Tabs -->
    <div class="tabs">
      <button class="tab active" data-tab="who-we-are">Who We Are</button>
      <button class="tab" data-tab="why-choose-us">Why Choose Us</button>
      <button class="tab" data-tab="how-different">How We Are Different</button>
    </div>

    <div class="content-wrapper">

      <!-- TAB 1: WHO WE ARE -->
      <div class="tab-content active" id="who-we-are">
        <div class="about-card">
          <h2>Who We Are?</h2>
          <p>
            We are prominent Accounts Professionals in India. We offer services in Patna (Bihar) 
            and other major cities like accounts outsourcing, auditing, company formation, 
            business taxation, corporate compliance, startup support, foreign company registration, 
            and taxation of expatriates.
          </p>
        </div>

        <div class="skills">
          <div class="skill">
            <div class="skill-header">
              <span>Finance</span>
              <span>20%</span>
            </div>
            <div class="bar"><div style="width:20%"></div></div>
          </div>

          <div class="skill">
            <div class="skill-header">
              <span>Accounting</span>
              <span>40%</span>
            </div>
            <div class="bar"><div style="width:40%"></div></div>
          </div>

          <div class="skill">
            <div class="skill-header">
              <span>Investments</span>
              <span>60%</span>
            </div>
            <div class="bar"><div style="width:60%"></div></div>
          </div>

          <div class="skill">
            <div class="skill-header">
              <span>Stock Options</span>
              <span>80%</span>
            </div>
            <div class="bar"><div style="width:80%"></div></div>
          </div>

          <div class="skill">
            <div class="skill-header">
              <span>Tax Consultancy</span>
              <span>100%</span>
            </div>
            <div class="bar"><div style="width:100%"></div></div>
          </div>
        </div>
      </div>

      <!-- TAB 2: WHY CHOOSE US -->
      <div class="tab-content" id="why-choose-us">
        <div class="about-card">
          <h2>Why Choose Us?</h2>
          <p>
            Shivoham Consultancy Services stands out for our unwavering commitment to excellence, expertise, and client satisfaction. Our experienced team of professionals brings years of industry knowledge and a deep understanding of complex financial and taxation matters. We pride ourselves on offering personalized solutions tailored to your unique needs, whether you're an individual, startup, or established business. With a proven track record of success, timely deliverables, and competitive pricing, we ensure your financial goals are achieved efficiently. Our client-centric approach means we're always available to support your business growth with reliable, professional guidance every step of the way.
          </p>
        </div>

        <div class="skills">
          <div class="skill">
            <div class="skill-header">
              <span>Expert Guidance</span>
              <span>95%</span>
            </div>
            <div class="bar"><div style="width:95%"></div></div>
          </div>

          <div class="skill">
            <div class="skill-header">
              <span>Client Satisfaction</span>
              <span>98%</span>
            </div>
            <div class="bar"><div style="width:98%"></div></div>
          </div>

          <div class="skill">
            <div class="skill-header">
              <span>Compliance Management</span>
              <span>100%</span>
            </div>
            <div class="bar"><div style="width:100%"></div></div>
          </div>

          <div class="skill">
            <div class="skill-header">
              <span>Timely Delivery</span>
              <span>100%</span>
            </div>
            <div class="bar"><div style="width:100%"></div></div>
          </div>

          <div class="skill">
            <div class="skill-header">
              <span>Affordability</span>
              <span>92%</span>
            </div>
            <div class="bar"><div style="width:92%"></div></div>
          </div>
        </div>
      </div>

      <!-- TAB 3: HOW WE ARE DIFFERENT -->
      <div class="tab-content" id="how-different">
        <div class="about-card">
          <h2>How We Are Different?</h2>
          <p>
            What sets Shivoham Consultancy Services apart is our holistic approach to financial management and taxation. Unlike traditional firms, we combine cutting-edge technology with personalized human expertise to deliver superior results. We invest time in understanding your business thoroughly, allowing us to provide strategic insights beyond compliance. Our team stays updated with the latest tax laws and regulations, ensuring you're always ahead of the curve. We believe in transparent communication and long-term partnerships rather than one-time transactions. Our comprehensive range of services under one roof eliminates the need for multiple consultants, saving you time and money. Most importantly, we're passionate about your success and treat your financial goals as our own.
          </p>
        </div>

        <div class="skills">
          <div class="skill">
            <div class="skill-header">
              <span>Technology Integration</span>
              <span>98%</span>
            </div>
            <div class="bar"><div style="width:98%"></div></div>
          </div>

          <div class="skill">
            <div class="skill-header">
              <span>Holistic Solutions</span>
              <span>95%</span>
            </div>
            <div class="bar"><div style="width:95%"></div></div>
          </div>

          <div class="skill">
            <div class="skill-header">
              <span>Latest Knowledge</span>
              <span>100%</span>
            </div>
            <div class="bar"><div style="width:100%"></div></div>
          </div>

          <div class="skill">
            <div class="skill-header">
              <span>Transparency</span>
              <span>100%</span>
            </div>
            <div class="bar"><div style="width:100%"></div></div>
          </div>

          <div class="skill">
            <div class="skill-header">
              <span>Customer Focus</span>
              <span>99%</span>
            </div>
            <div class="bar"><div style="width:99%"></div></div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Mission & Vision -->
   <section class="introtext">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-12 text-center">
                    <h2><span>Shivoham Consultancy Services </span> </h2>
                    <p class="text-center lead">
We are prominent Accounts Professional in India. We offer services in Patna (Bihar) and other major cities in India, like accounts outsourcing, auditing, company formation in India, Business taxation, corporate compliance, starting business in India, registration of foreign companies, transfer pricing, tax due diligence, taxation of expatriates etc.</p>
                </div>
            </div>

            <div class="row vision-mission-grid">
                <div class=" vision-card">
                    <h1>Our Vision</h1>
                    <img src="./images/vision.png" alt="Vision">
                    <p>Our firm continuously strives to be the Premier Accounting and Consultancy firm that provides excellent service to our clients and an excellent quality of life for our associates.</p>
                </div>
                <div class=" mission-card">
                    <h1>Our Mission</h1>
                    <img src="./images/mission.png" alt="Mission">
                    <p>We will predominantly work with organisations in the charitable and voluntary sectors as partners to help them achieve their desired outcomes.</p>
                </div>
            </div>
        </div>
    </section>

<!-- Director desk -->
 <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!-- <div class="col-sm-3">
                    <img class="deskright" src="images/background/dir.png">
                </div> -->
                <div class="col-sm-12 text-center">
                    <h2><span>Director Desk</span></h2>
                    <h6> Shivoham Consultancy Services, in The Robust Taxation System of India, Offers an Opportunity You Can Hardly Miss. Let us help you to make profit from this Growing Market.</h6>
                    <h6><span>Shivoham Consultancy Services</span> having thorough knowledge and an understanding of Indian laws and regulations, as well as the complex corporate taxation system. Shivoham Consultancy Services team(s) have assisted many corporate and non-corporate entities in their tax compliances, completing their paperwork, getting necessary approvals, paying taxes, necessary filings and much more.</h6><br>
                <h3>M.D : M.R.S  ABHILASHA GUPTA<span style="font-weight:normal;font-size: 25px;"> (A well versed women entrepreneur SINCE 1996.)
</span></h3>
                <h3>DIRECTOR: RUPAM KUMARI<span style="font-weight:normal;font-size: 25px;"> (A very committed women entrepreneur graduated from Jharkhand University.)</span></h3>
                </div>
            </div>
        </div>
    </div>


<!-- Our Team -->

<section class="team-section">
  <div class="container">
    
    <h2 class="section-title">Meet Our Experts</h2>
    <p class="section-subtitle">Professional team delivering trusted financial solutions</p>

    <div class="team-grid">

      <!-- Member 1 -->
      <div class="team-card">
        <div class="team-img">
          <img src="images/male.png" alt="Team Member">
        </div>
        <div class="team-info">
          <h3>Arun Kumar</h3>
          <span>Chartered Accountant</span>
          <p>
           ARUN KUMAR (CA)(FCA, ISA (ica), C-CAB (ICAI), CCIDT, CC on GST Chartered Accountants in practice since 1996.)</p>
        </div>
      </div>

      <!-- Member 2 -->
      <div class="team-card">
        <div class="team-img">
          <img src="images/male.png" alt="Team Member">
        </div>
        <div class="team-info">
          <h3>Prashant Joshi</h3>
          <span>Advocate</span>
          <p>
             (LLB having experience of company law, Taxation and banking law matter since 1996.)
          </p>
        </div>
      </div>

      <!-- Member 3 -->
      <div class="team-card">
        <div class="team-img">
          <img src="images/female.png" alt="Team Member">
        </div>
        <div class="team-info">
          <h3>REENA KUMARI</h3>
          <span>Company Secretary</span>
          <p>
           (A young company secretary, well versed in Accounting and Company Law Matter.)
          </p>
        </div>
      </div>

    </div>
  </div>
</section>



    
  <?php include 'footer.php'; ?>

<script>
document.querySelectorAll('.tab').forEach(tab => {
  tab.addEventListener('click', function() {
    const tabId = this.getAttribute('data-tab');
    
    // Remove active class from all tabs and content
    document.querySelectorAll('.tab').forEach(t => t.classList.remove('active'));
    document.querySelectorAll('.tab-content').forEach(content => content.classList.remove('active'));
    
    // Add active class to clicked tab and corresponding content
    this.classList.add('active');
    document.getElementById(tabId).classList.add('active');
  });
});
</script>

</body>
</html>