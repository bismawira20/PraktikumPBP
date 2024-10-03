<!-- 
Nama         : Bisma Wira Adi Wicaksono
NIM          : 24060122140120
Tanggal      : 30 September 2024
File         : search_book.php
Deskripsi    : Melakukan pencarian buku (live search) dengan memasukkan judul buku yang diinginkan dan menjalankan fungsi ajax
 -->

<?php include("header.php")?>

<br>
<div class="card">
    <div class="card-header">Search Book</div>
    <div class="card-body">
        <!-- TODO: Buat elemen input untuk mencari dgn inputan judul buku-->
        <!-- Hint : gunakan onkeyup="searchBookByTitle()" untuk menerapkan live search -->
        <input type="text" id="book_title" class="form-control" onkeyup="searchBookByTitle()" placeholder="Enter book title">

    </div>
</div><br>

<!-- TODO: Tambahkan elemen untuk menampilkan detail buku yang di cari -->
<div id="search_result"></div>

<?php include("footer.php")?>