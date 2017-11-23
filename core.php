<?php

session_start();

// Gọi file config vào đầu tiên để lấy các thông tin khởi chạy
include 'config.php';

// Core.php
// Tệp tin này chứa các thông tin khởi chạy cơ bản như kết nối đến database, session,...
// Nếu ứng dụng của bạn có kết nối đến database
// hãy thực hiện kết nối ở đây
//
//