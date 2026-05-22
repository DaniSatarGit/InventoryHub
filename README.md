# Inventory Hub 📦

Inventory Hub is a simple, modern, and efficient inventory management system built with Laravel. It allows users to manage their products, track stock levels, and monitor recent inventory activities through an intuitive dashboard.

## ✨ Features

- **User Authentication:** Secure login, registration, and profile management.
- **Interactive Dashboard:** 
  - View total products managed by the user.
  - Get real-time alerts for low-stock items.
  - Monitor recent stock activities (Stock In / Stock Out).
- **Product Management:** Complete CRUD (Create, Read, Update, Delete) operations for inventory items.
- **Stock Tracking:** Easily update stock quantities with dedicated "Stock In" and "Stock Out" actions.
- **Modern UI:** Responsive and clean user interface powered by Tailwind CSS and Alpine.js.

## 💻 Tech Stack

- **Framework:** [Laravel](https://laravel.com/) (PHP)
- **Styling:** [Tailwind CSS](https://tailwindcss.com/)
- **Frontend Interactivity:** [Alpine.js](https://alpinejs.dev/)
- **Database:** MySQL / SQLite (configurable via `.env`)

## 🚀 Getting Started

Follow these instructions to set up the project on your local machine.

### Prerequisites

- PHP 8.1 or higher
- Composer
- Node.js & NPM
- MySQL or SQLite

### Installation

1. **Clone the repository** (if applicable) or extract the project files into your local server directory.

2. **Install PHP dependencies:**
   ```bash
   composer install
   ```

3. **Install and compile frontend dependencies:**
   ```bash
   npm install
   npm run build
   ```

4. **Environment Setup:**
   Copy the `.env.example` file to `.env` and configure your database settings.
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Run Database Migrations:**
   ```bash
   php artisan migrate
   ```

6. **Serve the Application:**
   ```bash
   php artisan serve
   ```
   Visit `http://localhost:8000` in your browser to access the application.

## 📄 License

This project is open-sourced software licensed under the MIT license.