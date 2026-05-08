<!DOCTYPE html>
<html>
<head>
    <title>University Library Management System</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: "Segoe UI", Arial, sans-serif;
        }

        body {
            margin: 0;
            background: #f4f7fb;
            color: #333;
        }

        .header {
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
            padding: 25px;
            text-align: center;
        }

        .header h1 {
            margin: 0;
            font-size: 30px;
        }

        .header p {
            margin-top: 8px;
            font-size: 15px;
            opacity: 0.9;
        }

        .container {
            width: 90%;
            margin: 30px auto;
        }

        .card {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0,0,0,0.08);
            margin-bottom: 25px;
        }

        .card h2 {
            margin-top: 0;
            color: #1e3c72;
            border-bottom: 2px solid #e5eaf5;
            padding-bottom: 10px;
        }

        .form-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        label {
            font-weight: 600;
            font-size: 14px;
        }

        input, select {
            width: 100%;
            padding: 11px;
            margin-top: 6px;
            border: 1px solid #ccd6e0;
            border-radius: 8px;
            font-size: 14px;
        }

        input:focus, select:focus {
            outline: none;
            border-color: #2a5298;
            box-shadow: 0 0 4px rgba(42,82,152,0.4);
        }

        .btn-area {
            margin-top: 20px;
            text-align: right;
        }

        button {
            border: none;
            padding: 10px 16px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 14px;
            font-weight: 600;
        }

        #submitBtn {
            background: #2a5298;
            color: white;
        }

        #submitBtn:hover {
            background: #1e3c72;
        }

        .edit-btn {
            background: #ffc107;
            color: #222;
            margin-right: 5px;
        }

        .delete-btn {
            background: #dc3545;
            color: white;
        }

        .table-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .search-box {
            width: 250px;
            padding: 10px;
            border-radius: 8px;
            border: 1px solid #ccd6e0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 18px;
        }

        thead {
            background: #1e3c72;
            color: white;
        }

        th, td {
            padding: 13px;
            text-align: center;
            border-bottom: 1px solid #e5eaf5;
        }

        tbody tr:hover {
            background: #f1f5ff;
        }

        .badge {
            padding: 6px 10px;
            border-radius: 20px;
            font-size: 13px;
            font-weight: 600;
        }

        .available {
            background: #d4edda;
            color: #155724;
        }

        .unavailable {
            background: #f8d7da;
            color: #721c24;
        }

        @media(max-width: 900px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .table-header {
                flex-direction: column;
                gap: 10px;
                align-items: stretch;
            }

            .search-box {
                width: 100%;
            }
        }
    </style>
</head>

<body>

<div class="header">
    <h1>University Library Management System</h1>
    <p>Manage book records using PHP, MySQL, AJAX and MVC structure</p>
</div>

<div class="container">

    <div class="card">
        <h2>Book Information Form</h2>

        <form id="bookForm">
            <input type="hidden" id="book_id">

            <div class="form-grid">
                <div>
                    <label>Book Title</label>
                    <input type="text" id="title" placeholder="Enter book title" required>
                </div>

                <div>
                    <label>Author Name</label>
                    <input type="text" id="author" placeholder="Enter author name" required>
                </div>

                <div>
                    <label>Category</label>
                    <input type="text" id="category" placeholder="Example: CSE, EEE, Novel" required>
                </div>

                <div>
                    <label>Availability</label>
                    <select id="availability">
                        <option value="Available">Available</option>
                        <option value="Unavailable">Unavailable</option>
                    </select>
                </div>
            </div>

            <div class="btn-area">
                <button type="submit" id="submitBtn">Add Book</button>
            </div>
        </form>
    </div>

    <div class="card">
        <div class="table-header">
            <h2>Book Records</h2>
            <input type="text" id="searchInput" class="search-box" placeholder="Search book...">
        </div>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Book Title</th>
                    <th>Author</th>
                    <th>Category</th>
                    <th>Availability</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody id="bookTable"></tbody>
        </table>
    </div>

</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="../assets/script.js"></script>

</body>
</html>