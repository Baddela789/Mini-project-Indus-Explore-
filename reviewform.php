
<style>
 body {
     background-image: url(hd8.jpg);
   background-size: cover;
}
</style>
<?php
// Connect to the MySQL database
$servername = "localhost"; // Your server name
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "review"; // Your database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$rating = $_POST['rating'];
$message = $_POST['message'];

// Prepare and execute an SQL query to insert data into the database
$sql = "INSERT INTO reviews (name, email, rating, message) VALUES ('$name', '$email', '$rating', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "<div class='form'>
                  <h3>Review submitted successfully....:)</h3><br/>
                  <p class='link'>Click here to <a href='review.php'>return back to review page</a></p>
                  </div>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

