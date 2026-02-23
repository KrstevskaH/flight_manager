flight_manager is a web application built with Laravel and TailwindCSS, designed to manage flights, passengers, and reservations. This project demonstrates practical full-stack development skills with a backend and frontend integration using PHP, SQL, and modern web technologies.

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

Notes

This project was developed as a practice project to learn Laravel and TailwindCSS
Includes basic data management and relational database functionality
Can be extended with authentication, API integrations, or BI visualization tools.
