# Blog RPL SMK

<p align="center">
  <a href="https://laravel.com" target="_blank">
    <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300" alt="Laravel Logo">
  </a>
</p>

## 👤 Identitas Mahasiswa
* **Nama** : Puspa Permata
* **NIM** : C2383207026
* **Kelas** : PTI5B
* **Matakuliah** : Pemrograman Internet
* **Dosen Pengampu** : Taofiq Muhammad, M.Kom
* **Kampus** : Universitas Muhammadiyah Tasikmalaya

---

## 📝 Deskripsi Aplikasi
**Sistem Informasi Blog Mahasiswa** adalah sebuah platform *Content Management System* (CMS) modern yang dirancang untuk memfasilitasi publikasi artikel digital secara efisien. Aplikasi ini dibangun menggunakan **Laravel 12** dengan fokus pada keamanan dan manajemen konten yang terstruktur.

### 🔑 Hak Akses
1. **Area Manajemen (Secure Zone):** Area khusus (Login) untuk Admin dan Pengelola.
2. **Area Publik (Public Zone):** Halaman depan untuk pengunjung umum mencari dan membaca artikel.

---

## ✨ Fitur Utama
1. **Multi-Role:** Admin (Kontrol Penuh) & Penulis (Manajemen Artikel Sendiri).
2. **Manajemen Artikel (CRUD):** Pembuatan artikel dengan upload gambar & integrasi **CKEditor 5**.
3. **Publishing System:** Fitur Toggle untuk Draft atau Published.
4. **Responsive Design:** Tampilan nyaman diakses melalui browser HP maupun Laptop.

---

## 🚀 Informasi Sistem
* **Framework:** Laravel 12.0
* **PHP Version:** ^8.2
* **Database:** MySQL / MariaDB

---

## 🛠️ Cara Instalasi (Local Development)

Jika Anda ingin menjalankan project ini di komputer lokal, ikuti langkah berikut:

1. **Clone Repository**
   ```bash
   git clone
   https://github.com/Puspap30/blog-rpl
   https://github.com/Puspap30/blog-rpl
   cd BlogRpl-Puspa

 * Install Dependencies :

   composer install npm install && npm run build

 * Setup Environment
   Salin file .env.example menjadi .env dan sesuaikan database Anda:

   cp .env.example .env

 * Generate Key :

   php artisan key:generate

 * Migrasi Database & Seeding
   (Membuat tabel dan akun demo otomatis):

   php artisan migrate:fresh --seed

 * Jalankan Aplikasi
   php artisan serve

   Buka http://localhost:8000 di browser Anda.
   http://127.0.0.1:8000
🔐 Akun Demo (Login)
 * Email: admin
 * Password: admin123
📧 Kontak
 * Email: puspapermata975@gmail.com
 * GitHub: Puspap30
Copyright © 2026 Puspa Permata - Project UAS Pemrograman Internet FKIP UMTAS

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
