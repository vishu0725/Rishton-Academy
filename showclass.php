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
    die("Connection failed: " . $conn->connect_error); // if there is problem in the connection it will show the error
}

//Obtain all class records from the database
$sql = "SELECT * FROM class";
$result = $conn->query($sql);

$conn->close(); // Close the database connection
?>

<!DOCTYPE html>
<html lang="en">  <!-- it shows that the language on the website is in the English -->
<head>
    <meta charset="UTF-8">  <!-- Tells the browser how to read and display text on the page, using UTF-8, which supports most languages and symbols. This ensures special characters like letters with accents or non-English scripts are shown correctly. --><!-- Tells the browser how to read and display text on the page, using UTF-8, which supports most languages and symbols. This ensures special characters like letters with accents or non-English scripts are shown correctly. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- This tag makes the webpage adjust to different screen sizes, like mobile phones and tablets, so it looks good and is easy to read on any device. Without it, the page might appear too zoomed in or out on smaller screens. -->
    <title>Show Classes - Rishton Academy Primary School</title>  <!-- The title of the webpage that appears in the browser tab -->
    <link rel="stylesheet" href="index.css">   <!-- Link to the external CSS file for styling -->
</head>
<body>

<header>
    <h1>Show Classes</h1> <!-- Main heading of the page -->
</header>

<nav>
    <a href="index.php">Home</a> <!-- Link to go back to the homepage -->
    <a href="insertclass.php">Insert Class</a>  <!-- Link to the page where you can insert list of class -->
    
</nav>

<div class="content">
    <h2>Class List</h2> <!-- Second heading of class list section  -->

    <?php if ($result && $result->num_rows > 0): ?> <!--Make sure that the database found same classes before showing them. -->
        <table border="1" cellpadding="10" cellspacing="0"> <!-- Create a table with borders and spacing between rows and colums -->
            <thead>
                <tr>
                    <th>ID</th>  <!-- Create a table header for the ID column -->
                    <th>Class Name</th>  <!-- Create a table header for the class name column -->
                    <th>Capacity</th>  <!-- Create a table header for the capacity column -->
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?> <!--Go through each class that was found one by one.-->
                    <tr>
                        <td><?php echo $row['id']; ?></td> <!-- Display the class ID in a table  -->
                        <td><?php echo $row['class_name']; ?></td> <!-- Display the class name in a table  -->
                        <td><?php echo $row['capacity']; ?></td> <<!-- Display the capacity in a table  -->
                    </tr>
                <?php endwhile; ?> <!-- End of the loop -->
            </tbody>
        </table>
    <?php else: ?> <!-- If no classes were found,  it will show this message -->
        <p>No classes found.</p> <!-- Display a message saying no classes information  found -->
    <?php endif; ?> <!-- End the if condition -->
</div>

<footer>
    <p>Contact Us: 123 Main St, Rishton, UK | Phone: +44 123 456 7890 | Email: info@rishtonacademy.ac.uk</p> <!-- Contact information in the footer -->
</footer>

</body>
</html>
