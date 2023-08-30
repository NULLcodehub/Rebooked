<?php
include "server.php";

$userID = $_GET["id"];

$db = $conn->prepare("SELECT * FROM user WHERE id = ?");
$db->bind_param('i', $userID);
$db->execute();
$result = $db->get_result();

if ($result->num_rows == 1) {
    $userData = $result->fetch_assoc(); // Fetch data as an associative array
} else {
    echo "Didn't get data";
    exit; // Exit the script if no data is found
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
