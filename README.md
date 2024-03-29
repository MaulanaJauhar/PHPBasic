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
```php
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
```php
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
```php
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
```php
<?php
$books = [
  "Do Androids Dream of Electric Sheep",
  "The Langoliers",
  "Hail Mary"];
?>
```
#### Untuk mengakses data pada array dapat digunakan ekspresi perulangan(*loop*) di dalam tag html, misalnya *for, foreach, while,* atau *do-while*. Contoh menggunakan *foreach* :
```php
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
#### Array asosiatif adalah jenis array yang memungkinkan penggunaan indeks yang ditentukan sendiri, yang biasanya diberikan nama kunci atau label (key). Ini berbeda dengan array numerik biasa yang menggunakan indeks numerik. Dalam PHP, array asosiatif direpresentasikan dengan kurung kurawal { } dan menggunakan tanda panah (=>) untuk menghubungkan kunci dengan nilainya. Contoh kode array asosiatif adalah sebagai berikut.
```php
<?php 
  $books = [
    "Do Andorids Dream of Electric Sheep",
    "The Langoliers",
    "Hail Mary"
  ];
?>
<p>
  <?php echo $books[1]; ?>
</p>
```
#### Hasil dari kode di atas adalah sebagai berikut.
![image](https://github.com/MaulanaJauhar/PHPBasic/blob/master/img/asscArray1.PNG)

#### Dan apabila terdapat perubahan pada data di dalam array kita dapat menggunakan Associative Array untuk mengakses data tersebut. Contoh kode array asosiatif adalah sebagai berikut.
```php
<?php
  $books = [
    [
      'name'          => "Do Andorids Dream of Electric Sheep",
      'author'        => "Philip K. Dick",
      'purchase_url'  => "http://example.com"
    ],
    [
      'name'          => "Project Hail Mary",
      'author'        => "Andy Weir",
      'purchase_url'  => "http://example.com"
    ]
  ];
?>
```
#### Untuk dapat mengakses data yang ada pada array tersebut, kita dapat menggunakan perulangan lagi, contoh disini akan menggunakan *foreach*.
```php
ul>
  <?php foreach ($books as $book) : ?>
    <li>
      <h2><?= $book['name']; ?></h2>
      <p>By <?= $book['author']; ?></p>
      <p><a href="<?= $book['purchase_url']; ?>">Purchase</a></p>
    </li>
  <?php endforeach; ?>
</ul>
```
#### Hasil dari kode di atas adalah sebagai berikut.
![image](https://github.com/MaulanaJauhar/PHPBasic/blob/master/img/asscArray2.PNG)

### 8. Functions And Filtering
#### *Function* dalam pemrograman termasuk PHP adalah sebuah blok kode yang dapat dipanggil atau digunakan berulang kali dalam program. Fungsi biasanya memiliki nama yang unik dan tugas yang spesifik, sehingga memudahkan pengembang untuk menggunakan ulang kode yang sama tanpa perlu menuliskan ulang kode tersebut. *Function* hanya akan dijalankan ketika dipanggil.
#### Sedangkan *filtering* dalam pemrograman termasuk PHP mengacu pada proses memilih sebagian data dari kumpulan data berdasarkan suatu kriteria tertentu.
#### Pengkondisian dengan hanya sebuah tanda ```"="``` tidak tepat, karena 1 ```"="``` akan mengubah value dari semua key ```author``` menjadi ```'Andy Weir'``` atau dinamakan *assign value*, sedangkan dibutuhkan filter data untuk menampilkan buku dengan ```author``` ```"Andy Weir"``` saja atau *equal to*, sehingga harus dicek kesamaan atau *equality* dengan 3 tanda ```"="``` atau ```"==="``` Maka kondisi dalam if menjadi :
### Nilai Variable : 
```php
<?php 
        $books = [
            [
              'name'          => "Do Andorids Dream of Electric Sheep",
              'author'        => "Philip K. Dick",
              'releaseYear'   => 1968,
              'purchase_url'  => "http://example.com"
            ],
            [
              'name'          => "Project Hail Mary",
              'author'        => "Andy Weir",
              'releaseYear'   => 2021,
              'purchase_url'  => "http://example.com"
            ],
            [
              'name'          => "The Martisan",
              'author'        => "Andy Weir",
              'releaseYear'   => 2011,
              'purchase_url'  => "http://example.com"
            ]
          ];
    ?>
```
### Filter Data

```php
<ul>
  <?php foreach ($books as $book) :?>
    <?php if ($book['author'] === 'Andy Weir') :?>
      <li>
        <a href="<?= $book['purchase_url'] ?>">
          <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
        </a>
      </li>
    <?php endif; ?>
  <?php endforeach; ?>
</ul>
```
#### Hasil dari kode di atas adalah sebagai berikut.
![image](https://github.com/MaulanaJauhar/PHPBasic/blob/master/img/filtering.PNG)
#### Sedangkan untuk membuat *function* dapat menggunakan kode berikut.
```php
//Deklarasi function
function filterByAuthor(){
    //Kode
}

//Untuk melakukan pemanggilan function, cukup dengan memanggil nama functionnya dengan menambahkan tanda kurung ()
filterByAuthor();

//Menampilkan isi dari function yang sudah dibuat ke dalam browser
function filterByAuthor(){
    return "gibberish"; 
    //Return adalah sebuah keyword yang digunakan untuk mengembalikan nilai dari sebuah function, dapat berupa string, integer, array, object, boolean, dan lain-lain.
}
// Contoh
<p>
  <?= filterByAuthor($books); ?>
  //Di browser akan menampilkan "gibberish"
</p>
```
#### Filter Data dengan Function
```php
//Kita bisa menambahkan perulanagan foreach di dalam function untuk melakukan filter data
//Contoh kita akan menfilter data menggunakan foreach loop pada array $books sebagai parameter berdasarkan author 'Andy Weir'
function filterByAuthor($books){
    $filtered = [];
    foreach ($books as $book) {
        if ($book['author'] === 'Andy Weir') {
            $filtered[] = $book;
        }
    }
    return $filtered;//Array yang sudah difilter akan dikembalikan ke dalam function
}
//Untuk menampilkan hasil dari function filterByAuthor, kita bisa menggunakan perulangan foreach lagi
<ul>
  <?php foreach (filterByAuthor($books) as $book) :?>
    <li>
      <a href="<?= $book['purchase_url'] ?>">
        <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
      </a>
    </li>
  <?php endforeach; ?>
```
#### Jika diamati lebih lanjut, function di atas masih memerlukan perubahan lagi. Karena apabila kita ingin menampilkan 'author' yang berbeda, kita harus merubah nama 'author' di dalam function. Sehingga kita bisa membuat function yang lebih dinamis dengan menggunakan parameter baru.
```php
// Membuat parameter baru $author untuk menampung nilai 'author' yang akan difilter
function filterByAuthor($books, $author){
    $filtered = [];
    foreach ($books as $book) {
        if ($book['author'] === $author) {
            $filtered[] = $book;
        }
    }
    return $filtered;
}
<ul>
  <?php foreach (filterByAuthor($books, 'Andy Weir') as $book) :?>
    <li>
      <a href="<?= $book['purchase_url'] ?>">
        <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>
```
#### Hasil dari kode di atas adalah sebagai berikut.
![image](https://github.com/MaulanaJauhar/PHPBasic/blob/master/img/filtering%26function.PNG)

### 9. Lambda Functions
#### Function dapat digunakan untuk menfilter buku berdasarkan ```author``` tetapi jika kita ingin menambahkan opsi filter lagi, kita harus membuat function baru. Sehingga kita bisa menggunakan *lambda function* untuk membuat function yang lebih dinamis. Function yang dibuat sebelumnya juga dapat dimasukkan ke dalam sebuah variabel yang dinamakan *extract variable*
#### Contoh :
```php
<?php
$filteredBooks = filterByAuthor($books, 'Andy Weir');
?>
<ul>
  <?php foreach ($filteredBooks as $book) :?>
    <li>
      <a href="<?= $book['purchase_url'] ?>">
        <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>
```
#### Function juga dapat dibuat dan disimpan dalam variabel. Hal ini dinamakan *Lambda Function / Anonymous Function*. 
```php
//Membuat Variabel yang Berisikan Function
<?php
  $filterByAuthor = function ($books, $author) {
    $filtered = [];
    foreach ($books as $book) {
        if ($book['author'] === $author) {
            $filtered[] = $book;
        }
    }
    return $filtered;
  };
  $filtered = $filterByAuthor($books, 'Andy Weir');
?>

//Memanggil dalam Tag HTML
<ul>
  <?php foreach ($filtered as $book) :?>
    <li>
      <a href="<?= $book['purchase_url'] ?>">
        <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>
```
#### Function sebelumnya dapat disederhanakan dengan menggunakan *refactoring* dengan cara menambahkan parameter function sesuai dengan *key* dan *value* yang akan difilter.
```php
<?php
  function filter($items, $key, $value) {
    $filteredItems = [];
    foreach ($items as $item) {
        if ($item[$key] === $value) {
            $filteredItems[] = $item;
        }
    }
    return $filteredItems;
  };
  $filteredBooks = filter($books, 'releaseYear', 2011);
?>

<ul>
  <?php foreach ($filteredBooks as $book) :?>
    <li>
      <a href="<?= $book['purchase_url'] ?>">
        <?= $book['name'] ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>
```
#### *Refactoring* juga dapat diimplementasikan jika menginginkan *value* yang lebih fleksibel, misalnya terdapat data dengan tipe data integer dan ingin ditampilkan data yang <= dari value tersebut, maka kita dapat memisahkan pengkondisian *if* ke dalam sebuah function, sehingga menjadi :
```php
<?php
function filter($items, $function){
        $filteredItems = [];
        foreach ($items as $item) {
            if ($function($item)) {
                $filteredItems[] = $item;
            }
        }
        return $filteredItems;
    }
    
    // Filter buku dengan tahun rilis < 2000

    $filteredBooks = filter($books, function($book){
        return $book['releaseYear'] < 2000;
    });
    ?>
   
   // Menampilkan buku dengan tahun rilis < 2000
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchase_url'] ?>">
                    <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach ?>
    </ul>
```
#### Untuk melakukan filtering seperti diatas, PHP sudah menyediakan built-in function, sehingga tidak perlu membuat secara manual, yaitu ```array_filter()``` :
```php
// Built-in function untuk filtering array
$filteredBooks = array_filter($books, function ($book) {
    return $book['releaseYear'] > 2000;
});
?>

<!-- Menampilkan buku berdasarkan filter -->
<ul>
    <?php foreach ($filteredBooks as $book) : ?>
        <li>
            <a href="<?= $book['purchase_url'] ?>">
                <?= $book['name']; ?> (<?= $book['releaseYear'] ?>) - By <?= $book['author'] ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
```
### 10. Separate PHP Logic From the Template
#### Dalam pengembangan website, seringkali logika PHP dan template HTML digabung menjadi satu file. Namun, hal ini kurang efektif karena sulit untuk mengelola kode program dan tampilan secara terpisah. Template adalah file HTML yang berisi tampilan halaman website, sedangkan logika PHP adalah kode program yang menghasilkan output untuk ditampilkan di halaman website. Oleh karena itu, dapat dilakukan dengan membuat file PHP terpisah yang berisi kode program untuk menghasilkan output dan mengambil data dari database, dan kemudian memanggil file template HTML untuk menampilkan tampilan website.
#### Contoh :
```php
// File index.php
<?php 
    $books = [
        [
            'name'          => "Do Andorids Dream of Electric Sheep",
            'author'        => "Philip K. Dick",
            'realiseYear'   => 1968,
            'purchase_url'  => "http://example.com"
        ],
        [
            'name'          => "Project Hail Mary",
            'author'        => "Andy Weir",
            'realiseYear'   => 2021,
            'purchase_url'  => "http://example.com"
        ],
        [
            'name'          => "The Martisan",
            'author'        => "Andy Weir",
            'realiseYear'   => 2011,
            'purchase_url'  => "http://example.com"
        ]
        ];

    $filteredBooks = array_filter($books, function($book){
        return $book['realiseYear'] >= 1950 && $book['realiseYear'] <= 2000;
});

require "index.view.php";// Memanggil file template HTML untuk menampilkan tampilan website
```
// File index.view.php
```php
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo</title>
</head>
<body>
    <ul>
        <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchase_url'] ?>">
                    <?= $book['name']; ?> (<?= $book['realiseYear'] ?>) - By <?= $book['author'] ?>
                </a>
            </li>
        <?php endforeach; ?> 
    </ul>
</body>
</html>
```
#### Hasi dari kode program diatas adalah :
![image](https://github.com/MaulanaJauhar/PHPBasic/blob/master/img/separatePhp.PNG);
#### Pemisahan logika disini memudahkan kita sebagai pengembang web dalam mengatur perubahan yang diperlukan dalam pembuatan website kita, jika kita perlu untuk merubah logika PHP yang sudah ada kita hanya perlu membuka file ```index.php``` tanpa perlu mengutabh file template HTML yang ada. Sebaliknya, jika kita ingin merubah tampilan website kita hanya perlu membuka file template HTML tanpa perlu mengubah file ```index.php```.
### 11. Technical Check-In
### 12. Page Links
##### Ketika kita membuat sebuah website, kita seringkali ingin membuat link untuk menuju ke halaman lain. Contoh :
// mengubah file index.php
```php
<?php
  require "index.view.php";
```
// Mengubah isi file index.view.php
```php
<div class="hidden md:block">
    <div class="ml-10 flex items-baseline space-x-4">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/" class="bg-gray-900 text-white rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
        <a href="/about.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">About</a>
        <a href="/contact.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Contact</a>
    </div>
</div>
```
#### Membuat file ```about.php``` dan ```contact.php```.
// Membuat file about.php
```php
<?php
require "about.view.php";
```
// Membuat file contact.php
```php
<?php
require "contact.view.php";
```
#### Membuat file ```about.view.php``` dan ```contact.view.php``` untuk menampilkan tampilan halaman ```about``` dan ```contact```. Isi dari file ```about.view.php``` dan ```contact.view.php``` sama dengan file ```index.view.php```. Perbedaannya adalah pada bagian yang menunjukkan bahwa sedang membuka halaman ```about``` atau ```contact``` dan juga isi dari halaman yang ditampilkan
#### File about.view.php
// Isi file about.view.php
```php
<div class="hidden md:block">
    <div class="ml-10 flex items-baseline space-x-4">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/" class="hover:bg-gray-700 text-gray-300 rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
        <a href="/about.php" class="text-white bg-gray-900 hover:text-white rounded-md px-3 py-2 text-sm font-medium">About</a>
        <a href="/contact.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Contact</a>
    </div>
</div>
```
// Isi content
```php
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <p>Hello. Welcome to the About Page</p>
    </div>
  </main>
```
#### File contact.view.php
// Isi file contact.view.php
```php
<div class="hidden md:block">
    <div class="ml-10 flex items-baseline space-x-4">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/" class="hover:bg-gray-700 text-gray-300 rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
        <a href="/about.php" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">About</a>
        <a href="/contact.php" class="text-white bg-gray-900 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Contact</a>
    </div>
</div>
```
// Isi content
```php
<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <p>Contact Us</p>
    </div>
  </main>
```
#### Hasil dari kode program diatas adalah :
// Halaman Home
![image](https://github.com/MaulanaJauhar/PHPBasic/blob/master/img/12.2.PNG);
// Halaman About
![image](https://github.com/MaulanaJauhar/PHPBasic/blob/master/img/12.3_about.PNG);
// Halaman Contact
![image](https://github.com/MaulanaJauhar/PHPBasic/blob/master/img/12.4_contact.PNG);
### 13. Partials
#### Dengan menggunakan 
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