<?php
    include "connection.php";
    $sql = "SELECT name, email FROM signup"; // Modify this query as needed
    $result = $con->query($sql);

    $userData = array(); // Initialize an array to store user data

    if ($result->num_rows > 0) {
        // Loop through each row of the result set
        while($row = $result->fetch_assoc()) {
            // Add each row (user data) to the $userData array
            $userData[] = $row;
        }
    } else {
        echo "0 results";
    }


    // Output user data as JSON
    echo json_encode($userData);
?>