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
            
        <h1 class="text-center">USER ACTIVATION</h1> 
          <div class="container">
        <table class="table">
            <thead>
                <tr> 
                   <th>ID</th>
                    <th>NAME</th>
                    <th>PHONE</th>
                    <th>EMAIL</th>
                    <th>PASSWORD</th>
                    <th>STATUS</th>
                    <th>ACTIVE</th>
                    <th>DEACTIVE</th> 
                </tr>
            </thead>
            <tbody>
                <?php
                // Database connection
                
                include("connection.php");

              
               $fetch_user = mysqli_query($con,"SELECT * FROM signup");
  $result = $con->query($query);
                foreach ($fetch_user as $user) {

                    echo "<tr>";
                    echo "<td>$user[id]</td>";
                    echo "<td>$user[fullname]</td>";
                    echo "<td>$user[phone]</td>";
                    echo "<td>$user[email]</td>";
                    echo "<td>$user[password]</td>";
                    echo "<td>$user[status]</td>";
                    echo "<td>
    <a href='active.php?id=$user[id]>'
        <i class='fas fa-check text-success'></i> </a>
</td>
<td>
       <a href='deactive.php?id=$user[id]'>
        <i class='fas fa-times text-danger'></i></a></td>";
                    echo "</tr>";

                }
                ?>
            </tbody>
        </table>

        
          </div>
        </div>
      </div>
      <script src="https://cdn.usebootstrap.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
