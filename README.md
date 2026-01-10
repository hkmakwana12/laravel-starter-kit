# Laravel Starter Kit

[![Laravel](https://img.shields.io/badge/Laravel-12.x-red.svg)](https://laravel.com)
[![PHP](https://img.shields.io/badge/PHP-8.2+-blue.svg)](https://php.net)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

A lightweight starter kit for Laravel applications — preconfigured with common packages and sensible defaults to help you get a new project up and running quickly.

Built with: [FlyonUI](https://flyonui.com/) - A modern, lightweight UI library for rapid web development.

## Features

- **Authentication**: Complete user authentication system with Laravel Fortify
- **Two-Factor Authentication**: Built-in 2FA support for enhanced security
- **Email Verification**: User email verification out of the box
- **Modern UI**: Beautiful interface powered by FlyonUI and Tailwind CSS
- **Query Builder**: Advanced API query building with Spatie Laravel Query Builder
- **Debug Tools**: Laravel Debugbar for development debugging
- **Testing**: Pre-configured with Pest for comprehensive testing
- **Code Quality**: Laravel Pint for code formatting and style consistency

## Requirements

- PHP 8.2+
- Composer
- Node.js + npm (or pnpm)
- MySQL, PostgreSQL, SQLite, or another supported database

## Quick Start

1. Clone the repository:

   ```bash
   git clone https://github.com/ethericsolution/laravel-starter-kit.git
   cd laravel-starter-kit
   ```

2. Run the setup script (installs dependencies, configures environment, runs migrations, and builds assets):

   ```bash
   composer run setup
   ```

3. Update your `.env` file with database and other environment settings if needed.

4. Start the development server:

   ```bash
   composer run dev
   ```

   This will start the Laravel server, queue worker, and Vite dev server concurrently.

Your application will be available at `http://localhost:8000`.

## Manual Installation

If you prefer to install manually:

1. Clone the repository:

   ```bash
   git clone https://github.com/ethericsolution/laravel-starter-kit.git
   cd laravel-starter-kit
   ```

2. Install PHP dependencies:

   ```bash
   composer install
   ```

3. Copy and configure environment:

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

   Update `.env` with your database and other environment settings.

4. Install frontend dependencies:

   ```bash
   npm install
   # or
   pnpm install
   ```

5. Run migrations:

   ```bash
   php artisan migrate
   ```

6. Build assets:

   ```bash
   npm run build
   # or for development
   npm run dev
   ```

7. Serve the application:

   ```bash
   php artisan serve
   ```

## Development

### Available Scripts

- `composer run dev` - Start development servers (Laravel, Queue, Vite)
- `composer run test` - Run tests with configuration cache clearing
- `npm run dev` - Start Vite dev server for asset compilation
- `npm run build` - Build assets for production

### Testing

Run the test suite:

```bash
composer run test
# or
php artisan test
```

## Technologies Used

- **Laravel 12** - The PHP framework
- **Laravel Fortify** - Authentication backend
- **FlyonUI** - UI components and styling
- **Tailwind CSS 4** - Utility-first CSS framework
- **Alpine.js** - Lightweight JavaScript framework
- **Vite** - Fast build tool and dev server
- **Spatie Laravel Query Builder** - Advanced query building
- **Laravel Debugbar** - Debugging toolbar
- **Pest** - PHP testing framework

## Project Structure

```
├── app/                 # Application code
├── bootstrap/           # Application bootstrapping
├── config/              # Configuration files
├── database/            # Migrations, factories, seeders
├── public/              # Public assets
├── resources/           # Views, CSS, JS
├── routes/              # Route definitions
├── storage/             # File storage
├── tests/               # Test files
└── vendor/              # Composer dependencies
```

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request. For major changes, please open an issue first to discuss what you would like to change.

1. Fork the project
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## Support

If you find this project helpful, consider supporting me:

<a href="https://www.buymeacoffee.com/hkmakwana1212" target="_blank">
  <img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" alt="Buy Me A Coffee" style="height: 60px !important;width: 217px !important;" >
</a>

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
