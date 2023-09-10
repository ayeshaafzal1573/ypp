<!DOCTYPE html>
<html lang="en">

<?php
include("header.php");
?>
<body style="background-color:  rgb(198, 242, 248);">
<?php
include("nav.php");
include("cart.php");
?>
    <!-- banner starts -->
    <div class="container">
        <div class="row mt-1">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
            <div class="gif-container">
                    <img class="gif-animation" src="assets/image/doggif.gif" alt="GIF" width="100px">
                </div>
            </div>
        </div>
    </div>

    <div class="container" data-aos="fade-up">
        <div class="row mt-5">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1 class="banner-heading">Providing a <span>stress-free</span> <br> Pet Experience <img
                        src="assets/image/meal-unscreen.gif" alt="GIF" class="cat-gif"></h1>

            </div>
        </div>
    </div>

    <div class="container" data-aos="zoom-in">
        <div class="row">
            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 mt-4">
                <img src="assets/image/paws.png" alt="Paws" class="home-paw">

            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 justify-content-center mt-5">
                <img src="assets/image/HOME PAW.png" alt="Home Banner" class="home-banner-img">
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3">
                <img src="assets/image/paws.png" alt="Paw" class="home-paw2">
            </div>

        </div>
    </div>

    <!-- banner end -->

    <!-- start services -->
    <div class="container">
        <div class="row mt-4">
            <h1 class="petservice-heading">Our Pet Services</h1>
            <p class="service-para">We value high-quality care and stable,reliable <br> relationships with our clients
                and thiers pets.</p>
        </div>
    </div>
    <div class="container w-100" data-aos="fade-up">
        <div class="row justify-content-center mt-5 mb-5">
            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3" id="grooming">
                <div class="grooming-imgbg mt-2">
                    <img src="assets/image/grooming.png" alt="Award" class="grooming-img">
                </div>
                <h5 style="text-align: center;"> <a href="grooming.php"
                        style="text-decoration: none;color: black;">"Grooming"</a></h6>
                    <p class="grooming-para">Clean and freshen pet hair by washing,shampooing,and conditioning it.</p>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3 " id="vaccination">
                <div class="vaccination-imgbg mt-2">
                    <img src="assets/image/vaccination.png" alt="Award" class="grooming-img ">
                </div>
                <h5 style="text-align: center;"><a href="accessories.php"
                        style="text-decoration: none;color: black;">"Accessories"</a></h5>
                <p class="grooming-para">Collars, leashes, toys, beds, and more - pamper your furry friend in style!</p>
            </div>
            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3" id="food">
                <div class="food-imgbg mt-2">
                    <img src="assets/image/cat-food.png" alt="Award" class="grooming-img ">
                </div>
                <h5 style="text-align: center;"><a href="food.php"
                        style="text-decoration: none;color: black;">"Food"</a></h5>
                <p class="grooming-para">Pet food supports their growth,energy and <br>immune health. </p>
            </div>

            <div class="col-sm-3 col-md-3 col-lg-3 col-xl-3" id="medicine">
                <div class="medicine-imgbg mt-2">
                    <img src="assets/image/medicine.png" alt="Award" class="grooming-img ">
                </div>
                <h5 style="text-align: center;"> <a href="medicine.php"
                        style="text-decoration: none;color: black;">"Medicine"</a> </h5>
                <p class="grooming-para">Trust the expertise of veternarians to safeguard your pet's health.</p>
            </div>
        </div>
    </div>

    </div>
    </div>
    </div>

    <!-- bestfriend -->
    <div class="container" data-aos="flip-up">
        <div class="row">
            <div class="bestfriend-img">
                <img src="assets/image/bhtsaredoggy.png" alt="" class="bestfriend-img">
            </div>
        </div>
    </div>

    <!-- happy section -->
    <div class="container" data-aos="zoom-in">
        <div class="row">
            <h1 class="happy-heading">We Keep Them Happy</h1>
            <p class="happy-para mt-3">Our vibrant and captivating website banner invites you into <br>a world of furry
                friends and endless joy. </p>
        </div>
    </div>
    <?php include('footer.php');?>








    <!-- script -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();

        // cart
let openShopping = document.querySelector('.shopping');
let closeShopping = document.querySelector('.closeShopping');
let list = document.querySelector('.list');
let listCard = document.querySelector('.listCard');
let body = document.querySelector('body');
let total = document.querySelector('.total');
let quantity = document.querySelector('.quantity');


if (openShopping) {
  openShopping.addEventListener('click', () => {
    body.classList.add('active');
  });
}

/*openShopping.addEventListener('click', ()=>{
    body.classList.add('active');
})*/
if(closeShopping) {
  closeShopping.addEventListener('click', ()=>{
    body.classList.remove('active');
  });
}

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <script src="assets/script.js"></script>
</body>

</html>