<?php
namespace App\Models;
use PDO;
use Exception;

class BaseModel
{
    protected $conn;

    public function __construct()
    {
        // Thay 'ten_database_lab2' bằng tên bạn thấy trong phpMyAdmin
        $host = "localhost";
        $dbname = "ten_database_lab2";
        $username = "root";
        $password = "";

        try {
            $this->conn = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
            // Thiết lập báo lỗi để dễ sửa nếu gõ sai tên cột
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die("Kết nối Database thất bại: " . $e->getMessage());
        }
    }
}