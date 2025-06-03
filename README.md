# Database Infrastructure Audit Tool

## Laravel Setup Prerequisites & Troubleshooting

Before running this project, ensure your environment is properly configured:

### 1. PHP Installation
- Install **PHP 8.1 or higher**. You can use [XAMPP](https://www.apachefriends.org/) or [Laragon](https://laragon.org/) for an easy setup.
- **Important:** If you use XAMPP, make sure to use its PHP executable (e.g., `C:/xampp/php/php.exe`).

### 2. Composer Installation
- Download and install Composer from [getcomposer.org](https://getcomposer.org/).
- During installation, **select the correct PHP path** (e.g., XAMPP's PHP, not a separate vanilla PHP install).
- To check which PHP Composer is using, run:
  ```bash
  composer -vvv about
  ```
  and look for the PHP path in the output.

### 3. Required PHP Extensions
Enable the following extensions in your `php.ini` (usually found in your PHP folder, e.g., `C:/xampp/php/php.ini`):
- fileinfo
- zip
- pdo
- mbstring
- openssl
- tokenizer
- xml
- ctype
- json

To enable, remove the `;` at the start of the line (e.g., `;extension=fileinfo` → `extension=fileinfo`).

To check which `php.ini` is being used:
```bash
php --ini
```

### 4. Common Issues & Solutions
- **Missing extensions:**
  - If Composer or Laravel reports missing extensions, edit your `php.ini` and enable them as above, then restart your terminal (and XAMPP if running).
- **Wrong PHP path:**
  - If you installed Composer with the wrong PHP, re-run the Composer installer and select the correct PHP executable.
- **Directory not empty:**
  - If you see this error when creating a new Laravel project, clear the directory or use a new one.
- **Warnings about `pdo_firebird`:**
  - These can be ignored unless you need Firebird database support. To remove the warning, comment out or remove the `extension=pdo_firebird` line in your `php.ini`.

### 5. First Run Checklist
- Verify PHP:
  ```bash
  php -v
  ```
- Verify Composer:
  ```bash
  composer -V
  ```
- Verify required extensions:
  ```bash
  php -m
  ```
  (Check that all required extensions are listed)
- Verify correct `php.ini`:
  ```bash
  php --ini
  ```

### 6. Running Laravel
- Start the development server:
  ```bash
  php artisan serve
  ```
- Open your browser and go to [http://localhost:8000](http://localhost:8000)
- Configure your `.env` file for database and other settings as needed.

---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/riecodes/db-infra-audit/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This Project

This is a Database Infrastructure Audit Tool built with Laravel. It helps in auditing and monitoring database infrastructure, providing insights and analytics for database performance and security.

## Requirements

- PHP 8.2 or higher
- Composer
- Node.js and NPM
- SQLite (for development) or MySQL/PostgreSQL (for production)

## Installation

1. Clone the repository:
```bash
git clone https://github.com/riecodes/db-infra-audit.git
cd db-infra-audit
```

2. Install PHP dependencies:
```bash
composer install
```

3. Install NPM dependencies:
```bash
npm install
```

4. Create environment file:
```bash
cp .env.example .env
```

5. Generate application key:
```bash
php artisan key:generate
```

6. Run database migrations:
```bash
php artisan migrate
```

## Frontend Styling and CSS Structure

This project uses external CSS files for styling instead of inline styles. This is to ensure maintainability, scalability, and performance.

### Main Stylesheet
- The main global styles are located in `public/css/app.css`.
- This file is linked in the main layout (`resources/views/components/layout/app.blade.php`):
  ```blade
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  ```
- All global styles, such as navbar, fonts, and button classes, should be placed here.

### Page-Specific Styles
- For page-specific styles, create a new CSS file in `public/css/` (e.g., `public/css/home.css`).
- In the corresponding Blade view, use the `@push('styles')` directive to include the CSS file:
  ```blade
  @push('styles')
      <link rel="stylesheet" href="{{ asset('css/home.css') }}">
  @endpush
  ```
- This keeps page-specific styles separate from global styles.

### How to Add or Update Styles
1. **Global styles:**
   - Edit `public/css/app.css` for site-wide elements (navbar, buttons, etc).
2. **Page-specific styles:**
   - Create a new CSS file in `public/css/` (e.g., `about.css`, `dashboard.css`).
   - Use `@push('styles')` in the relevant Blade view to include it.
3. **Use class names:**
   - Assign class names in your Blade templates and style them in the CSS files.

### Example
```blade
<!-- In your Blade view -->
@push('styles')
    <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush
```

## Running the Application

### Development Mode

To run the application in development mode with all services (server, queue, logs, and Vite):

```bash
composer dev
```

Or run individual services:

- Start the development server:
```bash
php artisan serve
```

- Start the queue worker:
```bash
php artisan queue:listen
```