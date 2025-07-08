<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Vinkal's Canteen — Laravel Project

Ini adalah project Laravel untuk test magang yang berfungsi sebagai sistem manajemen menu untuk UMKM kantin Vinkal.

## 🔧 Teknologi yang Digunakan

- PHP 8.x
- Laravel 12.x
- SQLite
- Tailwind CSS (via Vite)
- Node.js + Vite

---

## 🚀 Cara Menjalankan Project

Ikuti langkah-langkah berikut setelah clone repository ini:

### 1. Clone Repository

```bash
git clone https://github.com/heradph/vinkals-canteen.git
cd vinkals-canteen
```
### 2. Install Dependency PHP
```bash
composer install
```
### 3. copy environment
```bash
cp .env.example .env
```
### 4. Generate app_key
```bash
php artisan key:generate
```
### 5. Migrate Database
```bash
php artisan migrate:fresh --seed
```
### 6. Install Dependency Frontend
```bash
npm install
```
### 7. Jalankan Server 
```bash
php artisan serve
```
### 8. Jalankan Frontend
```bash
npm run dev
```


