# 🩺 MediLite - Modern, Lightweight, and Open-Source EMR

**MediLite** adalah sistem **Electronic Medical Record (EMR)** berbasis web yang dibangun menggunakan Laravel 11 dan Filament 3. Dirancang untuk klinik dan rumah sakit yang membutuhkan solusi digital yang **sederhana, cepat, dan terstruktur** — MediLite hadir sebagai platform EMR yang **gratis, terbuka, dan fleksibel**.

---

## ✨ Fitur Saat Ini

🔹 Manajemen Data Pasien  
🔹 Modul Dokter dan Rekam Medis  
🔹 Rawat Jalan & Rawat Inap (dasar)  
🔹 e-Resep & Catatan Diagnosa  
🔹 Autentikasi multi-role sederhana (tanpa Spatie)  
🔹 Admin Panel berbasis Filament (UI/UX modern)  
🔹 Struktur database relasional dan tervalidasi

> 📌 _Integrasi BPJS, sistem antrian, bridging VClaim/INACBG akan direncanakan di tahap selanjutnya._

---

## 🛠️ Teknologi yang Digunakan

-   **Laravel 11**
-   **Filament Admin 3**
-   Livewire & Alpine.js
-   MySQL / PostgreSQL
-   Blade Templates

---

## 🚀 Instalasi Cepat

Clone dan jalankan di mesin lokal:

```bash
git clone https://github.com/username/medilite.git
cd medilite
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
npm install && npm run build
php artisan serve
```
