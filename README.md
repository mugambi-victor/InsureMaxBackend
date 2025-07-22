# Laravel Project - InsureMaxBackend

A Laravel-based application for returning Insurance products to the frontend

---

## 🚀 Requirements

Before installing, make sure your system meets these requirements:

- PHP >= 8.1
- Composer
- MySQL or PostgreSQL
- Node.js & npm (for frontend assets)
- Laravel CLI (`composer global require laravel/installer`)

---

## 🛠️ Installation Steps

**1. Clone the Repository**

```bash
git clone git@github.com:mugambi-victor/InsureMaxBackend.git
cd your-laravel-project
```
**2. copy the .env.example to your .env**

**3. run**
```bash
composer Install
php artisan key:generate
php artisan migrate --seed
```
**4.run**
```bash
php artisan passport:client --password
```
**5. Login using seeded data** 
**email : test@example.com**
**password: pass1**
