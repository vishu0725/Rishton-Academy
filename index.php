<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "Rishton_School";

// Creating  a new MySQLi connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {        // If there is a connection error
    die("Connection failed: " . $conn->connect_error); // if there is problem in the connection it will show the error 
}
?>

<!DOCTYPE html>
<html lang="en"> <!-- it shows that the language on the website is in the English -->
<head> 
    <meta charset="UTF-8">  <!-- Tells the browser how to read and display text on the page, using UTF-8, which supports most languages and symbols. This ensures special characters like letters with accents or non-English scripts are shown correctly. --><!-- Tells the browser how to read and display text on the page, using UTF-8, which supports most languages and symbols. This ensures special characters like letters with accents or non-English scripts are shown correctly. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- This tag makes the webpage adjust to different screen sizes, like mobile phones and tablets, so it looks good and is easy to read on any device. Without it, the page might appear too zoomed in or out on smaller screens. -->
    <title>Rishton Academy Primary School</title>  <!-- The title of the webpage displayed in the browser tab -->
    <link rel="stylesheet" href="index.css">  <!-- Link to the external CSS file for styling -->
</head>
<body>

<header>
    <h1>Rishton Academy Primary School</h1> <!-- Main heading of the webpage -->
</header>

<nav>
      <!-- Navigation links for different type of pages on the website -->
    <a href="insertstudent.php">Insert Student</a> <!-- Link to the page where a new student can be inserted -->
    <a href="showstudent.php">Show Student</a>  <!-- Link to the page that displays student information -->
    <a href="insertteacher.php">Insert Teacher</a> <!-- Link to the page where a new Teacher can be inserted -->
    <a href="showteacher.php">Show Teacher</a>  <!-- Link to the page that displays Teacher information -->
    <a href="insertparent.php">Insert Parents</a> <!-- Link to the page where a new Parents can be inserted -->
    <a href="showparent.php">Show Parents</a>  <!-- Link to the page that displays Parents information -->
    <a href="insertclass.php">Insert Classes</a> <!-- Link to the page where a new classes can be inserted -->
    <a href="showclass.php">Show Classes</a>  <!-- Link to the page that displays classes information -->
</nav>

<div class="content">
    <h2>Welcome to Rishton Academy Primary School</h2> <!-- second heading for  welcoming users -->
    <p>We are committed to providing the best education for our students. Explore our website to learn more about our school.</p> <!-- small introductory text about the school -->
    
    <div class="image-section">
         <!-- Section to display images and text -->
        <div class="image-item">
            <img src="image1.jpg" alt="Students Learning"> <!-- Image showing students learning -->
            <p>Our students are engaged in active learning with hands-on projects and interactive teaching methods.</p> <!-- samll text information whate image is showing -->
        </div>
        <div class="image-item">
            <img src="image2.jpg" alt="Classroom Environment"> <!-- Image showing the classroom environment -->
            <p>We provide a welcoming and inclusive classroom environment where every student feels valued.</p>   <!-- samll text information whate image is showing -->
            </div>
        </div>
    </div>
</div>

<footer>
    <!-- Footer section containing contact information -->
    <p>Contact Us: 000 Concell St, salfors, UK | Phone: +44 012 345 6789 | Email: contactus@academy01rishton.ac.uk</p> <!-- Contact details -->
</footer>

</body>
</html>
