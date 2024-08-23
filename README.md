Assignment2
Amit Shrestha
Github link for the blog application:" https://github.com/amitstha19/blogApp "
This project is an upgraded version of the basic blog application developed during Assessment 1. The enhancements include user authentication, an admin panel for managing blog posts and users, and role-based access control. The project was built using Laravel, with Bootstrap for styling and MongoDB as the database. To further improve the application's functionality, I integrated jQuery and DataTables.
### Approach
1. I started by configuring my development environment using the basic blog application from Assessment 1. I then added a new branch, 'feature/auth-admin-panel', to my GitHub repository. This branch was created specifically to implement the new features required for this evaluation.
2. Following the instructions from Lecture 4, I integrated MongoDB with Laravel. This involved installing the laravel-mongodb package via Composer and updating the database configuration in both the '.env' file and config/database.php. 
3. I constructed a role model, as well as the corresponding migration and seeder. The 'user' model and migration were both updated to add a 'role_id' column. During registration, the 'RegisterController' was changed to assign the default 'author' role. In addition, I changed the 'UserSeeder' to create three users with the roles of 'admin', 'author', and 'user'. I also changed the redirection logic to make sure visitors were led to the correct pages based on their roles.
4. I created 'PostController' and 'UserController' in the 'Admin' namespace. These controllers were in charge of managing blog entries and users, respectively. The 'PostController' allowed authors to control their posts, whilst the 'UserController' let administrators manage users and posts. In addition, I made sure that admins and authors with current postings could not be purged.
5. I generated an 'AdminMiddleware' to restrict access to admin-related routes. This middleware was applied to all admin routes, which were defined with an '/admin' prefix. This setup ensured that only authenticated admins could access the admin panel.
6. I utilized a Bootstrap dashboard template from 'https://getbootstrap.com/docs/5.3/examples/' to create an admin layout, 'admin.blade.php'. All views were styled using Bootstrap components to maintain a consistent and responsive design.
7. I thoroughly tested the application to ensure that all features worked as expected. This included testing CRUD operations for both posts and users, verifying that role-based access control was correctly implemented, and confirming that non-admin users could not access the admin panel. 
8. After completing each major step, I committed and pushed the changes to my GitHub repository. This version control practice allowed me to track the project's progress and maintain a clean development history.




#Difficulties and Challenges
1. Setting up MongoDB with Laravel was one of the initial challenges I faced. The MongoDB driver was not identified, resulting in many failures. However, after reviewing the lecture materials and carefully following the setup instructions, I was able to fix these challenges and effectively integrate MongoDB as the application's database.
2. After configuring MongoDB, I encountered a session key duplication error. This problem developed because the session driver was originally set to database in the.env file. I fixed this by setting the SESSION_DRIVER to file, which removed the duplicate session key problem and stabilised the session management process.
3. After configuring MongoDB, I encountered a session key duplication error. This problem developed because the session driver was originally set to database in the.env file. I fixed this by setting the SESSION_DRIVER to file, which removed the duplicate session key problem and stabilised the session management process.

#Approaches
- Realized the issue was due to incorrect credentials in the .env file. Double-checked and corrected the details.
- Fixed by carefully reviewing the migration files and adding the necessary fields.
- Thoroughly tested each function and fixed issues by debugging with Laravel’s tools and checking log files.
- Used Git branches for different features and resolved conflicts by carefully reviewing changes.

### User Generated from the Seeder
Please use the below details to login:
| Name      | Email               | Role    | Password |
|-----------|---------------------|---------|----------
| admin     | admin@example.com     | admin   | password |
| author    | author@example.com   | author  | password|
| user      | user1@example.com       | user    | password|

### User Roles

| Role  | Description |
|-------|-------------|
| admin | Administrator with full access to user and blog management. |
| author | Author with access to blog management. |
| user | Regular user with read-only access to the blog. |

### Project Setup
1. **Clone the Repository**: Clone the GitHub repository to your local machine using:
    ```bash
    git clone 
    ```
2. **Navigate to Project Directory**: Change directory to the project folder:
    ```bash
    cd your-project-folder
    ```
3. **Switch Branch**: Change the branch:
    ```bash
    git checkout feature/auth-admin-panel
    ```
5. **Install Dependencies**: Install all necessary dependencies using Composer:
    ```bash
    composer install
    ```
6. **Copy .env File**: Create a copy of the `.env.example` file and rename it to `.env`:
    ```bash
    cp .env.example .env
    ```
7. **Generate Application Key**: Generate a new application key:
    ```bash
    php artisan key:generate
    ```
8. **Configure Database**: Update the `.env` file with your database details:
    ```env
	MONGO_DB_CONNECTION=mongodb
	MONGO_DB_HOST=127.0.0.1
	MONGO_DB_PORT=27017
	MONGO_DB_DATABASE=blog-application

    ```
9. **Run Migrations**: Run the database migrations to create the necessary tables:
    ```bash
    php artisan migrate
    ```
10. **Seed the Database**: Seed the database with initial data:
    ```bash
    php artisan db:seed
    ```
11. **Install Npm**: Install the npm packages:
    ```bash
    npm install
    npm run dev
    ```
11. **Serve the Application**: Start the local development server:
    ```bash
    php artisan serve
    ```



<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
