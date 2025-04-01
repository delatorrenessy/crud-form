# Basic PHP CRUD

This repository contains a simple PHP-based CRUD (Create, Read, Update, Delete) application. It demonstrates fundamental database operations using PHP and MySQL, making it a great starting point for beginners learning web development and database integration.

## Features
- Create, Read, Update, and Delete operations
- MySQL database integration
- Basic form handling and validation
- Simple and clean PHP code structure

## Requirements
- PHP 7.4 or later
- MySQL Database
- Apache Server (or use XAMPP, WAMP, etc.)

## Installation
1. Clone this repository:
   ```sh
   git clone https://github.com/your-username/basic-php-crud.git
   ```
2. Navigate to the project directory:
   ```sh
   cd basic-php-crud
   ```
3. Import the database:
   - Open **phpMyAdmin** or any MySQL database tool.
   - Create a new database (e.g., `crud_db`).
   - Import the provided `database.sql` file.
4. Update database credentials in `connection.php`:
   ```php
   $host = 'localhost';
   $user = 'root';
   $password = '';
   $database = 'crud_db';
   ```
5. Start your local server and access the project in your browser:
   ```
   http://localhost/basic-php-crud/
   ```

## Usage
- Open the application in your browser.
- Perform CRUD operations using the provided interface.

## Contributing
Feel free to fork this repository and submit pull requests for improvements!

## License
This project is open-source and available under the [MIT License](LICENSE).

