<p align="center">
  <img src="https://img.shields.io/badge/Laravel-12.0-FF2D20?style=flat-square&logo=laravel&logoColor=white" alt="Laravel Version">
  <img src="https://img.shields.io/badge/PHP-8.4-777BB4?style=flat-square&logo=php&logoColor=white" alt="PHP Version">
  <img src="https://img.shields.io/badge/License-MIT-blue?style=flat-square" alt="License">
</p>

# Laravel User Management System

User Management System is a web-based application that manages user records and provides secure role-based access for users and administrators. Built with Laravel 12, it features a modern interface using Blade and Tailwind CSS (RetroUI) and ensures data integrity with a MySQL database.

## Project Requirements

- **Project Name**: Laravel User Management System
- **Database**: MySQL
- **Backend**: Laravel 12 (Eloquent ORM)
- **Frontend**: Blade Templates + Tailwind CSS (RetroUI Design System)
- **Authentication**: Custom Laravel Auth with Sanctum for API

## User Module

This module handles all standard user interactions, ensuring a smooth and secure experience.

- **User Registration**: New users can create an account to access the system.
- **User Login**: Registered users can securely log in to their personal dashboard.
- **Forgot Password**: Users can recover their account via an email-based password reset link (configured via SMTP/Gmail).

## Admin Panel

A dedicated control center for administrators to manage the application and its users.

- **Admin Login**: Secure entry point for administrative access.
- **Manage Users**: View a complete list of all registered users.
- **Edit User Information**: Update user details such as name, email, and role.
- **Delete Users**: Remove user accounts from the system permanently.
- **Change Admin Password**: Administrators can securely update their own credentials.

## Running the Project with Docker (Laravel Sail)

This project is configured to run with [Laravel Sail](https://laravel.com/docs/sail), a light-weight command-line interface for interacting with Laravel's default Docker development environment.

### Requirements
- [Docker Desktop](https://www.docker.com/products/docker-desktop)
- [Docker Compose](https://docs.docker.com/compose/install/)

### Setup Commands

1.  **Clone the repository**
    ```bash
    git clone https://github.com/prayangshu/laravel-user-management.git
    cd laravel-user-management
    ```

2.  **Install Dependencies**
    If you have PHP and Composer installed locally:
    ```bash
    composer install
    ```
    
    If you do **not** have PHP/Composer installed locally, you can use a small Docker container to install dependencies:
    ```bash
    docker run --rm \
        -u "$(id -u):$(id -g)" \
        -v "$(pwd):/var/www/html" \
        -w /var/www/html \
        laravelsail/php84-composer:latest \
        composer install --ignore-platform-reqs
    ```

3.  **Configure Environment**
    Copy the example environment file. It is already pre-configured for Sail.
    ```bash
    cp .env.example .env
    ```

4.  **Start Sail**
    This will build the containers and start the application.
    ```bash
    ./vendor/bin/sail up -d
    ```

5.  **Generate Key & Migrate**
    Run these commands inside the Sail container:
    ```bash
    ./vendor/bin/sail artisan key:generate
    ./vendor/bin/sail artisan migrate --seed
    ```

6.  **Install Frontend Assets**
    ```bash
    ./vendor/bin/sail npm install
    ./vendor/bin/sail npm run build
    ```

    Access the app at `http://localhost`.

### Common Commands

- **Start containers**: `./vendor/bin/sail up -d`
- **Stop containers**: `./vendor/bin/sail down`
- **Run Artisan commands**: `./vendor/bin/sail artisan <command>`
- **Run Composer**: `./vendor/bin/sail composer <command>`
- **Run NPM**: `./vendor/bin/sail npm <command>`
- **Run Tests**: `./vendor/bin/sail test`

---

## How to Run the Project (Local / Non-Docker)

Follow these steps to set up the project on your local machine without Docker:

1.  **Clone the repository**
    ```bash
    git clone https://github.com/prayangshu/laravel-user-management.git
    cd laravel-user-management
    ```

2.  **Install dependencies**
    ```bash
    composer install
    npm install
    ```

3.  **Configure environment**
    Copy the example environment file and update your database and mail settings.
    ```bash
    cp .env.example .env
    ```

4.  **Generate application key**
    ```bash
    php artisan key:generate
    ```

5.  **Setup database**
    Run migrations and seed the database with initial data.
    ```bash
    php artisan migrate --seed
    ```

6.  **Run the application**
    Start the development server and compile assets.
    ```bash
    npm run build
    php artisan serve
    ```
    Access the app at `http://localhost:8000`.

---

## Features (Detailed)

### User Registration
- **Functionality**: Validates user input (name, email, password), creates a new user record with the default 'user' role, hashes the password, and redirects to the login page upon success.
- **Routes**:
  - `GET /register`: Displays the registration form.
  - `POST /register`: Handles the form submission and user creation.

### User Authentication
- **Functionality**: Authenticates users using email and password. Protects routes using the `auth` middleware. Handles session regeneration to prevent session fixation attacks.
- **Routes**:
  - `GET /login`: Displays the login form.
  - `POST /login`: Authenticates the user.
  - `POST /logout`: Logs the user out and invalidates the session.

### Forgot Password
- **Functionality**: Accepts a user's email address, generates a random new password, updates the database, and sends the new password to the user via SMTP email.
- **Routes**:
  - `GET /forgot-password`: Displays the email input form.
  - `POST /forgot-password`: Processes the request and sends the email.

### Role-Based Access Control
- **Functionality**: Adds a `role` column to the users table. Implements an `AdminMiddleware` to restrict access to administrative routes.
- **Routes**:
  - Middleware `admin` applied to all `/admin/*` routes.

### Admin Dashboard
- **Functionality**: Provides a protected view accessible only to users with the 'admin' role. Displays quick links to administrative tasks.
- **Routes**:
  - `GET /admin`: Displays the admin dashboard.

### Admin User Management
- **Functionality**: Allows admins to view a list of all users, edit user details (name, email, role), and delete users from the system. Includes confirmation dialogs for destructive actions.
- **Routes**:
  - `GET /admin/users`: Lists all users.
  - `GET /admin/users/{user}/edit`: Displays the user edit form.
  - `PUT /admin/users/{user}`: Updates the user record.
  - `DELETE /admin/users/{user}`: Removes the user from the database.

### Admin Password Change
- **Functionality**: Validates the current password before allowing a change. Updates the password hash in the database upon successful validation.
- **Routes**:
  - `GET /admin/password/change`: Displays the password change form.
  - `PUT /admin/password/change`: Handles the password update logic.

## UI Consistency Checklist

- [x] **RetroUI Design System**: All pages utilize the Neo-Brutalism aesthetic with thick borders, hard shadows, and high contrast.
- [x] **Typography**: Consistent use of the 'Inter' font family with uppercase headers and bold weights.
- [x] **Component Library**: Reusable Blade components (`<x-ui.card>`, `<x-ui.button>`, `<x-ui.input>`, `<x-ui.icon>`) are used exclusively.
- [x] **Responsive Layouts**: Both the public/user layout and the admin sidebar layout are fully responsive on mobile and desktop.
- [x] **Flash Messages**: Success and error alerts share a unified RetroUI style with icons.
- [x] **Empty States**: A dedicated empty state component handles "no data" scenarios gracefully.
- [x] **Iconography**: A centralized SVG icon system ensures visual consistency without external dependencies.

## Final Code Sanity Checklist — Verified

- [x] **Code Quality**: Controllers are thin, readable, and follow MVC principles. No debug dumps found.
- [x] **Security**: Passwords are hashed, CSRF protection is enabled, and admin routes are middleware-protected.
- [x] **Database**: Eloquent ORM is used exclusively. Migrations and seeders are robust and reversible.
- [x] **Environment**: Configuration is secure and environment-agnostic.
- [x] **UI/UX**: RetroUI design system is applied consistently across all views.
- [x] **Performance**: Tailwind CSS is configured for production purging. Assets compile cleanly.
- [x] **Routing**: All routes are named, used, and correctly protected based on roles.
- [x] **Documentation**: README is accurate and reflects the current state of the application.

## Architecture & ORM Integrity — Verified

- [x] **Strict Eloquent Usage**: All database interactions use Eloquent models. No raw SQL or query builder misuse.
- [x] **Clean Architecture**: Controllers are thin (Request → Service → Response). Business logic is encapsulated in Service classes.
- [x] **Form Requests**: Validation logic is moved to dedicated Form Request classes.
- [x] **Type Safety**: Strict typing applied to method signatures and properties.
- [x] **Code Style**: Follows Laravel best practices and conventions.

## Architecture Overview

```ascii
       [ HTTP Request ]
              │
              ▼
    +--------------------+
    |       Routes       |
    +--------------------+
              │
              ▼
    +--------------------+      +------------------+
    |    Controllers     | ◄─── |   Form Requests  |
    +--------------------+      +------------------+
              │
              │ (Calls)
              ▼
    +--------------------+
    |      Services      |
    +--------------------+
              │
              │ (Uses)
              ▼
    +--------------------+
    |       Models       |
    +--------------------+
              │
              │ (Queries)
              ▼
    +--------------------+
    |      Database      |
    +--------------------+

            ... (Data returns up to Controller) ...

              │
              ▼
    +--------------------+
    |    Blade Views     |
    +--------------------+
              │
              ▼
      [ HTTP Response ]
```

### Key Architectural Decisions

- **Thin Controllers**: Controllers act solely as traffic directors. They validate input using Form Requests and delegate business logic to Services, ensuring they remain lightweight and readable.
- **Service Layer**: All complex business logic (e.g., user registration, password resets) is encapsulated in dedicated Service classes. This promotes reusability and keeps the core logic independent of the HTTP layer.
- **Strict Eloquent ORM**: Database interactions are strictly handled via Eloquent Models. This ensures security, type safety, and maintainability by avoiding raw SQL queries.

## Service-Layer Testing Strategy

This project prioritizes testing the Service Layer to ensure business logic is robust, independent of the HTTP layer, and free from side effects.

### Scope
- **What to Test**:
  - Core business logic (e.g., calculations, data transformations).
  - Database interactions (creation, updates, deletions) via Eloquent.
  - External service integrations (e.g., Mail sending).
- **What NOT to Test**:
  - HTTP redirects or responses (Controller responsibility).
  - Form validation rules (Form Request responsibility).
  - Blade view rendering.

### Testing Approach

1.  **Database Testing**:
    - Use `RefreshDatabase` trait to ensure a clean state for every test.
    - Assert against the database state to verify CRUD operations.

2.  **Mocking**:
    - Mock external services (like `Mail`) to prevent actual execution during tests.
    - Do **not** mock Eloquent models unless absolutely necessary for performance; prefer real database assertions for accuracy.

### Example Test Case (Pseudo-code)

```php
// tests/Unit/Services/AuthServiceTest.php

class AuthServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_registers_a_new_user()
    {
        // Arrange
        $data = [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'secret123',
        ];
        $service = new AuthService();

        // Act
        $user = $service->registerUser($data);

        // Assert
        $this->assertInstanceOf(User::class, $user);
        $this->assertDatabaseHas('users', ['email' => 'john@example.com']);
        $this->assertTrue(Hash::check('secret123', $user->password));
    }
}
```

## Security Considerations & Protections

This application implements a multi-layered security strategy to protect user data and prevent common vulnerabilities.

### Authentication & Authorization
- **Middleware Protection**: All sensitive routes are protected by the `auth` middleware. Administrative routes are further secured by the `admin` middleware, ensuring strict role-based access control.
- **Guest Middleware**: Registration and login pages are restricted to unauthenticated users via the `guest` middleware to prevent session confusion.
- **Privilege Escalation Prevention**: Form Requests explicitly check user roles (e.g., `Auth::user()->role === 'admin'`) before authorizing administrative actions, preventing horizontal and vertical privilege escalation.

### Request Security
- **Rate Limiting**: Login and password reset endpoints are protected by Laravel's `throttle` middleware (5 attempts per minute for login, 3 for password reset) to mitigate brute-force attacks.
- **Input Validation**: All incoming data is rigorously validated using dedicated Form Request classes. No raw input is ever trusted.
- **CSRF Protection**: All forms include CSRF tokens to prevent cross-site request forgery.

### Data Protection
- **Password Hashing**: All passwords are hashed using Bcrypt before storage.
- **Session Security**: Sessions are regenerated upon login to prevent session fixation attacks.
- **Safe Error Handling**: Error messages are generic (e.g., "The provided credentials do not match our records") to avoid leaking user enumeration data.

## Scaling Strategy

This application is designed to scale horizontally and vertically with minimal refactoring. The following strategies outline the path from a single server to a high-traffic distributed system.

### Database Scalability
- **Indexing**: Ensure all foreign keys and frequently queried columns (e.g., `email`, `role`) are indexed to maintain fast read performance as the dataset grows.
- **Read/Write Separation**: Configure Laravel to use separate database connections for `read` (SELECT) and `write` (INSERT/UPDATE/DELETE) operations. This allows distributing read traffic across multiple read replicas.
- **Connection Pooling**: Use a connection pooler (like PgBouncer or ProxySQL) to manage database connections efficiently under high concurrency.

### Caching Strategy
- **Application Cache**: Utilize Redis or Memcached to cache expensive queries and computed data.
- **Session Storage**: Move session storage from `file` to `redis` or `database` to support horizontal scaling (multiple application servers sharing sessions).
- **Config & Route Caching**: Always run `php artisan config:cache` and `php artisan route:cache` in production to reduce boot time.

### Asynchronous Processing
- **Queue System**: Offload time-consuming tasks (like sending emails) to a background queue worker. Use Redis or SQS as the queue driver instead of `sync`.
- **Job Batches**: For bulk operations (e.g., mass user updates), use Laravel's job batching to process tasks in parallel without blocking the main thread.

### Horizontal Scaling
- **Statelessness**: The application is designed to be stateless. By moving sessions and cache to a shared store (Redis), you can add multiple application servers behind a load balancer without issues.
- **Asset Delivery**: Offload static assets (CSS, JS, Images) to a CDN (Content Delivery Network) to reduce server load and improve load times for global users.

### API Considerations
- **Rate Limiting**: Implement strict API rate limiting (using Laravel Sanctum or Throttle middleware) to prevent abuse and ensure fair usage.
- **Pagination**: Enforce pagination on all list endpoints (e.g., `User::paginate()`) to prevent memory exhaustion when retrieving large datasets.

## REST API Documentation

The application provides a RESTful API for external integrations. The API uses Laravel Sanctum for authentication and follows standard HTTP status codes.

### Authentication

All API requests (except login) require a Bearer Token in the `Authorization` header.

**Header:**
`Authorization: Bearer <your-token>`

### Endpoints

#### 1. Login
Authenticates a user and returns an access token.

- **URL**: `POST /api/login`
- **Auth**: None
- **Body**:
  ```json
  {
    "email": "admin@example.com",
    "password": "password"
  }
  ```
- **Response**:
  ```json
  {
    "success": true,
    "message": "Login successful.",
    "data": {
      "user": {
        "id": 1,
        "name": "Admin User",
        "email": "admin@example.com",
        "role": "admin",
        "created_at": "2023-10-27T10:00:00+00:00",
        "updated_at": "2023-10-27T10:00:00+00:00"
      },
      "token": "1|laravel_sanctum_token_string..."
    }
  }
  ```

#### 2. Logout
Revokes the current access token.

- **URL**: `POST /api/logout`
- **Auth**: Bearer Token
- **Response**:
  ```json
  {
    "success": true,
    "message": "Logged out successfully.",
    "data": null
  }
  ```

#### 3. Get Current User
Retrieves the authenticated user's profile.

- **URL**: `GET /api/user`
- **Auth**: Bearer Token
- **Response**:
  ```json
  {
    "success": true,
    "message": "Success",
    "data": {
      "id": 1,
      "name": "Admin User",
      "email": "admin@example.com",
      "role": "admin",
      ...
    }
  }
  ```

#### 4. List Users (Admin Only)
Retrieves a list of all registered users.

- **URL**: `GET /api/admin/users`
- **Auth**: Bearer Token (Admin Role Required)
- **Response**:
  ```json
  {
    "success": true,
    "message": "Success",
    "data": [
      {
        "id": 2,
        "name": "John Doe",
        "email": "john@example.com",
        "role": "user",
        ...
      },
      ...
    ]
  }
  ```

#### 5. Update User (Admin Only)
Updates a user's details.

- **URL**: `PUT /api/admin/users/{id}`
- **Auth**: Bearer Token (Admin Role Required)
- **Body**:
  ```json
  {
    "name": "Jane Doe",
    "email": "jane@example.com",
    "role": "user"
  }
  ```
- **Response**:
  ```json
  {
    "success": true,
    "message": "User updated successfully.",
    "data": {
      "id": 2,
      "name": "Jane Doe",
      ...
    }
  }
  ```

#### 6. Delete User (Admin Only)
Removes a user from the system.

- **URL**: `DELETE /api/admin/users/{id}`
- **Auth**: Bearer Token (Admin Role Required)
- **Response**:
  ```json
  {
    "success": true,
    "message": "User deleted successfully.",
    "data": null
  }
  ```

## Production Security Checklist

This checklist outlines the essential steps to secure this application in a production environment.

### 1. Environment Configuration
- [ ] **APP_ENV**: Set to `production`.
- [ ] **APP_DEBUG**: Set to `false`.
- [ ] **APP_KEY**: Generate a unique key using `php artisan key:generate`.
- [ ] **.env File**: Ensure `.env` is never committed to version control.
- [ ] **Permissions**: Set correct file permissions (e.g., `chmod -R 775 storage bootstrap/cache`).

### 2. Authentication & Authorization
- [ ] **Passwords**: Enforce strong password requirements (min 8 chars, mixed case, numbers).
- [ ] **Admin Access**: Ensure all admin routes are protected by the `admin` middleware.
- [ ] **Privilege Escalation**: Verify no paths exist for users to elevate their own privileges.
- [ ] **API Auth**: Ensure Sanctum tokens are scoped correctly and revoked on logout.

### 3. Session & Cookie Security
- [ ] **Secure Cookies**: Enable `SESSION_SECURE_COOKIE=true` in `.env` (requires HTTPS).
- [ ] **HTTP Only**: Ensure `SESSION_HTTP_ONLY=true`.
- [ ] **SameSite**: Configure `SESSION_SAME_SITE=lax` or `strict`.
- [ ] **Regeneration**: Verify session ID regeneration on login (`Session::regenerate()`).

### 4. Database Security
- [ ] **Dedicated User**: Use a separate database user with limited privileges (no `DROP` or `GRANT`).
- [ ] **Credentials**: Never reuse production database credentials in local or staging environments.
- [ ] **Backups**: Enable automated, encrypted database backups.
- [ ] **Indexing**: Ensure indexes are applied to sensitive lookup fields (e.g., `email`, `role`).

### 5. Rate Limiting & Abuse Protection
- [ ] **Login**: Ensure login endpoint is rate-limited (default: 5 attempts/min).
- [ ] **Password Reset**: Rate limit password reset requests to prevent spam.
- [ ] **API**: Configure `ThrottleRequests` middleware for all API endpoints.
- [ ] **Limits**: Define sensible limits that prevent abuse without locking out legitimate users.

### 6. Data Protection
- [ ] **Hashing**: Ensure all passwords are hashed using Bcrypt or Argon2.
- [ ] **Logging**: Verify that no sensitive data (passwords, tokens, PII) is written to logs.
- [ ] **Error Messages**: Use generic error messages for authentication failures ("Invalid credentials").
- [ ] **HTTPS**: Enforce HTTPS for all traffic (`ForceHTTPS` middleware or server config).

### 7. Dependency & Supply Chain Security
- [ ] **Composer Audit**: Run `composer audit` regularly to check for PHP vulnerabilities.
- [ ] **NPM Audit**: Run `npm audit` to check for frontend vulnerabilities.
- [ ] **Updates**: Keep framework and dependencies up to date.
- [ ] **Lock Files**: Commit `composer.lock` and `package-lock.json` and review changes.

### 8. CI/CD & Deployment Safety
- [ ] **Vulnerability Blocking**: Configure CI to block builds with critical dependency vulnerabilities.
- [ ] **Test Blocking**: Ensure CI blocks deployment if tests fail.
- [ ] **Secrets**: Store production secrets in CI/CD variables, never in the repo.
- [ ] **Approval**: Require manual approval for production deployments.

### 9. Server & Infrastructure
- [ ] **Firewall**: Enable a firewall (e.g., UFW) and close all unused ports.
- [ ] **Headers**: Configure web server (Nginx/Apache) to hide framework headers (`X-Powered-By`).
- [ ] **PHP Version**: Use a supported, secure PHP version (currently 8.2+).
- [ ] **SSL/TLS**: Install a valid SSL certificate (e.g., Let's Encrypt).

## Final End-to-End Audit — Verified

This project has undergone a complete end-to-end audit to ensure it meets professional engineering standards.

- [x] **ORM Integrity**: All database access uses Eloquent ORM. No raw SQL or improper query builder usage found.
- [x] **Clean Architecture**: Controllers are thin, business logic is isolated in Services, and no logic exists in views.
- [x] **UI Consistency**: RetroUI design system is applied uniformly across all pages.
- [x] **Auth & Security**: Authentication is secure, admin routes are protected, and rate limiting is active.
- [x] **REST API**: API follows standard conventions, uses Sanctum for auth, and reuses the Service layer.
- [x] **Docker (Sail)**: Project runs fully containerized with a single command.
- [x] **CI/CD**: GitHub Actions pipeline is robust, running tests, migrations, and security scans.
- [x] **Documentation**: README is comprehensive, accurate, and includes production security guidelines.
