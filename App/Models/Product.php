<?php
namespace App\Models;
use PDO;

class Product extends BaseModels
{
    public function getAllProducts()
    {
        // Câu lệnh SQL lấy đúng các cột bạn đã tạo trong ảnh
        $sql = "SELECT id, name, price, category_id FROM products";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}