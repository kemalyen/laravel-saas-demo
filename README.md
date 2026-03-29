# SAAS Project

## Description

This is a Laravel-based Software as a Service (SAAS) application with multi-tenancy support. This project is in its first phase and utilizes the multi-tenancy package for tenant isolation.

## Features

- Multi-tenancy support
- User authentication and management
- Dashboard for tenants
- Laravel framework integration

## Installation

1. Clone the repository:
   ```
   git clone <repository-url>
   cd saas
   ```

2. Install PHP dependencies:
   ```
   composer install
   ```

3. Install Node.js dependencies:
   ```
   npm install
   ```

4. Copy the environment file and configure it:
   ```
   cp .env.example .env
   ```
   Update the `.env` file with your database and other configurations.

5. Generate application key:
   ```
   php artisan key:generate
   ```

6. Run database migrations:
   ```
   php artisan migrate
   ```

7. Seed the database (if applicable):
   ```
   php artisan db:seed
   ```

8. Build assets:
   ```
   npm run build
   ```

9. Start the development server:
   ```
   php artisan serve
   ```

## Configuration

The multi-tenancy is configured using the Tenancy package. Refer to the `config/tenancy.php` file for tenant-specific settings.

## Usage

- Access the application at `http://localhost:8000`
- Register or log in as a user
- Manage tenant-specific data through the dashboard

## Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Submit a pull request

## License

This project is licensed under the MIT License.