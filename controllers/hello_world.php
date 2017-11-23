<?php

// controllers/hello_world.php
// Đây là một controller

// Để khởi chạy controller này, trước tiên cần phải khởi chạy "nhân" ứng dụng trước
// bằng các gọi vào đây file core.php
include '../core.php';

// Nếu controller này có sử dụng model
// hãy gọi các file model vào đây nữa

// Code xử lý logic của controller này sẽ nằm ở đây
// 
// 

$heading = 'Hello world';

// Gọi vào đây file views để hiển thị dữ liệu
include '../views/hello_world.php';