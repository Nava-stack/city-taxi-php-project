<?php
    // Insert driver data into the 'drivers' table
    $sql = "INSERT INTO drivers (username, password, email, phone_number)
            VALUES ('$username', '$hashed_password', '$email', '$phone_number')";

    if ($conn->query($sql) === TRUE) {
        echo "Signup successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
    ?>