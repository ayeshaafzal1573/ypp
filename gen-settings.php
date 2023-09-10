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
            <div class="container-fluid d-flex align-items-center" id="add-product" >
        
          <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-md-6">
        
        <?php

        

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
            $title = $_POST['title'];
            $subtitle = $_POST['subtitle'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $number = $_POST['number'];
            $timing = $_POST['timing'];

            // Check if a new image was uploaded
            if ($_FILES['logo']['size'] > 0) {
                $logo = $_FILES['logo']['name'];
                $tmp_logo = $_FILES['logo']['tmp_name'];
                $folder = "./assets/image/" . $logo;
                move_uploaded_file($tmp_logo, $folder);
                $query = "UPDATE general_settings SET logo=?, title=?, subtitle=?, email=?, address=?, number=?, timings=?";
                $stmt = $con->prepare($query);
                $stmt->bind_param("sssssss", $logo, $title, $subtitle, $email, $address, $number, $timing);
            } else {
                // If no new image, update other product details only
                $query = "UPDATE general_settings SET title=?, subtitle=?, email=?, address=?, number=?, timings=?";
                $stmt = $con->prepare($query);
                $stmt->bind_param("ssssss", $title, $subtitle, $email, $address, $number, $timing);
            }

            if ($stmt->execute()) {
                echo '<div class="alert alert-success">Settings updated successfully!</div>';
            } else {
                echo '<div class="alert alert-danger">Failed to update Settings.</div>';
            }

            $stmt->close();
            $con->close();
        }

        // Fetch the product details to pre-fill the form
            include('connection.php');
            
            if ($data->num_rows === 1) {

            ?>
                <h1 class="text-center">General Settings</h1>
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="pimage">Website Logo: <img src='assets/image/<?php echo $mainsettings['logo'] ?>' width="200" height="150"></label>
                        <input type="file" name="logo" class="form-control-file">
                        <small class="form-text text-muted">Leave it empty to keep the existing image.</small>
                    </div>
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="Website Title" value="<?php echo $mainsettings['title']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subtitle" class="form-control" placeholder="Website Subtitle" value="<?php echo $mainsettings['subtitle']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Website Email" value="<?php echo $mainsettings['email']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="address" class="form-control" placeholder="Website Address" value="<?php echo $mainsettings['address']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="number" class="form-control" placeholder="Website Number" value="<?php echo $mainsettings['number']; ?>" required>
                    </div>
                    <div class="form-group">
                        <input type="text" name="timing" class="form-control" placeholder="Website Timings" value="<?php echo $mainsettings['timings']; ?>" required>
                    </div>
                    
                    <input type="submit" class="btn btn-primary" value="Update">
                </form>
                <?php
            } else {
                echo '<div class="alert alert-danger">Settungs not found.</div>';
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
