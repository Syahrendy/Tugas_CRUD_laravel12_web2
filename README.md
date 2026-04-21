# Tugas_CRUD_laravel12_web2

## DESKRIPSI

Aplikasi web sederhana berbasis Laravel 12 yang mengimplementasikan fungsi dasar CRUD (Create, Read, Update, Delete). Proyek ini dirancang sebagai fondasi untuk memahami struktur terbaru Laravel 12 dan cara kerja manajemen data.

## FITUR UTAMA

Menambahkan data (Create)
menampilkan data (Read)
Mengubah data (update)
Menghapus data (Delete)

## TEKNOLOGI YANG DIGUNAKAN
Laravel 12
PHP
MySQL

## STUKTUR PROYEK UTAMA
├── app/
│   ├── Http/ 
│       └── Controllers/
│           └── MahasiswaControllers.php
│   └── Models/
│       └── Mahasiswa.php
├── database/
│   └──migrations/   
│       └──2026_04_20_231114_create_mahasiswa_table.php   
├── resources/
│   └──views/
│      └── Mahasiswa/
│           └── create.blade.php
│           └── edit.blade.php
│           └── index.blade.php
├── routes/
│   └── web.php      


##  CARA MENJALANKAN PROJECT 

1. Clone Project
git clone [https://github.com/username/nama-repo.git](https://github.com/username/nama-repo.git)
cd nama-repo
2. Instal Dependensi
composer install
npm install && npm run build
3. Konfigurasi Environment
cp .env.example .env
4. Generate Key
php artisan key:generate
5. Migrasi Database
php artisan migrate
6. Jalankan Server
php artisan serve
