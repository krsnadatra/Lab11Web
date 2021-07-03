<?php

use App\Controllers\User;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/adminstyle.css');?>">
    <link rel="shortcut icon" href="<?= base_url('/R.png');?>">
</head>
<body>
    <div id="container">
    <div class="pembuat">Rofi Ismail</div>
    <header>
        <img width="75" height="75" alt="" class="header-image" src="<?= base_url('/R.png');?>">
        <h1>Halaman Admin</h1>
    </header>
    <navbar>
        <a href="<?= base_url('/admin/artikel');?>" class="active">Dashboard</a>
        <a href="<?= base_url('/artikel');?>">Artikel</a>
        <a href="<?= base_url('/admin/artikel/add');?>">Tambah Artikel</a>
        <a href="<?= base_url('/admin/logout');?>" onclick="return confirm('Yakin ingin logout?')">Logout</a>
    </navbar>
    <section id="wrapper">