<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# 🛒 Laravel E-Commerce Project

Sebuah aplikasi **E-Commerce berbasis Laravel** yang dikembangkan untuk memenuhi kebutuhan pembelajaran dan pengembangan sistem penjualan online modern. Project ini mencakup fitur manajemen produk, autentikasi pengguna, keranjang belanja, pemesanan, dan pembayaran.

---

## 📌 Fitur Utama

* 🔐 Autentikasi (Login, Register, Logout)
* 👤 Manajemen User (Admin & Customer)
* 📦 Manajemen Produk (CRUD)
* 🗂️ Kategori Produk
* 🛒 Keranjang Belanja
* 🧾 Checkout & Pemesanan
* 💳 Metode Pembayaran (Transfer / Manual / QRIS *(opsional)*)
* 📊 Dashboard Admin
* 📱 Responsive Design

---

## 🧰 Teknologi yang Digunakan

* **Laravel** v12.x
* **PHP** >= 8.2
* **MySQL / MariaDB**
* **Vite** v7
* **Node.js** >= 20
* **Blade Template**
* **Bootstrap / Tailwind CSS** *(opsional)*

---

## ⚙️ Instalasi & Menjalankan Project

### 1️⃣ Clone Repository

```bash
git clone https://github.com/SyaifulAsfort23/PFS-laravel.git
cd nama-repo
```

### 2️⃣ Install Dependency Backend

```bash
composer install
```

### 3️⃣ Install Dependency Frontend

```bash
npm install
npm run dev
```

### 4️⃣ Konfigurasi Environment

Salin file `.env.example` menjadi `.env`

```bash
cp .env.example .env
```

Atur konfigurasi database pada file `.env`

### 5️⃣ Generate App Key

```bash
php artisan key:generate
```

### 6️⃣ Migrasi & Seeder Database

```bash
php artisan migrate --seed
```

### 7️⃣ Jalankan Server Laravel

```bash
php artisan serve
```

Akses aplikasi melalui:

```
http://127.0.0.1:8000
```

---

## 👥 Akun Default (Seeder)

| Role  | Email                                         | Password |
| ----- | --------------------------------------------- | -------- |
| Admin | [admin@example.com](mailto:admin@example.com) | password |
| User  | [user@example.com](mailto:user@example.com)   | password |

---

## 📂 Struktur Direktori Penting

```
app/Http/Controllers   # Controller aplikasi
app/Models             # Model Eloquent
database/migrations    # Migrasi database
database/seeders       # Seeder data
resources/views        # Blade templates
routes/web.php         # Routing web
```

---

## 🚀 Pengembangan Selanjutnya (Roadmap)

* 🔍 Fitur pencarian produk
* ⭐ Review & Rating produk
* 📦 Manajemen stok otomatis
* 💳 Integrasi Payment Gateway (Midtrans / Xendit)
* 📬 Notifikasi Email
* 🧠 Rekomendasi produk berbasis AI

---

## 📝 Lisensi

Project ini dibuat untuk keperluan **pembelajaran dan pengembangan**. Bebas digunakan dan dimodifikasi.

---

## 👨‍💻 Author

**Syaiful**
Mahasiswa Teknologi Informasi
---

📧 Email: [your-email@example.com](mailto:syaiful21abdullah@gmail.com)
🔗 GitHub: [https://github.com/username](https://github.com/SyaifulAsfort23)

---
⭐ Jangan lupa beri **star** 




