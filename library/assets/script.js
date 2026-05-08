$(document).ready(function () {

    loadBooks();

    $("#bookForm").submit(function (e) {
        e.preventDefault();

        let id = $("#book_id").val();
        let actionType = id == "" ? "add" : "update";

        $.ajax({
            url: "../ajax/book_ajax.php",
            type: "POST",
            data: {
                action: actionType,
                id: id,
                title: $("#title").val(),
                author: $("#author").val(),
                category: $("#category").val(),
                availability: $("#availability").val()
            },
            success: function (response) {

                alert(response);

                $("#bookForm")[0].reset();

                $("#book_id").val("");

                $("#submitBtn").text("Add Book");

                loadBooks();
            }
        });
    });

});



function loadBooks() {

    $.ajax({
        url: "../ajax/book_ajax.php",
        type: "POST",
        data: {
            action: "show"
        },

        success: function (data) {

            $("#bookTable").html(data);
        }
    });

}



function editBook(id) {

    $.ajax({
        url: "../ajax/book_ajax.php",
        type: "POST",

        data: {
            action: "edit",
            id: id
        },

        success: function (data) {

            let book = JSON.parse(data);

            $("#book_id").val(book.id);
            $("#title").val(book.title);
            $("#author").val(book.author);
            $("#category").val(book.category);
            $("#availability").val(book.availability);

            $("#submitBtn").text("Update Book");
        }
    });

}



function deleteBook(id) {

    if (confirm("Are you sure you want to delete this book?")) {

        $.ajax({
            url: "../ajax/book_ajax.php",
            type: "POST",

            data: {
                action: "delete",
                id: id
            },

            success: function (response) {

                alert(response);

                loadBooks();
            }
        });
    }

}



/* ===========================
   SEARCH FUNCTION
=========================== */

$(document).on("keyup", "#searchInput", function () {

    let value = $(this).val().toLowerCase();

    $("#bookTable tr").filter(function () {

        $(this).toggle(
            $(this).text().toLowerCase().indexOf(value) > -1
        );

    });

});