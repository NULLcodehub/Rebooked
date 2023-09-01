<?php

include "server.php";

session_start();
    $userID = $_SESSION["id"];
    $role=$_SESSION["role"];
    $name=$_SESSION['name'];
    $email=$_SESSION["email"];

$tab = $_GET['tab'];

if ($tab == "bookList") {
    
    $sql = "SELECT * FROM books WHERE seller_id = ? AND seller_email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("is", $userID, $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<table border='1'>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>ISBN Number</th>
                    <th>Genre</th>
                    <th>Publication Year</th>
                    <th>Price</th>
                   
                    <th>Book Cover</th>
                    <th>Actions</th>
                </tr>";
    
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["title"] . "</td>
                    <td>" . $row["author"] . "</td>
                    <td>" . $row["isbn"] . "</td>
                    <td>" . $row["genre"] . "</td>
                    <td>" . $row["publication_year"] . "</td>
                    <td>" . $row["price"] . "</td>

                    <td><img src='" . $row["book_cover"] . "' alt='Book Cover' width='100'></td>
                    <td>
                        <a href='update.php?id=" . $row["id"] . "'>Update</a>
                        <a href='?delete_id=" . $row["id"] . "' onclick=\"return confirm('Are you sure you want to delete this record?');\">Delete</a>
                    </td>
                </tr>";
        }
        echo "</table>";
    } else {
        echo "No records found";
    }

    


    
} elseif ($tab == "myOrders") {
    
    $query = "SELECT * FROM user_orders WHERE user_id = ?"; 
    
}


$conn->close();
?>
