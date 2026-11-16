# Laravel POS From Arrays to Eloquent

This project completes IT0049 Technical Formative Assessment 6: From Arrays to Eloquent.

## Included pages

- `/` - landing page
- `/about` - project overview
- `/customers` - customer records retrieved through the Customer Eloquent model
- `/users` - user records retrieved through the User Eloquent model

## TFA6 requirements implemented

- A customers migration with full_name, email, and phone fields
- A users migration with a unique username and full_name
- A DatabaseSeeder with five customer records and five user records
- App\\Models\\Customer and App\\Models\\User Eloquent models
- Controllers using Customer::orderBy(...)->get() and User::orderBy(...)->get()
- Blade views using @foreach to display Eloquent model records

## Setup in VS Code on Windows

Open the extracted project folder in VS Code and run these commands in the terminal:

```powershell
composer install
copy .env.example .env
php artisan key:generate
New-Item database\\database.sqlite -ItemType File
php artisan migrate --seed
php artisan serve
```

If database\\database.sqlite already exists, skip that command. Then open http://127.0.0.1:8000.

The project uses Laravel 12 so it is compatible with PHP 8.2.
