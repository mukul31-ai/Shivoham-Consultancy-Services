<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shivoham Consultancy Services</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css"/>
    
<script>
const images = document.querySelectorAll(".gallery-item img");
const lightbox = document.getElementById("lightbox");
const lightboxImg = document.getElementById("lightbox-img");
const closeBtn = document.querySelector(".close");

images.forEach(img => {
  img.addEventListener("click", () => {
    lightbox.style.display = "flex";
    lightboxImg.src = img.src;
  });
});

closeBtn.onclick = () => {
  lightbox.style.display = "none";
};
</script>
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
        <?php include 'header.php'; ?>
    
<!-- HERO -->
<section class="hero">
    <div class="container">
        <h2 class="fw-bold">Home > Gallery</h2>
        <p class="mt-3">Accurate filing, compliance & expert TDS solutions</p>
    </div>
</section>

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

<section class="gallery-section">
  <div class="container">

    <h2 class="section-title">Our Gallery</h2>
    <p class="section-subtitle">A glimpse of our work, team, and professional environment</p>

    <div class="gallery-grid">

      <!-- Image 1 -->
      <div class="gallery-item">
        <img src="./images/g1.jpg" alt="Gallery Image">
        <div class="overlay">Office Work</div>
      </div>

      <!-- Image 2 -->
      <div class="gallery-item">
        <img src="./images/g2.jpg" alt="Gallery Image">
        <div class="overlay">Client Meeting</div>
      </div>

      <!-- Image 3 -->
      <div class="gallery-item">
        <img src="./images/g3.jpg" alt="Gallery Image">
        <div class="overlay">Team Discussion</div>
      </div>

      <!-- Image 4 -->
      <div class="gallery-item">
        <img src="./images/g4.jpg" alt="Gallery Image">
        <div class="overlay">Workspace</div>
      </div>

      <!-- Image 5
      <div class="gallery-item">
        <img src="images/gallery5.jpg" alt="Gallery Image">
        <div class="overlay">Consultation</div>
      </div>

       Image 6
      <div class="gallery-item">
        <img src="images/gallery6.jpg" alt="Gallery Image">
        <div class="overlay">Professional Services</div>
      </div> -->

    </div>

  </div>
</section>
<div id="lightbox">
  <span class="close">&times;</span>
  <img id="lightbox-img">
</div>

    <?php include 'footer.php'; ?>
</body>
</html>