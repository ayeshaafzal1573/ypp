<?php include('connection.php'); ?>
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
          <div class="container" id="add-product">
        
        <div class="row justify-content-center">
            <div class="col-md-6">
        
        <?php

        

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
            $twitter = $_POST['twitter'];
            $google = $_POST['google'];
            $linkedin = $_POST['linkedin'];
            $instagram = $_POST['instagram'];
            
           
            if (isset($_POST['submit'])) {
                $query = "UPDATE social_links SET insta=?, twitter=?, linkedin=?, google=?";
                $stmt = $con->prepare($query);
                $stmt->bind_param("ssss", $instagram, $twitter, $linkedin, $google);
            }

            if ($stmt->execute()) {
                echo '<div class="alert alert-success">Social Links updated successfully!</div>';
            } else {
                echo '<div class="alert alert-danger">Failed to update Social Links.</div>';
            }

            $stmt->close();
            $con->close();
        }

        // Fetch the product details to pre-fill the form
            include('connection.php');
            
            if ($data->num_rows === 1) {

            ?>
                <h1 class="text-center">Social Links</h1>
                <form method="post" enctype="multipart/form-data">
                    
                    <div class="form-group">
                        <input type="text" name="twitter" class="form-control" placeholder="Twitter" value="<?php echo $mainsocial['twitter']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="google" class="form-control" placeholder="Google" value="<?php echo $mainsocial['google']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="linkedin" class="form-control" placeholder="LinkedIn" value="<?php echo $mainsocial['linkedin']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="instagram" class="form-control" placeholder="Instagram" value="<?php echo $mainsocial['insta']; ?>" required>
                    </div>
                    
                    <input type="submit" class="btn btn-primary" name="submit" value="Update">
                </form>
                <?php
            } else {
                echo '<div class="alert alert-danger">Social Links not found.</div>';
            }

            $con->close();

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
