<?php
include("connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the product ID is provided
    if (isset($_POST['id'])) {
        $product_id = $_POST['id'];

        

        // Prepare and execute the DELETE query
        $query = "DELETE FROM products WHERE id=?";
        $stmt = $con->prepare($query);
        $stmt->bind_param("i", $product_id);

        if ($stmt->execute()) {
            // Product deleted successfully
            echo '<script>alert("Product deleted successfully.");</script>';
        } else {
            // Failed to delete product
            echo '<script>alert("Failed to delete product.");</script>';
        }

        $stmt->close();
        $con->close();
    } else {
        // Product ID not provided, handle the error or redirect to all-products.php
        echo '<script>alert("Product ID not provided.");</script>';
    }
}

// Redirect back to index.php
header('Location: all-products.php');
exit();
?>
