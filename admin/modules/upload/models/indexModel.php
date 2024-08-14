<?php
require "..upload/vendor/autoload.php"

use PhpOffice\PhpSpreadsheet\IOFactory;

class ExcelModel {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function saveData($filePath) {
        $spreadsheet = IOFactory::load($filePath);
        $sheet = $spreadsheet->getActiveSheet();
        $rows = $sheet->toArray();

        foreach ($rows as $row) {
            // Đảm bảo các chỉ số tương ứng với cấu trúc của file Excel của bạn
            $SoSerial = $row[0];
            $MaHang = $row[1];
            $TenHang = $row[2];
            $NgayXuat = $row[3];
            $Thoihanbh = $row[4];

            // Chuẩn bị và thực thi câu lệnh SQL
            $stmt = $this->pdo->prepare('INSERT INTO your_table (soserial,mahang,tenhang,ngayxuat,thoihanbh) VALUES (:soserial, :mahang, :tenhang, :ngayxuat, :thoihanbh)');
            $stmt->execute([
                ':soserial' => $SoSerial,
                ':mahang' => $MaHang,
                ':tenhang' => $TenHang,
                ':ngayxuat' => $NgayXuat,
                ':thoihanbh' => $Thoihanbh,
            ]);
        }
    }
}
