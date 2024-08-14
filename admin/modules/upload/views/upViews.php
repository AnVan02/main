
<!-- views/import_form.php -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .container {
            background-color: #CCFFFF; /* Màu nền của container */
            padding: 70px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group label {
            color: #495057; /* Màu của nhãn (label) */
        }
        .form-control {
            border-color: #FFFF66; /* Màu viền của ô nhập liệu */
        }
        .btn-primary {
            background-color: #0099FF; /* Màu nền của nút */
            border-color: #007bff; /* Màu viền của nút */
        }
        .btn-primary:hover {
            background-color: #0056b3; /* Màu nền của nút khi hover */
            border-color: #004085; /* Màu viền của nút khi hover */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h2>Nhập dữ liệu Excel</h2>
        <form action="import.php" method="post" enctype="multipart/form-data">
        <div class="col-md-4 ">
          <img src="image.png" height="200px" width="350px">
        </div>
            <div class="form-group">
                <input type="file" name="file" accept=".xlsx, .xls" required>
                <label for="fileInput">Chọn file Excel </label>
                <input type="file" class="form-control" name="file" id="fileInput" required>
                

            </div>

            <button type="submit" class="btn btn-primary" name="import">Import</button>
        </form>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>