<?php  include("connection.php"); ?>

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
                <li>
        <a href="#"><i class="zmdi zmdi-notifications text-danger"></i>
                  </a>
                </li>
                <li><a href="#">Test User</a></li>
              </ul>
            </div>
          </nav>
          <div class="container" id="add-product">
        
        <div class="row justify-content-center">
            <div class="col-md-6">
        
        <?php


        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
            $id = $_POST['id'];
            $name = $_POST['pname'];
            $price = $_POST['pprice'];
            $category = $_POST['pcategory'];
            $subcategory = $_POST['psub-category'];

            // Check if a new image was uploaded
            if ($_FILES['pimage']['size'] > 0) {
                $image = $_FILES['pimage']['name'];
                $tmp_image = $_FILES['pimage']['tmp_name'];
                $folder = "./assets/image/" . $image;
                move_uploaded_file($tmp_image, $folder);
                $query = "UPDATE products SET name=?, price=?, category=?, filter=?, image=? WHERE id=?";
                $stmt = $con->prepare($query);
                $stmt->bind_param("sssssi", $name, $price, $category, $subcategory, $image, $id);
            } else {
                // If no new image, update other product details only
                $query = "UPDATE products SET name=?, price=?, category=?, filter=? WHERE id=?";
                $stmt = $con->prepare($query);
                $stmt->bind_param("ssssi", $name, $price, $category, $subcategory, $id);
            }

            if ($stmt->execute()) {
                echo '<div class="alert alert-success">Product updated successfully!</div>';
            } else {
                echo '<div class="alert alert-danger">Failed to update product.</div>';
            }

            $stmt->close();
            $con->close();
        }

        // Fetch the product details to pre-fill the form
        if (isset($_GET['id'])) {
            $con = new mysqli('localhost', 'root', '', 'ypp');
            if ($con->connect_error) {
                die('Connection failed: ' . $con->connect_error);
            }

            $id = $_GET['id'];
            $query = "SELECT * FROM products WHERE id=?";
            $stmt = $con->prepare($query);
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                $product = $result->fetch_assoc();
                ?>
                <h1 class="text-center">Edit Product</h1>
                <form method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
                    <div class="form-group">
                        <input type="text" name="pname" class="form-control" value="<?php echo $product['name']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="pprice" class="form-control" value="<?php echo $product['price']; ?>" required>
                    </div>
                    <div class="form-group">
                        <select name="pcategory" class="form-control">
                            <option value="cat" <?php echo ($product['category'] === 'cat') ? 'selected' : ''; ?>>Cat</option>
                            <option value="dog" <?php echo ($product['category'] === 'dog') ? 'selected' : ''; ?>>Dog</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="psub-category" class="form-control">
                            <option value="food" <?php echo ($product['filter'] === 'food') ? 'selected' : ''; ?>>Food</option>
                            <option value="accessory" <?php echo ($product['filter'] === 'accessory') ? 'selected' : ''; ?>>Accessory</option>
                            <option value="medicine" <?php echo ($product['filter'] === 'medicine') ? 'selected' : ''; ?>>Medicine</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="pimage">Product Image: <img src='assets/image/<?php echo $product['image'] ?>' width="100" height="100"></label>
                        <input type="file" name="pimage" class="form-control-file">
                        <small class="form-text text-muted">Leave it empty to keep the existing image.</small>
                    </div>
                    <input type="submit" class="btn" value="Update">
                </form>
                <?php
            } else {
                echo '<div class="alert alert-danger">Product not found.</div>';
            }

            $stmt->close();
            $con->close();
        }
        ?>
    </div>
        </div>
          </div>
          

          </div>
        </div>
      </div>
      <script src="https://cdn.usebootstrap.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
