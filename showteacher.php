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
$sql = "SELECT * FROM teacher";
$result = $conn->query($sql);

$conn->close(); // Close the database connection
?>

<!DOCTYPE html>
<html lang="en">  <!-- it shows that the language on the website is in the English -->
<head>
    <meta charset="UTF-8">  <!-- Tells the browser how to read and display text on the page, using UTF-8, which supports most languages and symbols. This ensures special characters like letters with accents or non-English scripts are shown correctly. --><!-- Tells the browser how to read and display text on the page, using UTF-8, which supports most languages and symbols. This ensures special characters like letters with accents or non-English scripts are shown correctly. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- This tag makes the webpage adjust to different screen sizes, like mobile phones and tablets, so it looks good and is easy to read on any device. Without it, the page might appear too zoomed in or out on smaller screens. -->
    <title>Show Teachers - Rishton Academy Primary School</title>  <!-- The title of the webpage that appears in the browser tab -->
    <link rel="stylesheet" href="index.css">  <!-- Link to the external CSS file for styling -->
</head>
<body>

<header>
    <h1>Show Teachers</h1> <!-- Main heading of the page -->
</header>

<nav>
    <a href="index.php">Home</a> <!-- Link to go back to the homepage -->
    <a href="insertteacher.php">Insert Teacher</a>  <!-- Link to the page where you can insert list of teacher -->
    
</nav>

< class="content">
    <h2>Teacher List</h2> <!-- Second heading of teacher list section  -->

    <?php if ($result && $result->num_rows > 0): ?>  <!--Make sure that the database found same teacher before showing them. -->
        <table border="1" cellpadding="10" cellspacing="0">  <!-- Create a table with borders and spacing between rows and colums -->
            <thead>
                <tr>
                    <th>ID</th> <!-- Create a table header for the ID column -->
                    <th>Name</th> <!-- Create a table header for the name column -->
                    <th>Address</th> <!-- Create a table header for the address column -->
                    <th>Salary</th> <!-- Create a table header for the salary column -->
                    <th>Background Check</th> <!-- Create a table header for the background check column -->
                    <th>Email</th> <!-- Create a table header for the email column -->
                </tr>
            </thead>
            <tbody>
                <?php while($row = $result->fetch_assoc()): ?>  <!--Go through each teacher information that was found one by one.-->
                    <tr>
                        <td><?php echo $row['id']; ?></td>  <!-- Display the teacher ID in a table  -->
                        <td><?php echo $row['name']; ?></td> <!-- Display the teacher name  in a table  -->
                        <td><?php echo $row['address']; ?></td> <!-- Display the address in a table  -->
                        <td><?php echo $row['salary']; ?></td> <!-- Display the salary in a table  -->
                        <td><?php echo $row['background_check']; ?></td> <!-- Display the background check in a table  -->
                        <td><?php echo $row['email']; ?></td> <!-- Display the email in a table  -->
                    </tr>
                <?php endwhile; ?> <!-- End of the loop -->
            </tbody>
        </table>
    <?php else: ?> <!-- If no classes were found,  it will show this message -->
        <p>No teachers found.</p>  <!-- Display a message saying no classes information  found -->
    <?php endif; ?> <!-- End the if condition -->
</div>

<footer>
    <p>Contact Us: 123 Main St, Rishton, UK | Phone: +44 123 456 7890 | Email: info@rishtonacademy.ac.uk</p> <!-- Contact information in the footer -->
</footer>

</body>
</html>
