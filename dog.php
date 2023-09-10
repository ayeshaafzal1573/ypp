<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>

<?php
// Step 1: Database connection
//Included in header.php above

// Step 2: Fetch data from the database with category "dog"
$query = "SELECT * FROM products WHERE category = 'dog'";
$result = $con->query($query);

// Step 3: Fetch products into products array
if ($result->num_rows > 0) {
  $products = array();
  while ($row = $result->fetch_assoc()) {
    $products[] = $row;
  }
  // echo json_encode($products);
} else {
  // echo json_encode(array('message' => 'No products found in the "dog" category.'));
}

// Close the database connection
//$con->close();
?>







<body style="background-color: rgb(243, 155, 184) ;">
  <?php include('nav.php'); ?>



  <!-- cat category start -->

  <h1 class="cat-heading"> Dog Category 🍗</h1>
  <!-- filter -->
  <div class="container">
    <div class="row">
      <div class="col-2">
        <h3 class="filterby">FILTER BY</h3>
      </div>
      <div class="col-10">
        <select onchange="filterItems(this.value)" id="filter">
          <option value="All">All products</option>
          <option value="food">Food</option>
          <option value="accessory">Accessories</option>
          <option value="medicine">Medicines</option>
        </select>
      </div>
    </div>
  </div>


  <?php include('cart.php'); ?>

  <!-- start footer -->
  <?php include('footer.php'); ?>
  <!-- Footer End -->






  <!-- script -->
  <script>

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
    if (closeShopping) {
      closeShopping.addEventListener('click', () => {
        body.classList.remove('active');
      });
    }
    let products = <?php echo json_encode($products); ?>;
    let listCards = [];

    //LOAD ALL PRODUCTS ON PAGE LOAD
    function initApp() {
      products.forEach((value, key) => {
        let newDiv = document.createElement('div');
        newDiv.classList.add('item');
        newDiv.innerHTML = `
        <div class= "container" data-aos="fade-up">
          <div class="row">
        <div class = "card">
      <div class = "image">
        <img src="assets/image/${value.image}">
       <h2 style="font-family: pacifio;" class="title"> ${value.name}</h2>
    
        </div>
      <div class = "content">
       <h4 style="font-family: pacifio;" class="price">${value.price.toLocaleString()}</h4>
       <i class="fa-solid fa-star" style="color: #ebe424;"></i>
       <i class="fa-solid fa-star" style="color: #ebe424;"></i>
       <i class="fa-solid fa-star" style="color: #ebe424;"></i>
       <i class="fa-solid fa-star" style="color: #ebe424;"></i>
      <button class="cart-button" onclick="addToCard(${key})">
                        <span class="add-to-cart">Add to cart</span>
                        <span class="added">Added</span>
                        <i class="fas fa-shopping-cart"></i>
                        <i class="fas fa-box"></i>
                   </button>
                       </div>  
  </div>  
</div>`
        list.appendChild(newDiv);
      })
    }
    initApp();

    //LOAD PRODUCTS ACCORDING SELECTED FILTER
    function filterItems(filter) {
      list.innerHTML = ''; // Clear the existing items in the list
      products.forEach((value, key) => {
        if (filter === 'All' || value.filter === filter) {
          let newDiv = document.createElement('div');
          newDiv.classList.add('item');
          newDiv.innerHTML = `
        <div class= "container">
          <div class="row">
        <div class = "card">
      <div class = "image">
        <img src="assets/image/${value.image}">
       <h2 style="font-family: pacifio;" class="title"> ${value.name}</h2>
  
        </div>
      <div class = "content">
       <h4 style="font-family: pacifio;" class="price">${value.price.toLocaleString()}</h4>
       <i class="fa-solid fa-star" style="color: #ebe424;"></i>
       <i class="fa-solid fa-star" style="color: #ebe424;"></i>
       <i class="fa-solid fa-star" style="color: #ebe424;"></i>
       <i class="fa-solid fa-star" style="color: #ebe424;"></i>
        <button class="cart-button" onclick="addToCard(${key})">
                        <span class="add-to-cart">Add to cart</span>
                        <span class="added">Added</span>
                        <i class="fas fa-shopping-cart"></i>
                        <i class="fas fa-box"></i>
                   </button>
                       </div>  
  </div>  
</div>`
          list.appendChild(newDiv);
        }
      });

    }
    function addToCard(key) {
      if (listCards[key] == null) {
        // copy product form list to list card
        listCards[key] = JSON.parse(JSON.stringify(products[key]));
        listCards[key].quantity = 1;
      }
      reloadCard();
    }
    function reloadCard() {
      listCard.innerHTML = '';
      let count = 0;
      let totalPrice = Number();
      listCards.forEach((value, key) => {
        totalPrice = totalPrice + Number(value.price);
        count = count + value.quantity;
        if (value != null) {
          let newDiv = document.createElement('li');
          newDiv.innerHTML = `
                <div><img src="assets/image/${value.image}"/></div>
                <div>${value.name}</div>
                <div>${value.price.toLocaleString()}</div>
                <div>
                    <button onclick="changeQuantity(${key}, ${value.quantity - 1})">-</button>
                    <div class="count">${value.quantity}</div>
                    <button onclick="changeQuantity(${key}, ${value.quantity + 1})">+</button>
                </div>`;
          listCard.appendChild(newDiv);
        }
      })
      total.innerText = totalPrice.toLocaleString();
      quantity.innerText = count;
    }
    function changeQuantity(key, quantity) {
      if (quantity == 0) {
        delete listCards[key];
      } else {
        listCards[key].quantity = quantity;
        listCards[key].price = quantity * products[key].price.toLocaleString();
      }
      reloadCard();
    }

  </script>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
  <script src="assets/script.js"></script>
</body>

</html>