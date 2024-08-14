<?php
// public/index.php
require '../upload/models/indexModel.php';
require '../upload/controllers/indexController.php';

$pdo = new PDO('mysql:host=localhost;dbname=tinhoc', 'username', 'password');

$model = new ExcelModel($pdo);
$controller = new UploadController($model);

$action = isset($_GET['action']) ? $_GET['action'] : 'showForm';

if ($action === 'upload') {
    $controller->upload();
} else {
    $controller->showForm();
}
