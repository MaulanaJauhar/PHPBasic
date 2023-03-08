# PHP Basic
#### Source : Youtube [Laracast](https://www.youtube.com/playlist?list=PL3VM-unCzF8ipG50KDjnzhugceoSG3RTC)

### 1. How to Choose A First Programming Language
#### Dalam Memilih bahasa pemrograman, harus sesuai dengan tujuan apa yang kita miliki saat ingin belajar bahasa tersebut. Contohnya apabila kita ingin membuat situs web, kita bisa belajar bahasa pemrograman seperti HTML, CSS, dan JS. Jika kita ingin membuat aplikasi desktop, kita mungkin bisa memilih bahasa seperti Python, C++, atau Java. Jika kita benar benar baru belajar tentang bahasa pemrograman, mungkin dapat diawali dengan memilih bahasa yang lebih mudah seperti Python atau Ruby. Jika kita ingin menjadi seorang pengembang Game, kita bisa memilih bahasa C++ atau C, dan apa bila kita ingin fokus pada pengembangan Web, kita bisa memilih bahasa JavaScript atau PHP.
#### PHP adalah bahasa pemrograman server-side yang dirancang untuk pengembangan web. PHP digunakan untuk menghasilkan konten dinamis pada website, seperti halaman web yang mengambil data dari database, membuat dan mengirim email, mengolah formulir, dan masih banyak lagi. PHP juga dapat digunakan untuk membuat aplikasi web yang lebih besar dan kompleks. PHP umumnya digunakan dengan teknologi web seperti Apache, MySQL, dan HTML. Saat ini, PHP terus berkembang dan ditingkatkan oleh komunitas pengembang web, dan menjadi salah satu bahasa pemrograman web yang paling populer dan mudah digunakan.

### 2. Tools of the Trade
Materi yang dibahas adalah tentang perangkat yang dibutuhkan untuk memulai belajar PHP dan cara menginstalnya.
- Text editor
  adalah program yang digunakan untuk menulis kode PHP. Ada banyak text editor yang dapat digunakan untuk menulis kode PHP, seperti Sublime Text, Notepad++, Visual Studio Code, dan lain-lain.
- Web server
  adalah program yang digunakan untuk menjalankan kode PHP. Beberapa web server yang dapat digunakan untuk menjalankan kode PHP adalah Apache, Nginx, IIS, dan lain-lain.
- PHP
  adalah bahasa pemrograman yang digunakan untuk membuat website dinamis. PHP dapat diinstal secara mandiri atau sebagai bagian dari paket software seperti XAMPP atau WAMP.
- Menginstal XAMPP
  adalah paket software yang berisi Apache, MySQL, dan PHP yang dapat diinstal dengan mudah.
Setelah XAMPP terinstal, kita dapat menjalankan web server dengan membuka program XAMPP Control Panel dan menekan tombol "Start" pada Apache dan MySQL.
Dengan memahami perangkat yang dibutuhkan untuk belajar PHP dan cara menginstalnya, kita dapat mulai menulis kode PHP dan menjalankannya pada web server lokal.

### 3. Your First PHP Tag
#### PHP diawali dengan ``` <?php ``` dan diakhiri dengan ```?>``` Untuk menampilkan baris kode yang kita ketikkan pada browser, kita dapat menggunakan perintah ``` echo ``` Perintah echo digunakan untuk menampilkan teks atau variabel pada browser. Perintah echo dapat digunakan di dalam tag PHP, atau diluar tag PHP. Contoh perintah echo yang digunakan di dalam tag PHP adalah sebagai berikut.
```
<?php
  echo "Hello, World";
?>
```
##### Penjelasan :
1. Tag PHP diawali dengan ```<?php``` dan diakhiri dengan ```?>```
2. Perintah ```echo``` digunakan untuk menampilkan ```"Hello, World"``` pada browser
3. Perintah ```echo``` dapat digunakan di dalam tag PHP, atau diluar tag PHP
4. Tanda ```;``` digunakan untuk menandai akhir dari perintah

### 4. Variables
#### Variabel adalah tempat untuk menyimpan data. Variabel dapat berisi teks, angka, atau nilai lainnya. Variabel diawali dengan tanda ```$``` dan diikuti dengan nama variabel. Nama variabel dapat berupa huruf, angka, atau garis bawah. Nama variabel bersifat case-sensitive, artinya ```$name``` dan ```$Name``` adalah dua variabel yang berbeda. Contoh kode untuk mendeklarasikan variabel adalah sebagai berikut.
```
<?php
  // Variabel $greeting dengan value "Hello"
$greeting = "Hello";

// Pemanggilan dalam echo, dipisahkan oleh ' . ' jika terdapat tambahan argumen, misalnya string atau variabel lain (concate)
echo $greeting . "Everybody!";

//Untuk menambahkan spasi diantara kata dan variabel dapat menggunakan
echo $greeting . " Everybody!";
atau bisa juga dengan
echo $greeting . " " . "Everybody!";

// Variabel juga dapat dipanggil di didalam string
echo "$greeting Everybody!"; // Output sama dengan di atas
?>
```
#### Terkadang variabel akan merujuk ke hal-hal yang tidak dapat kita kendalikan ,mungkin merujuk pada sesuatu yang diinput oleh pengguna di dalamnya ,mungkin merujuk pada data yang berasal dari database

### 5. Conditionals and Boolean
#### Conditional merupakan salah satu ekspresi dalam pemrograman yang menghasilkan dua nilai yaitu *Trua/False*. Jika kondisi tersebut bernilai *true* maka sistem menjalankan statement di dalam if statement namun jika kondisi tersebut bernilai *false* maka sistem tidak menjalankan statement tersebut. 
#### Terdapat sebuah tipe data yang hanya memiliki nilai  kembalian *true / false*, yaitu boolean. Nilai boolean memiliki default *false*
#### Contoh kode untuk membuat conditional adalah sebagai berikut.
```
<?php
  $name = "Dark Matter";
  $read = true;

  //Conditional (if-else)
  if ($read) {
    $message = "You have read $name"; // Mengembalikan nilai true
  } else {
    $message = "You have not read $name"; // Mengembalikan nilai false
  }
?>

//Menggunakan echo untuk menampilkan nilai dari variabel $message
<h1>
  <?php echo $message; ?>
</h1>
//Atau bisa juga menggunakan <?= ?> untuk menampilkan nilai dari variabel $message
<h1>
  <?= $message; ?>
</h1>
```
#### Hasil dari kode di atas adalah sebagai berikut.
![image](https://github.com/MaulanaJauhar/PHPBasic/blob/8c365a6fe7c776ea02cc46b7f8dab1d3131a4206/variable.PNG)

### 6. Arrays
#### Array adalah kumpulan data yang memiliki index. Index adalah angka yang dimulai dari 0. Array dapat menyimpan satu atau lebih nilai. Array dapat menyimpan berbagai jenis data, termasuk teks, angka, dan boolean.Contoh kode array adalah sebagai berikut.
```
<?php
$books = [
  "Do Androids Dream of Electric Sheep",
  "The Langoliers",
  "Hail Mary"];
?>
```
#### Untuk mengakses data pada array dapat digunakan ekspresi perulangan(*loop*) di dalam tag html, misalnya *for, foreach, while,* atau *do-while*. Contoh menggunakan *foreach* :
```
 <ul>
    <?php foreach ($books as $book) : ?>
      <li>
        <?= $book; ?>
      </li>
    <?php endforeach; ?>
  </ul>
```
#### Hasil dari kode di atas adalah sebagai berikut.
![image](https://github.com/MaulanaJauhar/PHPBasic/blob/master/img/array.PNG)
### 7. Associative Arrays
### 8. Functions And Filtering
### 9. Lambda Functions
### 10. Separate PHP Logic From the Template
### 11. Technical Check-In
### 12. Page Links
### 13. Partials
### 14. Superglobals and Current Page Styling
### 15. Make a PHP Router
### 16. Create a MySql Database
### 17. PDO First Steps
### 18. Extract a PHP Database Class
### 19. Environments and Configuration
### 20. SQL Injection Vulnerabilities Explained
### 21. Mini-Project: Notes App
### 22. Render the Notes and Note Page
### 23. Introduction to Authorization
### 24. Programming is Rewriting
### 25. Intro to Forms and Request Methods
### 26. Always Escape Untrusted Input
### 27. Introduction to Form Validation
### 28. Extract a Simple Validation Class
### 29. Resourceful Naming Conventions
### 30. Autoloading and Extraction
### 31. Namespacing : What, Why, How
### 32. Handle Multiple Request Methods From a Controller Action
### 33. Build a Better PHP Router
### 34. One Request, One Controller
### 35. Make Your First Service Container
### 36. Updating a Resource With PATCH
### 37. Sessions 101
### 38. Register a New User
