<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "password"; 
$dbname = "Rishton_School";

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection to the database was successful
if ($conn->connect_error) {   // If there is a connection error
    die("Connection failed: " . $conn->connect_error);  // if there is problem in the connection it will show the error
} 

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") { // If the form was sent using the POST method
    // // Get the data entered in the form
    $name = $_POST['name'];  // Store the teacher name entered by the user
    $address = $_POST['address'];  // Store the address entered by the user
    $salary = $_POST['salary'];  // Store the salary entered by the user
    $background_check = $_POST['background_check'];  // Store the background check entered by the user
    $email = $_POST['email'];  // Store the email entered by the user
    


     // SQL query to insert the new teacher details into the database
    $sql = "INSERT INTO teacher (name, address,  salary, background_check,email) 
            VALUES ('$name', '$address', '$salary', '$background_check','$email')";

    // Check if the query was successful
    if ($conn->query($sql) === TRUE) {  // If the data was inserted successfully
        $message = "New teacher inserted successfully!"; // Show a success message
    } else {
        $message = "Error: " . $conn->error;  // Show an error message if something went wrong
    }
}
$conn->close(); // Close the database connection
?>

<!DOCTYPE html>
<html lang="en">  <!-- it shows that the language on the website is in the English -->
<head>
    <meta charset="UTF-8"> <!-- Tells the browser how to read and display text on the page, using UTF-8, which supports most languages and symbols. This ensures special characters like letters with accents or non-English scripts are shown correctly. --><!-- Tells the browser how to read and display text on the page, using UTF-8, which supports most languages and symbols. This ensures special characters like letters with accents or non-English scripts are shown correctly. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- This tag makes the webpage adjust to different screen sizes, like mobile phones and tablets, so it looks good and is easy to read on any device. Without it, the page might appear too zoomed in or out on smaller screens. -->
    <title>Insert Teacher - Rishton Academy Primary School</title>  <!-- The title of the webpage that appears in the browser tab -->
    <link rel="stylesheet" href="index.css">  <!-- Link to the external CSS file for styling -->
</head>
<body>

<header>
    <h1>Insert Teacher</h1> <!-- Main heading of the page -->
</header>

<nav>
    <a href="index.php">Home</a> <!-- Link to go back to the homepage -->
    <a href="showteacher.php">Show Teachers</a>  <!-- Link to the page where you can see the list of teachers -->
    
</nav>

<div class="content">
    <h2>Insert Teacher Details</h2> <!-- Second heading telling the user to enter teacher details -->

     <!-- Check if there is a message and display it -->
    <?php if(isset($message)): ?>
        <p><?php echo $message; ?></p> <!-- Display the success or error message from the information submited submission -->
    <?php endif; ?>

    <!-- Form to insert class details -->
    <form action="insertteacher.php" method="POST">  <!-- The form will send data to this same page using POST method -->
        <label for="name">Name:</label><br> <!-- Label for the teacher name input -->
        <input type="text" id="name" name="name" required><br><br>  <!-- Input box for teacher name, required means it can't be left empty -->

        <label for="address">Address:</label><br> <!-- Label for the address input -->
        <input type="text" id="address" name="address" required><br><br>  <!-- Input box for  address, required means it can't be left empty -->

        <label for="salary">Salary:</label><br> <!-- Label for the salary  input -->
        <input type="text" id="salary" name="salary" required><br><br>  <!-- Input box for  salary, required means it can't be left empty -->

        <label for="background_check">Background Check:</label><br> <!-- Label for the background check  input -->
        <input type="text" id="background_check" name="background_check" required><br><br>  <!-- Input box for  background check, required means it can't be left empty -->

        <label for="email"> Email:</label><br> <!-- Label for the email  input -->
        <input type="text" id="email" name="email" required><br><br>  <!-- Input box for email, required means it can't be left empty -->

        <input type="submit" value="Insert Teacher">  <!-- Button to submit the form -->
    </form>
</div>

<footer>
    <p>Contact Us: 123 Main St, Rishton, UK | Phone: +44 123 456 7890 | Email: info@rishtonacademy.ac.uk</p> <!-- Contact information in the footer -->
</footer>

</body>
</html>
