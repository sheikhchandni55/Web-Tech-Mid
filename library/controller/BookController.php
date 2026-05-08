<?php
require_once "../model/BookModel.php";

function addBookController($title, $author, $category, $availability) {
    return insertBook($title, $author, $category, $availability);
}

function showBooksController() {
    return getAllBooks();
}

function editBookController($id) {
    return getBookById($id);
}

function updateBookController($id, $title, $author, $category, $availability) {
    return updateBook($id, $title, $author, $category, $availability);
}

function deleteBookController($id) {
    return deleteBook($id);
}
?>