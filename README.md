# Inventory Management App

Aplikasi manajemen inventaris sederhana berbasis Laravel dengan fitur authentication, CRUD data barang, pencarian, sorting, paginasi, serta tampilan responsif menggunakan Tailwind dan DataTables.

## 🚀 Features
- Login & Logout (Laravel Breeze)
- Dashboard sederhana
- CRUD Barang (Create, Read, Update, Delete)
- Validasi input menggunakan Laravel Validation
- DataTables (searching, sorting, pagination)
- Middleware `auth` protection
- Responsive UI menggunakan Tailwind
- Clean code dan struktur sesuai arsitektur MVC

## 🛠️ Tech Stack
- **Laravel** 12
- **Laravel Breeze** (Authentication)
- **Tailwind CSS**
- **MySQL**
- **DataTables**
- **Eloquent ORM**

## 📂 Installation

1. Clone repository:
   ```bash
   git clone https://github.com/username/nama-repo.git
   cd nama-repo

2. Install dependencies:
   ```bash 
   composer install
   npm install
   npm run dev

3. Salin file .env dan buat konfigurasi database:
   ```bash
   .env.example jadi .env

4. php artisan key:generate
   ```bash
   php artisan key:generate

5. Buat database baru, kemudian jalankan migration:
   ```bash
   php artisan migrate

6. php artisan serve
   ```bash
   php artisan serve
