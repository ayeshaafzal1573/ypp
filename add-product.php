<!DOCTYPE html>
<html lang="en">
<?php include("admin-header.php");?>
<?php
$infomsg = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include("connection.php");

    if (isset($_POST['add'])) {
        $name = $_POST['pname'];
        $price = $_POST['pprice'];
        $category = $_POST['pcategory'];
        $subcategory = $_POST['psub-category'];
        $image = $_FILES['pimage']['name']; // Get the name of the uploaded file
        $folder = "./assets/image/" . $image;
        $tmp_image = $_FILES['pimage']['tmp_name']; // Temporary location of the uploaded file

        $query = "INSERT INTO products (name, price, category, filter, image) VALUES (?, ?, ?, ?, ?)";
        $stmt = $con->prepare($query);
        $stmt->bind_param("sssss", $name, $price, $category, $subcategory, $image);
        
        $upload = move_uploaded_file($tmp_image, $folder);

        if($stmt->execute() && $upload) {
            $infomsg = "Product Added";
        } 
        else {
            $infomsg = "Failed to add Product or upload image.";
        }

        $stmt->close();
    }

    $con->close();
}
?>


<body style="background-color:  white;">
    <div id="viewport">
        <!-- Sidebar -->
        <?php include('admin-nav.php') ?>
        <!-- Content -->
        <div id="content" >
          <nav class="navbar navbar-default">
            <nav class="navbar navbar-default">
            <div class="container-fluid">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">ADMIN PANEL</a></li>
              </ul>
            </div>
          </nav>
          <div class="container-fluid d-flex align-items-center" id="add-product" >
            <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-md-6">
                <h1 class="text-center mt-5">Add Product</h1>
                <form method="post" enctype="multipart/form-data">
                <?php if (!empty($infomsg)) : ?>
              <div class="alert alert-success mt-4">
                <?php echo $infomsg; ?>
              </div>
            <?php endif; ?>
                    <div class="form-group justify-content-center">
                        <input type="text" name="pname" class="form-control" placeholder="Product Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="pprice" class="form-control" placeholder="Product Price" required>
                    </div>
                    <div class="form-group">
                        <select name="pcategory" class="form-control" required>
                            <option value="" disabled selected>Select Category:</option>
                            <option value="cat">Cat</option>
                            <option value="dog">Dog</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="psub-category" class="form-control" required>
                            <option value="" disabled selected>Select Sub-Category:</option>
                            <option value="food">Food</option>
                            <option value="accessory">Accessory</option>
                            <option value="medicine">Medicine</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="file" name="pimage" class="form-control-file" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="add" class="btn" value="Add Product">
                    </div>
                </form>
            </div>
        </div>
    </div>


          </div>
        </div>
      </div>
      <script src="https://cdn.usebootstrap.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
