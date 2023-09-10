<html>
    <?php
    include("header.php");
    ?>

<body>
    <body style="background-color: rgb(198, 242, 248) ;">
    <script>
var style = document.createElement('link');
style.rel = 'stylesheet';
style.href = 'checkout.css';

document.head.appendChild(style);
    </script>

       <?php
       include("nav.php");
       ?>
      
<h1>Checkout Form</h1>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form  onsubmit="return displaySuccessMessage();">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" required pattern="[A-Za-z]{3,20}">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" required
                                pattern="/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/;" >
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" required pattern="[A-Z a-z]" >
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" required pattern="[A-Z a-z]{4,}">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" required pattern="[A-Za-z]">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" required pattern="[0-9]{6}">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" required pattern="[A-Za-z]{3,20}">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" required pattern="[0-9]{12}">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" required pattern="[0-9]{10}">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" required pattern="[0-9]{4}" >
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" required pattern="[0-9]{11}">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn"  id="placeOrderBtn">
      </form>
    </div>
  </div>
 
</div>
<div id="successMessage" style="display: none;">Order placed successfully!</div>
<?php include('footer.php');?>
  
  <!-- script -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();

  </script>
  
<script>
  function displaySuccessMessage() {
  // Your form processing logic here

  // Display success message
  var successMessage = document.getElementById("successMessage");
  successMessage.style.display = "block";

  // Prevent the form from actually submitting (we'll assume success)
  return false;
}

</script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <script src="assets/script.js"></script>
</body>
</html>

