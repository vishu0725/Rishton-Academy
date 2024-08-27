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
    die("Connection failed: " . $conn->connect_error); // if there is problem in the connection it will show the error
}

//Obtain all class records from the database
$sql = "SELECT * FROM parents";
$result = $conn->query($sql);

$conn->close(); // Close the database connection
?>

<!DOCTYPE html>
<html lang="en"> <!-- it shows that the language on the website is in the English -->
<head>
    <meta charset="UTF-8">  <!-- Tells the browser how to read and display text on the page, using UTF-8, which supports most languages and symbols. This ensures special characters like letters with accents or non-English scripts are shown correctly. --><!-- Tells the browser how to read and display text on the page, using UTF-8, which supports most languages and symbols. This ensures special characters like letters with accents or non-English scripts are shown correctly. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  <!-- This tag makes the webpage adjust to different screen sizes, like mobile phones and tablets, so it looks good and is easy to read on any device. Without it, the page might appear too zoomed in or out on smaller screens. -->
    <title>Show Parents - Rishton Academy Primary School</title>  <!-- The title of the webpage that appears in the browser tab -->
    <link rel="stylesheet" href="index.css">  <!-- Link to the external CSS file for styling -->
</head>
<body>

<header>
    <h1>Show Parents</h1> <!-- Main heading of the page -->
</header>

<nav>
    <a href="index.php">Home</a>  <!-- Link to go back to the homepage -->
    <a href="insertparent.php">Insert Parent</a>  <!-- Link to the page where you can insert list of class -->
    
</nav>

<div class="content">
    <h2>Parent List</h2> <!-- Second heading of parents list section  -->

    <?php if ($result && $result->num_rows > 0): ?>  <!--Make sure that the database found same teachers information before showing them. -->
        <table border="1" cellpadding="10" cellspacing="0"> <!-- Create a table with borders and spacing between rows and colums -->
            <thead>
                <tr>
                    <th>ID</th> <!-- Create a table header for the ID column -->
                    <th>Parent Name</th> <!-- Create a table header for the parent name column -->
                    <th>Address</th> <!-- Create a table header for the address column -->
                    <th>email</th> <!-- Create a table header for the email column -->
                    <th>Occupation</th> <!-- Create a table header for the occupation column -->
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['id']; ?></td> <!-- Display the parents ID in a table  -->
                        <td><?php echo $row['parent_name']; ?></td> <!-- Display the parents name in a table  -->
                        <td><?php echo $row['address']; ?></td> <!-- Display the address in a table  -->
                        <td><?php echo $row['email']; ?></td> <!-- Display the email in a table  -->
                        <td><?php echo $row['occupation']; ?></td> <!-- Display the occupation in a table  -->
                    </tr>
                <?php endwhile; ?> <!-- End of the loop -->
            </tbody>
        </table>
    <?php else: ?>  <!-- If no classes were found,  it will show this message -->
        <p>No parents found.</p> <!-- Display a message saying no classes information  found -->
    <?php endif; ?>  <!-- End the if condition -->
</div>

<footer>
    <p>Contact Us: 123 Main St, Rishton, UK | Phone: +44 123 456 7890 | Email: info@rishtonacademy.ac.uk</p> <!-- Contact information in the footer -->
</footer>

</body>
</html>
