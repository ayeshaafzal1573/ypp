<?php
include("connection.php");

// Step 2: Fetch data from the database with category "cat"
$query = "SELECT * FROM products WHERE filter = 'food'";
$result = $con->query($query);

// Step 3: Convert data to JSON
if ($result->num_rows > 0) {
    $products = array();
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }
    echo json_encode($products);
} else {
    echo json_encode(array('message' => 'No products found.'));
}

// Close the database connection
$con->close();
?>