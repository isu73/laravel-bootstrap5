# Laravel 12 + Bootstrap 5 Starter Template

[![Laravel](https://img.shields.io/badge/Laravel-12.x-ff2d20?logo=laravel&logoColor=white)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-≥8.2-777bb4?logo=php&logoColor=white)](https://www.php.net/)
[![Node](https://img.shields.io/badge/Node.js-≥18-339933?logo=node.js&logoColor=white)](https://nodejs.org/)
[![License: MIT](https://img.shields.io/badge/license-MIT-blue.svg)](LICENSE)
[![Packagist Downloads](https://img.shields.io/packagist/dt/isu73/laravel-bootstrap5?color=brightgreen)](https://packagist.org/packages/isu73/laravel-bootstrap5)

A modern Laravel 12 + Bootstrap 5 starter kit designed for clean front-end development and maintainable builds with Vite and Sass.

This template follows an “use ready” Sass structure, which means Bootstrap 5 components are imported modularly, rather than relying on precompiled CSS.
This approach allows you to:

* Include only the Bootstrap modules you actually use.
* Easily override variables (_variables.scss) and theme tokens.
* Enjoy a faster, optimized build process via Vite.

Using Bootstrap via Sass rather than a CDN or static .css file makes your project:
* lighter (tree-shaken styles),
* more customizable, and
* future-proof for long-term scalability.

## 🧠 Why “@use ready” and why Bootstrap via Sass?

This template follows an **“@use ready” Sass structure**, meaning Bootstrap 5 components are imported **modularly**, rather than relying on precompiled CSS.

### Benefits
- 🧩 Import only the Bootstrap modules you actually need  
- 🎨 Easily override variables (`_variables.scss`) and customize themes  
- ⚡ Faster, optimized builds via **Vite**  
- 🔧 Consistent modular Sass that scales for long-term projects  

Using Bootstrap via Sass instead of a CDN or static `.css` file makes your project:
- **lighter** (tree-shaken output),
- **easier to maintain**, and  
- **future-proof** for advanced theme or component customization.

---

## 🧩 Features
- Laravel 12 Framework  
- Bootstrap 5 (via Vite + Sass @use)  
- Ready-to-use Sass architecture (`resources/sass`)  
- Pre-configured `vite.config.js`  
- Sanctum / Tinker / Pint / UI (dev)  
- Windows + Linux-compatible Composer scripts  
- Optional SQLite setup in `.env.example`

---

## ⚙️ Requirements

| Component | Minimum Version |
|------------|----------------|
| **PHP** | 8.2 or higher |
| **Composer** | 2.6+ |
| **Node.js** | 18 or higher (LTS 20 or 24 recommended) |
| **NPM** | 9 or 11 |
| **Database** | SQLite (default), MySQL 8+, MariaDB 10+, PostgreSQL 14+ |
| **OS** | Linux / macOS / Windows 10+ |

> Make sure PHP includes these extensions:  
> `pdo_mysql`, `pdo_pgsql`, `openssl`, `mbstring`, `tokenizer`, `xml`, `ctype`, `fileinfo`, `json`, `curl`.

---

## 🗂️ Directory Structure
```
├── app/                 → Application logic
├── bootstrap/           → App bootstrap files
├── config/              → Configuration files
├── database/            → Migrations / seeders / SQLite DB
├── public/              → Web root (index.php + assets)
├── resources/
│   ├── js/              → Custom JavaScript
│   ├── sass/            → Bootstrap 5 + custom Sass
│   └── views/           → Blade templates
├── routes/              → Web / API routes
├── storage/             → Logs / cache / sessions
├── artisan              → Laravel CLI
├── composer.json        → PHP dependencies + scripts
├── package.json         → NPM dependencies
└── vite.config.js       → Vite configuration
```

## 🚀 Installation

### Create a new project
```bash
composer create-project isu73/laravel-bootstrap5 myapp
cd myapp
```

### Install Node dependencies
```bash
npm install
npm run build   # or: npm run dev
```

### Environment setup
```bash
cp .env.example .env
php artisan key:generate
```
If you prefer SQLite, simply run:
```bash
php artisan migrate
```

If you prefer MySQL or PostgreSQL,
don’t forget to edit your ```.env``` file accordingly:
```ini
DB_CONNECTION=mysql      # or: pgsql
DB_HOST=127.0.0.1
DB_PORT=3306             # or: 5432 for PostgreSQL
DB_DATABASE=my_database
DB_USERNAME=my_user
DB_PASSWORD=my_password
```

## 🧪 Development Server
```bash
php artisan serve
npm run dev
```

Laravel server → http://127.0.0.1:8000
Vite HMR → http://127.0.0.1:5173

Run both in parallel:
```bash
composer run dev
```

## ⚡ Composer Scripts 

Command	Description

```composer setup```	Install dependencies, copy .env, migrate, and build

```composer dev```	Run Laravel server + queue + Vite concurrently

```composer test```	Run Laravel test suite

```composer update```	Update PHP dependencies


