<?php
namespace App\Controllers;
use App\Models\Product;

class ProductController
{
    public function list()
    {
        // 1. Khởi tạo Model và lấy dữ liệu
        $model = new Product();
        $products = $model->getAllProducts();

        // 2. Gọi View và truyền biến $products sang
        include 'Views/product_list.php';
    }
}