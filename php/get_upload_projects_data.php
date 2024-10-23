
<?php

    include "config.php";

    // upload project data get by SR
    $sql = "SELECT title, category, keywords, my_file_name, short_description, brief_description FROM upload_projects";
    $result = $conn->query($sql);

    $data = [];

    if ($result->num_rows > 0) 
    {
        while($row = $result->fetch_assoc()) 
        {
            $data[] = $row;
        }
    }

    echo json_encode($data);
    $conn->close();

?>

