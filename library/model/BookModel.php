<?php
require_once "../config/db.php";

function insertBook($title, $author, $category, $availability) {
    global $conn;

    $sql = "INSERT INTO books (title, author, category, availability)
            VALUES ('$title', '$author', '$category', '$availability')";

    return mysqli_query($conn, $sql);
}

function getAllBooks() {
    global $conn;

    $sql = "SELECT * FROM books ORDER BY id DESC";
    return mysqli_query($conn, $sql);
}

function getBookById($id) {
    global $conn;

    $sql = "SELECT * FROM books WHERE id = $id";
    return mysqli_query($conn, $sql);
}

function updateBook($id, $title, $author, $category, $availability) {
    global $conn;

    $sql = "UPDATE books 
            SET title='$title', author='$author', category='$category', availability='$availability'
            WHERE id=$id";

    return mysqli_query($conn, $sql);
}

function deleteBook($id) {
    global $conn;

    $sql = "DELETE FROM books WHERE id=$id";
    return mysqli_query($conn, $sql);
}
?>