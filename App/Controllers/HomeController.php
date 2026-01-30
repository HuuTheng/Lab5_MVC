<?php
namespace App\Controllers;
use App\Models\Student;

class HomeController
{
    public function index()
    {
        $message = "Chào mừng đến với hệ thống MVC!";
        $studentInfo = (new Student())->getInfo();
        // Gọi view (Bài 3)
        include 'views/home.php';
    }
}