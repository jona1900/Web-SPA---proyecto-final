<?php
$servername = "localhost";
$username = "root";
$password = "jona2583";
$dbname = "libreria";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$title = $_POST['title'];
$author = $_POST['author'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];

$sql = "INSERT INTO libros (titulo, autor, precio, cantidad) VALUES ('$title', '$author', '$price', '$quantity')";

if ($conn->query($sql) === TRUE) {
    echo "Libro registrado.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
