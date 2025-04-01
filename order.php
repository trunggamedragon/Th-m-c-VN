<?php
$conn = new mysqli("localhost", "username", "password", "database");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $price = $_POST["price"];
    $sql = "INSERT INTO orders (name, price) VALUES ('$name', '$price')";
    if ($conn->query($sql) === TRUE) {
        echo "Đặt hàng thành công!";
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
$conn->close();
?>