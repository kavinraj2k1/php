<?php



// Retrieve form data
$name = $_POST['name'];
$servername = "localhost"; // Replace with your database server name
$username = "root"; // Replace with your database username
$password = "Kavin123"; // Replace with your database password
$dbname = "myapp"; 

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute the query
$sql = "SELECT * FROM admin WHERE name = '$name'";
$result = $conn->query($sql);

// Display the results
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"] . "<br>";
        // Display other data as needed
    }
} else {
    echo "No results found.";
}

// Close the database connection
$conn->close();
?>

