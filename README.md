# Laravel 13 + Gemini AI Integration

A modern Laravel 13 application built with React (Inertia.js), featuring integrated AI capabilities using Google's Gemini.

## 🚀 Tech Stack

- **Framework:** Laravel 13
- **Frontend:** React with Inertia.js
- **AI Integration:** Laravel AI (`laravel/ai`) powered by Google Gemini
- **Authentication:** Laravel Fortify
- **Routing:** Laravel Wayfinder
- **Styling:** Tailwind CSS v4 & Radix UI / Shadcn components

## 🛠️ Prerequisites

- **PHP:** ^8.3
- **Database:** MySQL
- **Tools:** Composer, Node.js & NPM

## ⚙️ Installation & Setup

1. **Clone the repository**
   ```bash
   git clone <your-repo-url>
   cd laravel13
   ```

2. **Install Dependencies**
   ```bash
   composer install
   npm install
   ```

3. **Configure Environment**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Database Setup**
   Update your `.env` with your database credentials:
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=your_database_name
   DB_USERNAME=your_username
   DB_PASSWORD=your_password
   ```

5. **AI Configuration (Gemini)**
   Ensure you have a Gemini API key and add it to `.env`:
   ```env
   AI_DEFAULT=gemini
   GEMINI_API_KEY=your_gemini_api_key_here
   ```

6. **Run Migrations**
   ```bash
   php artisan migrate
   ```

7. **Start the Development Server**
   ```bash
   npm run dev
   ```

## 🧠 AI Features

This project utilizes `laravel/ai` to provide seamless interactions with Google's Gemini models. You can access the AI provider anywhere in the application via the `AI` facade or the configured provider.

---
Built with ❤️ using Antigravity
