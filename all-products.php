<!DOCTYPE html>
<html lang="en">
<?php include("admin-header.php");?>
<body style="background-color:  white;">
    <div id="viewport">
        <!-- Sidebar -->
        <?php include('admin-nav.php') ?>
        <!-- Content -->
        <div id="content">
         <nav class="navbar navbar-default">
            <div class="container-fluid">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">ADMIN PANEL</a></li>
              </ul>
            </div>
          </nav>
          <div class="container-fluid" id="all-products">
            
        <h1 class="text-center">All Products</h1> 
          <div class="container">
        <table class="table">
            <thead>
                <tr> 
                    <th>ID</th>
                    <th>NAME</th>
                    <th>PRICE</th>
                    <th>CATEGORY</th>
                    <th>SUB-CATEGORY</th>
                    <th>IMAGE</th>
                    <th>UPDATE</th>
                    <th>DELETE</th> <!-- New column for Delete button -->
                </tr>
            </thead>
            <tbody>
                <?php
                // Database connection
                
                include("connection.php");

                // Pagination settings
                $products_per_page = 5;
                $current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
                $offset = ($current_page - 1) * $products_per_page;

                // Fetch products from the database with pagination
                $query = "SELECT * FROM products LIMIT $offset, $products_per_page";
                $result = $con->query($query);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['price']; ?></td>
                            <td><?php echo $row['category']; ?></td>
                            <td><?php echo $row['filter']; ?></td>
                            <td><img src="./assets/image/<?php echo $row['image']; ?>" alt="Product Image" width="50"></td>
                            <td><a href="edit-product.php?id=<?php echo $row['id']; ?>" class="btn btn-update"><i class="fa-regular fa-pen-to-square" style="color: #ffffff;"></i></a></td>
                            <td>
                                <!-- Delete button with form submission -->
                                <form method="post" action="delete-product.php" onsubmit="return confirm('Are you sure you want to delete this product?')">
                                    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                    <button type="submit" class="btn btn-danger"><i class="fa-regular fa-trash-can" style="color: #ffffff;"></i></button>
                                </form>
                            </td>
                        </tr>
                        <?php
                    }
                } else {
                    ?>
                    <tr>
                        <td colspan="8">No products found.</td>
                    </tr>
                    <?php
                }

                $con->close();
                ?>
            </tbody>
        </table>

        <!-- Pagination links -->
        <nav aria-label="Page navigation">
            <ul class="pagination justify-content-center">
                <?php
                // Calculate the total number of pages
                // Database connection              
                include("connection.php");
                
                $query = "SELECT COUNT(*) AS total FROM products";
                $result = $con->query($query);
                $total_products = $result->fetch_assoc()['total'];
                $total_pages = ceil($total_products / $products_per_page);

                // Display pagination links
                for ($i = 1; $i <= $total_pages; $i++) {
                    $active_class = ($current_page === $i) ? 'active' : '';
                    echo "<li class='page-item $active_class'><a class='page-link' href='all-products.php?page=$i'>$i</a></li>";
                }

                $con->close();
                ?>
            </ul>
        </nav>
    </div>

          </div>
        </div>
      </div>
      <script src="https://cdn.usebootstrap.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
