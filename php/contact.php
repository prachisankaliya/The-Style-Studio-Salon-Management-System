<?php
require_once("header.php");
?>

<!-- PAGE NAME -->
<div class="bgMain mb-5">
  <div class="container">
    <div class="title">
      <h1>CONTACT</h1>
      <h5 class="text-dark">
        <a href="../php/home.php" class="name text-decoration-none">Home </a>/ Contact
      </h5>
    </div>
  </div>
</div>
<br /><br />
<div class="text-center mb-5">
  <div class="maroon titleSize">Let's Talk Beauty!</div>
  <div>Got Questions? Please, don't hesitate to get in touch with us</div>
</div>
<br /><br />
<div class="container text-center mb-5">
  <div class="row">
    <div class="col-sm-4">
      <div class="bgContact">
        <div class="icon mb-3">
          <i class="fa-solid fa-envelope fa-2x"></i>
        </div>
        <h4 class="fw-bold">Send Email</h4>
        <div class="maroonTitle">info@tss.com</div>
        <div class="maroonTitle">tss@gmail.com</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="bgContact">
        <div class="icon mb-3">
          <i class="fa-solid fa-phone-volume fa-2x"></i>
        </div>
        <h4 class="fw-bold">Call Center</h4>
        <div class="maroonTitle">(91) 9682910737</div>
        <div class="maroonTitle">(91) 7945897388</div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="bgContact">
        <div class="icon mb-3">
          <i class="fa-solid fa-location-dot fa-2x"></i>
        </div>
        <h4 class="fw-bold">Visit Anytime</h4>
        <div class="maroonTitle">
          123, ABC Apartment, XYZ Road, Vesu, Surat
        </div>
      </div>
    </div>
  </div>
</div>
<br /><br />
<div class="container">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14885.335435063273!2d72.75970111612675!3d21.13910795243902!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be05276ea0507ad%3A0x73c16cff225b784!2sVesu%2C%20Surat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1694086782544!5m2!1sen!2sin" width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<br /><br /><br />
<div class="container">
  <div class="maroon titleSize mb-4 text-center">
    Do You’ve Any Question?
  </div>
  <br />
  <form class="contactForm" action="">
    <div class="row mb-5">
      <div class="col-sm-6">
        <input type="text" id="name" name="name" class="form-control form-control-lg" placeholder="Name" />
      </div>
      <div class="col-sm-6">
        <input type="text" id="email" name="email" class="form-control form-control-lg" placeholder="Email" />
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-sm-6">
        <input type="text" id="pno" name="pno" class="form-control form-control-lg" placeholder="Phone Number" />
      </div>
      <div class="col-sm-6">
        <input type="text" id="sub" name="suv" class="form-control form-control-lg" placeholder="Your Subject" />
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-sm-12">
        <textarea class="form-control form-control-lg" name="msg" id="msg" rows="5" placeholder="Your Message"></textarea>
      </div>
    </div>
    <input type="checkbox" name="tc" id="tc" />
    <label for="tc">Accept
      <a class="contactLink" href="../php/terms.php">Terms & Conditions</a>
      And Privacy Policy.</label><br /><br />
    <button type="submit" name="submit" class="myBtn px-4 py-2 mb-4">
      Send Message
    </button>
  </form>
  <br /><br /><br />
</div>

<?php
require_once("footer.php");
?>