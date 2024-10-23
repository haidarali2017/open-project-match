<?php

    include "config.php";

    // Solution providers data get
    $sql = "SELECT firstname, surname, email, mobile, companyname FROM user WHERE userType = 'solution provider'";
    $result = $conn->query($sql);

    $data = [];

    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            $data[] = $row;
        }
    }

    // Return data as JSON
    header('Content-Type: application/json'); 
    echo json_encode($data);
    $conn->close();

?>
