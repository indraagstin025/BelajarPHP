<?php

// Tipe Data Number
// Penjelasan
// di PHP ada 2 jenis tipe data Number
// Yang pertama (Int) Integer yaitu bilangan bulat seperti decimal yang basis (10), Hexadecimal basis (16)
// Octal basis (8) dan yang terakhir biner basis(2)

// Dan yang kedua ada tipe data (float) Floating atau bilangan Pecahan
// Di Kode ini ada function yang namanya var_dump yang digunakan untuk dump sebuah data 
// atau mudahnya untuk melihat Tipe datanya apa

// TIPE DATA NUMBER INTEGER

// Ini contoh bilangan Decimal
echo "Decimal :";
var_dump(1234); 

// Ini contoh Bilangan Octal
// Untuk Bilangan Oktal harus dimulai dari angka 0
echo "Octal :";
var_dump(01234);

// Ini Contoh Bilangan Hexadecimal
// Untuk Bilangan Hexadecimal dimulai daro angka 0x
echo "Hexadecimal :";
var_dump(0x1A);

// Ini contoh Bilangan Biner 
// Untuk Binary atau Biner dimulai dari 0b
echo "Binary :";
var_dump(0b11111111);

// Untuk Underscore digunakan untuk membaca angka yang banyak 
// dan ditambahkan garis bawah agar mudah untuk dibaca
echo "Underscore di Number :";
var_dump(1_234_567); 




// TIPE DATA FLOATING POINT

// Untuk Tipe data floating Point kita harus menggunakan Titik (.)
// Jika kita menambahkan titik (.) di dalam sebuah number otomatis akan menjadi sebuag Tipe data Floating Point
// dan sebaliknya jika tida menambahkan titik (.) akan menjadi tipe data Integer
echo "Floating POint :";
var_dump(1.234);

echo "Floating Point dengan E notation Plus (1.2 x 1000) :";
var_dump(1.2e3);

echo "Floating Point dengan E notation Minus (7 x 0.001) :";
var_dump(7e-3);

echo "Underscore di FLoating Point :";
var_dump(1_234.567); 

echo "Integer Overflow 32 Bit : ";
var_dump(2147483648);

echo "Integer Overflow 64 Bit : ";
var_dump(9223372036854775808);
