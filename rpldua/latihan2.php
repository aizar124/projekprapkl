<?php
// untuk membuat komentar pemrograman di PHP, kita
// bisa menambahkan tanda #, //, dan /* */
// /* ... */ untuk komentar lebih dari 1 baris


// variabel digunakan untuk menyimpan nilai
// di PHP, variabel harus diawali dengan tanda $
// di PHP, variabel tidak perlu dituliskan tipe datanya

$x = 10;
$nam = "Aizar Faruq Nafiul Umam";
$angka = 1.5; 

// fungsi tanda titik(.) adalah untuk menghubungkan variable atau karakter
// di Java, titik diganti dengan tanda tambah (+)
echo "Isi dari x adalah ".$x."<br>";
echo "Nama saya adalah ".$nam."<br>";
echo "Angka favorit saya adalah ".$angka;
echo "<br><br>";
// jika pakai tanda petik dua, maka akan menampilkan program nya
// jika pakai tanda petik satu, maka akan menampilkan seadanya 
echo "isi dari x adalah : $x <br>";
echo 'isi dari x adalah : $x <br>';
echo "<br><br>";

// aturan penamaan variabel
// pakai teknik snake case atau camel case

// aturan penamaan variabel :
// 1 .diawali dengan tanda $
// 2. pakai teknik snake case atau camel case
// 3. tidak boleh ada spasi, spasi bisa diganti underscore
// 4. tidak boleh menggunakan karakter khusus seperti *, +, =
// 5. tidak boleh diawali angka

// contoh snake case
$nama_lengkap = "Aizar Faruq Nafiul Umam";

// contoh camel case
$namaLengkap = "Aizar Faruq Nafiul Umam";

$a = 10;
$b = 15;

echo "Hasil penjumlahannya adalah : ".($a+$b)."<br>";
echo "Hasil pengurangannya adalah : ".($a-$b)."<br>";
echo "Hasil perkaliannya adalah : ".($a*$b)."<br>";
echo "Hasil pembagiannya adalah : ".($a/$b)."<br>";
echo "Hasil sisa hasil baginya adalah : ".($a%$b)."<br>";
echo "Hasil pangkatnya adalah : ".($a**$b)."<br><br>";


// STRUKTUR KONTROL PERCABANGAN
// ada 2 : IF ELSE dan SWITCH CASE
// gunanya untuk melakukan pemilihan atau
// penyeleksian kondisi tertentu

$nilai = 80;
if ($nilai >= 75){
    echo "lulus <br>";
}else{
    echo "remidi <br>"; 
}

$angka = 51;
if ($angka >= 0 && $angka <= 25){
    echo "D <br>";
} else if ($angka >= 26 && $angka <= 50){
    echo "C <br>";
} else if ($angka >= 51 && $angka <=75){
    echo "B <br>";
} else if ($angka >= 76 && $angka <=100){
    echo "A <br>";
} else {
    echo "angka tidak valid <br><br> dz";
}

// tuliskan 1 variabel dengan nama = "$nama"
// isinya "dono"
// buat kode if else, untuk mengecek nama-nama berikut:
// jika "dono", tampilkan "pelawak"
// jika "habibie", tampilkn "mantan presiden"
// jika "raven", tampilkan "pemain bola"
// selain itu, tampilkan "tidak dikenal"

$nama = "dono";
if ($nama = "dono"){
    echo "pelawak<br>";
} else if ($nama = "habibie"){
    echo "mantan presiden<br>";
} else if ($nama = "raven"){
    echo "pemain bola<br>";
} else {
    echo "tidak dikenal<br>";
}


// buat variabel baru dengan nama "$tes", isinya angka 23
// buat kode if else, jika angka yang disimpan di dalam
// variabel $tes, dibagi 3 sisa 0, tampilkan "bagus"
// jika tidak, tampilkan "tidak bagus"

$tes = 23;
if ($tes % 3 == 0){
    echo "bagus<br>";
} else {
    echo "tidak bagus<br>";
}



// SWITCH CASE
// switch case, fungsinya sama seperti if else,
// tetapi switch case tidak mendukung rentang nilai

$skor = 7;
switch ($skor){
    case 1 || 7: // tanda || dibaca "atau"
        echo "satu <br>";
        break;
    case 2:
        echo "dua <br>";
        break;
    case 3:
        echo "tiga <br>";
        break;
    case 10:
        echo "sepuluh <br>";
        break;
    default: // tanda default itu seperti else
        echo "tidak dikenal <br>";
}

// ubahlah kode if else "dono" menjadi switch case 
// nama variabelnya diubah menjadi "$nama2"

$nama2 = "dono";
switch ($nama2){
    case "dono":
        echo "pelawak<br>";
        break;
    case "habibie":
        echo "mantan presiden<br>";
        break;
    case "raven":
        echo "pemain bola<br>";
        break;
    default:
        echo "tidak dikenal<br>";
}

echo "<br>";

// STRUKTUR KONTROL PERULANGAN (LOOPS)
// digunakan untuk melakukan proses perulangan 
// di PHP ada 4 cara :
// 1. for
// 2. while
// 3. do while
// 4. foreach

// FOR
// for figunakan ketika kita tahu berapa kali/jumlah
// perulangan yang akan terjadi

// for (nilai awal ; batas akhir ; proses )
// alur nya(awal ; kedua ; akhir)
//         ke tiga
// $x++ itu sama dengan $x = $x + 1
// begitu juga yang $x--

for ($x = 2; $x <= 10; $x ++) {
    echo $x .', ';
}

echo "<br>";

// LATIHAN
// buatlah perulangan dengan menggunakan struktur kontrol FOR 
// untuk menghasilkan deret berikut :
// 1. 2 4 6 8 10 .....100
// 2. 50 45 40 35 ....-45 -50
// 3. 2 4 8 16 32 64 128

// nomor 1
for ($e=2;$e<=100;$e+=2){
    echo $e." ";
}

echo "<br>";

// nomor 2
for ($d=50;$d>=-50;$d-=5){
    echo $d." ";
}

echo "<br>";

// nomor 3
for ($f=2;$f<=128;$f*=2){
    echo $f." ";
}

// kita bisa membuat perulangan di dalam perulangan
// atau "perulangan bersarang"
 // nomor cloning; berapa banyak cloning; prosesnya
for ($x = 1; $x <= 10; $x++){ //untuk mengcloning yang bawah
    for ($y = 1; $y <= 10; $y++){
        echo $y." ";
    }
    echo "<br>";
}




?>