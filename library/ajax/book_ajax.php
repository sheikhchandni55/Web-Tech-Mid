<?php
require_once "../controller/BookController.php";

$action = $_POST['action'];

if ($action == "add") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $availability = $_POST['availability'];

    if (addBookController($title, $author, $category, $availability)) {
        echo "Book added successfully";
    } else {
        echo "Failed to add book";
    }
}

if ($action == "show") {
    $result = showBooksController();

    $output = "";

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "
        <tr>
            <td>{$row['id']}</td>
            <td>{$row['title']}</td>
            <td>{$row['author']}</td>
            <td>{$row['category']}</td>
            <td>{$row['availability']}</td>
            <td>
                <button onclick='editBook({$row['id']})'>Edit</button>
                <button onclick='deleteBook({$row['id']})'>Delete</button>
            </td>
        </tr>";
    }

    echo $output;
}

if ($action == "edit") {
    $id = $_POST['id'];
    $result = editBookController($id);
    $row = mysqli_fetch_assoc($result);

    echo json_encode($row);
}

if ($action == "update") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $category = $_POST['category'];
    $availability = $_POST['availability'];

    if (updateBookController($id, $title, $author, $category, $availability)) {
        echo "Book updated successfully";
    } else {
        echo "Failed to update book";
    }
}

if ($action == "delete") {
    $id = $_POST['id'];

    if (deleteBookController($id)) {
        echo "Book deleted successfully";
    } else {
        echo "Failed to delete book";
    }
}
?>