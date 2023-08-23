<?php
require_once('../model/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Fashion MyLiShop</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="title" content="Fashion MyLiShop - fashion mylishop" />
    <meta name="description" content="Fashion MyLiShop - fashion mylishop" />
    <meta name="keywords" content="Fashion MyLiShop - fashion mylishop" />
    <meta name="author" content="Hôih My" />
    <meta name="author" content="Y Blir" />
    <link rel="icon" type="image/png" href="images/logohong.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        
</head>
<body>
<div class="container-fluid">
  <style>
    /* Thay đổi màu nền và màu chữ của Navbar */
    .navbar {
      background-color: #343a40;
    }

    .navbar-brand {
      color: #fff;
      font-weight: bold;
    }

    /* Thay đổi màu chữ và hiệu ứng khi rê chuột vào các liên kết */
    .nav-link {
      color: #fff;
      transition: color 0.3s ease;
    }

    .nav-link:hover {
      color: #ffc107;
    }

    /* Thay đổi kiểu hiển thị của nút Toggle */
    .navbar-toggler-icon {
      background-color: #fff;
    }

    /* Tùy chỉnh padding giữa các phần tử trong Navbar */
    .navbar-nav {
      gap: 10px;
    }

    /* Thay đổi màu nền và màu chữ của nút Đăng Nhập và Đăng Kí */
    .nav-item .nav-link {
      background-color: #ffc107;
      color: #343a40;
      padding: 8px 16px;
      border-radius: 4px;
    }

    .nav-item .nav-link:hover {
      background-color: #e0a800;
      color: #343a40;
    }
  </style>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="./TrangChu.php">Fashion MyLiShop</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./TrangChu.php">Trang chủ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="./product_add.php">Chỉnh sửa</a>
          </li>
        </ul>
      </div>
      <div>
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="./login.php">Đăng Nhập</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Đăng Kí</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>