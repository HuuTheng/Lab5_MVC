<?php
require 'vendor/autoload.php';
use App\Controllers\HomeController;
use App\Controllers\ProductController;


$page = $_GET['page'] ?? 'home';

if ($page === 'home') {
    (new HomeController())->index();
} elseif ($page === 'products') {
    (new ProductController())->list();
} else {
    echo "404 - Không tìm thấy trang!";
}