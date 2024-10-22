
 <?php
include "config.php";
 // Check if the connection is successful
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
 }
 
 // Check if email is posted
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     $email = trim($_POST['email']);
 
     // Check if email is provided
     if (!empty($email)) {
         // Prepare the SQL query to check if the email exists in the database
         $sql = "SELECT * FROM user WHERE email = ?";
         $stmt = mysqli_prepare($conn, $sql);
         mysqli_stmt_bind_param($stmt, 's', $email);
         mysqli_stmt_execute($stmt);
         $result = mysqli_stmt_get_result($stmt);
 
         // Check if the query returned any rows
         if (mysqli_num_rows($result) > 0) {
             // Email already registered
             echo json_encode(["status" => "error", "message" => "Email already registered."]);
         } else {
             // Email is available
             echo json_encode(["status" => "success", "message" => "Email is available."]);
         }
 
         // Close the prepared statement
         mysqli_stmt_close($stmt);
     } else {
         echo json_encode(["status" => "error", "message" => "Please enter an email."]);
     }
 }
  
 mysqli_close($conn);
 ?>
 
 
 