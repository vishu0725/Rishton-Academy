<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "password"; 
$dbname = "Rishton_School";

// Create a connection to the MySQL database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection to the database was successful
if ($conn->connect_error) {  // If there is a connection error
    die("Connection failed: " . $conn->connect_error);  // if there is problem in the connection it will show the error
} 

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {  // If the form was sent using the POST method
     // Get the data entered in the form
    $student_name = $_POST['student_name']; // Store the student name entered by the user
    $address = $_POST['address'];  // Store the address entered by the user
    $medical_info = $_POST['medical_info'];  // Store the medical info entered by the user

     // SQL query to insert the new student details into the database
    $sql = "INSERT INTO student (student_name, address, medical_info) VALUES ('$student_name', '$address', '$medical_info')";

     // Check if the query was successful
    if ($conn->query($sql) === TRUE) {   // If the data was inserted successfully
        $message = "New student inserted successfully!"; // Show a success message
    } else {
        $message = "Error: " . $conn->error;  // Show an error message if something went wrong
    }
}
$conn->close();   // Close the database connection
?>

<!DOCTYPE html>
<html lang="en"> <!-- it shows that the language on the website is in the English -->
<head>
    <meta charset="UTF-8">  <!-- Tells the browser how to read and display text on the page, using UTF-8, which supports most languages and symbols. This ensures special characters like letters with accents or non-English scripts are shown correctly. --><!-- Tells the browser how to read and display text on the page, using UTF-8, which supports most languages and symbols. This ensures special characters like letters with accents or non-English scripts are shown correctly. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- This tag makes the webpage adjust to different screen sizes, like mobile phones and tablets, so it looks good and is easy to read on any device. Without it, the page might appear too zoomed in or out on smaller screens. -->
    <title>Insert Student - Rishton Academy Primary School</title> <!-- The title of the webpage that appears in the browser tab -->
    <link rel="stylesheet" href="index.css">  <!-- Link to the external CSS file for styling -->
</head>
<body>

<header>
    <h1>Insert Student</h1>  <!-- Main heading of the page -->
</header>

<nav>
    <a href="index.php">Home</a>  <!-- Link to go back to the homepage -->
    <a href="showstudent.php">Show Students</a>  <!-- Link to the page where you can see the list of student -->
    
</nav>

<div class="content">
    <h2>Insert Student Details</h2> <!-- Second heading telling the user to enter student details -->

     <!-- Check if there is a message and display it -->
    <?php if(isset($message)): ?>
        <p><?php echo $message; ?></p> <!-- Display the success or error message from the information submited submission -->
    <?php endif; ?>

    <!-- Form to insert class details -->
    <form action="insertstudent.php" method="POST"> <!-- The form will send data to this same page using POST method -->
        <label for="student_name">Student Name:</label><br> <!-- Label for the student name input -->
        <input type="text" id="student_name" name="student_name" required><br><br>  <!-- Input box for student name, required means it can't be left empty -->

        <label for="address">Address:</label><br>  <!-- Label for the address input -->
        <input type="text" id="address" name="address" required><br><br>   <!-- Input box for address, required means it can't be left empty -->

        <label for="medical_info">Medical Info:</label><br> <!-- Label for the medical info input -->
        <textarea id="medical_info" name="medical_info" required></textarea><br><br>  <!-- Input box for medical info, required means it can't be left empty -->

        <input type="submit" value="Insert Student"> <!-- Button to submit the form -->
    </form>
</div>

<footer>
    <p>Contact Us: 123 Main St, Rishton, UK | Phone: +44 123 456 7890 | Email: info@rishtonacademy.ac.uk</p>  <!-- Contact information in the footer -->
</footer>

</body>
</html>
