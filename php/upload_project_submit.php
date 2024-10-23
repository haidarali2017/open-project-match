<?php
    include "config.php";

    
    // Upload projects insert by SR
    $title = $_POST['title'];
    $category = $_POST['Category']; 
    $keywords = $_POST['keywords'];
    $my_file_name = $_POST['myfile-name'];
    $short_description = $_POST['shortDescription'];
    $brief_description = $_POST['brief_description'];

    // SQL query to insert form data into the `upload_projects` table using placeholders
    $stmt = $conn->prepare("INSERT INTO upload_projects (title, category, keywords, my_file_name, short_description, brief_description, date, created_at, updated_at) 
    VALUES (?, ?, ?, ?, ?, ?, NOW(), NOW(), NOW())");

    // Bind the parameters to the SQL query
    $stmt->bind_param("ssssss", $title, $category, $keywords, $my_file_name, $short_description, $brief_description);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Upload project inserted successfully"]);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to insert upload project"]);
    }


?>







