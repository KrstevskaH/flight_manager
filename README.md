flight_manager is a web application built with Laravel and TailwindCSS, designed to manage flights. This project demonstrates practical full-stack development skills with a backend and frontend integration using PHP, SQL, and modern web technologies.

- Technologies

Backend: PHP, Laravel Framework
Frontend: HTML, CSS, TailwindCSS, Blade Templates
Database: MySQL / MariaDB
Tools & Packages: Composer, NPM, Vite
Version Control: Git & GitHub

- Features

CRUD operations for flights (Create, Read, Update, Delete)
Manage passengers and their information
Basic reservations linked to flights
User-friendly interface with TailwindCSS
Database structure with migrations and seeders
Tests for verifying functionality

- How to Run Locally

Clone the repository:
git clone https://github.com/KrstevskaH/flight_manager.git
cd flight_manager

Install PHP dependencies:
composer install

Install Node.js dependencies and run Vite:
npm install
npm run dev

Create .env file and generate application key:
cp .env.example .env
php artisan key:generate

Run database migrations:
php artisan migrate

Start the server:
php artisan serve

Screenshots:
![Log in form](https://github.com/user-attachments/assets/1ef067ba-72e3-4c2f-8d93-fe5484708ab0)
![Dashboard](https://github.com/user-attachments/assets/d3883fe2-08f8-45ba-abf4-0573cfa684fa)
![Aircraft categories](https://github.com/user-attachments/assets/d4208ebb-c6ff-46b8-b66d-8dfc576f3f71)
![Airbus Category](https://github.com/user-attachments/assets/6005d7a0-7d10-4902-8950-27091c36ff84)
![Compared Aircrafts](https://github.com/user-attachments/assets/75ed076c-e3d9-4485-b550-76077e5c3e8d)
![Profile Information](https://github.com/user-attachments/assets/6055b52f-0585-423c-9848-64c2016d5dd9)




