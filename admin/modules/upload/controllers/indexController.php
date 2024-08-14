<?php
// controllers/indexController.php

namespace App\Controllers;

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use App\Models\DataModel;

class indexController
{
    public function import()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
            $file = $_FILES['file']['tmp_name'];
            try {
                $spreadsheet = IOFactory::load($file);
                $worksheet = $spreadsheet->getActiveSheet();
                $data = $worksheet->toArray();
                
                $model = new IndexModel(); // Đảm bảo tên lớp đúng
    
                foreach ($data as $row) {
                    // Kiểm tra dữ liệu trước khi chèn vào cơ sở dữ liệu
                    if (isset($row[0], $row[1], $row[2], $row[3], $row[4])) {
                        $model->insertData($row[0], $row[1], $row[2], $row[3], $row[4]);
                    } else {
                        echo "Dữ liệu không hợp lệ tại dòng: " . print_r($row, true);
                        continue;
                    }
                    // kiểm tra dữ liệu để đãm bảo không có lỗi 
                    $soseari = isset($row[0]) ? $row[0] : '';
                    $mahang = isset($row[1]) ? $row[1] : '';
                    $tenhang = isset($row[2]) ? $row[2] : '';
                    $ngayxuat = isset($row[3]) ? $row[3] : '';
                    $thoihanbh = isset($row[4]) ? $row[4] : '';

                    $model ->insertData($soseari,$mahang,$tenhang,$ngayxuat,$thoihanbh);
                }
    
                echo "Import thành công!";
            } catch (\Exception $e) {
                echo "Có lỗi xảy ra khi nhập dữ liệu: " . $e->getMessage();
            }
        } else {
            echo "Vui lòng chọn file để upload.";
            
        }
    }
}