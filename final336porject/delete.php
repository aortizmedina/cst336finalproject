<?php
    include'db.php';
    $conn = getDatabaseConnection();
    
    $sql = "DELETE FROM wishlist
            WHERE wishId = ". $_GET['wishId'];
            
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    header("Location: admin.php");
?>