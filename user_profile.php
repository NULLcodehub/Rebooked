<?php
include "server.php";

session_start();
$userID = $_GET["id"];
$role=$_SESSION["role"];
$srole=$_SESSION["srole"];

if($role=='user'){
    $db = $conn->prepare("SELECT * FROM user WHERE id = ?");
    $db->bind_param('i', $userID);
    $db->execute();
    $result = $db->get_result();

    if ($result->num_rows == 1) {
        $userData = $result->fetch_assoc(); 
    } else {
        echo "Didn't get data";
        exit; 
    }

}else if($srole=='seller'){
    $db = $conn->prepare("SELECT * FROM seller WHERE id = ?");
    $db->bind_param('i', $userID);
    $db->execute();
    $result = $db->get_result();

    if ($result->num_rows == 1) {
        $userData = $result->fetch_assoc(); 
    } else {
        echo "Didn't get data";
        exit; 
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
</head>
<body>
    <div>
        <?php echo $userData["name"]; ?>
    </div>
</body>
</html>
