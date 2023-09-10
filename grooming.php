
<!DOCTYPE html>
<html lang="en">

<?php
include("header.php");
?>
<body style="background-color: #F39BB8;">
<?php
include("nav.php");
include("cart.php");
?>



    
    <!-- GROOMING STARTS -->

    <img src="assets/image/gromingbanner.png" alt="" class="grooming-banner">

    <div class="container">
        <div class="row mt-5">
            <div class="col-4 "  data-aos="fade-up">
                <img src="assets/image/doggrooming.png" alt="" class="dog-grooming">
                <span class="boarding">Dog Boarding</span>
                <p class="mt-4"><i class="fa-solid fa-xl fa-check" style="color: #30a211;"></i> Leverage agile
                    frameworks to provide.</p>
                <p><i class="fa-solid fa-xl fa-check" style="color: #30a211;"></i> Organically grow the holistic world
                    view.</p>
                <p><i class="fa-solid fa-xl fa-check" style="color: #30a211;"></i> Bring to the table win-win survival.
                </p>
            </div>

            <div class="col-4 "  data-aos="fade-down">
                <img src="assets/image/catgrooming.png" alt="" class="dog-grooming">
                <span class="boarding">Cat Boarding</span>
                <p class="mt-4"><i class="fa-solid fa-xl fa-check" style="color: #30a211;"></i> At the end of the
                    day,going forward.</p>
                <p><i class="fa-solid fa-xl fa-check" style="color: #30a211;"></i> Capitalize on low hanging fruit to
                    identify .</p>
                <p><i class="fa-solid fa-xl fa-check" style="color: #30a211;"></i> Podcasting operational change
                    managed.</p>
            </div>
 
            <div class="col-4 "  data-aos="fade-up">
                <img src="assets/image/spa.png" alt="" class="dog-grooming img-">
                <span class="boarding">Spa & Grooming</span>
                <p class="mt-4"><i class="fa-solid fa-xl fa-check" style="color: #30a211;"></i> Taking seamless key
                    performance.</p>
                <p><i class="fa-solid fa-xl fa-check" style="color: #30a211;"></i> Collaboratively adminstrate
                    empowered.</p>
                <p><i class="fa-solid fa-xl fa-check" style="color: #30a211;"></i> Eifficiently unleash cross-media
                    information.</p>
            </div>
        </div>
    </div>

    <!-- catboarding -->
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-5">
                <img src="assets/image/catspa.jpg" alt="" class="catspa-img" data-aos="fade-down" >
            </div>
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 mt-5">
                <h1 class="catspa-head" >"Cat <span> Boarding"</span></h1>
                <ul class="faq mt-5">
                    <li class="q"> OPEN BOARDING<i class="fas fa-plus"></i></li>
                    <li class="a">Staff learn proper handling, signs, and symptoms of illness, dog expressions, and body
                        language.</li>

                    <li class="q"> PRIVATE BOARDING <i class="fas fa-plus"></i></li>
                    <li class="a">Snacks are available throughout the day and fresh water is constantly available.</li>

                    <li class="q">GROOMING <i class="fas fa-plus"></i></li>
                    <li class="a">If your dog has seperation anxiety we encourage you to bring something that smiles
                        like home .</li>
                </ul>
            </div>
        </div>
    </div>

    <!-- dogboarding -->
    <div class="container-fluid">
        <div class="row mt-5">
            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <h1 class="catspa-head">"Dog <span> Boarding"</span></h1>
                <ul class="faq mt-5">
                    <li class="q"> OPEN BOARDING<i class="fas fa-plus"></i></li>
                    <li class="a">Staff learn proper handling, signs, and symptoms of illness, dog expressions, and body
                        language.</li>

                    <li class="q"> PRIVATE BOARDING <i class="fas fa-plus"></i></li>
                    <li class="a">Snacks are available throughout the day and fresh water is constantly available.</li>

                    <li class="q">GROOMING <i class="fas fa-plus"></i></li>
                    <li class="a">If your dog has seperation anxiety we encourage you to bring something that smiles
                        like home .</li>
                </ul>
            </div>

            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                <img src="assets/image/dogspa.png" alt="" id="catspa-img"  data-aos="fade-up">
            </div>

        </div>
    </div>

<!-- start footer -->
  <?php include('footer.php');?>
  <!-- Footer End -->

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
    <script src="https://code.jquery.com/jquery-3.7.0.js"
        integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>


    <script>
        // Accordian Action
        var action = 'click';
        var speed = "500";

        // Document Ready
        $(document).ready(function () {
            // Question handler
            $('li.q').on(action, function () {
                // Check if the current question is already opened
                var isOpen = $(this).hasClass('rotate');

                // Reset all other questions
                $('li.q').removeClass('rotate');
                $('li.a').slideUp(speed);

                // Open or close the current question accordingly
                if (!isOpen) {
                    $(this).addClass('rotate');
                    $(this).next().slideDown(speed);
                }
            }); // End on click
        }); // End Ready
    </script>
</body>

</html>