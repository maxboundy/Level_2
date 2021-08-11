<?php include("head_nav.html"); ?>
        
        <div class="box main">
            <h2>Fire and Living®</h2>

            

<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <div class="numbertext">1 / 5</div>
    <img src="Images/fire1.png" style="width:100%">
    <div class="text">Hallway</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">2 / 5</div>
    <img src="Images/fire2.png" style="width:100%">
    <div class="text">Hanging lights</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 5</div>
    <img src="Images/fire3.png" style="width:100%">
    <div class="text">Living room</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 5</div>
    <img src="Images/fire4.png" style="width:100%">
    <div class="text">Living room</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">5 / 5</div>
    <img src="Images/fire5.png" style="width:100%">
    <div class="text">Living room</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
</div>

<script> var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

            
        </div>    <!-- / main -->
        
        <div class="box side">
            <h2>Who we are...</h2>

            <p>
               Since 2000, I’ve been proudly providing top notch Fire and Living services in the Warkworth & further Auckland area. I am a licensed and insured professional that can handle whatever you need for your home or office. I bring my workshop right to you so I can get to work quickly on any job, at any location. From small renovations to large scale outdoor work, your satisfaction is guaranteed.
            </p>
            <img src="Images/Me.png" style="width:100%">
            <img src="Images/Me2.png" style="width:100%">
            <img src="Images/Me3.png" style="width:100%">


                
        </div>  <!-- / side bar -->

<?php include("footer.html"); ?>
        
