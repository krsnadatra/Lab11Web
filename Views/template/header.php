<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/style.css');?>">
    <link rel="shortcut icon" href="<?= base_url('/R.png');?>">
</head>
<body>
    <div id="container">
    <div class="pembuat">Rofi Ismail</div>
    <header>
        <img width="75" height="75" alt="" class="header-image" src="<?= base_url('/R.png');?>">
        <h1>Layout Sederhana</h1>
    </header>
    <nav>
        <a href="<?= base_url('/');?>" class="active">Home</a>
        <a href="<?= base_url('/artikel');?>">Artikel</a>
        <a href="<?= base_url('/about');?>">About</a>
        <a href="<?= base_url('/contact');?>">Kontak</a>
        <a href="<?= base_url('/admin/artikel');?>">Admin</a>
    </nav>
    <section id="wrapper">
        <section id="main">
