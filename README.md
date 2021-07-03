# Lab11Web
```
Gede Krishna Yogananda Raken Putra
311910429
TI 19 A2
Pemrograman Web
```

# Langkah Praktikum

### 1. Jalankan XAMPP Ubah file php.ini seperti berikut :

![1x](https://user-images.githubusercontent.com/56239989/121812591-94487480-cc92-11eb-8d77-74213a2ecd58.jpg)

### 2. Instal Codeigniter 4 dan Buka http://localhost/lab11_php_ci/ci4/public/ , hasilnya :

![1](https://user-images.githubusercontent.com/56239989/121812731-3a947a00-cc93-11eb-87fc-58b1379bc2ac.jpg)
 
### 3. Buka cmd pada XAMPP Shell lalu buka php spark, untuk menjalankan server ketik "php spark serve" :

- Hasil error/kesalahan :

![2x](https://user-images.githubusercontent.com/56239989/121874541-a4636100-cd31-11eb-9d92-fd56483bbdd3.jpg)

### 4. Mengaktifkan mode Debugging dengan mengubah file .env menjadi = development, seperti berikut :

![3](https://user-images.githubusercontent.com/56239989/121873714-da541580-cd30-11eb-9205-7fa801544301.jpg)

### 5. Untuk mencoba Error hilangkan tanda ; (titik koma) pada Home.php, seperti berikut :

![5](https://user-images.githubusercontent.com/56239989/121874946-12a82380-cd32-11eb-9a11-85f28e785469.jpg)

### 6. Struktur Direktori yang tersedia :

![5x](https://user-images.githubusercontent.com/56239989/121875277-76325100-cd32-11eb-812e-5a498bbaaaf6.jpg)

### 7. Mengarahkan router pada controller :

![6](https://user-images.githubusercontent.com/56239989/121875724-fc4e9780-cd32-11eb-90fd-fc19eec5fc69.jpg)

### 8. Cek pada CMD dengan memasukan "php spark routes",hasilnya akan seperti berikut :

### 9. Akses route yang telah dibuat dengan http://localhost:8080/about, hasilnya :

![8](https://user-images.githubusercontent.com/56239989/121877105-76cbe700-cd34-11eb-9a21-0084c2ac796c.jpg)

### 10. Membuat Controller Page, dengan membuat file baru bernama page.php seperti berikut :

![9](https://user-images.githubusercontent.com/56239989/121877676-0ec9d080-cd35-11eb-9f4f-a01eef869ca6.jpg)

- Hasilnya :

![10](https://user-images.githubusercontent.com/56239989/121877712-1b4e2900-cd35-11eb-820b-41ee82b0e6e0.jpg)

### 11. Mengaktifkan AutoRouting dengan men set nilai true/false, jika true maka fungsi akan aktif

![11](https://user-images.githubusercontent.com/56239989/121879152-bb588200-cd36-11eb-8824-168c8d807d60.jpg)

- Akses http://localhost:8080/page/tos karena halaman in belum masuk pada routing, hasilnya :

![12](https://user-images.githubusercontent.com/56239989/121880203-f0190900-cd37-11eb-9825-830ba341e3de.jpg)

### 12. Membuat View, dengan membuat file baru bernama about.php dan masukan kode berikut :

![13x](https://user-images.githubusercontent.com/56239989/121882649-0379a380-cd3b-11eb-972d-58d6d81e71c8.jpg)

- Hasilnya:

![14](https://user-images.githubusercontent.com/56239989/121882685-0c6a7500-cd3b-11eb-8114-37056eed8825.jpg)

### 13. Membuat Layout Web dengan CSS (bisa menggunakan css praktikum sebelumnya Lab4Web) :

![16](https://user-images.githubusercontent.com/56239989/121883887-7a636c00-cd3c-11eb-90af-2ade6a06e04a.jpg)

### 14. Buatlah folder baru dengan nama "template" pada direktori Views, kemudian buat file **header** dan **footer** sebagai berikut :

![17](https://user-images.githubusercontent.com/56239989/121884069-b0085500-cd3c-11eb-8f75-f7210d8b2bf2.jpg)
![18](https://user-images.githubusercontent.com/56239989/121884076-b26aaf00-cd3c-11eb-9ac0-3c8e664cfddd.jpg)

### 15. Kemudian ubah file app/view/about.php seperti berikut : 

![19](https://user-images.githubusercontent.com/56239989/121884178-ce6e5080-cd3c-11eb-9578-0bc0019bdf55.jpg)

# Praktikum 11 Pertemuan 13 - Pemrograman Web (PHP Framework)

## Laporan Praktikum
### Persiapan
Mengaktifkan beberapa ekstensi php, diantaranya:
- php-json ekstension untuk bekerja dengan JSON;
- php-mysqlnd native driver untuk MySQL;
- php-xml ekstension untuk bekerja dengan XML;
- php-intl ekstensi untuk membuat aplikasi multibahasa;
- libcurl (opsional), jika ingin pakai Curl</br>
![SS1](https://user-images.githubusercontent.com/56240078/121922151-e2797880-cd63-11eb-89dc-766aa9fcfd33.jpg)

Hapus tanda ; (titik koma) pada bagian extension yang akan diaktifkan.
![SS2](https://user-images.githubusercontent.com/56240078/121922158-e5746900-cd63-11eb-8972-da921b23e9a5.jpg)

## Instalasi CodeIgniter 4
- Codeigniter dapat didownload dari website https://codeigniter.com/download
- Extrak file zip Codeigniter ke direktori htdocs/lab11_php_ci.
- Ubah nama direktory framework-4.x.xx menjadi ci4.
- Buka browser dengan alamat http://localhost/lab11_php_ci/ci4/public/

<br>Codeigniter menyediakan CLI, untuk mengaksesnya buka terminal lalu arahkan ke direktori project yang akan dibuat. Kemudian jalankan perintah `php spark` untuk memanggil CLI codeigniter.
![SS4](https://user-images.githubusercontent.com/56240078/121922165-e73e2c80-cd63-11eb-9298-c06a2b3e1a02.jpg)

<br>Codeigniter juga menyediakan mode debugging/development yang dapat menampilkan error/kesalahan dalam kode program. Cara mengaktifkannya dengan mengubah nama file `env` menjadi `.env` kemudian buka filenya dan ubah nilai <b>CI_ENVIRONMENT</b> menjadi <b>development</b>.
![SS5](https://user-images.githubusercontent.com/56240078/121922168-e7d6c300-cd63-11eb-8b2b-bc6027b9f95f.jpg)

### Langkah 1 - Membuat Route
- Router terletak pada file app/config/Routes.php
- Untuk mengetahui route yg ada atau telah berjalan dapat menggunakan perintah `php spark routes`
![SS18](https://user-images.githubusercontent.com/56240078/121931730-338e6a00-cd6e-11eb-8fd0-32d16a64b795.jpg)

- Selanjutnya mencoba akses route yang telah dibuat dengan mengakses 
http://localhost:8080/contact

### Langkah 2 - Membuat Controller
- Membuat file <b>page.php</b> di dalam direktori Controller (/app/Controllers)
![SS19](https://user-images.githubusercontent.com/56240078/121932746-6c7b0e80-cd6f-11eb-877b-31afa59fd6dd.jpg)

- Kemudian refresh browser maka halaman sudah dapat diakses dan menampilkan hasilnya.

- Menambahkan method baru pada controller page.

- Method ini dapat diakses dengan menggunakan alamat: http://localhost:8080/page/tos
![SS10](https://user-images.githubusercontent.com/56240078/121922185-eb6a4a00-cd63-11eb-835f-a730e4ee85f2.jpg)

### Langkah 3 - Membuat View
- Membuat file <b>about.php</b> di dalam direktori View (/app/view/about.php)
![SS11](https://user-images.githubusercontent.com/56240078/121922188-ec02e080-cd63-11eb-861c-cbda673bcf13.jpg)

- Mengubah method about dalam controller page.
![SS12](https://user-images.githubusercontent.com/56240078/121922190-ec9b7700-cd63-11eb-8486-1e2ff02e4fb9.jpg)

### Langkah 4 - Membuat Layout Web dengan CSS
- Buat file css pada direktori public dengan nama style.css (copy file dari praktikum lab4_layout).
![SS14](https://user-images.githubusercontent.com/56240078/121922198-edcca400-cd63-11eb-8f07-4a4637830d0f.jpg)

- Kemudian buat folder template pada direktori view, lalu buat file <b>header.php</b> dan <b>footer.php</b>.
![SS15](https://user-images.githubusercontent.com/56240078/121922201-ee653a80-cd63-11eb-9975-ddc0f966dd7f.jpg)
![SS16](https://user-images.githubusercontent.com/56240078/121922205-eefdd100-cd63-11eb-9862-78897dd1c96e.jpg)

- Kemudian ubah file about.php (/app/view/about.php) seperti berikut.
```
<?= $this->include('template/header'); ?>
<h1><?= $title; ?></h1>
<hr>
<p><?= $content; ?></p>
<?= $this->include('template/footer'); ?>
```

## Laporan Praktikum

### Langkah 1 - Konfigurasi Database
Membuat konfigurasi hubungan ke database server dengan menggunakan file `.env`.
![SS2](https://user-images.githubusercontent.com/56240078/122239933-8fcac880-ceeb-11eb-8a6b-c1af80925afc.jpg)

### Langkah 2 - Membuat Model
Buat file baru pada direktori /app/Models dengan nama ArtikelModel.php
![SS3](https://user-images.githubusercontent.com/56240078/122239934-90635f00-ceeb-11eb-87ca-bd4575ac3cc8.jpg)

### Langkah 3 - Membuat Controller
Buat Controller baru dengan nama Artikel.php pada direktori /app/Controllers. 
![SS4](https://user-images.githubusercontent.com/56240078/122239941-90635f00-ceeb-11eb-9726-37f94fe89797.jpg)

### Langkah 4 - Membuat View
Buat direktori baru dengan nama <b>artikel</b> pada direktori /app/Views, kemudian buat file baru dengan nama <b>index.php</b>.
![SS5](https://user-images.githubusercontent.com/56240078/122239946-90fbf580-ceeb-11eb-9b89-68abd605d7ff.jpg)
Lalu buka alamat http://localhost:8080/artikel untuk melihat hasilnya.

### Langkah 5 - Membuat Tampilan Detail Artikel
Tampilan pada saat judul berita di klik maka akan diarahkan ke halaman yang berbeda.
Tambahkan sebuah fungsi baru pada <b>Controller Artikel</b> (/app/Controllers/Artikel.php) dengan nama <b>view()</b>.
![SS9](https://user-images.githubusercontent.com/56240078/122239959-935e4f80-ceeb-11eb-8bc7-2bd4b1e164bc.jpg)

### Langkah 6 - Membuat View Detail
Buat file baru dalam folder artikel <b>(/app/Views/artikel/)</b> dengan nama <b>detail.php</b> untuk menampilkan halaman detail.
![SS10](https://user-images.githubusercontent.com/56240078/122239961-93f6e600-ceeb-11eb-9b0b-8bb7db7968c8.jpg)

### Langkah 7 - Membuat Route
Buka file <b>Routes.php</b> dalam folder <b>(/app/Config/)</b> dan tambahkan routing untuk ke halaman detail artikel.</br>
`$routes->get('/artikel/(:any)', 'Artikel::view/$1');`
![SS11](https://user-images.githubusercontent.com/56240078/122239965-948f7c80-ceeb-11eb-96e6-f767fa26bce8.jpg)

### Langkah 8 - Membuat Menu Admin
Menu admin adalah untuk proses CRUD data artikel.</br>
Buat method atau fungsi baru pada <b>Controller Artikel</b> dengan nama <b>admin_index()</b>.
![SS13](https://user-images.githubusercontent.com/56240078/122239972-95c0a980-ceeb-11eb-8aba-7fb4a9c56a09.jpg)

Kemudian buat file <b>admin_index.php</b> dalam folder <b>(/app/Views/artikel/)</b> untuk tampilan halaman admin.
![SS14](https://user-images.githubusercontent.com/56240078/122239974-95c0a980-ceeb-11eb-97a7-47d1caa5ddd9.jpg)

Kemudian tambahkan routing untuk menu admin sebagai berikut:
![SS23](https://user-images.githubusercontent.com/56240078/122246380-b2abab80-cef0-11eb-8082-8fd4940c390a.jpg)

### Langkah 9 - Menambah Data Artikel
Tambahkan fungsi/method baru pada <b>Controller Artikel</b> dengan nama <b>add()</b>.
![SS16](https://user-images.githubusercontent.com/56240078/122239982-96f1d680-ceeb-11eb-9f7f-3651f57e9431.jpg)

Kemudian buat view untuk form tambah dengan nama <b>form_add.php</b> dalam folder <b>(/app/Views/artikel/)</b>.
![SS17](https://user-images.githubusercontent.com/56240078/122239986-978a6d00-ceeb-11eb-927b-029f5d5c61b7.jpg)

### Langkah 10 - Mengubah Data
Tambahkan fungsi/method baru pada <b>Controller Artikel</b> dengan nama <b>edit()</b>.
![SS19](https://user-images.githubusercontent.com/56240078/122239990-98bb9a00-ceeb-11eb-9930-89600fddaaed.jpg)

Kemudian buat view untuk form tambah dengan nama <b>form_edit.php</b> dalam folder <b>(/app/Views/artikel/)</b>.
![SS20](https://user-images.githubusercontent.com/56240078/122239992-99543080-ceeb-11eb-81b5-ad681d379be8.jpg)

### Langkah 11 - Menghapus Data
Tambahkan fungsi/method baru pada <b>Controller Artikel</b> dengan nama <b>delete()</b>.
![SS22](https://user-images.githubusercontent.com/56240078/122239995-99ecc700-ceeb-11eb-89f6-9fc17f9a256e.jpg)

## Pertanyaan dan Tugas
Selesaikan programnya sesuai Langkah-langkah yang ada. Anda boleh melakukan improvisasi.

## Jawab/Hasil
Saya telah menyelesaikan program diatas agar dapat berjalan dengan semestinya. Seperti membuat file <b>admin_header.php</b> dan <b>admin_footer.php</b> serta CSSnya.

